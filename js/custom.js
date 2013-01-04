$(document).ready(function(){

  //Add Classes for CSS3 Animations
  $('.logo, .copy').addClass('ready');

    //Scrollto functionality for navigation
  $('a#work').click(function(){
    $.scrollTo('.work', {'duration':'fast'});
    return false;
  });
  $('a#about').click(function(){
    $.scrollTo('.about', {'duration':'fast'});
    return false;
  });
  $('a#contact').click(function(){
    $.scrollTo('.contact', {'duration':'fast'});
    return false;
  });
  $('button#chat').click(function(){
    $.scrollTo('.contact', {'duration':'fast'});
    return false;
  });
  $('button.tothetop').click(function(){
    $.scrollTo('.page', {'duration':'fast'});
    return false;
  });

  //Mobile Navigation button
  $('.shownav').click(function(){
    if ($(this).hasClass('open')){
      $(this).removeClass('open');
      $('.access').slideUp();
    } else {
      $(this).addClass('open');
      $('.access').slideDown();
    }
  });

 //Gallery
   var briefHeight;
   
   $('.brief:first').show();
   setTimeout(function(){
     briefHeight = $('.brief:first').innerHeight();
     $('.gallery > li:first-child').find('.frame').addClass('active');
     $('.gallery > li:first-child').children('.brief').addClass('open').show();
     $('.gallery > li:first-child').css('marginBottom', briefHeight);
   }, 50)
 
  $(window).resize(function(){
    var docWidth = $(window).width();
    
    briefHeight = $('.brief:first').innerHeight();
    $('.gallery > li:first-child').css('marginBottom', briefHeight);
    
    //console.log('docwidth :', docWidth);
    if(docWidth > 539){
      $('.access').show();
    } else {
      $('.access').hide();
    }
  });
 
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