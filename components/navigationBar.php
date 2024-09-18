<nav class="navbar">
    <div class="logo">
        <a href="index.php">CreativeCarnival</a>
    </div>
    <ul class="nav-links">
        <li><a href="index.php">Home</a></li>
        <li><a href="#">Showcase</a></li>
        <li><a href="aboutUs.php">About</a></li>
        <li><a href="contactUs.php">Contact</a></li>
        <li> 
            <div class="user-profile">
                <!-- Profile Icon -->
                <img src="images/user_icon.jpg" alt="Profile" class="profile-icon" onclick="toggleDropdown()">
                
                <!-- Dropdown Menu -->
                <div class="dropdown-menu" id="dropdown">
                    <div class="dropdown-header">
                        <img src="images/user_icon.jpg" alt="Profile" class="dropdown-avatar">
                        <div class="dropdown-info">
                            <span class="dropdown-name">Chloe Grace <span class="verified">✔️</span></span>
                            <span class="dropdown-email">chloegrace@gmail.com</span>
                        </div>
                    </div>
                    <ul class="dropdown-links">
                        <li><a href="#">View Profile</a></li>
                        <li><a href="#">Support</a></li>
                        <li><a href="#">Settings</a></li>
                        <li><a href="#">Logout</a></li>
                    </ul>
                </div>
            </div>
        </li>
    </ul>
    

</nav>

<script src="script.js"></script>
