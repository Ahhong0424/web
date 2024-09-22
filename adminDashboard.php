<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Project</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="stylesheets/adminStyle.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body>

<div class="d-flex">
    <!-- Navbar Section -->
    <div>
        <?php include('components/adminNavigationBar.php'); ?>
    </div>

    <!-- Main Content Section -->
    <div class="flex-grow-1">
        <div class="d-flex justify-content-between align-items-center p-3">
            <!-- Profile Icon -->
            <?php include('components/adminProfileIcon.php'); ?>
        </div>

        <div class="container-fluid" style="background-image: url('../images/bg.png'); padding-left: 20px;">
            <!-- Dashboard Content -->
            <h2 class="mt-5">Dashboard</h2>

            <!-- Profile Section -->
            <div class="card p-3 mt-3" style="border-radius: 15px; background-image: url('images/adminBG.png'); background-size: cover;">
                <div class="row align-items-center">
                    <div class="col-md-2">
                        <img src="path_to_static_profile_pic.jpg" class="rounded-circle" width="80" height="80" alt="Profile Picture">
                    </div>
                    <div class="col-md-8">
                        <h4>Albert Wu <i class="fas fa-check-circle" style="color: #8E77F8;"></i></h4>
                        <p>Website Administrator | Full Access | IT Department</p>
                    </div>
                    <div class="col-md-2 text-right">
                        <button class="btn btn-outline-light" style="border: none;">
                            <i class="fas fa-edit"></i> Edit Profile
                        </button>
                    </div>
                </div>
            </div>

            <!-- Stats Cards -->
            <div class="row mt-4">
                <div class="col-md-4">
                    <div class="card p-3" style="border-radius: 10px; position: relative;">
                        <h5>Total Users</h5>
                        <h2>372</h2>
                        <small class="text-success">1.2% Up from yesterday <i class="fas fa-arrow-up"></i></small>
                        <i class="fas fa-users fa-2x" style="position: absolute; top: 10px; right: 10px;"></i>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card p-3" style="border-radius: 10px; position: relative;">
                        <h5>Total Projects</h5>
                        <h2>98</h2>
                        <small class="text-danger">1.3% Down from past week <i class="fas fa-arrow-down"></i></small>
                        <i class="fas fa-box fa-2x" style="position: absolute; top: 10px; right: 10px;"></i>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card p-3" style="border-radius: 10px; position: relative;">
                        <h5>Total Pending</h5>
                        <h2>14</h2>
                        <small class="text-success">1.8% Up from yesterday <i class="fas fa-arrow-up"></i></small>
                        <i class="fas fa-hourglass-half fa-2x" style="position: absolute; top: 10px; right: 10px;"></i>
                    </div>
                </div>
            </div>

            <!-- Project Table -->
            <table class="table mt-4">
                <thead>
                    <tr>
                        <th>Creator Name</th>
                        <th>Project Title</th>
                        <th>Category</th>
                        <th>Media Attach</th>
                        <th>Date-Time</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="path_to_profile_image1.jpg" class="rounded-circle" width="40" height="40" alt="Profile"> James Chen</td>
                        <td>Neon Dreams</td>
                        <td>Animation</td>
                        <td><a href="path_to_file1" target="_blank">View File</a></td>
                        <td>30.09.2024 - 08:50 PM</td>
                        <td><span class="badge badge-success">Approved</span></td>
                    </tr>
                    <tr>
                        <td><img src="path_to_profile_image2.jpg" class="rounded-circle" width="40" height="40" alt="Profile"> Krystal Liu</td>
                        <td>Break Free</td>
                        <td>Motion Graphic</td>
                        <td><a href="path_to_file2" target="_blank">View File</a></td>
                        <td>28.09.2024 - 11:30 AM</td>
                        <td><span class="badge badge-warning">Pending</span></td>
                    </tr>
                    <tr>
                        <td><img src="path_to_profile_image3.jpg" class="rounded-circle" width="40" height="40" alt="Profile"> Wong Zhi Jun</td>
                        <td>Travelerz App</td>
                        <td>UI/UX</td>
                        <td><a href="path_to_file3" target="_blank">View File</a></td>
                        <td>27.09.2024 - 04:45 PM</td>
                        <td><span class="badge badge-danger">Rejected</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Include footer -->
<?php include 'components/adminFooter.php'; ?>

</body>
</html>
