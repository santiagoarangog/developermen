<?php
/*Funcion para generar token Aleatorio*/
function token($username,&$newToken){
  $caracteres='ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
  $longpalabra=8;
  for($pass='', $n=strlen($caracteres)-1; strlen($pass) < $longpalabra ; ) {
    $x = rand(0,$n);
    $pass.= $caracteres[$x];
  }
  $passHash = password_hash($pass, PASSWORD_BCRYPT);
  $newToken = $passHash;
  conectar($conexion);
  $sqlUpdate = "UPDATE SUP_LOGIN
  SET DS_TOKEN = '$newToken'
  WHERE DS_USERNAME = '$username'";
  $error = 'Error: No se puede actualizar el token al usuario';
  executeQuery($conexion, $sqlUpdate , $error,$stmt);
  mysqli_close($conexion);
}
?>
