jQuery(document).ready(function($){
	if(window.location.href.match('location')) {
		sIndex = getSearchIndex(window.location.search);
		$(".school-map p").addClass('hidden');
		$(".school-map p:nth-child(" + sIndex + ")").removeClass('hidden');
		$(".school-distribution ul li").removeClass("active");
		$(".school-distribution ul li:nth-child(" + (sIndex - 1) + ")").addClass("active");
	}
	$('.school-distribution ul li')
	.mouseenter(function(){
		index_new = $(this).index() + 2;
		$(".school-map p").addClass('hidden');
		$(".school-map p:nth-child(" + index_new + ")").removeClass('hidden');
	})
	.mouseleave(function(){
		index_old = getSearchIndex(window.location.search);
		$(".school-map p").addClass('hidden');
		$(".school-map p:nth-child(" + index_old + ")").removeClass('hidden');
	});
});

function getSearchIndex(search) {
	var strs = search.split("=");
	var sParameter = strs[1];
	switch(sParameter) {
		case 'nsw':
			return 2;
		case 'vic':
			return 3;
		case 'qld':
			return 4;
		case 'sa':
			return 5;
		case 'wa':
			return 6;
		case 'act':
			return 7;
		case 'nt':
			return 8;
		case 'tas':
			return 9;
		default:
			return 1;
	}
}