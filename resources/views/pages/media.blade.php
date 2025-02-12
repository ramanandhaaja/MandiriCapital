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
            <a href="#"><h1 class="hero-main-text">{{ $hero->title }}</h1></a>

            {{-- Search and Filter Section --}}
            <div class="center-search">
                {{-- Search Box with Date Range --}}
                <div class="search-section" style="visibility: hidden;">
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

                {{-- SUB MENU  --}}
                <nav class="category-filters">
                    @foreach ($menuSubCategory as $menuSubCat)
                        <a href="#" class="filter-link {{ $loop->first ? 'active' : '' }}" data-filter="{{ $menuSubCat->slug }}">{{ $menuSubCat->getTranslation('name', session('locale', 'en')) }}</a>
                    @endforeach
                </nav>
            </div>
        </div>
    </div>

    {{-- Media Grid Section --}}
    <div class="masonry-grid" data-route-pattern="{{ route('media.show', ':slug') }}">
        @foreach($posts as $index => $post)
            @php
                $isLargeCard = ($index === 0 || $index === 6);
                $defaultImage = asset("images/media/image1.png");
                $backgroundImage = $post->front_image ? Storage::url($post->front_image) : $defaultImage;
                $formattedDate = \Carbon\Carbon::parse($post->published_at)->translatedFormat('d F Y');
                $category = $post->categories->first();
            @endphp

            <div class="card {{ $isLargeCard ? 'large' : '' }}">
                <a href="{{ route('media.show', $post->slug) }}" class="text-decoration-none">
                    <div class="card-wrapper">
                        @if($category && $category->slug === 'podcast')
                            <div class="guest-header">
                                <div class="guest-info">
                                    <div class="guest-image">
                                        <img src="{{ $post->author_image ?? asset('images/media/author.png') }}"
                                             alt="{{ $post->author_name ?? 'Guest' }}">
                                    </div>
                                    <div class="guest-details">
                                        <div class="guest-label">NEW PODCAST</div>
                                    <div class="guest-name">{{ $post->author_name ?? '' }}</div>
                                    <div class="guest-position">{{ $post->author_title ?? '' }}</div>
                                    </div>
                                </div>
                            </div>
                        @endif
                        @if($category && $category->slug === 'blog')
                            <div class="blog-header">
                                <div class="blog-info">
                                    <div class="blog-image">
                                    <img src="{{ $post->author_image ?? asset('images/media/author.png') }}" alt="Author Name">
                                    </div>
                                    <div class="blog-details">
                                        <div class="blog-label">Author</div>
                                    <div class="blog-name">{{ $post->author_name ?? '' }}</div>
                                    </div>
                                </div>
                            </div>
                        @endif
                        <div class="main-content">
                            <div class="background-image" style="background-image: url('{{ $backgroundImage }}');"></div>
                            @if($category)
                                <span class="category filter-dependent">{!! $category->getTranslation('name', session('locale', 'en')) !!}</span>
                            @endif
                            <div class="card-content">
                                <h2>{{ $post->title }}</h2>
                                <span class="post-date" style="display: none;">{{ $formattedDate }}</span>
                                @if($category && $category->slug === 'news')
                                    <p class="business-news-week">{{ $post->news_source ?? 'Business News Week' }}</p>
                                @endif
                            </div>
                            <span class="date filter-dependent">{{ $formattedDate }}</span>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>

    {{-- Newsletter Section --}}
    <div class="newsletter-section">
        <div class="newsletter-container">
            <h2 class="newsletter-title" id="all-title">Read, Watch, Listen -  Anytime, Anywhere</h2>
            <h2 class="newsletter-title" id="news-title" style="display: none;">From Ideas to Insight - Know More</h2>
            <h2 class="newsletter-title" id="podcast-title" style="display: none;">Catch Up with Our Latest Episodes</h2>
            <h2 class="newsletter-title" id="blog-title" style="display: none;">Stay Ahead With Us</h2>
            <a href="{{ route('contact') }}">
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
                routePattern: document.querySelector('.masonry-grid').dataset.routePattern,
                cards: document.querySelectorAll('.card')
            };

            let currentFilter = 'all';

            // Event Listeners
            elements.filterLinks.forEach(link => {
                link.addEventListener('click', handleFilterClick);
            });

            // Filter click handler
            async function handleFilterClick(e) {
                e.preventDefault();
                const filter = this.getAttribute('data-filter');
                currentFilter = filter;

                console.log(filter);

                // Update active state of filter links
                elements.filterLinks.forEach(link => {
                    link.classList.toggle('active', link.getAttribute('data-filter') === filter);
                });

                // Update newsletter titles visibility
                document.getElementById('all-title').style.display = filter === 'all' ? 'block' : 'none';
                document.getElementById('news-title').style.display = filter === 'news' ? 'block' : 'none';
                document.getElementById('podcast-title').style.display = filter === 'podcast' ? 'block' : 'none';
                document.getElementById('blog-title').style.display = filter === 'blog' ? 'block' : 'none';

                // Update headers visibility
                elements.cards.forEach(card => {
                    // Remove all visibility classes first
                    card.classList.remove('show-guest', 'show-blog');

                    // Add appropriate class based on filter
                    if (filter === 'podcast') {
                        card.classList.add('show-guest');
                    } else if (filter === 'blog') {
                        card.classList.add('show-blog');
                    }

                    // Show/hide filter-dependent elements based on filter
                    const filterDependentElements = card.querySelectorAll('.filter-dependent');
                    filterDependentElements.forEach(element => {
                        element.style.display = filter === 'all' ? '' : 'none';
                    });

                    // Show/hide post-date based on filter
                    const postDate = card.querySelector('.post-date');
                    if (postDate) {
                        postDate.style.display = filter === 'all' ? 'none' : 'inline';
                    }
                });

                await fetchAndUpdatePosts(filter);

                // Show/hide "Business News Week" based on filter
                document.querySelectorAll('.business-news-week').forEach(element => {
                    element.style.display = filter === 'news' ? 'block' : 'none';
                });
            }

            // Fetch posts based on filter
            async function fetchAndUpdatePosts(filter) {
                try {
                    console.log('Fetching posts for filter:', filter);
                    const response = await fetch(`/media/filter/${filter}`, {
                        headers: {
                            'X-Requested-With': 'XMLHttpRequest',
                            'Accept': 'application/json'
                        }
                    });

                    if (!response.ok) {
                        const errorText = await response.text();
                        throw new Error(`Network response was not ok: ${response.status} ${errorText}`);
                    }

                    const posts = await response.json();
                    console.log('Posts received:', posts);

                    if (!Array.isArray(posts)) {
                        throw new Error('Received data is not an array');
                    }

                    updatePosts(posts, filter);
                } catch (error) {
                    console.error('Error fetching posts:', error);
                }
            }

            // Update posts in the DOM
            function updatePosts(posts, filter) {
                console.log('Updating posts:', posts.length);
                const postsHtml = posts.map((post, index) => {
                    const isLargeCard = filter === 'all' && (index === 0 || index === posts.length - 1);
                    const postUrl = elements.routePattern.replace(':slug', post.slug);
                    const defaultImage = `/images/media/image1.png`;
                    const backgroundImage = post.front_image ? '/storage/' + post.front_image : defaultImage;

                    const date = new Date(post.published_at).toLocaleDateString('en-GB', {
                        day: 'numeric',
                        month: 'long',
                        year: 'numeric'
                    });

                    const newsFilterClass = filter !== 'all' ? 'news-filter' : '';
                    const showGuestClass = filter.toLowerCase() === 'podcast' ? 'show-guest' : '';
                    const showBlogClass = filter.toLowerCase() === 'blog' ? 'show-blog' : '';
                    const filterDependentDisplay = filter === 'all' ? '' : 'none';
                    const postDateDisplay = filter === 'all' ? 'none' : 'block';
                    const businessNewsWeekDisplay = filter === 'news' ? 'block' : 'none';

                    // Guest header HTML
                    const guestHeader = post.categories?.slug?.toLowerCase() === 'podcast' ? `
                        <div class="guest-header">
                            <div class="guest-info">
                                <div class="guest-image">
                                    <img src="${post.author_image ? '/storage/' + post.author_image : '{{ asset('images/media/author.png') }}'}" alt="Author">

                                </div>
                                <div class="guest-details">
                                    <div class="guest-label">NEW PODCAST</div>
                                    <div class="guest-name">${post.author_name || ''}</div>
                                    <div class="guest-position">${post.author_title || ''}</div>
                                </div>
                            </div>
                        </div>
                    ` : '';

                    // Blog header HTML
                    const blogHeader = post.categories?.slug?.toLowerCase() === 'blog' ? `
                        <div class="blog-header">
                            <div class="blog-info">
                                <div class="blog-image">
                                    <img src="${post.author_image ? '/storage/' + post.author_image : '{{ asset('images/media/author.png') }}'}" alt="Author">
                                </div>
                                <div class="blog-details">
                                    <div class="blog-label">Author</div>
                                    <div class="blog-name">${post.author_name || 'Author Name'}</div>
                                </div>
                            </div>
                        </div>
                    ` : '';

                    return `
                        <div class="card ${isLargeCard ? 'large' : ''} ${newsFilterClass} ${showGuestClass} ${showBlogClass}">
                            <a href="${postUrl}" class="text-decoration-none">
                                    ${guestHeader}
                                    ${blogHeader}
                                    <div class="main-content">
                                        <div class="background-image" style="background-image: url('${backgroundImage}');"></div>
                                        <span class="category filter-dependent" style="display: ${filterDependentDisplay};">{!! $category->getTranslation('name', session('locale', 'en')) !!}</span>
                                        <div class="card-content">
                                            <h2>${post.title}</h2>
                                            <span class="post-date" style="display: ${postDateDisplay};">${date}</span>
                                            ${post.categories?.slug === 'news' ? `
                                            <p class="business-news-week" style="display: ${businessNewsWeekDisplay};">Business News Week</p>
                                            ` : ''}
                                        </div>
                                        <span class="date filter-dependent" style="display: ${filterDependentDisplay};">${date}</span>
                                </div>
                            </a>
                        </div>
                    `;
                }).join('');

                elements.masonry.innerHTML = postsHtml;
            }
        });
    </script>
@endsection
