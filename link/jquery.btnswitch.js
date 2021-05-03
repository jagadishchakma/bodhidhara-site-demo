$(document).ready(function(){
	$(".subscribed").click(function(){
		$(this).removeClass('subscribed');
		$(this).addClass('unsubscribed');
		$.post("cookie.php",
		{
			name: "bodhidharaSubscribed",
			value: "subscribed"
		},
		function(status){
			$("#android-newsfeed").addClass('tgl-sw-android-checked tgl-sw-active');	
		});
	});
	
	$(".unsubscribed").click(function(){
		$(this).removeClass('unsubscribed');
		$(this).addClass('subscribed');
		$.post("cookie.php",
		{
			remove: "bodhidharaSubscribed"
		},
		function(status){
			$("#android-newsfeed").removeClass('tgl-sw-android-checked tgl-sw-active');	
		});
	});
});