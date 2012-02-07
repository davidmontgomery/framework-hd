<?php

class CustomFormSubmission extends DataObject {
	static $db = array(
		'FirstName' => 'Varchar(255)',
		'Dropdownfield' => 'Varchar(255)'
	);

 	static $has_one = array(
		'Form' => 'CustomFormPage',
		'Author' => 'Member'
	);

	static $summary_fields = array(
		'FirstName',
		'Dropdownfield'
	);
}

