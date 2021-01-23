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
/*Funcion que envia la informacion de la facturacion*/
/*Validacion que indica que si se recepciona un dato por $_POST se realice la funcion indicada*/
if(isset($_POST['nombreMejoras'])){
  $persona = $_POST['nombreMejoras'];
  enviarInformacion($persona);
}
/*Función que devuelve el nombre de la compañia*/
function nomCompania($oidCompania,&$compania){
  conectar($conexion);
  $sql = "SELECT OID,DS_NOMCOMPANIA
  FROM companias
  WHERE SN_ESTADO = '1' AND OID = '$oidCompania'";
  $sqlQuery=mysqli_query($conexion,$sql) or die ("Error: Al momento de listar los envíos de correo ".mysqli_error($conexion));
  while($row = mysqli_fetch_array($sqlQuery)){
    $compania = $row['DS_NOMCOMPANIA'];
  }
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
function enviarInformacion($persona){
  conectar($conexion);
  getHost($fec,$host);
  actual_date($date);
  $campana = 'MEJORA';
  $usu = $_POST['usuDiligenciaMejora'];
  $nombre = $_POST['nombreMejoras'];
  $correo = $_POST['mailMejoras'];
  $oidCompania = $_POST['companiaMejora'];
  $mejora = $_POST['mejoraRealizada'];
  $urlMejora = $_POST['urlMejoras'];
  $copia = isset($_POST['copia'])?$_POST['copia']:'0';
  nomCompania($oidCompania,$compania);
  nomProducto($oidCompania,$producto);
  $seguimiento = 'http://www.google-analytics.com/collect?v=1&tid=UA-110558464-1&cid=UA-110558464-1&t=event&ec=emailMejora&ea=open&el='.$oidCompania.'&cs='.$oidCompania.'&cm=email&cn='.$campana.'';
  /*Función que inserta la información del envio de correo de cambio*/
  $sql="INSERT INTO correoMejoras (DS_FECHA,DS_NOMDESTINATARIO,DS_CORREODESTINATARIO,FK_OIDCOMPANIA,DS_MEJORA,DS_URL,SN_COPIA,SN_ESTADO,CD_USUENVIA,DS_HOSTENVIA,DT_FECHAENVIA)
  VALUES('$date','$nombre','$correo','$oidCompania','$mejora','$urlMejora','$copia','1','$usu','$host','$fec')";
  $sqlQuery=mysqli_query($conexion,$sql) or die ("Error al momento de insertar el envio de correo ".mysqli_error($conexion));
  /*Función que devuelve el último OID*/
  $sqlUltOid = "SELECT MAX(OID) AS id FROM correoCambios";
  $rs = mysqli_query($conexion,$sqlUltOid);
  if ($row = mysqli_fetch_row($rs)) {
    $id = trim($row[0]);
  }
  /*Inicia correo cuando nos contactan*/
  $año = date('Y');
  $body='';
  $mail->CharSet = 'UTF-8';
  $subject = ' 🎉 '.utf8_decode($compania).' • Hemos realizado una mejora en tu producto 📬 ';
  /*Inicia el Header del correo*/
  $body2 ='
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
  <img src="https://developermen.com/assets/img/gif/mejoras.gif" style="width:50%;" border="0" alt="" /><br>
  Hola! , <br>'.$compania.' <br> te informamos que hemos realizado una mejora en tu producto : '.$producto.'
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
  Mejora realizada<hr>
  </td>
  </tr>
  <tr>
  <td class="bodycopy" style="text-align:justify;">
  '.$mejora.'
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
  <span class="strong">Visita tu sitio web:</span>
  <a style="text-decoration:none;color:#646FCB;font-weight:bold;" href="'.$urlMejora.'" target="_blank">Aquí</a>
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
  <img src="https://developermen.com/assets/img/gif/somosUnEquipo.gif" style="width:50%;border-radius:10px;" border="0" alt="" /><br>
  ! Tú también eres parte de nuestro equipo ¡
  </td>
  </tr>
  <tr>
  <td class="bodycopy" style="text-align:justify;">
  Del Team Developer Men esperamos que sea de gran utilidad esta mejora y déjanos saber que mejoras deseas para tu sitio web en el correo <a style="text-decoration:none;color:#646FCB;font-weight:bold;" href="mailto:support@developermen.com">support@developermen.com</a> en el asunto proporcionanos tu nombre de compañia y el producto adquirido seguido de un guíon de la siguiente manera : <span style="color:#646FCB;font-weight:bold;">'.$compania.' - '.$producto.'</span>
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
  <img src="https://developermen.com/assets/img/gif/innovando.gif" style="width:50%;" border="0" alt="" /><br>
  Innovamos constantemente para Tí
  </td>
  </tr>
  <tr>
  <td class="bodycopy" style="text-align:justify;">
  El Team Developer Men innova constantemente en sus productos desarrollados para obtener una mejor experiencia de usuario, tratamos de ser el aliado perfecto de su compañia por que nuestra razón de ser es cumplir sus sueños en cuestión de Desarrollo de Softwared amerite.
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
  <img src="'.$seguimiento.'" style="visibility: hidden;" />
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

  <!--analytics-->
  <script src="https://code.jquery.com/jquery-1.10.1.min.js"></script>
  </body>
  </html>';
  /*Finaliza el footer del correo*/
  /*Finaliza el footer del correo*/
  /*Inicia tabla*/
  $body=$body2;
  $email = "$correo";
  $mailTo = array(array($email => "$nombre"));
  /* funcion que envia el correo */
  sendEmail($mailTo,$subject,$body);
  $sqlCorreo="INSERT INTO correo(DS_EMAIL,DS_USUARIO,DS_USERNAME,DS_DESCRIPCION,DT_FECHAENVIO,DS_HOSTENVIO,SN_ESTADO) VALUES('$correo','$nombre','CONTROL CAMBIOS','$compania','$fec','$host','1')";
  $sqlQuery=mysqli_query($conexion,$sqlCorreo) or die ("Error al momento de insertar la informacion del correo del contacto ".mysqli_error($conexion));
  if ($copia == '1') {
    $correo = 'contactanosdevelopermen@gmail.com';
    $nombre = 'Copia Developer Men Inc.';
    $body='';
    $mail->CharSet = 'UTF-8';
    $subject = ' 🎉 Copia correo enviado • '.utf8_decode($compania).' • Hemos realizado una mejora en tu producto 📬 ';
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
    <img src="https://developermen.com/assets/img/gif/mejoras.gif" style="width:50%;" border="0" alt="" /><br>
    Hola! , <br>'.$compania.' <br> te informamos que hemos realizado una mejora en tu producto : '.$producto.'
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
    Mejora realizada<hr>
    </td>
    </tr>
    <tr>
    <td class="bodycopy" style="text-align:justify;">
    '.$mejora.'
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
    <span class="strong">Visita tu sitio web:</span>
    <a style="text-decoration:none;color:#646FCB;font-weight:bold;" href="'.$urlMejora.'" target="_blank">Aquí</a>
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
    <img src="https://developermen.com/assets/img/gif/somosUnEquipo.gif" style="width:50%;border-radius:10px;" border="0" alt="" /><br>
    ! Tú también eres parte de nuestro equipo ¡
    </td>
    </tr>
    <tr>
    <td class="bodycopy" style="text-align:justify;">
    Del Team Developer Men esperamos que sea de gran utilidad esta mejora y déjanos saber que mejoras deseas para tu sitio web en el correo <a style="text-decoration:none;color:#646FCB;font-weight:bold;" href="mailto:support@developermen.com">support@developermen.com</a> en el asunto proporcionanos tu nombre de compañia y el producto adquirido seguido de un guíon de la siguiente manera : <span style="color:#646FCB;font-weight:bold;">'.$compania.' - '.$producto.'</span>
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
    <img src="https://developermen.com/assets/img/gif/innovando.gif" style="width:50%;" border="0" alt="" /><br>
    Innovamos constantemente para Tí
    </td>
    </tr>
    <tr>
    <td class="bodycopy" style="text-align:justify;">
    El Team Developer Men innova constantemente en sus productos desarrollados para obtener una mejor experiencia de usuario, tratamos de ser el aliado perfecto de su compañia por que nuestra razón de ser es cumplir sus sueños en cuestión de Desarrollo de Softwared amerite.
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

    <!--analytics-->
    <script src="https://code.jquery.com/jquery-1.10.1.min.js"></script>
    </body>
    </html>';
    /*Finaliza el footer del correo*/
    /*Finaliza el footer del correo*/
    /*Inicia tabla*/
    $body=$body2;
    $email = "$correo";
    $mailTo = array(array($email => "$nombre"));
    /* funcion que envia el correo */
    sendEmail($mailTo,$subject,$body);
    $sqlCorreo="INSERT INTO correo(DS_EMAIL,DS_USUARIO,DS_USERNAME,DS_DESCRIPCION,DT_FECHAENVIO,DS_HOSTENVIO,SN_ESTADO) VALUES('$correo','$nombre','COPIA CORREO CONTROL CAMBIOS ENVIADO','$compania','$fec','$host','1')";
    $sqlQuery=mysqli_query($conexion,$sqlCorreo) or die ("Error al momento de insertar la informacion del correo del contacto ".mysqli_error($conexion));
  }
  echo "1";
  mysqli_close($conexion);
}
?>
