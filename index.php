<?php include 'components/navigationBar.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage - Creative Carnival</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="stylesheets/style.css">
</head>
<body>

    <header class="hero">
        <img src="images/header_index.png" alt="Hero Image" class="hero-image">
    </header>

    <section class="image-grid-section py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="image-item">
                        <a href="projectDetail.php?id=1" class="image-link">
                            <img src="images/homepage_showcases/H_Artizaro.png" class="fixed-size-img img-fluid" alt="Image 1">
                            <div class="hover-overlay">
                                <button class="view-details-btn">View Details</button>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="image-item">
                        <a href="projectDetail.php?id=2" class="image-link">
                            <img src="images/homepage_showcases/H_HoyhnkAnimation.png" class="fixed-size-img img-fluid" alt="Image 1">
                            <div class="hover-overlay">
                                <button class="view-details-btn">View Details</button>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="image-item">
                        <a href="projectDetail.php?id=3" class="image-link">
                            <img src="images/homepage_showcases/H_InkGiant.png" class="fixed-size-img img-fluid" alt="Image 1">
                            <div class="hover-overlay">
                                <button class="view-details-btn">View Details</button>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="image-item">
                        <a href="projectDetail.php?id=4" class="image-link">
                            <img src="images/homepage_showcases/H_JarsBranding.png" class="fixed-size-img img-fluid" alt="Image 1">
                            <div class="hover-overlay">
                                <button class="view-details-btn">View Details</button>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="image-item">
                        <a href="projectDetail.php?id=5" class="image-link">
                            <img src="images/homepage_showcases/H_Joker.png" class="fixed-size-img img-fluid" alt="Image 1">
                            <div class="hover-overlay">
                                <button class="view-details-btn">View Details</button>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="image-item">
                        <a href="projectDetail.php?id=6" class="image-link">
                            <img src="images/homepage_showcases/H_Maguite.png" class="fixed-size-img img-fluid" alt="Image 1">
                            <div class="hover-overlay">
                                <button class="view-details-btn">View Details</button>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="image-item">
                        <a href="projectDetail.php?id=7" class="image-link">
                            <img src="images/homepage_showcases/H_PicktBranding.png" class="fixed-size-img img-fluid" alt="Image 1">
                            <div class="hover-overlay">
                                <button class="view-details-btn">View Details</button>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="image-item">
                        <a href="projectDetail.php?id=8" class="image-link">
                            <img src="images/homepage_showcases/H_Preferenz.png" class="fixed-size-img img-fluid" alt="Image 1">
                            <div class="hover-overlay">
                                <button class="view-details-btn">View Details</button>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="image-item">
                        <a href="projectDetail.php?id=9" class="image-link">
                            <img src="images/homepage_showcases/H_TurboTrax.png" class="fixed-size-img img-fluid" alt="Image 1">
                            <div class="hover-overlay">
                                <button class="view-details-btn">View Details</button>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Showcase section -->
    <section class="showcase py-5">
        <div class="container text-center">
            <h2 class="mb-4">Upcoming <span>Showcase</span></h2>
        </div>
        <div class="light-grey-box">
            <div class="container text-center">
                <div id="showcaseCarousel" class="carousel slide" data-ride="carousel">
                    
                    <ol class="carousel-indicators">
                        <li data-target="#showcaseCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#showcaseCarousel" data-slide-to="1"></li>
                        <li data-target="#showcaseCarousel" data-slide-to="2"></li>
                        <li data-target="#showcaseCarousel" data-slide-to="3"></li>
                        <li data-target="#showcaseCarousel" data-slide-to="4"></li>
                    </ol>

                    <div class="carousel-inner">
                        <!-- Slide 1 -->
                        <div class="carousel-item active">
                            <img src="images/homepage_upcoming_showcases/AcidicPalette.png" class="d-block w-100" alt="Showcase Image 1">
                            <div class="showcase-content mt-4">
                                <h3>Acidic Palette</h3>
                                <p>03 OCT 2024 - 05 OCT 2024</p>
                                <p>Join us for a night of creativity and colors.</p>
                                <button class="btn btn-primary">Learn More</button>
                            </div>
                        </div>
                        <!-- Slide 2 -->
                        <div class="carousel-item">
                            <img src="images/homepage_upcoming_showcases/ArtWorkshop.png" class="d-block w-100" alt="Showcase Image 2">
                            <div class="showcase-content mt-4">
                                <h3>Acidic Palette</h3>
                                <p>03 OCT 2024 - 05 OCT 2024</p>
                                <p>Join us for a night of creativity and colors.</p>
                                <button class="btn btn-primary">Learn More</button>
                            </div>
                        </div>
                        <!-- Slide 3 -->
                        <div class="carousel-item">
                            <img src="images/homepage_upcoming_showcases/Leap.png" class="d-block w-100" alt="Showcase Image 3">
                            <div class="showcase-content mt-4">
                                <h3>Acidic Palette</h3>
                                <p>03 OCT 2024 - 05 OCT 2024</p>
                                <p>Join us for a night of creativity and colors.</p>
                                <button class="btn btn-primary">Learn More</button>
                            </div>
                        </div>
                    </div>

                    <a class="carousel-control-prev" href="#showcaseCarousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#showcaseCarousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <?php include 'components/footer.php'; ?>

</body>
</html>

