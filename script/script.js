$(document).ready(function() {

  // $(document).click(function(event) {
  //     var text = $(event.target);
  //     console.log(text);
  // });

  //hide burger-menu as default
  $(".burger-menu").hide(0);

  //hide burger menu if active and navbar turns
  //visible because window width changed
  $(window).resize(function() {
    if ($(window).width() > 1050) {
       $(".burger-menu").hide(0);
       $('#burger-image').show(0);
    }
  });

  //show burger menu on click
  $('#burger-image').click(function() {
    $(".burger-menu").show(500);
    $('#burger-image').hide(0);
  });

  //hide when back button was clicked
  $('#back-arrow').click(function() {
    $(".burger-menu").hide(500);
    $('#burger-image').show(0);
  });


  // --------------- other ---------------

  //scroll down when down-arrow is clicked
  $("#down-arrow").click(function(){
    var scrollToThis = $('#rest-of-page').offset().top - $('.navigation-bar-wrapper').height();
    $('html, body').animate({
      scrollTop: scrollToThis
    }, 2000);
  });

  //change navbar style when scrolling
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
