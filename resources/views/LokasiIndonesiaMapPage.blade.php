<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lokasi - Indonesia Map</title>
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

        .background-pattern {
            position: absolute;
            top: 0;
            left: 0;
            width: 1440px;
            height: 1024px;
            z-index: 1;
        }

        .map-container {
            position: absolute;
            top: 276px;
            left: 0;
            width: 1440px;
            height: 548px;
            z-index: 2;
        }

        .map-pin {
            position: absolute;
            width: 28px;
            height: 32px;
            z-index: 3;
            cursor: pointer;
            transition: transform 0.3s ease, filter 0.3s ease;
        }

        .map-pin:hover {
            transform: scale(1.2);
            filter: drop-shadow(0 4px 8px rgba(0,0,0,0.3));
        }

        .map-pin:focus {
            outline: 2px solid #0066cc;
            outline-offset: 2px;
        }

        .pin-1 { top: 706px; left: 617px; }
        .pin-2 { top: 690px; left: 545px; }
        .pin-3 { top: 452px; left: 213px; }
        .pin-4 { top: 558px; left: 290px; }
        .pin-5 { top: 396px; left: 140px; }
        .pin-6 { top: 329px; left: 68px; }
        .pin-7 { top: 534px; left: 241px; }
        .pin-8 { top: 512px; left: 179px; }
        .pin-9 { top: 610px; left: 318px; }
        .pin-10 { top: 711px; left: 656px; }
        .pin-11 { top: 713px; left: 786px; }
        .pin-12 { top: 586px; left: 769px; }
        .pin-13 { top: 570px; left: 832px; }
        .pin-14 { top: 523px; left: 746px; }
        .pin-15 { top: 499px; left: 793px; }
        .pin-16 { top: 423px; left: 827px; }
        .pin-17 { top: 491px; left: 1165px; }
        .pin-18 { top: 586px; left: 1369px; }
        .pin-19 { top: 642px; left: 368px; }
        .pin-20 { top: 670px; left: 403px; }
        .pin-21 { top: 658px; left: 485px; }
        .pin-22 { top: 489px; left: 471px; }
        .pin-23 { top: 507px; left: 559px; }
        .pin-24 { top: 539px; left: 631px; }
        .pin-25 { top: 454px; left: 670px; }
        .pin-26 { top: 375px; left: 666px; }
        .pin-27 { top: 695px; left: 479px; }

        .header {
            position: relative;
            z-index: 10;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 21px 31px 0;
        }

        .logo-container {
            background-color: #ffffff;
            width: 77px;
            height: 107px;
            padding: 5px;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }

        .logo {
            width: 72px;
            height: 102px;
            object-fit: contain;
        }

        .page-title {
            font-size: 70px;
            font-family: Inter, sans-serif;
            font-weight: 700;
            line-height: 85px;
            text-align: center;
            color: #000000;
            margin: 0;
            text-shadow: 2px 2px 4px rgba(255,255,255,0.8);
        }

        .menu-container {
            background-color: #ffffff;
            width: 66px;
            height: 64px;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }

        .menu-container:hover {
            background-color: #f5f5f5;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0,0,0,0.15);
        }

        .menu-container:active {
            transform: translateY(0);
        }

        .menu-icon {
            width: 28px;
            height: 29px;
        }

        .tooltip {
            position: absolute;
            background-color: #333;
            color: white;
            padding: 8px 12px;
            border-radius: 4px;
            font-size: 14px;
            white-space: nowrap;
            z-index: 1000;
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
            pointer-events: none;
        }

        .tooltip::after {
            content: '';
            position: absolute;
            top: 100%;
            left: 50%;
            margin-left: -5px;
            border-width: 5px;
            border-style: solid;
            border-color: #333 transparent transparent transparent;
        }

        .map-pin:hover .tooltip {
            opacity: 1;
            visibility: visible;
        }

        .modal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0,0,0,0.5);
        }

        .modal-content {
            background-color: #fefefe;
            margin: 15% auto;
            padding: 20px;
            border-radius: 8px;
            width: 300px;
            text-align: center;
            position: relative;
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
            cursor: pointer;
            position: absolute;
            right: 15px;
            top: 10px;
        }

        .close:hover,
        .close:focus {
            color: black;
        }

        @media (max-width: 1440px) {
            .main-container {
                width: 100%;
                max-width: 1440px;
            }

            .background-pattern,
            .map-container {
                width: 100%;
            }
        }

        @media (max-width: 768px) {
            .header {
                padding: 15px 20px 0;
            }

            .page-title {
                font-size: 48px;
                line-height: 60px;
            }

            .logo-container {
                width: 60px;
                height: 80px;
            }

            .logo {
                width: 55px;
                height: 75px;
            }

            .menu-container {
                width: 50px;
                height: 50px;
            }

            .menu-icon {
                width: 24px;
                height: 24px;
            }

            .map-pin {
                width: 24px;
                height: 28px;
            }
        }

        @media (max-width: 480px) {
            .page-title {
                font-size: 36px;
                line-height: 45px;
            }

            .header {
                padding: 10px 15px 0;
            }
        }
    </style>
