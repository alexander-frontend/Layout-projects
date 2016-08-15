$(document).ready(function(){
	$('.menu-adaptive').on('click', function(e){
		e.preventDefault();
		$('.header-nav ul').toggleClass('opened')
	});

	$('.bxslider').bxSlider({
		infiniteLoop: false,
		hideControlOnEnd: true
	});
})
