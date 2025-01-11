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
            <source src="{{ '/storage/' . $hero->image_path }}" type="video/mp4">
        </video>

        <div class="hero-content">
            <div class="center-text">{!! $hero->content !!}</div>
            <div class="center-text-subtitle">We bring unparalleled resources, expertise, and connections to help you grow and thrive in every stage.</div>
            <div class="image-container">
                <img src="{{ asset('images/home/forstartup.png') }}" alt="For Startup" class="button-image center-image" onclick="openPitchModal()">
                <img src="{{ asset('images/home/forlp.png') }}" alt="For LP" class="button-image center-image" onclick="openInvestorModal()">
            </div>
        </div>
    </div>

    {{-- Headline Section: Key metrics display --}}
    @php
        $metrics = [
            ['title' => 'Mandiri Group Ecosystem', 'id' => 'counter1'],
            ['title' => 'Portfolio', 'id' => 'counter2'],
            ['title' => 'Fund Venture', 'id' => 'counter3']
        ];
    @endphp

    <div class="headline-section-two">
        <div class="headline-grid">
            @foreach($metrics as $index => $metric)
                <div class="headline-card-two {{ $index === 1 ? 'middle-border' : '' }}">
                    <h1>{{ $metric['title'] }}</h1>
                    <div id="{{ $metric['id'] }}" class="counter">0</div>
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
                'category' => 'EVENT',
                'title' => 'Apply Now for Zenith Startup Accelerator',
                'date' => 'June 2020',
                'image' => 'Article1.png',
                'position' => ''
            ],
            [
                'type' => 'large',
                'category' => 'WHITE PAPER',
                'title' => 'Mandiri Capital Indonesia Siap Jajaki Pasar Regional dan Global',
                'date' => 'June 2020',
                'image' => 'Article2.png',
                'position' => 'right'
            ],

            // Small Square Cards
            [
                'type' => 'small-square',
                'category' => 'PODCAST',
                'title' => 'Talk about GOTO',
                'date' => 'June 2020',
                'image' => 'Article3.png',
                'position' => 'left'
            ],
            [
                'type' => 'small-square',
                'category' => 'NEWS',
                'title' => 'Article Title',
                'date' => 'June 2020',
                'image' => 'Article4.png',
                'position' => 'left'
            ],

            // Additional Cards
            [
                'type' => 'large',
                'category' => 'WHITE PAPER',
                'title' => 'Cryptocurrency Investment: Risks and Rewards',
                'date' => 'June 2020',
                'image' => 'Article4.png',
                'position' => 'left'
            ],
            [
                'type' => 'medium',
                'category' => 'WHITE PAPER',
                'title' => 'Understanding the Basics of Stock Market Investing',
                'date' => 'June 2020',
                'image' => 'Article3.png',
                'position' => ''
            ],
            [
                'type' => 'large',
                'category' => 'WHITE PAPER',
                'title' => 'Cryptocurrency Investment: Risks and Rewards',
                'date' => 'June 2020',
                'image' => 'Article4.png',
                'position' => 'right'
            ],
            [
                'type' => 'large',
                'category' => 'WHITE PAPER',
                'title' => 'Cryptocurrency Investment: Risks and Rewards',
                'date' => 'June 2020',
                'image' => 'Article4.png',
                'position' => 'left'
            ],

            // Blog and Podcast Cards
            [
                'type' => 'small-square',
                'category' => 'BLOG',
                'title' => 'Article Title',
                'date' => 'June 2020',
                'image' => 'Article1.png',
                'position' => 'right'
            ],
            [
                'type' => 'small-square',
                'category' => 'PODCAST',
                'title' => 'Long-term vs. Short-term Investments',
                'date' => 'June 2020',
                'image' => 'Article1.png',
                'position' => 'right'
            ]
        ];
    @endphp

    <div class="masonry-grid">
        @foreach($cards as $card)
            <div class="card {{ $card['type'] }} {{ $card['position'] }}"
                @if(isset($card['image'])) style="background-image: url('{{ asset('images/home/' . $card['image']) }}')" @endif>
                <span class="category">{{ $card['category'] }}</span>
                <div class="card-content">
                    <h2>{{ $card['title'] }}</h2>
                </div>
                <span class="date">{{ $card['date'] }}</span>
            </div>
        @endforeach
    </div>

    {{-- Testimonial Section: Customer Success Stories --}}
    @php
        $testimonials = [
            [
                'image' => 'owner_amartha.png',
                'logo' => 'logo_amartha.png',
                'name' => 'Andi Taufan Garuda Putra',
                'title' => 'Founder/ CEO',
                'quote' => 'Securing funding from MCI was a game-changer for our business. Their support and expertise helped us scale faster than we imagined. We\'re now reaching markets we once thought were out of reach.'
            ],
            [
                'image' => 'owner_goto.png',
                'logo' => 'logo_amartha.png',
                'name' => 'Kevin Aluwi',
                'title' => 'Co-Founder',
                'quote' => 'MCI\'s strategic investment and guidance have been instrumental in our growth journey. Their deep understanding of the tech ecosystem helped us navigate challenges and seize opportunities.'
            ],
            [
                'image' => 'owner_halofina.png',
                'logo' => 'logo_amartha.png',
                'name' => 'Adjie Wicaksana',
                'title' => 'Founder & CEO',
                'quote' => 'Working with MCI has opened doors we never thought possible. Their network and industry expertise have been crucial in establishing Halofina as a leading fintech platform.'
            ]
        ];
    @endphp

    <div class="founder-carousell-section">
        <h1 class="section-title">What they say </br> about us</h1>
        <div class="founder-carousel-container">
            <div class="founder-carousel">
                <div class="carousel-slides">
                    @foreach($testimonials as $index => $testimonial)
                        <div class="carousel-slide {{ $index === 0 ? 'active' : '' }}">
                            <div class="slide-content">
                                <div class="founder-image">
                                    <div class="image-circle">
                                        <img src="{{ asset('images/home/' . $testimonial['image']) }}"
                                             alt="{{ $testimonial['name'] }}"
                                             class="founder-photo">
                                    </div>
                                </div>
                                <div class="slide-text">
                                    <div class="amartha-logo">
                                        <img src="{{ asset('images/home/' . $testimonial['logo']) }}"
                                             alt="{{ $testimonial['name'] }} Logo">
                                    </div>
                                    <h3>{{ $testimonial['name'] }}, {{ $testimonial['title'] }}</h3>
                                    <p>"{{ $testimonial['quote'] }}"</p>
                                </div>
                            </div>
                        </div>
                    @endforeach

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
    </div>

    {{-- Newsletter Section: Call to Action --}}
    <div class="newsletter-section">
        <div class="newsletter-container">
            <h2 class="newsletter-title">WE'D LOVE TO HEAR FROM YOU</h2>
            <a href="#">
                <img src="{{ asset('images/portfolio/letsconnect.png') }}"
                     alt="Lets Connect"
                     class="button-image center-image-newsletter">
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

                    <form action="#" method="POST" enctype="multipart/form-data" class="pitch-form-content">
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

                    <form action="#" method="POST" enctype="multipart/form-data" class="pitch-form-content">
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
    <script src="{{ asset('js/carousel.js') }}"></script>
    <script src="{{ asset('js/modal.js') }}"></script>
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
            if (fileInput.files.length > 0) {
                fileChosen.textContent = fileInput.files[0].name;
            } else {
                fileChosen.textContent = 'No File Chosen';
            }
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
