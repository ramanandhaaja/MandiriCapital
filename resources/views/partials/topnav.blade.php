<header class="site-header">
    <nav class="nav-container">
        <div class="logo">
            <a href="{{ route('home') }}">
                <img src="{{ asset('images/logo.png') }}" alt="Mandiri Capital">
            </a>
        </div>

        <div class="nav-links">
            <a href="{{ route('about') }}" class="nav-item {{ Route::currentRouteName() == 'about' ? 'active' : '' }}">ABOUT MCI</a>
            <a href="{{ route('portfolio') }}" class="nav-item {{ Route::currentRouteName() == 'portfolio' ? 'active' : '' }}">PORTOFOLIO</a>
            <a href="{{ route('event') }}" class="nav-item {{ Route::currentRouteName() == 'event' ? 'active' : '' }}">EVENT</a>
            <a href="{{ route('media') }}" class="nav-item {{ Route::currentRouteName() == 'media' ? 'active' : '' }}">MEDIA</a>
            <a href="{{ route('contact') }}" class="nav-item contact">CONTACT US</a>
        </div>

        <div class="language-selector">
            <a href="#" class="lang">ID</a>
            <span class="divider">|</span>
            <a href="#" class="lang">EN</a>
            <button class="search-icon">
                <i class="fas fa-search"></i>
            </button>
        </div>
    </nav>
</header>
