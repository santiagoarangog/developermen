/*!
@Scripts Js Página Web (Developer Men)
@Module Scripts en ajax
@version 1.0.
@description Scripts para realizar las funciones del formulario de contactanos.
@Autor Santiago Arango Gutierrez
@Año 2019.
@Modificacion _
@Año modificacion _
*/
/*Inicia funcion para enviar la informacion de contacto*/
$(document).ready( function() {
  $('#botonEnviarPage').attr('readOnly',true);
  $("#botonEnviarPage").click( function() {
    if(validaContactanos()){
      $('#botonEnviarPage').attr('disabled',true);
      $('#botonEnviarPage').html('Enviando...  <i class="fas fa-spinner fa-spin"></i>');
      $.post("assets/functions/ajaxFunctions.php",$("#pageContactanos").serialize(),function(res){
        if(res == "error"){
          notReadOnlyForm();
          $('#botonEnviarPage').text('Enviar');
          $('#usuarioError').fadeIn().attr( "data-aos", "fade-in-left" ).attr( "data-aos-delay", "200" );
        } else {
          readOnlyForm();
          $('#botonEnviarPage').html('Enviado  <i class="fas fa-shipping-fast"></i>');
          $('#usuarioSuccessPage').fadeIn().attr( "data-aos", "fade-in-left" ).attr( "data-aos-delay", "200" );
          $('#usuarioErrorPage').fadeOut().attr( "data-aos", "fade-out-left" );
          $('#showErrorPage').fadeOut();
        }
      });
    }
  });
});
/*Funcion que valida que ninguno de los campos se vayan vacios*/
function validaContactanos(){
  var reg = /^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i;
  // var reg = /^[A-Z0-9._%+-]+@([A-Z0-9-]+.)+[A-Z]{2,4}$/i;
  var email = $('#correoPage').val();
  if($('#nombrePage').val() == ''){
    // swal("¡Error campo Nombre completo vacio!",
    // "Debes indicar tu nombre completo, este campo es obligatorio y no puede ir vacio",
    // "error");
    $("#nombrePage").focus();
    $('#correoPage').attr('required',true);
    $('#showErrorPage').fadeIn().attr( "data-aos", "fade-in-left" ).attr( "data-aos-delay", "200" );;
    $('#iconoPage').addClass('fas fa-user-times');
    $('#mensajePage').html('El campo nombre es requerido');
    return false;
  }
  if(email.trim()==''){
    $("#correoPage").focus();
    $('#correoPage').attr('required',true);
    $('#showErrorPage').fadeIn().attr( "data-aos", "fade-in-left" ).attr( "data-aos-delay", "200" );;
    $('#iconoPage').removeClass().addClass('fas fa-envelope');
    $('#mensajePage').html('El campo correo es requerido');
    return false;
  }else if(email.trim()!=''&&!reg.test(email)){
    $('#correoPage').focus();
    $('#correoPage').attr('required',true);
    $('#showErrorPage').fadeIn().attr( "data-aos", "fade-in-left" ).attr( "data-aos-delay", "200" );;
    $('#iconoPage').removeClass().addClass('fas fa-exclamation-circle');
    $('#mensajePage').html('Debes indicar una direccion de correo electrónico correcta; Ejemplo: micorreo@gmail.com');
    return false;
  }
  if($('#productoPage').val() == ''){
    $("#productoPage").focus();
    $('#correo').attr('required',true);
    $('#showErrorPage').fadeIn().attr( "data-aos", "fade-in-left" ).attr( "data-aos-delay", "200" );;
    $('#iconoPage').removeClass().addClass('fas fa-award');
    $('#mensajePage').html('Debe seleccionar un producto');
    return false;
  }
  if($('#servicioPage').val() == ''){
    $("#servicioPage").focus();
    $('#servicioPage').attr('required',true);
    $('#showErrorPage').fadeIn().attr( "data-aos", "fade-in-left" ).attr( "data-aos-delay", "200" );;
    $('#iconoPage').removeClass().addClass('fas fa-award');
    $('#mensajePage').html('Debe seleccionar un servicio');
    return false;
  }
  if($('#descripcionPage').val() == ''){
    $("#descripcionPage").focus();
    $('#descripcionPage').attr('required',true);
    $('#showErrorPage').fadeIn().attr( "data-aos", "fade-in-left" ).attr( "data-aos-delay", "200" );;
    $('#iconoPage').removeClass().addClass('far fa-comments');
    $('#mensajePage').html('Cuentanos sobre tu proyecto o ídea');
    return false;
  }
  if(!$("#politicaPage").is(":checked")){
    $('#showErrorPage').fadeIn().attr( "data-aos", "fade-in-left" ).attr( "data-aos-delay", "200" );;
    $('#iconoPage').removeClass().addClass('fas fa-lock');
    $('#mensajePage').html('Debes aceptar la politica de protección de datos');
    $("#politicaPage").focus();
    return false;
  }
  return true;
}
/*Funcion que añade la propiedad inactivo a todos los campos del formulario de contactanos*/
function readOnlyForm(){
  $('#nombrePage').attr('readOnly',true);
  $('#correoPage').attr('readOnly',true);
  $('#productoPage').attr('disabled',true);
  $('#servicioPage').attr('disabled',true);
  $("#descripcionPage").attr('readOnly',true);
  $("#botonenviar").attr('readOnly',true);
  $('#botonenviar').attr('disabled',true);
}
function notReadOnlyForm(){
  $('#nombrePage').attr('readOnly',false);
  $('#correoPage').attr('readOnly',false);
  $('#productoPage').attr('disabled',false);
  $('#servicioPage').attr('disabled',false);
  $("#descripcionPage").attr('readOnly',false);
  $("#botonenviar").attr('readOnly',false);
  $('#botonenviar').attr('disabled',false);
}
