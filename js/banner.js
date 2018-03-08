$(document).ready(function(){

    $('.banner_img').css('width',(window.innerWidth - 10) + 'px');
    $('.banner_img').css('height',(window.outerHeight - 85) + 'px');
    
    

    $('#image_banner').find('img').each(function(){
        $(this).css('display','none');
    });
    i = 0;
    
    //use setinterval for slider loop
});