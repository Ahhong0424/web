<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Event Management</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="stylesheets/adminStyle.css">
    <link rel="stylesheet" href="stylesheets/adminEventManagement.css">
</head>
<body>

<div class="d-flex">    
        <!-- Navbar Section -->
        <div>
            <?php include('components/adminNavigationBar.php'); ?>
        </div>

        <!-- Main Content -->
        <div class="flex-grow-1 main-content" style="padding: 20px; margin-left: 250px;">
            <div class="d-flex justify-content-between align-items-center p-3">
                <div class="d-flex align-items-center">
                    <h2 style="font-weight: bold; margin: 0;">Event Management</h2>
                </div>
                <!-- Profile Icon -->
                <?php include('components/adminProfileIcon.php'); ?>
            </div>
            

            <!-- Table Section -->
            <div class="container mt-4" style="border-radius: 15px; border: 1px solid #ddd; background-color: white; padding: 20px;">
                <div class="d-flex justify-content-end align-items-center p-3">
                    <a href="adminCreateEvent.php" class="btn btn-primary">Create Event</a>
                </div>

                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Location</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Acidic Palette</td>
                            <td>03.10.2024 - 05.10.2024</td>
                            <td>9.00AM - 5.00PM</td>
                            <td>TARUMT</td>
                            <td>bla bla bla</td>
                            <td><img src="images/homepage_upcoming_showcases/AcidicPalette.png" class="img-thumbnail" style="width: 60px;"></td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Actions
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="adminEditEvent.php">Edit Event</a></li>
                                        <li><a class="dropdown-item" href="adminDeleteEvent.php">Delete Event</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

<!-- Include footer -->
<?php include 'components/adminFooter.php'; ?>

</body>
</html>
