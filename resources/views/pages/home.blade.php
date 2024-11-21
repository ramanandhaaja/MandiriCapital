@extends("layout.mainlayout")
@section("container")

<div class="hero-section">
    <h1 class="center-text">Investing in tomorrow's leaders</h1>
    <img src="{{ asset('images/home/Ellipse110.png') }}" class="bg-left-1">
    <img src="{{ asset('images/home/Ellipse111.png') }}" class="bg-left-2">
    <img src="{{ asset('images/home/Ellipse112.png') }}" class="bg-left-3">

    <a href="#">
        <img src="{{ asset('images/home/getInvestment.png') }}" alt="Get Investment" class="button-image center-image">
    </a>
</div>

<div class="masonry-grid">
    <div class="card large" style="background-color: #B8860B; background-image: url('{{ asset('images/home/article1.png') }}');">
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

    <div class="card small-square" style="background-color: #B8860B; }}');">
        <span class="category">PODCAST</span>
        <div class="card-content">
            <h2>Talk about GOTO</h2>
        </div>
        <span class="date">June 2020</span>
    </div>

    <div class="card small-square" style="background-color: #B8860B; }}');">
        <span class="category">NEWS</span>
        <div class="card-content">
            <h2>Article Title</h2>
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

    <div class="card large" style="background-image: url('{{ asset('images/home/article3.png') }}');">
        <span class="category">WHITE PAPER</span>
        <div class="card-content">
            <h2>Understanding the Basics of Stock Market Investing</h2>
        </div>
        <span class="date">June 2020</span>
    </div>

    <div class="card small-square" style="background-color: #B8860B;">
        <span class="category">BLOG</span>
        <div class="card-content">
            <h2>Article Title</h2>
        </div>
        <span class="date">June 2020</span>
    </div>

    <div class="card small-square" style="background-image: url('{{ asset('images/home/investment.png') }}');">
        <span class="category">PODCAST</span>
        <div class="card-content">
            <h2>Long-term vs. Short-term Investments</h2>
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
