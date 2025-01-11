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
                    <a href="#" class="filter-link" data-category="all">Portfolio</a>
                    <a href="#" class="filter-link" data-category="for_investor">Funding</a>
                </div>
            </div>
        </div>
    </div>

    {{-- get investment Section --}}
    <div class="get-investement-section">
        <div class="masonry-grid-investment-section">
            <div class="grid-headline-title-card">
                <h1 class="grid-headline-title">Why MCI </h1>
            </div>
            <div class="grid-headline-description-card">
                <div class="masonry-grid-investment-section-sub">
                    <div class="grid-headline-title-card-sub">
                        <div class="card-icon">
                            <img src="{{ asset('images/portfolio/headline-coin.png') }}" alt="Ecosystem Icon">
                        </div>
                        <h2 class="card-title">Access to Mandiri Group's Ecosystem</h2>
                        <p class="card-description">We offer startups the unique opportunity to connect and collaborate with
                            the diverse sectors and resources within the Mandiri Group, driving synergies that accelerate
                            growth.</p>
                    </div>
                    <div class="grid-headline-title-card-sub">
                        <div class="card-icon">
                            <img src="{{ asset('images/portfolio/headline-person.png') }}" alt="Expertise Icon">
                        </div>
                        <h2 class="card-title">Industry Expertise</h2>
                        <p class="card-description">Our team brings deep industry knowledge and operational expertise to
                            help navigate challenges and capitalize on opportunities in the fintech landscape.</p>
                    </div>
                    <div class="grid-headline-title-card-sub">
                        <div class="card-icon">
                            <img src="{{ asset('images/portfolio/headline-card.png') }}" alt="Growth Icon">
                        </div>
                        <h2 class="card-title">Strategic Growth Support</h2>
                        <p class="card-description">Beyond capital, we provide comprehensive support in strategy,
                            networking, and operational excellence to drive sustainable growth.</p>
                    </div>
                </div>
            </div>

        </div>

        <div class="masonry-grid-investment-section-grey">
            <div class="grid-headline-title-card">
                <h1 class="grid-headline-title">Here’s how we’ll help you achieve that growth </h1>
                <h1 class="grid-headline-subtitle-left">“At Mandiri Capital Indonesia, we believe in investing in
                    businesses, not just funding rounds. This means we’re here to support you throughout your journey—from
                    the spark of an idea to scaling into a successful, impactful enterprise.
                    <br /><br />As part of the Mandiri Group, we bring unparalleled resources, expertise, and connections to
                    help you grow and thrive at every stage.
                </h1>
            </div>
            <div class="grid-headline-description-card">
                <div class="masonry-grid-investment-section-sub">
                    <div class="grid-headline-title-card-sub">
                        <div class="card-icon">
                            <img src="{{ asset('images/portfolio/headline-coin.png') }}" alt="Ecosystem Icon">
                        </div>
                        <h2 class="card-title">Access to Mandiri Group's Ecosystem</h2>
                        <p class="card-description">We offer startups the unique opportunity to connect and collaborate with
                            the diverse sectors and resources within the Mandiri Group, driving synergies that accelerate
                            growth.</p>
                    </div>
                    <div class="grid-headline-title-card-sub">
                        <div class="card-icon">
                            <img src="{{ asset('images/portfolio/headline-person.png') }}" alt="Expertise Icon">
                        </div>
                        <h2 class="card-title">Industry Expertise</h2>
                        <p class="card-description">Our team brings deep industry knowledge and operational expertise to
                            help navigate challenges and capitalize on opportunities in the fintech landscape.</p>
                    </div>
                    <div class="grid-headline-title-card-sub">
                        <div class="card-icon">
                            <img src="{{ asset('images/portfolio/headline-card.png') }}" alt="Growth Icon">
                        </div>
                        <h2 class="card-title">Strategic Growth Support</h2>
                        <p class="card-description">Beyond capital, we provide comprehensive support in strategy,
                            networking, and operational excellence to drive sustainable growth.</p>
                    </div>
                </div>
            </div>

        </div>

        <div class="masonry-grid-investment-section">
            <div class="grid-headline-title-card">
                <h1 class="grid-headline-title">Our Investment Process </h1>
            </div>
            <div class="grid-headline-description-card">
                <div class="masonry-grid-investment-section-sub">
                    <div class="grid-headline-title-card-sub">
                        <div class="card-icon-bottom">
                            <h1 class="card-title-bottom">01 </h1>
                        </div>
                        <h2 class="card-title">Access to Mandiri Group's Ecosystem</h2>
                        <p class="card-description">We offer startups the unique opportunity to connect and collaborate with
                            the diverse sectors and resources within the Mandiri Group, driving synergies that accelerate
                            growth.</p>
                    </div>
                    <div class="grid-headline-title-card-sub">
                        <div class="card-icon-bottom">
                            <h1 class="card-title-bottom">02 </h1>
                        </div>
                        <h2 class="card-title">Industry Expertise</h2>
                        <p class="card-description">Our team brings deep industry knowledge and operational expertise to
                            help navigate challenges and capitalize on opportunities in the fintech landscape.</p>
                    </div>
                    <div class="grid-headline-title-card-sub">
                        <div class="card-icon-bottom">
                            <h1 class="card-title-bottom">03 </h1>
                        </div>
                        <h2 class="card-title">Strategic Growth Support</h2>
                        <p class="card-description">Beyond capital, we provide comprehensive support in strategy,
                            networking, and operational excellence to drive sustainable growth.</p>
                    </div>
                    <div class="grid-headline-title-card-sub">
                        <div class="card-icon-bottom">
                            <h1 class="card-title-bottom">04 </h1>
                        </div>
                        <h2 class="card-title">Access to Mandiri Group's Ecosystem</h2>
                        <p class="card-description">We offer startups the unique opportunity to connect and collaborate with
                            the diverse sectors and resources within the Mandiri Group, driving synergies that accelerate
                            growth.</p>
                    </div>
                    <div class="grid-headline-title-card-sub">
                        <div class="card-icon-bottom">
                            <h1 class="card-title-bottom">05 </h1>
                        </div>
                        <h2 class="card-title">Industry Expertise</h2>
                        <p class="card-description">Our team brings deep industry knowledge and operational expertise to
                            help navigate challenges and capitalize on opportunities in the fintech landscape.</p>
                    </div>
                    <div class="grid-headline-title-card-sub">
                        <div class="card-icon-bottom">
                            <h1 class="card-title-bottom">06 </h1>
                        </div>
                        <h2 class="card-title">Strategic Growth Support</h2>
                        <p class="card-description">Beyond capital, we provide comprehensive support in strategy,
                            networking, and operational excellence to drive sustainable growth.</p>
                    </div>
                </div>
                <div class="grid-headline-title-card-sub-bottom">
                    <h1 class="card-title-bottom">Are you innovating in any of these industries? </h1>
                    <p class="card-description-bottom">Send your business proposal and join us in shaping the future of
                        these sectors!</p>
                </div>
            </div>


        </div>

        <div class="masonry-grid-contact-section">
            <div class="grid-headline-title-card">
                <h1 class="grid-headline-title-contact">Send Your Business Proposal</h1>
                <h1 class="grid-headline-subtitle-contact">We are happy to discuss your business situation, please contact.
                </h1>
            </div>
            <div class="grid-headline-contact-card">
                <form id="contactForm" class="contact-form">
                    @csrf
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

                    <div class="form-group">
                        <label for="message" class="form-label">Business Description</label>
                        <textarea id="message" name="message" rows="6" class="form-textarea" placeholder="Write here..." required></textarea>
                    </div>

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

    {{-- Porfolio Section --}}
    <div class="portfolio-full-section display-grid">
        <div class="floating-action-button">
            <div class="menu-icon">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>

        {{-- Grid Display --}}
        <div class="grid-display-portfolio">
            <div class="masonry-grid">
                @if ($portfolios->count() > 0)
                    @foreach ($portfolios->get() as $portfolio)
                        <div class="card">
                            <a href="{{ route('portfolio.show', ['slug' => Str::slug($portfolio->name)]) }}"
                                class="company-image-link">
                                <img class="portfolio-image"
                                    src="{{ $portfolio->image_path ? Storage::url($portfolio->image_path) : asset('images/media/image5.png') }}" />
                            </a>
                            <div class="card-stats">
                                <div class="stat-item">
                                    <img src="{{ asset('images/portfolio/icon1.png') }}" />
                                    <span>{{ rand(1, 10) }}</span>
                                </div>
                                <div class="stat-item-middle">
                                    <img src="{{ asset('images/portfolio/icon2.png') }}" />
                                    <span>{{ rand(3, 15) }}</span>
                                </div>
                                <div class="stat-item">
                                    <img src="{{ asset('images/portfolio/icon3.png') }}" />
                                    <span>{{ rand(5, 20) }}</span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>

        {{-- Table Display --}}
        <div class="table-display-portfolio">
            @if ($portfolios->count() > 0)
                <div class="portfolio-section">
                    {{-- Portfolio Header with hover effects and better spacing --}}
                    <div class="portfolio-header">
                        <div class="header-cell">Company Name</div>
                        <div class="header-cell">Category</div>
                        <div class="header-cell">Short Description</div>
                        <div class="header-cell">Current Stage</div>
                        <div class="header-cell">Partners</div>
                    </div>

                    @foreach ($portfolios->get() as $portfolio)
                        <div class="portfolio-row">
                            <div class="company-cell">
                                <h3 class="company-name">{{ $portfolio->name }}</h3>
                                <a href="{{ route('portfolio.show', ['slug' => Str::slug($portfolio->name)]) }}"
                                    class="company-image-link">
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
            @endif
        </div>

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

    {{-- for investor Section --}}
    <div class="for-investor-section">
        <div class="hero-mid-section">
            <h1 class="center-text">To foster long-term growth, we invest through three distinct fund vehicles</h1>
        </div>
        <div class="masonry-grid-investment-section">
            <div class="grid-headline-title-card">
                <h1 class="grid-headline-title">Mandiri Corporate VC  </h1>
            </div>
            <div class="grid-headline-description-card">
                <div class="masonry-grid-investment-section-sub">
                    <div class="card-funding-large">
                            <img src="{{ asset('images/platform/funding2.png') }}" alt="Media"
                                class="card-funding-image" />
                        <div class="funding-category-large">Indonesia Impact Fund (IIF)</div>
                        <div class="card-funding-content-large">
                            A joint initiative by MCI, ABAC Indonesia, and UNDP Indonesia, the Indonesia Impact Fund
                            (IIF) is the nation's first private impact investment fund. Focused on early-stage startups
                            advancing the SDGs, IIF is driving Indonesia’s journey toward a brighter, sustainable
                            future.
                        </div>
                        <a href="#" class="text-decoration-none">
                            <span class="funding-link">Fund Report >></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="masonry-grid-investment-section">
            <div class="grid-headline-title-card">
                <h1 class="grid-headline-title">Dana Ventura MCI </h1>
            </div>
            <div class="grid-headline-description-card">
                <div class="masonry-grid-investment-section-sub">
                    <div class="card-funding">
                        <div class="background-image">
                            <img src="{{ asset('images/platform/funding2.png') }}" alt="Media"
                                class="card-funding-image" />
                        </div>
                        <div class="funding-category">Indonesia Impact Fund (IIF)</div>
                        <div class="card-funding-content">
                            A joint initiative by MCI, ABAC Indonesia, and UNDP Indonesia, the Indonesia Impact Fund
                            (IIF) is the nation's first private impact investment fund. Focused on early-stage startups
                            advancing the SDGs, IIF is driving Indonesia’s journey toward a brighter, sustainable
                            future.
                        </div>
                        <a href="#" class="text-decoration-none">
                            <span class="funding-link">Fund Report >></span>
                        </a>
                    </div>
                    <div class="card-funding">
                        <div class="background-image">
                            <img src="{{ asset('images/platform/funding2.png') }}" alt="Media"
                                class="card-funding-image" />
                        </div>
                        <div class="funding-category">Indonesia Impact Fund (IIF)</div>
                        <div class="card-funding-content">
                            A joint initiative by MCI, ABAC Indonesia, and UNDP Indonesia, the Indonesia Impact Fund
                            (IIF) is the nation's first private impact investment fund. Focused on early-stage startups
                            advancing the SDGs, IIF is driving Indonesia’s journey toward a brighter, sustainable
                            future.
                        </div>
                        <a href="#" class="text-decoration-none">
                            <span class="funding-link">Fund Report >></span>
                        </a>
                    </div>
                    <div class="card-funding">
                        <div class="background-image">
                            <img src="{{ asset('images/platform/funding2.png') }}" alt="Media"
                                class="card-funding-image" />
                        </div>
                        <div class="funding-category">Indonesia Impact Fund (IIF)</div>
                        <div class="card-funding-content">
                            A joint initiative by MCI, ABAC Indonesia, and UNDP Indonesia, the Indonesia Impact Fund
                            (IIF) is the nation's first private impact investment fund. Focused on early-stage startups
                            advancing the SDGs, IIF is driving Indonesia’s journey toward a brighter, sustainable
                            future.
                        </div>
                        <a href="#" class="text-decoration-none">
                            <span class="funding-link">Fund Report >></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="masonry-grid-contact-section">
            <div class="grid-headline-title-card">
                <h1 class="grid-headline-title-contact">Send Your Business Proposal</h1>
                <h1 class="grid-headline-subtitle-contact">We are happy to discuss your business situation, please contact.
                </h1>
            </div>
            <div class="grid-headline-contact-card">
                <form id="contactForm" class="contact-form">
                    @csrf
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

                    <div class="form-group">
                        <label for="message" class="form-label">Business Description</label>
                        <textarea id="message" name="message" rows="6" class="form-textarea" placeholder="Write here..." required></textarea>
                    </div>

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

