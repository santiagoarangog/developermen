<?php
/*!
@functions Aplicativo (Administración Developer Men)
@version 1.0.
@description Funciones que se realizan por Ajax.
@Autor Developer Men
@Año 2018.
@Modificacion _
@Año modificacion _
*/
include ('conexion.php');
require('sendMail.php');
//Aqui validamos que recibamos un dato por $_POST con el ajax
if(isset($_POST['nombre'])){
  $nombre = $_POST['nombre'];
  insertInfoContacto($nombre);
}
/*Funcion que se encarga de actualizar la incidencia*/
function insertInfoContacto($nombre){
  conectar($conn);
  returnDate($fec,$host);
  $sql="INSERT INTO WEB_CONTACTANOS(DS_NOMBRE,DS_CORREO,CD_NUMTELEFONO,CD_OIDPRODUCTO,CD_OIDSERVICIO,DS_OBSERVACION,SN_POLITICA,DS_HOSTDILIG,DT_FECDILIG)
  VALUES('".$_POST['nombre']."','".$_POST['correo']."','".$_POST['numCelular']."','".$_POST['producto']."','".$_POST['servicio']."','".$_POST['descripcion']."','".$_POST['politica']."','$host','$fec')";
  $error = "Error: No fue posible insertar la información del contacto";
  executeQuery($conn,$sql,$error,$stmt);
  $sqlMax = "SELECT MAX(OID) AS MAXOID
  FROM WEB_CONTACTANOS";
  $errorMax = "Error: No fue posible consultar el máximo OID";
  executeQuery($conn,$sqlMax,$errorMax,$stmtMax);
  $row = mysqli_fetch_assoc($stmtMax);
  /*Inicia correo para enviar la nueva contraseña*/
  $correo = $_POST['correo'];
  $usuario = $_POST['nombre'];
  $oid = password_hash($row['MAXOID'], PASSWORD_BCRYPT);
  /*Inicia función para arrojar la información suministrada*/
  $sqlUsuario = "SELECT A.CD_NUMTELEFONO, B.DS_NOMBRE AS PRODUCTO,C.DS_NOMBRE AS SERVICIO,A.DS_OBSERVACION AS DESCRIPCION
  FROM WEB_CONTACTANOS A
  INNER JOIN WEB_PRODUCTOS B ON A.CD_OIDPRODUCTO = B.OID
  INNER JOIN WEB_SERVICIOS C ON A.CD_OIDSERVICIO = C.OID
  WHERE A.OID = '".$row['MAXOID']."'";
  $error = "Error: No fue posible consultar la información suministrada en el contacto";
  executeQuery($conn,$sqlUsuario,$error,$stmt);
  $rowUsuario = mysqli_fetch_assoc($stmt);
  if (count($rowUsuario) > '0') {
    $body='';
    $subject = ' 📮 '. $usuario .' • '.utf8_decode(' Te haz contactado con Developer Men');
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
    <a target="_blank" style="text-decoration:none;" href="https://developermen.com/">
    <font color="#444444">
    <img alt="Contactanos Developer Men" align="center" style="border-radius:6px;width:90%;" src="https://developermen.com/assets/img/email/new-messages.png"/>
    </font>
    </a>
    <center>
    <p style="text-align: center; line-height: 28px; font-size: 26px;">
    <strong>
    <font color="#444444">
    👋 Hola, '.$usuario. ' gracias por contactarte con nosotros
    </font>
    </strong>
    </p>
    <p style="text-align: justify; line-height: 28px; font-size: 20px;">
    <font color="#444444">
    En el trascurso de 12 a 24 horas hábiles uno de nuestros asesores se comunicará contigo por medio de los medios de contacto brindados.
    </font>
    </p>
    <p style="text-align: justify; line-height: 16px; font-size: 20px;">
    <font color="#444444">
    <strong>PD:</strong> Normalmente respondemos en el trascurso de 15 minutos ;) 
    </font>
    </p>
    <center>
    <table border="0" cellpadding="14" cellspacing="0" style="background:#7362DE; border-radius:6px; color:#ffffff; cursor:pointer; display:inline-block; font-size:20px; font-weight:bold; line-height:24px; margin:0px auto; text-align:center" class="button main">
    <tbody>
    <tr>
    <td align="center" style="vertical-align:middle" class="emailButtonContent">
    <font color="#ffffff">
    <a target="_blank" style="text-decoration:none; padding: 0 8px;" href="https://developermen.com/seguimiento?contacto='.$oid.'">
    <font color="white">
    Realizar seguimiento a mi contacto
    </font>
    </a>
    </font>
    </td>
    </tr>
    </tbody>
    </table>
    </center>
    <center>
    <table>
    <tbody>
    <tr>
    <td>
    <p style="text-align: center; line-height: 28px; font-size: 26px;">
    <strong>
    <font color="#444444">
    Esta es tu información ingresada
    </font>
    </strong>
    </p>
    <p style="text-align: justify; line-height: 28px; font-size: 20px;">
    <font color="#444444">
    <ul style="list-style:none;">
    <li><strong>Teléfono contacto:</strong> '.$rowUsuario['CD_NUMTELEFONO'].'</li>
    <li><strong>Producto:</strong> '.$rowUsuario['PRODUCTO'].'</li>
    <li><strong>Servicio:</strong> '.$rowUsuario['SERVICIO'].'</li>
    <li><strong>Descripción:</strong> '.$rowUsuario['DESCRIPCION'].'</li>
    </ul>
    </font>
    </p>
    </td>
    </tr>
    </tbody>
    </table>
    ';
    //Footer
    include('resources/footerCorreo.php');
    $body=$body2;
    $email = "$correo";
    $mailTo = array(array($email => "$usuario"), array('santiago9606@gmail.com' => "Santiago Arango Gutierrez - Correo de copia"), array('contactanosdevelopermen@gmail.com' => "Developer Men Inc. - Correo de copia"));
    /* funcion que envia el correo */
    echo "<div style='display:none;'>";
    sendEmail($mailTo,$subject,$body);
    echo "</div>";
    echo 'success';
  }else {
    echo 'false';
  }
}

