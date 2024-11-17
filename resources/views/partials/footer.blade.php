{{-- resources/views/partials/footer.blade.php --}}
<footer class="main-footer">
    <div class="footer-container">
        <!-- Left Column -->
        <div class="footer-left">
            <img src="{{ asset('images/logo.png') }}" alt="Mandiri Capital" class="footer-logo">
            <div class="social-links">
                <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                <a href="#" class="social-icon"><i class="fab fa-facebook"></i></a>
                <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
            </div>
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
                <li><a href="#">TENTANG KAMI</a></li>
                <li><a href="#">PORTOFOLIO</a></li>
                <li><a href="#">BERITA</a></li>
            </ul>
        </div>

        <!-- Right Column -->
        <div class="footer-right">
            <ul class="footer-links">
                <li><a href="#">Hubungi Kami</a></li>
                <li><a href="#">Pengaduan Konsumen</a></li>
                <li><a href="#">Kebijakan Privacy</a></li>
            </ul>
        </div>

        <!-- Certification Section -->
        <div class="footer-certification">
            <p class="certification-text">Telah Berizin dan Diawasi oleh</p>
            <div class="certification-images">
                <img src="{{ asset('images/ojk-logo.png') }}" alt="OJK" class="cert-logo">
                <img src="{{ asset('images/amvesindo-logo.png') }}" alt="AMVESINDO" class="cert-logo">
            </div>
        </div>
    </div>

    <!-- Copyright -->
    <div class="footer-copyright">
        <p>© 2005-2023 • Company Name. All rights reserved</p>
    </div>
</footer>
