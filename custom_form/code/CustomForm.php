<?php

/**
 * Always end your classes in the noun of the object
 *
 * E.g ContactPage is a *Page *
 * CustomForm is Form
 * MyController is a controller
 */

class CustomForm extends Form {
	// How do I add an additional class to a form?

	function __construct($controller, $name) {

		$fields = new FieldSet(

			new DropdownField(
<<<<<<< HEAD
				'name', // ID, unique to the page
				'', // Label
=======
				'Dropdownfield',
				'Dropdown field:',
>>>>>>> 91ad78a67a942e123108a792fbf2d89fc87506c4
				array(
					'' => 'Select',
					'Key1' => 'I love ponies',
					'Key2' => 'I hate ponies',
					'Key3' => 'I am not fussed on ponies'
				)
			),
			$textfield = new TextField('FirstName', 'First name:'),
			new TextField('PhonePrefix', '', '', 4),
			new EmailField('Emailfield'),
			new TextareaField('Textareafield'),
			new CheckboxField('Checkboxfield'),
			new CustomCheckboxSetField(
				'OneColumn',
				'',
				array(
					'1' => 'Item one',
					'2' => 'Item two',
					'3' => 'Item three'
				),
				'1' // Which item is checked by default
			),
			new CustomCheckboxSetField(
				'TwoColumn',
				'',
				array(
					'1' => 'Item one',
					'2' => 'Item two',
					'3' => 'Item three',
					'4' => 'Item four',
					'5' => 'Item three',
					'6' => 'Item four'
				),
				'0' // Which item is checked by default
			),
			new CustomCheckboxSetField(
				'ThreeColumn',
				'',
				array(
					'1' => 'Item one',
					'2' => 'Item two',
					'3' => 'Item three',
					'4' => 'Item four',
					'5' => 'Item five',
					'6' => 'Item six'
				),
				'0' // Which item is checked by default
			),
			new OptionsetField(
				'OptionsetField',
				'',
				array(
					'OptionOne' => 'Option One',
					'OptionTwo' => 'Option Two'
				),
				'OptionTwo' // Which item is checked by default
			)
		);

		$textfield->addExtraClass('extraclass');
		$textfield->setCustomValidationMessage("Yo! fill this out");

		$actions = new FieldSet(
			new FormAction('SendCustomFormPage', 'Send')
		);

<<<<<<< HEAD
		// $validator = new RequiredFields('Textfield');
=======
		$validator = new RequiredFields('FirstName');
>>>>>>> 91ad78a67a942e123108a792fbf2d89fc87506c4

		parent::__construct($controller, $name, $fields, $actions);
	}

	function forTemplate() {
		return $this->renderWith(array(
			$this->class,
			'CustomForm'
		));
	}
}