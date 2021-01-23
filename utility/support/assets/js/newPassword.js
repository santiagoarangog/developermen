/*!
@Scripts Js Developer Men - Support
@Module Scripts página New Password
@version 1.0.
@description Scripts para validar los datos ingresados en la página de nueva contraseña.
@Autor Santiago Arango Gutierrez - CEO & Development Developer Men
@Año 2019.
@Modificacion _
@Año modificacion _
*/
/*Inicia funcion para enviar la informacion de contacto*/
$(document).ready( function() {
  $('#enviar').attr('disabled',true);
  $("#enviar").click( function() {
    if(valReset()){
      $('#enviar').attr('disabled',true);
      $('#enviar').html('Enviando...  <i class="fas fa-spinner fa-spin"></i>');
      $.post("assets/functions/new-password.php",$("#form-new").serialize(),function(res){
        if (res == 0) {
          notReadOnlyNewPass();
          $('#enviar').text('Enviar');
          $('#enviar').attr('readOnly',false);
        }else{
          readOnlyNewPass();
          $('#enviar').html('Enviado  <i class="fas fa-shipping-fast"></i>');
          $('#success').show();
          $('#divSuccess').hide();
          setTimeout('window.location.href = \'paper\'',2000);
        }
      });
    }
  });
});
/*Funcion que añade la propiedad inactivo a todos los campos del formulario de contactanos*/
function readOnlyNewPass(){
  $("#enviar").attr('readOnly',true);
  $('#enviar').attr('disabled',true);
}
function notReadOnlyNewPass(){
  $("#enviar").attr('readOnly',false);
  $('#enviar').attr('disabled',false);
}
function valReset(){
  //variables
  var pass1 = $('[name=password]');
  var pass2 = $('[name=password2]');
  compruebaPrimeraContrasenia(pass1,pass2);
  coincidePassword(pass1,pass2);
  return true; // Si todo está correcto
}

//Funcion que comprueba el primer campo
function compruebaPrimeraContrasenia(pass1,pass2){
  //oculto por defecto el elemento span
  var span = $('<span></span>').insertAfter(pass2);
  span.hide();
  var valor1 = pass1.val();
  if (valor1.length<6) {
    $('#errorContrasenia').show();
    $("#enviar").prop('disabled',true);
  }else if (valor1.length>6) {
    $('#errorContrasenia').hide();
    $("#enviar").prop('disabled',true);
  }
}

//función que comprueba las dos contraseñas
function coincidePassword(pass1,pass2){
  var valor1 = pass1.val();
  var valor2 = pass2.val();
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
    $("#enviar").prop('disabled',true);
  }
  if(valor1.length!=0 && valor1==valor2){
    $("#noCoincide").hide();
    $("#enviar").prop('disabled',false);
  }
}



/*Funcion para validar los campos*/
$(document).ready(function() {
  //variables
  var pass1 = $('[name=password]');
  var pass2 = $('[name=password2]');

  //ejecuto la función al soltar la tecla
  pass1.keyup(function(){
    compruebaPrimeraContrasenia(pass1,pass2);
  });
  pass2.keyup(function(){
    coincidePassword(pass1,pass2)
  });

  $("#clave").keyup(function() {
    // set password variable
    var pswd = $('#clave').val();
    //validate the length
    if (pswd.length < 8 ) {
      $('#length').removeClass('text-success').addClass('text-danger');
    } else {
      $('#length').removeClass('text-danger').addClass('text-success');
    }
    //validate letter
    if (pswd.match(/[A-z]/) ) {
      $('#letter').removeClass('text-danger').addClass('text-success');
    } else {
      $('#letter').removeClass('text-success').addClass('text-danger');
    }

    //validate capital letter
    if (pswd.match(/[A-Z]/) ) {
      $('#capital').removeClass('text-danger').addClass('text-success');
    } else {
      $('#capital').removeClass('text-success').addClass('text-danger');
    }

    //validate number
    if (pswd.match(/\d/) ) {
      $('#number').removeClass('text-danger').addClass('text-success');
    } else {
      $('#number').removeClass('text-success').addClass('text-danger');
    }
  }).focus(function() {
    $('#pswd_info').show();
  }).blur(function() {
    $('#pswd_info').hide();
  });

});

$(document).ready(function(){
  $('[name=password]').on('paste', function(e){
    e.preventDefault();
    swal("¡Error, no se puede pegar en este campo!",
    "Esta acción no esta permitida en nuestro sitio por motivos de seguridad",
    "error");
  })

  $('[name=password]').on('copy', function(e){
    e.preventDefault();
    swal("¡Error, no se puede copiar en este campo!",
    "Esta acción no esta permitida en nuestro sitio por motivos de seguridad",
    "error");
  })

  $('[name=password2]').on('paste', function(e){
    e.preventDefault();
    swal("¡Error, no se puede pegar en este campo!",
    "Esta acción no esta permitida en nuestro sitio por motivos de seguridad",
    "error");
  })

  $('[name=password2]').on('copy', function(e){
    e.preventDefault();
    swal("¡Error, no se puede copiar en este campo!",
    "Esta acción no esta permitida en nuestro sitio por motivos de seguridad",
    "error");
  })
});
