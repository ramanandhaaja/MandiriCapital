@extends('layout.mainlayout')
@use('Illuminate\Support\Facades\Storage')

@section('localcss')
    <link href="{{ asset('css/report.css') }}" rel="stylesheet">
@endsection


@section('container')
    <div class="hero-section">
        <video autoplay muted loop playsinline class="video-background">
            <source src="{{ '/storage/' . $hero->image_path }}" type="video/mp4">
        </video>

        <div class="hero-content">
            <a href="#">
                <img src="{{ asset('images/report/report.png') }}" alt="Media" class="center-image">
            </a>
            <div class="center-search">
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


                <div class="category-filters">
                    <a href="#" class="filter-link active">All</a>
                    <a href="#" class="filter-link">Annual Report</a>
                    <a href="#" class="filter-link">Sustainability</a>
                    <a href="#" class="filter-link">Whitepaper</a>
                </div>
            </div>
        </div>

    </div>

    {{-- Article Grid Section --}}

    <div class="masonry-grid" data-route-pattern="{{ route('report.show', ':slug') }}">
        {{-- First Row --}}
        <div class="card"
            style="background-image: url('{{ $publications[0]->image_path ? Storage::url($publications[0]->image_path) : asset('images/media/image1.png') }}');">
            <a href="{{ route('report.show', $publications[0]->slug) }}" class="text-decoration-none">
                <span class="category">{{ $publications[0]->category->name ?? '' }}</span>
                <div class="card-content">
                    <h2>{{ $publications[0]->title }}</h2>
                </div>
                <span class="date">{{ \Carbon\Carbon::parse($publications[0]->published_date)->format('F Y') }}</span>
            </a>
        </div>

        <div class="card"
            style="background-image: url('{{ $publications[1]->image_path ? Storage::url($publications[1]->image_path) : asset('images/media/image2.png') }}');">
            <a href="{{ route('report.show', $publications[1]->slug) }}" class="text-decoration-none">
                <span class="category">{{ $publications[1]->category->name ?? '' }}</span>
                <div class="card-content">
                    <h2>{{ $publications[1]->title }}</h2>
                </div>
                <span class="date">{{ \Carbon\Carbon::parse($publications[1]->published_date)->format('F Y') }}</span>
            </a>
        </div>

        {{-- Second Row --}}
        <div class="card"
            style="background-image: url('{{ $publications[2]->image_path ? Storage::url($publications[2]->image_path) : asset('images/media/image3.png') }}');">
            <a href="{{ route('report.show', $publications[2]->slug) }}" class="text-decoration-none">
                <span class="category">{{ $publications[2]->category->name ?? '' }}</span>
                <div class="card-content">
                    <h2>{{ $publications[2]->title }}</h2>
                </div>
                <span class="date">{{ \Carbon\Carbon::parse($publications[2]->published_date)->format('F Y') }}</span>
            </a>
        </div>

        <div class="card"
            style="background-image: url('{{ $publications[3]->image_path ? Storage::url($publications[3]->image_path) : asset('images/media/image4.png') }}');">
            <a href="{{ route('report.show', $publications[3]->slug) }}" class="text-decoration-none">
                <span class="category">{{ $publications[3]->category->name ?? '' }}</span>
                <div class="card-content">
                    <h2>{{ $publications[3]->title }}</h2>
                </div>
                <span class="date">{{ \Carbon\Carbon::parse($publications[3]->published_date)->format('F Y') }}</span>
            </a>
        </div>

        <div class="card"
            style="background-image: url('{{ $publications[4]->image_path ? Storage::url($publications[4]->image_path) : asset('images/media/image5.png') }}');">
            <a href="{{ route('report.show', $publications[4]->slug) }}" class="text-decoration-none">
                <span class="category">{{ $publications[4]->category->name ?? '' }}</span>
                <div class="card-content">
                    <h2>{{ $publications[4]->title }}</h2>
                </div>
                <span class="date">{{ \Carbon\Carbon::parse($publications[4]->published_date)->format('F Y') }}</span>
            </a>
        </div>

        {{-- Third Row --}}
        <div class="card"
            style="background-image: url('{{ $publications[5]->image_path ? Storage::url($publications[5]->image_path) : asset('images/media/image6.png') }}');">
            <a href="{{ route('report.show', $publications[5]->slug) }}" class="text-decoration-none">
                <span class="category">{{ $publications[5]->category->name ?? '' }}</span>
                <div class="card-content">
                    <h2>{{ $publications[5]->title }}</h2>
                </div>
                <span class="date">{{ \Carbon\Carbon::parse($publications[5]->published_date)->format('F Y') }}</span>
            </a>
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
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const filterLinks = document.querySelectorAll('.filter-link');
            const masonry = document.querySelector('.masonry-grid');
            const routePattern = masonry.dataset.routePattern;
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
                        const response = await fetch(`/report/filter/${currentFilter}`, {
                            headers: {
                                'X-Requested-With': 'XMLHttpRequest'
                            }
                        });

                        if (!response.ok) throw new Error('Network response was not ok');

                        const publications = await response.json();
                        updatePosts(publications, currentFilter);
                    } catch (error) {
                        console.error('Error:', error);
                    }
                });
            });

            function updatePosts(publications, filter) {
                const postsHtml = publications.map((publication, index) => {
                    const postUrl = routePattern.replace(':slug', publication.slug);
                    const imageUrl = publication.image_path ? '/storage/' + publication.image_path : '/images/media/image' + (index + 1) + '.png';
                    return `
                        <div class="card" style="background-image: url('${imageUrl}');">
                            <a href="${postUrl}" class="text-decoration-none">
                                <span class="category">${publication.category?.name ?? ''}</span>
                                <div class="card-content">
                                    <h2>${publication.title}</h2>
                                </div>
                                <span class="date">${new Date(publication.published_date).toLocaleDateString('en-US', { month: 'long', year: 'numeric' })}</span>
                            </a>
                        </div>
                    `;
                }).join('');

                masonry.innerHTML = postsHtml;
            }
        });
    </script>
@endsection
