<?php

class StaffHolder extends Page {
	static $icon = 'themes/framework-hd/images/tree-icons/staff';

	static $db = array(
	);

	static $has_one = array(
	);

	static $allowed_children = array('StaffPage');

	function Categories() {
		return DataObject::get('StaffCategory');
	}
}

class StaffHolder_Controller extends Page_Controller {

}