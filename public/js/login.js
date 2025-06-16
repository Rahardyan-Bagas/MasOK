// Animasi input saat fokus
document.querySelectorAll('.input-field').forEach(input => {
  input.addEventListener('focus', () => input.style.transform = 'scale(1.02)');
  input.addEventListener('blur', () => input.style.transform = 'scale(1)');
});

// Efek loading saat form disubmit
window.addEventListener('DOMContentLoaded', function () {
  const loginForm = document.getElementById('loginForm');
  const loginButton = document.querySelector('.login-button');

  if (loginForm && loginButton) {
    loginForm.addEventListener('submit', function () {
      loginButton.disabled = true;
      loginButton.textContent = 'Logging in...';
    });
  }

  const signupButton = document.querySelector('.signup-button');
  if (signupButton) {
    signupButton.addEventListener('click', function () {
      this.disabled = true;
      this.textContent = 'Redirecting...';
    });
  }
});

// Menu toggle
function toggleMenu() {
  alert('Menu clicked! Navigation menu would open here.');
}

function pindahhome(){
    window.location.href='';
}

function toggleMenu() {
    const menu = document.getElementById('dropdownMenu');
    menu.style.display = (menu.style.display === 'block') ? 'none' : 'block';
  }

  // Optional: Tutup menu saat klik di luar
  document.addEventListener('click', function(event) {
    const menu = document.getElementById('dropdownMenu');
    const icon = document.querySelector('.menu-icon');
    if (!menu.contains(event.target) && !icon.contains(event.target)) {
      menu.style.display = 'none';
    }
  });