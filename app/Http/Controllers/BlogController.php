<?php

// app/Http/Controllers/BlogController.php
namespace App\Http\Controllers;

use App\Models\BlogPost;
use App\Models\BlogCategory;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {

        $posts = BlogPost::with(['user', 'categories'])
            ->where('status', 'published')
            ->whereNotNull('published_at')
            ->orderBy('published_at', 'desc')
            ->paginate(10);


        //$posts = BlogPost::all();
        $categories = BlogCategory::where('is_active', true)->get();

        return view('blog.index', compact('posts', 'categories'));
    }

    public function show($slug)
    {
        $post = BlogPost::with(['user', 'categories'])
            ->where('slug', $slug)
            ->where('status', 'published')
            ->whereNotNull('published_at')
            ->firstOrFail();

        $relatedPosts = BlogPost::with(['user'])
            ->where('id', '!=', $post->id)
            ->where('status', 'published')
            ->whereNotNull('published_at')
            ->limit(3)
            ->get();

        return view('blog.show', compact('post', 'relatedPosts'));
    }

    public function byCategory($slug)
    {
        $category = BlogCategory::where('slug', $slug)
            ->where('is_active', true)
            ->firstOrFail();

        $posts = BlogPost::with(['user', 'categories'])
            ->whereHas('categories', function($query) use ($slug) {
                $query->where('slug', $slug);
            })
            ->where('status', 'published')
            ->whereNotNull('published_at')
            ->orderBy('published_at', 'desc')
            ->paginate(10);

        return view('blog.category', compact('category', 'posts'));
    }
}
