@extends('layout.mainlayout')
@use('Illuminate\Support\Facades\Storage')


@section('localcss')
    <link href="{{ asset('css/privacy.css') }}" rel="stylesheet">
@endsection


@section('container')

    <div class="top-hero-section">
        <div class="center-text">{!! $hero->getTranslation('title', session('locale', 'en')) !!}</div>
        {{--  <div class="center-text">{{ session('locale', 'en') == 'en' ? 'PRIVACY POLICY' : 'KEBIJAKAN PRIVASI' }}</div>--}}
    </div>

    <div class="hero-section">
        <div class="hero-content" style="background-image: url('{{ '/storage/' . $hero->image_path }}');">
        </div>
    </div>



    <div class="table-display-portfolio">
        <div class="portfolio-section">
            {{-- Table Header --}}
            <div class="portfolio-header">
                <div class="header-cell">{{ session('locale', 'en') == 'en' ? 'Year' : 'Tahun' }}</div>
                <div class="header-cell">{{ session('locale', 'en') == 'en' ? 'Description' : 'Deskripsi' }}</div>
                <div class="header-cell"></div>
            </div>

            @foreach($privacyPolicies as $policy)
            <div class="portfolio-row">
                <div class="info-label">{{ $policy->year }}</div>
                <div class="description-cell">{{ $policy->getTranslation('description', session('locale', 'en')) }}</div>
                <div class="download-cell">
                    <a href="{{ asset('storage/' . $policy->file_url) }}" target="_blank" class="website-link">{{ session('locale', 'en') == 'en' ? 'Download' : 'Unduh' }} <i class="fas fa-file-pdf"></i></a>
                </div>
            </div>
            @endforeach
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
