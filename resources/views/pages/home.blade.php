@extends("layout.mainlayout")

@section('localcss')
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
@endsection

@section("container")

<div class="hero-section">
    <video autoplay muted loop playsinline class="video-background">
        <source src="{{ '/storage/' . $hero->image_path }}" type="video/mp4">
    </video>

    <div class="hero-content">
        <h1 class="center-text">{{ $hero->content }}</h1>
        <img src="{{ asset('images/home/getInvestment.png') }}" alt="Get Investment" class="button-image center-image">
    </div>

</div>

{{-- Headline Section --}}
<div class="headline-section">
    <div class="headline-grid">
        <div class="headline-card">
            <h1>{{ $article[0]->category }}</h1>
            <h2>{{ $article[0]->title }}</h2>
            <p>{{ Str::words($article[0]->content, 13, '...') }}</p>
            <a href="#" class="learn-more">Learn More »</a>
        </div>

        <div class="headline-card middle-border">
            <h1>{{ $article[1]->category }}</h1>
            <h2>{{ $article[1]->title }}</h2>
            <p>{{ Str::words($article[1]->content, 13, '...') }}</p>
            <a href="#" class="learn-more">Learn More »</a>
        </div>

        <div class="headline-card">
            <h1>{{ $article[2]->category }}</h1>
            <h2>{{ $article[2]->title }}</h2>
            <p>{{ Str::words($article[2]->content, 13, '...') }}</p>
            <a href="#" class="learn-more">Learn More »</a>
        </div>
    </div>
</div>

<div class="headline-section-two">
    <div class="headline-grid">
        <div class="headline-card-two">
            <h1>Mandiri Group Ecosystem</h1>
            <h2>15</h2>
        </div>

        <div class="headline-card-two middle-border">
            <h1>Portfolio</h1>
            <h2>25</h2>
        </div>

        <div class="headline-card-two">
            <h1>Fund Venture</h1>
            <h2>13</h2>

        </div>
    </div>
</div>

{{-- Content Section --}}
<div class="masonry-grid">
    <div class="card medium" style="background-color: #B8860B; background-image: url('{{ asset('images/home/Article1.png') }}');">
        <span class="category">EVENT</span>
        <div class="card-content">
            <h2>Apply Now for Zenith Startup Accelerator</h2>
        </div>
        <span class="date">June 2020</span>
    </div>

    <div class="card large" style="background-image: url('{{ asset('images/home/Article2.png') }}');">
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

    <div class="card large" style="background-image: url('{{ asset('images/home/Article4.png') }}');">
        <span class="category">WHITE PAPER</span>
        <div class="card-content">
            <h2>Cryptocurrency Investment: Risks and Rewards</h2>
        </div>
        <span class="date">June 2020</span>
    </div>

    <div class="card medium" style="background-image: url('{{ asset('images/home/Article3.png') }}');">
        <span class="category">WHITE PAPER</span>
        <div class="card-content">
            <h2>Understanding the Basics of Stock Market Investing</h2>
        </div>
        <span class="date">June 2020</span>
    </div>

    <div class="card large" style="background-image: url('{{ asset('images/home/Article4.png') }}');">
        <span class="category">WHITE PAPER</span>
        <div class="card-content">
            <h2>Cryptocurrency Investment: Risks and Rewards</h2>
        </div>
        <span class="date">June 2020</span>
    </div>

    <div class="card large" style="background-image: url('{{ asset('images/home/Article4.png') }}');">
        <span class="category">WHITE PAPER</span>
        <div class="card-content">
            <h2>Cryptocurrency Investment: Risks and Rewards</h2>
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

    <div class="card small-square" style="background-image: url('{{ asset('images/home/Article4.png') }}');">
        <span class="category">PODCAST</span>
        <div class="card-content">
            <h2>Long-term vs. Short-term Investments</h2>
        </div>
        <span class="date">June 2020</span>
    </div>

    <div class="card large" style="background-image: url('{{ asset('images/home/Article4.png') }}');">
        <span class="category">WHITE PAPER</span>
        <div class="card-content">
            <h2>Cryptocurrency Investment: Risks and Rewards</h2>
        </div>
        <span class="date">June 2020</span>
    </div>

    <div class="card large" style="background-image: url('{{ asset('images/home/Article4.png') }}');">
        <span class="category">WHITE PAPER</span>
        <div class="card-content">
            <h2>Cryptocurrency Investment: Risks and Rewards</h2>
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
