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
    <link rel="stylesheet" href="stylesheets/contact.css">
</head>
<body>
    <header class="hero">
        <img src="images/header_contact.png" alt="Hero Image" class="hero-image">
    </header>

    <!-- Contact Section -->
    <section class="container py-5">
        <div class="row">
            <div class="col-md-6">
            <img src="images/Poster.png" alt="Creative Carnival" class="img-fluid rounded mb-4" style="width: 100%; height: auto; display: block; margin: 0 auto;">

                <div class="contact-details">
                    <h5 style="font-size: 18px; font-weight: bold;">PHONE</h5>
                    <p>+60 1234 56789</p>

                    <h5 style="font-size: 18px; font-weight: bold;">EMAIL</h5>
                    <p>creativecarnival@gmail.com</p>

                    <h5 style="font-size: 18px; font-weight: bold;">LOCATION</h5>
                    <p>Ground Floor, Bangunan Tan Sri Khaw Kai Boh (Block A),<br> Jalan Genting Kelang, Setapak, 53300 Kuala Lumpur</p>
                </div>
            </div>

            <div class="col-md-6">
                <div class="contact-form-wrapper"> 
                    <h2 style="font-size: 30px; font-weight: bold;">Let's Talk</h2>
                    <form action="submit_contact_form.php" method="POST" class="contact-form">
                        <div class="form-group">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control form-input" id="name" name="name" required>
                        </div>

                        <div class="form-group">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control form-input" id="email" name="email" required>
                        </div>

                        <div class="form-group">
                            <label for="message" class="form-label">Message</label>
                            <textarea id="message" name="message" class="form-control form-input" rows="12" required></textarea>
                        </div>

                        <button type="submit" class="btn btn-dark">Send</button>
                    </form>
                </div>
            </div>

        </div>
    </section>

    <section class="container py-5">
        <div class="embed-responsive embed-responsive-16by9">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3983.5378121733747!2d101.72398217589166!3d3.2152551967599337!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc3843bfb6a031%3A0x2dc5e067aae3ab84!2sTunku%20Abdul%20Rahman%20University%20of%20Management%20and%20Technology%20(TAR%20UMT)!5e0!3m2!1sen!2smy!4v1726850690292!5m2!1sen!2smy" 
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </section>

    <?php include 'components/footer.php'; ?>
</body>
</html>
