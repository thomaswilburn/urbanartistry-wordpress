$('#mobile-menu-trigger').on('touchstart click', function(e) {
  e.preventDefault();
  e.stopImmediatePropagation();
  $(this)
    .parent()
    .find('.menu-inner')
    .slideToggle();
});