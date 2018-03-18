$(document).ready(function(){
  var i=0;
  var ulheight = $("#single-post ul")[0].scrollHeight;
  
    var myinterval = setInterval(function() { 
      $('#single-post ul:first')
        .css("top",i--);
        
        if(i==(-ulheight + 200)){
            $('#single-post').append("<ul style='top:220px;'>" + $('#single-post ul').html() + "</ul>");
        }

        if(i==(-ulheight - 15)){
            $('#single-post ul:first').remove();
            i = 220;
            //clearInterval(myinterval);
        }
    },  100);

//    setInterval(function() {
  //      $('#single-post ul').append("<li>"+ $('#single-post ul > li:first').text()+"</li>");
    //    $('#single-post ul > li:first').remove();

    //}, 200);
});