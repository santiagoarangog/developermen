<?php
$title = "Registrar nuevo usuario &bull; Admin Developer Men";
$sidebar = '5';
?>
<?php
require('templates/header.php');
include('functions/functionsRegister.php');
?>
<body >
  <div class="wrapper">
    <?php include('templates/sidebar.php'); ?>
    <div class="main-panel">
      <?php require('templates/navbar.php');  ?>
      <div class="content <?php echo $css; ?>" style="background-image: url('<?php echo $imagen; ?>');">
        <div class="container-fluid">
          <div class="row">
            <div class="wrap" style="text-align:center;color:#000;;	width: 350px;margin-top:0%;">
              <h3><i class="pe-7s-user" style="font-size:50px;"></i>
                <br><span style="color:#4574C5;font-weight:bold;"> Registra usuarios nuevos en la plataforma de administración</span>
              </h3>
              <hr style="width:70%;background-color:#4574C5;">
              <form name="registerform" id="registerform" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                <div class="form-group">
                  <label for="">Nombre Completo
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                      <input type="text" name="nomComple" id="nomComple"  class="form-control" size="50" value="" required  />
                    </div>
                  </label>
                  <label for="">Nombre De Usuario
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-user-circle" aria-hidden="true"></i></span>
                      <input type="text" name="username" id="username"  class="form-control" value="" size="50" required />
                    </div>
                  </label>
                  <label for="">E-mail
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-at" aria-hidden="true"></i></span>
                      <input type="email" name="email" id="email" class="form-control" value="" size="50" required/>
                    </div>
                  </label>
                  <label for="">Contraseña
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-lock" aria-hidden="true"></i></span>
                      <input type="password" name="password" id="password"  class="form-control" value="" size="50" required/>
                      <div class="input-group-btn" id="change">
                        <a class="btn btn-default" style="padding:12px;borde:1px solid #000;">
                          <i id="ocultar" class="fa fa-eye" aria-hidden="true"></i>
                        </a>
                      </div>
                    </div>
                  </label>
                  <p class="submit">
                    <br>
                    <button type="submit" name="btnGuardar" id="register" class="btn btn-primary" value="guardar" />Guardar</button>
                    <?php
                    if(@$_POST['btnGuardar'] == 'guardar'){
                      registrarUsuario($_POST);
                    }
                    ?>
                    <br>
                    <!-- <p class="regtext">Ya tienes una cuenta? <a class="btn btn-success btn-xs rounded" href="index.php?msg=usuarioRedireccionadoRegistro" >Entra Aquí!</a></p> -->
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php
        include 'templates/footer.php';
        ?>
      </div>
    </div>
  </body>
  <?php
  include 'templates/script.php';
  ?>
  </html>
