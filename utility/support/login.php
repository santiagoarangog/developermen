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
/*Seccion de requiridos que permiten el funcionamiento de todas las funciones en PHP en el documento*/
session_start();
if(isset($_SESSION["session_devmen"])){
  header("Location: index?user=loggeado");
}
?>
<body onload="limpiarGet()" class="bg-cover" style="background-image: url(https://developermen.com/assets/img/covers/bg-pattern.png);">
  <!-- Login Sistema de Votación -->
  <section class="section-border border-info">
    <div class="container d-flex flex-column">
      <div class="row align-items-center justify-content-center no-gutters min-vh-100">
        <div class="col-10 col-md-6 col-lg-7 offset-md-1 order-md-2 mt-auto mt-md-0 pt-8 pb-4 py-md-11" data-aos="fade-left" data-aos-delay="200">
          <!-- Image -->
          <img src="https://developermen.com/assets/img/illustrations/support.svg" alt="Página de Soporte &bull; Developer Men" class="img-fluid d-none d-sm-block">
          <img src="https://developermen.com/assets/img/illustrations/support3.svg" alt="Página de Soporte &bull; Developer Men" class="img-fluid d-block d-sm-none">
        </div>
        <div class="col-12 col-md-6 col-lg-4 order-md-1 mb-auto mb-md-0 pb-8 py-md-11">
          <div align="center">
            <!-- Heading -->
            <h1 class="mb-0 font-weight-bold text-center title">
              Soporte &bull; Developer Men
            </h1>
          </div>
          <div class="card">
            <!-- <div class="card-body"> -->
            <br>
            <form name="loginform" id="loginform" method="POST" onsubmit="return checkSubmit();">
              <div class="form-group">
                <label for="usuario" class="font-weight-bold text-gray-600 font-size-875"><i class="fas fa-caret-right"></i> Correo electrónico</label>
                <div class="form-label-group">
                  <div class="input-group input-group-merge">
                    <div class="input-group input-group-sm mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text font-weight-normal" id="basic-addon1"><i class="fas fa-at"></i></span>
                      </div>
                      <input type="email" required class="form-control" maxlength="100" name="usuario" id="usuario" placeholder="Correo electrónico" value="<?php echo isset($_POST['usuario'])?$_POST['usuario']:''; ?>" size="20" autocomplete="off"/>
                    </div>
                  </div>
                </div>
                <div class="d-flex align-items-center justify-content-between">
                  <div>
                    <label for="clave" class="font-weight-bold text-gray-600 font-size-875"><i class="fas fa-caret-right"></i> Contraseña</label>
                  </div>
                  <div class="mb-2">
                    <a href="password-reset" class="small text-muted text-underline--dashed border-primary text-decoration-none">La olvidaste?</a>
                  </div>
                </div>

                <!-- <label for="clave" class="font-weight-bold text-gray-600 font-size-875"><i class="fas fa-caret-right"></i> Contraseña</label> -->
                <div class="form-label-group">
                  <div class="input-group input-group-merge">
                    <div class="input-group input-group-sm mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-lock"></i></span>
                      </div>
                      <input type="password" required class="form-control" maxlength="12" name="password" id="clave" placeholder="Ingresa tu Contraseña" size="20" size="20" autocomplete="off"/>
                    </div>
                  </div>
                </div>

                <div class="custom-control custom-switch">
                  <input type="checkbox" class="custom-control-input" id="change">
                  <label class="custom-control-label font-weight-bold" for="change" id="labelChange"> | Mostrar contraseña</label>
                </div>
                <br>
                <div class="submit">
                  <button class="btn btn-primary btn-block btn-sm" name="botonenviar" type="button" id="botonenviar" value="Enviar" onclick="validaFormWeBasica();" data-loading-text="Enviando..." autocomplete="off">Enviar</button>
                </div>
              </form>
              <br>
              <p class="mb-0 font-size-sm text-center text-muted">No recuerdas tu contraseña? <a style="text-decoration:none;" href="password-reset">Restablecerla</a>.</p>
              <br>
              <div class="alert alert-danger alert-dismissible fade show font-size-875 mensajeLogin" role="alert" data-aos="fade-right" data-aos-delay="200" style="display:none;" id="usuarioError">
                <i class="fas fa-user-times"></i>&nbsp;
                Nombre de usuario ó contraseña invalida!&nbsp;
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="alert alert-success alert-dismissible fade show font-size-875 mensajeLogin" role="alert" data-aos="fade-right" data-aos-delay="200" style="display:none;" id="usuarioSuccess">
                <i class="fas fa-user-check"></i>&nbsp;
                Bienvenido al sitio web de soporte de Developer Men&nbsp;
              </div>
            </div>
            <!-- </div> -->
          </div>
        </div>
      </div> <!-- / .row -->
    </div> <!-- / .container -->
  </section>
  <?php if (@$_GET['accion'] == 'Cerrar'){
    $tipoMsg = 'success';
    $accion = '';
    $msg = '<i class="fas fa-lock"></i> Sesion cerrada correctamente';
    mensajesAplicaciones($tipoMsg, $accion, $msg);
  } ?>
  <?php if (@$_GET['msg'] == 'nologgeado'){
    $tipoMsg = 'warning';
    $accion = '';
    $msg = '<i class="fas fa-info-circle"></i> Debe iniciar la sesión primero';
    mensajesAplicaciones($tipoMsg, $accion, $msg);
  } ?>
  <?php if (@$_GET['tipomsg'] == 'timeOut'){
    $tipoMsg = 'warning';
    $accion = '';
    $msg = '<i class="fas fa-hourglass"></i> Tiempo máximo de inactividad cumplido.<br/><i class="fas fa-user-clock"></i> Debe iniciar la sesión nuevamente.';
    mensajesAplicaciones($tipoMsg, $accion, $msg);
  }
  ?>
  <?php
  $msgButton = "Ir al sitio web principal";
  $hrefButton = "https://developermen.com#utm_source=supportSite&utm_medium=siteSupport&utm_campaign=support&utm_term=global&utm_content=supportSite";
  include('assets/template/login-footer.php');
  ?>
