<% include BreadCrumbs %>

<h1>$Title</h1>
<% if Results %>
	<ul class="lst">
		<% control Results %>
			<li <% if Last %>class="last"<% end_if %>>
				<% if MenuTitle %>
					<h4><a href="$Link">$MenuTitle</a></h4>
				<% else %>
					<h4><a href="$Link">$Title</a></h4>
				<% end_if %>

				<% if Content %>
					$Content.FirstParagraph(html)
				<% end_if %>
				<p class="lst-more-wrap">
					<a class="more" href="$Link" title="Read more about &quot;{$Title}&quot;">Read more »</a>
				</p>
			</li>
		<% end_control %>
	</ul>
<% else %>
	<p>No results were found. Please try another search term.</p>
<% end_if %>
<% if Results.MoreThanOnePage %>
	<div class="pagination">
		<% if Results.NextLink %>
			<a class="next" href="$Results.NextLink" title="View the next page">Next</a>
		<% end_if %>

		<% if Results.PrevLink %>
			<a class="prev" href="$Results.PrevLink" title="View the previous page">Prev</a>
		<% end_if %>

		<% control Results.Pages %>
			<% if CurrentBool %>
				$PageNum
			<% else %>
				<a href="$Link" title="View page number $PageNum">$PageNum</a>
			<% end_if %>
		<% end_control %>
	</div>
<% end_if %>