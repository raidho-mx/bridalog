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
		side: 'right',
		displace: true
	});

});
