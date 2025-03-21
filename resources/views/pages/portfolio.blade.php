@extends('layout.mainlayout')

@section('localcss')
    <link href="{{ asset('css/portfolio.css') }}" rel="stylesheet">
    <style>
        :root {
            --font-size-base: {{ $masterData->font_size ?? '14px' }};
        }
    </style>
@endsection

@section('container')
    <div class="hero-section">
        <video autoplay muted loop playsinline class="video-background">
            <source loading="lazy" src="{{ '/storage/' . $hero->image_path }}" type="video/mp4">
        </video>
        <div class="hero-content">
            <a href="#">
                <h1 class="hero-main-text">{!! $hero->getTranslation('title', session('locale', 'en')) !!}</h1>
            </a>
            <div class="center-search">

                <div class="search-input-container">
                    <input type="text" placeholder="Search..." class="search-input" style="visibility: hidden;">
                    <i class="fas fa-search search-input-icon" style="visibility: hidden;"></i>
                </div>
                {{-- SUB MENU  --}}
                <nav class="category-filters">
                    @foreach ($menuSubCategory as $menuSubCat)
                        @if ($menuSubCat->active)
                            <a href="#" class="filter-link {{ $loop->first ? 'active' : '' }}"
                                data-category="{{ Str::slug($menuSubCat->slug) }}">{{ $menuSubCat->getTranslation('name', session('locale', 'en')) }}</a>
                        @endif
                    @endforeach
                </nav>
            </div>
        </div>
    </div>

    {{-- Get Investment Section --}}
    <div class="get-investement-section">
        {{-- Article Section --}}

        <div class="hero-mid-section">
            <h1 class="center-text">{!! $menuSubCategory->first()?->getTranslation('headline_text', session('locale', 'en')) ?? '' !!}</h1>
        </div>

        @foreach ($portfolioArticlesList as $index => $article)
            <div class="container-bg">
                <div
                    class="{{ $index % 2 === 0 ? 'masonry-grid-investment-section' : 'masonry-grid-investment-section-grey' }}">
                    <div class="grid-headline-title-card">
                        <h1 class="grid-headline-title">{!! $article->getTranslation('title', session('locale', 'en')) !!}</h1>
                        <h1 class="grid-headline-subtitle-left">{!! $article->getTranslation('content', session('locale', 'en')) !!}</h1>
                    </div>
                    <div class="grid-headline-description-card">
                        <div class="masonry-grid-investment-section-sub">
                            @foreach ($portfolioArticleSubList->where('article_id', $article->id) as $subArticle)
                                <div class="grid-headline-title-card-sub">
                                    @if ($subArticle->icon)
                                        <div class="card-icon">
                                            <img src="{{ '/storage/' . $subArticle->icon }}"
                                                alt="{!! $subArticle->getTranslation('title', session('locale', 'en')) !!} Icon" loading="lazy">
                                        </div>
                                    @else
                                        <div class="card-icon-bottom">
                                            <h1 class="card-title-bottom">{{ $subArticle->text_icon }}</h1>
                                        </div>
                                    @endif
                                    <h2 class="card-title">{!! $subArticle->getTranslation('title', session('locale', 'en')) !!}</h2>
                                    <p class="card-description">{!! $subArticle->getTranslation('content', session('locale', 'en')) !!}</p>
                                </div>
                            @endforeach
                        </div>
                        <div class="grid-headline-title-card-sub-bottom">
                            <h1 class="card-title-sub-bottom">{!! $article->getTranslation('title_sub', session('locale', 'en')) !!}</h1>
                            <p class="card-description-bottom">{!! $article->getTranslation('content_sub', session('locale', 'en')) !!}</p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

        {{-- Contact Form Section --}}
        <div class="masonry-grid-contact-section-grey">
            <div class="grid-headline-title-card-contact">
                <h1 class="grid-headline-title-contact">{!! $portfolio_email_startup->first()?->getTranslation('title', session('locale', 'en')) ?? '' !!}</h1>
                <p class="grid-headline-subtitle-contact">
                    {!! $portfolio_email_startup->first()?->getTranslation('subtitle', session('locale', 'en')) ?? '' !!}
                </p>
            </div>

            <div class="grid-headline-contact-card">
                <div class="contact-icon-section" id="contactToggle">
                    <i class="fas fa-chevron-down contact-icon" aria-hidden="true"></i>Show Form
                </div>

                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif

                <form id="contactForm" class="contact-form hidden" action="{{ route('portfolio.get.investment.email') }}"
                    method="POST" enctype="multipart/form-data">
                    @csrf
                    {{-- Company Details --}}
                    <div class="form-row">
                        <div class="form-group">
                            <label for="first_name" class="form-label">{!! $portfolio_email_startup->first()?->getTranslation('firstname', session('locale', 'en')) ?? '' !!}*</label>
                            <input type="text" id="first_name" name="first_name" class="form-input"
                                placeholder="Write here..." required>
                        </div>
                        <div class="form-group">
                            <label for="last_name" class="form-label">{!! $portfolio_email_startup->first()?->getTranslation('lastname', session('locale', 'en')) ?? '' !!}*</label>
                            <input type="text" id="last_name" name="last_name" class="form-input"
                                placeholder="Write here..." required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="email" class="form-label">{!! $portfolio_email_startup->first()?->getTranslation('email', session('locale', 'en')) ?? '' !!}*</label>
                            <input type="email" id="email" name="email" class="form-input"
                                placeholder="Write here..." required>
                        </div>
                        <div class="form-group">
                            <label for="phone" class="form-label">{!! $portfolio_email_startup->first()?->getTranslation('phone', session('locale', 'en')) ?? '' !!}*</label>
                            <input type="text" id="phone" name="phone" class="form-input"
                                placeholder="Write here..." required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="company_name" class="form-label">{!! $portfolio_email_startup->first()?->getTranslation('company', session('locale', 'en')) ?? '' !!}*</label>
                            <input type="text" id="company_name" name="company_name" class="form-input"
                                placeholder="Write here..." required>
                        </div>
                        <div class="form-group">
                            <label for="url" class="form-label">{!! $portfolio_email_startup->first()?->getTranslation('website_url', session('locale', 'en')) ?? '' !!}</label>
                            <input type="text" id="url" name="url" class="form-input"
                                placeholder="Write here..." required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="business_sector" class="form-label">{!! $portfolio_email_startup->first()?->getTranslation('business_sector', session('locale', 'en')) !!}</label>
                            <select name="business_sector" id="business_sector" required>
                                <option value="">
                                    {{ session('locale') === 'id' ? 'Pilih opsi' : 'Select an option' }}</option>
                                <option value="agriculture_food">
                                    {{ session('locale') === 'id' ? 'Pertanian & Makanan' : 'Agriculture & Food' }}
                                </option>
                                <option value="energy_resources">
                                    {{ session('locale') === 'id' ? 'Energi & Sumber Daya' : 'Energy & Resources' }}
                                </option>
                                <option value="healthcare_pharmaceuticals">
                                    {{ session('locale') === 'id' ? 'Kesehatan & Farmasi' : 'Healthcare & Pharmaceuticals' }}
                                </option>
                                <option value="education_employment">
                                    {{ session('locale') === 'id' ? 'Pendidikan & Pekerjaan' : 'Education & Employment' }}
                                </option>
                                <option value="automotive_transportation">
                                    {{ session('locale') === 'id' ? 'Otomotif & Transportasi' : 'Automotive & Transportation' }}
                                </option>
                                <option value="banking_financial">
                                    {{ session('locale') === 'id' ? 'Perbankan & Jasa Keuangan' : 'Banking & Financial Service' }}
                                </option>
                                <option value="consulting_professional">
                                    {{ session('locale') === 'id' ? 'Konsultasi & Jasa Profesional' : 'Consulting & Professional Services' }}
                                </option>
                                <option value="media_entertainment">
                                    {{ session('locale') === 'id' ? 'Media & Hiburan' : 'Media & Entertainment' }}</option>
                                <option value="retail_wholesale">
                                    {{ session('locale') === 'id' ? 'Ritel & Grosir' : 'Retail & Wholesale' }}</option>
                                <option value="other">{{ session('locale') === 'id' ? 'Lainnya' : 'Other' }}</option>
                            </select>
                        </div>
                        <div class="form-group">
                        </div>
                    </div>


                    {{-- Upload Company Profile / Pitch Deck --}}
                    <div class="form-group">
                        <label class="form-label">{!! $portfolio_email_startup->first()?->getTranslation('upload', session('locale', 'en')) ?? '' !!}</label>
                        <div class="file-upload-container">
                            <label for="company_profile" class="file-upload-button">Choose File</label>
                            <span class="file-name">No File Chosen</span>
                            <input type="file" id="company_profile" name="company_profile" class="file-input"
                                accept=".pdf">
                        </div>
                        <p class="description-text" id="company-profile-desc">Please upload your company profile or Pitch Deck (Max. 15 page PDF)</p>

                        <div class="card-funding-hover" id="company-profile-hover">
                            <div class="hover-content">
                                <div class="upload-guidelines">
                                    <p>
                                        {!! $portfolio_email_startup->first()?->getTranslation('instructions', session('locale', 'en')) ?? '' !!}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Business Sector Selection
                    <div class="form-group">
                        <label class="form-label">{!! $portfolio_email_startup->first()?->getTranslation('business_sector', session('locale', 'en')) ?? '' !!}</label>
                        <div class="sector-grid">
                            <div class="sector-item">
                                <input type="radio" id="agriculture" name="business_sector" value="Agriculture & Food"
                                    class="sector-radio" required>
                                <label for="agriculture"
                                    class="sector-label">{{ session('locale') === 'id' ? 'Pertanian & Makanan' : 'Agriculture & Food' }}</label>
                            </div>
                            <div class="sector-item">
                                <input type="radio" id="energy" name="business_sector" value="Energy & Resources"
                                    class="sector-radio">
                                <label for="energy"
                                    class="sector-label">{{ session('locale') === 'id' ? 'Energi & Sumber Daya' : 'Energy & Resources' }}</label>
                            </div>
                            <div class="sector-item">
                                <input type="radio" id="healthcare" name="business_sector"
                                    value="Healthcare & Pharmaceuticals" class="sector-radio">
                                <label for="healthcare"
                                    class="sector-label">{{ session('locale') === 'id' ? 'Kesehatan & Farmasi' : 'Healthcare & Pharmaceuticals' }}</label>
                            </div>
                            <div class="sector-item">
                                <input type="radio" id="education" name="business_sector"
                                    value="Education & employment" class="sector-radio">
                                <label for="education"
                                    class="sector-label">{{ session('locale') === 'id' ? 'Pendidikan & Ketenagakerjaan' : 'Education & employment' }}</label>
                            </div>
                            <div class="sector-item">
                                <input type="radio" id="automotive" name="business_sector"
                                    value="Automotive & Transportation" class="sector-radio">
                                <label for="automotive"
                                    class="sector-label">{{ session('locale') === 'id' ? 'Otomotif & Transportasi' : 'Automotive & Transportation' }}</label>
                            </div>
                            <div class="sector-item">
                                <input type="radio" id="banking" name="business_sector"
                                    value="Banking & Financial Service" class="sector-radio">
                                <label for="banking"
                                    class="sector-label">{{ session('locale') === 'id' ? 'Perbankan & Layanan Keuangan' : 'Banking & Financial Service' }}</label>
                            </div>
                            <div class="sector-item">
                                <input type="radio" id="consulting" name="business_sector"
                                    value="Consulting & Professional Services" class="sector-radio">
                                <label for="consulting"
                                    class="sector-label">{{ session('locale') === 'id' ? 'Konsultasi & Layanan Profesional' : 'Consulting & Professional Services' }}</label>
                            </div>
                            <div class="sector-item">
                                <input type="radio" id="media" name="business_sector"
                                    value="Media & Entertainment" class="sector-radio">
                                <label for="media"
                                    class="sector-label">{{ session('locale') === 'id' ? 'Media & Hiburan' : 'Media & Entertainment' }}</label>
                            </div>
                            <div class="sector-item">
                                <input type="radio" id="retail" name="business_sector" value="Retail & Wholesale"
                                    class="sector-radio">
                                <label for="retail"
                                    class="sector-label">{{ session('locale') === 'id' ? 'Ritel & Grosir' : 'Retail & Wholesale' }}</label>
                            </div>
                            <div class="sector-item">
                                <input type="radio" id="other" name="business_sector" value="Other"
                                    class="sector-radio">
                                <label for="other"
                                    class="sector-label">{{ session('locale') === 'id' ? 'Lainnya' : 'Other' }}</label>
                            </div>
                        </div>
                    </div> --}}

                    {{-- Submit Button --}}
                    <div class="form-group button-group">
                        <button type="reset" class="reset-button">{!! $portfolio_email_startup->first()?->getTranslation('cancel', session('locale', 'en')) ?? '' !!}</button>
                        <button type="submit" class="submit-button">{!! $portfolio_email_startup->first()?->getTranslation('submit', session('locale', 'en')) ?? '' !!}</button>
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
                <img src="{{ asset('images/portfolio/icon-list.png') }}" alt="Menu Icon" class="icon-list active"
                    loading="lazy">
                <img src="{{ asset('images/portfolio/icon-grid.png') }}" alt="Menu Icon" class="icon-grid"
                    loading="lazy">
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
                                        alt="{{ $portfolio->name }}" loading="lazy">
                                    <div class="image-overlay">
                                        <img class="icon-image" src="{{ Storage::url($portfolio->icon) }}"
                                            alt="{{ $portfolio->icon }}" loading="lazy">

                                        <div class="portfolio-description">{!! $portfolio->getTranslation('description', session('locale', 'en')) !!}</div>
                                    </div>
                                </div>
                            </a>
                            <div class="card-stats" style="visibility: hidden;">
                                @foreach ($stats as $index => $stat)
                                    <div class="stat-item{{ $index === 1 ? '-middle' : '' }}">
                                        <img src="{{ asset('images/portfolio/' . $stat['icon']) }}"
                                            alt="Portfolio Statistic" loading="lazy">
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
                        <div class="header-cell">{{ session('locale') === 'id' ? 'Nama Perusahaan' : 'Company Name' }}
                        </div>
                        <div class="header-cell">{{ session('locale') === 'id' ? 'Sektor' : 'Sector' }}</div>
                        <div class="header-cell">
                            {{ session('locale') === 'id' ? 'Deskripsi Singkat' : 'Short Description' }}</div>
                        <div class="header-cell">{{ session('locale') === 'id' ? 'Kantor Pusat' : 'Head Office' }}</div>
                        <div class="header-cell">{{ session('locale') === 'id' ? 'Tahun Investasi' : 'Year Invested' }}
                        </div>
                    </div>

                    @foreach ($portfolios as $portfolio)
                        <div class="portfolio-row">
                            <div class="company-cell">
                                <h3 class="company-name">{{ $portfolio->name }}</h3>
                                <a href="{{ route('portfolio.show', ['slug' => Str::slug($portfolio->name)]) }}"
                                    class="company-image-link-list">
                                    <img class="company-image"
                                        src="{{ $portfolio->image_path ? Storage::url($portfolio->image_path) : asset('images/media/image5.png') }}"
                                        alt="{{ $portfolio->name }}" loading="lazy">
                                </a>
                                <a href="{{ $portfolio->website_url }}" target="_blank"
                                    class="company-website">{{ str_replace(['https://', 'http://'], '', $portfolio->website_url) }}</a>
                            </div>
                            <div class="category-cell">{!! $portfolio->getTranslation('sector', session('locale', 'en')) !!}</div>
                            <div class="description-cell">
                                {!! Str::limit($portfolio->getTranslation('description', session('locale', 'en')), 100) !!}
                            </div>
                            <div class="stage-cell">
                                <span class="stage-tag">{!! $portfolio->getTranslation('head_office', session('locale', 'en')) !!}</span>
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
                <h2 class="newsletter-title">{!! $masterData->getTranslation('footer', session('locale', 'en')) !!}</h2>
                <a href="{{ route('contact') }}">
                    <img src="{{ asset('images/portfolio/letsconnect.png') }}" alt="Lets Connect"
                        class="button-image center-image-newsletter" loading="lazy">
                </a>
            </div>
        </div>
    </div>

    {{-- Funding Section --}}
    <div class="for-investor-section">
        {{-- Hero Section --}}
        <div class="hero-mid-section">
            <h1 class="center-text">{!! $menuSubCategory->skip(2)->first()?->getTranslation('headline_text', session('locale', 'en')) ?? '' !!}</h1>
        </div>

        {{-- Investment Vehicles --}}
        @foreach ($portfolioFundingArticlesList as $index => $article)
            <div
                class="{{ $index % 2 === 0 ? 'masonry-grid-investment-section' : 'masonry-grid-investment-section-grey2' }}">
                <div class="grid-headline-title-card">
                    <h1 class="grid-headline-title">{{ $article->getTranslation('title', session('locale', 'en')) }}</h1>
                    <h1 class="grid-headline-subtitle-left">{!! $article->getTranslation('content', session('locale', 'en')) !!}</h1>
                </div>

                <div class="grid-headline-description-card">
                    <div
                        class="{{ $index % 2 === 0 ? 'masonry-grid-investment-section' : 'masonry-grid-investment-section-grey2' }}">
                        <div class="grid-headline-description-card-funding">
                            <div class="masonry-grid-investment-section-sub">
                                @foreach ($portfolioFundingArticleSubList->where('article_id', $article->id) as $subArticle)
                                    <div
                                        class="grid-headline-title-card-sub {{ $subArticle->is_large ? 'card-funding-large' : 'card-funding' }}">
                                        @if (!$subArticle->is_large)
                                            <div class="background-image">
                                        @endif

                                        <img src="{{ '/storage/' . $subArticle->image_path }}" alt="funding2.png"
                                            class="card-funding-image" loading="lazy" />

                                        @if (!$subArticle->is_large)
                                    </div>
                                @endif

                                <div class="funding-category{{ $subArticle->is_large ? '-large' : '' }}">
                                    {!! $subArticle->getTranslation('title', session('locale', 'en')) !!}
                                </div>
                                <div class="card-funding-content{{ $subArticle->is_large ? '-large' : '' }}">
                                    {!! $subArticle->getTranslation('about_content_front', session('locale', 'en')) !!}
                                </div>
                                <a href="{{ route('portfolio.show.funding', $subArticle->id) }}"
                                    class="text-decoration-none">
                                    <span
                                        class="funding-link">{{ session('locale') === 'id' ? 'Detail Dana >>' : 'Fund Details >>' }}</span>
                                </a>

                                {{-- Hover card that follows mouse --}}

                                <div class="card-funding-hover">
                                    <div class="hover-content">
                                        <div class="">
                                            <img src="{{ '/storage/' . $subArticle->image_path }}" alt="funding2.png"
                                                class="card-funding-image-hover" loading="lazy" />
                                        </div>
                                        <div class="funding-category-hover">
                                            {{ session('locale') === 'id' ? 'Kriteria Startup' : 'Startup Criteria' }}
                                        </div>
                                        <div class="criteria-grid">
                                            <div class="criteria-item">
                                                <h3>{{ session('locale') === 'id' ? 'Tahap' : 'Stage' }}</h3>
                                                <p>{!! $subArticle->getTranslation('stage', session('locale', 'en')) !!}</p>
                                            </div>
                                            <div class="criteria-item">
                                                <h3>{{ session('locale') === 'id' ? 'Wilayah' : 'Geography' }}</h3>
                                                <p>{!! $subArticle->getTranslation('geography', session('locale', 'en')) !!}</p>
                                            </div>
                                            <div class="criteria-item">
                                                <h3>{{ session('locale') === 'id' ? 'Ukuran Investasi' : 'Ticket Size' }}
                                                </h3>
                                                <p>{!! $subArticle->getTranslation('ticketsize', session('locale', 'en')) !!}</p>
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
            <h1 class="grid-headline-title-contact">
                {{ $portfolio_email_investor->first()?->getTranslation('title', session('locale', 'en')) ?? '' }}</h1>
            <p class="grid-headline-subtitle-contact">
                {{ $portfolio_email_investor->first()?->getTranslation('subtitle', session('locale', 'en')) ?? '' }}
            </p>
        </div>

        <div class="grid-headline-contact-card">
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif

            <form id="contactForm" class="contact-form" action="{{ route('portfolio.funds.email') }}" method="POST">
                @csrf
                {{-- Company Details --}}
                <div class="form-row">
                    <div class="form-group">
                        <label for="full_name"
                            class="form-label">{{ $portfolio_email_investor->first()?->getTranslation('fullname', session('locale', 'en')) ?? '' }}*</label>
                        <input type="text" id="full_name" name="full_name" class="form-input"
                            placeholder="Write here..." required>
                    </div>
                    <div class="form-group">
                        <label for="subject"
                            class="form-label">{{ $portfolio_email_investor->first()?->getTranslation('subject', session('locale', 'en')) ?? '' }}*</label>
                        <input type="text" id="subject" name="subject" class="form-input"
                            placeholder="Write here..." required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label for="phone"
                            class="form-label">{{ $portfolio_email_investor->first()?->getTranslation('phone', session('locale', 'en')) ?? '' }}*</label>
                        <input type="text" id="phone" name="phone" class="form-input"
                            placeholder="Write here..." required>
                    </div>
                    <div class="form-group">

                        <label for="email"
                            class="form-label">{{ $portfolio_email_investor->first()?->getTranslation('email', session('locale', 'en')) ?? '' }}*</label>
                        <input type="email" id="email" name="email" class="form-input"
                            placeholder="Write here..." required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label for="company_name"
                            class="form-label">{{ $portfolio_email_investor->first()?->getTranslation('company', session('locale', 'en')) ?? '' }}*</label>
                        <input type="text" id="company_name" name="company_name" class="form-input"
                            placeholder="Write here..." required>
                    </div>
                </div>

                {{-- Business Description --}}
                <div class="form-group">
                    <label for="message"
                        class="form-label">{{ $portfolio_email_investor->first()?->getTranslation('message', session('locale', 'en')) ?? '' }}</label>
                    <textarea id="message" name="message" rows="4" class="form-textarea" placeholder="Write here..." required></textarea>
                </div>

                {{-- Submit Button --}}
                <div class="form-group button-group">
                    <button type="reset"
                        class="reset-button">{{ $portfolio_email_investor->first()?->getTranslation('cancel', session('locale', 'en')) ?? '' }}</button>
                    <button type="submit"
                        class="submit-button">{{ $portfolio_email_investor->first()?->getTranslation('submit', session('locale', 'en')) ?? '' }}</button>
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

            // Company profile description hover functionality
            const companyProfileDesc = document.getElementById('company-profile-desc');
            const companyProfileHover = document.getElementById('company-profile-hover');
            let isHoveringDesc = false;

            if (companyProfileDesc && companyProfileHover) {
                document.addEventListener('mousemove', function(e) {
                    if (isHoveringDesc) {
                        const mouseX = e.clientX;
                        const mouseY = e.clientY;

                        companyProfileHover.style.left = `${mouseX}px`;
                        companyProfileHover.style.top = `${mouseY}px`;
                        companyProfileHover.style.transform = 'translate(20px, 20px)';
                    }
                });

                companyProfileDesc.addEventListener('mouseenter', function() {
                    isHoveringDesc = true;
                    companyProfileHover.classList.add('active');
                });

                companyProfileDesc.addEventListener('mouseleave', function() {
                    isHoveringDesc = false;
                    companyProfileHover.classList.remove('active');
                });
            }
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
    </script>
@endsection
