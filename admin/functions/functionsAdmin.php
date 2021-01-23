<?php
/*!
@functions Aplicativo (Administracion Developer Men)
@Page admin (.php)
@version 1.0.
@description Funciones que integran los modulos del aplicativo de votaciones conocido como Comite.
@Autor Santiago Arango Gutierrez - Auxiliar de analisis y desarrollo Clínica Somer.
@Año 2017.
@Modificacion _
@Año modificacion _
*/
// Funcion que inserta la informacion de las actividades pendientes
function insertarTarea($datos){
  conectar($conexion);
  $usu = $_SESSION["session"];
  $nomTarea = $datos['nomTarea'];
  getHost($fec,$host);
  $sqlValNom = "SELECT DS_NOMTAREA
  FROM ADM_TAREAS
  WHERE DS_NOMTAREA = '$nomTarea'";
  mysqli_error($conexion);
  $executeQuery = mysqli_query($conexion,$sqlValNom);
  $row=mysqli_fetch_array($executeQuery);
  if ($row['DS_NOMTAREA']==$nomTarea) {
    echo "<div class='alert alert-danger'><i class='fa fa-exclamation-circle' aria-hidden='true'></i>
    <strong>La tarea ya esta registrada</strong>
    </div>";
    echo "<script>setTimeout(function(){window.location ='gesTareas'; },1200);</script>";
  }else{
    $sql = "INSERT INTO  ADM_TAREAS (DS_NOMTAREA,SN_ESTADO,DS_USUCREA,DS_HOSTCREA,DT_FECHACREA)
    VALUES('$nomTarea','0','$usu','$host','$fec')";
    mysqli_error($conexion);
    $executeQuery = mysqli_query($conexion,$sql);
    echo "<div class='alert alert-success'><i class='fa fa-exclamation-circle' aria-hidden='true'></i><strong>Se inserto correctamente la informaci&oacute;n</strong></div>";
    echo "<script>setTimeout(function(){window.location ='gesTareas'; },1200);</script>";
  }
  mysqli_close($conexion);
}
// Funcion para listar las actividades
function listarTareas(){
  conectar($conexion);
  $usu = $_SESSION["session"];
  $sql = "SELECT OID,DS_NOMTAREA, SN_ESTADO, DS_USUCREA, DS_HOSTCREA, DT_FECHACREA
  FROM ADM_TAREAS
  WHERE DS_USUCREA = '$usu'
  ORDER BY OID DESC";
  $executeQuery = mysqli_query($conexion,$sql);
  $numrows=mysqli_num_rows($executeQuery);
  echo '
  <div class="table-responsive">
  <table class="table table-striped table-hover" style="width:100%;">
  <thead>
  <tr>
  <th scope="col" style="width:1%;text-align:center;"></th>
  <th scope="col" style="width:40%;text-align:center;">Tarea</th>
  <th scope="col" style="width:10%;">Fecha creación</th>
  <th scope="col" style="width:2%;text-align:center;">Editar</th>
  <th scope="col" style="width:2%;text-align:center;">Estado</th>
  </tr>
  </thead>
  <tbody>
  ';
  $i = 0;
  while ($row=mysqli_fetch_array($executeQuery)){
    $oid = $row['OID'];
    switch ($row['SN_ESTADO']) {
      case '0':
      $disabled = '';
      $disabledCheck = '';
      $hrefEdit = "gesTareas?oid=$oid";
      $hrefRemove = "gesTareas?oid=$oid&var=1&accion=Modificar";
      $checked = '';
      $tooltip = "rel='tooltip' title='Pendiente'";
      break;
      case '1':
      $disabled = 'disabled';
      $disabledCheck = '';
      $hrefEdit = '#';
      $hrefRemove = '#';
      $checked = 'checked';
      $tooltip = "rel='tooltip' title='Realizada'";
      break;
    }
    echo '
    <tr>
    <td scope="row" style="text-align:center;"><label class="checkbox" '.$tooltip.'><input type="checkbox" value="" data-toggle="checkbox" readOnly '.$checked.' '.$disabledCheck.'></label></td>
    <td scope="row" style="font-weight:bold;">'.$row['DS_NOMTAREA'].'</td>
    <td scope="row">'.$row['DT_FECHACREA'].'</td>
    <td scope="row" style="text-align:center;"><a type="button" rel="tooltip" title="Editar" class="btn btn-info btn-simple btn-xs" href="'.$hrefEdit.'" '.$disabled.'><i class="fa fa-edit"></i></a></td>
    <td scope="row" style="text-align:center;"><a type="button" rel="tooltip" title="Realizado" class="btn btn-info btn-simple btn-xs" href="'.$hrefRemove.'" '.$disabled.'><i class="fa fa-check"></i></a></td>
    </tr>
    ';
    $i++;
  }
  if($i == 1){
    $i = "$i Registro";
  }else{
    $i = "$i Registros";
  }
  echo"<thead><th colspan='7' style='text-align:center;'>$i</th></thead>";
  echo '
  </tbody>
  </table>
  </div>
  ';
  mysqli_close($conexion);
}
/*Funcion que cambia el estado de la actividad*/
function cambiarEstado($datos){
  conectar($conexion);
  $sql = "UPDATE ADM_TAREAS
  SET SN_ESTADO = '".$datos['var']."'
  WHERE OID = '".$datos['oid']."'";
  $executeQuery = mysqli_query($conexion,$sql);
  mysqli_close($conexion);
  echo "<div class='alert alert-success'><i class='fa fa-exclamation-circle' aria-hidden='true'></i>
  <strong>Se cambio correctamente el estado a la tarea pendiente</strong>
  </div>";
  echo "<script>
  setTimeout(function(){window.location ='gesTareas'; },1200);
  </script>";
}
//Funcion que carga la informacion de la tareas
function cargarInformacion($oid,&$nomTarea){
  conectar($conexion);
  $sql="SELECT DS_NOMTAREA
  FROM ADM_TAREAS
  WHERE OID = '$oid'";
  $executeQuery = mysqli_query($conexion,$sql);
  $row=mysqli_fetch_array($executeQuery);
  $nomTarea = $row['DS_NOMTAREA'];
  mysqli_close($conexion);
}
// Funcion que actualiza la tarea creada
function actualizarTarea($datos,$oid){
  conectar($conexion);
  $sql="UPDATE ADM_TAREAS
  SET DS_NOMTAREA = '".$datos['nomTarea']."'
  WHERE OID = '$oid'
  ";
  $executeQuery = mysqli_query($conexion,$sql);
  echo "<div class='alert alert-success'><i class='fa fa-exclamation-circle' aria-hidden='true'></i>
  <strong>Se actualizo correctamente la actividad con identificador: #".$oid."</strong>
  </div>";
  echo "<script>setTimeout(function(){window.location ='gesTareas'; },1200);</script>";
  mysqli_close($conexion);
}
/*Funcion que lista las tareas programadas*/
function listarTareaProgramada($datos){
  conectar($conexion);
  /*Declaracion de variables para implementar determinado Top en la consulta*/
  $varIng1 = ((isset($datos['radicado'])?$datos['radicado']:'') != '');
  $varIng2 = ((isset($datos['nomDesti'])?$datos['nomDesti']:'') != '');
  $varIng3 = ((isset($datos['correoElectro'])?$datos['correoElectro']:'') != '');
  $varIng4 = ((isset($datos['fechaIni'])?$datos['fechaIni']:'') != '');
  $varIng5 = ((isset($datos['estado'])?$datos['estado']:'') != '');
  /*Funcion que determina un Top a la consulta cuando se consultan datos*/
  if($varIng1 != '' || $varIng2 != '' || $varIng3 != '' || $varIng4 != '' || $varIng5 != ''){
    $top="1000";
  }
  else{
    $top="50";
  }
  $sql = "SELECT OID,DS_NOMDESTINATARIO,DS_CORREODESTINATARIO,DS_ASUNTODESTINATARIO,DS_MENSAJEDESTINATARIO,SN_COPIA,CD_USUENVIA,DS_HOSTENVIA,DT_FECHAENVIA,SN_ESTADO
  FROM ADM_CORREOFRONTEND
  WHERE 1=1 ";
  if((isset($varIng1)?$varIng1:'') != ''){
    $sql.= " AND OID = '" . $datos['radicado']. "'";
  }
  if((isset($varIng2)?$varIng2:'') != ''){
    $sql.= " AND  DS_NOMDESTINATARIO LIKE '%".$datos['nomDesti']."%'";
  }
  if((isset($varIng3)?$varIng3:'') != ''){
    $sql.= " AND  DS_CORREODESTINATARIO = '".$datos['correoElectro']."'";
  }
  if((isset($varIng4)?$varIng4:'') != ''){
    $sql.= " AND CAST(DT_FECHAENVIA AS DATE) BETWEEN '" . $datos['fechaIni']. "' AND '" . $datos['fechaFin']. "'";
  }
  if((isset($varIng5)?$varIng5:'') != ''){
    $sql.= " AND SN_ESTADO = '" . $datos['estado']. "'";
  }
  /*Ordenamos por el Consecutivo*/
  if((isset($datos['numCodigo'])?$datos['numCodigo']:'') == '' & (isset($datos['nomDocumento'])?$datos['nomDocumento']:'') == ''
  & (isset($datos['fechaIni'])?$datos['fechaIni']:'')){
  }
  $sql.=" ORDER BY OID DESC
  LIMIT $top";
  $sqlQuery=mysqli_query($conexion,$sql) or die ("Error al momento de listar los envíos de correo ".mysqli_error($conexion));
  echo '
  <div class="table-responsive">
  <table class="table table-striped table-bordered table-hover" style="width:100%;">
  <thead>
  <tr>
  <th scope="col" style="width:4%;text-align:center;"># Radicado</th>
  <th scope="col" style="width:20%;text-align:center;">Nombre destinatario</th>
  <th scope="col" style="width:20%;text-align:center;">Correo electronico</th>
  <th scope="col" style="width:10%;text-align:center;">Usuario envío</th>
  <th scope="col" style="width:10%;text-align:center;">Fecha envío</th>
  <th scope="col" style="width:2%;text-align:center;">Estado</th>
  <th scope="col" style="width:2%;text-align:center;">Editar/Visualizar</th>
  </tr>
  </thead>
  <tbody>
  ';
  $i = 0;
  while($row = mysqli_fetch_array($sqlQuery)){
    $oid = $row['OID'];
    switch ($row['SN_ESTADO']) {
      case '0':
      $url = "frontEnd.php?oid=$oid";
      // $img = "assets/img/edit.png";
      $img = "assets/img/ver.png";
      $title='Visualizar';
      $content = '<i class="fa fa-circle text-danger"></i>';
      break;
      case '1':
      $url = "frontEnd.php?oid=$oid";
      $img = "assets/img/ver.png";
      $title = 'Visualizar';
      $content = '<i class="fa fa-circle text-info"></i>';
      break;
    }
    echo '
    <tr>
    <th scope="row" style="text-align:center;">'.$row['OID'].'</th>
    <td scope="row">'.$row['DS_NOMDESTINATARIO'].'</td>
    <td scope="row">'.$row['DS_CORREODESTINATARIO'].'</td>
    <td scope="row">'.$row['CD_USUENVIA'].'</td>
    <td scope="row">'.$row['DT_FECHAENVIA'].'</td>
    <td scope="row" style="text-align:center;">'.$content.'</td>
    <td scope="row" style="text-align:center;"><a href="'.$url.'" data-toggle="tooltip" title="'.$title.'"><img class="addPagare" id="addPagare" title="" src="'.$img.'" width="20" height="20"></a> </td>
    </tr>
    ';
    $i++;
  }
  if($i == 1){
    $i = "$i Registro";
  }else{
    $i = "$i Registros";
  }
  echo"<thead><th colspan='7' style='text-align:center;'>$i</th></thead>";
  echo '
  </tbody>
  </table>
  </div>
  ';
  mysqli_close($conexion);
}
 ?>
