<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iga Bajog - Restaurant Location</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Inter, sans-serif;
            background-color: #ffffff;
            position: relative;
            width: 1440px;
            height: 1024px;
            overflow: hidden;
        }

        .main-container {
            position: relative;
            width: 1440px;
            height: 1024px;
            background-color: #ffffff;
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

        .logo-container {
            position: absolute;
            top: 31px;
            left: 25px;
            width: 130px;
            height: 107px;
            background-color: #ffffff;
            z-index: 10;
        }

        .logo-image {
            position: absolute;
            top: 5px;
            left: 29px;
            width: 72px;
            height: 102px;
        }

        .menu-container {
            position: absolute;
            top: 50px;
            right: 37px;
            width: 66px;
            height: 64px;
            background-color: #ffffff;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            z-index: 10;
            transition: background-color 0.3s ease;
        }

        .menu-container:hover {
            background-color: #f5f5f5;
        }

        .menu-icon {
            width: 28px;
            height: 29px;
        }

        .location-text {
            position: absolute;
            top: 63px;
            right: 115px;
            font-size: 40px;
            font-family: Inter, sans-serif;
            font-weight: 700;
            line-height: 49px;
            color: #000000;
            z-index: 10;
        }

        .restaurant-image {
            position: absolute;
            top: 212px;
            left: 126px;
            width: 458px;
            height: 610px;
            border-radius: 10px;
            object-fit: cover;
            z-index: 5;
        }

        .info-container {
            position: absolute;
            top: 212px;
            right: 81px;
            width: 625px;
            height: 682px;
            background-color: #ffffff;
            border-radius: 10px;
            padding: 48px;
            z-index: 10;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }

        .restaurant-title {
            font-size: 40px;
            font-family: Inter, sans-serif;
            font-weight: 700;
            line-height: 49px;
            color: #000000;
            text-align: center;
            margin-bottom: 20px;
        }

        .rating-container {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 30px;
            gap: 8px;
        }

        .star {
            width: 36px;
            height: 34px;
        }

        .rating-number {
            font-size: 20px;
            font-family: Inter, sans-serif;
            font-weight: 700;
            line-height: 25px;
            color: #000000;
            margin-left: 10px;
        }

        .description {
            font-size: 25px;
            font-family: Inter, sans-serif;
            font-weight: 700;
            line-height: 30px;
            color: #000000;
            text-align: justify;
            margin-bottom: 40px;
        }

        .recommendations {
            font-size: 25px;
            font-family: Inter, sans-serif;
            font-weight: 700;
            line-height: 30px;
            color: #000000;
        }

        .recommendations-list {
            margin-top: 10px;
            padding-left: 20px;
        }

        .recommendation-item {
            margin-bottom: 8px;
            position: relative;
        }

        .recommendation-item::before {
            content: '•';
            position: absolute;
            left: -20px;
            color: #000000;
            font-weight: bold;
        }

        /* Mobile Responsiveness */
        @media (max-width: 768px) {
            body {
                width: 100vw;
                height: 100vh;
                overflow-y: auto;
            }

            .main-container {
                width: 100%;
                height: auto;
                min-height: 100vh;
            }

            .background-image {
                width: 100%;
                height: 100vh;
            }

            .logo-container {
                top: 20px;
                left: 20px;
                width: 80px;
                height: 60px;
            }

            .logo-image {
                width: 50px;
                height: 70px;
                top: 5px;
                left: 15px;
            }

            .menu-container {
                top: 20px;
                right: 20px;
                width: 50px;
                height: 50px;
            }

            .menu-icon {
                width: 20px;
                height: 20px;
            }

            .location-text {
                top: 30px;
                right: 80px;
                font-size: 24px;
                line-height: 30px;
            }

            .restaurant-image {
                top: 100px;
                left: 20px;
                width: calc(100% - 40px);
                height: 250px;
            }

            .info-container {
                top: 370px;
                left: 20px;
                right: 20px;
                width: calc(100% - 40px);
                height: auto;
                padding: 30px;
                position: relative;
            }

            .restaurant-title {
                font-size: 28px;
                line-height: 35px;
            }

            .description {
                font-size: 18px;
                line-height: 24px;
            }

            .recommendations {
                font-size: 18px;
                line-height: 24px;
            }
        }

        @media (max-width: 480px) {
            .restaurant-title {
                font-size: 24px;
                line-height: 30px;
            }

            .description {
                font-size: 16px;
                line-height: 22px;
            }

            .recommendations {
                font-size: 16px;
                line-height: 22px;
            }

            .rating-number {
                font-size: 18px;
            }

            .star {
                width: 28px;
                height: 26px;
            }
        }
    </style>
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

    <script>

        function pindahhome(){
            window.location.href = '/home';
        }

        function toggleMenu() {
            // Simulate menu toggle functionality
            const menuContainer = document.querySelector('.menu-container');
            
            // Add visual feedback
            menuContainer.style.transform = 'scale(0.95)';
            setTimeout(() => {
                menuContainer.style.transform = 'scale(1)';
            }, 150);
            
            // Simulate menu opening (you can replace this with actual menu logic)
            alert('Menu clicked! Navigation options would appear here.');
        }

        // Add smooth scrolling for mobile
        document.addEventListener('DOMContentLoaded', function() {
            // Smooth scroll behavior
            document.documentElement.style.scrollBehavior = 'smooth';
            
            // Add loading animation
            const infoContainer = document.querySelector('.info-container');
            infoContainer.style.opacity = '0';
            infoContainer.style.transform = 'translateY(20px)';
            
            setTimeout(() => {
                infoContainer.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
                infoContainer.style.opacity = '1';
                infoContainer.style.transform = 'translateY(0)';
            }, 300);
            
            // Add hover effects for interactive elements
            const stars = document.querySelectorAll('.star');
            stars.forEach(star => {
                star.addEventListener('mouseenter', function() {
                    this.style.transform = 'scale(1.1)';
                    this.style.transition = 'transform 0.2s ease';
                });
                
                star.addEventListener('mouseleave', function() {
                    this.style.transform = 'scale(1)';
                });
            });
        });

        // Handle window resize for responsive behavior
        window.addEventListener('resize', function() {
            // Adjust layout if needed
            const container = document.querySelector('.main-container');
            if (window.innerWidth <= 768) {
                container.style.overflow = 'visible';
            } else {
                container.style.overflow = 'hidden';
            }
        });
    </script>
</body>
</html>