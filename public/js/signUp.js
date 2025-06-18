    

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
    const menu = document.getElementById('dropdownMenu');
    menu.style.display = (menu.style.display === 'block') ? 'none' : 'block';
    }

    document.querySelector('.menu-container').addEventListener('keydown', function(e) {
      if (e.key === 'Enter' || e.key === ' ') {
        e.preventDefault();
        toggleMenu();
      }
    });
