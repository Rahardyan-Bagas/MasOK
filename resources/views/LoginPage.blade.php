<!-- resources/views/SignUpPage.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Foodnesia - Login</title>
  <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/stylesLoginPage.css') }}">
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
  <script src="{{ asset('js/login.js') }}"></script>
</body>
</html>
