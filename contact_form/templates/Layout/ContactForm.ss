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

		<div class="field text">
			<% control dataFieldByName(FirstName) %>
				<label for="$id">$Title</label>
				$Field<br />
				<% if Message %><span class="message $MessageType">$Message</span><% end_if %>
			<% end_control %>
		</div>

		<div class="field text">
			<% control dataFieldByName(LastName) %>
				<label for="$id">$Title</label>
				$Field<br />
				<% if Message %><span class="message $MessageType">$Message</span><% end_if %>
			<% end_control %>
		</div>

		<div class="field text">
			<% control dataFieldByName(Email) %>
				<label for="$id">$Title</label>
				$Field<br />
				<% if Message %><span class="message $MessageType">$Message</span><% end_if %>
			<% end_control %>
		</div>

		<div class="field text">
			<% control dataFieldByName(Message) %>
				<label for="$id">$Title</label>
				$Field<br />
				<% if Message %><span class="message $MessageType">$Message</span><% end_if %>
			<% end_control %>
		</div>

		<% control dataFieldByName(SecurityID) %>
			$Field
		<% end_control %>

		<% if Actions %>
			<div class="Actions">
				<% control Actions %>
					$Field
				<% end_control %>
			</div>
		<% end_if %>
</form>