<?php include 'components/navigationBar.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Creative Carnival</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="stylesheets/style.css">
</head>
<body>
    <!-- Showcase header -->
    <header class="hero">
        <div class="hero-content">
            <h1>Showcase</h1>
        </div>
    </header>

    <!-- Filters and Sorting Row -->
    <section class="filters-section" style="text-align: center; padding: 20px 0;">
        <div class="container">
            <div class="row justify-content-between">
                <!-- All Categories -->
                <div class="col-md-4">
                    <h5>All Categories (24)</h5>
                </div>

                <!-- Dropdown Sorting by Latest/Oldest -->
                <div class="col-md-2">
                    <select class="form-select">
                        <option value="latest">Latest</option>
                        <option value="oldest">Oldest</option>
                    </select>
                </div>

                <!-- Dropdown for Categories -->
                <div class="col-md-2">
                    <select class="form-select">
                        <option value="all">All</option>
                        <option value="illustration">Illustration</option>
                        <option value="branding">Branding</option>
                        <option value="uiux">UI/UX</option>
                        <option value="animation">Animation/3D Modelling</option>
                        <option value="video">Video Production</option>
                        <option value="game">Game Design</option>
                        <option value="motion">Motion Graphic</option>
                    </select>
                </div>
            </div>
        </div>
    </section>

    <!-- Showcase Grid Section -->
    <section class="showcase-grid" style="padding: 50px 0;">
        <div class="container">
            <div class="row">
                <?php for($i = 0; $i < 24; $i++): ?>
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <img src="path_to_showcase_image.jpg" class="card-img-top" alt="Showcase Image">
                            <div class="card-body text-center">
                                <h5 class="card-title">Showcase Title</h5>
                                <p class="card-text">
                                    <img src="path_to_author_profile.jpg" alt="Author" class="rounded-circle" style="width: 30px; height: 30px;">
                                    <span class="ml-2">Author Name</span>
                                </p>
                                <p>
                                    <i class="fas fa-heart"></i> 256 
                                    <i class="fas fa-eye ml-3"></i> 1.2k
                                </p>
                            </div>
                        </div>
                    </div>
                <?php endfor; ?>
            </div>
        </div>
    </section>
    
    <?php include 'components/footer.php'; ?>
</body>
</html>
