@extends('layout.mainlayout')
@use('Illuminate\Support\Facades\Storage')


@section('localcss')
    <link href="{{ asset('css/portfolio-funding-show.css') }}" rel="stylesheet">
@endsection


@section('container')
    <div class="top-hero-section">
        <img src="{{ asset('images/portfolio/BTNLogo.png') }}" alt="Author" class="author-avatar">
    </div>

    <div class="hero-section">
        <div class="hero-content" style="background-image: url('{{ asset('images/portfolio/BTNHeadline.png') }}');">
        </div>
    </div>


    <div class="hero-mid-section">
        <h1 class="center-text">Supporting Digital Transformation for Investor Ecosystem</h1>
    </div>

    <!-- Content Section -->
    <div class="content-section">
        <div class="content-container">
            <!-- Left Sidebar -->
            <div class="sidebar-left">
                <div class="article-meta">
                    <h1>About BTN Fund</h1>
                </div>
            </div>
            <div class="content-text">
                <div class="article-content">
                    <div class="company-details">
                        <p class="company-description">
                            BTN Fund is a strategic initiative designed to accelerate innovation and growth in Indonesia's housing and property sectors. As a collaborative effort with Bank Tabungan Negara, the fund focuses on fostering partnerships with startups and businesses that drive technological advancements, improve housing accessibility, and promote sustainable urban development.

                            <br><br> By supporting groundbreaking solutions and aligning with BTN’s mission to enhance the quality of housing in Indonesia, the BTN Fund empowers innovative ventures to create long-term impact while addressing critical challenges in the real estate ecosystem.
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
                        <img src="{{ asset('images/portfolio/investorsBTN.png') }}" alt="Investors" class="investors-image">
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
                            The BTN Fund seeks to invest in startups that promote financial inclusion and affordable housing solutions, aiming to support the development of sustainable urban communities and expand financial access across Indonesia.
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
                                <p class="criteria-value">Early to Growth Stage</p>
                            </div>
                            <div class="criteria-card">
                                <h3>Geography</h3>
                                <p class="criteria-value">Indonesia & Southeast Asia</p>
                            </div>
                            <div class="criteria-card">
                                <h3>Ticket Size</h3>
                                <p class="criteria-value">$1-2Mn</p>
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
