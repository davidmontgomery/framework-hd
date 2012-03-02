<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

<head>
	<% base_tag %>
	$MetaTags(false)
	<title>
		<% if MetaTitle %>$MetaTitle<% else %>$Title<% end_if %> | $SiteConfig.Title
	</title>
</head>

<body class="page-{$URLSegment} class-{$ClassName}">
	<% include Accessibility %>

	<div id="l-container">
		<div id="l-header">
			$SearchForm
			<% include Branding %>
		</div>

		<% include Navigation %>

		<div class="l-layout clearfix">
			$Layout
		</div>
	</div>

	<% include Footer %>
	<% include GoogleAnalytics %>
</body>
</html>