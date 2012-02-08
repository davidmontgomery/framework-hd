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

		// Set data
		// echo "<pre>";
		// print_r($data);
		// die();

		// echo "<pre>";

		// $form is a CustomForm class
		// YourNamevar_dump(get_class($form));

		// $form->dataFieldByName('YourName')
		// gives you a FormField.
		// $name = $form->dataFieldByName('YourName');
		// var_dump(get_class($name));
		// $title = $name->Title();
 		// var_dump($title);

		// print_r($form->dataFieldByName('YourName')->Title());

		// $dropdownObject = $form->dataFieldByName('Dropdownfield');
		// $source = $dropdownObject->getSource();

		// echo "<h2>Source is </h2>";
		// var_dump($source);

		// echo "<h2>The selected value is </h2>";
		// var_dump($data['Dropdownfield']);

		// echo "<h2>The result is</h2>";
		// var_dump($source[$data['Dropdownfield']]);
		// die();
				// Set data

		// method 1 of creating a submission.
		$submission = new CustomFormSubmission();
		$submission->FirstName = $data['FirstName'];
		$submission->Dropdownfield = $source[$data['Dropdownfield']];
		$submission->Form = $this;

		$submission->write();

		// method 2
		$submissionTwo = new CustomFormSubmission();
		$form->saveInto($submissionTwo);
		$submission->Form = $this;
		$submission->MemberID = Member::currentUserID();
		$submissionTwo->write();


		$from = 'hello@davidmontgomery.co.nz';
		$to = 'hello@davidmontgomery.co.nz';
		$subject = 'Subject line here';
		$email = new Email($from, $to, $subject);

		$email->setTemplate('ContactEmail');
		$email->populateTemplate($data);
		$email->send();
/*
		Prints all data recursivily

		echo "<pre>";
		print_r($data);
		die();
*/
		// Return to submitted message
		Director::redirect(Director::baseURL(). $this->URLSegment . "/?success=1");

	}

	public function Success() {
		return isset($_REQUEST['success']) && $_REQUEST['success'] == "1";
	}

	function init() {
		parent::init();

		// Custom JQuery validation: Work on this after server-side completed
		Validator::set_javascript_validation_handler('none');
		// Requirements::javascript("custom_form/js/jquery.validate.js");
		// Requirements::javascript("custom_form/js/CustomFormTemplatePage.js");
	}
}