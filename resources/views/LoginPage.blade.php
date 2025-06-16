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
    <img src="{{ asset('images/img_screenshot20250527145618removebgpreview_1.png') }}" onclick="window.location.href='/home'" alt="Foodnesia Logo" class="logo-image">
    <img src="{{ asset('images/img_menu.svg') }}" alt="Menu" class="menu-icon" onclick="toggleMenu()">
  </div>

  <h1 class="brand-title">FOODNESIA</h1>

  <div class="auth-container">
    <!-- Login Panel -->
    <div class="login-panel">
      <h2 class="login-title">LOG IN</h2>
      @if (session('success'))
        <div class="success-message">{{ session('success') }}</div>
      @endif
      @if ($errors->any())
        <div class="error-message">{{ $errors->first() }}</div>
      @endif
      <form id="loginForm" method="POST" action="{{ route('login.process') }}">
        @csrf
        <div class="form-group">
          <input type="email" name="Email" class="input-field" placeholder="Email" value="{{ old('Email') }}" required>
        </div>
        <div class="form-group">
          <input type="password" name="Password" class="input-field" placeholder="Password" required>
        </div>
        <button type="submit" class="login-button">LOG IN</button>
      </form>
    </div>

    <!-- Welcome Panel -->
    <div class="welcome-panel">
      <h2 class="welcome-title">HALLO, SOBAT</h2>
      <p class="welcome-text">UNTUK TETAP TERHUBUNG DENGAN KAMI, SILAHKAN MASUK DENGAN AKUN ANDA</p>
      <a class="signup-button" href="{{ route('signup.form') }}">SIGN UP</a>
    </div>
  </div>

  <script src="{{ asset('js/login.js') }}"></script>
</body>
</html>
