<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resep Sate - Narad</title>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@700&family=Inter:wght@400;700&display=swap" rel="stylesheet">
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: #ffffff;
            min-height: 100vh;
            position: relative;
        }

        .main-container {
            position: relative;
            width: 1440px;
            height: 1024px;
            background-color: #ffffff;
            overflow: hidden;
        }

        .background-pattern {
            position: absolute;
            top: 0;
            left: 0;
            width: 1440px;
            height: 1024px;
            z-index: 1;
        }

        .logo-container {
            position: absolute;
            top: 21px;
            left: 31px;
            width: 77px;
            height: 107px;
            background-color: #ffffff;
            z-index: 10;
        }

        .logo-image {
            position: absolute;
            top: 5px;
            left: 5px;
            width: 72px;
            height: 102px;
        }

        .content-container {
            position: absolute;
            top: 221px;
            left: 77px;
            width: 1296px;
            height: 730px;
            background-color: #ffffff;
            border-radius: 15px;
            z-index: 5;
            padding: 36px;
        }

        .recipe-title {
            position: absolute;
            top: 16px;
            left: 710px;
            font-size: 55px;
            font-family: 'Inter', sans-serif;
            font-weight: 700;
            line-height: 67px;
            color: #000000;
            z-index: 15;
        }

        .recipe-image {
            position: absolute;
            top: 0px;
            left: 0px;
            width: 385px;
            height: 308px;
            border-radius: 15px;
            object-fit: cover;
        }

        .ingredients-section {
            position: absolute;
            top: 64px;
            left: 401px;
        }

        .ingredients-title {
            font-size: 25px;
            font-family: 'Inter', sans-serif;
            font-weight: 700;
            line-height: 31px;
            color: #000000;
            margin-bottom: 15px;
        }

        .ingredients-list {
            font-size: 15px;
            font-family: 'Inter', sans-serif;
            font-weight: 700;
            line-height: 18px;
            color: #000000;
            white-space: pre-line;
        }

        .accompaniments-section {
            position: absolute;
            top: 186px;
            left: 401px;
        }

        .peanut-sauce-section {
            position: absolute;
            top: 66px;
            left: 940px;
        }

        .peanut-sauce-section2 {
            position: absolute;
            top: 235px;
            left: 940px;
        }

        .cooking-instructions {
            position: absolute;
            top: 334px;
            left: 0px;
        }

        .cooking-title {
            font-size: 25px;
            font-family: 'Inter', sans-serif;
            font-weight: 700;
            line-height: 31px;
            color: #000000;
            margin-bottom: 20px;
        }

        .cooking-steps {
            font-size: 20px;
            font-family: 'Inter', sans-serif;
            font-weight: 700;
            line-height: 24px;
            color: #000000;
            white-space: pre-line;
            max-width: 1252px;
        }

        .rating-section {
            position: absolute;
            top: 620px;
            left: 0px;
        }

        .rating-title {
            font-size: 25px;
            font-family: 'Cinzel', serif;
            font-weight: 700;
            line-height: 34px;
            color: #000000;
            margin-bottom: 15px;
            text-transform: uppercase;
        }

        .stars-container {
            display: flex;
            gap: 0px;
            margin-top: 15px;
        }

        .star {
            width: 35px;
            height: 35px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .star:hover {
            transform: scale(1.1);
        }

        .star.active {
            filter: brightness(1.2);
        }

        .header-section {
            position: absolute;
            top: 55px;
            right: 95px;
            z-index: 20;
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .resep-text {
            font-size: 40px;
            font-family: 'Inter', sans-serif;
            font-weight: 700;
            line-height: 49px;
            color: #000000;
        }

        .menu-container {
            width: 66px;
            height: 64px;
            background-color: #ffffff;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .menu-container:hover {
            background-color: #f5f5f5;
        }

        .menu-icon {
            width: 28px;
            height: 29px;
        }

        @media (max-width: 768px) {
            .main-container {
                width: 100%;
                height: auto;
                min-height: 100vh;
            }

            .content-container {
                position: relative;
                top: 20px;
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

            .recipe-image {
                position: relative;
                width: 100%;
                height: 250px;
                margin-bottom: 20px;
            }

            .ingredients-section,
            .accompaniments-section,
            .peanut-sauce-section,
            .peanut-sauce-section2 {
                position: relative;
                top: 0;
                left: 0;
                margin-bottom: 30px;
            }

            .cooking-instructions {
                position: relative;
                top: 0;
                left: 0;
                margin-bottom: 30px;
            }

            .rating-section {
                position: relative;
                top: 0;
                left: 0;
            }

            .header-section {
                position: fixed;
                top: 10px;
                right: 10px;
                z-index: 100;
            }

            .resep-text {
                font-size: 24px;
            }
        }
    </style>
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
    
    <script>
        let currentRating = 0;
        
        function setRating(rating) {
            currentRating = rating;
            const stars = document.querySelectorAll('.star');
            
            stars.forEach((star, index) => {
                if (index < rating) {
                    star.classList.add('active');
                    star.style.filter = 'brightness(1.2) saturate(1.5)';
                } else {
                    star.classList.remove('active');
                    star.style.filter = 'brightness(0.7) saturate(0.5)';
                }
            });
            
            // Show rating feedback
            showRatingFeedback(rating);
        }
        
        function showRatingFeedback(rating) {
            const messages = {
                1: 'Terima kasih atas feedback Anda!',
                2: 'Kami akan terus meningkatkan resep ini.',
                3: 'Rating yang bagus! Terima kasih.',
                4: 'Senang Anda menyukai resep ini!',
                5: 'Luar biasa! Resep favorit Anda!'
            };
            
            // Create temporary feedback message
            const feedback = document.createElement('div');
            feedback.textContent = messages[rating];
            feedback.style.cssText = `
                position: fixed;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                background-color: #4CAF50;
                color: white;
                padding: 15px 25px;
                border-radius: 8px;
                font-family: 'Inter', sans-serif;
                font-weight: 600;
                z-index: 1000;
                box-shadow: 0 4px 12px rgba(0,0,0,0.3);
                animation: fadeInOut 3s ease-in-out;
            `;
            
            document.body.appendChild(feedback);
            
            setTimeout(() => {
                document.body.removeChild(feedback);
            }, 3000);
        }
        
        function toggleMenu() {
            const menuOptions = [
                'Beranda',
                'Resep Favorit',
                'Kategori',
                'Tentang Kami',
                'Kontak'
            ];
            
            const existingMenu = document.querySelector('.dropdown-menu');
            if (existingMenu) {
                existingMenu.remove();
                return;
            }
            
            const dropdown = document.createElement('div');
            dropdown.className = 'dropdown-menu';
            dropdown.style.cssText = `
                position: absolute;
                top: 70px;
                right: 0;
                background-color: white;
                border: 1px solid #ddd;
                border-radius: 8px;
                box-shadow: 0 4px 12px rgba(0,0,0,0.15);
                z-index: 1000;
                min-width: 180px;
                animation: slideDown 0.3s ease-out;
            `;
            
            menuOptions.forEach((option, index) => {
                const menuItem = document.createElement('div');
                menuItem.textContent = option;
                menuItem.style.cssText = `
                    padding: 12px 16px;
                    cursor: pointer;
                    border-bottom: ${index < menuOptions.length - 1 ? '1px solid #eee' : 'none'};
                    font-family: 'Inter', sans-serif;
                    font-size: 14px;
                    transition: background-color 0.2s;
                `;
                
                menuItem.addEventListener('mouseenter', () => {
                    menuItem.style.backgroundColor = '#f5f5f5';
                });
                
                menuItem.addEventListener('mouseleave', () => {
                    menuItem.style.backgroundColor = 'white';
                });
                
                menuItem.addEventListener('click', () => {
                    alert(`Navigasi ke: ${option}`);
                    dropdown.remove();
                });
                
                dropdown.appendChild(menuItem);
            });
            
            document.querySelector('.header-section').appendChild(dropdown);
            
            // Close menu when clicking outside
            setTimeout(() => {
                document.addEventListener('click', function closeMenu(e) {
                    if (!dropdown.contains(e.target) && !e.target.closest('.menu-container')) {
                        dropdown.remove();
                        document.removeEventListener('click', closeMenu);
                    }
                });
            }, 100);
        }
        
        // Add CSS animations
        const style = document.createElement('style');
        style.textContent = `
            @keyframes fadeInOut {
                0% { opacity: 0; transform: translate(-50%, -50%) scale(0.8); }
                20% { opacity: 1; transform: translate(-50%, -50%) scale(1); }
                80% { opacity: 1; transform: translate(-50%, -50%) scale(1); }
                100% { opacity: 0; transform: translate(-50%, -50%) scale(0.8); }
            }
            
            @keyframes slideDown {
                0% { opacity: 0; transform: translateY(-10px); }
                100% { opacity: 1; transform: translateY(0); }
            }
        `;
        document.head.appendChild(style);
        
        // Initialize star hover effects
        document.addEventListener('DOMContentLoaded', function() {
            const stars = document.querySelectorAll('.star');
            
            stars.forEach((star, index) => {
                star.addEventListener('mouseenter', () => {
                    if (currentRating === 0) {
                        stars.forEach((s, i) => {
                            if (i <= index) {
                                s.style.filter = 'brightness(1.2) saturate(1.5)';
                            } else {
                                s.style.filter = 'brightness(0.7) saturate(0.5)';
                            }
                        });
                    }
                });
                
                star.addEventListener('mouseleave', () => {
                    if (currentRating === 0) {
                        stars.forEach(s => {
                            s.style.filter = 'brightness(1) saturate(1)';
                        });
                    }
                });
            });
        });
    </script>
</body>
</html>