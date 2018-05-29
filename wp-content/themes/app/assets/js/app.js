jQuery(function() {
  var $ = jQuery;
  var imageWidth = 1005;
  var imageHeight =  1348;
  var $video = $('#header-video');

  function setWindowHeight() {
    var height = $(window).height();
    var width = $(window).width();

    var w, h;
    if (imageWidth / imageHeight > width / height) {
      h = height;
      w = height * imageWidth / imageHeight;
    } else {
      w = width;
      h = width * imageHeight / imageWidth;
    }

    $('.background').css({
      backgroundSize: w + 'px ' + h + 'px'
    });
  }

  function isIOS() {
    var ua = navigator.userAgent;
    return ua.indexOf('iPhone') >= 0
      || ua.indexOf('iPad') >= 0
      || navigator.userAgent.indexOf('iPod') >= 0;
  }

  $(window).on('orientationchange', setWindowHeight);
  if (isIOS()) {
    setWindowHeight();
  }
  $video.click(function() {
    $video.prop('muted', !$video.prop('muted'));
    if ($video.prop('muted')) {
      $video.addClass('header-video--muted');
    } else {
      $video.removeClass('header-video--muted');
    }
  });
  var $videoButton = $('#header-video-button');
  $videoButton.click(function() {
    var video = $video.get(0);
    $video.prop('muted', false);
    video.play();
    if (!!video.requestFullScreen) {
      video.requestFullScreen();
    } else if (!!video.webkitRequestFullScreen) {
      video.webkitRequestFullScreen();
    } else if (!!video.webkitEnterFullscreen) {
      video.webkitEnterFullscreen();
    }
  });
  $video.on('fullscreenchange webkitfullscreenchange', function(event) {
    var isFullScreen = true;
    if (typeof document.fullscreenEnabled !== 'undefined') {
      isFullScreen = document.fullscreenEnabled;
    } else if (typeof document.webkitIsFullScreen !== 'undefined') {
      isFullScreen = document.webkitIsFullScreen;
    }
    if (!isFullScreen) {
      this.pause();
    }
  });
  if ($video.prop('muted')) {
    $video.addClass('header-video--muted');
  } else {
    $video.removeClass('header-video--muted');
  }

  var height = $(window).height();
  $video.attr('height', height + 'px');
  if ($video.is(':visible')) {
    $('#header-video-scroll-button').click(function(e) {
      $('html,body').animate({ scrollTop: $('#nav-logo').offset().top });
      e.preventDefault();
    });
  }
});
