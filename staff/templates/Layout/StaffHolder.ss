<div class="l-col-4">
	<% include BreadCrumbs %>

	<h1>$Title</h1>
	$Content

	<% if Categories %>
		<ul>
			<% control Categories %>
				<% if StaffPages %>
					<h2>$CategoryName</h2>

					<% control StaffPages %>
						<li><a href="$Link">$Title</a></li>
				<% end_control %>
				<% end_if %>
			<% end_control %>
		</ul>
	<% end_if %>
</div>