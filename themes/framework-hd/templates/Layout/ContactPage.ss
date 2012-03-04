<div class="l-col12">
	<% include BreadCrumbs %>

	<h1>$Title</h1>
	$Content
	<% if Success %>
		$SubmitText
	<% else %>
		$ContactForm
	<% end_if %>
</div>