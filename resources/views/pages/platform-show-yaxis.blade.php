@extends('layout.mainlayout')

@section('localcss')
    <link href="{{ asset('css/platform-show.css') }}" rel="stylesheet">
@endsection

@section('container')
    <div class="hero-section">
        <div class="hero-content">
            <div class="center-text">{!! $PlatformValueCreationYaxis->getTranslation('hero_text', session('locale', 'en')) !!}</div>
            {{--
            <div class="image-container">
                <img src="{{ asset('images/platform/forstartup.png') }}" alt="For Startup" class="button-image center-image"
                    onclick="openPitchModal()">
            </div>
             --}}
        </div>
        <div class="hero-content">
            <img src="{{ '/storage/' . $PlatformValueCreationYaxis->hero_image }}" alt="For Startup" class="right-image" loading="lazy">
        </div>
    </div>

    {{-- Get Investment Section --}}
    <div class="get-investement-section">

        <div class="hero-mid-section">
            <h1 class="center-text-midsection">{!! $PlatformValueCreationYaxis->getTranslation('headline', session('locale', 'en')) !!}</h1>
        </div>



        <div class="platform-image-containter-horizontal-yaxis">
            <img class="platform-image-large-yaxis" src="{{ '/storage/' . $PlatformValueCreationYaxis->image_path1 }}" alt="Team Photo" loading="lazy">
        </div>



        <div class="highlight-applynow-bottom">
            <div class="highlight-content">
                <h2 class="highlight-title">{!! $PlatformValueCreationYaxis->getTranslation('footer_text', session('locale', 'en')) !!}</h2>
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
