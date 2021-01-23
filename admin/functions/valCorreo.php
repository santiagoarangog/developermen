<?php
include ('conexion.php');
$correo = isset($_GET['correo']);
// Validación que realizamos cuando se reciba un parametro por $_GET
if ($correo!='') {
  cambiarEstado($correo);
  insertValCorreo($correo);
  imagen();
}
// Fncion que cambia el estado de recibido
function cambiarEstado($correo){
  conectar($conexion);
  $correo1 = $_GET['correo'];
  $tipoCorreo = $_GET['tipoCorreo'];
  $id = $_GET['id'];
  $sql = "UPDATE correoFrontEnd
  SET SN_ESTADO = '1'
  WHERE DS_CORREODESTINATARIO = '$correo1' AND OID = '$id'";
  $sqlQuery=mysqli_query($conexion,$sql) or die ("Error al momento de cambiar el estado del correo ".mysqli_error($conexion));
}
//Funcion que guarda un registro con la información del correo recibido
function insertValCorreo($correo){
  conectar($conexion);
  $correo1 = $_GET['correo'];
  $host = $_SERVER['REMOTE_ADDR'];
  $tipoCorreo = $_GET['tipoCorreo'];
  date_default_timezone_set("America/Bogota");
  $fecha = date("Y-m-d H:i:s");
  $sql="INSERT INTO valCorreo (DS_CORREO,DS_HOST,DT_FECHA,SN_ESTADO,SN_TIPOCORREO) VALUES('$correo1','$host','$fecha','1','$tipoCorreo')";
  $sqlQuery=mysqli_query($conexion,$sql) or die ("Error al momento de cambiar el estado del correo ".mysqli_error($conexion));
}
//Funcion que devuelve la imagen
// Funcion que devuelve una imagen de encabezado segun el correo que se va a visualizar
function imagen(){
  $tipoCorreo = $_GET['tipoCorreo'];
  if ($tipoCorreo == "EnvioCorreo") {
    header('location:https://developermen.com/assets/img/cdn/bg-mail.jpg');
  }
}
?>
