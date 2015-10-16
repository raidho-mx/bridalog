<?php
/*
Bridalog Website
Loging Template
*/
?>

<?php include 'inc/header.php' ?>


<div class="wrap">

	<section class="group login">

		<div class="login_welcome">
			<p class="regular_title green">Bienvenido! Por favor ingresa tus datos para acceder a tu cuenta.</p>
			<p class="asap">Edita tu perfil al publico, muestra tus nuevos productos, tus productos más notables y haz que te contacten en el catálogo más atractivo especializado en bodas.</p>
			<img src="http://lorempixel.com/600/400/city" alt="">
		</div>
		<div class="login_form_area white_bg asap">
			<h4>Ya cuentas con tu membresía de Bridalog? Inicia sesión aquí.</h4>
			<form action="">
				<input class="required" name="contacto_correo" type="text" placeholder="Correo Electrónico">
				<input class="required" name="contacto_correo" type="text" placeholder="Contraseña">
				<input class="gray_medium" type="checkbox" name="recordar_pass" id="recordar_pass" value="Recordar">
				<label for="recordar_pass"><span class="gray_medium">Recordar mi contraseña</span></label>
				<input type="submit" name="submit" value="Entrar">
			</form>
			<p>
				<a href="#" class="gray_medium">¿Olvidaste tu ontraseña?</a>
			</p>
			<div class="login_cta">
				<h4>¿Te gustaría formar parte de Bridalog?</h4>
				<p>Descubre cual es el proceso:</p>
				<div class="squared_btns">
					<ul>
						<li><a href="#">Ir a Servicios</a></li>
					</ul>
				</div>
			</div>
		</div>

	</section>

</div> <!--Wrap -->

<?php include 'inc/footer.php' ?>
