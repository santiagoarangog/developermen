/*Inician funciones para enviar la informacion del correo corporativo*/
$(document).ready( function() {   // Esta parte del código se ejecutará automáticamente cuando la página está lista.
  $('#botonenviarCorreoCorpora').attr('readOnly',true);
  $("#botonenviarCorreoCorpora").click( function() {     // Con esto establecemos la acción por defecto de nuestro botón de enviar.
    if(validaFormCorreoCorpora()){// Primero validará el formulario.
      $('#botonenviarCorreoCorpora').attr('disabled',true);
      // $('#botonenviar').html('<div><img src="assets/img/gif/cargando.gif"/></div>');
      $('#botonenviarCorreoCorpora').text('Enviando...');
      $.post("functions/correoCorpora.php",$("#correoCorpora").serialize(),function(res){
        $("#formulario").fadeOut("slow");   // Hacemos desaparecer el div "formulario" con un efecto fadeOut lento.
        if(res == 1){
          $("#fracaso").delay(500).fadeIn("slow");    // Si no, lo mismo, pero haremos aparecer el div "fracaso"
        } else {
          readOnlyCorreoCorpora();
          $("#exitoCorreo").delay(500).fadeIn("slow");      // Si hemos tenido éxito, hacemos aparecer el div "exito" con un efecto fadeIn lento tras un delay de 0,5 segundos.
          $("#exito").delay(500).fadeIn("slow");      // Si hemos tenido exito, hacemos aparecer el div "exito" con un efecto fadeIn lento tras un delay de 0,5 segundos.
          swal({
            title: "La información se envio correctamente",
            text: "El modal de tu gestion se cerrara en 5 segundos.Revisa la bandeja del correo proporcionado para conocer mas información",
            timer: 5000,
            type: "success",
            showConfirmButton: false
          });
          $('#botonenviarCorreoCorpora').text('Enviado');
          setTimeout('$("#modalCorreoCorpo").modal("hide")',5000);
          setTimeout(function(){location.href='corCorpora'},850);
        }
      });
    }
  });
});
/*Funcion que valida que ninguno de los campos se vayan vacios*/
function validaFormCorreoCorpora(){
  var reg = /^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i;
  var email = $('#mailCorreoCorpora').val();
  // Campos de texto
  if($('#nomCorreoCorpora').val() == ''){
    swal("¡Error campo Nombre vacio!",
    "Debes indicar el nombre del destinatario, este campo es obligatorio y no puede ir vacio",
    "error");
    $("#nomCorreoCorpora").focus();
    return false;
    return false;
  }
  if(email.trim() == '' ){
    swal("¡Error campo Correo electrónico vacio!",
    "Debes indicar el correo electrónico del destinatario, este campo es obligatorio y no puede ir vacio",
    "error");
    $('#mailCorreoCorpora').focus();
    return false;
  }else if(email.trim() != '' && !reg.test(email)){
    swal("¡Error formato de correo no valido!",
    "Debes indicar una direccion de correo electrónico correcta; Ejemplo: micorreo@gmail.com",
    "error");
    $('#mailCorreoCorpora').focus();
    return false;
  }
  if ($("#asuntoCorreoCorpora").val() == '') {
    swal("¡Proporciona un asunto!",
    "Debes indicar el asunto del correo",
    "error");
    $("#asuntoCorreoCorpora").focus();
    return false;
  }
  if($("#comentarioCorreoCorpora").val() == ''){
    swal("¡Danos tu opinión!",
    "Debes enviar un comentario al destinatario",
    "error");
    $("#comentarioCorreoCorpora").focus();
    return false;
  }
  return true; // Si todo está correcto
}
/*Funcion que añade la propiedad inactivo a todos los campos del formulario de contactanos*/
function readOnlyCorreoCorpora(){
  $('#botonenviarCorreoCorpora').attr('readOnly',true);
  $('#nomCorreoCorpora').attr('readOnly',true);
  $('#mailCorreoCorpora').attr('readOnly',true);
  $('#asuntoCorreoCorpora').attr('readOnly',true);
  $('#comentarioCorreoCorpora').attr('readOnly',true);
}
