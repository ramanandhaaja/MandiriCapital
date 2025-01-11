@extends('layout.mainlayout')
@use('Illuminate\Support\Facades\Storage')

@section('localcss')
    <link href="{{ asset('css/platform.css') }}" rel="stylesheet">
@endsection


@section('container')
    <div class="hero-section">
        <video autoplay muted loop playsinline class="video-background">
            <source src="{{ '/storage/' . $hero->image_path }}" type="video/mp4">
        </video>

        <div class="hero-content">
            <a href="#">
                <h1 class="hero-main-text">VALUE CREATION </h1>
            </a>
            <div class="center-search">
                <div class="category-filters">
                    <a href="#" class="filter-link active">Business Unit</a>
                    <a href="#" class="filter-link">Program</a>
                </div>
            </div>
        </div>

    </div>

    {{-- Article Grid Section --}}

    <div class="headline-section">
        <div class="hero-mid-section">
            <h1 class="center-text">A Chance To Collaborate With Bank Mandiri’s Business Units</h1>
        </div>
        <div class="headline-grid-four middle-animation">
            <div class="headline-card">
                <img class="headline-image" src="{{ asset('images/about/sector.png') }}" alt="Headline Image" />
                <h1>Software as a Service</h1>
                <p>Property tech startups that open to synergy in loan channeling</p>
            </div>

            <div class="headline-card middle-border">
                <img class="headline-image" src="{{ asset('images/about/sector.png') }}" alt="Headline Image" />
                <h1>Deep Tech</h1>
                <p>Startups that can support business function in payment related, such as payment gateway, cash collection, customer loyalty and rewards</p>

            </div>

            <div class="headline-card middle-border">
                <img class="headline-image" src="{{ asset('images/about/sector.png') }}" alt="Headline Image" />
                <h1>Fintech</h1>
                <p>Startups that can support business function in payment related, such as payment gateway, cash collection, customer loyalty and rewards</p>

            </div>

            <div class="headline-card left-border">
                <img class="headline-image" src="{{ asset('images/about/sector.png') }}" alt="Headline Image" />
                <h1>Value Chain</h1>
                <p>Startups that can support business function in payment related, such as payment gateway, cash collection, customer loyalty and rewards</p>

            </div>

            <div class="headline-card">
                <img class="headline-image" src="{{ asset('images/about/sector.png') }}" alt="Headline Image" />
                <h1>Software as a Service</h1>
                <p>Startups that can support business function in payment related, such as payment gateway, cash collection, customer loyalty and rewards</p>

            </div>

            <div class="headline-card middle-border">
                <img class="headline-image" src="{{ asset('images/about/sector.png') }}" alt="Headline Image" />
                <h1>Deep Tech</h1>
                <p>Startups that can support business function in payment related, such as payment gateway, cash collection, customer loyalty and rewards</p>


            </div>

            <div class="headline-card middle-border">
                <img class="headline-image" src="{{ asset('images/about/sector.png') }}" alt="Headline Image" />
                <h1>Fintech</h1>
                <p>Startups that can support business function in payment related, such as payment gateway, cash collection, customer loyalty and rewards</p>


            </div>

            <div class="headline-card left-border">
                <img class="headline-image" src="{{ asset('images/about/sector.png') }}" alt="Headline Image" />
                <h1>Value Chain</h1>
                <p>Startups that can support business function in payment related, such as payment gateway, cash collection, customer loyalty and rewards</p>


            </div>

        </div>
    </div>




    <!-- SYNERGY SECTION -->

    <section class="synergy-section">
        <div class="hero-mid-section">
            <h1 class="center-text">Our value creation program</h1>
        </div>
        <div class="synergy-container">
            <div class="synergy-grid">
                <!-- Map Column -->
                <div class="synergy-iframe-container">
                    <img src="/images/platform/synergy1.png" alt="Send" class="synergy-iframe">
                    <img src="/images/platform/synergy1.gif" alt="Send" class="synergy-iframe-gif">
                </div>
                <!-- Content Column -->
                <div class="synergy-content">
                    <h2 class="synergy-title">
                        Connecting Startups Discover What's Possible
                    </h2>

                    <div class="synergy-info">
                        <p> cXponent merupakan program dari Mandiri Capital Indonesia (MCI) yang mendorong sinergi antara
                            unit bisnis di Mandiri Group dengan perusahaan rintisan (startup).</p>
                        <p> Melalui sinergi, ditemukan peluang untuk meningkatkan pertumbuhan yang berkelanjutan dan nilai
                            sinergi yang baik. </p>
                        <p>
                            Xponent menawarkan platform yang ideal bagi para startup untuk menjalin kemitraan yang inovatif
                            dan mendorong terobosan di sektor industri, sehingga dapat membuka jalan menuju hari esok yang
                            lebih cerah. </p>
                    </div>

                    <div class="synergy-number">
                        <div class="number-item">
                            <div class="number-label">MOU PKS</div>
                            <div class="number-value">00</div>
                        </div>
                        <div class="number-item">
                            <div class="number-label">Synergy Volume</div>
                            <div class="number-value">00</div>
                        </div>
                        <div class="number-item">
                            <div class="number-label">Success Story</div>
                            <div class="number-value">00</div>
                        </div>
                    </div>

                    <div class="synergy-register">
                        <a href="#" class="register-btn btn-detail">View Detail</a>
                        <a href="#" class="register-btn btn-register">Register Now</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="synergy-container dark">
            <div class="synergy-grid">

                <div class="synergy-content">
                    <h2 class="synergy-title">
                        Connecting Startups Discover What's Possible
                    </h2>

                    <div class="synergy-info">
                        <p> cXponent merupakan program dari Mandiri Capital Indonesia (MCI) yang mendorong sinergi antara
                            unit bisnis di Mandiri Group dengan perusahaan rintisan (startup).</p>
                        <p> Melalui sinergi, ditemukan peluang untuk meningkatkan pertumbuhan yang berkelanjutan dan nilai
                            sinergi yang baik. </p>
                        <p>
                            Xponent menawarkan platform yang ideal bagi para startup untuk menjalin kemitraan yang inovatif
                            dan mendorong terobosan di sektor industri, sehingga dapat membuka jalan menuju hari esok yang
                            lebih cerah. </p>
                    </div>

                    <div class="synergy-number">
                        <div class="number-item">
                            <div class="number-label">MOU PKS</div>
                            <div class="number-value">00</div>
                        </div>
                        <div class="number-item">
                            <div class="number-label">Synergy Volume</div>
                            <div class="number-value">00</div>
                        </div>
                        <div class="number-item">
                            <div class="number-label">Success Story</div>
                            <div class="number-value">00</div>
                        </div>
                    </div>
                </div>
                <div class="synergy-iframe-container">
                    <img src="/images/platform/synergy2.png" alt="Send" class="synergy-iframe right">
                    <img src="/images/platform/synergy2.gif" alt="Send" class="synergy-iframe-gif right">
                </div>
            </div>
        </div>
        <div class="synergy-container">
            <div class="synergy-grid">
                <div class="synergy-iframe-container">
                    <img src="/images/platform/synergy3.png" alt="Send" class="synergy-iframe">
                    <img src="/images/platform/synergy3.gif" alt="Send" class="synergy-iframe-gif">
                </div>


                <div class="synergy-content">
                    <h2 class="synergy-title">
                        Connecting Startups Discover What's Possible
                    </h2>

                    <div class="synergy-info">
                        <p> cXponent merupakan program dari Mandiri Capital Indonesia (MCI) yang mendorong sinergi antara
                            unit bisnis di Mandiri Group dengan perusahaan rintisan (startup).</p>
                        <p> Melalui sinergi, ditemukan peluang untuk meningkatkan pertumbuhan yang berkelanjutan dan nilai
                            sinergi yang baik. </p>
                        <p>
                            Xponent menawarkan platform yang ideal bagi para startup untuk menjalin kemitraan yang inovatif
                            dan mendorong terobosan di sektor industri, sehingga dapat membuka jalan menuju hari esok yang
                            lebih cerah. </p>
                    </div>

                    <div class="synergy-number">
                        <div class="number-item">
                            <div class="number-label">MOU PKS</div>
                            <div class="number-value">00</div>
                        </div>
                        <div class="number-item">
                            <div class="number-label">Synergy Volume</div>
                            <div class="number-value">00</div>
                        </div>
                        <div class="number-item">
                            <div class="number-label">Success Story</div>
                            <div class="number-value">00</div>
                        </div>
                    </div>

                    <div class="synergy-register">
                        <a href="#" class="register-btn btn-detail">View Detail</a>
                        <a href="#" class="register-btn btn-register">Register Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Newsletter Section -->
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
            const headlineSection = document.querySelector('.headline-section');
            const synergySection = document.querySelector('.synergy-section');
            const newsletterSection = document.querySelector('.newsletter-section');

            // Initial states
            headlineSection.style.display = 'block';
            synergySection.style.display = 'none';
            newsletterSection.style.display = 'block';

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
                        const response = await fetch(`/platform/filter/${currentFilter}`, {
                            headers: {
                                'X-Requested-With': 'XMLHttpRequest'
                            }
                        });

                        if (!response.ok) throw new Error('Network response was not ok');

                        const posts = await response.json();
                        if (currentFilter === 'business unit') {
                            updateBusinessUnit(posts, currentFilter);
                        } else {
                            updateSynergy(posts, currentFilter);
                        }
                    } catch (error) {
                        console.error('Error:', error);
                    }
                });
            });

            function updateBusinessUnit(posts, filter) {
                headlineSection.style.display = 'block';
                synergySection.style.display = 'none';
                newsletterSection.style.display = 'block';
            }

            function updateSynergy(posts, filter) {
                headlineSection.style.display = 'none';
                synergySection.style.display = 'block';
                newsletterSection.style.display = 'block';
            }

        });
    </script>
@endsection
