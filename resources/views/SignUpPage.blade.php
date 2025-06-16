<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Foodnesia - Sign Up</title>
  <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('stylesSignUpPage.css') }}">
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
  <script src="{{ asset('signUp.js') }}"></script>
</body>
</html>
