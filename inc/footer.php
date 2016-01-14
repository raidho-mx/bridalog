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

					<ul class="nav desktop_menu">
						<li><a href="proveedores.php">Proveedores</a>
						<li><a href="servicios.php">Servicios</a></li>
						<li><a href="magazine.php">Magazine</a></li>
						<li><a href="acerca.php">Acerca</a></li>
						<li><a href="contacto.php">Contacto</a></li>
						<li><a href="login.php">Acceder</a></li>
					</ul>

				</div>
			</div>
		</footer>

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="lib/js/scripts.js"></script>
	<script src="lib/js/masonry.pkgd.js"></script>
	<script src="lib/js/imagesloaded.pkgd.js"></script>
	<script src="lib/js/jquery.sidr.min.js"></script>
	<script src="lib/js/unslider-min.js"></script>
	<script src="lib/js/velocity.min.js"></script>
	<script src="lib/js/jquery-ui.js"></script>

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

	<?php include 'inc/mobile_menus.php'; ?>

	</body>

</html>
