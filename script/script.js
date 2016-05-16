$(document).ready(function() {
  $("#down-arrow").click(function(){
    var scrollToThis = $('#rest-of-page').offset().top - $('.navigation-bar-wrapper').height();
    $('html, body').animate({
      scrollTop: scrollToThis
    }, 2000);
  });

  var opac = 0.0;
  $(window).scroll(function(){
    var firstSec = $('#rest-of-page').offset().top - $('.navigation-bar-wrapper').height();
    var scrollPos = $(window).scrollTop();

    if (scrollPos >= firstSec && opac != 1.0) {
      $('.navigation-bar-background').animate({
        opacity: 1.0
      }, 500);
      $('.nested-list-item').css({
        'background-color': '#555',
        'border-bottom' : 'none'
      });
      opac = 1.0;
      
    } else if (scrollPos < firstSec && opac != 0.0) {
      $('.navigation-bar-background').animate({
        opacity: 0.0
      }, 500);
      $('.nested-list-item').css({
        'background-color' : 'transparent',
        'border-bottom' : '2px solid white'
      });
      opac = 0.0;
    }
});
});
