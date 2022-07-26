/*
Designer: Xatai
Site: Xpert.az
Facebook: https://fb.com/xetai.isayev
*/

$(document).ready(function(){
	
    // Technologies
	$(".t-tab").click(function() {
        $(this).addClass("active");
        $(this).siblings().removeClass("active");
        var tab = $(this).attr("data-tab");
        $(this).parents('.tech-panel').find(".tech-list-a").not(tab).css("display", "none");
        $("#" + tab).fadeIn();
    });

    // Partner slider
	var partnerslider = $('.partners-list');
	partnerslider.owlCarousel({
		loop:true,
		items: 6,
		margin: 22,
		dots: false,
		navText: false,
		nav: false,
		autoplay:true,
		autoplayTimeout:5000,
	});
	
});