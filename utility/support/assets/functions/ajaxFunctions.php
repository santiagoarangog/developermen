<?php
/*!
@functionsApp Developer Men - Support
@version 1.0.
@description Funciones que se ejecutan con una función Ajax.
@Autor Santiago Arango Gutierrez - CEO & Development Developer Men.
@Año 2019.
@Modificacion _
@Año modificacion _
*/
include("conexion.php");
require('sendMail.php');
// Validacion que se realiza para validar que se reciba un dato por $_POST o $_GET segun el metodo utilizado
if(isset($_POST['usuario'])){
  $usuario = $_POST['usuario'];
  $clave = $_POST['password'];
  valDatosLogin($usuario);
}
//Funcion que valida que se reciba un dato por la funcion de Jquery
function valDatosLogin($usuario){
  conectar($conexion);
  $ctime = strtotime("now");
  $sql = "SELECT OID AS OIDLOGIN,DS_NOMBRE,DS_EMAIL,DS_PASSWORD,DS_USERNAME
  FROM SUP_LOGIN
  WHERE DS_EMAIL = '".$usuario."' AND SN_ESTADO = '1'";
  $error = "Error: No fue posible validar si el EMAIL se encuentra en la base de datos creada";
  executeQuery($conexion,$sql,$error,$stmt);
  $row = mysqli_fetch_assoc($stmt);
  $count = count($row);
  if ($count > '0' && password_verify($_POST['password'],$row['DS_PASSWORD'])) {
    session_start();
    $_SESSION['session_devmen']= $row['DS_USERNAME'];
    $_SESSION['sessionX'] = $ctime;
    $_SESSION['autentificado']='SI';
    echo '1';
  }else {
    echo '0';
  }
  closeConnection($stmt,$conexion);
}

/*Función que valida que se inserte un correo electrónico valido*/
if(isset($_POST['emailRecover'])){
  $emailRecover = $_POST['emailRecover'];
  valEmail($emailRecover);
}
//Funcion que valida que se reciba un dato por la funcion de Jquery
function valEmail($emailRecover){
  conectar($conexion);
  $sql = "SELECT OID AS OIDLOGIN,DS_NOMBRE,DS_EMAIL,DS_PASSWORD,DS_USERNAME
  FROM SUP_LOGIN
  WHERE DS_EMAIL = '".$emailRecover."' AND SN_ESTADO = '1'";
  $error = "Error: No fue posible validar si se cuenta con esta cuenta de usuario";
  executeQuery($conexion,$sql,$error,$stmt);
  $row = mysqli_fetch_assoc($stmt);
  $count = count($row);
  if ($count > '0') {
    echo '1';
  }else {
    echo '0';
  }
  closeConnection($stmt,$conexion);
}
?>
