        function pindahresepgudeg(){
            window.location.href = '/resepgudeg';
        }
        function pindahreseprendang(){
            window.location.href = '/reseprendang';
        }
        function pindahresepsate(){
            window.location.href = '/resepsate';
        }
        function pindahhome(){
            window.location.href = '/home';
        }
        // Menu toggle functionality
        function toggleMenu() {
            alert('Menu clicked! Navigation menu would open here.');
            console.log('Menu toggle activated');
        }

        // Recipe card click functionality
        function openRecipe(recipeName) {
            console.log(`Opening ${recipeName} recipe`);
            alert(`Membuka resep ${recipeName}! Halaman detail resep akan ditampilkan.`);
        }

        // Full recipe link functionality
        function viewFullRecipe(recipeName) {
            console.log(`Viewing full recipe for ${recipeName}`);
            alert(`Menampilkan resep lengkap ${recipeName}! Halaman dengan instruksi detail akan dibuka.`);
        }

        // Keyboard navigation support
        document.addEventListener('keydown', function(event) {
            if (event.key === 'Enter' || event.key === ' ') {
                const focusedElement = document.activeElement;
                if (focusedElement.classList.contains('recipe-card')) {
                    event.preventDefault();
                    focusedElement.click();
                } else if (focusedElement.classList.contains('menu-container')) {
                    event.preventDefault();
                    toggleMenu();
                }
            }
        });

        // Star rating interaction
        document.querySelectorAll('.star').forEach(star => {
            star.addEventListener('click', function(event) {
                event.stopPropagation();
                alert('Rating functionality would be implemented here!');
            });
        });

        // Add loading state simulation
        window.addEventListener('load', function() {
            console.log('Indonesian Recipe Collection page loaded successfully');
            
            // Simulate data loading
            setTimeout(() => {
                console.log('Recipe data loaded');
            }, 500);
        });

        

        // Add scroll effects for better UX
        window.addEventListener('scroll', function() {
            const cards = document.querySelectorAll('.recipe-card');
            cards.forEach(card => {
                const rect = card.getBoundingClientRect();
                if (rect.top < window.innerHeight && rect.bottom > 0) {
                    card.style.opacity = '1';
                    card.style.transform = 'translateY(0)';
                }
            });
        });

        // Error handling for images
        document.querySelectorAll('img').forEach(img => {
            img.addEventListener('error', function() {
                console.warn(`Failed to load image: ${this.src}`);
                this.style.backgroundColor = '#f0f0f0';
                this.alt = 'Image not available';
            });
        });

        // Recipe data simulation
        const recipeData = {
            gudeg: {
                name: 'Gudeg',
                origin: 'Yogyakarta',
                difficulty: 'Medium',
                cookingTime: '3-4 hours',
                servings: '4-6 people'
            },
            rendang: {
                name: 'Rendang',
                origin: 'Minangkabau',
                difficulty: 'Hard',
                cookingTime: '4-5 hours',
                servings: '6-8 people'
            },
            sate: {
                name: 'Sate',
                origin: 'Indonesia',
                difficulty: 'Easy',
                cookingTime: '30-45 minutes',
                servings: '2-4 people'
            }
        };

        // Function to get recipe details
        function getRecipeDetails(recipeName) {
            return recipeData[recipeName] || null;
        }

        // Add touch support for mobile devices
        document.querySelectorAll('.recipe-card').forEach(card => {
            card.addEventListener('touchstart', function() {
                this.style.transform = 'scale(0.98)';
            });
            
            card.addEventListener('touchend', function() {
                this.style.transform = 'scale(1)';
            });
        });