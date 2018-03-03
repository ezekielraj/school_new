
$(document).ready(function(){
    $('#menu-header').click(function(){
        $('.overlay2').find('.primary-menu').toggle('display');
    });

    $('.menu-item-has-children').click(function(){
        $(this).find('.sub-menu').toggle('normal');
    });

});