
$(document).ready(function () {

  // CONFIG COOKIE
  if (!$('nav').hasClass('color-1') || !$('nav').hasClass('color-2') || !$('nav').hasClass('color-3') || !$('nav').hasClass('color-4')) {
    $('nav').addClass('color-1');
    $('#customRange').val('10');
  }

  if (typeof document.cookie != "undefined") {

    cookie = document.cookie.split('=');
    cookieName = cookie[0];
    cookieVal = cookie[1];
    cookieTipo = cookie[2];

    if (cookieName == "cookieLayout") {
      $('nav').addClass('color-' + cookieTipo);
      $('#customRange').val(cookieVal);
    }
  }
  // END CONFIG COOKIE

});