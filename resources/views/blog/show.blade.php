{{-- resources/views/blog/show.blade.php --}}
@extends('blog.layout')

@section('title', $post->title)
@section('meta_description', $post->meta_description ?? $post->excerpt)

@section('content')
<article class="max-w-4xl mx-auto">
    <header class="mb-8">
        <h1 class="text-4xl font-bold mb-4">{{ $post->title }}</h1>

        <div class="flex items-center text-gray-500 mb-4">
            <span>By {{ $post->user->name }}</span>
            <span class="mx-2">•</span>
            <time>{{ $post->published_at->format('F j, Y') }}</time>
        </div>

        <div class="flex gap-2 mb-6">
            @foreach($post->categories as $category)
                <a href="{{ route('blog.category', $category->slug) }}"
                   class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm text-gray-700">
                    {{ $category->name }}
                </a>
            @endforeach
        </div>

        @if($post->featured_image)
            <img src="{{ asset('storage/' . $post->featured_image) }}"
                 alt="{{ $post->title }}"
                 class="w-full h-96 object-cover rounded-lg">
        @endif
    </header>

    <div class="prose max-w-none">
        {!! $post->content !!}
    </div>

    @if($relatedPosts->count() > 0)
        <div class="mt-12">
            <h2 class="text-2xl font-bold mb-6">Related Posts</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                @foreach($relatedPosts as $relatedPost)
                    <div class="bg-white rounded-lg shadow-md overflow-hidden">
                        @if($relatedPost->featured_image)
                            <img src="{{ asset('storage/' . $relatedPost->featured_image) }}"
                                 alt="{{ $relatedPost->title }}"
                                 class="w-full h-48 object-cover">
                        @endif

                        <div class="p-4">
                            <h3 class="font-bold mb-2">
                                <a href="{{ route('blog.show', $relatedPost->slug) }}"
                                   class="text-gray-900 hover:text-blue-600">
                                    {{ $relatedPost->title }}
                                </a>
                            </h3>
                            <div class="text-sm text-gray-500">
                                {{ $relatedPost->published_at->format('F j, Y') }}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endif
</article>
@endsection
