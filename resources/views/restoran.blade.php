<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $restoran->Nama_Restoran }} - Restaurant Location</title>
    <link rel="stylesheet" href="{{ asset('css/stylesRestoran.css') }}">
</head>
<body>
    <div class="main-container">
        <!-- Background Image -->
        <img src="{{ asset('images/img_image_14.png') }}" alt="Background pattern" class="background-image">
        
        <!-- Logo Container -->
        <div class="logo-container">
            <img src="{{ asset('images/img_screenshot20250527145618removebgpreview_1.png') }}" onclick="pindahhome()" alt="Restaurant Logo" class="logo-image">
        </div>
        
        <!-- Location Text -->
        <div class="location-text">Lokasi</div>
        
        <!-- Menu Container -->
        <div class="menu-wrapper">
  <img src="{{ asset('images/img_menu.svg') }}" alt="Menu" class="menu-icon" onclick="toggleMenu()">
  <div id="dropdownMenu" class="dropdown-menu" style="display: none;">
    <a href="{{ route('homepage') }}">Home</a>
    <a href="/lokasi">Peta Indonesia</a>
    <a href="/resep">Resep Makanan</a>
    <a href="/makanan">Makanan Daerah</a>
  </div>
</div>
        
        <!-- Restaurant Image -->
        <img src="{{ asset('images/' . $restoran->Gambar) }}" alt="{{ $restoran->Nama_Restoran }}" class="restaurant-image">
        
        <!-- Info Container -->
        <div class="info-container">
            <h1 class="restaurant-title">{{ strtoupper($restoran->Nama_Restoran) }}</h1>
            
            <div class="rating-container">
                @for ($i = 1; $i <= floor($restoran->Rating); $i++)
                    <img src="{{ asset('images/img_starfilled.svg') }}" alt="Star" class="star">
                @endfor
                @if (($restoran->Rating - floor($restoran->Rating)) >= 0.5)
                    <img src="{{ asset('images/img_image_22.png') }}" alt="Half Star" class="star half">
                @endif
                <span class="rating-number">{{ number_format($restoran->Rating, 1, ',', '.') }}</span>
            </div>
            
            <p class="description">
                {{ $restoran->Deskripsi }}
            </p>
            
            <div class="recommendations">
                Rekomendasi Makanan :
                <div class="recommendations-list">
                    @foreach ($restoran->rekomendasi as $makanan)
                        <div class="recommendation-item">{{ $makanan }}</div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/restoran.js') }}"></script>
</body>
</html>
