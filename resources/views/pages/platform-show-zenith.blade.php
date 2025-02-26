@extends('layout.mainlayout')

@section('localcss')
    <link href="{{ asset('css/platform-show.css') }}" rel="stylesheet">
    <style>
        :root {
            --font-size-base: {{ $masterData->font_size ?? '14px' }};
        }
    </style>
@endsection

@section('container')
    <div class="hero-section">
        <div class="hero-content">
            <div class="center-text">{!! $PlatformValueCreationZenith->getTranslation('hero_text', session('locale', 'en')) !!}</div>
            {{--
            <div class="image-container">
                <img src="{{ asset('images/platform/forstartup.png') }}" alt="For Startup" class="button-image center-image"
                    onclick="openPitchModal()">
            </div>
             --}}
        </div>
        <div class="hero-content">
            <img src="{{ '/storage/' . $PlatformValueCreationZenith->hero_image }}" alt="For Startup" class="right-image" loading="lazy">
        </div>
    </div>

    {{-- Get Investment Section --}}
    <div class="get-investement-section">

        <div class="masonry-grid-investment-section">
            <div class="grid-headline-title-card">
                <h1 class="grid-headline-title">{!! $PlatformValueCreationZenith->getTranslation('whyzenith_title', session('locale', 'en')) !!}</h1>
                <h1 class="grid-headline-subtitle-left"></h1>
            </div>
            <div class="grid-headline-description-card">
                <div class="masonry-grid-investment-section-sub">
                    <div class="grid-headline-title-card-sub">
                        <div class="card-icon">
                            <img src="{{ '/storage/' . $PlatformValueCreationZenith->whyzenith_icon1 }}" alt="" loading="lazy">
                        </div>
                        <h2 class="card-title">{!! $PlatformValueCreationZenith->getTranslation('whyzenith_title1', session('locale', 'en')) !!}
                        </h2>
                        <p class="card-description">{!! $PlatformValueCreationZenith->getTranslation('whyzenith_content1', session('locale', 'en')) !!}</p>
                    </div>
                    <div class="grid-headline-title-card-sub">
                        <div class="card-icon">
                            <img src="{{ '/storage/' . $PlatformValueCreationZenith->whyzenith_icon2 }}" alt="" loading="lazy">
                        </div>
                        <h2 class="card-title">{!! $PlatformValueCreationZenith->getTranslation('whyzenith_title2', session('locale', 'en')) !!}
                        </h2>
                        <p class="card-description">{!! $PlatformValueCreationZenith->getTranslation('whyzenith_content2', session('locale', 'en')) !!}</p>
                    </div>
                    <div class="grid-headline-title-card-sub">
                        <div class="card-icon">
                            <img src="{{ '/storage/' . $PlatformValueCreationZenith->whyzenith_icon3 }}" alt="" loading="lazy">
                        </div>
                        <h2 class="card-title">{!! $PlatformValueCreationZenith->getTranslation('whyzenith_title3', session('locale', 'en')) !!}
                        </h2>
                        <p class="card-description">{!! $PlatformValueCreationZenith->getTranslation('whyzenith_content3', session('locale', 'en')) !!}</p>
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
                <h1 class="grid-headline-title">{!! $PlatformValueCreationZenith->getTranslation('insidezenith_title', session('locale', 'en')) !!}</h1>
                <h1 class="grid-headline-subtitle-left">{!! $PlatformValueCreationZenith->getTranslation('insidezenith_subtitle', session('locale', 'en')) !!}</h1>
            </div>
            <div class="grid-headline-description-card">
                <div class="masonry-grid-investment-section-sub">
                    <div class="grid-headline-title-card-sub">
                        <div class="card-icon">
                            <img src="{{ '/storage/' . $PlatformValueCreationZenith->insidezenith_icon1 }}" alt="" loading="lazy">
                        </div>
                        <h2 class="card-title">{!! $PlatformValueCreationZenith->getTranslation('insidezenith_title1', session('locale', 'en')) !!}
                        </h2>
                        <p class="card-description">{!! $PlatformValueCreationZenith->getTranslation('insidezenith_content1', session('locale', 'en')) !!}</p>
                    </div>
                    <div class="grid-headline-title-card-sub">
                        <div class="card-icon">
                            <img src="{{ '/storage/' . $PlatformValueCreationZenith->insidezenith_icon2 }}" alt="" loading="lazy">
                        </div>
                        <h2 class="card-title">{!! $PlatformValueCreationZenith->getTranslation('insidezenith_title2', session('locale', 'en')) !!}
                        </h2>
                        <p class="card-description">{!! $PlatformValueCreationZenith->getTranslation('insidezenith_content2', session('locale', 'en')) !!}</p>
                    </div>
                    <div class="grid-headline-title-card-sub">
                        <div class="card-icon">
                            <img src="{{ '/storage/' . $PlatformValueCreationZenith->insidezenith_icon3 }}" alt="" loading="lazy">
                        </div>
                        <h2 class="card-title">{!! $PlatformValueCreationZenith->getTranslation('insidezenith_title3', session('locale', 'en')) !!}
                        </h2>
                        <p class="card-description">{!! $PlatformValueCreationZenith->getTranslation('insidezenith_content3', session('locale', 'en')) !!}</p>
                    </div>
                </div>
                <div class="grid-headline-title-card-sub-bottom">
                    <h1 class="card-title-sub-bottom"></h1>
                    <p class="card-description-bottom"></p>
                </div>
            </div>
        </div>

        <div class="platform-image-containter">
            <h2 class="business-deals-title">{!! $PlatformValueCreationZenith->getTranslation('deal_title', session('locale', 'en')) !!}</h2>
            <div class="business-logos-grid">
                <div class="logo-item">
                    <img src="{{ '/storage/' . $PlatformValueCreationZenith->deal_image_path1 }}" alt="Rekosistem Logo" loading="lazy">
                </div>
                <div class="logo-item">
                    <img src="{{ '/storage/' . $PlatformValueCreationZenith->deal_image_path2 }}" alt="AI Rudder Logo" loading="lazy">
                </div>
                <div class="logo-item">
                    <img src="{{ '/storage/' . $PlatformValueCreationZenith->deal_image_path3 }}" alt="Imajin Logo" loading="lazy">
                </div>
                <div class="logo-item">
                    <img src="{{ '/storage/' . $PlatformValueCreationZenith->deal_image_path4 }}" alt="Lifepack Logo" loading="lazy">
                </div>
                <div class="logo-item">
                    <img src="{{ '/storage/' . $PlatformValueCreationZenith->deal_image_path5 }}" alt="Praktis Logo" loading="lazy">
                </div>
                <div class="logo-item">
                    <img src="{{ '/storage/' . $PlatformValueCreationZenith->deal_image_path6 }}" alt="Fishlog Logo" loading="lazy">
                </div>
            </div>
        </div>

        <div class="platform-image-containter-horizontal">
            <div class="platform-image-containter-grid">

                <video autoplay muted loop playsinline class="platform-video-large">
                    <source src="{{ '/storage/' . $PlatformValueCreationZenith->image_path1 }}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>

                <img class="platform-image-large" src="{{ '/storage/' . $PlatformValueCreationZenith->image_path2 }}" alt="Team Photo">
            </div>
        </div>


        {{-- Article Section --}}
        <div class="masonry-grid-investment-section">
            <div class="grid-headline-title-card">
                <h1 class="grid-headline-title">{!! $PlatformValueCreationZenith->getTranslation('testimonialzenith_title', session('locale', 'en')) !!}</h1>
                <h1 class="grid-headline-subtitle-left">{!! $PlatformValueCreationZenith->getTranslation('testimonialzenith_subtitle', session('locale', 'en')) !!}</h1>
            </div>
            <div class="grid-headline-description-card">
                <div class="masonry-grid-investment-section-sub">
                    @if($PlatformValueCreationZenith->testimonialzenith_logo1)
                    <div class="grid-headline-title-card-sub card-funding">
                        <div class="background-image"></div>
                        <img src="{{ '/storage/' . $PlatformValueCreationZenith->testimonialzenith_logo1 }}" alt="funding2.png" class="card-funding-image" loading="lazy" />
                        <div class="funding-category">
                            {!! $PlatformValueCreationZenith->testimonialzenith_founder1 !!}
                        </div>
                        <div class="card-funding-jobtitle">
                            {!! $PlatformValueCreationZenith->getTranslation('testimonialzenith_title1', session('locale', 'en')) !!}
                        </div>
                        <div class="card-funding-content">
                            {!! $PlatformValueCreationZenith->getTranslation('testimonialzenith_content1', session('locale', 'en')) !!}
                        </div>
                    </div>
                    @endif

                    @if($PlatformValueCreationZenith->testimonialzenith_logo2)
                    <div class="grid-headline-title-card-sub card-funding">
                        <div class="background-image"></div>
                        <img src="{{ '/storage/' . $PlatformValueCreationZenith->testimonialzenith_logo2 }}" alt="funding2.png" class="card-funding-image" loading="lazy" />
                        <div class="funding-category">
                            {!! $PlatformValueCreationZenith->testimonialzenith_founder2 !!}
                        </div>
                        <div class="card-funding-jobtitle">
                            {!! $PlatformValueCreationZenith->getTranslation('testimonialzenith_title2', session('locale', 'en')) !!}
                        </div>
                        <div class="card-funding-content">
                            {!! $PlatformValueCreationZenith->getTranslation('testimonialzenith_content2', session('locale', 'en')) !!}
                        </div>
                    </div>
                    @endif

                    @if($PlatformValueCreationZenith->testimonialzenith_logo3)
                    <div class="grid-headline-title-card-sub card-funding">
                        <div class="background-image"></div>
                        <img src="{{ '/storage/' . $PlatformValueCreationZenith->testimonialzenith_logo3 }}" alt="funding2.png" class="card-funding-image" loading="lazy" />
                        <div class="funding-category">
                            {!! $PlatformValueCreationZenith->testimonialzenith_founder3 !!}
                        </div>
                        <div class="card-funding-jobtitle">
                            {!! $PlatformValueCreationZenith->getTranslation('testimonialzenith_title3', session('locale', 'en')) !!}
                        </div>
                        <div class="card-funding-content">
                            {!! $PlatformValueCreationZenith->getTranslation('testimonialzenith_content3', session('locale', 'en')) !!}
                        </div>
                    </div>
                    @endif

                    @if($PlatformValueCreationZenith->testimonialzenith_logo4)
                    <div class="grid-headline-title-card-sub card-funding">
                        <div class="background-image"></div>
                        <img src="{{ '/storage/' . $PlatformValueCreationZenith->testimonialzenith_logo4 }}" alt="funding2.png" class="card-funding-image" loading="lazy" />
                        <div class="funding-category">
                            {!! $PlatformValueCreationZenith->testimonialzenith_founder4 !!}
                        </div>
                        <div class="card-funding-jobtitle">
                            {!! $PlatformValueCreationZenith->getTranslation('testimonialzenith_title4', session('locale', 'en')) !!}
                        </div>
                        <div class="card-funding-content">
                            {!! $PlatformValueCreationZenith->getTranslation('testimonialzenith_content4', session('locale', 'en')) !!}
                        </div>
                    </div>
                    @endif

                    @if($PlatformValueCreationZenith->testimonialzenith_logo5)
                    <div class="grid-headline-title-card-sub card-funding">
                        <div class="background-image"></div>
                        <img src="{{ '/storage/' . $PlatformValueCreationZenith->testimonialzenith_logo5 }}" alt="funding2.png" class="card-funding-image" loading="lazy" />
                        <div class="funding-category">
                            {!! $PlatformValueCreationZenith->testimonialzenith_founder5 !!}
                        </div>
                        <div class="card-funding-jobtitle">
                            {!! $PlatformValueCreationZenith->getTranslation('testimonialzenith_title5', session('locale', 'en')) !!}
                        </div>
                        <div class="card-funding-content">
                            {!! $PlatformValueCreationZenith->getTranslation('testimonialzenith_content5', session('locale', 'en')) !!}
                        </div>
                    </div>
                    @endif

                    @if($PlatformValueCreationZenith->testimonialzenith_logo6)
                    <div class="grid-headline-title-card-sub card-funding">
                        <div class="background-image"></div>
                        <img src="{{ '/storage/' . $PlatformValueCreationZenith->testimonialzenith_logo6 }}" alt="funding2.png" class="card-funding-image" loading="lazy" />
                        <div class="funding-category">
                            {!! $PlatformValueCreationZenith->testimonialzenith_founder6 !!}
                        </div>
                        <div class="card-funding-jobtitle">
                            {!! $PlatformValueCreationZenith->getTranslation('testimonialzenith_title6', session('locale', 'en')) !!}
                        </div>
                        <div class="card-funding-content">
                            {!! $PlatformValueCreationZenith->getTranslation('testimonialzenith_content6', session('locale', 'en')) !!}
                        </div>
                    </div>
                    @endif
                </div>

                <div class="grid-headline-title-card-sub-bottom">
                    <h1 class="card-title-sub-bottom"></h1>
                    <p class="card-description-bottom"></p>
                </div>
            </div>
        </div>

        <div class="highlight-applynow-bottom">
            <div class="highlight-content">
                <h2 class="highlight-title">{!! $PlatformValueCreationZenith->getTranslation('footer_text', session('locale', 'en')) !!}</h2>
                {{--  <a href="#" class="apply-now-button">Apply Now</a> --}}
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
