// === Location Modal ===
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
    const modal = document.getElementById("locationModal");
    if (modal) modal.style.display = 'none';
}

function toggleMenu() {
  alert("Menu toggle clicked! (Add your real navigation here)");
}

// === INIT on DOM Ready ===
document.addEventListener('DOMContentLoaded', function () {
    console.log('Indonesia Location Map loaded successfully!');
    console.log(`Total locations: ${Object.keys(locationData).length}`);

    // Keyboard search
    const searchInput = document.getElementById('searchInput');
    if (searchInput) {
        searchInput.addEventListener('keypress', function (event) {
            if (event.key === 'Enter') performSearch();
        });
    }

    // Click outside dropdowns
    document.addEventListener('click', function (event) {
        const languageSelector = document.querySelector('.language-selector');
        const languageDropdown = document.getElementById('languageDropdown');
        const searchContainer = document.querySelector('.search-container');
        const searchResults = document.getElementById('searchResults');

        if (languageSelector && !languageSelector.contains(event.target)) {
            languageDropdown?.classList.remove('active');
        }
        if (searchContainer && !searchContainer.contains(event.target)) {
            searchResults?.classList.remove('active');
        }
    });

    // Keyboard modal close
    document.addEventListener('keydown', function (event) {
        if (event.key === 'Escape') closeModal();
    });

    // Location pins (click + keyboard)
    const pins = document.querySelectorAll(".location-pin");
    const modal = document.getElementById("locationModal");
    const detail = document.getElementById("locationDetail");
    const closeBtn = document.querySelector(".close-button");

    pins.forEach(pin => {
        pin.addEventListener("click", () => {
            const info = pin.getAttribute("data-info");
            if (detail && modal) {
                detail.textContent = info;
                modal.style.display = "block";
            }
        });

        pin.addEventListener('keypress', function (event) {
            if (event.key === 'Enter' || event.key === ' ') {
                event.preventDefault();
                this.click();
            }
        });
    });

    closeBtn?.addEventListener("click", closeModal);

    window.addEventListener("click", (e) => {
        if (e.target === modal) closeModal();
    });

    // Fade in animation
    document.body.style.opacity = '0';
    document.body.style.transition = 'opacity 0.5s ease';
    setTimeout(() => {
        document.body.style.opacity = '1';
    }, 100);

    // Optional Redirect after delay (e.g. splash screen)
    setTimeout(() => {
        window.location.href = "views/LokasiIndonesiaMapPage.blade.php";
    }, 3000);
});
