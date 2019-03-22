$(document).ready(function () {
  $(window).scroll(function(){
      var ScrollTop = parseInt($(window).scrollTop());
      var nav = document.getElementById('header');

      if (ScrollTop > 20) {
          nav.classList = 'night';
      }
      if (ScrollTop < 20) {
          nav.classList = 'day';
      }
  });
});
