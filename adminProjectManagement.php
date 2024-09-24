<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Project Management</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="stylesheets/adminStyle.css">
    <link rel="stylesheet" href="stylesheets/adminProjectManagement.css">
</head>
<body>

<div class="d-flex">    
        <!-- Navbar Section -->
        <div>
            <?php include('components/adminNavigationBar.php'); ?>
        </div>

        <!-- Main Content -->
        <div class="flex-grow-1 main-content" style="padding: 20px; margin-left: 250px;">
            <div class="d-flex justify-content-between align-items-center p-3">
                <div class="d-flex align-items-center">
                    <h2 style="font-weight: bold; margin: 0;">Project Management</h2>
                </div>
                <!-- Profile Icon -->
                <?php include('components/adminProfileIcon.php'); ?>
            </div>

            <!-- Table Section -->
            <div class="container mt-4" style="border-radius: 15px; border: 1px solid #ddd; background-color: white; padding: 20px;">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Creator Name</th>
                            <th>Project Title</th>
                            <th>Category</th>
                            <th>Media Attach</th>
                            <th>Date - Time</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Sample Row 1 -->
                        <tr>
                            <td><img src="images/profiles/james-chen.jpg" class="rounded-circle me-2" style="width: 40px; height: 40px;"> James Chen</td>
                            <td>Neon Dreams</td>
                            <td>Animation</td>
                            <td>
                                <a href="images/homepage_upcoming_showcases/AcidicPalette.png" target="_blank">
                                    <img src="images/homepage_upcoming_showcases/AcidicPalette.png" class="img-thumbnail" style="width: 60px;">
                                </a>
                            </td>
                            <td>30.09.2024 08:50 PM</td>
                            <td>
                                <div class="dropdown status-dropdown">
                                    <button class="btn status-pending dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Pending
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item status-approved" href="updateProjectStatus.php?status=Approved&project=1">Approved</a></li>
                                        <li><a class="dropdown-item status-kiv" href="updateProjectStatus.php?status=KIV&project=1">KIV</a></li>
                                        <li><a class="dropdown-item status-rejected" href="updateProjectStatus.php?status=Rejected&project=1">Rejected</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <!-- Sample Row 2 -->
                        <tr>
                            <td><img src="images/profiles/krystal-liu.jpg" class="rounded-circle me-2" style="width: 40px; height: 40px;"> Krystal Liu</td>
                            <td>Break Free</td>
                            <td>Motion Graphic</td>
                            <td>
                                <a href="images/homepage_upcoming_showcases/AcidicPalette.png" target="_blank">
                                    <img src="images/homepage_upcoming_showcases/AcidicPalette.png" class="img-thumbnail" style="width: 60px;">
                                </a>
                            </td>
                            <td>28.09.2024 11:30 AM</td>
                            <td>
                                <div class="dropdown status-dropdown">
                                    <button class="btn status-pending dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Pending
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item status-approved" href="updateProjectStatus.php?status=Approved&project=2">Approved</a></li>
                                        <li><a class="dropdown-item status-kiv" href="updateProjectStatus.php?status=KIV&project=2">KIV</a></li>
                                        <li><a class="dropdown-item status-rejected" href="updateProjectStatus.php?status=Rejected&project=2">Rejected</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <!-- Add more sample rows as necessary -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>

<!-- Include footer -->
<?php include 'components/adminFooter.php'; ?>

</body>
</html>
