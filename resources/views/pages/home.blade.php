@extends('layout.mainlayout')

@section('localcss')
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
@endsection

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endsection

@section('container')
    {{-- Hero Section: Video background with call-to-action buttons --}}
    <div class="hero-section">
        <video autoplay muted loop playsinline class="video-background">
            <source loading="lazy" src="{{ '/storage/' . $hero->image_path }}" type="video/mp4">
        </video>

        <div class="hero-content">
            <div class="center-text">{!! $hero->getTranslation('title', session('locale', 'en')) !!}</div>
            <div class="center-text-subtitle">{!! $hero->getTranslation('content', session('locale', 'en')) !!}</div>
            <div class="image-container">
                <img src="{{ asset('images/home/forstartup.png') }}" alt="For Startup" class="button-image center-image" onclick="openPitchModal()" loading="lazy">
                <img src="{{ asset('images/home/forlp.png') }}" alt="For LP" class="button-image center-image" onclick="openInvestorModal()" loading="lazy">
            </div>
        </div>
    </div>

    {{-- Headline Section: Key metrics display --}}
    <div class="headline-section-two">
        <div class="headline-grid-two">
            @foreach($articles as $index => $article)
                <div class="headline-card-two {{ $index === 1 ? 'left-border' : '' }}">
                    <h1 style="{{ $article->getTranslation('title', session('locale', 'en')) == 'AUM' ? 'font-size: 20px;' : '' }}">
                        {{ $article->getTranslation('title', session('locale', 'en')) }}
                    </h1>
                    <div id="counter{{ $index + 1 }}" class="counter" data-value="{{ $article->getTranslation('content', session('locale', 'en')) }}">0</div>
                    <p class="subtitle-counter">{{ $article->getTranslation('sub_content', session('locale', 'en')) }}</p>
                </div>
            @endforeach
        </div>
    </div>

    {{-- Content Section: News and Updates Grid --}}
    @php
        $cards = [
            // Featured Cards
            [
                'type' => 'medium',
                'category' => 'PROGRAM',
                'title' => 'Connecting Startups Program',
                'date' => 'June 2020',
                'image' => 'Article1.png',
                'logo' => 'exponent.png',
                'position' => '',
                'link' => route('platform.show', 'xponent')
            ],
            [
                'type' => 'large',
                'category' => 'WHITE PAPER',
                'title' => 'The Billion Dollar Moment: A Paradigm Shift for Indonesian IPOs',
                'date' => 'June 2020',
                'image' => 'Article2.jpeg',
                'logo' => '',
                'position' => 'right',
                'link' => 'https://www.mandiri-capital.co.id/report/the-billion-dollar-moment-a-paradigm-shift-for-indonesia-ipos'
            ],
            [
                'type' => 'medium',
                'category' => 'PROGRAM',
                'title' => 'Startup Accelerator ',
                'date' => 'June 2020',
                'image' => 'Article3.png',
                'logo' => 'zenith.png',
                'position' => '',
                'link' => route('platform.show', 'zenith')
            ],
            [
                'type' => 'medium',
                'category' => 'PODCAST',
                'title' => '',
                'date' => 'June 2020',
                'image' => 'Article4.png',
                'logo' => '',
                'position' => '',
            ],

            // Small Square Cards
            [
                'type' => 'small-square',
                'category' => 'NEWS',
                'title' => '',
                'date' => 'June 2020',
                'image' => 'Article5.jpeg',
                'logo' => '',
                'position' => 'right',
                'link' => 'https://mandiri-capital.co.id/media/mandiri-capital-indonesia-mendorong-inovasi-digital-melalui-mandiri-innovation-hub-2024-press-release'
            ],
            [
                'type' => 'small-square',
                'category' => 'BLOG',
                'title' => 'Understanding the Stock Market',
                'date' => 'June 2020',
                'image' => 'Article6.png',
                'logo' => '',
                'position' => 'right',
                'link' => 'http://localhost:8000/media/program-xponent-mci-di-money-20-20-asia-jadi-jembatan-konektivitas-dunia-insight'
            ],
            [
                'type' => 'medium',
                'category' => 'Featured Investees',
                'title' => '',
                'date' => 'June 2020',
                'image' => 'Article7.jpeg',
                'logo' => '',
                'position' => 'left',
                'link' => 'https://mandiri-capital.co.id/portfolio/amartha'
            ],
            [
                'type' => 'small-square',
                'category' => 'ANNUAL REPORT',
                'title' => '',
                'date' => 'June 2020',
                'image' => 'Article8.jpeg',
                'logo' => '',
                'position' => 'right',
                'link' => 'https://mandiri-capital.co.id/report/developing-constructive-collaboration-to-achieve-productive-innovation'
            ],
            [
                'type' => 'small-square',
                'category' => 'SUSTAINABILITY REPORT',
                'title' => '',
                'date' => 'June 2020',
                'image' => 'Article9.png',
                'logo' => '',
                'position' => 'right',
                'link' => 'https://mandiri-capital.co.id/report/strengthening-sustainability-innovation'
            ]

        ];
    @endphp

    <div class="masonry-grid">
        @foreach($articlesHeadlineList as $card)
            <div class="card {{ $card->type }} {{ $card->position }}"
                @if($card->image_path) style="background-image: linear-gradient(rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.1)), url('{{ '/storage/' . $card->image_path }}')" @endif>
                <a href="{{ $card->link_url ?? '#' }}" class="card-link">
                <span class="category">{{ $card->getTranslation('category', session('locale', 'en')) }}</span>
                @if($card->logo_path)
                    <img src="{{ '/storage/' . $card->logo_path }}" alt="{{ $card->getTranslation('category', session('locale', 'en')) }} Logo" class="logo-card" loading="lazy">
                @endif
                <div class="card-content">
                    <h2>{{ $card->getTranslation('title', session('locale', 'en')) }}</h2>
                </div>
                </a>
            </div>
        @endforeach
    </div>

    {{-- Testimonial Section: Customer Success Stories --}}
    <div class="founder-carousell-section">
        <h1 class="section-title">Featured Investees</h1>
        <div class="founder-carousel-container">
            <div class="founder-carousel">
                <div class="carousel-slides">
                    @foreach($testimonials as $index => $testimonial)
                        <div class="carousel-slide {{ $index === 0 ? 'active' : '' }}">
                            <div class="slide-content">
                                <div class="founder-image">
                                    <div class="image-circle">
                                        <img src="{{ '/storage/' . $testimonial->image_path }}"
                                             alt="{{ $testimonial->name }}"
                                             class="founder-photo"
                                             loading="lazy">
                                    </div>
                                </div>
                                <div class="slide-text">
                                    <div class="amartha-logo">
                                        <img src="{{ '/storage/' . $testimonial->company_image_path }}"
                                             alt="{{ $testimonial->name }} Logo"
                                             loading="lazy">
                                    </div>
                                    <h3>{{ $testimonial->name }}, {{ $testimonial->getTranslation('title', session('locale', 'en')) }}</h3>
                                    <p>"{{ $testimonial->getTranslation('content', session('locale', 'en')) }}"</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                {{-- Carousel Navigation Controls --}}
                <div class="carousel-controls">
                    <div class="carousel-navigation">
                        <button class="prev-btn" onclick="moveSlide(-1)">&#10094;</button>
                        <button class="next-btn" onclick="moveSlide(1)">&#10095;</button>
                    </div>
                    <div class="carousel-dots">
                        @foreach($testimonials as $index => $testimonial)
                            <span class="dot {{ $index === 0 ? 'active' : '' }}"
                                  onclick="currentSlide({{ $index + 1 }})"></span>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Newsletter Section: Call to Action --}}
    <div class="newsletter-section">
        <div class="newsletter-container">
            <h2 class="newsletter-title">{!! $masterData->getTranslation('footer', session('locale', 'en')) !!}</h2>
            <a href="{{ route('contact') }}">
                <img src="{{ asset('images/portfolio/letsconnect.png') }}"
                     alt="Lets Connect"
                     class="button-image center-image-newsletter"
                     loading="lazy">
            </a>
        </div>
    </div>

    {{-- Modal Forms --}}
    {{-- Pitch Form Modal --}}
    <div id="pitchFormModal" class="modal">
        <div class="modal-overlay" onclick="closePitchModal()"></div>
        <div class="modal-content">
            <button class="modal-close" onclick="closePitchModal()">×</button>
            <section class="pitch-form">
                <div class="pitch-form-grid">
                    <div class="pitch-form-intro">
                        <h2>Please fill the Form to Pitch With Us</h2>
                        <p class="subtitle">*Place your pitchdeck below and our investment team will check it out!</p>
                        <p class="subtitle">*Please note that we receive a high volume of submissions and will not be able to reply to everyone.</p>
                    </div>
                    <form id="startupPitchForm" class="pitch-form-content">
                        @csrf
                        {{-- Personal Information --}}
                        <div class="form-row">
                            <div class="form-group">
                                <label for="first_name">First Name<span class="required">*</span></label>
                                <input type="text" name="first_name" id="first_name" placeholder="Write here..." required>
                            </div>
                            <div class="form-group">
                                <label for="last_name">Last Name<span class="required">*</span></label>
                                <input type="text" name="last_name" id="last_name" placeholder="Write here..." required>
                            </div>
                        </div>

                        {{-- Contact Information --}}
                        <div class="form-row">
                            <div class="form-group">
                                <label for="email">Email Address<span class="required">*</span></label>
                                <input type="email" name="email" id="email" placeholder="Write here..." required>
                            </div>
                            <div class="form-group">
                                <label for="business_name">Name of Your Business<span class="required">*</span></label>
                                <input type="text" name="business_name" id="business_name" placeholder="Write here..." required>
                            </div>
                        </div>

                        {{-- Business Information --}}
                        <div class="form-row">
                            <div class="form-group">
                                <label for="market">Country/ Market Does Your Business Serve?<span class="required">*</span></label>
                                <input type="text" name="market" id="market" placeholder="Write here..." required>
                            </div>
                            <div class="form-group">
                                <label for="growth_stage">Stage of Growth Your Company At<span class="required">*</span></label>
                                <select name="growth_stage" id="growth_stage" required>
                                    <option value="">Select...</option>
                                    <option value="seed">Seed</option>
                                    <option value="early">Early Stage</option>
                                    <option value="growth">Growth Stage</option>
                                    <option value="expansion">Expansion</option>
                                </select>
                            </div>
                        </div>

                        {{-- Pitch Materials --}}
                        <div class="form-row">
                            <div class="form-group">
                                <label for="pitch_url">Add URL to your Pitch Deck</label>
                                <input type="url" name="pitch_url" id="pitch_url" placeholder="Write here...">
                            </div>
                            <div class="form-group">
                                <label for="pitch_file">Upload Your Files</label>
                                <div class="file-input">
                                    <button type="button" class="file-button" onclick="document.getElementById('pitch_file').click()">
                                        Choose File
                                    </button>
                                    <span id="file-chosen">No File Chosen</span>
                                    <input type="file" name="pitch_file" id="pitch_file" accept=".pdf,.doc,.docx,.ppt,.pptx" onchange="updateFileName()">
                                </div>
                            </div>
                        </div>

                        {{-- Form Actions --}}
                        <div class="form-actions">
                            <button type="button" class="btn-cancel" onclick="closePitchModal()">Cancel</button>
                            <button type="submit" class="btn-submit">Submit Pitch</button>
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </div>

    {{-- Investor Form Modal --}}
    <div id="investorFormModal" class="modal">
        <div class="modal-overlay" onclick="closeInvestorModal()"></div>
        <div class="modal-content">
            <button class="modal-close" onclick="closeInvestorModal()">×</button>
            <section class="pitch-form">
                <div class="pitch-form-grid">
                    <div class="pitch-form-intro">
                        <h2>We'd Love to hear from you</h2>
                        <p class="subtitle">MANDIRI CAPITAL INDONESIA</p>
                        <p class="subtitle">Menara Mandiri II, lantai 14.<br>Jl. Jend. Sudirman No. 54-55, Jakarta 12190</p>
                    </div>

                    <form id="investorForm" class="pitch-form-content">
                        @csrf
                        {{-- Contact Information --}}
                        <div class="form-row">
                            <div class="form-group">
                                <label for="full_name">Full Name</label>
                                <input type="text" name="full_name" id="full_name" placeholder="Write here..." required>
                            </div>
                            <div class="form-group">
                                <label for="subject">Subject</label>
                                <select name="subject" id="subject" required>
                                    <option value="">Select...</option>
                                    <option value="investment">Investment</option>
                                    <option value="partnership">Partnership</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                        </div>

                        {{-- Additional Contact Details --}}
                        <div class="form-row">
                            <div class="form-group">
                                <label for="phone">Phone Number</label>
                                <input type="tel" name="phone" id="phone" placeholder="Write here..." required>
                            </div>
                            <div class="form-group">
                                <label for="investor_email">Email Address</label>
                                <input type="email" name="investor_email" id="investor_email" placeholder="Write here..." required>
                            </div>
                        </div>

                        {{-- Company Information --}}
                        <div class="form-row">
                            <div class="form-group full-width">
                                <label for="company">Company Name</label>
                                <input type="text" name="company" id="company" placeholder="Write here..." required>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group full-width">
                                <label for="message">Message</label>
                                <textarea name="message" id="message" placeholder="Write here..." required></textarea>
                            </div>
                        </div>

                        {{-- Form Actions --}}
                        <div class="form-actions">
                            <button type="button" class="btn-cancel" onclick="closeInvestorModal()">Cancel</button>
                            <button type="submit" class="btn-submit">Submit</button>
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('js/home-animation.js') }}"></script>
    <script src="{{ asset('js/carousel-home.js') }}"></script>
    <script>
        // Modal Functions
        function openPitchModal() {
            document.getElementById('pitchFormModal').style.display = 'block';
            document.body.style.overflow = 'hidden';
        }

        function closePitchModal() {
            document.getElementById('pitchFormModal').style.display = 'none';
            document.body.style.overflow = 'auto';
        }

        function openInvestorModal() {
            document.getElementById('investorFormModal').style.display = 'block';
            document.body.style.overflow = 'hidden';
        }

        function closeInvestorModal() {
            document.getElementById('investorFormModal').style.display = 'none';
            document.body.style.overflow = 'auto';
        }

        // File input handling
        function updateFileName() {
            const fileInput = document.getElementById('pitch_file');
            const fileChosen = document.getElementById('file-chosen');
            fileChosen.textContent = fileInput.files[0] ? fileInput.files[0].name : 'No File Chosen';
        }

        // Close modals when clicking outside
        window.onclick = function(event) {
            const pitchModal = document.getElementById('pitchFormModal');
            const investorModal = document.getElementById('investorFormModal');

            if (event.target === pitchModal) {
                closePitchModal();
            }
            if (event.target === investorModal) {
                closeInvestorModal();
            }
        }
    </script>
