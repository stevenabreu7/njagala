$(document).ready(function() {

  var scrollSpeed = 1.0; // => px/ms
  var navAnimation = 500; //animation opacity
  var burgerAnimation = 200; //hide and show burger menu

  var burgerMenuActive = false;

  //hide burger-menu as default
  $(".burger-menu").hide(0);

  //plugins
  jQuery.fn.extend({
    noDeco: function () {
      $(this).css("text-decoration", "none");
    },

    yesDeco: function () {
      $(this).css("text-decoration", "underline");
    },

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

    //underline active section
    var scrollPosition = $(window).scrollTop();
    var firstSection = $('.about-njagala-section').offset().top - $('.navigation-bar-wrapper').height();
    var secondSection = $('.about-us-section').offset().top - $('.navigation-bar-wrapper').height();
    var thirdSection = $('.funding-section').offset().top - $('.navigation-bar-wrapper').height();
    var fourthSection = $('.product-section').offset().top - $('.navigation-bar-wrapper').height();
    var fifthSection = $('.contact-section').offset().top - $('.navigation-bar-wrapper').height();
    var allLinks = ".funding-link, .project-link, .about-us-link, .product-link, .contact-link";

    if (scrollPosition < firstSection) {
      $(allLinks).noDeco();
    } else if (scrollPosition >= fifthSection) {
      $(allLinks).noDeco();
      $(".contact-link").yesDeco();
    } else if (scrollPosition >= fourthSection) {
      $(allLinks).noDeco();
      $('.product-link').yesDeco();
    } else if (scrollPosition >= thirdSection) {
      $(allLinks).noDeco();
      $(".funding-link").yesDeco();
    } else if (scrollPosition >= secondSection) {
      $(allLinks).noDeco();
      $(".about-us-link").yesDeco();
    } else if (scrollPosition >= firstSection) {
      $(allLinks).noDeco();
      $(".project-link").yesDeco();
    }

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
