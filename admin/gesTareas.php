<?php
$title = "Gestiona las tareas &bull; Admin Developer Men";
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
  <div class="wrapper">
    <?php
    include('templates/sidebar.php');
    include('features/modalTareas.php');
    if ($oid != '') {
      cargarInformacion($oid,$nomTarea);
    }
    ?>
    <div class="main-panel">
      <?php require('templates/navbar.php');  ?>
      <div class="content <?php echo $css; ?>" style="background-image: url('<?php echo $imagen; ?>');">
        <div class="row">
          <div class="col-md-12">
            <div style="margin-left:1%;margin-bottom:1%;margin-top:0%;">
              <a name="nuevoProceso" value="nuevo" class="btn btn-info mb-2" href="admin"><i class="fa fa-angle-double-left"></i> Regresar al módulo gestión tareas / admin</a>
            </div>
          </div>
        </div>
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="header">
                  <h4 class="title"><i class="fa fa-play text-danger"></i> Tareas pendientes</h4>
                  <p class="category"><i class="fa fa-square text-warning"></i> Gestiona tus tareas pendientes</p>
                </div>
                <div class="content">
                  <form class="form-inline" action="" method="POST" onsubmit="return checkSubmit();">
                    <div class="form-group"  style="width:90%;margin-bottom:2%;">
                      <label for="text">Nueva tarea:</label>
                      <input type="text" class="form-control" name="nomTarea" value="<?php echo isset($nomTarea)?$nomTarea:''?>" id="nomTarea" required="require"  style="width:90%;">
                    </div>
                    <button type="submit" class="btn btn-primary" name="btnGuardar" id="btnGuardar" value="guardar" style="margin-bottom:2%;">Guardar</button><br/>
                    <?php
                    if (@$_GET['accion']=="Modificar") {
                      cambiarEstado($_GET);
                    }
                    if(@$_POST['btnGuardar'] == 'guardar' && @$_GET['oid']!=''){
                      actualizarTarea($_POST,$oid);
                    }elseif (@$_POST['btnGuardar'] == 'guardar' && @$_GET['oid']=='') {
                      insertarTarea($_POST);
                    }
                    ?>
                  </form>
                  <?php
                  listarTareas($_POST);
                  ?>
                  <div class="footer">
                    <div class="legend">
                      <i class="fa fa-check-square text-info"></i> Realizado
                      <i class="fa fa-square" style="color:rgb(200, 196, 196);"></i> No Realizado
                      <i class="fa fa fa-bullhorn text-danger"></i> Ten presente que aquí solo se listan tus tareas
                    </div>
                    <hr>
                    <div class="stats">
                      <i class="fa fa-clipboard"></i> Tareas pendientes
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="header">
                  <h4 class="title"><i class="fa fa-play text-success"></i> Programar las tareas</h4>
                  <p class="category"><i class="fa fa-square text-success"></i> Gestiona tus tareas pendientes</p>
                </div>
                <div class="content">
                  <form class="form-inline" action="/action_page.php">
                    <div class="form-group">
                      <label for="email"># Radicado:</label>
                      <input type="email" class="form-control" id="email">
                    </div>
                    <div class="form-group">
                      <label for="pwd">Fecha inicio:</label>
                      <input type="password" class="form-control" id="pwd">
                    </div>
                    <div class="form-group" style="width:45%;">
                      <label for="pwd">Fecha final:</label>
                      <input type="password" class="form-control" id="pwd">
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                    <button type="button" name="nuevoProceso" value="nuevo" class="btn btn-primary mb-2" href="#" data-toggle="modal" data-target="#modalTarea" target="_blank"><i class="fa fa-plus"></i></button>
                  </form>
                  <br>
                  <div class="table-full-width">
                    <div class="table-responsive">
                      <table class="table" width='60%'>
                        <tbody>
                          <?php
                          listarTareaProgramada($_POST);
                          ?>
                        </tbody>
                      </table>
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
  </div>
</body>

<!--   Core JS Files   -->
<script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
<script src="assets/js/scriptAdmin.js" type="text/javascript"></script>
<script src="assets/js/jquery-ui.js" type="text/javascript"></script>
<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

<!--  Checkbox, Radio & Switch Plugins -->
<script src="assets/js/bootstrap-checkbox-radio-switch.js"></script>

<!--  Charts Plugin -->
<script src="assets/js/chartist.min.js"></script>

<!--  Notifications Plugin    -->
<script src="assets/js/bootstrap-notify.js"></script>

<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

<!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
<script src="assets/js/light-bootstrap-dashboard.js"></script>

<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
<script src="assets/js/demo.js"></script>

</html>