</head>
<body>
    <div class="main-container">
        <!-- Background Pattern -->
        <img src="images/img_image_14.png" alt="Traditional Indonesian Batik Pattern Background" class="background-pattern">
        
        <!-- Map Container -->
        <img src="images/img_image_9.png" alt="Indonesia Map" class="map-container">
        
        <!-- Header -->
        <header class="header">
            <div class="logo-container">
                <img src="images/img_screenshot20250527145618removebgpreview_1.png" alt="Company Logo" class="logo">
            </div>
            
            <h1 class="page-title">Lokasi</h1>
            
            <div class="menu-container" onclick="toggleMenu()" role="button" tabindex="0" aria-label="Open navigation menu" onkeypress="handleMenuKeyPress(event)">
                <img src="images/img_menu.svg" alt="Menu" class="menu-icon">
            </div>
        </header>
        
        <!-- Map Pins -->
        <img src="images/img_map_pin.svg" alt="Location Pin" class="map-pin pin-1" onclick="showLocationInfo('Jakarta')" tabindex="0" role="button" aria-label="Jakarta location">
        <div class="tooltip">Jakarta</div>
        
        <img src="images/img_map_pin.svg" alt="Location Pin" class="map-pin pin-2" onclick="showLocationInfo('Bandung')" tabindex="0" role="button" aria-label="Bandung location">
        <div class="tooltip">Bandung</div>
        
        <img src="images/img_map_pin.svg" alt="Location Pin" class="map-pin pin-3" onclick="showLocationInfo('Medan')" tabindex="0" role="button" aria-label="Medan location">
        <div class="tooltip">Medan</div>
        
        <img src="images/img_map_pin.svg" alt="Location Pin" class="map-pin pin-4" onclick="showLocationInfo('Palembang')" tabindex="0" role="button" aria-label="Palembang location">
        <div class="tooltip">Palembang</div>
        
        <img src="images/img_map_pin.svg" alt="Location Pin" class="map-pin pin-5" onclick="showLocationInfo('Pekanbaru')" tabindex="0" role="button" aria-label="Pekanbaru location">
        <div class="tooltip">Pekanbaru</div>
        
        <img src="images/img_map_pin.svg" alt="Location Pin" class="map-pin pin-6" onclick="showLocationInfo('Padang')" tabindex="0" role="button" aria-label="Padang location">
        <div class="tooltip">Padang</div>
        
        <img src="images/img_map_pin.svg" alt="Location Pin" class="map-pin pin-7" onclick="showLocationInfo('Jambi')" tabindex="0" role="button" aria-label="Jambi location">
        <div class="tooltip">Jambi</div>
        
        <img src="images/img_map_pin.svg" alt="Location Pin" class="map-pin pin-8" onclick="showLocationInfo('Bengkulu')" tabindex="0" role="button" aria-label="Bengkulu location">
        <div class="tooltip">Bengkulu</div>
        
        <img src="images/img_map_pin.svg" alt="Location Pin" class="map-pin pin-9" onclick="showLocationInfo('Lampung')" tabindex="0" role="button" aria-label="Lampung location">
        <div class="tooltip">Lampung</div>
        
        <img src="images/img_map_pin.svg" alt="Location Pin" class="map-pin pin-10" onclick="showLocationInfo('Semarang')" tabindex="0" role="button" aria-label="Semarang location">
        <div class="tooltip">Semarang</div>
        
        <img src="images/img_map_pin.svg" alt="Location Pin" class="map-pin pin-11" onclick="showLocationInfo('Surabaya')" tabindex="0" role="button" aria-label="Surabaya location">
        <div class="tooltip">Surabaya</div>
        
        <img src="images/img_map_pin.svg" alt="Location Pin" class="map-pin pin-12" onclick="showLocationInfo('Yogyakarta')" tabindex="0" role="button" aria-label="Yogyakarta location">
        <div class="tooltip">Yogyakarta</div>
        
        <img src="images/img_map_pin.svg" alt="Location Pin" class="map-pin pin-13" onclick="showLocationInfo('Solo')" tabindex="0" role="button" aria-label="Solo location">
        <div class="tooltip">Solo</div>
        
        <img src="images/img_map_pin.svg" alt="Location Pin" class="map-pin pin-14" onclick="showLocationInfo('Malang')" tabindex="0" role="button" aria-label="Malang location">
        <div class="tooltip">Malang</div>
        
        <img src="images/img_map_pin.svg" alt="Location Pin" class="map-pin pin-15" onclick="showLocationInfo('Kediri')" tabindex="0" role="button" aria-label="Kediri location">
        <div class="tooltip">Kediri</div>
        
        <img src="images/img_map_pin.svg" alt="Location Pin" class="map-pin pin-16" onclick="showLocationInfo('Madiun')" tabindex="0" role="button" aria-label="Madiun location">
        <div class="tooltip">Madiun</div>
        
        <img src="images/img_map_pin.svg" alt="Location Pin" class="map-pin pin-17" onclick="showLocationInfo('Makassar')" tabindex="0" role="button" aria-label="Makassar location">
        <div class="tooltip">Makassar</div>
        
        <img src="images/img_map_pin.svg" alt="Location Pin" class="map-pin pin-18" onclick="showLocationInfo('Jayapura')" tabindex="0" role="button" aria-label="Jayapura location">
        <div class="tooltip">Jayapura</div>
        
        <img src="images/img_map_pin.svg" alt="Location Pin" class="map-pin pin-19" onclick="showLocationInfo('Pontianak')" tabindex="0" role="button" aria-label="Pontianak location">
        <div class="tooltip">Pontianak</div>
        
        <img src="images/img_map_pin.svg" alt="Location Pin" class="map-pin pin-20" onclick="showLocationInfo('Banjarmasin')" tabindex="0" role="button" aria-label="Banjarmasin location">
        <div class="tooltip">Banjarmasin</div>
        
        <img src="images/img_map_pin.svg" alt="Location Pin" class="map-pin pin-21" onclick="showLocationInfo('Balikpapan')" tabindex="0" role="button" aria-label="Balikpapan location">
        <div class="tooltip">Balikpapan</div>
        
        <img src="images/img_map_pin.svg" alt="Location Pin" class="map-pin pin-22" onclick="showLocationInfo('Samarinda')" tabindex="0" role="button" aria-label="Samarinda location">
        <div class="tooltip">Samarinda</div>
        
        <img src="images/img_map_pin.svg" alt="Location Pin" class="map-pin pin-23" onclick="showLocationInfo('Denpasar')" tabindex="0" role="button" aria-label="Denpasar location">
        <div class="tooltip">Denpasar</div>
        
        <img src="images/img_map_pin.svg" alt="Location Pin" class="map-pin pin-24" onclick="showLocationInfo('Mataram')" tabindex="0" role="button" aria-label="Mataram location">
        <div class="tooltip">Mataram</div>
        
        <img src="images/img_map_pin.svg" alt="Location Pin" class="map-pin pin-25" onclick="showLocationInfo('Kupang')" tabindex="0" role="button" aria-label="Kupang location">
        <div class="tooltip">Kupang</div>
        
        <img src="images/img_map_pin.svg" alt="Location Pin" class="map-pin pin-26" onclick="showLocationInfo('Palu')" tabindex="0" role="button" aria-label="Palu location">
        <div class="tooltip">Palu</div>
        
        <img src="images/img_map_pin.svg" alt="Location Pin" class="map-pin pin-27" onclick="showLocationInfo('Manado')" tabindex="0" role="button" aria-label="Manado location">
        <div class="tooltip">Manado</div>
    </div>
    
    <!-- Modal for location information -->
    <div id="locationModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <h2 id="modalTitle">Location Information</h2>
            <p id="modalContent">Loading...</p>
        </div>
    </div>
    
    <script>
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
        
        // Initialize tooltips
        document.addEventListener('DOMContentLoaded', function() {
            console.log('Indonesia Location Map loaded successfully!');
            console.log(`Total locations: ${Object.keys(locationData).length}`);
        });
    </script>
</body>
</html>