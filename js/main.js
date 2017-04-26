$(document).ready(function() {
    
	// auto focus on Username field ;) for better UX 
    $('.username').focus();


    // Toggle Sidebar/Menu for Mobile
    $('.openToggle').click(function(e){
    	e.preventDefault();
    	$(".mainNav").toggleClass('open');
    });

    // $('.play').click(function(e){
    //     $(this).closest('.track').find('.overlayImg').css({
    //         'opacity' : 0
    //     });
    //     $('.playButton').trigger();
    // });

   //  $(document).ready(function() {
   //     var widget = SC.Widget(document.getElementById('soundcloud_widget'));
   //     widget.bind(SC.Widget.Events.READY, function() {
   //     console.log('Ready...');
   //   });
   //   $('.play').click(function() {
   //      $(this).closest('.track').find('.overlayImg').css({
   //         'opacity' : 0
   //       });
   //     widget.toggle();
   //   });
   // });

    // Simple validation for Login Form checks if fields have a minimum of 3 characters for username and 6 for Password
    $('.loginForm').submit(function(ev){

    	ev.preventDefault();

    	console.log('sent');
    	
	   if($('.username').val() == ''){
	      $(".username").addClass('formError');
	      console.log('hey');
	   }

	   this.submit();
	});

});