// Validacion que se realiza para validar que se reciba un dato por $_POST o $_GET segun el metodo utilizado - Ajax
if(isset($_POST['phone'])){
  $phone = $_POST['phone'];
  enviarInfoWpp($phone);
}
/*Funcion para actualizar la contraseña generada al usuario seleccionado*/
function enviarInfoWpp($phone){
  $text = $_POST['asuntoWpp'];
  echo $text;
}

//Aqui validamos que recibamos un dato por $_POST con el ajax
if(isset($_POST['nombreAsesoria'])){
  $nombreAsesoria = $_POST['nombreAsesoria'];
  insertInfoAsesoria($nombreAsesoria);
}
/*Función que inserta la información de la asesoria solicitada*/
function insertInfoAsesoria($nombreAsesoria){
  conectar($conn);
  returnDate($fec,$host);
  $sql="INSERT INTO WEB_ASESORIA(DS_NOMBRE,DS_CORREO,DS_TELEFONO,DS_DESCRIPCION,SN_ESTADO,SN_POLITICA,DS_HOSTDILIG,DT_FECHADILIG)
  VALUES('".$_POST['nombreAsesoria']."','".$_POST['correoAsesoria']."','".$_POST['telefonoAsesoria']."','".$_POST['descripcionAsesoria']."','1','".$_POST['politicaAsesoria']."','$host','$fec')";
  $error = "Error: No fue posible insertar la información de la asesoria";
  executeQuery($conn,$sql,$error,$stmt);
  $usuario = $_POST['nombreAsesoria'];
  $correo = $_POST['correoAsesoria'];
  $body='';
  $subject = ' 📮 '. $usuario .' • '.utf8_decode(' Haz solicitado una asesoria con Developer Men');
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
  <a target="_blank" style="text-decoration:none;" href="https://developermen.com/">
  <font color="#444444">
  <img alt="Contactanos Developer Men" align="center" style="border-radius:6px;width:90%;" src="https://developermen.com/assets/img/email/five.png"/>
  </font>
  </a>
  <center>
  <p style="text-align: center; line-height: 28px; font-size: 26px;">
  <strong>
  <font color="#444444">
  Hola, '.$_POST['nombreAsesoria'].' gracias por confiar en nosotros
  </font>
  </strong>
  </p>
  <p style="text-align: justify; line-height: 28px; font-size: 20px;">
  <font color="#444444">
  Uno de nuestros asesores tomará tu asesoría y se comunicará contigo por los medios brindados o por medio de la página de gestión a la que puedes acceder dando clic en el botón que se encuentra en el presente mensaje
  </font>
  </p>
  <center>
  <table border="0" cellpadding="14" cellspacing="0" style="background:#7362DE; border-radius:6px; color:#ffffff; cursor:pointer; display:inline-block; font-size:20px; font-weight:bold; line-height:24px; margin:0px auto; text-align:center" class="button main">
  <tbody>
  <tr>
  <td align="center" style="vertical-align:middle" class="emailButtonContent">
  <font color="#ffffff">
  <a target="_blank" style="text-decoration:none; padding: 0 8px;" href="https://developermen.com/seguimiento?contacto='.$oid.'">
  <font color="white">
  Realizar seguimiento a mi asesoría
  </font>
  </a>
  </font>
  </td>
  </tr>
  </tbody>
  </table>
  </center>
  <center>
  <table>
  <tbody>
  <tr>
  <td>
  <p style="text-align: center; line-height: 28px; font-size: 26px;">
  <strong>
  <font color="#444444">
  Esta es tu información ingresada
  </font>
  </strong>
  </p>
  <p style="text-align: justify; line-height: 28px; font-size: 20px;">
  <font color="#444444">
  <ul style="list-style:none;">
  <li><strong>Teléfono contacto:</strong> '.$_POST['telefonoAsesoria'].'</li>
  <li><strong>Descripción:</strong> '.$_POST['descripcionAsesoria'].'</li>
  </ul>
  </font>
  </p>
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
  echo 'success';
}
?>
