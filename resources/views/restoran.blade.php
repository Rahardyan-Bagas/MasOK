<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iga Bajog - Restaurant Location</title>
    <link rel="stylesheet" href="{{ asset('stylesRestoran.css') }}">
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
<<<<<<< HEAD
    <script src="{{ asset('restoran.js') }}"></script>
=======

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
>>>>>>> 113711e3aaf408162a5b4e4e19f89a870a8513da
</body>
</html>