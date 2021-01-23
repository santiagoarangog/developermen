<?php $title = 'Cloud & Hosting &bull; Developer Men';
require_once("assets/template/header.php");
?>
<body class="pt-10">
  <?php
  include("assets/features/modals.php");
  $flex = 'flex';
  require_once("assets/template/navbar.php");
  ?>
  <!-- WELCOME
  ================================================== -->
  <section class="pt-8 pb-11 pt-md-9 pb-md-12 py-lg-14 bg-light bg-between" style="background-image: url(assets/img/illustrations/undraw_secure_data_0rwp.svg), url(assets/img/illustrations/undraw_secure_server_s9u8.svg);">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12 col-md-10 col-lg-7 text-center" data-aos="fade-up">

          <!-- Image (mobile) -->
          <img src="assets/img/illustrations/undraw_Security_on_ff2u.svg" alt="..." class="img-fluid mb-6 d-lg-none">

          <!-- Heading -->
          <h1 class="display-2 font-weight-bold">
            Diseñado para ser seguro.
          </h1>

          <!-- Text -->
          <p class="font-size-lg text-muted mb-6 mb-md-8">
            Las empresas con visión de futuro utilizan nuestro servicio de copia de seguridad en la nube para garantizar la fiabilidad y seguridad de los datos.
          </p>

          <!-- Button -->
          <button class="btn btn-primary mr-1 lift" data-toggle="modal" data-target="#modalCloud">
            Empezar <i class="fe fe-arrow-right ml-3"></i>
          </button>
          <a href="#mas" class="btn btn-primary-soft lift scrl-down">
            Aprende más
          </a>

        </div>
      </div> <!-- / .row -->
    </div> <!-- / .container -->
  </section>

  <!-- SHAPE
  ================================================== -->
  <div class="position-relative" >
    <div class="shape shape-bottom shape-fluid-x svg-shim text-white">
      <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"/>
      </svg>
    </div>
  </div>

  <!-- PRICING
  ================================================== -->
  <section class="mt-n8">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-4" data-aos="fade-up" data-aos-delay="50">

          <!-- Card -->
          <div class="card shadow-light-lg mb-6 mb-md-0 lift lift-lg">
            <div class="card-body">

              <!-- Badge -->
              <span class="badge badge-pill badge-primary-desat badge-float badge-float-outside">
                CO $2,269/mes
              </span>

              <!-- Heading -->
              <h4 class="font-weight-bold">
                Hosting compartido
              </h4>

              <!-- Text -->
              <p class="text-muted">
                Asequible, escalable y de alto rendimiento. La solución perfecta para pequeñas aplicaciones.
              </p>

              <!-- Link -->
              <a href="#!" class="font-size-sm font-weight-bold text-decoration-none">
                Iniciar una prueba de 30 días <i class="fe fe-arrow-right ml-3"></i>
              </a>

            </div>
          </div>

        </div>
        <div class="col-12 col-md-4" data-aos="fade-up" data-aos-delay="100">

          <!-- Card -->
          <div class="card shadow-light-lg mb-6 mb-md-0 lift lift-lg">
            <div class="card-body">

              <!-- Badge -->
              <span class="badge badge-pill badge-primary-desat badge-float badge-float-outside">
                CO $12,619/mes
              </span>

              <!-- Heading -->
              <h4 class="font-weight-bold">
                Servidores VPS
              </h4>

              <!-- Text -->
              <p class="text-muted">
                Obtén recursos dedicados para hacer crecer tus aplicaciones
              </p>

              <!-- Link -->
              <a href="#!" class="font-size-sm font-weight-bold text-decoration-none">
                Iniciar una prueba de 30 días <i class="fe fe-arrow-right ml-3"></i>
              </a>

            </div>
          </div>

        </div>
        <div class="col-12 col-md-4" data-aos="fade-up" data-aos-delay="150">

          <!-- Card -->
          <div class="card shadow-light-lg lift lift-lg">
            <div class="card-body">

              <!-- Badge -->
              <span class="badge badge-pill badge-primary-desat badge-float badge-float-outside">
                CO $2,809/mes
              </span>

              <!-- Heading -->
              <h4 class="font-weight-bold">
                Dominios
              </h4>

              <!-- Text -->
              <p class="text-muted">
                Busca el nombre perfecto para tu sitio web.
              </p>

              <!-- Link -->
              <a href="#!" class="font-size-sm font-weight-bold text-decoration-none">
                Busca tu dominio ahora <i class="fe fe-arrow-right ml-3"></i>
              </a>

            </div>
          </div>

        </div>
      </div> <!-- / .row -->
    </div> <!-- / .container -->
  </section>

  <!-- CONTROL
  ================================================== -->
  <section class="pt-8 pt-md-11" id="mas">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12 col-md-10 col-lg-8 text-center">

          <!-- Preheading -->
          <h6 class="text-uppercase text-primary font-weight-bold">
            Control completo
          </h6>

          <!-- Heading -->
          <h1 class="font-weight-bold">
            Monitorear y analizar patrones de uso.
          </h1>

          <!-- Text -->
          <p class="font-size-lg text-muted mb-7">
            Realice un seguimiento de lo que está sucediendo en su proyecto, cambie los permisos y ejecute informes con sus datos en cualquier parte del mundo.
          </p>

        </div>
      </div> <!-- / .row -->
      <div class="row">
        <div class="col-12 order-md-2">

          <!-- Macbook + iPhone -->
          <div class="device-combo device-combo-macbook-iphonex mb-6 mb-md-0">

            <!-- Macbook -->
            <div class="device device-macbook">
              <img src="assets/img/screenshots/desktop/analytics.jpg" class="device-screen" alt="...">
              <img src="assets/img/devices/macbook.svg" class="img-fluid" alt="...">
            </div>

            <!-- iPhone -->
            <div class="device device-iphonex">
              <img src="assets/img/screenshots/mobile/dashkit-alt.jpg" class="device-screen" alt="...">
              <img src="assets/img/devices/iphonex.svg" class="img-fluid" alt="...">
            </div>

          </div>

        </div>
      </div> <!-- / .row -->
    </div> <!-- / .container -->
  </section>

  <!-- STATS
  ================================================== -->
  <section class="pt-8 pt-md-11">
    <div class="container">
      <div class="row">
        <div class="col-12">

          <!-- Card -->
          <div class="card-group card-border card-border-lg border-primary shadow-light-lg">
            <div class="card">
              <div class="card-body">

                <!-- Heading -->
                <h2 class="font-weight-bold text-center mb-0">
                  <span data-toggle="countup" data-from="0.00" data-to="0.03" data-decimals="2" data-aos data-aos-id="countup:in"></span> Seg.
                </h2>

                <!-- Text -->
                <p class="text-center text-muted mb-0">
                  Tiempo de respuesta
                </p>

              </div>
            </div>
            <div class="card border-left-md">
              <div class="card-body">

                <!-- Heading -->
                <h2 class="font-weight-bold text-center mb-0">
                  0
                </h2>

                <!-- Text -->
                <p class="text-center text-muted mb-0">
                  Violaciones de datos
                </p>

              </div>
            </div>
            <div class="card border-left-md">
              <div class="card-body">

                <!-- Heading -->
                <h2 class="font-weight-bold text-center mb-0">
                  <span data-toggle="countup" data-from="0.00" data-to="99.99" data-decimals="2" data-aos data-aos-id="countup:in"></span>%
                </h2>

                <!-- Text -->
                <p class="text-center text-muted mb-0">
                  Tiempo de actividad global
                </p>

              </div>
            </div>
            <div class="card border-left-md">
              <div class="card-body">

                <!-- Heading -->
                <h2 class="font-weight-bold text-center mb-0">
                  <span data-toggle="countup" data-from="0" data-to="5" data-aos data-aos-id="countup:in"></span>+
                </h2>

                <!-- Text -->
                <p class="text-center text-muted mb-0">
                  Terabytes
                </p>

              </div>
            </div>
          </div>

        </div>
      </div> <!-- / .row -->
    </div> <!-- / .container -->
  </section>

  <!-- INTEGRATION
  ================================================== -->
  <section class="py-8 py-md-11">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12 col-md-10 col-lg-8 text-center">

          <!-- Preheading -->
          <h6 class="text-uppercase text-gray-500 font-weight-bold">
            Integración perfecta
          </h6>

          <!-- Heading -->
          <h1 class="font-weight-bold">
            La transferencia de datos es sólo unos pocos clics.
          </h1>

          <!-- Text -->
          <p class="font-size-lg text-muted mb-7 mb-md-9">
            Si ya no somos la solución adecuada para usted, le permitiremos exportar y tomar sus datos en cualquier momento y por cualquier motivo.
          </p>

        </div>
      </div> <!-- / .row -->
      <div class="row no-gutters mb-7 mb-md-9">
        <div class="col-12 col-md-4 text-center">

          <div class="row mb-5">
            <div class="col">

              <!-- Placeholder -->

            </div>
            <div class="col-auto">

              <!-- Icon -->
              <div class="icon text-primary mb-3">

                <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                  <!-- Generator: Sketch 52.2 (67145) - http://www.bohemiancoding.com/sketch -->
                  <title>Stockholm-icons / General / User</title>
                  <desc>Created with Sketch.</desc>
                  <g id="Stockholm-icons-/-General-/-User" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <polygon id="Shape" points="0 0 24 0 24 24 0 24"></polygon>
                    <path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" id="Mask" fill="#335EEA" opacity="0.3"></path>
                    <path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" id="Mask-Copy" fill="#335EEA"></path>
                  </g>
                </svg>
              </div>

            </div>
            <div class="col">

              <!-- Divider -->
              <hr class="d-none d-md-block">

            </div>
          </div> <!-- / .row -->

          <!-- Headin -->
          <h3 class="font-weight-bold">
            Crea tu cuenta
          </h3>

          <!-- Text -->
          <p class="text-muted mb-6 mb-md-0">
            Nuestro registro es muy simple. Solo requerimos la información básica de su empresa y el tipo de almacenamiento de datos que desea.
            <p class="font-size-sm text-center text-gray-500 mb-0">
              * (Ten presente que debes haber adquirido al menos un servicio con nosotros)
            </p>
          </p>

        </div>
        <div class="col-12 col-md-4 text-center">

          <div class="row mb-5">
            <div class="col">

              <!-- Divider -->
              <hr class="d-none d-md-block">

            </div>
            <div class="col-auto">

              <!-- Icon -->
              <div class="icon text-primary mb-3">

                <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                  <!-- Generator: Sketch 52.2 (67145) - http://www.bohemiancoding.com/sketch -->
                  <title>Stockholm-icons / Files / Cloud-upload</title>
                  <desc>Created with Sketch.</desc>
                  <g id="Stockholm-icons-/-Files-/-Cloud-upload" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <polygon id="Shape" points="0 0 24 0 24 24 0 24"></polygon>
                    <path d="M5.74714567,13.0425758 C4.09410362,11.9740356 3,10.1147886 3,8 C3,4.6862915 5.6862915,2 9,2 C11.7957591,2 14.1449096,3.91215918 14.8109738,6.5 L17.25,6.5 C19.3210678,6.5 21,8.17893219 21,10.25 C21,12.3210678 19.3210678,14 17.25,14 L8.25,14 C7.28817895,14 6.41093178,13.6378962 5.74714567,13.0425758 Z" id="Combined-Shape" fill="#335EEA" opacity="0.3"></path>
                    <path d="M11.1288761,15.7336977 L11.1288761,17.6901712 L9.12120481,17.6901712 C8.84506244,17.6901712 8.62120481,17.9140288 8.62120481,18.1901712 L8.62120481,19.2134699 C8.62120481,19.4896123 8.84506244,19.7134699 9.12120481,19.7134699 L11.1288761,19.7134699 L11.1288761,21.6699434 C11.1288761,21.9460858 11.3527337,22.1699434 11.6288761,22.1699434 C11.7471877,22.1699434 11.8616664,22.1279896 11.951961,22.0515402 L15.4576222,19.0834174 C15.6683723,18.9049825 15.6945689,18.5894857 15.5161341,18.3787356 C15.4982803,18.3576485 15.4787093,18.3380775 15.4576222,18.3202237 L11.951961,15.3521009 C11.7412109,15.173666 11.4257142,15.1998627 11.2472793,15.4106128 C11.1708299,15.5009075 11.1288761,15.6153861 11.1288761,15.7336977 Z" id="Shape" fill="#335EEA" transform="translate(11.959697, 18.661508) rotate(-90.000000) translate(-11.959697, -18.661508) "></path>
                  </g>
                </svg>
              </div>

            </div>
            <div class="col">

              <!-- Divider -->
              <hr class="d-none d-md-block">

            </div>
          </div> <!-- / .row -->

          <!-- Headin -->
          <h3 class="font-weight-bold">
            Sube tus datos
          </h3>

          <!-- Text -->
          <p class="text-muted mb-6 mb-md-0">
            Te brindamos acceso a tu servicio por medio de FTP o credenciales como mas convenga en el caso concreto, permitimos crear cargar masivas en MYSQL o SQL.
            <p class="font-size-sm text-center text-gray-500 mb-0">
              * Te brindamos asistencia y asesoría en todo este proceso
            </p>
          </p>

        </div>
        <div class="col-12 col-md-4 text-center">

          <div class="row mb-5">
            <div class="col">

              <!-- Divider -->
              <hr class="d-none d-md-block">

            </div>
            <div class="col-auto">

              <!-- Icon -->
              <div class="icon text-primary mb-3">

                <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                  <!-- Generator: Sketch 52.2 (67145) - http://www.bohemiancoding.com/sketch -->
                  <title>Stockholm-icons / Navigation / Route</title>
                  <desc>Created with Sketch.</desc>
                  <g id="Stockholm-icons-/-Navigation-/-Route" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <polygon id="Shape" points="0 0 24 0 24 24 0 24"></polygon>
                    <path d="M8,7 C7.44771525,7 7,6.55228475 7,6 C7,5.44771525 7.44771525,5 8,5 L16,5 C18.209139,5 20,6.790861 20,9 C20,11.209139 18.209139,13 16,13 L8,13 C6.8954305,13 6,13.8954305 6,15 C6,16.1045695 6.8954305,17 8,17 L17,17 C17.5522847,17 18,17.4477153 18,18 C18,18.5522847 17.5522847,19 17,19 L8,19 C5.790861,19 4,17.209139 4,15 C4,12.790861 5.790861,11 8,11 L16,11 C17.1045695,11 18,10.1045695 18,9 C18,7.8954305 17.1045695,7 16,7 L8,7 Z" id="Path-110" fill="#335EEA" opacity="0.3"></path>
                    <path d="M9.79289322,3.79289322 C10.1834175,3.40236893 10.8165825,3.40236893 11.2071068,3.79289322 C11.5976311,4.18341751 11.5976311,4.81658249 11.2071068,5.20710678 L8.20710678,8.20710678 C7.81658249,8.59763107 7.18341751,8.59763107 6.79289322,8.20710678 L3.79289322,5.20710678 C3.40236893,4.81658249 3.40236893,4.18341751 3.79289322,3.79289322 C4.18341751,3.40236893 4.81658249,3.40236893 5.20710678,3.79289322 L7.5,6.08578644 L9.79289322,3.79289322 Z" id="Path-104" fill="#335EEA" transform="translate(7.500000, 6.000000) rotate(-270.000000) translate(-7.500000, -6.000000) "></path>
                    <path d="M18.7928932,15.7928932 C19.1834175,15.4023689 19.8165825,15.4023689 20.2071068,15.7928932 C20.5976311,16.1834175 20.5976311,16.8165825 20.2071068,17.2071068 L17.2071068,20.2071068 C16.8165825,20.5976311 16.1834175,20.5976311 15.7928932,20.2071068 L12.7928932,17.2071068 C12.4023689,16.8165825 12.4023689,16.1834175 12.7928932,15.7928932 C13.1834175,15.4023689 13.8165825,15.4023689 14.2071068,15.7928932 L16.5,18.0857864 L18.7928932,15.7928932 Z" id="Path-104-Copy" fill="#335EEA" transform="translate(16.500000, 18.000000) scale(1, -1) rotate(270.000000) translate(-16.500000, -18.000000) "></path>
                  </g>
                </svg>
              </div>

            </div>
            <div class="col">

              <!-- Placeholder -->

            </div>
          </div> <!-- / .row -->

          <!-- Headin -->
          <h3 class="font-weight-bold">
            Elija dónde transferir
          </h3>

          <!-- Text -->
          <p class="text-muted mb-0">
            Simplemente seleccione a dónde le gustaría transferir sus datos y seremos el proceso de migración al instante.
            <p class="font-size-sm text-center text-gray-500 mb-0">
              * Cree sus propias carpetas y bases de datos, siempre con la asesoria del equipo de Expertos de Developer Men
            </p>
          </p>

        </div>
      </div> <!-- / .row -->
      <div class="row">
        <div class="col-12">

          <!-- Text -->
          <p class="font-size-sm text-center text-gray-500 mb-0">
            * Este proceso puede ser de minutos u horas dependiendo la necesidad del usuario y la cantidad de datos a almacenar.
          </p>

        </div>
      </div> <!-- / .row -->
    </div> <!-- / .container -->
  </section>

  <!-- SHAPE
  ================================================== -->
  <div class="position-relative">
    <div class="shape shape-bottom shape-fluid-x svg-shim text-dark">
      <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"/>
      </svg>
    </div>
  </div>

  <!-- SOLUTION
  ================================================== -->
  <section class="py-8 pt-md-11 pb-md-12 bg-dark">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12 col-md-10 col-lg-8 text-center">

          <!-- Preheading -->
          <h6 class="text-uppercase text-success font-weight-bold">
            Una solución todo en uno
          </h6>

          <!-- Heading -->
          <h1 class="font-weight-bold text-white">
            Uno de los mejores servicios de Hosting
          </h1>

          <!-- Text -->
          <p class="font-size-lg text-gray-500 mb-7 mb-md-9">
            Una ventanilla única para el almacenamiento.
          </p>

        </div>
      </div> <!-- / .row -->
      <div class="row">
        <div class="col-12 col-md-6 col-lg-3 mb-4">

          <!-- Heading -->
          <h4 class="font-weight-bold text-white mb-5">
            Integraciones
          </h4>

          <!-- List -->
          <div class="d-flex">

            <!-- Badge -->
            <div class="badge badge-rounded-circle badge-success mt-1 mr-4">
              <i class="fe fe-check"></i>
            </div>

            <!-- Text -->
            <p class="text-gray-300">
              Web Hosting
            </p>

          </div>
          <div class="d-flex">

            <!-- Badge -->
            <div class="badge badge-rounded-circle badge-success mt-1 mr-4">
              <i class="fe fe-check"></i>
            </div>

            <!-- Text -->
            <p class="text-gray-300">
              Hosting CMS
            </p>

          </div>
          <div class="d-flex">

            <!-- Badge -->
            <div class="badge badge-rounded-circle badge-success mt-1 mr-4">
              <i class="fe fe-check"></i>
            </div>

            <!-- Text -->
            <p class="text-gray-300">
              Hosting Para Tienda Online
            </p>

          </div>
          <div class="d-flex">

            <!-- Badge -->
            <div class="badge badge-rounded-circle badge-success mt-1 mr-4">
              <i class="fe fe-check"></i>
            </div>

            <!-- Text -->
            <p class="text-gray-300 mb-6 mb-lg-0">
              Hosting Wordpress
            </p>

          </div> <!-- / .row -->

        </div>
        <div class="col-12 col-md-6 col-lg-3 mb-4">

          <!-- Heading -->
          <h4 class="font-weight-bold text-white mb-5">
            Almacenamiento
          </h4>

          <!-- List -->
          <div class="d-flex">

            <!-- Badge -->
            <div class="badge badge-rounded-circle badge-success mt-1 mr-4">
              <i class="fe fe-check"></i>
            </div>

            <!-- Text -->
            <p class="text-gray-300">
              SQL ó MySQL
            </p>

          </div>
          <div class="d-flex">

            <!-- Badge -->
            <div class="badge badge-rounded-circle badge-success mt-1 mr-4">
              <i class="fe fe-check"></i>
            </div>

            <!-- Text -->
            <p class="text-gray-300">
              Acceso al sistema de archivos
            </p>

          </div>
          <div class="d-flex">

            <!-- Badge -->
            <div class="badge badge-rounded-circle badge-success mt-1 mr-4">
              <i class="fe fe-check"></i>
            </div>

            <!-- Text -->
            <p class="text-gray-300">
              Almacenamiento según contratación
            </p>

          </div>
          <div class="d-flex">

            <!-- Badge -->
            <div class="badge badge-rounded-circle badge-success mt-1 mr-4">
              <i class="fe fe-check"></i>
            </div>

            <!-- Text -->
            <p class="text-gray-300 mb-6 mb-lg-0">
              Mongo and NoSQL
            </p>

          </div> <!-- / .row -->

        </div>
        <div class="col-12 col-md-6 col-lg-3 mb-4">

          <!-- Heading -->
          <h4 class="font-weight-bold text-white mb-5">
            Servicios
          </h4>

          <!-- List -->
          <div class="d-flex">

            <!-- Badge -->
            <div class="badge badge-rounded-circle badge-success mt-1 mr-4">
              <i class="fe fe-check"></i>
            </div>

            <!-- Text -->
            <p class="text-gray-300">
              Copia de seguridad semanal,mensual ó diaria
            </p>

          </div>
          <div class="d-flex">

            <!-- Badge -->
            <div class="badge badge-rounded-circle badge-success mt-1 mr-4">
              <i class="fe fe-check"></i>
            </div>

            <!-- Text -->
            <p class="text-gray-300">
              Informe de acceso a la plataforma
            </p>

          </div>
          <div class="d-flex">

            <!-- Badge -->
            <div class="badge badge-rounded-circle badge-success mt-1 mr-4">
              <i class="fe fe-check"></i>
            </div>

            <!-- Text -->
            <p class="text-gray-300">
              Segmentación de permisos
            </p>

          </div>
          <div class="d-flex">

            <!-- Badge -->
            <div class="badge badge-rounded-circle badge-success mt-1 mr-4">
              <i class="fe fe-check"></i>
            </div>

            <!-- Text -->
            <p class="text-gray-300 mb-6 mb-lg-0">
              Gestor de correos corporativos
            </p>

          </div> <!-- / .row -->

        </div>
        <div class="col-12 col-md-6 col-lg-3 mb-4">

          <!-- Heading -->
          <h4 class="font-weight-bold text-white mb-5">
            Plus +
          </h4>

          <!-- List -->
          <div class="d-flex">

            <!-- Badge -->
            <div class="badge badge-rounded-circle badge-success mt-1 mr-4">
              <i class="fe fe-check"></i>
            </div>

            <!-- Text -->
            <p class="text-gray-300">
              Creador de sitios web
            </p>

          </div>
          <div class="d-flex">

            <!-- Badge -->
            <div class="badge badge-rounded-circle badge-success mt-1 mr-4">
              <i class="fe fe-check"></i>
            </div>

            <!-- Text -->
            <p class="text-gray-300">
              Creador de sitios Wordpress
            </p>

          </div>
          <div class="d-flex">

            <!-- Badge -->
            <div class="badge badge-rounded-circle badge-success mt-1 mr-4">
              <i class="fe fe-check"></i>
            </div>

            <!-- Text -->
            <p class="text-gray-300">
              Correo empresarial
            </p>

          </div>
          <div class="d-flex">

            <!-- Badge -->
            <div class="badge badge-rounded-circle badge-success mt-1 mr-4">
              <i class="fe fe-check"></i>
            </div>

            <!-- Text -->
            <p class="text-gray-300 mb-0">
              Servidores alojados en Europa
            </p>

          </div> <!-- / .row -->

        </div>
      </div> <!-- / .row -->
    </div> <!-- / .container -->
  </section>

  <!-- CTA
  ================================================== -->
  <section class="pt-6 pt-md-8">
    <div class="container pb-6 pb-md-8 border-bottom">
      <div class="row align-items-center">
        <div class="col-12 col-md">

          <!-- Heading -->
          <h3 class="font-weight-bold mb-1">
            Asegure sus datos en minutos.
          </h3>

          <!-- Text -->
          <p class="font-size-lg text-muted mb-6 mb-md-0">
            Prevenga las brechas de seguridad y ahorre dinero.
          </p>

        </div>
        <div class="col-12 col-md-auto">

          <!-- Button -->
          <a href="#!" class="btn btn-primary-soft mr-1 lift">
            Leer más
          </a>

          <button class="btn btn-primary lift" data-toggle="modal" data-target="#modalCloud">
            Solicitar
          </button>

        </div>
      </div> <!-- / .row -->
    </div> <!-- / .container -->
  </section>

  <?php
  $bg = "white";
  include("assets/template/footer.php"); ?>
</body>
</html>
