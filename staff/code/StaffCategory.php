<?php

class StaffCategory extends DataObject
{

	public static $db = array(
		'CategoryName' => 'Varchar(255)'
	);

	static $has_many = array(
		'StaffPages' => 'StaffPage'
	);





	public function getCMSFields()
	{

		return parent::getCMSFields();

	}



}