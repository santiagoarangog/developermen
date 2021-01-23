<?php
session_start();
session_destroy();
/*se redirige el usuario a la pantalla principal de logueo de la base de aplicaciones con la sesion finalizada.*/
if ($_GET["msg"]=="tokenInvalido") {
  header("location: login.php?accion=tokenInvalido");
}else{
  if(isset($_GET["errorusuario"]) && $_GET["errorusuario"]=="si"){
    header("location: login.php?errorusuario=si&tipomsg=".$_GET["tipomsg"]."");
  }else{
    header("location: login.php?accion=Cerrar");
  }
}
?>
