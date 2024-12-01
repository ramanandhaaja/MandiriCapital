@extends("layout.mainlayout")

@section('localcss')
    <link href="{{ asset('css/portfolio.css') }}" rel="stylesheet">
@endsection


@section("container")

<div class="hero-section">
    <video autoplay muted loop playsinline class="video-background">
        <source src="{{ asset('images/portfolio/portfolio.mp4') }}" type="video/mp4">
    </video>

    <div class="hero-content">
        <a href="#">
            <img src="{{ asset('images/portfolio/portfolio.png') }}" alt="Media" class="center-image">
        </a>
        <div class="center-search">
            <div class="search-input-container">
                <input type="text" placeholder="Search..." class="search-input">
                <i class="fas fa-search search-input-icon"></i>
            </div>
            <div class="category-filters">
                <a href="#" class="filter-link active">All</a>
                <a href="#" class="filter-link">Fintech</a>
                <a href="#" class="filter-link">Unicorn</a>
                <a href="#" class="filter-link">Enterprise</a>
                <a href="#" class="filter-link">Customer</a>

            </div>
        </div>
    </div>

</div>


{{-- Content Section --}}
<div class="masonry-grid">
    <div class="card">
        <a href="{{ route('portfolio.show', ['slug' => 'agriaku']) }}" class="company-image-link">
            <img class="portfolio-image" src="{{ asset('images/portfolio/agriaku.png') }}" alt="AgriAku">
        </a>
        <div class="card-stats">
            <div class="stat-item">
                <img src="{{ asset('images/portfolio/icon1.png') }}" />
                <span>1</span>
            </div>
            <div class="stat-item-middle">
                <img src="{{ asset('images/portfolio/icon2.png') }}" />
                <span>5</span>
            </div>
            <div class="stat-item">
                <img src="{{ asset('images/portfolio/icon3.png') }}" />
                <span>8</span>
            </div>
        </div>
    </div>

    <div class="card">
        <a href="{{ route('portfolio.show', ['slug' => 'agriaku']) }}" class="company-image-link">
            <img class="portfolio-image" src="{{ asset('images/portfolio/agriaku.png') }}" alt="AgriAku">
        </a>
        <div class="card-stats">
            <div class="stat-item">
                <img src="{{ asset('images/portfolio/icon1.png') }}" />
                <span>1</span>
            </div>
            <div class="stat-item-middle">
                <img src="{{ asset('images/portfolio/icon2.png') }}" />
                <span>5</span>
            </div>
            <div class="stat-item">
                <img src="{{ asset('images/portfolio/icon3.png') }}" />
                <span>8</span>
            </div>
        </div>
    </div>

    <div class="card">
        <a href="{{ route('portfolio.show', ['slug' => 'agriaku']) }}" class="company-image-link">
            <img class="portfolio-image" src="{{ asset('images/portfolio/agriaku.png') }}" alt="AgriAku">
        </a>
        <div class="card-stats">
            <div class="stat-item">
                <img src="{{ asset('images/portfolio/icon1.png') }}" />
                <span>1</span>
            </div>
            <div class="stat-item-middle">
                <img src="{{ asset('images/portfolio/icon2.png') }}" />
                <span>5</span>
            </div>
            <div class="stat-item">
                <img src="{{ asset('images/portfolio/icon3.png') }}" />
                <span>8</span>
            </div>
        </div>
    </div>

    <div class="card">
        <a href="{{ route('portfolio.show', ['slug' => 'agriaku']) }}" class="company-image-link">
            <img class="portfolio-image" src="{{ asset('images/portfolio/agriaku.png') }}" alt="AgriAku">
        </a>
        <div class="card-stats">
            <div class="stat-item">
                <img src="{{ asset('images/portfolio/icon1.png') }}" />
                <span>1</span>
            </div>
            <div class="stat-item-middle">
                <img src="{{ asset('images/portfolio/icon2.png') }}" />
                <span>5</span>
            </div>
            <div class="stat-item">
                <img src="{{ asset('images/portfolio/icon3.png') }}" />
                <span>8</span>
            </div>
        </div>
    </div>

    <div class="card">
        <a href="{{ route('portfolio.show', ['slug' => 'agriaku']) }}" class="company-image-link">
            <img class="portfolio-image" src="{{ asset('images/portfolio/agriaku.png') }}" alt="AgriAku">
        </a>
        <div class="card-stats">
            <div class="stat-item">
                <img src="{{ asset('images/portfolio/icon1.png') }}" />
                <span>1</span>
            </div>
            <div class="stat-item-middle">
                <img src="{{ asset('images/portfolio/icon2.png') }}" />
                <span>5</span>
            </div>
            <div class="stat-item">
                <img src="{{ asset('images/portfolio/icon3.png') }}" />
                <span>8</span>
            </div>
        </div>
    </div>

    <div class="card">
        <a href="{{ route('portfolio.show', ['slug' => 'agriaku']) }}" class="company-image-link">
            <img class="portfolio-image" src="{{ asset('images/portfolio/agriaku.png') }}" alt="AgriAku">
        </a>
        <div class="card-stats">
            <div class="stat-item">
                <img src="{{ asset('images/portfolio/icon1.png') }}" />
                <span>1</span>
            </div>
            <div class="stat-item-middle">
                <img src="{{ asset('images/portfolio/icon2.png') }}" />
                <span>5</span>
            </div>
            <div class="stat-item">
                <img src="{{ asset('images/portfolio/icon3.png') }}" />
                <span>8</span>
            </div>
        </div>
    </div>

    <div class="card">
        <a href="{{ route('portfolio.show', ['slug' => 'agriaku']) }}" class="company-image-link">
            <img class="portfolio-image" src="{{ asset('images/portfolio/agriaku.png') }}" alt="AgriAku">
        </a>
        <div class="card-stats">
            <div class="stat-item">
                <img src="{{ asset('images/portfolio/icon1.png') }}" />
                <span>1</span>
            </div>
            <div class="stat-item-middle">
                <img src="{{ asset('images/portfolio/icon2.png') }}" />
                <span>5</span>
            </div>
            <div class="stat-item">
                <img src="{{ asset('images/portfolio/icon3.png') }}" />
                <span>8</span>
            </div>
        </div>
    </div>

