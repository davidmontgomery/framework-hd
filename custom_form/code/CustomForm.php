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
			$phoneprefix = new TextField('PhonePrefix', 'Phone Number:', '', 4),
			$phonenumber = new TextField('PhoneNumber'),
			$emailfield = new EmailField('Emailfield', 'Email field:'),
			$textareafield = new TextareaField('Textareafield', 'Textarea field:'),
			$checkboxfield = new CheckboxField('MyCheckboxfield', 'Checkbox field:'),
			$onecolumn = new CustomCheckboxSetField(
				'OneColumn',
				'One Column:',
				array(
					'ItemOne' => 'Item one',
					'ItemTwo' => 'Item two',
					'ItemThree' => 'Item three'
				),
				'0'
			),
			$twocolumn = new CustomCheckboxSetField(
				'TwoColumn',
				'Two Column:',
				array(
					'ItemOne' => 'Item one',
					'ItemTwo' => 'Item two',
					'ItemThree' => 'Item three',
					'ItemFour' => 'Item four',
					'ItemFive' => 'Item Five',
					'ItemSix' => 'Item Six'
				),
				'0'
			),
			$threecolumn = new CustomCheckboxSetField(
				'ThreeColumn',
				'Three Column:',
				array(
					'ItemOne' => 'Item one',
					'ItemTwo' => 'Item two',
					'ItemThree' => 'Item three',
					'ItemFour' => 'Item four',
					'ItemFive' => 'Item five',
					'ItemSix' => 'Item six'
				),
				'0'
			),
			$optionsetfield = new OptionsetField(
				'OptionsetField',
				'Radio Optionset:',
				array(
					'OptionOne' => 'Option One',
					'OptionTwo' => 'Option Two'
				),
				'0'
			)
		);

		// Extra classes
		$phoneprefix->addExtraClass('small');

		// Actions
		$actions = new FieldSet(
			new FormAction('SendCustomFormPage', 'Send')
		);

		// Server-side validation
		$validator = new RequiredFields('Dropdownfield', 'TextField', 'TextField2', 'TextField3', 'Emailfield', 'OptionsetField', 'ThreeColumn', 'OneColumn', 'TwoColumn', 'MyCheckboxfield', 'Textareafield', 'PhonePrefix', 'PhoneNumber');

		// Custom validation messages
		$dropdownfield->setCustomValidationMessage('Custom error message here.');
		$textfield->setCustomValidationMessage('Custom error message here.');
		$textfield2->setCustomValidationMessage('Custom error message here.');
		$textfield3->setCustomValidationMessage('Custom error message here.');
		$phoneprefix->setCustomValidationMessage('Custom error message here.');
		$phonenumber->setCustomValidationMessage('Custom error message here.');
		$emailfield->setCustomValidationMessage('Custom error message here.');
		$textareafield->setCustomValidationMessage('Custom error message here.');
		$checkboxfield->setCustomValidationMessage('Custom error message here.');
		$onecolumn->setCustomValidationMessage('Custom error message here.');
		$twocolumn->setCustomValidationMessage('Custom error message here.');
		$threecolumn->setCustomValidationMessage('Custom error message here.');
		$optionsetfield->setCustomValidationMessage('Custom error message here.');

		parent::__construct($controller, $name, $fields, $actions, $validator);
	}

	function forTemplate() {
		return $this->renderWith(array(
			$this->class,
			'CustomForm'
		));
	}
}