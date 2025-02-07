@extends('layout.mainlayout')
@use('Illuminate\Support\Facades\Storage')


@section('localcss')
    <link href="{{ asset('css/portfolio-funding-show.css') }}" rel="stylesheet">
@endsection


@section('container')
    <div class="top-hero-section">
        <img src="{{ asset('images/portfolio/balancesheetlogo.png') }}" alt="Author" class="author-avatar">
    </div>

    <div class="hero-section">
        <div class="hero-content" style="background-image: url('{{ asset('images/portfolio/BalacesheetHeadline.jpeg') }}');">
        </div>
    </div>


    <div class="hero-mid-section">
        <h1 class="center-text">Mandiri Group is the largest banking institution by asset value in Indonesia.</h1>
    </div>

    <!-- Content Section -->
    <div class="content-section">
        <div class="content-container">
            <!-- Left Sidebar -->
            <div class="sidebar-left">
                <div class="article-meta">
                    <h1>About Balance Sheet Fund</h1>
                </div>
            </div>
            <div class="content-text">
                <div class="article-content">
                    <div class="company-details">
                        <p class="company-description">
                            Mandiri Capital Indonesia (MCI), the Corporate Venture Capital arm of Mandiri Group, strategically invests in startups (both within Indonesia and globally) that offer innovative products or services capable of synergizing with Mandiri’s ecosystem. Leveraging the Group’s position as Indonesia’s leading financial conglomerate, MCI empowers startups to scale efficiently and accelerate growth through access to Mandiri’s extensive network, resources, and market expertise. By fostering strategic partnerships with forward-thinking ventures, MCI aims to co-create value, driving mutual growth while participating on the group’s digital enhancement.
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
                            The fund focuses on identifying startups in Asia with potential strategic synergies with the Mandiri Group, prioritizing growth-stage to late-stage ventures that demonstrate robust business fundamentals, scalable models, and significant growth potential.

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
                        <img src="{{ asset('images/portfolio/balancesheetlogo.png') }}" alt="Investors" class="investors-imagempf">

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
                                <p class="criteria-value">Asia Region</p>
                            </div>
                            <div class="criteria-card">
                                <h3>Ticket Size</h3>
                                <p class="criteria-value">Above 2Mn USD</p>
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
