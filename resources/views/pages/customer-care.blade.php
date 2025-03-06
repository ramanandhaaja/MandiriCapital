@extends('layout.mainlayout')
@use('Illuminate\Support\Facades\Storage')


@section('localcss')
    <link href="{{ asset('css/customer-care.css') }}" rel="stylesheet">
    <style>
        :root {
            --font-size-base: {{ $masterData->font_size ?? '14px' }};
        }
    </style>
@endsection

@section('container')
    <div class="top-hero-section">
        <div class="center-text">{!! $hero->getTranslation('title', session('locale', 'en')) !!}</div>
        {{--  <div class="center-text">{{ session('locale', 'en') == 'en' ? 'PRIVACY POLICY' : 'KEBIJAKAN PRIVASI' }}</div> --}}
    </div>

    <div class="hero-section">
        <div class="hero-content" style="background-image: url('{{ '/storage/' . $hero->image_path }}');">
        </div>
    </div>



    {{-- Get Investment Section --}}
    <div class="get-investement-section">
        {{-- Article Section --}}

        <div class="masonry-grid-investment-section">
            <div class="grid-headline-title-card">
                <h1 class="grid-headline-title">{!! $customerCareComplaint->getTranslation('customer_care_title', session('locale', 'en')) !!}</h1>
                <h1 class="grid-headline-subtitle-left">{!! $customerCareComplaint->getTranslation('customer_care_subtitle', session('locale', 'en')) !!}</h1>
            </div>
            <div class="grid-headline-description-card">
                <div class="masonry-grid-investment-section-sub" style="background-image: url('{{ asset('images/report/custcarebg.png') }}'); height: 250px; width: 800px;background-size: contain; background-position: top; background-repeat: no-repeat">
                    <div class="grid-headline-title-card-sub">
                        <div class="card-custcare-icon">
                            <img style="width: 100px" src="{{ '/storage/' . $customerCareComplaint->customer_care_image1 }}" alt="">
                        </div>
                        <div class="card-custcare-content">
                            <div class="card-icon-bottom">
                                <h1 class="card-title-bottom">{{ $customerCareComplaint->customer_care_icon1 }}</h1>
                            </div>
                            <h2 class="card-title">{!! $customerCareComplaint->getTranslation('customer_care_title1', session('locale', 'en')) !!}
                            </h2>
                            <p class="card-description">{!! $customerCareComplaint->getTranslation('customer_care_content1', session('locale', 'en')) !!}</p>
                        </div>

                    </div>
                    <div class="grid-headline-title-card-sub">
                        <div class="card-custcare-icon">
                            <img style="width: 100px" src="{{ '/storage/' . $customerCareComplaint->customer_care_image2 }}" alt="">
                        </div>
                        <div class="card-custcare-content">
                            <div class="card-icon-bottom">
                                <h1 class="card-title-bottom">{{ $customerCareComplaint->customer_care_icon2 }}</h1>
                            </div>
                            <h2 class="card-title">{!! $customerCareComplaint->getTranslation('customer_care_title2', session('locale', 'en')) !!}
                            </h2>
                            <p class="card-description">{!! $customerCareComplaint->getTranslation('customer_care_content2', session('locale', 'en')) !!}</p>
                        </div>

                    </div>
                    <div class="grid-headline-title-card-sub">
                        <div class="card-custcare-icon">
                            <img style="width: 100px" src="{{ '/storage/' . $customerCareComplaint->customer_care_image3 }}" alt="">
                        </div>
                        <div class="card-custcare-content">
                            <div class="card-icon-bottom">
                                <h1 class="card-title-bottom">{{ $customerCareComplaint->customer_care_icon4 }}</h1>
                            </div>
                            <h2 class="card-title">{!! $customerCareComplaint->getTranslation('customer_care_title4', session('locale', 'en')) !!}
                            </h2>
                            <p class="card-description">{!! $customerCareComplaint->getTranslation('customer_care_content4', session('locale', 'en')) !!}</p>
                        </div>
                    </div>
                    <div class="grid-headline-title-card-sub">
                        <div class="card-custcare-icon">
                            <img style="width: 100px" src="{{ '/storage/' . $customerCareComplaint->customer_care_image4 }}" alt="">
                        </div>
                        <div class="card-custcare-content">
                            <div class="card-icon-bottom">
                                <h1 class="card-title-bottom">{{ $customerCareComplaint->customer_care_icon3 }}</h1>
                            </div>
                            <h2 class="card-title">{!! $customerCareComplaint->getTranslation('customer_care_title3', session('locale', 'en')) !!}
                            </h2>
                            <p class="card-description">{!! $customerCareComplaint->getTranslation('customer_care_content3', session('locale', 'en')) !!}</p>
                        </div>

                    </div>


                </div>
                <div class="grid-headline-title-card-sub-bottom">
                    <h1 class="card-title-sub-bottom"></h1>
                    <p class="card-description-bottom"></p>
                </div>
            </div>
        </div>
    </div>


    {{-- Priority Sectors --}}
    <div class="headline-section">
        <h1 class="headline-title">{!! $customerCareHow->getTranslation('customer_care_title', session('locale', 'en')) !!}</h1>
        <div class="headline-grid-four middle-animation">
            <div class="headline-card">
                <img class="headline-image" src="{{ '/storage/' . $customerCareHow->customer_care_icon1 }}"
                    alt="{{ $customerCareHow->customer_care_title1 }}" loading="lazy">
                <h1>{!! $customerCareHow->getTranslation('customer_care_title1', session('locale', 'en')) !!}</h1>
                <p>{!! $customerCareHow->customer_care_content1 !!}</p>
            </div>
            <div class="headline-card middle-border">
                <img class="headline-image" src="{{ '/storage/' . $customerCareHow->customer_care_icon2 }}"
                    alt="{{ $customerCareHow->customer_care_title2 }}" loading="lazy">
                <h1>{!! $customerCareHow->getTranslation('customer_care_title2', session('locale', 'en')) !!}</h1>
                <p>{!! $customerCareHow->customer_care_content2 !!}</p>
            </div>
            <div class="headline-card middle-border">
                <img class="headline-image" src="{{ '/storage/' . $customerCareHow->customer_care_icon3 }}"
                    alt="{{ $customerCareHow->customer_care_title3 }}" loading="lazy">
                <h1>{!! $customerCareHow->getTranslation('customer_care_title3', session('locale', 'en')) !!}</h1>
                <p>{!! $customerCareHow->customer_care_content3 !!}</p>
            </div>
            <div class="headline-card left-border">
                <img class="headline-image" src="{{ '/storage/' . $customerCareHow->customer_care_icon4 }}"
                    alt="{{ $customerCareHow->customer_care_title4 }}" loading="lazy">
                <h1>{!! $customerCareHow->getTranslation('customer_care_title4', session('locale', 'en')) !!}</h1>
                <p>{!! $customerCareHow->customer_care_content4 !!}</p>
            </div>
        </div>
    </div>


    {{-- Newsletter Section --}}
    <div class="newsletter-section">
        <div class="newsletter-container">
            <h2 class="newsletter-title">{!! $masterData->getTranslation('footer', session('locale', 'en')) !!}</h2>
            <a href="{{ route('contact') }}">
                <img src="{{ asset('images/portfolio/letsconnect.png') }}" alt="Lets Connect"
                    class="button-image center-image-newsletter" loading="lazy">
            </a>
        </div>
    </div>
@endsection
