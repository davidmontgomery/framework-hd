(function($) {
	$(document).ready(function() {

		// http:docs.jquery.com/Plugins/Validation/validate
		$("#ContactForm_MyContactForm").validate({
			// debug: true,
			// highlight adds a class of errorClass on the field div
			highlight: function(element, errorClass, validClass) {
				$(element).addClass(errorClass).removeClass(validClass);
				$(element.form).find("label[for=" + element.id + "]").closest(".field").addClass(errorClass);
		  },
			unhighlight: function(element, errorClass, validClass) {
				$(element).removeClass(errorClass).addClass(validClass);
				$(element.form).find("label[for=" + element.id + "]").closest(".field").removeClass(errorClass);
		  },
			errorElement: "span",
			errorClass: "error",
			validClass: "success",
			errorContainer: ".message-box",
			errorLabelContainer: ".message-box",
			wrapper: "",
			/*
			success: function (label) {
				label.addClass("valid").text("Ok!");
			},
			*/
			/*
			submitHandler: function() {
				alert("Submitted!");
			},
			*/
			rules: {
				FirstName: {
					required: true,
					minlength: 2
				},
				Email: {
					required: true,
					email: true
				},
				Message: {
					required: true
				},
				LastName: {
					required: true
				}
			},
			messages: {
				FirstName: {
					required: "Your first name is required. ",
					minlength: jQuery.format("At least {0} characters required!")
				},
				LastName: {
					required: "You must read the terms and conditions. "
				},
				Email: {
					required: "The email is required. ",
					email: "Please provide a valid email address"
				},
				Message: {
					required: "The message is required. "
				}
			}
		});

	})
})(jQuery);