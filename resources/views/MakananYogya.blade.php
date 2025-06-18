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
        <img src="{{ asset('images/img_image_15.png') }}" alt="Traditional Indonesian Batik Background"
            class="background-image">

        <!-- Logo Container -->
        <div class="logo-container">
            <a href="{{ route('homepage') }}">
                    <img src="{{ asset('images/img_screenshot20250527145618removebgpreview_1.png') }}" alt="Foodnesia Logo" class="logo-image">
                </a>
        </div>

        <!-- Top Bar: Lokasi + Menu -->
        <div class="top-bar">
            <span class="lokasi-text">Lokasi</span>
            <img src="{{ asset('images/img_menu.svg') }}" alt="Menu" class="menu-icon" onclick="toggleMenu()">
            <div id="dropdownMenu" class="dropdown-menu" style="display: none;">
    <a href="{{ route('homepage') }}">Home</a>
    <a href="/lokasi">Peta Indonesia</a>
    <a href="/resep">Resep Makanan</a>
    <a href="/makanan">Makanan Daerah</a>
  </div>
        </div>

        <!-- Page Title -->
        <h1 class="page-title">Yogyakarta</h1>

        <!-- Main Content Container -->
        <div class="content-container">
            <!-- Search Container -->
            <div class="search-container">
                <input type="text" class="search-input" placeholder="Cari kuliner apa?" id="searchInput">
                <img src="{{ asset('images/img_search.svg') }}" alt="Search" class="search-icon"
                    onclick="performSearch()">
            </div>

            <!-- Restaurant Cards (Manual) -->
           <!-- Restaurant Cards (Dari Controller Langsung) -->

            <!-- Gudeg -->
            <a href="{{ url('restoran/1') }}" class="restaurant-card">
                <img src="{{ asset('images/img_image_16.png') }}" alt="{{ $gudeg->Nama_Makanan }}" class="restaurant-image">
                <div class="restaurant-info">
                    <div class="restaurant-name">{{ $gudeg->Nama_Makanan }}</div>
                    <div class="restaurant-details">
                        {{ $gudeg->lokasi[0]->Nama_Tempat }} - {{ $gudeg->lokasi[0]->Alamat }}
                    </div>
                </div>
            </a>

            <!-- Bakpia -->
            <a href="{{ url('restoran/2') }}" class="restaurant-card">
                <img src="{{ asset('images/image2.png') }}" alt="{{ $bakpia->Nama_Makanan }}" class="restaurant-image">
                <div class="restaurant-info">
                    <div class="restaurant-name">{{ $bakpia->Nama_Makanan }}</div>
                    <div class="restaurant-details">
                        {{ $bakpia->lokasi[0]->Nama_Tempat }} - {{ $bakpia->lokasi[0]->Alamat }}
                    </div>
                </div>
            </a>

            <!-- Sate Klathak -->
            <a href="{{ url('restoran/3') }}" class="restaurant-card">
                <img src="{{ asset('images/image.png') }}" alt="{{ $sate->Nama_Makanan }}" class="restaurant-image">
                <div class="restaurant-info">
                    <div class="restaurant-name">{{ $sate->Nama_Makanan }}</div>
                    <div class="restaurant-details">
                        {{ $sate->lokasi[0]->Nama_Tempat }} - {{ $sate->lokasi[0]->Alamat }}
                    </div>
                </div>
            </a>
        </div>
    </div>

    <script src="{{ asset('js/makananJogja.js') }}"></script>
</body>

</html>
