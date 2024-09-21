<?php include 'components/navigationBar.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="stylesheets/style.css">
    <link rel="stylesheet" href="stylesheets/profileEdit.css">
</head>
<body>

<div class="container my-5">
        <div class="row">
            <div class="col-md-3">
                <div class="section-links-wrapper">
                    <a href="#basic-info" class="section-header">BASIC INFORMATION</a></br>
                    <a href="#about-me" class="section-header">ABOUT ME</a></br>
                    <a href="#email" class="section-header">EMAIL</a></br>
                    <a href="#change-password" class="section-header">CHANGE PASSWORD</a>
                </div>
            </div>

            <div class="col-md-9">
                <!-- BASIC INFORMATION -->
                <div id="basic-info" class="form-section">
                    <div class="row">
                        <!-- Left Column: Profile Image -->
                        <div class="col-md-4">
                            <div class="profile-image-container">
                                <img src="images/profile/User_ProfilePicture.jpg" alt="Profile Image" class="profile-image">
                                <div class="upload-hover">
                                    <i class="fas fa-upload"></i> Upload
                                    <input type="file" name="profile_image" style="opacity: 0; position: absolute; width: 100%; height: 100%; cursor: pointer;">
                                </div>
                            </div>
                        </div>

                        <!-- Right Column: Form Fields -->
                        <div class="col-md-8">
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
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <label for="occupation" class="form-label">Occupation</label>
                                    <input type="text" id="occupation" class="form-control" placeholder="Enter your occupation">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="location" class="form-label">Location</label>
                                    <select id="location" class="form-select">
                                        <option value="Malaysia">Malaysia</option>
                                        <option value="USA">USA</option>
                                        <option value="Canada">Canada</option>
                                        <option value="UK">UK</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="city" class="form-label">City</label>
                                    <input type="text" id="city" class="form-control" placeholder="Enter your city">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ABOUT ME -->
                <div id="about-me" class="form-section">
                    <div class="mb-3">
                        <label for="section_title" class="form-label">Section Title</label>
                        <input type="text" id="section_title" class="form-control" placeholder="Enter your title">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea id="description" rows="4" class="form-control" placeholder="Describe yourself"></textarea>
                    </div>
                </div>

                <!-- EMAIL -->
                <div id="email" class="form-section">
                    <p>Your current primary email address is <strong>user_email_address</strong></p>
                    <div class="mb-3">
                        <label for="new_email" class="form-label">New Email Address</label>
                        <input type="email" id="new_email" class="form-control" placeholder="Enter new email address">
                    </div>
                </div>

                <!-- CHANGE PASSWORD -->
                <div id="change-password" class="form-section">
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

                <!-- Button Section: Discard Changes and Save Changes -->
                <div class="button-container">
                    <button type="button" class="btn btn-custom-discard">Discard Changes</button>
                    <button type="submit" class="btn btn-custom-save">Save Changes</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Include footer -->
    <?php include 'components/footer.php'; ?>

</body>
</html>

