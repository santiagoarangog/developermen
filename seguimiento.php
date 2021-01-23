<?php
require("assets/template/headerPurpose.php");
// include('assets/functions/seguimiento.php');
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
  $bg = "bg-sky";
  $color = "text-dark font-weight-bold";
}
else{
  $mensaje = "Buenas Noches";
  $mensaje2 = "Te deseamos una feliz noche y dulces sueños";
  $bg = "bg-dark";
  $color = "text-white font-weight-bold";
}
if (isset($_GET['contacto'])) {
  $contacto = $_GET['contacto'];
  $_SESSION['oidContacto'] = $_GET['contacto'];
}else {
  $contacto = isset($_SESSION['oidContacto'])?$_SESSION['oidContacto']:'';
}
if (isset($contacto) != '') {
  // validarContacto($contacto,$result);
  $usuario = $result;
}else {
  $usuario = "Developer Men";
}
if ($result == '') {
  echo '<div class="alert alert-modern alert-dark mensaje" id="mensajeAlert">
  <span class="badge badge-warning badge-pill">
  Error!
  </span>
  <span class="alert-content">No cuentas con un proceso de contacto, te redirigiremos automáticamente a nuestro sitio principal</span>
  </div>';
  echo "<script>setTimeout(function(){location.href='index'},2000);</script>";
}
?>
<body>
  <div class="header header-transparent " id="header-main" >
    <!-- Topbar -->
    <div id="navbar-top-main" class="navbar-top  navbar-dark bg-dark border-bottom">
      <div class="container px-0">
        <div class="navbar-nav align-items-center">
          <div class="d-none d-lg-inline-block">
            <span class="navbar-text mr-3 title" style="font-size:1.5em;color:var(--developermen);">Developer Men &bull; Seguimiento del contacto</span>
          </div>
          <div class="ml-auto">
            <ul class="nav">
              <li class="nav-item">
                <a class="nav-link" href="./utility/support/index" target="_blank">Soporte</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="main-content">
    <!-- Header (account) -->
    <section class="header-account-page bg-1 d-flex align-items-end <?php echo $bg; ?> bg-seguimiento" style="background-image:url(assets/img/patterns/grafico-bg.svg);" data-offset-top="#header-main">
      <!-- Header container -->
      <div class="container pt-4 pt-lg-0">
        <div class="row justify-content-end">
          <div class=" col-lg-8">
            <!-- Salute + Small stats -->
            <div class="row align-items-center mb-4">
              <div class="col-lg-12 col-xl-12 mb-4 mb-md-0">
                <span class="h2 mb-0 <?php echo $color; ?> d-block"><?php echo $mensaje.', '.(isset($result['DS_NOMBRE'])?$result['DS_NOMBRE']:$usuario); ?></span>
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
                  <img alt="Image placeholder" src="assets/img/patterns/grafico-bg.svg" class="card-img-top">
                </div>
                <a href="#" class="mx-auto">
                  <img alt="Image placeholder" src="assets/img/devMen-head.png" class="card-profile-image avatar rounded-circle shadow hover-shadow-lg bg-white">
                </a>
                <div class="card-body p-3 pt-0 text-center">
                  <h5 class="mb-0"><?php echo (isset($result['DS_NOMBRE'])?$result['DS_NOMBRE']:$usuario); ?></h5>
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
                    <img alt="Image placeholder" src="assets/img/devMen-head.png">
                  </a>
                  <div class="avatar-content">
                    <h6 class="mb-0">Developer Men</h6>
                    <small class="d-block text-muted"><i class="fas fa-info-circle mr-1"></i>A tener en cuenta</small>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <p>
                  Hola <?php echo (isset($result['DS_NOMBRE'])?$result['DS_NOMBRE']:$usuario); ?> por medio de esta pestaña puedes conocer por los pasos de gestión que ha pasado tu contacto realizado en nuestra plataforma...
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
                    <?php
                    listarContacto($result['OID']);
                    ?>
                    <?php
                    listarGestion($result['OID']);
                    ?>
                  </div><!--End Timeline-->
                </div>
                  <?php //listarCategorias(); ?>
                  <?php listarAsesores($result['OID']); ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <footer class="footer p-0 footer-light bg-section-secondary" id="footer-main">
    <div class="container">
      <div class="py-4">
        <div class="row align-items-md-center">
          <div class="col-sm-12 col-md-4 mb-4 mb-md-0">
            <div class="d-flex align-items-center">
              <p class="text-sm mb-0">&copy; Developer Men - <?php echo date('Y'); ?>. All rights reserved.</p>
            </div>
          </div>
          <div class="col-sm-12 col-md-4 mb-4 mb-sm-0">
            <ul class="nav justify-content-center">
              <li class="nav-item">
                <a class="nav-link" href="./utility/support/index" target="_blank">Soporte</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="terms" target="_blank">Terminos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="terms" target="_blank">Privacidad</a>
              </li>
            </ul>
          </div>
          <div class="col-sm-12 col-md-4">
            <ul class="nav justify-content-center justify-content-md-end mt-3 mt-md-0">
              <li class="nav-item">
                <a class="nav-link" href="https://dribbble.com/developermen" target="_blank">
                  <i class="fab fa-dribbble"></i>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://www.instagram.com/developermen1" target="_blank">
                  <i class="fab fa-instagram"></i>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://github.com/developermen" target="_blank">
                  <i class="fab fa-github"></i>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://www.facebook.com/developermen" target="_blank">
                  <i class="fab fa-facebook"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <div class="customizer">
    <a href="#modal-customizer" class="btn btn-success btn-lg btn-icon-only rounded-circle text-white hover-scale-110 shadow-lg mr-3" data-toggle="modal">
      <span class="btn-inner--icon">
        <i class="fab fa-whatsapp"></i>
      </span>
    </a>
  </div>
  <!-- Customizer modal -->
  <div class="modal fade fixed-right" id="modal-customizer" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-vertical" role="document">
      <form class="modal-content" id="form-wpp">
        <div class="modal-body">
          <!-- Close -->
          <button type="button" class="close" data-dismiss="modal" aria-label="Close" data-toggle="tooltip" data-placement="left" title="Cerrar Chat whatsapp">
            <span aria-hidden="true">&times;</span>
          </button>
          <div class="text-center mx-auto mt-4 mb-5 " style="width: 80px;" style="background-image: url(https://developermen.com/assets/img/covers/hero-bg-back.jpg);">
            <img alt="Image placeholder" src="assets/img/devMen-head.png" class="svg-inject img-fluid">
            <span class="avatar-child avatar-badge bg-success"></span>
          </div>
          <h5 class="text-center mb-2">Comunicate con nosotros por whatsapp</h5>
          <p class="text-center mb-4 font-size-875">
            Si vez que no hemos cumplido a cabalidad con lo que necesitas o los tiempos de contacto se han visto infrigidos, hazlo saber por nuestro canal de whatsapp
          </p>
          <small class="text-justify">Recuerda que nuestros tiempos de contacto van desde 24 a 48 horas</small>
          <hr class="mb-4">
          <h6 class="mb-1">Número de contacto Developer Men:</h6>
          <p class="small text-muted mb-3">
            <input class="form-control" name="" type="text" class="form-control input-mask" data-mask="(+00) 000 000 0000" placeholder="(+57) 000 000 0000" value="+573113111538" disabled>
            <input class="form-control" name="phone" type="hidden" class="form-control input-mask" data-mask="(00) 000 000 0000" value="573113111538">
            <input class="form-control" name="oidContacto" type="hidden" class="form-control input-mask" value="<?php echo isset($result['OID'])?$result['OID']:''; ?>">
          </p>

          <h6 class="mb-1">Asunto:</h6>
          <p class="small text-muted mb-3">
            <textarea class="form-control" name="asuntoWpp" rows="8" cols="80" id="asuntoWpp"></textarea>
          </p>
        </div>
        <div class="modal-footer border-0">
          <button type="button" class="btn btn-block btn-success mt-auto" id="enviarWpp">
            Enviar mensaje
          </button>
        </div>

        <div class="alert alert-success fade show font-size-875" role="alert" data-aos="fade-right" style="width: 100%; border-radius: 0; display:none;position:fixed;margin-bottom:0;" id="msgWpp">
          <i class="far fa-comments"></i>&nbsp;
          Abrimos una nueva ventana donde podras dar inicio al chat con nosotros&nbsp;
        </div>
      </form>
    </div>
  </div>
  <script src="https://developermen.com/assets/libs/jquery-mask/jquery-mask.min.js"></script>
  <script src="https://developermen.com/assets/libs/@fancyapps/fancybox/dist/jquery.fancybox.min.js"></script>
  <script src="https://developermen.com/assets/libs/purpose/js/purpose.js"></script>
  <script src="https://developermen.com/assets/libs/purpose/js/demo.js"></script>
  <script src="https://developermen.com/assets/js/main.js"></script>
  <script async src="https://developermen.com/assets/libs/pace.js/pace.min.js"></script>
</body>
</html>
