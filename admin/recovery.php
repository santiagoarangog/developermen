<html>
<?php
// Validacion que se hace para que no aparezca el error de que se ha enviado el Header
ob_start();
$year = date('Y');
?>
<head>
  <meta charset="UTF-8" />
  <meta name="language" content="Spanish">
  <meta http-equiv="content-language" content="es">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=-1.0"/>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
  <meta name="title" content="Developer Men">
  <meta name="language" content="Es-es" />
  <meta name="subjetc" content="Desarrollo Web a la medida en llanogrande, Rionegro Antioquia" />
  <meta name="generator" content="Bootstrap,Jquery,Html5,CSS3" />
  <title>Administración Developer Men &bull; Insertar nueva contraseña</title>
  <!-- Android Icons -->
  <link rel="icon" type="image/png" sizes="57x57" href="../assets/favicons/android-icon-144x144.png" />
  <link rel="icon" type="image/png" sizes="60x60" href="../assets/favicons/android-icon-192x192.png"/>
  <link rel="icon" type="image/png" sizes="76x76" href="../assets/favicons/android-icon-36x36.png"/>
  <link rel="icon" type="image/png" sizes="152x152" href="../assets/favicons/android-icon-48x48.png"/>
  <link rel="icon" type="image/png" sizes="180x180" href="../assets/favicons/android-icon-72x72.png"/>
  <link rel="icon" type="image/png" sizes="180x180" href="../assets/favicons/android-icon-96x96.png"/>
  <!-- Android Icons -->
  <!-- Favicon -->
  <link rel="icon" type="image/png" href="../assets/favicons/favicon-16x16.png" sizes="16x16"/>
  <link rel="icon" type="image/png" href="../assets/favicons/favicon-32x32.png" sizes="32x32"/>
  <link rel="icon" type="image/png" href="../assets/favicons/favicon-96x96.png" sizes="96x96"/>
  <!-- Favicon -->
  <!-- Ms Icon -->
  <link rel="ms-icon" type="image/png" href="../assets/favicons/ms-icon-70x70.png" sizes="70x70"/>
  <link rel="ms-icon" type="image/png" href="../assets/favicons/ms-icon-144x144.png" sizes="144x144"/>
  <link rel="ms-icon" type="image/png" href="../assets/favicons/ms-icon-150x150.png" sizes="150x150"/>
  <link rel="ms-icon" type="image/png" href="../assets/favicons/ms-icon-310x310.png" sizes="310x310"/>
  <!-- Ms Icon -->
  <link rel="manifest" href="../assets/favicons/manifest.json"/>
  <!-- Theme -->
  <meta name="msapplication-TileColor" content="#3c89ba"/>
  <meta name="msapplication-TileImage" content="../assets/favicons/mstile-144x144.png"/>
  <meta name="msapplication-config" content="../assets/favicons/browserconfig.xml"/>
  <meta name="theme-color" content="#3c89ba"/>
  <!-- Theme -->
  <meta name="google-site-verification" content="17NFf6ZWJXH32eOa_RL7Lzv7es -9VPwP-Oh0i6-rtOU" />
  <meta property="og:locale" content="es_ES" />
  <meta property="og:type" content="page" />
  <meta property="og:title" content="Pagina administracion Developer Men" />
  <meta property="og:description" content="Gestiona a Developer Men desde nuestra herramienta de administracion"/>
  <meta property="og:url" content="https://developermen.com/admin/" />
  <meta property="og:site_name" content="https://developermen.com/admin/" />
  <meta property="article:publisher" content="https://www.facebook.com/@developermen" />
  <meta property="article:author" content="https://www.facebook.com/@developermen" />
  <meta property="article:tag" content="Pagina administracion Developer Men" />
  <meta property="article:section" content="Login" />
  <meta property="og:image" content="https://developermen.com/assets/images/present/contactanos_2.jpg" />
  <meta property="og:image:width" content="1200" />
  <meta property="og:image:height" content="600" />
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:description" content="Gestiona a Developer Men desde nuestra herramienta de administracion" />
  <meta name="twitter:title" content="Pagina administracion Developer Men" />
  <meta name="twitter:site" content="@developermen1" />
  <meta name="twitter:image" content="https://developermen.com/assets/images/present/contactanos_2.jpg" />
  <!-- Fonts -->
  <link async href='https://fonts.googleapis.com/css?family=Montserrat:400,700|Source+Sans+Pro:400,700,400italic,700italic' rel='stylesheet' type='text/css'/>
  <link async href='https://fonts.googleapis.com/css?family=Raleway:200,400,600' rel='stylesheet' type='text/css'/>
  <!-- Fonts -->
  <!-- URL Dispositivos Moviles-->
  <link rel="canonical" href="https://developermen.com/index.php" />
  <!-- URL Dispositivos Moviles-->
  <!-- Styles -->
  <link async rel="stylesheet" href="../old/assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css?ver=<?php echo filemtime('../old/assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css');?>"/>
  <link async rel="stylesheet" href="assets/css/bootstrap.css?ver=<?php echo filemtime('assets/css/bootstrap.css');?>">
  <link async rel="stylesheet" href="assets/css/estilosLogin2.css?ver=<?php echo filemtime('assets/css/estilosLogin2.css');?>" media="screen" title="no title"/>
  <link async rel="stylesheet" href="assets/css/component.css?ver=<?php echo filemtime('assets/css/component.css');?>" media="screen" title="no title"/>
  <link async rel="stylesheet" href="assets/css/normalize.css?ver=<?php echo filemtime('assets/css/normalize.css');?>" media="screen" title="no title"/>
  <link async rel="stylesheet" href="assets/css/animate.css?ver=<?php echo filemtime('assets/css/animate.css');?>" media="screen" title="no title"/>
  <link async rel="stylesheet" href="assets/css/all.css?ver=<?php echo filemtime('assets/css/all.css');?>">
  <link rel="stylesheet" href="assets/css/sweetalert.css?ver=<?php echo filemtime('assets/css/sweetalert.css');?>">
  <!-- Styles -->
  <style media="screen">
  #pswd_info {
    margin-top: 2%;
    position:absolute;
    margin-left:65%;
    width:25%;
    padding:15px;
    background:#fefefe;
    font-size:.875em;
    border-radius:5px;
    box-shadow:0 1px 3px #ccc;
    border:1px solid #ddd;
  }

  #pswd_info::before {
    content: "\25B2";
    position:absolute;
    top:-12px;
    left:45%;
    font-size:14px;
    line-height:14px;
    color:#ddd;
    text-shadow:none;
    display:block;
  }

  .invalid {
    background-size: ;
    padding-left:22px;
    line-height:24px;
    color:#ec3f41;
  }
  .valid {
    padding-left:22px;
    line-height:24px;
    color:#3a7d34;
  }

  #pswd_info {
    display:none;
  }
  </style>
