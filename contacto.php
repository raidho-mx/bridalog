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
	<div class="contact_form inner_section_pad centered_section">
		<h4 class="asap">Cuéntanos, ¿qué podemos hacer por ti?</h4>
		<form action="">
		<div class="two_col_grid basic_grid group">

			<div>
				<input name="contacto_nombre" type="text" placeholder="Tu Nombre">
				<input name="contacto_correo" type="text" placeholder="Tu Correo">
				<select name="contacto_asunto">
					<option value="default">Elige un asunto</option>
					<option value="soporte">Requiero ayuda para usar su sitio</option>
					<option value="proveedor">Me interesa ser proveedor</option>
					<option value="eventos">Requiero información de sus eventos</option>
					<option value="sugerencias">Tengo una sugerencia sobre el portal</option>
				</select>
			</div>
			<div>
				<textarea name="contacto_mensaje" id="" cols="30" rows="10" placeholder="¿Cómo podemos ayudarte?"></textarea>
			</div>

		</div>
		<input type="submit" name="submit" value="Enviar">
		</form>
		<p class="disclaimer asap gray_medium">Campos marcados en rosa son obligatorios. Al dar click en ‘Enviar tus datos’ indicas que conoces nuestras <strong><a href="#">Políticas de Privacidad</a></strong>.</p>
	</div>
</div> <!--Wrap -->

<div class="white_bg full_width centered_section">
	<div class="wrap">
		<h3 class="asap">Bridalog en Redes Sociales</h3>
		<ul class="insta_feed basic_grid four_col_grid">
			<li><a href="#"><img src="http://lorempixel.com/640/640/city" alt=""></a></li>
			<li><a href="#"><img src="http://lorempixel.com/640/640/city" alt=""></a></li>
			<li><a href="#"><img src="http://lorempixel.com/640/640/city" alt=""></a></li>
			<li><a href="#"><img src="http://lorempixel.com/640/640/city" alt=""></a></li>
		</ul>
		<ul class="share_btns">
			<li>
			<a class="btn_facebook" href="#"><span class="font_awesome"></span> Bridalog</a></li><li>
			<a class="btn_instagram" href="#"><span class="font_awesome"></span> @bridalog</a></li><li>
			<a class="btn_pinterest" href="#"><span class="font_awesome"></span> Bridalog</a></li>
		</ul>
	</div><!--Wrap -->
</div>

<div class="wrap centered_section">
	<div>
		<p class="small_title">Durante los últimos 3 años, <strong>Bridalog</strong> ha crecido como una de las opciones más confiables para encontrar y dar a conocer servicios premium para bodas. <strong>Bridalog</strong> funciona gracias a su comunidad de novias participativas, así como su red selecta de proveedores líderes en sus áreas.</p>
	</div>
	<div class="squared_btn">
		<a href="#">Conoce la historia detrás de Bridalog</a>
		<a href="#">Descubre los servicios de Bridalog</a>
	</div>
</div> <!--Wrap -->

<?php include 'inc/footer.php' ?>
