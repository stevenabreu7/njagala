function checkForm()
{
  var x = document.getElementById("email-input").value.replace(/\s/g, '');
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
  $('.email-box').hide(0);
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

  $('.close-email-box').click(function() {
    $(".email-box").hide(burgerAnimation);
  });

  //hide burger menu when back button was clicked
  $('.burger-back-arrow').click(function() {
    $(".burger-menu").hide(burgerAnimation);
    burgerMenuActive = false;
  });

  // change bg image in nav-bar
  var clickCounter = 1;
  $('header').click(function(){
    if (clickCounter != 1) {
      $('.navbar-background img').attr('src','images/barkkcloth.png');
      clickCounter = 1;
    } else {
      $('.navbar-background img').attr('src','images/barkcloth.png');
      clickCounter++;
    }
  });

  $(document).click(function(event) {
    var target = $(event.target);
    var offsetForTargetDict = {
      '.down-arrow' : '.rest-of-page',
      '.first.link' : '.first.row',
      '.second.link' : '.second.row',
      '.third.link' : '.third.row',
      '.fourth.link' : '.fourth.row',
      '.fifth.link' : '.fifth.row'
    }

    for (var tg in offsetForTargetDict) {
      if (target.is(tg)) {
        var toScroll = $(offsetForTargetDict[tg]).offset().top - $('.navbar-wrapper').height();
        $('html, body').scrollTo(toScroll);
      }
    }
  });

  //scroll all the way up when home link is clicked
  $(".home.link").click(function(){
    $('html, body').scrollTo(0);
  });

  //scroll function!
  $(window).scroll(function(){

    //change navbar style when scrolling
    var firstSec = $('.rest-of-page').offset().top - $('.navbar-wrapper').height();
    var scrollPos = $(window).scrollTop();

    if (scrollPos >= firstSec - 100 && scrollPos < firstSec + 0) {
      var opacityToSet = ((scrollPos - firstSec + 100)/100);
      $('.navbar-background').css('opacity', opacityToSet);
      $('nav ul li ul li').css({ 'background-image': 'url(images/barkkcloth.png)' });
    } else if (scrollPos > firstSec + 100) {
      $('.navbar-background').css('opacity', '1.0');
    } else if (scrollPos < firstSec) {
      $('.navbar-background').css('opacity', '0.0');
      $('nav ul li ul li').css({ 'background': 'none'});
    }
  });
});
