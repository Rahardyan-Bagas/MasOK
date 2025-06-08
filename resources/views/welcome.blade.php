<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foodnesia - Terbang Menjajaki Rasa Nusantara</title>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@700&family=Inter:wght@400&family=Roboto:wght@400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css" />
</head>
<body>
    <div class="main-container">
        <!-- Food Images -->
        <img src="../assets/images/img_image_1.png" alt="Indonesian Traditional Food" class="food-image-1">
        <img src="../assets/images/img_92bdbb2f7c4e461e8d7608d91e7754c6.png" alt="Indonesian Cuisine Background" class="food-image-2">
        <img src="../assets/images/img_b707612e60454c568b29bc4e095a5c54_1.png" alt="Nusantara Food Collection" class="food-image-3">
        <img src="../assets/images/img_image.png" alt="Traditional Indonesian Dishes" class="food-image-4">
        <img src="../assets/images/img_image_2.png" alt="Local Indonesian Food" class="food-image-5">
        <img src="../assets/images/img_image_172x359.png" alt="Indonesian Street Food" class="food-image-6">

        <!-- Header Section -->
        <header class="header-section">
            <!-- Language Selector -->
            <div class="language-selector" onclick="toggleLanguageDropdown()">
                <span class="language-text">Bahasa</span>
                <img src="../assets/images/img_icon.svg" alt="Language Icon" class="language-icon">
                <div class="language-dropdown" id="languageDropdown">
                    <div class="language-option" onclick="changeLanguage('id')">Bahasa Indonesia</div>
                    <div class="language-option" onclick="changeLanguage('en')">English</div>
                    <div class="language-option" onclick="changeLanguage('jv')">Bahasa Jawa</div>
                </div>
            </div>

            <!-- Search Container -->
            <div class="search-container">
                <input type="text" class="search-input" placeholder="Cari kuliner apa?" id="searchInput" oninput="handleSearch()">
                <img src="../assets/images/img_search.svg" alt="Search" class="search-icon" onclick="performSearch()">
                <div class="search-results" id="searchResults">
                    <!-- Search results will be populated here -->
                </div>
            </div>

            <!-- Mobile Menu Button -->
            <div class="menu-button" onclick="toggleMobileMenu()">
                <img src="../assets/images/img_menu.svg" alt="Menu" class="menu-icon">
            </div>
        </header>

        <!-- Logo Section -->
        <img src="../assets/images/img_screenshot20250527145618removebgpreview_1.png" alt="Foodnesia Logo" class="logo-image">
        <h1 class="logo-text">FOODNESIA</h1>

        <!-- Main Content -->
        <h2 class="main-heading">Terbang Menjajaki Rasa Nusantara</h2>
        <p class="tagline">"Rasa Lokal. Cita Rasa Nusantara. Dibuat dengan bangga, disajikan dengan cinta."</p>

        <!-- Mobile Menu -->
        <nav class="mobile-menu" id="mobileMenu">
            <button class="mobile-menu-close" onclick="toggleMobileMenu()">&times;</button>
            <div class="mobile-menu-items">
                <a href="#" class="mobile-menu-item">Beranda</a>
                <a href="#" class="mobile-menu-item">Resep</a>
                <a href="#" class="mobile-menu-item">Restoran</a>
                <a href="#" class="mobile-menu-item">Kuliner Daerah</a>
                <a href="#" class="mobile-menu-item">Tentang Kami</a>
                <a href="#" class="mobile-menu-item">Kontak</a>
            </div>
        </nav>
    </div>

    <script src="js/javascript.js"></script>
</body>
</html>