// Scripts para el sitio de Bridalog
// Raidho, 2015

$(document).ready(function() {

	//
	// Icon Grid: Categorías en el catálogo
	//

	$(".icon_grid li:has(a)").click(function() {
		window.location = $("a:first",this).attr("href");
	});

	$( "#icon_grid_toggl" ).click(function() {
		event.preventDefault();
		$( "#top_menu_toggl" ).slideToggle( "easeOutExpo", function() {
			// Animation complete.
			$( "#icon_grid_toggl" ).toggleClass( "active" );
		});
	});

	//
	// Sidr Menu
	//

	$('.mobile_nav_toggl').sidr({
		name: 'sidr',
		side: 'right',
		displace: true
	});

	$('.mobile_cats_toggl').sidr({
		name: 'sidr_cats',
		side: 'left',
		displace: false
	});

	//
	// Unslider Plugin
	//

	var slider = $('#unslider_slider').unslider({
		nav: false,
		arrows: false,
		speed: 700,
		autoplay: false
	});

	$('#unslider_arrow_left').click(function(event){
			event.preventDefault();
			slider.data('unslider').prev();
	});

	$('#unslider_arrow_right').click(function(event) {
		event.preventDefault();
		slider.data('unslider').next();
	});

	//
	// Vanilla JS for Swipe support on mobile devices
	//

	var swipe_container = document.getElementById("unslider_slider");

	var xDown = null;
	var yDown = null;

	function handleTouchStart(evt) {
		xDown = evt.touches[0].clientX;
		yDown = evt.touches[0].clientY;
	}

	function handleTouchMove(evt) {
		if ( ! xDown || ! yDown ) {
			return;
		}

		var xUp = evt.touches[0].clientX;
		var yUp = evt.touches[0].clientY;

		var xDiff = xDown - xUp;
		var yDiff = yDown - yUp;

		if ( Math.abs( xDiff ) > Math.abs( yDiff ) ) {/*most significant*/
			if ( xDiff > 0 ) {
				slider.data('unslider').next();
			} else {
				slider.data('unslider').prev();
			}
		} else {
			if ( yDiff > 0 ) {
				/* */
			} else {
				/* */
			}
		}
		/* reset values */
		xDown = null;
		yDown = null;
	}

	swipe_container.addEventListener('touchstart', handleTouchStart, false);
	swipe_container.addEventListener('touchmove', handleTouchMove, false);

});

$(window).load(function() {
	//
	// Desoslide para galerías de Producto Individual
	//

	$('#deso_slideshow').desoSlide({
		thumbs: $('.product_thumbs ul li > a'),
		auto: {
			start: false
		},
		first: 0,
		interval: 1000,
		effect: {
			provider: 'animate',
			name: 'fade'
			// 'animate': 'fade', 'flipX', 'flipY', 'fun', 'light', 'roll', 'rotate', 'rotateBig', 'sideFade', 's
		},
		controls: {
			show: false,
			keys: true
		},
		overlay: 'none'
	});
});
