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

</head>
<body>
    <header class="hero">
        <img src="images/header_aboutUs.png" alt="Hero Image" class="hero-image">
    </header>

    <!-- Part 1: Video -->
    <section class="video-section" style="text-align: center; padding: 50px 0;">
        <h2>Discover Creative Carnival</h2>
        <div style="position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%; background: #000;">
            <iframe src="https://www.youtube.com/embed/dNz4DenIDuw" 
                    style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;"
                    frameborder="0" allowfullscreen></iframe>
        </div>
    </section>


    <!-- Part 2: Who We Are  -->
    <section class="about-section" style="background-color: #FFCB3B; border-radius: 15px; padding: 40px; margin: 50px auto; width: 80%; text-align: left;">
        <h2>Who We Are</h2>
        <p>Creative Carnival is a platform for inspiration and discovery. Whether you're an employer seeking fresh talent, a creative looking for new ideas, or someone who loves innovative work, Creative Carnival provides a diverse collection of multimedia projects. We celebrate the creativity of multimedia students by showcasing their final year projects and sharing their unique perspectives with a global audience.</p>
    </section>

    <!-- Part 3: Guiding Our Purpose  -->
    <section class="purpose-section" style="text-align: center; padding: 50px 0;">
        <h2>Guiding Our Purpose</h2>
        <p>Creative Carnival aims to showcase and elevate emerging multimedia talent. We provide a platform for students to display their projects and inspire a global audience.</p>
        <img src="images/creative-talent.jpg" alt="Creative Talent" style="max-width: 100%; height: auto; margin-top: 20px;">
    </section>

    <section class="faq-section">
        <h2>Any Question? Look Here.</h2>
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
