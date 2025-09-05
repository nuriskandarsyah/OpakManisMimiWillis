<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | {{ $data['name'] ?? 'Aplikasi Desa' }}</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <script src="https://unpkg.com/scrollreveal"></script>
</head>
<body>
    <header class="l-header">
        <nav class="nav bd-grid">
            <div>
                <a href="#" class="nav-logo">DESA JAGAPURA LOR</a>
            </div>

            <div class="nav-toggle" id="nav-toggle">
                <i class='bx bx-menu'></i>
            </div>
        </nav>
    </header>

    <main class="l-main">
        <section class="home" id="index">
            <div class="home-container bd-grid">
                <h1 class="home-title">
                    <span class="produk-text">OPAK MANIS MIMI WILIS</span>
                </h1>

                <div class="home-scroll">
                    <p class="home-description">
                        Mie Jebew mie kenyal dengan racikan bumbu khas, berpadu kuah pedas gurih yang bisa dipilih levelnya. Cocok untuk kamu yang suka tantangan rasa pedas dan ingin pengalaman kuliner ekstrem yang seru.

                        opak Prasmanan sensasi opak unik dengan konsep prasmanan. Bebas pilih topping favoritmu mulai dari kerupuk, sosis, bakso, ceker, sayuran, hingga topping spesial lainnya. Semua tersaji dengan kuah opak pedas gurih khas MelsyaJGP yang hangat dan menggugah selera.

                        Baik untuk nongkrong bareng teman, makan santai, atau sekadar mengisi perut dengan hidangan pedas nikmat, MelsyaJGP siap memanjakan lidahmu!
                    </p>
                    <a href="#about" class="home-scroll-link">
                        <i class='bx bx-up-arrow-alt'></i> SCROLL DOWN
                    </a>
                </div>
            </div>
        </section>

        <!-- Section Pilihan -->
        <section class="about section" id="about">
            <h2 class="section-title">Pilih Halaman</h2>

            <div class="about-container bd-grid">
                <!-- UMKM opak -->
                <div class="about-item">
                    <div class="about-img">
                        <img src="{{ asset('images/logoopak.jpg') }}" alt="">
                    </div>
                    <h3 class="about-nama">KATALOG OPAK MANIS</h3>
                    <p class="about-deskripsi">Katalog produk UMKM OPAK</p>
                    <a href="{{ route('opak') }}" class="about-social-btn">
                        <i class='bx bx-right-arrow-alt'></i> Lihat
                    </a>
                    <a href="https://wa.me/6281779430667" target="_blank" class="btn-wa">Pesan via WA</a>
                </div>
            </div>
        </section>
    </main>

    <footer class="footer section">
        <div class="footer-container bd-grid">
            
            
            <div class="footer-data">
                <h2 class="footer-title">Follow Me</h2>
                <p>Opak Manis Mimi Wilis</p>
                <a href="#" class="footer-social"><i class='bx bxl-instagram'></i></a>
                <a href="#" class="footer-social"><i class='bx bxl-facebook'></i></a>
            </div>
        </div>
    </footer>

    <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>

