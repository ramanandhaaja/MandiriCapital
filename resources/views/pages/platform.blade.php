@extends('layout.mainlayout')
@use('Illuminate\Support\Facades\Storage')

@section('localcss')
    <link href="{{ asset('css/platform.css') }}" rel="stylesheet">
@endsection


@section('container')
    <div class="hero-section">
        <video autoplay muted loop playsinline class="video-background">
            <source src="{{ asset('images/platform/platform.mp4') }}" type="video/mp4">
        </video>

        <div class="hero-content">
            <a href="#">
                <img src="{{ asset('images/platform/platform.png') }}" alt="Media" class="center-image">
            </a>
            <div class="center-search">
                <div class="category-filters">
                    <a href="#" class="filter-link active">Funding</a>
                    <a href="#" class="filter-link">Ecosystem</a>
                    <a href="#" class="filter-link">Synergy Program</a>
                </div>
            </div>
        </div>

    </div>

    {{-- Article Grid Section --}}

    <div class="masonry-grid" data-route-pattern="{{ route('media.show', ':slug') }}">
        {{-- First Row --}}

        <div class="card">
            <div class="card-title">
                Mandiri Corporate VC
            </div>
        </div>

        <div class="card">
            <div class="background-image">
                <img src="{{ asset('images/platform/funding1.png') }}" alt="Media" class="card-image" />
                <a href="#" class="text-decoration-none">
                    <span class="category">Balance Sheet Fund</span>
                    <div class="card-content">
                        Berfokus untuk memberikan investasi kepada technology companies “growth startup” yang memiliki
                        potensi kolaborasi dengan ekosistem Mandiri Group
                    </div>
                    <span class="date">Fund Report >></span>
                </a>
            </div>
        </div>

        {{-- Second Row --}}
        <div class="card">
        </div>

        <div class="card">
            <div class="card-title">
                Dana Ventura MCI
            </div>
        </div>

        <div class="card">
            <div class="background-image">
                <img src="{{ asset('images/platform/funding2.png') }}" alt="Media" class="card-image" />

                <a href="#" class="text-decoration-none">
                    <span class="category">Balance Sheet Fund</span>
                    <div class="card-content">
                        Berfokus untuk memberikan investasi kepada technology companies “growth startup” yang memiliki
                        potensi kolaborasi dengan ekosistem Mandiri Group
                    </div>
                    <span class="date">Fund Report >></span>
                </a>
            </div>
        </div>
        <div class="card">
            <div class="background-image">
                <img src="{{ asset('images/platform/funding3.png') }}" alt="Media" class="card-image" />

                <a href="#" class="text-decoration-none">
                    <span class="category">Balance Sheet Fund</span>
                    <div class="card-content">
                        Berfokus untuk memberikan investasi kepada technology companies “growth startup” yang memiliki
                        potensi kolaborasi dengan ekosistem Mandiri Group
                    </div>
                    <span class="date">Fund Report >></span>
                </a>
            </div>
        </div>
    </div>


    <!-- SYNERGY SECTION -->

    <section class="synergy-section">
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
                </div>
                <div class="synergy-iframe-container">
                    <img src="/images/platform/synergy2.png" alt="Send" class="synergy-iframe right">
                    <img src="/images/platform/synergy2.gif" alt="Send" class="synergy-iframe-gif right">
                </div>
            </div>
        </div>
        <div class="synergy-container">
            <div class="synergy-grid">
                <!-- Map Column -->
                <div class="synergy-iframe-container">
                    <img src="/images/platform/synergy3.png" alt="Send" class="synergy-iframe">
                    <img src="/images/platform/synergy3.gif" alt="Send" class="synergy-iframe-gif">
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
    </section>

    <!-- Download Section -->
    <div class="download-section">
        <div class="download-container">
            <!-- Left Column -->
            <div class="download-left">
                <h2 class="download-title">Send Your Business Proposal</h2>
                <p> We are happy to discuss your business situation, please contact. </p>
            </div>

            <!-- Right Column -->
            <div class="download-right">
                <form method="POST" class="download-form">
                    @csrf
                    <div class="form-row">
                        <div class="form-group">
                            <label for="name">Company Name</label>
                            <input type="text" id="name" name="name" placeholder="Write here..." required>
                        </div>

                        <div class="form-group">
                            <label for="company_name">Website</label>
                            <input type="text" id="company_name" name="company_name" placeholder="Write here..."
                                required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="business_description">Business Description</label>
                        <textarea id="business_description" name="business_description" placeholder="Write here..." required></textarea>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="name">Phone Number</label>
                            <input type="text" id="name" name="name" placeholder="Write here..." required>
                        </div>

                        <div class="form-group">
                            <label for="company_name">Company Email</label>
                            <input type="text" id="company_name" name="company_name" placeholder="Write here..."
                                required>
                        </div>
                    </div>

                    <div class="form-actions">
                        <img src="{{ asset('images/platform/send.png') }}" alt="Download" class="send-btn">
                    </div>
                </form>
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

