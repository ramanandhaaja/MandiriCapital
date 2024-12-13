@extends('layout.mainlayout')
@use('Illuminate\Support\Facades\Storage')


@section('localcss')
    <link href="{{ asset('css/media-show.css') }}" rel="stylesheet">
@endsection


@section('container')
    <div class="hero-section">
        <div class="hero-content" style="background-image: url('{{ asset('images/media/OnHover.png') }}');">
        </div>
        <h1>{{ $post->title }}</h1>
        <p>{{ \Carbon\Carbon::parse($post->published_at)->format('F Y') }}</p>
    </div>

    <!-- Content Section -->
    <div class="content-section">
        <div class="content-container">
            <!-- Left Sidebar -->
            <div class="sidebar-left">
                <div class="news-navigation">
                    <div class="article-meta">
                        <h1>Berita Terbaru</h1>
                        <div class="meta-info">
                            <span class="article-date">{{ \Carbon\Carbon::parse($post->published_at)->format('d F Y') }}</span>
                            <div class="author-info">
                                <img src="{{ asset('images/media/author.png') }}" alt="Author" class="author-avatar">
                                <div class="author-details">
                                    <span class="author-name">Mandiri Admin</span>
                                    <span class="author-role">Author</span>
                                </div>
                            </div>
                            <div class="article-category">{{ $post->categories->first()->name }}</div>
                        </div>
                    </div>

                    <div class="nav-buttons-wrapper">
                        <button class="nav-button prev-button">
                            <span><i class="fas fa-chevron-left"></i> Previous</span>
                            <div class="nav-content">
                                <img src="{{ asset('images/media/news1.png') }}" alt="Previous Article">
                            </div>
                            <div class="nav-text">
                                <span class="nav-label">MCI Selektif Danai Startup Berprospek Cerah, Apa Saja?</span>
                            </div>
                        </button>

                        <button class="nav-button next-button">
                            <span><i class="fas fa-chevron-right"></i> Next</span>
                            <div class="nav-content">
                                <img src="{{ asset('images/media/news1.png') }}" alt="Next Article">

                            </div>
                            <div class="nav-text">
                                <span class="nav-label">Hadir dalam Program Relawan Bakti BUMN 2024 di Desa Wisata
                                    H...</span>
                            </div>
                        </button>
                    </div>
                </div>
            </div>

            <div class="content-text">


                <div class="article-content">

                    <div class="article-subtitle">
                        <p>{{ $post->content_heading }}</p>
                    </div>
                    <div class="article-content-text">
                        <p>{!! $post->content !!}</p>

                    </div>
                    <div class="article-source">
                        Sumber: <a
                            href="{{ $post->media_source_url }}"
                            target="_blank">{{ $post->media_source_url }}</a>
                    </div>

                    <div style="width: 100%; margin: 40px 0 0 0;">
                        @if(Str::contains(strtolower($post->media_url), 'spotify'))
                        <iframe
                            style="border-radius:12px"
                            src="{{ $post->media_url }}"
                            width="100%"
                            height="200"
                            frameBorder="0"
                            allowfullscreen=""
                            allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"
                            loading="lazy">
                        </iframe>
                        @elseif(Str::contains(strtolower($post->media_url), 'youtube'))
                        <iframe
                            style="border-radius:12px"
                            src="{{ $post->media_url }}"
                            width="100%"
                            height="480"
                            frameBorder="0"
                            allowfullscreen=""
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            loading="lazy">
                        </iframe>
                        @endif
                    </div>
                </div>
            </div>
            <div class="share-section">
                <div class="share-content">
                    <span class="share-label">Share to:</span>
                    <div class="social-icons">
                        <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>
            </div>
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
