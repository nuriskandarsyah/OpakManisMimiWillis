<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $data['name'] }}</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <script src="https://unpkg.com/scrollreveal"></script>
</head>
<body>
    <header class="l-header">
        <nav class="nav bd-grid">
            <div>
                <a href="#" class="nav-logo">OPAK MANIS MIMI WILIS</a>
            </div>

            <div class="nav-toggle" id="nav-toggle">
                <i class='bx bx-menu'></i>
            </div>
        </nav>
    </header>

    <main class="l-main">
        <section class="home" id="opak">
            <div class="home-container bd-grid">
                <h1 class="home-title">
                    <a href="#opakkatalog" class="home-scroll-link">
                        <i class='bx bx-up-arrow-alt'></i> SCROLL DOWN
                    </a>
                </div>
            </div>
        </section>

        <section class="about section" id="opakkatalog">
            <!-- Header -->
            <div class="about-header">
                <img src="{{ asset('images/1.jpeg') }}" alt="opak" class="about-subtitle">
                <br>
                <a href="https://wa.me/6281779430667" target="_blank" class="btn-wa">Pesan via WA</a>
            </div>

            <!-- Menu Grid -->
            <div class="about-container">
                <div class="about-item-jamu">
                    <div class="about-img">
                        <img src="{{ asset('images/2.jpeg') }}" alt="">
                    </div>
                    <h3 class="about-nama">Daftar Menu Melsya JGP</h3>
                    <span class="about-harga"> </span>
                </div>
            </div>
        </section>


    </main>

    <footer class="footer section">
        <div class="footer-container bd-grid">
            <div class="footer-data">
                <h2 class="footer-title">Melsya JGP</h2>
                <p class="footer-text">Halo {{ $data['name'] }} ini adalah Katalog Menu Kami</p>
            </div>
            
            <div class="footer-data">
                <h2 class="footer-title">Follow Me</h2>
                <p>Produk Umi</p>
                <a href="#" class="footer-social"><i class='bx bxl-instagram'></i></a>
                <a href="#" class="footer-social"><i class='bx bxl-facebook'></i></a>
            </div>
        </div>
    </footer>

    <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>
