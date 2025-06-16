<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rendang Recipe - Traditional Indonesian Cuisine</title>
    <link rel="stylesheet" href="{{ asset('css/stylesResepGudeg.css') }}">
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
            <h2 class="recipe-title">Gudeg</h2>
            
            <!-- Food Image -->
            <img src="images/img_image.png" alt="Delicious Traditional Indonesian Rendang" class="food-image">

            
            <!-- Ingredients Section -->
            <h3 class="ingredients-title">Bahan - bahan :</h3>
            <div class="ingredients-list">1,5 kg nangka muda, potong ukuran 3 cm x 5 cm
250 gram daging tetelan
1 liter santan dari 2 butir kelapa
4 lembar daun salam
1 iris lengkuas
1 sdm angkak
100 gram gula merah</div>
            
            <!-- Additional Ingredients -->
            <div class="additional-ingredients">3 sdm bawah merah iris
2 sdm bawang putih iris
10 buah kemiri
1 sdm ketumbar
1 sdt garam</div>
            
            <!-- Cooking Instructions -->
            <h3 class="cooking-title">Cara Memasak :</h3>
            <div class="cooking-instructions">Siram nangka dengan air mendidih supaya getahnya terlepas, kemudian tiriskan. 
Masukkan nangka ke dalam panci presto beserta daging, bumbu, dan santan. Tutup presto dan kunci. 
Masak dalam panci presto selama 45 menit. 
Angkat. Buka katup pengatur suhunya, biarkan uap keluar semua. 
Setelah itu buka panci dan angkat. 
Hidangkan gudeg nangka khas Yogyakarta selagi hangat bersama nasi merah atau putih.</div>
            
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
    <script src="{{ asset('js/resepGudeg.js') }}"></script>
</body>
</html>