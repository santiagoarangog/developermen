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
// Validacion que se realiza para validar que se reciba un dato por $_POST o $_GET segun el metodo utilizado - Ajax
if(isset($_POST['emailRecover'])){
  $emailRecover= $_POST['emailRecover'];
  enviarInformacion($emailRecover);
}

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
function recoveryPassword($correo,$token){
  getHost($fec,$host);
  conectar($conexion);
  $sql = "INSERT INTO SUP_RECOVERYPASS (DS_EMAIL,DS_TOKEN,DT_FECHARECOVERY,SN_ESTADO)
  VALUES('$correo','$token','$fec','0')";
  $error = "Error: No se puede insertar la información del token";
  executeQuery($conexion,$sql,$error,$stmt);
}
/*Funcion para enviar la nueva contraseña*/
function enviarInformacion($emailRecover){
  conectar($conexion);
  getHost($fec,$host);
  actual_date($date);
  $year = date('Y');
  $correo = $emailRecover;
  $sqlValRecovery = "SELECT COUNT(OID) AS OIDRECOVERY
  FROM SUP_RECOVERYPASS
  WHERE DS_EMAIL = '$correo' AND SN_ESTADO = '0'";
  $error = "Error: No se puede consultar la información";
  executeQuery($conexion,$sqlValRecovery,$error,$stmt);
  $rowValRecovery = mysqli_fetch_array($stmt);
  if ($rowValRecovery['OIDRECOVERY'] <= '0') {
    echo "success";
    $sqlConsulta="SELECT DS_EMAIL,DS_NOMBRE
    FROM SUP_LOGIN
    WHERE DS_EMAIL = '$correo'";
    $error = 'Error: No se puede consultar la información del usuario';
    executeQuery($conexion,$sqlConsulta,$error,$stmt);
    $row=mysqli_fetch_array($stmt);
    tokenRecovery($token);
    recoveryPassword($correo,$token);
    $usuario = $row['DS_NOMBRE'];
    $hashCorreo = password_hash($correo, PASSWORD_BCRYPT);
    $correoHash = $hashCorreo;
    $urlRecovery = 'https://developermen.com/utility/support/new-password?correo='.$correoHash.'&token='.$token;
    /*Funcion que consulta la información del Usuario*/
    $sqlInfoUsu = "SELECT OID, DS_CORREO, DS_IMAGEN
    FROM SUP_USERS
    WHERE DS_CORREO = '$correo'";
    $error = "Error: No se ha podido consultar correctamente la información del usuario";
    executeQuery($conexion,$sqlInfoUsu,$error,$stmt);
    $rowInfoUsu = mysqli_fetch_array($stmt);
    /*Inicia correo para enviar la nueva contraseña*/
    $body='';
    $subject = ' 🔑 '. $usuario .'•'.utf8_decode(' Haz solicitado recuperar tu contraseña');
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
    <a target="_blank" style="text-decoration:none;" href="'.$urlRecovery.'">
    <font color="#444444">
    <img alt="Cambiar contraseña" align="center" style="border-radius:6px;width:90%;" src="https://developermen.com/utility/support/assets/images/email/mobile_login.png"/>
    </font>
    </a>
    <center>
    <p style="text-align: center; line-height: 28px; font-size: 26px;">
    <strong>
    <font color="#444444">
    '.$usuario.', haz solicitado cambiar tu contraseña
    </font>
    </strong>
    </p>
    <p style="text-align: center; line-height: 28px; font-size: 20px;">
    <font color="#444444">
    Para nosotros lo más importante es la seguridad así que te invitamos a tener en cuenta lo siguiente
    </font>
    <font color="#869ab8">
    <br>
    <ul style="font-size:.875rem;text-align:left;">
    <li>El link para insertar tu nueva contraseña estará disponible por tan solo 24 horas</li>
    <li>Trata de utilizar una contraseña diferente a las utilizadas en otros sitios web</li>
    <li>La longitud de las contraseñas no debe ser inferior a ocho caracteres. A mayor longitud más difícil será de reproducir y mayor seguridad ofrecerá.</li>
    <li>Construir las contraseñas con una mezcla de caracteres alfabéticos (donde se combinen las mayúsculas y las minúsculas), dígitos e incluso caracteres especiales (@, ¡, +, &).</li>
    <li>Un buen método para crear una contraseña sólida es pensar en una frase fácil de memorizar y acortarla aplicando alguna regla sencilla.</li>
    <li>Se deben cambiar las contraseñas regularmente. (Dependiendo de la criticidad de los datos puede ser cada X meses).</li>
    <li>No proporciones contraseñas a terceros</li>
    </ul>
    </font>
    </p>
    </center>
    </td>
    </tr>
    </tbody>
    </table>
    </center>
    </td>
    </tr>
    </tbody>
    </table>
    </td>
    </tr>
    </tbody>
    </table>
    <style type="text/css">
    .msoFix{mso-table-lspace:-1pt;mso-table-rspace:-1pt}
    </style>
    ';
    $body2.='
    <center>
    <table cellpadding="0" cellspacing="0" border="0" style="background:#235484; margin-top:20px; max-width:100%; width:600px;">
    <tbody>
    <tr>
    <td>
    <table align="left" cellpadding="0" cellspacing="0" border="0" style="max-width:100%; overflow:hidden; width:270px;" class="msoFix">
    <tbody>
    <tr>
    <td>
    <a target="_blank" style="text-decoration:none;" href="'.$urlRecovery.'">
    <img class="img-disabled" width="270" height="250" alt="" src="https://developermen.com/utility/support/assets/images/email/security.png"/>
    </a>
    </td>
    </tr>
    </tbody>
    </table>
    <table cellpadding="30" cellspacing="0" border="0" align="right" style="max-width:100%; width:320px" class="msoFix">
    <tbody>
    <tr>
    <td style="color:#ffffff; font-size:18px; line-height:24px">
    <p style="margin: 0 0 8px;font-size:.875rem;">
    <strong>
    Hola! ,
    '.$usuario.'
    falta poco para que recuperes tu contraseña
    </strong>
    </p>
    <p style="margin:0 0 12px;font-size:.875rem;">
    Cambia tu contraseña dando clic aquí
    </p>
    <center>
    <table border="0" cellpadding="14" cellspacing="0" style="background:#4f769c; border-radius:6px; color:#ffffff; cursor:pointer; display:inline-block; font-size:18px; font-weight:bold; line-height:24px; margin:0px auto; text-align:center" class="button main">
    <tbody>
    <tr>
    <td align="center" style="vertical-align:middle" class="emailButtonContent">
    <a target="_blank" style="text-decoration:none;" href="'.$urlRecovery.'">
    <font color="white">
    Cambiar mi contraseña
    </font>
    </a>
    </td>
    </tr>
    </tbody>
    </table>
    </center>
    </td>
    </tr>
    </tbody>
    </table>
    </td>
    </tr>
    </tbody>
    </table>
    </center>
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
  }else {
    echo "0";
  }
  mysqli_close($conexion);
}
?>
