<?php

class ContactFormSubmission extends DataObject {
	static $db = array(
		'FirstName' => 'Varchar(255)',
		'LastName' => 'Varchar(255)',
		'Email' => 'Varchar(255)',
		'Message' => 'Varchar(255)',
	);

 	static $has_one = array(
		'Form' => 'ContactFormPage'
	);

	static $summary_fields = array(
		'FirstName',
		'LastName',
		'Email',
		'Message'
	);
}

