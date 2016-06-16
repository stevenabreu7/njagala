function checkForm()
{
  var x = document.getElementById("email-field").value.replace(/\s/g, '');
  var atpos = x.indexOf('@');
  var dotpos = x.indexOf('.');
  var filter=/^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i

  if (!filter.test(x) || x.length < 6 || atpos < 1 || dotpos == -1)
  {
    // alert('Ungültige E-Mail-Adresse. Bitte prüfen Sie Ihre Eingabe.');
    swal({
      title: "Fehler!",
      text: "Ungültige E-Mail-Adresse, bitte Eingabe überprufen.",
      type: "error",
      animation: "pop",
      confirmButtonColor: "#888",
      confirmButtonText: "Okay",
      allowOutsideClick: true,
      allowEscapeKey: true
    })
    return false;
  }
  else
  {
    return true;
  }
}

function showSuccess()
{
  $('#emailbox').hide(0);
  swal({
    title: "Perfekt!",
    text: "Sie werden nun per E-Mail benachrichtigt, sobald wir loslegen.",
    type: "success",
    animation: "pop",
    confirmButtonColor: "#888",
    confirmButtonText: "Ok!",
    allowOutsideClick: true,
    allowEscapeKey: true
  })
}

$(document).ready(function() {

  var scrollSpeed = 1.0; // => px/ms
  var navAnimation = 500; //animation opacity
  var burgerAnimation = 200; //hide and show burger menu

  var burgerMenuActive = false;

  //hide burger-menu as default
  $(".burger-menu").hide(0);

  //plugins
  jQuery.fn.extend({
    scrollTo: function(scrollToThis) {
      var totalToScroll = scrollToThis - $(window).scrollTop();
      var duration = Math.abs(totalToScroll / scrollSpeed);

      $(".burger-menu").hide(burgerAnimation);
      burgerMenuActive = false;

      $(this).animate({
        scrollTop: scrollToThis
      }, duration);
    }
  });

  //hide burger menu if active and navbar turns visible
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

  $('.email-close-button').click(function() {
    $("#emailbox").hide(burgerAnimation);
  });

  //hide burger menu when back button was clicked
  $('#back-arrow').click(function() {
    $(".burger-menu").hide(burgerAnimation);
    burgerMenuActive = false;
  });

  // change bg image in nav-bar
  var clickCounter = 1;
  $('header').click(function(){
    if (clickCounter != 1) {
      $('.navbar-bg-image').attr('src','images/barkkcloth.png');
      clickCounter = 1;
    } else {
      $('.navbar-bg-image').attr('src','images/barkcloth.png');
      clickCounter++;
    }
  });

  $(document).click(function(event) {
    var target = $(event.target);
    var offsetForTargetDict = {
      '.down-arrow' : '.rest-of-page',
      '.project-link' : '.about-njagala-section',
      '.about-us-link' : '.about-us-section',
      '.funding-link' : '.funding-section',
      '.product-link' : '.product-section',
      '.contact-link' : '.contact-section'
    }

    for (var tg in offsetForTargetDict) {
      if (target.is(tg)) {
        var toScroll = $(offsetForTargetDict[tg]).offset().top - $('.navigation-bar-wrapper').height();
        $('html, body').scrollTo(toScroll);
      }
    }
  });

  //scroll all the way up when home link is clicked
  $(".home-link").click(function(){
    $('html, body').scrollTo(0);
  });

  //scroll function!
  $(window).scroll(function(){

    //change navbar style when scrolling
    var firstSec = $('.rest-of-page').offset().top - $('.navigation-bar-wrapper').height();
    var scrollPos = $(window).scrollTop();

    if (scrollPos >= firstSec - 100 && scrollPos < firstSec + 0) {
      var opacityToSet = ((scrollPos - firstSec + 100)/100);
      $('.navigation-bar-background').css('opacity', opacityToSet);
      $('.nested-list-item').css({ 'background-image': 'url(images/barkkcloth.png)' });
    } else if (scrollPos > firstSec + 100) {
      $('.navigation-bar-background').css('opacity', '1.0');
    } else if (scrollPos < firstSec) {
      $('.navigation-bar-background').css('opacity', '0.0');
      $('.nested-list-item').css({ 'background': 'none'});
    }
  });
});
