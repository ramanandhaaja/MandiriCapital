@extends('layout.mainlayout')
@use('Illuminate\Support\Facades\Storage')

@section('localcss')
    <link href="{{ asset('css/media-show.css') }}" rel="stylesheet">
    <style>
        :root {
            --font-size-base: {{ $masterData->font_size ?? '14px' }};
        }
    </style>
@endsection

@section('container')
    <div class="hero-section">
        <div class="hero-content" style="background-image: url('{{ $post->front_image ? Storage::url($post->front_image) : asset('images/media/OnHover.png') }}');">
        </div>
        <h1>{{ $post->title }}</h1>
        <p>{{ \Carbon\Carbon::parse($post->published_at)->format('d F Y') }}</p>
    </div>

    @if($post->categories->name == 'Podcast')
        <div class="card-podcast">
            <div class="card-wrapper-podcast">
                <div class="guest-header">
                    <div class="guest-info">
                        <div class="guest-image">
                            <img src="{{ $post->author_image ? Storage::url($post->author_image) : asset('images/media/author.png') }}"
                                alt="{{ $post->author_name ?? 'Guest' }}"
                                loading="lazy">
                        </div>
                        <div class="guest-details">
                            <div class="guest-label">NEW PODCAST</div>
                            <div class="guest-name">{{ $post->author_name ?? '' }}</div>
                            <div class="guest-position">{{ $post->author_title ?? '' }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif

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
                                <img src="{{ asset('images/media/author.png') }}" alt="Author" class="author-avatar" loading="lazy">
                                <div class="author-details">
                                    <span class="author-name">{{ $post->author_name ?? '' }}</span>
                                    <span class="author-role">Author</span>
                                </div>
                            </div>
                            <div class="article-category">{{ $post->categories->name }}</div>
                        </div>
                    </div>

                    <div class="nav-buttons-wrapper">
                        @if($previousPost)
                        <a href="{{ route('media.show', $previousPost->slug) }}" class="nav-button prev-button">
                            <span><i class="fas fa-chevron-left"></i> Previous</span>
                            {{--
                            @if($previousPost->front_image)
                            <div class="nav-content">
                                <img src="{{ asset('storage/' . $previousPost->front_image) }}" alt="{{ $previousPost->title }}">
                            </div>
                            @endif
                            --}}
                            <div class="nav-text">
                                <span class="nav-label">{{ Str::limit($previousPost->title, 60) }}</span>
                            </div>
                        </a>
                        @endif

                        @if($nextPost)
                        <a href="{{ route('media.show', $nextPost->slug) }}" class="nav-button next-button">
                            <span><i class="fas fa-chevron-right"></i>Next </span>
                            {{--
                            @if($nextPost->front_image)
                            <div class="nav-content">
                                <img src="{{ asset('storage/' . $nextPost->front_image) }}" alt="{{ $nextPost->title }}">
                            </div>
                            @endif
                             --}}
                            <div class="nav-text">
                                <span class="nav-label">{{ Str::limit($nextPost->title, 60) }}</span>
                            </div>
                        </a>
                        @endif
                    </div>
                </div>
            </div>

            <div class="content-text">
                <div class="article-content">

                    <div class="article-subtitle" @if($post->is_content_justified) style="text-align: justify;" @endif>
                        <p>{!! $post->content_heading !!}</p>
                    </div>
                    <div class="article-content-text" @if($post->is_content_justified) style="text-align: justify;" @endif>
                        <p>{!! $post->content !!}</p>

                    </div>
                    @if($post->media_source_url)
                        <div class="article-source">
                            Sumber: <a href="{{ $post->media_source_url }}" target="_blank">{{ $post->media_source_url }}</a>
                        </div>
                    @endif

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
                        <a href="#" class="social-icon"><i class="fab fa-linkedin"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="newsletter-section">
        <div class="newsletter-container">
            <h2 class="newsletter-title">{!! $masterData->getTranslation('footer', session('locale', 'en')) !!}</h2>

            <a href="#">
                <img src="{{ asset('images/portfolio/letsconnect.png') }}" alt="Lets Connect"
                    class="button-image center-image-newsletter"
                    loading="lazy">
            </a>
        </div>
    </div>
@endsection
