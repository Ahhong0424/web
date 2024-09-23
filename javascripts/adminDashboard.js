document.querySelectorAll('.dropdown-item').forEach(item => {
    item.addEventListener('click', function() {
        const selectedValue = this.textContent;
        document.getElementById('monthDropdown').textContent = selectedValue;
    });
});
