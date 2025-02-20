@extends("layout.mainlayout")

@section('localcss')
    <link href="{{ asset('css/404.css') }}" rel="stylesheet">
@endsection

@section("container")

<div class="newsletter-section">
    <div class="newsletter-container">
        @php
            $heroError = \App\Models\HeroError::first();
            $locale = session('locale', config('app.locale'));
            app()->setLocale($locale);
        @endphp

        <img src="{{ '/storage/' . $heroError->image_path }}" alt="404" class="center-largeimage-newsletter">
        <h2 class="newsletter-title">{!! $heroError->getTranslation('title', $locale) !!}</h2>
        <p class="newsletter-subtitle">{!! $heroError->getTranslation('subtitle', $locale) !!}</p>
        <a href="javascript:history.back()">
            <img src="{{ asset('images/404/back.png') }}" alt="back" class="button-image center-image-newsletter">
        </a>
    </div>
</div>

@endsection
