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

        <div class="card"
            style="background-image: url('{{ $posts[0]->featured_image ? Storage::url($posts[0]->featured_image) : asset('images/media/image1.png') }}');">
            <a href="{{ route('media.show', $posts[0]->slug) }}" class="text-decoration-none">
                <span class="category">{{ $posts[0]->tags->first()->name }}</span>
                <div class="card-content">
                    <h2>{{ $posts[0]->title }}</h2>
                </div>
                <span class="date">{{ \Carbon\Carbon::parse($posts[0]->published_at)->format('F Y') }}</span>
            </a>
        </div>

        <div class="card"
            style="background-image: url('{{ $posts[1]->featured_image ? Storage::url($posts[1]->featured_image) : asset('images/media/image2.png') }}');">
            <a href="{{ route('media.show', $posts[1]->slug) }}" class="text-decoration-none">
                <span class="category">{{ $posts[1]->tags->first()->name }}</span>
                <div class="card-content">
                    <h2>{{ $posts[1]->title }}</h2>
                </div>
                <span class="date">{{ \Carbon\Carbon::parse($posts[1]->published_at)->format('F Y') }}</span>
            </a>
        </div>

        {{-- Second Row --}}
        <div class="card"
            style="background-image: url('{{ $posts[2]->featured_image ? Storage::url($posts[2]->featured_image) : asset('images/media/image3.png') }}');">
            <a href="{{ route('media.show', $posts[2]->slug) }}" class="text-decoration-none">
                <span class="category">{{ $posts[2]->tags->first()->name }}</span>
                <div class="card-content">
                    <h2>{{ $posts[2]->title }}</h2>
                </div>
                <span class="date">{{ \Carbon\Carbon::parse($posts[2]->published_at)->format('F Y') }}</span>
            </a>
        </div>

        <div class="card"
            style="background-image: url('{{ $posts[3]->featured_image ? Storage::url($posts[3]->featured_image) : asset('images/media/image4.png') }}');">
            <a href="{{ route('media.show', $posts[3]->slug) }}" class="text-decoration-none">
                <span class="category">{{ $posts[3]->tags->first()->name }}</span>
                <div class="card-content">
                    <h2>{{ $posts[3]->title }}</h2>
                </div>
                <span class="date">{{ \Carbon\Carbon::parse($posts[3]->published_at)->format('F Y') }}</span>
            </a>
        </div>

        <div class="card"
            style="background-image: url('{{ $posts[4]->featured_image ? Storage::url($posts[4]->featured_image) : asset('images/media/image5.png') }}');">
            <a href="{{ route('media.show', $posts[4]->slug) }}" class="text-decoration-none">
                <span class="category">{{ $posts[4]->tags->first()->name }}</span>
                <div class="card-content">
                    <h2>{{ $posts[4]->title }}</h2>
                </div>
                <span class="date">{{ \Carbon\Carbon::parse($posts[4]->published_at)->format('F Y') }}</span>
            </a>
        </div>

        {{-- Third Row --}}
        <div class="card"
            style="background-image: url('{{ $posts[5]->featured_image ? Storage::url($posts[5]->featured_image) : asset('images/media/image6.png') }}');">
            <a href="{{ route('media.show', $posts[5]->slug) }}" class="text-decoration-none">
                <span class="category">{{ $posts[5]->tags->first()->name }}</span>
                <div class="card-content">
                    <h2>{{ $posts[5]->title }}</h2>
                </div>
                <span class="date">{{ \Carbon\Carbon::parse($posts[5]->published_at)->format('F Y') }}</span>
            </a>
        </div>

        <div class="card"
            style="background-image: url('{{ $posts[6]->featured_image ? Storage::url($posts[6]->featured_image) : asset('images/media/image7.png') }}');">
            <a href="{{ route('media.show', $posts[6]->slug) }}" class="text-decoration-none">
                <span class="category">{{ $posts[6]->tags->first()->name }}</span>
                <div class="card-content">
                    <h2>{{ $posts[6]->title }}</h2>
                </div>
                <span class="date">{{ \Carbon\Carbon::parse($posts[6]->published_at)->format('F Y') }}</span>
            </a>
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
                        const response = await fetch(`/media/filter/${currentFilter}`, {
                            headers: {
                                'X-Requested-With': 'XMLHttpRequest'
                            }
                        });

                        if (!response.ok) throw new Error('Network response was not ok');

                        const posts = await response.json();
                        updatePosts(posts, currentFilter);
                    } catch (error) {
                        console.error('Error:', error);
                    }
                });
            });

            function updatePosts(posts, filter) {
                const postsHtml = posts.map((post, index) => {
                    const postUrl = routePattern.replace(':slug', post.slug);
                    const imageUrl = post.featured_image ? '/storage/' + post.featured_image : '/images/media/image' + (index + 1) + '.png';
                    return `
                        <div class="card" style="background-image: url('${imageUrl}');">
                            <a href="${postUrl}" class="text-decoration-none">
                                <span class="category">${post.tags[0]?.name || ''}</span>
                                <div class="card-content">
                                    <h2>${post.title}</h2>
                                </div>
                                <span class="date">${new Date(post.published_at).toLocaleDateString('en-US', { month: 'long', year: 'numeric' })}</span>
                            </a>
                        </div>
                    `;
                }).join('');

                masonry.innerHTML = postsHtml;
            }
        });
    </script>
@endsection