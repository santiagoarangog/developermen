<?php
/*!
@functions Aplicativo (Administracion Developer Men)
@version 3.0.
@description Funciones que integran los modulos del aplicativo de votaciones conocido como Comite.
@Autor Santiago Arango Gutierrez - Auxiliar de analisis y desarrollo Clínica Somer.
@Año 2017.
@Modificacion _
@Año modificacion _
*/
/*Funcion que envia el correo*/
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
/*Funcion que registra el usuario y envia el correo*/
function registrarUsuario($datos){
  conectar($conexion);
  getHost($fec,$host);
  actual_date($date);
  $year = date('Y');
  $usu = $_SESSION["session"];
  $correo = $datos['email'];
  $nombre = $datos['nomComple'];
  $username = $datos['username'];
  $sqlVal="SELECT COUNT(OID) AS OIDUSUARIO
  FROM login
  WHERE DS_EMAIL = '$correo' AND DS_NOMBRE = '$nombre'";
  $executeQueryVal = mysqli_query($conexion,$sqlVal);
  $row=mysqli_fetch_array($executeQueryVal);
  if ($row['OIDUSUARIO'] > '0') {
    $tipoMsg = 'warning';
    $accion = '';
    $msg = 'El usuario ya esta registrado';
    mensajesAplicaciones($tipoMsg, $accion, $msg);
  }else{
    $pass = $_POST['password'];
    $passHash = password_hash($pass, PASSWORD_BCRYPT);
    $sql = "INSERT INTO login (DS_NOMBRE,DS_USERNAME,DS_EMAIL,DS_PASSWORD,SN_ESTADO)
    VALUES('".$datos['nomComple']."','".$datos['username']."','".$datos['email']."','$passHash','1')";
    $executeQuery = mysqli_query($conexion,$sql);
    $tipoMsg = 'success';
    $accion = 'relocate';
    $msg = 'Se registro correctamente el nuevo usuario';
    mensajesAplicaciones($tipoMsg, $accion, $msg);
    mysqli_close($conexion);
    /*Inicia correo que se envia cuando se crea un nuevo usuario*/
    $body='';
    $subject = ' 👋 '.utf8_decode('Bienvenido '. $nombre.'');
    $body2 = '
    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml">
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Mejoras &bull; Developer Men</title>
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
    .wrap{
      font-family: 'Courier New', Courier, monospace;
      padding: 25px;
      margin: 0 auto;
      width: 580px;
      background: rgb(255, 255, 255);
      /*border-radius: 4px;*/
      /*margin-top: 20px;*/
      /*border: 1px solid #E0E0E0;*/
      text-align: justify;
    }
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
    <img src="https://media.giphy.com/media/DCOgUFTPoCWqGLoyc7/giphy.gif" style="width:50%;" border="0" alt="" /><br>
    Hola! , <br>'.$nombre.' <br> te damos una calurosa bienvenida al sitio web de administración <strong>Developer Men</strong>
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
    Los siguientes son tus datos proporcionados:<hr>
    </td>
    </tr>
    <tr>
    <td class="bodycopy" style="text-align:justify;">
    <strong>Nombre completo :</strong> '.$nombre.' <br>
    <strong>Nombre de usuario :</strong> '.$username.' <br>
    <strong>Correo electrónico de acceso :</strong> '.$correo.' <br>
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
    <span class="strong">Inicia sesión:</span>
    <a style="text-decoration:none;color:#646FCB;font-weight:bold;" href="https://developermen.com/admin/index" target="_blank">Aquí</a>
    </td>
    </tr>
    </table>
    </td>
    </tr>
    ';
    $body2.='
    <div class="wrap">
    <div>
    <p style="color:rgb(156, 158, 158); opacity:2; font-size:10px;">
    Este correo ha sido enviado al correo electrónico : '.$correo.' ya que este correo esta ligado a nuestro usuario : '.$nombre.' ('.$username.') si no eres el destinatario haz caso onmiso y reportalo al correo contactanos@developermen.com
    <br>
    La información contenida en este e-mail, así como cualquier archivo adjunto, es confidencial y sólo puede ser utilizada por el destinatario al cual está dirigido y personal de Developer Men Inc. Por las características del medio de comunicación, Developer Men Inc., no puede hacerse responsable por la integridad, confidencialidad, alteración o falsificación de los correos electrónicos. El receptor deberá verificar posibles virus informáticos.
    </p>
    </div>
    </div>
    <!-- FOOTER -->
    <tr>
    <td class="innerpadding" style="background: #646FCB;color:#fff;">
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
    <td class="h2" style="text-align:center;font-size:15px;color:#fff;">
    Esta es una notificación automática por favor no responda a este mensaje <br>
    © '.$year.' Developer Men Inc., Llanogrande, Rionegro, Antioquia, Colombia.
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
    <!--analytics-->
    <script src="https://code.jquery.com/jquery-1.10.1.min.js"></script>
    </body>
    </html>';
    /*Inicia tabla*/
    $body=$body2;
    $email = "$correo";
    $mailTo = array(array($email => "$nombre"));
    /* funcion que envia el correo */
    echo "<div style='display:none;'>";
    sendEmail($mailTo,$subject,$body);
    echo "</div>";
  }
}
?>
