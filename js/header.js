$(document).ready(function () {
  var ScrollTop = parseInt($(window).scrollTop());
  var nav = document.getElementById('header');
  if (ScrollTop > 20) {
      nav.classList = 'night';
  }
  if (ScrollTop < 20) {
      nav.classList = 'day';
  }
  $(window).scroll(function(){
    var NewScrollTop = parseInt($(window).scrollTop());
      if (NewScrollTop > 20) {
          nav.classList = 'night';
      }
      if (NewScrollTop < 20) {
          nav.classList = 'day';
      }
  });
});
