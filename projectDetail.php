<?php include 'components/navigationBar.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Detail</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="stylesheets/style.css">
</head>
<body>

<section>
        <img src="images/Branding/project/BProject_1.jpg" alt="Project Image" class="project-image">
    </section>

    <!-- Project Information Section with Black Background -->
    <div class="project-details-section">
        <div class="project-info">
            <!-- Yellow Heart Button -->
            <div class="heart-container">
                <button class="yellow-heart-btn">
                    <i class="fas fa-heart"></i>
                </button>
            </div>

            <!-- Project Title and Stats -->
            <div class="project-stats text-center">
                <h2 class="project-title">Digital Typography Process Book</h2>
                <p>
                    <i class="fas fa-heart"></i> 50
                    <i class="fas fa-eye ml-3"></i> 50
                    <i class="fas fa-comment ml-3"></i> 50
                </p>
                <p class="publish-date">Published on 21 September 2024</p>
            </div>
        </div>
    </div>


    <!-- Comment Section -->
    <section class="container">
        <div class="comment-section">
            <!-- Comment Box for the User -->
            <div class="comment-box">
                <img src="images/Branding/profile/BProfile1.jpg" alt="User Profile" class="profile-pic">
                <div class="comment-input-wrapper">
                    <textarea rows="3" placeholder="What are your thoughts on this project?"></textarea>
                    <button class="post-btn">Post A Comment</button>
                </div>
            </div>

            <hr class="divider">

            <!-- Displayed Comments -->
            <div class="comment">
                <img src="images/Branding/profile/BProfile2.jpg" alt="User Profile" class="profile-pic">
                <div class="comment-content">
                    <p class="comment-header">Maude Hall <span class="comment-time">14 min ago</span></p>
                    <p>That's a fantastic new app feature. You and your team did an excellent job of incorporating user testing feedback.</p>
                </div>
            </div>

        </div>
    </section>

    <!-- Include footer -->
    <?php include 'components/footer.php'; ?>

</body>
</html>

