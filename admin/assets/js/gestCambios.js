/*Inicia funcion para enviar la informacion de contacto*/
$(document).ready( function() {   // Esta parte del código se ejecutará automáticamente cuando la página está lista.
  $('#botonEnviarCambios').attr('readOnly',true);
  $("#botonEnviarCambios").click( function() {     // Con esto establecemos la acción por defecto de nuestro botón de enviar.
    if(validaFormCambios()){// Primero validará el formulario.
      $('#botonEnviarCambios').attr('disabled',true);
      // $('#botonenviar').html('<div><img src="assets/img/gif/cargando.gif"/></div>');
      $('#botonEnviarCambios').text('Enviando...');
      $.post("functions/correoCambios.php",$("#formCambios").serialize(),function(res){
        $("#formulario").fadeOut("slow");   // Hacemos desaparecer el div "formulario" con un efecto fadeOut lento.
        if(res == 1){
          $("#fracaso").delay(500).fadeIn("slow");    // Si no, lo mismo, pero haremos aparecer el div "fracaso"
        } else {
          readOnlyFormCambios();
          $("#exitoCorreo").delay(500).fadeIn("slow");      // Si hemos tenido éxito, hacemos aparecer el div "exito" con un efecto fadeIn lento tras un delay de 0,5 segundos.
          $("#exito").delay(500).fadeIn("slow");      // Si hemos tenido exito, hacemos aparecer el div "exito" con un efecto fadeIn lento tras un delay de 0,5 segundos.
          swal({
            title: "La información se envio correctamente",
            text: "El modal de tu gestion se cerrara en 5 segundos. Revisa la bandeja del correo proporcionado para conocer mas información",
            timer: 5000,
            type: "success",
            showConfirmButton: false
          });
          $('#botonEnviarCambios').text('Enviado');
          setTimeout('$("#modalCambios").modal("hide")',5000);
          setTimeout(function(){location.href='gestCambios'},900);
        }
      });
    }
  });
});
/*Funcion que valida que ninguno de los campos se vayan vacios*/
function validaFormCambios(){
  var reg = /^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i;
  // var reg = /^[A-Z0-9._%+-]+@([A-Z0-9-]+.)+[A-Z]{2,4}$/i;
  var email = $('#mailCambios').val();
  // Nombre
  if($('#nombreCambios').val() == ''){
    swal("¡Error campo Nombre vacio!",
    "Debes indicar el nombre del destinatario, este campo es obligatorio y no puede ir vacio",
    "error");
    $("#nombreCambios").focus();
    return false;
  }
  /*Email*/
  if(email.trim() == '' ){
    swal("¡Error campo Correo electrónico vacio!",
    "Debes indicar el correo electrónico del destinatario, este campo es obligatorio y no puede ir vacio",
    "error");
    $('#mailCambios').focus();
    return false;
  }else if(email.trim() != '' && !reg.test(email)){
    swal("¡Error formato de correo no valido!",
    "Debes indicar una direccion de correo electrónico correcta; Ejemplo: micorreo@gmail.com",
    "error");
    $('#mailCambios').focus();
    return false;
  }
  /*Tipo de dominio*/
  if($('#compania').val() == ''){
    swal("¡Error campo compañia!",
    "Debes seleccionar una compañia, este campo es obligatorio y no puede ir vacio",
    "error");
    $("#tipDominio").focus();
    return false;
  }
  /*Valor de dominio*/
  if($('#urlCambio').val() == ''){
    swal("¡Error campo URL del sitio web!",
    "Debes indicar la URL de la compañia, este campo es obligatorio y no puede ir vacio",
    "error");
    $("#urlCambio").focus();
    return false;
  }
  /*Costo de gestión*/
  if($('#cambioRealizado').val() == ''){
    swal("¡Error campo cambio realizado!",
    "Debes indicar el cambio realizado, este campo es obligatorio y no puede ir vacio",
    "error");
    $("#cambioRealizado").focus();
    return false;
  }
  return true; // Si todo está correcto
}
/*Funcion que añade la propiedad inactivo a todos los campos del formulario de contactanos*/
function readOnlyFormCambios(){
  $('#botonenviarFacturacion').attr('readOnly',true);
  $('#nombreCambios').attr('readOnly',true);
  $('#mailCambios').attr('readOnly',true);
  $('#compania').attr('readOnly',true);
  $('#urlCambio').attr('readOnly',true);
  $('#cambioRealizado').attr('readOnly',true);
}

