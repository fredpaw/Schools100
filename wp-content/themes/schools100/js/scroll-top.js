jQuery(document).ready(function($){
	var sUserAgent = navigator.userAgent.toLowerCase();
	var bIsIpad = sUserAgent.match(/ipad/i) == "ipad";
	var bIsIphoneOs = sUserAgent.match(/iphone os/i) == "iphone os";
	var bIsMidp = sUserAgent.match(/midp/i) == "midp";
	var bIsUc7 = sUserAgent.match(/rv:1.2.3.4/i) == "rv:1.2.3.4";
	var bIsUc = sUserAgent.match(/ucweb/i) == "ucweb";
	var bIsAndroid = sUserAgent.match(/android/i) == "android";
	var bIsCE = sUserAgent.match(/windows ce/i) == "windows ce";
	var bIsWM = sUserAgent.match(/windows mobile/i) == "windows mobile";
	if (bIsIpad || bIsIphoneOs || bIsMidp || bIsUc7 || bIsUc || bIsAndroid || bIsCE || bIsWM) {
		$('#scroll-up').addClass('hidden');
	} else {
		if ($(window).scrollTop()>100){
			$("#scroll-up").show();
		}
		else
		{
			$("#scroll-up").hide();
		}
		$(window).scroll(function () {
			if ($(window).scrollTop()>100){
				$("#scroll-up").fadeIn(1500);
			}
			else
			{
				$("#scroll-up").fadeOut(1500);
			}
		});

		$('#scroll-up span').click(function() {
			$('body,html').animate({scrollTop:0},1000);
            return false;
		});
	}
});