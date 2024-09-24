<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Inbox Detail</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="stylesheets/adminStyle.css">
</head>
<body>

    <div class="d-flex">
        <!-- Navbar Section -->
        <div>
            <?php include('components/adminNavigationBar.php'); ?>
        </div>

        <div class="flex-grow-1 main-content" style="padding: 20px; margin-left: 250px;">
            <div class="d-flex justify-content-between align-items-center p-3">
                <div class="d-flex align-items-center">
                    <h2 style="font-weight: bold; margin: 0;">Inbox</h2>
                </div>
                <!-- Profile Icon -->
                <?php include('components/adminProfileIcon.php'); ?>
            </div>

            <!-- Inbox Message Wrapper -->
            <div class="card shadow-sm p-4" style="border-radius: 12px; margin-top: 20px;">
                <!-- Row with Profile Image, Name, and Date -->
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <div class="d-flex align-items-center">
                        <img src="images/admin/Admin_ProfilePicture.jpg" alt="Profile" class="rounded-circle me-3" style="width: 50px; height: 50px;">
                        <div>
                            <h5 class="mb-0" style="font-weight: bold;">Andrew Willis</h5>
                            &lt;andrewwillis@gmail.com&gt;
                        </div>
                    </div>
                    <div>
                        <small class="text-muted">Sun, 25 Aug, 11:24 (4 days ago)</small>
                    </div>
                </div>

                <!-- Header and Question -->
                <h4 class="mb-3" style="font-weight: bold;">Questions</h4>
                <div class="mb-4">
                    <p  style="color: #282828;">I'm Andrew Willis, I'm quite interested in this upcoming event. When does the showcase start? How can I register?</p>
                </div>

                <hr>

                <!-- Response Form -->
                <form action="POST">
                    <div class="mb-3">
                        <textarea class="form-control" placeholder="Type your response..." rows="5"></textarea>
                    </div>
                    <div class="d-flex justify-content-between">
                        <a href="adminInboxListing.php">
                            <button type="button" class="btn btn-dark">Other Respond</button>
                        </a>
                        <button type="submit" class="btn btn-warning">Send Email</button>
                    </div>  
                </form>
            </div>
        </div>
    </div>

<!-- Include footer -->
<?php include 'components/adminFooter.php'; ?>

</body>
</html>
