document.addEventListener('DOMContentLoaded', () => {
    const editButtons = document.querySelectorAll('#show-button');
    const modal = document.getElementById('popup-form');

    editButtons.forEach(button => {
        button.addEventListener('click', () => {
            modal.style.display = 'block'; // Show the modal
            const itemId = button.getAttribute('data-id'); // Get the data-id if needed
            console.log('Edit button clicked for ID:', itemId);
        });
    });

    // Close modal when clicking outside of it
    window.addEventListener('click', (event) => {
        if (event.target == modal) {
            modal.style.display = 'none';
        }
    });
});
