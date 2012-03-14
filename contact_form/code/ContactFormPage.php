<?php

class ContactFormPage extends Page {

	public static $db = array(
	);

	public static $has_one = array(
	);
}

class ContactFormPage_Controller extends Page_Controller {
	function MyContactForm() {
		$params = Director::urlParams();
		return new ContactForm($this, 'MyContactForm');
	}

	function SendContactForm($data, $form) {

		$submission = new ContactFormSubmission();
		$form->saveInto($submission);
		$submission->Form = $this;
		$submission->write();

		// Email
		$from = 'hello@davidmontgomery.co.nz';
		$to = 'hello@davidmontgomery.co.nz';
		$subject = 'Subject line here';
		$email = new Email($from, $to, $subject);

		$email->setTemplate('ContactFormEmail');
		$email->populateTemplate($data);
		$email->send();

		// Return to submitted message
		Director::redirect(Director::baseURL(). $this->URLSegment . '/?success=1');
	}

	public function Success() {
		return isset($_REQUEST['success']) && $_REQUEST['success'] == '1';
	}

	function init() {
		parent::init();

		Validator::set_javascript_validation_handler('none');
		Requirements::javascript('contact_form/js/jquery.validate.js');
		Requirements::javascript('contact_form/js/ContactFormPage.js');
	}
}