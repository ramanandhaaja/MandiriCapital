@extends('layout.mainlayout')

@section('localcss')
    <link href="{{ asset('css/contact.css') }}" rel="stylesheet">
@endsection

@section('container')
    {{-- Contact Information Section --}}
    <section class="contact-section">
        <div class="contact-container">
            <div class="contact-grid">
                {{-- Contact Information Column --}}
                <div>
                    <h2 class="contact-title">
                        More details?<br>
                        Contact Us
                    </h2>

                    <div class="contact-info-section">
                        {{-- Email Information --}}
                        <div class="info-row">
                            <div class="contact-info-group">
                                <h3 class="contact-info-title">EMAIL</h3>
                                <a href="mailto:info@mandiri-capital.co.id" class="contact-info-link">
                                    {{ $masterData->email_contact }}
                                </a>
                            </div>

                            <div class="contact-info-group customer-report-container">
                                <h3 class="contact-info-title" data-tooltip="Reporting Violations of Mandiri Sekuritas Employees.">CUSTOMER REPORT</h3>
                                <a href="mailto:mcicare@mandiri-capital.co.id" class="contact-info-link">
                                    {{ $masterData->email_customer_report }}
                                </a>
                            </div>
                        </div>

                        {{-- Phone Information --}}
                        <div class="contact-info-group">
                            <h3 class="contact-info-title">PHONE</h3>
                            <a href="tel:+62215266661" class="contact-info-link">
                                {{ $masterData->phone }}
                            </a>
                        </div>

                        {{-- Social Media Links --}}
                        <div class="contact-info-group">
                            <h3 class="contact-info-title">VISIT OUR SOCIAL MEDIA</h3>
                            <div class="social-media-container">
                                <a href=" {{ $masterData->instagram }}" class="social-media-link" aria-label="Instagram">
                                    <img src="{{ asset('images/contact/instagram.png') }}" alt="Instagram"
                                        class="social-media-icon">
                                </a>
                                <a href=" {{ $masterData->linkedin }}" class="social-media-link" aria-label="LinkedIn">
                                    <img src="{{ asset('images/contact/linkedin.png') }}" alt="LinkedIn"
                                        class="social-media-icon">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Contact Form Column --}}
                <div class="contact-form-section">
                    <p class="contact-form-intro">We are happy to discuss your business situation, please contact.</p>

                    <form id="contactForm" class="contact-form">
                        @csrf
                        <p class="identity-text">I'm a</p>

                        <div class="identity-section">

                            <div class="radio-group">
                                <label class="radio-container">
                                    <input type="radio" name="identity" value="startup" checked>
                                    <span class="radio-button"></span>
                                    <span class="radio-label">Startup</span>
                                </label>

                                <label class="radio-container">
                                    <input type="radio" name="identity" value="investor">
                                    <span class="radio-button"></span>
                                    <span class="radio-label">Investor</span>
                                </label>

                                <label class="radio-container">
                                    <input type="radio" name="identity" value="media">
                                    <span class="radio-button"></span>
                                    <span class="radio-label">Media</span>
                                </label>
                            </div>
                        </div>

                        {{-- Contact Form Other --}}
                        <div class="form-startup">
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="startup_name" class="form-label"> Startup's Name</label>
                                    <input type="text" id="startup_name" name="startup_name" class="form-input"
                                        placeholder="Write here..." required>
                                </div>
                                <div class="form-group">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" id="email" name="email" class="form-input"
                                        placeholder="Write here..." required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="startup_category" class="form-label"> Startup Category</label>
                                    <input type="text" id="startup_category" name="startup_category" class="form-input"
                                        placeholder="Write here..." required>
                                </div>
                                <div class="form-group">
                                    <label for="company_name" class="form-label">Company Name</label>
                                    <input type="text" id="company_name" name="company_name" class="form-input"
                                        placeholder="Write here..." required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="problem" class="form-label">Whats the problem you are trying to solve?</label>
                                <textarea id="problem" name="problem" rows="5" class="form-textarea" placeholder="Write here..."
                                    maxlength="300" required></textarea>
                            </div>

                            <div class="form-group">
                                <label for="solution" class="form-label">How are you going to solve the problem?</label>
                                <textarea id="solution" name="solution" rows="5" class="form-textarea" placeholder="Write here..."
                                    maxlength="300" required></textarea>
                            </div>

                            <div class="form-group">
                                <label for="proposition" class="form-label">What's your value proposition?</label>
                                <textarea id="proposition" name="proposition" rows="5" class="form-textarea" placeholder="Write here..."
                                    maxlength="300" required></textarea>
                            </div>

                            <div class="form-group">
                                <label class="form-label">Upload Your Company Profile / Pitch Deck</label>
                                <div class="file-upload-container">
                                    <label for="company_profile" class="file-upload-button">Choose File</label>
                                    <span class="file-name">No File Chosen</span>
                                    <input type="file" id="company_profile" name="company_profile" class="file-input"
                                        accept=".pdf" required>
                                </div>
                                <p class="description-text">Please upload your company profile or Pitch Deck (Max. 15 page
                                    PDF)</p>
                                <div class="upload-guidelines">
                                    <p class="guidelines-title">Your company profile or pitch deck should address these
                                        things:</p>
                                    <ul class="guidelines-list">
                                        <li>The specific problem your company are aiming to tackle</li>
                                        <li>The solution for the specific problem</li>
                                        <li>The business model, describe the strategy to increase the revenue or profit with
                                            its products and customer base</li>
                                        <li>The target market, the size, entry barriers, challenges, and opportunities</li>
                                        <li>Number of the current users or clients that are using your products</li>
                                        <li>Your competition and who might be one</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="submit-button">
                                    <img src="{{ asset('images/contact/contact.png') }}" alt="Send Message">
                                </button>
                            </div>
                        </div>

                        {{-- Contact Form Other --}}
                        <div class="form-other">

                            <div class="form-row">
                                <div class="form-group">
                                    <label for="name" class="form-label"> Name</label>
                                    <input type="text" id="name" name="name" class="form-input"
                                        placeholder="Write here..." required>
                                </div>
                                <div class="form-group">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" id="email" name="email" class="form-input"
                                        placeholder="Write here..." required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="subject" class="form-label">Subject</label>
                                <input type="text" id="subject" name="subject" class="form-input"
                                    placeholder="Write here..." required>
                            </div>

                            <div class="form-group">
                                <label for="message" class="form-label">Message</label>
                                <textarea id="message" name="message" rows="6" class="form-textarea" placeholder="Write here..." required></textarea>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="submit-button">
                                    <img src="{{ asset('images/contact/contact.png') }}" alt="Send Message">
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
                    Visit Our<br>
                    Office
                </h2>

                <div class="map-info">
                    <h3 class="company-name">MANDIRI CAPITAL INDONESIA</h3>
                    <p class="address">
                        {{ $masterData->address }}
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection

