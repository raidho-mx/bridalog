<?php
/*
Bridalog Website
Loging Template
*/
?>

<?php include 'inc/header.php' ?>


<div class="wrap">
<div class="login_welcome">
	<p class="regular_title green">Bienvenido! Por favor ingresa tus datos para acceder a tu cuenta.</p>
	<p>Edita tu perfil al publico, muestra tus nuevos productos, tus productos más notables y haz que te contacten en el catálogo más atractivo especializado en bodas.</p>
	<img src="http://lorempixel.com/600/400/city" alt="">
</div>
<div class="login_form_area">
	<h4>Ya cuentas con tu membresía de Bridalog? Inicia sesión aquí.</h4>
	<form action="">
		<input class="required" name="contacto_correo" type="text" placeholder="Correo Electrónico">
		<input class="required" name="contacto_correo" type="text" placeholder="Contraseña">
		<input type="checkbox" name="recordar_pass" value="Recordar"> Recordar mi contraseña
		<a href="#">¿Olvidaste tu ontraseña?</a>
		<input type="submit" name="submit" value="Entrar">
	</form>
	<h4>¿Te gustaría formar parte de Bridalog?</h4>
	<p>Descubre cual es el proceso:</p>
	<div class="squared_btns">
		<ul>
			<li><a href="#">Ir a Servicios</a></li>
		</ul>
	</div>
</div>

</div> <!--Wrap -->

<?php include 'inc/footer.php' ?>
