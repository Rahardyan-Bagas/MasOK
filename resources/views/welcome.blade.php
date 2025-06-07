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

        /* Food Images */
        .food-image-1 {
            position: absolute;
            left: 361px;
            top: 0px;
            width: 363px;
            height: 172px;
            z-index: 1;
        }

        .food-image-2 {
            position: absolute;
            left: 0px;
            top: 278px;
            width: 1440px;
            height: 746px;
            z-index: 2;
        }

        .food-image-3 {
            position: absolute;
            left: 0px;
            top: 392px;
            width: 1440px;
            height: 518px;
            z-index: 3;
        }

        .food-image-4 {
            position: absolute;
            left: 724px;
            top: 0px;
            width: 357px;
            height: 172px;
            z-index: 4;
        }

        .food-image-5 {
            position: absolute;
            left: 0px;
            top: 0px;
            width: 361px;
            height: 172px;
            z-index: 5;
        }

        .food-image-6 {
            position: absolute;
            left: 1081px;
            top: 0px;
            width: 359px;
            height: 172px;
            z-index: 6;
        }

        /* Header Section */
        .header-section {
            position: absolute;
            left: 0px;
            top: 171px;
            width: 1440px;
            height: 106px;
            background-color: #fa0505;
            z-index: 10;
        }

        .language-selector {
            position: absolute;
            right: 145px;
            top: 40px;
            display: flex;
            align-items: center;
            gap: 10px;
            cursor: pointer;
        }

        .language-text {
            font-size: 22px;
            font-family: Roboto, sans-serif;
            font-weight: 400;
            line-height: 26px;
            color: #ffffff;
        }

        .language-icon {
            width: 24px;
            height: 24px;
        }

        .search-container {
            position: absolute;
            left: 463px;
            top: 28px;
            width: 514px;
            height: 49px;
            background-color: #ffffff;
            border-radius: 24px;
            display: flex;
            align-items: center;
            padding: 0 30px;
            gap: 20px;
        }

        .search-input {
            flex: 1;
            border: none;
            outline: none;
            font-size: 25px;
            font-family: Inter, sans-serif;
            font-weight: 400;
            line-height: 31px;
            color: #000000;
            background: transparent;
        }

        .search-input::placeholder {
            color: #000000;
        }

        .search-icon {
            width: 30px;
            height: 29px;
            cursor: pointer;
        }

        .menu-button {
            position: absolute;
            right: 0px;
            top: 0px;
            width: 110px;
            height: 106px;
            background-color: #fa0505;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
        }

        .menu-icon {
            width: 48px;
            height: 48px;
        }

        /* Logo Section */
        .logo-image {
            position: absolute;
            left: 542px;
            top: 17px;
            width: 97px;
            height: 138px;
            z-index: 15;
        }

        .logo-text {
            position: absolute;
            left: 653px;
            top: 71px;
            font-size: 64px;
            font-family: Cinzel, serif;
            font-weight: 700;
            line-height: 87px;
            color: #ffffff;
            z-index: 16;
        }

        /* Main Content */
        .main-heading {
            position: absolute;
            left: 351px;
            top: 512px;
            width: 802px;
            height: 202px;
            font-size: 75px;
            font-family: Cinzel, serif;
            font-weight: 700;
            line-height: 101px;
            text-align: center;
            color: #000000;
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
            z-index: 20;
        }

        .tagline {
            position: absolute;
            left: 223px;
            top: 714px;
            width: 1048px;
            height: 61px;
            font-size: 20px;
            font-family: Inter, sans-serif;
            font-weight: 400;
            line-height: 24px;
            text-align: center;
            color: #000000;
            z-index: 21;
        }

        /* Language Dropdown */
        .language-dropdown {
            position: absolute;
            top: 100%;
            right: 0;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
            min-width: 120px;
            display: none;
            z-index: 100;
        }

        .language-dropdown.active {
            display: block;
        }

        .language-option {
            padding: 12px 16px;
            color: #000000;
            cursor: pointer;
            transition: background-color 0.2s;
        }

        .language-option:hover {
            background-color: #f5f5f5;
        }

        .language-option:first-child {
            border-radius: 8px 8px 0 0;
        }

        .language-option:last-child {
            border-radius: 0 0 8px 8px;
        }

        /* Mobile Menu */
        .mobile-menu {
            position: fixed;
            top: 0;
            right: -300px;
            width: 300px;
            height: 100vh;
            background-color: #fa0505;
            transition: right 0.3s ease;
            z-index: 1000;
            padding: 20px;
        }

        .mobile-menu.active {
            right: 0;
        }

        .mobile-menu-close {
            position: absolute;
            top: 20px;
            right: 20px;
            background: none;
            border: none;
            color: #ffffff;
            font-size: 24px;
            cursor: pointer;
        }

        .mobile-menu-items {
            margin-top: 60px;
        }

        .mobile-menu-item {
            display: block;
            color: #ffffff;
            text-decoration: none;
            padding: 15px 0;
            border-bottom: 1px solid rgba(255, 255, 255, 0.2);
            font-size: 18px;
        }

        .mobile-menu-item:hover {
            background-color: rgba(255, 255, 255, 0.1);
        }

        /* Search Results */
        .search-results {
            position: absolute;
            top: 100%;
            left: 0;
            right: 0;
            background-color: #ffffff;
            border-radius: 0 0 24px 24px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
            max-height: 300px;
            overflow-y: auto;
            display: none;
            z-index: 50;
        }

        .search-results.active {
            display: block;
        }

        .search-result-item {
            padding: 15px 30px;
            cursor: pointer;
            border-bottom: 1px solid #f0f0f0;
            transition: background-color 0.2s;
        }

        .search-result-item:hover {
            background-color: #f9f9f9;
        }

        .search-result-item:last-child {
            border-bottom: none;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .main-container {
                width: 100%;
                height: auto;
                min-height: 100vh;
            }

            .header-section {
                width: 100%;
            }

            .search-container {
                left: 20px;
                width: calc(100% - 160px);
            }

            .language-selector {
                right: 20px;
            }

            .main-heading {
                left: 20px;
                width: calc(100% - 40px);
                font-size: 48px;
                line-height: 60px;
            }

            .tagline {
                left: 20px;
                width: calc(100% - 40px);
                font-size: 16px;
            }

            .logo-text {
                font-size: 48px;
                left: 50%;
                transform: translateX(-50%);
            }
        }

        @media (max-width: 480px) {
            .search-container {
                left: 10px;
                width: calc(100% - 140px);
            }

            .search-input {
                font-size: 18px;
            }

            .main-heading {
                font-size: 36px;
                line-height: 48px;
            }

            .logo-text {
                font-size: 36px;
            }
        }
    </style>
