<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iga Bajog - Restaurant Location</title>
    <link rel="stylesheet" href="{{ asset('css/stylesRestoran.css') }}">
</head>
<body>
    <div class="main-container">
        <!-- Background Image -->
        <img src="images/img_image_14.png" alt="Background pattern" class="background-image">
        
        <!-- Logo Container -->
        <div class="logo-container">
            <img src="images/img_screenshot20250527145618removebgpreview_1.png" onclick="pindahhome()" alt="Restaurant Logo" class="logo-image">

        </div>
        
        <!-- Location Text -->
        <div class="location-text">Lokasi</div>
        
        <!-- Menu Container -->
        <div class="menu-container" onclick="toggleMenu()">
            <img src="images/img_menu.svg" alt="Menu" class="menu-icon">
        </div>
        
        <!-- Restaurant Image -->
        <img src="images/img_image_21.png" alt="Iga Bajog Restaurant" class="restaurant-image">
        
        <!-- Info Container -->
        <div class="info-container">
            <h1 class="restaurant-title">IGA BAJOG</h1>
            
            <div class="rating-container">
                <img src="images/img_starfilled.svg" alt="Star" class="star">
                <img src="images/img_starfilled.svg" alt="Star" class="star">
                <img src="images/img_starfilled.svg" alt="Star" class="star">
                <img src="images/img_starfilled.svg" alt="Star" class="star">
                <img src="images/img_image_22.png" alt="Half Star" class="star">
                <span class="rating-number">4,3</span>
            </div>
            
            <p class="description">
                Iga Bajog adalah nama populer dari "Iga Bakar Jogja", sebuah tempat makan yang terkenal di Yogyakarta dengan olahan iga sapi yang lezat dan empuk, disiram dengan sambal kecap. Iga Bajog juga dikenal karena buka 24 jam non-stop, sehingga menjadi tempat makan yang nyaman untuk dinikmati kapan saja.
            </p>
            
            <div class="recommendations">
                Rekomendasi Makanan :
                <div class="recommendations-list">
                    <div class="recommendation-item">Iga Bakar Jogja</div>
                    <div class="recommendation-item">Sate Koyor</div>
                    <div class="recommendation-item">Sop Iga</div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/restoran.js') }}"></script>
    
</body>
</html>