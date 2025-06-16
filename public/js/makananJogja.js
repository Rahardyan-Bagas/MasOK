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