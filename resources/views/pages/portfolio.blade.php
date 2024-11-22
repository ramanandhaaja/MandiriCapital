@extends("layout.mainlayout")

@section('localcss')
    <link href="{{ asset('css/portfolio.css') }}" rel="stylesheet">
@endsection


@section("container")

<div class="hero-section">
    <a href="#">
        <img src="{{ asset('images/portfolio/portfolio.png') }}" alt="Media" class="center-image">
    </a>
    <img src="{{ asset('images/home/Ellipse110.png') }}" class="bg-left-1">
    <img src="{{ asset('images/home/Ellipse111.png') }}" class="bg-left-2">
    <img src="{{ asset('images/home/Ellipse112.png') }}" class="bg-left-3">
</div>

{{-- Article Grid Section --}}
<div class="search-section">
    <input type="text" placeholder="Search..." class="search-input">
    <div class="category-filters">
        <a href="#" class="filter-link active">All</a>
        <a href="#" class="filter-link">Fintech</a>
        <a href="#" class="filter-link">Unicorn</a>
        <a href="#" class="filter-link">Enterprise</a>
        <a href="#" class="filter-link">Consumer</a>
    </div>
</div>


{{-- Content Section --}}
<div class="masonry-grid">
    <div class="card xlarge" style="background-color: #B8860B; background-image: url('{{ asset('images/home/article1.png') }}');">
        <span class="category">EVENT</span>
        <div class="card-content">
            <h2>Apply Now for Zenith Startup Accelerator</h2>
        </div>
        <span class="date">June 2020</span>
    </div>

    <div class="card large" style="background-image: url('{{ asset('images/home/article2.png') }}');">
        <span class="category">WHITE PAPER</span>
        <div class="card-content">
            <h2>Mandiri Capital Indonesia Siap Jajaki Pasar Regional dan Global</h2>
        </div>
        <span class="date">June 2020</span>
    </div>

    <div class="card large" style="background-color: #B8860B; }}');">
        <span class="category">PODCAST</span>
        <div class="card-content">
            <h2>Talk about GOTO</h2>
        </div>
        <span class="date">June 2020</span>
    </div>


    <div class="card xlarge" style="background-image: url('{{ asset('images/home/article4.png') }}');">
        <span class="category">WHITE PAPER</span>
        <div class="card-content">
            <h2>Cryptocurrency Investment: Risks and Rewards</h2>
        </div>
        <span class="date">June 2020</span>
    </div>

    <div class="card large" style="background-image: url('{{ asset('images/home/article3.png') }}');">
        <span class="category">WHITE PAPER</span>
        <div class="card-content">
            <h2>Understanding the Basics of Stock Market Investing</h2>
        </div>
        <span class="date">June 2020</span>
    </div>

    <div class="card large" style="background-image: url('{{ asset('images/home/article4.png') }}');">
        <span class="category">WHITE PAPER</span>
        <div class="card-content">
            <h2>Cryptocurrency Investment: Risks and Rewards</h2>
        </div>
        <span class="date">June 2020</span>
    </div>

    <div class="card xlarge" style="background-image: url('{{ asset('images/home/article4.png') }}');">
        <span class="category">WHITE PAPER</span>
        <div class="card-content">
            <h2>Cryptocurrency Investment: Risks and Rewards</h2>
        </div>
        <span class="date">June 2020</span>
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
