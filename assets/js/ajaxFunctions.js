/*!
@Scripts Js Página Web (Developer Men)
@Module Scripts en ajax
@version 1.0.
@description Scripts para realizar las funciones de Ajax.
@Autor Santiago Arango Gutierrez
@Año 2019.
@Modificacion _
@Año modificacion _
*/
/*Inicia funcion para enviar la informacion de contacto Modal*/
$(document).ready( function() {
  $('#botonenviar').attr('readOnly',true);
  $("#botonenviar").click( function() {
    if(validaContactanos()){
      $('#botonenviar').attr('disabled',true);
      $('#botonenviar').html('Enviando...  <i class="fas fa-spinner fa-spin"></i>');
      $.post("assets/functions/ajaxFunctions.php",$("#contactanos").serialize(),function(res){
        if(res == 'false'){
          notReadOnlyForm();
          $('#botonenviar').text('Enviar');
          $('#usuarioError').fadeIn().attr( "data-aos", "fade-in-left" ).attr( "data-aos-delay", "200" );
        } else {
          readOnlyForm();
          $('#botonenviar').html('Enviado  <i class="fas fa-shipping-fast"></i>');
          $('#usuarioSuccess').fadeIn().attr( "data-aos", "fade-in-left" ).attr( "data-aos-delay", "200" );
          $('#usuarioError').fadeOut().attr( "data-aos", "fade-out-left" );
          $('#showError').fadeOut();
          /**Params: id, path, speed, autoplay*/
          $('#body-contact').css("position", "fixed").css("top", "0").css("z-index", "2").css("height", "100%").css("width","100%");
          lottieImage('body-contact', 'https://assets8.lottiefiles.com/packages/lf20_WdkR06.json', '', true);
        }
      });
    }
  });
});
/*Funcion que valida que ninguno de los campos se vayan vacios*/
function validaContactanos(){
  var reg = /^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i;
  // var reg = /^[A-Z0-9._%+-]+@([A-Z0-9-]+.)+[A-Z]{2,4}$/i;
  var email = $('#correo').val();
  if($('#nombre').val() == ''){
    // swal("¡Error campo Nombre completo vacio!",
    // "Debes indicar tu nombre completo, este campo es obligatorio y no puede ir vacio",
    // "error");
    $("#nombre").focus();
    $('#nombre').attr('required',true);
    $('#showError').fadeIn().attr( "data-aos", "fade-in-left" ).attr( "data-aos-delay", "200" );;
    $('#icono').addClass('fas fa-user-times');
    $('#mensaje').html('El campo nombre es requerido');
    fadeShowError();
    return false;
  }
  if(email.trim()==''){
    $("#correo").focus();
    $('#correo').attr('required',true);
    $('#showError').fadeIn().attr( "data-aos", "fade-in-left" ).attr( "data-aos-delay", "200" );;
    $('#icono').removeClass().addClass('fas fa-envelope');
    $('#mensaje').html('El campo correo es requerido');
    fadeShowError();
    return false;
  }else if(email.trim()!=''&&!reg.test(email)){
    $('#correo').focus();
    $('#correo').attr('required',true);
    $('#showError').fadeIn().attr( "data-aos", "fade-in-left" ).attr( "data-aos-delay", "200" );;
    $('#icono').removeClass().addClass('fas fa-exclamation-circle');
    $('#mensaje').html('Debes indicar una direccion de correo electrónico correcta; Ejemplo: micorreo@gmail.com');
    fadeShowError();
    return false;
  }
  if($('#numCelular').val() == ''){
    $("#numCelular").focus();
    $('#numCelular').attr('required',true);
    $('#showError').fadeIn().attr( "data-aos", "fade-in-left" ).attr( "data-aos-delay", "200" );;
    $('#icono').removeClass().addClass('fas fa-mobile-alt');
    $('#mensaje').html('Debes indicar un número de contacto celular');
    fadeShowError();
    return false;
  }
  if($('#producto').val() == ''){
    $("#producto").focus();
    $('#correo').attr('required',true);
    $('#showError').fadeIn().attr( "data-aos", "fade-in-left" ).attr( "data-aos-delay", "200" );;
    $('#icono').removeClass().addClass('fas fa-award');
    $('#mensaje').html('Debe seleccionar un producto');
    fadeShowError();
    return false;
  }
  if($('#servicio').val() == ''){
    $('#showError').fadeIn().attr( "data-aos", "fade-in-left" ).attr( "data-aos-delay", "200" );;
    $('#icono').removeClass().addClass('fas fa-award');
    $('#mensaje').html('Debe seleccionar un servicio');
    $("#servicio").focus();
    $('#servicio').attr('required',true);
    fadeShowError();
    return false;
  }
  if($('#descripcion').val() == ''){
    $('#showError').fadeIn().attr( "data-aos", "fade-in-left" ).attr( "data-aos-delay", "200" );;
    $('#icono').removeClass().addClass('far fa-comments');
    $('#mensaje').html('Cuentanos sobre tu proyecto o ídea');
    $("#descripcion").focus();
    $('#descripcion').attr('required',true);
    fadeShowError();
    return false;
  }
  if(!$("#politica").is(":checked")){
    $('#showError').fadeIn().attr( "data-aos", "fade-in-left" ).attr( "data-aos-delay", "200" );;
    $('#icono').removeClass().addClass('fas fa-lock');
    $('#mensaje').html('Debes aceptar la politica de protección de datos');
    $("#politica").focus();
    fadeShowError();
    return false;
  }
  return true;
}
/*Funcion que añade la propiedad inactivo a todos los campos del formulario de contactanos*/
function readOnlyForm(){
  $('#nombre').attr('readOnly',true);
  $('#correo').attr('readOnly',true);
  $('#numCelular').attr('readOnly',true);
  $('#producto').attr('disabled',true);
  $('#servicio').attr('disabled',true);
  $("#descripcion").attr('readOnly',true);
  $("#botonenviar").attr('readOnly',true);
  $('#botonenviar').attr('disabled',true);
}
function notReadOnlyForm(){
  $('#nombre').attr('readOnly',false);
  $('#correo').attr('readOnly',false);
  $('#numCelular').attr('readOnly',false);
  $('#producto').attr('disabled',false);
  $('#servicio').attr('disabled',false);
  $("#descripcion").attr('readOnly',false);
  $("#botonenviar").attr('readOnly',false);
  $('#botonenviar').attr('disabled',false);
}
function fadeShowError(){
  $('#showError').fadeOut('8000',slow).attr( "data-aos", "hide" ).attr( "data-aos-delay", "200" );
}

