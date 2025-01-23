@extends('layout.mainlayout')
@use('Illuminate\Support\Facades\Storage')

@section('localcss')
    <link href="{{ asset('css/platform.css') }}" rel="stylesheet">
@endsection

@section('container')
    {{-- Hero Section --}}
    <div class="hero-section">
        <video autoplay muted loop playsinline class="video-background">
            <source src="{{ '/storage/' . $hero->image_path }}" type="video/mp4">
        </video>

        <div class="hero-content">
            <h1 class="hero-main-text">VALUE CREATION</h1>
            <div class="center-search">
                <div class="category-filters">
                    <a href="#" class="filter-link active" data-filter="business">Business Unit</a>
                    <a href="#" class="filter-link" data-filter="program">Program</a>
                </div>
            </div>
        </div>
    </div>

    {{-- Business Units Section --}}
    <div class="headline-section" id="business-section">

        <div class="hero-mid-section">
            <h1 class="center-text">Catalysing Growth Through Synergy with Our Value Creation Programs</h1>
        </div>

        <div class="headline-section-two">
            <div class="headline-grid-counter">
                @php
                    $dummyArticles = [
                        ['title' => 'PROJECTS','subtitle' => 'hand to business unit', 'content' => '120+'],
                        ['title' => 'STARTUPS','subtitle' => 'work with our business unit', 'content' => '40'],
                        ['title' => 'BUSINESS UNITS','subtitle' => 'mandiri and subsidiaries work with statups', 'content' => '40+']
                    ];
                @endphp
                @foreach($dummyArticles as $index => $article)
                    <div class="headline-card-two {{ $index === 1 ? 'middle-border' : '' }}">
                        <div id="counter{{ $index + 1 }}" class="counter" data-value="{{ $article['content'] }}">{{ $article['content'] }}</div>
                        <h1>{{ $article['title'] }}</h1>
                        <p class="subtitle">{{ $article['subtitle'] }}</p>
                        </div>
                @endforeach
            </div>
        </div>


        <div class="headline-grid-two middle-animation">


                <div class="headline-card">
                    <img class="headline-image" src="{{ asset('images/platform/livin.png') }}" alt="Livin' by Mandiri">
                    <h1>Livin’ by Mandiri</h1>
                    <p>Mobile banking application designed to simplify financial transactions for retail customers with a wide range of features, including fund transfers, bill payments, QR code payments, and personal financial management tools, providing a seamless and secure digital banking experience.
                    </p>
                </div>
                <div class="headline-card left-border">
                    <img class="headline-image" src="{{ asset('images/platform/kopra.png') }}" alt="Kopra by Mandiri">
                    <h1>Kopra by Mandiri</h1>
                    <p>Bank Mandiri's digital platform tailored for corporate clients. It integrates comprehensive solutions for cash management, trade finance, and business operations, enabling companies to optimize their financial processes efficiently and securely.
                    </p>
                </div>

        </div>


        <div class="headline-grid-four middle-animation">

            @foreach ($businessUnitList as $index => $unit)
                <div class="headline-card {{ $index % 4 >= 1 && $index % 4 <= 3 ? 'left-border' : '' }}">
                    <img class="headline-image" src="{{ '/storage/' . $unit->image_path }}" alt="{{ $unit->title }}">
                    <h1>{{ $unit->title }}</h1>
                    <p>{{ $unit->content }}</p>
                </div>
            @endforeach

        </div>
    </div>

    {{-- Synergy Programs Section --}}
    <section class="synergy-section" id="program-section">
        <div class="hero-mid-section">
            <h1 class="center-text">Our value creation program</h1>
        </div>

        @foreach ($valueCreationList as $index => $program)
            <div class="synergy-container {{ $index % 2 === 1 ? 'dark' : '' }}">
                <div class="synergy-grid">
                    @if ($index % 2 === 1)
                        <div class="synergy-image">
                            <img src="{{ '/storage/' . $program->image_path_frontpage }}" alt="{{ $program->title }}" style="height: 500px;">
                        </div>
                    @endif

                    <div class="synergy-content">
                        <img src="{{ '/storage/' . $program->logo }}" alt="{{ $program->title }}" style="height: 80px;">
                        <h2 class="synergy-title">{{ $program->content_frontpage }}</h2>
                        <div class="synergy-info">
                            <p>{{ $program->content_sub_frontpage }}</p>
                        </div>

                        <div class="synergy-number">
                            <div class="number-item">
                                <div class="number-label">MOU PKS</div>
                                <div class="number-value">00</div>
                            </div>
                            <div class="number-item">
                                <div class="number-label">Synergy Volume</div>
                                <div class="number-value">00</div>
                            </div>
                            <div class="number-item">
                                <div class="number-label">Success Story</div>
                                <div class="number-value">00</div>
                            </div>
                        </div>

                        <div class="synergy-register">
                            <a href="{{ route('platform.show', $program->slug) }}" class="register-btn btn-detail">View Detail</a>
                            <a href="#" class="register-btn btn-register">Register Now</a>
                        </div>
                    </div>
                    @if ($index % 2 === 0)
                        <div class="synergy-image">
                            <img src="{{ '/storage/' . $program->image_path_frontpage }}" alt="{{ $program->title }}" style="height: 500px;">
                        </div>
                    @endif
                </div>
            </div>
        @endforeach
    </section>

    {{-- Newsletter Section --}}
    <div class="newsletter-section">
        <div class="newsletter-container">
            <h2 class="newsletter-title">WE'D LOVE TO HEAR FROM YOU</h2>

            <a href="{{ route('contact') }}">
                <img src="{{ asset('images/portfolio/letsconnect.png') }}" alt="Lets Connect"
                    class="button-image center-image-newsletter">
            </a>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // DOM Elements
            const elements = {
                filterLinks: document.querySelectorAll('.filter-link'),
                businessSection: document.getElementById('business-section'),
                programSection: document.getElementById('program-section')
            };

            // Show/Hide sections based on filter
            function updateSections(filter) {
                elements.businessSection.style.display = filter === 'business' ? 'block' : 'none';
                elements.programSection.style.display = filter === 'program' ? 'block' : 'none';
            }

            // Event Listeners
            elements.filterLinks.forEach(link => {
                link.addEventListener('click', function(e) {
                    e.preventDefault();

                    // Update active state
                    elements.filterLinks.forEach(l => l.classList.remove('active'));
                    this.classList.add('active');

                    // Show/hide sections
                    const filter = this.getAttribute('data-filter');
                    updateSections(filter);
                });
            });

            // Initialize with business section
            updateSections('business');
        });
    </script>
@endsection
