<?php

class ContactPage extends Page {
	static $db = array(
		'MailTo' => 'Varchar(100)',
		'SubmitText' => 'HTMLText'
	);

	function getCMSFields() {
		$fields = parent::getCMSFields();
		$fields->addFieldToTab('Root.Content.Email', new TextField('MailTo', 'Email address'));
		$fields->addFieldToTab('Root.Content.Email', new HTMLEditorField('SubmitText', 'Success Message'));
		return $fields;
	}
}

class ContactPage_Controller extends Page_Controller {

	function ContactForm() {
		$fields = new fieldset(
			new TextField('Name', 'Name'),
			new TextField('Email', 'Email')
		);

		$actions = new fieldset(new FormAction('SendContactForm', 'Submit'));

		$validator = new RequiredFields('Name');

		return new Form($this, 'ContactForm', $fields, $actions, $validator);
	}

	function SendContactForm($data, $form) {
		$From = $data['Email'];
		$To = $this->Mailto;
		$Subject = "My online enquiry";

		$email = new Email($From, $MailTo, $Subject);
		$email->setTemplate('ContactEmail');
		$email->populateTemplate($data);
		$email->send();

		Director::redirect(Director::baseURL(). $this->URLSegment . "/?success=1");
	}

	public function Success() {
		return isset($_REQUEST['success']) && $_REQUEST['success'] == "1";
	}
}