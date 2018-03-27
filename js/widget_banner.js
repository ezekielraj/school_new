$(document).ready(function(){

    $("#widget_banner > div:gt(0)").hide();
    
    setInterval(function() { 
      $('#widget_banner > div:first')
        .css("display","none")//fadeOut(1000)
        .next()
        .fadeIn(1000)
        .end()
        .appendTo('#widget_banner');
    },  3000);


  

    //use setinterval for slider loop
});


