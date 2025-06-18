        let currentRating = 0;
        
        function toggleMenu() {
    const menu = document.getElementById('dropdownMenu');
    menu.style.display = (menu.style.display === 'block') ? 'none' : 'block';
  }

  // Optional: Tutup menu saat klik di luar
  document.addEventListener('click', function(event) {
    const menu = document.getElementById('dropdownMenu');
    const icon = document.querySelector('.menu-icon');
    if (!menu.contains(event.target) && !icon.contains(event.target)) {
      menu.style.display = 'none';
    }
  });
        
        // Star rating functionality
        function setRating(rating) {
            currentRating = rating;
            updateStars();
            
            // Show feedback message
            const messages = {
                1: 'Terima kasih! Rating 1 bintang diterima.',
                2: 'Terima kasih! Rating 2 bintang diterima.',
                3: 'Terima kasih! Rating 3 bintang diterima.',
                4: 'Terima kasih! Rating 4 bintang diterima.',
                5: 'Terima kasih! Rating 5 bintang diterima. Resep ini luar biasa!'
            };
            
            setTimeout(() => {
                alert(messages[rating]);
            }, 200);
            
            console.log(`Rating set to: ${rating} stars`);
        }
        
        function updateStars() {
            const stars = document.querySelectorAll('.star');
            stars.forEach((star, index) => {
                if (index < currentRating) {
                    star.classList.add('filled');
                } else {
                    star.classList.remove('filled');
                }
            });
        }
        
        // Star hover effects
        document.querySelectorAll('.star').forEach((star, index) => {
            star.addEventListener('mouseenter', () => {
                const stars = document.querySelectorAll('.star');
                stars.forEach((s, i) => {
                    if (i <= index) {
                        s.classList.add('active');
                    } else {
                        s.classList.remove('active');
                    }
                });
            });
            
            star.addEventListener('mouseleave', () => {
                document.querySelectorAll('.star').forEach(s => {
                    s.classList.remove('active');
                });
                updateStars(); // Restore filled state
            });
        });
        
        // Keyboard navigation for menu button
        document.querySelector('.menu-button').addEventListener('keydown', (e) => {
            if (e.key === 'Enter' || e.key === ' ') {
                e.preventDefault();
                toggleMenu();
            }
        });
        
        // Keyboard navigation for stars
        document.querySelectorAll('.star').forEach((star, index) => {
            star.setAttribute('tabindex', '0');
            star.addEventListener('keydown', (e) => {
                if (e.key === 'Enter' || e.key === ' ') {
                    e.preventDefault();
                    setRating(index + 1);
                }
            });
        });
        
        // Initialize page
        document.addEventListener('DOMContentLoaded', () => {
            console.log('Rendang Recipe Page loaded successfully');
            
            // Add loading animation effect
            const recipeContainer = document.querySelector('.recipe-container');
            recipeContainer.style.opacity = '0';
            recipeContainer.style.transform = 'translateY(20px)';
            
            setTimeout(() => {
                recipeContainer.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
                recipeContainer.style.opacity = '1';
                recipeContainer.style.transform = 'translateY(0)';
            }, 100);
        });
        
        // Simulate recipe save functionality
        function saveRecipe() {
            const recipeData = {
                name: 'Rendang',
                rating: currentRating,
                timestamp: new Date().toISOString()
            };
            
            localStorage.setItem('savedRecipe_rendang', JSON.stringify(recipeData));
            alert('Resep Rendang telah disimpan!');
            console.log('Recipe saved:', recipeData);
        }
        
        // Add save functionality to menu (simulated)
        document.querySelector('.menu-button').addEventListener('contextmenu', (e) => {
            e.preventDefault();
            saveRecipe();
        });
        
        // Print recipe functionality
        function printRecipe() {
            window.print();
        }
        
        // Add keyboard shortcut for printing
        document.addEventListener('keydown', (e) => {
            if (e.ctrlKey && e.key === 'p') {
                e.preventDefault();
                printRecipe();
            }
        });