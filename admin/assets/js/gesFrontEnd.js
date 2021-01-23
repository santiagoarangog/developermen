/*Funcion para evitar que den doble Click*/
var statSend = false;
function checkSubmit() {
  if (!statSend) {
    statSend = true;
    return true;
  } else {
    swal({
      title: "La informacion se esta enviando",
      text: "",
      timer: 5000,
      type: "warning",
      showConfirmButton: false
    });
    return false;
  }
}
/*Inicia funcion para enviar la informacion de contacto*/
$(document).ready( function() {   // Esta parte del código se ejecutará automáticamente cuando la página está lista.
  $('#botonenviarFacturacion').attr('readOnly',true);
  $("#botonenviarFacturacion").click( function() {     // Con esto establecemos la acción por defecto de nuestro botón de enviar.
    if(validaFormFacturacion()){// Primero validará el formulario.
      $('#botonenviarFacturacion').attr('disabled',true);
      // $('#botonenviar').html('<div><img src="assets/img/gif/cargando.gif"/></div>');
      $('#botonenviarFacturacion').text('Enviando...');
      $.post("functions/functionsFrontEnd.php",$("#formFacturacion").serialize(),function(res){
        $("#formulario").fadeOut("slow");   // Hacemos desaparecer el div "formulario" con un efecto fadeOut lento.
        if(res == 1){
          $("#fracaso").delay(500).fadeIn("slow");    // Si no, lo mismo, pero haremos aparecer el div "fracaso"
        } else {
          readOnlyFormFacturacion();
          $("#exitoCorreo").delay(500).fadeIn("slow");      // Si hemos tenido éxito, hacemos aparecer el div "exito" con un efecto fadeIn lento tras un delay de 0,5 segundos.
          $("#exito").delay(500).fadeIn("slow");      // Si hemos tenido exito, hacemos aparecer el div "exito" con un efecto fadeIn lento tras un delay de 0,5 segundos.
          swal({
            title: "La información se envio correctamente",
            text: "El modal de tu gestion se cerrara en 5 segundos.Revisa la bandeja del correo proporcionado para conocer mas información",
            timer: 5000,
            type: "success",
            showConfirmButton: false
          });
          $('#botonenviarFacturacion').text('Enviado');
          setTimeout('$("#modalMail").modal("hide")',5000);
          setTimeout(function(){location.href='frontEnd'},850);
        }
      });
    }
  });
});
/*Funcion que valida que ninguno de los campos se vayan vacios*/
function validaFormFacturacion(){
  var reg = /^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i;
  // var reg = /^[A-Z0-9._%+-]+@([A-Z0-9-]+.)+[A-Z]{2,4}$/i;
  var email = $('#mailFacturacion').val();
  // Nombre
  if($('#nombreFacturacion').val() == ''){
    swal("¡Error campo Nombre vacio!",
    "Debes indicar el nombre del destinatario, este campo es obligatorio y no puede ir vacio",
    "error");
    $("#nombreFacturacion").focus();
    return false;
  }
  /*Email*/
  if(email.trim() == '' ){
    swal("¡Error campo Correo electrónico vacio!",
    "Debes indicar el correo electrónico del destinatario, este campo es obligatorio y no puede ir vacio",
    "error");
    $('#mailFacturacion').focus();
    return false;
  }else if(email.trim() != '' && !reg.test(email)){
    swal("¡Error formato de correo no valido!",
    "Debes indicar una direccion de correo electrónico correcta; Ejemplo: micorreo@gmail.com",
    "error");
    $('#mailFacturacion').focus();
    return false;
  }
  /*Producto*/
  if($('#productoFacturacion').val() == ''){
    swal("¡Error campo producto vacio!",
    "Debes indicar el nombre del producto, este campo es obligatorio y no puede ir vacio",
    "error");
    $("#productoFacturacion").focus();
    return false;
  }
  /*Costo Producto*/
  if($('#costoProducto').val() == ''){
    swal("¡Error campo costo producto vacio!",
    "Debes indicar el costo del producto, este campo es obligatorio y no puede ir vacio",
    "error");
    $("#costoProducto").focus();
    return false;
  }
  /*Tipo de dominio*/
  if($('#tipDominio').val() == ''){
    swal("¡Error campo tipo dominio vacio!",
    "Debes indicar el tipo de dominio, este campo es obligatorio y no puede ir vacio",
    "error");
    $("#tipDominio").focus();
    return false;
  }
  /*Valor de dominio*/
  if($('#valDominio').val() == ''){
    swal("¡Error campo valor del dominio vacio!",
    "Debes indicar el valor del dominio, este campo es obligatorio y no puede ir vacio",
    "error");
    $("#valDominio").focus();
    return false;
  }
  /*Costo de gestión*/
  if($('#costoGesComDominio').val() == ''){
    swal("¡Error campo costo gestion dominio vacio!",
    "Debes indicar el valor del dominio, este campo es obligatorio y no puede ir vacio",
    "error");
    $("#costoGesComDominio").focus();
    return false;
  }
  /*Costo de desarrollo*/
  if($('#costoDesarrollo').val() == ''){
    swal("¡Error campo costo desarrollo vacio!",
    "Debes indicar el valor del costo de desarrollo, este campo es obligatorio y no puede ir vacio",
    "error");
    $("#costoDesarrollo").focus();
    return false;
  }
  /*Método de pago*/
  if($('#metPago').val() == ''){
    swal("¡Error campo metodo de pago vacio!",
    "Debes indicar el método de pago, este campo es obligatorio y no puede ir vacio",
    "error");
    $("#metPago").focus();
    return false;
  }
  /*Pago realizado*/
  if($('#pagoRealizado').val() == ''){
    swal("¡Error campo pago realizado vacio!",
    "Debes indicar el pago realizado por el usuario, este campo es obligatorio y no puede ir vacio",
    "error");
    $("#pagoRealizado").focus();
    return false;
  }
  /*Usuario al que se le genera el producto*/
  if($('#nomUsuCompañia').val() == ''){
    swal("¡Error campo nombre usuario o compañia vacio!",
    "Debes indicar el nombre del usuario o la compañia, este campo es obligatorio y no puede ir vacio",
    "error");
    $("#nomUsuCompañia").focus();
    return false;
  }
  /*Morosos*/
  if($('#morosos').val() == ''){
    swal("¡Error campo morosos vacio!",
    "Debes indicar si es una cuenta morosa, este campo es obligatorio y no puede ir vacio",
    "error");
    $("#morosos").focus();
    return false;
  }
  return true; // Si todo está correcto
}
/*Funcion que añade la propiedad inactivo a todos los campos del formulario de contactanos*/
function readOnlyFormFacturacion(){
  $('#botonenviarFacturacion').attr('readOnly',true);
  $('#nombreFacturacion').attr('readOnly',true);
  $('#mailFacturacion').attr('readOnly',true);
  $('#productoFacturacion').attr('readOnly',true);
  $('#comentarioContactanos').attr('readOnly',true);
  $('#costoProducto').attr('readOnly',true);
  $('#tipDominio').attr('readOnly',true);
  $('#valDominio').attr('readOnly',true);
  $('#costoGesComDominio').attr('readOnly',true);
  $('#costoDesarrollo').attr('readOnly',true);
  $('#metPago').attr('readOnly',true);
  $('#pagoRealizado').attr('readOnly',true);
  $('#nomUsuCompañia').attr('readOnly',true);
  $('#morosos').attr('readOnly',true);
}

