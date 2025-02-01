@extends('layout.mainlayout')
@use('Illuminate\Support\Facades\Storage')


@section('localcss')
    <link href="{{ asset('css/portfolio-funding-show.css') }}" rel="stylesheet">
@endsection


@section('container')
    <div class="top-hero-section">
        <img src="{{ asset('images/portfolio/impactFundlogo.png') }}" alt="Author" class="author-avatar">
    </div>

    <div class="hero-section">
        <div class="hero-content" style="background-image: url('{{ asset('images/portfolio/impactFundHeadline.jpeg') }}');">
        </div>
    </div>


    <div class="hero-mid-section">
        <h1 class="center-text">Enhancing Synergy Between Economic, Environment, and Social Facets</h1>
    </div>

    <!-- Content Section -->
    <div class="content-section">
        <div class="content-container">
            <!-- Left Sidebar -->
            <div class="sidebar-left">
                <div class="article-meta">
                    <h1>About Indonesia Impact Fund</h1>
                </div>
            </div>
            <div class="content-text">
                <div class="article-content">
                    <div class="company-details">
                        <p class="company-description">
                            Indonesia, Southeast Asia’s largest economy and a diverse nation of over 300 ethnic groups, is poised to absorb $23 billion in impact investments over the next five years, driven by Public-Private Partnership (PPP) projects and its underserved market potential.
                            <br><br> The Indonesia Impact Fund fosters private sector investments in renewable energy, supporting COP26’s mission to achieve global net-zero emissions by mid-century and maintain the 1.5-degree target.
                            <br><br> Amid challenges like natural resource degradation, ecological decline, and pandemic impacts, the fund drives public-private collaboration to protect lives, sustain livelihoods, and build a resilient, sustainable future.
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
                        <img src="{{ asset('images/portfolio/investors.png') }}" alt="Investors" class="investors-image">

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
                            Targeting startups that have a positive social or environmental impact, Indonesia Impact Fund focuses on businesses driving long-term sustainable change in sectors such as renewable energy, social infrastructure, and clean tech.
                        </p>
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
                                <p class="criteria-value">Early Stage</p>
                            </div>
                            <div class="criteria-card">
                                <h3>Geography</h3>
                                <p class="criteria-value">Indonesia</p>
                            </div>
                            <div class="criteria-card">
                                <h3>Ticket Size</h3>
                                <p class="criteria-value">$500k</p>
                            </div>
                        </div>
                    </div>

                    <div class="company-details">
                        <div class="sdg-objectives">
                            <div class="sdg-item">
                                <div class="sdg-icon">
                                    <img src="{{ asset('images/portfolio/portfolio-icon1.png') }}" alt="No Poverty Icon">
                                </div>
                                <div class="sdg-content">
                                    <h3>Poverty Alleviation</h3>
                                </div>
                            </div>

                            <div class="sdg-item">
                                <div class="sdg-icon">
                                    <img src="{{ asset('images/portfolio/portfolio-icon3.png') }}" alt="No Poverty Icon">
                                </div>
                                <div class="sdg-content">
                                    <h3>Affordable Healthcare</h3>
                                </div>
                            </div>

                            <div class="sdg-item">
                                <div class="sdg-icon">
                                    <img src="{{ asset('images/portfolio/portfolio-icon4.png') }}" alt="No Poverty Icon">
                                </div>
                                <div class="sdg-content">
                                    <h3>High-Quality & Accessible Education</h3>
                                </div>
                            </div>

                            <div class="sdg-item">
                                <div class="sdg-icon">
                                    <img src="{{ asset('images/portfolio/portfolio-icon5.png') }}" alt="No Poverty Icon">
                                </div>
                                <div class="sdg-content">
                                    <h3>Increasing Women Participation</h3>
                                </div>
                            </div>

                            <div class="sdg-item">
                                <div class="sdg-icon">
                                    <img src="{{ asset('images/portfolio/portfolio-icon11.png') }}" alt="No Poverty Icon">
                                </div>
                                <div class="sdg-content">
                                    <h3>Sustainable Cities & Affordable Housing</h3>
                                </div>
                            </div>

                            <div class="sdg-item">
                                <div class="sdg-icon">
                                    <img src="{{ asset('images/portfolio/portfolio-icon1.png') }}" alt="No Poverty Icon">
                                </div>
                                <div class="sdg-content">
                                    <h3>Empowering Climate-Smart Innovations</h3>
                                </div>
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
