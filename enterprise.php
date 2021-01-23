<?php $title = 'Developer Men &bull; Productos empresariales';
require_once("assets/template/header.php");
?>
<body>

  <?php
  include("assets/features/modals.php");
  $flex = 'flex';
  require_once("assets/template/navbar.php");
  ?>
  <!-- WELCOME
  ================================================== -->
  <section class="py-10 py-md-14 bg-primary overlay overlay-black overlay-80 bg-cover top" id="welcome" style="background-image: url(https://images.unsplash.com/photo-1467283492892-4326fa405008?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1267&q=80);">

    <!-- Shape -->
    <div class="shape shape-blur-3 svg-shim text-white">
      <svg viewBox="0 0 1738 487" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M0 0H1420.92C1420.92 0 2134.35 457.505 1420.92 485.868C707.502 514.231 0 0 0 0Z" fill="url(#paint0_linear)"/>
        <defs>
          <linearGradient id="paint0_linear" x1="0" y1="0" x2="1049.98" y2="912.68" gradientUnits="userSpaceOnUse">
            <stop stop-color="currentColor" stop-opacity="0.075"/>
            <stop offset="1" stop-color="currentColor" stop-opacity="0"/>
          </linearGradient>
        </defs>
      </svg>
    </div>

    <!-- Content -->
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12 col-md-10 col-lg-8 text-center">

          <!-- Heading -->
          <h1 class="display-3 font-weight-bold text-white">
            Desarrollo web a la medida
          </h1>
          <br>
          <!-- Text -->
          <p class="lead text-white mb-8">
            Las empresas con visión de futuro saben que tener una plataforma digital les permite llegar a mas clientes y mostrarse mas solida.
          </p>

          <!-- Button -->
          <button class="btn btn-white shadow lift" data-toggle="modal" data-target="#modalContactenos">
            Solicita la tuya
          </button>

        </div>
      </div> <!-- / .row -->
    </div> <!-- / .container -->

  </section>

  <!-- SHAPE
  ================================================== -->
  <div class="position-relative">
    <div class="shape shape-bottom shape-fluid-x svg-shim text-white">
      <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"/>
      </svg>
    </div>
  </div>

  <!-- ABOUT
  ================================================== -->
  <section class="pt-8 pt-md-10" id="about">
    <div class="container">
      <div class="row">
        <div class="col-12 text-center">

          <!-- Button -->
          <a href="#about" class="btn btn-white btn-rounded-circle shadow mt-n12 mt-md-n14 scrl-down" data-toggle="smooth-scroll">
            <i class="fe fe-arrow-down"></i>
          </a>

        </div>
      </div> <!-- / .row -->
      <div class="row justify-content-center">
        <div class="col-12 col-md-10 col-lg-8 text-center">

          <!-- Heading -->
          <h2 class="font-weight-bold">
            El centro de toda tú <span class="text-info">comunicación y trabajo.</span>
          </h2>

          <!-- Text -->
          <p class="font-size-lg text-muted mb-9">
            Developer Men es donde tú organización tiene la posibilidad <br> <span class="text-info" data-toggle="typed" data-options='{"strings": ["de sistematizar un proceso propio","de centralizar todo la información en una sola plataforma","dar a conocer tus últimos productos ó servicios", "vender tus productos","mantener enterados a tus empleados","brindar información relevante a tú compañia","crear espacios de resolución de problemas a tus clientes","brindar herramientas a tus empleados"]}'></span> <br> ,las posibilidades son infinitas, nos acoplamos a tus necesidades.
          </p>

        </div>
      </div> <!-- / .row -->
      <div class="row">
        <div class="col-12 col-lg-6">

          <!-- Item -->
          <div class="row align-items-center mb-8"data-aos="fade-up">
            <div class="col-4 col-lg-5">

              <!-- Image -->
              <img src="assets/img/illustrations/getting_coffee.svg" alt="..." class="img-fluid">

            </div>
            <div class="col-8 col-lg-7">

              <!-- Heading -->
              <h3 class="font-weight-bold mb-2">
                Conversaciones
              </h3>

              <!-- Text -->
              <p class="text-gray-700 mb-0">
                Comunícate con tu equipo en chats públicos o privados con personas o grupos.
              </p>

            </div>
          </div> <!-- / .row -->

          <!-- Item -->
          <div class="row align-items-center mb-8" data-aos="fade-up">
            <div class="col-4 col-lg-5">

              <!-- Image -->
              <img src="assets/img/illustrations/data.svg" alt="..." class="img-fluid">

            </div>
            <div class="col-8 col-lg-7">

              <!-- Heading -->
              <h3 class="font-weight-bold mb-2">
                Unificado
              </h3>

              <!-- Text -->
              <p class="text-gray-700 mb-0">
                Mantenga todo en un solo lugar y siéntase en paz y organizado en lugar de disperso.
              </p>

            </div>
          </div> <!-- / .row -->


        </div>
        <div class="col-12 col-lg-6">
          <!-- Item -->
          <div class="row align-items-center mb-8" data-aos="fade-up">
            <div class="col-4 col-lg-5">

              <!-- Image -->
              <img src="assets/img/illustrations/setup_analytics.svg" alt="..." class="img-fluid">

            </div>
            <div class="col-8 col-lg-7">

              <!-- Heading -->
              <h3 class="font-weight-bold mb-2">
                Analítica
              </h3>

              <!-- Text -->
              <p class="text-gray-700 mb-0">
                Realice un seguimiento de lo que está sucediendo en su empresa desde un panel centralizado.
              </p>

            </div>
          </div> <!-- / .row -->

          <!-- Item -->
          <div class="row align-items-center mb-8" data-aos="fade-up">
            <div class="col-4 col-lg-5">

              <!-- Image -->
              <img src="assets/img/illustrations/security.svg" alt="..." class="img-fluid">

            </div>
            <div class="col-8 col-lg-7">

              <!-- Heading -->
              <h3 class="font-weight-bold mb-2">
                Permisos
              </h3>

              <!-- Text -->
              <p class="text-gray-700 mb-0">
                Controle quién tiene acceso a qué proyectos y datos a través de nuestro panel de control.
              </p>

            </div>
          </div> <!-- / .row -->

        </div>
      </div> <!-- / .row -->
    </div> <!-- / .container -->
  </section>

  <!-- UNIFIED
  ================================================== -->
  <section class="py-8 py-md-11">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-12 col-md-6 col-lg-5" data-aos="fade-up">

          <!-- Badge -->
          <span class="badge badge-pill badge-success-soft mb-3">
            <span class="h6 text-uppercase">Unificado</span>
          </span>

          <!-- Heading -->
          <h2 class="font-weight-bold">
            Centraliza toda tu información <span class="text-success">en un solo lugar</span>.
          </h2>

          <!-- Text -->
          <p class="font-size-lg text-gray-700">
            Usando nuestra plataforma, puede centralizar de una forma innovadora toda su información conocer en tiempo real como se comportan sus usuarios frente a su sitio, tiene la oportunidad de generar reportes semanales, mensuales o bimensuales del flujo de su sitio web y de las páginas mas relevantes.
          </p>

          <!-- Form -->
          <form class="mb-8">
            <div class="form-row">
              <div class="col-12 col-md">

                <!-- Input -->
                <div class="form-group mb-md-0">
                  <input type="url" class="form-control bg-light border-0" placeholder="www.tusitio.com">
                </div>

              </div>
              <div class="col-12 col-md-auto">

                <!-- Submit -->
                <button class="btn btn-success-soft">
                  Inicia
                </button>

              </div>
            </div>
          </form>

        </div>
        <div class="col-12 col-md-6 col-lg-6 offset-lg-1">

          <!-- Card -->
          <div class="card card-border border-success shadow-lg mb-5" data-aos="fade-up">
            <div class="card-body">

              <!-- List group -->
              <div class="list-group list-group-flush">
                <div class="list-group-item d-flex align-items-center">

                  <!-- Text -->
                  <div class="mr-auto">

                    <!-- Heading -->
                    <p class="font-weight-bold mb-1">
                      Desarrollo 100% a la médida de su negocio
                    </p>

                    <!-- Text -->
                    <p class="font-size-sm text-muted mb-0">
                      Creamos plataformas que cumplen sus requisitos al 100%
                    </p>

                  </div>

                  <!-- Check -->
                  <div class="badge badge-rounded-circle badge-success-soft ml-4">
                    <i class="fe fe-check"></i>
                  </div>

                </div>
                <div class="list-group-item d-flex align-items-center">

                  <!-- Text -->
                  <div class="mr-auto">

                    <!-- Heading -->
                    <p class="font-weight-bold mb-1">
                      Tiempo de funcionamiento 99,99% garantizado
                    </p>

                    <!-- Text -->
                    <p class="font-size-sm text-muted mb-0">
                      Nuestra red de servidores nunca se cae.
                    </p>

                  </div>

                  <!-- Check -->
                  <div class="badge badge-rounded-circle badge-success-soft ml-4">
                    <i class="fe fe-check"></i>
                  </div>

                </div>
                <div class="list-group-item d-flex align-items-center">

                  <!-- Text -->
                  <div class="mr-auto">

                    <!-- Heading -->
                    <p class="font-weight-bold mb-1">
                      Acceso a la información desde cualquier lugar del mundo
                    </p>

                    <!-- Text -->
                    <p class="font-size-sm text-muted mb-0">
                      Nuestros servidores estan alojados en Europa y contamos con la opción de adquirir <span style="text-decoration:underline;cursor: help;" data-container="body" data-toggle="popover" data-placement="top" data-content="Una CDN (Red de Distribución de Contenido o Content Delivery Network, por sus siglas en inglés) es un conjunto de servidores ubicados en diferentes zonas geográficas que contienen copias locales de los contenidos de los clientes." data-original-title="Servidores CDN" title="Servidores CDN"> servicios de CDN </span>
                      <br><small class="font-size-sm text-gray-500 mb-0"><span class="text-danger">*</span> Para acceder a tu sitio web siempre el cliente debe tener una conexión a internet. </small>
                    </p>

                  </div>

                  <!-- Check -->
                  <div class="badge badge-rounded-circle badge-success-soft ml-4">
                    <i class="fe fe-check"></i>
                  </div>

                </div>
                <div class="list-group-item d-flex align-items-center">

                  <!-- Text -->
                  <div class="mr-auto">

                    <!-- Heading -->
                    <p class="font-weight-bold mb-1">
                      Cifrado de 256 bits
                    </p>

                    <!-- Text -->
                    <p class="font-size-sm text-muted mb-0">
                      Mantenga su comunicación y datos seguros.
                    </p>

                  </div>

                  <!-- Check -->
                  <div class="badge badge-rounded-circle badge-success-soft ml-4">
                    <i class="fe fe-check"></i>
                  </div>

                </div>
              </div>

            </div>
          </div>

          <!-- Text -->
          <p class="font-size-sm text-center text-gray-500 mb-0">
            * Limitado a la vida de la empresa.
          </p>

        </div>
      </div> <!-- / .row -->
    </div> <!-- / .container -->
  </section>

  <!-- IMAGE
  ================================================== -->
  <section data-jarallax data-speed=".8" class="py-14 py-lg-16 jarallax" style="background-image: url(https://images.unsplash.com/photo-1504384308090-c894fdcc538d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80);">

    <!-- Shape -->
    <div class="shape shape-top shape-fluid-x svg-shim text-white">
      <svg viewBox="0 0 2880 250" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M0 0H2880V125H2160L720 250H0V0Z" fill="currentColor"/>
      </svg>
    </div>

    <!-- Shape -->
    <div class="shape shape-bottom shape-fluid-x svg-shim text-light">
      <svg viewBox="0 0 2880 250" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M720 125L2160 0H2880V250H0V125H720Z" fill="currentColor"/>
      </svg>
    </div>

  </section>

  <!-- ABOUT
  ================================================== -->
  <section class="py-8 py-md-11 bg-light">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-12 col-md-5 col-lg-6 order-md-2">

          <!-- iPhone + Macbook -->
          <div class="w-md-150 w-lg-130 mb-6 mb-md-0">
            <div class="device-combo device-combo-iphonex-macbook">

              <!-- iPhone -->
              <div class="device device-iphonex">
                <img src="https://media.giphy.com/media/c7tAqdwGrASGI/giphy.gif" class="device-screen" alt="...">
                <img src="assets/img/devices/iphonex.svg" class="img-fluid" alt="...">
              </div>
              <!-- https://media.giphy.com/media/KzF4bTM9CkiU8/giphy.gif Globe -->
              <!-- https://media.giphy.com/media/7TF2ABuRw6lXO/giphy.gif  Landing-->
              <!-- http://giphygifs.s3.amazonaws.com/media/PVx0aXIWXHogE/giphy.gif local-->
              <!-- Macbook -->
              <div class="device device-macbook">
                <img src="https://media.giphy.com/media/7TF2ABuRw6lXO/giphy.gif" class="device-screen" alt="...">
                <img src="assets/img/devices/macbook.svg" class="img-fluid" alt="...">
              </div>

            </div>
          </div>

        </div>
        <div class="col-12 col-md-7 col-lg-6 order-md-1">

          <!-- Heading -->
          <h2>
            Accede a tu plataforma desde <br>
            <span class="text-primary">todos los dispositivos</span>.
          </h2>

          <!-- Text -->
          <p class="font-size-lg text-muted mb-6">
            En Developer Men realizamos productos modernos y vanguardistas lo que permite que se acoplen a todas las tecnologías y herramientas de la actualidad.
          </p>

          <!-- List -->
          <div class="d-flex">

            <!-- Icon -->
            <div class="icon text-primary">
              <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
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

            <div class="ml-5">

              <!-- Heading -->
              <h4 class="mb-1 font-weight-bold">
                Gestión oportuna
              </h4>

              <!-- Text -->
              <p class="text-muted mb-5">
                Gestiona tu plataforma sea desde tu PC o bien sea desde tu teléfono movil.
              </p>

            </div>

          </div>
          <div class="d-flex">

            <!-- Icon -->
            <div class="icon text-primary">
              <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <title>Stockholm-icons / Files / Folder-star</title>
                <desc>Created with Sketch.</desc>
                <g id="Stockholm-icons-/-Files-/-Folder-star" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <rect id="bound" x="0" y="0" width="24" height="24"></rect>
                  <path d="M3.5,21 L20.5,21 C21.3284271,21 22,20.3284271 22,19.5 L22,8.5 C22,7.67157288 21.3284271,7 20.5,7 L10,7 L7.43933983,4.43933983 C7.15803526,4.15803526 6.77650439,4 6.37867966,4 L3.5,4 C2.67157288,4 2,4.67157288 2,5.5 L2,19.5 C2,20.3284271 2.67157288,21 3.5,21 Z" id="Combined-Shape" fill="#335EEA" opacity="0.3"></path>
                  <path d="M11.9999651,17.2276651 L9.80187391,18.4352848 C9.53879239,18.5798204 9.21340017,18.4741205 9.07509004,18.1991974 C9.02001422,18.0897216 9.00100892,17.9643258 9.02101638,17.8424227 L9.44081443,15.2846431 L7.66252134,13.4732136 C7.44968392,13.2564102 7.44532889,12.9003514 7.65279409,12.677934 C7.73540782,12.5893662 7.84365664,12.5317281 7.96078237,12.5139426 L10.418323,12.1407676 L11.5173686,9.81362288 C11.6489093,9.53509542 11.97161,9.42073887 12.2381407,9.5582004 C12.3442746,9.6129383 12.4301813,9.70271178 12.4825615,9.81362288 L13.5816071,12.1407676 L16.0391477,12.5139426 C16.3332818,12.5586066 16.5370768,12.8439892 16.4943366,13.1513625 C16.4773173,13.2737601 16.4221618,13.3868813 16.3374088,13.4732136 L14.5591157,15.2846431 L14.9789137,17.8424227 C15.0291578,18.148554 14.8324094,18.4392867 14.5394638,18.4917923 C14.4228114,18.5127004 14.3028166,18.4928396 14.1980562,18.4352848 L11.9999651,17.2276651 Z" id="Star" fill="#335EEA" opacity="0.3"></path>
                </g>
              </svg>
            </div>

            <div class="ml-5">

              <!-- Heading -->
              <h4 class="mb-1 font-weight-bold">
                Información centralizada en un mismo lugar
              </h4>

              <!-- Text -->
              <p class="text-muted mb-0">
                Tu información siempre estará centralizada en un mismo centro de datos lo que te permite acceder a el desde cualquier localización geográfica
              </p>

            </div>

          </div>

        </div>
      </div> <!-- / .row -->
    </div> <!-- / .container -->
  </section>


  <!-- TESTIMONIALS
  ================================================== -->
  <section data-jarallax data-speed=".8" class="py-15 overlay overlay-black overlay-60 jarallax" style="background-image: url(assets/img/covers/cover-1.jpg);">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-7">

          <!-- Blockquote -->
          <blockquote class="blockquote mb-0">

            <!-- Text -->
            <p class="h2 text-white">
              <i class="fa fa-angle-double-left font-size-lg text-info"></i> En Developer Men estamos prestos a brindarte la solución mas idonea para tu organización, por eso queremos ser parte de la solución por lo cual nuestro equipo de expertos siempre te brindará el mejor asesoramiento y aconsejaremos de la mejor manera <i class="fa fa-angle-double-right font-size-lg text-info"></i>
            </p>

            <!-- Footer -->
            <footer class="blockquote-footer text-white-50 mb-0">
              Santiago Arango Gutierrez &bull; CEO Developer Men
            </footer>

          </blockquote>


        </div>
      </div> <!-- / .row -->
    </div> <!-- / .container -->
  </section>

  <!-- SHAPE
  ================================================== -->
  <div class="position-relative">
    <div class="shape shape-bottom shape-fluid-x svg-shim text-white">
      <svg viewBox="0 0 2880 56" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M720 28H0V56H995.5H1639.5H2880V28H2160C2160 28 1874 -9.82909e-10 1440 0C1006 9.829e-10 720 28 720 28Z" fill="currentColor"/>
      </svg>
    </div>
  </div>

  <!-- CASE STUDIES
  ================================================== -->
  <section class="pt-10">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12 col-md-10 col-lg-8 text-center">
          <!-- Badge -->
          <span class="badge badge-pill badge-success-soft mb-3">
            <span class="h6 text-uppercase">Nuestras Herramientas</span>
          </span>

          <!-- Heading -->
          <h2 class="font-weight-bold">
            Siempre pensadas para tí
          </h2>

          <!-- Text -->
          <p class="font-size-lg text-gray-700 mb-9">
            Estas son las herramientas que utilizamos para hacer de tu proyecto algo único y espectacular
            <br><small class="text-gray-500"><span class="strongLabel">PD:</span> Estamos actualizandonos constantemente para siempre hacer productos vanguardistas</small>
          </p>

        </div>
      </div> <!-- / .row -->
    </div> <!-- / .container -->
  </section>

  <!-- CASE STUDIES (CAROUSEL)
  ================================================== -->
  <section>
    <div class="container">
      <div class="row">
        <div class="col-12">

          <!-- Flickity -->
          <div class="flickity-viewport-visible pt-2 pb-9" data-flickity='{"groupCells": true, "cellAlign": "left", "imagesLoaded": true, "pageDots": true, "prevNextButtons": false, "contain": true}'>

            <div class="col-12 col-md-5 col-lg-4">

              <!-- Card -->
              <div class="card card-border shadow-light-lg lift lift-lg" style="border-top-color: #7362DE;">

                <div class="card-body text-center">
                  <!-- Badge -->
                  <span class="badge badge-info badge-pill badge-float badge-float-outside">
                    Top Framework
                  </span>
                  <!-- Icon -->
                  <div class="img-fluid mb-5 w-50 svg-shim mx-auto" style="color: #FF5A5F;">
                    <img class="img-fluid" src="assets/img/icons/Bootstrap.svg" alt="Ionic">
                  </div>

                  <!-- Text -->
                  <p class="text-gray-700 mb-5">
                    Bootstrap es una biblioteca multiplataforma o conjunto de herramientas de código abierto para diseño de sitios y aplicaciones web.
                  </p>

                  <!-- Link -->
                  <a href="https://www.cloudflare.com/es-la/" target="_blank" style="color: #FF5A5F;">Saber más</a>

                </div>
              </div>

            </div>

            <div class="col-12 col-md-5 col-lg-4">

              <!-- Card -->
              <div class="card card-border shadow-light-lg lift lift-lg" style="border-top-color: #5ba6ff;">
                <div class="card-body text-center">

                  <!-- Icon -->
                  <div class="img-fluid mb-5 w-50 svg-shim mx-auto" style="color: #FF5A5F;">
                    <img class="img-fluid" src="assets/img/icons/Foundation.svg" alt="Ionic">
                  </div>

                  <!-- Text -->
                  <p class="text-gray-700 mb-5">
                    Foundation es un framework de interfaz de usuario responsive. Incluye componentes de interfaz de usuario HTML y CSS.
                  </p>

                  <!-- Link -->
                  <a href="https://www.cloudflare.com/es-la/" target="_blank" style="color: #FF5A5F;">Saber más</a>

                </div>
              </div>

            </div>

            <div class="col-12 col-md-5 col-lg-4">

              <!-- Card -->
              <div class="card card-border shadow-light-lg lift lift-lg" style="border-top-color: #DA5988;">
                <div class="card-body text-center">
                  <!-- Badge -->
                  <span class="badge badge-info badge-pill badge-float badge-float-outside">
                    Top Gráficos
                  </span>

                  <!-- Icon -->
                  <div class="img-fluid mb-5 w-50 svg-shim mx-auto" style="color: #DA5988;">
                    <img class="img-fluid" src="assets/img/icons/Inkscape.svg" alt="Inkscape" width="180" height="auto">
                  </div>

                  <!-- Text -->
                  <p class="text-gray-700 mb-5">
                    Inkscape puede crear y editar diagramas, líneas, gráficos, logotipos, e ilustraciones complejas.
                  </p>

                  <!-- Link -->
                  <a href="https://www.google.com/business/" target="_blank" style="color: #DA5988;">Saber más</a>

                </div>
              </div>

            </div>

            <div class="col-12 col-md-5 col-lg-4">

              <!-- Card -->
              <div class="card card-border shadow-light-lg lift lift-lg" style="border-top-color: #DA5988;">
                <div class="card-body text-center">

                  <!-- Icon -->
                  <div class="img-fluid mb-5 w-50 svg-shim mx-auto" style="color: #DA5988;">
                    <img class="img-fluid" src="assets/img/icons/Figma.svg" alt="Figma" width="180" height="auto">
                  </div>

                  <!-- Text -->
                  <p class="text-gray-700 mb-5">
                    Una mejor forma de diseñar. Diseñe, realice prototipos y recopile comentarios en un solo lugar con Figma.
                  </p>

                  <!-- Link -->
                  <a href="https://www.google.com/business/" target="_blank" style="color: #DA5988;">Saber más</a>

                </div>
              </div>

            </div>

            <div class="col-12 col-md-5 col-lg-4">

              <!-- Card -->
              <div class="card card-border shadow-light-lg lift lift-lg" style="border-top-color: #5ba6ff;">
                <div class="card-body text-center">
                  <!-- Badge -->
                  <span class="badge badge-info badge-pill badge-float badge-float-outside">
                    Top SDK
                  </span>
                  <!-- Icon -->
                  <div class="img-fluid mb-5 w-50 svg-shim mx-auto" style="color: #FF5A5F;">
                    <img class="img-fluid" src="assets/img/icons/IoniComplete.svg" alt="Ionic">
                  </div>

                  <!-- Text -->
                  <p class="text-gray-700 mb-5">
                    Ionic es un completo SDK de código abierto para el desarrollo de aplicaciones móviles híbridas. Es el gran abanderado del desarrollo hibrido.
                  </p>

                  <!-- Link -->
                  <a href="https://www.cloudflare.com/es-la/" target="_blank" style="color: #FF5A5F;">Saber más</a>

                </div>
              </div>

            </div>

            <div class="col-12 col-md-5 col-lg-4">

              <!-- Card -->
              <div class="card card-border shadow-light-lg lift lift-lg" style="border-top-color: #5ba6ff;">
                <div class="card-body text-center">

                  <!-- Icon -->
                  <div class="img-fluid mb-5 w-50 svg-shim mx-auto" style="color: #FF5A5F;">
                    <img class="img-fluid" src="assets/img/icons/Angularjs.svg" alt="Angular">
                  </div>

                  <!-- Text -->
                  <p class="text-gray-700 mb-5">
                    Angular, es un framework para aplicaciones web desarrollado en TypeScript, de código abierto, mantenido por Google.
                  </p>

                  <!-- Link -->
                  <a href="https://www.cloudflare.com/es-la/" target="_blank" style="color: #FF5A5F;">Saber más</a>

                </div>
              </div>

            </div>

            <div class="col-12 col-md-5 col-lg-4">

              <!-- Card -->
              <div class="card card-border shadow-light-lg lift lift-lg" style="border-top-color: #FF5A5F;">
                <div class="card-body text-center">
                  <!-- Badge -->
                  <span class="badge badge-info badge-pill badge-float badge-float-outside">
                    Top alojamiento compartido
                  </span>
                  <!-- Icon -->
                  <div class="img-fluid mb-5 w-50 svg-shim mx-auto" style="color: #FF5A5F;">
                    <img class="img-fluid" src="assets/img/icons/Bitbucket.svg" alt="Angular">
                  </div>

                  <!-- Text -->
                  <p class="text-gray-700 mb-5">
                    Bitbucket es un servicio de alojamiento basado en web, para los proyectos que utilizan el sistema de control de versiones Mercurial y Git.
                  </p>

                  <!-- Link -->
                  <a href="https://www.cloudflare.com/es-la/" target="_blank" style="color: #FF5A5F;">Saber más</a>

                </div>
              </div>

            </div>

            <div class="col-12 col-md-5 col-lg-4">

              <!-- Card -->
              <div class="card card-border shadow-light-lg lift lift-lg" style="border-top-color: #FF5A5F;">
                <div class="card-body text-center">

                  <!-- Icon -->
                  <div class="img-fluid mb-5 w-50 svg-shim mx-auto" style="color: #FF5A5F;">
                    <svg width="192px" height="140px" viewBox="0 0 182 34" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><!-- Generator: Sketch 53.2 (72643) - https://sketchapp.com --><title>cloudflare-color</title><desc>Created with Sketch.</desc><g id="cloudflare-color" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g id="COLORED" transform="translate(0.000000, 3.000000)"><g id="cloudflare"><g id="Group" transform="translate(61.326343, 16.075576)" fill="#404041"><path d="M119.2271,2.48748387 C118.658954,2.48748387 118.207779,2.03059908 118.207779,1.45526267 C118.207779,0.896847926 118.658954,0.423041475 119.2271,0.423041475 C119.778536,0.423041475 120.24642,0.879926267 120.24642,1.45526267 C120.24642,2.03059908 119.778536,2.48748387 119.2271,2.48748387 L119.2271,2.48748387 Z M119.2271,0.626101382 C118.775925,0.626101382 118.408301,0.99837788 118.408301,1.45526267 C118.408301,1.91214747 118.775925,2.28442396 119.2271,2.28442396 C119.678274,2.28442396 120.045898,1.91214747 120.045898,1.45526267 C120.045898,0.99837788 119.678274,0.626101382 119.2271,0.626101382 L119.2271,0.626101382 Z M119.745115,1.99675576 L119.511173,1.99675576 L119.310651,1.6075576 L119.043288,1.6075576 L119.043288,1.99675576 L118.826056,1.99675576 L118.826056,0.863004608 L119.360781,0.863004608 C119.594724,0.863004608 119.745115,1.01529954 119.745115,1.23528111 C119.745115,1.4044977 119.644854,1.52294931 119.511173,1.57371429 L119.745115,1.99675576 Z M119.344071,1.4044977 C119.427622,1.4044977 119.511173,1.35373272 119.511173,1.23528111 C119.511173,1.09990783 119.444332,1.06606452 119.344071,1.06606452 L119.009867,1.06606452 L119.009867,1.4044977 L119.344071,1.4044977 L119.344071,1.4044977 Z" id="Shape" fill-rule="nonzero"></path><polygon id="Path" points="13.0339366 0.321511521 15.6407239 0.321511521 15.6407239 7.51321659 20.1691814 7.51321659 20.1691814 9.81456221 13.0339366 9.81456221"></polygon><path d="M22.8595196,5.09341935 L22.8595196,5.0764977 C22.8595196,2.3521106 25.0318424,0.135373272 27.9227027,0.135373272 C30.813563,0.135373272 32.9524654,2.31826728 32.9524654,5.04265438 L32.9524654,5.0764977 C32.9524654,7.80088479 30.7801426,10.0176221 27.8892823,10.0176221 C25.0151322,10.0007005 22.8595196,7.81780645 22.8595196,5.09341935 M30.3122577,5.09341935 L30.3122577,5.0764977 C30.3122577,3.70584332 29.3430676,2.52132719 27.9059925,2.52132719 C26.4856276,2.52132719 25.5331476,3.68892166 25.5331476,5.05957604 L25.5331476,5.09341935 C25.5331476,6.46407373 26.5023378,7.64858986 27.9227027,7.64858986 C29.3597778,7.6316682 30.3122577,6.46407373 30.3122577,5.09341935" id="Shape" fill-rule="nonzero"></path><path d="M36.1441089,5.6518341 L36.1441089,0.321511521 L38.7843165,0.321511521 L38.7843165,5.60106912 C38.7843165,6.9717235 39.4694337,7.61474654 40.5054646,7.61474654 C41.5414954,7.61474654 42.2266126,6.98864516 42.2266126,5.66875576 L42.2266126,0.321511521 L44.8668203,0.321511521 L44.8668203,5.58414747 C44.8668203,8.64696774 43.1456723,9.9837788 40.4720442,9.9837788 C37.8151264,10.0007005 36.1441089,8.63004608 36.1441089,5.6518341" id="Path"></path><path d="M48.843842,0.321511521 L52.46995,0.321511521 C55.811985,0.321511521 57.7670755,2.2675023 57.7670755,5.00881106 L57.7670755,5.04265438 C57.7670755,7.78396313 55.7952749,9.81456221 52.4198195,9.81456221 L48.8605522,9.81456221 L48.843842,0.321511521 L48.843842,0.321511521 Z M52.5033703,7.47937327 C54.0574166,7.47937327 55.0934475,6.61636866 55.0934475,5.0764977 L55.0934475,5.04265438 C55.0934475,3.51970507 54.0574166,2.6397788 52.5033703,2.6397788 L51.4506293,2.6397788 L51.4506293,7.46245161 L52.5033703,7.47937327 L52.5033703,7.47937327 Z" id="Shape" fill-rule="nonzero"></path><polygon id="Path" points="61.5268649 0.321511521 69.0297336 0.321511521 69.0297336 2.6397788 64.1169421 2.6397788 64.1169421 4.24733641 68.5618487 4.24733641 68.5618487 6.43023041 64.1169421 6.43023041 64.1169421 9.81456221 61.5268649 9.81456221"></polygon><polygon id="Path" points="72.6391314 0.321511521 75.2292086 0.321511521 75.2292086 7.51321659 79.7743762 7.51321659 79.7743762 9.81456221 72.6391314 9.81456221"></polygon><path d="M86.5587073,0.253824885 L89.0652336,0.253824885 L93.0589655,9.81456221 L90.2683662,9.81456221 L89.583249,8.12239631 L85.9738512,8.12239631 L85.3054442,9.81456221 L82.5816856,9.81456221 L86.5587073,0.253824885 Z M88.8480013,6.07487558 L87.8119705,3.3843318 L86.7592294,6.07487558 L88.8480013,6.07487558 Z" id="Shape" fill-rule="nonzero"></path><path d="M96.4010005,0.321511521 L100.829197,0.321511521 C102.266272,0.321511521 103.252172,0.693788018 103.887159,1.35373272 C104.438595,1.89522581 104.722668,2.62285714 104.722668,3.57047005 L104.722668,3.60431336 C104.722668,5.05957604 103.954,6.0241106 102.800998,6.51483871 L105.040161,9.83148387 L102.03233,9.83148387 L100.14408,6.95480184 L99.0077878,6.95480184 L99.0077878,9.83148387 L96.4177107,9.83148387 L96.4010005,0.321511521 L96.4010005,0.321511521 Z M100.712226,4.89035945 C101.597865,4.89035945 102.09917,4.45039631 102.09917,3.77352995 L102.09917,3.72276498 C102.09917,2.97821198 101.564445,2.60593548 100.695515,2.60593548 L98.9910776,2.60593548 L98.9910776,4.89035945 L100.712226,4.89035945 L100.712226,4.89035945 Z" id="Shape" fill-rule="nonzero"></path><polygon id="Path" points="108.465747 0.321511521 116.002036 0.321511521 116.002036 2.57209217 111.039114 2.57209217 111.039114 3.99351152 115.534151 3.99351152 115.534151 6.07487558 111.039114 6.07487558 111.039114 7.58090323 116.068877 7.58090323 116.068877 9.81456221 108.465747 9.81456221"></polygon><path d="M7.35247707,6.21024885 C6.98485322,7.03941014 6.21618516,7.6316682 5.21357465,7.6316682 C3.79320976,7.6316682 2.8240196,6.43023041 2.8240196,5.0764977 L2.8240196,5.04265438 C2.8240196,3.672 3.77649959,2.50440553 5.19686447,2.50440553 C6.26631568,2.50440553 7.08511427,3.16435023 7.41931777,4.07811982 L10.1597865,4.07811982 C9.72532194,1.81061751 7.75352127,0.135373272 5.21357465,0.135373272 C2.32271435,0.135373272 0.150391576,2.3521106 0.150391576,5.0764977 L0.150391576,5.11034101 C0.150391576,7.83472811 2.289294,10.0176221 5.1801543,10.0176221 C7.65326022,10.0176221 9.59164054,8.39314286 10.0929458,6.22717051 L7.35247707,6.21024885 L7.35247707,6.21024885 Z" id="Path"></path></g><g id="Group"><polygon id="Path" fill="#FFFFFF" points="52.3195584 15.5002396 45.1508933 11.3375115 43.9143403 10.7960184 14.5879829 11.016 14.5879829 26.0762765 52.3195584 26.0931982"></polygon><path d="M39.2689116,24.7056221 C39.6198253,23.4872627 39.4861439,22.3704332 38.9012878,21.5412719 C38.3665622,20.7797972 37.4642127,20.3398341 36.3780513,20.2890691 L15.8078257,20.0183226 C15.6741443,20.0183226 15.5571731,19.9506359 15.4903324,19.849106 C15.4234917,19.747576 15.4067815,19.6122028 15.4402018,19.4768295 C15.5070425,19.2737696 15.7075646,19.1214747 15.9247969,19.104553 L36.6788345,18.8338065 C39.1352302,18.7153548 41.8088582,16.7016774 42.7446281,14.2311152 L43.9310505,11.1006083 C43.981181,10.965235 43.9978912,10.8298618 43.9644708,10.6944885 C42.6276568,4.56884793 37.2302703,4.26325641e-14 30.7801426,4.26325641e-14 C24.8313203,4.26325641e-14 19.7848474,3.89198157 17.9801485,9.28999078 C16.8104362,8.41006452 15.3232306,7.93625806 13.7190538,8.088553 C10.8616139,8.3762212 8.57231986,10.6944885 8.28824688,13.5880922 C8.22140618,14.3326452 8.2715367,15.0602765 8.43863845,15.7371429 C3.77649959,15.8725161 0.0501305255,19.7306544 0.0501305255,24.4856406 C0.0501305255,24.908682 0.0835508758,25.3317235 0.133681401,25.754765 C0.167101752,25.9578249 0.334203503,26.1101198 0.534725605,26.1101198 L38.5002436,26.1101198 C38.7174758,26.1101198 38.9179979,25.9578249 38.9848386,25.7378433 L39.2689116,24.7056221 Z" id="Path" fill="#F38020"></path><path d="M45.8193003,11.3205899 C45.6354884,11.3205899 45.4349663,11.3205899 45.2511543,11.3375115 C45.1174729,11.3375115 45.0005017,11.4390415 44.9503712,11.5744147 L44.1482828,14.4003318 C43.7973691,15.6186912 43.9310505,16.7355207 44.5159066,17.564682 C45.0506322,18.3261567 45.9529817,18.7661198 47.0391431,18.8168848 L51.417209,19.0876313 C51.5508904,19.0876313 51.6678616,19.155318 51.7347023,19.2568479 C51.801543,19.3583779 51.8182532,19.5106728 51.7848328,19.6291244 C51.7179921,19.8321843 51.51747,19.9844793 51.3002377,20.0014009 L46.7383599,20.2721475 C44.265254,20.3905991 41.6083361,22.4042765 40.6725663,24.8748387 L40.3383628,25.7378433 C40.2715221,25.9070599 40.3884934,26.0762765 40.5723053,26.0762765 L56.2464496,26.0762765 C56.4302615,26.0762765 56.5973633,25.9578249 56.6474938,25.7716866 C56.9148566,24.7902304 57.0652482,23.7580092 57.0652482,22.6919447 C57.0652482,16.4140092 52.0354854,11.3205899 45.8193003,11.3205899" id="Path" fill="#FAAE40"></path></g></g></g></g></svg>
                  </div>

                  <!-- Text -->
                  <p class="text-gray-700 mb-5">
                    Cloudflare agiliza y protege millones de sitios web, API y otras propiedades conectadas a Internet.
                  </p>

                  <!-- Link -->
                  <a href="https://www.cloudflare.com/es-la/" target="_blank" style="color: #FF5A5F;">Saber más</a>

                </div>
              </div>

            </div>

            <div class="col-12 col-md-5 col-lg-4">

              <!-- Card -->
              <div class="card card-border shadow-light-lg lift lift-lg" style="border-top-color: #B81D24;">
                <div class="card-body text-center">
                  <!-- Badge -->
                  <span class="badge badge-info badge-pill badge-float badge-float-outside">
                    Top versionamiento
                  </span>
                  <!-- Icon -->
                  <div class="img-fluid mb-5 w-50 svg-shim mx-auto" style="color: #B81D24;">
                    <img class="img-fluid" src="assets/img/icons/Github.svg" alt="Github">
                  </div>

                  <!-- Text -->
                  <p class="text-gray-700 mb-5">
                    Reúne a la comunidad de desarrolladores más grande del mundo para descubrir, compartir y crear un mejor software.
                  </p>

                  <!-- Link -->
                  <a href="https://github.com/" target="_blank" style="color: #B81D24;">Saber más</a>

                </div>
              </div>

            </div>
            <div class="col-12 col-md-5 col-lg-4">

              <!-- Card -->
              <div class="card card-border shadow-light-lg lift lift-lg" style="border-top-color: #0081C9;">
                <div class="card-body text-center">
                  <!-- Badge -->
                  <span class="badge badge-info badge-pill badge-float badge-float-outside">
                    Top CMS
                  </span>
                  <!-- Icon -->
                  <div class="img-fluid mb-5 w-50 svg-shim mx-auto" style="color: #0081C9;">
                    <img class="img-fluid" src="assets/img/icons/Wordpress.svg" alt="Wordpress">
                  </div>


                  <!-- Text -->
                  <p class="text-gray-700 mb-5">
                    Crea fácilmente tu Propio Sitio Web Para Blogs, Tiendas Online, Aficiones, Negocios y más.
                  </p>

                  <!-- Link -->
                  <a href="https://es.wordpress.com" target="_blank" style="color: #0081C9;">Saber más</a>

                </div>
              </div>

            </div>
            <div class="col-12 col-md-5 col-lg-4">

              <!-- Card -->
              <div class="card card-border shadow-light-lg lift lift-lg" style="border-top-color: #6772E5;">
                <div class="card-body text-center">

                  <!-- Icon -->
                  <div class="img-fluid mb-5 w-50 svg-shim mx-auto" style="color: #6772E5;">
                    <img class="img-fluid" src="assets/img/icons/Drupal.svg" alt="Drupal">
                  </div>


                  <!-- Text -->
                  <p class="text-gray-700 mb-5">
                    Drupal es una plataforma de código abierto para crear increíbles experiencias digitales.
                  </p>

                  <!-- Link -->
                  <a href="https://www.drupal.org/" target="_blank" style="color: #6772E5;">Saber más</a>

                </div>
              </div>

            </div>

            <div class="col-12 col-md-5 col-lg-4">

              <!-- Card -->
              <div class="card card-border shadow-light-lg lift lift-lg" style="border-top-color: #6772E5;">
                <div class="card-body text-center">
                  <!-- Badge -->
                  <span class="badge badge-info badge-pill badge-float badge-float-outside">
                    Top Bases de Datos
                  </span>

                  <!-- Icon -->
                  <div class="img-fluid mb-5 w-50 svg-shim mx-auto" style="color: #6772E5;">
                    <img class="img-fluid"  src="assets/img/icons/Mysql.svg" alt="Mysql">
                  </div>


                  <!-- Text -->
                  <p class="text-gray-700 mb-5">
                    MySQL es un sistema de gestión de bases de datos relacional desarrollado bajo licencia dual: Licencia pública general/Licencia comercial por Oracle Corporation.
                  </p>

                  <!-- Link -->
                  <a href="https://www.drupal.org/" target="_blank" style="color: #6772E5;">Saber más</a>

                </div>
              </div>

            </div>

            <div class="col-12 col-md-5 col-lg-4">

              <!-- Card -->
              <div class="card card-border shadow-light-lg lift lift-lg" style="border-top-color: #6772E5;">
                <div class="card-body text-center">

                  <!-- Icon -->
                  <div class="img-fluid mb-5 w-50 svg-shim mx-auto" style="color: #6772E5;">
                    <img class="img-fluid"  src="assets/img/icons/Sql.svg" alt="Sql">
                  </div>


                  <!-- Text -->
                  <p class="text-gray-700 mb-5">
                    SQL es un lenguaje de dominio específico utilizado en programación, diseñado para administrar, y recuperar información de sistemas de gestión de bases de datos relacionales.​
                  </p>

                  <!-- Link -->
                  <a href="https://www.drupal.org/" target="_blank" style="color: #6772E5;">Saber más</a>

                </div>
              </div>

            </div>

            <div class="col-12 col-md-5 col-lg-4">

              <!-- Card -->
              <div class="card card-border shadow-light-lg lift lift-lg" style="border-top-color: #fae94f;">
                <div class="card-body text-center">
                  <!-- Badge -->
                  <span class="badge badge-info badge-pill badge-float badge-float-outside">
                    Top Analitica
                  </span>

                  <!-- Icon -->
                  <div class="img-fluid mb-5 w-50 svg-shim mx-auto" style="color: #cbba20;">
                    <img class="img-fluid" src="assets/img/icons/Google.svg" alt="Google-analytics" width="180" height="auto">
                  </div>


                  <!-- Text -->
                  <p class="text-gray-700 mb-5">
                    Conozca mejor a sus clientes. Google Analytics le ofrece las herramientas gratuitas que necesita para analizar datos de su empresa desde un único sitio.
                  </p>

                  <!-- Link -->
                  <a href="https://marketingplatform.google.com/intl/es/about/analytics/" target="_blank" style="color: #CB2027;">Saber más</a>

                </div>
              </div>

            </div>
            <div class="col-12 col-md-5 col-lg-4">

              <!-- Card -->
              <div class="card card-border shadow-light-lg lift lift-lg" style="border-top-color: #DA5988;">
                <div class="card-body text-center">
                  <!-- Badge -->
                  <span class="badge badge-info badge-pill badge-float badge-float-outside">
                    Top Anuncios
                  </span>

                  <!-- Icon -->
                  <div class="img-fluid mb-5 w-50 svg-shim mx-auto" style="color: #DA5988;">
                    <img class="img-fluid" src="assets/img/icons/Google adwords.svg" alt="Google-adwords" width="180" height="auto">
                  </div>

                  <!-- Text -->
                  <p class="text-gray-700 mb-5">
                    Logre que más clientes llamen por teléfono, accedan a su sitio y visiten su tienda.
                  </p>

                  <!-- Link -->
                  <a href="https://ads.google.com/intl/es-419_co/home/" target="_blank" style="color: #DA5988;">Saber más</a>

                </div>
              </div>

            </div>

            <div class="col-12 col-md-5 col-lg-4">

              <!-- Card -->
              <div class="card card-border shadow-light-lg lift lift-lg" style="border-top-color: #DA5988;">
                <div class="card-body text-center">
                  <!-- Badge -->
                  <span class="badge badge-info badge-pill badge-float badge-float-outside">
                    Top Para Empresas
                  </span>

                  <!-- Icon -->
                  <div class="img-fluid mb-5 w-50 svg-shim mx-auto" style="color: #DA5988;">
                    <img class="img-fluid" src="assets/img/icons/business.svg" alt="Google-business" width="180" height="auto">
                  </div>

                  <!-- Text -->
                  <p class="text-gray-700 mb-5">
                    Su perfil de negocio gratuito en Google My Business lo ayuda a comunicarse con clientes locales en Google Search y Maps.
                  </p>

                  <!-- Link -->
                  <a href="https://www.google.com/business/" target="_blank" style="color: #DA5988;">Saber más</a>

                </div>
              </div>

            </div>

          </div>

        </div>
      </div> <!-- / .row -->
    </div> <!-- / .container -->
  </section>

  <?php
  include("assets/features/integrations.php");
  include("assets/features/asesory.php");
  ?>

  <!-- CURVE
  ================================================== -->
  <div class="position-relative mt-n16">
    <div class="shape shape-bottom shape-fluid-x svg-shim text-dark">
      <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"/>
      </svg>
    </div>
  </div>

  <!-- FOOTER
  ================================================== -->
  <section class="pt-16 bg-dark">
    <?php
    $bg = "dark";
    include("assets/template/footer.php");
    ?>
  </section>

</body>
</html>
