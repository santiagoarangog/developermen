<?php
if (isset($sidebar)?$sidebar:'' != '') {
  if ($sidebar == '1') {
    $imagenSidebar = '<div class="sidebar" data-color="blue" data-image="assets/img/sidebar-1.jpg">';
  }if($sidebar == '2'){
    $imagenSidebar = '<div class="sidebar" data-color="blue" data-image="assets/img/sidebar-2.jpg">';
  }if($sidebar == '3'){
    $imagenSidebar = '<div class="sidebar" data-color="blue" data-image="assets/img/sidebar-3.jpg">';
  }if($sidebar == '4'){
    $imagenSidebar = '<div class="sidebar" data-color="blue" data-image="assets/img/sidebar-4.jpg">';
  }if($sidebar == '5'){
    $imagenSidebar = '<div class="sidebar" data-color="blue" data-image="assets/img/sidebar-5.jpg">';
  }
}else {
  $imagenSidebar = '<div class="sidebar" data-color="blue" data-image="assets/img/sidebar-2.jpg">';
}
echo $imagenSidebar;
?>
<!--
Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
Tip 2: you can also add an image using data-image tag
-->
<div class="sidebar-wrapper">
  <div class="logo">
    <a href="#" class="simple-text">
      Developer Men
    </a>
  </div>
  <ul class="nav">
    <li class="<?php if (isset($active) && $active == "PanelControl") echo "active";?>">
      <a href="<?php echo $paneldecontrol ;?>"><i class="pe-7s-graph"></i><p>Panel de Control</p></a>
    </li>
    <li class="<?php if (isset($active) && $active == "PerfilUsuario") echo "active";?>">
      <a href="<?php echo $perfildeusuario ;?>"><i class="pe-7s-user"></i><p>Perfil de Usuario</p></a>
    </li>
    <li class="<?php if (isset($active) && $active == "GestionAdmin") echo "active";?>">
      <a href="<?php echo $admin;?>"><i class="pe-7s-magic-wand"></i><p>Gestion Tareas Admin</p></a>
    </li>
    <li class="<?php if (isset($active) && $active == "GestionarFrondEnt") echo "active";?>">
      <a href="<?php echo $frontEnd;?>"><i class="pe-7s-note2"></i><p>Gestionar FrontEnd</p></a>
    </li>
    <li class="<?php if (isset($active) && $active == "Productos") echo "active";?>">
      <a href="<?php echo $productos ;?>"><i class="pe-7s-plugin"></i><p>Gestionar Productos</p></a>
    </li>
    <li class="<?php if (isset($active) && $active == "Soporte") echo "active";?>">
      <a href="<?php echo $soporte ;?>"><i class="pe-7s-wristwatch"></i><p>Gestionar Soporte</p></a>
    </li>
    <li class="<?php if (isset($active) && $active == "Estilos") echo "active";?>">
      <a href="<?php echo $estilos ;?>"><i class="pe-7s-news-paper"></i><p>Estilos</p></a>
    </li>
    <li class="<?php if (isset($active) && $active == "Iconos") echo "active";?>">
      <a href="<?php echo $iconos ;?>"><i class="pe-7s-science"></i><p>Iconos</p></a>
    </li>
    <li class="<?php if (isset($active) && $active == "TiposMapas") echo "active";?>">
      <a href="<?php echo $maps ;?>"><i class="pe-7s-way"></i><p>Tipos de Mapas</p></a>
    </li>
    <li class="<?php if (isset($active) && $active == "Notificaciones") echo "active";?>">
      <a href="<?php echo $notificaciones ; ?>"><i class="pe-7s-bell"></i><p>Notificaciones</p></a>
    </li>
  </ul>
</div>
</div>
