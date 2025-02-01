@extends('layout.mainlayout')

@section('localcss')
    <link href="{{ asset('css/platform-show.css') }}" rel="stylesheet">
@endsection

@section('container')
    <div class="hero-section">
        <img src="{{ asset('images/platform/background-exponent.png') }}" class="video-background"/>

        <div class="hero-content">
            <div class="center-text">Business Matchmaking between startups and Mandiri Group</div>
            <div class="image-container">
                <img src="{{ asset('images/platform/forstartup.png') }}" alt="For Startup" class="button-image center-image"
                    onclick="openPitchModal()">
            </div>
        </div>
        <div class="hero-content">
            <img src="{{ asset('images/platform/xponentlg.png') }}" alt="For Startup" class="right-image">
        </div>
    </div>

    <div class="headline-section-two">
        <div class="headline-grid-counter">
            @php
                $dummyArticles = [
                    ['title' => 'PROJECTS','subtitle' => 'Startups', 'content' => '65+'],
                    ['title' => 'STARTUPS','subtitle' => 'Mandiri Business Units', 'content' => '20+'],
                    ['title' => 'BUSINESS UNITS','subtitle' => 'Business Deals', 'content' => '10+']
                ];
            @endphp
            @foreach($dummyArticles as $index => $article)
                <div class="headline-card-two ">
                    <div id="counter{{ $index + 1 }}" class="counter" data-value="{{ $article['content'] }}">{{ $article['content'] }}</div>

                    <p class="subtitle">{{ $article['subtitle'] }}</p>
                </div>
            @endforeach
        </div>
    </div>

    {{-- Get Investment Section --}}
    <div class="get-investement-section">

        <div class="masonry-grid-investment-section">
            <div class="grid-headline-title-card">
                <h1 class="grid-headline-title">Why You Should Join Xponent?</h1>
                <h1 class="grid-headline-subtitle-left">Practical 3-Month Program of Venture Development and Synergy Creation</h1>
            </div>
            <div class="grid-headline-description-card">
                <div class="masonry-grid-investment-section-sub">
                    <div class="grid-headline-title-card-sub">
                        <div class="card-icon-bottom">
                            <h1 class="card-title-bottom">01</h1>
                        </div>
                        <h2 class="card-title">Network
                        </h2>
                        <p class="card-description">Bringing you to the biggest financial conglomerate bank in Indonesia with 120+ business units to explore.</p>
                    </div>
                    <div class="grid-headline-title-card-sub">
                        <div class="card-icon-bottom">
                            <h1 class="card-title-bottom">02</h1>
                        </div>
                        <h2 class="card-title">Business Growth
                        </h2>
                        <p class="card-description">We help startups to build business traction.</p>
                    </div>
                    <div class="grid-headline-title-card-sub">
                        <div class="card-icon-bottom">
                            <h1 class="card-title-bottom">03</h1>
                        </div>
                        <h2 class="card-title">Investment Opportunities
                        </h2>
                        <p class="card-description">Meet our investment team and secure strategic investment from Mandiri Capital Indonesia.</p>
                    </div>
                    <div class="grid-headline-title-card-sub">
                        <div class="card-icon-bottom">
                            <h1 class="card-title-bottom">04</h1>
                        </div>
                        <h2 class="card-title">Exposure
                        </h2>
                        <p class="card-description">Unique opportunity to showcase your statup, expand your network, and potentially generate new business deals.</p>
                    </div>
                </div>
                <div class="grid-headline-title-card-sub-bottom">
                    <h1 class="card-title-sub-bottom"></h1>
                    <p class="card-description-bottom"></p>
                </div>
            </div>
        </div>

        <div class="masonry-grid-investment-section-grey">
            <div class="grid-headline-title-card">
                <h1 class="grid-headline-title">Inside Exponent:</h1>
                <h1 class="grid-headline-subtitle-left"></h1>
            </div>
            <div class="grid-headline-description-card">
                <div class="masonry-grid-investment-section-sub-two">
                    <div class="grid-headline-title-card-sub">
                        <div class="card-icon-bottom">
                            <h1 class="card-title-bottom">01</h1>
                        </div>
                        <h2 class="card-title">Business Matchmaking:
                        </h2>
                        <p class="card-description">Join us for an exclusive Business Matchmaking Session that brings together the brightest startups and Mandiri Group, driving collaboration and growth.
                        </p>
                    </div>
                    <div class="grid-headline-title-card-sub">
                        <div class="card-icon-bottom">
                            <h1 class="card-title-bottom">02</h1>
                        </div>
                        <h2 class="card-title">Industry Insight Sessions
                        </h2>
                        <p class="card-description">Industry Insight Session is a program that offers attendees new industry insight from a panel discussion session, that bring practitioners from various industries.</p>
                    </div>
                </div>
                <div class="grid-headline-title-card-sub-bottom">
                    <h1 class="card-title-sub-bottom"></h1>
                    <p class="card-description-bottom"></p>
                </div>
            </div>
        </div>


        <div class="platform-image-containter-horizontal">
            <img class="platform-image-large" src="{{ asset('images/platform/large-image-xponent.png') }}" alt="Team Photo">
        </div>


        {{-- Article Section --}}
        <div class="masonry-grid-investment-section">
            <div class="grid-headline-title-card">
                <h1 class="grid-headline-title">About The Program</h1>
                <h1 class="grid-headline-subtitle-left">Artikel</h1>
            </div>
            <div class="grid-headline-description-card">
                <div class="masonry-grid-investment-section-sub">
                    <div class="grid-headline-title-card-sub card-funding">
                        <div class="background-image"></div>
                        <img src="{{ asset('images/platform/crowde.png') }}" alt="funding2.png" class="card-funding-image" />
                        <div class="funding-category">
                            Yohanes Sughitononughroho
                        </div>
                        <div class="card-funding-jobtitle">
                            CEO & Co-Founder
                        </div>
                        <div class="card-funding-content">
                            “During the mentorship sessions with Astra International, the discussion focused on a successful synergy project, possibly because Imajin and Astra target the same industry. I believe that every industry has it own unique approach, wich is why the sharing session ath time was quiet insightful, especialy for the manufavturing and automative industries"
                        </div>
                    </div>

                    <div class="grid-headline-title-card-sub card-funding">
                        <div class="background-image"></div>
                        <img src="{{ asset('images/platform/dagangan.png') }}" alt="funding2.png" class="card-funding-image" />
                        <div class="funding-category">
                            Ryan Manafe
                        </div>
                        <div class="card-funding-jobtitle">
                            CEO & Co-Founder
                        </div>
                        <div class="card-funding-content">
                            "“Fishlog succesfully collaborated with mandiri SME to develop a loan referral program for the fisheries industry, valued at 50 billion rupiah”"
                        </div>
                    </div>

                    <div class="grid-headline-title-card-sub card-funding">
                        <div class="background-image"></div>
                        <img src="{{ asset('images/platform/ayoconnect.png') }}" alt="funding2.png" class="card-funding-image" />
                        <div class="funding-category">
                            Chiragh Kipralani
                        </div>
                        <div class="card-funding-jobtitle">
                            CEO & Co-Founder
                        </div>
                        <div class="card-funding-content">
                            “The mentorship program truly opened my eyes, especially in preparing for my future series B fundraising. There were many insights from that time that i still remember today, and i know i need to be even more prepeared because, statistically, Series B fundraising is the thouhest”
                        </div>
                    </div>
                </div>

                <div class="grid-headline-title-card-sub-bottom">
                    <h1 class="card-title-sub-bottom"></h1>
                    <p class="card-description-bottom"></p>
                </div>
            </div>
        </div>

        <div class="highlight-applynow-bottom">
            <div class="highlight-content">
                <h2 class="highlight-title">Discover What's Possible</h2>
                <a href="#" class="apply-now-button">Apply Now</a>
            </div>
        </div>

    </div>

    <script>
        document.getElementById('company_profile').addEventListener('change', function(e) {
            const fileName = e.target.files[0]?.name || 'No File Chosen';
            e.target.parentElement.querySelector('.file-name').textContent = fileName;
        });
    </script>
@endsection
