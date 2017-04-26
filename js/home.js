$(document).ready(function(){

  function mainSlider() {
        var numSliders;
        var currentSlider = 0;
        var interval;
        var slideWidth;
        var numBullets = $('.featuredTrack').length;
        console.log(numBullets);
        //$('#slider0').css('opacity', 1);

        $(document).ready(function() {
            numSliders = parseInt($('.featuredTrack').html());
            generateBullets();
            $('#slide0').css('opacity', '1');
            $('#slide0').addClass("showing");
            slideWidth = $('#slide0').width();

        });

        function nextSlider() {
            specificSlider((currentSlider + 1) % numSliders);
        }

        interval = window.setInterval(nextSlider, 7000);

        //arrow, bullet and autoplay functions


        function generateBullets() {
            var bullet = $('.mainSection .featured .bullets');
           
            for (var i = 0; i < numBullets; i++) {
                bullet.append('<li class="bullet" id="' + i + '"> ' + i + '</li>');
            }

            $('.bullets #0').addClass("active");
        }



        //call bullet functions
        $('body').on('click','.bullet' ,function() {

            var $id = $(this).attr("id");

            specificSlider($id);
        });


        function specificSlider(sliderNumber) {
            window.clearInterval(interval);

            // move the next slider on deck
            $('#slider' + sliderNumber).css('left', $('#top-slide').css('width'));
            $('#slider' + sliderNumber).css('top', '0px');

            // move old slide off, 
            $('#slide' + currentSlider).animate({
                left: '-20px',
                opacity: 0
            }, 500, null);
            $('#slide' + currentSlider).removeClass("showing");
            $('.bullets #' + currentSlider).removeClass("active");

            // new slide on
            $('#slide' + sliderNumber).animate({
                left: '0px',
                top: '0px',
                opacity: 1
            }, 200, null);
            $('#slide' + sliderNumber).addClass("showing");
            $('.bullets #' + sliderNumber).addClass("active");

            currentSlider = sliderNumber;

            interval = window.setInterval(nextSlider, 7000);
        }
    }

    //initalise slider 
    mainSlider();


});
  

