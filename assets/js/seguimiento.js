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
/*Inicia funcion para enviar la informacion de contacto por Wpp*/
$(document).ready( function() {
  $('#enviarWpp').attr('readOnly',true);
  $("#enviarWpp").click( function() {
    if(validarWpp()){
      $('#enviarWpp').attr('disabled',true);
      $('#enviarWpp').html('Enviando...  <i class="fas fa-spinner fa-spin"></i>');
      $.post("assets/functions/seguimiento.php",$("#form-wpp").serialize(),function(res){
        if(res != ''){
          var url = "https://api.whatsapp.com/send?phone=573113111538&text="+res;
          setTimeout(window.open(url),2000);
          readOnlyForm();
          $('#enviarWpp').html('Enviado  <i class="fas fa-shipping-fast"></i>');
          $('#msgWpp').fadeIn().attr( "data-aos", "fade-in-left" ).attr( "data-aos-delay", "200" );
        } else {
          notReadOnlyForm();
          $('#enviarWpp').text('Enviar');
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
function readOnlyForm(){
  $('#asuntoWpp').attr('readOnly',true);
  $('#enviarWpp').attr('disabled',true);
}
function notReadOnlyForm(){
  $('#asuntoWpp').attr('readOnly',false);
  $('#enviarWpp').attr('disabled',false);
}

function mensajeAlert(){
  $(".mensaje").show();
}
