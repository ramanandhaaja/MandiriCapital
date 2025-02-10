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
                <h1 class="hero-main-text">{{$hero->title  }} </h1>
            </a>
            <div class="center-search">

                <div class="search-input-container">
                    <input type="text" placeholder="Search..." class="search-input" style="visibility: hidden;">
                    <i class="fas fa-search search-input-icon" style="visibility: hidden;"></i>
                </div>
                {{-- SUB MENU  --}}
                <nav class="category-filters">
                    @foreach ($menuSubCategory as $menuSubCat)
                        <a href="#" class="filter-link {{ $loop->first ? 'active' : '' }}" data-category="{{ Str::slug($menuSubCat->slug) }}">{{ $menuSubCat->name }}</a>
                    @endforeach
                </nav>
            </div>
        </div>
    </div>

    {{-- Get Investment Section --}}
    <div class="get-investement-section">
        {{-- Article Section --}}

        <div class="hero-mid-section">
            <h1 class="center-text">{{ $menuSubCategory->first()->headline_text  }}</h1>
        </div>

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
        <div class="masonry-grid-contact-section-grey">
            <div class="grid-headline-title-card-contact">
                <h1 class="grid-headline-title-contact">Get Investment!</h1>
                <h1 class="grid-headline-subtitle-contact">
                </h1>
            </div>

            <div class="grid-headline-contact-card">
                <div class="contact-icon-section" id="contactToggle">
                    <i class="fas fa-chevron-down contact-icon" aria-hidden="true"></i>Show Form
                </div>
                <form id="contactForm" class="contact-form hidden">
                    @csrf
                    {{-- Company Details --}}
                    <div class="form-row">
                        <div class="form-group">
                            <label for="first_name" class="form-label">First Name*</label>
                            <input type="text" id="first_name" name="first_name" class="form-input"
                                placeholder="Write here..." required>
                        </div>
                        <div class="form-group">
                            <label for="last_name" class="form-label">Last Name*</label>
                            <input type="text" id="last_name" name="last_name" class="form-input"
                                placeholder="Write here..." required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="email" class="form-label">Email Address*</label>
                            <input type="email" id="email" name="email" class="form-input"
                                placeholder="Write here..." required>
                        </div>
                        <div class="form-group">
                            <label for="phone" class="form-label">Phone Number*</label>
                            <input type="text" id="phone" name="phone" class="form-input"
                                placeholder="Write here..." required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="company_name" class="form-label">Company Name*</label>
                            <input type="text" id="company_name" name="company_name" class="form-input"
                                placeholder="Write here..." required>
                        </div>
                        <div class="form-group">
                            <label for="url" class="form-label">Add URL to your Company Website</label>
                            <input type="text" id="url" name="url" class="form-input"
                                placeholder="Write here..." required>
                        </div>
                    </div>

                    {{-- Upload Company Profile / Pitch Deck --}}
                    <div class="form-group">
                        <label class="form-label">Upload Your Company Profile / Pitch Deck</label>
                        <div class="file-upload-container">
                            <label for="company_profile" class="file-upload-button">Choose File</label>
                            <span class="file-name">No File Chosen</span>
                            <input type="file" id="company_profile" name="company_profile" class="file-input"
                                accept=".pdf" required>
                        </div>
                        <p class="description-text">Please upload your company profile or Pitch Deck (Max. 15 page PDF)</p>
                        <div class="upload-guidelines">
                            <p class="guidelines-title">Your company profile or pitch deck should address these things:</p>
                            <ul class="guidelines-list">
                                <li>The specific problem your company are aiming to tackle</li>
                                <li>The solution for the specific problem</li>
                                <li>The business model, describe the strategy to increase the revenue or profit with its
                                    products and customer base</li>
                                <li>The target market, the size, entry barriers, challenges, and opportunities</li>
                                <li>Number of the current users or clients that are using your products</li>
                                <li>Your competition and who might be one</li>
                            </ul>
                        </div>
                    </div>

                    {{-- Business Sector Selection --}}
                    <div class="form-group">
                        <label class="form-label">Choose your company's main business sector</label>
                        <div class="sector-grid">
                            <div class="sector-item">
                                <input type="radio" id="agriculture" name="business_sector" value="Agriculture & Food"
                                    class="sector-radio" required>
                                <label for="agriculture" class="sector-label">Agriculture & Food</label>
                            </div>
                            <div class="sector-item">
                                <input type="radio" id="energy" name="business_sector" value="Energy & Resources"
                                    class="sector-radio">
                                <label for="energy" class="sector-label">Energy & Resources</label>
                            </div>
                            <div class="sector-item">
                                <input type="radio" id="healthcare" name="business_sector"
                                    value="Healthcare & Pharmaceuticals" class="sector-radio">
                                <label for="healthcare" class="sector-label">Healthcare & Pharmaceuticals</label>
                            </div>
                            <div class="sector-item">
                                <input type="radio" id="education" name="business_sector"
                                    value="Education & employment" class="sector-radio">
                                <label for="education" class="sector-label">Education & employment</label>
                            </div>
                            <div class="sector-item">
                                <input type="radio" id="automotive" name="business_sector"
                                    value="Automotive & Transportation" class="sector-radio">
                                <label for="automotive" class="sector-label">Automotive & Transportation</label>
                            </div>
                            <div class="sector-item">
                                <input type="radio" id="banking" name="business_sector"
                                    value="Banking & Financial Service" class="sector-radio">
                                <label for="banking" class="sector-label">Banking & Financial Service</label>
                            </div>
                            <div class="sector-item">
                                <input type="radio" id="consulting" name="business_sector"
                                    value="Consulting & Professional Services" class="sector-radio">
                                <label for="consulting" class="sector-label">Consulting & Professional Services</label>
                            </div>
                            <div class="sector-item">
                                <input type="radio" id="media" name="business_sector"
                                    value="Media & Entertainment" class="sector-radio">
                                <label for="media" class="sector-label">Media & Entertainment</label>
                            </div>
                            <div class="sector-item">
                                <input type="radio" id="retail" name="business_sector" value="Retail & Wholesale"
                                    class="sector-radio">
                                <label for="retail" class="sector-label">Retail & Wholesale</label>
                            </div>
                            <div class="sector-item">
                                <input type="radio" id="other" name="business_sector" value="Other"
                                    class="sector-radio">
                                <label for="other" class="sector-label">Other</label>
                            </div>
                        </div>
                    </div>

                    {{-- Submit Button --}}
                    <div class="form-group button-group">
                        <button type="reset" class="reset-button">Reset</button>
                        <button type="submit" class="submit-button">Submit Pitch</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        // File input handler
        document.getElementById('company_profile').addEventListener('change', function(e) {
            const fileName = e.target.files[0]?.name || 'No File Chosen';
            e.target.parentElement.querySelector('.file-name').textContent = fileName;
        });

        // Form toggle handler
        document.getElementById('contactToggle').addEventListener('click', function() {
            const form = document.getElementById('contactForm');
            const icon = this.querySelector('.contact-icon');

            this.classList.toggle('active');
            form.classList.toggle('hidden');

            // Update text based on form visibility
            const text = form.classList.contains('hidden') ? 'Show Form' : 'Hide Form';
            this.innerHTML = `<i class="fas fa-chevron-down contact-icon" aria-hidden="true"></i>${text}`;
        });
    </script>

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
                                ['icon' => 'portfolio-icon1.png'],
                                ['icon' => 'portfolio-icon5.png'],
                                ['icon' => 'portfolio-icon8.png'],
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
                            <div class="card-stats" style="visibility: hidden;">
                                @foreach ($stats as $index => $stat)
                                    <div class="stat-item{{ $index === 1 ? '-middle' : '' }}">
                                        <img src="{{ asset('images/portfolio/' . $stat['icon']) }}"
                                            alt="Portfolio Statistic">
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
                        <div class="header-cell">Sector</div>
                        <div class="header-cell">Short Description</div>
                        <div class="header-cell">Head Office</div>
                        <div class="header-cell">Year Invested</div>
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
                            <div class="category-cell">{{ $portfolio->sector }}</div>
                            <div class="description-cell">
                                {{ Str::limit($portfolio->description, 100) }}
                            </div>
                            <div class="stage-cell">
                                <span class="stage-tag">{{ $portfolio->head_office }}</span>
                            </div>
                            <div class="partners-cell">
                                <div class="partner-info">
                                    <span>{{ $portfolio->year_invested }}</span>
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
                <h2 class="newsletter-title">CONTACT OUR TEAM</h2>
                <a href="{{ route('contact') }}">
                    <img src="{{ asset('images/portfolio/letsconnect.png') }}" alt="Lets Connect"
                        class="button-image center-image-newsletter">
                </a>
            </div>
        </div>
    </div>

    {{-- Funding Section --}}
    <div class="for-investor-section">
        {{-- Hero Section --}}
        <div class="hero-mid-section">
            <h1 class="center-text">{{ $menuSubCategory->skip(2)->first()->headline_text  }}</h1>
        </div>

        {{-- Investment Vehicles --}}
        @foreach ($portfolioFundingArticlesList as $index => $article)
        <div class="{{ $index % 2 === 0 ? 'masonry-grid-investment-section' : 'masonry-grid-investment-section-grey2' }}">
                <div class="grid-headline-title-card">
                    <h1 class="grid-headline-title">{{ $article->title }}</h1>
                    <h1 class="grid-headline-subtitle-left">{!! $article->content !!}</h1>
                </div>

                <div class="grid-headline-description-card">
                    <div class="{{ $index % 2 === 0 ? 'masonry-grid-investment-section' : 'masonry-grid-investment-section-grey2' }}">
                        <div class="grid-headline-description-card-funding">
                            <div class="masonry-grid-investment-section-sub">
                                @foreach ($portfolioFundingArticleSubList->where('article_id', $article->id) as $subArticle)
                                    <div class="grid-headline-title-card-sub {{ $subArticle->is_large ? 'card-funding-large' : 'card-funding' }}">
                                        @if (!$subArticle->is_large)
                                            <div class="background-image">
                                        @endif

                                        <img src="{{ '/storage/' . $subArticle->image_path }}" alt="funding2.png" class="card-funding-image" />

                                        @if (!$subArticle->is_large)
                                            </div>
                                        @endif

                                        <div class="funding-category{{ $subArticle->is_large ? '-large' : '' }}">
                                            {{ $subArticle->title }}
                                        </div>
                                        <div class="card-funding-content{{ $subArticle->is_large ? '-large' : '' }}">
                                            {{ $subArticle->content }}
                                        </div>
                                            <a href="{{ route('portfolio.show.funding', $subArticle->title) }}" class="text-decoration-none">
                                                <span class="funding-link">Fund Details >></span>
                                            </a>

                                        {{-- Hover card that follows mouse --}}

                                        <div class="card-funding-hover">
                                            <div class="hover-content">
                                                <div class="">
                                                    <img src="{{ '/storage/' . $subArticle->image_path }}" alt="funding2.png" class="card-funding-image-hover" />
                                                </div>
                                                <div class="funding-category-hover">
                                                    Startup Criteria
                                                </div>
                                                <div class="criteria-grid">
                                                    <div class="criteria-item">
                                                        <h3>Stage</h3>
                                                        <p>{{ $subArticle->stage }}</p>
                                                    </div>
                                                    <div class="criteria-item">
                                                        <h3>Geography</h3>
                                                        <p>{{ $subArticle->geography }}</p>
                                                    </div>
                                                    <div class="criteria-item">
                                                        <h3>Ticket Size</h3>
                                                        <p>{{ $subArticle->ticketsize }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
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
            <div class="grid-headline-title-card-contact">
                <h1 class="grid-headline-title-contact">New Investor Enquiry</h1>
                <p class="grid-headline-subtitle-contact">
                    Begin your investment journey with confidence—partner with us today.
                </p>
            </div>

            <div class="grid-headline-contact-card">
                <form id="contactForm" class="contact-form">
                    @csrf
                    {{-- Company Details --}}
                    <div class="form-row">
                        <div class="form-group">
                            <label for="full_name" class="form-label">Full Name*</label>
                            <input type="text" id="full_name" name="full_name" class="form-input"
                                placeholder="Write here..." required>
                        </div>
                        <div class="form-group">
                            <label for="subject" class="form-label">Subject*</label>
                            <input type="text" id="subject" name="subject" class="form-input"
                                placeholder="Write here..." required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="phone" class="form-label">Phone Number*</label>
                            <input type="text" id="phone" name="phone" class="form-input"
                                placeholder="Write here..." required>
                        </div>
                        <div class="form-group">

                            <label for="email" class="form-label">Email Address*</label>
                            <input type="email" id="email" name="email" class="form-input"
                                placeholder="Write here..." required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="company_name" class="form-label">Company Name*</label>
                            <input type="text" id="company_name" name="company_name" class="form-input"
                                placeholder="Write here..." required>
                        </div>
                    </div>

                    {{-- Business Description --}}
                    <div class="form-group">
                        <label for="message" class="form-label">Message</label>
                        <textarea id="message" name="message" rows="4" class="form-textarea" placeholder="Write here..." required></textarea>
                    </div>

                    {{-- Submit Button --}}
                    <div class="form-group button-group">
                        <button type="reset" class="reset-button">Reset</button>
                        <button type="submit" class="submit-button">Submit</button>
                    </div>
                </form>
            </div>
        </div>


        {{-- Portfolio Register Form Modal --}}
        <div id="portfolioFormModal" class="modal">
            <div class="modal-overlay" onclick="closePortfolioModal()"></div>
            <div class="modal-content">
                <button class="modal-close" onclick="closePortfolioModal()">×</button>
                <div class="masonry-grid-contact-section-modal">
                    <div class="grid-headline-title-card-modal">
                        <h1 class="title-register">Input Email Address to Access Information</h1>
                        <image class="image-register" src="{{ asset('images/portfolio/portfolio-register.png') }}"
                            alt="Mandiri Capital Logo">
                    </div>

                    <div class="grid-headline-contact-card-modal">
                        <form id="contactForm" class="contact-form">
                            @csrf
                            {{-- Company Details --}}

                            <div class="form-group-modal">
                                <label for="email" class="form-label-modal">Email Address*</label>
                                <input type="email" id="email" name="email" class="form-input-modal"
                                    placeholder="Write here..." required>
                            </div>
                            {{-- Submit Button --}}
                            <div class="form-group-modal button-group-modal">
                                <button type="button"
                                    onclick="window.location.href='{{ route('portfolio.show.funding', $subArticle->id) }}'"
                                    class="reset-button-modal">Login</button>or
                                or
                                <button type="submit" class="submit-button-modal">Request for Account</button>
                            </div>
                        </form>
                    </div>
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
                        svg.style.transform = portfolioRow.classList.contains('expanded') ? 'rotate(180deg)' :
                            'rotate(0deg)';
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
                    GET_INVESTMENT: 'get-investment',
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

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const cards = document.querySelectorAll('.card-funding, .card-funding-large');

                cards.forEach(card => {
                    const hoverCard = card.querySelector('.card-funding-hover');
                    let isHovering = false;

                    document.addEventListener('mousemove', function(e) {
                        if (isHovering) {
                            const mouseX = e.clientX;
                            const mouseY = e.clientY;

                            hoverCard.style.left = `${mouseX}px`;
                            hoverCard.style.top = `${mouseY}px`;
                            hoverCard.style.transform = 'translate(20px, 20px)';
                        }
                    });

                    card.addEventListener('mouseenter', function() {
                        isHovering = true;
                        hoverCard.classList.add('active');
                    });

                    card.addEventListener('mouseleave', function() {
                        isHovering = false;
                        hoverCard.classList.remove('active');
                    });
                });
            });
        </script>

        <script>
            function openPortfolioModal(event) {
                event.preventDefault();
                document.getElementById('portfolioFormModal').style.display = 'block';
                document.body.style.overflow = 'hidden';
            }

            function closePortfolioModal() {
                document.getElementById('portfolioFormModal').style.display = 'none';
                document.body.style.overflow = 'auto';
            }

            // Close modal when clicking outside
            window.onclick = function(event) {
                const portfolioModal = document.getElementById('portfolioFormModal');
                if (event.target === portfolioModal) {
                    closePortfolioModal();
                }
            }

            // Handle form submission
            document.getElementById('contactForm').addEventListener('submit', function(event) {
                event.preventDefault();
                // Add your form submission logic here
                console.log('Form submitted');
            });
        </script>
    @endsection
