<?php
require('urls.php');
$urlContact = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
if ($urlContact == '/beta/contact' || $urlContact == '/contact' || $urlContact == '/beta/contact.php') {
  $display = 'style="display:none;"';
} else {
  $display = '';
}
if (isset($_GET['user']) == 'admin') {
  $displayDocument = "";
} else {
  $displayDocument = "style='display:none;'";
}
?>
<!-- NAVBAR================================================== -->
<?php
/*Indicamos si queremos que la barra de navegación sea amplia o en estilo comprimido*/
if ((isset($flex) ? $flex : 'flex') == 'flex') {
  $flexDiv = "";
  $flexDivEnd = "";
} else {
  $flexDiv = "<div class='container'>";
  $flexDivEnd = "</div>";
}
/*Indicamos si queremos que la barra de navegación este fija o se mueva junto con el scroll*/
if ((isset($fixed) ? $fixed : 'fixed') == 'fixed') {
  $fixedTop = "fixed-top";
  $div = "";
} else {
  $fixedTop = "sticky-top";
  $div = "";
}
/*Indicamos el estilo de la barra de navegación*/
if ((isset($navbar) ? $navbar : 'light') == 'light') {
  $navbarBg = "navbar-light bg-white border-bottom";
} else {
  $navbarBg = "navbar-dark";
  if ((isset($dark) ? $dark : 'bg') == 'bg') {
    $dark = "bg-dark";
  } else {
    $dark = "";
  }
}
/*Indicamos que nuestra barra de navegación es collapsable*/
if ((isset($flex) ? $flex : 'container') != 'flex' && (isset($togglable) ? $togglable : 'false') == 'true') {
  $togglable = "navbar-dark navbar-togglable fixed-top";
} else {
  $togglable = "";
}
?>
<nav class="navbar navbar-expand-lg <?php echo $navbarBg . ' ' . $dark . ' ' . $fixedTop . ' ' . $togglable; ?> ">
  <?php echo $flexDiv; ?>

  <!-- Brand -->
  <a class="navbar-brand" href="<?php echo $home; ?>">
    <!-- <img src="./assets/img/brand.svg" class="navbar-brand-img" alt="..."> -->
    <h3 class="title">Developer Men <span class="font-weight-bold d-none d-lg-inline" style="font-size:17px;"><i class="fas fa-caret-right"></i> Diseño y desarrollo Web</span> </h3>
  </a>

  <!-- Toggler -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Collapse -->
  <div class="collapse navbar-collapse" id="navbarCollapse">

    <!-- Toggler -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <i class="fe fe-x"></i>
    </button>

    <!-- Navigation -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarLandings" data-toggle="dropdown" href="#" aria-haspopup="true" aria-expanded="false">
          <i class="fe fe-lg fe-shopping-bag"></i> Nuestros Servicios <span style="font-size:10px;"><i class="fas fa-chevron-down"></i></span>
        </a>
        <div class="dropdown-menu dropdown-menu-xl p-0" aria-labelledby="navbarLandings">
          <div class="row no-gutters">
            <div class="col-12 col-lg-6">
              <div class="dropdown-img-left" style="background-image: url(https://images.unsplash.com/photo-1551033406-611cf9a28f67?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=634&q=80);">

                <!-- Heading -->
                <h4 class="font-weight-bold text-white mb-0">
                  Quieres ver un resumen?
                </h4>

                <!-- Text -->
                <p class="font-size-sm text-white">
                  Ver todas las páginas a la vez.
                </p>

                <!-- Button -->
                <a href="<?php echo $pages; ?>" class="btn btn-sm btn-white shadow-dark fonFt-size-sm">
                  Ver todas las páginas
                </a>

              </div>
            </div>
            <div class="col-12 col-lg-6">
              <div class="dropdown-body">
                <div class="row no-gutters">
                  <div class="col-6">

                    <!-- Heading -->
                    <h6 class="dropdown-header">
                      Servicios
                    </h6>

                    <!-- List -->
                    <a class="dropdown-item" href="<?php echo $cloud; ?>">
                      Cloud & Hosting
                    </a>
                    <a class="dropdown-item" href="<?php echo $subdomain; ?>">
                      Subdominio
                    </a>
                    <a class="dropdown-item mb-5" href="<?php echo $webMedida; ?>">
                      Web a la médida
                    </a>

                    <!-- Heading -->
                    <h6 class="dropdown-header">
                      Apps
                    </h6>

                    <!-- List -->
                    <a class="dropdown-item" href="<?php echo $desktopApp; ?>">
                      Soporte
                    </a>
                    <a class="dropdown-item" href="<?php echo $actualizando; ?>">
                      Academy
                    </a>
                    <a class="dropdown-item" href="<?php echo $actualizando; ?>">
                      App Votación
                    </a>

                  </div>
                  <div class="col-6">

                    <!-- Heading -->
                    <h6 class="dropdown-header">
                      Web
                    </h6>

                    <!-- List -->
                    <a class="dropdown-item" data-toggle="smooth-scroll" href="<?php echo $webCortesia; ?>">
                      Cortesía
                    </a>
                    <a class="dropdown-item" data-toggle="smooth-scroll" href="<?php echo $webBasica; ?>">
                      Basica
                    </a>
                    <a class="dropdown-item" data-toggle="smooth-scroll" href="<?php echo $webProfesional; ?>">
                      Profesional
                    </a>
                    <a class="dropdown-item" href="./enterprise">
                      Empresarial
                    </a>
                    <hr>
                    <!-- List -->
                    <a class="dropdown-item" data-toggle="smooth-scroll" href="<?php echo $pricing; ?>">
                      Precios
                    </a>

                  </div>
                </div> <!-- / .row -->
              </div>
            </div>
          </div> <!-- / .row -->
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarPages" data-toggle="dropdown" href="#" aria-haspopup="true" aria-expanded="false">
          <img src="assets/img/devices/laptop.png" class="img-fluid" alt="" width="25" height="auto">
          Web <span style="font-size:10px;"><i class="fas fa-chevron-down"></i></span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg" aria-labelledby="navbarPages">
          <div class="row no-gutters">
            <div class="col-6 col-lg-4">

              <!-- Heading -->
              <h6 class="dropdown-header">
                Demos
              </h6>

              <!-- List -->
              <a class="dropdown-item" href="https://developermen.com/demos/wordpress/wordpress/" target="_blank">
                Wordpress
              </a>
              <a class="dropdown-item mb-5" href="https://developermen.com/demos/shopOnline/es/" target="_blank">
                Prestashop
              </a>

              <!-- Heading -->
              <h6 class="dropdown-header">
                Compañia
              </h6>

              <!-- List -->
              <a class="dropdown-item" href="<?php echo $company; ?>">
                Quienés somos
              </a>
              <a class="dropdown-item" href="<?php echo $pricing; ?>">
                Precios
              </a>
              <a class="dropdown-item mb-5 mb-lg-0" href="<?php echo $terms; ?>">
                Términos
              </a>

            </div>
            <div class="col-6 col-lg-4">

              <!-- Heading -->
              <h6 class="dropdown-header">
                Demos Páginas
              </h6>

              <!-- List -->
              <a class="dropdown-item" href="<?php echo $webCortesiaDemo; ?>">
                Web Cortesia
              </a>
              <a class="dropdown-item mb-5" href="<?php echo $actualizando; ?>">
                Try
              </a>

              <!-- Heading -->
              <h6 class="dropdown-header">
                Contacto
              </h6>

              <!-- List -->
              <a class="dropdown-item" href="<?php echo $contact; ?>">
                Contáctenos
              </a>
              <a class="dropdown-item" href="tel:3113111538">
                (+57) 311 311 1538
              </a>
              <a class="dropdown-item" href="https://api.whatsapp.com/send?phone=573113111538&text=Hola%20Developer%20Men" target="_blank">
                Whatsapp
              </a>

            </div>
            <div class="col-6 col-lg-4">

              <!-- Heading -->
              <h6 class="dropdown-header">
                Blog
              </h6>

              <!-- List -->
              <a class="dropdown-item" href="<?php echo $actualizando; ?>">
                Ir al Blog
              </a>
              <a class="dropdown-item" href="<?php echo $actualizando; ?>">
                Último articulo
              </a>
              <a class="dropdown-item" href="<?php echo $actualizando; ?>">
                Más vistos
              </a>
              <a class="dropdown-item" href="<?php echo $actualizando; ?>">
                Buscador
              </a>

            </div>
          </div>
        </div> <!-- / .row -->
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarAccount" data-toggle="dropdown" href="#" aria-haspopup="true" aria-expanded="false">
          <img src="assets/img/devices/smartphone.png" class="img-fluid" alt="" width="25" height="auto"> Móvil <span style="font-size:10px;"><i class="fas fa-chevron-down"></i></span>
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarAccount">
          <li class="dropdown-item dropright">
            <a class="dropdown-link dropdown-toggle" data-toggle="dropdown" href="#">
              Sign In
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="./signin-cover.html">
                Side Cover
              </a>
              <a class="dropdown-item" href="./signin-illustration.html">
                Illustration
              </a>
              <a class="dropdown-item" href="./signin.html">
                Basic
              </a>
              <a class="dropdown-item" data-toggle="modal" href="#modalSigninHorizontal">
                Modal Horizontal
              </a>
              <a class="dropdown-item" data-toggle="modal" href="#modalSigninVertical">
                Modal Vertical
              </a>
            </div>
          </li>
          <li class="dropdown-item dropright">
            <a class="dropdown-link dropdown-toggle" data-toggle="dropdown" href="#">
              Sign Up
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="./signup-cover.html">
                Side Cover
              </a>
              <a class="dropdown-item" href="./signup-illustration.html">
                Illustration
              </a>
              <a class="dropdown-item" href="./signup.html">
                Basic
              </a>
              <a class="dropdown-item" data-toggle="modal" href="#modalSignupHorizontal">
                Modal Horizontal
              </a>
              <a class="dropdown-item" data-toggle="modal" href="#modalSignupVertical">
                Modal Vertical
              </a>
            </div>
          </li>
          <li class="dropdown-item dropright">
            <a class="dropdown-link dropdown-toggle" data-toggle="dropdown" href="#">
              Password Reset
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="./password-reset-cover.html">
                Side Cover
              </a>
              <a class="dropdown-item" href="./password-reset-illustration.html">
                Illustration
              </a>
              <a class="dropdown-item" href="./password-reset.html">
                Basic
              </a>
            </div>
          </li>
          <li class="dropdown-item dropright">
            <a class="dropdown-link dropdown-toggle" data-toggle="dropdown" href="#">
              Error
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="./error-cover.html">
                Side Cover
              </a>
              <a class="dropdown-item" href="./error-illustration.html">
                Illustration
              </a>
              <a class="dropdown-item" href="./error.html">
                Basic
              </a>
            </div>
          </li>
        </ul>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarAccount" data-toggle="dropdown" href="#" aria-haspopup="true" aria-expanded="false">
          <i class="fe fe-lg fe-code"></i> Playground <span style="font-size:10px;"><i class="fas fa-chevron-down"></i></span>
        </a>
        <div class="dropdown-menu dropdown-menu-xl p-0" aria-labelledby="navbarAccount">
          <div class="row no-gutters">
            <div class="col-12 col-lg-6">
              <div class="dropdown-img-left" style="background-image: url(https://images.unsplash.com/photo-1535551951406-a19828b0a76b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1046&q=80);">

                <!-- Heading -->
                <h4 class="font-weight-bold text-white mb-0 text-center">
                  Debes tener en cuenta lo siguiente
                </h4>
                <br>
                <!-- Text -->
                <p class="font-size-sm text-white">
                  Esta herramienta esta enfocada para Desarrolladores o personas apasionadas por el desarrollo
                </p>

              </div>
            </div>
            <div class="col-12 col-lg-6">
              <div class="dropdown-body">
                <div class="row no-gutters">
                  <div class="col-6">

                    <!-- Heading -->
                    <h6 class="dropdown-header">
                      Páginas Error
                    </h6>

                    <!-- List -->
                    <a class="dropdown-item" href="/demos/404">
                      Error 404
                    </a>
                    <a class="dropdown-item" href="#">
                      Error Cover
                    </a>
                    <a class="dropdown-item mb-5" href="#">
                      Error Ilustración
                    </a>

                  </div>
                  <div class="col-6">
                    <!-- Heading -->
                    <h6 class="dropdown-header">
                      Landing Pages
                    </h6>
                  </div>
                </div> <!-- / .row -->

                <div class="row no-gutters">
                  <div class="col-12 col-lg-12">
                    <!-- Heading -->
                    <h6 class="dropdown-header text-center">
                      Herramientas
                      <hr>
                    </h6>
                  </div>
                </div>
                <div class="row no-gutters">
                  <div class="col-6">

                    <ul>
                      <li class="dropdown-item dropright">
                        <a class="dropdown-link dropdown-toggle" data-toggle="dropdown" href="#">
                          Imagenes
                        </a>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="./signin-cover.html">
                            Side Cover
                          </a>
                          <a class="dropdown-item" href="./signin-illustration.html">
                            Illustration
                          </a>
                          <a class="dropdown-item" href="./signin.html">
                            Basic
                          </a>
                          <a class="dropdown-item" data-toggle="modal" href="#modalSigninHorizontal">
                            Modal Horizontal
                          </a>
                          <a class="dropdown-item" data-toggle="modal" href="#modalSigninVertical">
                            Modal Vertical
                          </a>
                        </div>
                      </li>
                    </ul>

                  </div>
                </div> <!-- / .row -->

              </div>
            </div>
          </div> <!-- / .row -->
        </div>

      <li class="nav-item dropdown" <?php echo isset($displayDocument) ? $displayDocument : ''; ?>>
        <a class="nav-link dropdown-toggle" id="navbarDocumentation" data-toggle="dropdown" href="#" aria-haspopup="true" aria-expanded="false">
          Documentación <span style="font-size:10px;"><i class="fas fa-chevron-down"></i></span>
        </a>
        <div class="dropdown-menu dropdown-menu-md" aria-labelledby="navbarDocumentation">
          <div class="list-group list-group-flush">
            <a class="list-group-item" href="./docs/index.html">

              <!-- Icon -->
              <div class="icon icon-sm text-primary">

                <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                  <!-- Generator: Sketch 52.2 (67145) - http://www.bohemiancoding.com/sketch -->
                  <title>Stockholm-icons / General / Clipboard</title>
                  <desc>Created with Sketch.</desc>
                  <g id="Stockholm-icons-/-General-/-Clipboard" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <rect id="bound" x="0" y="0" width="24" height="24"></rect>
                    <path d="M8,3 L8,3.5 C8,4.32842712 8.67157288,5 9.5,5 L14.5,5 C15.3284271,5 16,4.32842712 16,3.5 L16,3 L18,3 C19.1045695,3 20,3.8954305 20,5 L20,21 C20,22.1045695 19.1045695,23 18,23 L6,23 C4.8954305,23 4,22.1045695 4,21 L4,5 C4,3.8954305 4.8954305,3 6,3 L8,3 Z" id="Combined-Shape" fill="#335EEA" opacity="0.3"></path>
                    <path d="M11,2 C11,1.44771525 11.4477153,1 12,1 C12.5522847,1 13,1.44771525 13,2 L14.5,2 C14.7761424,2 15,2.22385763 15,2.5 L15,3.5 C15,3.77614237 14.7761424,4 14.5,4 L9.5,4 C9.22385763,4 9,3.77614237 9,3.5 L9,2.5 C9,2.22385763 9.22385763,2 9.5,2 L11,2 Z" id="Combined-Shape" fill="#335EEA"></path>
                    <rect id="Rectangle-152" fill="#335EEA" opacity="0.3" x="7" y="10" width="5" height="2" rx="1"></rect>
                    <rect id="Rectangle-152-Copy" fill="#335EEA" opacity="0.3" x="7" y="14" width="9" height="2" rx="1"></rect>
                  </g>
                </svg>
              </div>

              <!-- Content -->
              <div class="ml-4">

                <!-- Heading -->
                <h6 class="font-weight-bold text-uppercase text-primary mb-0">
                UI KIT
                </h6>

                <!-- Text -->
                <p class="font-size-sm text-gray-700 mb-0">
                  Customizing and building
                </p>

              </div>

            </a>
            <a class="list-group-item" href="./docs/alerts.html">

              <!-- Icon -->
              <div class="icon icon-sm text-primary">

                <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                  <!-- Generator: Sketch 52.2 (67145) - http://www.bohemiancoding.com/sketch -->
                  <title>Stockholm-icons / Layout / Layout-4-blocks</title>
                  <desc>Created with Sketch.</desc>
                  <g id="Stockholm-icons-/-Layout-/-Layout-4-blocks" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <rect id="bound" x="0" y="0" width="24" height="24"></rect>
                    <rect id="Rectangle-7" fill="#335EEA" x="4" y="4" width="7" height="7" rx="1.5"></rect>
                    <path d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z" id="Combined-Shape" fill="#335EEA" opacity="0.3"></path>
                  </g>
                </svg>
              </div>

              <!-- Content -->
              <div class="ml-4">

                <!-- Heading -->
                <h6 class="font-weight-bold text-uppercase text-primary mb-0">
                  Components
                </h6>

                <!-- Text -->
                <p class="font-size-sm text-gray-700 mb-0">
                  Full list of components
                </p>

              </div>

            </a>
            <a class="list-group-item" href="./docs/changelog.html">

              <!-- Icon -->
              <div class="icon icon-sm text-primary">

                <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                  <!-- Generator: Sketch 52.2 (67145) - http://www.bohemiancoding.com/sketch -->
                  <title>Stockholm-icons / Files / File</title>
                  <desc>Created with Sketch.</desc>
                  <g id="Stockholm-icons-/-Files-/-File" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <polygon id="Shape" points="0 0 24 0 24 24 0 24"></polygon>
                    <path d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z" id="Combined-Shape" fill="#335EEA" opacity="0.3"></path>
                    <rect id="Rectangle" fill="#335EEA" x="6" y="11" width="9" height="2" rx="1"></rect>
                    <rect id="Rectangle-Copy" fill="#335EEA" x="6" y="15" width="5" height="2" rx="1"></rect>
                  </g>
                </svg>
              </div>

              <!-- Content -->
              <div class="ml-4">

                <!-- Heading -->
                <h6 class="font-weight-bold text-uppercase text-primary mb-0">
                  Changelog
                </h6>

                <!-- Text -->
                <p class="font-size-sm text-gray-700 mb-0">
                  Keep track of changes
                </p>

              </div>

              <!-- Badge -->
              <span class="badge badge-pill badge-primary-soft ml-auto">
                1.1.0
              </span>

            </a>
          </div>
        </div>
      </li>
    </ul>

    <!-- Button -->
    <button class="navbar-btn btn btn-sm btn-primary lift ml-auto" data-toggle="modal" data-target="#modalContactenos">
      Contáctenos
    </button>

  </div>

  <?php echo $flexDivEnd; ?>
