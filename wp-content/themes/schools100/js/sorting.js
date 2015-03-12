jQuery(document).ready(function($) {
	$('#name-order-down').click(function() {
		var search_string = window.location.search;
		var replace_value_array = new Array();
		replace_value_array['sort'] = 'title';
		if($(location).attr('search') == '' || $(location).attr('search').match('sort=fee')) {
			replace_value_array['order'] = 'desc';
		} else {
			replace_value_array['order'] = 'asc';
		}
		var new_url = changeURLSearchParameter(replace_value_array, $(location).attr('href'));
		window.location.href = new_url;
	});
	$('#name-order-up').click(function() {
		var search_string = window.location.search;
		var replace_value_array = new Array();
		replace_value_array['sort'] = 'title';
		replace_value_array['order'] = 'desc';
		var new_url = changeURLSearchParameter(replace_value_array, $(location).attr('href'));
		window.location.href = new_url;
	});
	$('#fee-order-down').click(function() {
		var search_string = window.location.search;
		var replace_value_array = new Array();
		replace_value_array['sort'] = 'fee';
		if($(location).attr('search') == '' || $(location).attr('search').match('sort=title')) {
			replace_value_array['order'] = 'desc';
		} else {
			replace_value_array['order'] = 'asc';
		}
		var new_url = changeURLSearchParameter(replace_value_array, $(location).attr('href'));
		window.location.href = new_url;
	});
	$('#fee-order-up').click(function() {
		var search_string = window.location.search;
		var replace_value_array = new Array();
		replace_value_array['sort'] = 'fee';
		replace_value_array['order'] = 'desc';
		var new_url = changeURLSearchParameter(replace_value_array, $(location).attr('href'));
		window.location.href = new_url;
	});
	
	if(window.location.href.match('sort=title&order=asc')) {
		$('#name-order-up').show();
		$('#name-order-down').hide();
		$('#fee-order-up').hide();
		$('#fee-order-down').show();
	} else if (window.location.href.match('sort=title&order=desc')) {
		$('#name-order-up').hide();
		$('#name-order-down').show();
		$('#fee-order-up').hide();
		$('#fee-order-down').show();
	} else if (window.location.href.match('sort=fee&order=asc')) {
		$('#name-order-up').hide();
		$('#name-order-down').show();
		$('#fee-order-up').show();
		$('#fee-order-down').hide();
	} else if (window.location.href.match('sort=fee&order=desc')) {
		$('#name-order-up').hide();
		$('#name-order-down').show();
		$('#fee-order-up').hide();
		$('#fee-order-down').show();
	} else {
		$('#name-order-up').hide();
		$('#name-order-down').show();
		$('#fee-order-up').hide();
		$('#fee-order-down').show();
	}
});

function changeURLSearchParameter(replace_value_array, search_string){
	var new_search = search_string;
	for(var key in replace_value_array){
		var pattern = key + '=([^&]*)';
		var replace = key + '=' + replace_value_array[key];
		if(new_search.match(pattern)) {
			var tmp = '/(' + key + '=)([^&]*)/gi';
			new_search = new_search.replace(eval(tmp), replace);
		} else {
			if(new_search.match('[\?]')) {
				new_search = new_search + '&' + replace;
			} else {
				new_search = new_search + '?' + replace;
			}
		}
	}
	return new_search;
}

