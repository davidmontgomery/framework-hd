<form $FormAttributes>
	<% if Message %>
		<p id="{$FormName}_error" class="message $MessageType">
			$Message
		</p>
	<% else %>
		<p id="{$FormName}_error" class="message $MessageType"></p>
	<% end_if %>

	<fieldset>
		<ul class="messages"></ul>

		<!-- Dropdown Example -->
		<div class="field dropdown">
			<label for="$dataF	ieldByName(Dropdownfield).id">Dropdown field:</label>
			$dataFieldByName(Dropdownfield)
		</div>

		<!-- Textfield Example -->
		<div class="field text">
			<label for="$dataFieldByName(Textfield).id">Text field:</label>
			$dataFieldByName(Textfield)
		</div>

		<!-- Horizontal(group) Example -->
		<div class="field group text">
			<label for="$dataFieldByName(Textfield).id">Text field horizontal one:</label>
			$dataFieldByName(Textfield)
		</div>

		<div class="field group text">
			<label for="$dataFieldByName(Textfield).id">Text field horizontal two:</label>
			$dataFieldByName(Textfield)
		</div>
		<div class="clear"></div>
		<!-- END: Horizontal Example -->

		<!-- Email Example -->
		<div class="field text">
			<label for="$dataFieldByName(Email).id">Email field:</label>
			$dataFieldByName(Emailfield)
		</div>
	</fieldset>

	<fieldset>
		<ul class="messages"></ul>

		<!-- Textarea Example -->
		<div class="field textarea">
			<label for="$dataFieldByName(Textareafield).id">Textarea field:</label>
			$dataFieldByName(Textareafield)
		</div>

		<!-- Checkbox Example -->
		<div class="field checkbox">
			$dataFieldByName(Checkboxfield)
			<label for="$dataFieldByName(Checkboxfield).id">Checkbox field</label>
		</div>

		<!-- Radio Example -->
		<div class="field radio">
			<label for="$dataFieldByName(OptionsetField).id">Optionset Field:</label>
			$dataFieldByName(OptionsetField)
		</div>

		<!-- Checkbox One Column Example -->
		<div class="field checkbox">
			<label for="$dataFieldByName(OneColumn).id">One Column:</label>
			<% control dataFieldByName(OneColumn) %>
				$Field(1)
			<% end_control %>
		</div>

		<!-- Checkbox Two Column Example -->
		<div class="field checkbox two clearfix">
			<label for="$dataFieldByName(TwoColumn).id">Two Column:</label>
			<% control dataFieldByName(TwoColumn) %>
				$Field(2)
			<% end_control %>
		</div>

		<!-- Checkbox Three Column Example -->
		<div class="field checkbox three clearfix">
			<label for="$dataFieldByName(ThreeColumn).id">Three Column:</label>
			<% control dataFieldByName(ThreeColumn) %>
				$Field(3)
			<% end_control %>
		</div>
	</fieldset>

	$dataFieldByName(SecurityID)

	<% if Actions %>
		<div class="Actions">
			<input type="submit" title="Send" value="Send" name="action_SendCustomFormPage" class="action">
		</div>
	<% end_if %>
</form>