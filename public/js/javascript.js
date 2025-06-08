
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

            window.onload = function() {
            window.location.href = "./pages/LokasiIndonesiaMapPage.html";
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
    
        // Location data
        const locationData = {
            'Jakarta': {
                name: 'Jakarta',
                description: 'Capital city of Indonesia, major business and cultural center.',
                population: '10.7 million',
                region: 'Java'
            },
            'Bandung': {
                name: 'Bandung',
                description: 'Known as Paris van Java, famous for fashion and culinary.',
                population: '2.5 million',
                region: 'West Java'
            },
            'Medan': {
                name: 'Medan',
                description: 'Largest city in Sumatra, gateway to Lake Toba.',
                population: '2.4 million',
                region: 'North Sumatra'
            },
            'Palembang': {
                name: 'Palembang',
                description: 'Historic city known for Ampera Bridge and pempek.',
                population: '1.7 million',
                region: 'South Sumatra'
            },
            'Pekanbaru': {
                name: 'Pekanbaru',
                description: 'Oil city and economic center of Riau province.',
                population: '1.1 million',
                region: 'Riau'
            },
            'Padang': {
                name: 'Padang',
                description: 'Capital of West Sumatra, famous for Minang cuisine.',
                population: '900,000',
                region: 'West Sumatra'
            },
            'Jambi': {
                name: 'Jambi',
                description: 'Historic sultanate city with rich cultural heritage.',
                population: '600,000',
                region: 'Jambi'
            },
            'Bengkulu': {
                name: 'Bengkulu',
                description: 'Coastal city with beautiful beaches and Fort Marlborough.',
                population: '400,000',
                region: 'Bengkulu'
            },
            'Lampung': {
                name: 'Lampung',
                description: 'Gateway between Sumatra and Java, known for Way Kambas.',
                population: '1.2 million',
                region: 'Lampung'
            },
            'Semarang': {
                name: 'Semarang',
                description: 'Port city with Dutch colonial architecture.',
                population: '1.8 million',
                region: 'Central Java'
            },
            'Surabaya': {
                name: 'Surabaya',
                description: 'Second largest city in Indonesia, major industrial center.',
                population: '2.9 million',
                region: 'East Java'
            },
            'Yogyakarta': {
                name: 'Yogyakarta',
                description: 'Cultural heart of Java, home to Borobudur and Prambanan.',
                population: '400,000',
                region: 'Special Region of Yogyakarta'
            },
            'Solo': {
                name: 'Solo',
                description: 'Royal city with traditional Javanese culture.',
                population: '500,000',
                region: 'Central Java'
            },
            'Malang': {
                name: 'Malang',
                description: 'Cool mountain city, educational center of East Java.',
                population: '900,000',
                region: 'East Java'
            },
            'Kediri': {
                name: 'Kediri',
                description: 'Historic city known for sugar industry.',
                population: '300,000',
                region: 'East Java'
            },
            'Madiun': {
                name: 'Madiun',
                description: 'Railway junction city in East Java.',
                population: '200,000',
                region: 'East Java'
            },
            'Makassar': {
                name: 'Makassar',
                description: 'Largest city in Eastern Indonesia, major port.',
                population: '1.5 million',
                region: 'South Sulawesi'
            },
            'Jayapura': {
                name: 'Jayapura',
                description: 'Capital of Papua, gateway to Raja Ampat.',
                population: '400,000',
                region: 'Papua'
            },
            'Pontianak': {
                name: 'Pontianak',
                description: 'Equator city, capital of West Kalimantan.',
                population: '700,000',
                region: 'West Kalimantan'
            },
            'Banjarmasin': {
                name: 'Banjarmasin',
                description: 'River city known as Venice of the East.',
                population: '700,000',
                region: 'South Kalimantan'
            },
            'Balikpapan': {
                name: 'Balikpapan',
                description: 'Oil refinery city in East Kalimantan.',
                population: '700,000',
                region: 'East Kalimantan'
            },
            'Samarinda': {
                name: 'Samarinda',
                description: 'Capital of East Kalimantan, timber industry center.',
                population: '800,000',
                region: 'East Kalimantan'
            },
            'Denpasar': {
                name: 'Denpasar',
                description: 'Capital of Bali, cultural and tourism hub.',
                population: '900,000',
                region: 'Bali'
            },
            'Mataram': {
                name: 'Mataram',
                description: 'Capital of West Nusa Tenggara, gateway to Lombok.',
                population: '500,000',
                region: 'West Nusa Tenggara'
            },
            'Kupang': {
                name: 'Kupang',
                description: 'Capital of East Nusa Tenggara, port city.',
                population: '400,000',
                region: 'East Nusa Tenggara'
            },
            'Palu': {
                name: 'Palu',
                description: 'Capital of Central Sulawesi, valley city.',
                population: '400,000',
                region: 'Central Sulawesi'
            },
            'Manado': {
                name: 'Manado',
                description: 'Capital of North Sulawesi, gateway to Bunaken.',
                population: '500,000',
                region: 'North Sulawesi'
            }
        };
        
        // Menu functionality
        function toggleMenu() {
            alert('Menu clicked! Navigation options would appear here.');
        }
        
        function handleMenuKeyPress(event) {
            if (event.key === 'Enter' || event.key === ' ') {
                event.preventDefault();
                toggleMenu();
            }
        }
        
        // Location pin functionality
        function showLocationInfo(locationName) {
            const location = locationData[locationName];
            if (location) {
                document.getElementById('modalTitle').textContent = location.name;
                document.getElementById('modalContent').innerHTML = `
                    <strong>Description:</strong> ${location.description}<br><br>
                    <strong>Population:</strong> ${location.population}<br>
                    <strong>Region:</strong> ${location.region}
                `;
                document.getElementById('locationModal').style.display = 'block';
            }
        }
        
        function closeModal() {
            document.getElementById('locationModal').style.display = 'none';
        }
        
        // Close modal when clicking outside
        window.onclick = function(event) {
            const modal = document.getElementById('locationModal');
            if (event.target === modal) {
                modal.style.display = 'none';
            }
        }
        
        // Keyboard navigation for map pins
        document.addEventListener('keydown', function(event) {
            if (event.key === 'Escape') {
                closeModal();
            }
        });
        
        // Add keyboard support for map pins
        document.querySelectorAll('.map-pin').forEach(pin => {
            pin.addEventListener('keypress', function(event) {
                if (event.key === 'Enter' || event.key === ' ') {
                    event.preventDefault();
                    this.click();
                }
            });
        });

        setTimeout(function() {
           window.location.href = "views/LokasiIndonesiaMapPage.html";
       }, 3000);

        // Initialize tooltips
        document.addEventListener('DOMContentLoaded', function() {
            console.log('Indonesia Location Map loaded successfully!');
            console.log(`Total locations: ${Object.keys(locationData).length}`);
        });

        const pins = document.querySelectorAll(".location-pin");
        const modal = document.getElementById("locationModal");
        const detail = document.getElementById("locationDetail");
        const closeBtn = document.querySelector(".close-button");

        pins.forEach(pin => {
        pin.addEventListener("click", () => {
            const info = pin.getAttribute("data-info");
            detail.textContent = info;
            modal.style.display = "block";
        });
        });

        closeBtn.addEventListener("click", () => {
        modal.style.display = "none";
        });

        window.addEventListener("click", (e) => {
        if (e.target === modal) {
            modal.style.display = "none";
        }
        });
