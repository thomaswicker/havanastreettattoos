/* =======================================================================================
   This JS is for tracking active classes for sticky side nav when page is scrolled
   ======================================================================================= 
*/

var scrollToTop = $('.scroll-to-top');
var showTopLink = 500;
scrollToTop.hide();

$(window).scroll( function(){
  var y = $(window).scrollTop();
  if( y > showTopLink  ) {
    scrollToTop.fadeIn('slow');
  } else {
    scrollToTop.fadeOut('slow');
  }
});

scrollToTop.click( function(e) {
  e.preventDefault();
  $('body').animate( {scrollTop : 0}, 'slow' );
});
