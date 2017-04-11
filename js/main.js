$(document).ready(function() {
    
	// auto focus on Username field ;) for better UX 
    $('.username').focus();


    // Toggle Sidebar/Menu for Mobile
    $('.afas').click(function(e){
    	e.preventDefault();
    	$(this).toggleClass('open');
    });
    	


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