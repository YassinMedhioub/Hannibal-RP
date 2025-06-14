(function($) {

	"use strict";


  // Form
	var contactForm = function() {
		if ($('#contactForm').length > 0 ) {
			$( "#contactForm" ).validate( {
				rules: {
					name: "required",
					subject: "required",
					email: {
						required: true,
						email: true
					},
					message: {
						required: true,
						minlength: 5
					}
				},
				messages: {
					name: "Please enter your discord name",
					subject: "Please enter your subject",
					email: "Please enter a valid email address",
					message: "Please enter a message"
				},
                error: function() {
                    $('#form-message-warning').html("Something went wrong. Please try again.");
                   $('#form-message-warning').fadeIn();
                   $submit.css('display', 'none');
                }

			});
		}
	};
	contactForm();

})(jQuery);
