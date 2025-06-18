        let currentPage = 0;
        const contentData = [
            {
                title: "Tentang Kami",
                content: "Selamat datang di halaman Tentang Kami. Kami adalah perusahaan yang berkomitmen untuk memberikan layanan terbaik dengan menggabungkan nilai-nilai tradisional Indonesia dan inovasi modern.<br><br>Dengan pengalaman bertahun-tahun, kami terus berusaha memberikan solusi yang tepat untuk kebutuhan Anda."
            },
            {
                title: "Visi & Misi",
                content: "Visi kami adalah menjadi perusahaan terdepan yang menggabungkan kearifan lokal dengan teknologi modern.<br><br>Misi kami adalah memberikan layanan berkualitas tinggi yang berdampak positif bagi masyarakat dan lingkungan."
            }
        ];

        function changePage(index) {
            if (index !== currentPage) {
                document.querySelectorAll('.pagination-dot').forEach((dot, i) => {
                    dot.classList.toggle('active', i === index);
                });
                document.getElementById('pageTitle').textContent = contentData[index].title;
                document.getElementById('contentText').innerHTML = contentData[index].content;
                currentPage = index;
            }
        }

        function pindahhome(){
            window.location.href = '/home';
        }

        function toggleMenu() {
    const menu = document.getElementById('dropdownMenu');
    menu.style.display = (menu.style.display === 'block') ? 'none' : 'block';
    }

    document.querySelector('.menu-container').addEventListener('keydown', function(e) {
      if (e.key === 'Enter' || e.key === ' ') {
        e.preventDefault();
        toggleMenu();
      }
    });