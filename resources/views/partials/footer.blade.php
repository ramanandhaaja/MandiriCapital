{{-- resources/views/partials/footer.blade.php --}}
<footer class="main-footer">
    <div class="footer-container">
        <!-- Left Column -->
        <div class="footer-left">
            <img src="{{ asset('images/logo.png') }}" alt="Mandiri Capital" class="footer-logo">
            <div class="company-info">
                <h3>MANDIRI CAPITAL INDONESIA</h3>
                <p>Menara Mandiri II, lantai 14.</p>
                <p>Jl. Jend. Sudirman No. 54-55, Jakarta,</p>
                <p>Indonesia 12190</p>
            </div>
        </div>

        <!-- Middle Column -->
        <div class="footer-middle">
            <ul class="footer-links">
                @foreach ($menuCategory as $menuCat)
                <li><a href="{{ route($menuCat->route) }}">{{ $menuCat->name }}</a></li>
                @endforeach
                <li><a href="{{ route('privacy-policy') }}">PRIVACY POLICY</a></li>
            </ul>
        </div>

        <!-- Right Column -->
        <div class="footer-right">
            <p class="footer-right-text">Authorized</p>
            <p class="footer-right-text">and Supervised by</p>
            <p class="footer-right-text"><strong>OJK (Otoritas Jasa Keuangan)</strong></p>
        </div>

        <!-- Certification Section -->
        <div class="footer-certification">
            <div class="social-links">
                <a href="{{ $masterData->instagram }}" class="social-icon"><i class="fab fa-instagram"></i></a>
                <a href="{{ $masterData->linkedin }}" class="social-icon"><i class="fab fa-linkedin"></i></a>
            </div>
        </div>
    </div>

    <!-- Copyright -->
    <div class="footer-copyright">
        <p>&copy; {{ date('Y') }} Mandiri Capital Indonesia. All rights reserved</p>
    </div>
</footer>
