// FAQ Accordion Toggle
document.querySelectorAll('.faq-question').forEach(button => {
    button.addEventListener('click', () => {
        // Get the current state of 'aria-expanded'
        const expanded = button.getAttribute('aria-expanded') === 'true';
        
        // Toggle the state
        button.setAttribute('aria-expanded', !expanded);
        
        // Toggle the visibility of the answer
        const answer = button.nextElementSibling;
        answer.style.display = expanded ? 'none' : 'block';
        
        // Toggle the icon between "+" and "−"
        const icon = button.querySelector('.icon');
        icon.textContent = expanded ? '+' : '−';
    });
});

// Dropdown Menu Toggle
function toggleDropdown() {
    const dropdown = document.getElementById('dropdown');
    dropdown.classList.toggle('active');  // Toggle the 'active' class
}

// Close dropdown if clicked outside
window.addEventListener('click', function(event) {
    const dropdown = document.getElementById('dropdown');
    // Check if the click was outside the dropdown and profile icon
    if (!event.target.closest('.user-profile') && dropdown.classList.contains('active')) {
        dropdown.classList.remove('active');
    }
});

