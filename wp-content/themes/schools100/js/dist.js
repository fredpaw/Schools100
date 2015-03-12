jQuery(document).ready(function($){
	$('.school-distribution ul li')
		.mouseenter(function(){
			index_new = $(this).index() + 1;
			$(".school-map p").addClass('hidden');
			$(".school-map p:nth-child(" + index_new + ")").removeClass('hidden');
		})
		.mouseleave(function(){
			index_old = $(".school-distribution ul .active").index() + 1;
			$(".school-map p").addClass('hidden');
			$(".school-map p:nth-child(" + index_old + ")").removeClass('hidden');
		});
});