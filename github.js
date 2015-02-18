$(document).ready(function(){

  $(".content, .content2").hover(
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
    
    $(document).scroll(function() {
  var y = $(this).scrollTop();
  if (y > 400) {
    $('.content').fadeIn();
  } else {
    $('.content').fadeOut();
  }
});
    
    $(document).scroll(function() {
  var y = $(this).scrollTop();
  if (y > 1050) {
    $('.content2').fadeIn();
  } else {
    $('.content2').fadeOut();
  }
});
    
    
});