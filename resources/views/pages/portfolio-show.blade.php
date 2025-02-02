@extends('layout.mainlayout')
@use('Illuminate\Support\Facades\Storage')


@section('localcss')
    <link href="{{ asset('css/portfolio-show.css') }}" rel="stylesheet">
@endsection


@section('container')
    <div class="top-hero-section">
        <img src="{{ Storage::url($portfolio->image_path) }}" alt="{{ $portfolio->name }}" class="author-avatar">
    </div>

    <div class="hero-section">
            <div class="hero-content" style="background-image: url('{{ $portfolio->highlight_image ? Storage::url($portfolio->highlight_image) : asset('images/portfolio/OnHover.jpeg') }}');">
            </div>
        </div>
    </div>

    <!-- Content Section -->
    <div class="content-section">
        <div class="content-container">
            <!-- Left Sidebar -->
            <div class="sidebar-left">
                <div class="article-meta">
                    <h1>Company Details </h1>
                </div>
            </div>
            <div class="content-text">
                <div class="article-content">
                    <div class="company-details">
                        <p class="company-description">
                            {{ $portfolio->description }}
                        </p>

                        <div class="company-info-grid">
                            <div class="info-item">
                                <div class="info-label">HEAD OFFICE</div>
                                <div class="info-value">{{ $portfolio->head_office }}</div>
                            </div>

                            <div class="info-item">
                                <div class="info-label">SECTOR</div>
                                <div class="info-value">{{ $portfolio->sector }}</div>
                            </div>

                            <div class="info-item">
                                <div class="info-label">Year Invested</div>
                                <div class="info-value">{{ $portfolio->year_invested }}</div>
                            </div>

                            <div class="info-item">
                                <div class="info-label">Website</div>
                                <div class="info-value">
                                    <a href="{{ $portfolio->website_url }}" target="_blank"
                                        class="website-link">{{ $portfolio->website_url }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{--
            <div class="sidebar-left">
                <div class="article-meta">
                    <h1>Company Objective SDG</h1>
                </div>
            </div>
            <div class="content-text">
                <div class="article-content">
                    <div class="company-details">
                        <div class="sdg-objectives">
                            <div class="sdg-item">
                                <div class="sdg-icon">
                                    <img src="{{ asset('images/portfolio/portfolio-icon1.png') }}" alt="No Poverty Icon">
                                </div>
                                <div class="sdg-content">
                                    <h3>Tanpa Kemiskinan</h3>
                                    <p>Pengentasan segala bentuk kemiskinan di semua tempat.</p>
                                </div>
                            </div>

                            <div class="sdg-item">
                                <div class="sdg-icon">
                                    <img src="{{ asset('images/portfolio/portfolio-icon5.png') }}" alt="Gender Equality Icon">
                                </div>
                                <div class="sdg-content">
                                    <h3>Kesetaraan Gender</h3>
                                    <p>Mencapai kesetaraan gender dan memberdayakan semua perempuan.</p>
                                </div>
                            </div>

                            <div class="sdg-item">
                                <div class="sdg-icon">
                                    <img src="{{ asset('images/portfolio/portfolio-icon8.png') }}" alt="Decent Work Icon">
                                </div>
                                <div class="sdg-content">
                                    <h3>Pekerjaan Layak dan Pertumbuhan Ekonomi</h3>
                                    <p>Mempromosikan pertumbuhan ekonomi berkelanjutan dan inklusif, lapangan kerja dan
                                        pekerjaan yang layak.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            --}}

        </div>
        <div class="share-section">
            <div class="share-content">
                <span class="share-label">Share to:</span>
                <div class="social-icons">
                    <a href="https://www.instagram.com/mandiricapital/" class="social-icon"><i class="fab fa-instagram"></i></a>
                    <a href="https://www.linkedin.com/company/mandiri-capital-indonesia-mci/posts/?feedView=all" class="social-icon"><i class="fab fa-linkedin"></i></a>
                </div>
            </div>
        </div>
    </div>
@endsection
