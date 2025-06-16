<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foodnesia - Terbang Menjajaki Rasa Nusantara</title>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@700&family=Inter:wght@400&family=Roboto:wght@400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/stylesHomepage.css') }}">

</head>
<body>
    <div class="main-container">
        <!-- Background Images -->
        <img src="images/img_image_1.png" alt="Indonesian Food Background 1" class="bg-image-1">
        <img src="images/img_92bdbb2f7c4e461e8d7608d91e7754c6.png" alt="Indonesian Food Background 2" class="bg-image-2">
        <img src="images/img_b707612e60454c568b29bc4e095a5c54_1.png" alt="Indonesian Food Background 3" class="bg-image-3">
        <img src="images/img_image.png" alt="Indonesian Food Background 4" class="bg-image-4">
        <img src="images/img_image_2.png" alt="Indonesian Food Background 5" class="bg-image-5">
        <img src="images/taliwang.png" alt="Indonesian Food Background 6" class="bg-image-6">


        <!-- Navigation Bar -->
        <nav class="navbar">
            <!-- Search Container -->
            <div class="search-container">
                <input type="text" class="search-input" placeholder="Cari kuliner apa?" id="searchInput">
                <img src="images/img_search.svg" alt="Search" class="search-icon" onclick="performSearch()">
            </div>

            <!-- Navigation Menu -->
            <div class="nav-menu">
                <div class="nav-item dropdown">
                    <a href="#menu" class="nav-text">Menu</a>
                    <img src="images/img_icon.svg" alt="Menu Icon" class="nav-icon">
                    <div class="dropdown-content">

                        <a href="/lokasi">Peta Indonesia</a>
                        <a href="/resep">Resep Makanan</a>
                        <a href="/makanan">Makanan Daerah</a>

                    </div>
                </div>

                <div class="nav-item dropdown">
                    <a href="#bahasa" class="nav-text">Bahasa</a>
                    <img src="images/img_icon.svg" alt="Language Icon" class="nav-icon">
                    <div class="dropdown-content">
                        <a href="#" onclick="changeLanguage('id')">Bahasa Indonesia</a>
                        <a href="#" onclick="changeLanguage('en')">English</a>
                        <a href="#" onclick="changeLanguage('jv')">Bahasa Jawa</a>
                    </div>
                </div>

                <div class="nav-item">
                    <a href="#tentang" onclick="pindahtentang()" class="nav-text">Tentang Kami</a>

                </div>
            </div>

            <!-- Login Button -->
            <button class="login-btn" onclick="showLogin()">
                <span class="login-text">Login</span>
            </button>
        </nav>

        <!-- Logo and Brand -->
        <img src="images/img_screenshot20250527145618removebgpreview_1.png" alt="Foodnesia Logo" class="logo">
        <h1 class="brand-text">FOODNESIA</h1>

        <!-- Hero Section -->
        <h2 class="hero-title">Terbang Menjajaki Rasa Nusantara</h2>
        <p class="hero-subtitle">"Rasa Lokal. Cita Rasa Nusantara. Dibuat dengan bangga, disajikan dengan cinta."</p>
    </div>

    <!-- Login Modal -->
    <div id="loginModal" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0,0,0,0.5); z-index: 1000; justify-content: center; align-items: center;">
        <div style="background-color: white; padding: 40px; border-radius: 10px; width: 400px; max-width: 90%;">
            <h3 style="margin-bottom: 20px; text-align: center; color: #fa0505;">Login ke Foodnesia</h3>
            <form id="loginForm">
                <div style="margin-bottom: 15px;">
                    <label style="display: block; margin-bottom: 5px;">Email:</label>
                    <input type="email" id="email" required style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px;">
                </div>
                <div style="margin-bottom: 20px;">
                    <label style="display: block; margin-bottom: 5px;">Password:</label>
                    <input type="password" id="password" required style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px;">
                </div>
                <div style="display: flex; gap: 10px;">
                    <button type="submit" style="flex: 1; padding: 12px; background-color: #fa0505; color: white; border: none; border-radius: 5px; cursor: pointer;">Login</button>
                    <button type="button" onclick="closeLogin()" style="flex: 1; padding: 12px; background-color: #ccc; color: black; border: none; border-radius: 5px; cursor: pointer;">Batal</button>
                </div>
            </form>
        </div>
    </div>
    <script src="{{ asset('js/homepage.js') }}"></script>
</body>
</html>