/*Funcion que valida que ninguno de los campos se vayan vacios*/
function validaFormContactanos(){
  var reg = /^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i;
  // var reg = /^[A-Z0-9._%+-]+@([A-Z0-9-]+.)+[A-Z]{2,4}$/i;
  var email = $('#mailContactanos').val();
  // Campos de texto
  if($('#nombreContactanos').val() == ''){
    swal("¡Error campo Nombre vacio!",
    "Debes indicar el nombre del destinatario, este campo es obligatorio y no puede ir vacio",
    "error");
    $("#nombreContactanos").focus();
    return false;
    return false;
  }
  if(email.trim() == '' ){
    swal("¡Error campo Correo electrónico vacio!",
    "Debes indicar el correo electrónico del destinatario, este campo es obligatorio y no puede ir vacio",
    "error");
    $('#mailContactanos').focus();
    return false;
  }else if(email.trim() != '' && !reg.test(email)){
    swal("¡Error formato de correo no valido!",
    "Debes indicar una direccion de correo electrónico correcta; Ejemplo: micorreo@gmail.com",
    "error");
    $('#mailContactanos').focus();
    return false;
  }
  if($("#comentarioContactanos").val() == ''){
    swal("¡Danos tu opinión!",
    "Debes enviar ",
    "error");
    $("#comentarioContactanos").focus();
    return false;
  }
  return true; // Si todo está correcto
}
/*Funcion que añade la propiedad inactivo a todos los campos del formulario de contactanos*/
function readOnlyForm(){
  $('#botonenviar').attr('readOnly',true);
  $('#nombreContactanos').attr('readOnly',true);
  $('#mailContactanos').attr('readOnly',true);
  $('#asunto').attr('readOnly',true);
  $('#comentarioContactanos').attr('readOnly',true);
  $('#radioContactanos').attr('readOnly',true);
}

