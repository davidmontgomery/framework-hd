<?php

class CustomFormPage extends Page {

	public static $db = array(
	);

	public static $has_one = array(
	);

}

class CustomFormPage_Controller extends Page_Controller {
	function CustomFormTemplate() {
		$Params = Director::urlParams();

		return new CustomFormTemplate($this, 'CustomFormTemplate');
	}

	function SendCustomFormPage($data, $form) {
		// Set data
		echo "<pre>";
		print_r($data);
		die();
		$From = 'hello@davidmontgomery.co.nz';
		$To = 'hello@davidmontgomery.co.nz';
		$Subject = 'Subject line here';
		$email = new Email($From, $To, $Subject);

		$email->setTemplate('ContactEmail');
		$email->populateTemplate($data);
		$email->send();

		// Return to submitted message
		Director::redirect(Director::baseURL(). $this->URLSegment . "/?success=1");

		// Need to submit data to CMS here as well...
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