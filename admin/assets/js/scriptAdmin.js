/*Mensaje de confirmacion */
function changeState(oid,par){
  var confirm = "<div id='dialog-confirm' style='background-color:$f7f7f7;text-align:center;'><p><input type='hidden' id='url' value='modInscripcion.php?oid="+oid+"&oidActivi="+par+"&var=1&accion=eliminar''><i class='fa fa-info-circle fa-5x' style='color:#e9e17f;' aria-hidden='true'></i><br/><br/><strong>Â¿Esta seguro de cancelar su actividad programada?</strong></p></div>";
  document.getElementById("confirmar").innerHTML = confirm;
  $( "#dialog-confirm" ).dialog({
    title: 'Cancelar actividad',
    resizable: false,
    height: "auto",
    width: 400,
    modal: true,
    buttons: {
      SI: function() {
        var url = $( "#url" ).val();
        location.replace(url)
        $( this ).dialog( "close" );
      },
      NO: function() {
        $( this ).dialog( "close" );
      }
    },
    close: function( event, ui ) {
      $( this ).dialog( "close" );
    }
  });
}
