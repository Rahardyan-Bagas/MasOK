<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $makanan->Nama_Makanan }} Recipe - Traditional Indonesian Cuisine</title>
    <link rel="stylesheet" href="{{ asset('css/stylesResepGudeg.css') }}">
</head>
<body>
    <div class="main-container">
        <!-- Background Image -->
        <img src="{{ asset('images/img_image_14.png') }}" alt="Background" class="background-image">
        
        <!-- Header -->
        <div class="header">
            <a href="{{ route('homepage') }}">
                    <img src="{{ asset('images/img_screenshot20250527145618removebgpreview_1.png') }}" alt="Foodnesia Logo" class="logo-image">
                </a>
        </div>

        <h1 class="resep-title">Resep</h1>

        <!-- Menu Button -->
        <div class="menu-button" onclick="toggleMenu()" role="button" tabindex="0" aria-label="Toggle Menu">
            <img src="{{ asset('images/img_menu.svg') }}" alt="Menu" class="menu-icon">
            <div id="dropdownMenu" class="dropdown-menu" style="display: none;">
            <a href="{{ route('homepage') }}">Home</a>
            <a href="/lokasi">Peta Indonesia</a>
            <a href="/resep">Resep Makanan</a>
            <a href="/makanan">Makanan Daerah</a>
            </div>
        </div>

        <!-- Recipe Content -->
        <main class="recipe-container">
    <h2 class="recipe-title">{{ $makanan->Nama_Makanan }}</h2>

    <div class="recipe-layout">
        <img src="{{ asset('images/' . $makanan->Gambar) }}" alt="{{ $makanan->Nama_Makanan }}" class="food-image">

        <div class="recipe-text">
            <h3 class="ingredients-title">Bahan - bahan :</h3>
            <div class="ingredients-list">{{ $resep->Bahan }}</div>

            <h3 class="cooking-title">Cara Memasak :</h3>
            <div class="cooking-instructions">{{ $resep->Cara_Memasak }}</div>
        </div>
    </div>

    <!-- Rating -->
    <div class="rating-section">
        <span class="rating-title">Berikan rating</span>
        <div class="stars-container">
            @for ($i = 1; $i <= 5; $i++)
                <img src="{{ asset('images/img_star.svg') }}" alt="Star {{ $i }}" class="star" data-rating="{{ $i }}" onclick="setRating({{ $i }})">
            @endfor
        </div>
    </div>
</main>

    </div>
    <script src="{{ asset('js/resepGudeg.js') }}"></script>
</body>
</html>
