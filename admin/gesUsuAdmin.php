<?php
$title = "Gestionar usuarios administradores &bull; Admin Developer Men";
$sidebar = '4';
?>
<!Doctype html>
<html lang="es-Es">
<?php
require('templates/header.php');
require('functions/functionsUser.php');
require('functions/frontEndFunctions.php');
$active = 'GestionAdmin';
$oid = isset($_GET['oid'])?$_GET['oid']:'';
$accion = isset($_GET['accion'])?$_GET['accion']:'';
?>
<body onload="limpiarGet();">
  <div class="wrapper">
    <?php include('templates/sidebar.php'); ?>
    <div class="main-panel">
      <?php
      require('templates/navbar.php');
      include('features/modal.php');
      ?>
      <div class="content <?php echo $css; ?>" style="background-image: url('<?php echo $imagen; ?>');">
        <div class="row">
          <div class="col-md-12">
            <div style="margin-left:1%;margin-bottom:1%;margin-top:0%;">
              <a class="btn btn-info mb-2" href="admin"><i class="fa fa-angle-double-left"></i> Regresar al módulo gestión / administrador</a>
            </div>
          </div>
        </div>
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card ">
                <div class="header">
                  <h4 class="title"><i class="fa fa-users text-default"></i> &nbsp;Gestionar usuarios administradores</h4>
                </div>
                <div class="content">
                  <form action="" method="POST" class="form-inline">
                    <div class="form-group mx-sm-3 mb-4">
                      <label for="inputPassword2" class="sr-only">Nombre completo</label>
                      <input type="text" name="nomDesti" class="form-control" id="inputPassword2" placeholder="Nombre completo" value="<?php echo isset($_POST['nomDesti'])?$_POST['nomDesti']:''; ?>">
                    </div>
                    <div class="form-group mx-sm-3 mb-2">
                      <label for="inputPassword2" class="sr-only">Correo electrónico</label>
                      <input type="text" name="correoElectro" class="form-control" id="inputPassword2" placeholder="Correo electrónico" value="<?php echo isset($_POST['correoElectro'])?$_POST['correoElectro']:''; ?>">
                    </div>
                    <button type="submit" class="btn btn-primary mb-2">Buscar</button>
                    <button type="button" name="nuevoProceso" value="nuevo" class="btn btn-primary mb-2" href="#" data-toggle="modal" data-target="#modalFacturacion" target="_blank"><i class="fa fa-plus"></i></button>
                  </form>
                  <br>
                  <?php
                  if (@$_POST['nuevoProceso'] == 'nuevo') {
                    unset($_SESSION['oidSes']);
                  }
                  listarCorreoFacturacion($_POST); ?>
                  <div class="footer">
                    <div class="legend">
                      <i class="fa fa-circle text-info"></i> Activo
                      <i class="fa fa-circle text-danger"></i> Inactivo
                    </div>
                    <hr>
                    <div class="stats">
                      <i class="fa fa-envelope-o"></i> Usuarios administradores
                    </div>
                  </div>
                </div>
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
<?php
if ($oid != '' && $accion == '') {
  echo '<script>$("#modalMailVisualizar").modal("show");</script>';
}
if ($oid != '' && $accion == 'editar') {
  echo '<script>$("#modalMailContactanos").modal("show");</script>';
}
if ($oid != '' && $accion == 'facturacion') {
  echo '<script>$("#modalFacturacionVer").modal("show");</script>';
}
?>
</html>