/*Inician funciones para enviar la informacion de la respuesta al contacto*/
$(document).ready( function() {   // Esta parte del código se ejecutará automáticamente cuando la página está lista.
  $('#botonenviar').attr('readOnly',true);
  $("#botonenviar").click( function() {     // Con esto establecemos la acción por defecto de nuestro botón de enviar.
    if(validaFormRespContactanos()){// Primero validará el formulario.
      $('#botonenviar').attr('disabled',true);
      // $('#botonenviar').html('<div><img src="assets/img/gif/cargando.gif"/></div>');
      $('#botonenviar').text('Enviando...');
      $.post("functions/functionsFrontEnd.php",$("#formRespuestaContacto").serialize(),function(res){
        $("#formulario").fadeOut("slow");   // Hacemos desaparecer el div "formulario" con un efecto fadeOut lento.
        if(res == 1){
          $("#fracaso").delay(500).fadeIn("slow");    // Si no, lo mismo, pero haremos aparecer el div "fracaso"
        } else {
          readOnlyForm();
          $("#exitoCorreo").delay(500).fadeIn("slow");      // Si hemos tenido éxito, hacemos aparecer el div "exito" con un efecto fadeIn lento tras un delay de 0,5 segundos.
          $("#exito").delay(500).fadeIn("slow");      // Si hemos tenido exito, hacemos aparecer el div "exito" con un efecto fadeIn lento tras un delay de 0,5 segundos.
          swal({
            title: "La información se envio correctamente",
            text: "El modal de tu gestion se cerrara en 5 segundos.Revisa la bandeja del correo proporcionado para conocer mas información",
            timer: 5000,
            type: "success",
            showConfirmButton: false
          });
          $('#botonenviar').text('Enviado');
          setTimeout('$("#modalMailContactanos").modal("hide")',5000);
          setTimeout(function(){location.href='frontEnd'},850);
        }
      });
    }
  });
});
/*Funcion que valida que ninguno de los campos se vayan vacios*/
function validaFormRespContactanos(){
  var reg = /^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i;
  // var reg = /^[A-Z0-9._%+-]+@([A-Z0-9-]+.)+[A-Z]{2,4}$/i;
  var email = $('#mailRespContactanos').val();
  // Campos de texto
  if($('#nombreRespContactanos').val() == ''){
    swal("¡Error campo Nombre vacio!",
    "Debes indicar el nombre del destinatario, este campo es obligatorio y no puede ir vacio",
    "error");
    $("#nombreRespContactanos").focus();
    return false;
    return false;
  }
  if(email.trim() == '' ){
    swal("¡Error campo Correo electrónico vacio!",
    "Debes indicar el correo electrónico del destinatario, este campo es obligatorio y no puede ir vacio",
    "error");
    $('#mailRespContactanos').focus();
    return false;
  }else if(email.trim() != '' && !reg.test(email)){
    swal("¡Error formato de correo no valido!",
    "Debes indicar una direccion de correo electrónico correcta; Ejemplo: micorreo@gmail.com",
    "error");
    $('#mailRespContactanos').focus();
    return false;
  }
  if($("#comentarioRespContactanos").val() == ''){
    swal("¡Danos tu opinión!",
    "Debes enviar ",
    "error");
    $("#comentarioRespContactanos").focus();
    return false;
  }
  return true; // Si todo está correcto
}
/*Funcion que añade la propiedad inactivo a todos los campos del formulario de contactanos*/
function readOnlyForm(){
  $('#botonenviar').attr('readOnly',true);
  $('#nombreContactanos').attr('readOnly',true);
  $('#mailContactanos').attr('readOnly',true);
  $('#asunto').attr('readOnly',true);
  $('#comentarioContactanos').attr('readOnly',true);
  $('#radioContactanos').attr('readOnly',true);
}
