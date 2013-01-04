$(document).ready(function(){
  var hideCopy = $('.copy').hide();

  hideCopy.fadeIn(2000);
  $('.logo').css('top', '-15em').animate({ top: '0'}, 750, function(){});
  
    //Scrollto functionality for navigation
 $('a#work').bind('click', function(){
   $.scrollTo('.work',{'duration':'fast'});
   return false;
 });
  $('a#about').bind('click', function(){
   $.scrollTo('.about',{'duration':'fast'});
   return false;
  });
  $('a#contact').bind('click', function(){
   $.scrollTo('.contact',{'duration':'fast'});
   return false;
  });
 $('button#chat').bind('click', function(){
   $.scrollTo('.contact',{'duration':'fast'});
   return false;
 });
 $('button.tothetop').bind('click', function(){
   $.scrollTo('.page',{'duration':'fast'});
   return false;
 });
 
 
   jQuery.fn.log = function (msg) {
       console.log("%s: %o", msg, this);
       return this;
   };
  
  $('.shownav').click(function(){
    $('.access').slideDown();
    $('.shownav').click(function(){
      $('.access').slideUp();
    });
  });


 //Gallery
   var briefHeight = $('.gallery > li:first-child article').height();

   $('.brief').hide();

   $('.gallery > li:first-child').find('.frame').addClass('active');
   $('.gallery > li:first-child').children('.brief').addClass('open').show();
   $('.gallery > li:first-child').css('marginBottom', briefHeight);
 
  $('.gallery .frame > img').click(function(){
    
    var hideBrief = $('.brief').hide();
    var showBrief = $(this).parent().next('article');
    var briefLength = showBrief.innerHeight();
    
    $('.brief').removeClass('open');
    showBrief.addClass('open');
    $('.frame').removeClass('active');
    $(this).parent().addClass('active');
    $('.brief').parent().css('marginBottom', '0');
    $(this).parents('.gallery > li').css('marginBottom', briefLength);
    
    hideBrief;
    showBrief.slideDown();
  });
  
});