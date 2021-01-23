<?php
include ('conexion.php');
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
/*Funcion que envia la informacion del contacto*/
/*Validacion que indica que si se recepciona un dato por $_POST se realice la funcion indicada*/
if(isset($_POST['nombre'])){
  $persona = $_POST['nombre'];
  enviarInformacion($persona);
}
function enviarInformacion($persona){
  conectar($conexion);
  getHost($fec,$host);
  actual_date($date);
  $usu = $_POST['usuDiligencia'];
  $nombre = $_POST['nombre'];
  $correo = $_POST['mail'];
  $asunto = $_POST['asunto'];
  $comentario = $_POST['comentario'];
  $copia = $_POST['copia'];
  $sql="INSERT INTO correoFrontEnd(DS_NOMDESTINATARIO,DS_CORREODESTINATARIO,DS_ASUNTODESTINATARIO,DS_MENSAJEDESTINATARIO,SN_COPIA,CD_USUENVIA,DS_HOSTENVIA,DT_FECHAENVIA)
  VALUES('$nombre','$correo','$asunto','$comentario','$copia','$usu','$host','$fec')";
  $error = "Error: No se puede realizar la inserción de la información del correo";
  executeQuery($conexion,$sql,$error,$stmt);
  $sqlUltOid = "SELECT MAX(OID) AS id FROM correoFrontEnd";
  $rs = mysqli_query($conexion,$sqlUltOid);
  if ($row = mysqli_fetch_row($rs)) {
    $id = trim($row[0]);
  }
  /*Inicia correo corporativo*/
  $año = date('Y');
  $body = '';
  $mail->CharSet = 'UTF-8';
  $subject = $asunto;
  /*Inicia el Header del correo*/
  $body2 ='
  <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
  <html xmlns="http://www.w3.org/1999/xhtml">
  <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Cambios &bull; Developer Men</title>
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
  <img src="https://developermen.com/assets/img/gif/somosUnEquipo.gif" style="width:50%;" border="0" alt="" /><br>
  Hola, '.$nombre.'<br> este es un correo para Tí
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
  <td class="h2" style="text-align:justify;">
  '.$comentario.'
  </td>
  </tr>
  <tr>
  <td class="bodycopy" style="text-align:justify;">
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
  <img src="https://developermen.com/assets/img/gif/ideaCambio.gif" style="width:50%;" border="0" alt="" /><br>
  Sus ídeas son valiosas para Nosotros
  </td>
  </tr>
  <tr>
  <td class="bodycopy" style="text-align:justify;">
  Para el Grupo Developer Men las ídeas y sugerencias del Usuario son las más importantes, encontrará que aquí si se le da importancia a lo que usted nos haga saber.
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

  <!--analytics-->
  <img src="https://developermen.com/admin/functions/valCorreo.php?id='.$id.'&correo='.$correo.'&tipoCorreo=CorreoCorpora" alt="" width="1px" height="1px">
  <img src="http://www.google-analytics.com/collect?v=1&tid=UA-110558464-1&cid=110558464&t=event&ec=emailCorCorpora&ea=open&el=CORREOCORPORA&cs=CorreoCorpora&cm=email&cn=CORREOCORPORA" alt="" width="1px" height="1px">
  <script src="https://code.jquery.com/jquery-1.10.1.min.js"></script>
  </body>
  </html>';
  /*Inicia tabla*/
  $body=$body2;
  $email = "$correo";
  $mailTo = array(array($email => "$nombre"));
  /* funcion que envia el correo */
  sendEmail($mailTo,$subject,$body);
  $sqlCorreo="INSERT INTO correo(DS_EMAIL,DS_USUARIO,DS_USERNAME,DS_DESCRIPCION,DT_FECHAENVIO,DS_HOSTENVIO,SN_ESTADO) VALUES('$correo','$nombre','Contactanos','$comentario','$fec','$host','1')";
  $sqlQuery=mysqli_query($conexion,$sqlCorreo) or die ("Error al momento de insertar la informacion del correo del contacto ".mysqli_error($conexion));
  //Correo de evidencia a Santiago Arango Gutierrez
  if ($copia == '1') {
    $body='';
    $mail->CharSet = 'UTF-8';
    $subject = ' 📬 '.utf8_decode('Copia correo corporativo - Developer Men');
    $body2 ="
    <!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
    <html xmlns='http://www.w3.org/1999/xhtml'>
    <head>
    <meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
    <title>Notificación contactanos</title>
    <style type='text/css'>
    body {margin: 0; padding: 0; min-width: 100%!important;}
    img {height: auto;}
    .content {width: 100%; max-width: 600px;}
    .header {padding: 40px 30px 20px 30px;}
    .innerpadding {padding: 30px 30px 30px 30px;}
    .borderbottom {border-bottom: 1px solid #f2eeed;}
    .subhead {font-size: 15px; color: #ffffff; font-family: sans-serif; letter-spacing: 10px;}
    .h1, .h2, .bodycopy {color: #153643; font-family: sans-serif;}
    .h1 {font-size: 33px; line-height: 38px; font-weight: bold;}
    .h2 {padding: 0 0 15px 0; font-size: 24px; line-height: 28px; font-weight: bold;}
    .bodycopy {font-size: 16px; line-height: 22px;}
    .button {text-align: center; font-size: 18px; font-family: sans-serif; font-weight: bold; padding: 0 30px 0 30px;}
    .button a {color: #ffffff; text-decoration: none;}
    .footer {padding: 20px 30px 15px 30px;}
    .footercopy {font-family: sans-serif; font-size: 14px; color: #ffffff;}
    .footercopy a {color: #ffffff; text-decoration: underline;}

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

    <body yahoo bgcolor='#f6f8f1'>
    <table width='100%' bgcolor='#f6f8f1' border='0' cellpadding='0' cellspacing='0'>
    <tr>
    <td>
    <!--[if (gte mso 9)|(IE)]>
    <table width='600' align='center' cellpadding='0' cellspacing='0' border='0'>
    <tr>
    <td>
    <![endif]-->
    <table bgcolor='#ffffff' class='content' align='center' cellpadding='0' cellspacing='0' border='0'>
    <tr>
    <td bgcolor='#70bbd9' class='header'>
    <table width='70' align='left' border='0' cellpadding='0' cellspacing='0'>
    <tr>
    <td height='70' style='padding: 0 20px 20px 0;'>
    <img class='fix' src='https://developermen.com/assets/img/icons/letter.png' width='70' height='70' border='0' alt='' />
    </td>
    </tr>
    </table>
    <!--[if (gte mso 9)|(IE)]>
    <table width='425' align='left' cellpadding='0' cellspacing='0' border='0'>
    <tr>
    <td>
    <![endif]-->
    <table class='col425' align='left' border='0' cellpadding='0' cellspacing='0' style='width: 100%; max-width: 425px;'>
    <tr>
    <td height='70'>
    <table width='100%' border='0' cellspacing='0' cellpadding='0'>
    <tr>
    <td class='subhead' style='padding: 0 0 0 3px;'>
    DEVELOPER MEN
    </td>
    </tr>
    <tr>
    <td class='h1' style='padding: 5px 0 0 0;width:100%;'>
    Copia correo corporativo
    </td>
    </tr>
    </table>
    </td>
    </tr>
    </table>
    <!--[if (gte mso 9)|(IE)]>
    </td>
    </tr>
    </table>
    <![endif]-->
    </td>
    </tr>
    <tr>
    <td class='innerpadding borderbottom'>
    <table width='100%' border='0' cellspacing='0' cellpadding='0'>
    <tr>
    <td class='h2' style='text-align:center;'>
    Este es un correo de copia para un envio de un correo corporativo
    </td>
    </tr>
    <tr>
    <td class='bodycopy' style='text-align:justify;'>
    Como integrante del Team Developer Men puedes gestionar los correos de contacto a nuestra compañia por medio de la página <a href='https://developermen.com/admin/index'>Administración Developer Men</a>
    </td>
    </tr>
    </table>
    </td>
    </tr>
    <tr>
    <td class='innerpadding borderbottom'>
    <table width='115' align='left' border='0' cellpadding='0' cellspacing='0'>
    <tr>
    <td height='115' style='padding: 0 20px 20px 0;'>
    <img class='fix' src='https://developermen.com/assets/img/icons/rocket.png' width='115' height='115' border='0' alt='' />
    </td>
    </tr>
    </table>
    <!--[if (gte mso 9)|(IE)]>
    <table width='380' align='left' cellpadding='0' cellspacing='0' border='0'>
    <tr>
    <td>
    <![endif]-->
    <table class='col380' align='left' border='0' cellpadding='0' cellspacing='0' style='width: 100%; max-width: 380px;'>
    <tr>
    <td>
    <table width='100%' border='0' cellspacing='0' cellpadding='0'>
    <tr>
    <td class='bodycopy'>
    <h4 style='text-align:center;''>Información enviada al usuario al momento de enviar un correo corporativo:</h4>
    <p>Nombre: <strong>$nombre</strong><br>
    Correo electrónico: <strong>$correo</strong><br>
    Asunto: <strong>$asunto</strong><br>
    Comentario: <strong>$comentario</strong><br>
    Fecha contacto: <strong>$fec</strong></p>
    </td>
    </tr>
    <tr align='center'>
    <td style='padding: 20px 0 0 0;'>
    <table class='buttonwrapper' bgcolor='#e05443' border='0' cellspacing='0' cellpadding='0'>
    <tr>
    <td class='button' height='45'>
    <a href='https://developermen.com/admin/index' target='_blank'>Gestionar</a>
    </td>
    </tr>
    </table>
    </td>
    </tr>
    </table>
    </td>
    </tr>
    </table>
    <!--[if (gte mso 9)|(IE)]>
    </td>
    </tr>
    </table>
    <![endif]-->
    </td>
    </tr>
    <tr>
    <td class='innerpadding borderbottom'>
    <img class='fix' src='https://developermen.com/assets/img/published/admin.jpg' width='100%' border='0' alt='' />
    </td>
    </tr>
    <tr>
    <td class='footer' bgcolor='#44525f'>
    <table width='100%' border='0' cellspacing='0' cellpadding='0'>
    <tr>
    <td align='center' class='footercopy'>
    &reg; <a href='https://developermen.com/' target='_blank'>Developer Men</a>, todos los derechos reservados $año <br/><br/>
    Esta es una notificación automatica por favor no responda a este mensaje
    </td>
    </tr>
    <tr>
    <td align='center' style='padding: 20px 0 0 0;'>
    <table border='0' cellspacing='0' cellpadding='0'>
    <tr>
    <td width='37' style='text-align: center; padding: 0 10px 0 10px;'>
    <a href='http://www.facebook.com/developermen' target='_blank'>
    <img src='https://developermen.com/assets/img/icons/facebook.png' width='37' height='37' alt='Facebook' border='0' />
    </a>
    </td>
    <td width='37' style='text-align: center; padding: 0 10px 0 10px;'>
    <a href='http://www.twitter.com/developermen1'>
    <img src='https://developermen.com/assets/img/icons/twitter.png' width='37' height='37' alt='Twitter' border='0' />
    </a>
    </td>
    <td width='37' style='text-align: center; padding: 0 10px 0 10px;'>
    <a href='http://www.instagram.com/developermen' target='_blank'>
    <img src='https://developermen.com/assets/img/icons/instagram.png' width='37' height='37' alt='Facebook' border='0' />
    </a>
    </td>
    </tr>
    </table>
    </td>
    </tr>
    </table>
    </td>
    </tr>
    </table>
    <!--[if (gte mso 9)|(IE)]>
    </td>
    </tr>
    </table>
    <![endif]-->
    </td>
    </tr>
    </table>
    <script src='http://code.jquery.com/jquery-1.10.1.min.js'></script>
    </body>
    </html>";
    /*Inicia tabla*/
    $body=$body2;
    $email = "santiago9606@gmail.com";
    $mailTo = array(array($email => "Santiago Arango Gutierrez"));
    sendEmail($mailTo,$subject,$body);
    $sqlCorreo="INSERT INTO correo(DS_EMAIL,DS_USUARIO,DS_USERNAME,DS_DESCRIPCION,DT_FECHAENVIO,DS_HOSTENVIO,SN_ESTADO) VALUES('$correo','$nombre','Contactanos','$comentario','$fec','$host','1')";
    $sqlQuery=mysqli_query($conexion,$sqlCorreo) or die ("Error al momento de insertar la informacion del correo del contacto ".mysqli_error($conexion));
  }
  echo "1";
  //Correo de evidencia David Gomez Gonzales
  mysqli_close($conexion);
}
?>
