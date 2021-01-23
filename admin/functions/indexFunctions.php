<?php
// Funcion que lista las incidencias según el estado en que esten
function incidenciasXEstado(){
  echo '
  <script type="text/javascript">
  google.charts.load("current", {"packages":["corechart"]});
  google.charts.setOnLoadCallback(drawChart);
  function drawChart() {
    var data = google.visualization.arrayToDataTable([
      ["Tipo de Incidencia", "# Incidencias","% Incidencias"],
      ';
      conectarSopor($conexionSopor);
      /*Consulta que devuelve el total de correos no leidos*/
      $sql = "SELECT COUNT(OID) AS OIDCORREO, 'ABIERTAS' AS RESP
      FROM SUP_INCIDENCIAS WHERE SN_ESTADO = '1'
      UNION
      SELECT COUNT(OID) AS OIDCORREO, 'EN PROGRESO' AS RESP
      FROM SUP_INCIDENCIAS WHERE SN_ESTADO = '2'
      UNION
      SELECT COUNT(OID) AS OIDCORREO, 'RESUELTAS' AS RESP
      FROM SUP_INCIDENCIAS WHERE SN_ESTADO = '3'";
      $executeQuery = mysqli_query($conexionSopor,$sql);
      /*Consulta que devuelve el total de correos leidos*/
      $sqLeido = "SELECT COUNT(OID) AS OIDTOTALCORREO
      FROM SUP_INCIDENCIAS";
      $executeLeido = mysqli_query($conexionSopor,$sqLeido);
      $rowLeido = mysqli_fetch_array($executeLeido);
      $totalProces = $rowLeido['OIDTOTALCORREO'];
      /*Funcion que genera la graficacion de la informacion*/
      while ($row = mysqli_fetch_array($executeQuery)) {
        $por = (isset($row['OIDCORREO'])?$row['OIDCORREO']:'' * 100) / $totalProces;
        echo "['".$row['RESP']."',".$row['OIDCORREO'].",".$por."],";
      }
      echo "]);
      var options = {
        colors: ['#e63e3e', '#0da7e0', '#64e63e', '#ec8f6e', '#f3b49f', '#f6c7b6'],
        // 'width':550,
        'height':300,
        'legend':'bottom',
        is3D: true,
        pointSize: 10,
        series: {
          0: { axis: '# de incidencias' }, // Bind series 0 to an axis named 'distance'.
          1: { axis: '% Incidencias' } // Bind series 1 to an axis named 'brightness'.
        },
        axes: {
          y: {
            distance: {label: '# Incidencias'}, // Left y-axis.
            brightness: {side: 'right', label: '% Incidencias'} // Right y-axis.
          }
        }
      };
      var chart = new google.visualization.PieChart(document.getElementById('pie_chart_incidencias'));
      chart.draw(data, options);
    }
    </script>";
  }
// Funcion que lista las incidencias creadas por nuestros usuarios
function listarIncidencias(){
  conectarSopor($conexionSopor);
  $sql = "SELECT OID,DS_TITLE,DS_TIPOINCIDENCIA,DS_DESCRIPCION,SN_ESTADO,CD_USUDILIGENCIA,DS_HOSTDILIGENCIA,DT_FECHADILIGENCIA
  FROM SUP_INCIDENCIAS
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
  LIMIT 3";
  $error = 'Error: No se pueden listar las incidencias';
  executeQuery($conexionSopor,$sql,$error,$stmt);
  echo '
  <div class="table-responsive">
  <table class="table table-striped table-bordered table-hover" style="width:100%;">
  <thead>
  <tr>
  <th scope="col" style="width:5%;text-align:center;"># Radicado</th>
  <th scope="col" style="width:15%;text-align:center;">Titulo incidencia</th>
  <th scope="col" style="width:20%;text-align:center;">Tipo de incidencia</th>
  <th scope="col" style="width:10%;text-align:center;">Descripción</th>
  <th scope="col" style="width:10%;text-align:center;">Usuario diligencia</th>
  <th scope="col" style="width:10%;text-align:center;">Fecha diligencia</th>
  <th scope="col" style="width:2%;text-align:center;">Estado</th>
  <th scope="col" style="width:2%;text-align:center;">Gestionar</th>
  </tr>
  </thead>
  <tbody>
  ';
  $i = 0;
  while($row = mysqli_fetch_array($stmt)){
    $oid = $row['OID'];
    switch ($row['SN_ESTADO']) {
      case '1':
      $content = '<i class="fa fa-circle text-danger"></i>';
      break;
      case '2':
      $content = '<i class="fa fa-circle text-info"></i>';
      break;
      case '3':
      $content = '<i class="fa fa-circle text-success"></i>';
      break;
      default:
      $content = '<i class="fa fa-circle text-default"></i>';
      break;
    }
    echo '
    <tr>
    <th scope="row" style="text-align:center;">'.$row['OID'].'</th>
    <td scope="row">'.$row['DS_TITLE'].'</td>
    <td scope="row">'.$row['DS_TIPOINCIDENCIA'].'</td>
    <td scope="row">'.$row['DS_DESCRIPCION'].'</td>
    <td scope="row">'.$row['CD_USUDILIGENCIA'].'</td>
    <td scope="row">'.$row['DT_FECHADILIGENCIA'].'</td>
    <td scope="row" style="text-align:center;">'.$content.'</td>
    <td scope="row" style="text-align:center;"><a href="soporte.php?oid='.$oid.'" data-toggle="tooltip" title="Gestionar"><img class="addPagare" id="addPagare" title="" src="assets/img/edit.png" width="20" height="20"></a> </td>
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
  closeConnection($stmt,$conexionSopor);
}

/*Funcion que lista los correos corporativos*/
function listarCorreoFrontEnd($datos){
  conectar($conexion);
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
  LIMIT 2";
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
  <th scope="col" style="width:2%;text-align:center;">Gestionar</th>
  </tr>
  </thead>
  <tbody>
  ';
  $i = 0;
  while($row = mysqli_fetch_array($sqlQuery)){
    $oid = $row['OID'];
    switch ($row['SN_ESTADO']) {
      case '0':
      $content = '<i class="fa fa-circle text-danger"></i>';
      break;
      case '1':
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
    <td scope="row" style="text-align:center;"><a href="frontEnd.php?oid='.$oid.'" data-toggle="tooltip" title="Gestionar"><img class="addPagare" id="addPagare" title="" src="assets/img/edit.png" width="20" height="20"></a> </td>
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
/*Funcion que genera la grafica de envios de Email*/
function envioEmail(){
  echo '
  <script type="text/javascript">
  google.charts.load("current", {"packages":["corechart"]});
  google.charts.setOnLoadCallback(drawChart);
  function drawChart() {
    var data = google.visualization.arrayToDataTable([
      ["Respuesta", "Cantidad"],
      ';
      conectar($conexion);
      /*Consulta que devuelve el total de correos no leidos*/
      $sql = "SELECT COUNT(OID) AS OIDCORREO, 'NO LEIDO' AS RESP
      FROM ADM_CORREOFRONTEND WHERE SN_ESTADO = '0'
      UNION
      SELECT COUNT(OID) AS OIDCORREO, 'LEIDO' AS RESP
      FROM ADM_CORREOFRONTEND WHERE SN_ESTADO = '1'";
      $executeQuery = mysqli_query($conexion,$sql);
      /*Consulta que devuelve el total de correos leidos*/
      $sqLeido = "SELECT COUNT(OID) AS OIDTOTALCORREO
      FROM ADM_CORREOFRONTEND";
      $executeLeido = mysqli_query($conexion,$sqLeido);
      $rowLeido = mysqli_fetch_array($executeLeido);
      $totalProces = $rowLeido['OIDTOTALCORREO'];
      /*Funcion que genera la graficacion de la informacion*/
      while ($row = mysqli_fetch_array($executeQuery)) {
        $por = ($row['OIDCORREO'] * 100) / $totalProces;
        echo "['".$row['RESP']."',".$por."],";
      }
      echo "]);
      var options = {
        colors: ['#e63e3e', '#0da7e0', '#64e63e', '#ec8f6e', '#f3b49f', '#f6c7b6'],
        // 'width':550,
        'height':300,
        'legend':'bottom',
        is3D: true,
        pointSize: 10,
        series: {
          0: { axis: '# de incidencias' }, // Bind series 0 to an axis named 'distance'.
          1: { axis: '% Incidencias' } // Bind series 1 to an axis named 'brightness'.
        },
        axes: {
          y: {
            distance: {label: '# Incidencias'}, // Left y-axis.
            brightness: {side: 'right', label: '% Incidencias'} // Right y-axis.
          }
        }
      };
      var chart = new google.visualization.PieChart(document.getElementById('pie_chart'));
      chart.draw(data, options);
    }
    </script>";
}
?>
