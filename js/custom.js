$(document).ready(function(){
  var hideCopy = $('.copy').hide();

  hideCopy.fadeIn(2000);
  $('.logo').css('top', '-15em').animate({ top: '0'}, 750, function(){});
  
    //Scrollto functionality for navigation
 $('button.tothetop').bind('click', function(){
   $.scrollTo('.page',{'duration':'fast'});
   return false;
 })

});