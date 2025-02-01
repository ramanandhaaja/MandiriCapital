@extends('layout.mainlayout')

@section('localcss')
    <link href="{{ asset('css/platform-show.css') }}" rel="stylesheet">
@endsection

@section('container')
    <div class="hero-section">
        <div class="hero-content">
            <div class="center-text">Zenith <br />Startup Accelerator</div>
            <div class="image-container">
                <img src="{{ asset('images/platform/forstartup.png') }}" alt="For Startup" class="button-image center-image"
                    onclick="openPitchModal()">
            </div>
        </div>
        <div class="hero-content">
            <img src="{{ asset('images/platform/programimagelg.png') }}" alt="For Startup" class="right-image">
        </div>
    </div>

    {{-- Get Investment Section --}}
    <div class="get-investement-section">

        <div class="masonry-grid-investment-section">
            <div class="grid-headline-title-card">
                <h1 class="grid-headline-title">Why You Should Join Zenith?</h1>
                <h1 class="grid-headline-subtitle-left"></h1>
            </div>
            <div class="grid-headline-description-card">
                <div class="masonry-grid-investment-section-sub">
                    <div class="grid-headline-title-card-sub">
                        <div class="card-icon">
                            <img src="{{ asset('images/platform/icon1.png') }}" alt="">
                        </div>
                        <h2 class="card-title">Networking Opportunities
                        </h2>
                        <p class="card-description">Expand your business reach by connecting with industry leaders,
                            potential clients, and investors.</p>
                    </div>
                    <div class="grid-headline-title-card-sub">
                        <div class="card-icon">
                            <img src="{{ asset('images/platform/icon2.png') }}" alt="">
                        </div>
                        <h2 class="card-title">Funding Access
                        </h2>
                        <p class="card-description">Unlock diverse investment prospects and explore potential funding
                            opportunities from Mandiri Capital Indonesia and other investor partners.</p>
                    </div>
                    <div class="grid-headline-title-card-sub">
                        <div class="card-icon">
                            <img src="{{ asset('images/platform/icon3.png') }}" alt="">
                        </div>
                        <h2 class="card-title">Global Access
                        </h2>
                        <p class="card-description">Enhance your market presence with access to global companies and global
                            networking opportunities provided by MCI.</p>
                    </div>
                </div>
                <div class="grid-headline-title-card-sub-bottom">
                    <h1 class="card-title-sub-bottom"></h1>
                    <p class="card-description-bottom"></p>
                </div>
            </div>
        </div>

        <div class="masonry-grid-investment-section-grey">
            <div class="grid-headline-title-card">
                <h1 class="grid-headline-title">Inside Zenith:</h1>
                <h1 class="grid-headline-subtitle-left"></h1>
            </div>
            <div class="grid-headline-description-card">
                <div class="masonry-grid-investment-section-sub">
                    <div class="grid-headline-title-card-sub">
                        <div class="card-icon">
                            <img src="{{ asset('images/platform/icon1.png') }}" alt="">
                        </div>
                        <h2 class="card-title">Expert Insights
                        </h2>
                        <p class="card-description">Gain cutting-edge knowledge through in-depth mentoring sessions, expert led workshops, and personalized 1:1 mentoring</p>
                    </div>
                    <div class="grid-headline-title-card-sub">
                        <div class="card-icon">
                            <img src="{{ asset('images/platform/icon2.png') }}" alt="">
                        </div>
                        <h2 class="card-title">Synergy Creation
                        </h2>
                        <p class="card-description">Drive innovation and foster dynamic collaborations with Mandiri Group and other corportations.</p>
                    </div>
                    <div class="grid-headline-title-card-sub">
                        <div class="card-icon">
                            <img src="{{ asset('images/platform/icon3.png') }}" alt="">
                        </div>
                        <h2 class="card-title">Accelerated Access
                        </h2>
                        <p class="card-description">Benefit from expedited access to Bank Mandiri’s banking products, impact measurement, people management, HR services, legal practice, & cloud services.</p>
                    </div>
                </div>
                <div class="grid-headline-title-card-sub-bottom">
                    <h1 class="card-title-sub-bottom"></h1>
                    <p class="card-description-bottom"></p>
                </div>
            </div>
        </div>

        <div class="platform-image-containter">
            <h2 class="business-deals-title">10+ Business Deals</h2>
            <div class="business-logos-grid">
                <div class="logo-item">
                    <img src="{{ asset('images/platform/rekosistem.png') }}" alt="Rekosistem Logo">
                </div>
                <div class="logo-item">
                    <img src="{{ asset('images/platform/ai-rudder.png') }}" alt="AI Rudder Logo">
                </div>
                <div class="logo-item">
                    <img src="{{ asset('images/platform/imajin.png') }}" alt="Imajin Logo">
                </div>
                <div class="logo-item">
                    <img src="{{ asset('images/platform/lifepack.png') }}" alt="Lifepack Logo">
                </div>
                <div class="logo-item">
                    <img src="{{ asset('images/platform/praktis.png') }}" alt="Praktis Logo">
                </div>
                <div class="logo-item">
                    <img src="{{ asset('images/platform/fishlog.png') }}" alt="Fishlog Logo">
                </div>
            </div>
        </div>

        <div class="platform-image-containter-horizontal">
            <img class="platform-image-large" src="{{ asset('images/platform/large-image.png') }}" alt="Team Photo">
        </div>


        {{-- Article Section --}}
        <div class="masonry-grid-investment-section-grey">
            <div class="grid-headline-title-card">
                <h1 class="grid-headline-title">About The Program</h1>
                <h1 class="grid-headline-subtitle-left">Artikel</h1>
            </div>
            <div class="grid-headline-description-card">
                <div class="masonry-grid-investment-section-sub">
                    <div class="grid-headline-title-card-sub-large">
                        @if (!true)
                            <div class="card-icon">
                                <img src="" alt="">
                            </div>
                        @endif
                        <h2 class="card-title">Zenith by MCI is a 3-month startup accelerator program that enables synergy
                            creation, a synergy to enable breakthrough solutions that address challenges within Mandiri’s
                            Business Units.
                        </h2>
                        <p class="card-description">During the program, startups will be immersed in the synergy creation,
                            mentorship session, and workshop. The program demands active offline participation in Jakarta,
                            Indonesia. Last day of the program will be the Graduation Day, a ceremony where startups,
                            Mandiri team, investors, and community partners witness the successful synergy creation.
                            Zenith by MCI is more than an accelerator; it’s a vibrant platform where startups and Mandiri
                            unite to catalyze innovation and co-create solutions that shape the future. Let’s build
                            tomorrow, together.</p>
                    </div>

                </div>
                <div class="grid-headline-title-card-sub-bottom">
                    <h1 class="card-title-sub-bottom">image</h1>
                    <p class="card-description-bottom">image</p>
                </div>
            </div>
        </div>


        <div class="masonry-grid-investment-section">
            <div class="grid-headline-title-card">
                <h1 class="grid-headline-title">About The Program</h1>
                <h1 class="grid-headline-subtitle-left">Artikel</h1>
            </div>
            <div class="grid-headline-description-card">
                <div class="masonry-grid-investment-section-sub">
                    <div class="grid-headline-title-card-sub">
                        @if (!true)
                            <div class="card-icon">
                                <img src="" alt="">
                            </div>
                        @endif
                        <h2 class="card-title">Zenith by MCI is a 3-month startup accelerator program that enables synergy
                            creation, a synergy to enable breakthrough solutions that address challenges within Mandiri’s
                            Business Units.
                        </h2>
                        <p class="card-description">During the program, startups will be immersed in the synergy creation,
                            mentorship session, and workshop. The program demands active offline participation in Jakarta,
                            Indonesia. Last day of the program will be the Graduation Day, a ceremony where startups,
                            Mandiri team, investors, and community partners witness the successful synergy creation.
                            Zenith by MCI is more than an accelerator; it’s a vibrant platform where startups and Mandiri
                            unite to catalyze innovation and co-create solutions that shape the future. Let’s build
                            tomorrow, together.</p>
                    </div>
                    <div class="grid-headline-title-card-sub">
                        @if (!true)
                            <div class="card-icon">
                                <img src="" alt="">
                            </div>
                        @endif
                        <h2 class="card-title">Zenith by MCI is a 3-month startup accelerator program that enables synergy
                            creation, a synergy to enable breakthrough solutions that address challenges within Mandiri’s
                            Business Units.
                        </h2>
                        <p class="card-description">During the program, startups will be immersed in the synergy creation,
                            mentorship session, and workshop. The program demands active offline participation in Jakarta,
                            Indonesia. Last day of the program will be the Graduation Day, a ceremony where startups,
                            Mandiri team, investors, and community partners witness the successful synergy creation.
                            Zenith by MCI is more than an accelerator; it’s a vibrant platform where startups and Mandiri
                            unite to catalyze innovation and co-create solutions that shape the future. Let’s build
                            tomorrow, together.</p>
                    </div>
                    <div class="grid-headline-title-card-sub">
                        @if (!true)
                            <div class="card-icon">
                                <img src="" alt="">
                            </div>
                        @endif
                        <h2 class="card-title">Zenith by MCI is a 3-month startup accelerator program that enables synergy
                            creation, a synergy to enable breakthrough solutions that address challenges within Mandiri’s
                            Business Units.
                        </h2>
                        <p class="card-description">During the program, startups will be immersed in the synergy creation,
                            mentorship session, and workshop. The program demands active offline participation in Jakarta,
                            Indonesia. Last day of the program will be the Graduation Day, a ceremony where startups,
                            Mandiri team, investors, and community partners witness the successful synergy creation.
                            Zenith by MCI is more than an accelerator; it’s a vibrant platform where startups and Mandiri
                            unite to catalyze innovation and co-create solutions that shape the future. Let’s build
                            tomorrow, together.</p>
                    </div>
                </div>
                <div class="grid-headline-title-card-sub-bottom">
                    <h1 class="card-title-sub-bottom">image</h1>
                    <p class="card-description-bottom">image</p>
                </div>
            </div>
        </div>

        <div class="masonry-grid-investment-section-grey">
            <div class="grid-headline-title-card">
                <h1 class="grid-headline-title">About The Program</h1>
                <h1 class="grid-headline-subtitle-left">Artikel</h1>
            </div>
            <div class="grid-headline-description-card">
                <div class="masonry-grid-investment-section-sub">
                    <div class="grid-headline-title-card-sub-square">
                        @if (!true)
                            <div class="card-icon">
                                <img src="" alt="">
                            </div>
                        @endif
                        <h2 class="card-title-bottom">127 </h2>
                        <p class="card-description-bottom">Projects </p>
                    </div>
                    <div class="grid-headline-title-card-sub-square">
                        @if (!true)
                            <div class="card-icon">
                                <img src="" alt="">
                            </div>
                        @endif
                        <h2 class="card-title-bottom">127 </h2>
                        <p class="card-description-bottom">Projects </p>
                    </div>
                    <div class="grid-headline-title-card-sub-square">
                        @if (!true)
                            <div class="card-icon">
                                <img src="" alt="">
                            </div>
                        @endif
                        <h2 class="card-title-bottom">127 </h2>
                        <p class="card-description-bottom">Business Units Mandiri and Subsidiaries Work with Statups </p>
                    </div>
                </div>
                <div class="grid-headline-title-card-sub-bottom">
                    <h1 class="card-title-sub-bottom"></h1>
                    <p class="card-description-bottom"></p>
                </div>
            </div>
        </div>

        <div class="masonry-grid-investment-section-grey">
            <div class="grid-headline-title-card">
                <h1 class="grid-headline-title">About The Program</h1>
                <h1 class="grid-headline-subtitle-left">Artikel</h1>
            </div>
            <div class="grid-headline-description-card">
                <div class="masonry-grid-investment-section-sub">
                    <div class="grid-headline-title-card-sub">
                        @if (!true)
                            <div class="card-icon">
                                <img src="" alt="">
                            </div>
                        @endif
                        <h2 class="card-title">Zenith by MCI is a 3-month startup accelerator program that enables synergy
                            creation, a synergy to enable breakthrough solutions that address challenges within Mandiri’s
                            Business Units.
                        </h2>
                        <p class="card-description">During the program, startups will be immersed in the synergy creation,
                            mentorship session, and workshop. The program demands active offline participation in Jakarta,
                            Indonesia. Last day of the program will be the Graduation Day, a ceremony where startups,
                            Mandiri team, investors, and community partners witness the successful synergy creation.
                            Zenith by MCI is more than an accelerator; it’s a vibrant platform where startups and Mandiri
                            unite to catalyze innovation and co-create solutions that shape the future. Let’s build
                            tomorrow, together.</p>
                    </div>
                    <div class="grid-headline-title-card-sub">
                        @if (!true)
                            <div class="card-icon">
                                <img src="" alt="">
                            </div>
                        @endif
                        <h2 class="card-title">Zenith by MCI is a 3-month startup accelerator program that enables synergy
                            creation, a synergy to enable breakthrough solutions that address challenges within Mandiri’s
                            Business Units.
                        </h2>
                        <p class="card-description">During the program, startups will be immersed in the synergy creation,
                            mentorship session, and workshop. The program demands active offline participation in Jakarta,
                            Indonesia. Last day of the program will be the Graduation Day, a ceremony where startups,
                            Mandiri team, investors, and community partners witness the successful synergy creation.
                            Zenith by MCI is more than an accelerator; it’s a vibrant platform where startups and Mandiri
                            unite to catalyze innovation and co-create solutions that shape the future. Let’s build
                            tomorrow, together.</p>
                    </div>
                    <div class="grid-headline-title-card-sub">
                        @if (!true)
                            <div class="card-icon">
                                <img src="" alt="">
                            </div>
                        @endif
                        <h2 class="card-title">Zenith by MCI is a 3-month startup accelerator program that enables synergy
                            creation, a synergy to enable breakthrough solutions that address challenges within Mandiri’s
                            Business Units.
                        </h2>
                        <p class="card-description">During the program, startups will be immersed in the synergy creation,
                            mentorship session, and workshop. The program demands active offline participation in Jakarta,
                            Indonesia. Last day of the program will be the Graduation Day, a ceremony where startups,
                            Mandiri team, investors, and community partners witness the successful synergy creation.
                            Zenith by MCI is more than an accelerator; it’s a vibrant platform where startups and Mandiri
                            unite to catalyze innovation and co-create solutions that shape the future. Let’s build
                            tomorrow, together.</p>
                    </div>
                </div>
                <div class="grid-headline-title-card-sub-bottom">
                    <h1 class="card-title-sub-bottom">image</h1>
                    <p class="card-description-bottom">image</p>
                </div>
            </div>
        </div>


        {{-- Contact Form Section --}}
        <div class="masonry-grid-contact-section">
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
                            <label for="first_name" class="form-label">First Name</label>
                            <input type="text" id="first_name" name="first_name" class="form-input"
                                placeholder="Write here..." required>
                        </div>
                        <div class="form-group">
                            <label for="last_name" class="form-label">Last Name</label>
                            <input type="text" id="last_name" name="last_name" class="form-input"
                                placeholder="Write here..." required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="email" class="form-label">Email Address</label>
                            <input type="email" id="email" name="email" class="form-input"
                                placeholder="Write here..." required>
                        </div>
                        <div class="form-group">
                            <label for="phone" class="form-label">Phone Number</label>
                            <input type="text" id="phone" name="phone" class="form-input"
                                placeholder="Write here..." required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="company_name" class="form-label">Company Name</label>
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
    </div>

    <script>
        document.getElementById('company_profile').addEventListener('change', function(e) {
            const fileName = e.target.files[0]?.name || 'No File Chosen';
            e.target.parentElement.querySelector('.file-name').textContent = fileName;
        });
    </script>
@endsection
