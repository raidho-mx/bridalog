<?php
/*
Bridalog Website
Footer Template
*/
?>

		<footer id="footer">
			<div id="bottom_menu">
				<div class="wrap">

					<div class="branding">
						<a class="habano regular_title" href="#">Bridalog</a>
						<span class="small_p">Todos los derechos reservados</span>
					</div>

					<a class="toggleMenu" href="#">Menu</a>
					<ul class="nav">
						<li><a href="#">Proveedores</a>
						<li><a href="#">Servicios</a></li>
						<li><a href="#">Magazine</a></li>
						<li><a href="#">Acerca</a></li>
						<li><a href="#">Contacto</a></li>
						<li><a href="#">Acceder</a></li>
					</ul>

				</div>
			</div>
		</footer>

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="lib/js/scripts.js"></script>
	<script src="lib/js/jquery-ui.js"></script>
	<script src="lib/js/masonry.pkgd.js"></script>
	<script src="lib/js/imagesloaded.pkgd.js"></script>

	<script type="text/javascript">
		// Masonry activation + imagesLoaded with jQuery
		var $container = $('.masonry');
			// initialize Masonry after all images have loaded
			$container.imagesLoaded( function() {
				$container.masonry({
				columnWidth: '.masonry_column',
				gutter: '.masonry_gutter',
				itemSelector: '.masonry_item'
			});
		});
	</script>

	</body>

</html>
