<?php

namespace App\Http\Controllers;

use App\Models\BlogCategory;
use App\Models\BlogPost;
use App\Models\BlogTag;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('pages.home');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function media()
    {
        $posts = BlogPost::with(['user', 'categories', 'tags'])
            ->where('status', 'published')
            ->whereNotNull('published_at')
            ->whereHas('categories', function($query) {
                $query->where('name', 'Media');
            })
            ->whereHas('tags', function($query) {
                $query->whereIn('name', ['News', 'Podcast']);
            })
            ->orderBy('published_at', 'desc')
            ->paginate(10);

        $categories = BlogCategory::where('is_active', true)->get();
        $tags = BlogTag::whereIn('name', ['News', 'Podcast'])->get();

        return view('pages.media', compact('posts', 'categories', 'tags'));
    }

    public function portfolio()
    {
        return view('pages.portfolio');
    }

    public function funding()
    {
        return view('pages.funding');
    }

    public function report()
    {
        return view('pages.report');
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

    public function mediaFilter($tag)
    {
        $query = BlogPost::with(['user', 'categories', 'tags'])
            ->whereHas('categories', function ($query) {
                $query->where('name', 'Media');
            });

        if ($tag !== 'all') {
            $query->whereHas('tags', function ($query) use ($tag) {
                $query->where('name', ucfirst($tag));
            });
        }

        $posts = $query->orderBy('published_at', 'desc')
            ->take(7)
            ->get();

        return response()->json($posts);
    }
}
