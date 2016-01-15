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

		<a class="mobile_nav_toggl" href="#sidr">Menu</a>
		<a class="mobile_cats_toggl" href="#sidr_cats">Proveedores </a>
		<ul class="nav desktop_menu">
			<li><a id="icon_grid_toggl" href="#">Proveedores</a>
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
		<?php include 'inc/menu_iconos.php'; ?>
	</div>
</div>

<?php
	$curr_page_name = str_replace(".php", "", basename($_SERVER['PHP_SELF']));
	if ($curr_page_name != 'index') {
		include 'inc/breadcrumbs_search.php';
	};
?>
