<div class="l-col-full">
	<% include BreadCrumbs %>
</div><!-- /grid_full -->

<div class="l-col-full">
	<h1>$Title</h1>
	$Content
	<% if Success %>
		$SubmitText
	<% else %>
		$FormTemplate
	<% end_if %>
</div>