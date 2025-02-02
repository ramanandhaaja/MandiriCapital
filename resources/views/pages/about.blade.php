@extends('layout.mainlayout')

@section('localcss')
    <link href="{{ asset('css/about.css') }}" rel="stylesheet">
@endsection

@section('container')
    {{-- Hero Section --}}
    <div class="hero-section">
        <video autoplay muted loop playsinline class="video-background">
            <source src="{{ '/storage/' . $hero->image_path }}" type="video/mp4">
        </video>

        <div class="hero-content">
            <h1 class="hero-main-text">OUR IDENTITY</h1>
            <div class="center-search">
                <nav class="category-filters">
                    <a href="#" class="filter-link active" data-filter="about-mci">About MCI</a>
                    <a href="#" class="filter-link" data-filter="about-mandiri">About Mandiri</a>
                    <a href="#" class="filter-link" data-filter="our-team">Our Team</a>
                </nav>
            </div>
        </div>
    </div>

    {{-- About MCI Section --}}
    <div class="about-full-section">
        {{-- Mission Statement --}}
        <div class="hero-mid-section">
            <h1 class="center-text">MCI Connect Startups With Mandiri Group to Drive Rapid Innovation</h1>
        </div>

        {{-- Company Overview --}}
        <div class="counter-content">
            <div class="content-container">
                <div class="text-content">

                    <p>At Mandiri Capital Indonesia (MCI), we’re not just a venture capital firm—we’re catalysts for rapid
                        innovation and sustainable growth. As the corporate venture capital arm of Bank Mandiri, we drive
                        transformative change by forging synergies across a dynamic ecosystem, empowering startups to scale,
                        and fostering impactful collaborations that fuel progress.</p>

                    <p>With a diverse portfolio of 23 startups and access to strategic funds such as the Balance Sheet Fund,
                        Indonesia Impact Fund, and Merah Putih Fund, MCI is leading the charge in shaping Indonesia's
                        digital innovation landscape.</p>

                    <p>Established in 2015 as the venture capital arm of PT Bank Mandiri (Persero) Tbk, MCI’s core mission
                        has always been to unlock synergies that accelerate innovation. We don’t just envision growth; we
                        make it happen—building a future of opportunity, resilience, and long-term success for both startups
                        and Indonesia's economy.</p>
                </div>
            </div>

            {{-- Features Section --}}
            <div class="features-container">
                <h2 class="features-title">Unlocking Startups'<br>Best Potential</h2>

                <div class="feature-items">
                    @php
                        $features = [
                            [
                                'icon' => 'icon1.png',
                                'title' => 'Building Synergy with Mandiri Ecosystem',
                                'description' => 'Empowering startups through strategic collaborations and resources.',
                            ],
                            [
                                'icon' => 'icon2.png',
                                'title' => 'Nurturing Startup Fundamentals',
                                'description' => 'Strengthening growth with expert mentorship and guidance.',
                            ],
                            [
                                'icon' => 'icon3.png',
                                'title' => 'ESG Initiative',
                                'description' => 'Promoting sustainable growth through responsible business practices.',
                            ],
                        ];
                    @endphp

                    @foreach ($features as $feature)
                        <div class="feature-item">
                            <div class="feature-icon">
                                <img src="{{ asset('images/about/' . $feature['icon']) }}"
                                    alt="{{ $feature['title'] }} Icon">
                            </div>
                            <div class="feature-content">
                                <h3>{{ $feature['title'] }}</h3>
                                <p>{{ $feature['description'] }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        {{-- Priority Sectors --}}
        <div class="headline-section">
            <h1 class="headline-title">VALUES WE UPHOLD</h1>
            <div class="headline-grid-four middle-animation">
                @foreach ($prioritySectors as $index => $sector)
                    <div class="headline-card {{ $index > 0 ? ($index === 3 ? 'left-border' : 'middle-border') : '' }}">
                        <img class="headline-image" src="{{ '/storage/' . $sector->image_path }}"
                            alt="{{ $sector->title }}">
                        <h1>{{ $sector->title }}</h1>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="newsletter-section">
            <div class="newsletter-container">
                <h2 class="newsletter-title">Need Help? Contact Us!</h2>
                <a href="{{ route('contact') }}" class="newsletter-link">
                    <img src="{{ asset('images/portfolio/letsconnect.png') }}" alt="Let's Connect"
                        class="button-image center-image-newsletter">
                </a>
            </div>
        </div>
    </div>

    {{-- Mandiri Section --}}
    <div class="mandiri-section">
        <div class="ecosystem-grid">
            <div class="card-ecosystem-highlight">
                <div class="card-ecosystem-highlight-grid">
                    <img src="{{ asset('images/about/mandirilogobig.png') }}" alt=""
                        class="card-ecosystem-image-highlight">
                    <div class="">
                        <div class="tag-container-highlight">
                            <span class="tag tag-domestic">Domestik</span>
                            <span class="tag tag-international">International</span>
                        </div>
                        <a href="#" class="text-decoration-none">
                            <span class="category-highlight">The Biggest Conglomerate with Various Subsidiaries.</span>
                            <div class="card-ecosystem-content-highlight">
                                Mandiri’s total asset amount to Rp. 2.258 Tn a of Q1 2024, Mandiri has 42+ Mn retail
                                customers and 200k+ SMEs, 137 Branch offices, 12k+ ATM, 7 overseas branch offices which
                                includes Singapore, Hong Kong, Shanghai, Cayman Islands, Dili, London, and Malaysia.
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="mandiri-ecosystem-title">
            Mandiri Ecosystem
        </div>
        <div class="ecosystem-grid">
            @foreach ($ecosystemList as $ecosystem)
                {{-- Card Content --}}
                <div class="card-ecosystem" data-hover-trigger>
                    <div class="background-image">
                        <img src="{{ '/storage/' . $ecosystem->image_path }}" alt="{{ $ecosystem->title }}"
                            class="card-ecosystem-image">
                        <div class="tag-container">
                            @if ($ecosystem->is_domestic)
                                <span class="tag tag-domestic">Domestik</span>
                            @endif
                            @if ($ecosystem->is_international)
                                <span class="tag tag-international">International</span>
                            @endif
                        </div>
                        <a href="#" class="text-decoration-none">
                            <span class="category">{{ $ecosystem->title }}</span>
                            <div class="card-ecosystem-content">
                                {{ $ecosystem->content }}
                            </div>
                        </a>
                    </div>
                    {{-- card content hover --}}
                    <div class="card-ecosystem-hover">
                        <div class="hover-content">
                            <img src="{{ '/storage/' . $ecosystem->image_path }}" alt="{{ $ecosystem->title }}"
                                class="hover-image">
                            <h2 class="hover-title">Here's what we seek for a synergy:</h2>

                            <h4 class="focus-areas-title">Focus Areas:</h4>
                            <p class="focus-description">{!! $ecosystem->hover_focus_area !!}</p>

                            <div class="synergy-points">

                                <div class="synergy-point">
                                    {!! $ecosystem->hover_content !!}
                                </div>

                            </div>
                        </div>
                    </div>


                </div>
            @endforeach
        </div>


    </div>

    {{-- Team Section --}}
    <div class="team-section">
        <div class="team-title-section">
            <div class="masonry-grid">
                <div class="grid-headline-title-card">
                    <h1 class="grid-headline-title">Meet the amazing people behind MCI</h1>
                </div>
                <div class="grid-headline-description-card">
                    <h1 class="grid-headline-subtitle">
                        Our team is packed with talent, creativity, and a whole lot of personality.
                        We're a group of bright minds and big thinkers who love what we do—and have
                        a great time doing it. From tackling challenges to coming up with fresh ideas,
                        every team member brings something unique to the table. Together, we make work
                        exciting, inspiring, and just a little more fun every day. Come get to know us!
                    </h1>
                </div>
            </div>
        </div>

        @foreach ($teamMembers as $jobGroup => $members)
        <div class="mandiri-team-group-title">
            {{ $jobGroup }}
        </div>
        <div class="masonry-grid">
            @foreach ($members as $member)
                <div class="team-card">
                    <img class="background-image" src="{{ '/storage/' . $member->image_path }}" alt="{{ $member->name }}">
                    <div class="card-profile-photo">
                        <span class="team-name">{{ $member->name }}</span>
                        <span class="team-title">{{ $member->title }}</span>
                    </div>
                </div>
            @endforeach
        </div>
        @endforeach

        {{--
        <div class="team-image-containter">
            <img class="team-image-large" src="{{ asset('images/about/teamlarge.png') }}" alt="Team Photo">
        </div>
        --}}

        {{-- Newsletter Section --}}
        <div class="newsletter-section">
            <div class="newsletter-container">
                <h2 class="newsletter-title">TALK TO US</h2>
                <a href="{{ route('contact') }}" class="newsletter-link">
                    <img src="{{ asset('images/portfolio/letsconnect.png') }}" alt="Let's Connect"
                        class="button-image center-image-newsletter">
                </a>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Cache DOM elements
            const elements = {
                filterLinks: document.querySelectorAll('.filter-link'),
                masonry: document.querySelector('.masonry-grid'),
                sections: {
                    about: document.querySelector('.about-full-section'),
                    mandiri: document.querySelector('.mandiri-section'),
                    team: document.querySelector('.team-section'),
                    newsletter: document.querySelector('.newsletter-section')
                }
            };

            // Initialize section visibility
            function initializeSections() {
                elements.sections.about.style.display = 'block';
                elements.sections.mandiri.style.display = 'none';
                elements.sections.team.style.display = 'none';
                elements.sections.newsletter.style.display = 'block';
            }

            // Update section visibility based on filter
            function updateSectionVisibility(filter) {
                const sectionMap = {
                    'about-mci': {
                        about: true,
                        mandiri: false,
                        team: false
                    },
                    'about-mandiri': {
                        about: false,
                        mandiri: true,
                        team: false
                    },
                    'our-team': {
                        about: false,
                        mandiri: false,
                        team: true
                    }
                };

                const visibility = sectionMap[filter] || sectionMap['about-mci'];

                Object.entries(elements.sections).forEach(([key, section]) => {
                    if (key !== 'newsletter') {
                        if (section) {
                            section.style.display = visibility[key] ? 'block' : 'none';
                        }
                    }
                });
            }

            // Handle filter click events
            function handleFilterClick(e) {
                e.preventDefault();

                // Update active state
                elements.filterLinks.forEach(link => link.classList.remove('active'));
                e.target.classList.add('active');

                // Get filter value from data attribute
                const filter = e.target.dataset.filter;

                // Update UI immediately
                updateSectionVisibility(filter);
            }

            // Initialize and add event listeners
            initializeSections();
            elements.filterLinks.forEach(link => {
                link.addEventListener('click', handleFilterClick);
            });
        });
    </script>

    <script src="{{ asset('js/about-animation.js') }}"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const cards = document.querySelectorAll('.card-ecosystem');

            cards.forEach(card => {
                const hoverCard = card.querySelector('.card-ecosystem-hover');
                let isHovering = false;

                document.addEventListener('mousemove', function(e) {
                    if (isHovering) {
                        const mouseX = e.clientX;
                        const mouseY = e.clientY;

                        hoverCard.style.left = `${mouseX}px`;
                        hoverCard.style.top = `${mouseY}px`;
                        hoverCard.style.transform = 'translate(20px, 20px)';
                    }
                });

                card.addEventListener('mouseenter', function() {
                    isHovering = true;
                    hoverCard.classList.add('active');
                });

                card.addEventListener('mouseleave', function() {
                    isHovering = false;
                    hoverCard.classList.remove('active');
                });
            });
        });
    </script>
@endsection
