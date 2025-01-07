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
                <img src="{{ asset('images/portfolio/portfolio.png') }}" alt="Media" class="center-image">
            </a>
            <div class="center-search">
                <div class="search-input-container">
                    <input type="text" placeholder="Search..." class="search-input">
                    <i class="fas fa-search search-input-icon"></i>
                </div>
                <div class="category-filters">
                    <a href="#" class="filter-link active" data-category="get_investment">Get Investment</a>
                    <a href="#" class="filter-link" data-category="all">Portfolio</a>
                    <a href="#" class="filter-link" data-category="for_investor">For Investor</a>
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
                <h1 class="grid-headline-subtitle">At Mandiri Capital Indonesia, we believe in investing in businesses, not
                    just funding rounds. This means we’re here to support you throughout your journey—from the spark of an
                    idea to scaling into a successful, impactful enterprise.
                    </br></br>
                    As part of the Mandiri Group, we bring unparalleled resources, expertise, and connections to help you
                    grow and thrive at every stage.</h1>
            </div>

        </div>

        <div class="masonry-grid-investment-section-grey">
            <div class="grid-headline-title-card">
                <h1 class="grid-headline-title">Here’s how we’ll help you achieve that growth </h1>
            </div>
            <div class="grid-headline-description-card">
                <h1 class="grid-headline-subtitle">At Mandiri Capital Indonesia, we believe in investing in businesses, not
                    just funding rounds. This means we’re here to support you throughout your journey—from the spark of an
                    idea to scaling into a successful, impactful enterprise.
                    </br></br>
                    As part of the Mandiri Group, we bring unparalleled resources, expertise, and connections to help you
                    grow and thrive at every stage.</h1>
            </div>

        </div>

        <div class="masonry-grid-investment-section">
            <div class="grid-headline-title-card">
                <h1 class="grid-headline-title">Our Investment Process </h1>
            </div>
            <div class="grid-headline-description-card">
                <h1 class="grid-headline-subtitle">At Mandiri Capital Indonesia, we believe in investing in businesses, not
                    just funding rounds. This means we’re here to support you throughout your journey—from the spark of an
                    idea to scaling into a successful, impactful enterprise.
                    </br></br>
                    As part of the Mandiri Group, we bring unparalleled resources, expertise, and connections to help you
                    grow and thrive at every stage.</h1>
            </div>

        </div>

        <div class="masonry-grid-investment-section-grey">
            <div class="grid-headline-title-card">
                <h1 class="grid-headline-title">For Investor</h1>
                <h1 class="grid-headline-subtitle-left">To foster long-term growth, we invest through three distinct fund
                    vehiclesr</h1>
            </div>
            <div class="grid-headline-description-card">
                <h1 class="grid-headline-subtitle">At Mandiri Capital Indonesia, we believe in investing in businesses, not
                    just funding rounds. This means we’re here to support you throughout your journey—from the spark of an
                    idea to scaling into a successful, impactful enterprise.
                    </br></br>
                    As part of the Mandiri Group, we bring unparalleled resources, expertise, and connections to help you
                    grow and thrive at every stage.</h1>
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
    <div class="portfolio-full-section">
        <div class="masonry-grid">
            @foreach ($portfolios->take(8)->get() as $portfolio)
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
        </div>

        @if ($portfolios->count() > 8)
            <div class="portfolio-section">
                {{-- Portfolio Header with hover effects and better spacing --}}
                <div class="portfolio-header">
                    <div class="header-cell">Company Name</div>
                    <div class="header-cell">Category</div>
                    <div class="header-cell">Short Description</div>
                    <div class="header-cell">Current Stage</div>
                    <div class="header-cell">Partners</div>
                </div>

                @foreach ($portfolios->skip(8)->get() as $portfolio)
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
        <div class="investor-container">
            <div class="investor-grid">
                <div class="investor-iframe-container">
                </div>
                <!-- Content Column -->
                <div class="investor-content">
                    <h2 class="investor-title">
                        IFF
                    </h2>

                    <div class="investor-info">
                        <p> financial tool designed to raise funds for important global projects, like health, education, or
                            infrastructure. It works by issuing bonds in capital markets, backed by long-term government
                            pledges.</p>
                        <p> This approach provides immediate funding for urgent needs while spreading the financial
                            commitment over time. A key example is the International Finance Facility for Immunisation
                            (IFFIm), which has helped deliver vaccines to millions worldwide.</p>
                        <p> In simple terms, IFF turns future promises into funds that create impact today. </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="investor-container dark">
            <div class="investor-grid">
                <!-- Content Column -->
                <div class="investor-content">
                    <h2 class="investor-title">
                        BTN Fund
                    </h2>

                    <div class="investor-info">
                        <p> investment initiative launched by PT Bank Tabungan Negara (Persero) Tbk (Bank BTN) in
                            collaboration with PT Mandiri Capital Indonesia (MCI), the corporate venture capital arm of Bank
                            Mandiri. Established in December 2023, the fund focuses on investing in startups operating in
                            sectors such as property technology (proptech), mortgage technology (mortgage tech), financial
                            technology (fintech), embedded finance, construction technology (construction tech), open
                            finance, and software as a service (SaaS).</p>
                        <p> In summary, the BTN Fund represents a strategic move by Bank BTN to invest in and collaborate
                            with technology-driven startups, thereby accelerating its digital transformation and
                            strengthening its position in the housing finance sector.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="investor-container">
            <div class="investor-grid">
                <div class="investor-iframe-container">
                </div>
                <!-- Content Column -->
                <div class="investor-content">
                    <h2 class="investor-title">
                        MPF
                    </h2>

                    <div class="investor-info">
                        <p> It's a compulsory retirement savings scheme in Hong Kong, designed to help employees save
                            for their retirement. </p>
                        <p> Both employers and employees contribute a percentage of the employee's salary into the fund,
                            which is then invested in various financial products to grow over time. The accumulated
                            savings become accessible to employees upon reaching retirement age or under specific
                            conditions. </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="investor-container dark">
            <div class="investor-grid">
                <!-- Content Column -->
                <div class="investor-content">
                    <h2 class="investor-title-lg">
                        New Investor Enquiry
                    </h2>
                    <div class="investor-info">
                        <p> Begin your investment journey with confidence</p>
                        <p> —partner with us today.</p>
                    </div>
                </div>
                <div class="investor-iframe-container-lg">
                    <img src="{{ asset('images/portfolio/btn.png') }}" alt="Lets Connect"/>
                </div>
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


            getInvestmentSection.style.display = 'block';
            portfolioSectionFull.style.display = 'none';
            forInvestorSection.style.display = 'none';

            let currentFilter = 'all';

            function setupExpandButtons() {
                document.querySelectorAll('.expand-btn').forEach(button => {
                    button.addEventListener('click', function() {
                        const row = this.closest('.portfolio-row');
                        row.classList.toggle('expanded');
                    });
                });
            }

            setupExpandButtons();

            filterLinks.forEach(link => {
                link.addEventListener('click', async function(e) {
                    e.preventDefault();

                    filterLinks.forEach(l => l.classList.remove('active'));
                    this.classList.add('active');
                    currentFilter = this.getAttribute('data-category') || 'all';

                    try {
                        const response = await fetch(`/portfolio/filter/${currentFilter}`, {
                            headers: {
                                'X-Requested-With': 'XMLHttpRequest'
                            }
                        });

                        if (!response.ok) throw new Error('Network response was not ok');

                        const portfolios = await response.json();

                        if (currentFilter === 'all') {
                            updateGridLayout(portfolios);
                        } else if (currentFilter === 'get_investment') {
                            updategetinvestment();
                        } else if (currentFilter === 'for_investor') {
                            updateforinvestor();
                        }

                        setupExpandButtons();
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

                const gridPortfolios = portfolios.slice(0, 8);
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

                if (portfolios.length > 8) {
                    if (!portfolioSection) {
                        const newPortfolioSection = document.createElement('div');
                        newPortfolioSection.className = 'portfolio-section';
                        masonry.parentNode.insertBefore(newPortfolioSection, masonry.nextSibling);
                    }
                    portfolioSection.style.display = 'block';

                    const remainingPortfolios = portfolios.slice(8);
                    const tableHtml = `
                        <div class="portfolio-header">
                            <div class="header-cell">Company Name</div>
                            <div class="header-cell">Category</div>
                            <div class="header-cell">Short Description</div>
                            <div class="header-cell">Current Stage</div>
                            <div class="header-cell">Partners</div>
                        </div>
                        ${remainingPortfolios.map(portfolio => `
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
                                                                    ${portfolio.description ? portfolio.description.substring(0, 100) + (portfolio.description.length > 100 ? '...' : '') : ''}
                                                                </div>
                                                                <div class="stage-cell">
                                                                    <span class="stage-tag">${portfolio.stage || ''}</span>
                                                                </div>
                                                                <div class="partners-cell">
                                                                    <div class="partner-info">
                                                                        <span>${portfolio.ceo_name ? portfolio.ceo_name + ' (CEO)' : ''}</span>
                                                                        <button class="expand-btn" aria-label="Show more details">
                                                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                                                <path d="M6 9l6 6 6-6" />
                                                                            </svg>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        `).join('')}
                    `;

                    portfolioSection.innerHTML = tableHtml;
                } else {
                    if (portfolioSection) portfolioSection.style.display = 'none';
                }
            }

            function updateTableLayout(portfolios) {
                masonry.style.display = 'none';
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
                                                                ${portfolio.description ? portfolio.description.substring(0, 100) + (portfolio.description.length > 100 ? '...' : '') : ''}
                                                            </div>
                                                            <div class="stage-cell">
                                                                <span class="stage-tag">${portfolio.stage || ''}</span>
                                                            </div>
                                                            <div class="partners-cell">
                                                                <div class="partner-info">
                                                                    <span>${portfolio.ceo_name ? portfolio.ceo_name + ' (CEO)' : ''}</span>
                                                                    <button class="expand-btn" aria-label="Show more details">
                                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                                            <path d="M6 9l6 6 6-6" />
                                                                        </svg>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    `).join('')}
                `;

                portfolioSection.innerHTML = tableHtml;
            }
        });
    </script>
@endsection
