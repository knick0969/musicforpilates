$(document).ready(function() {
    $("form").submit(function(e){
        e.preventDefault(e);

        // the script will find all inputs with the class .input
        $.each($('.input'),function() {
           if ($(this).val().length == '') {
           // it will check it's value and if its empty, a class error will be applied
            $(this).addClass('error');
           } else{
            $(this).removeClass('error');
           }
        });
    });

});