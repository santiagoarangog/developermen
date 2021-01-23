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
require_once("../../assets/template/headerExterno.php");
echo '<link rel="stylesheet" href="assets/css/login.css?ver='.filemtime('assets/css/login.css').'">';
include ('assets/functions/mensajes.php');
include ('assets/functions/recovery-password.php');
/*Seccion de requiridos que permiten el funcionamiento de todas las funciones en PHP en el documento*/
if(isset($_SESSION["session_username"])){
  header("Location: index?notify=active");
}
?>
<body style="background-image: url(https://developermen.com/assets/img/covers/bg-circles-1.svg);">
  <!-- CONTENT
  ================================================== -->
  <section class="section-border border-primary">
    <div class="container d-flex flex-column">
      <div class="row align-items-center justify-content-center no-gutters min-vh-100">
        <div class="col-10 col-md-6 col-lg-7 offset-md-1 order-md-2 mt-auto mt-md-0 pt-8 pb-4 py-md-11" data-aos="fade-left" data-aos-delay="200">
          <!-- Image -->
          <img src="https://developermen.com/assets/img/illustrations/floating.svg" alt="Página de Soporte &bull; Developer Men" class="img-fluid">
        </div>
        <div class="col-12 col-md-6 col-lg-4 order-md-1 mb-auto mb-md-0 pb-8 py-md-11">
          <!-- Heading -->
          <h1 class="mb-0 font-weight-bold text-center title">
            Restablecer contraseña
          </h1>
          <div class="card-border border-primary">
            <br>
            <!-- Text -->
            <div class="alert bd-callout bd-callout-danger font-size-875 mensajeReset">
              Ingrese el correo electrónico enlazado a la cuenta con que cuenta en nuestra plataforma para restablecer su contraseña.
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

            <!-- Form -->
            <form class="mb-6" id="form-reset" method="POST">
              <!-- Email -->
              <div class="form-group">
                <label for="email" class="font-weight-bold text-gray-600 font-size-875">
                  <i class="fas fa-caret-right"></i> Correo electrónico <span class="small" id="help"></span>
                </label>
                <input type="email" class="form-control" id="emailRecover" name="emailRecover" placeholder="name@address.com" required>
              </div>
              <!-- Submit -->
              <button class="btn btn-block btn-primary" type="button" name="reset" value="enviar" id="buttonReset" onclick="valEmailRecover();">
                Restablecer contraseña
              </button>

              <br>
              <div class='alert alert-danger alert-dismissible fade show font-size-875 mensaje' id='errorReset' style="display:none;">
               <i class="fas fa-exclamation-circle"></i>
               Usted cuenta con una solicitud pendiente para realizar una recuperación de contraseña&nbsp;
              </div>

              <div class='alert alert-success alert-dismissible fade show font-size-875 mensaje' id='successReset' style="display:none;">
               Se envío correctamente la información para restaurar su contraseña&nbsp;
              <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
              <span aria-hidden='true'>&times;</span>
              </button>
              </div>

            </form>
            <!-- Text -->
            <p class="mb-0 font-size-sm text-center text-muted">Recuerdas tu contraseña? <a href="login">Log in</a>.</p>
          </div>
        </div>
      </div> <!-- / .row -->
    </div> <!-- / .container -->
  </section>
  <?php
  $msgButton = "Ir al log in";
  $hrefButton = "login";
  include('assets/template/login-footer.php');
  ?>
