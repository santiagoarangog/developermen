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
$title = 'Nueva Contraseña &bull; Portal Soporte &bull; Developer Men';
$canonical="https://developermen.com/index";
require_once("../../assets/template/headerExterno.php");
echo '<link rel="stylesheet" href="assets/css/login.css?ver='.filemtime('assets/css/login.css').'">';
include ('assets/functions/mensajes.php');
include ('assets/functions/new-password.php');
/*Seccion de requiridos que permiten el funcionamiento de todas las funciones en PHP en el documento*/
if(isset($_SESSION["session_devmen"])){
  header("Location: index");
}
validarPassword(isset($_GET),$row);
?>
<style media="screen">
@import url('https://fonts.googleapis.com/css?family=Dancing+Script&display=swap');
:root{
  --developermen: #7362DE;
}
.title{
  font-family: 'Dancing Script', cursive;
  font-weight: bold;
  font-size: 30px;
  margin: 0;
  margin-bottom: 0%;
  color: var(--developermen);
}
</style>
<body class="bg-cover" style="background-image: url(https://developermen.com/assets/img/covers/bg-pattern.png);">
  <div class="main-content">
    <div class="container min-vh-100 d-flex align-items-center">
      <div class="col py-5">
        <div class="row justify-content-center">
          <div class="col-md-8 col-lg-6">
            <div>
              <div class="mb-5 text-center">
                <h3 class="font-weight-bold">Nueva contraseña
                  <span class="title2"><br> Soporte Developer Men</span></h3>
                  <p class="text-muted mb-0">Ingresa una contraseña de fácil asimilación</p>
                </div>
                <span class="clearfix"></span>
                <form role="form" id="form-new">
                  <div class="form-group">
                    <label class="form-control-label">Correo electrónico:</label>
                    <div class="input-group input-group-merge">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="far fa-user"></i></span>
                      </div>
                      <input type="email" class="form-control" id="input-email" placeholder="name@example.com" value="<?php echo isset($row['DS_EMAIL'])?$row['DS_EMAIL']:''; ?>" readonly>
                      <input type="hidden" class="form-control" id="correo" name="correo" placeholder="name@example.com" value="<?php echo isset($row['DS_EMAIL'])?$row['DS_EMAIL']:''; ?>">
                    </div>
                  </div>
                  <div class="form-group mb-4">
                    <label class="form-control-label">Nueva contraseña:</label>
                    <div class="input-group input-group-merge">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-lock"></i></span>
                      </div>
                      <input type="password" class="form-control" name="password" id="clave" placeholder="*********" required>
                    </div>
                  </div>

                  <div id="pswd_info" style="width:90%;margin-left:2%;position:absolute;z-index:999;">
                    <h6>La contraseña debe cumplir los siguientes requisitos:</h6>
                    <ul style="margin-left:3%;">
                      <li id="letter" class="text-danger">Al menos <strong>una letra</strong></li>
                      <li id="number" class="text-danger">Al menos <strong>un numero</strong></li>
                      <li id="length" class="text-danger"><span id="icon-length"></span>Al menos <strong>8 caracteres</strong></li>
                    </ul>
                  </div>

                  <div class="form-group">
                    <label class="form-control-label">Confirmar contraseña:</label>
                    <div class="input-group input-group-merge">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-key"></i></span>
                      </div>
                      <input type="password" class="form-control" name="password2" id="password2" placeholder="********" required>
                    </div>
                  </div>

                  <div class="custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input" id="change">
                    <label class="custom-control-label font-weight-bold" for="change" id="labelChange"> | Mostrar contraseña</label>
                  </div>
                  <div class="mt-4">
                    <button type="button" class="btn btn-block btn-primary" id="enviar">Actualizar</button></div>
                  </form>

                  <!-- Mensajes -->
                  <br>
                  <div class='alert alert-danger' style="display:none;" id="noCoincide"><i class='fa fa-info-circle animated pulse' aria-hidden='true'></i>
                    <strong>Las contraseñas no coinciden verifique nuevamente por favor</strong>
                  </div>

                  <div class='alert alert-success alert-dismissible fade show font-size-875 mensaje' id='success' style="display:none;">
                    Se envío correctamente la información para restaurar su contraseña&nbsp;
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                      <span aria-hidden='true'>&times;</span>
                    </button>
                  </div>

                  <div class="mt-4 text-center"><small>Recuerdas tu contraseña?</small>
                    <a href="login" class="small font-weight-bold">Log In</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <a href="#" class="back-to-top" data-aos="fade-left" data-aos-delay="150"><i class="fas fa-chevron-up"></i></a>
        <!-- JAVASCRIPT
        ================================================== -->
        <!-- Libs JS -->
        <script src="https://developermen.com/assets/libs/jquery/dist/jquery.min.js"></script>

        <script src="https://developermen.com/assets/libs/purpose/js/purpose.core.js"></script>
        <!-- Page JS -->
        <script src="https://developermen.com/assets/libs/jquery-countdown/js/jquery.countdown.min.js"></script>
        <!-- Purpose JS -->
        <script src="https://developermen.com/assets/libs/purpose/js/purpose.js"></script>
        <!-- Demo JS - remove it when starting your project -->
        <script src="https://developermen.com/assets/libs/purpose/js/demo.js"></script>

        <script src="assets/js/ajaxFunctions.js?ver=<?php echo filemtime('assets/js/ajaxFunctions.js'); ?>"></script>
        <script src="assets/js/login.js?ver=<?php echo filemtime('assets/js/login.js'); ?>"></script>
        <script src="assets/js/newPassword.js?ver=<?php echo filemtime('assets/js/newPassword.js'); ?>"></script>';
      </body>
      </html>
