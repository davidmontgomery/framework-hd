<div class="l-col-4">
	<% include BreadCrumbs %>

	<h1>$Title</h1>
	<% if StaffPhoto %>
		<% control StaffPhoto %>
			$CroppedImage(275, 183)
		<% end_control %>
	<% end_if %>

	$Content

	<% if Parent %>
		<p><a href="$Parent.Link">Back to $Parent.MenuTitle</a></p>
	<% end_if %>
</div>