@extends('layout.mainlayout')

@section('localcss')
    <link href="{{ asset('css/platform-show.css') }}" rel="stylesheet">
@endsection

@section('container')
    <div class="hero-section">
        <img src="{{ asset('images/platform/background-exponent.png') }}" class="video-background" />

        <div class="hero-content">
            <div class="center-text">{!! $PlatformValueCreationXponent->getTranslation('hero_text', session('locale', 'en')) !!}</div>
            {{--
            <div class="image-container">
                <img src="{{ asset('images/platform/forstartup.png') }}" alt="For Startup" class="button-image center-image"
                    onclick="openPitchModal()">
            </div>
             --}}
        </div>
        <div class="hero-content">
            <img src="{{ asset('images/platform/xponentlg.png') }}" alt="For Startup" class="right-image">
        </div>
    </div>

    <div class="headline-section-two">
        <div class="headline-grid-counter">

                <div class="headline-card-two ">
                    <div id="counter1" class="counter" data-value="{!! $PlatformValueCreationXponent->getTranslation('counter1_value', session('locale', 'en')) !!}">
                        {!! $PlatformValueCreationXponent->getTranslation('counter1_value', session('locale', 'en')) !!}</div>
                    <p class="subtitle">{!! $PlatformValueCreationXponent->getTranslation('counter1_title', session('locale', 'en')) !!}</p>
                </div>
                <div class="headline-card-two ">
                    <div id="counter2" class="counter" data-value="{!! $PlatformValueCreationXponent->getTranslation('counter2_value', session('locale', 'en')) !!}">
                        {!! $PlatformValueCreationXponent->getTranslation('counter2_value', session('locale', 'en')) !!}</div>
                    <p class="subtitle">{!! $PlatformValueCreationXponent->getTranslation('counter2_title', session('locale', 'en')) !!}</p>
                </div>
                <div class="headline-card-two ">
                    <div id="counter3" class="counter" data-value="{!! $PlatformValueCreationXponent->getTranslation('counter3_value', session('locale', 'en')) !!}">
                        {!! $PlatformValueCreationXponent->getTranslation('counter3_value', session('locale', 'en')) !!}</div>
                    <p class="subtitle">{!! $PlatformValueCreationXponent->getTranslation('counter3_title', session('locale', 'en')) !!}</p>
                </div>


        </div>
    </div>




    {{-- Get Investment Section --}}
    <div class="get-investement-section">

        <div class="masonry-grid-investment-section">
            <div class="grid-headline-title-card">
                <h1 class="grid-headline-title">{!! $PlatformValueCreationXponent->getTranslation('whyexponent_title', session('locale', 'en')) !!}</h1>
                <h1 class="grid-headline-subtitle-left">{!! $PlatformValueCreationXponent->getTranslation('whyexponent_subtitle', session('locale', 'en')) !!}</h1>
            </div>
            <div class="grid-headline-description-card">
                <div class="masonry-grid-investment-section-sub">
                    <div class="grid-headline-title-card-sub">
                        <div class="card-icon-bottom">
                            <h1 class="card-title-bottom">01</h1>
                        </div>
                        <h2 class="card-title">Network
                        </h2>
                        <p class="card-description">Bringing you to the biggest financial conglomerate bank in Indonesia
                            with 120+ business units to explore.</p>
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
                        <p class="card-description">Meet our investment team and secure strategic investment from Mandiri
                            Capital Indonesia.</p>
                    </div>
                    <div class="grid-headline-title-card-sub">
                        <div class="card-icon-bottom">
                            <h1 class="card-title-bottom">04</h1>
                        </div>
                        <h2 class="card-title">Exposure
                        </h2>
                        <p class="card-description">Unique opportunity to showcase your statup, expand your network, and
                            potentially generate new business deals.</p>
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
                <h1 class="grid-headline-title">{!! $PlatformValueCreationXponent->getTranslation('insideexponent_title', session('locale', 'en')) !!}</h1>
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
                        <p class="card-description">Join us for an exclusive Business Matchmaking Session that brings
                            together the brightest startups and Mandiri Group, driving collaboration and growth.
                        </p>
                    </div>
                    <div class="grid-headline-title-card-sub">
                        <div class="card-icon-bottom">
                            <h1 class="card-title-bottom">02</h1>
                        </div>
                        <h2 class="card-title">Industry Insight Sessions
                        </h2>
                        <p class="card-description">Industry Insight Session is a program that offers attendees new industry
                            insight from a panel discussion session, that bring practitioners from various industries.</p>
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
                <h1 class="grid-headline-title">{!! $PlatformValueCreationXponent->getTranslation('testimonialexponent_title', session('locale', 'en')) !!}</h1>
                <h1 class="grid-headline-subtitle-left">{!! $PlatformValueCreationXponent->getTranslation('testimonialexponent_subtitle', session('locale', 'en')) !!}</h1>
            </div>
            <div class="grid-headline-description-card">
                <div class="masonry-grid-investment-section-sub">
                    <div class="grid-headline-title-card-sub card-funding">
                        <div class="background-image"></div>
                        <img src="{{ asset('images/platform/crowde.png') }}" alt="funding2.png"
                            class="card-funding-image" />
                        <div class="funding-category">
                            Yohanes Sughitononughroho
                        </div>
                        <div class="card-funding-jobtitle">
                            CEO & Co-Founder
                        </div>
                        <div class="card-funding-content">
                            “CI & Bank Mandiri Greatly assisted CROWDE in providing access and connections to financial
                            industry players, particularly banking."
                        </div>
                    </div>

                    <div class="grid-headline-title-card-sub card-funding">
                        <div class="background-image"></div>
                        <img src="{{ asset('images/platform/dagangan.png') }}" alt="funding2.png"
                            class="card-funding-image" />
                        <div class="funding-category">
                            Ryan Manafe
                        </div>
                        <div class="card-funding-jobtitle">
                            CEO & Co-Founder
                        </div>
                        <div class="card-funding-content">
                            "We can meet everyone from Mandiri Capital, other business units. We can know what parts are
                            relevant to us, we can even meet directly with stakeholders so we can follow-up specifically on
                            what and what added value we can offer."
                        </div>
                    </div>

                    <div class="grid-headline-title-card-sub card-funding">
                        <div class="background-image"></div>
                        <img src="{{ asset('images/platform/ayoconnect.png') }}" alt="funding2.png"
                            class="card-funding-image" />
                        <div class="funding-category">
                            Chiragh Kipralani
                        </div>
                        <div class="card-funding-jobtitle">
                            CEO & Co-Founder
                        </div>
                        <div class="card-funding-content">
                            “It is an honor for ayoconnect to be given the trust of Bank Mandiri to be able to collaborate
                            from implementing integrated embedded usecases for Livin' customers so that they can enjoy the
                            best variety of services in just one.”
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
                <h2 class="highlight-title">{!! $PlatformValueCreationXponent->getTranslation('footer_text', session('locale', 'en')) !!}</h2>
                {{--  <a href="#" class="apply-now-button">Apply Now</a> --}}
            </div>
        </div>

    </div>
@endsection
@section('scripts')
    <script src="{{ asset('js/platform-animation.js') }}"></script>

    <script>
        document.getElementById('company_profile').addEventListener('change', function(e) {
            const fileName = e.target.files[0]?.name || 'No File Chosen';
            e.target.parentElement.querySelector('.file-name').textContent = fileName;
        });
    </script>
@endsection
