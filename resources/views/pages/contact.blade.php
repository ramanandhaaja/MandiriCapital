@extends("layout.mainlayout")

@section('localcss')
    <link href="{{ asset('css/contact.css') }}" rel="stylesheet">
@endsection

@section("container")
<section class="contact-section">
    <div class="contact-container">
        <div class="contact-grid">
            <!-- Left Column -->
            <div>
                <h2 class="contact-title">
                    More details?<br>
                    Contact Us
                </h2>

                <div class="contact-info-section">
                    <div class="info-row">
                        <div class="contact-info-group">
                            <h3 class="contact-info-title">EMAIL</h3>
                            <a href="mailto:info@mandiri-capital.co.id" class="contact-info-link">
                                info@mandiri-capital.co.id
                            </a>
                        </div>

                        <div class="contact-info-group">
                            <h3 class="contact-info-title">CUSTOMER SERVICE</h3>
                            <a href="mailto:mcicare@mandiri-capital.co.id" class="contact-info-link">
                                mcicare@mandiri-capital.co.id
                            </a>
                        </div>
                    </div>

                    <div class="contact-info-group">
                        <h3 class="contact-info-title">PHONE</h3>
                        <a href="tel:+62215266661" class="contact-info-link">
                            +62-21-5266661
                        </a>
                    </div>

                    <div class="contact-info-group">
                        <h3 class="contact-info-title">VISIT OUR SOCIAL MEDIA</h3>
                        <div class="social-media-container">
                            <a href="#" class="social-media-link">
                                <img src="/images/contact/instagram.png" alt="Instagram" class="social-media-icon">
                            </a>
                            <a href="#" class="social-media-link">
                                <img src="/images/contact/linkedin.png" alt="LinkedIn" class="social-media-icon">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column - Contact Form -->
            <div class="contact-form-section">
                <p class="contact-form-intro">We are happy to discuss your business situation, please contact.</p>

                <form id="contactForm" class="contact-form">
                    @csrf
                    <div class="form-row">
                        <div class="form-group">
                            <label for="email" class="form-label">Email</label>
                            <input type="email"
                                   id="email"
                                   name="email"
                                   class="form-input"
                                   placeholder="Write here...">
                        </div>

                        <div class="form-group">
                            <label for="company_name" class="form-label">Company Name</label>
                            <input type="text"
                                   id="company_name"
                                   name="company_name"
                                   class="form-input"
                                   placeholder="Write here...">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="message" class="form-label">Message</label>
                        <textarea id="message"
                                  name="message"
                                  rows="6"
                                  class="form-textarea"
                                  placeholder="Write here..."></textarea>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="submit-button">
                            <img src="/images/contact/contact.png" alt="Send">
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<section class="map-section">
    <div class="map-container">
        <div class="map-grid">
            <!-- Map Column -->

            <div>
                <img src="/images/contact/map.png" alt="Send" class="map-iframe">
            </div>

            <!-- Content Column -->
            <div class="map-content">
                <h2 class="map-title">
                    Visit Our<br>
                    Head Quarter
                </h2>

                <div class="map-info">
                    <h3 class="company-name">MANDIRI CAPITAL INDONESIA</h3>
                    <p class="address">
                        Menara Mandiri II, lantai 14,<br>
                        Jl. Jend. Sudirman No. 54-55, Jakarta 12190
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
