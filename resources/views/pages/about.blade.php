@extends('layout.mainlayout')

@section('localcss')
    <link href="{{ asset('css/about.css') }}" rel="stylesheet">
@endsection

@section('container')
    <div class="hero-section">
        <video autoplay muted loop playsinline class="video-background">
            <source src="{{ '/storage/' . $hero->image_path }}" type="video/mp4">
        </video>

        <div class="hero-content">
            <a href="#">
                <h1 class="hero-main-text">OUR IDENTITY </h1>
            </a>
            <div class="center-search">
                <div class="category-filters">
                    <a href="#" class="filter-link active">About MCI</a>
                    <a href="#" class="filter-link">About Mandiri</a>
                    <a href="#" class="filter-link">Our Team</a>
                </div>
            </div>
        </div>
    </div>

    {{-- Content Section --}}
    <div class="about-full-section">
        <div class="hero-mid-section">
            <h1 class="center-text">MCI Connect Startups With Mandiri Group to Drive Rapid Innovation </h1>
        </div>


        {/* Counter Content Section */}
        <div class="counter-content">
            <div class="content-container">
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


        <div class="headline-section">
            <h1 class="headline-title ">OUR PRIORITY SECTOR </h1>

            <div class="headline-grid-four middle-animation">
                <div class="headline-card">
                    <img class="headline-image" src="{{ asset('images/about/sector.png') }}" alt="Headline Image" />
                    <h1>Software as a Service (SaaS)</h1>
                </div>

                <div class="headline-card middle-border">
                    <img class="headline-image" src="{{ asset('images/about/sector.png') }}" alt="Headline Image" />
                    <h1>Deep Tech</h1>

                </div>

                <div class="headline-card middle-border">
                    <img class="headline-image" src="{{ asset('images/about/sector.png') }}" alt="Headline Image" />
                    <h1>Fintech</h1>

                </div>

                <div class="headline-card left-border">
                    <img class="headline-image" src="{{ asset('images/about/sector.png') }}" alt="Headline Image" />
                    <h1>Value Chain</h1>

                </div>

            </div>
        </div>


    </div>

    <!-- MANDIRI SECTIION -->
    <div class="mandiri-section">
        <div class="ecosystem-grid">
        @foreach($ecosystemList as $ecosystem)
            <div class="card-ecosystem">
                <div class="background-image">
                    <img src="images/platform/funding1.png" alt="Media" class="card-ecosystem-image" />
                    <a href="#" class="text-decoration-none">
                        <span class="category">{{ $ecosystem->title }}</span>
                        <div class="card-ecosystem-content">
                            {{ $ecosystem->content }}
                        </div>
                    </a>
                </div>
            </div>
        @endforeach
        </div>
    </div>


    <!-- TEAM SECTIION -->
    <div class="team-section">
        <div class="team-title-section">
            <div class="masonry-grid">
                <div class="grid-headline-title-card">
                    <h1 class="grid-headline-title">Meet the amazing people behind MCI </h1>
                </div>
                <div class="grid-headline-description-card">
                    <h1 class="grid-headline-subtitle">Our team is packed with talent, creativity, and a whole lot of personality. We're a group of bright minds and big thinkers who love what we do—and have a great time doing it. From tackling challenges to coming up with fresh ideas, every team member brings something unique to the table. Together, we make work exciting, inspiring, and just a little more fun every day. Come get to know us!</h1>
                </div>
            </div>
        </div>
        <div class="masonry-grid">
            <div class="team-card">
                <img class="background-image" src="{{ asset('images/about/team1.png') }}"></img>
                <span class="team-name">Floyd Miles</span>
                <span class="team-title">CEO - Chief Executive Officer</span>

            </div>
            <div class="team-card">
                <img class="background-image" src="{{ asset('images/about/team1.png') }}"></img>
                <span class="team-name">Floyd Miles</span>
                <span class="team-title">CEO - Chief Executive Officer</span>

            </div>
            <div class="team-card">
                <img class="background-image" src="{{ asset('images/about/team1.png') }}"></img>
                <span class="team-name">Floyd Miles</span>
                <span class="team-title">CEO - Chief Executive Officer</span>

            </div>
            <div class="team-card">
                <img class="background-image" src="{{ asset('images/about/team1.png') }}"></img>
                <span class="team-name">Floyd Miles</span>
                <span class="team-title">CEO - Chief Executive Officer</span>

            </div>
            <div class="team-card">
                <img class="background-image" src="{{ asset('images/about/team1.png') }}"></img>
                <span class="team-name">Floyd Miles</span>
                <span class="team-title">CEO - Chief Executive Officer</span>

            </div>
        </div>
        <div class="team-image-containter">
            <img class="team-image-large" src="{{ asset('images/about/teamlarge.png') }}"></img>
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



@section('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const filterLinks = document.querySelectorAll('.filter-link');
            const masonry = document.querySelector('.masonry-grid');
            const newsletterSection = document.querySelector('.newsletter-section');
            const aboutFullSection = document.querySelector('.about-full-section');
            const mandiriSection = document.querySelector('.mandiri-section');
            const teamSection = document.querySelector('.team-section');

            // Initial states

            aboutFullSection.style.display = 'block';
            mandiriSection.style.display = 'none';
            teamSection.style.display = 'none';
            newsletterSection.style.display = 'block';


            const routePattern = masonry.dataset.routePattern;
            let currentFilter = 'all';

            filterLinks.forEach(link => {
                link.addEventListener('click', async function(e) {
                    e.preventDefault();

                    // Remove active class from all links
                    filterLinks.forEach(l => l.classList.remove('active'));

                    // Add active class to clicked link
                    this.classList.add('active');

                    // Get the filter value
                    currentFilter = this.textContent.toLowerCase();

                    try {
                        const response = await fetch(`/about/filter/${currentFilter}`, {
                            headers: {
                                'X-Requested-With': 'XMLHttpRequest'
                            }
                        });

                        if (!response.ok) throw new Error('Network response was not ok');

                        const posts = await response.json();
                        if (currentFilter === 'about mci') {
                            updateAbout(posts, currentFilter);
                        } else if (currentFilter === 'about mandiri') {
                            updateMandiri(posts, currentFilter);
                        } else if (currentFilter === 'our team') {
                            updateTeam(posts, currentFilter);
                        }
                    } catch (error) {
                        console.error('Error:', error);
                    }
                });
            });

            function updateAbout(posts, filter) {
                aboutFullSection.style.display = 'block';
                mandiriSection.style.display = 'none';
                teamSection.style.display = 'none';
                newsletterSection.style.display = 'block';
            }

            function updateMandiri(posts, filter) {
                aboutFullSection.style.display = 'none';
                mandiriSection.style.display = 'block';
                teamSection.style.display = 'none';
                newsletterSection.style.display = 'block';
            }

            function updateTeam(posts, filter) {
                aboutFullSection.style.display = 'none';
                mandiriSection.style.display = 'none';
                teamSection.style.display = 'block';
                newsletterSection.style.display = 'block';
            }
        });
    </script>

    <script src="{{ asset('js/about-animation.js') }}"></script>
@endsection
