@extends('layout.mainlayout')
@use('Illuminate\Support\Facades\Storage')


@section('localcss')
    <link href="{{ asset('css/portfolio-funding-show.css') }}" rel="stylesheet">
@endsection


@section('container')
    <div class="top-hero-section">
        <img src="{{ '/storage/' . $portfolioFunding->image_path }}" alt="Author" class="author-avatar">
    </div>

    <div class="hero-section">
        <div class="hero-content" style="background-image: url('{{ '/storage/' . $portfolioFunding->headline_url }}');">
        </div>
    </div>


    <div class="hero-mid-section">
        <h1 class="center-text">{!! $portfolioFunding->getTranslation('headline_title', session('locale', 'en')) !!}</h1>
    </div>

    <!-- Content Section -->
    <div class="content-section">
        <div class="content-container">
            <!-- Left Sidebar -->
            <div class="sidebar-left">
                <div class="article-meta">
                    <h1>{!! $portfolioFunding->getTranslation('about_title', session('locale', 'en')) !!}</h1>
                </div>
            </div>
            <div class="content-text">
                <div class="article-content">
                    <div class="company-details">
                        <p class="company-description">
                            {!! $portfolioFunding->getTranslation('about_content', session('locale', 'en')) !!}
                            </p>
                    </div>
                </div>
            </div>

            <div class="sidebar-left">
                <div class="article-meta">
                    <h1>{!! $portfolioFunding->getTranslation('investment_thesis_title', session('locale', 'en')) !!}</h1>
                </div>
            </div>
            <div class="content-text">
                <div class="article-content">
                    <div class="company-details">
                        <p class="company-description">
                            {!! $portfolioFunding->getTranslation('investment_thesis_content', session('locale', 'en')) !!}
                            </p>
                    </div>
                </div>
            </div>


            <div class="sidebar-left">
                <div class="article-meta">
                    <h1>{!! $portfolioFunding->getTranslation('investor_title', session('locale', 'en')) !!}</h1>
                </div>
            </div>
            <div class="content-text">
                <div class="article-content">
                    <div class="company-details">
                        @if($portfolioFunding->investor1_url)
                            <img src="{{ '/storage/' . $portfolioFunding->investor1_url }}" alt="Investor 1" class="investors-imagempf">
                        @endif
                        @if($portfolioFunding->investor2_url)
                            <img src="{{ '/storage/' . $portfolioFunding->investor2_url }}" alt="Investor 2" class="investors-imagempf">
                        @endif
                        @if($portfolioFunding->investor3_url)
                            <img src="{{ '/storage/' . $portfolioFunding->investor3_url }}" alt="Investor 3" class="investors-imagempf">
                        @endif
                        @if($portfolioFunding->investor4_url)
                            <img src="{{ '/storage/' . $portfolioFunding->investor4_url }}" alt="Investor 4" class="investors-imagempf">
                        @endif
                        @if($portfolioFunding->investor5_url)
                            <img src="{{ '/storage/' . $portfolioFunding->investor5_url }}" alt="Investor 5" class="investors-imagempf">
                        @endif
                        @if($portfolioFunding->investor6_url)
                            <img src="{{ '/storage/' . $portfolioFunding->investor6_url }}" alt="Investor 6" class="investors-imagempf">
                        @endif
                    </div>
                </div>
            </div>

            <div class="sidebar-left">
                <div class="article-meta">
                    <h1>{!! $portfolioFunding->getTranslation('investment_criteria_title', session('locale', 'en')) !!}</h1>
                </div>
            </div>
            <div class="content-text">
                <div class="article-content">
                    <div class="investment-criteria-content">
                        <div class="criteria-grid">
                            <div class="criteria-card">
                                <h3>Stage</h3>
                                <p class="criteria-value">{!! $portfolioFunding->getTranslation('stage', session('locale', 'en')) !!}</p>
                            </div>
                            <div class="criteria-card">
                                <h3>Geography</h3>
                                <p class="criteria-value">{!! $portfolioFunding->getTranslation('geography', session('locale', 'en')) !!}</p>
                            </div>
                            <div class="criteria-card">
                                <h3>Ticket Size</h3>
                                <p class="criteria-value">{!! $portfolioFunding->getTranslation('ticketsize', session('locale', 'en')) !!}</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="share-section">
            <div class="share-content">
            </div>
        </div>
    </div>
@endsection
