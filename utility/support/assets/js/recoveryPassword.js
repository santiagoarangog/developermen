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
  $('#buttonReset').attr('readOnly',true);
  $("#buttonReset").click( function() {
    if(valEmailRecover()){
      $('#buttonReset').attr('disabled',true);
      $('#buttonReset').html('Enviando...  <i class="fas fa-spinner fa-spin"></i>');
      $.post("assets/functions/recovery-password.php",$("#form-reset").serialize(),function(res){
        if(res == "0"){
          notReadOnlyReset();
          $('#buttonReset').text('Enviar');
          $('#errorReset').show();
          $('#buttonReset').attr('readOnly',false);
        } else {
          readOnlyReset();
          $('#buttonReset').html('Enviado  <i class="fas fa-shipping-fast"></i>');
          $('#successReset').show();
          $('#errorReset').fadeOut().attr( "data-aos", "fade-out-left" );
          setTimeout('window.location.href = \'paper\'',2000);
        }
      });
    }
  });
});
function valEmailRecover(){
  if ($("#emailRecover").val() == '') {
    return false;
  }
  return true; // Si todo está correcto
}
function readOnlyReset(){
  $("#buttonReset").attr('readOnly',true);
  $('#buttonReset').attr('disabled',true);
}
function notReadOnlyReset(){
  $("#buttonReset").attr('readOnly',false);
  $('#buttonReset').attr('disabled',false);
}
