@extends('layout.mainlayout')

@section('localcss')
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
@endsection

@section('container')
    <div class="hero-section">
        <video autoplay muted loop playsinline class="video-background">
            <source src="{{ '/storage/' . $hero->image_path }}" type="video/mp4">
        </video>

        <div class="hero-content">
            <div class="center-text">{!! $hero->content !!}</div>
            <div class="center-text-subtitle">We bring unparalleled resources, expertise, and connections to help you grow
                and thrive in every stage.</div>
            <div class="image-container">
                <img src="{{ asset('images/home/forstartup.png') }}" alt="For Startup" class="button-image center-image"
                    onclick="openPitchModal()">
                <img src="{{ asset('images/home/forlp.png') }}" alt="For LP" class="button-image center-image"
                    onclick="openInvestorModal()">
            </div>
        </div>
    </div>

    {{-- Headline Section --}}
    <div class="headline-section-two">
        <div class="headline-grid">
            <div class="headline-card-two">
                <h1>Mandiri Group Ecosystem</h1>
                <div id="counter1" class="counter">
                    0
                </div>

            </div>

            <div class="headline-card-two middle-border">
                <h1>Portfolio</h1>
                <div id="counter2" class="counter">
                    0
                </div>
            </div>

            <div class="headline-card-two">
                <h1>Fund Venture</h1>
                <div id="counter3" class="counter">
                    0
                </div>

            </div>
        </div>
    </div>


    {{-- Content Section --}}
    <div class="masonry-grid">
        <div class="card medium"
            style="background-color: #B8860B; background-image: url('{{ asset('images/home/Article1.png') }}');">
            <span class="category">EVENT</span>
            <div class="card-content">
                <h2>Apply Now for Zenith Startup Accelerator</h2>
            </div>
            <span class="date">June 2020</span>
        </div>

        <div class="card large right" style="background-image: url('{{ asset('images/home/Article2.png') }}');">
            <span class="category">WHITE PAPER</span>
            <div class="card-content">
                <h2>Mandiri Capital Indonesia Siap Jajaki Pasar Regional dan Global</h2>
            </div>
            <span class="date">June 2020</span>
        </div>

        <div class="card small-square left" style="background-color: #B8860B; }}');">
            <span class="category">PODCAST</span>
            <div class="card-content">
                <h2>Talk about GOTO</h2>
            </div>
            <span class="date">June 2020</span>
        </div>

        <div class="card small-square left" style="background-color: #B8860B; }}');">
            <span class="category">NEWS</span>
            <div class="card-content">
                <h2>Article Title</h2>
            </div>
            <span class="date">June 2020</span>
        </div>

        <div class="card large left" style="background-image: url('{{ asset('images/home/Article4.png') }}');">
            <span class="category">WHITE PAPER</span>
            <div class="card-content">
                <h2>Cryptocurrency Investment: Risks and Rewards</h2>
            </div>
            <span class="date">June 2020</span>
        </div>

        <div class="card medium" style="background-image: url('{{ asset('images/home/Article3.png') }}');">
            <span class="category">WHITE PAPER</span>
            <div class="card-content">
                <h2>Understanding the Basics of Stock Market Investing</h2>
            </div>
            <span class="date">June 2020</span>
        </div>

        <div class="card large right" style="background-image: url('{{ asset('images/home/Article4.png') }}');">
            <span class="category">WHITE PAPER</span>
            <div class="card-content">
                <h2>Cryptocurrency Investment: Risks and Rewards</h2>
            </div>
            <span class="date">June 2020</span>
        </div>

        <div class="card large left" style="background-image: url('{{ asset('images/home/Article4.png') }}');">
            <span class="category">WHITE PAPER</span>
            <div class="card-content">
                <h2>Cryptocurrency Investment: Risks and Rewards</h2>
            </div>
            <span class="date">June 2020</span>
        </div>

        <div class="card small-square right" style="background-color: #B8860B;">
            <span class="category">BLOG</span>
            <div class="card-content">
                <h2>Article Title</h2>
            </div>
            <span class="date">June 2020</span>
        </div>

        <div class="card small-square right" style="background-image: url('{{ asset('images/home/Article4.png') }}');">
            <span class="category">PODCAST</span>
            <div class="card-content">
                <h2>Long-term vs. Short-term Investments</h2>
            </div>
            <span class="date">June 2020</span>
        </div>
    </div>

    <div class="founder-carousell-section">
        <h1 class="section-title">What they say </br> about us</h1>
        <div class="founder-carousel-container">
            <div class="founder-carousel">
                <div class="carousel-slides">
                    <!-- Slide 1 -->
                    <div class="carousel-slide active">
                        <div class="slide-content">
                            <div class="founder-image">
                                <div class="image-circle">
                                    <img src="{{ asset('images/home/owner_amartha.png') }}" alt="Founder/CEO"
                                        class="founder-photo">
                                </div>
                            </div>
                            <div class="slide-text">
                                <div class="amartha-logo">
                                    <img src="{{ asset('images/home/logo_amartha.png') }}" alt="Amartha Logo">
                                </div>
                                <h3>Andi Taufan Garuda Putra, Founder/ CEO</h3>
                                <p>"Securing funding from MCI was a game-changer for our business. Their support and
                                    expertise
                                    helped us scale faster than we imagined. We're now reaching markets we once thought were
                                    out of
                                    reach."</p>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 2 -->
                    <div class="carousel-slide">
                        <div class="slide-content">
                            <div class="founder-image">
                                <div class="image-circle">
                                    <img src="{{ asset('images/home/owner_goto.png') }}" alt="GoTo Founder"
                                        class="founder-photo">
                                </div>
                            </div>
                            <div class="slide-text">
                                <div class="amartha-logo">
                                    <img src="{{ asset('images/home/logo_amartha.png') }}" alt="GoTo Logo">
                                </div>
                                <h3>Kevin Aluwi, Co-Founder</h3>
                                <p>"MCI's strategic investment and guidance have been instrumental in our growth journey.
                                    Their deep understanding of the tech ecosystem helped us navigate challenges and seize
                                    opportunities."</p>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 3 -->
                    <div class="carousel-slide">
                        <div class="slide-content">
                            <div class="founder-image">
                                <div class="image-circle">
                                    <img src="{{ asset('images/home/owner_halofina.png') }}" alt="Halofina Founder"
                                        class="founder-photo">
                                </div>
                            </div>
                            <div class="slide-text">
                                <div class="amartha-logo">
                                    <img src="{{ asset('images/home/logo_amartha.png') }}" alt="Halofina Logo">
                                </div>
                                <h3>Adjie Wicaksana, Founder & CEO</h3>
                                <p>"Working with MCI has opened doors we never thought possible. Their network and industry
                                    expertise have been crucial in establishing Halofina as a leading fintech platform."</p>
                            </div>
                        </div>
                    </div>


                    <!-- Navigation -->
                    <div class="carousel-controls">
                        <div class="carousel-navigation">
                            <button class="prev-btn" onclick="moveSlide(-1)">&#10094;</button>
                            <button class="next-btn" onclick="moveSlide(1)">&#10095;</button>
                        </div>
                        <div class="carousel-dots">
                            <span class="dot active" onclick="currentSlide(1)"></span>
                            <span class="dot" onclick="currentSlide(2)"></span>
                            <span class="dot" onclick="currentSlide(3)"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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

    <!-- Pitch Form Modal -->
    <div id="pitchFormModal" class="modal">
        <div class="modal-overlay" onclick="closePitchModal()"></div>
        <div class="modal-content">
            <button class="modal-close" onclick="closePitchModal()">×</button>
            <section class="pitch-form">
                <div class="pitch-form-grid">
                    <div class="pitch-form-intro">
                        <h2>Please fill the Form to Pitch With Us</h2>
                        <p class="subtitle">*Place your pitchdeck below and our investment team will check it out!</p>
                        <p class="subtitle">*Please note that we receive a high volume of submissions and will not be able
                            to reply to everyone.</p>
                    </div>

                    <form action="#" method="POST" enctype="multipart/form-data" class="pitch-form-content">
                        @csrf
                        <div class="form-row">
                            <div class="form-group">
                                <label for="first_name">First Name<span class="required">*</span></label>
                                <input type="text" name="first_name" id="first_name" placeholder="Write here..."
                                    required>
                            </div>

                            <div class="form-group">
                                <label for="last_name">Last Name<span class="required">*</span></label>
                                <input type="text" name="last_name" id="last_name" placeholder="Write here..."
                                    required>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label for="email">Email Address<span class="required">*</span></label>
                                <input type="email" name="email" id="email" placeholder="Write here..."
                                    required>
                            </div>

                            <div class="form-group">
                                <label for="business_name">Name of Your Business<span class="required">*</span></label>
                                <input type="text" name="business_name" id="business_name"
                                    placeholder="Write here..." required>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label for="market">Country/ Market Does Your Business Serve?<span
                                        class="required">*</span></label>
                                <input type="text" name="market" id="market" placeholder="Write here..."
                                    required>
                            </div>

                            <div class="form-group">
                                <label for="growth_stage">Stage of Growth Your Company At<span
                                        class="required">*</span></label>
                                <select name="growth_stage" id="growth_stage" required>
                                    <option value="">Select...</option>
                                    <option value="seed">Seed</option>
                                    <option value="early">Early Stage</option>
                                    <option value="growth">Growth Stage</option>
                                    <option value="expansion">Expansion</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label for="pitch_url">Add URL to your Pitch Deck</label>
                                <input type="url" name="pitch_url" id="pitch_url" placeholder="Write here...">
                            </div>

                            <div class="form-group">
                                <label for="pitch_file">Upload Your Files</label>
                                <div class="file-input">
                                    <button type="button" class="file-button"
                                        onclick="document.getElementById('pitch_file').click()">
                                        Choose File
                                    </button>
                                    <span id="file-chosen">No File Chosen</span>
                                    <input type="file" name="pitch_file" id="pitch_file"
                                        accept=".pdf,.doc,.docx,.ppt,.pptx" onchange="updateFileName()">
                                </div>
                            </div>
                        </div>

                        <div class="form-actions">
                            <button type="button" class="btn-cancel" onclick="closePitchModal()">Cancel</button>
                            <button type="submit" class="btn-submit">Submit Pitch</button>
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </div>

    <!-- Investor Form Modal -->
    <div id="investorFormModal" class="modal">
        <div class="modal-overlay" onclick="closeInvestorModal()"></div>
        <div class="modal-content">
            <button class="modal-close" onclick="closeInvestorModal()">×</button>
            <section class="pitch-form">
                <div class="pitch-form-grid">
                    <div class="pitch-form-intro">
                        <h2>We'd Love to hear from you</h2>
                        <p class="subtitle">MANDIRI CAPITAL INDONESIA</p>
                        <p class="subtitle">Menara Mandiri II, lantai 14.<br>Jl. Jend. Sudirman No. 54-55, Jakarta 12190
                        </p>
                    </div>

                    <form action="#" method="POST" enctype="multipart/form-data" class="pitch-form-content">
                        @csrf
                        <div class="form-row">
                            <div class="form-group">
                                <label for="full_name">Full Name</label>
                                <input type="text" name="full_name" id="full_name" placeholder="Write here..."
                                    required>
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

                        <div class="form-row">
                            <div class="form-group">
                                <label for="phone">Phone Number</label>
                                <input type="tel" name="phone" id="phone" placeholder="Write here..."
                                    required>
                            </div>

                            <div class="form-group">
                                <label for="investor_email">Email Address</label>
                                <input type="email" name="investor_email" id="investor_email"
                                    placeholder="Write here..." required>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group full-width">
                                <label for="company">Company Name</label>
                                <input type="text" name="company" id="company" placeholder="Write here..."
                                    required>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group full-width">
                                <label for="message">Message</label>
                                <textarea name="message" id="message" placeholder="Write here..." required rows="3"></textarea>
                            </div>
                        </div>

                        <div class="form-actions">
                            <button type="button" class="btn-cancel" onclick="closeInvestorModal()">Cancel</button>
                            <button type="submit" class="btn-submit">Send Message</button>
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </div>

    <script>
        function openPitchModal() {
            document.getElementById('pitchFormModal').classList.add('show');
            document.body.style.overflow = 'hidden';
        }

        function closePitchModal() {
            document.getElementById('pitchFormModal').classList.remove('show');
            document.body.style.overflow = '';
        }

        function openInvestorModal() {
            document.getElementById('investorFormModal').classList.add('show');
            document.body.style.overflow = 'hidden';
        }

        function closeInvestorModal() {
            document.getElementById('investorFormModal').classList.remove('show');
            document.body.style.overflow = '';
        }

        function updateFileName() {
            const fileInput = document.getElementById('pitch_file');
            const fileChosen = document.getElementById('file-chosen');
            if (fileInput.files.length > 0) {
                fileChosen.textContent = fileInput.files[0].name;
            } else {
                fileChosen.textContent = 'No File Chosen';
            }
        }

        // Close modal when clicking outside
        document.addEventListener('click', function(event) {
            const modal = document.getElementById('pitchFormModal');
            if (event.target === modal) {
                closePitchModal();
            }
        });

        // Close modal on escape key
        document.addEventListener('keydown', function(event) {
            if (event.key === 'Escape') {
                closePitchModal();
            }
        });
    </script>
@endsection

@section('scripts')
    <script src="{{ asset('js/home-animation.js') }}"></script>
    <script src="{{ asset('js/carousel.js') }}"></script>
@endsection
