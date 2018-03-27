$(document).ready(function(){
    
        $("#media-cont > div:gt(1)").css("top",-271);
        var i=0;

        var j=$('#media-cont > div:first').height();
        setInterval(function() { 
            $('#media-cont > div:first')
            .css("top",i--)

            if(i==(-$('#media-cont > div:first').height()))
            {
            
                j = $('#media-cont > div:first').next().height();

                $('#media-cont > div:first')
                .appendTo("#media-cont")
            
                
                
                i=0;
            }
            
        },  100);
    
        setInterval(function(){
            $('#media-cont > div:first')
            .next()
            .css("top", j--)
            
            

        }, 100);
    
      
    
        //use setinterval for slider loop
    });
    
    
    