<div class="l-col-4">
	<% include BreadCrumbs %>

	<h1>$Title</h1>
	$Content

	<% if Children %>
		<ul>
			<% control Children %>
				<li><a href="$Link">$Title</a></li>
			<% end_control %>
		</ul>
	<% end_if %>
</div>