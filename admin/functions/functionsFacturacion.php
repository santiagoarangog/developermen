<?php
/*!
@functions Aplicativo (Administracion Developer Men)
@Page admin (.php)
@version 1.0.
@description Funciones que integran los modulos del aplicativo de votaciones conocido como Comite.
@Autor Santiago Arango Gutierrez - Auxiliar de analisis y desarrollo Clínica Somer.
@Año 2017.
@Modificacion _
@Año modificacion _
*/
require('conexion.php');
// Funcion que inserta la informacion de las actividades pendientes
function informacionFactura(&$result){
  conectar($conexion);
  $oid = $_GET['oid'];
  getHost($fec,$host);
  $sqlValNom = "SELECT DS_FECHA,DS_NOMDESTINATARIO,DS_CORREODESTINATARIO,DS_PRODUCTO,CD_COSTOPRODUCTO,CD_RADICADO,SN_TIPODOMINIO,CD_VALORDOMINIO,CD_GESTCOMDOMINI,CD_COSTODESARRO,
  SN_METPAGO,CD_PAGOREALIZADO,DS_NOMUSUARIO,SN_OBSEQUIO1,SN_OBSEQUIO2,SN_MOROSOS,SN_COPIA,CD_USUDILIGENCIA,DS_HOSTDILIGENCIA,DT_FECHADILIGENCIA,SN_ESTADO,SN_HOSTING,CD_COSTHOSTING
  FROM facturacion
  WHERE OID = '$oid'";
  mysqli_error($conexion);
  $executeQuery = mysqli_query($conexion,$sqlValNom);
  $result = mysqli_fetch_array($executeQuery);
  mysqli_close($conexion);
}
?>
