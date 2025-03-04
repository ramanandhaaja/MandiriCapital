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
use App\Models\AboutTeamHeadline;
use App\Models\BlogCategory;
use App\Models\BlogPost;
use App\Models\BlogTag;
use App\Models\HeroMaster;
use App\Models\HeroSection;
use App\Models\HeroSectionCategory;
use App\Models\HeroSectionSubCategory;
use App\Models\HomeArticle;
use App\Models\HomeHeadline;
use App\Models\HomeProfileCompany;
use App\Models\Platform;
use App\Models\PlatformArticle;
use App\Models\PlatformCategory;
use App\Models\PlatformCounter;
use App\Models\PlatformValueCreation;
use App\Models\PlatformValueCreationXponent;
use App\Models\PlatformValueCreationYaxis;
use App\Models\PlatformValueCreationZenith;
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
use App\Mail\TestEmail;
use App\Models\Contact;
use App\Models\ContactEmail;
use App\Models\CustomerCare;
use App\Models\CustomerCareHow;
use App\Models\HomeEmailInvestor;
use App\Models\HomeEmailStartup;
use App\Models\PlatformEmail;
use App\Models\PlatformEmailZenith;
use App\Models\PortfolioEmailInvestor;
use App\Models\PortfolioEmailStartup;
use App\Models\PrivacyPolicy;
use App\Models\PublicationEmail;
use Illuminate\Support\Facades\Mail;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function __construct()
    {
        // Menu data is now shared via AppServiceProvider
    }

    /**
     * Display the home page
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $hero = HeroSection::where('hero_section_category_id', '1')->first();

        $articles = HomeArticle::take(3)->get();

        $articlesHeadlineList = HomeHeadline::all();

        $testimonials = HomeProfileCompany::get();

        $home_email_startup = HomeEmailStartup::first();
        $home_email_investor = HomeEmailInvestor::first();

        return view('pages.home', compact('hero', 'articles', 'articlesHeadlineList', 'testimonials', 'home_email_startup', 'home_email_investor'));
    }

    public function about()
    {
        $hero = HeroSection::where('hero_section_category_id', '2')->first();


        $menuSubCategory = HeroSectionSubCategory::whereHas('category', function($query) {
            $query->where('slug', 'our-identity');
        })->get();

        $mciintro = AboutMCIIntro::first();

        $prioritySectors = AboutPrioritySector::get();

        // Group ecosystem list by their group field

        $ecosystemHeadline = AboutMandiriEcosystem::where('is_headline', true)->get();

        $ecosystemListCategory = AboutMandiriEcosystemCategory::orderBy('order')->get();
        $ecosystemList = AboutMandiriEcosystem::where('is_headline', false)->get();


        $aboutTeamHeadline = AboutTeamHeadline::all();

        $aboutTeamCategory = AboutTeamCategory::orderBy('order')->get();
        $teamMembers = AboutTeam::all();

        return view('pages.about', compact('hero', 'menuSubCategory', 'mciintro', 'ecosystemHeadline','ecosystemListCategory','ecosystemList', 'prioritySectors','aboutTeamHeadline', 'aboutTeamCategory', 'teamMembers', 'aboutTeamHeadline'));
    }

    public function contact()
    {
        $contact = Contact::first();
        $contact_email = ContactEmail::first();
        return view('pages.contact', compact('contact', 'contact_email'));
    }

    public function media()
    {
        $hero = HeroSection::where('hero_section_category_id', '5')->first();

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


        $postCategory = BlogCategory::get();

        $posts = BlogPost::with(['categories'])
            ->where('status', 'published')
            ->whereNotNull('published_at')
            ->orderBy('published_at', 'desc')
            ->take(7)
            ->get();

        return view('pages.media', compact('hero', 'menuSubCategory','posts'));
    }

    public function mediashow($slug)
    {
        $post = BlogPost::with('categories')
            ->where('slug', $slug)
            ->firstOrFail();

        // Get previous post
        $previousPost = BlogPost::where('published_at', '<', $post->published_at)
            ->where('status', 'published')
            ->orderBy('published_at', 'desc')
            ->first(['id', 'title', 'slug', 'front_image']);

        // Get next post
        $nextPost = BlogPost::where('published_at', '>', $post->published_at)
            ->where('status', 'published')
            ->orderBy('published_at', 'asc')
            ->first(['id', 'title', 'slug', 'front_image']);

        return view('pages.media-show', compact('post', 'previousPost', 'nextPost'));
    }

    public function portfolio()
    {
        $hero = HeroSection::where('hero_section_category_id', '3')->first();


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

        $portfolio_email_startup = PortfolioEmailStartup::first();
        $portfolio_email_investor = PortfolioEmailInvestor::first();

        return view('pages.portfolio', compact('hero', 'menuSubCategory','portfolios', 'categories', 'selectedCategory', 'portfolioArticlesList', 'portfolioArticleSubList','portfolioFundingArticlesList', 'portfolioFundingArticleSubList', 'portfolio_email_startup', 'portfolio_email_investor'));
    }

    public function portfolioshow($slug)
    {
        $portfolio = Portfolio::where('slug', $slug)->firstOrFail();
        return view('pages.portfolio-show', compact('portfolio'));
    }

    public function portfolioShowFunding($id)
    {
        $portfolioFunding = PortfolioFundingArticleSub::where('id', $id)->firstOrFail();

        $title = $portfolioFunding->title;

        return view('pages.portfolio-show-funding', compact('portfolioFunding', 'title'));

        /*
        if ($title=="Balance Sheet Fund") {
            return view('pages.portfolio-show-funding-balancesheet');
        } elseif ($title=="Merah Putih Fund (MPF)") {
            return view('pages.portfolio-show-funding-mpf');
        }elseif ($title=="Indonesia Impact Fund (IIF)") {
            return view('pages.portfolio-show-funding-iif');
        }elseif ($title=="BTN Fund") {
            return view('pages.portfolio-show-funding-btn');
        }


        */
    }

    public function platform()
    {
        $hero = HeroSection::where('hero_section_category_id', '4')->first();

        $menuSubCategory = HeroSectionSubCategory::whereHas('category', function($query) {
            $query->where('slug', 'platform');
        })->get();

        $counters = PlatformCounter::all();

        $platformFocusCategory = PlatformCategory::orderBy('order')->get();
        $platformFocusList = Platform::all();

        $platformArticle = PlatformArticle::all();

        $valueCreationList = PlatformValueCreation::all();

        $platform_email = PlatformEmail::first();

        return view('pages.platform', compact('hero', 'menuSubCategory','counters','platformFocusCategory','platformFocusList', 'valueCreationList', 'platformArticle', 'platform_email'));
    }

    public function platformshow($slug)
    {

        if ($slug=="xponent") {
            $PlatformValueCreationXponent = PlatformValueCreationXponent::first();
            return view('pages.platform-show-xponent', compact('PlatformValueCreationXponent'));
        } elseif ($slug=="yaxis") {
            $PlatformValueCreationYaxis = PlatformValueCreationYaxis::first();
            return view('pages.platform-show-yaxis', compact('PlatformValueCreationYaxis'));
        }elseif ($slug=="zenith") {
            $PlatformValueCreationZenith = PlatformValueCreationZenith::first();
            return view('pages.platform-show-zenith', compact('PlatformValueCreationZenith'));
        }else{
            abort(404);
        }
    }

    public function platformapply()
    {
        $platform_email_zenith = PlatformEmailZenith::first();
        return view('pages.platform-apply', compact('platform_email_zenith'));
    }


    public function report()
    {
        $hero = HeroSection::where('hero_section_category_id', '6')->first();


        $menuSubCategory = HeroSectionSubCategory::whereHas('category', function($query) {
            $query->where('slug', 'publication');
        })->get();

        $publications = Publication::with('category')
            ->orderBy('published_date', 'desc')
            ->paginate(10);

        $publication_categories = PublicationCategory::all();

        return view('pages.report', compact('hero','menuSubCategory', 'publications', 'publication_categories'));
    }

    public function reportshow($slug)
    {
        $publication = Publication::where('slug', $slug)->firstOrFail();
        $publication_email = PublicationEmail::first();

        return view('pages.report-show', compact('publication', 'publication_email'));
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
                $query->where('name', $category);
            });
        }

        $about = $query->get();

        return response()->json($about);
    }

    public function mediaFilter($category)
    {
        $query = BlogPost::with(['categories' => function($query) {
            $query->select(['id', 'name', 'slug']);
        }])
            ->where('status', 'published')
            ->whereNotNull('published_at');

        if ($category !== 'all') {
            $query->whereHas('categories', function ($query) use ($category) {
                $query->where('slug', $category);
            });
        } else {
            $query->take(7);
        }

        $posts = $query->orderBy('published_at', 'desc')->get();

        return response()->json($posts);
    }

    public function reportFilter($category)
    {
        Log::info('Filtering with category: ' . $category); // Debug category

        $query = Publication::with(['category' => function($query) {
            $query->select(['id', 'name', 'slug']);
        }])->orderBy('published_date', 'desc');

        if ($category !== 'all-report') {
            $query->whereHas('category', function ($query) use ($category) {
                $query->where('slug', $category);
            });
        }

        $publications = $query->get();
        Log::info('Found publications: ' . $publications->count()); // Debug result count

        return response()->json($publications);
    }

    public function platformFilter($category)
    {
        $query = Platform::with('category')
            ->orderBy('published_date', 'desc');

        if ($category !== 'all') {
            $query->whereHas('category', function ($query) use ($category) {
                $query->where('name', $category);
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
                $query->where('name', $category);
            });
        }

        $portfolios = $query->get();

        return response()->json($portfolios);
    }

    public function customerCare()
    {
        $hero = HeroSection::where('hero_section_category_id', '8')->first();


        $customerCareComplaint = CustomerCare::first();
        $customerCareHow = CustomerCareHow::first();
        return view('pages.customer-care', compact('customerCareComplaint', 'customerCareHow', 'hero'));
    }

    public function privacy()
    {
        $hero = HeroSection::where('hero_section_category_id', '7')->first();


        $privacyPolicies = PrivacyPolicy::all();

        return view('pages.portfolio-show-privacy', compact('privacyPolicies', 'hero'));
    }
}
