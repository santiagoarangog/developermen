<?php
$title = "Gestionar Cambios &bull; Admin Developer Men";
$sidebar = '4';
?>
<!Doctype html>
<html lang="es-Es">
<?php
require('templates/header.php');
echo '<script src="assets/js/gestCambios.js"></script>';
require('functions/functionsUser.php');
require('functions/soporteFunctions.php');
$active = 'Soporte';
$oid = isset($_GET['oid'])?$_GET['oid']:'';
$accion = isset($_GET['accion'])?$_GET['accion']:'';
?>
<body onload="limpiarGet();">
  <div class="wrapper soporte imagen-area">
    <?php include('templates/sidebar.php'); ?>
    <div class="main-panel">
      <?php
      require('templates/navbar.php');
      ?>
      <div class="content">
        <div class="col-md-12">
          <div style="margin-bottom:1%;margin-top:0%;">
            <a name="nuevoProceso" value="nuevo" class="btn btn-fill btn-info mb-2" href="progreso"><i class="fa fa-angle-double-left"></i> Regresar al módulo incidencias / Soporte</a>
          </div>
        </div>
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="header">
                  <?php
                  if ($oid == '') {
                    echo '<h4 class="title"><i class="pe-7s-plus"></i> Generar una nueva incidencia</h4>';
                  }else {
                    echo '<h4 class="title"><i class="pe-7s-note"></i> Actualizar incidencia</h4>';
                  }
                  ?>
                </div>
                <div class="content">
                  <form action="" method="POST" onsubmit="return checkSubmit();">
                  <!-- Campos ocultos que se envían para registrar la actualización -->
                  <input type="hidden" name="titlEdit" value="<?php echo isset($result['DS_TITLE'])?$result['DS_TITLE']:'';?>">
                  <input type="hidden" name="tipIncidenEdit" value="<?php echo isset($result['DS_TIPOINCIDENCIA'])?$result['DS_TIPOINCIDENCIA']:'';?>">
                  <input type="hidden" name="descripcionEdit" value="<?php echo isset($result['DS_DESCRIPCION'])?$result['DS_DESCRIPCION']:'';?>">
                  <input type="hidden" name="estadoEdit" value="<?php echo isset($result['SN_ESTADO'])?$result['SN_ESTADO']:'';?>">


                    <div class="row">
                      <div class="col-md-5">
                        <input type="hidden" name="oid" class="form-control" readOnly placeholder="Compañia" value="<?php echo isset($result['OID'])?$result['OID']:'';?>">
                        <div class="form-group">
                          <label>Compañia (Inhabilitado)</label>
                          <input type="hidden" name="oidCompania" value="<?php echo isset($oidCompania)?$oidCompania:''; ?>">
                          <input type="text" name="compañia" class="form-control" readOnly placeholder="Compañia" value="<?php echo isset($compania)?$compania:''; ?>">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label>Nombre de usuario</label>
                          <input type="text" name="nomUsuario" class="form-control" readOnly placeholder="Nombre de usuario" value="<?php echo $usu?>">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Correo electronico</label>
                          <input type="email" name="email" class="form-control" placeholder="Correo electronico" readonly value="<?php echo isset($email)?$email:'';?>">
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-8">
                        <div class="form-group">
                          <label>Titulo incidencia</label>
                          <input type="text" name="title" class="form-control" placeholder="Titulo o breve descripción" maxlength="100" value="<?php echo isset($result['DS_TITLE'])?$result['DS_TITLE']:'';?>" required>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label>Tipo incidencia</label>
                          <select class="form-control" name="tipInciden" required>
                            <option> </option>
                            <option value="Error" <?php if (isset($result['DS_TIPOINCIDENCIA']) && $result['DS_TIPOINCIDENCIA']=="Error") echo "selected";?>>Error</option>
                            <option value="Mejora" <?php if (isset($result['DS_TIPOINCIDENCIA']) && $result['DS_TIPOINCIDENCIA']=="Mejora") echo "selected";?>>Mejora</option>
                            <option value="Aclaración" <?php if (isset($result['DS_TIPOINCIDENCIA']) && $result['DS_TIPOINCIDENCIA']=="Aclaración") echo "selected";?>>Aclaración</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Descripción incidencia</label>
                          <textarea rows="5" name="descripcion"  maxlength="300" class="form-control" placeholder="Describe de la mejor manera posible el error evidenciado" value="<?php echo isset($result['DS_DESCRIPCION'])?$result['DS_DESCRIPCION']:'';?>" required><?php echo isset($result['DS_DESCRIPCION'])?$result['DS_DESCRIPCION']:'';?></textarea>
                        </div>
                      </div>
                    </div>
                    <?php
                    if ($oid != '') {
                      $display = '';
                    }else {
                      $display = 'display:none;';
                    }
                    ?>
                    <div align="center">
                      <?php
                      $oid = isset($_GET['oid'])?$_GET['oid']:'';
                      $accion = isset($_GET['accion'])?$_GET['accion']:'';
                      if ($accion == 'ver'){
                        $displayButton = 'style="display:none;"';
                      }else {
                        $displayButton = '';
                      }
                      if ($oid == ''){
                        echo '<button name="btnGuardar" '.$displayButton.' type="submit" class="btn btn-info btn-fill btn-block" value="Guardar">Guardar</button>';
                      }else{
                        echo '<button name="btnGuardar" '.$displayButton.' type="submit" class="btn btn-info btn-fill btn-block" value="Guardar">Actualizar</button>';
                      }
                      ?>
                    </div>
                    <div class="clearfix"></div>
                    <?php
                    if(@$_POST['btnGuardar'] == 'Guardar' && @$_POST['oid']!=''){
                      editInfo($_POST);
                    }elseif (@$_POST['btnGuardar'] == 'Guardar' && @$_POST['oid']=='') {
                      insertInfo($_POST);
                    }
                    ?>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <div class="row" <?php echo "style='".$display."'"; ?>>
            <div class="col-md-12">
              <div class="card">
                <div class="content">
                  <form action="" method="POST" enctype="multipart/form-data">
                    <div class="row">
                      <div class="header col-md-12">
                        <h4 class="strongLabel" style="text-align:center;"><i class="pe-7s-paperclip" aria-hidden="true"></i> Añadir archivos adjuntos</h4>
                      </div>
                      <div class="col-md-8">
                        <input type="file" name="carga_archivos[]" id="carga_archivos" multiple="multiple" class="subirArchivos" required/>
                      </div>
                      <div class="col-md-4">
                        <button type="submit" class="btn btn-primary btn-fill btn-block" name="subirArchivos" value="subirArchivos"><i class="pe-7s-cloud-upload"></i> Subir archivos</button>
                      </div>
                      <?php
                      if (isset($_POST['subirArchivos'])){
                        cargarArchivoAdjunto($oid);
                      }
                      ?>
                    </div>
                  </form>
                  <br>
                  <div class="header" style="text-align:center;">
                    <h4><i class="pe-7s-folder"></i> Visualizar archivos adjuntos</h4>
                  </div>
                  <?php
                  include('templates/modalImage.php');
                  consultFilesCertiRse($oid);
                  ?>
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
</html>
