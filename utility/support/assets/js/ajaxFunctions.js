/*!
@Scripts Js Developer Men - Support
@Module Scripts en ajax
@version 1.0.
@description Scripts para realizar las funciones de Ajax.
@Autor Santiago Arango Gutierrez - CEO & Development Developer Men
@Año 2019.
@Modificacion _
@Año modificacion _
*/
/*Inicia funcion para enviar la informacion de contacto*/
$(document).ready( function() {
  $('#botonenviar').attr('readOnly',true);
  $("#botonenviar").click( function() {
    if(validaFormWeBasica()){
      $('#botonenviar').attr('disabled',true);
      $('#botonenviar').html('Enviando...  <i class="fas fa-spinner fa-spin"></i>');
      $.post("assets/functions/ajaxFunctions.php",$("#loginform").serialize(),function(res){
        if(res == 1){
          readOnlyForm();
          $('#botonenviar').text('Bienvenido');
          $('#usuarioSuccess').fadeIn().attr( "data-aos", "fade-in-left" ).attr( "data-aos-delay", "200" );
          $('#usuarioError').fadeOut().attr( "data-aos", "fade-out-left" );
          setTimeout('window.location.href = \'index?notify=active\'',1000);
        } else {
          notReadOnlyForm();
          $('#botonenviar').text('Enviar');
          $('#usuarioError').fadeIn().attr( "data-aos", "fade-in-left" ).attr( "data-aos-delay", "200" );
          $('#botonenviar').attr('readOnly',false);
          $("#clave").val('');
        }
      });
    }
  });
});
function vaLogin(){
  var reg = /^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i;
  var email = $('#username').val();
  var password = $("#password").val();
  if(email.trim() == '' ){
    swal("¡Error campo Correo electrónico vacio!",
    "Debes indicar tu correo electrónico, este campo es obligatorio y no puede ir vacio",
    "error");
    return false;
    $('#username').focus();
  }else if(email.trim() != '' && !reg.test(email)){
    swal("¡Error formato de correo no valido!",
    "Debes indicar una direccion de correo electrónico correcta; Ejemplo: micorreo@gmail.com",
    "error");
    $('#username').focus();
    return false;
  }
  if($("#password").val() == ''){
    swal("¡Upss!",
    "Debes indicar tu contraseña para poder acceder",
    "error");
    $('#password').prop('required',true);
    $("#password").focus();
    return false;
  }
  return true; // Si todo está correcto
}
/*Funcion que valida que ninguno de los campos se vayan vacios*/
function validaFormWeBasica(){
  var reg = /^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i;
  var email = $('#usuario').val();
  if(email.trim() == '' ){
    swal("¡Error campo Correo electrónico vacio!",
    "Debes indicar tu correo electrónico, este campo es obligatorio y no puede ir vacio",
    "error");
    $('#usuario').focus();
    $('#usuario').attr('required',true);
    return false;
  }else if(email.trim() != '' && !reg.test(email)){
    swal("¡Error formato de correo no valido!",
    "Debes indicar una direccion de correo electrónico correcta; Ejemplo: micorreo@gmail.com",
    "error");
    $('#usuario').focus();
    $('#usuario').attr('required',true);
    return false;
  }
  if($("#clave").val() == ''){
    swal("¡Error campo de contraseña vacio!",
    "Debes indicar tu contraseña, este campo es obligatorio y no puede ir vacio",
    "error");
    $('#clave').attr('required',true);
    $("#clave").focus();
    return false;
  }
  return true;
}
/*Funcion que aÃ±ade la propiedad inactivo a todos los campos del formulario de contactanos*/
function readOnlyForm(){
  $('#usuario').attr('readOnly',true);
  $('#clave').attr('readOnly',true);
  $("#botonenviar").attr('readOnly',true);
  $('#botonenviar').attr('disabled',true);
}
function notReadOnlyForm(){
  $('#usuario').attr('readOnly',false);
  $('#clave').attr('readOnly',false);
  $("#botonenviar").attr('readOnly',false);
  $('#botonenviar').attr('disabled',false);
}

/*-----------------------------------------------Función para enviar datos de recuperación-----------------------------------*/
/*Inicia funcion para enviar la informacion de contacto*/
$(document).ready( function() {
  $('#buttonReset').attr('disabled',true);
  $("#emailRecover").change( function() {
    if(valReset()){
      $.post("assets/functions/ajaxFunctions.php",$("#form-reset").serialize(),function(res){
        if (res == 1) {
          notReadOnlyFormReset();
          $("#help").html('<i class="fas fa-check text-success"></i>');
          // setTimeout('window.location.href = \'paper\'',1000);
        }else if (res == 0) {
          readOnlyFormReset();
          $("#help").html('<i class="fas fa-times text-danger"></i>');
        }
      });
    }
  });
});
function valReset(){
  var reg = /^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i;
  var email = $('#emailRecover').val();
  if(email.trim() == '' ){
    $("#help").html('<i class="fas fa-times text-danger"></i>');
    swal("¡Error campo Correo electrónico vacio!",
    "Debes indicar tu correo electrónico, este campo es obligatorio y no puede ir vacio",
    "error");
    return false;
    $('#emailRecover').focus();
  }else if(email.trim() != '' && !reg.test(email)){
    $("#help").html('<i class="fas fa-times text-danger"></i>');
    swal("¡Error formato de correo no valido!",
    "Debes indicar una direccion de correo electrónico correcta; Ejemplo: micorreo@gmail.com",
    "error");
    $('#emailRecover').focus();
    return false;
  }
  return true; // Si todo está correcto
}
/*Funcion que añade la propiedad inactivo a todos los campos del formulario de contactanos*/
function readOnlyFormReset(){
  $("#buttonReset").attr('readOnly',true);
  $('#buttonReset').attr('disabled',true);
}
function notReadOnlyFormReset(){
  $("#buttonReset").attr('readOnly',false);
  $('#buttonReset').attr('disabled',false);
}
