<?php
//Inician variables que se envian al Header para gestionarlas cuando se comparte la pagina
//Seo de La Pagina
$description = "Nuestro objetivo es cuidar de usted. ¿Necesita ayuda con la instalación, encontrar un error o simplemente necesita una aclaración sobre una plataforma desarrollada por nosotros? Estaremos allí para echar una mano.";
//Seo para facebook
$ogTitle = "Soporte &bull; Developer Men";
$ogDescription="Nuestro objetivo es cuidar de usted. ¿Necesita ayuda con la instalación, encontrar un error o simplemente necesita una aclaración sobre una plataforma desarrollada por nosotros? Estaremos allí para echar una mano.";
$ogUrl="www.developermen.com";
$ogSiteName="Desarrollo Web a la Medida, Planes de Compra, Diseño Grafico, Plantillas Web, Blog de Desarrollo Web.";
$ogArticleTag="Soporte &bull; Developer Men";
$ogArticleSection="Soporte";
$ogImage="https://developermen.com/assets/img/media/developerMenInicio.png";
//Seo para Twitter
$twitterDescription="Nuestro objetivo es cuidar de usted. ¿Necesita ayuda con la instalación, encontrar un error o simplemente necesita una aclaración sobre una plataforma desarrollada por nosotros? Estaremos allí para echar una mano.";
$twitterTitle="Soporte &bull; Developer Men";
$twitterImage="https://developermen.com/assets/img/media/developerMenInicio.png";
$active = 'Soporte';
$title = 'Soporte &bull; Developer Men';
$canonical="https://developermen.com/index";
require_once("assets/template/header.php");
include ('assets/functions/mensajes.php');
date_default_timezone_set('America/Bogota');
$hora = date("H"); /* <-- H = Hora de 00 horas a 23 horas por default en PHP, entonces sabiendo esto seguimos abajo*/
if($hora < 12){
  $mensaje = "Buenos Dias";
  $mensaje2 = "Esperamos que tengas un gran día!";
  $bg = "bg-gray-100";
  $color = "text-dark font-weight-bold";
}
else if($hora < 18 ){
  $mensaje = "Buenas Tardes";
  $mensaje2 = "Esperamos que tu día vaya maravillosamente";
  $bg = "bg-gray-200";
  $color = "text-dark font-weight-bold";
}
else{
  $mensaje = "Buenas Noches";
  $mensaje2 = "Te deseamos una feliz noche y dulces sueños";
  $bg = "bg-dark";
  $color = "text-white font-weight-bold";
}
?>
<body class="docs" onload="limpiarGet()">
  <?php
  include("assets/template/features/navbar.php");
  include("assets/template/features/sidebar.php");
  ?>
  <div class="main-content"><!-- Main content -->
    <!-- Header (account) -->
    <section class="header-account-page bg-1 d-flex align-items-end <?php echo $bg; ?> bg-seguimiento" style="background-image:url(../../assets/img/patterns/grafico-bg.svg);" data-offset-top="#header-main">
      <!-- Header container -->
      <div class="container pt-4 pt-lg-0">
        <div class="row justify-content-end">
          <div class=" col-lg-8">
            <!-- Salute + Small stats -->
            <div class="row align-items-center mb-4">
              <div class="col-lg-12 col-xl-12 mb-4 mb-md-0">
                <span class="h2 mb-0 <?php echo $color; ?> d-block"><?php echo $mensaje?>, Developer Men</span>
                <span class="<?php echo $color; ?>"><?php echo $mensaje2; ?></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="pt-5 pt-lg-0">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <div data-toggle="sticky" data-sticky-offset="30" data-negative-margin=".card-profile-cover">
              <div class="card card-profile border-0">
                <div class="card-profile-cover">
                  <img alt="Image placeholder" src="../../assets/img/patterns/grafico-bg.svg" class="card-img-top">
                </div>
                <a href="#" class="mx-auto">
                  <img alt="Image placeholder" src="../../assets/img/devMen-head.png" class="card-profile-image avatar rounded-circle shadow hover-shadow-lg bg-white">
                </a>
                <div class="card-body p-3 pt-0 text-center">
                  <h5 class="mb-0">Developer Men</h5>
                  <span class="d-block text-muted mb-3"><i class="fas fa-envelope-open-text"></i> Usuario contacto</span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-8 mt-lg-5">
            <!-- Timeline -->
            <div class="card">
              <div class="card-header pt-4 pb-2">
                <div class="d-flex align-items-center">
                  <a href="#" class="avatar rounded-circle shadow">
                    <img alt="Image placeholder" src="../../assets/img/devMen-head.png">
                  </a>
                  <div class="avatar-content">
                    <h6 class="mb-0">Developer Men</h6>
                    <small class="d-block text-muted"><i class="far fa-clock mr-2"></i>A tener en cuenta</small>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <p>
                  Hola Developer Men, por medio de esta pestaña puedes conocer por los pasos de gestión que ha pasado tu contacto realizado en nuestra plataforma...
                </p>
                <br>
                <div class="delimiter-top">
                  <!-- Title -->
                  <h6 class="mb-4 text-muted">
                    <i class="fas fa-users-cog mr-1"></i> Procesos de gestión
                  </h6>
                  <!-- Timeline -->
                  <hr class="delimiter-top">
                  <br>
                  <div class="timeline timeline-one-side" data-timeline-content="axis"><!--Start Timeline-->
                  </div><!--End Timeline-->
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div><!-- Main content -->
  <?php include("assets/template/footer.php"); ?>
