<?php
/*!
@functionsApp Developer Men - Support
@version 1.0.
@description Funciones que se ejecutan en la página de Modals.
@Autor Santiago Arango Gutierrez - CEO & Development Developer Men.
@Año 2019.
@Modificacion _
@Año modificacion _
*/
require("conexion.php");
/*Función que lista los productos*/
function listarProductos($oidProducto){
  conectar($conn);
  $sql = "SELECT OID,DS_NOMBRE
  FROM WEB_PRODUCTOS
  WHERE SN_ESTADO = '1'";
  $error = "Error: No fue posible listar los productos";
  executeQuery($conn,$sql,$error,$stmt);
  while($row = mysqli_fetch_assoc($stmt)){
    echo"<option value='".$row['OID']."'";
    if($oidProducto == $row['OID']){
      echo" selected='selected'";
    }
    echo">".$row['DS_NOMBRE']."</option>";
  }
  closeConnection($stmt,$conn);
}
/*Función que lista los servicios*/
function listarServicios($oidServicio){
  conectar($conn);
  $sql = "SELECT OID,DS_NOMBRE
  FROM WEB_SERVICIOS
  WHERE SN_ESTADO = '1'";
  $error = "Error: No fue posible listar los productos";
  executeQuery($conn,$sql,$error,$stmt);
  while($row = mysqli_fetch_assoc($stmt)){
    echo"<option value='".$row['OID']."'";
    if($oidServicio == $row['OID']){
      echo" selected='selected'";
    }
    echo">".$row['DS_NOMBRE']."</option>";
  }
  closeConnection($stmt,$conn);
}
?>
