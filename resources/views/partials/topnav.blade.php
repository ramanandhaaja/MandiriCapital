{{-- resources/views/partials/topnav.blade.php --}}
<header class="site-header">
    <nav class="nav-container">
        <div class="logo">
            <a href="{{ route('home') }}">
                <img src="{{ asset('images/logo.png') }}" alt="Mandiri Capital">
            </a>
        </div>

        {{-- Mobile Menu Button --}}
        <button id="menuToggle" class="menu-toggle" aria-label="Toggle Menu">
            <span></span>
            <span></span>
            <span></span>
        </button>

        {{-- Navigation Links Container --}}
        <div class="nav-content" id="navContent">
            <div class="nav-links">
                <a href="{{ route('about') }}" class="nav-item {{ Route::currentRouteName() == 'about' ? 'active' : '' }}">OUR IDENTITY</a>
                <a href="{{ route('portfolio') }}" class="nav-item {{ Route::currentRouteName() == 'portfolio' ? 'active' : '' }}">PORTFOLIO</a>
                <a href="{{ route('funding') }}" class="nav-item {{ Route::currentRouteName() == 'funding' ? 'active' : '' }}">PLATFORM</a>
                <a href="{{ route('media') }}" class="nav-item {{ in_array(Route::currentRouteName(), ['media', 'media.show']) ? 'active' : '' }}">MEDIA</a>
                <a href="{{ route('report') }}" class="nav-item {{ Route::currentRouteName() == 'report' ? 'active' : '' }}">PUBLICATION</a>
                <a href="{{ route('contact') }}" class="nav-item {{ Route::currentRouteName() == 'contact' ? 'active' : '' }}">CONTACT US</a>
            </div>

            <div class="nav-right">
                <button class="search-icon">
                    <i class="fas fa-search"></i>
                </button>
                <div class="language-selector">
                    <a href="#" class="lang-link active">EN</a>
                    <span class="lang-separator">|</span>
                    <a href="#" class="lang-link">ID</a>
                </div>
            </div>
        </div>
    </nav>
</header>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const menuToggle = document.getElementById('menuToggle');
    const navContent = document.getElementById('navContent');
    const body = document.body;

    menuToggle.addEventListener('click', function() {
        menuToggle.classList.toggle('active');
        navContent.classList.toggle('active');
        body.classList.toggle('menu-open');
    });

    // Close menu when clicking on a link
    const navLinks = document.querySelectorAll('.nav-item');
    navLinks.forEach(link => {
        link.addEventListener('click', () => {
            menuToggle.classList.remove('active');
            navContent.classList.remove('active');
            body.classList.remove('menu-open');
        });
    });

    // Close menu when clicking outside
    document.addEventListener('click', function(event) {
        if (!event.target.closest('.nav-container') && navContent.classList.contains('active')) {
            menuToggle.classList.remove('active');
            navContent.classList.remove('active');
            body.classList.remove('menu-open');
        }
    });
});
</script>
