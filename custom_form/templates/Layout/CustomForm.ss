<form $FormAttributes>
	<!-- This is where the server-side errors should go -->

	<% if Message %>
		<p id="{$FormName}_error" class="message $MessageType">
			$Message
		</p>
	<% else %>
		<p id="{$FormName}_error" class="message $MessageType"></p>
	<% end_if %>

	<fieldset>
		<ul class="messages"></ul>


		<!-- Dropdown example -->
		<div class="field text">
		<% control dataFieldByName(Dropdownfield) %>
			<label for="$id">$Title</label>
			$Field

			<% if Message %><span class="message $MessageType">$Message</span><% end_if %>
		<% end_control %>
		</div>

		<!-- Textfield example -->
		<div class="field text">
		<% control dataFieldByName(FirstName) %>
			<label for="$id">$Title</label>
			$Field

			<% if Message %><span class="message $MessageType">$Message</span><% end_if %>
		<% end_control %>
		</div>

		<!-- Horizontal example -->
		<div class="field group text">
			<label for="$dataFieldByName(Textfield).id">Text field horizontal one:</label>
			$dataFieldByName(Textfield)
		</div>

		<div class="field group text">
			<label for="$dataFieldByName(Textfield).id">Text field horizontal two:</label>
			$dataFieldByName(Textfield)
		</div>
		<div class="clear"></div>
		<!-- END: Horizontal example -->

		<!-- Phone number example -->
		<div class="field text">
			<label for="$dataFieldByName(Textfield).id">Phone number:</label>
			$dataFieldByName(PhonePrefix) -
			$dataFieldByName(Textfield) <!-- Need a class of small on this input -->
		</div>
		<div class="clear"></div>

		<!-- Email example -->
		<div class="field text">
			<label for="$dataFieldByName(Email).id">Email field:</label>
			$dataFieldByName(Emailfield)
		</div>
	</fieldset>

	<fieldset>
		<ul class="messages"></ul>

		<!-- Textarea example -->
		<div class="field textarea">
			<label for="$dataFieldByName(Textareafield).id">Textarea field:</label>
			$dataFieldByName(Textareafield)
		</div>

		<!-- Checkbox example -->
		<div class="field checkbox">
			$dataFieldByName(Checkboxfield)
			<label for="$dataFieldByName(Checkboxfield).id">Checkbox field</label>
		</div>

		<!-- Radio example -->
		<div class="field radio">
			<label for="$dataFieldByName(OptionsetField).id">Optionset Field:</label>
			$dataFieldByName(OptionsetField)
		</div>

		<!-- Checkbox one column example -->
		<div class="field checkbox">
			<label for="$dataFieldByName(OneColumn).id">One Column:</label>
			<% control dataFieldByName(OneColumn) %>
				$Field(1)
			<% end_control %>
		</div>

		<!-- Checkbox two column example -->
		<div class="field checkbox two clearfix">
			<label for="$dataFieldByName(TwoColumn).id">Two Column:</label>
			<% control dataFieldByName(TwoColumn) %>
				$Field(2)
			<% end_control %>
		</div>

		<!-- Checkbox three column example -->
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