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
        <img src="images/img_image_1.png" class="bg-image-1">
        <img src="images/img_92bdbb2f7c4e461e8d7608d91e7754c6.png" class="bg-image-2">
        <img src="images/img_b707612e60454c568b29bc4e095a5c54_1.png" class="bg-image-3">
        <img src="images/img_image.png" class="bg-image-4">
        <img src="images/img_image_2.png" class="bg-image-5">
        <img src="images/taliwang.png" class="bg-image-6">

        <!-- Navigation Bar -->
        <nav class="navbar">
            <!-- Search -->
            <div class="search-container">
                <input type="text" class="search-input" placeholder="Cari kuliner apa?" id="searchInput">
                <div id="searchSuggestions" class="suggestions-box"></div>
                <img src="images/img_search.svg" class="search-icon" onclick="performSearch()">
            </div>

            <!-- Navigation Menu -->
            <div class="nav-menu">
                <div class="nav-item dropdown">
                    <a href="#menu" class="nav-text">Menu</a>
                    <img src="images/img_icon.svg" class="nav-icon">
                    <div class="dropdown-content">
                        <a href="/lokasi">Peta Indonesia</a>
                        <a href="/resep">Resep Makanan</a>
                        <a href="/makanan">Makanan Daerah</a>
                    </div>
                </div>

                <div class="nav-item dropdown">
                    <a href="#bahasa" class="nav-text">Bahasa</a>
                    <img src="images/img_icon.svg" class="nav-icon">
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

            <!-- Login or User -->
            @if(session('user'))
                <div class="user-menu dropdown">
                    <span class="nav-text">{{ session('user')->Nama_User }}</span>
                    <img src="{{ asset('images/img_icon.svg') }}" class="nav-icon">
                    <div class="dropdown-content">
                        <a href="#" onclick="event.preventDefault(); document.getElementById('logoutForm').submit();">Logout</a>
                    </div>
                    <form id="logoutForm" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            @else
                <button class="login-btn" onclick="window.location.href='/login'">
                    <span class="login-text">Login</span>
                </button>
            @endif
        </nav>

        <!-- Logo -->
        <img src="images/img_screenshot20250527145618removebgpreview_1.png" class="logo">
        <h1 class="brand-text">FOODNESIA</h1>

        <!-- Hero -->
        <h2 class="hero-title">Terbang Menjajaki Rasa Nusantara</h2>
        <p class="hero-subtitle">"Rasa Lokal. Cita Rasa Nusantara. Dibuat dengan bangga, disajikan dengan cinta."</p>
    </div>
    <script src="{{ asset('js/homepage.js') }}"></script>
</body>
</html>