@endsection

@push('scripts')
<script>
    document.getElementById('startupPitchForm').addEventListener('submit', function(e) {
        e.preventDefault();

        const formData = new FormData(this);

        fetch('{{ route('home.startup.email') }}', {
            method: 'POST',
            body: formData,
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
            }
        })
        .then(response => response.json())
        .then(data => {
            if (data.status === 'success') {
                alert(data.message);
                closePitchModal();
                this.reset();
            } else {
                alert(data.message);
            }
        })
        .catch(error => {
            alert('An error occurred. Please try again.');
        });
    });

    document.getElementById('investorForm').addEventListener('submit', function(e) {
        e.preventDefault();

        const formData = new FormData(this);
        const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

        fetch('{{ route('home.investor.email') }}', {
            method: 'POST',
            body: formData,
            headers: {
                'X-CSRF-TOKEN': csrfToken
            },
            credentials: 'same-origin'
        })
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            return response.json();
        })
        .then(data => {
            if (data.status === 'success') {
                alert(data.message);
                closeInvestorModal();
                this.reset();
            } else {
                alert(data.message);
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert('An error occurred. Please try again.');
        });
    });

    function updateFileName() {
        const fileInput = document.getElementById('pitch_file');
        const fileChosen = document.getElementById('file-chosen');
        fileChosen.textContent = fileInput.files[0] ? fileInput.files[0].name : 'No File Chosen';
    }
</script>
@endpush