@section('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const filterLinks = document.querySelectorAll('.filter-link');
            const masonry = document.querySelector('.masonry-grid');
            const newsletterSection = document.querySelector('.newsletter-section');
            const downloadSection = document.querySelector('.download-section');
            const synergySection = document.querySelector('.synergy-section');

            // Initial states
            newsletterSection.style.display = 'none';
            downloadSection.style.display = 'block';
            synergySection.style.display = 'none'; // Hide synergy section by default


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
                        const response = await fetch(`/platform/filter/${currentFilter}`, {
                            headers: {
                                'X-Requested-With': 'XMLHttpRequest'
                            }
                        });

                        if (!response.ok) throw new Error('Network response was not ok');

                        const posts = await response.json();
                        if (currentFilter === 'funding') {
                            updateFunding(posts, currentFilter);
                        } else if (currentFilter === 'ecosystem') {
                            updateEcosystem(posts, currentFilter);
                        } else {
                            updateSynergy(posts, currentFilter);
                        }
                    } catch (error) {
                        console.error('Error:', error);
                    }
                });
            });

            function updateFunding(posts, filter) {
                newsletterSection.style.display = 'none';
                downloadSection.style.display = 'block'; // Show download section for funding
                synergySection.style.display = 'none';

                const postsHtml = `
                    <div class="card">
                        <div class="card-title">
                            Mandiri Corporate VC
                        </div>
                    </div>

                    <div class="card">
                        <div class="background-image">
                            <img src="{{ asset('images/platform/funding1.png') }}" alt="Media" class="card-image" />
                            <a href="#" class="text-decoration-none">
                                <span class="category">Balance Sheet Fund</span>
                                <div class="card-content">
                                    Berfokus untuk memberikan investasi kepada technology companies "growth startup" yang memiliki
                                    potensi kolaborasi dengan ekosistem Mandiri Group
                                </div>
                                <span class="date">Fund Report >></span>
                            </a>
                        </div>
                    </div>

                    <div class="card">
                    </div>

                    <div class="card">
                        <div class="card-title">
                            Dana Ventura MCI
                        </div>
                    </div>

                    <div class="card">
                        <div class="background-image">
                            <img src="{{ asset('images/platform/funding2.png') }}" alt="Media" class="card-image" />
                            <a href="#" class="text-decoration-none">
                                <span class="category">Balance Sheet Fund</span>
                                <div class="card-content">
                                    Berfokus untuk memberikan investasi kepada technology companies "growth startup" yang memiliki
                                    potensi kolaborasi dengan ekosistem Mandiri Group
                                </div>
                                <span class="date">Fund Report >></span>
                            </a>
                        </div>
                    </div>

                    <div class="card">
                        <div class="background-image">
                            <img src="{{ asset('images/platform/funding3.png') }}" alt="Media" class="card-image" />
                            <a href="#" class="text-decoration-none">
                                <span class="category">Balance Sheet Fund</span>
                                <div class="card-content">
                                    Berfokus untuk memberikan investasi kepada technology companies "growth startup" yang memiliki
                                    potensi kolaborasi dengan ekosistem Mandiri Group
                                </div>
                                <span class="date">Fund Report >></span>
                            </a>
                        </div>
                    </div>
                `;

                masonry.innerHTML = postsHtml;
            }

            function updateEcosystem(posts, filter) {
                newsletterSection.style.display = 'block';
                downloadSection.style.display = 'none'; // Hide download section for ecosystem
                synergySection.style.display = 'none';

                const postsHtml = posts.map((post, index) => {
                    const postUrl = routePattern.replace(':slug', post.slug);
                    const imageUrl = 'images/platform/funding1.png';
                    return `
                        <div class="card">
                            <div class="background-image">
                                <img src="{{ asset('${imageUrl}') }}" alt="Media" class="card-image" />
                                <a href="#" class="text-decoration-none">
                                    <span class="category">${post.title}</span>
                                    <div class="card-content">
                                        ${post.content}
                                    </div>
                                </a>
                            </div>
                        </div>
                    `;
                }).join('');

                masonry.innerHTML = postsHtml;
            }

            function updateSynergy(posts, filter) {
                newsletterSection.style.display = 'none';
                downloadSection.style.display = 'block'; // Hide download section for ecosystem
                synergySection.style.display = 'flex';

                const postsHtml = posts.map((post, index) => {
                    const postUrl = routePattern.replace(':slug', post.slug);
                    const imageUrl = 'images/platform/funding1.png';
                    return `
                        <div class="card">
                            <div class="background-image">
                                <img src="{{ asset('${imageUrl}') }}" alt="Media" class="card-image" />
                                <a href="#" class="text-decoration-none">
                                    <span class="category">${post.title}</span>
                                    <div class="card-content">
                                        ${post.content}
                                    </div>
                                </a>
                            </div>
                        </div>
                    `;
                }).join('');

                masonry.innerHTML = postsHtml;
            }

        });
    </script>
@endsection
