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
//Aqui validamos que recibamos un dato por $_POST con el ajax
if(isset($_POST['oid'])){
  $oid = $_POST['oid'];
  actualizarIncidencia($oid);
}
/*Funcion que se encarga de actualizar la incidencia*/
function actualizarIncidencia($oid){
  conectarSopor($conexionSopor);
  $sql="UPDATE SUP_INCIDENCIAS
  SET SN_ESTADO = '2'
  WHERE OID = '$oid'";
  $error = "No se pudo realizar la consulta";
  executeQuery($conexionSopor,$sql,$error,$stmt);
  mysqli_close($conexionSopor);
  echo "1";
}
?>
