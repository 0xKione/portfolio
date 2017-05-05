// Place all the behaviors and hooks related to the matching controller here.
// All this logic will automatically be available in application.js.

$(document).ready(() => {
  Jigl.init();

  $('.jigl-navbar-subsection > a, .jigl-navbar-section > a').on('click', function(event) {
    event.preventDefault();

    // Get the content ID to show
    let contentId = $(this).data('content');

    // Hide all other conent
    $('.jigl-content-container').hide();

    $('#' + contentId).show();
  });
});