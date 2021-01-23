<?php
$usuario = $_SESSION['session'];
if ($usuario != '') {
  cargarImagen($result2);
  if (strlen($result2['DS_NOMBRE']) > 9){
    $nomUsu = substr($result2['DS_NOMBRE'],0,9).'...';
  }else{
    $nomUsu = $result2['DS_NOMBRE'];
  }
  $imagen = $result2['DS_IMAGENPORTADA'];
  if ($imagen != '') {
    $css = "developermen imagen-area";
  }else {
    $css = "";
  }
}
?>
<nav class="navbar navbar-default navbar-fixed">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <p class="navbar-brand hidden-xs" style="font-size:15px;" href="#">Bienvenid@ <strong><?php echo utf8_encode($_SESSION['session']);?></strong> al sitio web de administración de <strong>Developer Men</strong> <i class="fa fa-hand-peace-o" aria-hidden="true"></i></p>
      <p class="navbar-brand hidden-lg hidden-md hidden-sm" href="#">Bienvenido <strong><?php echo $_SESSION['session'];?></strong></p>
    </div>
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <img class="avatar border-gray" src="<?php echo isset($result2['DS_IMAGEN'])?$result2['DS_IMAGEN']:'assets/img/default-avatar.png';?>" width="50" height="50" alt="..."/>
            <b class="caret"></b>
            <span class="notification"><?php echo isset($result2['DS_NOMBRE'])?$result2['DS_NOMBRE']:'NEW';?></span>
          </a>
          <ul class="dropdown-menu" style="background:rgb(255, 255, 255);">
            <li><a class="btn btn-default disabled"><?php echo isset($result2['DS_USERNAME'])?$result2['DS_USERNAME']:'NEW';?></a></li>
            <li><a class="btn btn-success disabled"><?php echo isset($result2['DS_COMPANY'])?$result2['DS_COMPANY']:'Developer Men';?></a></li>
            <li><a class="btn btn-info" href="<?php echo $perfildeusuario?>"><i class="fa fa-user-circle-o" aria-hidden="true"></i> Editar mi cuenta</a></li>
            <li><a class="btn btn-default" href="logout.php"><i class="fa fa-close"></i> Cerrar Sessi&oacute;n</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
<?php validarToken(); ?>
