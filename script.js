document.addEventListener('DOMContentLoaded', () => {
    console.log('DOM fully loaded and parsed');

    const elements = document.querySelectorAll('.hidden');

    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
                entry.target.classList.remove('hidden');
                observer.unobserve(entry.target);
            }
        });
    });

    elements.forEach(element => {
        observer.observe(element);
    });

    // Log each hidden element to confirm they are being observed
    elements.forEach(element => {
        console.log('Observing element:', element);
    });

    // Modal logic
    const modal = document.getElementById('feedbackModal');
    const span = document.getElementsByClassName('close')[0];

    // Show the modal on page load
    window.onload = function() {
        modal.style.display = 'block';
    };

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = 'none';
    };

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = 'none';
        }
    };
});
