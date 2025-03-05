@extends('layout.mainlayout')

@section('localcss')
    <link href="{{ asset('css/contact.css') }}" rel="stylesheet">
    <style>
        :root {
            --font-size-base: {{ $masterData->font_size ?? '14px' }};
        }
    </style>
@endsection

@section('container')
    {{-- Contact Information Section --}}
    <section class="contact-section">
        <div class="contact-container">
            <div class="contact-grid">
                {{-- Contact Information Column --}}
                <div>
                    <h2 class="contact-title">
                        {!! $contact->getTranslation('contact_title', session('locale', 'en')) !!}
                    </h2>

                    <div class="contact-info-section">
                        {{-- Email Information --}}
                        <div class="info-row">
                            <div class="contact-info-group">
                                <h3 class="contact-info-title">{!! $contact->getTranslation('email_contact_title', session('locale', 'en')) !!}</h3>
                                <a href="mailto:info@mandiri-capital.co.id" class="contact-info-link">
                                    {{ $contact->email_contact }}
                                </a>
                            </div>

                            <div class="contact-info-group customer-report-container">

                                <h3 class="contact-info-title" data-tooltip="{!! $contact->getTranslation('email_customer_report_tooltip', session('locale', 'en')) !!}">{!! $contact->getTranslation('email_customer_report_title', session('locale', 'en')) !!}
                                </h3>
                                <a href="mailto:mcicare@mandiri-capital.co.id" class="contact-info-link">
                                    {{ $contact->email_customer_report }}
                                </a>
                            </div>
                        </div>

                        {{-- Phone Information --}}
                        <div class="contact-info-group">
                            <h3 class="contact-info-title">{!! $contact->getTranslation('phone_title', session('locale', 'en')) !!}</h3>
                            <a href="tel:+62215266661" class="contact-info-link">
                                {{ $contact->phone }}
                            </a>
                        </div>

                        {{-- Social Media Links --}}
                        <div class="contact-info-group">
                            <h3 class="contact-info-title">{!! $contact->getTranslation('social_media_title', session('locale', 'en')) !!}</h3>
                            <div class="social-media-container">
                                <a href=" {{ $masterData->instagram }}" class="social-media-link" aria-label="Instagram">
                                    <img src="{{ asset('images/contact/instagram.png') }}" alt="Instagram"
                                        class="social-media-icon"
                                        loading="lazy">
                                </a>
                                <a href=" {{ $masterData->linkedin }}" class="social-media-link" aria-label="LinkedIn">
                                    <img src="{{ asset('images/contact/linkedin.png') }}" alt="LinkedIn"
                                        class="social-media-icon"
                                        loading="lazy">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Contact Form Column --}}
                <div class="contact-form-section">
                    <p class="contact-form-intro">{!! $contact_email->getTranslation('title', session('locale', 'en')) !!}</p>

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

                    <form id="contactForm" class="contact-form" action="{{ route('contact.email') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <p class="identity-text">{{ session('locale') === 'id' ? 'Saya adalah' : "I'm a" }}</p>

                        <div class="identity-section">

                            <div class="radio-group">
                                <label class="radio-container">
                                    <input type="radio" name="identity" value="startup" checked>
                                    <span class="radio-button"></span>
                                    <span class="radio-label">{!! $contact_email->getTranslation('position1', session('locale', 'en')) !!}</span>
                                </label>

                                <label class="radio-container">
                                    <input type="radio" name="identity" value="investor">
                                    <span class="radio-button"></span>
                                    <span class="radio-label">{!! $contact_email->getTranslation('position2', session('locale', 'en')) !!}</span>
                                </label>

                                <label class="radio-container">
                                    <input type="radio" name="identity" value="media">
                                    <span class="radio-button"></span>
                                    <span class="radio-label">{!! $contact_email->getTranslation('position3', session('locale', 'en')) !!}</span>
                                </label>
                            </div>
                        </div>

                        {{-- Contact Form Other --}}
                        <div class="form-startup" style="display: block;">
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="startup_name" class="form-label"> {!! $contact_email->getTranslation('name', session('locale', 'en')) !!}</label>
                                    <input type="text" id="startup_name" name="startup_name" class="form-input"
                                        placeholder="Write here...">
                                </div>
                                <div class="form-group">
                                    <label for="email" class="form-label">{!! $contact_email->getTranslation('email', session('locale', 'en')) !!}</label>
                                    <input type="email" id="email" name="email" class="form-input"
                                        placeholder="Write here...">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="startup_category" class="form-label"> {!! $contact_email->getTranslation('startup_category', session('locale', 'en')) !!}</label>
                                    <input type="text" id="startup_category" name="startup_category" class="form-input"
                                        placeholder="Write here...">
                                </div>
                                <div class="form-group">
                                    <label for="company_name" class="form-label"> {!! $contact_email->getTranslation('company', session('locale', 'en')) !!}</label>
                                    <input type="text" id="company_name" name="company_name" class="form-input"
                                        placeholder="Write here...">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="problem" class="form-label">{!! $contact_email->getTranslation('problem', session('locale', 'en')) !!}</label>
                                <textarea id="problem" name="problem" rows="5" class="form-textarea" placeholder="Write here..."
                                    maxlength="300"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="solution" class="form-label">{!! $contact_email->getTranslation('solution', session('locale', 'en')) !!}</label>
                                <textarea id="solution" name="solution" rows="5" class="form-textarea" placeholder="Write here..."
                                    maxlength="300"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="proposition" class="form-label">{!! $contact_email->getTranslation('proposition', session('locale', 'en')) !!}</label>
                                <textarea id="proposition" name="proposition" rows="5" class="form-textarea" placeholder="Write here..."
                                    maxlength="300"></textarea>
                            </div>

                            <div class="form-group">
                                <label class="form-label">{!! $contact_email->getTranslation('upload', session('locale', 'en')) !!}</label>
                                <div class="file-upload-container">
                                    <label for="company_profile" class="file-upload-button">Choose File</label>
                                    <span class="file-name" id="fileName">No File Chosen</span>
                                    <input type="file" id="company_profile" name="company_profile" class="file-input"
                                        accept=".pdf" onchange="updateFileName(this)">
                                </div>
                                <p class="description-text" id="company-profile-desc">{{ session('locale') === 'id' ? 'Silakan unggah profil perusahaan atau Pitch Deck Anda (Maks. 15 halaman PDF)' : 'Please upload your company profile or Pitch Deck (Max. 15 page PDF)' }}</p>
                                <div class="card-funding-hover" id="company-profile-hover">
                                    <div class="hover-content">
                                        <div class="upload-guidelines">
                                            <p>
                                                {!! $contact_email->getTranslation('instructions', session('locale', 'en')) !!}
                                            </p>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="form-group">
                                <button type="submit" class="submit-button">
                                    <img src="{{ asset('images/contact/contact.png') }}" alt="Send Message" loading="lazy">
                                </button>
                            </div>
                        </div>

                        {{-- Contact Form Other --}}
                        <div class="form-other" style="display: none;">
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="name" class="form-label"> {!! $contact_email->getTranslation('name', session('locale', 'en')) !!}</label>
                                    <input type="text" id="name" name="name" class="form-input"
                                        placeholder="Write here...">
                                </div>
                                <div class="form-group">
                                    <label for="other_email" class="form-label">{!! $contact_email->getTranslation('email', session('locale', 'en')) !!}</label>
                                    <input type="email" id="other_email" name="other_email" class="form-input"
                                        placeholder="Write here...">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="subject" class="form-label">{!! $contact_email->getTranslation('subject', session('locale', 'en')) !!}</label>
                                <input type="text" id="subject" name="subject" class="form-input"
                                    placeholder="Write here...">
                            </div>

                            <div class="form-group">
                                <label for="message" class="form-label">{!! $contact_email->getTranslation('message', session('locale', 'en')) !!}</label>
                                <textarea id="message" name="message" rows="6" class="form-textarea" placeholder="Write here..."></textarea>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="submit-button">
                                    <img src="{{ asset('images/contact/contact.png') }}" alt="Send Message" loading="lazy">
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    {{-- Map Section --}}
    <section class="map-section">
        <div class="map-container">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.297882683585!2d106.8052263107502!3d-6.224397960934856!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f1caf7c75bad%3A0xe6744fb7fef268fd!2sPT.%20Mandiri%20Capital%20Indonesia!5e0!3m2!1sen!2sid!4v1738305411568!5m2!1sen!2sid"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="map-grid">
            <div class="map-content">
                <h2 class="map-title">
                    {!! $contact->getTranslation('map_title', session('locale', 'en')) !!}
                </h2>

                <div class="map-info">
                    <h3 class="company-name">MANDIRI CAPITAL INDONESIA</h3>
                    <p class="address">
                        {{ $contact->address }}
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection



<script>
    function updateFileName(input) {
        const fileNameSpan = document.getElementById('fileName');
        if (input.files && input.files[0]) {
            fileNameSpan.textContent = input.files[0].name;
        } else {
            fileNameSpan.textContent = 'No File Chosen';
        }
    }
</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const formStartup = document.querySelector('.form-startup');
        const formOther = document.querySelector('.form-other');
        const radioButtons = document.querySelectorAll('input[name="identity"]');

        console.log('Form action:', document.getElementById('contactForm').action);

        function toggleForm(identity) {
            console.log('Toggling form for:', identity);
            if (identity === 'startup') {
                formStartup.style.display = 'block';
                formOther.style.display = 'none';
            } else {
                formStartup.style.display = 'none';
                formOther.style.display = 'block';
            }
        }

        // Set initial state
        toggleForm('startup');

        // Handle radio button changes
        radioButtons.forEach(radio => {
            radio.addEventListener('change', (e) => {
                toggleForm(e.target.value);
            });
        });

        // Debug form submission
        document.getElementById('contactForm').addEventListener('submit', function(e) {
            console.log('Form submitting...');
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
