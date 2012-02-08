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

		<!-- Dropdown example -->
		<div class="field text">
			<% control dataFieldByName(DropdownField) %>
				<label for="$id">$Title</label>
				$Field<br />
				<% if Message %><span class="message $MessageType">$Message</span><% end_if %>
			<% end_control %>
		</div>

		<!-- Textfield example -->
		<div class="field text">
			<% control dataFieldByName(TextField) %>
				<label for="$id">$Title</label>
				$Field<br />
				<% if Message %><span class="message $MessageType">$Message</span><% end_if %>
			<% end_control %>
		</div>

		<!-- Grouped example -->
		<div class="field group text">
			<% control dataFieldByName(TextField2) %>
				<label for="$id">$Title</label>
				$Field<br />
				<% if Message %><span class="message $MessageType">$Message</span><% end_if %>
			<% end_control %>
		</div>

		<div class="field group text">
			<% control dataFieldByName(TextField3) %>
				<label for="$id">$Title</label>
				$Field<br />
				<% if Message %><span class="message $MessageType">$Message</span><% end_if %>
			<% end_control %>
		</div>
		<div class="clear"></div>
		<!-- END: Grouped example -->

		<!-- Phone number example -->
		<div class="field text">
			<label for="$dataFieldByName(PhonePrefix).id">$dataFieldByName(PhonePrefix).Title</label>
			$dataFieldByName(PhonePrefix) - $dataFieldByName(PhoneNumber)<br />
			<% if Message %><span class="message $MessageType">$Message</span><% end_if %>
		</div>
		<div class="clear"></div>

		<!-- Email example -->
		<div class="field text">
			<% control dataFieldByName(EmailField) %>
				<label for="$id">$Title</label>
				$Field<br />
				<% if Message %><span class="message $MessageType">$Message</span><% end_if %>
			<% end_control %>
		</div>
	</fieldset>

	<fieldset>
		<ul class="messages"></ul>

		<!-- Textarea example -->
		<div class="field textarea">
			<% control dataFieldByName(TextareaField) %>
				<label for="$id">$Title</label>
				$Field<br />
				<% if Message %><span class="message $MessageType">$Message</span><% end_if %>
			<% end_control %>
		</div>

		<!-- Checkbox example -->
		<div class="field checkbox">
			<% control dataFieldByName(CheckboxField) %>
				$Field
				<label for="$id">$Title</label>
				<% if Message %><span class="message $MessageType">$Message</span><% end_if %>
			<% end_control %>
		</div>

		<!-- Radio example -->
		<div class="field radio">
			<% control dataFieldByName(OptionsetField) %>
			<label for="$id">$Title</label>
				<% if Message %><span class="message $MessageType">$Message</span><% end_if %>
				$Field
			<% end_control %>
		</div>

		<!-- Checkbox one column example -->
		<div class="field checkbox">
			<% control dataFieldByName(OneColumn) %>
				<label for="$id">$Title</label><br />
				<% if Message %><span class="message $MessageType">$Message</span><% end_if %>
				$Field(1)
			<% end_control %>
		</div>

		<!-- Checkbox two column example -->
		<div class="field checkbox two clearfix">
			<% control dataFieldByName(TwoColumn) %>
				<label for="$id">$Title</label><br />
				<% if Message %><span class="message $MessageType">$Message</span><% end_if %>
				$Field(2)
			<% end_control %>
		</div>

		<!-- Checkbox three column example -->
		<div class="field checkbox three clearfix">
			<% control dataFieldByName(ThreeColumn) %>
				<label for="$id">$Title</label><br />
				<% if Message %><span class="message $MessageType">$Message</span><% end_if %>
				$Field(3)
			<% end_control %>
		</div>
	</fieldset>

	<% if Actions %>
		<div class="Actions">
			<% control Actions %>
				$Field
			<% end_control %>
		</div>
	<% end_if %>
</form>