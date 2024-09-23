function previewImage(event) {
    var output = document.getElementById('profileImage');
    var confirmButton = document.getElementById('confirmButton');
    
    // Show the selected image in the profile picture section
    output.src = URL.createObjectURL(event.target.files[0]);
    output.onload = function() {
        URL.revokeObjectURL(output.src); // Free up memory
    }

    // Show the Confirm button once an image is selected
    confirmButton.style.display = 'inline-block';
}