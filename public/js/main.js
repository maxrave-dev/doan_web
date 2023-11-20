var $grid = $('.collection-list').isotope({
	// options
});
// filter items on button click
$('.filter-button-group').on( 'click', 'button', function() {
	var filterValue = $(this).attr('data-filter');
	resetFilterBtns();
	$(this).addClass('active-filter-btn');
	$grid.isotope({ filter: filterValue });
});

var filterBtns = $('.filter-button-group').find('button');
function resetFilterBtns(){
	filterBtns.each(function(){
		$(this).removeClass('active-filter-btn');
	});
}
// owl carousel
var nextIcon = '<svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24"><path d="M504-480 320-664l56-56 240 240-240 240-56-56 184-184Z"/></svg>';
var prevIcon = '<svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24"><path d="M560-240 320-480l240-240 56 56-184 184 184 184-56 56Z"/></svg>';
loopSlide = function() {
	$(".owl-carousel").owlCarousel({
		center: true, // Center item
		items: 4, // Number of items to display in the carousel
		loop: true, // Infinite loop
		autoplay: true, // Autoplay the slideshow
		autoplayTimeout: 3000, // Autoplay interval in milliseconds
		autoplayHoverPause: true, // Pause autoplay on hover
		nav: true, // Show navigation buttons
		dots: true, // Show dots pagination
		navText: [prevIcon, nextIcon], // Icon for navigation buttons
		margin: 30, // Spacing between each item
		dotsEach: 7,
		responsiveClass: true,
		responsive: {
			0: {
				items: 1,
				dotsEach: 7,
			},
			500: {
				items: 2,
				dotsEach: 4,
			},
			800: {
				items: 3,
				dotsEach: 4,
			},
			1200: {
				items: 5,
				dotsEach: 2,
			}
		}
	})
};
loopSlide();
(function ($) {
	"use strict";
	// jQuery MeanMenu
	jQuery('nav#dropdown').meanmenu();
	//menu a active jquery
	var pgurl = window.location.href.substr(window.location.href
		.lastIndexOf("/") + 1);
	$("ul li a").each(function () {
		if ($(this).attr("href") == pgurl || $(this).attr("href") == '')
			$(this).addClass("active");
		$('header ul li ul li a.active').parent('li').addClass('parent-li');
		$('header ul li ul li.parent-li').parent('ul').addClass('parent-ul');
		$('header ul li ul.parent-ul').parent('li').addClass('parent-active');
	})
	//search bar border color
	$('.middel-top .center').on('click', function () {
		$('.middel-top .center').toggleClass('bordercolor');
	});
	//color select jquery
	$('.color-select > span').on('click', function () {
		$('.color-select > span').toggleClass('outline');
		$(this).addClass("outline").siblings().removeClass("outline");
	});
	/*----------------------------
	 nivoSlider active
	------------------------------ */
	$('#mainSlider').nivoSlider({
		directionNav: true,
		animSpeed: 500,
		effect: 'random',
		slices: 18,
		pauseTime: 5000,
		pauseOnHover: false,
		controlNav: true,
		prevText: '<i class="mdi mdi-chevron-left"></i>',
		nextText: '<i class="mdi mdi-chevron-right"></i>'
	});
	/*----------------------------
	 plus-minus-button
	------------------------------ */
	$(".qtybutton").on("click", function () {
		var $button = $(this);
		var oldValue = $button.parent().find("input").val();
		if ($button.text() == "+") {
			var newVal = parseFloat(oldValue) + 1;
		} else {
			// Don't allow decrementing below zero
			if (oldValue > 1) {
				var newVal = parseFloat(oldValue) - 1;
			} else {
				newVal = 1;
			}
		}
		$button.parent().find("input").val(newVal);
	});
	/*----------------------------
	 price-slider active
	------------------------------ */
	// $("#slider-range").slider({
	// 	range: true,
	// 	min: 1,
	// 	max: 50,
	// 	values: [5, 15],
	// 	slide: function (event, ui) {
	// 		$("#amount1").val(ui.values[0] + " đến " + ui.values[1] + " Triệu ");
	// 		$("#amount2").val(ui.values[0] + "-" + ui.values[1]);
	// 	}
	// });
	// $("#amount1").val($("#slider-range").slider("values", 0) +
	// 	" đến " + $("#slider-range").slider("values", 1) + " Triệu");

	// $("#amount2").val($("#slider-range").slider("values", 0) +
	// 	"-" + $("#slider-range").slider("values", 1));
	/*--------------------------
	 scrollUp
	---------------------------- */

	/*----------------------------
 price-slider active
------------------------------ */  
$( "#slider-range" ).slider({
	range: true,
	min: 0,
	max: 50,
	values: [ 0, 15 ],
	slide: function( event, ui ) {
	$( "#amount" ).val($("#slider-range").slider("values", 0) +	" đến " + $("#slider-range").slider("values", 1) + " Triệu");
	$("#amount2").val(ui.values[0] + "-" + ui.values[1]);
}
});
$( "#amount" ).val($("#slider-range").slider("values", 0) + " đến " + $("#slider-range").slider("values", 1) + " Triệu");
$("#amount2").val($("#slider-range").slider("values", 0) +	"-" + $("#slider-range").slider("values", 1));
/*--------------------------
scrollUp
---------------------------- */	

	$.scrollUp({
		scrollText: '<i class="fa-solid fa-arrow-alt-circle-up"></i>',
		easingType: 'linear',
		scrollSpeed: 900,
		animation: 'fade'
	});
	/*--------------------------
	 // simpleLens
	 ---------------------------- */
	$('.simpleLens-image').simpleLens({

	});

})(jQuery);

