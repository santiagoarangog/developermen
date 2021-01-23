<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <!-- Android Icons -->
  <link rel="icon" type="image/png" sizes="57x57" href="../../assets/favicons/android-icon-144x144.png" />
  <link rel="icon" type="image/png" sizes="60x60" href="../../assets/favicons/android-icon-192x192.png"/>
  <link rel="icon" type="image/png" sizes="76x76" href="../../assets/favicons/android-icon-36x36.png"/>
  <link rel="icon" type="image/png" sizes="152x152" href="../../assets/favicons/android-icon-48x48.png"/>
  <link rel="icon" type="image/png" sizes="180x180" href="../../assets/favicons/android-icon-72x72.png"/>
  <link rel="icon" type="image/png" sizes="180x180" href="../../assets/favicons/android-icon-96x96.png"/>
  <!-- Android Icons -->
  <!-- Apple Icons -->
  <link rel="apple-touch-icon" type="image/png" sizes="114x114" href="../../assets/favicons/apple-icon-114x114.png"/>
  <link rel="apple-touch-icon" type="image/png" sizes="120x120" href="../../assets/favicons/apple-icon-120x120.png"/>
  <link rel="apple-touch-icon" type="image/png" sizes="144x144" href="../../assets/favicons/apple-icon-144x144.png"/>
  <link rel="apple-touch-icon" type="image/png" sizes="152x152" href="../../assets/favicons/apple-icon-152x152.png"/>
  <link rel="apple-touch-icon" type="image/png" sizes="180x180" href="../../assets/favicons/apple-icon-180x180.png"/>
  <link rel="apple-touch-icon" type="image/png" sizes="57x57" href="../../assets/favicons/apple-icon-57x57.png"/>
  <link rel="apple-touch-icon" type="image/png" sizes="72x72" href="../../assets/favicons/apple-icon-72x72.png"/>
  <link rel="apple-touch-icon" type="image/png" sizes="76x76" href="../../assets/favicons/apple-icon-76x76.png"/>
  <link rel="apple-touch-icon" type="image/png" sizes="precomposed" href="../../assets/favicons/apple-icon-precomposed.png"/>
  <link rel="apple-touch-icon" type="image/png" sizes="auto" href="../../assets/favicons/apple-icon.png"/>
  <!-- Apple Icons -->
  <!-- Favicon -->
  <link rel="icon" type="image/png" href="../../assets/favicons/favicon-16x16.png" sizes="16x16"/>
  <link rel="icon" type="image/png" href="../../assets/favicons/favicon-32x32.png" sizes="32x32"/>
  <link rel="icon" type="image/png" href="../../assets/favicons/favicon-96x96.png" sizes="96x96"/>
  <!-- Favicon -->
  <!-- Ms Icon -->
  <link rel="ms-icon" type="image/png" href="../../assets/favicons/ms-icon-70x70.png" sizes="70x70"/>
  <link rel="ms-icon" type="image/png" href="../../assets/favicons/ms-icon-144x144.png" sizes="144x144"/>
  <link rel="ms-icon" type="image/png" href="../../assets/favicons/ms-icon-150x150.png" sizes="150x150"/>
  <link rel="ms-icon" type="image/png" href="../../assets/favicons/ms-icon-310x310.png" sizes="310x310"/>
  <!-- Ms Icon -->
  <link rel="manifest" href="../../assets/favicons/manifest.json"/>
  <!-- Theme -->
  <meta name="msapplication-TileColor" content="#603cba"/>
  <meta name="msapplication-TileImage" content="../../assets/favicons/mstile-144x144.png"/>
  <meta name="msapplication-config" content="../../assets/favicons/browserconfig.xml"/>
  <meta name="theme-color" content="#ffffff"/>
  <!-- Theme -->
  <!-- Font?s -->
  <link async href='https://fonts.googleapis.com/css?family=Montserrat:400,700|Source+Sans+Pro:400,700,400italic,700italic' rel='stylesheet' type='text/css'/>
  <link async href='https://fonts.googleapis.com/css?family=Raleway:200,400,600' rel='stylesheet' type='text/css'/>
  <!-- Font?s -->
  <!-- URL Dispositivos Moviles-->
  <link rel="canonical" href="https://developermen.webcindario.com/admin/droupOut" />
  <!-- URL Dispositivos Moviles-->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>Darse de baja</title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
  <meta name="viewport" content="width=device-width" />
  <!-- Bootstrap core CSS     -->
  <link async rel="stylesheet" href="../assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css?ver=<?php echo filemtime('../assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css');?>"/>
  <link href="../assets/css/bootstrap.min.css?ver=<?php echo filemtime('../assets/css/bootstrap.min.css');?>" rel="stylesheet" />
  <!-- Animation library for notifications   -->
  <link href="../assets/css/animate.min.css?ver=<?php echo filemtime('../assets/css/animate.min.css');?>" rel="stylesheet"/>
  <!--  Light Bootstrap Table core CSS    -->
  <link href="../assets/css/light-bootstrap-dashboard.css?ver=<?php echo filemtime('../assets/css/light-bootstrap-dashboard.css');?>" rel="stylesheet"/>
  <!--  CSS for Demo Purpose, don't include it in your project     -->
  <link href="../assets/css/demo.css?ver=<?php echo filemtime('../assets/css/demo.css');?>" rel="stylesheet" />
  <link href="../assets/css/estilos.css?ver=<?php echo filemtime('../assets/css/estilos.css');?>" rel="stylesheet" />	<!--     Fonts and icons     -->
  <!-- <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet"> -->
  <link href='https://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
  <script src="../assets/js/jquery-1.10.2.js?ver=<?php echo filemtime('../assets/js/jquery-1.10.2.js');?>"></script>
  <script type="text/javascript" src="../../assets/js/jquery.snow.js"></script>
  <script type="text/javascript" src="../assets/js/jquery-ui.min.js"></script>
  <script type="text/javascript" src="../assets/js/localScripts.js"></script>
</head>
<body style=" margin-top:5%;overflow-x:hidden;overflow-y:hidden;">
  <?php
  include('../includes/snow.php');
  $usu = isset($_GET['usu'])?$_GET['usu']:'';
  include('../functions/functionsDropOut.php');
  ?>
  <div class="" style="padding:1%;text-align:center;">
    <div class="col-md-12">
      <div class="card">
        <div class="header" align="center">
          <h1 class="title">Darse de baja de <span style="font-family:Brush Script MT;">Developer Men</span></h1>
          <p class="category"> Correo Developer Men</p>
        </div>
        <div class="content">
          <div id="chartHours" class="ct-chart">
            <h3>Gracias <?php echo $usu; ?>...</h3>
            <h4>Aunque hoy te despedimos te recordaremos, gracias por la confianza puesta en Developer Men Inc.</h4>
            <h5>Esperamos verte de nuevo en Developer Men</h5>
          </div>
          <div class="">
            <p>¿Cambio de parecer?</p>
            <button class="btn" type="button" name="button">Actualizar</button>
          </div>
          <div class="footer">
            <hr>
            <div class="stats">
              <i class="fa fa-copyright" aria-hidden="true"></i> Developer Men Inc.|| 2017
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php if (@$_GET['action'] == 'dropOut'){cambiarPreferencias($_GET);} ?>
  </div>
</body>
</html>
