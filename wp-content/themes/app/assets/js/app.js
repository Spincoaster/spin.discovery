jQuery(function() {
  var $ = jQuery;
  var imageWidth = 1005;
  var imageHeight =  1348;

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
});
