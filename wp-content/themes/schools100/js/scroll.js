jQuery(document).ready(function($){
	//page initial
	var index = 0;
	var total = $(".post_type_date").length;
	var display_num = 5;
	if ($(window).width() >= 970) {
		display_num = 5;
	} else if ($(window).width() < 970 && $(window).width() >= 750) {
		display_num = 4;
	} else {
		display_num = 2;
	}
	
	//URL identification
	var url = $(location).attr('search');
	var new_url = url.substring(1);
	if (new_url != '') {
		var reg = new RegExp(new_url);
		for ( var i = 0; i < total ; i++) {
			if (reg.test($('.post_type_date a').eq(i).attr('href'))) {
				$('.post_type_date a').eq(i).addClass('active');
				var j = 0;
				while(j < total) {
					if (j + display_num > i) {
						index = j;
						break;
					}
					j = j + display_num;
				}
				break;
			}
		}
	}
	
	//show elements
	show_hide_direction(index, total, display_num);
	show_post_date(index, display_num);
	
	//page resizing
	$(window).resize(function(){
		if ($(window).width() >= 970) {
			display_num = 5;
		} else if ($(window).width() < 970 && $(window).width() >= 750) {
			display_num = 4;
		} else {
			display_num = 2;
		}
		show_post_date(index, display_num);
	});
	
	//click function
	$(".post_type_direction_left").click(function(){
		index = index - display_num;
		if (index < 0) index = 0;
		show_post_date(index, display_num);
		show_hide_direction(index, total, display_num);
		return false;
	}); 
	$(".post_type_direction_right").click(function(){
		index = index + display_num;
		show_post_date(index, display_num);
		show_hide_direction(index, total, display_num);
		return false;
	});
	
	//function part
	function show_post_date(index, display_num){
		$(".post_type_date").addClass("hidden");
		for ( var i = index; i < index + display_num; i++) {
			$(".post_type_date").eq(i).removeClass("hidden");
		}
	}
	
	function show_hide_direction(index, total, display_num) {
		var index = index;
		var total = total;
		var display_num = display_num;
		if (index == 0) {
			$(".post_type_direction_left").hide();
		} else {
			$(".post_type_direction_left").show();
		}
		if (index + display_num >= total) {
			$(".post_type_direction_right").hide();
		} else {
			$(".post_type_direction_right").show();
		}
	}
});