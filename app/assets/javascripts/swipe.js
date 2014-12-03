jQuery(function($) {		
		/* Video */
		$(".swipebox").swipebox();
		$(".swipebox-video").swipebox();

		var swipeboxInstance = $(".swipebox-isotope:not(.isotope-hidden .swipebox-isotope)").swipebox();

		var $container = $('#grid');
		var optionFilter = $('#filter'),
		optionFilterLinks = optionFilter.find('a');
		optionFilterLinks.attr('href', '#');

		onAnimationCompleted = function(){
			swipeboxInstance.refresh();
		};

		optionFilterLinks.click( function(){
			var selector = $(this).attr('data-filter');
			$container.isotope({ 
				filter : '.' + selector, 
				itemSelector : '.item',
				layoutMode : 'fitRows',
				animationEngine : 'best-available',
			}, onAnimationCompleted);

			// Highlight the correct filter
			optionFilterLinks.removeClass('active');
			$(this).addClass('active');

		
			return false;
		});
	});