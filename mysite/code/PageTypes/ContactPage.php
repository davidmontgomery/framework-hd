<?php

class ContactPage extends Page {
	static $icon = array('themes/framework-hd/images/tree-icons/contact', 'file');

	static $db = array(
		'MailTo' => 'Varchar(100)',
		'SubmitText' => 'HTMLText',
		'Subject' => 'Varchar(100)'
	);

	function getCMSFields() {
		$fields = parent::getCMSFields();
		$fields->addFieldToTab('Root.Content.Email', new TextField('MailTo', 'Recipient'));
		$fields->addFieldToTab('Root.Content.Email', new TextField('Subject', 'Email Subject'));
		$fields->addFieldToTab('Root.Content.Email', new HTMLEditorField('SubmitText', 'Success Message'));

		return $fields;
	}
}

class ContactPage_Controller extends Page_Controller {

	function ContactForm() {
		$fields = new fieldset(
			new TextField('Name', 'Name:'),
			new TextField('Email', 'Email:')
		);

		$actions = new fieldset(new FormAction('SendContactForm', 'Submit'));
		$validator = new RequiredFields('Name', 'Email');

		return new Form($this, 'ContactForm', $fields, $actions, $validator);
	}

	function SendContactForm($data, $form) {
		$from = $data['Email'];
		$to = $this->MailTo;
		$subject = $this->Subject;

		if (!empty($this->MailTo)) {
			$email = $this->MailTo;
		} else {
			$email = EMAIL;
		}

		if (!empty($this->Subject)) {
			$subject = $this->Subject;
		} else {
			$subject = "My online enquiry";
		}

		$email = new Email($from, $email, $subject);
		$email->setTemplate('ContactEmail');
		$email->populateTemplate($data);
		$email->send();

		Director::redirect(Director::baseURL(). $this->URLSegment . "/?success=1");
	}

	public function Success() {
		return isset($_REQUEST['success']) && $_REQUEST['success'] == "1";
	}
}