// ----------------------------------------------------------------------------------------------------------------------------------------//
/*Inicia función para enviar la solicitud de asesoria*/
$(document).ready( function() {
  $('#enviarAsesoria').attr('readOnly',true);
  $("#enviarAsesoria").click( function() {
    if(validAsesoria()){
      $('#enviarAsesoria').attr('disabled',true);
      $('#enviarAsesoria').html('Enviando...  <i class="fas fa-spinner fa-spin"></i>');
      $.post("assets/functions/ajaxFunctions.php",$("#asesoria").serialize(),function(res){
        if(res == 'false'){
          notReadOnlyFormAsesoria();
          $('#enviarAsesoria').text('Enviar');
          $('#usuarioErrorAsesoria').fadeIn().attr( "data-aos", "fade-in-left" ).attr( "data-aos-delay", "200" );
        } else {
          readOnlyFormAsesoria();
          $('#enviarAsesoria').html('Enviado  <i class="far fa-check-circle text-success"></i>');
          $('#usuarioSuccessAsesoria').fadeIn().attr( "data-aos", "fade-in-left" ).attr( "data-aos-delay", "200" );
          $('#usuarioErrorAsesoria').fadeOut().attr( "data-aos", "fade-out-left" );
          $('#showErrorAsesoria').fadeOut();
        }
      });
    }
  });
});
/*Funcion que valida que ninguno de los campos se vayan vacios*/
function validAsesoria(){
  var reg = /^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i;
  // var reg = /^[A-Z0-9._%+-]+@([A-Z0-9-]+.)+[A-Z]{2,4}$/i;
  var email = $('#correoAsesoria').val();
  if($('#nombreAsesoria').val() == ''){
    $("#nombreAsesoria").focus();
    $('#nombreAsesoria').attr('required',true);
    $('#showErrorAsesoria').fadeIn().attr( "data-aos", "fade-in-left" ).attr( "data-aos-delay", "200" );;
    $('#iconoAsesoria').addClass('fas fa-user-times');
    $('#mensajeAsesoria').html('El campo nombre es requerido');
    return false;
  }
  if(email.trim()==''){
    $("#correoAsesoria").focus();
    $('#correoAsesoria').attr('required',true);
    $('#showErrorAsesoria').fadeIn().attr( "data-aos", "fade-in-left" ).attr( "data-aos-delay", "200" );;
    $('#iconoAsesoria').removeClass().addClass('fas fa-envelope');
    $('#mensajeAsesoria').html('El campo correo es requerido');
    return false;
  }else if(email.trim()!=''&&!reg.test(email)){
    $('#correoAsesoria').focus();
    $('#correoAsesoria').attr('required',true);
    $('#showErroraAsesoria').fadeIn().attr( "data-aos", "fade-in-left" ).attr( "data-aos-delay", "200" );;
    $('#iconoaAsesoria').removeClass().addClass('fas fa-exclamation-circle');
    $('#mensajeAsesoria').html('Debes indicar una direccion de correo electrónico correcta; Ejemplo: micorreo@gmail.com');
    return false;
  }
  if($('#telefonoAsesoria').val() == ''){
    $("#telefonoAsesoria").focus();
    $('#telefonoAsesoria').attr('required',true);
    $('#showErrorAsesoria').fadeIn().attr( "data-aos", "fade-in-left" ).attr( "data-aos-delay", "200" );;
    $('#iconoAsesoria').removeClass().addClass('fas fa-mobile-alt');
    $('#mensajeAsesoria').html('Debe ingresar un número telefónico');
    return false;
  }
  if($('#descripcionAsesoria').val() == ''){
    $("#descripcionAsesoria").focus();
    $('#descripcionAsesoria').attr('required',true);
    $('#showErrorAsesoria').fadeIn().attr( "data-aos", "fade-in-left" ).attr( "data-aos-delay", "200" );;
    $('#iconoAsesoria').removeClass().addClass('far fa-comments');
    $('#mensajeAsesoria').html('Cuentanos sobre tu proyecto o ídea');
    return false;
  }
  if(!$("#politicaAsesoria").is(":checked")){
    $('#mensajeAsesoria').html('Debes aceptar la politica de protección de datos');
    $("#politicaAsesoria").focus();
    $('#showErrorAsesoria').fadeIn().attr( "data-aos", "fade-in-left" ).attr( "data-aos-delay", "200" );;
    $('#iconoAsesoria').removeClass().addClass('fas fa-lock');
    return false;
  }
  return true;
}
/*Funcion que añade la propiedad inactivo a todos los campos del formulario de contactanos*/
function readOnlyFormAsesoria(){
  $('#nombreAsesoria').attr('readOnly',true);
  $('#correoAsesoria').attr('readOnly',true);
  $('#telefonoAsesoria').attr('disabled',true);
  $('#descripcionAsesoria').attr('disabled',true);
  $("#enviarAsesoria").attr('readOnly',true);
  $('#enviarAsesoria').attr('disabled',true);
}
function notReadOnlyFormAsesoria(){
  $('#nombreAsesoria').attr('readOnly',false);
  $('#correoAsesoria').attr('readOnly',false);
  $('#telefonoAsesoria').attr('disabled',false);
  $('#descripcionAsesoria').attr('disabled',false);
  $("#enviarAsesoria").attr('readOnly',false);
  $('#enviarAsesoria').attr('disabled',false);
}

