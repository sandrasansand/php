<?php

$titulo_pag= 'Hello';
$viewport='width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0';
$description='Administración de usuarios';
$keywords='eccomerce, users, register'; 

include 'cabecera.php';

?>
<section class="section-hero">
	<div class="hero">
		<div class="container center">
			<div class="container-form ">
				<div class="card">
					<form onsubmit="return false">
						<div class="row">
							<div class="input-field col s12">
								<i class="material-icons prefix">account_circle</i>
								<input  type="text" id="username" class="validate" autocomplete="off">
								<label for="username">Ingresa tu Usuario o Email</label>
							</div><!-- Enf col -->


							<div class="input-field col s12">
								<i class="material-icons prefix">lock_outline</i>
								<input type="password" id="password" class="validate">
								<label for="password">Contraseña</label>
							</div><!-- Enf col -->


							<div class="col s12">
								<div class="center">
									<input type="submit" class="waves-effect waves-light btn  pink accent-2" value="Ingresar">
								</div>
							</div>
						</div><!-- End row -->
					</form>
				</div>
			</div>
		</div>
	</div>
</section>

Este es el cuerpo del tercer archivo
<a href="primer-include.php">Ir a la página 1</a>
<a href="segundo-include.php">Ir a la página 2</a>
<a href="cuarto-include.php">Ir a la página 4</a>

<?php include 'pie.php'; ?>