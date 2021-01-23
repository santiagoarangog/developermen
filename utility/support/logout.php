<?php
session_start();
unset($_SESSION['session_devmen']);
/*se redirige el usuario a la pantalla principal de logueo de la base de aplicaciones con la sesion finalizada.*/
if(isset($_GET["errorusuario"]) && $_GET["errorusuario"]=="si"){
  header("location: login.php?errorusuario=si&tipomsg=".$_GET["tipomsg"]."");
}else{
  header("location: login.php?accion=Cerrar");
}
?>
