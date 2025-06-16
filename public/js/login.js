    function toggleMenu() {
      alert('Menu clicked! Navigation menu would open here.');
    }

    function handleLogin(event) {
      event.preventDefault();
      const email = document.getElementById('email').value;
      const password = document.getElementById('password').value;
      const emailError = document.getElementById('emailError');
      const passwordError = document.getElementById('passwordError');
      const successMessage = document.getElementById('loginSuccess');

      emailError.style.display = 'none';
      passwordError.style.display = 'none';
      successMessage.style.display = 'none';

      let isValid = true;
      const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

      if (!emailRegex.test(email)) {
        emailError.style.display = 'block';
        isValid = false;
      }

      if (password.length < 6) {
        passwordError.style.display = 'block';
        isValid = false;
      }

      if (isValid) {
        successMessage.style.display = 'block';
        setTimeout(() => {
          alert('Login successful! Welcome to Foodnesia!');
        }, 1500);
      }
    }

    function handleSignup() {
      window.location.href = '/signup';
    }

    function pindahhome(){
            window.location.href = '/home';
        }
        
    document.querySelectorAll('.input-field').forEach(input => {
      input.addEventListener('focus', function () {
        this.style.transform = 'scale(1.02)';
      });
      input.addEventListener('blur', function () {
        this.style.transform = 'scale(1)';
      });
    });

    function goToHome() {
    window.location.href = '/home'; // sesuaikan dengan route Laravel kamu
    }

    function addLoadingState(button, originalText) {
      button.disabled = true;
      button.textContent = 'Loading...';
      setTimeout(() => {
        button.disabled = false;
        button.textContent = originalText;
      }, 2000);
    }

    document.querySelector('.login-button').addEventListener('click', function () {
      if (document.getElementById('loginForm').checkValidity()) {
        addLoadingState(this, 'LOG IN');
      }
    });

    document.querySelector('.signup-button').addEventListener('click', function () {
      addLoadingState(this, 'SIGN UP');
    });
