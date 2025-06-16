<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Foodnesia - Sign Up</title>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/stylesSignUpPage.css') }}">
</head>
<body>
  <div class="header">
    <img src="{{ asset('images/img_screenshot20250527145618removebgpreview_1.png') }}" alt="Logo" class="logo-image">
    <div class="menu-container" onclick="toggleMenu()" role="button" tabindex="0">
      <img src="{{ asset('images/img_menu.svg') }}" alt="Menu" class="menu-icon">
    </div>
  </div>

  <h1 class="brand-title">FOODNESIA</h1>

  <div class="signup-form-container">
    <h2 class="signup-title">Sign Up</h2>

    <form id="signupForm" method="POST" action="{{ route('signup.store') }}">
      @csrf

      <input type="text" name="Nama_User" class="input-field" placeholder="Nama Lengkap" value="{{ old('Nama_User') }}" required>
      @error('Nama_User')
        <div class="error-message">{{ $message }}</div>
      @enderror

      <input type="email" name="Email" class="input-field" placeholder="Email" value="{{ old('Email') }}" required>
      @error('Email')
        <div class="error-message">{{ $message }}</div>
      @enderror

      <input type="password" name="Password" class="input-field" placeholder="Password" required>
      @error('Password')
        <div class="error-message">{{ $message }}</div>
      @enderror

      <input type="password" name="Password_confirmation" class="input-field" placeholder="Konfirmasi Password" required>
      @error('Password_confirmation')
        <div class="error-message">{{ $message }}</div>
      @enderror

      <p style="margin-top: 20px; font-size: 14px;">
        Sudah punya akun? <a href="/login">Log in di sini</a>
      </p>

      <button type="submit" class="signup-button">Sign Up</button>
    </form>

    @if(session('success'))
      <div class="success-message">{{ session('success') }}</div>
    @endif
  </div>
  <script src="{{ asset('js/signUp.js') }}"></script>
</body>
</html>
