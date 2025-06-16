<!-- resources/views/SignUpPage.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Foodnesia - Login</title>
  <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;700&display=swap" rel="stylesheet">
  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      font-family: 'Cinzel', serif;
      background-color: #ffffff;
      background-image: url("images/img_image_15.png");
      background-size: cover;
      background-position: center;
      min-height: 100vh;
      overflow-x: hidden;
      padding-bottom: 40px;
    }

    .header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 20px 40px;
    }

    .logo-image {
      height: 80px;
    }

    .menu-icon {
      width: 30px;
      height: 30px;
      cursor: pointer;
    }

    .brand-title {
      text-align: center;
      font-size: 48px;
      font-weight: 700;
      margin-top: 10px;
      color: #000;
    }

    .auth-container {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      background-color: #ffffffcc;
      max-width: 1000px;
      margin: 40px auto;
      border-radius: 30px;
      overflow: hidden;
      box-shadow: 0 4px 20px rgba(0,0,0,0.15);
    }

    .login-panel {
      flex: 1 1 50%;
      padding: 40px;
      background-color: white;
      text-align: center;
    }

    .login-title {
      font-size: 36px;
      margin-bottom: 30px;
    }

    .form-group {
      margin-bottom: 20px;
      text-align: left;
    }

    .input-field {
      width: 100%;
      padding: 12px 20px;
      font-size: 18px;
      border: 1px solid black;
      border-radius: 20px;
      font-family: 'Cinzel', serif;
      font-weight: 600;
      background-color: #fff;
    }

    .input-field:focus {
      outline: none;
      border-color: #fa0505;
      box-shadow: 0 0 8px rgba(250, 5, 5, 0.3);
    }

    .login-button, .signup-button {
      width: 60%;
      padding: 12px;
      margin-top: 20px;
      font-size: 20px;
      font-weight: bold;
      border: none;
      border-radius: 28px;
      background-color: #fa0505;
      color: white;
      cursor: pointer;
      transition: background 0.3s, transform 0.2s;
    }

    .login-button:hover, .signup-button:hover {
      background-color: #e00404;
      transform: translateY(-2px);
      box-shadow: 0 4px 10px rgba(250, 5, 5, 0.3);
    }

    .welcome-panel {
      flex: 1 1 50%;
      background-color: #f2f2f2;
      padding: 40px;
      text-align: center;
    }

    .welcome-title {
      font-size: 36px;
      margin-bottom: 20px;
    }

    .welcome-text {
      font-size: 18px;
      line-height: 1.6;
      margin-bottom: 30px;
    }

    .error-message {
      color: #fa0505;
      font-size: 14px;
      margin-top: 5px;
      display: none;
    }

    .success-message {
      color: #28a745;
      font-size: 14px;
      margin-top: 10px;
      display: none;
    }

    @media (max-width: 768px) {
      .auth-container {
        flex-direction: column;
        border-radius: 20px;
      }

      .brand-title {
        font-size: 32px;
      }

      .login-title,
      .welcome-title {
        font-size: 28px;
      }

      .login-button,
      .signup-button {
        width: 80%;
      }

      .input-field {
        font-size: 16px;
      }

      .header {
        padding: 15px 20px;
      }
    }
  </style>
</head>

<body>
  <div class="header">
    <img src="images/img_screenshot20250527145618removebgpreview_1.png" onclick="pindahhome()" alt="Foodnesia Logo" class="logo-image">
    <img src="images/img_menu.svg" alt="Menu" class="menu-icon" onclick="toggleMenu()">
  </div>

  <h1 class="brand-title">FOODNESIA</h1>

  <div class="auth-container">
    <!-- Login Panel -->
    <div class="login-panel">
      <h2 class="login-title">LOG IN</h2>
      <form id="loginForm" onsubmit="handleLogin(event)">
        <div class="form-group">
          <input type="email" class="input-field" id="email" placeholder="Email" required>
          <div class="error-message" id="emailError">Please enter a valid email address</div>
        </div>
        <div class="form-group">
          <input type="password" class="input-field" id="password" placeholder="Password" required>
          <div class="error-message" id="passwordError">Password must be at least 6 characters</div>
        </div>
        <button type="button" class="login-button" onclick="goToHome()">LOG IN</button>
        <div class="success-message" id="loginSuccess">Login successful! Redirecting...</div>
      </form>
    </div>

    <!-- Welcome Panel -->
    <div class="welcome-panel">
      <h2 class="welcome-title">HALLO, SOBAT</h2>
      <p class="welcome-text">UNTUK TETAP TERHUBUNG DENGAN KAMI, SILAHKAN MASUK DENGAN AKUN ANDA</p>
      <button class="signup-button" onclick="handleSignup()">SIGN UP</button>
    </div>
  </div>

  <script>
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
  </script>
</body>
</html>
