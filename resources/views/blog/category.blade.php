{{-- resources/views/blog/category.blade.php --}}
@extends('blog.layout')

@section('title', $category->name . ' - Blog')

@section('content')
<div class="mb-8">
    <h1 class="text-3xl font-bold">Category: {{ $category->name }}</h1>
    @if($category->description)
        <p class="text-gray-600 mt-2">{{ $category->description }}</p>
    @endif
</div>

<div class="space-y-8">
    @foreach($posts as $post)
        <article class="bg-white rounded-lg shadow-md overflow-hidden">
            @if($post->featured_image)
                <img src="{{ asset('storage/' . $post->featured_image) }}"
                     alt="{{ $post->title }}"
                     class="w-full h-48 object-cover">
            @endif

            <div class="p-6">
                <h2 class="text-2xl font-bold mb-2">
                    <a href="{{ route('blog.show', $post->slug) }}"
                       class="text-gray-900 hover:text-blue-600">
                        {{ $post->title }}
                    </a>
                </h2>

                <div class="text-sm text-gray-500 mb-4">
                    By {{ $post->user->name }} |
                    {{ $post->published_at->format('F j, Y') }}
                </div>

                @if($post->excerpt)
                    <p class="text-gray-600">{{ $post->excerpt }}</p>
                @endif
            </div>
        </article>
    @endforeach
</div>

<div class="mt-8">
    {{ $posts->links() }}
</div>
@endsection
