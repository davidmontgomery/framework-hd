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
				'Dropdownfield',
				'', // What are these values for?
				array(
					'' => 'Select',
					'Key1' => 'I love ponies',
					'Key2' => 'I hate ponies',
					'Key3' => 'I am not fussed on ponies'
				)
			),
			$firstname = new TextField('FirstName', 'First name:'),
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

		$actions = new FieldSet(
			new FormAction('SendCustomFormPage', 'Send')
		);

		$validator = new RequiredFields('FirstName');

		$firstname->addExtraClass('MyTextField');
		$firstname->setCustomValidationMessage("Yo! fill this out");

		parent::__construct($controller, $name, $fields, $actions, $validator);
	}

	function forTemplate() {
		return $this->renderWith(array(
			$this->class,
			'CustomForm'
		));
	}
}