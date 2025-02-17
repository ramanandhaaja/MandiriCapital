@extends('layout.mainlayout')
@use('Illuminate\Support\Facades\Storage')

@section('localcss')
    <link href="{{ asset('css/platform.css') }}" rel="stylesheet">
@endsection

@section('container')
    {{-- Hero Section --}}
    <div class="hero-section">
        <video autoplay muted loop playsinline class="video-background">
            <source loading="lazy" src="{{ '/storage/' . $hero->image_path }}" type="video/mp4">
        </video>

        <div class="hero-content">
            <h1 class="hero-main-text">{!! $hero->getTranslation('title', session('locale', 'en')) !!}</h1>
            <div class="center-search">
                {{-- SUB MENU  --}}
                <nav class="category-filters">
                    @foreach ($menuSubCategory as $menuSubCat)
                        <a href="#" class="filter-link {{ $loop->first ? 'active' : '' }}"
                            data-filter="{{ Str::slug($menuSubCat->slug) }}">{{ $menuSubCat->getTranslation('name', session('locale', 'en')) }}</a>
                    @endforeach
                </nav>
            </div>
        </div>
    </div>

    {{-- Business Units Section --}}
    <div class="headline-section" id="business-section">

        <div class="hero-mid-section">
            <h1 class="center-text">{!! $menuSubCategory->first()?->getTranslation('headline_text', session('locale', 'en')) ?? '' !!}
            </h1>

         </div>

        <div class="headline-section-two">
            <div class="headline-grid-counter">
                @foreach ($counters as $index => $article)
                    <div class="headline-card-two {{ $index === 1 ? 'middle-border' : '' }}">
                        <div id="counter{{ $index + 1 }}" class="counter" data-value="{{ $article->getTranslation('content', session('locale', 'en')) }}">
                            {{ $article->getTranslation('content', session('locale', 'en')) }}</div>
                        <h1>{{ $article->getTranslation('title', session('locale', 'en')) }}</h1>
                        <p class="subtitle">{{ $article->getTranslation('subtitle', session('locale', 'en')) }}</p>
                    </div>
                @endforeach
            </div>
        </div>




        {{--
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
         --}}
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



        <div class="masonry-grid-investment-section">
            <div class="grid-headline-title-card">
                <h1 class="grid-headline-title">{{ session('locale', 'en') === 'id' ? 'Apa yang Menjadi Fokus Kami?' : 'What we focus on?' }}</h1>
            </div>

            <div class="grid-headline-description-card">
                @foreach ($platformFocusCategory as $index => $article)
                    <div class="section-content">
                        <h1 class="grid-headline-title-sub">{{ $article->getTranslation('name', session('locale', 'en')) }}</h1>
                        <div class="masonry-grid-investment-section-sub">
                            @foreach ($platformFocusList->where('platform_category_id', $article->id) as $subArticle)
                                <div class="grid-headline-title-card-sub">
                                    @if ($subArticle->image_path)
                                        <div class="card-icon">
                                            <img src="{{ '/storage/' . $subArticle->image_path }}" alt="" loading="lazy">
                                        </div>
                                    @else
                                        <div class="card-icon-bottom">
                                            <h1 class="card-title-bottom"></h1>
                                        </div>
                                    @endif
                                    <h2 class="card-title">{{ $subArticle->getTranslation('title', session('locale', 'en')) }}</h2>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- UNLOCK YOUR POTENTIAL  --}}
        <div class="potential-section">
            @foreach ($platformArticle as $index => $article)
                <div class="potential-title-card">
                    <h1 class="potential-title">{{ $article->getTranslation('title', session('locale', 'en')) }}</h1>
                    <p class="potential-subtitle">{{ $article->getTranslation('subtitle', session('locale', 'en')) }}</p>
                </div>

                <div class="potential-content-card">
                    <div class="potential-content-section">
                        {!! $article->getTranslation('content', session('locale', 'en')) !!}
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    {{-- Synergy Programs Section --}}
    <section class="synergy-section" id="program-section">
        <div class="hero-mid-section">
            <h1 class="center-text">{!! $menuSubCategory->skip(1)->first()?->getTranslation('headline_text', session('locale', 'en')) ?? '' !!}
            </h1>
        </div>

        @foreach ($valueCreationList as $index => $program)
            <div class="synergy-container {{ $index % 2 === 1 ? 'dark' : '' }}">
                <div class="synergy-grid">
                    @if ($index % 2 === 1)
                       @if ($program->image_path_frontpage2 || $program->image_path_frontpage3)
                            <div class="synergy-image">
                                <div class="carousel-container" id="carousel-even-{{ $index }}">
                                    <div class="carousel-slide active" data-carousel="even-{{ $index }}">
                                        <img src="{{ '/storage/' . $program->image_path_frontpage1 }}"
                                            alt="{{ $program->title }}" class="carousell-image" loading="lazy">
                                    </div>
                                    @if ($program->image_path_frontpage2)
                                        <div class="carousel-slide" data-carousel="even-{{ $index }}">
                                            <img src="{{ '/storage/' . $program->image_path_frontpage2 }}"
                                                alt="{{ $program->title }}" class="carousell-image" loading="lazy">
                                        </div>
                                    @endif
                                    @if ($program->image_path_frontpage3)
                                        <div class="carousel-slide" data-carousel="even-{{ $index }}">
                                            <img src="{{ '/storage/' . $program->image_path_frontpage3 }}"
                                                alt="{{ $program->title }}" class="carousell-image" loading="lazy">
                                        </div>
                                    @endif

                                    <!-- Navigation arrows -->
                                    <a class="prev" onclick="moveSlide(-1, 'even-{{ $index }}')">&#10094;</a>
                                    <a class="next" onclick="moveSlide(1, 'even-{{ $index }}')">&#10095;</a>

                                    <!-- Navigation dots -->
                                    <div class="dots-container">
                                        <span class="dot active" data-carousel="even-{{ $index }}"
                                            onclick="currentSlide(1, 'even-{{ $index }}')"></span>
                                        <span class="dot" data-carousel="even-{{ $index }}"
                                            onclick="currentSlide(2, 'even-{{ $index }}')"></span>
                                        <span class="dot" data-carousel="even-{{ $index }}"
                                            onclick="currentSlide(3, 'even-{{ $index }}')"></span>
                                    </div>
                                </div>
                            </div>
                        @else
                            <div class="synergy-image">
                                <div class="carousel-container" id="carousel-odd-{{ $index }}">
                                    <div class="carousel-slide active" data-carousel="odd-{{ $index }}">
                                        <img src="{{ '/storage/' . $program->image_path_frontpage1 }}"
                                            alt="{{ $program->title }}" class="carousell-image" loading="lazy">
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endif

                    <div class="synergy-content">
                        <img src="{{ '/storage/' . $program->logo }}" alt="{{ $program->title }}" style="height: 80px;">
                        <h2 class="synergy-title">{!! $program->getTranslation('content_frontpage', session('locale', 'en')) !!}</h2>
                        <div class="synergy-info">
                            <p>{!! $program->getTranslation('content_sub_frontpage', session('locale', 'en')) !!}</p>
                        </div>

                        <div class="synergy-register">
                            <a href="{{ route('platform.show', $program->slug) }}" class="register-btn btn-detail">View
                                Detail</a>
                            <a href="{{ $program->title === 'Zenith' ? route('platform.apply') : '#contact-form-section' }}"
                                class="register-btn btn-register">Register Now</a>
                        </div>
                    </div>
                    @if ($index % 2 === 0)
                        @if ($program->image_path_frontpage2 || $program->image_path_frontpage3)
                            <div class="synergy-image">
                                <div class="carousel-container" id="carousel-even-{{ $index }}">
                                    <div class="carousel-slide active" data-carousel="even-{{ $index }}">
                                        <img src="{{ '/storage/' . $program->image_path_frontpage1 }}"
                                            alt="{{ $program->title }}" class="carousell-image" loading="lazy">
                                    </div>
                                    @if ($program->image_path_frontpage2)
                                        <div class="carousel-slide" data-carousel="even-{{ $index }}">
                                            <img src="{{ '/storage/' . $program->image_path_frontpage2 }}"
                                                alt="{{ $program->title }}" class="carousell-image" loading="lazy">
                                        </div>
                                    @endif
                                    @if ($program->image_path_frontpage3)
                                        <div class="carousel-slide" data-carousel="even-{{ $index }}">
                                            <img src="{{ '/storage/' . $program->image_path_frontpage3 }}"
                                                alt="{{ $program->title }}" class="carousell-image" loading="lazy">
                                        </div>
                                    @endif

                                    <!-- Navigation arrows -->
                                    <a class="prev" onclick="moveSlide(-1, 'even-{{ $index }}')">&#10094;</a>
                                    <a class="next" onclick="moveSlide(1, 'even-{{ $index }}')">&#10095;</a>

                                    <!-- Navigation dots -->
                                    <div class="dots-container">
                                        <span class="dot active" data-carousel="even-{{ $index }}"
                                            onclick="currentSlide(1, 'even-{{ $index }}')"></span>
                                        <span class="dot" data-carousel="even-{{ $index }}"
                                            onclick="currentSlide(2, 'even-{{ $index }}')"></span>
                                        <span class="dot" data-carousel="even-{{ $index }}"
                                            onclick="currentSlide(3, 'even-{{ $index }}')"></span>
                                    </div>
                                </div>
                            </div>
                        @else
                            <div class="synergy-image">
                                <div class="carousel-container" id="carousel-odd-{{ $index }}">
                                    <div class="carousel-slide active" data-carousel="odd-{{ $index }}">
                                        <img src="{{ '/storage/' . $program->image_path_frontpage1 }}"
                                            alt="{{ $program->title }}" class="carousell-image" loading="lazy">
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endif
                </div>
            </div>
        @endforeach

        {{-- Contact Form Section --}}
        <div class="masonry-grid-contact-section-grey" id="contact-form-section">
            <div class="grid-headline-title-card">
                <h1 class="grid-headline-title-contact">Synergize with Us</h1>
                <h1 class="grid-headline-subtitle-contact">
                </h1>
            </div>

            <div class="grid-headline-contact-card">

                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                @if(session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif

                <form id="contactForm" class="contact-form hidden" action="{{ route('platform.email') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    {{-- Company Details --}}

                    <div class="form-row">
                        <div class="form-group">
                            <label for="program" class="form-label">Program*</label>
                            <select id="program" name="program" class="form-input" required>
                                <option value="" disabled selected>Select a program...</option>
                                <option value="xponent">Xponent</option>
                                <option value="yaxis">Y-axis</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="mandiri_ecosystem" class="form-label">Mandiri Ecosystem*</label>
                            <select id="mandiri_ecosystem" name="mandiri_ecosystem" class="form-input" required>
                                <option value="" disabled selected>Select the Ecosystem...</option>
                                <option value="Bank Syariah Indonesia">Bank Syariah Indonesia</option>
                                <option value="Mandiri Taspen">Bank Mandiri Taspen</option>
                                <option value="Mandiri Europe">Bank Mandiri Europe</option>
                                <option value="Mandiri Sekuritas">Mandiri Sekuritas</option>
                                <option value="Mandiri Investasi">Mandiri Investasi</option>
                                <option value="Mandiri Tunas Finance">Mandiri Tunas Finance</option>
                                <option value="Mandiri Utama Finance">Mandiri Utama Finance</option>
                                <option value="Mandiri Remitance">Mandiri Remitance</option>
                                <option value="Axa Mandiri">AXA Mandiri</option>
                            </select>
                        </div>
                    </div>

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
                            <span class="file-name" id="fileName">No File Chosen</span>
                            <input type="file" id="company_profile" name="company_profile" class="file-input"
                                accept=".pdf" onchange="updateFileName(this)" required>
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
                                <input type="radio" id="embedded_finance" name="business_sector" value="Embedded Finance"
                                    class="sector-radio" required>
                                <label for="embedded_finance" class="sector-label">Embedded Finance</label>
                            </div>
                            <div class="sector-item">
                                <input type="radio" id="health_wellness" name="business_sector" value="Health & Wellness"
                                    class="sector-radio">
                                <label for="health_wellness" class="sector-label">Health & Wellness</label>
                            </div>
                            <div class="sector-item">
                                <input type="radio" id="wealth_management" name="business_sector"
                                    value="Wealth Management" class="sector-radio">
                                <label for="wealth_management" class="sector-label">Wealth Management</label>
                            </div>
                            <div class="sector-item">
                                <input type="radio" id="tech_enabler" name="business_sector"
                                    value="Tech Enabler" class="sector-radio">
                                <label for="tech_enabler" class="sector-label">Tech Enabler</label>
                            </div>
                            <div class="sector-item">
                                <input type="radio" id="value_chain" name="business_sector"
                                    value="Value Chain Enabler" class="sector-radio">
                                <label for="value_chain" class="sector-label">Value Chain Enabler</label>
                            </div>
                            <div class="sector-item">
                                <input type="radio" id="property_tech" name="business_sector"
                                    value="Property Tech & Asset Management" class="sector-radio">
                                <label for="property_tech" class="sector-label">Property Tech & Asset Management</label>
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
    </section>

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
@endsection

@section('scripts')
    <script src="{{ asset('js/platform-animation.js') }}"></script>
    <script src="{{ asset('js/carousel.js') }}"></script>
    <script>
        console.log('Platform page loaded');
        document.addEventListener('DOMContentLoaded', function() {
            console.log('Platform DOM Content Loaded');
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
    <script>
        function updateFileName(input) {
            const fileName = document.getElementById('fileName');
            fileName.textContent = input.files[0] ? input.files[0].name : 'No File Chosen';
        }
    </script>
@endsection
