document.addEventListener('DOMContentLoaded', () => {
    const navLinks = document.querySelectorAll('.navbar-nav .nav-link');

    // Check if the current page is adminDashboard.php
    if (window.location.pathname.endsWith('adminDashboard.php')) {
        sessionStorage.removeItem('activeLink'); // Clear session storage
    } else {
        // Check session storage for the active link
        const activeLink = sessionStorage.getItem('activeLink');
        if (activeLink) {
            navLinks.forEach(link => {
                if (link.getAttribute('href') === activeLink) {
                    link.classList.add('active');
                }
            });
        }
    }

    navLinks.forEach(link => {
        link.addEventListener('click', function() {
            // Remove the active class from all nav-links
            navLinks.forEach(link => link.classList.remove('active'));

            // Add the active class to the clicked nav-link
            this.classList.add('active');

            // Store the active link in session storage
            sessionStorage.setItem('activeLink', this.getAttribute('href'));
        });
    });
});
