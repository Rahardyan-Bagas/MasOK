<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Narad Indonesian Recipe Collection</title>
    <link rel="stylesheet" href="{{ asset('css/stylesResep.css') }}">
</head>
<body>
    <div class="main-container">
        <!-- Background Pattern -->
        <img src="{{ asset('images/img_image_14.png') }}" alt="Traditional Indonesian Pattern Background" class="background-pattern">
        
        <!-- Header -->
        <header class="header">
            <div class="logo-container">
                <a href="{{ route('homepage') }}">
                    <img src="{{ asset('images/img_screenshot20250527145618removebgpreview_1.png') }}" alt="Foodnesia Logo" class="logo-image">
                </a>
            </div>
            <h1 class="site-title">Resep</h1>
            <div class="menu-container" onclick="toggleMenu()" role="button" tabindex="0" aria-label="Toggle navigation menu">
                <img src="{{ asset('images/img_menu.svg') }}" alt="Menu" class="menu-icon">
                <div id="dropdownMenu" class="dropdown-menu" style="display: none;">
    <a href="{{ route('homepage') }}">Home</a>
    <a href="/lokasi">Peta Indonesia</a>
    <a href="/resep">Resep Makanan</a>
    <a href="/makanan">Makanan Daerah</a>
            </div>
        </header>

        <!-- Recipes Container -->
        <main class="recipes-container">
            @foreach ($makananList as $makanan)
            <article class="recipe-card" role="button" tabindex="0" aria-label="View {{ $makanan->Nama_Makanan }} recipe">                
                <img src="{{ asset('images/' . $makanan->Gambar) }}" alt="{{ $makanan->Nama_Makanan }}" class="recipe-image">
                
                <div class="recipe-content">
                    <h2 class="recipe-title">{{ $makanan->Nama_Makanan }}</h2>
                    <div class="divider"></div>
                    <p class="recipe-description">{{ $makanan->Deskripsi }}</p>
                    
                    
                    <div class="recipe-footer">
                        <a href="{{ url('/resep/ ' . $makanan->Id_Makanan) }}" class="recipe-link">Resep Lengkap</a>
                        <div class="stars">★ ★ ★ ★ ★</div>
                    </div>
        </div>
    </article>
    @endforeach
</main>

    </div>
    <script src="{{ asset('js/resep.js') }}"></script>
</body>
</html>
