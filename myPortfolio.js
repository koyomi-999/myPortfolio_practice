$(function(){

  $('#menuBtn').click(function(){
  $(this).toggleClass('active');
  $('.list-nav').toggleClass('open');
});

$('header a').click(function(){  
    var id=$(this).attr('href');
    var position=$(id).offset().top;
    $('html,body').animate({ 
      'scrollTop': position
    }, '500');
    $('.list-nav').removeClass('open');
    $('.menuBtn').removeClass('active');
  });

  

  $(window).scroll(function(){
    if($(this).scrollTop() > 60) {
      $('.page-top').fadeIn();
    }else{
      $('.page-top').fadeOut();
    }
  });

  $('.page-top').click(function(){
    $('body,html').animate({
      scrollTop:0
    }, 500);
  })
});
