<?php include 'components/navigationBar.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Project</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="stylesheets/style.css">
</head>
<body>

    <!-- Hero section with Bootstrap grid -->
    <header class="hero">
        <div class="container text-center">
            <div class="hero-content py-5">
                <h1 class="display-4">Become a part of the future</h1>
                <p class="lead">Empowering creators to express their ideas.</p>
            </div>
        </div>
    </header>

    <!-- Showcase section -->
    <section class="showcase py-5">
        <div class="container text-center">
            <h2 class="mb-4">Upcoming Showcase</h2>
            <div class="showcase-content">
                <h3>Acidic Palette</h3>
                <p>Join us for a night of creativity and colors.</p>
                <button class="btn btn-primary">Learn More</button> <!-- Bootstrap button -->
            </div>
        </div>
    </section>

    <!-- Call to Action section -->
    <section class="call-to-action py-5 bg-light text-center">
        <div class="container">
            <h2 class="mb-4">Unleash Your Creativity!</h2>
            <p>Submit your project for our upcoming events.</p>
            <button class="btn btn-success">Get Started</button> <!-- Bootstrap button -->
        </div>
    </section>

    <!-- Include footer -->
    <?php include 'components/footer.php'; ?>

</body>
</html>

