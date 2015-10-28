jQuery(document).ready(function($) {
  (function() {

    var panel = {};
    var bgArea = $('#home-portfolio-bg')

    $( ".portfolio-panel" ).hover(
    // when mouse is over a panel
    function panelEnter() {
      panel.id = $(this).attr('data-panel'); // store which panel is selected

      bgArea.addClass(panel.id); // add background
      bgArea.stop(true, true).animate({ opacity: 1 }, 500); // fade in

    // when mouse leaves a panel
  }, function panelLeave() {
      bgArea.stop(true, true).animate({ opacity: 0 }, 500); // fade out
      bgArea.removeClass(panel.id); // remove background
    });

  }());
});
