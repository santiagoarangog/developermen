<?php
/*Función que hace la imagen aleatoria*/
function aleatorio(&$img){
  $total = "2"; // Numero total de imagenes
  $carpeta = "assets/img/random";
  $random = mt_rand(1, $total);
  $imagen = $random . ".svg";
  $img = 'assets/img/random/'.$imagen;
}
?>
