$(document).ready(function(){
    console.log(document.body.scrollHeight);
    console.log(window.outerHeight);
    if( document.body.scrollHeight < window.outerHeight ){
        $("#footer").css("position", "absolute");
        $("#footer").css("bottom", "0");
        $("#footer").css("width", "100%");
    }
});