function showDivError(){
  $("#divError").fadeIn(500);
}
function showSucessMessage(){
  $("#divSuccess").fadeIn(500);
}
function showSucessMessageCorreo(){
  $("#divSuccessCorreo").fadeIn(500);
}

function hideDivError(){
  $("#divError").fadeOut(500);
}
function hideSucessMessage(){
  $("#divSuccess").fadeOut(500);
}

//Validar que no vuelva a enviar la informacion 2 veces, cuando de click seguido en el boton enviar
var statSend = false;
function checkSubmit() {
  if (!statSend) {
    statSend = true;
    return true;
  } else {
    alert("La informacion se esta enviando");
    return false;
  }
}
$(document).ready(function(){

  demo.initChartist();

  $.notify({
    icon: 'fa fa-user-circle-o',
    message: "<b>Bienvenido </b><?php echo $usu;?><b> al sitio web de administracion de</b> Developer Men."

  },{
    type: 'info',
    /*timer: 4000 Tiempo para desaparecer*/
  });


  $.notify({
    icon: 'fa fa-commenting-o',
    message: "Recuerda que este sitio web fue diseñado para hacerte la administracion mas facil"

  },{
    type: 'success',
    timer: '4000'
    /*Tiempo para desaparecer*/
  });

  $.notify({
    icon: 'fa fa-pencil-square-o',
    message: "En la seccion <b>Perfil de Usuario</b> podras editar tu perfil en nuestra plataforma"

  },{
    type: 'info',
    timer: '7000'
    /*Tiempo para desaparecer*/
  });

  $.notify({
    icon: 'fa fa-file',
    message: "En la seccion <b>Tabla de contactanos y Usuarios</b> puedes visualizar los mensajes que nos han dejado nuestros usuarios"

  },{
    type: 'info',
    timer: '8000'
    /*Tiempo para desaparecer*/
  });

});
