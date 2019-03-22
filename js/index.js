$(document).ready(function () {
  $(window).scroll(function(){
      var ScrollTop = parseInt($(window).scrollTop());
      var sectionPresentation = document.getElementById('presentation');
      var sectionArtistes = document.getElementById('artistes');
      var sectionBars = document.getElementById('bars');
      var sectionSponsors = document.getElementById('sponsors');

      if (ScrollTop > 50) {
          sectionPresentation.classList = 'appear';
      }
      if (ScrollTop > 350) {
          sectionArtistes.classList = 'appear';
      }
      if (ScrollTop > 630) {
          sectionBars.classList = 'appear';
      }
      if (ScrollTop > 1000) {
          sectionSponsors.classList = 'appear';
      }
  });
});