</nav>
<?php echo $div; ?>
<div id="mensajeCookies">
  <div class="cookies" id="socialslide" style="position: fixed;" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">
    <div class="cookies-header" style="background:rgb(255, 255, 255);">
      <!-- <div class="rounded mr-2" style="height: 16px;width: 16px;background-color: red;"></div> -->
      <img src="assets/favicons/favicon-32x32.png" class="rounded mr-2 img-responsive img-fluid" alt="...">
      <strong class="mr-auto">Developer Men Inc.</strong>
      <small id="minutos" style="color:rgb(194, 199, 197);">Hace<input type="button" value="" size="1" name="" disabled value="" id="inputMinute" style="background:transparent;border:none;color:rgb(194, 199, 197);"> minutos</small>
      <button type="button" class="ml-2 mb-1 close" data-dismiss="cookies" aria-label="Close">
        <!-- <span aria-hidden="true">&times;</span> -->
      </button>
    </div>
    <div class="cookies-body" style="text-align:justify;background:rgb(255, 255, 255);">
      <h6 style="font-weight:bold;text-align:center;"><img src="assets/img/icons/promotion.png" class="img-fluid"> Esta página web utiliza Cookies</h6>
      El continuar navegando significa que estas de acuerdo con <a href="https://developermen.com/cookies" id="hip_0" style="color:#7362DE;font-weight:bold;">Nuestra Politica de Cookies.</a>
      <br>
      <hr>
      <a href="#" class="btn btn-cookie btn-sm btn-block" data-dismiss="cookies" name="button" style="align:center;" onclick="aceptarCookies();">Aceptar</a>
    </div>
  </div>
</div>

<div class="toast" style="position: fixed;bottom:1%;left: 0;margin-left: 0.5%;" role="alert" aria-live="polite" aria-atomic="true" data-delay="10000">
  <div class="toast-header">
    <div class="rounded mr-2" style="height: 16px;width: 16px;background-color: #7362DE;"></div>
    <strong class="mr-auto">Gracias por confiar en nosotros!</strong>
    <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  <div class="toast-body">
    <h6>Si deseas saber o conocer más sobre la seguridad de nuestro sitio web frente a tus datos personales escribenos a <a href="https://developermen.com/beta/contact" id="hip_0" style="color:#7362DE;font-weight:bold;">contactanos@developermen.com</a></h6>
  </div>
</div>