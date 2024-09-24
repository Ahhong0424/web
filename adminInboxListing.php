<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Inbox Management</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="stylesheets/adminStyle.css">
    <link rel="stylesheet" href="stylesheets/adminProjectManagement.css">
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
                    <h2 style="font-weight: bold; margin: 0;">Inbox List</h2>
                </div>
                <!-- Profile Icon -->
                <?php include('components/adminProfileIcon.php'); ?>
            </div>

            <!-- Table Section -->
            <div class="container mt-4" style="border-radius: 15px; border: 1px solid #ddd; background-color: white; padding: 20px;">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Sender Name</th>
                            <th>Email</th>
                            <th>Question</th>
                            <th>Date - Time</th>
                            <th>Actions</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Sample Row 1 -->
                        <tr>
                            <td><img src="images/profiles/james-chen.jpg" class="rounded-circle me-2" style="width: 40px; height: 40px;"> James Chen</td>
                            <td>andrewwillis@gmail.com</td>
                            <td>I'm Andrew Willis, I'm quite interested in this upcoming event. When does the showcase start? How can I register?</td>
                            <td>25.08.2024, 11:24 AM</td>
                            <td><a href="adminInboxDetail.php?inbox=1" target="_blank">View Inbox</a></td>
                            <td>
                                <div class="dropdown status-dropdown">
                                    <button class="btn status-pending dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Pending
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item status-approved" href="updateInboxStatus.php?status=Approved&inbox=1">Replied</a></li>
                                        <li><a class="dropdown-item status-kiv" href="updateInboxStatus.php?status=KIV&inbox=1">KIV</a></li>
                                        <li><a class="dropdown-item status-rejected" href="updateInboxStatus.php?status=Rejected&inbox=1">Rejected</a></li>
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
