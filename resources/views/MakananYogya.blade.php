<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Narad Yogyakarta Food Search</title>
    <style>
        /* Reset dan dasar */
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: #fff;
            min-height: 100vh;
        }

        /* Main container */
        .main-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            position: relative;
        }

        .content-container {
    background-color: #fff;
    border-radius: 15px;
    padding: 20px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    max-width: 800px;
    margin: 0 auto;
    margin-top: 20px;
    position: relative;
    z-index: 1;
}


        /* Background */
        .background-image {
            position: fixed;
            top: 0;
            left: 0;
            z-index: -1;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* Logo */
        .logo-container {
    position: absolute;
    top: 20px;
    left: -100px;
    width: 120px;
    height: auto;
    margin-bottom: 0; /* hapus margin bawah */
    z-index: 10; /* supaya di atas background */
}

        .logo-image {
            width: 100%;
            height: 60px;
            object-fit: contain;
        }

        /* Header title */
        .page-title {
    font-size: 48px;
    font-weight: 700;
    text-align: center;
    margin: 20px 0;
    color: #000;
}

        /* Top Bar: Lokasi + Menu Icon di kanan atas */
        .top-bar {
    position: absolute;
    top: 20px;
    right: 20px;
    display: flex;
    gap: 10px;
    align-items: center;
}

        .lokasi-text {
            font-size: 30px;
            font-weight: 600;
            color: #000;
        }

        .menu-icon {
            width: 40px;
            height: 40px;
            cursor: pointer;
        }
        /* Search */
        .search-container {
            display: flex;
            align-items: center;
            margin: 20px 0;
            border: 1px solid #000;
            border-radius: 15px;
            padding: 10px 15px;
            max-width: 750px;
        }
        
        .search-input {
            flex: 1;
            font-size: 20px;
            border: none;
            outline: none;
            background: transparent;
            color: #000;
        }

        .search-input::placeholder {
            color: #aaa;
        }

        .search-icon {
            width: 32px;
            height: 32px;
            cursor: pointer;
        }

        /* Restaurant cards */
        .restaurant-card {
            background-color: #fff;
            border-radius: 15px;
            margin-bottom: 20px;
            display: flex;
            gap: 15px;
            padding: 15px;
            align-items: flex-start;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s ease, box-shadow 0.2s ease;
            cursor: pointer;
        }

        .restaurant-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
        }

        .restaurant-image {
            width: 200px;
            height: 150px;
            border-radius: 10px;
            object-fit: cover;
            flex-shrink: 0;
        }

        .restaurant-info {
            flex: 1;
        }

        .restaurant-name {
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 8px;
        }

        .restaurant-rating {
            font-size: 18px;
            margin-bottom: 5px;
        }

        .restaurant-details {
            font-size: 16px;
            color: #555;
        }

        .star-rating {
            color: #ffa500;
        }

        /* Lokasi & menu */
        .location-container {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background: #fff;
            padding: 10px;
            border-radius: 15px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
        }

        .menu-icon {
            width: 30px;
            height: 30px;
            cursor: pointer;
        }

        /* Mobile Menu */
        .mobile-menu {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 999;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.8);
            justify-content: center;
            align-items: center;
        }

        .mobile-menu.active {
            display: flex;
        }

        .mobile-menu-content {
            background: #fff;
            padding: 30px;
            border-radius: 10px;
            text-align: center;
        }

        .mobile-menu-item {
            display: block;
            padding: 12px 0;
            font-size: 20px;
            color: #000;
            text-decoration: none;
        }

        .mobile-menu-item:hover {
            background: #f0f0f0;
        }

        .close-menu {
            position: absolute;
            top: 10px;
            right: 20px;
            font-size: 30px;
            cursor: pointer;
        }

        /* Responsif */
        @media (max-width: 768px) {
            .main-container {
                padding: 15px;
            }

            .page-title {
                font-size: 32px;
            }

            .restaurant-card {
                flex-direction: column;
                align-items: center;
            }

            .restaurant-image {
                width: 100%;
                height: 180px;
            }

            .location-container {
                bottom: 10px;
                right: 10px;
            }
            @media (max-width: 768px) {
            .top-bar {
                flex-direction: row;
                justify-content: space-between;
            }

            .lokasi-text {
                font-size: 18px;
            }
        }

        }
    </style>
</head>

