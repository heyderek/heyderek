$(document).ready(function(){
  var hideCopy = $('.copy').hide(),
      hideBrief = $('.brief').hide();

  hideCopy.fadeIn(2000);
  $('.logo').css('top', '-15em').animate({ top: '0'}, 750, function(){});
  
    //Scrollto functionality for navigation
 $('button.tothetop').bind('click', function(){
   $.scrollTo('.page',{'duration':'fast'});
   return false;
 })
 
 jQuery.fn.log = function (msg) {
     console.log("%s: %o", msg, this);
     return this;
 };
 
 $('.gallery img').click(function(){
   $(this).siblings().html(function(){
     $(this).prependTo('.gallery-copy .wrapper').addClass('active').slideDown();
   });
 });

});