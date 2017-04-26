$(document).ready(function() {
    $("form").submit(function(e){
        e.preventDefault(e);

        // the script will find all inputs with the class .input
        $.each($('.contactInput'),function() {
           if ($(this).val().length == '') {
           // it will check it's value and if its empty, a class error will be applied
            $(this).addClass('error');
            $('.overlayError').addClass('overlayDisplay').delay(3000).fadeOut(1000);
           } else{
            $(this).removeClass('error');
            $('.overlaySuccess').addClass('overlayDisplay').delay(3000).fadeOut(1000);
           }
        });
    });

});