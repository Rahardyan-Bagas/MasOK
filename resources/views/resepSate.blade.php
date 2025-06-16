<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resep Sate - Narad</title>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@700&family=Inter:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/stylesResepSate.css') }}">
</head>
<body>
    <div class="main-container">
        <!-- Background Pattern -->
        <img src="images/img_image_14.png" alt="Background Pattern" class="background-pattern">
        
        <!-- Logo Section -->
        <div class="logo-container">
            <img src="images/img_screenshot20250527145618removebgpreview_1.png" alt="Narad Logo" class="logo-image">
        </div>
        
        <!-- Header Section -->
        <div class="header-section">
            <span class="resep-text">Resep</span>
            <div class="menu-container" onclick="toggleMenu()">
                <img src="images/img_menu.svg" alt="Menu" class="menu-icon">
            </div>
        </div>
        
        <!-- Main Content Container -->
        <div class="content-container">
            <!-- Recipe Title -->
            <h1 class="recipe-title">Sate</h1>
            
            <!-- Recipe Image -->
            <img src="images/img_image_1.png" alt="Sate Dish" class="recipe-image">

            
            <!-- Ingredients Section -->
            <div class="ingredients-section">
                <h2 class="ingredients-title">Bahan sate :</h2>
                <div class="ingredients-list">Siapkan daging ayam fillet
5 sdm kecap manis
1 sdm minyak goreng
tusuk sate</div>
            </div>
            
            <!-- Accompaniments Section -->
            <div class="accompaniments-section">
                <h2 class="ingredients-title">Bahan pelengkap :</h2>
                <div class="ingredients-list">4 buah lontong
2 sdm kecap manis
3 buah jeruk limau
2 sdm bawang merah goreng untuk taburan</div>
            </div>
            
            <!-- Peanut Sauce Section 1 -->
            <div class="peanut-sauce-section">
                <h2 class="ingredients-title">Bahan bumbu kacang :</h2>
                <div class="ingredients-list">200 gram kacang tanah kulit,
      disangrai, dihaluskan
3 buah cabai merah keriting, digoreng
4 butir kemiri, digoreng
2 buah cabai merah besar, digoreng
3 sendok makan gula merah sisir
1 sendok teh garam 500 ml air panas</div>
            </div>
            
            <!-- Peanut Sauce Section 2 -->
            <div class="peanut-sauce-section2">
                <h2 class="ingredients-title">Bahan bumbu kacang :</h2>
                <div class="ingredients-list">15 buah cabai rawit merah, direbus
4 buah cabai merah keriting, direbus
1/4 sendok teh garam</div>
            </div>
            
            <!-- Cooking Instructions -->
            <div class="cooking-instructions">
                <h2 class="cooking-title">Cara Memasak :</h2>
                <div class="cooking-steps">Bikin sambal kacang dahulu. Haluskan kacang tanah, cabai merah keriting, kemiri, cabai merah besar, gula merah, dan garam.
Tuang air. Masak sampai matang dan kental.
Ambil 150 gram sambal kacang, kecap manis, dan minyak goreng. Aduk rata.
Celup ayam di dalamnya. Lumuri sampai rata.
Tusukkan ayam di tusuk sate.
Bakar sampai setengah matang.
Lumuri lagi dengan campuran kacang. Bakar lagi sampai matang.
Lanjutkan membuat sambal, blender cabai. Tambahkan garam. Aduk rata.
Sajikan sate bersama sambal kacang, pelengkap, dan sambalnya.</div>
            </div>
            
            <!-- Rating Section -->
            <div class="rating-section">
                <h2 class="rating-title">Berikan rating</h2>
                <div class="stars-container">
                    <img src="images/img_star.svg" alt="Star 1" class="star" onclick="setRating(1)" data-rating="1">
                    <img src="images/img_star.svg" alt="Star 2" class="star" onclick="setRating(2)" data-rating="2">
                    <img src="images/img_star.svg" alt="Star 3" class="star" onclick="setRating(3)" data-rating="3">
                    <img src="images/img_star.svg" alt="Star 4" class="star" onclick="setRating(4)" data-rating="4">
                    <img src="images/img_star.svg" alt="Star 5" class="star" onclick="setRating(5)" data-rating="5">
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('resepSate.js') }}"></script>
</body>
</html>