@extends('layout.mainlayout')
@use('Illuminate\Support\Facades\Storage')
@use('Carbon\Carbon')

@section('localcss')
    <link href="{{ asset('css/report.css') }}" rel="stylesheet">
    <style>
        :root {
            --font-size-base: {{ $masterData->font_size ?? '14px' }};
        }
    </style>
@endsection

@section('container')
    {{-- Hero Section --}}
    <div class="hero-section">
        <video autoplay muted loop playsinline class="video-background">
            <source src="{{ '/storage/' . $hero->image_path }}" type="video/mp4">
        </video>

        <div class="hero-content">
            <a href="#">
                <h1 class="hero-main-text">{!! $hero->getTranslation('title', session('locale', 'en')) !!}</h1>
            </a>

            {{-- Search and Filter Section --}}
            <div class="center-search">
                {{-- Search Bar and Date Range --}}
                <div class="search-section" style="visibility: hidden;">
                    <div class="search-filters-container">
                        {{-- Search Input --}}
                        <div class="search-input-container">
                            <input type="text" placeholder="Search..." class="search-input">
                            <i class="fas fa-search search-input-icon"></i>
                        </div>

                        {{-- Date Range Picker --}}
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

                {{-- Category Filters --}}
                {{-- SUB MENU  --}}
                <nav class="category-filters">
                    @foreach ($menuSubCategory as $menuSubCat)
                        @if ($menuSubCat->active)
                            <a href="#" class="filter-link"
                                data-filter="{{ $menuSubCat->slug }}">{{ $menuSubCat->getTranslation('name', session('locale', 'en')) }}</a>
                        @endif
                    @endforeach
                </nav>
            </div>
        </div>
    </div>

    {{-- Publications Grid --}}
    <div class="masonry-grid" data-route-pattern="{{ route('report.show', ':slug') }}">
        @foreach ($publications as $index => $publication)
            @if ($index < 10)
                <a href="{{ route('report.show', $publication->slug) }}" class="card-link">
                    <div class="card"
                        style="background-image: url('{{ $publication->image_path ? Storage::url($publication->image_path) : asset('images/media/image' . ($index + 1) . '.png') }}');">
                        @if (!$publication->hide_category)
                            <span
                                class="category">{{ $publication->category?->getTranslation('name', session('locale', 'en')) ?? '' }}</span>
                        @endif
                        <div class="card-content">
                            @if (!$publication->hide_title)
                                <h2>{{ $publication->getTranslation('title', session('locale', 'en')) }}</h2>
                            @endif
                        </div>
                        <span class="date"
                            style='visibility: hidden;'>{{ Carbon::parse($publication->published_date)->format('d F Y') }}</span>
                    </div>
                </a>
            @endif
        @endforeach
    </div>

    {{-- Newsletter Section --}}
    <div class="newsletter-section">
        <div class="newsletter-container">
            <h2 class="newsletter-title">{!! $masterData->getTranslation('footer', session('locale', 'en')) !!}</h2>
            <a href="{{ route('contact') }}">
                <img src="{{ asset('images/portfolio/letsconnect.png') }}" alt="Lets Connect"
                    class="button-image center-image-newsletter" loading="lazy">
            </a>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Cache DOM elements
            const elements = {
                filterLinks: document.querySelectorAll('.filter-link'),
                masonry: document.querySelector('.masonry-grid'),
                routePattern: document.querySelector('.masonry-grid').dataset.routePattern
            };

            let currentFilter = 'all-report';

            // Initialize filter click handlers
            initializeFilters();

            /**
             * Initialize filter click handlers
             */
            function initializeFilters() {
                elements.filterLinks.forEach(link => {
                    link.addEventListener('click', handleFilterClick);
                });
            }

            /**
             * Handle filter link click
             * @param {Event} e - Click event
             */
            async function handleFilterClick(e) {
                e.preventDefault();
                const filter = this.getAttribute('data-filter');
                updateActiveFilter(this);
                await fetchAndUpdatePublications(filter);
            }

            /**
             * Update active filter styling
             * @param {HTMLElement} clickedLink - The clicked filter link
             */
            function updateActiveFilter(clickedLink) {
                elements.filterLinks.forEach(l => l.classList.remove('active'));
                clickedLink.classList.add('active');
            }

            /**
             * Fetch and update publications based on filter
             * @param {string} filter - The selected filter category
             */
            async function fetchAndUpdatePublications(filter) {
                try {
                    console.log('Fetching with filter:', filter); // Debug filter value
                    const response = await fetch(`/report/filter/${filter}`, {
                        headers: {
                            'X-Requested-With': 'XMLHttpRequest'
                        }
                    });

                    if (!response.ok) throw new Error('Network response was not ok');

                    const publications = await response.json();
                    console.log('Received publications:', publications); // Debug response
                    updatePublicationsGrid(publications);
                } catch (error) {
                    console.error('Error fetching publications:', error);
                }
            }

            /**
             * Update the publications grid with new data
             * @param {Array} publications - Array of publication objects
             */
            function updatePublicationsGrid(publications) {
                const postsHtml = publications.map((publication, index) => {
                    const postUrl = elements.routePattern.replace(':slug', publication.slug);
                    const imageUrl = publication.image_path ?
                        '/storage/' + publication.image_path :
                        '/images/media/image' + (index + 1) + '.png';

                    const locale = '{{ session('locale', 'en') }}';
                    const categoryName = publication.category?.name?.[locale] || '';

                    return `
                        <a href="${postUrl}" class="card-link">
                            <div class="card" style="background-image: url('${imageUrl}');">
                                ${!publication.hide_category ? `<span class="category">${categoryName}</span>` : ''}
                                <div class="card-content">
                                    ${!publication.hide_title ? `<h2>${publication.getTranslation('title', session('locale', 'en'))}</h2>` : ''}
                                </div>
                                <span class="date" style="visibility: hidden;">${formatDate(publication.published_date)}</span>
                            </div>
                        </a>
                    `;
                }).join('');

                elements.masonry.innerHTML = postsHtml;
            }

            /**
             * Format date to Month Year format
             * @param {string} dateString - Date string to format
             * @returns {string} Formatted date string
             */
            function formatDate(dateString) {
                const date = new Date(dateString);
                const day = date.getDate();
                const month = date.toLocaleString('en-US', {
                    month: 'long'
                });
                const year = date.getFullYear();
                return `${day} ${month} ${year}`;
            }

        });
    </script>
@endsection
