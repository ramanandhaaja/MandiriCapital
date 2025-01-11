<?php

namespace App\Http\Controllers;

// Model Imports
use App\Models\BlogCategory;
use App\Models\BlogPost;
use App\Models\BlogTag;
use App\Models\HeroSection;
use App\Models\HomeArticle;
use App\Models\Platform;
use App\Models\Portfolio;
use App\Models\PortfolioCategory;
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

        $article = HomeArticle::take(3)->get();

        return view('pages.home', compact('hero', 'article'));
    }

    public function about()
    {
        $hero = HeroSection::whereHas('category', function($query) {
            $query->where('name', 'Our Identity');
        })->first();

        $ecosystem = Platform::with('category')
            ->orderBy('published_date', 'desc');

        $ecosystemList = $ecosystem->get();

        return view('pages.about', compact('hero', 'ecosystemList'));
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

        $posts = BlogPost::with(['user', 'categories', 'tags'])
            ->where('status', 'published')
            ->whereNotNull('published_at')
            ->whereHas('categories', function($query) {
                $query->whereIn('name', ['News', 'Podcast']);
            })
            ->orderBy('published_at', 'desc')
            ->paginate(10);

        $categories = BlogCategory::where('is_active', true)->get();
        $tags = BlogTag::whereIn('name', ['News', 'Podcast'])->get();

        return view('pages.media', compact('hero', 'posts', 'categories', 'tags'));
    }

    public function mediashow($slug)
    {
        $post = BlogPost::where('slug', $slug)->firstOrFail();
        return view('pages.media-show', compact('post'));
    }

    public function portfolio()
    {
        $hero = HeroSection::whereHas('category', function($query) {
            $query->where('name', 'Portfolio');
        })->first();

        $portfolios = Portfolio::with('category')
            ->orderBy('year_invested');

        $portfolio_categories = PortfolioCategory::all();

        return view('pages.portfolio', compact('hero', 'portfolios', 'portfolio_categories'));

    }

    public function portfolioshow($slug)
    {
        $portfolio = Portfolio::where('slug', $slug)->firstOrFail();
        return view('pages.portfolio-show', compact('portfolio'));
    }

    public function platform()
    {
        $hero = HeroSection::whereHas('category', function($query) {
            $query->where('name', 'Platform');
        })->first();

        $posts = BlogPost::all();

        $categories = BlogCategory::where('is_active', true)->get();

        return view('pages.platform', compact('hero', 'posts', 'categories'));
    }

    public function platformshow($slug)
    {
        $post = BlogPost::where('slug', $slug)->firstOrFail();
        return view('pages.platform-show', compact('post'));
    }


    public function report()
    {
        $hero = HeroSection::whereHas('category', function($query) {
            $query->where('name', 'Publication');
        })->first();

        $publications = Publication::with('category')
            ->orderBy('published_date')
            ->paginate(10);

        $publication_categories = PublicationCategory::all();

        return view('pages.report', compact('hero', 'publications', 'publication_categories'));
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
        }

        $posts = $query->orderBy('published_at', 'desc')
            ->take(7)
            ->get();

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
