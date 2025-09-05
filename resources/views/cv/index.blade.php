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
                <a href="#" class="nav-logo">DESA SADOMAS</a>
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
                        "Selamat datang di dashboard katalog Opak Manis Mimi Wilis.
                        Terbuat dari bahan pilihan dengan resep turun-temurun,
                        opak ini hadir dengan rasa manis yang khas dan tekstur renyah yang pas.
                        Cocok dinikmati bersama keluarga, teman, atau sebagai oleh-oleh khas yang istimewa.
                        Mari rasakan kelezatan camilan tradisional yang selalu jadi favorit dari dulu hingga kini."
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
                    <div class="about-header">
                        <img src="{{ asset('images/logo.png') }}" alt="opak" class="about-subtitle">
                    </div>
                    <h3 class="about-nama">KATALOG OPAK MANIS</h3>
                    <p class="about-deskripsi">Blok tengah Rt 003, Rw 002, Desa / Kelurahan Sadomas, Kec. Rajagaluh, Kab. Majalengka, Provindi Jawa Barat</p>
                    <a href="{{ route('opak') }}" class="about-social-btn">
                        <i class='bx bx-right-arrow-alt'></i> Lihat
                    </a>
                    <a href="https://wa.me/6281235495774" target="_blank" class="btn-wa">Pesan via WA</a>
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






