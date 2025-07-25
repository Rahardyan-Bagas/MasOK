        function pindahhome(){
            window.location.href = '/home';
        }

        function toggleMenu() {
    const menu = document.getElementById('dropdownMenu');
    menu.style.display = (menu.style.display === 'block') ? 'none' : 'block';
  }

  document.addEventListener('click', function(event) {
    const menu = document.getElementById('dropdownMenu');
    const icon = document.querySelector('.menu-icon');
    if (!menu.contains(event.target) && !icon.contains(event.target)) {
      menu.style.display = 'none';
    }
  })

        // Add smooth scrolling for mobile
        document.addEventListener('DOMContentLoaded', function() {
            // Smooth scroll behavior
            document.documentElement.style.scrollBehavior = 'smooth';
            
            // Add loading animation
            const infoContainer = document.querySelector('.info-container');
            infoContainer.style.opacity = '0';
            infoContainer.style.transform = 'translateY(20px)';
            
            setTimeout(() => {
                infoContainer.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
                infoContainer.style.opacity = '1';
                infoContainer.style.transform = 'translateY(0)';
            }, 300);
            
            // Add hover effects for interactive elements
            const stars = document.querySelectorAll('.star');
            stars.forEach(star => {
                star.addEventListener('mouseenter', function() {
                    this.style.transform = 'scale(1.1)';
                    this.style.transition = 'transform 0.2s ease';
                });
                
                star.addEventListener('mouseleave', function() {
                    this.style.transform = 'scale(1)';
                });
            });
        });

        // Handle window resize for responsive behavior
        window.addEventListener('resize', function() {
            // Adjust layout if needed
            const container = document.querySelector('.main-container');
            if (window.innerWidth <= 768) {
                container.style.overflow = 'visible';
            } else {
                container.style.overflow = 'hidden';
            }
        });