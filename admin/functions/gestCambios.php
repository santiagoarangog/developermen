<?php
/*Función que carga la información del cambio*/
function cargarInfoCambio($oid,&$result){
  include('conexion.php');
  conectar($conexion);
  $sql = "SELECT A.OID AS OIDCAMBIO,DS_NOMDESTINATARIO,DS_CORREODESTINATARIO,B.DS_NOMCOMPANIA AS DS_NOMCOMPANIA,DS_CAMBIO,A.DS_URL,SN_COPIA,A.SN_ESTADO,CD_USUENVIA,DS_HOSTENVIA,DT_FECHAENVIA
  FROM correoCambios A
  INNER JOIN companias B ON A.FK_OIDCOMPANIA = B.OID
  WHERE A.OID = '$oid'";
  $error = "Error: No se puede cargar la información del cambio";
  executeQuery($conexion, $sql , $error,$stmt);
  $result = mysqli_fetch_array($stmt);
  closeConnection($stmt,$conexion);
}
/*Función que carga la información del cambio*/
function cargarInfoCambioModal($oid,&$result){
  conectar($conexion);
  $sql = "SELECT A.OID AS OIDCAMBIO,DS_NOMDESTINATARIO,DS_CORREODESTINATARIO,FK_OIDCOMPANIA,DS_CAMBIO,A.DS_URL,SN_COPIA,A.SN_ESTADO,CD_USUENVIA,DS_HOSTENVIA,DT_FECHAENVIA
  FROM correoCambios A
  WHERE A.OID = '$oid'";
  $error = "Error: No se puede realizar la consulta de la información del modal";
  executeQuery($conexion, $sql , $error,$stmt);
  $result = mysqli_fetch_array($stmt);
  closeConnection($stmt,$conexion);
}
/*Funcion que lista las compañias compradoras*/
function listarCompania($oidCompania){
  conectar($conexion);
  $sql = "SELECT OID,DS_NOMCOMPANIA
  FROM companias
  WHERE SN_ESTADO = '1'";
  $error = "Error: No se puede realizar la consulta";
  executeQuery($conexion, $sql , $error,$stmt);
  while($row = mysqli_fetch_array($stmt)){
    echo"<option value='".$row['OID']."'";
    if($oidCompania == $row['OID']){
      echo" selected='selected'";
    }
    echo">".$row['DS_NOMCOMPANIA']."</option>";
  }
  closeConnection($stmt,$conexion);
}
/*Funcion que lista los correos corporativos*/
function listarCorreoCambio($datos){
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
  $sql = "SELECT OID,DS_NOMDESTINATARIO,DS_CORREODESTINATARIO,FK_OIDCOMPANIA,DS_CAMBIO,DS_URL,SN_COPIA,SN_ESTADO,CD_USUENVIA,DS_HOSTENVIA,DT_FECHAENVIA
  FROM correoCambios
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
      $url = "gestCambios.php?oid=$oid&accion=cambios";
      // $img = "assets/img/edit.png";
      $img = "assets/img/ver.png";
      $title='Visualizar';
      $content = '<i class="fa fa-circle text-danger"></i>';
      break;
      case '1':
      $url = "gestCambios.php?oid=$oid&accion=cambios";
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
/*Funcion que lista los correos de mejoras*/
function listarCorreoMejora($datos){
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
  $sql = "SELECT A.OID AS OIDMEJORA,DS_NOMDESTINATARIO,DS_CORREODESTINATARIO,B.DS_NOMCOMPANIA AS DS_NOMCOMPANIA,DS_MEJORA,DS_URL,SN_COPIA,A.SN_ESTADO,CD_USUENVIA,DS_HOSTENVIA,DT_FECHAENVIA
  FROM correoMejoras A
  INNER JOIN companias B ON A.FK_OIDCOMPANIA = B.OID
  WHERE 1=1 ";
  if((isset($varIng1)?$varIng1:'') != ''){
    $sql.= " AND A.OID = '" . $datos['radicado']. "'";
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
  $sql.=" ORDER BY A.OID DESC
  LIMIT $top";
  $sqlQuery=mysqli_query($conexion,$sql) or die ("Error: Al momento de listar los envíos de correo de mejora ".mysqli_error($conexion));
  echo '
  <div class="table-responsive">
  <table class="table table-striped table-bordered table-hover" style="width:100%;">
  <thead>
  <tr>
  <th scope="col" style="width:4%;text-align:center;"># Radicado</th>
  <th scope="col" style="width:20%;text-align:center;">Nombre destinatario</th>
  <th scope="col" style="width:20%;text-align:center;">Correo electronico</th>
  <th scope="col" style="width:20%;text-align:center;">Nombre de la compañia</th>
  <th scope="col" style="width:10%;text-align:center;">Usuario envío</th>
  <th scope="col" style="width:10%;text-align:center;">Fecha envío</th>
  <th scope="col" style="width:2%;text-align:center;">Editar/Visualizar</th>
  </tr>
  </thead>
  <tbody>
  ';
  $i = 0;
  while($row = mysqli_fetch_array($sqlQuery)){
    $oid = $row['OIDMEJORA'];
    switch ($row['SN_ESTADO']) {
      case '0':
      $url = "gestCambios.php?oid=$oid&accion=cambios";
      // $img = "assets/img/edit.png";
      $img = "assets/img/ver.png";
      $title='Visualizar';
      $content = '<i class="fa fa-circle text-danger"></i>';
      break;
      case '1':
      $url = "gestCambios.php?oid=$oid&accion=cambios";
      $img = "assets/img/ver.png";
      $title = 'Visualizar';
      $content = '<i class="fa fa-circle text-info"></i>';
      break;
    }
    echo '
    <tr>
    <th scope="row" style="text-align:center;">'.$row['OIDMEJORA'].'</th>
    <td scope="row">'.$row['DS_NOMDESTINATARIO'].'</td>
    <td scope="row">'.$row['DS_CORREODESTINATARIO'].'</td>
    <td scope="row">'.$row['DS_NOMCOMPANIA'].'</td>
    <td scope="row">'.$row['CD_USUENVIA'].'</td>
    <td scope="row">'.$row['DT_FECHAENVIA'].'</td>
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
/*Función que carga la información de las mejoras*/
function informacionMejora($oid,&$result,&$producto){
  include('conexion.php');
  conectar($conexion);
  $sql = "SELECT A.OID AS OIDMEJORA,DS_FECHA,DS_NOMDESTINATARIO,DS_CORREODESTINATARIO,FK_OIDCOMPANIA,B.DS_NOMCOMPANIA AS DS_NOMCOMPANIA,DS_MEJORA,DS_URL,SN_COPIA,A.SN_ESTADO,CD_USUENVIA,DS_HOSTENVIA,DT_FECHAENVIA
  FROM correoMejoras A
  INNER JOIN companias B ON A.FK_OIDCOMPANIA = B.OID
  WHERE A.OID = '$oid'";
  $sqlQuery=mysqli_query($conexion,$sql) or die ("Error: Al momento de generar la consulta ".mysqli_error($conexion));
  $result = mysqli_fetch_array($sqlQuery);
  nomProducto($result['FK_OIDCOMPANIA'],$producto);
  mysqli_close($conexion);
}
/*Función que devuelve el producto adquirido por la compañia*/
function nomProducto($oidCompania,&$producto){
  conectar($conexion);
  $sql = "SELECT MAX(OID) AS OIDPRODUCTO,DS_PRODUCTO AS DS_PRODUCTO
  FROM facturacion
  WHERE SN_ESTADO = '1' AND FK_OIDCOMPANIA = '$oidCompania'";
  $sqlQuery=mysqli_query($conexion,$sql) or die ("Error: Al momento de consultar el producto ".mysqli_error($conexion));
  while($row = mysqli_fetch_array($sqlQuery)){
    $producto = $row['DS_PRODUCTO'];
  }
}
?>
