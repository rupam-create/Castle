$(function () {
	var windowWidth = $(window).width();
	var offset = $(".right-sec").offset();
	var divWidth = $(".right-sec").outerHeight(true);
	var endOffset = $("#bottom-section").offset();
	
	
	if (windowWidth > 768) {
		$(window).scroll(function () {
			rightSecfixed();
		});
		
	}
	var rightSecfixed = (function () {
		if ($(window).scrollTop() > offset.top + divWidth) {
			$(".scroll-sec").addClass('right-fixed');
			$("#apply-scroll").addClass('apply-fixed');
			$("#apply-scroll2").addClass('apply-fixed');
			$("#apply-scroll3").addClass('apply-fixed');

			
		

			if ($(window).scrollTop() > endOffset.top - 850) {
				$(".scroll-sec").removeClass('right-fixed');
				$("#apply-scroll").removeClass('apply-fixed');
				

								
			}

			if ($(window).scrollTop() > endOffset.top - 1000) {
				$("#apply-scroll2").removeClass('apply-fixed');
				$("#apply-scroll3").removeClass('apply-fixed');

								
			}

			
		}

		else {

			$(".scroll-sec").removeClass('right-fixed');
				$("#apply-scroll").removeClass('apply-fixed');
				$("#apply-scroll2").removeClass('apply-fixed');
				$("#apply-scroll3").removeClass('apply-fixed');


		}
				
				
		});
});