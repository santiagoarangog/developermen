// Inician funciones para los mensajes
function showDivError(){
  $("#divError").fadeIn(500);
}
function showDivWarning(){
  $("#divWarning").fadeIn(500);
}
function showSucessMessage(){
  $("#divSuccess").fadeIn(500);
}
function showSucessMessageCorreo(){
  $("#divSuccessCorreo").fadeIn(500);
}
function hideDivError(){
  $("#divError").fadeOut(500);
}
function hideDivWarning(){
  $("#divWarning").fadeOut(500);
}
function hideSucessMessage(){
  $("#divSuccess").fadeOut(500);
}
// Finalizan las funciones para los mensajes
/*Funciones propias de los campos de fecha del modulo*/
$( function() {
  $( ".fechaIni" ).datepicker();
  $( "#fechaIni" ).datepicker();
  $( ".fechaFin" ).datepicker();
  $( "#fechaFin" ).datepicker();
} );
$(function(){
  $("#fechaIni").on( "change", function() {
    $("#fechaFin").datepicker( "option", "minDate", $("#fechaIni").val());
  });
  $("#fechaFin").on( "change", function() {
    $("#fechaIni").datepicker( "option", "maxDate", $("#fechaFin").val());
  });
})

//Funcion para limpiar los valores que llegan por get despues de que termine de cargar el body
function limpiarGet(){
  var miUrl = location.href.split("?")[0];
  window.history.pushState('object', document.title, miUrl);
}

$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
});

/*Funcion que valida que se ingresen solo números en los campos requeridos de esta validacion*/
function soloNumerosSinDecimal(e){
  tecla = (document.all) ? e.keyCode : e.which;

  //Tecla de retroceso para borrar, siempre la permite
  if (tecla==8){
    return true;
  }

  // Patron de entrada, en este caso solo acepta numeros
  patron =/[0-9]/;
  tecla_final = String.fromCharCode(tecla);
  return patron.test(tecla_final);
}
