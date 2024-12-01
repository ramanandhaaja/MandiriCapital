@extends('layout.mainlayout')

@section('localcss')
    <link href="{{ asset('css/about.css') }}" rel="stylesheet">
@endsection

@section('container')
    <div class="hero-section">
        <video autoplay muted loop playsinline class="video-background">
            <source src="{{ asset('images/about/about.mp4') }}" type="video/mp4">
        </video>

        <div class="hero-content">
            <a href="#">
                <img src="{{ asset('images/about/about.png') }}" alt="Media" class="center-image">
            </a>
            <div class="center-search">
                <div class="category-filters">
                    <a href="#" class="filter-link active">About</a>
                    <a href="#" class="filter-link">Our Team</a>
                </div>
            </div>
        </div>
    </div>

    {{-- Content Section --}}
    <div class="hero-mid-section">
        <h1 class="center-text">MCI Connect Startups With Mandiri Group to Drive Rapid Innovation </h1>
    </div>


    {{-- Counter Section --}}
    <div class="counter-section">
        <div class="counter-grid">
            <div class="counter-card right-border">
                <h1>Mandiri Group Ecosystem </h1>
                <h2>00</h2>
            </div>
            <div class="counter-card right-border">
                <h1>Portfolio</h1>
                <h2>00</h2>
            </div>
            <div class="counter-card">
                <h1>Fund Venture </h1>
                <h2>00</h2>
            </div>
        </div>
    </div>



    {/* Counter Content Section */}
    <div class="counter-content">
        <div class="content-container">
            <!-- Left Column - Text Content -->
            <div class="text-content">
                <p>
                    Established in 2015 as the corporate venture capital arm of Indonesia's
                    largest financial institution, PT Bank Mandiri (Persero) Tbk, MCI acts as a
                    dynamic bridge between Startups and Mandiri Group ecosystem.
                </p>

                <p>
                    With a portfolio of 23 startups across diverse sectors, backed by funds such
                    as the Balance Sheet Fund, Indonesia Impact Fund, and Merah Putih Fund,
                    MCI accelerates innovation through meaningful partnerships.
                </p>

                <p>
                    By providing initiative programs, resources, expertise, and strategic support,
                    MCI fosters the growth of technology companies, contributing significantly
                    to the advancement of Indonesia's economy.
                </p>
            </div>
        </div>

        <!-- Right Column - Features -->
        <div class="features-container">
            <h2 class="features-title">Unlocking Startups'<br>Best Potential</h2>

            <div class="feature-items">
                <div class="feature-item">
                    <div class="feature-icon">
                        <img src="{{ asset('images/about/icon1.png') }}" alt="Market Icon" />
                    </div>
                    <div class="feature-content">
                        <h3>Accessing New Markets</h3>
                        <p>From tapping into ecosystem of startups</p>
                    </div>
                </div>

                <div class="feature-item">
                    <div class="feature-icon">
                        <img src="{{ asset('images/about/icon2.png') }}" alt="Business Icon" />
                    </div>
                    <div class="feature-content">
                        <h3>Improving Business Process</h3>
                        <p>By implementing new technologies (ex: AI)</p>
                    </div>
                </div>

                <div class="feature-item">
                    <div class="feature-icon">
                        <img src="{{ asset('images/about/icon3.png') }}" alt="ESG Icon" />
                    </div>
                    <div class="feature-content">
                        <h3>Supporting ESG Initiatives</h3>
                        <p>Achieving net zero emission</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- Headline Section --}}


    <div class="headline-section">
        <h1 class="headline-title">FUNDING </h1>

        <div class="headline-grid">
            <div class="headline-card">
                <h1>Mandiri Corporate VC</h1>
                <h2>Balance Sheet Fund</h2>
                <p>Berfokus untuk memberikan investasi ke technology companies "growth startup" yang memiliki potensi
                    kolaborasi...</p>
                <a href="#" class="learn-more">Learn More »</a>
            </div>

            <div class="headline-card middle-border">
                <h1>Dana Ventura</h1>
                <h2>Indonesia Impact Fund (IIF)</h2>
                <p>Impact Fund swasta pertama di Indonesia yang berinvestasi ke perusahaan rintisan tahap awal yang
                    mendukung imple...</p>
                <a href="#" class="learn-more">Learn More »</a>
            </div>

            <div class="headline-card">
                <h1>Dana Ventura</h1>
                <h2>Merah Putih Fund (MPF)</h2>
                <p>Dana Ventura terbesar di Indonesia yang dikelola oleh 5 CVC BUMN untuk mendukung soonicorns dan
                    mempercepat pe...</p>
                <a href="#" class="learn-more">Learn More »</a>
            </div>
        </div>
    </div>


    <div class="headline-section-grey">
        <h1 class="headline-title">MCI VALUE CREATION INITIATIVES </h1>

        <div class="headline-grid">
            <div class="headline-card">
                <h1>Mandiri Corporate VC</h1>
                <h2>Balance Sheet Fund</h2>
                <p>Berfokus untuk memberikan investasi ke technology companies "growth startup" yang memiliki potensi
                    kolaborasi...</p>
                <a href="#" class="learn-more">Learn More »</a>
            </div>

            <div class="headline-card middle-border">
                <h1>Dana Ventura</h1>
                <h2>Indonesia Impact Fund (IIF)</h2>
                <p>Impact Fund swasta pertama di Indonesia yang berinvestasi ke perusahaan rintisan tahap awal yang
                    mendukung imple...</p>
                <a href="#" class="learn-more">Learn More »</a>
            </div>

            <div class="headline-card">
                <h1>Dana Ventura</h1>
                <h2>Merah Putih Fund (MPF)</h2>
                <p>Dana Ventura terbesar di Indonesia yang dikelola oleh 5 CVC BUMN untuk mendukung soonicorns dan
                    mempercepat pe...</p>
                <a href="#" class="learn-more">Learn More »</a>
            </div>
        </div>
    </div>


    <div class="headline-section">
        <h1 class="headline-title">OUR PRIORITY SECTOR </h1>

        <div class="headline-grid">
            <div class="headline-card">
                <h1>Mandiri Corporate VC</h1>
                <h2>Balance Sheet Fund</h2>
                <p>Berfokus untuk memberikan investasi ke technology companies "growth startup" yang memiliki potensi
                    kolaborasi...</p>
                <a href="#" class="learn-more">Learn More »</a>
            </div>

            <div class="headline-card middle-border">
                <h1>Dana Ventura</h1>
                <h2>Indonesia Impact Fund (IIF)</h2>
                <p>Impact Fund swasta pertama di Indonesia yang berinvestasi ke perusahaan rintisan tahap awal yang
                    mendukung imple...</p>
                <a href="#" class="learn-more">Learn More »</a>
            </div>

            <div class="headline-card">
                <h1>Dana Ventura</h1>
                <h2>Merah Putih Fund (MPF)</h2>
                <p>Dana Ventura terbesar di Indonesia yang dikelola oleh 5 CVC BUMN untuk mendukung soonicorns dan
                    mempercepat pe...</p>
                <a href="#" class="learn-more">Learn More »</a>
            </div>
        </div>
    </div>


    <h1 class="grid-headline-title">MANDIRI GROUP ECOSYSTEM </h1>
    <div class="masonry-grid">
        <div class="card">
            <div class="background-image" style="background-color: #ADD8E6;"></div>
            <img class="background-icon" src="{{ asset('images/about/group1.png') }}" alt="Lets Connect">
            <span class="category">Bank Mandiri Europe</span>
            <div class="card-content">
                <h2>Bank Mandiri (Europe) Limited (BMEL) didirikan di London, Inggris pada tanggal 22 Juni 1999 berdasarkan
                    The Companies Act 1985 of the United Kingdom. BMEL merupakan konversi dari Bank Exim cabang London</h2>
            </div>
        </div>
        <div class="card">
            <div class="background-image" style="background-color: #ADD8E6;"></div>
            <img class="background-icon" src="{{ asset('images/about/group1.png') }}" alt="Lets Connect">
            <span class="category">Bank Mandiri Europe</span>
            <div class="card-content">
                <h2>Bank Mandiri (Europe) Limited (BMEL) didirikan di London, Inggris pada tanggal 22 Juni 1999 berdasarkan
                    The Companies Act 1985 of the United Kingdom. BMEL merupakan konversi dari Bank Exim cabang London</h2>
            </div>
        </div>

        <div class="card">
            <div class="background-image" style="background-color: #ADD8E6;"></div>
            <img class="background-icon" src="{{ asset('images/about/group1.png') }}" alt="Lets Connect">
            <span class="category">Bank Mandiri Europe</span>
            <div class="card-content">
                <h2>Bank Mandiri (Europe) Limited (BMEL) didirikan di London, Inggris pada tanggal 22 Juni 1999 berdasarkan
                    The Companies Act 1985 of the United Kingdom. BMEL merupakan konversi dari Bank Exim cabang London</h2>
            </div>
        </div>
        <div class="card">
            <div class="background-image" style="background-color: #ADD8E6;"></div>
            <img class="background-icon" src="{{ asset('images/about/group1.png') }}" alt="Lets Connect">
            <span class="category">Bank Mandiri Europe</span>
            <div class="card-content">
                <h2>Bank Mandiri (Europe) Limited (BMEL) didirikan di London, Inggris pada tanggal 22 Juni 1999 berdasarkan
                    The Companies Act 1985 of the United Kingdom. BMEL merupakan konversi dari Bank Exim cabang London</h2>
            </div>
        </div>
        <div class="card">
            <div class="background-image" style="background-color: #ADD8E6;"></div>
            <img class="background-icon" src="{{ asset('images/about/group1.png') }}" alt="Lets Connect">
            <span class="category">Bank Mandiri Europe</span>
            <div class="card-content">
                <h2>Bank Mandiri (Europe) Limited (BMEL) didirikan di London, Inggris pada tanggal 22 Juni 1999 berdasarkan
                    The Companies Act 1985 of the United Kingdom. BMEL merupakan konversi dari Bank Exim cabang London</h2>
            </div>
        </div>

        {{-- Third Row --}}
        <div class="card">
            <div class="background-image" style="background-color: #ADD8E6;"></div>
            <img class="background-icon" src="{{ asset('images/about/group1.png') }}" alt="Lets Connect">
            <span class="category">Bank Mandiri Europe</span>
            <div class="card-content">
                <h2>Bank Mandiri (Europe) Limited (BMEL) didirikan di London, Inggris pada tanggal 22 Juni 1999 berdasarkan
                    The Companies Act 1985 of the United Kingdom. BMEL merupakan konversi dari Bank Exim cabang London</h2>
            </div>
        </div>

        <div class="card">
            <div class="background-image" style="background-color: #ADD8E6;"></div>
            <img class="background-icon" src="{{ asset('images/about/group1.png') }}" alt="Lets Connect">
            <span class="category">Bank Mandiri Europe</span>
            <div class="card-content">
                <h2>Bank Mandiri (Europe) Limited (BMEL) didirikan di London, Inggris pada tanggal 22 Juni 1999 berdasarkan
                    The Companies Act 1985 of the United Kingdom. BMEL merupakan konversi dari Bank Exim cabang London</h2>
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
@endsection
