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
function conectarSopor(&$conexionSopor){
	$conexionSopor = mysqli_connect(DB_SERVERSOPOR,DB_USERSOPOR, DB_PASSSOPOR, DB_NAMESOPOR);
	if( $conexionSopor === false ) {
		die( print_r( mysqli_error(), true));
	}
	return $conexionSopor;
}
// Funcion que retorna el equipo y la fecha del cliente
function getHost(&$fec,&$host){
	$host = gethostname();
	date_default_timezone_set("America/Bogota");
	$fec = date("Y-m-d H:i:s");
}
//Funcion para ejecutar consultas,insert o update
function executeQuery($conexion,$sql,$error,&$stmt){
	$stmt = mysqli_query($conexion,$sql) or die ($error.' <br>Error MYSQL: '.mysqli_error($conexion));
	return $stmt;
}
// Funcion para encapsular caracteres
function queryBinding($conn, $sql, $params,$error,&$stmt){
	$stmt = mysqli_query($conexion,$sql) or die ($error.' <br>Error MYSQL: '.mysqli_error($conexion));
	return $stmt;
}
//Funcion para cerrar la conexion
function closeConnection($stmt,$conexion){
	mysqli_free_result($stmt);
	mysqli_close($conexion);
}
//Funcion que trae el ultimo OID
function getInsertOid($stmt,&$oidReg){
	mysqli_result($stmt);
	mysqli_fetch_array($stmt);
	$oidReg =  mysqli_result($stmt, 0);
}
//Funcion que devuelve el Usuario
function returnUsu(&$usu){
	$usu = $_SESSION["session"];
}
function returnDateHost(&$fec,&$usu,&$host){
    date_default_timezone_set("America/Bogota"); /*se define zona horaria*/
    $fec = date("Y-m-d H:i:s"); //Se guarda la hora en una variable
    $usu = $_SESSION["session_username"];
    $host = gethostbyaddr($_SERVER['REMOTE_ADDR']); //se guarda el nombre del equipo en una variable
}
?>
