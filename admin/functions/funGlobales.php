<?php
include ('conexion.php');
include ('mensajes.php');
/*Función que valida el Token del Usuario*/
function validarToken(){
  $username = $_SESSION['session'];
  $token = $_SESSION["token"];
  conectar($conexion);
  $sql = "SELECT COUNT(OID) AS OIDTOKEN FROM ADM_LOGIN
  WHERE DS_USERNAME = '$username' AND DS_TOKEN = '$token'";
  $error = "Error: No se puede consultar el token del usuario";
  executeQuery($conexion, $sql , $error,$stmt);
  $row=mysqli_fetch_assoc($stmt);
  if ($row['OIDTOKEN']>'0') {

  }else {
    $tipoMsg = 'error';
    $accion = 'cerrarVentana';
    $msg = 'Usted no cuenta con un token de seguridad valido';
    mensajesAplicaciones($tipoMsg, $accion, $msg);
    echo "<script>setTimeout(function(){location.href='logout?msg=tokenInvalido&errorUsuario=si'},850);</script>";
  }
  mysqli_close($conexion);
}
/*Funcion para traer la imagen del usuario*/
function cargarImagen(&$result2){
  conectar($conexion);
  $usu = $_SESSION["session"];
  $sql = "SELECT DS_NOMBRE,DS_COMPANY,DS_USERNAME,DS_IMAGEN,CONCAT(DS_NOMBRE,' ',DS_APELLIDO) AS NOMBRECOMPLETO,DS_IMAGENPORTADA
  FROM ADM_USERS
  WHERE DS_USERNAME = '$usu'";
  $executeQuery = mysqli_query($conexion,$sql);
  $result2=mysqli_fetch_array($executeQuery);
  mysqli_close($conexion);
}
?>
