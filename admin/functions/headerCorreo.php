<?php
$body2 = "
<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
<title>$asunto</title>
<meta name='viewport' content='width=device-width, initial-scale=1.0'/>
<style media='screen'>
body{
  color:#000;
  margin:0;height:100%;
  font-family: 'Courier New', Courier, monospace;
}
.header{
  background:url(\"https://developermen.com/assets/functions/valCorreo.php?correo=$correo&tipoCorreo=EnvioCorreo&id=$id\");
  background-repeat: no-repeat;
  background-size: cover;
  background-position:-0.5px;
  padding: 20px 0 20px 0;
  color: #153643;
  font-size: 28px;
  font-weight: bold;
  font-family: Arial, sans-serif;
}
.footer{
  background: #000;
  background: -moz-linear-gradient(left, #665DD2 0%, #86c9cf 100%);
  background: -webkit-linear-gradient(left, #665DD2 0%, #86c9cf 100%);
  background: linear-gradient(to right, #665DD2 0%, #86c9cf 100%);
  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#000', endColorstr='#86c9cf', GradientType=1);padding: 30px 30px 30px 30px;
}
</style>
</head>
<body style='margin: 0; padding: 0;'>
<table border='0' cellpadding='0' cellspacing='0' width='100%'>
<tr>
<td style='padding: 10px 0 30px 0;'>
<table align='center' border='0' cellpadding='0' cellspacing='0' width='600' style='border: 1px solid #cccccc; border-collapse: collapse;'>
<tr>
<td align='center' class='header' bgcolor='#70bbd9'>
<img src='https://developermen.com/assets/img/icons/headerCorreo.png' alt='Hola $nombre ! Este un correo de parte de Developer Men para Tí' width='300' height='auto' />
</td>
</tr>
<tr>
<td bgcolor='#ffffff' style='padding: 40px 30px 40px 30px;'>
<div align='center'>
<img src='https://developermen.com/assets/img/logoFooter.png' alt='' alt='Developer Men' width='300' height='auto' style='display: block;margin-top:0%;'>
</div>";

?>
