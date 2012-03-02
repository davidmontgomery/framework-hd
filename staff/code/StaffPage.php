<?php

class StaffPage extends Page {

	static $db = array(
		'Position' => 'Varchar(50)'
	);

	static $has_one = array(
		'StaffPhoto' => 'Image',
		'Category' => 'StaffCategory'
	);

	function getCMSFields() {
		$fields = parent::getCMSFields();

		$fields->addFieldToTab('Root.Content.Main', new TextField('Position'), 'Content');
		$fields->addFieldToTab('Root.Content.Main', new ImageField('StaffPhoto', 'Staff Photo'), 'Content');
		$fields->addFieldToTab('Root.Content.Category', new HasOneDataObjectManager($this, 'Category', 'StaffCategory', array(
			'CategoryName' => 'CategoryName'
		), 'Content'));

		return $fields;
	}
}

class StaffPage_Controller extends Page_Controller {
}