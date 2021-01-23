<?php
/*Funcion que finaliza la sesion*/
function logOut(){
  session_start();
  unset($_SESSION['session_devmen']);
  if(isset($_GET["errorusuario"]) && $_GET["errorusuario"]=="si"){
    session_destroy();
    header("location: index.php?errorusuario=si&tipomsg=errorLogin");
  }else{
    session_destroy();
    header("location: login.php?accion=Cerrar");
  }
}
# Aca se valida si el usuario esta logueado
function isLogged(){
  $redir = isset($_GET['redir'])?$_GET['redir']:'';
  // echo $redir;die;
  if($_SESSION['autentificado'] == "SI"){
    return TRUE;
  }else{
    header("Location:logout.php?errorusuario=si&tipomsg=nologueado");
    return false;
  }
}
# Session Logout after in activity
function sessionX(){
  $logLength = 1800; # time in seconds :: 1800 = 30 minutes
  $ctime = strtotime("now"); # Create a time from a string
  # If no session time is created, create one
  if(!isset($_SESSION['sessionX'])){
    # create session time
    $_SESSION['sessionX'] = $ctime;
  }else{
    # Check if they have exceded the time limit of inactivity
    if(((strtotime("now") - $_SESSION['sessionX']) > $logLength) && isLogged()){
      # If exceded the time, log the user out
      logOut();
      # Redirect to login page to log back in
      header("Location: logout.php?errorusuario=si&tipomsg=timeOut");
      exit;
    }else{
      # If they have not exceded the time limit of inactivity, keep them logged in
      // echo"Lleva esto de Inactividad".(strtotime("now") - $_SESSION['sessionX']);
      $inaFootter = (strtotime("now") - $_SESSION['sessionX']);
      $_SESSION['sessionX'] = $ctime;
    }
  }
}
sessionX();
?>
