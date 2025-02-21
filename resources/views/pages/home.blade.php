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


    <div class="masonry-grid">
        @foreach($articlesHeadlineList as $card)
            <div class="card {{ $card->type }} {{ $card->position }}"
                @if($card->image_path) style="background-image: linear-gradient(rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.1)), url('{{ '/storage/' . $card->image_path }}')" @endif>
                <a href="{{ $card->link_url ?? '#' }}" class="card-link">
                    @if(!$card->hide_category)
                    <span class="category">{{ $card->getTranslation('category', session('locale', 'en')) }}</span>
                    @endif
                    @if($card->logo_path)
                        <img src="{{ '/storage/' . $card->logo_path }}" alt="{{ $card->getTranslation('category', session('locale', 'en')) }} Logo" class="logo-card" loading="lazy">
                    @endif
                    @if(!$card->hide_title)
                    <div class="card-content">
                        <h2>{{ $card->getTranslation('title', session('locale', 'en')) }}</h2>
                    </div>
                    @endif
                </a>
            </div>
        @endforeach
    </div>

    {{-- Testimonial Section: Customer Success Stories --}}
    <div class="founder-carousell-section">
        <h1 class="section-title">{{ session('locale') === 'id' ? 'Investasi Unggulan' : 'Featured Investees' }}</h1>
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
                        <h2>{!! $home_email_startup->getTranslation('title', session('locale', 'en')) !!}</h2>
                        <p class="subtitle">{!! $home_email_startup->getTranslation('subtitle', session('locale', 'en')) !!}</p>
                    </div>
                    <form id="startupPitchForm" class="pitch-form-content">
                        @csrf
                        {{-- Personal Information --}}
                        <div class="form-row">
                            <div class="form-group">
                                <label for="first_name">{!! $home_email_startup->getTranslation('firstname', session('locale', 'en')) !!}<span class="required">*</span></label>
                                <input type="text" name="first_name" id="first_name" placeholder="Write here..." required>
                            </div>
                            <div class="form-group">
                                <label for="last_name">{!! $home_email_startup->getTranslation('lastname', session('locale', 'en')) !!}<span class="required">*</span></label>
                                <input type="text" name="last_name" id="last_name" placeholder="Write here..." required>
                            </div>
                        </div>

                        {{-- Contact Information --}}
                        <div class="form-row">
                            <div class="form-group">
                                <label for="email">{!! $home_email_startup->getTranslation('email', session('locale', 'en')) !!}<span class="required">*</span></label>
                                <input type="email" name="email" id="email" placeholder="Write here..." required>
                            </div>
                            <div class="form-group">
                                <label for="phone">{!! $home_email_startup->getTranslation('phone', session('locale', 'en')) !!}<span class="required">*</span></label>
                                <input type="text" name="phone" id="phone" placeholder="Write here..." required>
                            </div>
                        </div>

                        {{-- Business Information --}}
                        <div class="form-row">
                            <div class="form-group">
                                <label for="business_name">{!! $home_email_startup->getTranslation('company', session('locale', 'en')) !!}<span class="required">*</span></label>
                                <input type="text" name="business_name" id="business_name" placeholder="Write here..." required>
                            </div>
                            <div class="form-group">
                                <label for="website_url">{!! $home_email_startup->getTranslation('website_url', session('locale', 'en')) !!}</label>
                                <input type="url" name="website_url" id="website_url" placeholder="Write here...">
                            </div>
                        </div>

                        {{-- Pitch Materials --}}
                        <div class="form-row">
                            <div class="form-group">
                                <label for="sector">{!! $home_email_startup->getTranslation('business_sector', session('locale', 'en')) !!}</label>
                                <select name="sector" id="sector" required>
                                    <option value="">{{ session('locale') === 'id' ? 'Pilih opsi' : 'Select an option' }}</option>
                                    <option value="agriculture_food">{{ session('locale') === 'id' ? 'Pertanian & Makanan' : 'Agriculture & Food' }}</option>
                                    <option value="energy_resources">{{ session('locale') === 'id' ? 'Energi & Sumber Daya' : 'Energy & Resources' }}</option>
                                    <option value="healthcare_pharmaceuticals">{{ session('locale') === 'id' ? 'Kesehatan & Farmasi' : 'Healthcare & Pharmaceuticals' }}</option>
                                    <option value="education_employment">{{ session('locale') === 'id' ? 'Pendidikan & Pekerjaan' : 'Education & Employment' }}</option>
                                    <option value="automotive_transportation">{{ session('locale') === 'id' ? 'Otomotif & Transportasi' : 'Automotive & Transportation' }}</option>
                                    <option value="banking_financial">{{ session('locale') === 'id' ? 'Perbankan & Jasa Keuangan' : 'Banking & Financial Service' }}</option>
                                    <option value="consulting_professional">{{ session('locale') === 'id' ? 'Konsultasi & Jasa Profesional' : 'Consulting & Professional Services' }}</option>
                                    <option value="media_entertainment">{{ session('locale') === 'id' ? 'Media & Hiburan' : 'Media & Entertainment' }}</option>
                                    <option value="retail_wholesale">{{ session('locale') === 'id' ? 'Ritel & Grosir' : 'Retail & Wholesale' }}</option>
                                    <option value="other">{{ session('locale') === 'id' ? 'Lainnya' : 'Other' }}</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="pitch_file">{!! $home_email_startup->getTranslation('upload', session('locale', 'en')) !!}</label>
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
                            <button type="button" class="btn-cancel" onclick="closePitchModal()">{!! $home_email_startup->getTranslation('cancel', session('locale', 'en')) !!}</button>
                            <button type="submit" class="btn-submit">{!! $home_email_startup->getTranslation('submit', session('locale', 'en')) !!}</button>
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
                        <h2>{!! $home_email_investor->getTranslation('title', session('locale', 'en')) !!}</h2>
                        <p class="subtitle">{!! $home_email_investor->getTranslation('subtitle', session('locale', 'en')) !!}</p>
                    </div>

                    <form id="investorForm" class="pitch-form-content">
                        @csrf
                        {{-- Contact Information --}}
                        <div class="form-row">
                            <div class="form-group">
                                <label for="full_name">{!! $home_email_investor->getTranslation('fullname', session('locale', 'en')) !!}</label>
                                <input type="text" name="full_name" id="full_name" placeholder="Write here..." required>
                            </div>
                            <div class="form-group">
                                <label for="subject">{!! $home_email_investor->getTranslation('subject', session('locale', 'en')) !!}</label>
                                <select name="subject" id="subject" required>
                                    <option value="">{{ session('locale') === 'id' ? 'Pilih...' : 'Select...' }}</option>
                                    <option value="investment">{{ session('locale') === 'id' ? 'Investasi' : 'Investment' }}</option>
                                    <option value="partnership">{{ session('locale') === 'id' ? 'Kemitraan' : 'Partnership' }}</option>
                                    <option value="other">{{ session('locale') === 'id' ? 'Lainnya' : 'Other' }}</option>
                                </select>
                            </div>
                        </div>

                        {{-- Additional Contact Details --}}
                        <div class="form-row">
                            <div class="form-group">
                                <label for="phone">{!! $home_email_investor->getTranslation('phone', session('locale', 'en')) !!}</label>
                                <input type="tel" name="phone" id="phone" placeholder="Write here..." required>
                            </div>
                            <div class="form-group">
                                <label for="investor_email">{!! $home_email_investor->getTranslation('email', session('locale', 'en')) !!}</label>
                                <input type="email" name="investor_email" id="investor_email" placeholder="Write here..." required>
                            </div>
                        </div>

                        {{-- Company Information --}}
                        <div class="form-row">
                            <div class="form-group full-width">
                                <label for="company">{!! $home_email_investor->getTranslation('company', session('locale', 'en')) !!}</label>
                                <input type="text" name="company" id="company" placeholder="Write here..." required>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group full-width">
                                <label for="message">{!! $home_email_investor->getTranslation('message', session('locale', 'en')) !!}</label>
                                <textarea name="message" id="message" placeholder="Write here..." required></textarea>
                            </div>
                        </div>

                        {{-- Form Actions --}}
                        <div class="form-actions">
                            <button type="button" class="btn-cancel" onclick="closeInvestorModal()">{!! $home_email_investor->getTranslation('cancel', session('locale', 'en')) !!}</button>
                            <button type="submit" class="btn-submit">{!! $home_email_investor->getTranslation('submit', session('locale', 'en')) !!}</button>
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
            // Reset form when closing
            document.getElementById('startupPitchForm').reset();
            document.getElementById('file-chosen').textContent = 'No File Chosen';
        }

        function openInvestorModal() {
            document.getElementById('investorFormModal').style.display = 'block';
            document.body.style.overflow = 'hidden';
        }

        function closeInvestorModal() {
            document.getElementById('investorFormModal').style.display = 'none';
            document.body.style.overflow = 'auto';
        }

        // Form submission handler for startup pitch
        document.getElementById('startupPitchForm').addEventListener('submit', function(e) {
            e.preventDefault();

            const formData = new FormData(this);
            const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

            fetch('{{ route('home.startup.email') }}', {
                method: 'POST',
                body: formData,
                headers: {
                    'X-CSRF-TOKEN': csrfToken
                },
                credentials: 'same-origin'
            })
            .then(response => response.json())
            .then(data => {
                if (data.status === 'success') {
                    alert('Thank you for your submission. We will contact you soon.');
                    closePitchModal();
                    this.reset();
                } else {
                    alert(data.message || 'An error occurred. Please try again.');
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('An error occurred. Please try again.');
            });
        });

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