/*----------------------------------------------------------------------------- Funciones mejoras -----------------------------------------------------------*/
/*Inicia funcion para enviar la informacion de contacto*/
$(document).ready( function() {   // Esta parte del código se ejecutará automáticamente cuando la página está lista.
  $('#botonEnviarMejoras').attr('readOnly',true);
  $("#botonEnviarMejoras").click( function() {     // Con esto establecemos la acción por defecto de nuestro botón de enviar.
    if(validaFormMejoras()){// Primero validará el formulario.
      $('#botonEnviarMejoras').attr('disabled',true);
      $('#botonEnviarMejoras').text('Enviando...');
      $.post("functions/correoMejora.php",$("#formMejora").serialize(),function(res){
        $("#formulario").fadeOut("slow");   // Hacemos desaparecer el div "formulario" con un efecto fadeOut lento.
        if(res == 1){
          $("#fracaso").delay(500).fadeIn("slow");    // Si no, lo mismo, pero haremos aparecer el div "fracaso"
        } else {
          readOnlyFormCambios();
          $("#exitoCorreo").delay(500).fadeIn("slow");      // Si hemos tenido éxito, hacemos aparecer el div "exito" con un efecto fadeIn lento tras un delay de 0,5 segundos.
          $("#exito").delay(500).fadeIn("slow");      // Si hemos tenido exito, hacemos aparecer el div "exito" con un efecto fadeIn lento tras un delay de 0,5 segundos.
          swal({
            title: "La información se envio correctamente",
            text: "El modal de tu gestion se cerrara en 5 segundos. Revisa la bandeja del correo proporcionado para conocer mas información",
            timer: 5000,
            type: "success",
            showConfirmButton: false
          });
          $('#botonEnviarMejoras').text('Enviado');
          setTimeout('$("#modalMejora").modal("hide")',5000);
          setTimeout(function(){location.href='gestCambios'},1000);
        }
      });
    }
  });
});
/*Funcion que valida que ninguno de los campos se vayan vacios*/
function validaFormMejoras(){
  var reg = /^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i;
  // var reg = /^[A-Z0-9._%+-]+@([A-Z0-9-]+.)+[A-Z]{2,4}$/i;
  var email = $('#mailMejoras').val();
  // Nombre
  if($('#nombreMejoras').val() == ''){
    swal("¡Error campo Nombre vacio!",
    "Debes indicar el nombre del destinatario, este campo es obligatorio y no puede ir vacio",
    "error");
    $("#nombreMejoras").focus();
    return false;
  }
  /*Email*/
  if(email.trim() == '' ){
    swal("¡Error campo Correo electrónico vacio!",
    "Debes indicar el correo electrónico del destinatario, este campo es obligatorio y no puede ir vacio",
    "error");
    $('#mailMejoras').focus();
    return false;
  }else if(email.trim() != '' && !reg.test(email)){
    swal("¡Error formato de correo no valido!",
    "Debes indicar una direccion de correo electrónico correcta; Ejemplo: micorreo@gmail.com",
    "error");
    $('#mailMejoras').focus();
    return false;
  }
  /*Tipo de dominio*/
  if($('#companiaMejora').val() == ''){
    swal("¡Error campo compañia!",
    "Debes seleccionar una compañia, este campo es obligatorio y no puede ir vacio",
    "error");
    $("#companiaMejora").focus();
    return false;
  }
  /*Valor de dominio*/
  if($('#urlMejoras').val() == ''){
    swal("¡Error campo URL del sitio web!",
    "Debes indicar la URL de la compañia, este campo es obligatorio y no puede ir vacio",
    "error");
    $("#urlMejoras").focus();
    return false;
  }
  /*Costo de gestión*/
  if($('#mejoraRealizada').val() == ''){
    swal("¡Error campo mejora realizada!",
    "Debes indicar el mejora realizada, este campo es obligatorio y no puede ir vacio",
    "error");
    $("#mejoraRealizada").focus();
    return false;
  }
  return true; // Si todo está correcto
}
/*Funcion que añade la propiedad inactivo a todos los campos del formulario de contactanos*/
function readOnlyFormCambios(){
  $('#botonenviarFacturacion').attr('readOnly',true);
  $('#nombreMejoras').attr('readOnly',true);
  $('#mailMejoras').attr('readOnly',true);
  $('#companiaMejora').attr('readOnly',true);
  $('#urlMejoras').attr('readOnly',true);
  $('#mejoraRealizada').attr('readOnly',true);
}
