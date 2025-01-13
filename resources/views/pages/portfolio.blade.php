@extends('layout.mainlayout')

@section('localcss')
    <link href="{{ asset('css/portfolio.css') }}" rel="stylesheet">
@endsection

@section('container')

    <div class="hero-section">
        <video autoplay muted loop playsinline class="video-background">
            <source src="{{ '/storage/' . $hero->image_path }}" type="video/mp4">
        </video>
        <div class="hero-content">
            <a href="#">
                <h1 class="hero-main-text">INVESTMENT </h1>
            </a>
            <div class="center-search">
                <div class="search-input-container">
                    <input type="text" placeholder="Search..." class="search-input">
                    <i class="fas fa-search search-input-icon"></i>
                </div>
                <div class="category-filters">
                    <a href="#" class="filter-link active" data-category="get_investment">Get Investment</a>
                    <a href="#" class="filter-link" data-category="portfolio">Portfolio</a>
                    <a href="#" class="filter-link" data-category="funding">Funding</a>
                </div>
            </div>
        </div>
    </div>

    {{-- Get Investment Section --}}
    <div class="get-investement-section">
        @php
            // Define investment process steps
            $investmentSteps = [
                [
                    'step' => '01',
                    'title' => 'Initial Contact',
                    'description' => 'Submit your pitch deck and business proposal for our initial review.',
                ],
                [
                    'step' => '02',
                    'title' => 'Screening',
                    'description' => 'Our team evaluates your proposal against our investment criteria.',
                ],
                [
                    'step' => '03',
                    'title' => 'Due Diligence',
                    'description' => 'Detailed assessment of your business, market, and team.',
                ],
                [
                    'step' => '04',
                    'title' => 'Term Sheet',
                    'description' => 'Discussion and agreement on investment terms.',
                ],
                [
                    'step' => '05',
                    'title' => 'Documentation',
                    'description' => 'Legal and financial documentation preparation.',
                ],
                [
                    'step' => '06',
                    'title' => 'Investment',
                    'description' => 'Deal closing and beginning of our partnership journey.',
                ],
            ];
        @endphp

        {{-- Article Section --}}
        @foreach ($portfolioArticlesList as $index => $article)
            <div
                class="{{ $index % 2 === 0 ? 'masonry-grid-investment-section' : 'masonry-grid-investment-section-grey' }}">

                <div class="grid-headline-title-card">
                    <h1 class="grid-headline-title">{{ $article->title }}</h1>
                    <h1 class="grid-headline-subtitle-left">{!! $article->content !!}</h1>
                </div>
                <div class="grid-headline-description-card">
                    <div class="masonry-grid-investment-section-sub">
                        @foreach ($portfolioArticleSubList->where('article_id', $article->id) as $subArticle)
                            <div class="grid-headline-title-card-sub">
                                @if ($subArticle->icon)
                                    <div class="card-icon">
                                        <img src="{{ '/storage/' . $subArticle->icon }}"
                                            alt="{{ $subArticle->title }} Icon">
                                    </div>
                                @else
                                    <div class="card-icon-bottom">
                                        <h1 class="card-title-bottom">{{ $subArticle->text_icon }}</h1>
                                    </div>
                                @endif
                                <h2 class="card-title">{{ $subArticle->title }}</h2>
                                <p class="card-description">{{ $subArticle->content }}</p>
                            </div>
                        @endforeach
                    </div>
                    <div class="grid-headline-title-card-sub-bottom">
                        <h1 class="card-title-sub-bottom">{{ $article->title_sub }}</h1>
                        <p class="card-description-bottom">{{ $article->content_sub }}</p>
                    </div>
                </div>

            </div>
        @endforeach


        {{-- Contact Form Section --}}
        <div class="masonry-grid-contact-section">
            <div class="grid-headline-title-card">
                <h1 class="grid-headline-title-contact">Send Your Business Proposal</h1>
                <h1 class="grid-headline-subtitle-contact">We are happy to discuss your business situation, please contact.
                </h1>
            </div>
            <div class="grid-headline-contact-card">
                <form id="contactForm" class="contact-form">
                    @csrf
                    {{-- Company Information --}}
                    <div class="form-row">
                        <div class="form-group">
                            <label for="company_name" class="form-label">Company Name</label>
                            <input type="text" id="company_name" name="company_name" class="form-input"
                                placeholder="Write here..." required>
                        </div>
                        <div class="form-group">
                            <label for="website" class="form-label">Website</label>
                            <input type="text" id="website" name="website" class="form-input"
                                placeholder="Write here..." required>
                        </div>
                    </div>

                    {{-- Business Description --}}
                    <div class="form-group">
                        <label for="message" class="form-label">Business Description</label>
                        <textarea id="message" name="message" rows="6" class="form-textarea" placeholder="Write here..." required></textarea>
                    </div>

                    {{-- Contact Information --}}
                    <div class="form-row">
                        <div class="form-group">
                            <label for="phone" class="form-label">Phone Number</label>
                            <input type="text" id="phone" name="phone" class="form-input"
                                placeholder="Write here..." required>
                        </div>
                        <div class="form-group">
                            <label for="email" class="form-label">Company Email</label>
                            <input type="email" id="email" name="email" class="form-input"
                                placeholder="Write here..." required>
                        </div>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="submit-button">
                            <img src="{{ asset('images/contact/contact.png') }}" alt="Send Message">
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- Portfolio Section --}}
    <div class="portfolio-full-section display-grid">
        {{-- View Toggle Button --}}
        <div class="floating-action-button">
            <div class="menu-icon" onclick="toggleView()">
                <img src="{{ asset('images/portfolio/icon-list.png') }}" alt="Menu Icon" class="icon-list active">
                <img src="{{ asset('images/portfolio/icon-grid.png') }}" alt="Menu Icon" class="icon-grid">
            </div>
        </div>

        @if ($portfolios->count() > 0)
            {{-- Grid Display --}}
            <div class="grid-display-portfolio">
                <div class="masonry-grid">
                    @foreach ($portfolios as $portfolio)
                        @php
                            $stats = [
                                ['icon' => 'icon1.png', 'value' => rand(1, 10)],
                                ['icon' => 'icon2.png', 'value' => rand(3, 15)],
                                ['icon' => 'icon3.png', 'value' => rand(5, 20)],
                            ];
                        @endphp

                        <div class="card">

                            <a href="{{ route('portfolio.show', ['slug' => Str::slug($portfolio->name)]) }}"
                                class="company-image-link">
                                <div class="image-container">
                                    <img class="portfolio-image" src="{{ Storage::url($portfolio->image_path) }}"
                                        alt="{{ $portfolio->name }}">
                                    <div class="image-overlay">
                                        <img class="icon-image" src="{{ Storage::url($portfolio->icon) }}"
                                            alt="{{ $portfolio->icon }}">

                                        <p class="portfolio-description">{{ $portfolio->description }}</p>
                                    </div>
                                </div>
                            </a>
                            <div class="card-stats">
                                @foreach ($stats as $index => $stat)
                                    <div class="stat-item{{ $index === 1 ? '-middle' : '' }}">
                                        <img src="{{ asset('images/portfolio/' . $stat['icon']) }}"
                                            alt="Portfolio Statistic">
                                        <span>{{ $stat['value'] }}</span>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            {{-- Table Display --}}
            <div class="table-display-portfolio">

                <div class="portfolio-section">
                    {{-- Table Header --}}
                    <div class="portfolio-header">
                        <div class="header-cell">Company Name</div>
                        <div class="header-cell">Category</div>
                        <div class="header-cell">Short Description</div>
                        <div class="header-cell">Current Stage</div>
                        <div class="header-cell">Partners</div>
                    </div>

                    @foreach ($portfolios as $portfolio)
                        <div class="portfolio-row">
                            <div class="company-cell">
                                <h3 class="company-name">{{ $portfolio->name }}</h3>
                                <a href="{{ route('portfolio.show', ['slug' => Str::slug($portfolio->name)]) }}"
                                    class="company-image-link-list">
                                    <img class="company-image"
                                        src="{{ $portfolio->image_path ? Storage::url($portfolio->image_path) : asset('images/media/image5.png') }}"
                                        alt="{{ $portfolio->name }}">
                                </a>
                                <a href="{{ $portfolio->website_url }}" target="_blank"
                                    class="company-website">{{ str_replace(['https://', 'http://'], '', $portfolio->website_url) }}</a>
                            </div>
                            <div class="category-cell">{{ $portfolio->category->name }}</div>
                            <div class="description-cell">
                                {{ Str::limit($portfolio->description, 100) }}
                            </div>
                            <div class="stage-cell">
                                <span class="stage-tag">{{ $portfolio->stage }}</span>
                            </div>
                            <div class="partners-cell">
                                <div class="partner-info">
                                    <span>{{ $portfolio->ceo_name }} (CEO)</span>
                                    <button class="expand-btn" aria-label="Show more details">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path d="M6 9l6 6 6-6" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif

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
    </div>


    {{-- For Investor Section --}}
    <div class="for-investor-section">
        {{-- Hero Section --}}
        <div class="hero-mid-section">
            <h1 class="center-text">To foster long-term growth, we invest through three distinct fund vehicles</h1>
        </div>

        {{-- Investment Vehicles --}}
        @php
            $investmentVehicles = [
                [
                    'title' => 'Mandiri Corporate VC',
                    'cards' => [
                        [
                            'large' => true,
                            'image' => 'funding2.png',
                            'category' => 'Indonesia Impact Fund (IIF)',
                            'content' =>
                                'A joint initiative by MCI, ABAC Indonesia, and UNDP Indonesia, the Indonesia Impact Fund (IIF) is the nation\'s first private impact investment fund. Focused on early-stage startups advancing the SDGs, IIF is driving Indonesia\'s journey toward a brighter, sustainable future.',
                        ],
                    ],
                ],
                [
                    'title' => 'Dana Ventura MCI',
                    'cards' => array_fill(0, 3, [
                        'large' => false,
                        'image' => 'funding2.png',
                        'category' => 'Indonesia Impact Fund (IIF)',
                        'content' =>
                            'A joint initiative by MCI, ABAC Indonesia, and UNDP Indonesia, the Indonesia Impact Fund (IIF) is the nation\'s first private impact investment fund. Focused on early-stage startups advancing the SDGs, IIF is driving Indonesia\'s journey toward a brighter, sustainable future.',
                    ]),
                ],
            ];
        @endphp

        @foreach ($investmentVehicles as $vehicle)
            <div class="masonry-grid-investment-section">
                <div class="grid-headline-title-card">
                    <h1 class="grid-headline-title">{{ $vehicle['title'] }}</h1>
                </div>
                <div class="grid-headline-description-card">
                    <div class="masonry-grid-investment-section-sub">
                        @foreach ($vehicle['cards'] as $card)
                            <div class="card-funding{{ $card['large'] ? '-large' : '' }}">
                                @if (!$card['large'])
                                    <div class="background-image">
                                @endif
                                <img src="{{ asset('images/platform/' . $card['image']) }}"
                                    alt="{{ $card['category'] }}" class="card-funding-image" />
                                @if (!$card['large'])
                            </div>
                        @endif
                        <div class="funding-category{{ $card['large'] ? '-large' : '' }}">
                            {{ $card['category'] }}
                        </div>
                        <div class="card-funding-content{{ $card['large'] ? '-large' : '' }}">
                            {{ $card['content'] }}
                        </div>
                        <a href="#" class="text-decoration-none">
                            <span class="funding-link">Fund Report >></span>
                        </a>
                    </div>
        @endforeach
    </div>
    </div>
    @endforeach

    {{-- Contact Form Section --}}
    <div class="masonry-grid-contact-section">
        <div class="grid-headline-title-card">
            <h1 class="grid-headline-title-contact">Send Your Business Proposal</h1>
            <h1 class="grid-headline-subtitle-contact">
                We are happy to discuss your business situation, please contact.
            </h1>
        </div>

        <div class="grid-headline-contact-card">
            <form id="contactForm" class="contact-form">
                @csrf
                {{-- Company Details --}}
                <div class="form-row">
                    @foreach ([['id' => 'company_name', 'label' => 'Company Name', 'type' => 'text'], ['id' => 'website', 'label' => 'Website', 'type' => 'text']] as $field)
                        <div class="form-group">
                            <label for="{{ $field['id'] }}" class="form-label">{{ $field['label'] }}</label>
                            <input type="{{ $field['type'] }}" id="{{ $field['id'] }}" name="{{ $field['id'] }}"
                                class="form-input" placeholder="Write here..." required>
                        </div>
                    @endforeach
                </div>

                {{-- Business Description --}}
                <div class="form-group">
                    <label for="message" class="form-label">Business Description</label>
                    <textarea id="message" name="message" rows="6" class="form-textarea" placeholder="Write here..." required></textarea>
                </div>

                {{-- Contact Information --}}
                <div class="form-row">
                    @foreach ([['id' => 'phone', 'label' => 'Phone Number', 'type' => 'text'], ['id' => 'email', 'label' => 'Company Email', 'type' => 'email']] as $field)
                        <div class="form-group">
                            <label for="{{ $field['id'] }}" class="form-label">{{ $field['label'] }}</label>
                            <input type="{{ $field['type'] }}" id="{{ $field['id'] }}" name="{{ $field['id'] }}"
                                class="form-input" placeholder="Write here..." required>
                        </div>
                    @endforeach
                </div>

                {{-- Submit Button --}}
                <div class="form-group">
                    <button type="submit" class="submit-button">
                        <img src="{{ asset('images/contact/contact.png') }}" alt="Send Message">
                    </button>
                </div>
            </form>
        </div>
    </div>
    </div>

