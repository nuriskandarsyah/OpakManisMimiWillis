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

        <!-- Tombol Back to Index -->
        <div class="nav-back">
            <a href="{{ url('/') }}" class="btn-back">← Back to Index</a>
        </div>
        </nav>
    </header>

    <main class="l-main">

        <section class="about section" id="opakkatalog">

            <!-- Menu Grid -->
            <div class="about-container">
                <div class="about-item">
                    <div class="about-img">
                        <img src="{{ asset('images/1.jpeg') }}" alt="">
                    </div>
                </div>

                <div class="about-item">
                    <div class="about-img">
                        <img src="{{ asset('images/2.jpeg') }}" alt="">
                    </div>

                <div class="about-item">
                    <div class="about-img">
                        <img src="{{ asset('images/3.jpeg') }}" alt="">
                    </div>
                </div>
            </div>
        </section>


    </main>

    <footer class="footer section">
        <div class="footer-container bd-grid">
            <div class="footer-data">
                <h2 class="footer-title">OPAK MANIS MIMI WILIS</h2>
            </div>
            
            <div class="footer-data">
                <h2 class="footer-title">Follow Me</h2>
                <p>OPAK MANIS MIMI WILIS</p>
                <a href="#" class="footer-social"><i class='bx bxl-instagram'></i></a>
                <a href="#" class="footer-social"><i class='bx bxl-facebook'></i></a>
            </div>
        </div>
    </footer>

    <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>