<style>
.customer-report-container {
    position: relative;
}

.contact-info-title[data-tooltip] {
    position: relative;
    cursor: help;
}

.contact-info-title[data-tooltip]:hover::after {
    content: attr(data-tooltip);
    position: absolute;
    left: 0;
    top: 100%;
    background: rgba(0, 0, 0, 0.8);
    color: white;
    padding: 5px 10px;
    border-radius: 4px;
    font-size: 14px;
    white-space: nowrap;
    z-index: 100;
    margin-top: 5px;
}
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const radioButtons = document.querySelectorAll('input[name="identity"]');
        const formStartup = document.querySelector('.form-startup');
        const formOther = document.querySelector('.form-other');

        // Function to update form visibility
        function updateFormVisibility(selectedValue) {
            if (selectedValue === 'startup') {
                formOther.classList.remove('active');
                formStartup.classList.add('active');
            } else {
                formStartup.classList.remove('active');
                formOther.classList.add('active');
            }
        }

        // Show initial form based on default checked radio
        const initialChecked = document.querySelector('input[name="identity"]:checked');
        if (initialChecked) {
            updateFormVisibility(initialChecked.value);
        }

        // Add event listeners to radio buttons
        radioButtons.forEach(radio => {
            radio.addEventListener('change', function() {
                updateFormVisibility(this.value);
            });
        });
    });
</script>
