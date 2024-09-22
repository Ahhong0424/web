<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Management</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="stylesheets/adminStyle.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body>

<div class="d-flex">
    <!-- Navbar Section -->
    <div>
        <?php include('components/adminNavigationBar.php'); ?>
    </div>

    <!-- Main Content Section -->
    <div class="flex-grow-1">
        <div class="d-flex justify-content-between align-items-center p-3">
            <!-- Profile Icon -->
            <?php include('components/adminProfileIcon.php'); ?>
        </div>

        <div class="container-fluid" style="background-image: url('../images/bg.png'); padding-left: 20px;">
            <!-- Dashboard Content -->
            <h2 class="mt-5">Project Management</h2>

            
        </div>
    </div>
</div>

<!-- Include footer -->
<?php include 'components/adminFooter.php'; ?>

</body>
</html>
