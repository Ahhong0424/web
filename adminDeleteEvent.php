<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Event</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="stylesheets/adminStyle.css">
    <link rel="stylesheet" href="stylesheets/adminEventManagement.css">
</head>
<body>

<div class="modal fade show" id="deleteEventModal" tabindex="-1" aria-labelledby="deleteEventModalLabel" aria-hidden="true" style="display: block; background-color: rgba(0,0,0,0.5);">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center" id="deleteEventModalLabel">Delete Event</h5>
                <button type="button" class="btn-close" onclick="window.location.href='adminEventManagement.php'"></button>
            </div>

            <div class="modal-body text-center">
                <div class="row mb-3">
                    <div class="col-12">
                        <img src="images/homepage_upcoming_showcases/AcidicPalette.png" class="img-fluid" alt="Event Image">
                    </div>
                </div>
            </div>

            <div class="modal-footer justify-content-center">
                <div class="row mb-3">
                    <div class="col-12">
                        <p>Are you sure you want to delete this event (Acidic Palette)?</p>
                    </div>
                </div>
                <button type="button" class="btn btn-outline-secondary" onclick="window.location.href='adminEventManagement.php'">Cancel</button>
                <form action="adminDeleteEventAction.php" method="POST" class="d-inline">
                    <input type="hidden" name="eventId" value="12345">
                    <button type="submit" class="btn btn-danger">Confirm Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="javascripts/adminDeleteEvent.js"></script>
<?php include 'components/adminFooter.php'; ?>
</body>
</html>
