<?php
/*
Bridalog Website
Contact Template
*/
?>

<?php include 'inc/header.php' ?>

<div class="image_cover_light" style="background-image: url('lib/img/cover-back-contacto.png')">
	<div class="cover_text">
		<h1>Bridalog conecta a <em>los más selectos proveedores</em> con <em>las novias más exigentes</em>.</h1>
	</div>
</div>

<div class="wrap inner_section_pad">
	<div>
		<div class="thin_section center_titles">
			<h3 class="asap">Una Suite de Servicios que tus clientas te agradecerán.</h3>
		</div>
		<div>
			<ul class="three_col_grid basic_grid">
				<li>
					<img src="lib/img/sample_imgs/06servicios/_Servicios1.jpg" alt="">
					<h4 class="green">Catálgo Online</h4>
					<p class="asap">Publica tu perfil y productos en el catálogo más atractivo de su género. <strong>En nuestro catálogo es más importante calidad que cantidad</strong>, así que puedes estar seguro de que tu información sólo se encontrará conviviendo en listados de los más destacados proveedores para bodas.</p>
				</li>
				<li>
					<img src="lib/img/sample_imgs/06servicios/_Servicios2.jpg" alt="">
					<h4 class="green">Contenido Exclusivo</h4>
					<p class="asap">Nosotros nos encargamos de generar contenido por ti, para que siempre tengas una cara fresca que mostrar a tus clientas. Generamos diferentes publicaciones y dinámicas en <strong>redes sociales</strong>; notas destacadas en <strong>nuestro magazine</strong>; e incluso <strong>videodocumentales</strong> de tu marca.</p>
				</li>
				<li>
					<img src="lib/img/sample_imgs/06servicios/_Servicios3.jpg" alt="">
					<h4 class="green">Eventos Especiales</h4>
					<p class="asap">En Bridalog <strong>sabemos que lo más importante son tus clientas y lo que ellas tienen qué decir</strong>. Por eso nos aseguramos de generar <strong>eventos en los que puedas conocerlas en persona</strong>, y dinámicas entretenidas que les permiten a ellas llevarse premios y nuevos conocimientos sobre tus servicios.</p>
				</li>
			</ul>
		</div>
	</div>
</div> <!--Wrap -->

<div class="pull_bottom_container">
	<?php include 'inc/prov_logos.php' ?>
</div>

<div class="gray_bg full_width">
	<div class="wrap center_titles">
		<h1 class="habano">Caso de Estudio: Bermellón en Bridalog</h1>

		<div class="outer_unslider_container">
		<div id="unslider_slider">
			<ul class="services_slider">
				<li class="unslider_slider_slide">
						<div class="description">
							<h4>Presencia en un catálogo web pensado para recopilar sólo los proveedores más destacados y reconocidos.</h4>
							<p class="asap">El catálogo de Bridalog es una mezcla ideal entre calidad y cantidad. Solamente trabajamos con proveedores que nos emocionan tanto como las novias que nos siguen. Con su capacidad totalmente responsiva, nuestros proveedores tienen acceso a listados en todo tipo de dispositivos.</p>
						</div>
						<div>
								<img src="lib/img/sample_imgs/06servicios/_Servicios1.jpg" alt="">
						</div>
				</li>

				<li class="unslider_slider_slide">
					<div class="description">
						<h4>Segunda Diapositiva</h4>
						<p class="asap">Párrafo descriptivo.</p>
					</div>
					<div>
							<img src="lib/img/sample_imgs/06servicios/_Servicios2.jpg" alt="">
					</div>
				</li>

				<li class="unslider_slider_slide">
					<div class="description">
						<h4>Segunda Diapositiva</h4>
						<p class="asap">Párrafo descriptivo.</p>
					</div>
					<div>
							<img src="lib/img/sample_imgs/06servicios/_Servicios3.jpg" alt="">
					</div>
				</li>

			</ul>
		</div> <!-- Slider Termina -->

		<!-- Flechas de navegación custom -->
		<div class="prod_nav">
			<a id="unslider_arrow_left" href="" class="prod_left"><span class="font_awesome"></span></a>
			<a id="unslider_arrow_right" href="" class="prod_right"><span class="font_awesome"></span></a>
		</div>
		</div> <!-- Slider Outer Container -->

	</div>
</div>

<div class="wrap">
	<div class="center_titles">
		<h3 class="asap">Membresías para Proveedores</h3>
	</div>
	<div class="pricing_table group">
		<div class="base">
			<h2 class="habano">Membresía<br> Base</h2>
			<ul class="asap">
				<li>Un año de presencia en el catálogo</li>
				<li>Posts ilimitados en redes sociales</li>
				<li>Presencia como proveedor del mes</li>
				<li class="feat_off">Evento Bridalog a la medida</li>
				<li class="feat_off">Documental Bridalog Presenta</li>
			</ul>
		</div>
		<div class="premium">
			<h2 class="habano">Membresía<br> Premium</h2>
			<ul class="asap">
				<li>Un año de presencia en el catálogo</li>
				<li>Posts ilimitados en redes sociales</li>
				<li>Presencia como proveedor del mes</li>
				<li>Evento Bridalog a la medida</li>
				<li class="feat_off">Documental Bridalog Presenta</li>
			</ul>
		</div>
		<div class="platino">
			<h2 class="habano">Membresía<br> Platino</h2>
			<ul class="asap">
				<li>Un año de presencia en el catálogo</li>
				<li>Posts ilimitados en redes sociales</li>
				<li>Presencia como proveedor del mes</li>
				<li>Evento Bridalog a la medida</li>
				<li>Documental Bridalog Presenta</li>
			</ul>
		</div>
	</div>

	<div class="contact_form inner_section_pad centered_section thin_section">
		<h4 class="asap">Empieza el proceso de inscripción al catálogo</h4>
		<form action="">
		<div class="two_col_grid basic_grid group">

			<div>
				<input class="required" name="contacto_nombre" type="text" placeholder="Tu Nombre">
				<input class="required" name="contacto_correo" type="text" placeholder="Tu Correo">
				<input class="required" name="giro_negocio" type="text" placeholder="Giro del Negocio">
			</div>
			<div>
				<input name="sitio_web" type="text" placeholder="Sitio web">
				<input name="red_social" type="text" placeholder="Facebook (o principal red social)">
				<input class="required" name="ciudad_sede" type="text" placeholder="Ciudad de Sede">
			</div>

		</div>
		<input type="submit" name="submit" value="Enviar">
		</form>
		<p class="disclaimer asap gray_medium">Campos marcados en rosa son obligatorios. Al dar click en ‘Enviar tus datos’ indicas que conoces nuestras <strong><a href="#">Políticas de Privacidad</a></strong>.</p>
	</div>

</div> <!--Wrap -->

<?php include 'inc/footer.php' ?>
