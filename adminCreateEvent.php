<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Event</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="stylesheets/adminStyle.css">
    <link rel="stylesheet" href="stylesheets/adminEventManagement.css">
</head>
<body>

<div class="modal fade show" id="createEventModal" tabindex="-1" aria-labelledby="createEventModalLabel" aria-hidden="true" style="display: block; background-color: rgba(0,0,0,0.5);">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h5 class="modal-title" id="createEventModalLabel">Create Event</h5>
                <button type="button" class="btn-close" onclick="window.location.href='adminEventManagement.php'"></button>
            </div>

            <!-- Modal Body -->
            <div class="modal-body">
                <form action="adminCreateEventAction.php" method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <!-- Media Section -->
                        <div class="col-md-4">
                            <h6>Media</h6>
                            <label for="coverImage" class="form-label">Cover Image</label>
                            <div class="media-preview mb-3" id="imagePreview" ondragover="event.preventDefault();" ondrop="handleDrop(event)">
                                <div class="image-container">
                                    <img src="" alt="Preview Image" id="previewImg" style="display: none;">
                                </div>
                                <p id="placeholderText">Upload a file or drag and drop</p>
                            </div>
                            <input type="file" class="form-control" id="coverImage" name="coverImage" onchange="previewImage(event)">
                        </div>

                        <!-- Divider -->
                        <div class="col-md-1 d-flex align-items-center justify-content-center">
                            <div class="vertical-divider"></div>
                        </div>

                        <!-- Input Section -->
                        <div class="col-md-7">
                            <h6>Event Details</h6>
                            <div class="mb-3">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" class="form-control" id="title" name="title" placeholder="Enter event title">
                            </div>
                            <div class="mb-3">
                                <label for="date" class="form-label">Date</label>
                                <input type="text" class="form-control" id="date" name="date" placeholder="Enter event date">
                            </div>
                            <div class="mb-3">
                                <label for="time" class="form-label">Time</label>
                                <input type="text" class="form-control" id="time" name="time" placeholder="Enter event time">
                            </div>
                            <div class="mb-3">
                                <label for="location" class="form-label">Location</label>
                                <input type="text" class="form-control" id="location" name="location" placeholder="Enter event location">
                            </div>
                            <div class="mb-3">
                                <label for="description" class="form-label">Description</label>
                                <textarea class="form-control" id="description" name="description" rows="3" placeholder="Enter event description"></textarea>
                            </div>
                        </div>
                    </div>

                    <!-- Modal Footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" onclick="window.location.href='adminEventManagement.php'">Cancel</button>
                        <button type="submit" class="btn btn-primary">Create Event</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="javascripts/adminCreateEvent.js"></script>
<!-- Include footer -->
<?php include 'components/adminFooter.php'; ?>
</body>
</html>
