document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('contactForm');
  
    form.addEventListener('submit', function(event) {
      event.preventDefault();
  
      const formData = new FormData(form);
  
      fetch('index.php', {
        method: 'POST',
        body: formData
      })
      .then(response => {
        if (!response.ok) {
          throw new Error('Network response was not ok');
        }
        return response.text();
      })
      .then(data => {
        // Handle response from server if needed
        console.log(data);
        alert('Your message has been sent. Thank you!');
        form.reset(); // Clear the form
      })
      .catch(error => {
        console.error('There was a problem with your fetch operation:', error);
        alert('There was a problem sending your message. Please try again later.');
      });
    });
  });