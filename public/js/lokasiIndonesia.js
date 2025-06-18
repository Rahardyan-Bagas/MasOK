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
            'Yogyakarta': {
                name: 'Yogyakarta',
                description: 'Cultural heart of Java, home to Borobudur and Prambanan.',
                population: '400,000',
                region: 'Special Region of Yogyakarta',
            }
        };


        // Menu functionality
        function toggleMenu() {
            alert('Menu clicked! Navigation options would appear here.');
        }

        function pindah(){
            window.location.href = '/makanan';
        }
        function toggleMenu() {
        const menu = document.getElementById('dropdownMenu');
        menu.style.display = (menu.style.display === 'block') ? 'none' : 'block';
        }
        
        function handleMenuKeyPress(event) {
            if (event.key === 'Enter' || event.key === ' ') {
                event.preventDefault();
                toggleMenu();
            }
        }
        function pindahhome(){
            window.location.href = '/home';
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
        
        // Initialize tooltips
        document.addEventListener('DOMContentLoaded', function() {
            console.log('Indonesia Location Map loaded successfully!');
            console.log(`Total locations: ${Object.keys(locationData).length}`);
        });