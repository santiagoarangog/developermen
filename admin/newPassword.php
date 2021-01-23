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
  <title>Administración Developer Men &bull; Recuperar contraseña</title>
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
  <link rel="canonical" href="https://developermen.com/admin/login" />
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
</head>
<body class="bodyDiv">
  <?php
  /*Seccion de requiridos que permiten el funcionamiento de todas las funciones en PHP en el documento*/
  require('functions/conexion.php');
  include('functions/functionsLogin.php');
  include('functions/mensajes.php');
  ?>
  <div class="wrap" style="color:#000;background:rgb(255, 255, 255,.9);">
    <div class="" align="center">
      <img class="img-responsive" src="https://developermen.com/assets/img/logoFooter.png" alt="">
    </div>
    <form name="loginform" id="loginform" action="" method="POST">
      <div class="form-group" style="text-align:left;font-weight: normal;">
        <label for="user_login">Dirección de correo electrónico<br/></label>
        <div class="input-group">
          <span class="input-group-addon"><i class="fa fa-at" aria-hidden="true"></i></span>
          <input type="email" name="email" id="username" class="form-control" placeholder="Ingresa tu correo electronico" value="" size="20" required/>
        </div>
        <span class="help-block">Ingresa el correo electronico enlazado a tu cuenta</span>
        <p class="submit">
          <button class="btn strong btn-login btn-block" type="submit" name="login" value="Enviar">ENVIAR</button>
          <?php
          if(@$_POST['login'] == 'Enviar'){
            enviarInformacion($_POST);
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
    <p style='text-align:center; color:#ffffff; opacity:2;'>© <?php echo date('Y'); ?> <a href="https://developermen.com" target="_blank" style="color:rgb(255, 255, 255);">Developer Men Inc</a>., 2014 - <?php echo date('Y'); ?> - All rights reserved.</p>
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
  <script src="assets/js/login.js?ver=<?php echo filemtime('assets/js/login.js');?>"></script>
  <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
  </body>
  </html>
  <?php
  // Funcion que borrar todas las cabeceras que se hayan podido enviar
  ob_end_flush();
  ?>
