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
    
    
    
});