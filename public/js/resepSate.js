        let currentRating = 0;
        
        function setRating(rating) {
            currentRating = rating;
            const stars = document.querySelectorAll('.star');
            
            stars.forEach((star, index) => {
                if (index < rating) {
                    star.classList.add('active');
                    star.style.filter = 'brightness(1.2) saturate(1.5)';
                } else {
                    star.classList.remove('active');
                    star.style.filter = 'brightness(0.7) saturate(0.5)';
                }
            });
            
            // Show rating feedback
            showRatingFeedback(rating);
        }
        
        function showRatingFeedback(rating) {
            const messages = {
                1: 'Terima kasih atas feedback Anda!',
                2: 'Kami akan terus meningkatkan resep ini.',
                3: 'Rating yang bagus! Terima kasih.',
                4: 'Senang Anda menyukai resep ini!',
                5: 'Luar biasa! Resep favorit Anda!'
            };
            
            // Create temporary feedback message
            const feedback = document.createElement('div');
            feedback.textContent = messages[rating];
            feedback.style.cssText = `
                position: fixed;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                background-color: #4CAF50;
                color: white;
                padding: 15px 25px;
                border-radius: 8px;
                font-family: 'Inter', sans-serif;
                font-weight: 600;
                z-index: 1000;
                box-shadow: 0 4px 12px rgba(0,0,0,0.3);
                animation: fadeInOut 3s ease-in-out;
            `;
            
            document.body.appendChild(feedback);
            
            setTimeout(() => {
                document.body.removeChild(feedback);
            }, 3000);
        }
        
        function toggleMenu() {
            const menuOptions = [
                'Beranda',
                'Resep Favorit',
                'Kategori',
                'Tentang Kami',
                'Kontak'
            ];
            
            const existingMenu = document.querySelector('.dropdown-menu');
            if (existingMenu) {
                existingMenu.remove();
                return;
            }
            
            const dropdown = document.createElement('div');
            dropdown.className = 'dropdown-menu';
            dropdown.style.cssText = `
                position: absolute;
                top: 70px;
                right: 0;
                background-color: white;
                border: 1px solid #ddd;
                border-radius: 8px;
                box-shadow: 0 4px 12px rgba(0,0,0,0.15);
                z-index: 1000;
                min-width: 180px;
                animation: slideDown 0.3s ease-out;
            `;
            
            menuOptions.forEach((option, index) => {
                const menuItem = document.createElement('div');
                menuItem.textContent = option;
                menuItem.style.cssText = `
                    padding: 12px 16px;
                    cursor: pointer;
                    border-bottom: ${index < menuOptions.length - 1 ? '1px solid #eee' : 'none'};
                    font-family: 'Inter', sans-serif;
                    font-size: 14px;
                    transition: background-color 0.2s;
                `;
                
                menuItem.addEventListener('mouseenter', () => {
                    menuItem.style.backgroundColor = '#f5f5f5';
                });
                
                menuItem.addEventListener('mouseleave', () => {
                    menuItem.style.backgroundColor = 'white';
                });
                
                menuItem.addEventListener('click', () => {
                    alert(`Navigasi ke: ${option}`);
                    dropdown.remove();
                });
                
                dropdown.appendChild(menuItem);
            });
            
            document.querySelector('.header-section').appendChild(dropdown);
            
            // Close menu when clicking outside
            setTimeout(() => {
                document.addEventListener('click', function closeMenu(e) {
                    if (!dropdown.contains(e.target) && !e.target.closest('.menu-container')) {
                        dropdown.remove();
                        document.removeEventListener('click', closeMenu);
                    }
                });
            }, 100);
        }
        
        // Add CSS animations
        const style = document.createElement('style');
        style.textContent = `
            @keyframes fadeInOut {
                0% { opacity: 0; transform: translate(-50%, -50%) scale(0.8); }
                20% { opacity: 1; transform: translate(-50%, -50%) scale(1); }
                80% { opacity: 1; transform: translate(-50%, -50%) scale(1); }
                100% { opacity: 0; transform: translate(-50%, -50%) scale(0.8); }
            }
            
            @keyframes slideDown {
                0% { opacity: 0; transform: translateY(-10px); }
                100% { opacity: 1; transform: translateY(0); }
            }
        `;
        document.head.appendChild(style);
        
        // Initialize star hover effects
        document.addEventListener('DOMContentLoaded', function() {
            const stars = document.querySelectorAll('.star');
            
            stars.forEach((star, index) => {
                star.addEventListener('mouseenter', () => {
                    if (currentRating === 0) {
                        stars.forEach((s, i) => {
                            if (i <= index) {
                                s.style.filter = 'brightness(1.2) saturate(1.5)';
                            } else {
                                s.style.filter = 'brightness(0.7) saturate(0.5)';
                            }
                        });
                    }
                });
                
                star.addEventListener('mouseleave', () => {
                    if (currentRating === 0) {
                        stars.forEach(s => {
                            s.style.filter = 'brightness(1) saturate(1)';
                        });
                    }
                });
            });
        });