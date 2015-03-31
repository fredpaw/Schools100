// starting the script on page load
jQuery(document).ready(function($){
	xOffset = 10;
	yOffset = 30;
	$("a.preview").hover(function(e){
		$("body").append("<div id='preview'><img src='"+ this.href +"' alt='Image preview' /></div>");
		var xx = e.originalEvent.x || e.originalEvent.layerX || 0; 
		var yy = e.originalEvent.y || e.originalEvent.layerY || 0; 
		$("#preview")
			.css("top",(xOffset) + "px")
			.css("left",(yOffset) + "px")
			.fadeIn("fast");
    },
	function(){
		this.title = this.t;	
		$("#preview").remove();
    });	
	$("a.preview").mousemove(function(e){
		$("#preview")
			.css("top",(e.pageY - xOffset) + "px")
			.css("left",(e.pageX + yOffset) + "px");
	});
});