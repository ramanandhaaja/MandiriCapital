@extends('layout.mainlayout')
@use('Illuminate\Support\Facades\Storage')

@section('localcss')
    <link href="{{ asset('css/media.css') }}" rel="stylesheet">
@endsection

@section('container')
    {{-- Hero Section with Video Background --}}
    <div class="hero-section">
        <video autoplay muted loop playsinline class="video-background">
            <source src="{{ '/storage/' . $hero->image_path }}" type="video/mp4">
        </video>

        <div class="hero-content">
            <a href="#"><h1 class="hero-main-text">MEDIA</h1></a>

            {{-- Search and Filter Section --}}
            <div class="center-search">
                {{-- Search Box with Date Range --}}
                <div class="search-section">
                    <div class="search-filters-container">
                        <div class="search-input-container">
                            <input type="text" placeholder="Search..." class="search-input">
                            <i class="fas fa-search search-input-icon"></i>
                        </div>
                        <div class="date-range-container">
                            <div class="date-range-label">Pick Date Range</div>
                            <div class="date-range-inputs">
                                <input type="text" placeholder="MM/YY" class="date-input" id="start-date">
                                <span class="date-separator">|</span>
                                <input type="text" placeholder="MM/YY" class="date-input" id="end-date">
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Category Filter Links --}}
                <div class="category-filters">
                    <a href="#" class="filter-link active">All</a>
                    <a href="#" class="filter-link">News</a>
                    <a href="#" class="filter-link">Podcast</a>
                    <a href="#" class="filter-link">Blog</a>
                </div>
            </div>
        </div>
    </div>

    {{-- Media Grid Section --}}
    <div class="masonry-grid" data-route-pattern="{{ route('media.show', ':slug') }}">
        @foreach($posts as $index => $post)
            @php
                $isLargeCard = ($index === 0 || $index === 6);
                $defaultImage = asset("images/media/image" . ($index + 1) . ".png");
                $backgroundImage = $post->featured_image ? Storage::url($post->featured_image) : $defaultImage;
                $formattedDate = \Carbon\Carbon::parse($post->published_at)->format('F Y');
            @endphp

            <div class="card {{ $isLargeCard ? 'large' : '' }}">
                <a href="{{ route('media.show', $post->slug) }}" class="text-decoration-none">
                    <div class="background-image" style="background-image: url('{{ $backgroundImage }}');"></div>
                    <span class="category">{{ $post->categories->first()->name }}</span>
                    <div class="card-content">
                        <h2>{{ $post->title }}</h2>
                    </div>
                    <span class="date">{{ $formattedDate }}</span>
                </a>
            </div>
        @endforeach
    </div>

    {{-- Newsletter Section --}}
    <div class="newsletter-section">
        <div class="newsletter-container">
            <h2 class="newsletter-title">WE'D LOVE TO HEAR FROM YOU</h2>
            <a href="#">
                <img src="{{ asset('images/portfolio/letsconnect.png') }}"
                     alt="Lets Connect"
                     class="button-image center-image-newsletter">
            </a>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // DOM Elements
            const elements = {
                filterLinks: document.querySelectorAll('.filter-link'),
                masonry: document.querySelector('.masonry-grid'),
                routePattern: document.querySelector('.masonry-grid').dataset.routePattern
            };

            let currentFilter = 'all';

            // Event Listeners
            elements.filterLinks.forEach(link => {
                link.addEventListener('click', handleFilterClick);
            });

            // Filter click handler
            async function handleFilterClick(e) {
                e.preventDefault();
                updateActiveFilter(this);
                await fetchAndUpdatePosts(this.textContent.toLowerCase());
            }

            // Update active filter UI
            function updateActiveFilter(clickedLink) {
                elements.filterLinks.forEach(l => l.classList.remove('active'));
                clickedLink.classList.add('active');
            }

            // Fetch posts based on filter
            async function fetchAndUpdatePosts(filter) {
                try {
                    const response = await fetch(`/media/filter/${filter}`, {
                        headers: { 'X-Requested-With': 'XMLHttpRequest' }
                    });

                    if (!response.ok) throw new Error('Network response was not ok');

                    const posts = await response.json();
                    updatePosts(posts, filter);
                } catch (error) {
                    console.error('Error:', error);
                }
            }

            // Update posts in the DOM
            function updatePosts(posts, filter) {
                const postsHtml = posts.map((post, index) => {
                    const isLargeCard = filter === 'all' && (index === 0 || index === posts.length - 1);
                    const postUrl = elements.routePattern.replace(':slug', post.slug);
                    const defaultImage = `/images/media/image${index + 1}.png`;
                    const backgroundImage = post.featured_image ? '/storage/' + post.featured_image : defaultImage;
                    const date = new Date(post.published_at).toLocaleDateString('en-US', {
                        month: 'long',
                        year: 'numeric'
                    });

                    return `
                        <div class="card ${isLargeCard ? 'large' : ''}">
                            <a href="${postUrl}" class="text-decoration-none">
                                <div class="background-image" style="background-image: url('${backgroundImage}');"></div>
                                <span class="category">${post.categories[0]?.name || ''}</span>
                                <div class="card-content">
                                    <h2>${post.title}</h2>
                                </div>
                                <span class="date">${date}</span>
                            </a>
                        </div>
                    `;
                }).join('');

                elements.masonry.innerHTML = postsHtml;
            }
        });
    </script>
@endsection
