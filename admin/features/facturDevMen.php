<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <!-- Android Icons -->
  <link rel="icon" type="image/png" sizes="57x57" href="https://developermen.com/assets/favicons/android-icon-144x144.png" />
  <link rel="icon" type="image/png" sizes="60x60" href="https://developermen.com/assets/favicons/android-icon-192x192.png"/>
  <link rel="icon" type="image/png" sizes="76x76" href="https://developermen.com/assets/favicons/android-icon-36x36.png"/>
  <link rel="icon" type="image/png" sizes="152x152" href="https://developermen.com/assets/favicons/android-icon-48x48.png"/>
  <link rel="icon" type="image/png" sizes="180x180" href="https://developermen.com/assets/favicons/android-icon-72x72.png"/>
  <link rel="icon" type="image/png" sizes="180x180" href="https://developermen.com/assets/favicons/android-icon-96x96.png"/>

  <!-- Apple Icons -->
  <link rel="apple-touch-icon" type="image/png" sizes="114x114" href="https://developermen.com/assets/favicons/apple-icon-114x114.png"/>
  <link rel="apple-touch-icon" type="image/png" sizes="120x120" href="https://developermen.com/assets/favicons/apple-icon-120x120.png"/>
  <link rel="apple-touch-icon" type="image/png" sizes="144x144" href="https://developermen.com/assets/favicons/apple-icon-144x144.png"/>
  <link rel="apple-touch-icon" type="image/png" sizes="152x152" href="https://developermen.com/assets/favicons/apple-icon-152x152.png"/>
  <link rel="apple-touch-icon" type="image/png" sizes="180x180" href="https://developermen.com/assets/favicons/apple-icon-180x180.png"/>
  <link rel="apple-touch-icon" type="image/png" sizes="57x57" href="https://developermen.com/assets/favicons/apple-icon-57x57.png"/>
  <link rel="apple-touch-icon" type="image/png" sizes="72x72" href="https://developermen.com/assets/favicons/apple-icon-72x72.png"/>
  <link rel="apple-touch-icon" type="image/png" sizes="76x76" href="https://developermen.com/assets/favicons/apple-icon-76x76.png"/>
  <link rel="apple-touch-icon" type="image/png" sizes="precomposed" href="https://developermen.com/assets/favicons/apple-icon-precomposed.png"/>
  <link rel="apple-touch-icon" type="image/png" sizes="auto" href="https://developermen.com/assets/favicons/apple-icon.png"/>

  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="https://developermen.com/assets/favicons/favicon-16x16.png" />
  <link rel="icon" type="image/png" href="https://developermen.com/assets/favicons/favicon-16x16.png" sizes="16x16"/>
  <link rel="icon" type="image/png" href="https://developermen.com/assets/favicons/favicon-32x32.png" sizes="32x32"/>

  <!-- Ms Icon -->
  <link rel="ms-icon" type="image/png" href="https://developermen.com/assets/favicons/ms-icon-70x70.png" sizes="70x70"/>
  <link rel="ms-icon" type="image/png" href="https://developermen.com/assets/favicons/ms-icon-144x144.png" sizes="144x144"/>
  <link rel="ms-icon" type="image/png" href="https://developermen.com/assets/favicons/ms-icon-150x150.png" sizes="150x150"/>
  <link rel="ms-icon" type="image/png" href="https://developermen.com/assets/favicons/ms-icon-310x310.png" sizes="310x310"/>
  <link rel="manifest" href="https://developermen.com/assets/favicons/manifest.json"/>
  <title>Factura &bull; Developer Men</title>
  <script src="localScripts/localScripts.js?ver=<?php echo filemtime('localScripts/localScripts.js');?>" charset="utf-8"></script>
  <style type="text/css">
  @charset "UTF-8";
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
  @media only screen and (min-device-width: 601px) {
  .content {width: 600px !important;}
  .col425 {width: 425px!important;}
  .col380 {width: 380px!important;}
  }
  </style>
