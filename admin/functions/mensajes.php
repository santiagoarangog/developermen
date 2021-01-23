<?php
define('ERROR_LOGIN' , 'El usuario o la contraseña ingresadas no son correctas.');
define('NO_LOGUEADO' , 'Debe iniciar sesion primero para poder ingresar a esta pagina.');
define('NO_AUTORIZADO' , 'Usted no tiene permisos para utilizar esta pagina.');
define('TIME_OUT' , 'Tiempo maximo de inactividad cumplido. Debe iniciar la sesion nuevamente.');
/*se define una funcion con la impresion del mensaje de acuerdo al tipo de mensaje recibido en la funcion, y se envia.*/
function imprimirMensajes($tipomsg){
	if($tipomsg == "errorLogin"){
		echo "<div onclick='hideDivError();' id='divError' class='notificationError alert alert-danger'><i class='glyphicon glyphicon-exclamation-sign' aria-hidden='true' style='margin-top:1%;'></i>
		<strong>ERROR:</strong>".(ERROR_LOGIN) ."
		</div>";
		echo"
		<script>
		$( function(){ showDivError(); });
		</script>
		";

	}
	if($tipomsg == "nologueado"){
		echo "<div onclick='hideWarningMessage();' id='divWarning' class='notificationWarning alert alert-warning'><i class='glyphicon glyphicon-exclamation-sign' aria-hidden='true' style='margin-top:1%;'></i>
		<strong>Advertencia:</strong>".(NO_LOGUEADO) ."
		</div>";
		echo"
		<script>
		$( function(){ showWarningMessage(); });
		</script>
		";
	}
	if($tipomsg == "noAutorizado"){
		echo "<div onclick='hideDivError();' id='divError' class='notificationError alert alert-danger'><i class='glyphicon glyphicon-exclamation-sign' aria-hidden='true' style='margin-top:1%;'></i>
		<strong>ERROR:</strong>".(NO_AUTORIZADO) ."
		</div>";
		echo"
		<script>
		$( function(){ showDivError(); });
		</script>
		";

	}
	if($tipomsg == "timeOut"){
		echo "
		<div onclick='hideDivError();' id='divError' class='notificationError alert alert-danger'>
		<span style='font-weight: bold;'>ERROR: </span>".(TIME_OUT) ."</div>
		";
		echo"
		<script>
		$( function(){ showDivError(); });
		</script>
		";
	}
}
/*Función propia de los mensajes*/
function mensajesAplicaciones($tipoMsg, $accion,$msg){
	if ($tipoMsg == 'error') {
		echo "<div onclick='hideDivError();' id='divError' class='divError alert alert-danger' style='top:2%;	position:fixed;right:2%;'>
		<i class='fa fa-circle text-light'></i></span>
		<strong>Error: </strong>".$msg."
		</div>";
		echo"
		<script>
		$( function(){ showDivError(); });
		</script>
		";
	}else if ($tipoMsg == 'success') {
		echo "<div onclick='hideSucessMessage();' id='divSuccess' class='alertSuccess alert alert-success' style='top:2%;	position:fixed;right:2%;'>
		<i class='fa fa-circle text-success'></i></span>
		". $msg ."
		</div>";
		// echo "
		// <div onclick='hideSucessMessage();' id='divSuccess' class='notificationSuccess'>
		// <span style='font-weight: bold;'>BIEN: </span>".$msg."</div>
		// ";
		echo "
		<script>
		$( function(){ showSucessMessage(); });
		</script>
		";
	}else if ($tipoMsg == 'correo') {
		echo "<div onclick='hideSucessMessage();' id='divSuccessCorreo' class='alertCorreo alert alert-success' style='top:2%;	position:fixed;right:2%;'>
		<i class='fa fa-envelope-open-o' aria-hidden='true'></i></span>
		". $msg ."
		</div>";
		// echo "
		// <div onclick='hideSucessMessage();' id='divSuccess' class='notificationSuccess'>
		// <span style='font-weight: bold;'>BIEN: </span>".$msg."</div>
		// ";
		echo "
		<script>
		$( function(){ showSucessMessageCorreo(); });
		</script>
		";
	}else if ($tipoMsg == 'warning') {
		echo "<div onclick='hideDivWarning();' id='divWarning' class='divWarning alert alert-warning' style='top:2%;	position:fixed;right:2%;'>
		<i class='fa fa-info-circle' aria-hidden='true'></i>
		". $msg ."
		</div>";
		// echo "
		// <div onclick='hideSucessMessage();' id='divSuccess' class='notificationSuccess'>
		// <span style='font-weight: bold;'>BIEN: </span>".$msg."</div>
		// ";
		echo "
		<script>
		$( function(){ showDivError(); });
		</script>
		";
	}


	if ($accion == 'cerrarVentana') {
		echo"
		<script>opener.location.reload();
		setTimeout(function(){ self.close(); },2500);
		</script>
		";
	}else if ($accion == 'relocate'){
		echo"
		<script>
		setTimeout(function(){window.location = window.location; },2500);
		</script>
		";
	}	else {
		echo"";
	}

}
/*Función propia de los mensajes del login de validación*/
function mensajesLogin($tipoMsg,$icono,$accion,$msg){
	$iconoMsg = isset($icono)?$icono:'fa fa-circle';
	if ($tipoMsg == 'errorUsu') {
		echo "<div onclick='hideDivError();' id='divError' class='divError alertError alert alert-danger animated fadeInRight' style='top:2%;	position:fixed;right:2%;z-index:200;'>
		<i class='$iconoMsg'></i></span>
		".$msg."
		</div>";
		echo"
		<script>
		$( function(){ showDivError(); });
		</script>
		";
	}else if ($tipoMsg == 'correcto') {
		echo "<div onclick='hideSucessMessage();' id='divSuccess' class='alertSuccess alert alert-success' style='top:2%;	position:fixed;right:2%;z-index:200;'>
		<i class='fa fa-circle text-success'></i></span>
		". $msg ."
		</div>";
		echo "
		<script>
		$( function(){ showSucessMessage(); });
		</script>
		";
	}else if ($tipoMsg == 'alerta') {
		echo "<div onclick='hideDivWarning();' id='divWarning' class='divWarning alert alert-warning' style='top:2%;	position:fixed;right:2%;z-index:200;'>
		<i class='$iconoMsg' aria-hidden='true'></i>
		". $msg ."
		</div>";
		echo "
		<script>
		$( function(){ showDivWarning(); });
		</script>
		";
	}
	/*Acciones propias de los mensajes*/
	if ($accion == 'cerrarVentana') {
		echo"
		<script>opener.location.reload();
		setTimeout(function(){ self.close(); },2500);
		</script>
		";
	}else if ($accion == 'relocate'){
		echo"
		<script>
		setTimeout(function(){window.location = window.location; },2500);
		</script>
		";
	}	else {
		echo"";
	}

}
?>
