$(document).ready(function () {
  $(window).scroll(function(){
      var ScrollTop = parseInt($(window).scrollTop());
      var sectionPresentation = document.getElementById('presentation');
      var sectionArtistes = document.getElementById('artistes');
      var sectionBars = document.getElementById('bars');
      var sectionSponsors = document.getElementById('sponsors');

      if (ScrollTop > 80) {
          sectionPresentation.classList = 'appear';
      }
      if (ScrollTop > 420) {
          sectionArtistes.classList = 'appear';
      }
      if (ScrollTop > 760) {
          sectionBars.classList = 'appear';
      }
      if (ScrollTop > 1100) {
          sectionSponsors.classList = 'appear';
      }
  });
});