</div>

<div class="portfolio-section">
    {{-- Portfolio Header with hover effects and better spacing --}}
    <div class="portfolio-header">
        <div class="header-cell">Company Name</div>
        <div class="header-cell">Category</div>
        <div class="header-cell">Short Description</div>
        <div class="header-cell">Current Stage</div>
        <div class="header-cell">Partners</div>
    </div>

    <div class="portfolio-rows">
        {{-- Portfolio Row with improved structure and interactions --}}
        <div class="portfolio-row">
            <div class="company-cell">
                <h3 class="company-name">AgriAku</h3>
                <a href="{{ route('portfolio.show', ['slug' => 'agriaku']) }}" class="company-image-link">
                    <img class="company-image" src="{{ asset('images/portfolio/agriaku.png') }}" alt="AgriAku">
                </a>
                <a href="https://agriaku.com" target="_blank" class="company-website">www.agriaku.com</a>
            </div>
            <div class="category-cell">Agriatech</div>
            <div class="description-cell">
                Berdiri sejak tahun 2021, PT Agriaku Digital Indonesia hadir sebagai perusahaan agrobisnis lok...
            </div>
            <div class="stage-cell">
                <span class="stage-tag">Growth</span>
            </div>
            <div class="partners-cell">
                <div class="partner-info">
                    <span>Irvan Kolonas (CEO)</span>
                    <button class="expand-btn" aria-label="Show more details">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M6 9l6 6 6-6"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <div class="portfolio-row">
            <div class="company-cell">
                <h3 class="company-name">AgriAku</h3>
                <a href="{{ route('portfolio.show', ['slug' => 'agriaku']) }}" class="company-image-link">
                    <img class="company-image" src="{{ asset('images/portfolio/agriaku.png') }}" alt="AgriAku">
                </a>
                <a href="https://agriaku.com" target="_blank" class="company-website">www.agriaku.com</a>
            </div>
            <div class="category-cell">Agriatech</div>
            <div class="description-cell">
                Berdiri sejak tahun 2021, PT Agriaku Digital Indonesia hadir sebagai perusahaan agrobisnis lok...
            </div>
            <div class="stage-cell">
                <span class="stage-tag">Growth</span>
            </div>
            <div class="partners-cell">
                <div class="partner-info">
                    <span>Irvan Kolonas (CEO)</span>
                    <button class="expand-btn" aria-label="Show more details">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M6 9l6 6 6-6"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <div class="portfolio-row">
            <div class="company-cell">
                <h3 class="company-name">AgriAku</h3>
                <a href="{{ route('portfolio.show', ['slug' => 'agriaku']) }}" class="company-image-link">
                    <img class="company-image" src="{{ asset('images/portfolio/agriaku.png') }}" alt="AgriAku">
                </a>
                <a href="https://agriaku.com" target="_blank" class="company-website">www.agriaku.com</a>
            </div>
            <div class="category-cell">Agriatech</div>
            <div class="description-cell">
                Berdiri sejak tahun 2021, PT Agriaku Digital Indonesia hadir sebagai perusahaan agrobisnis lok...
            </div>
            <div class="stage-cell">
                <span class="stage-tag">Growth</span>
            </div>
            <div class="partners-cell">
                <div class="partner-info">
                    <span>Irvan Kolonas (CEO)</span>
                    <button class="expand-btn" aria-label="Show more details">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M6 9l6 6 6-6"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        {{-- Additional rows follow the same pattern --}}
    </div>
</div>


<div class="newsletter-section">
    <div class="newsletter-container">
        <h2 class="newsletter-title">WE'D LOVE TO HEAR FROM YOU</h2>

        <a href="#">
            <img src="{{ asset('images/portfolio/letsconnect.png') }}" alt="Lets Connect" class="button-image center-image-newsletter">
        </a>
    </div>
</div>

@endsection

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Existing filter code
        const filterLinks = document.querySelectorAll('.filter-link');
        const masonryGrid = document.querySelector('.masonry-grid');

        filterLinks.forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();

                // Remove active class from all links
                filterLinks.forEach(l => l.classList.remove('active'));

                // Add active class to clicked link
                this.classList.add('active');

                // Check if clicked link is "All"
                if (this.textContent.trim() === 'All') {
                    masonryGrid.style.opacity = '1';
                    masonryGrid.style.display = 'grid';
                } else {
                    // Hide masonry grid with fade effect
                    masonryGrid.style.opacity = '0';
                    setTimeout(() => {
                        masonryGrid.style.display = 'none';
                    }, 300);
                }
            });
        });

        // Portfolio row expansion
        const portfolioRows = document.querySelectorAll('.portfolio-row');
        portfolioRows.forEach(row => {
            const expandBtn = row.querySelector('.expand-btn');
            expandBtn.addEventListener('click', () => {
                row.classList.toggle('expanded');
            });
        });
    });
</script>
@endsection
