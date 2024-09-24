<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Edit Profile</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="stylesheets/adminStyle.css">
    <link rel="stylesheet" href="stylesheets/adminProfileEdit.css">
</head>
<body>

<div class="d-flex">
    <!-- Navbar Section -->
    <div>
        <?php include('components/adminNavigationBar.php'); ?>
    </div>

    <div class="flex-grow-1 main-content" style="padding: 20px; margin-left: 250px;">
        <div class="d-flex justify-content-between align-items-center p-3">
            <div class="d-flex align-items-center">
                <a href="adminDashboard.php" style="font-size: 24px; text-decoration: none; margin-right: 10px;">&lt;</a>
                <h2 style="font-weight: bold; margin: 0;">Edit Profile</h2>
            </div>

            <!-- Profile Icon -->
            <?php include('components/adminProfileIcon.php'); ?>
        </div>


        <div class="container-fluid" style="margin-left: 30px; margin-right: 30px;">
            <form action="uploadProfileImage.php" method="POST" enctype="multipart/form-data">
                <!-- Profile Section -->
                <div class="card mt-3" style="background-image: url('images/admin/Admin_BG_Cover.png'); padding: 150px 20px 20px 20px;">
                    <div class="row align-items-center">
                        <div class="col-md-3 d-flex justify-content-center">
                            <!-- Profile Picture -->
                            <img id="profileImage" src="images/admin/Admin_ProfilePicture.jpg" class="rounded-circle" width="240" height="240" alt="Profile Picture">
                        </div>

                        <div class="col-md-5 d-flex flex-column" style="padding-left: 20px;">
                            <h1>Albert Wu <i class="fas fa-check-circle" style="color: #8E77F8;"></i></h1>
                            <p>Website Administrator | Full Access | IT Department</p>
                        </div>

                        <div class="col-md-4 d-flex justify-content-end align-items-center">
                            <!-- Hidden File Input for Profile Image -->
                            <input type="file" id="profileImageInput" name="profile_image" style="display: none;" accept="image/*" onchange="previewImage(event)">

                            <!-- Camera Button for Upload -->
                            <button type="button" class="btn btn-outline-light rounded-circle" style="border: 2px solid #fff; width: 60px; height: 60px; margin-right: 10px;" onclick="document.getElementById('profileImageInput').click();">
                                <i class="fas fa-camera"></i>
                            </button>

                            <button type="submit" id="confirmButton" class="btn confirm-image-button" style="display: none;">
                                Confirm Image
                            </button>
                        </div>
                    </div>
                </div>
            </form>


            <div class="p-4 mb-4" style="background-color: white; border-radius: 15px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
                
            <!-- Section Basic Info -->
            <form action="your_form_submit_action" method="POST" id="profile-form">
                <div id="basic-info" class="form-section">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- First and Last Name -->
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="first_name" class="form-label">First Name</label>
                                    <input type="text" id="first_name" class="form-control" placeholder="Enter your first name">
                                </div>
                                <div class="col-md-6">
                                    <label for="last_name" class="form-label">Last Name</label>
                                    <input type="text" id="last_name" class="form-control" placeholder="Enter your last name">
                                </div>
                            </div>

                            <!-- Email and Phone -->
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" id="email" class="form-control" placeholder="Enter your email">
                                </div>
                                <div class="col-md-6">
                                    <label for="phone" class="form-label">Phone</label>
                                    <input type="tel" id="phone" class="form-control" placeholder="+60 175865123">
                                </div>
                            </div>

                            <!-- Address -->
                            <div class="col-md-12 mb-3">
                                <label for="address" class="form-label">Address</label>
                                <input type="text" id="address" class="form-control" placeholder="Jalan Perdana 3/1, Pandan Perdana">
                            </div>

                            <!-- City, State, Postcode -->
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <input type="text" id="city" class="form-control" placeholder="Cheras">
                                </div>
                                <div class="col-md-4">
                                    <input type="text" id="state" class="form-control" placeholder="Kuala Lumpur">
                                </div>
                                <div class="col-md-2">
                                    <input type="text" id="postcode" class="form-control" placeholder="56100">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Section Change Password -->
                <div id="change-password" class="form-section mt-4 p-4" style="background-color: white; border-radius: 15px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
                    <div class="mb-3">
                        <label for="current_password" class="form-label">Current Password</label>
                        <input type="password" id="current_password" class="form-control" placeholder="Enter current password">
                    </div>
                    <div class="mb-3">
                        <label for="new_password" class="form-label">New Password</label>
                        <input type="password" id="new_password" class="form-control" placeholder="Enter new password">
                    </div>
                    <div class="mb-3">
                        <label for="confirm_password" class="form-label">Confirm New Password</label>
                        <input type="password" id="confirm_password" class="form-control" placeholder="Confirm new password">
                    </div>

                    <div class="password-requirements">
                        <p>Ensure that these requirements are met:</p>
                        <ul>
                            <li>Minimum 8 characters long - the more, the better</li>
                            <li>At least one lowercase letter</li>
                            <li>At least one uppercase letter</li>
                            <li>At least one number, symbol, or whitespace character</li>
                        </ul>
                    </div>
                </div>

                <!-- Save Changes and Discard Buttons -->
                <div class="button-container text-center mt-4">
                    <button type="submit" class="btn btn-custom-save">Save Changes</button>
                </div>
            </form>

        </div>
    </div>
</div>


<script src="javascripts/adminEditProfile.js"></script>

<!-- Include footer -->
<?php include 'components/adminFooter.php'; ?>

</body>
</html>
