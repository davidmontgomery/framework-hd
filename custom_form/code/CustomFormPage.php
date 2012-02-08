<?php

class CustomFormPage extends Page {

	public static $db = array(
	);

	public static $has_one = array(
	);
}

class CustomFormPage_Controller extends Page_Controller {
	function MyCustomForm() {
		$params = Director::urlParams();
		return new CustomForm($this, 'MyCustomForm');
	}

	function SendCustomFormPage($data, $form) {

		// method 1 of creating a submission.
		// $submission = new CustomFormSubmission();
		// $submission->TextField = $data['TextField'];
		// $submission->DropdownField = $source[$data['DropdownField']];
		// $submission->Form = $this;
		// $submission->write();

		$submission = new CustomFormSubmission();
		$form->saveInto($submission);
		$submission->Form = $this;
		$submission->write();

		// Email
		$from = 'hello@davidmontgomery.co.nz';
		$to = 'hello@davidmontgomery.co.nz';
		$subject = 'Subject line here';
		$email = new Email($from, $to, $subject);

		$email->setTemplate('CustomFormEmail');
		$email->populateTemplate($data);
		$email->send();

		// Return to submitted message
		Director::redirect(Director::baseURL(). $this->URLSegment . "/?success=1");
	}

	public function Success() {
		return isset($_REQUEST['success']) && $_REQUEST['success'] == "1";
	}

	function init() {
		parent::init();

		Validator::set_javascript_validation_handler('none');
		// Requirements::javascript("custom_form/js/jquery.validate.js");
		// Requirements::javascript("custom_form/js/CustomFormTemplatePage.js");
	}
}