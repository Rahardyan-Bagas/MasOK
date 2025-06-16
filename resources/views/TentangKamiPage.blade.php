<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami</title>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;700&display=swap" rel="stylesheet">
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Cinzel', serif;
            background-color: #ffffff;
            background-image: url('images/img_image_15.png');
            background-size: cover;
            background-position: center;
            overflow-x: hidden;
        }

        .main-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            position: relative;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 0;
        }

        .logo-container img {
            height: 80px;
        }

        .menu-button {
            background: #fff;
            border: none;
            border-radius: 8px;
            padding: 10px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            cursor: pointer;
        }

        .menu-icon {
            height: 24px;
            width: 24px;
        }

        .page-title {
            text-align: center;
            font-size: 48px;
            font-weight: 700;
            margin-top: 10px;
            color: #000;
        }

        .content-card {
            background-color: #fff;
            margin-top: 40px;
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .content-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 25px rgba(0, 0, 0, 0.15);
        }

        .content-text {
            font-size: 20px;
            color: #333;
            line-height: 1.6;
            text-align: center;
            animation: fadeInUp 1s ease forwards;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .pagination-dots {
            display: flex;
            justify-content: center;
            margin-top: 30px;
            gap: 16px;
        }

        .pagination-dot {
            width: 20px;
            height: 20px;
            background-color: #ccc;
            border-radius: 50%;
            border: none;
            cursor: pointer;
        }

        .pagination-dot.active {
            background-color: #333;
        }

        .mobile-menu {
            position: fixed;
            top: 0;
            right: -300px;
            width: 300px;
            height: 100vh;
            background-color: #fff;
            box-shadow: -2px 0 10px rgba(0,0,0,0.2);
            padding: 60px 20px;
            transition: right 0.3s ease;
            z-index: 999;
        }

        .mobile-menu.open {
            right: 0;
        }

        .mobile-menu a {
            display: block;
            margin: 15px 0;
            font-size: 18px;
            color: #000;
            text-decoration: none;
        }

        .overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0,0,0,0.5);
            z-index: 998;
            display: none;
        }

        .overlay.active {
            display: block;
        }

        @media (max-width: 768px) {
            .page-title {
                font-size: 32px;
            }

            .content-text {
                font-size: 16px;
            }

            .content-card {
                padding: 20px;
            }
        }
    </style>
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

    <script>
        let currentPage = 0;
        const contentData = [
            {
                title: "Tentang Kami",
                content: "Selamat datang di halaman Tentang Kami. Kami adalah perusahaan yang berkomitmen untuk memberikan layanan terbaik dengan menggabungkan nilai-nilai tradisional Indonesia dan inovasi modern.<br><br>Dengan pengalaman bertahun-tahun, kami terus berusaha memberikan solusi yang tepat untuk kebutuhan Anda."
            },
            {
                title: "Visi & Misi",
                content: "Visi kami adalah menjadi perusahaan terdepan yang menggabungkan kearifan lokal dengan teknologi modern.<br><br>Misi kami adalah memberikan layanan berkualitas tinggi yang berdampak positif bagi masyarakat dan lingkungan."
            }
        ];

        function changePage(index) {
            if (index !== currentPage) {
                document.querySelectorAll('.pagination-dot').forEach((dot, i) => {
                    dot.classList.toggle('active', i === index);
                });
                document.getElementById('pageTitle').textContent = contentData[index].title;
                document.getElementById('contentText').innerHTML = contentData[index].content;
                currentPage = index;
            }
        }

        function pindahhome(){
            window.location.href = '/home';
        }

        function toggleMobileMenu() {
            document.getElementById('mobileMenu').classList.toggle('open');
            document.querySelector('.overlay').classList.toggle('active');
        }
    </script>
</body>
</html>
