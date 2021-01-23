<?php
// Función que inserta la información
function insertCompania($datos){
  conectar($conexion);
  getHost($fec,$host);
  $usu = $_SESSION['session'];
  $nomCompania = $datos['nomCompania'];
  $sqlVal = "SELECT DS_NOMCOMPANIA
  FROM companias
  WHERE DS_NOMCOMPANIA = '$nomCompania'";
  $sqlQueryVal = mysqli_query($conexion,$sqlVal) or die ("Error: Al momento de insertar la información de la compañia ".mysqli_error($conexion));
  $rowVal = mysqli_fetch_array($sqlQueryVal);
  if ($rowVal['DS_NOMCOMPANIA'] == $nomCompania){
    $tipoMsg = 'error';
    $accion = 'relocate';
    $msg = 'La compañia ya se encuentra registrada';
    mensajesAplicaciones($tipoMsg, $accion,$msg);
  }else{
    $sql = "INSERT INTO companias (DS_NOMCOMPANIA,SN_ESTADO,CD_USUDILIGENCIA,DS_HOSTDILIGENCIA,DT_FECHADILIGENCIA)
    VALUES('".$datos['nomCompania']."','1','$usu','$host','$fec')";
    $sqlQuery=mysqli_query($conexion,$sql) or die ("Error: Al momento de insertar la información de la compañia ".mysqli_error($conexion));
    $tipoMsg = 'success';
    $accion = 'relocate';
    $msg = 'Se realizo correctamente la inserción de la compañia';
    mensajesAplicaciones($tipoMsg, $accion,$msg);
    echo "<script>
    setTimeout(function(){window.location ='gestCompanias'; },1200);
    </script>";
  }
  mysqli_close($conexion);
}
/*Funcion que lista los correos corporativos*/
function listarCompanias($datos){
  conectar($conexion);
  /*Declaracion de variables para implementar determinado Top en la consulta*/
  $varIng1 = ((isset($datos['radicado'])?$datos['radicado']:'') != '');
  $varIng2 = ((isset($datos['nomDesti'])?$datos['nomDesti']:'') != '');
  $varIng4 = ((isset($datos['fechaIni'])?$datos['fechaIni']:'') != '');
  $varIng5 = ((isset($datos['estado'])?$datos['estado']:'') != '');
  /*Funcion que determina un Top a la consulta cuando se consultan datos*/
  if($varIng1 != '' || $varIng2 != '' || $varIng4 != '' || $varIng5 != ''){
    $top="1000";
  }
  else{
    $top="50";
  }
  $sql = "SELECT OID, DS_NOMCOMPANIA,SN_ESTADO,CD_USUDILIGENCIA,DS_HOSTDILIGENCIA,DT_FECHADILIGENCIA
  FROM companias
  WHERE 1=1 ";
  if((isset($varIng1)?$varIng1:'') != ''){
    $sql.= " AND OID = '" . $datos['radicado']. "'";
  }
  if((isset($varIng2)?$varIng2:'') != ''){
    $sql.= " AND  DS_NOMCOMPANIA LIKE '%".$datos['nomDesti']."%'";
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
  <th scope="col" style="width:20%;text-align:center;">Nombre compañia</th>
  <th scope="col" style="width:10%;text-align:center;">Usuario envío</th>
  <th scope="col" style="width:10%;text-align:center;">Fecha envío</th>
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
      $url = "frontFactura.php?oid=$oid&accion=facturacion";
      // $img = "assets/img/edit.png";
      $img = "assets/img/ver.png";
      $title='Visualizar';
      $content = '<i class="fa fa-circle text-danger"></i>';
      break;
      case '1':
      $url = "frontFactura.php?oid=$oid&accion=facturacion";
      $img = "assets/img/ver.png";
      $title = 'Visualizar';
      $content = '<i class="fa fa-circle text-info"></i>';
      break;
    }
    echo '
    <tr>
    <th scope="row" style="text-align:center;">'.$row['OID'].'</th>
    <td scope="row">'.$row['DS_NOMCOMPANIA'].'</td>
    <td scope="row">'.$row['CD_USUDILIGENCIA'].'</td>
    <td scope="row">'.$row['DT_FECHADILIGENCIA'].'</td>
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
