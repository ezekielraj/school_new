$(document).ready(function(){

    $('.banner_img').css('width',(window.innerWidth - 10) + 'px');
    $('.banner_img').css('height',(window.outerHeight - 85) + 'px');
    
    $("#image_banner > div:gt(0)").hide();
    
    setInterval(function() { 
      $('#image_banner > div:first')
        .css("display","none")//fadeOut(1000)
        .next()
        .fadeIn(1000)
        .end()
        .appendTo('#image_banner');
    },  5000);

   
    
    //use setinterval for slider loop
});
