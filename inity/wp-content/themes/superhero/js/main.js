$(document).ready(function() {
	$('#header-carousel').owlCarousel({
		items: 1,
		singleItem: true, 
		autoPlay: 3000,
		itemsDesktop: [1199, 1],
		itemsDesktopSmall: [979, 1],
		itemsTablet: [768, 1],
		itemsMobile:	[479,1],
		responsiveRefreshRate: 100
	});

	$('#footer-carousel').owlCarousel({
		items: 1,
		singleItem: true, 
		autoPlay: 3000,
		itemsDesktop: [1199, 1],
		itemsDesktopSmall: [979, 1],
		itemsTablet: [768, 1],
		itemsMobile:	[479,1],
		responsiveRefreshRate: 100
	});

	$('#partners-slider').owlCarousel({
		items: 5,
		navigation: true,
		pagination: false,
		navigationText: ["", ""],
		itemsDesktop: [1199, 4],
		itemsDesktopSmall: [979, 3],
		itemsTablet: [768, 2],
		itemsMobile:	[479,1],
		responsiveRefreshRate: 100
	});

	$(window).on('ready resize', function(event) {
		if($(window).width() < 768){
			$('#menu-main-menu > li > ul').siblings('a').on('click', function(event) {
				event.preventDefault();
				/*$('.sub-menu.ul-opened').removeClass('ul-opened');*/
				$(this).siblings('ul').toggleClass('ul-opened');
			});
		}	
	});
	
});