<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;

// Model Imports

use App\Models\AboutMandiriEcosystem;
use App\Models\AboutMandiriEcosystemCategory;
use App\Models\AboutMCIIntro;
use App\Models\AboutPrioritySector;
use App\Models\AboutTeam;
use App\Models\AboutTeamCategory;
use App\Models\BlogCategory;
use App\Models\BlogPost;
use App\Models\BlogTag;
use App\Models\HeroSection;
use App\Models\HeroSectionSubCategory;
use App\Models\HomeArticle;
use App\Models\HomeProfileCompany;
use App\Models\Platform;
use App\Models\PlatformArticle;
use App\Models\PlatformCategory;
use App\Models\PlatformCounter;
use App\Models\PlatformValueCreation;
use App\Models\Portfolio;
use App\Models\PortfolioArticle;
use App\Models\PortfolioArticleSub;
use App\Models\PortfolioCategory;
use App\Models\PortfolioFundingArticle;
use App\Models\PortfolioFundingArticleSub;
use App\Models\Publication;
use App\Models\PublicationCategory;
use App\Models\PublicationEmailDownload;
use App\Models\PublicationEmailRegistered;

use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Display the home page
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $hero = HeroSection::whereHas('category', function($query) {
            $query->where('name', 'Home');
        })->first();

        $articles = HomeArticle::take(3)->get();

        $testimonials = HomeProfileCompany::get();

        return view('pages.home', compact('hero', 'articles', 'testimonials'));
    }

    public function about()
    {
        $hero = HeroSection::whereHas('category', function($query) {
            $query->where('slug', 'our-identity');
        })->first();

        $menuSubCategory = HeroSectionSubCategory::whereHas('category', function($query) {
            $query->where('slug', 'our-identity');
        })->get();

        // Get the specific about-mci subcategory
        $aboutMciHeadline = HeroSectionSubCategory::where('slug', 'about-mci')->first();

        $mciintro = AboutMCIIntro::first();

        $prioritySectors = AboutPrioritySector::get();

        // Group ecosystem list by their group field

        $ecosystemHeadline = AboutMandiriEcosystem::where('is_headline', true)->get();

        $ecosystemListCategory = AboutMandiriEcosystemCategory::orderBy('order')->get();
        $ecosystemList = AboutMandiriEcosystem::all();

        $aboutTeamCategory = AboutTeamCategory::orderBy('order')->get();
        $teamMembers = AboutTeam::all();

        return view('pages.about', compact('hero', 'menuSubCategory', 'aboutMciHeadline', 'mciintro', 'ecosystemHeadline','ecosystemListCategory','ecosystemList', 'prioritySectors', 'aboutTeamCategory', 'teamMembers'));
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function media()
    {
        $hero = HeroSection::whereHas('category', function($query) {
            $query->where('name', 'Media');
        })->first();

        $menuSubCategory = HeroSectionSubCategory::whereHas('category', function($query) {
            $query->where('slug', 'media');
        })->get();
/*
        // Get all active categories first
        $categories = BlogCategory::where('is_active', true)->get();
        $categoryNames = $categories->pluck('name')->toArray();

        $posts = BlogPost::with(['user', 'categories', 'tags'])
            ->where('status', 'published')
            ->whereNotNull('published_at')
            ->whereHas('categories', function($query) use ($categoryNames) {
                $query->whereIn('name', $categoryNames);
            })
            ->orderBy('published_at', 'desc');




        // Debug output
        //echo "<pre>";
        //print_r($posts->toArray());
        //echo "</pre>";
        //die();  // This will stop execution here to show the output

        $tags = BlogTag::whereIn('name', $categoryNames)->get();
        */


        $query = BlogPost::with(['user', 'categories'])
            ->where('status', 'published')
            ->whereNotNull('published_at');

        // If category is provided, filter by it
        if (isset($category)) {
            $query->whereHas('categories', function ($query) use ($category) {
                $query->where('name', ucfirst($category));
            });
        }

        $posts = $query->orderBy('published_at', 'desc')->take(7)->get();

        return view('pages.media', compact('hero', 'menuSubCategory','posts'));
    }

    public function mediashow($slug)
    {
        $post = BlogPost::where('slug', $slug)->firstOrFail();
        return view('pages.media-show', compact('post'));
    }

    public function portfolio()
    {
        $hero = HeroSection::whereHas('category', function($query) {
            $query->where('slug', 'portfolio');
        })->first();

        $menuSubCategory = HeroSectionSubCategory::whereHas('category', function($query) {
            $query->where('slug', 'portfolio');
        })->get();

        $portfolioArticlesList = PortfolioArticle::get();
        $portfolioArticleSubList = PortfolioArticleSub::get();

        $portfolioFundingArticlesList = PortfolioFundingArticle::get();
        $portfolioFundingArticleSubList = PortfolioFundingArticleSub::get();

        $portfolioQuery = Portfolio::with('category')
            ->orderBy('order', 'asc');

        $portfolios = $portfolioQuery->get();

        $categories = PortfolioCategory::all();
        $selectedCategory = null;

        return view('pages.portfolio', compact('hero', 'menuSubCategory','portfolios', 'categories', 'selectedCategory', 'portfolioArticlesList', 'portfolioArticleSubList','portfolioFundingArticlesList', 'portfolioFundingArticleSubList'));
    }

    public function portfolioshow($slug)
    {
        $portfolio = Portfolio::where('slug', $slug)->firstOrFail();
        return view('pages.portfolio-show', compact('portfolio'));
    }

    public function portfolioShowFunding($title)
    {
        //$portfolioFunding = PortfolioFundingArticleSub::where('id', $id)->firstOrFail();
        if ($title=="Balance Sheet Fund") {
            return view('pages.portfolio-show-funding-balancesheet');
        } elseif ($title=="Merah Putih Fund (MPF)") {
            return view('pages.portfolio-show-funding-mpf');
        }elseif ($title=="Indonesia Impact Fund (IIF)") {
            return view('pages.portfolio-show-funding-iif');
        }elseif ($title=="BTN Fund") {
            return view('pages.portfolio-show-funding-btn');
        }


    }

    public function platform()
    {
        $hero = HeroSection::whereHas('category', function($query) {
            $query->where('slug', 'platform');
        })->first();

        $menuSubCategory = HeroSectionSubCategory::whereHas('category', function($query) {
            $query->where('slug', 'platform');
        })->get();

        $counters = PlatformCounter::all();

        $platformFocusCategory = PlatformCategory::orderBy('order')->get();
        $platformFocusList = Platform::all();

        $platformArticle = PlatformArticle::all();

        $valueCreationList = PlatformValueCreation::all();

        return view('pages.platform', compact('hero', 'menuSubCategory','counters','platformFocusCategory','platformFocusList', 'valueCreationList', 'platformArticle'));
    }

    public function platformshow($slug)
    {
        if ($slug=="xponent") {
            return view('pages.platform-show-xponent');
        } elseif ($slug=="yaxis") {
            return view('pages.platform-show-yaxis');
        }elseif ($slug=="zenith") {
            return view('pages.platform-show-zenith');
        }
    }



    public function platformapply()
    {
        return view('pages.platform-apply');
    }


    public function report()
    {
        $hero = HeroSection::whereHas('category', function($query) {
            $query->where('name', 'publication');
        })->first();

        $menuSubCategory = HeroSectionSubCategory::whereHas('category', function($query) {
            $query->where('slug', 'publication');
        })->get();

        $publications = Publication::with('category')
            ->orderBy('published_date')
            ->paginate(10);

        $publication_categories = PublicationCategory::all();

        return view('pages.report', compact('hero','menuSubCategory', 'publications', 'publication_categories'));
    }

    public function reportshow($slug)
    {
        $publication = Publication::where('slug', $slug)->firstOrFail();
        return view('pages.report-show', compact('publication'));
    }

    public function reportdownload(Request $request, Publication $publication)
    {
        // Validate the request
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'company_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
        ]);


        PublicationEmailDownload::create([
            'name' => $validated['name'],
            'company_name' => $validated['company_name'],
            'email' => $validated['email'],
        ]);

        return redirect()->back()->with('success', 'Thank you for your interest, we will contact you very soon!');
        /*
        // Check if email already exists
        $existingDownload = PublicationEmailDownload::where('email', $validated['email'])->first();

        // If the email exists, allow download



        // Check if publication is a Whitepaper
        if ($publication->category->name === 'Whitepaper') {

            $existingDownload = PublicationEmailRegistered::where('email', $validated['email'])->first();
            if ($existingDownload) {
                return response()->download(public_path('images/report/download.png'));
            }
                return redirect()->back()->with('error', 'This content is not available for download.');


        }else{
        // else, store the email in the database
            PublicationEmailDownload::create([
                'name' => $validated['name'],
                'company_name' => $validated['company_name'],
                'email' => $validated['email'],
            ]);
            return response()->download(public_path('images/report/download.png'));
        }

        // If not a whitepaper, redirect back with error
        return redirect()->back()->with('error', 'This content is not available for download.');
        */
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string'
        ]);

        // Process contact form
        // Add your logic here

        return redirect()->route('contact')->with('success', 'Message sent successfully!');
    }

    public function aboutFilter($category)
    {

        $query = Platform::with('category')
            ->orderBy('published_date', 'desc');

        if ($category !== 'all') {
            $query->whereHas('category', function ($query) use ($category) {
                $query->where('name', ucfirst($category));
            });
        }

        $about = $query->get();

        return response()->json($about);
    }

    public function mediaFilter($category)
    {
        $query = BlogPost::with(['user', 'categories'])
            ->where('status', 'published')
            ->whereNotNull('published_at');

        if ($category !== 'all') {
            $query->whereHas('categories', function ($query) use ($category) {
                $query->where('name', ucfirst($category));
            });
        } else {
            $query->take(7); // Limit to 7 items when category is 'all'
        }

        $posts = $query->orderBy('published_at', 'desc')->get();

        return response()->json($posts);
    }

    public function reportFilter($category)
    {
        $query = Publication::with('category')
            ->orderBy('published_date', 'desc');

        if ($category !== 'all') {
            $query->whereHas('category', function ($query) use ($category) {
                $query->where('name', ucfirst($category));
            });
        }

        $publications = $query->get();

        return response()->json($publications);
    }

    public function platformFilter($category)
    {
        $query = Platform::with('category')
            ->orderBy('published_date', 'desc');

        if ($category !== 'all') {
            $query->whereHas('category', function ($query) use ($category) {
                $query->where('name', ucfirst($category));
            });
        }

        $platforms = $query->get();

        return response()->json($platforms);
    }

    public function portfolioFilter($category)
    {
        $query = Portfolio::with('category')
            ->orderBy('year_invested', 'desc');

        if ($category !== 'all') {
            $query->whereHas('category', function ($query) use ($category) {
                $query->where('name', ucfirst($category));
            });
        }

        $portfolios = $query->get();

        return response()->json($portfolios);
    }
}
