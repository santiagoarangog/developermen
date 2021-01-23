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
$active = 'Productos';
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
                <img class="img-fluid" src="assets/img/company.png" width="360" height="360" alt="..."/>
              </div>
              <h3>Compañias</h3>
              <p>Inserta y gestiona las empresas o compañias que han confiado en Developer Men</p>
              <a href="gestCompanias" class="btn btn-primary price-btn">Gestionar</a>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="single-start-box" style="height:350px;">
              <div class="start-icon">
                <img class="img-fluid" src="assets/img/mejoras.png" width="360" height="360" alt="..."/>
              </div>
              <h3>Gestionar mejoras</h3>
              <p>En este modulo puedes enviar un correo avisandole a un usuario que en su sitio web se genero una determinada mejora.</p>
              <a href="gestCambios" class="btn btn-primary price-btn">Gestionar</a>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="single-start-box" style="height:350px;">
              <div class="start-icon">
                <img class="img-fluid" src="assets/img/vencer.png" width="360" height="360" alt="..."/>
              </div>
              <h3>Correo proximo a vencer</h3>
              <p>En este modulo puedes enviar un correo a un usuario al cual su producto esta proximo por vencer.</p>
              <a href="corCorpora" class="btn btn-primary price-btn">Gestionar</a>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="single-start-box" style="height:350px;">
              <div class="start-icon">
                <img class="img-fluid" src="assets/img/recomienda.png" width="360" height="360" alt="..."/>
              </div>
                <h3>Añadir recomendación</h3>
              <p>Aquí puedes generar un registro de las recomendaciones y datos positivos que nos envie un usuario</p>
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
