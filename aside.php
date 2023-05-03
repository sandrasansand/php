
<div class="container-form ">
  <div class="card">
<a name="error-login" href=""></a>
    <?php 
//var_dump($_SESSION['error_login']);
    if (isset($_SESSION['error_login']) ){
     // start_session();
      echo $_SESSION['error_login'];//vacio errores
    } ?>
    <form name="formPidoDatos" action="pruebalogeado.php" method="post">
      <div class="row">
        <div class="input-field col s12">
          <i class="material-icons prefix">email</i>
          <input type="email" id="rg_email" name="email" class="validate" autocomplete="off">
          <label for="rg_email">Email</label>
        </div>

        <div class="input-field col s12">
          <i class="material-icons prefix">lock_outline</i>
          <input type="password" id="rg_pass" name="pass" class="validate" autocomplete="off">
          <label for="rg_pass">Contraseña</label>
        </div>

        <div class="col s12">
          <div class="center">
            <button type="submit" class="waves-effect waves-light btn  black accent-1" onclick="register()" 
            >Iniciar sesión</button>
            <br>
           <!--  <p class="redtext">Si no estas registrado<p><a href="registro.php">Comenzar</a> -->

            </div>
          </div>
        </div>
      </form>
    </div>


    <section class="section-usuario">

      <div class="container-form-nuevo-usuario">
        <a name="error-registro" href=""></a>
        <?php if (isset($_SESSION['errores'])): 
          $errores=$_SESSION['errores'];
          mostrarErrores($errores);
          
        endif ?> 
        <form name="registroUsuario" action="usuarios.php" method="post">
          <h5 align="center">Nuevos usuarios</h5>
          <div class="row">
            <input type="hidden" name="permisos" value="2">
            <div class="input-field col s12">
              <i class="material-icons prefix">Nombre</i>
              <input type="text" id="rg_nombre" name="nombre" class="validate" autocomplete="off">
              <label for="rg_nombre">Nombre</label>
              <!-- <?php// echo mostrar_errores($_SESSION['errores'],'email'); ?> -->

            </div><!-- Enf col -->
            <div class="input-field col s12">
              <i class="material-icons prefix">email</i>
              <input type="email" id="rg_email" name="email" class="validate" autocomplete="off">
              <label for="rg_email">Email</label>
              <!-- <?php// echo mostrar_errores($_SESSION['errores'],'email'); ?> -->

            </div><!-- Enf col -->

            <div class="input-field col s12">
              <i class="material-icons prefix">lock_outline</i>
              <input type="password" id="rg_pass" name="pass" class="validate" autocomplete="off">
              <label for="rg_pass">Contraseña</label>
              <!--          <?php // echo isset($_SESSION['errores']) ? mostrar_errores($_SESSION['errores'],'pass') : ''; ?>  -->

            </div><!-- Enf col -->

            <div class="col s12">
              <div class="center">
                <button type="submit" class="waves-effect waves-light btn  red accent-4" onclick="register();" 
                >Registrase</button>
                <!-- onclick="location.href='logeado.php' -->
              </div>
            </div>
          </div><!-- End row -->
        </form>

      </div>
    </section>
  </div>