<div class="grid_full">
	<% include BreadCrumbs %>
</div><!-- /grid_full -->

<div class="grid_1">
	<h1>$Title</h1>
	$Content
	<% control Children.GroupedBy(Category) %>
		<h3>Test $CategoryName</h3>
		<ul>
			<% control Children %>
				<li><a href="$Link">$Title</a></li>
			<% end_control %>
		</ul>
	<% end_control %>
</div><!-- /grid_1 -->


