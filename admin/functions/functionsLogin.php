<?php
/*!
@function seccionCerrada
@version 1.0
@description Funcion que realiza una validacion si el usuario ya realizo la votacion esta solo se genera en caso que el usuario modifique el id que se brinda por $_GET
@Autor Santiago Arango Gutierrez - Auxiliar de analisis y desarrollo Clínica Somer.
@Año 2017.
@Modificacion _
@Año modificacion _
*/
require('sendMail.php');
/*Función fecha actual*/
function actual_date(&$date){
  $week_days = array ("Domingo", "Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sabado");
  $months = array ("", "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
  $year_now = date ("Y");
  $month_now = date ("n");
  $day_now = date ("j");
  $week_day_now = date ("w");
  $date = $week_days[$week_day_now] . ", " . $day_now . " de " . $months[$month_now] . " de " . $year_now;
}
/*Funcion para generar token Aleatorio*/
function token($username,&$newToken){
  $caracteres='ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
  $longpalabra=8;
  for($pass='', $n=strlen($caracteres)-1; strlen($pass) < $longpalabra ; ) {
    $x = rand(0,$n);
    $pass.= $caracteres[$x];
  }
  $passHash = password_hash($pass, PASSWORD_BCRYPT);
  $newToken = $passHash;
  conectar($conexion);
  $sqlUpdate = "UPDATE ADM_LOGIN
  SET DS_TOKEN = '$newToken'
  WHERE DS_USERNAME = '$username'";
  $error = 'Error: No se puede actualizar el token al usuario';
  executeQuery($conexion, $sqlUpdate , $error,$stmt);
  mysqli_close($conexion);
}
/*Funcion para generar contraseña aleatoria*/
function tokenRecovery(&$token){
  $caracteres='ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
  $longpalabra=8;
  for($pass='', $n=strlen($caracteres)-1; strlen($pass) < $longpalabra ; ) {
    $x = rand(0,$n);
    $pass.= $caracteres[$x];
  }
  $passHash = password_hash($pass, PASSWORD_BCRYPT);
  $token = $passHash;
}
/*Función recuperar contraseña*/
function recoveryPassword($correo,&$token){
  tokenRecovery($token);
  getHost($fec,$host);
  conectar($conexion);
  $sql = "INSERT INTO recoveryPassword (DS_EMAIL,DS_TOKEN,DT_FECHARECOVERY,SN_ESTADO)
  VALUES('$correo','$token','$fec','0')";
  $error = "Error: No se puede insertar la información del token";
  executeQuery($conexion,$sql,$error,$stmt);
}
/*Funcion para enviar la nueva contraseña*/
function enviarInformacion($datos){
  conectar($conexion);
  getHost($fec,$host);
  actual_date($date);
  $año = date('Y');
  $correo = $datos['email'];
  $sqlValCorreo="SELECT COUNT(OID) AS OIDCORREO,DS_EMAIL
  FROM ADM_LOGIN
  WHERE DS_EMAIL = '$correo'";
  $queryValCorreo=mysqli_query($conexion,$sqlValCorreo);
  $rowVal=mysqli_fetch_array($queryValCorreo);
  if ($rowVal['OIDCORREO'] <= '0') {
    $tipoMsg = 'warning';
    $accion = 'relocate';
    $msg = 'El correo electronico : '.$correo.' no se encuentra registrado en nuestro sitio';
    mensajesAplicaciones($tipoMsg, $accion, $msg);
  }else{
    $sqlValRecovery = "SELECT COUNT(OID) AS OIDRECOVERY
    FROM ADM_RECOVERYPASS
    WHERE DS_EMAIL = '$correo'
    AND SN_ESTADO = '0'";
    $error = "Error: No se puede consultar la información";
    executeQuery($conexion,$sqlValRecovery,$error,$stmt);
    $rowValRecovery = mysqli_fetch_array($stmt);
    if ($rowValRecovery['OIDRECOVERY'] <= '0') {
      $sqlConsulta="SELECT DS_EMAIL,DS_NOMBRE
      FROM ADM_LOGIN
      WHERE DS_EMAIL = '$correo'";
      $error = 'Error: No se puede consultar la información del usuario';
      executeQuery($conexion,$sqlConsulta,$error,$stmt);
      recoveryPassword($correo,$token);
      $row=mysqli_fetch_array($stmt);
      $usuario = $row['DS_NOMBRE'];
      $hashCorreo = password_hash($correo, PASSWORD_BCRYPT);
      $correoHash = $hashCorreo;
      $urlRecovery = 'https://developermen.com/admin/recovery?correo='.$correoHash.'&token='.$token;
      /*Funcion que consulta la información del Usuario*/
      $sqlInfoUsu = "SELECT OID, DS_CORREO, DS_IMAGEN
      FROM ADM_USERS
      WHERE DS_CORREO = '$correo'";
      $error = "Error: No se ha podido consultar correctamente la información del usuario";
      executeQuery($conexion,$sqlInfoUsu,$error,$stmt);
      $rowInfoUsu = mysqli_fetch_array($stmt);
      if ($rowInfoUsu['DS_IMAGEN'] != '') {
        $imagen = $rowInfoUsu['DS_IMAGEN'];
      }else {
        $imagen = 'assets/img/key.png';
      }
      /*Inicia correo para enviar la nueva contraseña*/
      $body='';
      $subject = ' 🔑 '. $usuario .'•'.utf8_decode(' Haz solicitado recuperar tu contraseña');
      $body2 ='
      <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
      <html xmlns="http://www.w3.org/1999/xhtml">
      <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <title>Haz solicitado recuperar tu contraseña &bull; Developer Men</title>
      <style type="text/css">
      @charset "UTF-8";';
      $body2.="
      /* @import url('https://fonts.googleapis.com/css?family=Maven+Pro:400,500,700,900|Playfair+Display:400,400i,700,700i,900,900i'); */
      /* @import url('https://fonts.googleapis.com/css?family=Montserrat:400,700|Source+Sans+Pro:400,700,400italic,700italic'); */
      @import url('https://fonts.googleapis.com/css?family=Raleway:200,400,600');
      *{
        font-family:'Raleway', Calibri, Arial, sans-serif;
      }

      body {
        font-family:'Raleway', Calibri, Arial, sans-serif;
        margin: 0; padding: 0; min-width: 100%!important;
        background-color: #ffffff;
      }
      img {height: auto;}
      .content {width: 100%; max-width: 600px;}
      .strong{font-weight:bold;}
      .header {padding: 40px 30px 20px 30px;}
      .innerpadding {padding: 30px 30px 30px 30px;}
      .innerpadding2 {padding: 20px 0px 10px 0px;}
      .borderbottom {border-bottom: 1px solid #f2eeed;}
      .subhead {font-size: 15px; color: #ffffff; letter-spacing: 10px;}
      .h1, .h2, .bodycopy {color: #153643;}
      .h1 {font-size: 33px; line-height: 38px; font-weight: bold;}
      .h2 {padding: 0 0 15px 0; font-size: 24px; line-height: 28px; font-weight: bold;}
      .bodycopy {font-size: 16px; line-height: 22px;}
      .button {text-align: center; font-size: 18px; font-weight: bold; padding: 0 30px 0 30px;}
      .button a {color: #ffffff; text-decoration: none;}
      .footer {padding: 20px 30px 15px 30px;}
      .footer a{color: #646FCB; text-decoration: none;}
      .footercopy {font-size: 14px; color: #000;}
      .footercopy a {color: #646FCB; text-decoration: none;}
      .bd-callout{padding:1.25rem;margin-top:1.25rem;margin-bottom:1.25rem;border:1px solid #eee;border-left-width:.25rem;border-radius:.25rem}
      .bd-callout h4{margin-top:0;margin-bottom:.25rem}
      .bd-callout p:last-child{margin-bottom:0}
      .bd-callout code{border-radius:.25rem}
      .bd-callout+.bd-callout{margin-top:-.25rem}
      .bd-callout-info{border-left-color:#5bc0de}
      .bd-callout-info h4{color:#5bc0de}
      .bd-callout-warning{border-left-color:#f0ad4e}
      .bd-callout-warning h4{color:#f0ad4e}
      .bd-callout-danger{border-left-color:#d9534f}
      .bd-callout-danger h4{color:#d9534f}
      .bd-examples .img-thumbnail{margin-bottom:.75rem}.bd-examples h4{margin-bottom:.25rem}
      .wrap{
        font-family: 'Courier New', Courier, monospace;
        padding: 25px;
        margin: 0 auto;
        width: 580px;
        background: rgb(255, 255, 255);
        border-radius: 4px;
        margin-top: 20px;
        border: 1px solid #E0E0E0;
        text-align: center;
      }
      .btnMostrar{
        color:#ffffff;
        background-color: #75B8E9;
        display: inline-block;
        border-radius: 3.5px;
        padding: 7px 7px 7px 7px;
        border: 1px solid #75B8E9;
        font-size: 100%;
        text-decoration: none;
        cursor: pointer;
      }
      @media only screen and (max-width: 550px), screen and (max-device-width: 550px) {
        body[yahoo] .hide {display: none!important;}
        body[yahoo] .buttonwrapper {background-color: transparent!important;}
        body[yahoo] .button {padding: 0px!important;}
        body[yahoo] .button a {background-color: #e05443; padding: 15px 15px 13px!important;}
        body[yahoo] .unsubscribe {display: block; margin-top: 20px; padding: 10px 50px; background: #2f3942; border-radius: 5px; text-decoration: none!important; font-weight: bold;}
      }

      /*@media only screen and (min-device-width: 601px) {
        .content {width: 600px !important;}
        .col425 {width: 425px!important;}
        .col380 {width: 380px!important;}
      }*/

      </style>
      </head>
      ";
      $body2.='<body yahoo bgcolor="#ffffff">
      <table width="100%" bgcolor="#f6f8f1" border="0" cellpadding="0" cellspacing="0">
      <tr>
      <td bgcolor="#ffffff">
      <!--[if (gte mso 9)|(IE)]>
      <table width="600" align="center" cellpadding="0" cellspacing="0" border="0">
      <tr>
      <td>
      <![endif]-->
      <table bgcolor="#ffffff" class="content" align="center" cellpadding="0" cellspacing="0" border="0">
      <tr>
      <td bgcolor="#ffffff">
      <img src="https://developermen.com/assets/img/logoFooter.png" style="width:50%;" border="0" alt="" />
      </td>
      </tr>
      <tr>
      <td class="innerpadding borderbottom">
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
      <td class="h2" style="text-align:center;">
      <img src="https://developermen.com/admin/'.$imagen.'" style="width:30%;" border="0" alt="" /><br>
      Hola! , <br>'.$usuario.' <br> falta poco para que recuperes tu contraseña
      </td>
      </tr>
      <tr>
      <td class="bodycopy" style="text-align:center;">
      '.$date.'
      </td>
      </tr>
      </table>
      </td>
      </tr>

      <tr>
      <td class="innerpadding borderbottom">
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
      <td class="h2" style="text-align:center;">
      Datos sobre tu contraseña:<hr>
      </td>
      </tr>
      <tr>
      <td class="bodycopy" style="text-align:justify;">
      <div class="bd-callout warning">
      <ul>
      <li>El link para insertar tu nueva contraseña estará disponible por tan solo 24 horas</li>
      <li>Trata de utilizar una contraseña diferente utilizada en otros sitios web</li>
      <li>No proporciones contraseñas a terceros</li>
      </ul>
      </div>
      </td>
      </tr>
      </table>
      </td>
      </tr>

      <tr>
      <td class="innerpadding borderbottom">
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
      <td class="h2" style="text-align:center;">
      <span class="strong">Cambia tu contraseña :</span>
      <a style="text-decoration:none;color:#646FCB;font-weight:bold;" href="'.$urlRecovery.'" target="_blank">Aquí</a>
      </td>
      </tr>
      </table>
      </td>
      </tr>
      ';
      $body2.='
      <!-- FOOTER -->
      <tr>
      <td class="innerpadding" style="background: #646FCB;color:#fff;">
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
      <td class="h2" style="text-align:center;font-size:15px;color:#fff;">
      Esta es una notificación automática por favor no responda a este mensaje
      <br>
      <a style="text-decoration:none;color:#153643;" href="https://developermen.com/" target="_blank">&reg; Developer Men</a>, todos los derechos reservados '.$año.' <br/>
      </td>
      </tr>
      <tr>
      </tr>
      </table>
      </td>
      </tr>
      <!--[if (gte mso 9)|(IE)]>
      </td>
      </tr>
      </table>
      <![endif]-->
      </td>
      </tr>
      </table>
      <div class="wrap">
      <div>
      <p style="color:rgb(156, 158, 158); opacity:2; font-size:10px;">
      Este correo ha sido enviado al correo electrónico : '.$correo.' ya que este correo esta ligado a nuestro usuario : '.$usuario.' si no eres el destinatario haz caso onmiso y reportalo al correo contactanos@developermen.com
      <br>
      La información contenida en este e-mail, así como cualquier archivo adjunto, es confidencial y sólo puede ser utilizada por el destinatario al cual está dirigido y personal de Developer Men Inc. Por las características del medio de comunicación, Developer Men Inc., no puede hacerse responsable por la integridad, confidencialidad, alteración o falsificación de los correos electrónicos. El receptor deberá verificar posibles virus informáticos.
      </p>
      </div>
      </div>
      <!--analytics-->
      <script src="https://code.jquery.com/jquery-1.10.1.min.js"></script>
      </body>
      </html>';
      $body=$body2;
      $email = "$correo";
      $mailTo = array(array($email => "$usuario"));
      /* funcion que envia el correo */
      echo "<div style='display:none;'>";
      sendEmail($mailTo,$subject,$body);
      echo "</div>";
      $tipoMsg = 'success';
      $accion = '';
      $msg = 'Se envío correctamente la información para restaurar su contraseña';
      mensajesAplicaciones($tipoMsg, $accion, $msg);
      echo "<script>setTimeout(function(){location.href='index'},2000);</script>";
    }else {
      $tipoMsg = 'error';
      $accion = 'relocate';
      $msg = ' Usted cuenta con una solicitud pendiente para realizar una recuperación de contraseña';
      mensajesAplicaciones($tipoMsg, $accion, $msg);
    }
    mysqli_close($conexion);
  }
}
/*Funcion que valida los datos recibidos por $_GET*/
function validarPassword($datos){
  $correoPassword = $datos['correo'];
  $tokenPassword = $datos['token'];
  $hoy = date("Y-m-d");
  $año = date('Y');
  /*Función que valida que los datos sean correctos*/
  conectar($conexion);
  $sql = "SELECT MAX(OID),COUNT(OID) AS OIDRECOVERY,DS_EMAIL,DS_TOKEN
  FROM ADM_RECOVERYPASS
  WHERE SN_ESTADO = '0' AND DATE_FORMAT(DT_FECHARECOVERY, '%Y-%m-%d') = '$hoy'";
  $error = "Error: No se puede consultar la información de la contraseña";
  executeQuery($conexion,$sql,$error,$stmt);
  $row = mysqli_fetch_assoc($stmt);
  if ($row['OIDRECOVERY'] > '0' && password_verify($row['DS_EMAIL'],$correoPassword)) {
    echo "<input name='email' type='hidden' value='".$row['DS_EMAIL']."' readOnly>";
    if ($tokenPassword == $row['DS_TOKEN']) {
      $tipoMsg = 'success';
      $accion = '';
      $msg = '<strong>Recuerda:</strong> Ingresar una contraseña de fácil asimilación y que no utilices en otros sitios web';
      mensajesAplicaciones($tipoMsg, $accion, $msg);
    }else {
      $tipoMsg = 'error';
      $accion = '';
      $msg = ' Token errado <br> Automaticamente te redirigiremos a la página de recuperar mi contraseña';
      mensajesAplicaciones($tipoMsg, $accion, $msg);
      echo "<script>setTimeout(function(){location.href='newPassword'},2000);</script>";
    }
  }else {
    $tipoMsg = 'error';
    $accion = '';
    $msg = ' Correo electrónico errado <br> Por motivos de seguridad te redirigiremos a la página principal de Developer Men';
    mensajesAplicaciones($tipoMsg, $accion, $msg);
    echo "<script>setTimeout(function(){location.href='https://developermen.com/'},2000);</script>";
  }
}
/*Funcion para actualizar la contraseña generada al usuario seleccionado*/
function actualizarPassword($datos){
  conectar($conexion);
  actual_date($date);
  $año = date('Y');
  $pass = $datos['password'];
  $hoy = date("Y-m-d");
  $correo = $datos['email'];
  $newPassword = password_hash($pass, PASSWORD_BCRYPT);
  $sql = "UPDATE ADM_LOGIN
  SET DS_PASSWORD = '$newPassword'
  WHERE DS_EMAIL = '".$datos['email']."'";
  $error = "Error: No se puede actualizar tu contraseña";
  executeQuery($conexion,$sql,$error,$stmt);
  /*Funcion que cambia el estado del token*/
  $sqlToken = "UPDATE ADM_RECOVERYPASS
  SET SN_ESTADO = '1'
  WHERE DS_EMAIL = '".$datos['email']."' AND SN_ESTADO = '0' AND DATE_FORMAT(DT_FECHARECOVERY, '%Y-%m-%d') = '$hoy'";
  $errorToken = "Error: No se puede actualizar el estado del token";
  executeQuery($conexion,$sqlToken,$errorToken,$stmt);
  $tipoMsg = 'success';
  $accion = '';
  $msg = ' Se actualizo correctamente tu información';
  mensajesAplicaciones($tipoMsg, $accion, $msg);
  echo "<script>setTimeout(function(){location.href='login'},2000);</script>";
  /*Funcion que consulta la imagen del Usuario*/
  $sqlInfoUsu = "SELECT DS_CORREO, DS_IMAGEN
  FROM ADM_USERS
  WHERE DS_CORREO = '".$datos['email']."'";
  $error = "Error: No se ha podido consultar correctamente la información del usuario";
  executeQuery($conexion,$sqlInfoUsu,$error,$stmt);
  $rowInfoUsu = mysqli_fetch_assoc($stmt);
  if ($rowInfoUsu['DS_IMAGEN'] != '') {
    $imagen = $rowInfoUsu['DS_IMAGEN'];
  }else {
    $imagen = 'assets/img/key.png';
  }
  /*Funcion que trae la información del usuario*/
  $sqlNomUsu = "SELECT DS_NOMBRE
  FROM ADM_LOGIN
  WHERE DS_EMAIL = '".$datos['email']."'";
  $error = "Error: No se puede consultar la información del usuario";
  executeQuery($conexion,$sqlNomUsu,$error,$stmt);
  $rowNomUsu = mysqli_fetch_assoc($stmt);
  $usuario = $rowNomUsu['DS_NOMBRE'];
  /*Inicia correo para enviar la nueva contraseña*/
  $body='';
  $subject = ' 🔒 '. $usuario .'•'.utf8_decode(' Se actualizo correctamente tu contraseña');
  $body2 ='
  <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
  <html xmlns="http://www.w3.org/1999/xhtml">
  <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Haz solicitado recuperar tu contraseña &bull; Developer Men</title>
  <style type="text/css">
  @charset "UTF-8";';
  $body2.="
  /* @import url('https://fonts.googleapis.com/css?family=Maven+Pro:400,500,700,900|Playfair+Display:400,400i,700,700i,900,900i'); */
  /* @import url('https://fonts.googleapis.com/css?family=Montserrat:400,700|Source+Sans+Pro:400,700,400italic,700italic'); */
  @import url('https://fonts.googleapis.com/css?family=Raleway:200,400,600');
  *{
    font-family:'Raleway', Calibri, Arial, sans-serif;
  }

  body {
    font-family:'Raleway', Calibri, Arial, sans-serif;
    margin: 0; padding: 0; min-width: 100%!important;
    background-color: #ffffff;
  }
  img {height: auto;}
  .content {width: 100%; max-width: 600px;}
  .strong{font-weight:bold;}
  .header {padding: 40px 30px 20px 30px;}
  .innerpadding {padding: 30px 30px 30px 30px;}
  .innerpadding2 {padding: 20px 0px 10px 0px;}
  .borderbottom {border-bottom: 1px solid #f2eeed;}
  .subhead {font-size: 15px; color: #ffffff; letter-spacing: 10px;}
  .h1, .h2, .bodycopy {color: #153643;}
  .h1 {font-size: 33px; line-height: 38px; font-weight: bold;}
  .h2 {padding: 0 0 15px 0; font-size: 24px; line-height: 28px; font-weight: bold;}
  .bodycopy {font-size: 16px; line-height: 22px;}
  .button {text-align: center; font-size: 18px; font-weight: bold; padding: 0 30px 0 30px;}
  .button a {color: #ffffff; text-decoration: none;}
  .footer {padding: 20px 30px 15px 30px;}
  .footer a{color: #646FCB; text-decoration: none;}
  .footercopy {font-size: 14px; color: #000;}
  .footercopy a {color: #646FCB; text-decoration: none;}
  .bd-callout{padding:1.25rem;margin-top:1.25rem;margin-bottom:1.25rem;border:1px solid #eee;border-left-width:.25rem;border-radius:.25rem}
  .bd-callout h4{margin-top:0;margin-bottom:.25rem}
  .bd-callout p:last-child{margin-bottom:0}
  .bd-callout code{border-radius:.25rem}
  .bd-callout+.bd-callout{margin-top:-.25rem}
  .bd-callout-info{border-left-color:#5bc0de}
  .bd-callout-info h4{color:#5bc0de}
  .bd-callout-warning{border-left-color:#f0ad4e}
  .bd-callout-warning h4{color:#f0ad4e}
  .bd-callout-danger{border-left-color:#d9534f}
  .bd-callout-danger h4{color:#d9534f}
  .bd-examples .img-thumbnail{margin-bottom:.75rem}.bd-examples h4{margin-bottom:.25rem}
  .wrap{
    font-family: 'Courier New', Courier, monospace;
    padding: 25px;
    margin: 0 auto;
    width: 580px;
    background: rgb(255, 255, 255);
    border-radius: 4px;
    margin-top: 20px;
    border: 1px solid #E0E0E0;
    text-align: center;
  }
  .btnMostrar{
    color:#ffffff;
    background-color: #75B8E9;
    display: inline-block;
    border-radius: 3.5px;
    padding: 7px 7px 7px 7px;
    border: 1px solid #75B8E9;
    font-size: 100%;
    text-decoration: none;
    cursor: pointer;
  }
  @media only screen and (max-width: 550px), screen and (max-device-width: 550px) {
    body[yahoo] .hide {display: none!important;}
    body[yahoo] .buttonwrapper {background-color: transparent!important;}
    body[yahoo] .button {padding: 0px!important;}
    body[yahoo] .button a {background-color: #e05443; padding: 15px 15px 13px!important;}
    body[yahoo] .unsubscribe {display: block; margin-top: 20px; padding: 10px 50px; background: #2f3942; border-radius: 5px; text-decoration: none!important; font-weight: bold;}
  }

  /*@media only screen and (min-device-width: 601px) {
    .content {width: 600px !important;}
    .col425 {width: 425px!important;}
    .col380 {width: 380px!important;}
  }*/

  </style>
  </head>
  ";
  $body2.='<body yahoo bgcolor="#ffffff">
  <table width="100%" bgcolor="#f6f8f1" border="0" cellpadding="0" cellspacing="0">
  <tr>
  <td bgcolor="#ffffff">
  <!--[if (gte mso 9)|(IE)]>
  <table width="600" align="center" cellpadding="0" cellspacing="0" border="0">
  <tr>
  <td>
  <![endif]-->
  <table bgcolor="#ffffff" class="content" align="center" cellpadding="0" cellspacing="0" border="0">
  <tr>
  <td bgcolor="#ffffff">
  <img src="https://developermen.com/assets/img/logoFooter.png" style="width:50%;" border="0" alt="" />
  </td>
  </tr>
  <tr>
  <td class="innerpadding borderbottom">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
  <td class="h2" style="text-align:center;">
  <img src="https://developermen.com/admin/'.$imagen.'" style="width:30%;" border="0" alt="" /><br>
  Hola! , <br>'.$usuario.' <br> haz actualizado correctamente tu contraseña
  </td>
  </tr>
  <tr>
  <td class="bodycopy" style="text-align:center;">
  '.$date.'
  </td>
  </tr>
  </table>
  </td>
  </tr>
  <tr>
  <td class="innerpadding borderbottom">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
  <td class="h2" style="text-align:center;">
  <span class="strong">Ingresa :</span>
  <a style="text-decoration:none;color:#646FCB;font-weight:bold;" href="https://developermen.com/admin/index" target="_blank">Aquí</a>
  </td>
  </tr>
  </table>
  </td>
  </tr>
  ';
  $body2.='
  <!-- FOOTER -->
  <tr>
  <td class="innerpadding" style="background: #646FCB;color:#fff;">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
  <td class="h2" style="text-align:center;font-size:15px;color:#fff;">
  Esta es una notificación automática por favor no responda a este mensaje
  <br>
  <a style="text-decoration:none;color:#153643;" href="https://developermen.com/" target="_blank">&reg; Developer Men</a>, todos los derechos reservados '.$año.' <br/>
  </td>
  </tr>
  <tr>
  </tr>
  </table>
  </td>
  </tr>
  <!--[if (gte mso 9)|(IE)]>
  </td>
  </tr>
  </table>
  <![endif]-->
  </td>
  </tr>
  </table>
  <div class="wrap">
  <div>
  <p style="color:rgb(156, 158, 158); opacity:2; font-size:10px;">
  Este correo ha sido enviado al correo electrónico : '.$correo.' ya que este correo esta ligado a nuestro usuario : '.$usuario.' si no eres el destinatario haz caso onmiso y reportalo al correo contactanos@developermen.com
  <br>
  La información contenida en este e-mail, así como cualquier archivo adjunto, es confidencial y sólo puede ser utilizada por el destinatario al cual está dirigido y personal de Developer Men Inc. Por las características del medio de comunicación, Developer Men Inc., no puede hacerse responsable por la integridad, confidencialidad, alteración o falsificación de los correos electrónicos. El receptor deberá verificar posibles virus informáticos.
  </p>
  </div>
  </div>
  <!--analytics-->
  <script src="https://code.jquery.com/jquery-1.10.1.min.js"></script>
  </body>
  </html>';
  $body=$body2;
  $email = "$correo";
  $mailTo = array(array($email => "$usuario"));
  /* funcion que envia el correo */
  echo "<div style='display:none;'>";
  sendEmail($mailTo,$subject,$body);
  echo "</div>";
  mysqli_close($conexion);
}
?>
