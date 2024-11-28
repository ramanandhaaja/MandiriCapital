@extends('layout.mainlayout')
@use('Illuminate\Support\Facades\Storage')


@section('localcss')
    <link href="{{ asset('css/media.css') }}" rel="stylesheet">
@endsection


@section('container')
    <div class="hero-section">
        <video autoplay muted loop playsinline class="video-background">
            <source src="{{ asset('images/media/media.mp4') }}" type="video/mp4">
        </video>
        <div class="hero-content">
            <a href="#">
                <img src="{{ asset('images/media/media.png') }}" alt="Media" class="center-image">
            </a>
            <div class="center-search">
                <div class="search-input-container">
                    <input type="text" placeholder="Search..." class="search-input">
                    <i class="fas fa-search search-input-icon"></i>
                </div>
                <div class="category-filters">
                    <a href="#" class="filter-link active">All</a>
                    <a href="#" class="filter-link">News</a>
                    <a href="#" class="filter-link">Podcast</a>
                </div>
            </div>
        </div>

    </div>

    {{-- Article Grid Section --}}

    <div class="masonry-grid">
        {{-- First Row --}}
        <div class="card large">
            <div class="background-image"
                style="background-image: url('{{ $posts[0]->featured_image ? Storage::url($posts[0]->featured_image) : asset('images/media/image1.png') }}');">
            </div>
            <span class="category">{{ $posts[0]->tags->first()->name }}</span>
            <div class="card-content">
                <h2>{{ $posts[0]->title }}</h2>
            </div>
            <span class="date">{{ \Carbon\Carbon::parse($posts[0]->published_at)->format('F Y') }}</span>
        </div>

        <div class="card">
            <div class="background-image"
                style="background-image: url('{{ $posts[1]->featured_image ? Storage::url($posts[1]->featured_image) : asset('images/media/image2.png') }}');">
            </div>
            <span class="category">{{ $posts[1]->tags->first()->name }}</span>
            <div class="card-content">
                <h2>{{ $posts[1]->title }}</h2>
            </div>
            <span class="date">{{ \Carbon\Carbon::parse($posts[1]->published_at)->format('F Y') }}</span>
        </div>

        {{-- Second Row --}}
        <div class="card">
            <div class="background-image"
                style="background-image: url('{{ $posts[2]->featured_image ? Storage::url($posts[2]->featured_image) : asset('images/media/image3.png') }}');">
            </div>
            <span class="category">{{ $posts[2]->tags->first()->name }}</span>
            <div class="card-content">
                <h2>{{ $posts[2]->title }}</h2>
            </div>
            <span class="date">{{ \Carbon\Carbon::parse($posts[2]->published_at)->format('F Y') }}</span>
        </div>

        <div class="card">
            <div class="background-image"
                style="background-image: url('{{ $posts[3]->featured_image ? Storage::url($posts[3]->featured_image) : asset('images/media/image4.png') }}');">
            </div>
            <span class="category">{{ $posts[3]->tags->first()->name }}</span>
            <div class="card-content">
                <h2>{{ $posts[3]->title }}</h2>
            </div>
            <span class="date">{{ \Carbon\Carbon::parse($posts[3]->published_at)->format('F Y') }}</span>
        </div>

        <div class="card">
            <div class="background-image"
                style="background-image: url('{{ $posts[4]->featured_image ? Storage::url($posts[4]->featured_image) : asset('images/media/image5.png') }}');">
            </div>
            <span class="category">{{ $posts[4]->tags->first()->name }}</span>
            <div class="card-content">
                <h2>{{ $posts[4]->title }}</h2>
            </div>
            <span class="date">{{ \Carbon\Carbon::parse($posts[4]->published_at)->format('F Y') }}</span>
        </div>

        {{-- Third Row --}}
        <div class="card">
            <div class="background-image"
                style="background-image: url('{{ $posts[5]->featured_image ? Storage::url($posts[5]->featured_image) : asset('images/media/image6.png') }}');">
            </div>
            <span class="category">{{ $posts[5]->tags->first()->name }}</span>
            <div class="card-content">
                <h2>{{ $posts[5]->title }}</h2>
            </div>
            <span class="date">{{ \Carbon\Carbon::parse($posts[5]->published_at)->format('F Y') }}</span>
        </div>

        <div class="card large">
            <div class="background-image"
                style="background-image: url('{{ $posts[6]->featured_image ? Storage::url($posts[6]->featured_image) : asset('images/media/image7.png') }}');">
            </div>
            <span class="category">{{ $posts[6]->tags->first()->name }}</span>
            <div class="card-content">
                <h2>{{ $posts[6]->title }}</h2>
            </div>
            <span class="date">{{ \Carbon\Carbon::parse($posts[6]->published_at)->format('F Y') }}</span>
        </div>
    </div>

    <div class="newsletter-section">
        <div class="newsletter-container">
            <h2 class="newsletter-title">WE'D LOVE TO HEAR FROM YOU</h2>

            <a href="#">
                <img src="{{ asset('images/portfolio/letsconnect.png') }}" alt="Lets Connect"
                    class="button-image center-image-newsletter">
            </a>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const filterLinks = document.querySelectorAll('.filter-link');
            const masonry = document.querySelector('.masonry-grid');
            let currentFilter = 'all';

            filterLinks.forEach(link => {
                link.addEventListener('click', async function(e) {
                    e.preventDefault();

                    // Remove active class from all links
                    filterLinks.forEach(l => l.classList.remove('active'));

                    // Add active class to clicked link
                    this.classList.add('active');

                    // Get the filter value
                    currentFilter = this.textContent.toLowerCase();

                    try {
                        const response = await fetch(`/media/filter/${currentFilter}`, {
                            headers: {
                                'X-Requested-With': 'XMLHttpRequest'
                            }
                        });

                        if (!response.ok) throw new Error('Network response was not ok');

                        const posts = await response.json();
                        updatePosts(posts, currentFilter);
                    } catch (error) {
                        console.error('Error:', error);
                    }
                });
            });

            function updatePosts(posts, filter) {
                // Create HTML for each post
                const postsHtml = posts.map((post, index) => {
                    // Only add large class if filter is 'all' and post is first or last
                    const isLarge = filter === 'all' && (index === 0 || index === 6) ? 'large' : '';
                    return `
                        <div class="card ${isLarge}">
                            <div class="background-image"
                                style="background-image: url('${post.featured_image ? '/storage/' + post.featured_image : '/images/media/image${index + 1}.png'}');">
                            </div>
                            <span class="category">${post.tags[0]?.name || ''}</span>
                            <div class="card-content">
                                <h2>${post.title}</h2>
                            </div>
                            <span class="date">${new Date(post.published_at).toLocaleDateString('en-US', { month: 'long', year: 'numeric' })}</span>
                        </div>
                    `;
                }).join('');

                // Update the masonry grid
                masonry.innerHTML = postsHtml;

                // Update grid layout based on filter
                if (filter === 'all') {
                    masonry.style.gridTemplateColumns = 'repeat(3, 1fr)';
                } else {
                    masonry.style.gridTemplateColumns = 'repeat(3, 1fr)';
                }
            }
        });
    </script>
@endsection
