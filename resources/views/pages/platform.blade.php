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
            <h1 class="center-text">A Chance To Collaborate With Bank Mandiri's Business Units</h1>
        </div>
        <div class="headline-grid-four middle-animation">
            @php
                $businessUnits = [
                    [
                        'title' => 'Software as a Service',
                        'description' => 'Property tech startups that open to synergy in loan channeling',
                        'image' => 'sector.png'
                    ],
                    [
                        'title' => 'Deep Tech',
                        'description' => 'Startups that can support business function in payment related, such as payment gateway, cash collection, customer loyalty and rewards',
                        'image' => 'sector.png'
                    ],
                    [
                        'title' => 'Fintech',
                        'description' => 'Startups that can support business function in payment related, such as payment gateway, cash collection, customer loyalty and rewards',
                        'image' => 'sector.png'
                    ],
                    [
                        'title' => 'Value Chain',
                        'description' => 'Startups that can support business function in payment related, such as payment gateway, cash collection, customer loyalty and rewards',
                        'image' => 'sector.png'
                    ]
                ];
            @endphp

            @foreach($businessUnits as $index => $unit)
                <div class="headline-card {{ $index > 0 ? ($index % 4 === 3 ? 'left-border' : 'middle-border') : '' }}">
                    <img class="headline-image" src="{{ asset('images/about/' . $unit['image']) }}" alt="{{ $unit['title'] }}">
                    <h1>{{ $unit['title'] }}</h1>
                    <p>{{ $unit['description'] }}</p>
                </div>
            @endforeach

            {{-- Duplicate the cards for the second row --}}
            @foreach($businessUnits as $index => $unit)
                <div class="headline-card {{ $index > 0 ? ($index % 4 === 3 ? 'left-border' : 'middle-border') : '' }}">
                    <img class="headline-image" src="{{ asset('images/about/' . $unit['image']) }}" alt="{{ $unit['title'] }}">
                    <h1>{{ $unit['title'] }}</h1>
                    <p>{{ $unit['description'] }}</p>
                </div>
            @endforeach
        </div>
    </div>

    {{-- Synergy Programs Section --}}
    <section class="synergy-section" id="program-section">
        <div class="hero-mid-section">
            <h1 class="center-text">Our value creation program</h1>
        </div>

        @php
            $synergyPrograms = [
                [
                    'title' => 'Connecting Startups Discover What\'s Possible',
                    'image' => 'synergy1',
                    'content' => [
                        'cXponent merupakan program dari Mandiri Capital Indonesia (MCI) yang mendorong sinergi antara unit bisnis di Mandiri Group dengan perusahaan rintisan (startup).',
                        'Melalui sinergi, ditemukan peluang untuk meningkatkan pertumbuhan yang berkelanjutan dan nilai sinergi yang baik.',
                        'Xponent menawarkan platform yang ideal bagi para startup untuk menjalin kemitraan yang inovatif dan mendorong terobosan di sektor industri, sehingga dapat membuka jalan menuju hari esok yang lebih cerah.'
                    ],
                    'showButtons' => true,
                    'imageRight' => false
                ],
                [
                    'title' => 'Connecting Startups Discover What\'s Possible',
                    'image' => 'synergy2',
                    'content' => [
                        'cXponent merupakan program dari Mandiri Capital Indonesia (MCI) yang mendorong sinergi antara unit bisnis di Mandiri Group dengan perusahaan rintisan (startup).',
                        'Melalui sinergi, ditemukan peluang untuk meningkatkan pertumbuhan yang berkelanjutan dan nilai sinergi yang baik.',
                        'Xponent menawarkan platform yang ideal bagi para startup untuk menjalin kemitraan yang inovatif dan mendorong terobosan di sektor industri, sehingga dapat membuka jalan menuju hari esok yang lebih cerah.'
                    ],
                    'showButtons' => false,
                    'imageRight' => true
                ],
                [
                    'title' => 'Connecting Startups Discover What\'s Possible',
                    'image' => 'synergy3',
                    'content' => [
                        'cXponent merupakan program dari Mandiri Capital Indonesia (MCI) yang mendorong sinergi antara unit bisnis di Mandiri Group dengan perusahaan rintisan (startup).',
                        'Melalui sinergi, ditemukan peluang untuk meningkatkan pertumbuhan yang berkelanjutan dan nilai sinergi yang baik.',
                        'Xponent menawarkan platform yang ideal bagi para startup untuk menjalin kemitraan yang inovatif dan mendorong terobosan di sektor industri, sehingga dapat membuka jalan menuju hari esok yang lebih cerah.'
                    ],
                    'showButtons' => true,
                    'imageRight' => false
                ]
            ];
        @endphp

        @foreach($synergyPrograms as $index => $program)
            <div class="synergy-container {{ $index % 2 === 1 ? 'dark' : '' }}">
                <div class="synergy-grid">
                    @if(!$program['imageRight'])
                        <div class="synergy-iframe-container">
                            <img src="/images/platform/{{ $program['image'] }}.png" alt="Program Image" class="synergy-iframe">
                            <img src="/images/platform/{{ $program['image'] }}.gif" alt="Program Animation" class="synergy-iframe-gif">
                        </div>
                    @endif

                    <div class="synergy-content">
                        <h2 class="synergy-title">{{ $program['title'] }}</h2>
                        <div class="synergy-info">
                            @foreach($program['content'] as $paragraph)
                                <p>{{ $paragraph }}</p>
                            @endforeach
                        </div>

                        <div class="synergy-number">
                            @foreach(['MOU PKS', 'Synergy Volume', 'Success Story'] as $metric)
                                <div class="number-item">
                                    <div class="number-label">{{ $metric }}</div>
                                    <div class="number-value">00</div>
                                </div>
                            @endforeach
                        </div>

                        @if($program['showButtons'])
                            <div class="synergy-register">
                                <a href="#" class="register-btn btn-detail">View Detail</a>
                                <a href="#" class="register-btn btn-register">Register Now</a>
                            </div>
                        @endif
                    </div>

                    @if($program['imageRight'])
                        <div class="synergy-iframe-container">
                            <img src="/images/platform/{{ $program['image'] }}.png" alt="Program Image" class="synergy-iframe right">
                            <img src="/images/platform/{{ $program['image'] }}.gif" alt="Program Animation" class="synergy-iframe-gif right">
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

            <a href="#">
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
