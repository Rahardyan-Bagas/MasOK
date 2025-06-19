document.addEventListener('DOMContentLoaded', function () {
    const searchInput = document.getElementById('searchInput');
    const suggestionBox = document.getElementById('searchSuggestions');

    // Menampilkan saran saat mengetik
    searchInput.addEventListener('input', function () {
        const query = this.value.trim();

        if (query.length < 2) {
            suggestionBox.innerHTML = '';
            return;
        }

        fetch(`/search?q=${encodeURIComponent(query)}`)
            .then(response => response.json())
            .then(data => {
                suggestionBox.innerHTML = '';

                if (data.length > 0) {
                    data.forEach(item => {
                        const div = document.createElement('div');
                        div.textContent = item.nama;
                        div.addEventListener('click', () => {
                            if (item.type === 'restoran') {
                                window.location.href = `/restoran/${item.id}`;
                            } else if (item.type === 'resep') {
                                window.location.href = `/resep/${item.id}`;
                            }
                        });
                        suggestionBox.appendChild(div);
                    });
                } else {
                    suggestionBox.innerHTML = '<div>Tidak ditemukan</div>';
                }
            })
            .catch(error => {
                console.error('Gagal mengambil saran:', error);
            });
    });

    // Fungsi pencarian ketika klik tombol (ikon)
    window.performSearch = function () {
        const query = searchInput.value.trim();

        if (query.length < 2) {
            alert('Masukkan minimal 2 karakter.');
            return;
        }

        fetch(`/search?q=${encodeURIComponent(query)}`)
            .then(response => response.json())
            .then(results => {
                if (results.length > 0) {
                    const result = results[0];
                    if (result.type === 'restoran') {
                        window.location.href = `/restoran/${result.id}`;
                    } else if (result.type === 'resep') {
                        window.location.href = `/resep/${result.id}`;
                    }
                } else {
                    alert(`Tidak ditemukan hasil untuk: "${query}"`);
                }
            })
            .catch(error => {
                alert('Terjadi kesalahan saat pencarian.');
                console.error(error);
            });
    };

    // Enter key = performSearch
    searchInput.addEventListener('keypress', function (e) {
        if (e.key === 'Enter') {
            performSearch();
        }
    });
});


        // Language change functionality
        function changeLanguage(lang) {
            const messages = {
                'id': 'Bahasa diubah ke Bahasa Indonesia',
                'en': 'Language changed to English',
                'jv': 'Basa diganti dadi Basa Jawa'
            };
            
            alert(messages[lang] || 'Bahasa berhasil diubah');
            
            // Here you would typically implement actual language switching
            console.log('Language changed to:', lang);
        }
        function pindahtentang(){
            window.location.href = '/tentang';
        }
        // Login modal functionality
        function showLogin() {
        window.location.href = '/login'; // arahkan ke route Laravel
        }

        function closeLogin() {
            document.getElementById('loginModal').style.display = 'none';
            document.body.style.overflow = 'auto';
        }

        // Login form submission
        document.getElementById('loginForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;
            
            // Basic validation
            if (!email || !password) {
                alert('Silakan isi semua field.');
                return;
            }
            
            if (!email.includes('@')) {
                alert('Format email tidak valid.');
                return;
            }
            
            if (password.length < 6) {
                alert('Password minimal 6 karakter.');
                return;
            }
            
            // Simulate login process
            const submitBtn = e.target.querySelector('button[type="submit"]');
            submitBtn.textContent = 'Logging in...';
            submitBtn.disabled = true;
            
            setTimeout(() => {
                alert('Login berhasil! Selamat datang di Foodnesia.');
                closeLogin();
                
                // Reset form
                document.getElementById('loginForm').reset();
                submitBtn.textContent = 'Login';
                submitBtn.disabled = false;
            }, 2000);
        });

        // Close modal when clicking outside
        document.getElementById('loginModal').addEventListener('click', function(e) {
            if (e.target === this) {
                closeLogin();
            }
        });

        // Navigation functionality
        document.querySelectorAll('.nav-text').forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                const target = this.getAttribute('href');
                
                if (target === '#tentang-kami') {
                    alert('Halaman Tentang Kami akan segera tersedia!');
                } else if (target === '#menu') {
                    alert('Menu makanan akan segera ditampilkan!');
                }
            });
        });

        // Smooth scrolling for internal links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    e.preventDefault();
                    target.scrollIntoView({
                        behavior: 'smooth'
                    });
                }
            });
        });

        // Add some interactive feedback
        document.querySelectorAll('.nav-item, .login-btn').forEach(element => {
            element.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-2px)';
                this.style.transition = 'transform 0.3s ease';
            });
            
            element.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0)';
            });
        });

        // Initialize page
        document.addEventListener('DOMContentLoaded', function() {
            console.log('Foodnesia homepage loaded successfully!');
            
            // Add fade-in animation to hero elements
            setTimeout(() => {
                document.querySelector('.hero-title').style.opacity = '1';
                document.querySelector('.hero-subtitle').style.opacity = '1';
            }, 500);
        });