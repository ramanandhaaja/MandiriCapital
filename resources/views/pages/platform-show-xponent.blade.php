@extends('layout.mainlayout')

@section('localcss')
    <link href="{{ asset('css/platform-show.css') }}" rel="stylesheet">
@endsection

@section('container')
    <div class="hero-section">
        <img src="{{ '/storage/' . $PlatformValueCreationXponent->hero_background }}" class="video-background" />

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
            <img src="{{ '/storage/' . $PlatformValueCreationXponent->hero_image }}" alt="For Startup" class="right-image">
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
                            <h1 class="card-title-bottom">{{ $PlatformValueCreationXponent->whyexponent_icon1 }}</h1>
                        </div>
                        <h2 class="card-title">{!! $PlatformValueCreationXponent->getTranslation('whyexponent_title1', session('locale', 'en')) !!}
                        </h2>
                        <p class="card-description">{!! $PlatformValueCreationXponent->getTranslation('whyexponent_content1', session('locale', 'en')) !!}</p>
                    </div>
                    <div class="grid-headline-title-card-sub">
                        <div class="card-icon-bottom">
                            <h1 class="card-title-bottom">{{ $PlatformValueCreationXponent->whyexponent_icon2 }}</h1>
                        </div>
                        <h2 class="card-title">{!! $PlatformValueCreationXponent->getTranslation('whyexponent_title2', session('locale', 'en')) !!}
                        </h2>
                        <p class="card-description">{!! $PlatformValueCreationXponent->getTranslation('whyexponent_content2', session('locale', 'en')) !!}</p>
                    </div>
                    <div class="grid-headline-title-card-sub">
                        <div class="card-icon-bottom">
                            <h1 class="card-title-bottom">{{ $PlatformValueCreationXponent->whyexponent_icon3 }}</h1>
                        </div>
                        <h2 class="card-title">{!! $PlatformValueCreationXponent->getTranslation('whyexponent_title3', session('locale', 'en')) !!}
                        </h2>
                        <p class="card-description">{!! $PlatformValueCreationXponent->getTranslation('whyexponent_content3', session('locale', 'en')) !!}</p>
                    </div>
                    <div class="grid-headline-title-card-sub">
                        <div class="card-icon-bottom">
                            <h1 class="card-title-bottom">{{ $PlatformValueCreationXponent->whyexponent_icon4 }}</h1>
                        </div>
                        <h2 class="card-title">{!! $PlatformValueCreationXponent->getTranslation('whyexponent_title4', session('locale', 'en')) !!}
                        </h2>
                        <p class="card-description">{!! $PlatformValueCreationXponent->getTranslation('whyexponent_content4', session('locale', 'en')) !!}</p>
                    </div>
                    <div class="grid-headline-title-card-sub">
                        <div class="card-icon-bottom">
                            <h1 class="card-title-bottom">{{ $PlatformValueCreationXponent->whyexponent_icon5 }}</h1>
                        </div>
                        <h2 class="card-title">{!! $PlatformValueCreationXponent->getTranslation('whyexponent_title5', session('locale', 'en')) !!}
                        </h2>
                        <p class="card-description">{!! $PlatformValueCreationXponent->getTranslation('whyexponent_content5', session('locale', 'en')) !!}</p>
                    </div>
                    <div class="grid-headline-title-card-sub">
                        <div class="card-icon-bottom">
                            <h1 class="card-title-bottom">{{ $PlatformValueCreationXponent->whyexponent_icon6 }}</h1>
                        </div>
                        <h2 class="card-title">{!! $PlatformValueCreationXponent->getTranslation('whyexponent_title6', session('locale', 'en')) !!}
                        </h2>
                        <p class="card-description">{!! $PlatformValueCreationXponent->getTranslation('whyexponent_content6', session('locale', 'en')) !!}</p>
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
                            <h1 class="card-title-bottom">{{ $PlatformValueCreationXponent->insideexponent_icon1 }}</h1>
                        </div>
                        <h2 class="card-title">{!! $PlatformValueCreationXponent->getTranslation('insideexponent_title1', session('locale', 'en')) !!}
                        </h2>
                        <p class="card-description">{!! $PlatformValueCreationXponent->getTranslation('insideexponent_content1', session('locale', 'en')) !!}
                        </p>
                    </div>
                    <div class="grid-headline-title-card-sub">
                        <div class="card-icon-bottom">
                            <h1 class="card-title-bottom">{{ $PlatformValueCreationXponent->insideexponent_icon2 }}</h1>
                        </div>
                        <h2 class="card-title">{!! $PlatformValueCreationXponent->getTranslation('insideexponent_title2', session('locale', 'en')) !!}
                        </h2>
                        <p class="card-description">{!! $PlatformValueCreationXponent->getTranslation('insideexponent_content2', session('locale', 'en')) !!}
                        </p>
                    </div>
                </div>
                <div class="grid-headline-title-card-sub-bottom">
                    <h1 class="card-title-sub-bottom"></h1>
                    <p class="card-description-bottom"></p>
                </div>
            </div>
        </div>


        <div class="platform-image-containter-horizontal">
            @if($PlatformValueCreationXponent->image_path1)
                <img class="platform-image-large" src="{{ '/storage/' . $PlatformValueCreationXponent->image_path1 }}" alt="Team Photo" loading="lazy">
            @endif
            @if($PlatformValueCreationXponent->image_path2)
                <img class="platform-image-large" src="{{ '/storage/' . $PlatformValueCreationXponent->image_path2 }}" alt="Team Photo" loading="lazy">
            @endif
            @if($PlatformValueCreationXponent->image_path3)
                <img class="platform-image-large" src="{{ '/storage/' . $PlatformValueCreationXponent->image_path3 }}" alt="Team Photo" loading="lazy">
            @endif
            @if($PlatformValueCreationXponent->image_path4)
                <img class="platform-image-large" src="{{ '/storage/' . $PlatformValueCreationXponent->image_path4 }}" alt="Team Photo" loading="lazy">
            @endif
            @if($PlatformValueCreationXponent->image_path5)
                <img class="platform-image-large" src="{{ '/storage/' . $PlatformValueCreationXponent->image_path5 }}" alt="Team Photo" loading="lazy">
            @endif

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
                            {!! $PlatformValueCreationXponent->testimonialexponent_founder1 !!}
                        </div>
                        <div class="card-funding-jobtitle">
                            {!! $PlatformValueCreationXponent->getTranslation('testimonialexponent_title1', session('locale', 'en')) !!}
                        </div>
                        <div class="card-funding-content">
                            {!! $PlatformValueCreationXponent->getTranslation('testimonialexponent_content1', session('locale', 'en')) !!}
                        </div>
                    </div>

                    <div class="grid-headline-title-card-sub card-funding">
                        <div class="background-image"></div>
                        <img src="{{ asset('images/platform/dagangan.png') }}" alt="funding2.png"
                            class="card-funding-image" />
                        <div class="funding-category">
                            {!! $PlatformValueCreationXponent->testimonialexponent_founder2 !!}
                        </div>
                        <div class="card-funding-jobtitle">
                            {!! $PlatformValueCreationXponent->getTranslation('testimonialexponent_title2', session('locale', 'en')) !!}
                        </div>
                        <div class="card-funding-content">
                            {!! $PlatformValueCreationXponent->getTranslation('testimonialexponent_content2', session('locale', 'en')) !!}
                        </div>
                    </div>

                    <div class="grid-headline-title-card-sub card-funding">
                        <div class="background-image"></div>
                        <img src="{{ asset('images/platform/ayoconnect.png') }}" alt="funding2.png"
                            class="card-funding-image" />
                        <div class="funding-category">
                            {!! $PlatformValueCreationXponent->testimonialexponent_founder3 !!}
                        </div>
                        <div class="card-funding-jobtitle">
                            {!! $PlatformValueCreationXponent->getTranslation('testimonialexponent_title3', session('locale', 'en')) !!}
                        </div>
                        <div class="card-funding-content">
                            {!! $PlatformValueCreationXponent->getTranslation('testimonialexponent_content3', session('locale', 'en')) !!}
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
@endsection
