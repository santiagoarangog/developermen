// Inician funciones para los mensajes
function showDivError(){
  $("#divError").fadeIn(500);
}
function showDivWarning(){
  $("#divWarning").fadeIn(500);
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
function hideDivWarning(){
  $("#divWarning").fadeOut(500);
}
function hideSucessMessage(){
  $("#divSuccess").fadeOut(500);
}
function mostrarPassword(){
  var sel = $('#inputChange').val();
  if(sel == 0){
    $('#password').removeAttr("type", "password"); //Removemos el atributo de Tipo Contraseña
    $("#password").prop("type", "text"); //Agregamos el atributo de Tipo Texto(Para que se vea la Contraseña escribida)
    $("#ocultar").removeClass("fa fa-eye-slash").addClass('fa fa-eye')
    $('#inputChange').val('1');
  }else{
    $('#password').removeAttr("type", "text"); //Removemos el atributo de Tipo Texto
    $("#password").prop("type", "password"); //Agregamos el atributo de Tipo Contraseña
    $("#ocultar").removeClass("fa fa-eye").addClass('fa fa-eye-slash')
    $('#inputChange').val('0');
  }
}

/*Mensajes*/
function showDivError(){
  $("#divError").fadeIn(500);
}
function showSucessMessage(){
  $("#divSuccess").fadeIn(500);
}

function hideDivError(){
  $("#divError").fadeOut(500);
}
function hideSucessMessage(){
  $("#divSuccess").fadeOut(500);
}
