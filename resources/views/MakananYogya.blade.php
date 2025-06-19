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
                <img src="{{ asset('images/img_search.svg') }}" alt="Search" class="search-icon" onclick="performSearch()">
            </div>

            <!-- Restaurant Cards -->
            @foreach($restorans as $restoran)
    @php
        $lokasi = $restoran->lokasi->first();
    @endphp

    @if($lokasi)
        <a href="{{ url('restoran/' . $restoran->Id_Makanan) }}" class="restaurant-card">
            <img src="{{ asset('images/' . $lokasi->GambarResto) }}" alt="{{ $restoran->Nama_Makanan }}" class="restaurant-image">
            <div class="restaurant-info">
                <div class="restaurant-name">{{ $lokasi->Nama_Tempat }}</div>
                <div class="restaurant-details">{{ $lokasi->Alamat }}</div>
            </div>
        </a>
    @endif
@endforeach
        </div>
    </div>

    <script src="{{ asset('js/makananJogja.js') }}"></script>
</body>

</html>
