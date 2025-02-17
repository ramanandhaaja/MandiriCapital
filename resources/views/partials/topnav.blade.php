{{-- resources/views/partials/topnav.blade.php --}}
<header class="site-header">
    <nav class="nav-container">
        <div class="logo">
            <a href="{{ route('home') }}">
                <img src="{{ asset('images/logo.png') }}" alt="Mandiri Capital" loading="lazy">
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
                @foreach ($menuCategory as $menuCat)
                @if ($menuCat->route != 'home')
                    <a href="{{ route($menuCat->route) }}" class="nav-item {{ Route::currentRouteName() ==  $menuCat->route  ? 'active' : '' }}">{{ $menuCat->name }}</a>
                @endif
                @endforeach
            </div>


            <div class="nav-right">
                <button class="search-icon" style="visibility: hidden;">
                    <i class="fas fa-search"></i>
                </button>

                <div class="language-selector" >
                    <a href="{{ route('language.switch', 'en') }}" class="lang-link {{ session('locale', 'en') == 'en' ? 'active' : '' }}">EN</a>
                    <span class="lang-separator">|</span>
                    <a href="{{ route('language.switch', 'id') }}" class="lang-link {{ session('locale', 'en') == 'id' ? 'active' : '' }}">ID</a>
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
