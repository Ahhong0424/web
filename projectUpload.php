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
    <link rel="stylesheet" href="stylesheets/projectUpload.css">
</head>
<body>

    <div class="container my-5">
        <div class="form-wrapper">
            <form action="projectUpload.php" method="POST" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-5">
                        <h3>Project Styles (required)</h3>
                        <div class="upload-section">
                            <i class="fas fa-plus upload-icon"></i><br>
                            <div class="file-upload-text">
                                Upload Your File Here<br>
                                *Minimum size of 808x632px
                            </div>
                            <input type="file" name="project_file" class="form-control" 
                                style="opacity: 0; position: absolute; top: 0; left: 0; width: 100%; height: 100%; cursor: pointer;">
                        </div>
                    </div>

                    <div class="col-md-1 d-flex justify-content-center">
                        <div class="divider"></div>
                    </div>

                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="projectTitle" class="form-label">Project Title</label>
                            <input type="text" class="form-control" id="projectTitle" name="project_title" placeholder="Give your project a title" required>
                        </div>
                        <div class="mb-3">
                            <label for="projectTags" class="form-label">Project Tags</label>
                            <input type="text" class="form-control" id="projectTags" name="project_tags" placeholder="Add up to keywords to help people discover your project">
                        </div>
                        <div class="mb-3">
                            <label for="toolUse" class="form-label">Tool Use</label>
                            <input type="text" class="form-control" id="toolUse" name="tool_use" placeholder="What software, hardware, or material you use?">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">How Would You Categorize This Project? (required)</label><br>
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="motionGraphic" name="categories[]" value="Motion Graphic">
                                        <label class="form-check-label" for="motionGraphic">Motion Graphic</label>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="webDesign" name="categories[]" value="Web Design">
                                        <label class="form-check-label" for="webDesign">Web Design</label>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="animation" name="categories[]" value="3D Animation">
                                        <label class="form-check-label" for="animation">3D Animation</label>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="brandingDesign" name="categories[]" value="Branding Design">
                                        <label class="form-check-label" for="brandingDesign">Branding Design</label>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="uiuxDesign" name="categories[]" value="UI/UX Design">
                                        <label class="form-check-label" for="uiuxDesign">UI/UX Design</label>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="logoDesign" name="categories[]" value="Logo Design">
                                        <label class="form-check-label" for="logoDesign">Logo Design</label>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="videoProduction" name="categories[]" value="Video Production">
                                        <label class="form-check-label" for="videoProduction">Video Production</label>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="modeling" name="categories[]" value="3D Modeling">
                                        <label class="form-check-label" for="modeling">3D Modeling</label>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="others" name="categories[]" value="Others">
                                        <label class="form-check-label" for="others">Others</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control" id="description" name="description" rows="4" placeholder="Describe your project"></textarea>
                        </div>
                        <div class="d-flex justify-content-between">
                            <button type="button" class="btn btn-secondary" onclick="window.location.href='profile.php'">Cancel</button>
                            <button type="submit" class="btn btn-warning">
                                <i class="fas fa-upload"></i> Publish Project
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <?php include 'components/footer.php'; ?>

</body>
</html>

