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
	<div class="contact_form">
		<form action="">
			<input name="contacto_nombre" type="text" placeholder="Tu Nombre">
			<input name="contacto_correo" type="text" placeholder="Tu Correo">
			<input name="contacto_asunto" type="select" selected="Elige un Asunto">
			<textarea name="contacto_mensaje" id="" cols="30" rows="10" placeholder="¿Cómo podemos ayudarte?"></textarea>
			<input type="submit" name="submit" value="Enviar">
		</form>
		<p>Campos marcados en rosa son obligatorios. Al dar click en ‘Enviar tus datos’ indicas que conoces nuestras <strong><a href="#">Políticas de Privacidad</a></strong>.</p>
	</div>
</div> <!--Wrap -->

<div class="white_bg">
	<div class="wrap">
		<h3>Bridalog en Redes Sociales</h3>
		<ul class="insta_feed basic_grid four_col_grid">
			<li><a href="#"><img src="http://lorempixel.com/640/640/city" alt=""></a></li>
			<li><a href="#"><img src="http://lorempixel.com/640/640/city" alt=""></a></li>
			<li><a href="#"><img src="http://lorempixel.com/640/640/city" alt=""></a></li>
			<li><a href="#"><img src="http://lorempixel.com/640/640/city" alt=""></a></li>
		</ul>
		<ul class="share_btns">
			<li><a href="#"><span>f</span> Bridalog</a></li>
			<li><a href="#"><span>i</span> @bridalog</a></li>
			<li><a href="#"><span>p</span> Bridalog</a></li>
		</ul>
	</div><!--Wrap -->
</div>

<div class="wrap">
	<div class="centered_medium">
		<p>Campos marcados en rosa son obligatorios. Al dar click en ‘Enviar tus datos’ indicas que conoces nuestras <strong><a href="#">Políticas de Privacidad</a></strong>.</p>
	</div>
	<div class="squared_btn">
		<a href="#">Conoce la historia detrás de Bridalog</a>
		<a href="#">Descubre los servicios de Bridalog</a>
	</div>
</div> <!--Wrap -->

<?php include 'inc/footer.php' ?>
