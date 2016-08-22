$(document).ready(function(){
	$(window).on('load resize', windowSize);
	
	$('.wrap_item-more_click').on('click', function(e){
		e.preventDefault();
		$('.overlay').addClass('opened');
		document.body.style.overflow = "hidden";
		$('.overlay').css('overflow','scroll')
	});

	$('.close').click(function(e){
		e.preventDefault();
		$('.overlay').removeClass('opened');
		document.body.style.overflow = "auto";
	});

	$(document).on('keydown',function(e){
		if (e.which == 27){
			$('.overlay').removeClass('opened');
			document.body.style.overflow = "auto";
		}
	});

	$(".overlay").click(function(e) {
		$(".overlay").removeClass('opened');
		document.body.style.overflow = "auto";
	});

	$(".popup").click(function(e) {
		e.stopImmediatePropagation();
	});
});

function windowSize(){
	var width = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
	
	if (width > '960'){
		$('.wrap_item').removeClass('nth-child-3np2');
		$('.wrap_item:nth-child(3n)').addClass('nth-child-3np1');
	} else if(width <= '960' && width > '720'){
		$('.wrap_item').removeClass('nth-child-3np1');
		$('.wrap_item:nth-child(2n)').addClass('nth-child-3np2');
	} else {
		$('.wrap_item').removeClass('nth-child-3np2');
	}
}