/*Inicia funcion para enviar la informacion de contacto por Wpp*/
$(document).ready( function() {
  $('#enviar-wpp-site').attr('readOnly',true);
  $("#enviar-wpp-site").click( function() {
    if(validarWpp()){
      $('#enviar-wpp-site').attr('disabled',true);
      $('#enviar-wpp-site').html('Enviando...  <i class="fas fa-spinner fa-spin"></i>');
      $.post("assets/functions/ajaxFunctions.php",$("#form-wpp-site").serialize(),function(res){
        if(res != ''){
          var url = "https://api.whatsapp.com/send?phone=573113111538&text="+res;
          window.open(url);
          readOnlyFormWpp();
          $('#enviar-wpp-site').html('Enviado  <i class="fas fa-shipping-fast"></i>');
          $('#msgWpp').fadeIn().attr( "data-aos", "fade-in-left" ).attr( "data-aos-delay", "200" );
          $('#showErrorPage').fadeOut();
        } else {
          notReadOnlyFormWpp();
          $('#enviar-wpp-site').text('Enviar');
        }
      });
    }
  });
});
/*Funcion que valida que ninguno de los campos se vayan vacios*/
function validarWpp(){
  if($('#asuntoWpp').val() == ''){
    $("#asuntoWpp").focus();
    $('#asuntoWpp').attr('required',true);
    return false;
  }
  return true;
}
/*Funcion que añade la propiedad inactivo a todos los campos del formulario de contactanos*/
function readOnlyFormWpp(){
  $('#asuntoWpp').attr('readOnly',true);
  $('#enviarWpp').attr('disabled',true);
}
function notReadOnlyFormWpp(){
  $('#asuntoWpp').attr('readOnly',false);
  $('#enviarWpp').attr('disabled',false);
}
