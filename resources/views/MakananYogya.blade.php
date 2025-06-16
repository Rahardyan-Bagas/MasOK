<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Narad Yogyakarta Food Search</title>
    <link rel="stylesheet" href="{{ asset('css/stylesMakanan.css') }}">
</head>

<body>
    <div class="main-container">
        <!-- Background Image -->
        <img src="images/img_image_15.png" alt="Traditional Indonesian Batik Background"
            class="background-image">

        <!-- Logo Container -->
        <div class="logo-container">
            <img src="images/img_screenshot20250527145618removebgpreview_1.png" onclick="pindahhome()" alt="Narad Logo"
                class="logo-image">
        </div>

        <!-- Top Bar: Lokasi + Menu -->
        <div class="top-bar">
            <span class="lokasi-text">Lokasi</span>
            <img src="images/img_menu.svg" alt="Menu" class="menu-icon" onclick="toggleMobileMenu()">
        </div>

        <!-- Page Title -->
        <h1 class="page-title">Yogyakarta</h1>

        <!-- Main Content Container -->
        <div class="content-container">
            <!-- Search Container -->
            <div class="search-container">
                <input type="text" class="search-input" placeholder="Cari kuliner apa?" id="searchInput">
                <img src="images/img_search.svg" alt="Search" class="search-icon" onclick="performSearch()">
            </div>

            <!-- Restaurant Cards -->
            <div class="restaurant-card restaurant-card-1" onclick="pindahrestoran()">
                <img src="images/img_button.png" alt="Iga BAJOG Restaurant"
                    class="restaurant-image restaurant-image-1">
                <div class="restaurant-info">
                    <div class="restaurant-name">Iga BAJOG (Iga Bakar Jogja)</div>
                    <div class="restaurant-rating">4.3 <span class="star-rating">★★★★☆</span> (6,1 rb) • $$ • Daging
                    </div>
                    <div class="restaurant-details">Jl. Ring Road Utara No.1, RW.2</div>
                    <div class="restaurant-details">Makan di tempat • Drive-through • Antar tanpa bertemu</div>
                </div>
            </div>

            <div class="restaurant-card restaurant-card-2" onclick="openRestaurant('gudeg')">
                <img src="images/img_image_16.png" alt="Gudeg Yu Djum Restaurant"
                    class="restaurant-image restaurant-image-2">
                <div class="restaurant-info">
                    <div class="restaurant-name">Gudeg Yu Djum Wijilan 167</div>
                    <div class="restaurant-rating">4.5 <span class="star-rating">★★★★★</span> (605) • $$ • Jawa</div>
                    <div class="restaurant-details">Kota Yogyakarta, Daerah Istimewa Yogyakarta</div>
                    <div class="restaurant-details">Makan di tempat • Bawa pulang • Pesan antar</div>
                </div>
            </div>

            <div class="restaurant-card restaurant-card-3" onclick="openRestaurant('sate')">
                <img src="images/img_image_17.png" alt="Sate Klathak Pak Pong"
                    class="restaurant-image restaurant-image-3">
                <div class="restaurant-info">
                    <div class="restaurant-name">Sate Klathak Pak Pong</div>
                    <div class="restaurant-rating">4.3 <span class="star-rating">★★★★☆</span> (29 rb) • $$ • Sate</div>
                    <div class="restaurant-details">Jl. Sultan Agung No.18</div>
                    <div class="restaurant-details">Makan di tempat • Bawa pulang • Pesan antar</div>
                </div>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div class="mobile-menu" id="mobileMenu">
            <div class="mobile-menu-content">
                <span class="close-menu" onclick="toggleMobileMenu()">&times;</span>
                <a href="#" class="mobile-menu-item" onclick="navigateTo('home')">Beranda</a>
                <a href="#" class="mobile-menu-item" onclick="navigateTo('search')">Pencarian</a>
                <a href="#" class="mobile-menu-item" onclick="navigateTo('favorites')">Favorit</a>
                <a href="#" class="mobile-menu-item" onclick="navigateTo('profile')">Profil</a>
                <a href="#" class="mobile-menu-item" onclick="navigateTo('settings')">Pengaturan</a>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/makananJogja.js') }}"></script>
</body>

</html>