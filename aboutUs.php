<?php include 'components/navigationBar.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Creative Carnival</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="stylesheets/style.css">
    <style>
        /* Video Section */
        .video-section {
            padding: 0;
            margin: 0;
            text-align: center;
        }

        .video-section .video-container {
            position: relative;
            padding-bottom: 56.25%; /* 16:9 aspect ratio */
            height: 0;
            overflow: hidden;
            width: 100%; /* Full width */
        }

        .video-section iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border: 0;
        }

        /* Stats Section */
        .stats-section {
            background-color: #000;
            padding: 50px 0;
            margin: 0;
        }

        .stats-value {
            font-size: 72px;
            color: #fff;
            font-weight: 700;
        }

        .stats-label {
            font-size: 24px;
            color: #FED101;
            font-weight: 600;
            text-transform: uppercase;
        }

        @media (max-width: 768px) {
            .stats-value {
                font-size: 48px;
            }

            .stats-label {
                font-size: 18px;
            }
        }

        .about-section {
    display: flex;
    justify-content: space-between;
    align-items: stretch; /* Ensure columns align and stretch */
}

.about-wrapper {
    border-radius: 15px;
    padding: 20px;
    flex-grow: 1; /* Ensure wrapper takes available width */
}

.text-column {
    background-color: #FED101;
    border-radius: 10px;
}

.about-small-images {
    display: flex;
    justify-content: space-between;
    padding-top: 15px;
}

.about-small-images img {
    width: 48%; /* Ensure the images occupy 2 equal columns */
    border-radius: 10px;
}

.about-image {
    height: 80vh; /* Ensures image matches the height of the wrapper */
    width: auto;
    object-fit: cover;
    border-radius: 40px;
    padding-top: 35px;
    padding-bottom: 35px;
}

.row {
    margin-left: auto;
    margin-right: auto;
    max-width: 1200px; /* Ensures the row doesn't go edge to edge */
}


        .purpose-section {
            background-color: #FED101;
            width: 100%; 
            margin: 50 auto; 
            padding: 50px 0; 
            text-align: center; 
        }
    </style>
</head>
<body>
    <header class="hero">
        <img src="images/header_aboutUs.png" alt="Hero Image" class="hero-image">
    </header>

    <!-- Part 1: Video -->
    <section class="video-section">
        <div class="video-container">
            <iframe src="images/about_us/Showcase_Video.mp4" allowfullscreen></iframe>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="stats-section">
        <div class="container text-center">
            <div class="row">
                <div class="col-md-4">
                    <h1 class="stats-value">98</h1>
                    <p class="stats-label">Projects</p>
                </div>
                <div class="col-md-4">
                    <h1 class="stats-value">06</h1>
                    <p class="stats-label">Years</p>
                </div>
                <div class="col-md-4">
                    <h1 class="stats-value">23</h1>
                    <p class="stats-label">Showcases</p>
                </div>
            </div>
        </div>
    </section>


    <!-- Part 2: Who We Are  -->
    <section class="about-section">
        <div class="container">
            <!-- Main Wrapper -->
            <div class="row align-items-center w-100">
                <!-- Text and Small Images Wrapper -->
                <div class="col-md-9 d-flex flex-column justify-content-between about-wrapper">
                    <!-- Text Column -->
                    <div class="text-column p-4">
                        <h2>Who We Are</h2>
                        <p>Creative Carnival is a platform for inspiration and discovery. Whether you're an employer seeking fresh talent, a creative looking for new ideas, or someone who loves innovative work, Creative Carnival provides a diverse collection of multimedia projects. We celebrate the creativity of multimedia students by showcasing their final year projects and sharing their unique perspectives with a global audience.</p>
                    </div>
                    <!-- Small Images Row (Inside the Yellow Box) -->
                    <div class="about-small-images d-flex justify-content-between mt-3">
                        <img src="images/about_us/Visitor.png" alt="Small Image 1">
                        <img src="images/about_us/arrow_2.png" alt="Small Image 2">
                    </div>
                </div>

                <!-- Image Column (Portrait Image) -->
                <div class="col-md-3">
                    <img src="images/about_us/Decoration.png" alt="Creative Carnival" class="about-image">
                </div>
            </div>
        </div>
    </section>



    <!-- Part 3: Guiding Our Purpose  -->
    <section class="purpose-section">
        <h2 style="font-weight: bold;">Guiding Our Purpose</h2>
        <p  style="opacity: 0.8;">Creative Carnival aims to showcase and elevate emerging multimedia talent. We provide a platform for students to display their projects and inspire a global audience.</p>
        <img src="images/about_us/GuidingOurPurpose.png" alt="Creative Talent" style="max-width: 100%; height: auto; margin-top: 20px; border-radius: 15px;">
    </section>


    <section class="faq-section">
        <h2 style="font-weight: bold;">Any Question? Look Here.</h2>
        <div class="container">
            <div class="row faq-container">
                <div class="col-md-6 mb-4">
                    <div class="faq-item">
                        <button class="faq-question" aria-expanded="false">
                            How can I participate or submit my project? <span class="icon">+</span>
                        </button>
                        <div class="faq-answer">
                            <p>Sign up and visit the "Account" section on our website to upload your project and follow the submission guidelines.</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6 mb-4">
                    <div class="faq-item">
                        <button class="faq-question" aria-expanded="false">
                            What types of projects are featured? <span class="icon">+</span>
                        </button>
                        <div class="faq-answer">
                            <p>The "Creative Carnival" features a variety of projects like illustration, animations, motion graphic, and more. Check out the "Showcase" section to explore more, with projects sorted into categories.</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6 mb-4">
                    <div class="faq-item">
                        <button class="faq-question" aria-expanded="false">
                            How are projects selected? <span class="icon">+</span>
                        </button>
                        <div class="faq-answer">
                            <p>Projects are selected based on creativity, originality, and technical skill. Our team reviews each submission to meet our standards. Top projects are featured on our homepage to showcase the best student work.</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6 mb-4">
                    <div class="faq-item">
                        <button class="faq-question" aria-expanded="false">
                            Is there a fee to participate? <span class="icon">+</span>
                        </button>
                        <div class="faq-answer">
                            <p>No, there is no fee to participate in Creative Carnival. It's a platform designed to provide students with a space to showcase their creative projects, connect with others, and celebrate the diversity of artistic expression—all for free!</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6 mb-4">
                    <div class="faq-item">
                        <button class="faq-question" aria-expanded="false">
                            Are there sponsorship opportunities? <span class="icon">+</span>
                        </button>
                        <div class="faq-answer">
                            <p>Yes, there are sponsorship opportunities available. If you're interested in supporting Creative Carnival, please contact us for more details.</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6 mb-4">
                    <div class="faq-item">
                        <button class="faq-question" aria-expanded="false">
                            Who can use Creative Carnival? <span class="icon">+</span>
                        </button>
                        <div class="faq-answer">
                            <p>Creative Carnival is open to all students who want to showcase their creative projects. Students can showcase their final year projects, while industry professionals can explore new talent and ideas.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="script.js"></script>
    
    <?php include 'components/footer.php'; ?>
</body>
</html>
