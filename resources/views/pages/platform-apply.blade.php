@extends('layout.mainlayout')

@section('localcss')
    <link href="{{ asset('css/platform-apply.css') }}" rel="stylesheet">
@endsection

@section('container')
    {{-- Get Investment Section --}}
    <div class="get-investement-section">

        <div class="apply-header">
            <h1 class="apply-title">Registration</h1>
            <img src="{{ asset('images/platform/zenith-apply.png') }}" alt="Zenith Logo" class="apply-logo">
        </div>



        {{-- Contact Form Section --}}
        <form id="contactForm" class="contact-form">
            @csrf
            <div class="masonry-grid-contact-section grey-color">
                <div class="grid-headline-title-card">
                    <h1 class="grid-headline-title-contact">Company Information</h1>
                    <h1 class="grid-headline-subtitle-contact">
                    </h1>
                </div>

                <div class="grid-headline-contact-card">
                    {{-- Company Details --}}
                    <div class="form-row">
                        <div class="form-group">
                            <label for="email" class="form-label">Email Address</label>
                            <input type="email" id="email" name="email" class="form-input"
                                placeholder="Write here..." required>
                        </div>
                        <div class="form-group">
                            <label for="company_name" class="form-label">Company Name</label>
                            <input type="text" id="company_name" name="company_name" class="form-input"
                                placeholder="Write here..." required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="website" class="form-label">Company Website</label>
                            <input type="text" id="website" name="website" class="form-input"
                                placeholder="Write here..." required>
                        </div>
                        <div class="form-group">
                            <label for="fullname" class="form-label">Full Name</label>
                            <input type="text" id="fullname" name="fullname" class="form-input"
                                placeholder="Write here..." required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="linkedin_url" class="form-label">LinkedIn Profile URL</label>
                            <input type="text" id="linkedin_url" name="linkedin_url" class="form-input"
                                placeholder="Write here..." required>
                        </div>
                        <div class="form-group">
                            <label for="last_name" class="form-label">Whatsapp Number</label>
                            <input type="text" id="last_name" name="last_name" class="form-input"
                                placeholder="Write here..." required>
                        </div>
                    </div>
                </div>
            </div>

            <div class="masonry-grid-contact-section">
                <div class="grid-headline-title-card">
                    <h1 class="grid-headline-title-contact">Application Background</h1>
                    <h1 class="grid-headline-subtitle-contact">
                    </h1>
                </div>

                <div class="grid-headline-contact-card">
                    <div class="form-group">
                        <label class="form-label">Which Zenith focus Industry do you apply for?</label>
                        <div class="sector-grid">
                            <div class="sector-item">
                                <input type="radio" id="embedded_finance" name="focus_industry" value="Embedded Finance"
                                    class="sector-radio" required>
                                <label for="embedded_finance" class="sector-label">Embedded Finance</label>
                            </div>
                            <div class="sector-item">
                                <input type="radio" id="b2b_value_chain" name="focus_industry" value="B2B Value Chain"
                                    class="sector-radio">
                                <label for="b2b_value_chain" class="sector-label">B2B Value Chain</label>
                            </div>
                            <div class="sector-item">
                                <input type="radio" id="merchant_enabler" name="focus_industry" value="Merchant Enabler"
                                    class="sector-radio">
                                <label for="merchant_enabler" class="sector-label">Merchant Enabler</label>
                            </div>
                            <div class="sector-item">
                                <input type="radio" id="esg" name="focus_industry" value="ESG (Environmental, Social, Governance)"
                                    class="sector-radio">
                                <label for="esg" class="sector-label">ESG (Environmental, Social, Governance)</label>
                            </div>
                            <div class="sector-item">
                                <input type="radio" id="artificial_intelligence" name="focus_industry" value="Artificial Intelligence"
                                    class="sector-radio">
                                <label for="artificial_intelligence" class="sector-label">Artificial Intelligence</label>
                            </div>
                            <div class="sector-item">
                                <input type="radio" id="other_focus" name="focus_industry" value="Other"
                                    class="sector-radio">
                                <label for="other_focus" class="sector-label">Other</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="masonry-grid-contact-section grey-color">
                <div class="grid-headline-title-card">
                    <h1 class="grid-headline-title-contact"></h1>
                    <h1 class="grid-headline-subtitle-contact">
                    </h1>
                </div>

                <div class="grid-headline-contact-card">
                    <div class="form-group">
                        <label class="form-label">What is the main business sector of your company?</label>
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
                                <input type="radio" id="healthcare" name="business_sector" value="Health & Pharmaceuticals"
                                    class="sector-radio">
                                <label for="healthcare" class="sector-label">Health & Pharmaceuticals</label>
                            </div>
                            <div class="sector-item">
                                <input type="radio" id="education" name="business_sector" value="Education & Employment"
                                    class="sector-radio">
                                <label for="education" class="sector-label">Education & Employment</label>
                            </div>
                            <div class="sector-item">
                                <input type="radio" id="automotive" name="business_sector" value="Automotive & Transportation"
                                    class="sector-radio">
                                <label for="automotive" class="sector-label">Automotive & Transportation</label>
                            </div>
                            <div class="sector-item">
                                <input type="radio" id="banking" name="business_sector" value="Banking & Financial Service"
                                    class="sector-radio">
                                <label for="banking" class="sector-label">Banking & Financial Service</label>
                            </div>
                            <div class="sector-item">
                                <input type="radio" id="consulting" name="business_sector" value="Consulting & Professional Services"
                                    class="sector-radio">
                                <label for="consulting" class="sector-label">Consulting & Professional Services</label>
                            </div>
                            <div class="sector-item">
                                <input type="radio" id="media" name="business_sector" value="Media & Entertainment"
                                    class="sector-radio">
                                <label for="media" class="sector-label">Media & Entertainment</label>
                            </div>
                            <div class="sector-item">
                                <input type="radio" id="retail" name="business_sector" value="Retail & Wholesale"
                                    class="sector-radio">
                                <label for="retail" class="sector-label">Retail & Wholesale</label>
                            </div>
                            <div class="sector-item">
                                <input type="radio" id="other_sector" name="business_sector" value="Other"
                                    class="sector-radio">
                                <label for="other_sector" class="sector-label">Other</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="masonry-grid-contact-section">
                <div class="grid-headline-title-card">
                    <h1 class="grid-headline-title-contact"></h1>
                    <h1 class="grid-headline-subtitle-contact">
                    </h1>
                </div>

                <div class="grid-headline-contact-card">
                    <div class="form-group">
                        <label class="form-label">Which of the following best describes the current status of your business?This question is required.*</label>
                        <div class="sector-grid">
                            <div class="sector-item">
                                <input type="radio" id="bootstrap" name="business_status" value="Bootstrap"
                                    class="sector-radio" required>
                                <label for="bootstrap" class="sector-label">Bootstrap</label>
                            </div>
                            <div class="sector-item">
                                <input type="radio" id="pre_seed" name="business_status" value="Pre-seed Funding"
                                    class="sector-radio">
                                <label for="pre_seed" class="sector-label">Pre-seed Funding</label>
                            </div>
                            <div class="sector-item">
                                <input type="radio" id="seed_funding" name="business_status" value="Seed Funding"
                                    class="sector-radio">
                                <label for="seed_funding" class="sector-label">Seed Funding</label>
                            </div>
                            <div class="sector-item">
                                <input type="radio" id="series_a" name="business_status" value="Series-A Funding"
                                    class="sector-radio">
                                <label for="series_a" class="sector-label">Series-A Funding</label>
                            </div>
                            <div class="sector-item">
                                <input type="radio" id="series_b" name="business_status" value="Series-B Funding"
                                    class="sector-radio">
                                <label for="series_b" class="sector-label">Series-B Funding</label>
                            </div>
                            <div class="sector-item">
                                <input type="radio" id="series_c" name="business_status" value="Series-C Funding"
                                    class="sector-radio">
                                <label for="series_c" class="sector-label">Series-C Funding</label>
                            </div>
                            <div class="sector-item">
                                <input type="radio" id="beyond_series_c" name="business_status" value="Beyond Series-C Funding"
                                    class="sector-radio">
                                <label for="beyond_series_c" class="sector-label">Beyond Series-C Funding</label>
                            </div>
                            <div class="sector-item">
                                <input type="radio" id="ipo" name="business_status" value="IPO (Initial Public Offering)"
                                    class="sector-radio">
                                <label for="ipo" class="sector-label">IPO (Initial Public Offering)</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="masonry-grid-contact-section grey-color">
                <div class="grid-headline-title-card">
                    <h1 class="grid-headline-title-contact"></h1>
                    <h1 class="grid-headline-subtitle-contact">
                    </h1>
                </div>

                <div class="grid-headline-contact-card">
                    <div class="form-group">
                        <label class="form-label">What is your current annual revenue range?This question is required.*</label>
                        <div class="sector-grid">
                            <div class="sector-item">
                                <input type="radio" id="less_than_1b" name="revenue_range" value="Less than IDR 1 billion"
                                    class="sector-radio" required>
                                <label for="less_than_1b" class="sector-label">Less than IDR 1 billion</label>
                            </div>
                            <div class="sector-item">
                                <input type="radio" id="1b_to_10b" name="revenue_range" value="IDR 1-10 billion"
                                    class="sector-radio">
                                <label for="1b_to_10b" class="sector-label">IDR 1-10 billion</label>
                            </div>
                            <div class="sector-item">
                                <input type="radio" id="10b_to_50b" name="revenue_range" value="IDR 10-50 billion"
                                    class="sector-radio">
                                <label for="10b_to_50b" class="sector-label">IDR 10-50 billion</label>
                            </div>
                            <div class="sector-item">
                                <input type="radio" id="50b_to_100b" name="revenue_range" value="IDR 50-100 billion"
                                    class="sector-radio">
                                <label for="50b_to_100b" class="sector-label">IDR 50-100 billion</label>
                            </div>
                            <div class="sector-item">
                                <input type="radio" id="100b_to_1t" name="revenue_range" value="IDR 100-1000 billion"
                                    class="sector-radio">
                                <label for="100b_to_1t" class="sector-label">IDR 100-1000 billion</label>
                            </div>
                            <div class="sector-item">
                                <input type="radio" id="more_than_1t" name="revenue_range" value="More than IDR 1 trillion"
                                    class="sector-radio">
                                <label for="more_than_1t" class="sector-label">More than IDR 1 trillion</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="masonry-grid-contact-section">
                <div class="grid-headline-title-card">
                    <h1 class="grid-headline-title-contact"></h1>
                    <h1 class="grid-headline-subtitle-contact">
                    </h1>
                </div>

                <div class="grid-headline-contact-card">
                    <div class="form-group">
                        <label class="form-label">How long has your company been operating?This question is required.*</label>
                        <div class="sector-grid">
                            <div class="sector-item">
                                <input type="radio" id="less_than_1_year" name="operating_time" value="Less than 1 year"
                                    class="sector-radio" required>
                                <label for="less_than_1_year" class="sector-label">Less than 1 year</label>
                            </div>
                            <div class="sector-item">
                                <input type="radio" id="1_to_3_years" name="operating_time" value="1-3 years"
                                    class="sector-radio">
                                <label for="1_to_3_years" class="sector-label">1-3 years</label>
                            </div>
                            <div class="sector-item">
                                <input type="radio" id="3_to_5_years" name="operating_time" value="3-5 years"
                                    class="sector-radio">
                                <label for="3_to_5_years" class="sector-label">3-5 years</label>
                            </div>
                            <div class="sector-item">
                                <input type="radio" id="more_than_5_years" name="operating_time" value="More than 5 years"
                                    class="sector-radio">
                                <label for="more_than_5_years" class="sector-label">More than 5 years</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="masonry-grid-contact-section grey-color">
                <div class="grid-headline-title-card">
                    <h1 class="grid-headline-title-contact"></h1>
                    <h1 class="grid-headline-subtitle-contact">
                    </h1>
                </div>

                <div class="grid-headline-contact-card">
                    <div class="form-group">
                        <label class="form-label">How many employees do you have?*</label>
                        <div class="sector-grid">
                            <div class="sector-item">
                                <input type="radio" id="1_to_20" name="employee_count" value="1-20 employee"
                                    class="sector-radio" required>
                                <label for="1_to_20" class="sector-label">1-20 employee</label>
                            </div>
                            <div class="sector-item">
                                <input type="radio" id="21_to_50" name="employee_count" value="21-50 employee"
                                    class="sector-radio">
                                <label for="21_to_50" class="sector-label">21-50 employee</label>
                            </div>
                            <div class="sector-item">
                                <input type="radio" id="51_to_100" name="employee_count" value="51-100 employee"
                                    class="sector-radio">
                                <label for="51_to_100" class="sector-label">51-100 employee</label>
                            </div>
                            <div class="sector-item">
                                <input type="radio" id="101_to_250" name="employee_count" value="101-250 employee"
                                    class="sector-radio">
                                <label for="101_to_250" class="sector-label">101-250 employee</label>
                            </div>
                            <div class="sector-item">
                                <input type="radio" id="251_to_500" name="employee_count" value="251-500 employee"
                                    class="sector-radio">
                                <label for="251_to_500" class="sector-label">251-500 employee</label>
                            </div>
                            <div class="sector-item">
                                <input type="radio" id="more_than_500" name="employee_count" value="> 500 employee"
                                    class="sector-radio">
                                <label for="more_than_500" class="sector-label">> 500 employee</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="masonry-grid-contact-section">
                <div class="grid-headline-title-card">
                    <h1 class="grid-headline-title-contact"></h1>
                    <h1 class="grid-headline-subtitle-contact">
                    </h1>
                </div>

                <div class="grid-headline-contact-card">
                    <div class="form-group">
                        <label class="form-label">Is your company established in Indonesia?This question is required.*</label>
                        <div class="sector-grid">
                            <div class="sector-item">
                                <input type="radio" id="yes_established" name="established_in_indonesia" value="Yes"
                                    class="sector-radio" required>
                                <label for="yes_established" class="sector-label">Yes</label>
                            </div>
                            <div class="sector-item">
                                <input type="radio" id="no_established" name="established_in_indonesia" value="No"
                                    class="sector-radio">
                                <label for="no_established" class="sector-label">No</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="masonry-grid-contact-section grey-color end-section">
                <div class="grid-headline-title-card">
                    <h1 class="grid-headline-title-contact"></h1>
                    <h1 class="grid-headline-subtitle-contact">
                    </h1>
                </div>

                <div class="form-group button-group">
                    <button type="reset" class="reset-button">Cancel</button>
                    <button type="submit" class="submit-button">Submit </button>
                </div>
            </div>


        </form>
    </div>
    </div>
    </div>

    <script>
        document.getElementById('company_profile').addEventListener('change', function(e) {
            const fileName = e.target.files[0]?.name || 'No File Chosen';
            e.target.parentElement.querySelector('.file-name').textContent = fileName;
        });
    </script>
@endsection
