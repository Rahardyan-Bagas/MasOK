<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foodnesia - Terbang Menjajaki Rasa Nusantara</title>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@700&family=Inter:wght@400&family=Roboto:wght@400&display=swap" rel="stylesheet">
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

       body {
  font-family: 'Inter', sans-serif;
            background-color: #ffffff;
            overflow-x: hidden;
}

/* Ganti ini */
.main-container {
  position: relative;
  width: 100%;            /* Dulu: width: 1440px; */
  max-width: 100%;
  height: auto;
  background-color: transparent;
  margin: 0 auto;
}

        /* Background Images */
        .bg-image-1 {
            position: absolute;
            top: 0;
            left: 361px;
            width: 25%;
            height: 172px;
            z-index: 1;
        }

        .bg-image-2 {
            position: absolute;
            top: 278px;
            left: 0;
            width: 100%;
            height: 746px;
            z-index: 2;
        }

        .bg-image-3 {
            position: absolute;
            top: 392px;
            left: 0;
            width: 100%;
            height: 518px;
            z-index: 3;
        }

        .bg-image-4 {
            position: absolute;
            top: 0;
            left: 724px;
            width: 25%;
            height: 172px;
            z-index: 4;
        }

        .bg-image-5 {
            position: absolute;
            top: 0;
            left: 0;
            width: 25%;
            height: 172px;
            z-index: 5;
        }

        .bg-image-6 {
            position: absolute;
            top: 0;
            left: 1081px;
            width: 30%;
            height: 172px;
            z-index: 6;
        }

        /* Navigation Bar */
        .navbar {
            position: absolute;
            top: 171px;
            left: 0;
            width: 100%;
            height: 106px;
            background-color: #fa0505;
            z-index: 10;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 55px;
        }

        .search-container {
            background-color: #ffffff;
            border-radius: 24px;
            width: 514px;
            height: 49px;
            display: flex;
            align-items: center;
            padding: 0 30px;
            position: relative;
        }

        .search-input {
            border: none;
            outline: none;
            font-size: 25px;
            font-family: 'Inter', sans-serif;
            color: #000000;
            background: transparent;
            width: 100%;
            padding-right: 50px;
        }

        .search-input::placeholder {
            color: #000000;
        }

        .search-icon {
            position: absolute;
            right: 30px;
            width: 30px;
            height: 29px;
            cursor: pointer;
        }

        .nav-menu {
            display: flex;
            align-items: center;
            gap: 100px;
        }

        .nav-item {
            display: flex;
            align-items: center;
            gap: 10px;
            cursor: pointer;
            transition: opacity 0.3s ease;
        }

        .nav-item:hover {
            opacity: 0.8;
        }

        .nav-text {
            font-size: 22px;
            font-family: 'Roboto', sans-serif;
            color: #ffffff;
            text-decoration: none;
        }

        .nav-icon {
            width: 24px;
            height: 24px;
        }

        .login-btn {
            background-color: #ffffff;
            border-radius: 27px;
            width: 143px;
            height: 54px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: background-color 0.3s ease;
            border: none;
        }

        .login-btn:hover {
            background-color: #f0f0f0;
        }

        .login-text {
            font-size: 25px;
            font-family: 'Inter', sans-serif;
            color: #000000;
        }

        /* Logo and Brand */
        .logo {
            position: absolute;
            top: 17px;
            left: 542px;
            width: 97px;
            height: 138px;
            z-index: 15;
        }

        .brand-text {
            position: absolute;
            top: 71px;
            left: 653px;
            font-size: 64px;
            font-family: 'Cinzel', serif;
            font-weight: 700;
            line-height: 87px;
            color: #ffffff;
            z-index: 16;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
        }

        /* Hero Section */
        .hero-title {
            position: absolute;
            top: 512px;
            left: 351px;
            width: 802px;
            height: 202px;
            font-size: 75px;
            font-family: 'Cinzel', serif;
            font-weight: 700;
            line-height: 101px;
            text-align: center;
            color: #000000;
            z-index: 20;
            box-shadow: 0px 4px 4px rgba(0,0,0,0.25);
            text-shadow: 2px 2px 4px rgba(255,255,255,0.8);
        }

        .hero-subtitle {
            position: absolute;
            top: 714px;
            left: 223px;
            width: 1048px;
            height: 61px;
            font-size: 20px;
            font-family: 'Inter', sans-serif;
            line-height: 24px;
            text-align: center;
            color: #000000;
            z-index: 21;
            font-style: italic;
        }

        /* Responsive Design */
        @media (max-width: 1440px) {
            .main-container {
                width: 100%;
                max-width: 1440px;
            }
        }

        @media (max-width: 768px) {
            .main-container {
                height: auto;
                min-height: 100vh;
            }

            .navbar {
                flex-direction: column;
                height: auto;
                padding: 20px;
                gap: 20px;
            }

            .search-container {
                width: 100%;
                max-width: 400px;
            }

            .nav-menu {
                gap: 30px;
                flex-wrap: wrap;
                justify-content: center;
            }

            .hero-title {
                font-size: 45px;
                line-height: 60px;
                width: 90%;
                left: 5%;
                top: 400px;
            }

            .hero-subtitle {
                width: 90%;
                left: 5%;
                top: 600px;
                font-size: 16px;
            }

            .logo {
                left: 50%;
                transform: translateX(-50%);
                width: 80px;
                height: 110px;
            }

            .brand-text {
                left: 50%;
                transform: translateX(-50%);
                font-size: 48px;
                text-align: center;
                width: 300px;
            }
        }

        /* Dropdown Menu Styles */
        .dropdown {
            position: relative;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            background-color: #ffffff;
            min-width: 200px;
            box-shadow: 0px 8px 16px rgba(0,0,0,0.2);
            border-radius: 8px;
            z-index: 100;
            padding: 10px 0;
        }

        .dropdown-content a {
            color: #000000;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            font-size: 18px;
            transition: background-color 0.3s ease;
        }

        .dropdown-content a:hover {
            background-color: #f1f1f1;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        /* Loading and Interactive States */
        .loading {
            opacity: 0.6;
            pointer-events: none;
        }

        .search-container.active {
            box-shadow: 0 0 10px rgba(250, 5, 5, 0.3);
        }

        /* Animation for hero text */
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

        .hero-title, .hero-subtitle {
            animation: fadeInUp 1s ease-out;
        }
    </style>
</head>
<body>
    <div class="main-container">
        <!-- Background Images -->
        <img src="images/img_image_1.png" alt="Indonesian Food Background 1" class="bg-image-1">
        <img src="images/img_92bdbb2f7c4e461e8d7608d91e7754c6.png" alt="Indonesian Food Background 2" class="bg-image-2">
        <img src="images/img_b707612e60454c568b29bc4e095a5c54_1.png" alt="Indonesian Food Background 3" class="bg-image-3">
        <img src="images/img_image.png" alt="Indonesian Food Background 4" class="bg-image-4">
        <img src="images/img_image_2.png" alt="Indonesian Food Background 5" class="bg-image-5">
        <img src="images/taliwang.png" alt="Indonesian Food Background 6" class="bg-image-6">

        <!-- Navigation Bar -->
        <nav class="navbar">
            <!-- Search Container -->
            <div class="search-container">
                <input type="text" class="search-input" placeholder="Cari kuliner apa?" id="searchInput">
                <img src="images/img_search.svg" alt="Search" class="search-icon" onclick="performSearch()">
            </div>

            <!-- Navigation Menu -->
            <div class="nav-menu">
                <div class="nav-item dropdown">
                    <a href="#menu" class="nav-text">Menu</a>
                    <img src="images/img_icon.svg" alt="Menu Icon" class="nav-icon">
                    <div class="dropdown-content">
                        <a href="/lokasi">Peta Indonesia</a>
                        <a href="/resep">Resep Makanan</a>
                        <a href="/makanan">Makanan Daerah</a>
                    </div>
                </div>

                <div class="nav-item dropdown">
                    <a href="#bahasa" class="nav-text">Bahasa</a>
                    <img src="images/img_icon.svg" alt="Language Icon" class="nav-icon">
                    <div class="dropdown-content">
                        <a href="#" onclick="changeLanguage('id')">Bahasa Indonesia</a>
                        <a href="#" onclick="changeLanguage('en')">English</a>
                        <a href="#" onclick="changeLanguage('jv')">Bahasa Jawa</a>
                    </div>
                </div>

                <div class="nav-item">
                    <a href="#tentang" onclick="pindahtentang()" class="nav-text">Tentang Kami</a>
                </div>
            </div>

            <!-- Login Button -->
            <button class="login-btn" onclick="showLogin()">
                <span class="login-text">Login</span>
            </button>
        </nav>

        <!-- Logo and Brand -->
        <img src="images/img_screenshot20250527145618removebgpreview_1.png" alt="Foodnesia Logo" class="logo">
        <h1 class="brand-text">FOODNESIA</h1>

        <!-- Hero Section -->
        <h2 class="hero-title">Terbang Menjajaki Rasa Nusantara</h2>
        <p class="hero-subtitle">"Rasa Lokal. Cita Rasa Nusantara. Dibuat dengan bangga, disajikan dengan cinta."</p>
    </div>

    <!-- Login Modal -->
    <div id="loginModal" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0,0,0,0.5); z-index: 1000; justify-content: center; align-items: center;">
        <div style="background-color: white; padding: 40px; border-radius: 10px; width: 400px; max-width: 90%;">
            <h3 style="margin-bottom: 20px; text-align: center; color: #fa0505;">Login ke Foodnesia</h3>
            <form id="loginForm">
                <div style="margin-bottom: 15px;">
                    <label style="display: block; margin-bottom: 5px;">Email:</label>
                    <input type="email" id="email" required style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px;">
                </div>
                <div style="margin-bottom: 20px;">
                    <label style="display: block; margin-bottom: 5px;">Password:</label>
                    <input type="password" id="password" required style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px;">
                </div>
                <div style="display: flex; gap: 10px;">
                    <button type="submit" style="flex: 1; padding: 12px; background-color: #fa0505; color: white; border: none; border-radius: 5px; cursor: pointer;">Login</button>
                    <button type="button" onclick="closeLogin()" style="flex: 1; padding: 12px; background-color: #ccc; color: black; border: none; border-radius: 5px; cursor: pointer;">Batal</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        // Search functionality
        function performSearch() {
            const searchInput = document.getElementById('searchInput');
            const query = searchInput.value.trim();
            
            if (query) {
                // Add loading state
                const searchContainer = document.querySelector('.search-container');
                searchContainer.classList.add('loading');
                
                // Simulate search
                setTimeout(() => {
                    alert(`Mencari: "${query}". Fitur pencarian akan segera tersedia!`);
                    searchContainer.classList.remove('loading');
                    searchContainer.classList.add('active');
                    
                    // Remove active state after 2 seconds
                    setTimeout(() => {
                        searchContainer.classList.remove('active');
                    }, 2000);
                }, 1000);
            } else {
                alert('Silakan masukkan kata kunci pencarian.');
            }
        }

        // Enter key search
        document.getElementById('searchInput').addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                performSearch();
            }
        });

        // Language change functionality
        function changeLanguage(lang) {
            const messages = {
                'id': 'Bahasa diubah ke Bahasa Indonesia',
                'en': 'Language changed to English',
                'jv': 'Basa diganti dadi Basa Jawa'
            };
            
            alert(messages[lang] || 'Bahasa berhasil diubah');
            
            // Here you would typically implement actual language switching
            console.log('Language changed to:', lang);
        }
        function pindahtentang(){
            window.location.href = '/tentang';
        }
        // Login modal functionality
        function showLogin() {
        window.location.href = '/login'; // arahkan ke route Laravel
        }

        function closeLogin() {
            document.getElementById('loginModal').style.display = 'none';
            document.body.style.overflow = 'auto';
        }

        // Login form submission
        document.getElementById('loginForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;
            
            // Basic validation
            if (!email || !password) {
                alert('Silakan isi semua field.');
                return;
            }
            
            if (!email.includes('@')) {
                alert('Format email tidak valid.');
                return;
            }
            
            if (password.length < 6) {
                alert('Password minimal 6 karakter.');
                return;
            }
            
            // Simulate login process
            const submitBtn = e.target.querySelector('button[type="submit"]');
            submitBtn.textContent = 'Logging in...';
            submitBtn.disabled = true;
            
            setTimeout(() => {
                alert('Login berhasil! Selamat datang di Foodnesia.');
                closeLogin();
                
                // Reset form
                document.getElementById('loginForm').reset();
                submitBtn.textContent = 'Login';
                submitBtn.disabled = false;
            }, 2000);
        });

        // Close modal when clicking outside
        document.getElementById('loginModal').addEventListener('click', function(e) {
            if (e.target === this) {
                closeLogin();
            }
        });

        // Navigation functionality
        document.querySelectorAll('.nav-text').forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                const target = this.getAttribute('href');
                
                if (target === '#tentang-kami') {
                    alert('Halaman Tentang Kami akan segera tersedia!');
                } else if (target === '#menu') {
                    alert('Menu makanan akan segera ditampilkan!');
                }
            });
        });

        // Smooth scrolling for internal links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    e.preventDefault();
                    target.scrollIntoView({
                        behavior: 'smooth'
                    });
                }
            });
        });

        // Add some interactive feedback
        document.querySelectorAll('.nav-item, .login-btn').forEach(element => {
            element.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-2px)';
                this.style.transition = 'transform 0.3s ease';
            });
            
            element.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0)';
            });
        });

        // Initialize page
        document.addEventListener('DOMContentLoaded', function() {
            console.log('Foodnesia homepage loaded successfully!');
            
            // Add fade-in animation to hero elements
            setTimeout(() => {
                document.querySelector('.hero-title').style.opacity = '1';
                document.querySelector('.hero-subtitle').style.opacity = '1';
            }, 500);
        });
    </script>
</body>
</html>