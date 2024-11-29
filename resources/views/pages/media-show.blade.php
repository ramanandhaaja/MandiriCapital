@extends('layout.mainlayout')
@use('Illuminate\Support\Facades\Storage')


@section('localcss')
    <link href="{{ asset('css/media-show.css') }}" rel="stylesheet">
@endsection


@section('container')
    <div class="hero-section">
        <div class="hero-content" style="background-image: url('{{ asset('images/media/OnHover.png') }}');">
        </div>
        <h1>{{ $post->title }}</h1>
        <p>{{ \Carbon\Carbon::parse($post->published_at)->format('F Y') }}</p>
    </div>

    <!-- Content Section -->
    <div class="content-section">
        <div class="content-container">
            <!-- Left Sidebar -->
            <div class="sidebar-left">
                <div class="news-navigation">
                    <div class="article-meta">
                        <h1>Berita Terbaru</h1>
                        <div class="meta-info">
                            <span class="article-date">10 January 2024</span>
                            <div class="author-info">
                                <img src="{{ asset('images/media/author.png') }}" alt="Author" class="author-avatar">
                                <div class="author-details">
                                    <span class="author-name">Mandiri Admin</span>
                                    <span class="author-role">Author</span>
                                </div>
                            </div>
                            <div class="article-category">NEWS</div>
                        </div>
                    </div>

                    <div class="nav-buttons-wrapper">
                        <button class="nav-button prev-button">
                            <span><i class="fas fa-chevron-left"></i> Previous</span>
                            <div class="nav-content">
                                <img src="{{ asset('images/media/news1.png') }}" alt="Previous Article">
                            </div>
                            <div class="nav-text">
                                <span class="nav-label">MCI Selektif Danai Startup Berprospek Cerah, Apa Saja?</span>
                            </div>
                        </button>

                        <button class="nav-button next-button">
                            <span><i class="fas fa-chevron-right"></i> Next</span>
                            <div class="nav-content">
                                <img src="{{ asset('images/media/news1.png') }}" alt="Next Article">

                            </div>
                            <div class="nav-text">
                                <span class="nav-label">Hadir dalam Program Relawan Bakti BUMN 2024 di Desa Wisata
                                    H...</span>
                            </div>
                        </button>
                    </div>
                </div>
            </div>

            <div class="content-text">


                <div class="article-content">

                    <div class="article-subtitle">
                        <p>jpnn.com, NIAS – PT Mandiri Capital Indonesia (MCI) terpilih oleh Kementerian BUMN untuk turut
                            berpartisipasi dalam Program Relawan Bakti BUMN Batch VI tahun 2024.</p>
                    </div>
                    <div class="article-content-text">
                        <p>Direktur Keuangan, HR & Manajemen Risiko MCI, Wisnu Setiadi, sebagai salah satu Direktur Muda
                            BUMN
                            ditugaskan untuk memberikan sharing session pada relawan BUMN yang ditempatkan di Desa Wisata
                            Hilisimaetano, Nias Selatan, Pulau Nias, Sumatera Utara.</p>

                        <p>Desa Wisata Hilisimaetano dikenal sebagai salah satu destinasi wisata unggulan dengan keindahan
                            alam
                            dan budaya yang kaya, di mana desa ini memiliki tradisi atraksi lompat batu yang pernah menjadi
                            salah satu latar belakang dalam mata uang seribu rupiah keluaran 1992 silam.</p>

                        <p>Program Relawan Bakti BUMN merupakan Employee Volunteering Program bagi pegawai BUMN dengan
                            tujuan
                            untuk meningkatkan peran BUMN sebagai Agent of Development, implementasi nilai-nilai AKHLAK, dan
                            meningkatkan engagement pegawai melalui keterlibatan langsung dalam program Tanggung Jawab
                            Sosial &
                            Lingkungan (TJSL).</p>

                        <p>Adapun 10 Relawan Muda BUMN yang ditugaskan ke Nias Selatan berasal dari berbagai BUMN seperti
                            Bank
                            Mandiri, BNI, BSI, BTN, Pertamina, PLN, PGN, Jamkrindo, Askrindo, dan Pegadaian. Sepuluh Relawan
                            Muda tersebut turut berperan aktif dalam kegiatan sosial, mulai dari pendidikan, pengelolaan
                            sampah,
                            kesehatan, hingga perbaikan infrastruktur lokal.</p>

                        <p>Kehadiran para relawan diharapkan dapat memberikan dampak positif bagi masyarakat desa.</p>


                        <p>"Kami berharap teman-teman relawan dapat mengimplementasikan core value AKHLAK dengan
                            purpose yang lebih tinggi setelah 5 hari terakhir turut serta dalam program bakti di Desa
                            Hilisimaetano. Implementasi core value AKHLAK dalam proses bisnis sehari-hari diharapkan dapat
                            membantu meningkatkan kualitas kinerja perusahaan BUMN, yang pada akhirnya BUMN dapat memberikan
                            kontribusi lebih pada masyarakat Indonesia," ujar Wisnu Setiadi.
                        </p>

                    </div>
                    <div class="article-source">
                        Sumber: <a
                            href="https://www.jawapos.com/finance/013445361/btn-dan-mandiri-capital-bentuk-btn-fund-berikan-pendanaan-untuk-startup-properti"
                            target="_blank">https://www.jawapos.com/finance/013445361/btn-dan-mandiri-capital-bentuk-btn-fund-berikan-pendanaan-untuk-startup-properti</a>
                    </div>

                    <div style="width: 100%; margin: 40px 0 0 0;">
                        <iframe
                            style="border-radius:12px"
                            src="https://open.spotify.com/embed/episode/6gxsvG2u5eJPKoD7oLJ25G?utm_source=generator"
                            width="100%"
                            height="200"
                            frameBorder="0"
                            allowfullscreen=""
                            allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"
                            loading="lazy">
                        </iframe>
                    </div>

                    <div style="width: 100%; margin: 0px;">
                        <iframe
                            style="border-radius:12px"
                            src="https://www.youtube.com/embed/Q89Dzox4jAE"
                            width="100%"
                            height="180"
                            frameBorder="0"
                            allowfullscreen=""
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            loading="lazy">
                        </iframe>
                    </div>
                </div>
            </div>
            <div class="share-section">
                <div class="share-content">
                    <span class="share-label">Share to:</span>
                    <div class="social-icons">
                        <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>
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
