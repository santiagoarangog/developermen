<?php
/*!
@functions Aplicativo (Administracion Developer Men)
@Page admin (.php)
@version 1.0.
@description Funciones que integran la página de edición de usuario.
@Autor Santiago Arango Gutierrez - Ceo y Development Developer Men
@Año 2018.
@Modificacion _
@Año modificacion _
*/
// Funcion que inserta los datos del usuario
function insertarInfoUser($datos){
  conectar($conexion);
  $usu = $_SESSION["session"];
  $sqlActu = "UPDATE ADM_LOGIN SET DS_EMAIL = '".$datos['email']."' WHERE DS_NOMBRE = '".$datos['nomUsuario']."'";
  $error = "Error: No se puede actualizar la información";
  executeQuery($conexion,$sqlActu,$error,$stmt);
  $sql = "INSERT INTO ADM_USERS (DS_COMPANY,DS_USERNAME,DS_CORREO,DS_NOMBRE,DS_APELLIDO,DS_DIRECCION,DS_CIUDAD,DS_MUNICIPIO,CD_CODIGOPOSTAL,DS_DESCRIPCION,DS_IMAGEN,DS_IMAGENPORTADA,SN_ESTADO,SN_RECIBIRCORREO) VALUES('".$datos['compañia']."','".$datos['nomUsuario']."','".$datos['email']."','".$datos['nombres']."','".$datos['apellidos']."','".$datos['direccion']."','".$datos['ciudad']."','".$datos['municipio']."','".$datos['codePostal']."','".$datos['descripcion']."','".$datos['imagen']."','".$datos['imagenPort']."','1','1')";
  $error = "Error: No se puede insertar la información del usuario";
  executeQuery($conexion,$sql,$error,$stmt);
  valEnvioCorNewUser($usu,$datos);
  $tipoMsg = 'success';
  $accion = 'relocate';
  $msg = 'Se guardo la información correctamente';
  mensajesAplicaciones($tipoMsg, $accion, $msg);
  closeConnection($stmt,$conexion);
}
/*Funcion para realizar el envio del correo*/
function valEnvioCorNewUser($usu,$datos){
  if($usu != ''){
    $correo = $datos['email'];
    $usuario = utf8_decode($datos['nombres'].' '.$datos['apellidos']);
    $descripcion = 'INGRESO INFORMACION PRIMERA VEZ';
    echo "<div style='display:none;'>";
    // display:none;
    datosEmailNewUser($mailTo, $subject, $body, $correo,$usuario,$usu);
    sendEmail($mailTo,$subject,$body); /* funcion que envia el correo */
    insEnvioCorNewUser($usu, $correo, $usuario, $descripcion);
    echo "</div>";
  }
  echo "<div class='alert alert-info' id='divSuccessCorreo'><i class='fa fa-envelope-open-o' aria-hidden='true'></i>
  <strong>Revisa el buzon de entrada del correo: $correo</strong>
  </div>";
}
/*Funcion que prepara toda la informacion para el envio del correo*/
function datosEmailNewUser(&$mailTo, &$subject, &$body, $correo,$usuario,$usu){
  conectar($conexion);
  $year = date('Y');
  $sql = "SELECT DS_COMPANY,DS_USERNAME,DS_IMAGEN,DS_IMAGENPORTADA
  FROM ADM_USERS
  WHERE DS_USERNAME = '$usu'";
  $error = "Error : No se puede consultar la información del correo del nuevo usuario";
  executeQuery($conexion,$sql,$error,$stmt);
  $row = mysqli_fetch_array($stmt);
  $company = $row['DS_COMPANY'];
  $username = $row['DS_USERNAME'];
  $imagen = $row['DS_IMAGEN'];
  $portada = $row['DS_IMAGENPORTADA'];
  $body='';
  $mail->CharSet = 'UTF-8';
  $subject = ' 👋 '.' • Bienvenido '.utf8_decode($username).' al sitio web de administración de Developer Men';
  $body2.= '
  <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
  <html xmlns="http://www.w3.org/1999/xhtml">
  <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Cambios &bull; Developer Men</title>
  <style type="text/css">
  @charset "UTF-8";';
  $body2.= "
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

  @media only screen and (max-width: 550px), screen and (max-device-width: 550px) {
    body[yahoo] .hide {display: none!important;}
    body[yahoo] .buttonwrapper {background-color: transparent!important;}
    body[yahoo] .button {padding: 0px!important;}
    body[yahoo] .button a {background-color: #e05443; padding: 15px 15px 13px!important;}
    body[yahoo] .unsubscribe {display: block; margin-top: 20px; padding: 10px 50px; background: #2f3942; border-radius: 5px; text-decoration: none!important; font-weight: bold;}
  }
  </style>
  </head>";
  $body2.= '
  <body yahoo bgcolor="#ffffff">
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
  <img src="https://developermen.com/admin/'.$imagen.'" style="width:50%;" border="0" alt="" /><br>
  '.$usuario.',<br>Bienvenid@ al sitio web de administración de Developer Men
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
  <!-- <img src="https://developermen.com/support/'.$imagen.'" style="width:50%;" border="0" alt="" /><br> -->
  ¿ Que utilidad tiene el sitio web de administración ?
  </td>
  </tr>
  <tr>
  <td class="bodycopy" style="text-align:justify;">
  El sitio web de administración de Developer Men es un sitio de gestión para la compañia Developer Men Inc.
  </td>
  </tr>
  </table>
  </td>
  </tr>';
  $body2.= '
  <!-- FOOTER -->
  <tr>
  <td class="innerpadding" style="background: #646FCB;color:#fff;">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
  <td class="h2" style="text-align:center;font-size:15px;color:#fff;">
  Esta es una notificación automática por favor no responda a este mensaje
  <br>
  <a style="text-decoration:none;color:#153643;" href="https://developermen.com/" target="_blank">&reg; Developer Men</a>, todos los derechos reservados '.$año.' <br/>
  Si no puedes visualizar correctamente este mensaje <a style="text-decoration:none;color:#153643;" href="https://developermen.com/admin/features/improvement?oid='.$id.'">Accede aquí</a>
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
  </table>
  <!--analytics-->
  <script src="https://code.jquery.com/jquery-1.10.1.min.js"></script>
  </body>
  </html>';
  $body=$body2;
  $email = "$correo";
  $mailTo = array(array($email => "$usuario"));
}
// Funcion que guarda el registro del envio
function insEnvioCorNewUser($usu, $correo, $usuario, $descripcion){
  conectar($conexion);
  getHost($fec,$host);
  $usu = $_SESSION["session"];
  $sql = "INSERT INTO ADM_CORREO (DS_EMAIL, DS_USUARIO, DS_USERNAME, DS_DESCRIPCION, DT_FECHAENVIO, DS_HOSTENVIO, SN_ESTADO)
  VALUES('$correo','$usuario','$usu','$descripcion','$fec','$host','1')";
  mysqli_error($sql);
  $erUsu = "No inserta el envio del correo";
  $executeQuery = mysqli_query($conexion,$sql);
  mysqli_close($conexion);
}
//Funcion que carga la informacion del usuario
function cargarInfoUsuario(&$result){
  conectar($conexion);
  $usu = $_SESSION["session"];
  $sql = "SELECT *,CONCAT(DS_NOMBRE,' ',DS_APELLIDO) AS NOMBRECOMPLETO
  FROM ADM_USERS
  WHERE DS_USERNAME = '$usu'";
  $executeQuery = mysqli_query($conexion,$sql);
  $result=mysqli_fetch_array($executeQuery);
  mysqli_close($conexion);
}
//Funcion que carga la informacion de la tareas
function cargarEmail(&$email){
  conectar($conexion);
  $usu = $_SESSION["session"];
  $sql="SELECT DS_EMAIL
  FROM ADM_LOGIN
  WHERE DS_USERNAME = '$usu'";
  $executeQuery = mysqli_query($conexion,$sql);
  $row=mysqli_fetch_array($executeQuery);
  $email = $row['DS_EMAIL'];
  mysqli_close($conexion);
}
// Funcion que actualiza los datos
function actualizarDatos($datos){
  conectar($conexion);
  $usu = $_SESSION["session"];
  $email = $datos['email'];
  $sqlValEdicion = "SELECT COUNT(OID) AS OIDEDICION
  FROM ADM_USERS
  WHERE DS_COMPANY = '".$datos['compania']."' AND DS_USERNAME = '".$datos['nomUsuario']."' AND DS_CORREO= '".$datos['email']."' AND
  DS_NOMBRE = '".$datos['nombres']."' AND DS_APELLIDO = '".$datos['apellidos']."' AND DS_DIRECCION = '".$datos['direccion']."' AND
  DS_CIUDAD = '".$datos['ciudad']."' AND DS_MUNICIPIO = '".$datos['municipio']."' AND CD_CODIGOPOSTAL = '".$datos['codePostal']."' AND
  DS_DESCRIPCION = '".$datos['descripcion']."' AND DS_IMAGEN = '".$datos['imagen']."' AND DS_IMAGENPORTADA = '".$datos['imagenPort']."' AND
  SN_ESTADO = '1' AND OID = '".$datos['oid']."'";
  $error = "Error: No se puede validar la edición de la información";
  executeQuery($conexion,$sqlValEdicion,$error,$stmt);
  $row = mysqli_fetch_array($stmt);
  if ($row['OIDEDICION'] > '0') {
    $tipoMsg = 'warning';
    $accion = '';
    $msg = 'No se edito ninguna información';
    mensajesAplicaciones($tipoMsg, $accion, $msg);
  }else {
    $sqlActu = "UPDATE ADM_LOGIN SET DS_EMAIL = '$email' WHERE DS_NOMBRE = '$usu'";
    $errorActu = "Error: No se puede actualizar la información del usuario";
    executeQuery($conexion,$sqlActu,$errorActu,$stmt);
    $sql="UPDATE ADM_USERS
    SET DS_COMPANY = '".$datos['compania']."',DS_USERNAME = '".$datos['nomUsuario']."',DS_CORREO= '".$datos['email']."', DS_NOMBRE = '".$datos['nombres']."', DS_APELLIDO = '".$datos['apellidos']."',
    DS_DIRECCION = '".$datos['direccion']."', DS_CIUDAD = '".$datos['ciudad']."', DS_MUNICIPIO = '".$datos['municipio']."', CD_CODIGOPOSTAL = '".$datos['codePostal']."', DS_DESCRIPCION = '".$datos['descripcion']."',
    DS_IMAGEN = '".$datos['imagen']."', DS_IMAGENPORTADA = '".$datos['imagenPort']."', SN_ESTADO = '1'
    WHERE OID = '".$datos['oid']."'";
    $error = "Error : No se puede actualizar la información";
    executeQuery($conexion,$sql,$error,$stmt);
    valEnvioCor($usu,$datos);
    $tipoMsg = 'success';
    $accion = 'relocate';
    $msg = 'Información actualizada correctamente';
    mensajesAplicaciones($tipoMsg, $accion, $msg);
  }
  closeConnection($stmt,$conexion);
}
/*Funcion para realizar el envio del correo*/
function valEnvioCor($usu,$datos){
  if($usu != ''){
    $correo = $datos['email'];
    $usuario = utf8_decode($datos['nombres'].' '.$datos['apellidos']);
    $descripcion = utf8_decode('ACTUALIZACION DATOS');
    echo "<div style='display:none;'>";
    // display:none;
    datosEmail($mailTo, $subject, $body, $correo,$usuario,$usu);
    sendEmail($mailTo,$subject,$body); /* funcion que envia el correo */
    insEnvioCor($usu, $correo, $usuario,$descripcion);
    echo "</div>";
  }
  echo "<div class='alert alert-info' id='divSuccessCorreo'><i class='fa fa-envelope-open-o' aria-hidden='true'></i>
  <strong>Revisa el buzon de entrada del correo: $correo</strong>
  </div>";
}
/*Funcion que prepara toda la informacion para el envio del correo*/
function datosEmail(&$mailTo, &$subject, &$body, $correo,$usuario,$usu){
  conectar($conexion);
  $sql = "SELECT OID,DS_COMPANY,DS_USERNAME,DS_IMAGEN,DS_IMAGENPORTADA
  FROM ADM_USERS
  WHERE DS_USERNAME = '$usu'";
  $executeQuery = mysqli_query($conexion,$sql);
  $row=mysqli_fetch_array($executeQuery);
  $oid = $row['OID'];
  $company = $row['DS_COMPANY'];
  $username = $row['DS_USERNAME'];
  $imagen = $row['DS_IMAGEN'];
  $portada = $row['DS_IMAGENPORTADA'];
  $body='';
  $mail->CharSet = 'UTF-8';
  $subject = ' 📝 '.utf8_decode($username).' • Haz editado correctamente tu usuario 📬 ';
  $body2.= '
  <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
  <html xmlns="http://www.w3.org/1999/xhtml">
  <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Cambios &bull; Developer Men</title>
  <style type="text/css">
  @charset "UTF-8";';
  $body2.= "
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

  @media only screen and (max-width: 550px), screen and (max-device-width: 550px) {
    body[yahoo] .hide {display: none!important;}
    body[yahoo] .buttonwrapper {background-color: transparent!important;}
    body[yahoo] .button {padding: 0px!important;}
    body[yahoo] .button a {background-color: #e05443; padding: 15px 15px 13px!important;}
    body[yahoo] .unsubscribe {display: block; margin-top: 20px; padding: 10px 50px; background: #2f3942; border-radius: 5px; text-decoration: none!important; font-weight: bold;}
  }
  </style>
  </head>";
  $body2.= '
  <body yahoo bgcolor="#ffffff" style="background-imagen:url(https://developermen.com/support/'.$portada.');">
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
  <img src="https://developermen.com/support/'.$imagen.'" style="width:50%;" border="0" alt="" /><br>
  '.$usuario.',<br>Actualizaste tu perfil de usuario
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
  <!-- <img src="https://developermen.com/support/'.$imagen.'" style="width:50%;" border="0" alt="" /><br> -->
  ¿ Que utilidad tiene el sitio web de administración ?
  </td>
  </tr>
  <tr>
  <td class="bodycopy" style="text-align:justify;">
  El sitio web de administración de Developer Men es un sitio de gestión para la compañia Developer Men Inc.
  </td>
  </tr>
  </table>
  </td>
  </tr>
  </table>
  </td>
  </tr>
  <tr>
  <td class="h2" style="text-align:center;">
  <a class="button" href="https://developermen.com/support/index">Ir al sitio web de soporte</a>
  </td>
  </tr>';
  $body2.= '
  <!-- FOOTER -->
  <tr>
  <td class="innerpadding" style="background: #646FCB;color:#fff;">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
  <td class="h2" style="text-align:center;font-size:15px;color:#fff;">
  Esta es una notificación automática por favor no responda a este mensaje
  <br>
  <a style="text-decoration:none;color:#153643;" href="https://developermen.com/" target="_blank">&reg; Developer Men</a>, todos los derechos reservados '.$año.' <br/>
  <a href="https://developermen.com/admin/prefeUsers/preferences.php?oidUsu='.$oid.'">Gestionar mis preferencias</a> &/o <a href="https://developermen.com/admin/prefeUsers/dropOut.php?usu='.$usuario.'&oidEst=0&oidUsu='.$oid.'">Darse de baja</a>
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
  </table>
  <!--analytics-->
  <script src="https://code.jquery.com/jquery-1.10.1.min.js"></script>
  </body>
  </html>';
  $body=$body2;
  $email = "$correo";
  $mailTo = array(array($email => "$usuario"));
}
// Funcion que guarda un registro del envio de correo
function insEnvioCor($usu, $correo, $usuario, $descripcion){
  conectar($conexion);
  getHost($fec,$host);
  $usu = $_SESSION["session"];
  $sql = "INSERT INTO ADM_CORREO (DS_EMAIL, DS_USUARIO, DS_USERNAME, DS_DESCRIPCION, DT_FECHAENVIO, DS_HOSTENVIO, SN_ESTADO)
  VALUES('$correo','$usuario','$usu','$descripcion','$fec','$host','1')";
  mysqli_error($sql);
  $erUsu = "No inserta el envio del correo";
  $executeQuery = mysqli_query($conexion,$sql);
  mysqli_close($conexion);
}
?>
