<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Foodnesia - Sign Up</title>
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

    .menu-container {
      width: 40px;
      height: 40px;
      background-color: #fff;
      border-radius: 8px;
      display: flex;
      justify-content: center;
      align-items: center;
      cursor: pointer;
    }

    .menu-icon {
      width: 24px;
      height: 24px;
    }

    .brand-title {
      text-align: center;
      font-size: 48px;
      font-weight: 700;
      margin-top: 10px;
    }

    .signup-form-container {
      max-width: 600px;
      background-color: #fff;
      margin: 40px auto;
      padding: 40px 30px;
      border-radius: 20px;
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
      text-align: center;
    }

    .signup-title {
      font-size: 36px;
      font-weight: 700;
      margin-bottom: 30px;
    }

    .input-field {
      width: 100%;
      padding: 12px 20px;
      font-size: 18px;
      font-weight: 600;
      font-family: 'Cinzel', serif;
      border: 1px solid #000;
      border-radius: 20px;
      margin-bottom: 15px;
      background-color: rgba(255, 255, 255, 0.6);
    }

    .input-field::placeholder {
      color: rgba(0, 0, 0, 0.6);
    }

    .input-field:focus {
      border-color: #fa0505;
      background-color: rgba(255, 255, 255, 0.9);
      box-shadow: 0 0 5px rgba(250, 5, 5, 0.3);
      outline: none;
    }

    .signup-button {
      width: 100%;
      padding: 12px;
      background-color: #fa0505;
      color: white;
      font-size: 20px;
      font-weight: 700;
      border: none;
      border-radius: 28px;
      cursor: pointer;
      transition: 0.3s;
      margin-top: 10px;
    }

    .signup-button:hover {
      background-color: #e00404;
      transform: translateY(-2px);
      box-shadow: 0 4px 10px rgba(250, 5, 5, 0.3);
    }

    .error-message {
      font-size: 14px;
      color: #fa0505;
      margin-bottom: 10px;
      text-align: left;
    }

    .success-message {
      background-color: #4CAF50;
      color: white;
      padding: 12px;
      margin-top: 20px;
      border-radius: 10px;
      font-weight: 700;
      display: none;
    }

    @media (max-width: 768px) {
      .header {
        padding: 10px 20px;
      }

      .brand-title {
        font-size: 36px;
      }

      .signup-form-container {
        padding: 30px 20px;
        margin: 20px;
      }

      .signup-title {
        font-size: 28px;
      }

      .input-field {
        font-size: 16px;
      }

      .signup-button {
        font-size: 18px;
      }
    }
  </style>
</head>
<body>
  <div class="header">
    <img src="images/img_screenshot20250527145618removebgpreview_1.png" alt="Logo" class="logo-image">
    <div class="menu-container" onclick="toggleMenu()" role="button" tabindex="0">
      <img src="images/img_menu.svg" alt="Menu" class="menu-icon">
    </div>
  </div>

  <h1 class="brand-title">FOODNESIA</h1>

  <div class="signup-form-container">
    <h2 class="signup-title">Sign Up</h2>
    <form id="signupForm" novalidate>
      <input type="email" id="email" class="input-field" placeholder="Email" required>
      <div class="error-message" id="emailError"></div>

      <input type="password" id="password" class="input-field" placeholder="Password" required>
      <div class="error-message" id="passwordError"></div>

      <input type="password" id="confirmPassword" class="input-field" placeholder="Konfirmasi Password" required>
      <div class="error-message" id="confirmPasswordError"></div>
        <p style="margin-top: 20px; font-size: 14px;">
        Sudah punya akun? <a href="/login">Log in di sini</a>
        </p>

      <button type="submit" class="signup-button">Sign Up</button>
    </form>
    <div class="success-message" id="successMessage">Akun berhasil dibuat!</div>
  </div>

  <script>
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
  </script>
</body>
</html>
