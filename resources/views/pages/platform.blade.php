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
                    <a href="#" class="filter-link active" data-filter="business">Our Focus</a>
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
                        ['title' => 'STARTUPS','subtitle' => 'work with our business unit', 'content' => '40+'],
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



    {{-- Contact Form Section --}}
    <div class="masonry-grid-contact-section-grey">
        <div class="grid-headline-title-card">
            <h1 class="grid-headline-title-contact">Get Investment!</h1>
            <h1 class="grid-headline-subtitle-contact">
            </h1>
        </div>

        <div class="grid-headline-contact-card">
            <form id="contactForm" class="contact-form">
                @csrf
                {{-- Company Details --}}

                <div class="form-row">
                    <div class="form-group">
                        <label for="program" class="form-label">Program*</label>
                        <input type="text" id="program" name="program" class="form-input"
                            placeholder="Write here..." required>
                    </div>
                    <div class="form-group">
                        <label for="mandiri_ecosystem" class="form-label">Mandiri Ecosystem*</label>
                        <input type="text" id="mandiri_ecosystem" name="mandiri_ecosystem" class="form-input"
                            placeholder="Write here..." required>
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
