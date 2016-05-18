$(document).ready(function() {

  // $(document).click(function(event) {
  //     var text = $(event.target);
  //     console.log(text);
  // });

  var scrollSpeed = 1.0; // => px/ms
  var navAnimation = 500; //animation opacity
  var burgerAnimation = 200; //hide and show burger menu

  var burgerMenuActive = false;

  //hide burger-menu as default
  $(".burger-menu").hide(0);

  //hide burger menu if active and navbar turns
  //visible because window width changed
  $(window).resize(function() {
    if ($(window).width() > 1050 && burgerMenuActive) {
      $(".burger-menu").hide(0);
      burgerMenuActive = false;
    }
  });

  //show burger menu on click
  $('#burger-image').click(function() {
    $(".burger-menu").show(burgerAnimation);
    burgerMenuActive = true;
  });

  //hide when back button was clicked
  $('#back-arrow').click(function() {
    $(".burger-menu").hide(burgerAnimation);
    burgerMenuActive = false;
  });

  //scroll down when down-arrow is clicked
  $("#down-arrow").click(function(){
    var scrollToThis = $('#rest-of-page').offset().top - $('.navigation-bar-wrapper').height();
    var totalToScroll = scrollToThis - $(window).scrollTop();
    var duration = Math.abs(totalToScroll / scrollSpeed);

    $('html, body').animate({
      scrollTop: scrollToThis
    }, duration);
  });

  //scroll down when project-link is clicked
  $(".project-link").click(function(){
    var scrollToThis = $('#rest-of-page').offset().top - $('.navigation-bar-wrapper').height();
    var totalToScroll = scrollToThis - $(window).scrollTop();
    var duration = Math.abs(totalToScroll / scrollSpeed);

    $(".burger-menu").hide(burgerAnimation);
    burgerMenuActive = false;

    $('html, body').animate({
      scrollTop: scrollToThis
    }, duration);

  });

  //change navbar style when scrolling
  var opac = 0.0;
  $(window).scroll(function(){
    var firstSec = $('#rest-of-page').offset().top - $('.navigation-bar-wrapper').height();
    var scrollPos = $(window).scrollTop();

    if (scrollPos >= firstSec) {

      $('.project-link').css({
        'text-decoration' : 'underline'
      });

      if (opac != 1.0) {
        $('.navigation-bar-background').animate({
          opacity: 1.0
        }, navAnimation);
        $('.nested-list-item').css({
          'background-color': '#555',
          'border-bottom' : 'none'
        });
        opac = 1.0;
      }

    } else if (scrollPos < firstSec) {

      $('.project-link').css({
        'text-decoration' : 'none'
      });

      if (opac != 0.0) {
        $('.navigation-bar-background').animate({
          opacity: 0.0
        }, navAnimation);
        $('.nested-list-item').css({
          'background-color' : 'transparent',
          'border-bottom' : '2px solid white'
        });
        opac = 0.0;
      }
    }
  });
});
