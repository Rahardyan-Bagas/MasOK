<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rendang Recipe - Traditional Indonesian Cuisine</title>
    <link rel="stylesheet" href="{{ asset('css/stylesResepRendang.css') }}">
</head>
<body>
    <div class="main-container">
        <!-- Background Image -->
        <img src="images/img_image_14.png" alt="Traditional Indonesian Pattern Background" class="background-image">
        
        <!-- Header Section -->
        <div class="header">
            <img src="images/img_screenshot20250527145618removebgpreview_1.png" alt="Recipe Logo" class="logo">
        </div>
        
        <!-- Resep Title -->
        <h1 class="resep-title">Resep</h1>
        
        <!-- Menu Button -->
        <div class="menu-button" onclick="toggleMenu()" role="button" aria-label="Toggle Menu" tabindex="0">
            <img src="images/img_menu.svg" alt="Menu" class="menu-icon">
        </div>
        
        <!-- Recipe Container -->
        <main class="recipe-container">
            <!-- Recipe Title -->
            <h2 class="recipe-title">Rendang</h2>
            
            <!-- Food Image -->
            <img src="images/img_image_2.png" alt="Delicious Traditional Indonesian Rendang" class="food-image">

            
            <!-- Ingredients Section -->
            <h3 class="ingredients-title">Bahan - bahan :</h3>
            <div class="ingredients-list">1 kg daging sapi (bagian paha atau sengkel), potong kotak besar
1,5 liter santan kental dari 2 butir kelapa tua
10 siung bawang merah
5 siung bawang putih
5 buah cabai merah besar
10 buah cabai merah keriting (sesuai selera)
2 cm jahe
2 cm lengkuas
2 cm kunyit (bakar sebentar)</div>
            
            <!-- Additional Ingredients -->
            <div class="additional-ingredients">1 sdt ketumbar sangrai
1 sdt jintan sangrai
½ sdt pala bubuk
2 batang serai, memarkan
5 lembar daun jeruk
2 lembar daun kunyit, simpulkan
2 lembar daun salam
Garam dan gula merah secukupnya</div>
            
            <!-- Cooking Instructions -->
            <h3 class="cooking-title">Cara Memasak :</h3>
            <div class="cooking-instructions">Tumis bumbu halus hingga harum.
Masukkan daging sapi, aduk rata hingga berubah warna.
Tuang santan secara perlahan sambil diaduk rata agar tidak pecah.
Masukkan daun salam, daun jeruk, daun kunyit, dan serai.
Masak dengan api kecil selama 3–4 jam sambil sesekali diaduk hingga santan mengental dan berubah menjadi minyak.
Masak terus hingga daging empuk, kering, dan bumbu meresap sempurna.</div>
            
            <!-- Rating Section -->
            <div class="rating-section">
                <span class="rating-title">Berikan rating</span>
                <div class="stars-container">
                    <img src="images/img_star.svg" alt="Star 1" class="star" data-rating="1" onclick="setRating(1)">
                    <img src="images/img_star.svg" alt="Star 2" class="star" data-rating="2" onclick="setRating(2)">
                    <img src="images/img_star.svg" alt="Star 3" class="star" data-rating="3" onclick="setRating(3)">
                    <img src="images/img_star.svg" alt="Star 4" class="star" data-rating="4" onclick="setRating(4)">
                    <img src="images/img_star.svg" alt="Star 5" class="star" data-rating="5" onclick="setRating(5)">
                </div>
            </div>
        </main>
    </div>
    <script src="{{ asset('resepRendang.js') }}"></script>
</body>
</html>