@endsection

@section('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // DOM Elements
            const elements = {
                filterLinks: document.querySelectorAll('.filter-link'),
                getInvestmentSection: document.querySelector('.get-investement-section'),
                portfolioSection: document.querySelector('.portfolio-full-section'),
                forInvestorSection: document.querySelector('.for-investor-section'),
                fab: document.querySelector('.floating-action-button'),
                gridDisplay: document.querySelector('.grid-display-portfolio'),
                tableDisplay: document.querySelector('.table-display-portfolio')
            };

            function setupExpandButtons() {
                document.querySelectorAll('.expand-btn').forEach(button => {
                    button.removeEventListener('click', handleExpand);
                    button.addEventListener('click', handleExpand);
                });
            }

            function handleExpand(e) {
                e.preventDefault();
                const portfolioRow = this.closest('.portfolio-row');
                portfolioRow.classList.toggle('expanded');

                // Toggle company image link visibility
                const imageLink = portfolioRow.querySelector('.company-image-link-list');
                if (imageLink) {
                    imageLink.style.display = portfolioRow.classList.contains('expanded') ? 'block' : 'none';
                }

                // Rotate the expand button SVG
                const svg = this.querySelector('svg');
                if (svg) {
                    svg.style.transform = portfolioRow.classList.contains('expanded') ? 'rotate(180deg)' : 'rotate(0deg)';
                }
            }

            // Initial setup
            setupExpandButtons();

            // Constants
            const DISPLAY_STATES = {
                GRID: 'display-grid',
                TABLE: 'display-table'
            };

            const FILTER_TYPES = {
                GET_INVESTMENT: 'get_investment',
                PORTFOLIO: 'portfolio',
                FUNDING: 'funding'
            };

            // Utility Functions
            const utils = {
                showSection: (section) => {
                    // Hide all sections
                    elements.getInvestmentSection.style.display = 'none';
                    elements.portfolioSection.style.display = 'none';
                    elements.forInvestorSection.style.display = 'none';

                    // Show selected section
                    if (section) {
                        section.style.display = 'block';
                    }
                },
                setGridView: (isGrid) => {
                    // Set the display mode class
                    elements.portfolioSection.classList.toggle(DISPLAY_STATES.GRID, isGrid);
                    elements.portfolioSection.classList.toggle(DISPLAY_STATES.TABLE, !isGrid);

                    // Show/hide the appropriate display
                    if (isGrid) {
                        elements.gridDisplay.style.display = 'block';
                        elements.tableDisplay.style.display = 'none';
                    } else {
                        elements.gridDisplay.style.display = 'none';
                        elements.tableDisplay.style.display = 'block';
                    }
                }
            };

            // View Update Functions
            const updateView = {
                getInvestment: () => {
                    utils.showSection(elements.getInvestmentSection);
                },
                portfolio: () => {
                    utils.showSection(elements.portfolioSection);
                    utils.setGridView(true); // Always start with grid view
                },
                funding: () => {
                    utils.showSection(elements.forInvestorSection);
                }
            };

            // Initialize
            updateView.getInvestment();

            // Event Listeners
            elements.fab.addEventListener('click', () => {
                const isGridView = elements.portfolioSection.classList.contains(DISPLAY_STATES.GRID);
                utils.setGridView(!isGridView); // Toggle between grid and table
                elements.fab.classList.toggle('table-view', !isGridView);
            });

            elements.filterLinks.forEach(link => {
                link.addEventListener('click', function(e) {
                    e.preventDefault();
                    elements.filterLinks.forEach(l => l.classList.remove('active'));
                    this.classList.add('active');

                    const currentFilter = this.getAttribute('data-category');
                    switch (currentFilter) {
                        case FILTER_TYPES.GET_INVESTMENT:
                            updateView.getInvestment();
                            break;
                        case FILTER_TYPES.PORTFOLIO:
                            updateView.portfolio();
                            break;
                        case FILTER_TYPES.FUNDING:
                            updateView.funding();
                            break;
                    }
                });
            });
        });

        function toggleView() {
            const listIcon = document.querySelector('.icon-list');
            const gridIcon = document.querySelector('.icon-grid');

            listIcon.classList.toggle('active');
            gridIcon.classList.toggle('active');
        }
    </script>
@endsection
