@extends('layout.mainlayout')
@use('Illuminate\Support\Facades\Storage')


@section('localcss')
    <link href="{{ asset('css/portfolio-funding-show.css') }}" rel="stylesheet">
@endsection


@section('container')
    <div class="top-hero-section">
        <img src="{{ asset('images/portfolio/MPFLogo1.png') }}" alt="Author" class="author-avatar">
    </div>

    <div class="hero-section">
        <div class="hero-content" style="background-image: url('{{ asset('images/portfolio/MPFHeadline.jpeg') }}');">
        </div>
    </div>


    <div class="hero-mid-section">
        <h1 class="center-text">Indonesia is one of the digital economic powerhouses in Southeast Asia.</h1>
    </div>

    <!-- Content Section -->
    <div class="content-section">
        <div class="content-container">
            <!-- Left Sidebar -->
            <div class="sidebar-left">
                <div class="article-meta">
                    <h1>About Merah Putih Fund</h1>
                </div>
            </div>
            <div class="content-text">
                <div class="article-content">
                    <div class="company-details">
                        <p class="company-description">
                            Merah Putih Fund focuses on accelerating the growth of Indonesia's digital economy, encouraging startups with the potential to become soonicorns to grow and contribute to Indonesia.
                            <br><br> More than capital investment, Merah Putih Fund will integrate the businesses of its soonicorn investees in the BUMN business ecosystem.
                            </p>
                    </div>
                </div>
            </div>

            <div class="sidebar-left">
                <div class="article-meta">
                    <h1>Investment Thesis</h1>
                </div>
            </div>
            <div class="content-text">
                <div class="article-content">
                    <div class="company-details">
                        <p class="company-description">
                            Focused on backing soonicorns—startups with high growth potential poised to scale. The fund primarily targets gowth-stage ventures in emerging sectors such as fintech, digital health, and sustainable solutions that can drive significant market disruption.
                            </p>
                    </div>
                </div>
            </div>


            <div class="sidebar-left">
                <div class="article-meta">
                    <h1>Investors</h1>
                </div>
            </div>
            <div class="content-text">
                <div class="article-content">
                    <div class="company-details">
                        <img src="{{ asset('images/portfolio/investorsMPFatas.png') }}" alt="Investors" class="investors-imagempf">
                        <img src="{{ asset('images/portfolio/investorsMPFbawah.png') }}" alt="Investors" class="investors-imagempf">

                    </div>
                </div>
            </div>





            <div class="sidebar-left">
                <div class="article-meta">
                    <h1>Investment Criteria</h1>
                </div>
            </div>
            <div class="content-text">
                <div class="article-content">
                    <div class="investment-criteria-content">
                        <div class="criteria-grid">
                            <div class="criteria-card">
                                <h3>Stage</h3>
                                <p class="criteria-value">Growth to Late Stage</p>
                            </div>
                            <div class="criteria-card">
                                <h3>Geography</h3>
                                <p class="criteria-value">Indonesia</p>
                            </div>
                            <div class="criteria-card">
                                <h3>Ticket Size</h3>
                                <p class="criteria-value">$20-25Mn</p>
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
