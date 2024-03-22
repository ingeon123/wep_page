jQuery(function($) {

	var bw = $("body").width();
	$(window).resize(function() {
		bw = $("body").width(); 
	});	

    if(bw >= 767){

	$(".wb-gnb li .first").mouseenter(function() {

		$(".wb-gnb li").addClass("active");
		$('.wb-gnb-bg').slideDown();

	});
	$(".wb-gnb-bg").mouseleave(function() {
	 
		$(".wb-gnb li").removeClass("active");
		$('.wb-gnb-bg').slideUp();
	});


	}else {

	$(".wb-gnb li .first").click(function() {
	$(this).parent().toggleClass("active").siblings().removeClass("active");
	});

	}



		$(".mobile_top_bars").click(function(e) {
		e.preventDefault(); 

			$(".wb-gnb-wrap").animate({left:0},'300');
			$(".wb-mobile-close").show();
 
		});


		$(".wb-mobile-close,.wb-close-btn").click(function(e) {
			$(".wb-gnb-wrap").animate({left:"-100%"},'300'); 
			$(".wb-mobile-close").hide();
		});



});
