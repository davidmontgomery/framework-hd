<% include BreadCrumbs %>

<h1>$Title</h1>
$Content
<% if Success %>
	$SubmitText
<% else %>
	$FormTemplate
<% end_if %>