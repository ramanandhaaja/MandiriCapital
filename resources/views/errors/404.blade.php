@extends("layout.mainlayout")

@section('localcss')
    <link href="{{ asset('css/404.css') }}" rel="stylesheet">
@endsection

@section("container")

<div class="newsletter-section">
    <div class="newsletter-container">

        <img src="{{ asset('images/404/404.gif') }}" alt="404" class="center-largeimage-newsletter">
        <h2 class="newsletter-title">This page is under construction</h2>
        <p class="newsletter-subtitle">Our website is under construction. We are preparing something amazing and exciting for you! </p>
        <a href="javascript:history.back()">
            <img src="{{ asset('images/404/back.png') }}" alt="back" class="button-image center-image-newsletter">
        </a>
    </div>
</div>

@endsection
