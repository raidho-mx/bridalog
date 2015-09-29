// Scripts para el sitio de Bridalog
// Raidho, 2015

// Funcionalidad de dropdown en el menú superior
$(document).ready(function() {
	$(".toggleMenu").css("display", "none");
	$(".nav li").hover(function() {
	 	$(this).addClass('hover');
	}, function() {
		$(this).removeClass('hover');
	});
});

// Icon Grid: Categorías en el catálogo
$(document).ready(function() {
	$(".icon_grid li:has(a)").click(function() {
		window.location = $("a:first",this).attr("href");
	});
});
