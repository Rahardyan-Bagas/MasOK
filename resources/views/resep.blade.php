<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Narad Indonesian Recipe Collection</title>
    <link rel="stylesheet" href="{{ asset('stylesResep.css') }}">
</head>
<body>
    <div class="main-container">
        <!-- Background Pattern -->
        <img src="images/img_image_14.png" alt="Traditional Indonesian Pattern Background" class="background-pattern">
        
        <!-- Header -->
        <header class="header">
            <div class="logo-container">
                <img src="images/img_screenshot20250527145618removebgpreview_1.png" onclick="pindahhome()" alt="Narad Logo" class="logo">
            </div>
            
            <h1 class="site-title">Resep</h1>
            
            <div class="menu-container" onclick="toggleMenu()" role="button" tabindex="0" aria-label="Toggle navigation menu">
                <img src="images/img_menu.svg" alt="Menu" class="menu-icon">
            </div>
        </header>
        
        <!-- Recipes Container -->
        <main class="recipes-container">
            <!-- Gudeg Recipe Card -->
            <article class="recipe-card" onclick="openRecipe('gudeg')" role="button" tabindex="0" aria-label="View Gudeg recipe">
                <img src="images/img_image.png" alt="Gudeg - Traditional Yogyakarta Sweet Jackfruit Stew" class="recipe-image">
                <div class="recipe-content">
                    <h2 class="recipe-title">Gudeg</h2>
                    <div class="divider"></div>
                    <p class="recipe-description">
                        Gudeg adalah makanan khas Yogyakarta yang terbuat dari nangka muda yang dimasak dengan santan dan bumbu-bumbu hingga berwarna cokelat dan beraroma khas. Rasanya manis dan gurih, biasanya disajikan dengan nasi, ayam opor, telur, tahu/tempe bacem, dan sambal krecek.
                    </p>
                    <button onclick="pindahresepgudeg()"></button>
                    <div class="recipe-footer">
                        <a href="#" class="recipe-link" onclick="pindahresepgudeg()">Resep Lengkap</a>
                        <div class="rating-container">
                            <img src="images/img_starfilled.svg" alt="Star" class="star">
                            <img src="images/img_starfilled.svg" alt="Star" class="star">
                            <img src="images/img_starfilled.svg" alt="Star" class="star">
                            <img src="images/img_starfilled.svg" alt="Star" class="star">
                            <img src="images/img_image_22.png" alt="Half Star" class="rating-image">
                        </div>
                    </div>
                </div>
            </article>
            
            <!-- Rendang Recipe Card -->
            <article class="recipe-card" onclick="openRecipe('rendang')" role="button" tabindex="0" aria-label="View Rendang recipe">
                <img src="images/img_image_308x385.png" alt="Rendang - Traditional Minangkabau Spicy Beef Curry" class="recipe-image">
                <div class="recipe-content">
                    <h2 class="recipe-title">Rendang</h2>
                    <div class="divider"></div>
                    <p class="recipe-description">
                        Rendang adalah masakan khas Minangkabau yang terbuat dari daging sapi yang dimasak lama dengan santan dan rempah-rempah. Rasanya kaya, gurih, dan pedas, dengan tekstur daging yang empuk dan bumbu meresap. Rendang dikenal sebagai salah satu makanan terenak di dunia.
                    </p>
                    <div class="recipe-footer">
                        <a href="#" class="recipe-link" onclick="pindahreseprendang()">Resep Lengkap</a>
                        <div class="rating-container">
                            <img src="images/img_starfilled.svg" alt="Star" class="star">
                            <img src="images/img_starfilled.svg" alt="Star" class="star">
                            <img src="images/img_starfilled.svg" alt="Star" class="star">
                            <img src="images/img_starfilled.svg" alt="Star" class="star">
                            <img src="images/img_image_22.png" alt="Half Star" class="rating-image">
                        </div>
                    </div>
                </div>
            </article>
            
            <!-- Sate Recipe Card -->
            <article class="recipe-card" onclick="openRecipe('sate')" role="button" tabindex="0" aria-label="View Sate recipe">
                <img src="images/img_image_1.png" alt="Sate - Traditional Indonesian Grilled Skewered Meat" class="recipe-image">
                <div class="recipe-content">
                    <h2 class="recipe-title">Sate</h2>
                    <div class="divider"></div>
                    <p class="recipe-description">
                        Sate adalah makanan khas Indonesia berupa potongan daging yang ditusuk, dibakar, dan disajikan dengan bumbu kacang atau kecap. Daging yang digunakan bisa ayam, kambing, sapi, atau lainnya. Rasanya gurih, manis, dan sedikit smokey.
                    </p>
                    <div class="recipe-footer">
                        <a href="#" class="recipe-link" onclick="pindahresepsate()">Resep Lengkap</a>
                        <div class="rating-container">
                            <img src="images/img_starfilled.svg" alt="Star" class="star">
                            <img src="images/img_starfilled.svg" alt="Star" class="star">
                            <img src="images/img_starfilled.svg" alt="Star" class="star">
                            <img src="images/img_starfilled.svg" alt="Star" class="star">
                            <img src="images/img_image_22.png" alt="Half Star" class="rating-image">
                        </div>
                    </div>
                </div>
            </article>
        </main>
    </div>
    <script src="{{ asset('resep.js') }}"></script>
</body>
</html>