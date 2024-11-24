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
                <a href="{{ route('about') }}" class="nav-item {{ Route::currentRouteName() == 'about' ? 'active' : '' }}">ABOUT MCI</a>
                <a href="{{ route('portfolio') }}" class="nav-item {{ Route::currentRouteName() == 'portfolio' ? 'active' : '' }}">PORTFOLIO</a>
                <a href="#" class="nav-item">FUNDING</a>
                <a href="#" class="nav-item">VALUE CREATION</a>
                <a href="{{ route('media') }}" class="nav-item {{ Route::currentRouteName() == 'media' ? 'active' : '' }}">MEDIA</a>
                <a href="#" class="nav-item">REPORT</a>
                <a href="{{ route('contact') }}" class="nav-item {{ Route::currentRouteName() == 'contact' ? 'active' : '' }}">CONTACT US</a>
            </div>

            <div class="language-selector">
                <button class="search-icon">
                    <i class="fas fa-search"></i>
                </button>
                <a href="#" class="lang">ID</a>
                <span class="divider">|</span>
                <a href="#" class="lang">EN</a>
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
