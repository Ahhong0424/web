function showDeleteModal(eventId, eventTitle, eventImageUrl) {
    document.getElementById('deleteEventModalLabel').textContent = `Delete ${eventTitle}`;
    document.getElementById('previewImg').src = eventImageUrl;
    document.querySelector('input[name="eventId"]').value = eventId;
}