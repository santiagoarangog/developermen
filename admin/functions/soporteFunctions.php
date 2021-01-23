<?php
/*!
@functions Aplicativo (Administracion Developer Men)
@Page admin (.php)
@version 1.0.
@description Funciones que integran el modulo de soporte.
@Autor Santiago Arango Gutierrez - Ceo y Development Developer Men
@Año 2018.
@Modificacion _
@Año modificacion _
*/
/*Funcion que lista los correos corporativos*/
function listarIncidenciaPendiente($datos){
  conectarSopor($conexionSopor);
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
  $sql = "SELECT OID,FK_OIDCOMPANIA,DS_TITLE,DS_TIPOINCIDENCIA,DS_DESCRIPCION,SN_ESTADO,CD_USUDILIGENCIA,DT_FECHADILIGENCIA
  FROM SUP_INCIDENCIAS
  WHERE 1=1 AND SN_ESTADO = '1'";
  if((isset($varIng1)?$varIng1:'') != ''){
    $sql.= " AND OID = '" . $datos['radicado']. "'";
  }
  if((isset($varIng2)?$varIng2:'') != ''){
    $sql.= " AND  DS_TITLE LIKE '%".$datos['nomDesti']."%'";
  }
  if((isset($varIng3)?$varIng3:'') != ''){
    $sql.= " AND  DS_CORREODESTINATARIO = '".$datos['correoElectro']."'";
  }
  if((isset($varIng4)?$varIng4:'') != ''){
    $sql.= " AND CAST(DT_FECHADILIGENCIA AS DATE) BETWEEN '" . $datos['fechaIni']. "' AND '" . $datos['fechaFin']. "'";
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
  $error = "Error: No se pueden listar las incidencias pendientes";
  executeQuery($conexionSopor,$sql,$error,$stmt);
  echo '
  <div class="table-responsive">
  <table class="table table-striped table-bordered table-hover" style="width:100%;">
  <thead>
  <tr>
  <th scope="col" style="width:4%;text-align:center;"># Radicado</th>
  <th scope="col" style="width:20%;text-align:center;">Titulo incidencia</th>
  <th scope="col" style="width:20%;text-align:center;">Descripción incidencia</th>
  <th scope="col" style="width:10%;text-align:center;">Tipo incidencia</th>
  <th scope="col" style="width:10%;text-align:center;">Usuario diligencia</th>
  <th scope="col" style="width:10%;text-align:center;">Fecha diligencia</th>
  <th scope="col" style="width:2%;text-align:center;">En progreso</th>
  </tr>
  </thead>
  <tbody>
  ';
  $i = 0;
  while($row = mysqli_fetch_array($stmt)){
    $oid = $row['OID'];
    echo '
    <tr>
    <th scope="row" style="text-align:center;">'.$row['OID'].'</th>
    <td scope="row">'.$row['DS_TITLE'].'</td>
    <td scope="row">'.$row['DS_DESCRIPCION'].'</td>
    <td scope="row">'.$row['DS_TIPOINCIDENCIA'].'</td>
    <td scope="row">'.$row['CD_USUDILIGENCIA'].'</td>
    <td scope="row">'.$row['DT_FECHADILIGENCIA'].'</td>
    <td scope="row" style="text-align:center;"><a class="btn btn-info" onclick="enProgreso('.$oid.');" data-toggle="tooltip"><img class="addPagare" id="addPagare" title="" src="assets/img/check.png" width="20" height="20"></a></td>
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
  closeConnection($stmt,$conexionSopor);
}
/*Funcion que lista los correos corporativos*/
function listarIncidenciaProgreso($datos){
  conectarSopor($conexionSopor);
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
  $sql = "SELECT OID,FK_OIDCOMPANIA,DS_TITLE,DS_TIPOINCIDENCIA,DS_DESCRIPCION,SN_ESTADO,CD_USUDILIGENCIA,DT_FECHADILIGENCIA
  FROM SUP_INCIDENCIAS
  WHERE 1=1 AND SN_ESTADO = '1'";
  if((isset($varIng1)?$varIng1:'') != ''){
    $sql.= " AND OID = '" . $datos['radicado']. "'";
  }
  if((isset($varIng2)?$varIng2:'') != ''){
    $sql.= " AND  DS_TITLE LIKE '%".$datos['nomDesti']."%'";
  }
  if((isset($varIng3)?$varIng3:'') != ''){
    $sql.= " AND  DS_CORREODESTINATARIO = '".$datos['correoElectro']."'";
  }
  if((isset($varIng4)?$varIng4:'') != ''){
    $sql.= " AND CAST(DT_FECHADILIGENCIA AS DATE) BETWEEN '" . $datos['fechaIni']. "' AND '" . $datos['fechaFin']. "'";
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
  $error = "Error: No se pueden listar las incidencias pendientes";
  executeQuery($conexionSopor,$sql,$error,$stmt);
  echo '
  <div class="table-responsive">
  <table class="table table-striped table-bordered table-hover" style="width:100%;">
  <thead>
  <tr>
  <th scope="col" style="width:4%;text-align:center;"># Radicado</th>
  <th scope="col" style="width:20%;text-align:center;">Titulo incidencia</th>
  <th scope="col" style="width:20%;text-align:center;">Descripción incidencia</th>
  <th scope="col" style="width:10%;text-align:center;">Tipo incidencia</th>
  <th scope="col" style="width:10%;text-align:center;">Usuario diligencia</th>
  <th scope="col" style="width:10%;text-align:center;">Fecha diligencia</th>
  <th scope="col" style="width:2%;text-align:center;">En progreso</th>
  </tr>
  </thead>
  <tbody>
  ';
  $i = 0;
  while($row = mysqli_fetch_array($stmt)){
    $oid = $row['OID'];
    echo '
    <tr>
    <th scope="row" style="text-align:center;">'.$row['OID'].'</th>
    <td scope="row">'.$row['DS_TITLE'].'</td>
    <td scope="row">'.$row['DS_DESCRIPCION'].'</td>
    <td scope="row">'.$row['DS_TIPOINCIDENCIA'].'</td>
    <td scope="row">'.$row['CD_USUDILIGENCIA'].'</td>
    <td scope="row">'.$row['DT_FECHADILIGENCIA'].'</td>
    <td scope="row" style="text-align:center;"><a href="diliProgreso?oid='.$oid.'"><i class="pe-7s-exapnd2 text-info" style="font-size:25px;cursor: hand;"></i></a></td>
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
  closeConnection($stmt,$conexionSopor);
}
?>
