<?php
$title = "Gestionar Cambios &bull; Admin Developer Men";
$sidebar = '4';
?>
<!Doctype html>
<html lang="es-Es">
<?php
require('templates/header.php');
require('functions/functionsUser.php');
require('functions/gestCambios.php');
$active = 'Productos';
$oid = isset($_GET['oid'])?$_GET['oid']:'';
$accion = isset($_GET['accion'])?$_GET['accion']:'';
?>
<body onload="limpiarGet();">
  <div class="wrapper">
    <?php include('templates/sidebar.php'); ?>
    <div class="main-panel">
      <?php
      require('templates/navbar.php');
      include('features/modalProductos.php');
      ?>
      <div class="content <?php echo $css; ?>" style="background-image: url('<?php echo $imagen; ?>');">
        <div class="row">
          <div class="col-md-12">
            <div style="margin-left:1%;margin-bottom:1%;margin-top:0%;">
              <a name="nuevoProceso" value="nuevo" class="btn btn-info mb-2" href="gestProducto"><i class="fa fa-angle-double-left"></i> Regresar al módulo gestión productos / admin</a>
            </div>
          </div>
        </div>
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card ">
                <div class="header">
                  <h4 class="title"><i class="pe-7s-diamond text-primary"></i> Gestionar cambios</h4>
                  <p class="category">Envia, analiza y gestiona los cambios de los productos realizadas</p>
                </div>
                <div class="content">
                  <form action="" method="POST" class="form-inline">
                    <div class="form-group mx-sm-12 mb-3">
                      <label for="inputPassword2" class="sr-only"># Radicado</label>
                      <input type="text" name="radicado" class="form-control" id="inputPassword2" placeholder="# Radicado" value="<?php echo isset($_POST['radicado'])?$_POST['radicado']:''; ?>">
                    </div>
                    <div class="form-group mx-sm-3 mb-2">
                      <label for="inputPassword2" class="sr-only">Nombre destinatario</label>
                      <input type="text" name="nomDesti" class="form-control" id="inputPassword2" placeholder="Nombre destinatario" value="<?php echo isset($_POST['nomDesti'])?$_POST['nomDesti']:''; ?>">
                    </div>
                    <div class="form-group mx-sm-3 mb-2">
                      <label for="inputPassword2" class="sr-only">Correo electrónico</label>
                      <input type="text" name="correoElectro" class="form-control" id="inputPassword2" placeholder="Correo electrónico" value="<?php echo isset($_POST['correoElectro'])?$_POST['correoElectro']:''; ?>">
                    </div>
                    <div class="form-group mx-sm-3 mb-2">
                      <label for="inputPassword2" class="sr-only">Estado</label>
                      <select class="form-control" name="estado" placeholder="Seleccione un estado">
                        <option> </option>
                        <option value="1" <?php if (isset($_POST['estado']) && $_POST['estado']=="1") echo "selected";?>>Leido</option>
                        <option value="0" <?php if (isset($_POST['estado']) && $_POST['estado']=="0") echo "selected";?>>No leido</option>
                      </select>
                    </div>
                    <div class="form-group mx-sm-3 mb-2">
                      <label for="inputPassword2" class="sr-only">Fecha inicial</label>
                      <input type="text" name="fechaIni" class="form-control" id="fechaIni" placeholder="Fecha inicial" value="<?php echo isset($_POST['fechaIni'])?$_POST['fechaIni']:''; ?>">
                    </div>
                    <div class="form-group mx-sm-3 mb-2">
                      <label for="inputPassword2" class="sr-only">Fecha final</label>
                      <input type="text" name="fechaFin" class="form-control" id="fechaFin" placeholder="Fecha final" value="<?php echo isset($_POST['fechaFin'])?$_POST['fechaFin']:''; ?>">
                    </div>
                    <button type="submit" class="btn btn-primary mb-2">Buscar</button>
                    <button type="button" name="nuevoProceso" value="nuevo" class="btn btn-primary mb-2" href="#" data-toggle="modal" data-target="#modalCambios" target="_blank"><i class="fa fa-plus"></i></button>
                  </form>
                  <br>
                  <?php
                  if (@$_POST['nuevoProceso'] == 'nuevo') {
                    unset($_SESSION['oidSes']);
                  }
                  listarCorreoCambio($_POST); ?>
                  <div class="footer">
                    <div class="legend">
                      <i class="fa fa-circle text-info"></i> Leido
                      <i class="fa fa-circle text-danger"></i> No leido
                    </div>
                    <hr>
                    <div class="stats">
                      <i class="fa fa-envelope-o"></i> Correos cambios
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card ">
                <div class="header">
                  <h4 class="title"><i class="pe-7s-diamond text-primary"></i> Gestionar mejoras</h4>
                  <p class="category">Da a conocer las mejoras que le realicemos a los aplicativos</p>
                </div>
                <div class="content">
                  <form action="" method="POST" class="form-inline">
                    <div class="form-group mx-sm-12 mb-3">
                      <label for="inputPassword2" class="sr-only"># Radicado</label>
                      <input type="text" name="radicadoMejoras" class="form-control" id="inputPassword2" placeholder="# Radicado" value="<?php echo isset($_POST['radicado'])?$_POST['radicado']:''; ?>">
                    </div>
                    <div class="form-group mx-sm-3 mb-2">
                      <label for="inputPassword2" class="sr-only">Nombre destinatario</label>
                      <input type="text" name="nomDestinatario" class="form-control" id="inputPassword2" placeholder="Nombre destinatario" value="<?php echo isset($_POST['nomDesti'])?$_POST['nomDesti']:''; ?>">
                    </div>
                    <div class="form-group mx-sm-3 mb-2">
                      <label for="inputPassword2" class="sr-only">Correo electrónico</label>
                      <input type="text" name="correoMejora" class="form-control" id="inputPassword2" placeholder="Correo electrónico" value="<?php echo isset($_POST['correoElectro'])?$_POST['correoElectro']:''; ?>">
                    </div>
                    <div class="form-group mx-sm-3 mb-2">
                      <label for="inputPassword2" class="sr-only">Estado</label>
                      <select class="form-control" name="estadoMejora" placeholder="Seleccione un estado">
                        <option> </option>
                        <option value="1" <?php if (isset($_POST['estado']) && $_POST['estado']=="1") echo "selected";?>>Leido</option>
                        <option value="0" <?php if (isset($_POST['estado']) && $_POST['estado']=="0") echo "selected";?>>No leido</option>
                      </select>
                    </div>
                    <div class="form-group mx-sm-3 mb-2">
                      <label for="inputPassword2" class="sr-only">Fecha inicial</label>
                      <input type="text" name="fechaIniMejora" class="form-control" id="fechaIni" placeholder="Fecha inicial" value="<?php echo isset($_POST['fechaIni'])?$_POST['fechaIni']:''; ?>">
                    </div>
                    <div class="form-group mx-sm-3 mb-2">
                      <label for="inputPassword2" class="sr-only">Fecha final</label>
                      <input type="text" name="fechaFinMejora" class="form-control" id="fechaFin" placeholder="Fecha final" value="<?php echo isset($_POST['fechaFin'])?$_POST['fechaFin']:''; ?>">
                    </div>
                    <button type="submit" class="btn btn-primary mb-2">Buscar</button>
                    <button type="button" name="nuevoProceso" value="nuevo" class="btn btn-primary mb-2" href="#" data-toggle="modal" data-target="#modalMejora" target="_blank"><i class="fa fa-plus"></i></button>
                  </form>
                  <br>
                  <?php
                  if (@$_POST['nuevoProceso'] == 'nuevo') {
                    unset($_SESSION['oidSes']);
                  }
                  listarCorreoMejora($_POST); ?>
                  <div class="footer">
                    <div class="legend">
                      <i class="fa fa-circle text-info"></i> Leido
                      <i class="fa fa-circle text-danger"></i> No leido
                    </div>
                    <hr>
                    <div class="stats">
                      <i class="fa fa-envelope-o"></i> Correos cambios
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
if ($oid != '' && $accion == 'cambios') {
  echo '<script>$("#modalCambiosVer").modal("show");</script>';
}
?>
</html>