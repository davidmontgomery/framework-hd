(function($) {
	$(document).ready(function() {

		// Flexi-search
		var $searchInput = $('#searchForm input.text');

		$searchInput.bind('focus', function() {
			$searchInput.animate({
				'width' : '200px'
			}, 250);
		});

		$searchInput.bind('blur', function() {
			$searchInput.animate({
				'width' : '110px'
			}, 250);
		});

		// External link
		$("a[href*='http://']:not([href*='" + location.hostname+"']),[href*='https://']:not([href*='" + location.hostname + "'])")
			.addClass('external_link')
			.attr('target', '_blank')
			.attr('title', 'Opens new window');

	});
})(jQuery);