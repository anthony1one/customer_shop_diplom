$(document).ready(function() {
	$("#dropdown-goods-btn").mouseenter(function() {
		$("#dropdown-goods").show('fast');
	});

	$("#dropdown-goods").mouseleave(function() { 
		$("#dropdown-goods").hide('fast');
	});
});

$("#prev_main_img").click(function(){
	$("#main_img").fadeOut('fast', function() {
		$(this).attr('src', 'img/main/main-1.png').fadeIn('fast');
	});
	return false;
});

$("#next_main_img").click(function(){
	$("#main_img").fadeOut('fast', function() {
		$(this).attr('src', 'img/main/main-2.png').fadeIn('fast');
	});
	return false;
});