<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lokasi - Indonesia Map</title>
    <link rel="stylesheet" href="{{ asset('stylesLokasi.css') }}">
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
                <img src="images/img_screenshot20250527145618removebgpreview_1.png" onclick="pindahhome()" alt="Company Logo" class="logo">
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
        
        <img src="images/img_map_pin.svg" alt="Location Pin" class="map-pin pin-27" onclick="pindah()" tabindex="0" role="button" aria-label="Yogyakarta location">
        <div class="tooltip">Yogyakarta</div>
    </div>
    
    <div id="someContainer" class="popup"></div>
    <!-- Modal for location information -->
    <div id="locationModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <h2 id="modalTitle">Location Information</h2>
            <p id="modalContent">Loading...</p>
        </div>
    </div>
    
    <div id="someContainer" class="popup"></div>
    <script src="{{ asset('lokasiIndonesia.js') }}"></script>
</body>
</html>