<?php
require('../functions/gestCambios.php');
$oid = isset($_GET['oid'])?$_GET['oid']:'';
if ($oid=='') {
  echo "<script>window.location.href = 'https://developermen.com';</script>";
}
if($oid !=''){
  informacionMejora($oid,$result,$producto);
}
$año = date('Y');
?>
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
  <title><?php echo isset($result['DS_NOMCOMPANIA'])?$result['DS_NOMCOMPANIA']:''; ?>Mejoras &bull; Developer Men</title>
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
                    <img src="https://developermen.com/assets/img/gif/mejoras.gif" style="width:50%;" border="0" alt="" /><br>
                    Hola! , <br><?php echo isset($result['DS_NOMCOMPANIA'])?$result['DS_NOMCOMPANIA']:''; ?> <br> te informamos que hemos realizado una mejora en tu producto : <?php echo $producto; ?>
                  </td>
                </tr>
                <tr>
                  <td class="bodycopy" style="text-align:center;">
                    <?php echo isset($result['DS_FECHA'])?$result['DS_FECHA']:''; ?>
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
                    <?php echo isset($result['DS_MEJORA'])?$result['DS_MEJORA']:''; ?>
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
                    <a style="text-decoration:none;color:#646FCB;font-weight:bold;" href="<?php echo isset($result['DS_URL'])?$result['DS_URL']:''; ?>" target="_blank">Aquí</a>
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
                    Del Team Developer Men esperamos que sea de gran utilidad esta mejora y déjanos saber que mejoras deseas para tu sitio web en el correo <a style="text-decoration:none;color:#646FCB;font-weight:bold;" href="mailto:support@developermen.com">support@developermen.com</a> en el asunto proporcionanos tu nombre de compañia y el producto adquirido seguido de un guíon de la siguiente manera : <span style="color:#646FCB;font-weight:bold;"><?php echo isset($result['DS_NOMCOMPANIA'])?$result['DS_NOMCOMPANIA']:''; ?> - <?php echo isset($producto)?$producto:''; ?></span>
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
          <!-- FOOTER -->
          <tr>
            <td class="innerpadding" style="background: #646FCB;color:#fff;">
              <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td class="h2" style="text-align:center;font-size:15px;color:#fff;">
                    Esta es una notificación automática por favor no responda a este mensaje
                    <br>
                    <a style="text-decoration:none;color:#153643;" href="https://developermen.com/" target="_blank">&reg; Developer Men</a>, todos los derechos reservados <?php echo $año; ?><br/>
                    Si no puedes visualizar correctamente este mensaje <a style="text-decoration:none;color:#153643;" href="https://developermen.com/admin/features/improvement?oid=<?php echo isset($result['OIDMEJORA'])?$result['OIDMEJORA']:''; ?>">Accede aquí</a>
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
</html>
