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
/*Funcion para validar los campos*/
$(document).ready(function() {
  //variables
  var pass1 = $('[name=password]');
  var pass2 = $('[name=password2]');
  $("#enviar").prop('disabled',true);
  //oculto por defecto el elemento span
  var span = $('<span></span>').insertAfter(pass2);
  span.hide();
  //Funcion que comprueba el primer campo
  function compruebaPrimeraContraseña(){
    var valor1 = pass1.val();
    if (valor1.length<6) {
      $('#errorContraseña').show();
      $("#enviar").prop('disabled',true);
    }else if (valor1.length>6) {
      $('#errorContraseña').hide();
      $("#enviar").prop('disabled',true);
    }
  }
  //función que comprueba las dos contraseñas
  function coincidePassword(){
    var valor1 = pass1.val();
    var valor2 = pass2.val();
    //muestro el span
    span.show().removeClass();
    //condiciones dentro de la función
    if(valor1 != valor2){
      $("#noCoincide").show();
      $("#enviar").prop('disabled',true);
    }
    if(valor1.length==0 || valor1==""){
      $("#noCoincide").show();
      $("#enviar").prop('disabled',true);
    }
    if(valor1.length<6 || valor1.length>10){
      $('#errorContraseña').show();
      $("#coincide").hide();
      $("#enviar").prop('disabled',true);
    }
    if(valor1.length!=0 && valor1==valor2){
      $("#coincide").show();
      $("#noCoincide").hide();
      $("#errorContraseña").hide();
      $("#enviar").prop('disabled',false);
    }
  }
  //ejecuto la función al soltar la tecla
  pass1.keyup(function(){
    compruebaPrimeraContraseña();
  });
  pass2.keyup(function(){
    coincidePassword();
  });
});


/*Funcion que valida que se inserte una contraseña valida*/
$(document).ready(function() {
  $("#password").keyup(function() {
    // set password variable
    var pswd = $(this).val();
    //validate the length
    if ( pswd.length < 8 ) {
      $('#length').removeClass('valid').addClass('invalid');
    } else {
      $('#length').removeClass('invalid').addClass('valid');
    }
    //validate letter
    if ( pswd.match(/[A-z]/) ) {
      $('#letter').removeClass('invalid').addClass('valid');
    } else {
      $('#letter').removeClass('valid').addClass('invalid');
    }

    //validate capital letter
    if ( pswd.match(/[A-Z]/) ) {
      $('#capital').removeClass('invalid').addClass('valid');
    } else {
      $('#capital').removeClass('valid').addClass('invalid');
    }

    //validate number
    if ( pswd.match(/\d/) ) {
      $('#number').removeClass('invalid').addClass('valid');
    } else {
      $('#number').removeClass('valid').addClass('invalid');
    }
  }).focus(function() {
    $('#pswd_info').show();
  }).blur(function() {
    $('#pswd_info').hide();
  });
});

function verificar(){
  var pswd = $("#pswd").val();
  //validate the length
  if (pswd.length < 8 ) {
    $('#length').removeClass('valid').addClass('invalid');
    $('#pswd_info').show();
    return false;
  } else {
    $('#length').removeClass('invalid').addClass('valid');
  }
  //validate letter
  if ( pswd.match(/[A-z]/) ) {
    $('#letter').removeClass('invalid').addClass('valid');
  } else {
    $('#letter').removeClass('valid').addClass('invalid');
    $('#pswd_info').show();
    return false;
  }

  //validate number
  if ( pswd.match(/\d/) ) {
    $('#number').removeClass('invalid').addClass('valid');
  } else {
    $('#number').removeClass('valid').addClass('invalid');
    $('#pswd_info').show();
    return false;
  }
}
