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
    <header class="hero bg-warning text-center py-5">
        <h1>Contact</h1>
    </header>

    <!-- Contact Section -->
    <section class="container py-5">
        <div class="row">
            <!-- Left Column -->
            <div class="col-md-6">
                <img src="images/image.png" alt="Creative Carnival" class="img-fluid rounded mb-4"> <!-- Top Image -->

                <div class="contact-details">
                    <h5>PHONE</h5>
                    <p>+60 1234 56789</p>

                    <h5>EMAIL</h5>
                    <p>creativecarnival@gmail.com</p>

                    <h5>LOCATION</h5>
                    <p>Ground Floor, Bangunan Tan Sri Khaw Kai Boh (Block A),<br> Jalan Genting Kelang, Setapak, 53300 Kuala Lumpur</p>
                </div>

                <img src="images/image.png" alt="Creative Carnival Icon" class="img-fluid rounded mt-4"> <!-- Bottom Image -->
            </div>

            <!-- Right Column: Contact Form -->
            <div class="col-md-6">
                <h2>Let's Talk</h2>
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
                        <textarea id="message" name="message" class="form-control form-input" rows="5" required></textarea>
                    </div>

                    <button type="submit" class="btn btn-dark">Send</button>
                </form>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="container py-5">
        <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="https://maps.app.goo.gl/4sQy4shE42GpicRH8" allowfullscreen></iframe>
        </div>
    </section>

    <?php include 'components/footer.php'; ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
