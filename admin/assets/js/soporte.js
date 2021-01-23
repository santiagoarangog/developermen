/*!
@Scripts Js Aplicativo (Semana de la salud o SO Eventos)
@Module (Abarca todos los modulos)
@version 1.0.
@description Scripts que se pueden ejecutar en todos los modulos del aplicativo.
@Autor Santiago Arango Gutierrez - Auxiliar de analisis y desarrollo Clínica Somer.
@Año 2017.
@Modificacion _
@Año modificacion _
*/
function enProgreso(oid){
  if(oid === undefined){
    var oid = oid;
  }
  $.ajax({
    type:'POST',
    url:'./functions/ajaxFunctions.php',
    data:{"oid":oid},
    /*Funcion que muestra mensaje en la parte superior de la pagina diliIngPac.php indicando que se le esta intentando generar un ingreso a un paciente sin Egreso*/
    success: function(data){
      if(data == '1'){
        swal("Se realizo correctamente!", "Haz cambiado el proceso a 'EN PROCESO'", "success");
        setTimeout(function(){location.href='pendiente'},950);
      }else{
        swal("No se pudo realizar", "Intenta de nuevo y si sigue presentandose este error contactanos", "error");
      }
    }
  });
}
