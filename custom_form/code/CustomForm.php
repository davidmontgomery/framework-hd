<?php

class CustomForm extends Form {

	function __construct($controller, $name) {

		$fields = new FieldSet(
			$dropdownfield = new DropdownField(
				'Dropdownfield',
				'Dropdown field label:',
				array(
					'' => 'Select',
					'ItemOne' => 'Item One',
					'ItemTwo' => 'Item Two',
					'ItemThree' => 'Item Three'
				)
			),
			$textfield = new TextField('TextField', 'Text field label:'),
			$textfield2 = new TextField('TextField2', 'Grouped Text1:'),
			$textfield3 = new TextField('TextField3', 'Grouped Text2:'),
			$phoneprefix = new TextField('PhonePrefix', 'Phone Number', '', 4),
			$phonenumber = new TextField('PhoneNumber'),
			$emailfield = new EmailField('Emailfield', 'Email field:'),
			$textareafield = new TextareaField('Textareafield', 'Textarea field:'),
			$checkboxfield = new CheckboxField('Checkboxfield', 'Checkbox field:'),
			$onecolumn = new CustomCheckboxSetField(
				'OneColumn',
				'One Column:',
				array(
					'1' => 'Item one',
					'2' => 'Item two',
					'3' => 'Item three'
				),
				'1'
			),
			$twocolumn = new CustomCheckboxSetField(
				'TwoColumn',
				'Two Column:',
				array(
					'1' => 'Item one',
					'2' => 'Item two',
					'3' => 'Item three',
					'4' => 'Item four',
					'5' => 'Item three',
					'6' => 'Item four'
				),
				'0'
			),
			$threecolumn = new CustomCheckboxSetField(
				'ThreeColumn',
				'Three Column:',
				array(
					'1' => 'Item one',
					'2' => 'Item two',
					'3' => 'Item three',
					'4' => 'Item four',
					'5' => 'Item five',
					'6' => 'Item six'
				),
				'0'
			),
			$optionsetfield = new OptionsetField(
				'OptionsetField',
				'',
				array(
					'OptionOne' => 'Option One',
					'OptionTwo' => 'Option Two'
				),
				'OptionTwo'
			)
		);

		// Extra classes
		$phoneprefix->addExtraClass('small');

		// Actions
		$actions = new FieldSet(
			new FormAction('SendCustomFormPage', 'Send')
		);

		// Server-side validation
		$validator = new RequiredFields('Dropdownfield', 'TextField', 'TextField2', 'TextField3', 'Emailfield', 'OptionsetField', 'ThreeColumn', 'OneColumn', 'TwoColumn', 'Checkboxfield', 'Textareafield', 'PhonePrefix', 'PhoneNumber');

		// Custom validation messages
		$dropdownfield->setCustomValidationMessage('You must select a option');
		$textfield->setCustomValidationMessage('You must fill this out');
		$textfield2->setCustomValidationMessage('You must fill this out');
		$textfield3->setCustomValidationMessage('You must fill this out');
		$phoneprefix->setCustomValidationMessage('You must fill this out');
		$phonenumber->setCustomValidationMessage('You must fill this out');
		$emailfield->setCustomValidationMessage('You must enter an email address');
		$textareafield->setCustomValidationMessage('You must fill this out');
		$checkboxfield->setCustomValidationMessage('You must fill this out');
		$onecolumn->setCustomValidationMessage('You must fill this out');
		$twocolumn->setCustomValidationMessage('You must fill this out');
		$threecolumn->setCustomValidationMessage('You must fill this out');
		$optionsetfield->setCustomValidationMessage('You must fill this out');

		parent::__construct($controller, $name, $fields, $actions, $validator);
	}

	function forTemplate() {
		return $this->renderWith(array(
			$this->class,
			'CustomForm'
		));
	}
}