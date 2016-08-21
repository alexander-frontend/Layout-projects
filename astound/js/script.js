function windowSize(){
	if (window.innerWidth > '960'){
		$('.wrap_item').removeClass('nth-child-3np2');
		$('.wrap_item:nth-child(3n)').addClass('nth-child-3np1');
	} else if(window.innerWidth <= '960' && window.innerWidth > '720'){
		$('.wrap_item').removeClass('nth-child-3np1');
		$('.wrap_item:nth-child(2n)').addClass('nth-child-3np2');
	} else {
		$('.wrap_item').removeClass('nth-child-3np2');
	}
}

$(window).on('load resize', windowSize);