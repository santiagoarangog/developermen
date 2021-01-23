/**************************************Inician funciones para el modulo de inicio de sesion o de ingreso al aplicativo.*******************************************/
/*Funcion para mostrar y ocultar la contraseña*/
var conteo = 0  //Definimos la Variable
$("#change").click(function() { //Funcion del Click
  if(conteo == 0) { //Si la variable es igual a 0
    conteo = 1; //La cambiamos a 1
    $('#clave').removeAttr("type", "password"); //Removemos el atributo de Tipo Contraseña
    $("#clave").prop("type", "text"); //Agregamos el atributo de Tipo Texto(Para que se vea la Contraseña escribida)
    $("#labelChange").text('| Ocultar contraseña');
  }else{ //En caso contrario
    conteo = 0; //La cambiamos a 0
    $('#clave').removeAttr("type", "text"); //Removemos el atributo de Tipo Texto
    $("#clave").prop("type", "password"); //Agregamos el atributo de Tipo Contraseña
    $("#labelChange").text('| Mostrar contraseña');
  } //Cierre del Else
}); //Cierre de la funcion Click
function limpiarGet(){
  var miUrl = location.href.split("?")[0];
  window.history.pushState('object', document.title, miUrl);
}
jQuery(document).ready(function ($) {
  setTimeout('ocultarMsg()',10000);
});
/*Función ocultar mensaje*/
function ocultarMsg(){
  $(".mensajeLogin").hide();
  $(".mensajeReset").hide();
}
