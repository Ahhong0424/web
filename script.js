// FAQ Accordion Toggle
document.querySelectorAll('.faq-question').forEach(button => {
    button.addEventListener('click', () => {
        const expanded = button.getAttribute('aria-expanded') === 'true';
        
        button.setAttribute('aria-expanded', !expanded);
        
        const answer = button.nextElementSibling;
        answer.style.display = expanded ? 'none' : 'block';
        
        const icon = button.querySelector('.icon');
        icon.textContent = expanded ? '+' : '−';
    });
});

function toggleDropdown() {
    const dropdown = document.getElementById('dropdown');
    dropdown.classList.toggle('active');  
}

window.addEventListener('click', function(event) {
    const dropdown = document.getElementById('dropdown');
    if (!event.target.closest('.user-profile') && dropdown.classList.contains('active')) {
        dropdown.classList.remove('active');
    }
});

