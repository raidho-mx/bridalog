<?php
/*
Bridalog Website
Top Navigation Template
*/
?>

<div id="top_menu">
	<div class="wrap">

		<div class="branding">
			<a class="habano regular_title" href="index.php">Bridalog</a>
			<!-- <span class="small_p">El <strong>catálogo</strong> para bodas hecho <strong>a la medida</strong></span> -->
		</div>

		<a class="toggleMenu" href="#">Menu</a>
		<ul class="nav">
			<li><a id="icon_grid_toggl" href="#">Cats</a>
			<li><a href="proveedores.php">Proveedores</a>
			<li><a href="proveedor.php">S.-Prov.</a>
			<li><a href="producto.php">S.-Prod.</a>
			<li><a href="servicios.php">Servicios</a></li>
			<li><a href="magazine.php">Mag</a></li>
			<li><a href="magazine-single.php">S-Mag.</a></li>
			<li><a href="acerca.php">Acerca</a></li>
			<li><a href="contacto.php">Contacto</a></li>
			<li><a href="login.php">Acceder</a></li>
		</ul>

	</div>
</div>

<div id="top_menu_toggl">
	<!-- Listado de categorías (íconos) -->
	<div class="wrap">
		<?php include 'inc/menu_iconos.php' ?>
	</div>
</div>

<div class="wrap">
	<div id="breadcrumbs_search_combo">
		<div id="breadcrumbs">
			<ul>
				<li class="habano"><a href="#">B</a></li>
				<li><a href="#">Inicio</a></li>
				<li><a href="#">Búsqueda</a></li>
				<li><a href="#">Vestidos</a></li>
			</ul>
		</div>
		<div id="search_bar">
			<form action=""><input type="text" placeholder="Busca Arreglos de Flores"></form>
			<img src="http://lorempixel.com/80/54/city" alt="">
		</div>
	</div>
</div>
