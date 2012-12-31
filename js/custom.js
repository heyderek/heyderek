$(document).ready(function(){
  var hideCopy = $('.copy').hide();

  hideCopy.fadeIn(2000);
  $('.logo').css('top', '-15em').animate({ top: '0'}, 750, function(){});
  
    //Scrollto functionality for navigation
 $('button.tothetop').bind('click', function(){
   $.scrollTo('.page',{'duration':'fast'});
   return false;
 })
 
/*
 jQuery.fn.log = function (msg) {
     console.log("%s: %o", msg, this);
     return this;
 };
*/
 
 
 //Gallery
 var briefHeight = $('.gallery li:first-child').children('.brief').height();
 
 $('.brief').hide();
 $('.gallery li:first-child').children('.brief').addClass('open').show();
 $('.gallery li:first-child').css('marginBottom', briefHeight);
 
 
 $('.gallery img').click(function(){
    
    var hideBrief = $('.brief').slideUp();
    var showBrief = $(this).next('article');
    var briefLength = showBrief.height();
    
    $('.brief').removeClass('open');
    showBrief.addClass('open');
    $('.brief').parent().css('marginBottom', '0');
    $(this).parent().css('marginBottom', briefLength);
    
    if(! $(this).hasClass('open')){
      $(this).removeClass('open');
      hideBrief;
      showBrief.slideDown();
    }
  });
  
});