</head>
<body>
  <?php
  /*Seccion de requiridos que permiten el funcionamiento de todas las funciones en PHP en el documento*/
  require('functions/conexion.php');
  include('functions/functionsLogin.php');
  include('functions/mensajes.php');
  ?>
  <div align="center" style="margin-top:2%;">
    <h3><span style="font-family:Brush Script MT;">Developer Men &bull; Administración</span></h3>
    <p>1.0.0.1</p>
  </div>
  <div class="wrap" style="color:#000;">
    <div class="" align="center">
      <img class="img-responsive" src="https://developermen.com/assets/img/logoFooter.png" alt="">
    </div>
    <form name="loginform" id="loginform" action="" method="POST">
      <?php validarPassword($_GET);?>
      <div class="form-group" style="text-align:left;font-weight: normal;">
        <label for="user_login">Contraseña nueva<br/></label>
        <div class="input-group">
          <span class="input-group-addon"><i class="fa fa-lock" aria-hidden="true"></i></span>
          <input type="password" name="password" id="password" class="form-control" placeholder="Ingresa tu nueva contraseña" autocomplete="off" value="" size="20" required/>
          <div class="input-group-btn">
            <input type="hidden" name="" id="inputChange" value="0">
            <a class="btn btn-default" style="padding:10px;borde:1px solid #000;" onclick="return mostrarPassword();">
              <i id="ocultar" class="fa fa-eye-slash" aria-hidden="true"></i>
            </a>
          </div>
        </div>

        <div id="pswd_info" style="margin-left:0%;width:100%;position:relative">
          <h6>La contraseña debe cumplir los siguientes requisitos:</h6>
          <ul style="margin-left:3%;">
            <li id="letter" class="invalid">Al menos <strong>una letra</strong></li>
            <li id="number" class="invalid">Al menos <strong>un numero</strong></li>
            <li id="length" class="invalid">Al menos <strong>8 caracteres</strong></li>
          </ul>
        </div>

        <label for="user_login">Verificar contraseña<br/></label>
        <div class="input-group">
          <span class="input-group-addon"><i class="fa fa-lock" aria-hidden="true"></i></span>
          <input type="password" name="password2" id="username" class="form-control" placeholder="Verifica tu contraseña" value="" autocomplete="off" size="20" required/>
        </div>
        <!-- Mensajes -->
        <br>
        <div class='alert alert-danger animated swing' style="display:none;" id="errorContraseña"><i class='fa fa-info-circle animated pulse' aria-hidden='true'></i>
          <strong>La contraseña debe ser mayor a 8 carácteres</strong>
        </div>
        <div class='alert alert-danger animated shake' style="display:none;" id="noCoincide"><i class='fa fa-info-circle animated pulse' aria-hidden='true'></i>
          <strong>Las contraseñas no coinciden verifique nuevamente por favor</strong>
        </div>
        <div class='alert alert-success animated tada' style="display:none;" id="coincide"><i class='fa fa-info-circle animated pulse' aria-hidden='true'></i>
          <strong>Las contraseñas si coinciden</strong>
        </div>
        <p class="submit">
          <button class="btn btn-primary btn-block" type="submit" name="login" value="Enviar" id="enviar">ENVIAR</button>
          <?php
          if(@$_POST['login'] == 'Enviar'){
            actualizarPassword($_POST);
          }
          ?>
        </p>
      </form>
    </div>
    <!--<p class="regtext">No estas registrado? <a class="btn btn-success btn-xs rounded" href="register.php?msg=usuarioRedireccionadoLogin" >Registrate Aqu?</a></p>-->
  </div>
  <style media="screen">
  #facebook{color:#3b5998;}#facebook:hover{color:#3b5998;}
  #twitter{color:#1da1f2;}#twitter:hover{color:#1da1f2;}
  #google{color:#d95232;}#google:hover{color:#d95232;}
  #gitHub{color:#ffffffff;}#gitHub:hover{color:#ffffffff;}
  </style>
  <div class="" align="center" style="margin-top:2%;">
    <p style='text-align:center; color:rgb(156, 158, 158); opacity:2;'>© <?php echo $year ?> Developer Men Inc., 2014 - <?php echo $year ?> - All rights reserved.</p>
    <div align="center" style="color:#000;">
      <a id="facebook" data-toggle="tooltip" data-placement="top" title="Sigueme en Facebook" href="https://www.facebook.com/DeveloperMen/" target="_blank">
        <span class="fa-stack fa-lg">
          <i class="fa fa-circle fa-stack-2x"></i>
          <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
        </span>
      </a>
      <a id="twitter" data-toggle="tooltip" data-placement="top" title="Haz un Tweet sobre nosotros" href="https://twitter.com/developermen1" target="_blank">
        <span class="fa-stack fa-lg">
          <i class="fa fa-circle fa-stack-2x"></i>
          <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
        </span>
      </a>
      <a id="gitHub" data-toggle="tooltip" data-placement="top" title="Ve nuestros repositorios en Git Hub" href="https://github.com/DeveloperMen" target="_blank">
        <span class="fa-stack fa-lg">
          <i class="fa fa-circle fa-stack-2x"></i>
          <i style="color:#000;" class="fa fa-github fa-stack-1x fa-inverse"></i>
        </span>
      </a>
      <a id="google"data-toggle="tooltip" data-placement="top" title="Sigueme en Google Plus" href="https://plus.google.com/112465322804224047765" target="_blank">
        <span class="fa-stack fa-lg">
          <i class="fa fa-circle fa-stack-2x"></i>
          <i class="fa fa-google-plus fa-stack-1x fa-inverse"></i>
        </span>
      </a>
    </div>
  </div>
</div>
<!-- <script src="assets/js/scripts.js"></script> -->
<script src="assets/js/jquery-1.10.2.js?ver=<?php echo filemtime('assets/js/jquery-1.10.2.js');?>"></script>
<link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
<script type="text/javascript" src="assets/js/jquery.snow.js"></script>
<script type="text/javascript">
$(document).ready(function(){$('[data-toggle="tooltip"]').tooltip();});
</script>
<?php // include('includes/snow.php'); ?>
<script src="assets/js/newPassword.js?ver=<?php echo filemtime('assets/js/newPassword.js');?>"></script>
<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
</body>
</html>
<?php
// Funcion que borrar todas las cabeceras que se hayan podido enviar
ob_end_flush();
?>
