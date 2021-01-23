<?php
/*!
@functions Aplicativo (Comite)
@version 3.0.
@description Funciones que integran los modulos del aplicativo de votaciones conocido como Comite.
@Autor Santiago Arango Gutierrez - Auxiliar de analisis y desarrollo Clínica Somer.
@Año 2017.
@Modificacion _
@Año modificacion _
*/
include ('conexion.php');
include ('mensajes.php');
/*Funcion para registrar que un tipo de proceso fue activado o inactivado*/
function cambiarPreferencias($datos){
  conectar($conexion);
  $oidEst = isset($_GET['oidEst'])?$_GET['oidEst']:'';
  $oidUsu = isset($_GET['oidUsu'])?$_GET['oidUsu']:'';
  $sql = "UPDATE users
  SET SN_RECIBIRCORREO = '$oidEst'
  WHERE OID = '$oidUsu'";
  $errorUsuario= "No se pudo realizar la insercion de la informacion";
  $executeQuery = mysqli_query($conexion,$sql);
  $tipoMsg = 'success';
  $accion = '';
  $msg = 'Se dio de baja correctamente';
  mensajesAplicaciones($tipoMsg, $accion, $msg);
  mysqli_close($conexion);
}
?>
