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
                    searchInput.placeholder = 'Golek kuliner opo?';
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