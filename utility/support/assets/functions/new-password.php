<?php
/*!
@functionsApp Developer Men - Support
@version 1.0.
@description Funciones que se ejecutan con una función Ajax.
@Autor Santiago Arango Gutierrez - CEO & Development Developer Men.
@Año 2019.
@Modificacion _
@Año modificacion _
*/
require('conexion.php');
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
/*Funcion que valida los datos recibidos por $_GET*/
function validarPassword($datos,&$row){
  $correoPassword = $datos['correo'];
  $tokenPassword = $datos['token'];
  date_default_timezone_set("America/Bogota");
  $hoy = date("Y-m-d");
  $año = date('Y');
  /*Función que valida que los datos sean correctos*/
  conectar($conexion);
  $sql = "SELECT MAX(OID),COUNT(OID) AS OIDRECOVERY,DS_EMAIL,DS_TOKEN
  FROM SUP_RECOVERYPASS
  WHERE SN_ESTADO = '0' AND DATE_FORMAT(DT_FECHARECOVERY, '%Y-%m-%d') = '$hoy'";
  $error = "Error: No se puede consultar la información de la contraseña";
  executeQuery($conexion,$sql,$error,$stmt);
  $row = mysqli_fetch_assoc($stmt);
  $email = $row['DS_EMAIL'];
  if ($row['OIDRECOVERY'] > '0' && password_verify($row['DS_EMAIL'],$correoPassword)) {
    if ($tokenPassword == $row['DS_TOKEN']) {
      $tipoMsg = 'success';
      $accion = '';
      $msg = '<strong>Recuerda:</strong> Ingresar una contraseña de fácil asimilación y que no utilices en otros sitios web';
      mensajesAplicaciones($tipoMsg, $accion, $msg);
    }else {
      $tipoMsg = 'error';
      $accion = '';
      $msg = '<strong>Token errado o caducado</strong> &bull; Automáticamente te redirigiremos a la página de recuperar mi contraseña';
      mensajesAplicaciones($tipoMsg, $accion, $msg);
      echo "<script>setTimeout(function(){location.href='password-reset'},2000);</script>";
    }
  }else {
    $tipoMsg = 'error';
    $accion = '';
    $msg = ' No se cuenta con una solicitud de restablecer la contraseña ,por tal motivo se te reedirigira automáticamente a la página de Soporte Developer Men';
    mensajesAplicaciones($tipoMsg, $accion, $msg);
    echo "<script>setTimeout(function(){location.href='login'},2000);</script>";
  }
}
// Validacion que se realiza para validar que se reciba un dato por $_POST o $_GET segun el metodo utilizado - Ajax
if(isset($_POST['password'])){
  $emailRecover = $_POST['correo'];
  actualizarPassword($emailRecover);
}
/*Funcion para actualizar la contraseña generada al usuario seleccionado*/
function actualizarPassword($emailRecover){
  conectar($conexion);
  actual_date($date);
  $año = date('Y');
  $hoy = date("Y-m-d");
  $pass = $_POST['password'];
  $correo = $emailRecover;
  $newPassword = password_hash($pass, PASSWORD_BCRYPT);
  $sql = "UPDATE SUP_LOGIN
  SET DS_PASSWORD = '$newPassword'
  WHERE DS_EMAIL = '$emailRecover'";
  $error = "Error: No se puede actualizar tu contraseña";
  executeQuery($conexion,$sql,$error,$stmt);
  /*Funcion que cambia el estado del token*/
  $sqlToken = "UPDATE SUP_RECOVERYPASS
  SET SN_ESTADO = '1'
  WHERE DS_EMAIL = '$emailRecover' AND SN_ESTADO = '0' AND DATE_FORMAT(DT_FECHARECOVERY, '%Y-%m-%d') = '$hoy'";
  $errorToken = "Error: No se puede actualizar el estado del token";
  executeQuery($conexion,$sqlToken,$errorToken,$stmt);
  /*Funcion que consulta la imagen del Usuario*/
  $sqlInfoUsu = "SELECT DS_CORREO, DS_IMAGEN
  FROM SUP_USERS
  WHERE DS_CORREO = '$emailRecover'";
  $error = "Error: No se ha podido consultar correctamente la información del usuario";
  executeQuery($conexion,$sqlInfoUsu,$error,$stmt);
  $rowInfoUsu = mysqli_fetch_assoc($stmt);
  /*Funcion que trae la información del usuario*/
  $sqlNomUsu = "SELECT DS_NOMBRE
  FROM SUP_LOGIN
  WHERE DS_EMAIL = '$emailRecover'";
  $error = "Error: No se puede consultar la información del usuario";
  executeQuery($conexion,$sqlNomUsu,$error,$stmt);
  $rowNomUsu = mysqli_fetch_assoc($stmt);
  $usuario = $rowNomUsu['DS_NOMBRE'];
  /*Inicia correo para enviar la nueva contraseña*/
  $body='';
  $subject = ' 🔑 '. $usuario .'•'.utf8_decode(' Haz cambiado correctamente tu contraseña');
  // Encabezado
  include('resources/headerCorreo.php');
  //Contenido
  $body2.='
  <table style="margin:0 auto; max-width:100%; width:600px" class="email-wrap">
  <tbody>
  <tr>
  <td>
  <table bgcolor="white" border="0" cellpadding="0" cellspacing="0" style="background:white; border-radius:8px; border:0; margin:10px auto; width:100%" class="content">
  <tbody>
  <tr>
  <td>&nbsp;
  <font color="#444444">
  </font>
  <table border="0" cellpadding="35" cellspacing="0">
  <tbody>
  <tr>
  <td align="center" style="color:#444444; font-size:18px; line-height:24px">
  <a target="_blank" style="text-decoration:none;" href="https://developermen.com/utility/support/index">
  <font color="#444444">
  <img alt="Cambiaste tu contraseña" align="center" style="border-radius:6px;width:90%;" src="https://developermen.com/utility/support/assets/images/email/festivities.png"/>
  </font>
  </a>
  <center>
  <p style="text-align: center; line-height: 28px; font-size: 26px;">
  <strong>
  <font color="#444444">
  '.$usuario.', te informamos que haz cambiado correctamente tu contraseña
  </font>
  </strong>
  </p>
  <p style="text-align: center; line-height: 28px; font-size: 20px;">
  <font color="#444444">
  Te invitamos a ingresar al sitio web de soporte <br>&bull; Developer Men dando clic aquí
  </font>
  <center>
  <table border="0" cellpadding="14" cellspacing="0" style="background:#7362DE; border-radius:6px; color:#ffffff; cursor:pointer; display:inline-block; font-size:20px; font-weight:bold; line-height:24px; margin:0px auto; text-align:center" class="button main">
  <tbody>
  <tr>
  <td align="center" style="vertical-align:middle" class="emailButtonContent">
  <font color="#ffffff">
  <a target="_blank" style="text-decoration:none; padding: 0 8px;" href="https://developermen.com/utility/support/index">
  <font color="white">
  Ingresar
  </font>
  </a>
  </font>
  </td>
  </tr>
  </tbody>
  </table>
  </center>
  </td>
  </p>
  </center>
  </td>
  </tr>
  </tbody>
  </table>
  </td>
  </tr>
  </tbody>
  </table>
  </tr>
  </tbody>
  </table>
  ';
  //Footer
  include('resources/footerCorreo.php');
  $body=$body2;
  $email = "$correo";
  $mailTo = array(array($email => "$usuario"));
  /* funcion que envia el correo */
  echo "<div style='display:none;'>";
  sendEmail($mailTo,$subject,$body);
  echo "</div>";
  echo "1";
  mysqli_close($conexion);
}
/*Funcion que inactiva los registros de solicitud de restablecer contraseña de aquellos usuarios que solicitarón restablecer la contraseña pero que dejarón pasar la fecha*/
function valRecoveryPass(){
  conectar($conexion);
  date_default_timezone_set("America/Bogota");
  $fecha = date("Y-m-d");
  $sql = "UPDATE SUP_RECOVERYPASS
  SET SN_ESTADO = '1'
  WHERE CAST(DT_FECHARECOVERY AS DATE) <> '$fecha'";
  $error = "Error: No se pueden actualizar los registros seleccionados";
  executeQuery($conexion,$sql,$error,$stmt);
  mysqli_close($conexion);
}
?>
