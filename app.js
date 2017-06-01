$(function() {
  $('a[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
        /*custom code*/
    
        /*/custom code*/
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});

/* Scrolling header */
function ScrollingNavbar() {
    if(document.body.scrollTop > 50){
        $('.scrolling-navbar').addClass('dark-blue small');

    } else if (document.body.scrollTop < 50){
        $('.scrolling-navbar').removeClass('dark-blue small');
        
    }
}

$(document).ready(function () {
	$('form').submit(function () {
		
		
		//get the form data
		var formData = {
			'name'		: $('input[name=name]').val(),
			'email'		: $('input[name=email]').val(),
			'subject'	: $('input[name=subject]').val(),
			'message'	: $('textarea[name=message]').val()
		};
		
		
		//process the form with an AJAX request
		$.ajax({
			type		:'POST', //http request type
			url			:'inc/process.php', // the URL where we want to post
			data		:formData,
			dataType	:'json',
			encode		:true
			
		})
		
			//using the done promise callback
			.done(function (data) {
				// log data to the console so we can see
				console.log(data);
			
				//here we will have errors and validation messages
				 if ( ! data.success) {
            
					// handle errors for name ---------------
					if (data.errors.name) {
						$('#nameErr').addClass('alert alert-danger'); // add the error class to show red input
						$('#nameErr').html(data.errors.name); // add the actual error message under our input
					} else{
						$('#nameErr').removeClass('alert alert-danger');
						$('#nameErr').html("");
					}

					// handle errors for email ---------------
					if (data.errors.email) {
						$('#emailErr').addClass('alert alert-danger'); // add the error class to show red input
						$('#emailErr').html(data.errors.email); // add the actual error message under our input
					} else {
						$('#emailErr').removeClass('alert alert-danger');
						$('#emailErr').html("");
					}

					// handle errors for subject ---------------
					if (data.errors.subject) {
						$('#subjectErr').addClass('alert alert-danger'); // add the error class to show red input
						$('#subjectErr').html(data.errors.subject); // add the actual error message under our input
					} else {
						$("#subjectErr").removeClass("alert alert-danger");
						$("#subjectErr").html("");
					}

					// handle errors for message
					if (data.errors.message) {
						$('#messageErr').addClass('alert alert-danger'); // add the error calss to show red input
						$('#messageErr').html(data.errors.message);
					} else {
						$("#messageErr").removeClass("alert alert-danger");
						$("#messageErr").html("");
					}

				} else {

					// ALL GOOD! just show the success message!
				
					//hide form
					$('form').hide();

					//display success message in its place
					$('#successMessage').addClass('successMessage alert alert-success');
					$("#successMessage").html("Mail Sent!");

				}
			});

			event.preventDefault();
		
	});
	
	
});




