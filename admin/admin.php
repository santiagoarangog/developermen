<?php
$title = "Gestión Admin &bull; Admin Developer Men";
$sidebar = '3';
$oid = isset($_GET['oid'])?$_GET['oid']:'';
?>
<!doctype html>
<html lang="es-Es">
<?php
require('templates/header.php');
require('functions/sendMail.php');
require('functions/functionsAdmin.php');
$active = 'GestionAdmin';
?>
<body>
  <div class="wrapper admin imagen-area">
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
            <div class="col-sm-4 col-xs-6">
              <div class="panel panel-default">
                <div class="panel-thumbnail"><img src="https://images.unsplash.com/photo-1524749292158-7540c2494485?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=ab5846a70b2ce31cf27899249b229b1e&auto=format&fit=crop&w=1050&q=80" class="img-responsive"></div>
                <div class="panel-body">
                  <p class="lead" style="font-weight:bold;">Gestionar usuarios admin</p>
                  <p class="small">En este modulo puedes gestionar los diferentes usuarios que son administradores.</p>
                  <a href="gesUsuAdmin" class="btn btn-info btn-fill btn-block">Gestionar</a>
                </div>
              </div>
            </div>
            <div class="col-sm-4 col-xs-6">
              <div class="panel panel-default">
                <div class="panel-thumbnail"><img src="https://images.unsplash.com/photo-1532622785990-d2c36a76f5a6?ixlib=rb-0.3.5&s=3079c728c705c062635db21fda8d90a7&auto=format&fit=crop&w=1050&q=80" class="img-responsive"></div>
                <div class="panel-body">
                  <p class="lead" style="font-weight:bold;">Gestiona las tareas pendientes</p>
                  <p class="small">En este modulo puedes inscribir y gestionar las tareas pendientes.</p>
                  <a href="gesTareas" class="btn btn-info btn-fill btn-block">Gestionar</a>
                </div>
              </div>
            </div>
            <div class="col-sm-4 col-xs-6">
              <div class="panel panel-default">
                <div class="panel-thumbnail"><img src="https://images.unsplash.com/photo-1534972195531-d756b9bfa9f2?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=7325bf88e191e71e966ec0b260d2d91b&auto=format&fit=crop&w=1050&q=80" class="img-responsive"></div>
                <div class="panel-body">
                  <p class="lead" style="font-weight:bold;">Bitacora del Admin</p>
                  <p class="small">En este modulo puedes crear apuntes sobre modificaciones, errores o puntos a mejorar</p>
                  <a  href="gesTareas" class="btn btn-info btn-fill btn-block">Gestionar</a>
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
</div>
</body>
<?php
include 'templates/script.php';
?>
</html>