@endsection

@section('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const filterLinks = document.querySelectorAll('.filter-link');
            const masonry = document.querySelector('.masonry-grid');
            const portfolioSection = document.querySelector('.portfolio-section');
            const getInvestmentSection = document.querySelector('.get-investement-section');
            const portfolioSectionFull = document.querySelector('.portfolio-full-section');
            const forInvestorSection = document.querySelector('.for-investor-section');
            const fab = document.querySelector('.floating-action-button');
            const gridDisplay = document.querySelector('.grid-display-portfolio');
            const tableDisplay = document.querySelector('.table-display-portfolio');

            function setupExpandButtons() {
                document.querySelectorAll('.expand-btn').forEach(button => {
                    button.removeEventListener('click', handleExpand);
                    button.addEventListener('click', handleExpand);
                });
            }

            function handleExpand(e) {
                e.preventDefault();
                const row = this.closest('.portfolio-row');
                row.classList.toggle('expanded');
            }

            // Initial setup
            setupExpandButtons();
            portfolioSectionFull.classList.add('display-grid'); // Start with grid display

            // FAB click handler
            fab.addEventListener('click', function() {
                if (portfolioSectionFull.classList.contains('display-grid')) {
                    portfolioSectionFull.classList.remove('display-grid');
                    portfolioSectionFull.classList.add('display-table');
                    fab.classList.add('table-view');
                    gridDisplay.style.display = 'none';
                    tableDisplay.style.display = 'block';
                } else {
                    portfolioSectionFull.classList.remove('display-table');
                    portfolioSectionFull.classList.add('display-grid');
                    fab.classList.remove('table-view');
                    gridDisplay.style.display = 'block';
                    tableDisplay.style.display = 'none';
                }
            });

            getInvestmentSection.style.display = 'block';
            portfolioSectionFull.style.display = 'none';
            forInvestorSection.style.display = 'none';

            filterLinks.forEach(link => {
                link.addEventListener('click', async function(e) {
                    e.preventDefault();
                    filterLinks.forEach(l => l.classList.remove('active'));
                    this.classList.add('active');
                    const currentFilter = this.getAttribute('data-category') || 'all';

                    try {
                        const response = await fetch(`/portfolio/filter/${currentFilter}`, {
                            headers: {
                                'Accept': 'application/json'
                            }
                        });

                        if (!response.ok) throw new Error('Network response was not ok');
                        const portfolios = await response.json();

                        if (currentFilter === 'get_investment') {
                            updategetinvestment();
                        } else if (currentFilter === 'all') {
                            updateGridLayout(portfolios);
                            setupExpandButtons
                                (); // Add this line to setup expand buttons after updating the grid
                        } else if (currentFilter === 'for_investor') {
                            updateforinvestor();
                        }
                    } catch (error) {
                        console.error('Error:', error);
                    }
                });
            });

            function updategetinvestment() {
                getInvestmentSection.style.display = 'block';
                portfolioSectionFull.style.display = 'none';
                forInvestorSection.style.display = 'none';
            }

            function updateforinvestor() {
                getInvestmentSection.style.display = 'none';
                portfolioSectionFull.style.display = 'none';
                forInvestorSection.style.display = 'block';
            }

            function updateGridLayout(portfolios) {
                getInvestmentSection.style.display = 'none';
                portfolioSectionFull.style.display = 'block';
                forInvestorSection.style.display = 'none';

                masonry.style.display = 'grid';

                const gridPortfolios = portfolios;
                const postsHtml = gridPortfolios.map((portfolio) => {
                    const postUrl = `/portfolio/${portfolio.name.toLowerCase().replace(/\s+/g, '-')}`;
                    const imageUrl = portfolio.image_path ? '/storage/' + portfolio.image_path :
                        '/images/media/image5.png';
                    return `
                        <div class="card">
                            <a href="${postUrl}" class="company-image-link">
                                <img class="portfolio-image" src="${imageUrl}" alt="${portfolio.name}" />
                            </a>
                            <div class="card-stats">
                                <div class="stat-item">
                                    <img src="/images/portfolio/icon1.png" />
                                    <span>${Math.floor(Math.random() * 10) + 1}</span>
                                </div>
                                <div class="stat-item-middle">
                                    <img src="/images/portfolio/icon2.png" />
                                    <span>${Math.floor(Math.random() * 13) + 3}</span>
                                </div>
                                <div class="stat-item">
                                    <img src="/images/portfolio/icon3.png" />
                                    <span>${Math.floor(Math.random() * 16) + 5}</span>
                                </div>
                            </div>
                        </div>
                    `;
                }).join('');

                masonry.innerHTML = postsHtml;

                if (portfolios.length > 0) {
                    if (!portfolioSection) {
                        const newPortfolioSection = document.createElement('div');
                        newPortfolioSection.className = 'portfolio-section';
                        masonry.parentNode.insertBefore(newPortfolioSection, masonry.nextSibling);
                    }
                    portfolioSection.style.display = 'block';

                    const tableHtml = `
                        <div class="portfolio-header">
                            <div class="header-cell">Company Name</div>
                            <div class="header-cell">Category</div>
                            <div class="header-cell">Short Description</div>
                            <div class="header-cell">Current Stage</div>
                            <div class="header-cell">Partners</div>
                        </div>
                        ${portfolios.map(portfolio => `
                                        <div class="portfolio-row">
                                            <div class="company-cell">
                                                <h3 class="company-name">${portfolio.name}</h3>
                                                <a href="/portfolio/${portfolio.name.toLowerCase().replace(/\s+/g, '-')}" class="company-image-link">
                                                    <img class="company-image"
                                                        src="${portfolio.image_path ? '/storage/' + portfolio.image_path : '/images/media/image5.png'}"
                                                        alt="${portfolio.name}">
                                                </a>
                                                <a href="${portfolio.website_url}" target="_blank" class="company-website">
                                                    ${portfolio.website_url ? portfolio.website_url.replace(/^https?:\/\//, '') : ''}
                                                </a>
                                            </div>
                                            <div class="category-cell">${portfolio.category ? portfolio.category.name : ''}</div>
                                            <div class="description-cell">
                                                ${portfolio.description ? portfolio.description.substring(0, 100) + '...' : ''}
                                            </div>
                                            <div class="stage-cell">
                                                <span class="stage-tag">${portfolio.stage || ''}</span>
                                            </div>
                                            <div class="partners-cell">
                                                <div class="partner-info">
                                                    <span>${portfolio.ceo_name ? portfolio.ceo_name + ' (CEO)' : ''}</span>
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
                                    `).join('')}
                    `;

                    portfolioSection.innerHTML = tableHtml;
                    setupExpandButtons(); // Add this line to setup expand buttons after updating the table
                } else {
                    if (portfolioSection) portfolioSection.style.display = 'none';
                }
            }


        });
    </script>
@endsection
