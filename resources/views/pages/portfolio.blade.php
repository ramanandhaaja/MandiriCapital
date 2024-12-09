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
                    <a href="#" class="filter-link active" data-category="all">All</a>
                    <a href="#" class="filter-link" data-category="fintech">Fintech</a>
                    <a href="#" class="filter-link" data-category="unicorn">Unicorn</a>
                    <a href="#" class="filter-link" data-category="enterprise">Enterprise</a>
                    <a href="#" class="filter-link" data-category="customer">Customer</a>
                </div>
            </div>
        </div>
    </div>


    {{-- Content Section --}}
    <div class="masonry-grid">
        @foreach ($portfolios->take(8)->get() as $portfolio)
            <div class="card">
                <a href="{{ route('portfolio.show', ['slug' => Str::slug($portfolio->name)]) }}" class="company-image-link">
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
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
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
@endsection

@section('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const filterLinks = document.querySelectorAll('.filter-link');
            const masonry = document.querySelector('.masonry-grid');
            const portfolioSection = document.querySelector('.portfolio-section');
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
                        } else {
                            updateTableLayout(portfolios);
                        }

                        setupExpandButtons();
                    } catch (error) {
                        console.error('Error:', error);
                    }
                });
            });

            function updateGridLayout(portfolios) {
                masonry.style.display = 'grid';

                const gridPortfolios = portfolios.slice(0, 8);
                const postsHtml = gridPortfolios.map((portfolio) => {
                    const postUrl = `/portfolio/${portfolio.name.toLowerCase().replace(/\s+/g, '-')}`;
                    const imageUrl = portfolio.image_path ? '/storage/' + portfolio.image_path : '/images/media/image5.png';
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
