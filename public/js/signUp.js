    document.getElementById('signupForm').addEventListener('submit', function(e) {
      e.preventDefault();

      const email = document.getElementById('email').value.trim();
      const password = document.getElementById('password').value;
      const confirmPassword = document.getElementById('confirmPassword').value;

      let isValid = true;

      clearErrors();

      if (!email || !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
        showError('emailError', 'Email tidak valid');
        isValid = false;
      }

      if (!password || password.length < 8) {
        showError('passwordError', 'Password minimal 8 karakter');
        isValid = false;
      }

      if (confirmPassword !== password) {
        showError('confirmPasswordError', 'Password tidak cocok');
        isValid = false;
      }

      if (isValid) {
        document.getElementById('successMessage').style.display = 'block';
        this.reset();
        setTimeout(() => {
        window.location.href = '/login'; // atau 'login.php' sesuai file kamu
        }, 2000);
      }
    });

    function showError(id, message) {
      const el = document.getElementById(id);
      el.textContent = message;
      el.style.display = 'block';
    }

    function clearErrors() {
      ['emailError', 'passwordError', 'confirmPasswordError'].forEach(id => {
        const el = document.getElementById(id);
        el.textContent = '';
        el.style.display = 'none';
      });
    }

    function toggleMenu() {
      alert('Menu clicked!');
    }

    document.querySelector('.menu-container').addEventListener('keydown', function(e) {
      if (e.key === 'Enter' || e.key === ' ') {
        e.preventDefault();
        toggleMenu();
      }
    });
