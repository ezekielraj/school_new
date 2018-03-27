$(document).ready(function(){
    
        $("#testimonial_post > div:gt(0)").hide();
        
        setInterval(function() { 
          $('#testimonial_post > div:first')
            .css("display","none")//fadeOut(1000)
            .next()
            .fadeIn(1000)
            .end()
            .appendTo('#testimonial_post');
        },  3000);
    
    
      
    
        //use setinterval for slider loop
    });