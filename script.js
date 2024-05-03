// Get the events section and events link
const eventsSection = document.getElementById('events');
const eventsLink = document.getElementById('events-link');

// Add click event listener to the events link
eventsLink.addEventListener('click', function(event) {
    event.preventDefault(); // Prevent default anchor behavior
    eventsSection.classList.toggle('slide-right'); // Toggle slide-right class
});
