<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Event</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="stylesheets/adminStyle.css">
    <link rel="stylesheet" href="stylesheets/adminEventManagement.css">
</head>
<body>

<!-- Modal for Edit Event -->
<div class="modal fade show" id="editEventModal" tabindex="-1" aria-labelledby="editEventModalLabel" aria-hidden="true" style="display: block; background-color: rgba(0,0,0,0.5);">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editEventModalLabel">Edit Event</h5>
                <button type="button" class="btn-close" onclick="window.location.href='adminEventManagement.php'"></button>
            </div>
            <div class="modal-body">
                <form action="adminEditEventAction.php" method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <!-- Media Section -->
                        <div class="col-md-4">
                            <h6>Media</h6>
                            <label for="coverImage" class="form-label">Cover Image</label>
                            <img src="images/homepage_upcoming_showcases/AcidicPalette.png" class="img-fluid mb-2" alt="Event Image">
                            <input type="file" class="form-control" id="coverImage" name="coverImage">
                        </div>

                        <!-- Input Section -->
                        <div class="col-md-8">
                            <h6>Event Details</h6>
                            <div class="mb-3">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" class="form-control" id="title" name="title" value="Acidic Palette">
                            </div>
                            <div class="mb-3">
                                <label for="date" class="form-label">Date</label>
                                <input type="text" class="form-control" id="date" name="date" value="03.10.2024 - 05.10.2024">
                            </div>
                            <div class="mb-3">
                                <label for="time" class="form-label">Time</label>
                                <input type="text" class="form-control" id="time" name="time" value="9.00AM - 5.00PM">
                            </div>
                            <div class="mb-3">
                                <label for="location" class="form-label">Location</label>
                                <input type="text" class="form-control" id="location" name="location" value="TARUMT">
                            </div>
                            <div class="mb-3">
                                <label for="description" class="form-label">Description</label>
                                <textarea class="form-control" id="description" name="description" rows="3">bla bla bla</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" onclick="window.location.href='adminEventManagement.php'">Cancel</button>
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include 'components/adminFooter.php'; ?>
</body>
</html>