<body>
    <div class="main-container">
        <!-- Background Image -->
        <img src="images/img_image_15.png" alt="Traditional Indonesian Batik Background"
            class="background-image">

        <!-- Logo Container -->
        <div class="logo-container">
            <img src="images/img_screenshot20250527145618removebgpreview_1.png" onclick="pindahhome()" alt="Narad Logo"
                class="logo-image">
        </div>

        <!-- Top Bar: Lokasi + Menu -->
        <div class="top-bar">
            <span class="lokasi-text">Lokasi</span>
            <img src="images/img_menu.svg" alt="Menu" class="menu-icon" onclick="toggleMobileMenu()">
        </div>

        <!-- Page Title -->
        <h1 class="page-title">Yogyakarta</h1>

        <!-- Main Content Container -->
        <div class="content-container">
            <!-- Search Container -->
            <div class="search-container">
                <input type="text" class="search-input" placeholder="Cari kuliner apa?" id="searchInput">
                <img src="images/img_search.svg" alt="Search" class="search-icon" onclick="performSearch()">
            </div>

            <!-- Restaurant Cards -->
            <div class="restaurant-card restaurant-card-1" onclick="pindahrestoran()">
                <img src="images/img_button.png" alt="Iga BAJOG Restaurant"
                    class="restaurant-image restaurant-image-1">
                <div class="restaurant-info">
                    <div class="restaurant-name">Iga BAJOG (Iga Bakar Jogja)</div>
                    <div class="restaurant-rating">4.3 <span class="star-rating">★★★★☆</span> (6,1 rb) • $$ • Daging
                    </div>
                    <div class="restaurant-details">Jl. Ring Road Utara No.1, RW.2</div>
                    <div class="restaurant-details">Makan di tempat • Drive-through • Antar tanpa bertemu</div>
                </div>
            </div>

            <div class="restaurant-card restaurant-card-2" onclick="openRestaurant('gudeg')">
                <img src="images/img_image_16.png" alt="Gudeg Yu Djum Restaurant"
                    class="restaurant-image restaurant-image-2">
                <div class="restaurant-info">
                    <div class="restaurant-name">Gudeg Yu Djum Wijilan 167</div>
                    <div class="restaurant-rating">4.5 <span class="star-rating">★★★★★</span> (605) • $$ • Jawa</div>
                    <div class="restaurant-details">Kota Yogyakarta, Daerah Istimewa Yogyakarta</div>
                    <div class="restaurant-details">Makan di tempat • Bawa pulang • Pesan antar</div>
                </div>
            </div>

            <div class="restaurant-card restaurant-card-3" onclick="openRestaurant('sate')">
                <img src="images/img_image_17.png" alt="Sate Klathak Pak Pong"
                    class="restaurant-image restaurant-image-3">
                <div class="restaurant-info">
                    <div class="restaurant-name">Sate Klathak Pak Pong</div>
                    <div class="restaurant-rating">4.3 <span class="star-rating">★★★★☆</span> (29 rb) • $$ • Sate</div>
                    <div class="restaurant-details">Jl. Sultan Agung No.18</div>
                    <div class="restaurant-details">Makan di tempat • Bawa pulang • Pesan antar</div>
                </div>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div class="mobile-menu" id="mobileMenu">
            <div class="mobile-menu-content">
                <span class="close-menu" onclick="toggleMobileMenu()">&times;</span>
                <a href="#" class="mobile-menu-item" onclick="navigateTo('home')">Beranda</a>
                <a href="#" class="mobile-menu-item" onclick="navigateTo('search')">Pencarian</a>
                <a href="#" class="mobile-menu-item" onclick="navigateTo('favorites')">Favorit</a>
                <a href="#" class="mobile-menu-item" onclick="navigateTo('profile')">Profil</a>
                <a href="#" class="mobile-menu-item" onclick="navigateTo('settings')">Pengaturan</a>
            </div>
        </div>
    </div>

    <script>
        // Search functionality
        function performSearch() {
            const searchInput = document.getElementById('searchInput');
            const searchTerm = searchInput.value.trim();

            if (searchTerm) {
                // Simulate search results
                alert(`Mencari: "${searchTerm}". Hasil pencarian akan ditampilkan di sini.`);
                console.log('Searching for:', searchTerm);

                // In a real application, this would make an API call
                // and update the restaurant listings
                simulateSearchResults(searchTerm);
            } else {
                alert('Silakan masukkan kata kunci pencarian.');
            }
        }

        // Simulate search results
        function simulateSearchResults(searchTerm) {
            const restaurants = [
                { name: 'Iga BAJOG', type: 'Daging', rating: 4.3 },
                { name: 'Gudeg Yu Djum', type: 'Jawa', rating: 4.5 },
                { name: 'Sate Klathak', type: 'Sate', rating: 4.3 },
                { name: 'Warung Handayani', type: 'Jawa', rating: 4.2 },
                { name: 'Bakpia Pathok', type: 'Dessert', rating: 4.4 }
            ];

            const filteredResults = restaurants.filter(restaurant =>
                restaurant.name.toLowerCase().includes(searchTerm.toLowerCase()) ||
                restaurant.type.toLowerCase().includes(searchTerm.toLowerCase())
            );

            console.log('Search results:', filteredResults);
        }
        function pindahrestoran(){
            window.location.href = '/restoran';
        }
        function pindahhome(){
            window.location.href = '/home';
        }

        // Restaurant navigation
        function openRestaurant(restaurantId) {
            const restaurantData = {
                'bajog': {
                    name: 'Iga BAJOG (Iga Bakar Jogja)',
                    rating: 4.3,
                    address: 'Jl. Ring Road Utara No.1, RW.2',
                    cuisine: 'Daging',
                    services: ['Makan di tempat', 'Drive-through', 'Antar tanpa bertemu']
                },
                'gudeg': {
                    name: 'Gudeg Yu Djum Wijilan 167',
                    rating: 4.5,
                    address: 'Kota Yogyakarta, Daerah Istimewa Yogyakarta',
                    cuisine: 'Jawa',
                    services: ['Makan di tempat', 'Bawa pulang', 'Pesan antar']
                },
                'sate': {
                    name: 'Sate Klathak Pak Pong',
                    rating: 4.3,
                    address: 'Jl. Sultan Agung No.18',
                    cuisine: 'Sate',
                    services: ['Makan di tempat', 'Bawa pulang', 'Pesan antar']
                }
            };

            const restaurant = restaurantData[restaurantId];
            if (restaurant) {
                alert(`Membuka detail ${restaurant.name}\
Rating: ${restaurant.rating}\
Alamat: ${restaurant.address}\
Layanan: ${restaurant.services.join(', ')}`);
                console.log('Opening restaurant:', restaurant);
            }
        }

        // Mobile menu toggle
        function toggleMobileMenu() {
            const mobileMenu = document.getElementById('mobileMenu');
            mobileMenu.classList.toggle('active');
        }

        // Navigation function
        function navigateTo(page) {
            alert(`Navigasi ke halaman: ${page}`);
            console.log('Navigating to:', page);
            toggleMobileMenu(); // Close menu after navigation
        }
        

        // Search on Enter key
        document.getElementById('searchInput').addEventListener('keypress', function (e) {
            if (e.key === 'Enter') {
                performSearch();
            }
        });

        // Close mobile menu when clicking outside
        document.getElementById('mobileMenu').addEventListener('click', function (e) {
            if (e.target === this) {
                toggleMobileMenu();
            }
        });

        // Simulate loading state
        window.addEventListener('load', function () {
            console.log('Narad Yogyakarta Food Search page loaded successfully');

            // Add some interactive feedback
            const restaurantCards = document.querySelectorAll('.restaurant-card');
            restaurantCards.forEach(card => {
                card.addEventListener('mouseenter', function () {
                    this.style.transform = 'translateY(-2px)';
                    this.style.boxShadow = '0 4px 12px rgba(0,0,0,0.1)';
                });

                card.addEventListener('mouseleave', function () {
                    this.style.transform = 'translateY(0)';
                    this.style.boxShadow = 'none';
                });
            });
        });

        // Simulate geolocation for location services
        function getCurrentLocation() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(
                    function (position) {
                        console.log('Current location:', position.coords.latitude, position.coords.longitude);
                        alert('Lokasi saat ini berhasil dideteksi!');
                    },
                    function (error) {
                        console.log('Geolocation error:', error);
                        alert('Tidak dapat mendeteksi lokasi. Silakan aktifkan GPS.');
                    }
                );
            } else {
                alert('Geolocation tidak didukung oleh browser ini.');
            }
        }

        // Initialize location on page load
        setTimeout(getCurrentLocation, 1000);
    </script>
</body>

</html>