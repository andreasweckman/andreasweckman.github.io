$(document).ready(function(){

// --------------------- CODE BELOW: FADE IN TEXT --------------------------
 
    $("h1").fadeIn(6000).removeClass("hidden");
    $(".title").fadeIn(3000).removeClass("hidden");
    $(".arrow").fadeIn(5000).removeClass("hidden");
    
// ------------------- CODE BELOW: HOVER DIVS -------------------------    
    
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
    
// ------------------- CODE BELOW: SCROLL TO TOP -------------------------    
    
    $("#button").click(function() {
    $('html, body').animate({
        scrollTop: $(".title").offset().top
    }, 2000);
}); 
    
// ------------------- CODE BELOW: SCROLL DOWN WITH ARROW -------------------------    
    
    $(".arrow").click(function() {
    $('html, body').animate({
        scrollTop: $(".intro").offset().top
    }, 2000);
}); 
    
    
// ------------------- CODE BELOW: SHOW WHEN SCROLLING -------------------------
    
    tiles = $(".content, .content2").fadeTo(0, 0);

$(window).scroll(function(d,h) {
    tiles.each(function(i) {
        a = $(this).offset().top + $(this).height();
        b = $(window).scrollTop() + $(window).height();
        if (a < b) $(this).fadeTo(1500,1);
    });
});

    
        tiles2 = $(".intro").fadeTo(0, 0);

$(window).scroll(function(d,h) {
    tiles2.each(function(i) {
        a = $(this).offset().top + $(this).height();
        b = $(window).scrollTop() + $(window).height();
        if (a < b) $(this).fadeTo(1500,1);
    });
});
    
});