jQuery(document).ready(function($){
	if($(window).width() >= 750) {
		$('.youku-list').slimScroll({
			color: '#eee',
			height: '300px'
		});
	}
	
	index = 0;
	total = $('.youku-link').length;
	$('.youku-link').eq(index).removeClass('hidden-xs').addClass('active');
	show_hide_arraw(index,total);
	
	$('.glyphicon-chevron-left').click(function(){
		$('.youku-link').eq(index).addClass('hidden-xs');
		index = index - 1;
		$('.youku-link').eq(index).removeClass('hidden-xs');
		show_hide_arraw(index,total);
	});
	$('.glyphicon-chevron-right').click(function(){
		$('.youku-link').eq(index).addClass('hidden-xs');
		index = index + 1;
		$('.youku-link').eq(index).removeClass('hidden-xs');
		show_hide_arraw(index,total);
	});
	
	$('.youku-link').click(function() {
		$(this).addClass('active');
	});
	
	function show_hide_arraw(index, total) {
		if(index == 0){
			$('.glyphicon-chevron-left').hide();
		} else {
			$('.glyphicon-chevron-left').show();
		}
		if(index == total - 1) {
			$('.glyphicon-chevron-right').hide();
		} else {
			$('.glyphicon-chevron-right').show();
		}
	}
});