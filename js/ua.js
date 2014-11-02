$('#mobile-menu-trigger').on('touchstart click', function(e) {
  e.preventDefault();
  e.stopImmediatePropagation();
  $(".site-menu").toggleClass("show");
});