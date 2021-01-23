<?php
/*!
@functionsApp Developer Men - Mensajes Support
@version 1.0.
@description Funciones que ejecutan los mensajes de la aplicación.
@Autor Santiago Arango Gutierrez - CEO & Development Developer Men.
@Año 2019.
@Modificacion _
@Año modificacion _
*/
/*Mensaje cuando se cierra la sesión*/
function seccionCerrada(){
  echo '<br>
  <div class="alert alert-success alert-dismissible fade show mensajeLogin" role="alert" id="msgLogin">
  <i class="fas fa-check"></i>&nbsp;
  <span class="font-size-875 text-justify">Sesión finalizada correctamente</span>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
  <span aria-hidden="true">&times;</span>
  </button>
  </div>
  ';
}
/*Inicia funcion para validar cuando el usuario no se ha loggeado y quiere ingresar a un modulo sin iniciar sesion*/
function usuarioNoLogeado(){
  echo '<br/><div class="alert alert-warning alert-dismissable mensajeLogin" role="alert" id="msgLogin">
  <i class="glyphicon glyphicon-info-sign" aria-hidden="true"></i>
  <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
  <strong class="font-size-875">Debe loggearse primero en el sitio web</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
  <span aria-hidden="true">&times;</span>
  </button>
  </div>';
}
/*Inicia funcion para validar cuando la sesión expiro*/
function seccionExpire(){
  echo '<br/><div class="alert alert-warning alert-dismissible fade show mensajeLogin" role="alert" id="msgLogin">
  <i class="fas fa-user-clock"></i>
  <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
  <strong class="font-size-875">Su sesión ha finalizado, inicie sesión nuevamente</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
  <span aria-hidden="true">&times;</span>
  </button>
  </div>';
}
/*Función propia de los mensajes*/
function mensajesAplicaciones($tipoMsg, $accion,$msg){
  if ($tipoMsg == 'error') {
    echo "<div class='alert alert-danger alert-dismissible fade show font-size-875 mensaje' onclick='hideDivError();' id='divError'>
    ".$msg." &nbsp;
    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    <span aria-hidden='true'>&times;</span>
    </button>
    </div>";
  }else if ($tipoMsg == 'success') {
    echo '<div class="alert alert-success alert-dismissible fade show font-size-875 mensaje" id="divSuccess" onclick="hideSucessMessage();" role="alert">
    '. $msg .' &nbsp;
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
    </div>';
    echo "
    <script>
    $( function(){ showSucessMessage(); });
    </script>
    ";
  }else if ($tipoMsg == 'correo') {
    echo '<div class="alert alert-success alert-dismissible fade show font-size-875 mensaje" id="divSuccessCorreo" onclick="hideSucessMessage();" role="alert">
    <i class="fa fa-envelope-open-o" aria-hidden="true"></i></span>
    '. $msg .' &nbsp;
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
    </div>';
    echo "
    <script>
    $( function(){ showSucessMessageCorreo(); });
    </script>
    ";
  }else if ($tipoMsg == 'warning') {
    echo '<div class="alert alert-warning alert-dismissible fade show font-size-875 mensaje" id="divWarning" onclick="hideDivWarning();" role="alert">
    '. $msg .' &nbsp;
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
    </div>';
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
  }else if ($tipoMsg == 'correcto') {
    echo "<div onclick='hideSucessMessage();' id='divSuccess' class='alertSuccess alert alert-success' style='top:2%;	position:fixed;right:2%;z-index:200;'>
    <i class='fa fa-circle text-success'></i></span>
    ". $msg ."
    </div>";
    echo "
    <script>
    // $( function(){ showSucessMessage(); });
    </script>
    ";
  }else if ($tipoMsg == 'alerta') {
    echo "<div onclick='hideDivWarning();' id='divWarning' class='divWarning alert alert-warning' style='top:2%;	position:fixed;right:2%;z-index:200;'>
    <i class='$iconoMsg' aria-hidden='true'></i>
    ". $msg ."
    </div>";
    echo "
    <script>
    // $( function(){ showDivWarning(); });
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