</head>
<body>
    <div class="main-container">
        <!-- Food Images -->
        <img src="../assets/images/img_image_1.png" alt="Indonesian Traditional Food" class="food-image-1">
        <img src="../assets/images/img_92bdbb2f7c4e461e8d7608d91e7754c6.png" alt="Indonesian Cuisine Background" class="food-image-2">
        <img src="../assets/images/img_b707612e60454c568b29bc4e095a5c54_1.png" alt="Nusantara Food Collection" class="food-image-3">
        <img src="../assets/images/img_image.png" alt="Traditional Indonesian Dishes" class="food-image-4">
        <img src="../assets/images/img_image_2.png" alt="Local Indonesian Food" class="food-image-5">
        <img src="../assets/images/img_image_172x359.png" alt="Indonesian Street Food" class="food-image-6">

        <!-- Header Section -->
        <header class="header-section">
            <!-- Language Selector -->
            <div class="language-selector" onclick="toggleLanguageDropdown()">
                <span class="language-text">Bahasa</span>
                <img src="../assets/images/img_icon.svg" alt="Language Icon" class="language-icon">
                <div class="language-dropdown" id="languageDropdown">
                    <div class="language-option" onclick="changeLanguage('id')">Bahasa Indonesia</div>
                    <div class="language-option" onclick="changeLanguage('en')">English</div>
                    <div class="language-option" onclick="changeLanguage('jv')">Bahasa Jawa</div>
                </div>
            </div>

            <!-- Search Container -->
            <div class="search-container">
                <input type="text" class="search-input" placeholder="Cari kuliner apa?" id="searchInput" oninput="handleSearch()">
                <img src="../assets/images/img_search.svg" alt="Search" class="search-icon" onclick="performSearch()">
                <div class="search-results" id="searchResults">
                    <!-- Search results will be populated here -->
                </div>
            </div>

            <!-- Mobile Menu Button -->
            <div class="menu-button" onclick="toggleMobileMenu()">
                <img src="../assets/images/img_menu.svg" alt="Menu" class="menu-icon">
            </div>
        </header>

        <!-- Logo Section -->
        <img src="../assets/images/img_screenshot20250527145618removebgpreview_1.png" alt="Foodnesia Logo" class="logo-image">
        <h1 class="logo-text">FOODNESIA</h1>

        <!-- Main Content -->
        <h2 class="main-heading">Terbang Menjajaki Rasa Nusantara</h2>
        <p class="tagline">"Rasa Lokal. Cita Rasa Nusantara. Dibuat dengan bangga, disajikan dengan cinta."</p>

        <!-- Mobile Menu -->
        <nav class="mobile-menu" id="mobileMenu">
            <button class="mobile-menu-close" onclick="toggleMobileMenu()">&times;</button>
            <div class="mobile-menu-items">
                <a href="#" class="mobile-menu-item">Beranda</a>
                <a href="#" class="mobile-menu-item">Resep</a>
                <a href="#" class="mobile-menu-item">Restoran</a>
                <a href="#" class="mobile-menu-item">Kuliner Daerah</a>
                <a href="#" class="mobile-menu-item">Tentang Kami</a>
                <a href="#" class="mobile-menu-item">Kontak</a>
            </div>
        </nav>
    </div>

    <script>
        // Sample culinary data for search
        const culinaryData = [
            { name: "Rendang", region: "Sumatera Barat", type: "Makanan Utama" },
            { name: "Gudeg", region: "Yogyakarta", type: "Makanan Utama" },
            { name: "Sate Ayam", region: "Jawa", type: "Makanan Utama" },
            { name: "Gado-gado", region: "Jakarta", type: "Salad" },
            { name: "Nasi Padang", region: "Sumatera Barat", type: "Makanan Utama" },
            { name: "Bakso", region: "Jawa Timur", type: "Sup" },
            { name: "Soto Ayam", region: "Jawa Tengah", type: "Sup" },
            { name: "Pecel Lele", region: "Jawa", type: "Makanan Utama" },
            { name: "Ayam Betutu", region: "Bali", type: "Makanan Utama" },
            { name: "Pempek", region: "Sumatera Selatan", type: "Makanan Ringan" }
        ];

        // Language functionality
        function toggleLanguageDropdown() {
            const dropdown = document.getElementById('languageDropdown');
            dropdown.classList.toggle('active');
        }

        function changeLanguage(lang) {
            const languageText = document.querySelector('.language-text');
            const searchInput = document.getElementById('searchInput');
            
            switch(lang) {
                case 'id':
                    languageText.textContent = 'Bahasa';
                    searchInput.placeholder = 'Cari kuliner apa?';
                    break;
                case 'en':
                    languageText.textContent = 'English';
                    searchInput.placeholder = 'What cuisine are you looking for?';
                    break;
                case 'jv':
                    languageText.textContent = 'Jawa';
                    searchInput.placeholder = 'Golek kuliner apa?';
                    break;
            }
            
            toggleLanguageDropdown();
        }

        // Search functionality
        function handleSearch() {
            const searchInput = document.getElementById('searchInput');
            const searchResults = document.getElementById('searchResults');
            const query = searchInput.value.toLowerCase().trim();

            if (query.length === 0) {
                searchResults.classList.remove('active');
                return;
            }

            const filteredResults = culinaryData.filter(item => 
                item.name.toLowerCase().includes(query) || 
                item.region.toLowerCase().includes(query) ||
                item.type.toLowerCase().includes(query)
            );

            displaySearchResults(filteredResults);
        }

        function displaySearchResults(results) {
            const searchResults = document.getElementById('searchResults');
            
            if (results.length === 0) {
                searchResults.innerHTML = '<div class="search-result-item">Tidak ada hasil ditemukan</div>';
            } else {
                searchResults.innerHTML = results.map(item => 
                    `<div class="search-result-item" onclick="selectSearchResult('${item.name}')">
                        <strong>${item.name}</strong><br>
                        <small>${item.region} • ${item.type}</small>
                    </div>`
                ).join('');
            }
            
            searchResults.classList.add('active');
        }

        function selectSearchResult(itemName) {
            const searchInput = document.getElementById('searchInput');
            const searchResults = document.getElementById('searchResults');
            
            searchInput.value = itemName;
            searchResults.classList.remove('active');
            
            // Simulate navigation to recipe/restaurant page
            alert(`Menampilkan hasil untuk: ${itemName}`);
        }

        function performSearch() {
            const searchInput = document.getElementById('searchInput');
            const query = searchInput.value.trim();
            
            if (query) {
                alert(`Mencari: ${query}`);
                // Here you would typically navigate to search results page
            }
        }

        // Mobile menu functionality
        function toggleMobileMenu() {
            const mobileMenu = document.getElementById('mobileMenu');
            mobileMenu.classList.toggle('active');
        }

        // Close dropdowns when clicking outside
        document.addEventListener('click', function(event) {
            const languageSelector = document.querySelector('.language-selector');
            const languageDropdown = document.getElementById('languageDropdown');
            const searchContainer = document.querySelector('.search-container');
            const searchResults = document.getElementById('searchResults');

            if (!languageSelector.contains(event.target)) {
                languageDropdown.classList.remove('active');
            }

            if (!searchContainer.contains(event.target)) {
                searchResults.classList.remove('active');
            }
        });

        // Handle Enter key in search
        document.getElementById('searchInput').addEventListener('keypress', function(event) {
            if (event.key === 'Enter') {
                performSearch();
            }
        });

        // Simulate loading animation
        window.addEventListener('load', function() {
            document.body.style.opacity = '0';
            document.body.style.transition = 'opacity 0.5s ease';
            
            setTimeout(() => {
                document.body.style.opacity = '1';
            }, 100);
        });
    </script>
</body>
</html>