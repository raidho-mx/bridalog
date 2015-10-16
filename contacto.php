<?php
/*
Bridalog Website
Contact Template
*/
?>

<?php include 'inc/header.php' ?>

<div class="image_cover" style="background-image: url('lib/img/cover-back-contacto.png')">
	<div class="wrap">
		<div class="cover_text">
			<h1>Hola! Cuéntanos cómo podemos ayudarte en Bridalog !</h1>
		</div>
	</div>
</div>

<div class="wrap">
	<div class="contact_form inner_section_pad centered_section thin_section">
		<h4 class="asap">Cuéntanos, ¿qué podemos hacer por ti?</h4>
		<form action="">
		<div class="two_col_grid basic_grid group">

			<div>
				<input class="required" name="contacto_nombre" type="text" placeholder="Tu Nombre">
				<input class="required" name="contacto_correo" type="text" placeholder="Tu Correo">
				<select class="required" name="contacto_asunto">
					<option value="default">Elige un asunto</option>
					<option value="soporte">Requiero ayuda para usar su sitio</option>
					<option value="proveedor">Me interesa ser proveedor</option>
					<option value="eventos">Requiero información de sus eventos</option>
					<option value="sugerencias">Tengo una sugerencia sobre el portal</option>
				</select>
			</div>
			<div>
				<textarea class="required" name="contacto_mensaje" id="" cols="30" rows="10" placeholder="¿Cómo podemos ayudarte?"></textarea>
			</div>

		</div>
		<input type="submit" name="submit" value="Enviar">
		</form>
		<p class="disclaimer asap gray_medium">Campos marcados en rosa son obligatorios. Al dar click en ‘Enviar tus datos’ indicas que conoces nuestras <strong><a href="#">Políticas de Privacidad</a></strong>.</p>
	</div>
</div> <!--Wrap -->

<?php include 'inc/social_media.php' ?>

<div class="wrap">
	<div class="centered_section thin_section">
		<div>
			<p class="small_title">Durante los últimos 3 años, <strong>Bridalog</strong> ha crecido como una de las opciones más confiables para encontrar y dar a conocer servicios premium para bodas. <strong>Bridalog</strong> funciona gracias a su comunidad de novias participativas, así como su red selecta de proveedores líderes en sus áreas.</p>
		</div>
		<div class="squared_btns">
			<ul>
				<li><a href="#">Conoce la historia detrás de Bridalog</a></li>
				<li><a href="#">Descubre los servicios de Bridalog</a></li>
			</ul>
		</div>
	</div>
</div> <!--Wrap -->

<?php include 'inc/footer.php' ?>
