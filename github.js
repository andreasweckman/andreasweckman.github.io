$(document).ready(function(){

  $(".content").hover(
    function(){
    $(this).addClass("active");
    },
    function(){
    $(this).removeClass("active");  
    }
  );

      $("a").hover(
    function(){
    $(this).addClass("active2");
    },
    function(){
    $(this).removeClass("active2");  
    }
  );
    
    $("#button").click(function() {
    $('html, body').animate({
        scrollTop: $(".title").offset().top
    }, 2000);
});
   
    $(window).scroll(function(){
    if ($(this).scrollTop() > 250) {
        $('.content').slideDown('slow');
    } else {
        $('.content').slideUp('slow');
    }
});
    
    
    
});