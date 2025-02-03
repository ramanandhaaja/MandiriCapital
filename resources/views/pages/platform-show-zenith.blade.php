@extends('layout.mainlayout')

@section('localcss')
    <link href="{{ asset('css/platform-show.css') }}" rel="stylesheet">
@endsection

@section('container')
    <div class="hero-section">
        <div class="hero-content">
            <div class="center-text">Zenith <br />Startup Accelerator</div>
            <div class="image-container">
                <img src="{{ asset('images/platform/forstartup.png') }}" alt="For Startup" class="button-image center-image"
                    onclick="openPitchModal()">
            </div>
        </div>
        <div class="hero-content">
            <img src="{{ asset('images/platform/zenithlg.png') }}" alt="For Startup" class="right-image">
        </div>
    </div>

    {{-- Get Investment Section --}}
    <div class="get-investement-section">

        <div class="masonry-grid-investment-section">
            <div class="grid-headline-title-card">
                <h1 class="grid-headline-title">Why You Should Join Zenith?</h1>
                <h1 class="grid-headline-subtitle-left"></h1>
            </div>
            <div class="grid-headline-description-card">
                <div class="masonry-grid-investment-section-sub">
                    <div class="grid-headline-title-card-sub">
                        <div class="card-icon">
                            <img src="{{ asset('images/platform/icon1.png') }}" alt="">
                        </div>
                        <h2 class="card-title">Networking Opportunities
                        </h2>
                        <p class="card-description">Expand your business reach by connecting with industry leaders,
                            potential clients, and investors.</p>
                    </div>
                    <div class="grid-headline-title-card-sub">
                        <div class="card-icon">
                            <img src="{{ asset('images/platform/icon2.png') }}" alt="">
                        </div>
                        <h2 class="card-title">Funding Access
                        </h2>
                        <p class="card-description">Unlock diverse investment prospects and explore potential funding
                            opportunities from Mandiri Capital Indonesia and other investor partners.</p>
                    </div>
                    <div class="grid-headline-title-card-sub">
                        <div class="card-icon">
                            <img src="{{ asset('images/platform/icon3.png') }}" alt="">
                        </div>
                        <h2 class="card-title">Global Access
                        </h2>
                        <p class="card-description">Enhance your market presence with access to global companies and global
                            networking opportunities provided by MCI.</p>
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
                <h1 class="grid-headline-title">Inside Zenith:</h1>
                <h1 class="grid-headline-subtitle-left"></h1>
            </div>
            <div class="grid-headline-description-card">
                <div class="masonry-grid-investment-section-sub">
                    <div class="grid-headline-title-card-sub">
                        <div class="card-icon">
                            <img src="{{ asset('images/platform/icon1.png') }}" alt="">
                        </div>
                        <h2 class="card-title">Expert Insights
                        </h2>
                        <p class="card-description">Gain cutting-edge knowledge through in-depth mentoring sessions, expert led workshops, and personalized 1:1 mentoring</p>
                    </div>
                    <div class="grid-headline-title-card-sub">
                        <div class="card-icon">
                            <img src="{{ asset('images/platform/icon2.png') }}" alt="">
                        </div>
                        <h2 class="card-title">Synergy Creation
                        </h2>
                        <p class="card-description">Drive innovation and foster dynamic collaborations with Mandiri Group and other corportations.</p>
                    </div>
                    <div class="grid-headline-title-card-sub">
                        <div class="card-icon">
                            <img src="{{ asset('images/platform/icon3.png') }}" alt="">
                        </div>
                        <h2 class="card-title">Accelerated Access
                        </h2>
                        <p class="card-description">Benefit from expedited access to Bank Mandiri’s banking products, impact measurement, people management, HR services, legal practice, & cloud services.</p>
                    </div>
                </div>
                <div class="grid-headline-title-card-sub-bottom">
                    <h1 class="card-title-sub-bottom"></h1>
                    <p class="card-description-bottom"></p>
                </div>
            </div>
        </div>

        <div class="platform-image-containter">
            <h2 class="business-deals-title">10+ Business Deals</h2>
            <div class="business-logos-grid">
                <div class="logo-item">
                    <img src="{{ asset('images/platform/rekosistem.png') }}" alt="Rekosistem Logo">
                </div>
                <div class="logo-item">
                    <img src="{{ asset('images/platform/ai-rudder.png') }}" alt="AI Rudder Logo">
                </div>
                <div class="logo-item">
                    <img src="{{ asset('images/platform/imajin.png') }}" alt="Imajin Logo">
                </div>
                <div class="logo-item">
                    <img src="{{ asset('images/platform/lifepack.png') }}" alt="Lifepack Logo">
                </div>
                <div class="logo-item">
                    <img src="{{ asset('images/platform/praktis.png') }}" alt="Praktis Logo">
                </div>
                <div class="logo-item">
                    <img src="{{ asset('images/platform/fishlog.png') }}" alt="Fishlog Logo">
                </div>
            </div>
        </div>

        <div class="platform-image-containter-horizontal">
            <div class="platform-image-containter-grid">

                <video autoplay muted loop playsinline class="platform-video-large">
                    <source src="{{ asset('images/platform/videozenith.mp4') }}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>

                <img class="platform-image-large" src="{{ asset('images/platform/large-image.png') }}" alt="Team Photo">
            </div>
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
                        <img src="{{ asset('images/platform/imajin.png') }}" alt="funding2.png" class="card-funding-image" />
                        <div class="funding-category">
                            Joselin Olivia
                        </div>
                        <div class="card-funding-jobtitle">
                            CEO & Co-Founder
                        </div>
                        <div class="card-funding-content">
                            "During the mentorship sessions with Astra International, the discussion focused on a successful synergy project, possibly because Imajin and Astra target the same industry. I believe that every industry has it own unique approach, wich is why the sharing session ath time was quiet insightful, especialy for the manufavturing and automative industries"
                        </div>
                    </div>

                    <div class="grid-headline-title-card-sub card-funding">
                        <div class="background-image"></div>
                        <img src="{{ asset('images/platform/fishlog.png') }}" alt="funding2.png" class="card-funding-image" />
                        <div class="funding-category">
                            Bayu Anggara
                        </div>
                        <div class="card-funding-jobtitle">
                            CEO & Co-Founder
                        </div>
                        <div class="card-funding-content">
                            "Fishlog succesfully collaborated with mandiri SME to develop a loan referral program for the fisheries industry, valued at 50 billion rupiah"
                        </div>
                    </div>

                    <div class="grid-headline-title-card-sub card-funding">
                        <div class="background-image"></div>
                        <img src="{{ asset('images/platform/lifepack.png') }}" alt="funding2.png" class="card-funding-image" />
                        <div class="funding-category">
                            Natali Ardianto
                        </div>
                        <div class="card-funding-jobtitle">
                            CEO & Co-Founder
                        </div>
                        <div class="card-funding-content">
                            "The mentorship program truly opened my eyes, especially in preparing for my future series B fundraising. There were many insights from that time that i still remember today, and i know i need to be even more prepeared because, statistically, Series B fundraising is the thouhest"
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
                <h2 class="highlight-title">Ignite The Highest Point</h2>
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
