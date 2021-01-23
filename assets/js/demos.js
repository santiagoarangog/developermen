$(document).ready(function () {
  imagen();
});
//Funcion minutos
function imagen(){
  var tipImagen = $("#tipImagen").val();
  if (tipImagen === '0') {
    $("#contenedor-imagen").html("<img src='../assets/img/illustrations/To_the_stars.svg' data-aos='fade-down' class='img-fluid' data-aos-duration='1500'>")
    // $("#imagen").attr('src','../assets/img/illustrations/To_the_stars.svg');
    $("#tipImagen").val('1');
  }else{
    $("#contenedor-imagen").html("<img src='../assets/img/illustrations/undraw_startman.svg' data-aos='fade-left' class='img-fluid' data-aos-duration='1500'>")
    // $("#imagen").attr('src','../assets/img/illustrations/undraw_startman.svg');
    // $("#imagen").attr( "data-aos", "fade-up");
    $("#tipImagen").val('0');
  }
  setTimeout('imagen()',10000);
}
