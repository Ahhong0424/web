<?php include 'components/navigationBar.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="stylesheets/style.css">
    <link rel="stylesheet" href="stylesheets/profile.css">
</head>
<body>
    <!-- Profile Header -->
    <div class="profile-header">
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-3">
                    <img src="images/profile/User_ProfilePicture.jpg" alt="Chloe Grace" class="rounded-circle img-fluid">
                </div>
                <div class="col-md-9">
                    <h1>Chloe Grace</h1>
                    <p>Video Editor, 3D Animation, Motion Graphics</p>
                    <p><strong>432 followers</strong> | 13 following</p>
                    <a href="profileEdit.php" class="btn btn-primary">
                        Edit Profile <i class="fas fa-pencil-alt" style="margin-left: 8px;"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- About Section -->
    <div class="profile-body">
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-4">
                <div class="card-about p-3">
                    <h4>About</h4>
                    <ul class="list-unstyled">
                        <li>
                            <i class="bi bi-gender-female"></i> Female
                        </li>
                        <li>
                            <i class="bi bi-calendar"></i> Born June 26, 2003
                        </li>
                        <li>
                            <i class="bi bi-geo-alt"></i> Kuala Lumpur, Cheras, Malaysia
                        </li>
                        <li>
                            <i class="bi bi-envelope"></i> chloegrace@gmail.com
                        </li>
                        <li>
                            <i class="bi bi-telephone"></i> +60 185736812
                        </li>
                    </ul>
                </div>

                </div>

                <!-- Projects Section -->
                <div class="col-md-8">
                    <div class="d-flex justify-content-between mb-4">
                        <h4 style="font-weight: bold;">Projects</h4>
                        <button class="btn btn-custom" onclick="window.location.href='projectUpload.php'">
                            <i class="fas fa-upload"></i>
                            Upload Project
                        </button>
                    </div>
                    <div class="row">
                        <!-- Loop these project cards -->
                        <div class="col-md-4 mb-4">
                            <div class="card">
                                <img src="images/Animation-3D_Modeling/project/AProject_1.png" class="card-img-top" alt="Project 1">
                                <p class="card-title">Showcase Title</p>
                                <div class="card-body">
                                    <a href="projectDetail.php" class="btn btn-primary view-details">View Details</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4">
                            <div class="card">
                                <img src="images/Animation-3D_Modeling/project/AProject_2.png" class="card-img-top" alt="Project 2">
                                <p class="card-title">Showcase Title</p>
                                <div class="card-body">
                                    <a href="projectDetail.php" class="btn btn-primary view-details">View Details</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4">
                            <div class="card">
                                <img src="images/Animation-3D_Modeling/project/AProject_3.png" class="card-img-top" alt="Project 3">
                                <p class="card-title">Showcase Title</p>
                                <div class="card-body">
                                    <a href="projectDetail.php" class="btn btn-primary view-details">View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php include 'components/footer.php'; ?>