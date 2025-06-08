<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rendang Recipe - Traditional Indonesian Cuisine</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Inter, sans-serif;
            background-color: #ffffff;
            overflow-x: hidden;
        }

        .main-container {
            position: relative;
            width: 1440px;
            height: 1024px;
            background-color: #ffffff;
            margin: 0 auto;
        }

        .background-image {
            position: absolute;
            top: 0;
            left: 0;
            width: 1440px;
            height: 1024px;
            object-fit: cover;
            z-index: 1;
        }

        .header {
            position: absolute;
            top: 21px;
            left: 31px;
            width: 107px;
            height: 77px;
            background-color: #ffffff;
            border-radius: 15px;
            z-index: 10;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .logo {
            width: 102px;
            height: 72px;
            object-fit: contain;
        }

        .resep-title {
            position: absolute;
            top: 55px;
            left: 1206px;
            font-size: 40px;
            font-family: Inter;
            font-weight: 700;
            line-height: 49px;
            color: #000000;
            z-index: 10;
        }

        .menu-button {
            position: absolute;
            top: 50px;
            left: 1339px;
            width: 66px;
            height: 64px;
            background-color: #ffffff;
            border-radius: 15px;
            z-index: 10;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .menu-button:hover {
            background-color: #f5f5f5;
        }

        .menu-icon {
            width: 28px;
            height: 29px;
        }

        .recipe-container {
            position: absolute;
            top: 221px;
            left: 77px;
            width: 1296px;
            height: 730px;
            background-color: #ffffff;
            border-radius: 15px;
            z-index: 5;
            padding: 36px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }

        .recipe-title {
            position: absolute;
            top: 35px;
            left: 721px;
            font-size: 55px;
            font-family: Inter;
            font-weight: 700;
            line-height: 67px;
            color: #000000;
        }

        .food-image {
            position: absolute;
            top: 34px;
            left: 36px;
            width: 385px;
            height: 308px;
            border-radius: 15px;
            object-fit: cover;
        }

        .ingredients-title {
            position: absolute;
            top: 116px;
            left: 437px;
            font-size: 25px;
            font-family: Inter;
            font-weight: 700;
            line-height: 31px;
            color: #000000;
        }

        .ingredients-list {
            position: absolute;
            top: 157px;
            left: 437px;
            font-size: 15px;
            font-family: Inter;
            font-weight: 700;
            line-height: 18px;
            color: #000000;
            width: 492px;
            white-space: pre-line;
        }

        .additional-ingredients {
            position: absolute;
            top: 152px;
            left: 976px;
            font-size: 15px;
            font-family: Inter;
            font-weight: 700;
            line-height: 18px;
            color: #000000;
            width: 280px;
            white-space: pre-line;
        }

        .cooking-title {
            position: absolute;
            top: 368px;
            left: 36px;
            font-size: 25px;
            font-family: Inter;
            font-weight: 700;
            line-height: 31px;
            color: #000000;
        }

        .cooking-instructions {
            position: absolute;
            top: 409px;
            left: 36px;
            font-size: 20px;
            font-family: Inter;
            font-weight: 700;
            line-height: 24px;
            color: #000000;
            width: 1184px;
            white-space: pre-line;
        }

        .rating-section {
            position: absolute;
            top: 654px;
            left: 36px;
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .rating-title {
            font-size: 25px;
            font-family: Cinzel;
            font-weight: 700;
            line-height: 34px;
            color: #000000;
            text-transform: uppercase;
        }

        .stars-container {
            display: flex;
            gap: 5px;
            margin-left: 15px;
        }

        .star {
            width: 35px;
            height: 35px;
            cursor: pointer;
            transition: transform 0.2s ease, filter 0.2s ease;
            filter: grayscale(100%);
        }

        .star:hover {
            transform: scale(1.1);
            filter: grayscale(0%) brightness(1.2);
        }

        .star.active {
            filter: grayscale(0%) brightness(1.2) sepia(100%) hue-rotate(45deg) saturate(2);
        }

        .star.filled {
            filter: grayscale(0%) brightness(1.2) sepia(100%) hue-rotate(45deg) saturate(2);
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .main-container {
                width: 100%;
                height: auto;
                min-height: 100vh;
            }

            .background-image {
                width: 100%;
                height: 100%;
            }

            .recipe-container {
                position: relative;
                top: 120px;
                left: 20px;
                width: calc(100% - 40px);
                height: auto;
                padding: 20px;
            }

            .recipe-title {
                position: relative;
                top: 0;
                left: 0;
                font-size: 35px;
                text-align: center;
                margin-bottom: 20px;
            }

            .food-image {
                position: relative;
                top: 0;
                left: 0;
                width: 100%;
                height: 250px;
                margin-bottom: 20px;
            }

            .ingredients-title,
            .ingredients-list,
            .additional-ingredients,
            .cooking-title,
            .cooking-instructions {
                position: relative;
                top: 0;
                left: 0;
                width: 100%;
                margin-bottom: 15px;
            }

            .rating-section {
                position: relative;
                top: 0;
                left: 0;
                justify-content: center;
                margin-top: 30px;
            }
        }

        @media (max-width: 480px) {
            .header {
                top: 10px;
                left: 10px;
                width: 80px;
                height: 60px;
            }

            .logo {
                width: 70px;
                height: 50px;
            }

            .resep-title {
                top: 25px;
                left: 50%;
                transform: translateX(-50%);
                font-size: 30px;
            }

            .menu-button {
                top: 20px;
                right: 10px;
                left: auto;
                width: 50px;
                height: 50px;
            }

            .recipe-container {
                top: 100px;
                left: 10px;
                width: calc(100% - 20px);
                padding: 15px;
            }

            .recipe-title {
                font-size: 28px;
            }

            .ingredients-title,
            .cooking-title {
                font-size: 20px;
            }

            .ingredients-list,
            .additional-ingredients {
                font-size: 13px;
            }

            .cooking-instructions {
                font-size: 16px;
            }

            .rating-title {
                font-size: 20px;
            }

            .star {
                width: 30px;
                height: 30px;
            }
        }
    </style>
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

    <script>
        let currentRating = 0;
        
        // Menu toggle functionality
        function toggleMenu() {
            alert('Menu clicked! Navigation functionality would be implemented here.');
            console.log('Menu toggle activated');
        }
        
        // Star rating functionality
        function setRating(rating) {
            currentRating = rating;
            updateStars();
            
            // Show feedback message
            const messages = {
                1: 'Terima kasih! Rating 1 bintang diterima.',
                2: 'Terima kasih! Rating 2 bintang diterima.',
                3: 'Terima kasih! Rating 3 bintang diterima.',
                4: 'Terima kasih! Rating 4 bintang diterima.',
                5: 'Terima kasih! Rating 5 bintang diterima. Resep ini luar biasa!'
            };
            
            setTimeout(() => {
                alert(messages[rating]);
            }, 200);
            
            console.log(`Rating set to: ${rating} stars`);
        }
        
        function updateStars() {
            const stars = document.querySelectorAll('.star');
            stars.forEach((star, index) => {
                if (index < currentRating) {
                    star.classList.add('filled');
                } else {
                    star.classList.remove('filled');
                }
            });
        }
        
        // Star hover effects
        document.querySelectorAll('.star').forEach((star, index) => {
            star.addEventListener('mouseenter', () => {
                const stars = document.querySelectorAll('.star');
                stars.forEach((s, i) => {
                    if (i <= index) {
                        s.classList.add('active');
                    } else {
                        s.classList.remove('active');
                    }
                });
            });
            
            star.addEventListener('mouseleave', () => {
                document.querySelectorAll('.star').forEach(s => {
                    s.classList.remove('active');
                });
                updateStars(); // Restore filled state
            });
        });
        
        // Keyboard navigation for menu button
        document.querySelector('.menu-button').addEventListener('keydown', (e) => {
            if (e.key === 'Enter' || e.key === ' ') {
                e.preventDefault();
                toggleMenu();
            }
        });
        
        // Keyboard navigation for stars
        document.querySelectorAll('.star').forEach((star, index) => {
            star.setAttribute('tabindex', '0');
            star.addEventListener('keydown', (e) => {
                if (e.key === 'Enter' || e.key === ' ') {
                    e.preventDefault();
                    setRating(index + 1);
                }
            });
        });
        
        // Initialize page
        document.addEventListener('DOMContentLoaded', () => {
            console.log('Rendang Recipe Page loaded successfully');
            
            // Add loading animation effect
            const recipeContainer = document.querySelector('.recipe-container');
            recipeContainer.style.opacity = '0';
            recipeContainer.style.transform = 'translateY(20px)';
            
            setTimeout(() => {
                recipeContainer.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
                recipeContainer.style.opacity = '1';
                recipeContainer.style.transform = 'translateY(0)';
            }, 100);
        });
        
        // Simulate recipe save functionality
        function saveRecipe() {
            const recipeData = {
                name: 'Rendang',
                rating: currentRating,
                timestamp: new Date().toISOString()
            };
            
            localStorage.setItem('savedRecipe_rendang', JSON.stringify(recipeData));
            alert('Resep Rendang telah disimpan!');
            console.log('Recipe saved:', recipeData);
        }
        
        // Add save functionality to menu (simulated)
        document.querySelector('.menu-button').addEventListener('contextmenu', (e) => {
            e.preventDefault();
            saveRecipe();
        });
        
        // Print recipe functionality
        function printRecipe() {
            window.print();
        }
        
        // Add keyboard shortcut for printing
        document.addEventListener('keydown', (e) => {
            if (e.ctrlKey && e.key === 'p') {
                e.preventDefault();
                printRecipe();
            }
        });
    </script>
</body>
</html>