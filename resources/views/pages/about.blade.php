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
            <h1 class="hero-main-text">{{ $hero->title }}</h1>
            <div class="center-search">
                <nav class="category-filters">
                    @foreach ($menuSubCategory as $menuSubCat)
                        <a href="#" class="filter-link {{ $loop->first ? 'active' : '' }}" data-filter="{{ Str::slug($menuSubCat->slug) }}">{{ $menuSubCat->name }}</a>
                    @endforeach
                </nav>
            </div>
        </div>
    </div>

    {{-- About MCI Section --}}
    <div class="about-full-section">
        {{-- Mission Statement --}}
        <div class="hero-mid-section">
            <h1 class="center-text">{!! $aboutMciHeadline->headline_text ?? 'MCI Connect Startups With Mandiri Group to Drive Rapid Innovation' !!}</h1>
        </div>

        {{-- Company Overview --}}
        <div class="counter-content">
            <div class="content-container">
                <div class="text-content">
                    {!! $mciintro->intro !!}
                </div>
            </div>

            {{-- Features Section --}}
            <div class="features-container">
                <h2 class="features-title">{!! $mciintro->headline !!}</h2>

                <div class="feature-items">

                        <div class="feature-item">
                            <div class="feature-icon">
                                <img src="{{ '/storage/' . $mciintro->icon_article1 }}"
                                    alt="">
                            </div>
                            <div class="feature-content">
                                <h3>{!! $mciintro->articletitle1 !!}</h3>
                                <p>{!! $mciintro->article1 !!}</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <div class="feature-icon">
                                <img src="{{ '/storage/' . $mciintro->icon_article2 }}"
                                    alt="">
                            </div>
                            <div class="feature-content">
                                <h3>{!!  $mciintro->articletitle2 !!}</h3>
                                <p>{!! $mciintro->article2 !!}</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <div class="feature-icon">
                                <img src="{{ '/storage/' . $mciintro->icon_article3 }}"
                                    alt="">
                            </div>
                            <div class="feature-content">
                                <h3>{!! $mciintro->articletitle3 !!}</h3>
                                <p>{!! $mciintro->article3 !!}</p>
                            </div>
                        </div>
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
            @foreach($ecosystemHeadline as $headline)
                <div class="card-ecosystem-highlight">
                    <div class="card-ecosystem-highlight-grid">
                        <img src="{{ '/storage/' .$headline->image_path }}" alt="{{ $headline->title }}"
                            class="card-ecosystem-image-highlight">
                        <div class="">
                            <div class="tag-container-highlight">
                                @if($headline->is_domestic)
                                <span class="tag tag-domestic">Domestik</span>
                                @endif
                                @if($headline->is_international)
                                <span class="tag tag-international">International</span>
                                @endif
                            </div>
                            <a href="#" class="text-decoration-none">
                                <span class="category-highlight">{{ $headline->title }}</span>
                                <div class="card-ecosystem-content-highlight">
                                    {{ $headline->content }}
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="mandiri-ecosystem-title">
            Mandiri Ecosystem
        </div>

        @foreach ($ecosystemListCategory as $index => $article)
        <div class="mandiri-team-group-title">
            {{ $article['name'] }}
        </div>
        <div class="ecosystem-grid">
            @foreach ($ecosystemList->where('about_ecosystem_category_id', $article['id']) as $subArticle)
                {{-- Card Content --}}
                <div class="card-ecosystem" data-hover-trigger>
                    <div class="background-image">
                        <img src="{{ '/storage/' . $subArticle->image_path }}" alt="{{ $subArticle->title }}"
                            class="card-ecosystem-image">
                        <div class="tag-container">
                            @if ($subArticle->is_domestic)
                                <span class="tag tag-domestic">Domestik</span>
                            @endif
                            @if ($subArticle->is_international)
                                <span class="tag tag-international">International</span>
                            @endif
                        </div>
                        <a href="#" class="text-decoration-none">
                            <span class="category">{{ $subArticle->title }}</span>
                            <div class="card-ecosystem-content">
                                {{ $subArticle->content }}
                            </div>
                        </a>
                    </div>
                    {{-- card content hover --}}
                    <div class="card-ecosystem-hover">
                        <div class="hover-content">
                            <img src="{{ '/storage/' . $subArticle->image_path }}" alt="{{ $subArticle->title }}"
                                class="hover-image">
                            <h2 class="hover-title">Here's what we seek for a synergy:</h2>

                            <h4 class="focus-areas-title">Focus Areas:</h4>
                            <p class="focus-description">{!! $subArticle->hover_focus_area !!}</p>

                            <div class="synergy-points">
                                <div class="synergy-point">
                                    {!! $subArticle->hover_content !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        @endforeach
    </div>

    {{-- Team Section --}}
    <div class="team-section">
        <div class="team-title-section">
            <div class="masonry-grid">
                <div class="grid-headline-title-card">
                    <h1 class="grid-headline-title">Meet the team making things happen at MCI</h1>
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
        @foreach ($aboutTeamCategory as $index => $article)
        <div class="mandiri-team-group-title">
            {{ $article['name'] }}
        </div>
        <div class="masonry-grid">
            @foreach ($teamMembers->where('about_team_category_id', $article['id']) as $subArticle)
                <div class="team-card">
                    <img class="background-image" src="{{ '/storage/' . $subArticle->image_path }}" alt="{{ $subArticle->name }}">
                    <div class="card-profile-photo">
                        <span class="team-name">{{ $subArticle->name }}</span>
                        <span class="team-title">{{ $subArticle->title }}</span>
                    </div>
                </div>
            @endforeach
        </div>
        @endforeach

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

{{--
    <script src="{{ asset('js/about-animation.js') }}"></script>
--}}
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
