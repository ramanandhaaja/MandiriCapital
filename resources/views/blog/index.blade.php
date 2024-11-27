{{-- resources/views/blog/index.blade.php --}}
@extends('blog.layout')

@section('title', 'Blog')

@section('content')
<div class="grid grid-cols-1 lg:grid-cols-4 gap-8">
    <!-- Main Content -->
    <div class="lg:col-span-3">
        <h1 class="text-3xl font-bold mb-8">Latest Posts</h1>

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
                            <p class="text-gray-600 mb-4">{{ $post->excerpt }}</p>
                        @endif

                        <div class="flex gap-2">
                            @foreach($post->categories as $category)
                                <a href="{{ route('blog.category', $category->slug) }}"
                                   class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm text-gray-700">
                                    {{ $category->name }}
                                </a>
                            @endforeach
                        </div>
                    </div>
                </article>
            @endforeach
        </div>

        <div class="mt-8">
            {{ $posts->links() }}
        </div>
    </div>

    <!-- Sidebar -->
    <div class="lg:col-span-1">
        <div class="bg-white rounded-lg shadow-md p-6">
            <h2 class="text-xl font-bold mb-4">Categories</h2>
            <ul class="space-y-2">
                @foreach($categories as $category)
                    <li>
                        <a href="{{ route('blog.category', $category->slug) }}"
                           class="text-gray-700 hover:text-blue-600">
                            {{ $category->name }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection
