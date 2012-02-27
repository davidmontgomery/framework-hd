<div class="l-col-4">
	<% include BreadCrumbs %>
</div>

<div class="l-col-4">
	<h1>$Title</h1>
	$Content
	<% if Success %>
		$SubmitText
	<% else %>
		$FormTemplate
	<% end_if %>
</div>