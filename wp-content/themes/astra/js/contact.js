jQuery(function($) {
  console.log('contact.js loaded');

  $('#contact-form').on('submit', function(e) {
    e.preventDefault();
    alert('Form submitted');
  });
});
