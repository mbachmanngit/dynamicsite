$(document).ready(function(){

  var playpauseBTN = $('.playpause');
  var seekbar = document.getElementById('seekbar');
  var volumeBTN = $('.volume');

  var video = $('.video-wrap .video video');
  var videoDOM = video.get(0);

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
    var landOffset = $('#landingp').offset().top  - hwHeight;
    var umOffset = $('.um-h2').offset().top  - window.innerHeight / 4.5;
    var ytOffset = $('.yt-h2').offset().top  - hwHeight;
    var ghOffset = $('.gh-h2').offset().top - hwHeight;
    var kOffset = $('.k-h2').offset().top - hwHeight;

  if (landOffset <= wScroll) {
        $('.um-h2').addClass('c-show');
        $('.um-p').addClass('c-show');
        $('.um-img').addClass('c-show');
        $('.video-wrap').removeClass('v-show');
        $('.yt-img').css('display', 'block');
        $('.yt-img, .yt-p, .yt-h2').removeClass('c-show');
        $('.mbar1, .mbar2, .mbar3').css('background-color', '#fff');
        $('.menu--cta p').css('color', '#fff');
        $('.logout-cta button > p').css('color', '#fff');
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


          if (umOffset <= wScroll) {
            console.log('hi');
            $('.um-h2').addClass('c-show');
            $('.um-p').addClass('c-show');
            $('.um-img').addClass('c-show');
            $('.mbar1, .mbar2, .mbar3').css('background-color', '#2e2e2e');
            $('.menu--cta p').css('color', '#2e2e2e');
            $('.logout-cta button > p').css('color', '#fff');
            $('.umich').css('background-color', '#fff');
            $('.umich').siblings().not('.footer, .footer-hr').css(
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
            $('.triangle').removeClass('gh-triangle');
            $('.triangle').addClass('um-triangle');
}

    if (ytOffset <= wScroll) {
      $('.yt-h2').addClass('c-show');
      $('.yt-p').addClass('c-show');
      $('.yt-img').addClass('c-show');
      $('.img1, .img2, .gh-p, .gh-h2').removeClass('c-show');
      $('.mbar1, .mbar2, .mbar3').css('background-color', '#fff');
      $('.menu--cta p').css('color', '#fff');
      $('.logout-cta button > p').css('color', '#2e2e2e');
      $('.youtube').css('background-color', '#2e2e2e');
      $('.youtube').siblings().not('.footer, .footer-hr').css(
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

    }

    if (ghOffset <= wScroll) {
      $('.gh-h2').addClass('c-show');
      $('.gh-p').addClass('c-show');
      $('.img1').addClass('c-show');
      $('.img2').addClass('c-show');
      $('.video-wrap').removeClass('v-show');
      $('.yt-img').css('display', 'block');
      $('.github .raw-cta').css('opacity', '1');
      $('.yt-img, .yt-p, .yt-h2').removeClass('c-show');
      $('.mbar1, .mbar2, .mbar3').css('background-color', '#2e2e2e');
      $('.menu--cta p').css('color', '#2e2e2e');
      $('.logout-cta button > p').css('color', '#fff');
      $('.github').css('background-color', '#fff');
      $('.github').siblings().not('.footer, .footer-hr').css(
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
      $('.img1, .img2, .gh-p, .gh-h2').removeClass('c-show');
      $('.mbar1, .mbar2, .mbar3').css('background-color', '#fff');
      $('.menu--cta p').css('color', '#fff');
      $('.logout-cta button > p').css('color', '#FF4949');
      $('.github .raw-cta').css('opacity', '0');
      $('.kontakt').css('background-color', '#FF4949');
      $('.kontakt').siblings().not('.footer, .footer-hr').css(
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

  $('.yt-img').on('mouseenter', function(){
    $('.video-wrap').addClass('v-show');
    $('.video-wrap').css('z-index', '2');
    $('.yt-img').removeClass('c-show');
    $('.yt-img').css('display', 'none');
  })

  playpauseBTN.click(function(){
    if (videoDOM.paused == true) {
      playpauseBTN.children('i').html("pause");
      videoDOM.play();
    } else {
      playpauseBTN.children('i').html("play_arrow");
      videoDOM.pause();
    }
  });

  $(seekbar).on("change", function() {

    var time = videoDOM.duration * (seekbar.value / 100);
    videoDOM.currentTime = time;

  });

  $(video).on("timeupdate", function() {

  var value = (100 / videoDOM.duration) * videoDOM.currentTime;
  $(seekbar).val(value)

  var seekval = $(seekbar).val();
    if (seekval > 99) {
      //playpauseBTN.children('i').html("play_arrow");
      $(seekbar).val(0)
    } else {
      //playpauseBTN.children('i').html("pause");
    }

  });

  $(seekbar).on("mousedown", function() {
  videoDOM.pause();
  });

  $(seekbar).on("mouseup", function() {
  videoDOM.play();
  });

  volumeBTN.click(function(){
    if (videoDOM.muted == true) {
      $("video").prop('muted', false);
      volumeBTN.children('i').html("volume_up");
    } else {
      $("video").prop('muted', true);
      volumeBTN.children('i').html("volume_off");
    }
  });

});
