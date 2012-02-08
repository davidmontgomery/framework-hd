<?php

class CustomFormSubmission extends DataObject {
	static $db = array(
		'TextField' => 'Varchar(255)',
		'DropdownField' => 'Varchar(255)'
	);

 	static $has_one = array(
		'Form' => 'CustomFormPage'
	);

	static $summary_fields = array(
		'TextField',
		'DropdownField'
	);
}

