$(document).ready(function() {
    // Bind click event to view image link
    $('.view-image').on('click', function(e) {
        e.preventDefault(); // Prevent default link behavior
        
        // Get the image source from data attribute
        var imgSrc = $(this).data('img-src');
        
        // Set the modal image source
        $('#modalImage').attr('src', imgSrc);
        
        // Show the modal
        $('#imageModal').modal('show');
    });

    // Optional: Smooth scroll back to the clicked image
    $('#imageModal').on('hidden.bs.modal', function () {
        $('html, body').animate({
            scrollTop: $('.view-image').offset().top - 100
        }, 'slow');
    });
});