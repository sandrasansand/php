<?php 

$titulo_pag= 'Registrese';
$viewport='width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0';
$description='Administración de usuarios, eccomerce';
$keywords='users,eccomerce,arte,blog';
include 'cabecera.php'; ?>

	<!--=====================================
	   HERO
	   ======================================-->

	<section class="section-hero">
		<div class="hero">
			<div class="container center">
				<div class="container-form ">
					<div class="card">
						<form onsubmit="return false">
							<div class="row">
								<div class="input-field col s12">
									<i class="material-icons prefix">account_circle</i>
							         <input type="text" id="rg_username" class="validate" autocomplete="off">
							         <label for="rg_username">Usuario</label>
								</div><!-- Enf col -->

								<div class="input-field col s12">
									<i class="material-icons prefix">email</i>
							         <input type="email" id="rg_email" class="validate" autocomplete="off">
							         <label for="rg_email">Email</label>
								</div><!-- Enf col -->

								<div class="input-field col s12">
									<i class="material-icons prefix">lock_outline</i>
							         <input type="password" id="rg_pass1" class="validate" autocomplete="off">
							         <label for="rg_pass1">Contraseña</label>
								</div><!-- Enf col -->

								<div class="input-field col s12">
									<i class="material-icons prefix">login</i>
							         <input type="password" id="rg_pass2" class="validate" autocomplete="off">
							         <label for="rg_pass2">Verificar contraseña</label>
								</div><!-- Enf col -->

								<div class="col s12">
									<div class="center">
										<input type="submit" class="waves-effect waves-light btn  pink accent-2" value="Registrarme">
									</div>
								</div>
							</div><!-- End row -->
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>



<a href="tercer-include.php">Ir a la página 3</a>
<?php include 'pie.php'; ?>