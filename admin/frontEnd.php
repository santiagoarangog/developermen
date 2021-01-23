<?php
$title = "Gestionar Front End &bull; Admin Developer Men";
$sidebar = '4';
?>
<!Doctype html>
<html lang="es-Es">
<?php
require('templates/header.php');
require('functions/functionsUser.php');
require('functions/frontEndFunctions.php');
$active = 'GestionarFrondEnt';
$oid = isset($_GET['oid'])?$_GET['oid']:'';
$accion = isset($_GET['accion'])?$_GET['accion']:'';
?>
<body onload="limpiarGet();">
  <div class="wrapper frontEnd imagen-area">
  <?php
  include('templates/sidebar.php');
  if ($oid != '') {
    cargarInformacion($oid,$nomTarea);
  }
  ?>
  <div class="main-panel">
    <?php require('templates/navbar.php');  ?>
    <div class="content <?php echo $css; ?>" style="background-image: url('<?php echo $imagen; ?>');">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-4">
            <div class="single-start-box" style="height:350px;">
              <div class="start-icon">
                <img class="img-fluid" src="assets/img/factura.png" width="360" height="360" alt="..."/>
              </div>
              <h3>Gestionar facturación</h3>
              <p>En este modulo puedes gestionar los diferentes usuarios que son administradores.</p>
              <a href="frontFactura" class="btn btn-primary price-btn">Gestionar</a>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="single-start-box" style="height:350px;">
              <div class="start-icon">
                <img class="img-fluid" src="assets/img/corrCorpora.png" width="360" height="360" alt="..."/>
              </div>
              <h3>Correos corporativos</h3>
              <p>En este modulo puedes inscribir y gestionar las tareas pendientes.</p>
              <a href="corCorpora" class="btn btn-primary price-btn">Gestionar</a>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="single-start-box" style="height:350px;">
              <div class="start-icon">
                <img class="img-fluid" src="assets/img/contactanos.png" width="360" height="360" alt="..."/>
              </div>
                <h3>Correos de contactanos</h3>
              <p>En este modulo puedes crear apuntes sobre modificaciones, errores o puntos a mejorar</p>
              <a href="corContac" class="btn btn-primary price-btn">Gestionar</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php
    include 'templates/footer.php';
    ?>
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
