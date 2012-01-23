<div class="l-col-full">
	<% include BreadCrumbs %>
</div>

<div class="l-col-full">
	<h1>$Title</h1>
	$Content
	<% if Success %>
		$SubmitText
	<% else %>
		$ContactForm
	<% end_if %>
</div>