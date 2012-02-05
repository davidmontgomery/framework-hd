<div class="l-col-full">
	<% include BreadCrumbs %>
</div>

<div class="l-col-full">
	<h1>$Title</h1>
	$Content

	<% if Success %>
		<p>Form submitted successfully.</p>
	<% else %>
		$CustomFormTemplate
	<% end_if %>
</div>