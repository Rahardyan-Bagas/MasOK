<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Narad Indonesian Recipe Collection</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: #ffffff;
            position: relative;
            overflow-x: auto;
        }

        .main-container {
            position: relative;
            width: 1440px;
            height: 1024px;
            background-color: #ffffff;
        }

        .background-pattern {
            position: absolute;
            top: 0;
            left: 0;
            width: 1440px;
            height: 1024px;
            z-index: 1;
        }

        .header {
            position: relative;
            z-index: 10;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 21px 31px 0;
        }

        .logo-container {
            background-color: #ffffff;
            width: 77px;
            height: 107px;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 5px;
        }

        .logo {
            width: 72px;
            height: 102px;
            object-fit: contain;
        }

        .site-title {
            font-size: 70px;
            font-family: 'Inter', sans-serif;
            font-weight: 700;
            line-height: 85px;
            color: #000000;
            text-align: left;
        }

        .menu-container {
            background-color: #ffffff;
            width: 66px;
            height: 64px;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .menu-container:hover {
            background-color: #f5f5f5;
            transform: scale(1.05);
        }

        .menu-icon {
            width: 28px;
            height: 29px;
        }

        .recipes-container {
            position: relative;
            z-index: 10;
            display: flex;
            gap: 71px;
            padding: 0 72px;
            margin-top: 151px;
        }

        .recipe-card {
            background-color: #ffffff;
            width: 385px;
            height: 622px;
            border-radius: 15px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            cursor: pointer;
            overflow: hidden;
        }

        .recipe-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.15);
        }

        .recipe-image {
            width: 385px;
            height: 308px;
            object-fit: cover;
            border-radius: 15px 15px 0 0;
        }

        .recipe-content {
            padding: 15px;
            position: relative;
        }

        .recipe-title {
            font-size: 30px;
            font-family: 'Inter', sans-serif;
            font-weight: 700;
            line-height: 37px;
            color: #000000;
            margin-bottom: 8px;
        }

        .divider {
            width: 181px;
            height: 1px;
            background-color: #000000;
            margin: 8px 0;
        }

        .recipe-description {
            font-size: 15px;
            font-family: 'Inter', sans-serif;
            font-weight: 700;
            line-height: 18px;
            color: #000000;
            text-align: justify;
            margin-bottom: 20px;
            height: 131px;
            overflow: hidden;
        }

        .recipe-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 20px;
        }

        .recipe-link {
            font-size: 15px;
            font-family: 'Inter', sans-serif;
            font-weight: 500;
            line-height: 19px;
            color: #fa0505;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .recipe-link:hover {
            color: #d40404;
            text-decoration: underline;
        }

        .rating-container {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .star {
            width: 36px;
            height: 34px;
            transition: transform 0.2s ease;
        }

        .star:hover {
            transform: scale(1.1);
        }

        .rating-image {
            width: 16px;
            height: 30px;
            margin-left: 8px;
        }

        /* Responsive Design */
        @media (max-width: 1200px) {
            .main-container {
                width: 100%;
                height: auto;
                min-height: 100vh;
            }

            .recipes-container {
                flex-direction: column;
                align-items: center;
                gap: 30px;
                padding: 0 20px;
            }

            .site-title {
                font-size: 50px;
                line-height: 60px;
            }
        }

        @media (max-width: 768px) {
            .header {
                flex-direction: column;
                gap: 20px;
                text-align: center;
            }

            .site-title {
                font-size: 40px;
                line-height: 50px;
            }

            .recipe-card {
                width: 100%;
                max-width: 350px;
            }

            .recipe-image {
                width: 100%;
            }
        }

        /* Animation for page load */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .recipe-card {
            animation: fadeInUp 0.6s ease forwards;
        }

        .recipe-card:nth-child(1) {
            animation-delay: 0.1s;
        }

        .recipe-card:nth-child(2) {
            animation-delay: 0.2s;
        }

        .recipe-card:nth-child(3) {
            animation-delay: 0.3s;
        }
    </style>
</head>
<body>
    <div class="main-container">
        <!-- Background Pattern -->
        <img src="images/img_image_14.png" alt="Traditional Indonesian Pattern Background" class="background-pattern">
        
        <!-- Header -->
        <header class="header">
            <div class="logo-container">
                <img src="images/img_screenshot20250527145618removebgpreview_1.png" alt="Narad Logo" class="logo">
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
                    <div class="recipe-footer">
                        <a href="#" class="recipe-link" onclick="event.stopPropagation(); viewFullRecipe('gudeg')">Resep Lengkap</a>
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
                        <a href="#" class="recipe-link" onclick="event.stopPropagation(); viewFullRecipe('rendang')">Resep Lengkap</a>
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
                        <a href="#" class="recipe-link" onclick="event.stopPropagation(); viewFullRecipe('sate')">Resep Lengkap</a>
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

    <script>
        // Menu toggle functionality
        function toggleMenu() {
            alert('Menu clicked! Navigation menu would open here.');
            console.log('Menu toggle activated');
        }

        // Recipe card click functionality
        function openRecipe(recipeName) {
            console.log(`Opening ${recipeName} recipe`);
            alert(`Membuka resep ${recipeName}! Halaman detail resep akan ditampilkan.`);
        }

        // Full recipe link functionality
        function viewFullRecipe(recipeName) {
            console.log(`Viewing full recipe for ${recipeName}`);
            alert(`Menampilkan resep lengkap ${recipeName}! Halaman dengan instruksi detail akan dibuka.`);
        }

        // Keyboard navigation support
        document.addEventListener('keydown', function(event) {
            if (event.key === 'Enter' || event.key === ' ') {
                const focusedElement = document.activeElement;
                if (focusedElement.classList.contains('recipe-card')) {
                    event.preventDefault();
                    focusedElement.click();
                } else if (focusedElement.classList.contains('menu-container')) {
                    event.preventDefault();
                    toggleMenu();
                }
            }
        });

        // Star rating interaction
        document.querySelectorAll('.star').forEach(star => {
            star.addEventListener('click', function(event) {
                event.stopPropagation();
                alert('Rating functionality would be implemented here!');
            });
        });

        // Add loading state simulation
        window.addEventListener('load', function() {
            console.log('Indonesian Recipe Collection page loaded successfully');
            
            // Simulate data loading
            setTimeout(() => {
                console.log('Recipe data loaded');
            }, 500);
        });

        // Add scroll effects for better UX
        window.addEventListener('scroll', function() {
            const cards = document.querySelectorAll('.recipe-card');
            cards.forEach(card => {
                const rect = card.getBoundingClientRect();
                if (rect.top < window.innerHeight && rect.bottom > 0) {
                    card.style.opacity = '1';
                    card.style.transform = 'translateY(0)';
                }
            });
        });

        // Error handling for images
        document.querySelectorAll('img').forEach(img => {
            img.addEventListener('error', function() {
                console.warn(`Failed to load image: ${this.src}`);
                this.style.backgroundColor = '#f0f0f0';
                this.alt = 'Image not available';
            });
        });

        // Recipe data simulation
        const recipeData = {
            gudeg: {
                name: 'Gudeg',
                origin: 'Yogyakarta',
                difficulty: 'Medium',
                cookingTime: '3-4 hours',
                servings: '4-6 people'
            },
            rendang: {
                name: 'Rendang',
                origin: 'Minangkabau',
                difficulty: 'Hard',
                cookingTime: '4-5 hours',
                servings: '6-8 people'
            },
            sate: {
                name: 'Sate',
                origin: 'Indonesia',
                difficulty: 'Easy',
                cookingTime: '30-45 minutes',
                servings: '2-4 people'
            }
        };

        // Function to get recipe details
        function getRecipeDetails(recipeName) {
            return recipeData[recipeName] || null;
        }

        // Add touch support for mobile devices
        document.querySelectorAll('.recipe-card').forEach(card => {
            card.addEventListener('touchstart', function() {
                this.style.transform = 'scale(0.98)';
            });
            
            card.addEventListener('touchend', function() {
                this.style.transform = 'scale(1)';
            });
        });
    </script>
</body>
</html>