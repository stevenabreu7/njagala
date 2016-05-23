$(document).ready(function() {

  // $(document).click(function(event) {
  //     var text = $(event.target);
  //     console.log(text);
  // });

  var scrollSpeed = 0.7; // => px/ms
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

  var clickCounter = 0;
  $('header').click(function(){
    if (clickCounter == 0) {
      $('.navbar-bg-image').attr('src','images/bark-cloth.png');
      $(".navigation-bar-background").css("background-color", "transparent");
      $('.navbar-bg-image').css('visibility','visible');
      clickCounter++;
    } else if (clickCounter == 1) {
      $(".navigation-bar-background").css("background-color", "#888");
      $('.navbar-bg-image').attr('src','none');
      $('.navbar-bg-image').css('visibility','hidden');
      clickCounter++;
    } else if (clickCounter == 2) {
      $(".navigation-bar-background").css("background-color", "#bbb");
      $('.navbar-bg-image').attr('src','none');
      $('.navbar-bg-image').css('visibility','hidden');
      clickCounter++;
    } else {
      $('.navbar-bg-image').attr('src','images/bark_cloth.png');
      $(".navigation-bar-background").css("background-color", "transparent");
      $('.navbar-bg-image').css('visibility','visible');
      clickCounter = 0;
    }
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
    var scrollToThis = $('.about-njagala-section').offset().top - $('.navigation-bar-wrapper').height();
    var totalToScroll = scrollToThis - $(window).scrollTop();
    var duration = Math.abs(totalToScroll / scrollSpeed);

    $(".burger-menu").hide(burgerAnimation);
    burgerMenuActive = false;

    $('html, body').animate({
      scrollTop: scrollToThis
    }, duration);

  });

  //scroll down when about us link is clicked
  $(".about-us-link").click(function(){
    var scrollToThis = $('.about-us-section').offset().top - $('.navigation-bar-wrapper').height();
    var totalToScroll = scrollToThis - $(window).scrollTop();
    var duration = Math.abs(totalToScroll / scrollSpeed);

    $(".burger-menu").hide(burgerAnimation);
    burgerMenuActive = false;

    $('html, body').animate({
      scrollTop: scrollToThis
    }, duration);

  });

  //scroll down when funding link is clicked
  $(".funding-link").click(function(){
    var scrollToThis = $('.funding-section').offset().top - $('.navigation-bar-wrapper').height();
    var totalToScroll = scrollToThis - $(window).scrollTop();
    var duration = Math.abs(totalToScroll / scrollSpeed);

    $(".burger-menu").hide(burgerAnimation);
    burgerMenuActive = false;

    $('html, body').animate({
      scrollTop: scrollToThis
    }, duration);

  });

  //scroll down when funding link is clicked
  $(".product-link").click(function(){
    var scrollToThis = $('.product-section').offset().top - $('.navigation-bar-wrapper').height();
    var totalToScroll = scrollToThis - $(window).scrollTop();
    var duration = Math.abs(totalToScroll / scrollSpeed);

    $(".burger-menu").hide(burgerAnimation);
    burgerMenuActive = false;

    $('html, body').animate({
      scrollTop: scrollToThis
    }, duration);

  });

  //scroll down when contact link is clicked
  $(".contact-link").click(function(){
    var scrollToThis = $('.contact-section').offset().top - $('.navigation-bar-wrapper').height();
    var totalToScroll = scrollToThis - $(window).scrollTop();
    var duration = Math.abs(totalToScroll / scrollSpeed);

    $(".burger-menu").hide(burgerAnimation);
    burgerMenuActive = false;

    $('html, body').animate({
      scrollTop: scrollToThis
    }, duration);

  });

  //scroll down when home link is clicked
  $(".home-link").click(function(){
    var scrollToThis = 0;
    var totalToScroll = $(window).scrollTop();
    var duration = Math.abs(totalToScroll / scrollSpeed);

    $(".burger-menu").hide(burgerAnimation);
    burgerMenuActive = false;

    $('html, body').animate({
      scrollTop: scrollToThis
    }, duration);

  });

  //scroll function!
  var opac = 0.0;
  $(window).scroll(function(){

    //underline active section
    var firstSection = $('.about-njagala-section').offset().top - $('.navigation-bar-wrapper').height();
    var secondSection = $('.about-us-section').offset().top - $('.navigation-bar-wrapper').height();
    var thirdSection = $('.funding-section').offset().top - $('.navigation-bar-wrapper').height();
    var fourthSection = $('.product-section').offset().top - $('.navigation-bar-wrapper').height();
    var fifthSection = $('.contact-section').offset().top - $('.navigation-bar-wrapper').height();
    var scrollPosition = $(window).scrollTop();

    if (scrollPosition >= fifthSection) {
      $(".funding-link").css("text-decoration", "none");
      $(".project-link").css("text-decoration", "none");
      $(".about-us-link").css("text-decoration", "none");
      $('.product-link').css('text-decoration', 'none');
      //show relevant one
      $(".contact-link").css("text-decoration", "underline");
    } else if (scrollPosition >= fourthSection) {
      $(".funding-link").css("text-decoration", "none");
      $(".project-link").css("text-decoration", "none");
      $(".about-us-link").css("text-decoration", "none");
      $(".contact-link").css("text-decoration", "none");
      //show relevant one
      $('.product-link').css('text-decoration', 'underline');
    } else if (scrollPosition >= thirdSection) {
      $(".project-link").css("text-decoration", "none");
      $(".about-us-link").css("text-decoration", "none");
      $('.product-link').css('text-decoration', 'none');
      $(".contact-link").css("text-decoration", "none");
      //show relevant one
      $(".funding-link").css("text-decoration", "underline");
    } else if (scrollPosition >= secondSection) {
      $(".funding-link").css("text-decoration", "none");
      $(".project-link").css("text-decoration", "none");
      $('.product-link').css('text-decoration', 'none');
      $(".contact-link").css("text-decoration", "none");
      //show relevant one
      $(".about-us-link").css("text-decoration", "underline");
    } else if (scrollPosition >= firstSection) {
      $(".funding-link").css("text-decoration", "none");
      $(".about-us-link").css("text-decoration", "none");
      $('.product-link').css('text-decoration', 'none');
      $(".contact-link").css("text-decoration", "none");
      //show relevant one
      $(".project-link").css("text-decoration", "underline");
    } else {
      //underline none
      $(".funding-link").css("text-decoration", "none");
      $(".project-link").css("text-decoration", "none");
      $(".about-us-link").css("text-decoration", "none");
      $('.product-link').css('text-decoration', 'none');
      $(".contact-link").css("text-decoration", "none");
    }

    //change navbar style when scrolling
    var firstSec = $('#rest-of-page').offset().top - $('.navigation-bar-wrapper').height();
    var scrollPos = $(window).scrollTop();

    if (scrollPos >= firstSec - 100 && scrollPos < firstSec + 0) {
      var opacityToSet = ((scrollPos - firstSec + 100)/100);
      $('.navigation-bar-background').css('opacity', opacityToSet);
      $('.nested-list-item').css({ 'background-image': 'url(images/bark_cloth.png)' });
    } else if (scrollPos > firstSec + 100) {
      $('.navigation-bar-background').css('opacity', '1.0');
      // $('.navigation-bar-background').css('background-color', '#777');
      // $('.nested-list-item').css({ 'background-color': '#888', 'border-bottom' : 'none' });
    } else if (scrollPos < firstSec) {
      $('.navigation-bar-background').css('opacity', '0.0');
      // $('.nested-list-item').css({ 'background-color': 'transparent', 'border-bottom' : '2px solid white' });
      $('.nested-list-item').css({ 'background': 'none'});
    }
  });
});
