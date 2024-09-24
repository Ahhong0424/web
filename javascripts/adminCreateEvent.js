function previewImage(event) {
    const file = event.target.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function (e) {
            const previewImg = document.getElementById('previewImg');
            previewImg.src = e.target.result;
            previewImg.style.display = 'block';
            document.getElementById('placeholderText').style.display = 'none';
        };
        reader.readAsDataURL(file);
    }
}

function handleDrop(event) {
    event.preventDefault(); // Prevent default behavior (Prevent file from being opened)
    const files = event.dataTransfer.files; // Get the files from the drag event
    if (files.length > 0) {
        const file = files[0];
        document.getElementById('coverImage').files = files; // Set the input's files
        previewImage({ target: { files: [file] } }); // Call preview function
    }
}