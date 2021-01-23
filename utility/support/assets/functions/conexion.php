<?php
require("constants.php");
// Funcion para conectar a la base de datos de Administracion de Developer Men
/*Conexión Administración*/
function conectar(&$conexion){
	$conexion = mysqli_connect(DB_SERVER,DB_USER, DB_PASS, DB_NAME);
	if( $conexion === false ) {
		die( print_r( mysqli_error(), true));
	}
	return $conexion;
}
/*Conexión Front End*/
function conectarDvm(&$conexionDvm){
	$conexionDvm = mysqli_connect(DB_SERVERDVM,DB_USERDVM, DB_PASSDVM, DB_NAMEDVM);
	if( $conexionDvm === false ) {
		die( print_r( mysqli_error(), true));
	}
	return $conexionDvm;
}
/*Conexión Soporte*/
function conectarAdmin(&$conexionAdmin){
	$conexionAdmin = mysqli_connect(DB_SERVERADMIN,DB_USERADMIN, DB_PASSADMIN, DB_NAMEADMIN);
	if( $conexionAdmin === false ) {
		die( print_r( mysqli_error(), true));
	}
	return $conexionAdmin;
}
// Funcion que retorna el equipo y la fecha del cliente
function getHost(&$fec,&$host){
	$host = gethostname();
	date_default_timezone_set("America/Bogota");
	$fec = date("Y-m-d H:i:s");
}
//Funcion para ejecutar consultas,insert o update
function executeQuery($conexion, $sql , $error,&$stmt){
	$stmt = mysqli_query($conexion,$sql) or die ($error.' <br>Error MYSQL: '.mysqli_error($conexion));
	return $stmt;
}
//Funcion para encapsular caracteres
function queryBinding($conn, $sql, $params,$errorUsuario,&$stmt){
	$stmt = mysqli_query($conn, $sql, $params);
	if( $stmt === false ) {
		if( ($errors = mysqli_error() ) != null) {
			foreach( $errors as $error ) {
				echo "SQLSTATE: ".$error[ 'SQLSTATE']."<br />";
				echo "code: ".$error[ 'code']."<br />";
				echo "message: ".$error[ 'message']."<br />";
				echo "$errorUsuario";
				print_r($stmt);
				die();exit();
			}
		}
	}
}
//Funcion para cerrar la conexion
function closeConnection($stmt,$conexion){
	mysqli_close($conexion);
}
//Funcion que trae el ultimo OID
function getInsertOid($stmt,&$oidReg){
	mysqli_result($stmt);
	mysqli_fetch_array($stmt);
	$oidReg =  mysqli_result($stmt, 0);
}
?>
