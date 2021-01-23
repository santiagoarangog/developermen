<?php
/*Funcion que lista los correos corporativos*/
function listarCorreoFacturacion($datos){
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
  $sql = "SELECT OID,DS_FECHA,DS_NOMDESTINATARIO,DS_CORREODESTINATARIO,DS_PRODUCTO,CD_COSTOPRODUCTO,CD_RADICADO,SN_TIPODOMINIO,CD_VALORDOMINIO,CD_GESTCOMDOMINI,CD_COSTODESARRO,
  SN_METPAGO,CD_PAGOREALIZADO,DS_NOMUSUARIO,SN_OBSEQUIO1,SN_OBSEQUIO2,SN_MOROSOS,SN_COPIA,CD_USUDILIGENCIA,DS_HOSTDILIGENCIA,DT_FECHADILIGENCIA,SN_ESTADO,CD_USUDILIGENCIA,DT_FECHADILIGENCIA
  FROM ADM_FACTURACION
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
  $error = "Error: No se puede listar la información de la facturación";
  executeQuery($conexion,$sql,$error,$stmt);
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
  while($row = mysqli_fetch_array($stmt)){
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
    <td scope="row">'.$row['DS_NOMDESTINATARIO'].'</td>
    <td scope="row">'.$row['DS_CORREODESTINATARIO'].'</td>
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
  closeConnection($stmt,$conexion);
}
/*Funcion que lista los correos corporativos*/
function listarCorreoFrontEnd($datos){
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
  $error = "Error : No se puede consultar la información del correo front end";
  executeQuery($conexion,$sql,$error,$stmt);
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
  while($row = mysqli_fetch_array($stmt)){
    $oid = $row['OID'];
    switch ($row['SN_ESTADO']) {
      case '0':
      $url = "corCorpora.php?oid=$oid";
      // $img = "assets/img/edit.png";
      $img = "assets/img/ver.png";
      $title='Visualizar';
      $content = '<i class="fa fa-circle text-danger"></i>';
      break;
      case '1':
      $url = "corCorpora.php?oid=$oid";
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
/*Funcion que carga la información del proceso en el modal*/
function cargarInfoModal($oid,&$result){
  conectar($conexion);
  $sql = "SELECT OID,DS_NOMDESTINATARIO,DS_CORREODESTINATARIO,DS_ASUNTODESTINATARIO,DS_MENSAJEDESTINATARIO,SN_COPIA,
  CD_USUENVIA,DS_HOSTENVIA,DT_FECHAENVIA,SN_ESTADO
  FROM ADM_CORREOFRONTEND
  WHERE OID = '$oid'";
  $error = "Error: No se puede consultar la información del correo seleccionado";
  executeQuery($conexion,$sql,$error,$stmt);
  $result = mysqli_fetch_array($stmt);
  closeConnection($stmt,$conexion);
}
/*Funcion que carga la información del proceso en el modal*/
function cargarInfoModalFacturacion($oid,&$result2){
  conectar($conexion);
  $sql = "SELECT DS_FECHA,DS_NOMDESTINATARIO,DS_CORREODESTINATARIO,DS_PRODUCTO,CD_COSTOPRODUCTO,CD_RADICADO,SN_TIPODOMINIO,CD_VALORDOMINIO,CD_GESTCOMDOMINI,CD_COSTODESARRO,
  SN_METPAGO,CD_PAGOREALIZADO,DS_NOMUSUARIO,SN_OBSEQUIO1,SN_OBSEQUIO2,SN_MOROSOS,SN_COPIA,CD_USUDILIGENCIA,DS_HOSTDILIGENCIA,DT_FECHADILIGENCIA,SN_ESTADO
  FROM ADM_FACTURACION
  WHERE OID = '$oid'";
  $error = "Error: No se puede cargar la información de la facturación";
  executeQuery($conexion,$sql,$error,$stmt);
  $result2 = mysqli_fetch_array($stmt);
  closeConnection($stmt,$conexion);
}
/*Funcion que lista los correos de contactanos*/
function listarCorreoContactanos($datos){
  conectarDvm($conexionDvm);
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
  $sql = "SELECT OID,NOMBRE,MAIL,PRODUCTO,SERVICIO,FECHA,COMENTARIO,CD_TELEFONO,DS_DESCRIPCION,POLITICA,SN_ESTADO
  FROM contactanos
  WHERE 1=1 ";
  if((isset($varIng1)?$varIng1:'') != ''){
    $sql.= " AND OID = '" . $datos['radicado']. "'";
  }
  if((isset($varIng2)?$varIng2:'') != ''){
    $sql.= " AND  NOMBRE LIKE '%".$datos['nomDesti']."%'";
  }
  if((isset($varIng3)?$varIng3:'') != ''){
    $sql.= " AND  MAIL = '".$datos['correoElectro']."'";
  }
  if((isset($varIng4)?$varIng4:'') != ''){
    $sql.= " AND CAST(FECHA AS DATE) BETWEEN '" . $datos['fechaIni']. "' AND '" . $datos['fechaFin']. "'";
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
  $error = "Error: No se puede listar los envios de correo";
  executeQuery($conexionDvm,$sql,$error,$stmt);
  echo '
  <div class="table-responsive">
  <table class="table table-striped table-bordered table-hover" style="width:100%;">
  <thead>
  <tr>
  <th scope="col" style="width:4%;text-align:center;"># Radicado</th>
  <th scope="col" style="width:15%;text-align:center;">Nombre destinatario</th>
  <th scope="col" style="width:15%;text-align:center;">Correo electronico</th>
  <th scope="col" style="width:10%;text-align:center;">Producto</th>
  <th scope="col" style="width:10%;text-align:center;">Servicio</th>
  <th scope="col" style="width:20%;text-align:center;">Comentario</th>
  <th scope="col" style="width:2%;text-align:center;">Estado</th>
  <th scope="col" style="width:2%;text-align:center;">Tramite</th>
  </tr>
  </thead>
  <tbody>
  ';
  $i = 0;
  while($row = mysqli_fetch_array($stmt)){
    $oid = $row['OID'];
    switch ($row['SN_ESTADO']) {
      case '0':
      $url = "corContac.php?oid=$oid&accion=editar";
      $img = "assets/img/edit.png";
      $title = 'Editar';
      $content = '<i class="fa fa-circle text-danger"></i>';
      break;
      case '1':
      $url = "corContac.php?oid=$oid&accion=editar";
      $img = "assets/img/edit.png";
      $title='Editar';
      $content = '<i class="fa fa-circle text-info"></i>';
      break;
      case '2':
      $url = "corContac.php?oid=$oid&accion=ver";
      $img = "assets/img/ver.png";
      $title = 'Visualizar';
      $content = '<i class="fa fa-circle text-info"></i>';
      break;
    }
    echo '
    <tr>
    <th scope="row" style="text-align:center;">'.$row['OID'].'</th>
    <td scope="row">'.$row['NOMBRE'].'</td>
    <td scope="row">'.$row['MAIL'].'</td>
    <td scope="row">'.$row['PRODUCTO'].'</td>
    <td scope="row">'.$row['SERVICIO'].'</td>
    <td scrope="row">'.$row['COMENTARIO'].'</td>
    <td scope="row" style="text-align:center;">'.$content.'</td>
    <td scope="row" style="text-align:center;"><a href="'.$url.'" data-toggle="tooltip" data-placement="bottom" title="'.$title.'"><img class="addPagare" id="addPagare" title="" src="'.$img.'" width="20" height="20"></a> </td>
    </tr>
    ';
    $i++;
  }
  if($i == 1){
    $i = "$i Registro";
  }else{
    $i = "$i Registros";
  }
  echo"<thead><th colspan='8' style='text-align:center;'>$i</th></thead>";
  echo '
  </tbody>
  </table>
  </div>
  ';
  closeConnection($stmt,$conexionDvm);
}
?>