</head>
<?php
require('../functions/functionsFacturacion.php');
if (isset($_GET['oid'])){
  $oidFactura = $_GET['oid'];
  $_SESSION['oidFactura'] = $_GET['oid'];
}else {
  $oidFactura = isset($_SESSION['oidFactura'])?$_SESSION['oidFactura']:'';
}
// if ($oid=='') {
//   echo "<script>window.location.href = 'https://developermen.com';</script>";
// }
if($oidFactura !=''){
  informacionFactura($result);
  $radicado = $result['CD_RADICADO'].$oidFactura;
  $valDominio = number_format($result['CD_VALORDOMINIO'], 0, ",", ".");
  $valComision = number_format($result['CD_GESTCOMDOMINI'], 0, ",", ".");
  $costoDesarro = number_format($result['CD_COSTODESARRO'], 0, ",", ".");
  $costTotal = isset($result['CD_COSTOPRODUCTO'])?$result['CD_COSTOPRODUCTO']:'';
  $costoTotal = number_format($costTotal, 0, ",", ".");
  $totalProduc = $result['CD_VALORDOMINIO']+$result['CD_GESTCOMDOMINI']+$result['CD_COSTODESARRO'];
  $totalProducto = number_format($totalProduc, 0, ",", ".");
  $pagoRealizado = $result['CD_PAGOREALIZADO'];
  $totalPagoRealizado = number_format($pagoRealizado, 0, ",", ".");
}
$año = date('Y');
?>
<body yahoo bgcolor="#ffffff" onload="return limpiarGet();">
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
                    Tu recibo de <?php echo isset($result['DS_PRODUCTO'])?$result['DS_PRODUCTO']:''; ?>
                  </td>
                </tr>
                <tr>
                  <td class="bodycopy" style="text-align:center;">
                    <?php echo isset($result['DS_FECHA'])?$result['DS_FECHA']:''; ?>
                    <br>
                    Número de orden: <?php echo $radicado;?>
                  </td>
                </tr>
              </table>
            </td>
          </tr>
          <tr>
            <td class="innerpadding2 borderbottom">
              <table width="100%" style="background-color:#F7F7F7;padding:10px 10px 30px 30px;border:1px solid #E3E3E3;">
                <tr style="border:1px solid #E3E3E3;">
                  <td colspan="10" class="strong">Dominio <?php echo isset($result['SN_TIPODOMINIO'])?$result['SN_TIPODOMINIO']:''; ?>
                    <br>
                    <span style="font-weight:normal;font-size:12px;">*Por 1 (un) año*</span></td>
                    <td colspan="2" style="float:right;">$ <?php echo isset($valDominio)?$valDominio:''; ?>"</td>
                  </tr>
                  <tr style="border:1px solid #E3E3E3;">
                    <td colspan="10" class="strong"><?php echo isset($result['SN_HOSTING'])?$result['SN_HOSTING']:''; ?>
                      <br>
                      <span style="font-weight:normal;font-size:12px;">*Por 1 (un) año Gratuito*</span></td>
                      <td colspan="2" style="float:right;">$ <?php echo isset($result['CD_COSTHOSTING'])?$result['CD_COSTHOSTING']:''; ?>"</td>
                    </tr>
                  <tr style="border:1px solid #E3E3E3;">
                    <td colspan="10" class="strong">Costo gestión compra dominio
                      <br>
                      <span style="font-weight:normal;font-size:12px;">*Cobro único por cada gestión*</span></td>
                      <td colspan="2" style="float:right;">$ <?php echo isset($valComision)?$valComision:''; ?>"</td>
                    </tr>
                    <tr style="border:1px solid #E3E3E3;">
                      <td colspan="10" class="strong">Costo desarrollo
                        <br>
                        <span style="font-weight:normal;font-size:12px;">*Único cobro*</span></td>
                        <td colspan="2" style="float:right;">$ <?php echo isset($costoDesarro)?$costoDesarro:''; ?>"</td>
                      </tr><td style="border-top:2px solid #E3E3E3;"></td>
                      <tr>
                        <td colspan="10" class="strong">Precio completo Página web básica
                          <br>
                          <span style="font-weight:normal;font-size:12px;">*Plan único*</span></td>
                          <td colspan="2" style="float:right;">$<?php echo isset($totalProducto)?$totalProducto:''; ?>"</td>
                        </tr>
                      </table>
                    </td>
                  </tr>

                  <tr>
                    <td class="innerpadding borderbottom">
                      <table width="100%" style="text-align:center;">
                        <tr>
                          <div align="center" >
                            <td class="strong">Método de pago</td>
                          </div>
                        </tr>
                        <tr>
                          <td>Pago <?php echo isset($result['SN_METPAGO'])?$result['SN_METPAGO']:''; ?> : $ <?php echo isset($totalPagoRealizado)?$totalPagoRealizado:''; ?></td>
                        </tr>
                      </table>
                      <table width="100%" style="text-align:center;">
                        <tr>
                          <div align="center" >
                            <td class="strong">Nombre representante legal u organización</td>
                          </div>
                        </tr>
                        <tr>
                          <td><?php echo isset($result['DS_NOMUSUARIO'])?$result['DS_NOMUSUARIO']:''; ?></td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <?php
                  $morosos = isset($result['SN_MOROSOS'])?$result['SN_MOROSOS']:'';
                  if ($morosos == '1') {
                    ?>
                    <!-- Mensaje de morosos -->
                    <tr>
                      <td class="innerpadding2 borderbottom">
                        <table width="100%" style="background-color:#e7e3e3;padding:10px 10px 30px 30px;border:1px solid #E3E3E3;">
                          <tr style="border:1px solid #E3E3E3;text-align:justify;">
                            <td colspan="10" class="strong">Hola <span style="color:rgb(247, 57, 57);"><?php echo isset($result['DS_NOMUSUARIO'])?$result['DS_NOMUSUARIO']:''; ?></span> tu pago realizado no completa el costo del producto <?php echo isset($result['DS_PRODUCTO'])?$result['DS_PRODUCTO']:''; ?> adquirido, pero tranquilo Developer Men te da un tiempo prudencial para que canceles el valor pactado el cual es de 3 días hábiles
                              <br><span style="text-align:center;">Conoce luego de este tiempo que pasa <a href="https://developermen.com/debtor">Aquí</a></span>
                            </tr><td style="border-top:2px solid #E3E3E3;"></td>
                          </table>
                        </td>
                      </tr>
                    <?php }else {} ?>
                    <?php
                    $obsequio = isset($result['SN_OBSEQUIO1'])?$result['SN_OBSEQUIO1']:'';
                    $obsequio2 = isset($result['SN_OBSEQUIO2'])?$result['SN_OBSEQUIO2']:'';

                    if ($obsequio != '1' && $obsequio2 != '2') {
                      $display = "display:none;";
                    }else {
                      $display = "";
                    }
                    ?>
                    <tr>
                      <td class="innerpadding2 borderbottom" style='<?php echo $display; ?>'>
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
                              <?php
                              if ($obsequio == '1' && $obsequio2 == '0') {
                                echo '<tr style="border:1px solid #E3E3E3;">
                                <td colspan="2" class="strong">Gestión en Google Maps &bull; Producto Empresarial
                                <br>
                                <span style="font-weight:normal;font-size:12px;">*Obsequio*</span></td>
                                <td colspan="2">$150.000"</td>
                                </tr>';
                              }elseif($obsequio2 == '2' && $obsequio == '0'){
                                echo '<tr>
                                <tr style="border:1px solid #E3E3E3;">
                                <td colspan="2" class="strong">Gestión en Google Tag &bull; Producto Empresarial
                                <br>
                                <span style="font-weight:normal;font-size:12px;">*Obsequio*</span></td>
                                <td colspan="2">$150.000"</td>
                                </tr>';
                              }if ($obsequio == '1' && $obsequio2 == '2') {
                                echo '<tr style="border:1px solid #E3E3E3;">
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
                              ?>
                            </table>
                          </td>
                        </tr>
                        <!-- FOOTER -->
                        <td class="footer" bgcolor="#F7F7F7">
                          <table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                              <td>
                                <p style="font-size: 14px;text-align:justify;">	Este mensaje fue enviado a <?php echo isset($result['DS_CORREODESTINATARIO'])?$result['DS_CORREODESTINATARIO']:''; ?> Si tienes alguna pregunta o un reclamo, no dudes en <a href="https://developermen.com/contactanos" target="_blank" style="text-decoration:none;">contactarnos</a> ó envianos un correo de contacto al correo: <a href="mailto:contactanos@developermen.com">contactanos@developermen.com</a></p>
                              </td>
                            </tr>
                            <tr>
                              <td align="center" class="footercopy">
                                <a href='https://developermen.com/' target='_blank'>&reg; Developer Men</a>, todos los derechos reservados <?php echo $año; ?> <br/><br/>
                                Esta es una notificación automatica por favor no responda a este mensaje
                              </td>
                            </tr>
                            <tr>
                              <td align="center" style="padding: 20px 0 0 0;">
                                <table border="0" cellspacing="0" cellpadding="0">
                                  <tr>
                                    <td width="37" style="text-align: center; padding: 0 10px 0 10px;">
                                      <a href='http://www.facebook.com/developermen' target='_blank'>
                                        <img src="https://developermen.com/assets/img/icons/facebook.png" width="37" height="37" alt="Facebook" border="0" />
                                      </a>
                                    </td>
                                    <td width="37" style="text-align: center; padding: 0 10px 0 10px;">
                                      <a href="http://www.twitter.com/developermen1">
                                        <img src="https://developermen.com/assets/img/icons/twitter.png" width="37" height="37" alt="Twitter" border="0" />
                                      </a>
                                    </td>
                                    <td width="37" style="text-align: center; padding: 0 10px 0 10px;">
                                      <a href='http://www.instagram.com/developermen' target='_blank'>
                                        <img src="https://developermen.com/assets/img/icons/instagram.png" width="37" height="37" alt="Facebook" border="0" />
                                      </a>
                                    </td>
                                  </tr>
                                </table>
                              </td>
                            </tr>
                          </table>
                        </td>
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
          </html>
