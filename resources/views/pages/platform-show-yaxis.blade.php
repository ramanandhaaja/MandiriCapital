@extends('layout.mainlayout')

@section('localcss')
    <link href="{{ asset('css/platform-show.css') }}" rel="stylesheet">
@endsection

@section('container')
    <div class="hero-section">
        <div class="hero-content">
            <div class="center-text">Networking and Collaboration Platform</div>
            <div class="image-container">
                <img src="{{ asset('images/platform/forstartup.png') }}" alt="For Startup" class="button-image center-image"
                    onclick="openPitchModal()">
            </div>
        </div>
        <div class="hero-content">
            <img src="{{ asset('images/platform/yaxislg.png') }}" alt="For Startup" class="right-image">
        </div>
    </div>

    {{-- Get Investment Section --}}
    <div class="get-investement-section">

        <div class="hero-mid-section">
            <h1 class="center-text-midsection">Networking and collaboration platform designed to connect startups, corporations, regulator, and tech communities. Y-axis is a catalyst for building a stronger, more collaborative ecosystem</h1>
        </div>



        <div class="platform-image-containter-horizontal-yaxis">
            <img class="platform-image-large-yaxis" src="{{ asset('images/platform/large-image-yaxis.png') }}" alt="Team Photo">
        </div>



        <div class="highlight-applynow-bottom">
            <div class="highlight-content">
                <h2 class="highlight-title">Connecting the Dots</h2>
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
