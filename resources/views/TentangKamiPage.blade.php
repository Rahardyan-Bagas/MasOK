<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami</title>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/stylesTentangKami.css') }}">
</head>
<body>
    <div class="main-container">
        <div class="header">
            <div class="logo-container">
                <img src="images/img_screenshot20250527145618removebgpreview_1.png" onclick="pindahhome()" alt="Logo">
            </div>
            <button class="menu-button" onclick="toggleMobileMenu()">
                <img src="images/img_menu.svg" class="menu-icon" alt="Menu">
            </button>
        </div>

        <h1 class="page-title" id="pageTitle">Tentang Kami</h1>

        <div class="content-card">
            <div class="content-text" id="contentText">
                Selamat datang di halaman Tentang Kami. Kami adalah perusahaan yang berkomitmen untuk memberikan layanan terbaik dengan menggabungkan nilai-nilai tradisional Indonesia dan inovasi modern.<br><br>Dengan pengalaman bertahun-tahun, kami terus berusaha memberikan solusi yang tepat untuk kebutuhan Anda.
            </div>
        </div>

        <div class="pagination-dots">
            <button class="pagination-dot active" onclick="changePage(0)"></button>
            <button class="pagination-dot" onclick="changePage(1)"></button>
        </div>
    </div>

    <div class="overlay" onclick="toggleMobileMenu()"></div>
    <div class="mobile-menu" id="mobileMenu">
        <a href="#">Beranda</a>
        <a href="#">Tentang Kami</a>
        <a href="#">Layanan</a>
        <a href="#">Produk</a>
        <a href="#">Kontak</a>
    </div>
    <script src="{{ asset('tentangKami.js') }}"></script>
</body>
</html>
