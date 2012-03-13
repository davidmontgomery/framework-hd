<?php

class ContactForm extends Form {

	function __construct($controller, $name) {

		$fields = new FieldSet(
			$firstname = new TextField('FirstName', 'First Name:'),
			$lastname = new TextField('LastName', 'Last Name:'),
			$email = new EmailField('Email', 'Email:'),
			$message = new TextareaField('Message', 'Message:')
		);

		// Extra classes example
		$firstname->addExtraClass('test-class');

		// Actions
		$actions = new FieldSet();
		$actions->push(new FormAction('SendContactForm', 'Send'));
		// Server-side validation
		$validator = new RequiredFields('FirstName', 'LastName', 'Email');

		// Custom server-side validation messages
		$firstname->setCustomValidationMessage('Custom server-side error message for first name.');
		$lastname->setCustomValidationMessage('Custom server-side error message for last name.');
		$email->setCustomValidationMessage('Custom server-side error message for email.');

		parent::__construct($controller, $name, $fields, $actions, $validator);
	}

	function forTemplate() {
		return $this->renderWith(array(
			$this->class,
			'ContactForm'
		));
	}
}