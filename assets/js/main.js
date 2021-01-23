jQuery(document).ready(function ($) {
  //Click to scroll to next section
  $('.scrl-down').on('click', function (e) {
    e.preventDefault();
    $('html, body').animate({
      scrollTop: $($(this).attr('href')).offset().top
    }, 500, 'linear');
  });
  //Back to top
  $(window).scroll(function () {
    if ($(this).scrollTop() > 900) {
      $('.back-to-top').fadeIn();
    } else {
      $('.back-to-top').fadeOut();
    }
  });
  $(".back-to-top").click(function () {
    $("html, body").animate({
      scrollTop: 0
    }, 1000);
  });
  compruebaAceptaCookies();
  minutes();
});

function closesocialslide(){
  $('#socialslide').remove();
}
/*Funcion cuenta atrás*/
toHour=0;toMinute=0;toSecond=20;
function countDown(){
  toSecond=toSecond-1;
  if(toSecond<0){
    toSecond=59;toMinute=toMinute-1;
  }
  form.second.value=toSecond;
  if(toMinute<0){
    toMinute=59;toHour=toHour-1;
  }
  form.minute.value=toMinute;form.hour.value=toHour;
  if(toHour<0){
    form.second.value='';form.minute.value='';form.hour.value='';
  }else{
    setTimeout("countDown()",1000);
  }
}
/* Esto comprueba la localStorage si ya tiene la variable guardada */
// Inicia Funcion que se implementa para ocultar o mostrar el mesaje de utilizaciÃ³n de cookies
/*Esta funcion valida que en la sessionStorage de Html5 no este el registro del onclick realizado por el usuario*/
function compruebaAceptaCookies() {
  if(sessionStorage.aceptaCookies == 'true'){
    mensajeCookies.style.display = 'none';
  }
}
/*Esta funcion guarda en la sessionStorage de Html5 cuando el usuario da click en aceptar el mensaje de utilizaciÃ³n de cookies*/
function aceptarCookies() {
  $('#socialslide').attr( "data-aos", "zoom-out-right" );
  $('#socialslide').attr( "data-aos-easing", "linear" );
  $('#socialslide').attr( "data-aos-duration", "1500" );
  $('.toast').toast('show');
  // Cookies.set('cookie.DeveloperMen', 'none',{expires: 1}); //cookie que caduca en 1 dÃ­a
  sessionStorage.aceptaCookies = 'true';
  mensajeCookies.style.display = 'none';
}
//Funcion minutos
function minutes(){
  var minuto = $("#inputMinute").val();
  if (minuto === '') {
    $("#inputMinute").val('0');
  }else{
    $("#inputMinute").val(minuto++);
    var minuto = $("#inputMinute").val(minuto++);
  }
  setTimeout('minutes()',60000);
}

function copyToClipboard(element) {
  var $temp = $("<input>");
  $("body").append($temp);
  $temp.val($(element).text()).select();
  $("#content").html('<i class="far fa-copy"></i>');
  $("#button").attr("title","Copiado!").tooltip("_fixTitle").tooltip("show").attr("title","Copiar al portapapeles").tooltip("_fixTitle");
  setTimeout("imagen()",1000);
  document.execCommand("copy");
  $temp.remove();
}

function imagen(){
  $("#content").html('<i class="fas fa-link"></i>');
  $("#button").attr("title","Copiar al portapapeles").tooltip("_fixTitle");
}

$('.popover-dismiss').popover({
  trigger: 'focus'
})

function goBack() {
  window.history.back();
}

function obtenerNombreFichero(){
  $('.custom-file-input').on('change', function(event) {
    var inputFile = event.currentTarget;
    $(inputFile).parent()
    .find('.custom-file-label')
    .html(inputFile.files[0].name);
  });
}

// Autosize textarea
//
var TextareaAutosize = (function() {
  // Variables
  var $textarea = $('[data-toggle="autosize"]');
  // Methods
  function init() {
    autosize($textarea);
  }
  // Events
  if ($textarea.length) {
    init();
  }
})();

//
// Select2
//

'use strict';

var Select = (function() {

  //
  // Variables
  //

  var $select = $('[data-toggle="select"]');


  //
  // Methods
  //

  function init($this) {
    var options = {
      placeholder: "Seleccione un dato del listado",
      allowClear: true
      // dropdownParent: $this.closest('.modal').length ? $this.closest('.modal') : $(document.body),
      // minimumResultsForSearch: $this.data('minimum-results-for-search'),
      // templateResult: formatAvatar
    };

    $this.select2(options);
  }

  function formatAvatar(avatar) {
    if (!avatar.id) {
      return avatar.text;
    }

    var $option = $(avatar.element);
    var optionAvatar = $option.data('avatar-src');
    var output;

    if (optionAvatar) {
      output = $('<span class="avatar avatar-xs mr-3"><img class="avatar-img rounded-circle" src="' + optionAvatar + '" alt="' + avatar.text + '"></span><span>' + avatar.text + '</span>');
    } else {
      output = avatar.text;
    }

    return output;
  }


  //
  // Events
  //

  if ($select.length) {

    // Init selects
    $select.each(function() {
      init($(this));
    });
  }

})();

/*Función para enviar imagenes a Lootie */
function lottieImage(id,path,speed,autoplay) {
  document.getElementById(id).addEventListener('mouseover', function () { lottie.play(); });
  document.getElementById(id).addEventListener('click', function () { lottie.pause(); });
  lottie.loadAnimation({
    container: document.getElementById(id), // ID del div
    path: path, // Ruta fichero .json de la animación
    renderer: 'svg', // Requerido
    loop: true, // Opcional
    autoplay: autoplay, // Opcional
    name: "Animación Developer Men", // Opcional
  });
  if (speed != ''){
    lottie.setSpeed(speed);
  }
  document.getElementById(id).addEventListener('complete', function () {
    console.log('animation complete!');
  });
}
