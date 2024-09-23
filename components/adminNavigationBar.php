<nav class="navbar navbar-expand-lg d-flex flex-column align-items-start" style="background-color: #282828; height: 100vh; position: fixed; top: 0; left: 0; width: 250px; overflow-y: auto;">
    <a class="navbar-brand mt-3 d-block mx-auto" href="adminDashboard.php" style="padding-bottom: 40px;">
        <img src="images/logo_footer.png" alt="Creative Festival Logo" style="width: 150px; margin: auto;">
    </a>
    <ul class="navbar-nav flex-column mt-6 w-100 align-items-start">
        <li class="nav-item mb-3">
            <a class="nav-link text-white" href="adminEventManagement.php">
                <i class="fas fa-calendar-alt"></i> Upcoming Event
            </a>
        </li>
        <li class="nav-item mb-3">
            <a class="nav-link text-white" href="adminProjectManagement.php">
                <i class="fas fa-tasks"></i> Project Management
            </a>
        </li>
        <li class="nav-item mb-3">
            <a class="nav-link text-white" href="adminInbox.php">
                <i class="fas fa-inbox"></i> Inbox
            </a>
        </li>
    </ul>
</nav>

<!-- <script src="javascripts/adminNavigationBar.js"></script>  -->
 <script> 
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


 </script>