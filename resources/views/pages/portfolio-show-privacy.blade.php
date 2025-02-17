@extends('layout.mainlayout')
@use('Illuminate\Support\Facades\Storage')


@section('localcss')
    <link href="{{ asset('css/privacy.css') }}" rel="stylesheet">
@endsection


@section('container')

    <div class="top-hero-section">
        <div class="center-text">PRIVACY POLICY</div>
    </div>

    <div class="hero-section">
        <div class="hero-content" style="background-image: url('{{ asset('images/portfolio/privacy-policy.jpg') }}');">
        </div>
    </div>



    <div class="table-display-portfolio">
        <div class="portfolio-section">
            {{-- Table Header --}}
            <div class="portfolio-header">
                <div class="header-cell">Year </div>
                <div class="header-cell">Description</div>
                <div class="header-cell"></div>
            </div>

            <div class="portfolio-row">
                <div class="info-label">2024 </div>
                <div class="description-cell">Kebijakan Privasi - Pasangan Usaha & Investor</div>
                <div class="download-cell">
                    <a href="{{ asset('images/portfolio/01KebijakanPrivasi.pdf') }}" target="_blank" class="website-link"> Download <i class="fas fa-file-pdf"></i></a></div>
            </div>
            <div class="portfolio-row">
                <div class="info-label">2024 </div>
                <div class="description-cell">Kebijakan Privasi - Tenaga Alih Daya</div>
                <div class="download-cell">
                    <a href="{{ asset('images/portfolio/02KebijakanPrivasi.pdf') }}" target="_blank" class="website-link"> Download <i class="fas fa-file-pdf"></i></a></div>
            </div>
            <div class="portfolio-row">
                <div class="info-label">2024 </div>
                <div class="description-cell">Kebijakan Privasi - Peserta Pemagangan</div>
                <div class="download-cell">
                    <a href="{{ asset('images/portfolio/03KebijakanPrivasi.pdf') }}" target="_blank" class="website-link"> Download <i class="fas fa-file-pdf"></i></a></div>
            </div>
            <div class="portfolio-row">
                <div class="info-label">2024 </div>
                <div class="description-cell">Kebijakan Privasi - Pihak Ketiga</div>
                <div class="download-cell">
                    <a href="{{ asset('images/portfolio/04KebijakanPrivasi.pdf') }}" target="_blank" class="website-link"> Download <i class="fas fa-file-pdf"></i></a></div>
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
