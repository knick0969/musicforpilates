$(document).ready(function() {
    //option A
    $("form").submit(function(e){
       // alert('submit intercepted');
        e.preventDefault(e);

        $.each($('.input'),function() {
           if ($(this).val().length == '') {
            $(this).addClass('error');
           } else{
            $(this).removeClass('error');
           }
        });
    });
});