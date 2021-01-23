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
  $date;
}
/*Funcion que envia la informacion de la facturacion*/
/*Validacion que indica que si se recepciona un dato por $_POST se realice la funcion indicada*/
if(isset($_POST['nombreFacturacion'])){
  $persona = $_POST['nombreFacturacion'];
  enviarInformacionFacturacion($persona);
}
function enviarInformacionFacturacion($persona){
  $conexion=mysqli_connect("mysql.hostinger.co","u159888911_admin","aphVDrJf4?y8L7hBka","u159888911_admin") or die("Problemas con la conexión");
  getHost($fec,$host);
  actual_date($date);
  setlocale(LC_MONETARY,"es_ES");
  $usu = $_POST['usuDiligencia'];
  $nombre = $_POST['nombreFacturacion'];
  $correo = $_POST['mailFacturacion'];
  $productoFacturacion = $_POST['productoFacturacion'];
  $costoPro = $_POST['costoProducto'];
  $tipDominio = $_POST['tipDominio'];
  $valDomi = $_POST['valDominio'];
  $costoGesComDomi = $_POST['costoGesComDominio'];
  $costoDesa = $_POST['costoDesarrollo'];
  $tipHosting = $_POST['tipHosting'];
  $costHosting = $_POST['costHosting'];
  $metPago = $_POST['metPago'];
  $pagado = $_POST['pagoRealizado'];
  $nomUsuCompañia = $_POST['nomUsuCompañia'];
  $obsequio = isset($_POST['obsequio1'])?$_POST['obsequio1']:'';
  $obsequio2 = isset($_POST['obsequio2'])?$_POST['obsequio2']:'';
  $morosos = $_POST['morosos'];
  $copia = isset($_POST['copia'])?$_POST['copia']:'';

  /*Fecha radicado*/
  $dateRadi = $hoy = date("Ymd");

  /*Valores totalizados*/
  $totalProduc = $valDomi+$costoDesa+$costoGesComDomi;
  $totalProducto = number_format($totalProduc, 0, ",", ".");

  /*Formato costo producto*/
  $totalPagado = number_format($pagado, 0, ",", ".");
  $costoProducto = number_format($costoPro, 0, ",", ".");
  $valDominio = number_format($valDomi, 0, ",", ".");
  $costoDesarrollo = number_format($costoDesa, 0, ",", ".");
  $costoGesComDominio = number_format($costoGesComDomi, 0, ",", ".");


  $sql="INSERT INTO facturacion(DS_FECHA,DS_NOMDESTINATARIO,DS_CORREODESTINATARIO,DS_PRODUCTO,CD_COSTOPRODUCTO,CD_RADICADO,SN_TIPODOMINIO,CD_VALORDOMINIO,CD_GESTCOMDOMINI,CD_COSTODESARRO,SN_HOSTING,CD_COSTHOSTING,
    SN_METPAGO,CD_PAGOREALIZADO,DS_NOMUSUARIO,SN_OBSEQUIO1,SN_OBSEQUIO2,SN_MOROSOS,SN_COPIA,CD_USUDILIGENCIA,DS_HOSTDILIGENCIA,DT_FECHADILIGENCIA,SN_ESTADO)
    VALUES('$date','$nombre','$correo','$productoFacturacion','$costoPro','$dateRadi','$tipDominio','$valDomi','$costoGesComDomi','$costoDesa','$tipHosting','$costHosting',
      '$metPago','$pagado','$nomUsuCompañia','$obsequio','$obsequio2',
      '$morosos','$copia','$usu','$host','$fec','0')";
      $sqlQuery=mysqli_query($conexion,$sql) or die ("Error al momento de insertar el envio de correo ".mysqli_error($conexion));
      $sqlUltOid = "SELECT MAX(OID) AS id FROM facturacion";
      $rs = mysqli_query($conexion,$sqlUltOid);
      if ($row = mysqli_fetch_row($rs)) {
        $id = trim($row[0]);
      }
      /*Fecha de radicado*/
      $radicado = $dateRadi.$id;
      /*Inicia correo cuando nos contactan*/
      $año = date('Y');
      $body='';
      $mail->CharSet = 'UTF-8';
      $subject = ' 📣 Tu recibo de compra del producto • '.utf8_decode($productoFacturacion).' • Developer Men 📬 ';
      /*Inicia el Header del correo*/
      $body2= '
      <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
      <html xmlns="http://www.w3.org/1999/xhtml">
      <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet" type="text/css">
      <title>Factura &bull; Developer Men</title>
      ';
      $body2.='<style type="text/css">
      @charset "UTF-8";
      @import url("https://fonts.googleapis.com/css?family=Raleway:200,400,600");
      *{
        font-family:"Raleway", Calibri, Arial, sans-serif;
      }
      ';
      $body2.="
      body {
        font-family:'Raleway', Calibri, Arial, sans-serif;
        margin: 0; padding: 0; min-width: 100%!important;
        background-color: #ffffff;
      }
      th{
        font-family:'Raleway', Calibri, Arial, sans-serif;
      }
      tr{
        font-family:'Raleway', Calibri, Arial, sans-serif;
      }
      td{
        font-family:'Raleway', Calibri, Arial, sans-serif;
      }
      p{
        font-family:'Raleway', Calibri, Arial, sans-serif;
      }
      a{
        font-family:'Raleway', Calibri, Arial, sans-serif;
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
      /*------------------------------------------------------------------Inicia el cuerpo del documento----------------------------------------------------*/
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
      Tu recibo de '.$productoFacturacion.'
      </td>
      </tr>
      <tr>
      <td class="bodycopy" style="text-align:center;">
      '.$date.'
      <br>
      Número de orden: '.$radicado.'
      </td>
      </tr>
      </table>
      </td>
      </tr>

      <tr>
      <td class="innerpadding2 borderbottom">
      <table width="100%" style="background-color:#F7F7F7;padding:10px 10px 30px 30px;border:1px solid #E3E3E3;">
      <tr style="border:1px solid #E3E3E3;">
      <td colspan="10" class="strong">Dominio '.$tipDominio.'
      <br>
      <span style="font-weight:normal;font-size:12px;">*Por 1 (un) año*</span></td>
      <td colspan="2" style="float:right;">$ '.$valDominio.'"</td>
      </tr>
      <tr style="border:1px solid #E3E3E3;">
      <td colspan="10" class="strong">'.$tipHosting.'
      <br>
      <span style="font-weight:normal;font-size:12px;">*Por 1 (un) año &bull; Gratuito primer año*</span></td>
      <td colspan="2" style="float:right;">$ '.$valHosting.'"</td>
      </tr>
      <tr style="border:1px solid #E3E3E3;">
      <td colspan="10" class="strong">Costo gestión compra dominio
      <br>
      <span style="font-weight:normal;font-size:12px;">*Cobro único por cada gestión*</span></td>
      <td colspan="2" style="float:right;">$ '.$costoGesComDominio.'"</td>
      </tr>
      <tr style="border:1px solid #E3E3E3;">
      <td colspan="10" class="strong">Costo desarrollo
      <br>
      <span style="font-weight:normal;font-size:12px;">*Único cobro*</span></td>
      <td colspan="2" style="float:right;">$ '.$costoDesarrollo.'"</td>
      </tr><td style="border-top:2px solid #E3E3E3;"></td>
      <tr>
      <td colspan="10" class="strong">Precio completo '.$productoFacturacion.'
      <br>
      <span style="font-weight:normal;font-size:12px;">*Plan único*</span></td>
      <td colspan="2" style="float:right;">$ '.$totalProducto.'"</td>
      </tr>
      </table>
      </td>
      </tr>

      <tr>
      <td class="innerpadding borderbottom">
      <table width="100%" style="text-align:center;">
      <tr>
      <td class="strong">Método de pago</td>
      </tr>
      <tr>
      <td>Pago '.$metPago.' : $ '.$totalPagado.'"</td>
      </tr>
      </table>
      <table width="100%" style="text-align:center;">
      <tr>
      <td class="strong">Nombre representante legal u organización</td>
      </tr>
      <tr>
      <td>'.$nomUsuCompañia.'</td>
      </tr>
      </table>
      </td>
      </tr>
      ';
      if ($morosos == '1') {
        $body2.='<!-- Mensaje de morosos -->
        <tr>
        <td class="innerpadding2 borderbottom">
        <table width="100%" style="background-color:#e7e3e3;padding:10px 10px 30px 30px;border:1px solid #E3E3E3;">
        <tr style="border:1px solid #E3E3E3;text-align:justify;">
        <td colspan="10" class="strong"><span style="color:rgb(247, 57, 57);">'.$nomUsuCompañia.'</span> tu pago realizado no completa el costo del producto '.$productoFacturacion.' adquirido, pero tranquilo Developer Men te da un tiempo prudencial para que canceles el valor pactado el cual es de 3 días hábiles
        <br><span style="text-align:center;"> Conoce luego de este tiempo que pasa <a href="https://developermen.com/no-pago?oid='.$id.'">Aquí</a></span>
        </tr><td style="border-top:2px solid #E3E3E3;"></td>
        </table>
        </td>
        </tr>';
      }else {

      }
      if ($obsequio != '1' && $obsequio2 != '2') {
        $display = "display:none;";
      }else {
        $display = "";
      }
      $body2.='
      <tr>
      <td class="innerpadding2 borderbottom" style='.$display.'>
      <table width="100%" style="background-color:#F7F7F7;padding:10px 10px 30px 30px;border:1px solid #E3E3E3;">
      <tr style="border:1px solid #E3E3E3;">
      <td colspan="2" class="strong">
      <img src="https://developermen.com/assets/img/logoFooter.png" style="width:50%;" border="0" alt="" />
      </tr>
      <tr>
      <div align="center" >
      <td class="strong">Producto(s) de obsequio:
      <br><hr style="width:20%;float:left;"></td>
      </div>
      </tr>
      ';
      if ($obsequio == '1' && $obsequio2 == '') {
        $body2.='
        <tr style="border:1px solid #E3E3E3;">
        <td colspan="2" class="strong">Gestión en Google Maps &bull; Producto Empresarial
        <br>
        <span style="font-weight:normal;font-size:12px;">*Obsequio*</span></td>
        <td colspan="2">$150.000"</td>
        </tr>';
      }elseif ($obsequio2 == '2' && $obsequio == '') {
        $body2.='<tr>
        <tr style="border:1px solid #E3E3E3;">
        <td colspan="2" class="strong">Gestión en Google Tag &bull; Producto Empresarial
        <br>
        <span style="font-weight:normal;font-size:12px;">*Obsequio*</span></td>
        <td colspan="2">$150.000"</td>
        </tr>';
      }if ($obsequio == '1' && $obsequio2 == '2') {
        $body2.='<tr style="border:1px solid #E3E3E3;">
        <td colspan="2" class="strong">Gestión en Google Maps &bull; Producto Empresarial
        <br>
        <span style="font-weight:normal;font-size:12px;">*Obsequio*</span></td>
        <td colspan="2">$150.000"</td>
        </tr>
        <tr style="border:1px solid #E3E3E3;">
        <td colspan="2" class="strong">Gestión en Google Tag &bull; Producto Empresarial
        <br>
        <span style="font-weight:normal;font-size:12px;">*Obsequio*</span></td>
        <td colspan="2">$150.000"</td>
        </tr>';
      }
      $body2.='</table>
      </td>
      </tr>';
      /*----------------------------------------------------------------Inicia el footer del correo------------------------------------------------------*/
      $body2.='
      <td class="footer" bgcolor="#F7F7F7">
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
      <td>
      <p style="font-size: 14px;text">	Este mensaje fue enviado a '.$correo.' Si tienes alguna pregunta o un reclamo, no dudes en <a href="https://developermen.com/contactanos" target="_blank" style="text-decoration:none;">contáctarnos</a></p>
      <p style="font-size: 14px;">	Si no vez correctamente este correo accede <a href="https://developermen.com/admin/features/facturDevMen?oid='.$id.'">Aquí</a> y visualiza tu factura web</p>
      </td>
      </tr>
      <tr>
      <td align="center" class="footercopy">
      <a href="https://developermen.com/" target="_blank">&reg; Developer Men</a>, todos los derechos reservados '.$año.'
      <br/><br/>
      Esta es una notificación automatica por favor no responda a este mensaje
      </td>
      </tr>
      <tr>
      <td align="center" style="padding: 20px 0 0 0;">
      <table border="0" cellspacing="0" cellpadding="0">
      <tr>
      <td width="37" style="text-align: center; padding: 0 10px 0 10px;">
      <a href="http://www.facebook.com/developermen" target="_blank">
      <img src="https://developermen.com/assets/img/icons/facebook.png" width="37" height="37" alt="Facebook" border="0" />
      </a>
      </td>
      <td width="37" style="text-align: center; padding: 0 10px 0 10px;">
      <a href="http://www.twitter.com/developermen1">
      <img src="https://developermen.com/assets/img/icons/twitter.png" width="37" height="37" alt="Twitter" border="0" />
      </a>
      </td>
      <td width="37" style="text-align: center; padding: 0 10px 0 10px;">
      <a href="http://www.instagram.com/developermen" target="_blank">
      <img src="https://developermen.com/assets/img/icons/instagram.png" width="37" height="37" alt="Facebook" border="0" />
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
      <!--analytics-->
      <script src="https://code.jquery.com/jquery-1.10.1.min.js"></script>
      </body>
      </html>';
      /*Finaliza el footer del correo*/
      /*Inicia tabla*/
      $body=$body2;
      $email = "$correo";
      $mailTo = array(array($email => "$nombre"));
      /* funcion que envia el correo */
      sendEmail($mailTo,$subject,$body);
      $sqlCorreo="INSERT INTO correo(DS_EMAIL,DS_USUARIO,DS_USERNAME,DS_DESCRIPCION,DT_FECHAENVIO,DS_HOSTENVIO,SN_ESTADO) VALUES('$correo','$nombre','FACTURACION','$nomUsuCompañia','$fec','$host','1')";
      $sqlQuery=mysqli_query($conexion,$sqlCorreo) or die ("Error al momento de insertar la informacion del correo del contacto ".mysqli_error($conexion));
      if ($copia == '1') {


        /*Correo a contactanos@developermen.com*/
        $body='';
        $mail->CharSet = 'UTF-8';
        $subject = ' 📣 Copia recibo de compra del producto • '.utf8_decode($productoFacturacion).' • Developer Men 📬 ';
        /*Inicia el Header del correo*/
        $body2= '
        <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
        <html xmlns="http://www.w3.org/1999/xhtml">
        <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet" type="text/css">
        <title>Factura &bull; Developer Men</title>
        ';
        $body2.='<style type="text/css">
        @charset "UTF-8";
        @import url("https://fonts.googleapis.com/css?family=Raleway:200,400,600");
        *{
          font-family:"Raleway", Calibri, Arial, sans-serif;
        }
        ';
        $body2.="
        body {
          font-family:'Raleway', Calibri, Arial, sans-serif;
          margin: 0; padding: 0; min-width: 100%!important;
          background-color: #ffffff;
        }
        th{
          font-family:'Raleway', Calibri, Arial, sans-serif;
        }
        tr{
          font-family:'Raleway', Calibri, Arial, sans-serif;
        }
        td{
          font-family:'Raleway', Calibri, Arial, sans-serif;
        }
        p{
          font-family:'Raleway', Calibri, Arial, sans-serif;
        }
        a{
          font-family:'Raleway', Calibri, Arial, sans-serif;
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
        /*------------------------------------------------------------------Inicia el cuerpo del documento----------------------------------------------------*/
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
        Tu recibo de '.$productoFacturacion.'
        </td>
        </tr>
        <tr>
        <td class="bodycopy" style="text-align:center;">
        '.$date.'
        <br>
        Número de orden: '.$radicado.'
        </td>
        </tr>
        </table>
        </td>
        </tr>

        <tr>
        <td class="innerpadding2 borderbottom">
        <table width="100%" style="background-color:#F7F7F7;padding:10px 10px 30px 30px;border:1px solid #E3E3E3;">
        <tr style="border:1px solid #E3E3E3;">
        <td colspan="10" class="strong">Dominio '.$tipDominio.'
        <br>
        <span style="font-weight:normal;font-size:12px;">*Por 1 (un) año*</span></td>
        <td colspan="2" style="float:right;">$ '.$valDominio.'"</td>
        </tr>
        <tr style="border:1px solid #E3E3E3;">
        <td colspan="10" class="strong">Costo gestión compra dominio
        <br>
        <span style="font-weight:normal;font-size:12px;">*Cobro único por cada gestión*</span></td>
        <td colspan="2" style="float:right;">$ '.$costoGesComDominio.'"</td>
        </tr>
        <tr style="border:1px solid #E3E3E3;">
        <td colspan="10" class="strong">Costo desarrollo
        <br>
        <span style="font-weight:normal;font-size:12px;">*Único cobro*</span></td>
        <td colspan="2" style="float:right;">$ '.$costoDesarrollo.'"</td>
        </tr><td style="border-top:2px solid #E3E3E3;"></td>
        <tr>
        <td colspan="10" class="strong">Precio completo '.$productoFacturacion.'
        <br>
        <span style="font-weight:normal;font-size:12px;">*Plan único*</span></td>
        <td colspan="2" style="float:right;">$ '.$totalProducto.'"</td>
        </tr>
        </table>
        </td>
        </tr>

        <tr>
        <td class="innerpadding borderbottom">
        <table width="100%" style="text-align:center;">
        <tr>
        <td class="strong">Método de pago</td>
        </tr>
        <tr>
        <td>Pago '.$metPago.' : $ '.$totalPagado.'"</td>
        </tr>
        </table>
        <table width="100%" style="text-align:center;">
        <tr>
        <td class="strong">Nombre de usuario o corporación</td>
        </tr>
        <tr>
        <td>'.$nomUsuCompañia.'</td>
        </tr>
        </table>
        </td>
        </tr>
        ';
        if ($morosos == '1') {
          $body2.='<!-- Mensaje de morosos -->
          <tr>
          <td class="innerpadding2 borderbottom">
          <table width="100%" style="background-color:#e7e3e3;padding:10px 10px 30px 30px;border:1px solid #E3E3E3;">
          <tr style="border:1px solid #E3E3E3;text-align:justify;">
          <td colspan="10" class="strong"><span style="color:rgb(247, 57, 57);">'.$nomUsuCompañia.'</span> tu pago realizado no completa el costo del producto '.$productoFacturacion.' adquirido, pero tranquilo Developer Men te da un tiempo prudencial para que canceles el valor pactado el cual es de 3 días hábiles
          <br><span style="text-align:center;"> Conoce luego de este tiempo que pasa <a href="https://developermen.com/no-pago?oid='.$id.'" target="_blank">Aquí</a></span>
          </tr><td style="border-top:2px solid #E3E3E3;"></td>
          </table>
          </td>
          </tr>';
        }else {

        }
        if ($obsequio != '1' && $obsequio2 != '2') {
          $display = "display:none;";
        }else {
          $display = "";
        }
        $body2.='
        <tr>
        <td class="innerpadding2 borderbottom" style='.$display.'>
        <table width="100%" style="background-color:#F7F7F7;padding:10px 10px 30px 30px;border:1px solid #E3E3E3;">
        <tr style="border:1px solid #E3E3E3;">
        <td colspan="2" class="strong">
        <img src="https://developermen.com/assets/img/logoFooter.png" style="width:50%;" border="0" alt="" />
        </tr>
        <tr>
        <div align="center" >
        <td class="strong">Producto(s) de obsequio:
        <br><hr style="width:20%;float:left;"></td>
        </div>
        </tr>
        ';
        if ($obsequio == '1' && $obsequio2 == '') {
          $body2.='
          <tr style="border:1px solid #E3E3E3;">
          <td colspan="2" class="strong">Gestión en Google Maps &bull; Producto Empresarial
          <br>
          <span style="font-weight:normal;font-size:12px;">*Obsequio*</span></td>
          <td colspan="2">$150.000"</td>
          </tr>';
        }elseif ($obsequio2 == '2' && $obsequio == '') {
          $body2.='<tr>
          <tr style="border:1px solid #E3E3E3;">
          <td colspan="2" class="strong">Gestión en Google Tag &bull; Producto Empresarial
          <br>
          <span style="font-weight:normal;font-size:12px;">*Obsequio*</span></td>
          <td colspan="2">$150.000"</td>
          </tr>';
        }if ($obsequio == '1' && $obsequio2 == '2') {
          $body2.='<tr style="border:1px solid #E3E3E3;">
          <td colspan="2" class="strong">Gestión en Google Maps &bull; Producto Empresarial
          <br>
          <span style="font-weight:normal;font-size:12px;">*Obsequio*</span></td>
          <td colspan="2">$150.000"</td>
          </tr>
          <tr style="border:1px solid #E3E3E3;">
          <td colspan="2" class="strong">Gestión en Google Tag &bull; Producto Empresarial
          <br>
          <span style="font-weight:normal;font-size:12px;">*Obsequio*</span></td>
          <td colspan="2">$150.000"</td>
          </tr>';
        }
        $body2.='</table>
        </td>
        </tr>';
        /*----------------------------------------------------------------Inicia el footer del correo------------------------------------------------------*/
        $body2.='
        <td class="footer" bgcolor="#F7F7F7">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
        <td>
        <p style="font-size: 14px;text">	Este mensaje fue enviado a '.$correo.' Si tienes alguna pregunta o un reclamo, no dudes en <a href="https://developermen.com/contactanos" target="_blank" style="text-decoration:none;">contáctarnos</a></p>
        <p style="font-size: 14px;">	Si no vez correctamente este correo accede <a href="https://developermen.com/admin/features/facturDevMen?oid='.$id.'">Aquí</a> y visualiza tu factura web</p>
        </td>
        </tr>
        <tr>
        <td align="center" class="footercopy">
        <a href="https://developermen.com/" target="_blank">&reg; Developer Men</a>, todos los derechos reservados '.$año.'
        <br/><br/>
        Esta es una notificación automatica por favor no responda a este mensaje
        </td>
        </tr>
        <tr>
        <td align="center" style="padding: 20px 0 0 0;">
        <table border="0" cellspacing="0" cellpadding="0">
        <tr>
        <td width="37" style="text-align: center; padding: 0 10px 0 10px;">
        <a href="http://www.facebook.com/developermen" target="_blank">
        <img src="https://developermen.com/assets/img/icons/facebook.png" width="37" height="37" alt="Facebook" border="0" />
        </a>
        </td>
        <td width="37" style="text-align: center; padding: 0 10px 0 10px;">
        <a href="http://www.twitter.com/developermen1">
        <img src="https://developermen.com/assets/img/icons/twitter.png" width="37" height="37" alt="Twitter" border="0" />
        </a>
        </td>
        <td width="37" style="text-align: center; padding: 0 10px 0 10px;">
        <a href="http://www.instagram.com/developermen" target="_blank">
        <img src="https://developermen.com/assets/img/icons/instagram.png" width="37" height="37" alt="Facebook" border="0" />
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
        <!--analytics-->
        <script src="https://code.jquery.com/jquery-1.10.1.min.js"></script>
        </body>
        </html>';
        /*Finaliza el footer del correo*/
        /*Inicia tabla*/
        $body=$body2;
        $email = "contactanos@developermen.com";
        $mailTo = array(array($email => "Developer Men"));
        /* funcion que envia el correo */
        sendEmail($mailTo,$subject,$body);
        $sqlCorreo="INSERT INTO correo(DS_EMAIL,DS_USUARIO,DS_USERNAME,DS_DESCRIPCION,DT_FECHAENVIO,DS_HOSTENVIO,SN_ESTADO) VALUES('$correo','$nombre','FACTURACION','$nomUsuCompañia','$fec','$host','1')";
        $sqlQuery=mysqli_query($conexion,$sqlCorreo) or die ("Error al momento de insertar la informacion del correo del contacto ".mysqli_error($conexion));
      }
    }
    ?>
