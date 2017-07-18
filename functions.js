$(document).ready(function(){

  $('.menu--cta').on('click', function(){
    $('.menu--cta').addClass('menu--hide')
    $('.nav-open').addClass('nav--show')
  });

  $('.nav--close-cta').on('click', function(){
    $('.menu--cta').removeClass('menu--hide')
    $('.nav-open').removeClass('nav--show')
  });

  $(window).scroll(function(){

    var wScroll = $(window).scrollTop();
    var hwHeight = window.innerHeight / 2.3;
    var umOffset = $('.um-h2').offset().top  - hwHeight;
    var ytOffset = $('.yt-h2').offset().top  - hwHeight;
    var ghOffset = $('.gh-h2').offset().top - hwHeight;
    var kOffset = $('.k-h2').offset().top - hwHeight;

    if (ytOffset <= wScroll) {
      $('.yt-h2').addClass('c-show');
      $('.yt-p').addClass('c-show');
      $('.yt-img').addClass('c-show');
      $('.gh-img, .gh-p, .gh-h2').removeClass('c-show');
      $('.mbar1, .mbar2, .mbar3').css('background-color', '#fff');
      $('.menu--cta p').css('color', '#fff');
      $('.youtube').css('background-color', '#2e2e2e');
      $('.youtube').siblings().not('.footer').css(
        'background-color', '#2e2e2e'
      );
      $('.nav-open').css(
        'background-color', '#fff'
      );
      $('nav ul li').css('color', '#2e2e2e');
      $('.nav--close-cta p').css('color', '#2e2e2e');
      $('.sbar1, .sbar2').css('background-color', '#2e2e2e');

      $('.triangle').removeClass('gh-triangle');
      $('.triangle').removeClass('k-triangle');
      $('.triangle').addClass('yt-triangle');

    } else {
          $('.um-h2').addClass('c-show');
          $('.um-p').addClass('c-show');
          $('.um-img').addClass('c-show');
          $('.yt-img, .yt-p, .yt-h2').removeClass('c-show');
          $('.mbar1, .mbar2, .mbar3').css('background-color', '#2e2e2e');
          $('.menu--cta p').css('color', '#2e2e2e');
          $('.umich').css('background-color', '#fff');
          $('.nav-open').css(
            'background-color', '#2e2e2e'
          );
          $('nav ul li').css('color', '#fff');
          $('.nav--close-cta p').css('color', '#fff');
          $('.sbar1, .sbar2').css('background-color', '#fff');

          $('.triangle').removeClass('yt-triangle');
          $('.triangle').removeClass('k-triangle');
          $('.triangle').removeClass('gh-triangle');
          $('.triangle').addClass('um-triangle');


        }

    if (ghOffset <= wScroll) {
      $('.gh-h2').addClass('c-show');
      $('.gh-p').addClass('c-show');
      $('.gh-img').addClass('c-show');
      $('.github .raw-cta').css('opacity', '1');
      $('.yt-img, .yt-p, .yt-h2').removeClass('c-show');
      $('.mbar1, .mbar2, .mbar3').css('background-color', '#2e2e2e');
      $('.menu--cta p').css('color', '#2e2e2e');
      $('.github').css('background-color', '#fff');
      $('.github').siblings().not('.footer').css(
        'background-color', '#fff'
      );
      $('.nav-open').css(
        'background-color', '#2e2e2e'
      );
      $('nav ul li').css('color', '#fff');
      $('.nav--close-cta p').css('color', '#fff');
      $('.sbar1, .sbar2').css('background-color', '#fff');

      $('.triangle').removeClass('yt-triangle');
      $('.triangle').removeClass('k-triangle');
      $('.triangle').addClass('gh-triangle');
    }

    if (kOffset <= wScroll) {
      $('.k-h2').addClass('c-show');
      $('.k-p').addClass('c-show');
      $('.kontakt-form').addClass('c-show');
      $('.gh-img, .gh-p, .gh-h2').removeClass('c-show');
      $('.mbar1, .mbar2, .mbar3').css('background-color', '#fff');
      $('.menu--cta p').css('color', '#fff');
      $('.github .raw-cta').css('opacity', '0');
      $('.kontakt').css('background-color', '#FF4949');
      $('.kontakt').siblings().not('.footer').css(
        'background-color', '#FF4949'
      );
      $('.nav-open').css(
        'background-color', '#fff'
      );
      $('nav ul li').css('color', '#FF4949');
      $('.nav--close-cta p').css('color', '#FF4949');
      $('.sbar1, .sbar2').css('background-color', '#FF4949');

      $('.triangle').removeClass('yt-triangle');
      $('.triangle').removeClass('gh-triangle');
      $('.triangle').addClass('k-triangle');
    }

  });

$('.nav-box img').on('click',function(e){

  $('html, body').animate({
        'scrollTop': 0
  }, 1000, 'swing');
})


  $('a[href^="#"]').on('click',function(e){
      e.preventDefault();

      var target = this.hash;

      if (target == '#umich') {

      var $target = $(target);
      var targetOffset = $target.offset().top

      $('html, body').animate({
          'scrollTop': targetOffset
      }, 1000, 'swing');

      } else {
      var $target = $(target);
      var targetOffset = $target.offset().top

      $('html, body').animate({
          'scrollTop': targetOffset - 70
      }, 1000, 'swing');
      }
  });

});
