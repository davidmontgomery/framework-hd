(function($) {
	$(document).ready(function() {

		// http:docs.jquery.com/Plugins/Validation/validate
		$("#CustomFormTemplate_CustomFormTemplate").validate({
			//debug: true,
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
			errorPlacement: function(label, elem) {
					var test = label.text();
			    elem.closest("fieldset").find(".messages").append(test);
			  },
			wrapper: "li",
			/* Adds to success message to the top list
			success: function (label) {
				label.addClass("valid").text("Ok!");
			},

			/*
			submitHandler: function() {
				alert("Submitted!");
			},
			*/
			rules: {
				Textfield: {
					required: true,
				}
			},
			messages: {
				Textfield: {
					required: "This  field is required."
				}
			}
		});

	})
})(jQuery);


