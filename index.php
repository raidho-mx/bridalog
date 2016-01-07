<?php
/*
Bridalog Website
Index Template
*/
?>

<?php include 'inc/header.php' ?>
<div id="home">

<div class="image_cover_light" style="background-image: url('lib/img/cover-back-contacto.png')">
		<div class="cover_text">
			<h1>Bridalog conecta a <em>los más selectos proveedores</em> con <em>las novias más exigentes</em>.</h1>
		</div>
</div>

<div id="search_banner" class="full_width">
	<div class="wrap">
		<h2 class="habano">Busca en el Catálogo</h2>
		<form action=""><input type="text"," name="search"," placeholder="Busca postres"><input type="submit"," name="submit"," value="Buscar"></form>
	</div>
</div>

<div class="wrap">

	<div class="center_titles">
		<h1 class="habano">Nuestros Proveedores <br/> Destacados</h1>
		<?php include 'inc/prov_main_list.php' ?>
	</div>

	<!-- Listado de categorías (íconos) -->
	<div class="center_titles">
		<h3 class="asap blue">Categorías en el Catálogo</h3>
		<?php include 'inc/menu_iconos.php' ?>
	</div>

	<!-- Extractos del Magazine -->
	<div class="center_titles home_mag group">
		<h3 class="asap blue">Desde el Magazine de Bridalog</h3>
		<div class="home_mag_slider">
			<div class="home_mag_slider_slide" style="background-image: url(lib/img/home_mag_feat.jpg)">
				<div class="prod_nav">
					<a href="" class="prod_left"><span class="font_awesome"></span></a>
					<a href="" class="prod_right"><span class="font_awesome"></span></a>
				</div>
				<div class="bottom_text">
					<p class="asap">Evento</p>
					<h3>Bridalog y O Spa presentan: Spa Day</span></h3>
				</div>
			</div>
		</div>
		<div class="home_newsletter">
			<h4 class="white">Suscríbete a Bridalog:</h4>
			<form action="">
				<input class="required" name="contacto_nombre" type="text" placeholder="Tu Nombre">
				<input class="required" name="contacto_correo" type="text" placeholder="Tu Correo">
				<input type="submit" name="submit" value="Enviar tus datos">
			</form>
			<p class="small_p asap">Al suscribirte recibirás artículos ocasionales de nuestro magazine, novedades en el catálogo y promociones especiales. Tus datos no serán compartidos con terceros.</p>
		</div>

	</div>

	<!-- Productos Destacados -->
	<div class="center_titles">
		<h3 class="asap blue">Productos Destacados de Proveedores</h3>
		<ul class="basic_grid three_col_grid prov_list_main">
			<li><a href="#">
					<img src="lib/img/sample_imgs/03Categoria/vestido.jpg" alt="" />
					<p class="asap gray_medium">Vestidos & Accesorios</p>
					<h4>Fresno por<span> Gigi Novias</span></h4>
				</a></li>
			<li><a href="#">
				<img src="lib/img/sample_imgs/03Categoria/vestido2.jpg" alt="" />
				<p class="asap gray_medium">Vestidos & Accesorios</p>
				<h4>Vestido blanco por<span> Honom Hennés</span></h4>
				</a></li>
			<li><a href="#">
				<img src="lib/img/sample_imgs/03Categoria/vestido3.jpg" alt="" />
				<p class="asap gray_medium">Vestidos & Accesorios</p>
				<h4>Kerry por<span> Gigi Novias</span></h4>
				</a></li>
		</ul>
	</div>


</div> <!--Wrap -->

<?php include 'inc/social_media.php' ?>

</div> <!-- Termina #home -->
<?php include 'inc/footer.php' ?>
