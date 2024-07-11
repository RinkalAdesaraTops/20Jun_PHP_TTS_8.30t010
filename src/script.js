document.addEventListener('DOMContentLoaded', function () {
    // Mobile menu button functionality
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');
    
    if (mobileMenuButton) {
      mobileMenuButton.addEventListener('click', function () {
        const isExpanded = mobileMenuButton.getAttribute('aria-expanded') === 'true' || false;
        mobileMenuButton.setAttribute('aria-expanded', !isExpanded);
        mobileMenu.classList.toggle('hidden');
        
        // Toggle the icons
        const icons = mobileMenuButton.querySelectorAll('svg');
        icons.forEach(icon => icon.classList.toggle('hidden'));
      });
    }
  
    // User menu button functionality
    const userMenuButton = document.getElementById('user-menu-button');
    // const userMenu = document.getElementById('user-menu');
    
    if (userMenuButton) {
      userMenuButton.addEventListener('click', function () {
        const isExpanded = userMenuButton.getAttribute('aria-expanded') === 'true' || false;
        userMenuButton.setAttribute('aria-expanded', !isExpanded);
        // userMenu.classList.toggle('hidden');
      });
    }
  
    // Close user menu when clicking outside
    document.addEventListener('click', function (event) {
      if (!userMenuButton.contains(event.target) && !userMenu.contains(event.target)) {
        userMenu.classList.add('hidden');
        userMenuButton.setAttribute('aria-expanded', 'false');
      }
    });
  });
  