@extends("layout.mainlayout")

@section('localcss')
    <link href="{{ asset('css/media.css') }}" rel="stylesheet">
@endsection


@section("container")

<div class="hero-section">
    <a href="#">
        <img src="{{ asset('images/media/media.png') }}" alt="Media" class="center-image">
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
        <a href="#" class="filter-link">News</a>
        <a href="#" class="filter-link">Blog</a>
        <a href="#" class="filter-link">Podcast</a>
        <a href="#" class="filter-link">White Paper</a>
    </div>
</div>

<div class="masonry-grid">
    {{-- First Row --}}


    <div class="card large">
        <div class="background-image" style="background-image: url('{{ asset('images/media/image1.png') }}');"></div>
        <span class="category">WHITE PAPER</span>
        <div class="card-content">
            <h2>Startup Success: From Idea to Execution</h2>
        </div>
        <span class="date">June 2020</span>
    </div>

    <div class="card">
        <div class="background-image" style="background-image: url('{{ asset('images/media/image2.png') }}');"></div>
        <span class="category">WHITE PAPER</span>
        <div class="card-content">
            <h2>Startup Success: From Idea to Execution</h2>
        </div>
        <span class="date">June 2020</span>
    </div>

    {{-- Second Row --}}
    <div class="card">
        <div class="background-image" style="background-image: url('{{ asset('images/media/image3.png') }}');"></div>
        <span class="category">WHITE PAPER</span>
        <div class="card-content">
            <h2>Personal Finance 101: Building a Strong Financial Foundation</h2>
        </div>
        <span class="date">June 2020</span>
    </div>
    <div class="card">
        <div class="background-image" style="background-image: url('{{ asset('images/media/image4.png') }}');"></div>
        <span class="category">WHITE PAPER</span>
        <div class="card-content">
            <h2>Personal Finance 101: Building a Strong Financial Foundation</h2>
        </div>
        <span class="date">June 2020</span>
    </div>
    <div class="card">
        <div class="background-image" style="background-image: url('{{ asset('images/media/image5.png') }}');"></div>
        <span class="category">WHITE PAPER</span>
        <div class="card-content">
            <h2>Personal Finance 101: Building a Strong Financial Foundation</h2>
        </div>
        <span class="date">June 2020</span>
    </div>

    {{-- Third Row --}}
    <div class="card">
        <div class="background-image" style="background-image: url('{{ asset('images/media/image6.png') }}');"></div>
        <span class="category">WHITE PAPER</span>
        <div class="card-content">
            <h2>Scaling Your Business: Strategies for Sustainable Growth</h2>
        </div>
        <span class="date">June 2020</span>
    </div>

    <div class="card large">
        <div class="background-image" style="background-image: url('{{ asset('images/media/image7.png') }}');"></div>
        <span class="category">WHITE PAPER</span>
        <div class="card-content">
            <h2>Understanding Economic Indicators</h2>
        </div>
        <span class="date">June 2020</span>
    </div>
</div>


<div class="newsletter-section">
    <div class="newsletter-container">
        <h2 class="newsletter-title">JOIN OUR MAILING LIST</h2>
        <p class="newsletter-subtitle">Get the best stories from Mandiri Capital.</p>

        <form class="newsletter-form">
            <input type="email" placeholder="Write here..." class="newsletter-input">
            <button type="submit" class="newsletter-button">Proceed</button>
        </form>
    </div>
</div>

@endsection
