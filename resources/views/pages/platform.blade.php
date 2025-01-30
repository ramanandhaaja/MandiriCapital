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

        {{--
        <div class="headline-grid-four middle-animation">

            @foreach ($businessUnitList as $index => $unit)
                <div class="headline-card {{ $index % 4 >= 1 && $index % 4 <= 3 ? 'left-border' : '' }}">
                    <img class="headline-image" src="{{ '/storage/' . $unit->image_path }}" alt="{{ $unit->title }}">
                    <h1>{{ $unit->title }}</h1>
                    <p>{{ $unit->content }}</p>
                </div>
            @endforeach

        </div>
        --}}



        @php
            $portfolioArticlesList = [
                [
                    'id' => 1,
                    'title' => 'Embedded Finance',
                    'content' => ''
                ],
                [
                    'id' => 2,
                    'title' => 'Health & Wellness',
                    'content' => ''
                ],
                [
                    'id' => 3,
                    'title' => 'Wealth Management',
                    'content' => ''
                ],
                [
                    'id' => 4,
                    'title' => 'Tech Enabler',
                    'content' => ''
                ],
                [
                    'id' => 5,
                    'title' => 'Value Chain Enabler',
                    'content' => ''
                ],
                [
                    'id' => 6,
                    'title' => 'Property Tech & Asset Management',
                    'content' => ''
                ]
            ];

            $portfolioArticleSubList = collect([
                // Embedded Finance section
                [
                    'article_id' => 1,
                    'title' => 'Generative AI',
                    'icon' => 'images/platform/1.png',
                    'text_icon' => null
                ],
                [
                    'article_id' => 1,
                    'title' => 'Financial Management',
                    'icon' => 'images/platform/2.png',
                    'text_icon' => null
                ],
                [
                    'article_id' => 1,
                    'title' => 'Data Management',
                    'icon' => 'images/platform/3.png',
                    'text_icon' => null
                ],
                [
                    'article_id' => 1,
                    'title' => 'Personalisation',
                    'icon' => 'images/platform/4.png',
                    'text_icon' => null
                ],
                // Health & Wellness section
                [
                    'article_id' => 2,
                    'title' => 'Health & Wellness',
                    'icon' => 'images/platform/5.png',
                    'text_icon' => null
                ],
                // Wealth Management section
                [
                    'article_id' => 3,
                    'title' => 'Wealth Management',
                    'icon' => 'images/platform/6.png',
                    'text_icon' => null
                ],
                // Tech Enabler section
                [
                    'article_id' => 4,
                    'title' => 'SaaS',
                    'icon' => 'images/platform/7.png',
                    'text_icon' => null
                ],
                [
                    'article_id' => 4,
                    'title' => 'Online Payment',
                    'icon' => 'images/platform/8.png',
                    'text_icon' => null
                ],
                [
                    'article_id' => 4,
                    'title' => 'Cash Collection',
                    'icon' => 'images/platform/9.png',
                    'text_icon' => null
                ],
                // Value Chain Enabler section
                [
                    'article_id' => 5,
                    'title' => 'Lifestyle',
                    'icon' => 'images/platform/10.png',
                    'text_icon' => null
                ],
                [
                    'article_id' => 5,
                    'title' => 'FMCG',
                    'icon' => 'images/platform/11.png',
                    'text_icon' => null
                ],
                [
                    'article_id' => 5,
                    'title' => 'Health',
                    'icon' => 'images/platform/12.png',
                    'text_icon' => null
                ],
                [
                    'article_id' => 5,
                    'title' => 'Cash Collection',
                    'icon' => 'images/platform/13.png',
                    'text_icon' => null
                ],
                [
                    'article_id' => 5,
                    'title' => 'Transportation',
                    'icon' => 'images/platform/14.png',
                    'text_icon' => null
                ],
                // Property Tech & Asset Management section
                [
                    'article_id' => 6,
                    'title' => 'Asset Liquidation',
                    'icon' => 'images/platform/15.png',
                    'text_icon' => null
                ],
                [
                    'article_id' => 6,
                    'title' => 'Product bundling for wealth customers',
                    'icon' => 'images/platform/16.png',
                    'text_icon' => null
                ],
                [
                    'article_id' => 6,
                    'title' => 'Idle asset management',
                    'icon' => 'images/platform/17.png',
                    'text_icon' => null
                ]
            ]);
        @endphp

            <div class="masonry-grid-investment-section-grey">
                <div class="grid-headline-title-card">
                    <h1 class="grid-headline-title">What we focus on?</h1>
                </div>

                <div class="grid-headline-description-card">
                    @foreach ($portfolioArticlesList as $index => $article)
                        <div class="section-content">
                            <h1 class="grid-headline-title-sub">{{ $article['title'] }}</h1>
                            <div class="masonry-grid-investment-section-sub">
                                @foreach ($portfolioArticleSubList->where('article_id', $article['id']) as $subArticle)
                                    <div class="grid-headline-title-card-sub">
                                        @if ($subArticle['icon'])
                                            <div class="card-icon">
                                                <img src="{{ asset($subArticle['icon']) }}"
                                                    alt="{{ $subArticle['title'] }} Icon">
                                            </div>
                                        @else
                                            <div class="card-icon-bottom">
                                                <h1 class="card-title-bottom">{{ $subArticle['text_icon'] }}</h1>
                                            </div>
                                        @endif
                                        <h2 class="card-title">{{ $subArticle['title'] }}</h2>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

        {{-- UNLOCK YOUR POTENTIAL  --}}
        <div class="potential-section">
            <div class="potential-title-card">
                <h1 class="potential-title">Unlock Your Potentials</h1>
            </div>

            <div class="potential-content-card">
                <div class="potential-content-section">
                    <h1 class="potential-subtitle">Ecosystem Driven</h1>
                    <p class="potential-description">We empower innovation and foster collaboration by leveraging our strategic position within the Mandiri Group and its extensive network.</p>
                    <p class="potential-description">Beyond Mandiri Group, we also help startups to connect with SOEs and other corporations.</p>
                </div>

                <div class="potential-content-section">
                    <h1 class="potential-subtitle">Tailored Guidance</h1>
                    <p class="potential-description">Through our value creation programs, we offer hands-on support to scale your business and operations excellence.</p>
                </div>

                <div class="potential-content-section">
                    <h1 class="potential-subtitle">Access to Indonesia and Global Market:</h1>
                    <p class="potential-description">At the forefront of innovation, MCI supports startups worldwide in their expansion efforts.</p>
                </div>
            </div>
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
            <h2 class="newsletter-title">Got Questionss? Let Us Know!</h2>

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
