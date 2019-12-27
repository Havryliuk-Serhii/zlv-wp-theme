(function($) {
	"use strict"
	// On Scroll
	$(window).on('scroll', function() {
		var wScroll = $(this).scrollTop();

		// Fixed nav
		wScroll > 1 ? $('#nav').addClass('bg-dark') : $('#nav').removeClass('bg-dark');
		});

	// magnificPopup
	$('.photo').magnificPopup({
		delegate: '.lightbox',
		type: 'image'
	});
	
})(jQuery);

	

