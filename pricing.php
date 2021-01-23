<?php $title = 'Precios &bull; Developer Men';
require_once("assets/template/header.php");
?>
<body class="pt-10 bg-light">
  <?php
  include("assets/features/modals.php");
  $flex = 'flex';//Si no es flex puede aplicar la variable $collapsable de resto evitela usar
  $togglable = "false";
  $fixed = "fixed";
  $navbar = "light";
  $dark = "none";
  require_once("assets/template/navbar.php");
  ?>

  <!-- WELCOME
  ================================================== -->
  <section class="pt-8 pt-md-11 pb-10 pb-md-15 bg-info overlay overlay-black overlay-60 bg-cover" id="welcome" style="background-image: url(https://images.unsplash.com/photo-1520695287272-b7f8af46d367?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80);">

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
          <h1 class="display-2 text-white">
            Precios simples y justos.
          </h1>

          <!-- Text -->
          <p class="lead text-white-80 mb-5 mb-md-8">
            Todos los tipos de personas y empresas necesitan acceso a recursos de desarrollo, por lo que le damos la opción de decidir cuánto necesita usar.
          </p>

          <!-- Form -->
          <form class="d-flex align-items-center justify-content-center mb-7 mb-md-9">

            <!-- Label -->
            <span class="text-white-80">
              Anual
            </span>

            <!-- Switch -->
            <div class="custom-control custom-switch custom-switch-dark mx-3">
              <input type="checkbox" class="custom-control-input" id="billingSwitch" data-toggle="price" data-target=".price">
              <label class="custom-control-label" for="billingSwitch"></label>
            </div>

            <!-- Label -->
            <span class="text-white-80">
              Mensual
            </span>

          </form>

        </div>
      </div> <!-- / .row -->
    </div> <!-- / .container -->

  </section>

  <!-- SHAPE
  ================================================== -->
  <div class="position-relative">
    <div class="shape shape-bottom shape-fluid-x svg-shim text-light">
      <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"/>
      </svg>
    </div>
  </div>

  <!-- PRICING
  ================================================== -->
  <section class="mt-n8 mt-md-n14">
    <div class="container-fluid">
      <div class="form-row">
        <div class="col-12 col-md-4">

          <!-- Card -->
          <div class="card shadow-lg mb-6 mb-md-0">
            <div class="card-body">

              <!-- Preheading -->
              <div class="text-center mb-3">
                <img src="assets/img/icons/aqualung.png" class="img-fluid floating" alt="">
                <br><br>
                <span class="badge badge-pill badge-primary-soft">
                  <span class="h6 text-uppercase">Básica</span>
                </span>
              </div>

              <!-- Price -->
              <div class="d-flex justify-content-center">
                <span class="h2 mb-0 mt-2">$</span>
                <span class="price display-2 mb-0" data-annual="1200000" data-monthly="100000">1,200,000</span>
                <span class="h2 align-self-end mb-1">/mil</span>
              </div>

              <!-- Text -->
              <p class="text-center text-muted mb-5">
                por producto
              </p>

              <!-- List -->
              <div class="d-flex">

                <!-- Badge -->
                <div class="badge badge-rounded-circle badge-success-soft mt-1 mr-4">
                  <i class="fe fe-check"></i>
                </div>

                <!-- Text -->
                <p>
                  Página On-Page o Multi Nivel
                </p>

              </div>
              <div class="d-flex">

                <!-- Badge -->
                <div class="badge badge-rounded-circle badge-success-soft mt-1 mr-4">
                  <i class="fe fe-check"></i>
                </div>

                <!-- Text -->
                <p class="mb-5">
                  Dominio .com, .net o .org
                </p>

              </div>

              <div class="d-flex">

                <!-- Badge -->
                <div class="badge badge-rounded-circle badge-success-soft mt-1 mr-4">
                  <i class="fe fe-check"></i>
                </div>

                <!-- Text -->
                <p class="mb-5">
                  Responsive Design
                </p>

              </div>

              <div class="d-flex">

                <!-- Badge -->
                <div class="badge badge-rounded-circle badge-success-soft mt-1 mr-4">
                  <i class="fe fe-check"></i>
                </div>

                <!-- Text -->
                <p class="mb-5">
                  SEO Básico
                </p>

              </div>

              <div class="d-flex">

                <!-- Badge -->
                <div class="badge badge-rounded-circle badge-success-soft mt-1 mr-4">
                  <i class="fe fe-check"></i>
                </div>

                <!-- Text -->
                <p class="mb-5">
                  1 Slider Dinámico
                </p>

              </div>

              <div class="d-flex">

                <!-- Badge -->
                <div class="badge badge-rounded-circle badge-success-soft mt-1 mr-4">
                  <i class="fe fe-check"></i>
                </div>

                <!-- Text -->
                <p class="mb-5">
                  5 Secciones (Inicio,Servicios,e.t.c)
                </p>

              </div>

              <div class="d-flex">

                <!-- Badge -->
                <div class="badge badge-rounded-circle badge-success-soft mt-1 mr-4">
                  <i class="fe fe-check"></i>
                </div>

                <!-- Text -->
                <p class="mb-5">
                  Seccion Contactanos - En Página
                </p>

              </div>

              <div class="d-flex">

                <!-- Badge -->
                <div class="badge badge-rounded-circle badge-success-soft mt-1 mr-4">
                  <i class="fe fe-check"></i>
                </div>

                <!-- Text -->
                <p class="mb-5">
                  Link a redes sociales (Social Media Básico)
                </p>

              </div>

              <!-- Button -->
              <button data-toggle="modal" data-target="#modalContactenos" class="btn btn-block btn-primary-soft">
                Comience <i class="fe fe-arrow-right ml-3"></i>
              </button>

            </div>
          </div>

        </div>
        <div class="col-12 col-md-4">

          <!-- Card -->
          <div class="card shadow-lg mb-6 mb-md-0">
            <div class="card-body">

              <!-- Preheading -->
              <div class="text-center mb-3">
                <img src="assets/img/icons/rocket.png" class="img-fluid floating" alt="">
                <br><br>
                <span class="badge badge-pill badge-primary-soft">
                  <span class="h6 text-uppercase">Profesional</span>
                </span>
              </div>

              <!-- Price -->
              <div class="d-flex justify-content-center">
                <span class="h2 mb-0 mt-2">$</span>
                <span class="price display-2 mb-0" data-annual="2500000" data-monthly="208000">2,500,000</span>
                <span class="h2 align-self-end mb-1">/mil</span>
              </div>

              <!-- Text -->
              <p class="text-center text-muted mb-5">
                por producto
              </p>

              <!-- List -->
              <div class="d-flex">

                <!-- Badge -->
                <div class="badge badge-rounded-circle badge-success-soft mt-1 mr-4">
                  <i class="fe fe-check"></i>
                </div>

                <!-- Text -->
                <p>
                  Página On-Page o Multi Nivel
                </p>

              </div>
              <div class="d-flex">

                <!-- Badge -->
                <div class="badge badge-rounded-circle badge-success-soft mt-1 mr-4">
                  <i class="fe fe-check"></i>
                </div>

                <!-- Text -->
                <p>
                  Dominio .com, .net, .org
                </p>

              </div>
              <div class="d-flex">

                <!-- Badge -->
                <div class="badge badge-rounded-circle badge-success-soft mt-1 mr-4">
                  <i class="fe fe-check"></i>
                </div>

                <!-- Text -->
                <p>
                  Responsive Design
                </p>

              </div>
              <div class="d-flex">

                <!-- Badge -->
                <div class="badge badge-rounded-circle badge-success-soft mt-1 mr-4">
                  <i class="fe fe-check"></i>
                </div>

                <!-- Text -->
                <p>
                  SEO Profesional
                </p>

              </div>
              <div class="d-flex">

                <!-- Badge -->
                <div class="badge badge-rounded-circle badge-success-soft mt-1 mr-4">
                  <i class="fe fe-check"></i>
                </div>

                <!-- Text -->
                <p class="mb-5">
                  Hosting Independiente limitado
                </p>

              </div>

              <div class="d-flex">

                <!-- Badge -->
                <div class="badge badge-rounded-circle badge-success-soft mt-1 mr-4">
                  <i class="fe fe-check"></i>
                </div>

                <!-- Text -->
                <p class="mb-5">
                  Página de administración
                </p>

              </div>

              <div class="d-flex">

                <!-- Badge -->
                <div class="badge badge-rounded-circle badge-success-soft mt-1 mr-4">
                  <i class="fe fe-check"></i>
                </div>

                <!-- Text -->
                <p class="mb-5">
                  Administrador de contenido
                </p>

              </div>

              <div class="d-flex">

                <!-- Badge -->
                <div class="badge badge-rounded-circle badge-success-soft mt-1 mr-4">
                  <i class="fe fe-check"></i>
                </div>

                <!-- Text -->
                <p class="mb-5">
                  Formulario de contacto en página o modal (1 página)
                </p>

              </div>

              <div class="d-flex">

                <!-- Badge -->
                <div class="badge badge-rounded-circle badge-success-soft mt-1 mr-4">
                  <i class="fe fe-check"></i>
                </div>

                <!-- Text -->
                <p class="mb-5">
                  Links a Redes Sociales (Social Media Profesional)
                </p>

              </div>


              <!-- Button -->
              <button data-toggle="modal" data-target="#modalContactenos" class="btn btn-block btn-primary">
                Comience con estándar <i class="fe fe-arrow-right ml-3"></i>
              </button>

            </div>
          </div>

        </div>
        <div class="col-12 col-md-4">

          <!-- Card -->
          <div class="card shadow-lg mb-md-0">
            <div class="card-body">

              <!-- Preheading -->
              <div class="text-center mb-3">
                <img src="assets/img/icons/alien.png" class="img-fluid floating" alt="">
                <br><br>
                <span class="badge badge-pill badge-primary-soft">
                  <span class="h6 text-uppercase">Empresarial</span>
                </span>
              </div>

              <!-- Price -->
              <div class="d-flex justify-content-center">
                <span class="h2 mb-0 mt-2">$</span>
                <span class="price display-2 mb-0" data-annual="4500000" data-monthly="375000">4,500,000</span>
                <span class="h2 align-self-end mb-1">/mil</span>
              </div>

              <!-- Text -->
              <p class="text-center text-muted mb-5">
                por producto
              </p>

              <!-- List -->
              <div class="d-flex">

                <!-- Badge -->
                <div class="badge badge-rounded-circle badge-success-soft mt-1 mr-4">
                  <i class="fe fe-check"></i>
                </div>

                <!-- Text -->
                <p class="font-weight-bold">
                  Perfecto para E-Commerce
                </p>

              </div>
              <div class="d-flex">

                <!-- Badge -->
                <div class="badge badge-rounded-circle badge-success-soft mt-1 mr-4">
                  <i class="fe fe-check"></i>
                </div>

                <!-- Text -->
                <p>
                  Página On-Page o Multi Nivel
                </p>

              </div>
              <div class="d-flex">

                <!-- Badge -->
                <div class="badge badge-rounded-circle badge-success-soft mt-1 mr-4">
                  <i class="fe fe-check"></i>
                </div>

                <!-- Text -->
                <p>
                  Dominio .com, net, .org, .online, .tech ó .store
                </p>

              </div>
              <div class="d-flex">

                <!-- Badge -->
                <div class="badge badge-rounded-circle badge-success-soft mt-1 mr-4">
                  <i class="fe fe-check"></i>
                </div>

                <!-- Text -->
                <p>
                  Responsive Design Dinámico e intuitivo
                </p>

              </div>
              <div class="d-flex">

                <!-- Badge -->
                <div class="badge badge-rounded-circle badge-success-soft mt-1 mr-4">
                  <i class="fe fe-check"></i>
                </div>

                <!-- Text -->
                <p>
                  Hosting Independiente ilimitado
                </p>

              </div>

              <div class="d-flex">

                <!-- Badge -->
                <div class="badge badge-rounded-circle badge-success-soft mt-1 mr-4">
                  <i class="fe fe-check"></i>
                </div>

                <!-- Text -->
                <p>
                  Formulario de contacto (♾️)
                </p>

              </div>

              <div class="d-flex">

                <!-- Badge -->
                <div class="badge badge-rounded-circle badge-success-soft mt-1 mr-4">
                  <i class="fe fe-check"></i>
                </div>

                <!-- Text -->
                <p>
                  256-bit encryption
                </p>

              </div>


              <div class="d-flex">

                <!-- Badge -->
                <div class="badge badge-rounded-circle badge-success-soft mt-1 mr-4">
                  <i class="fe fe-check"></i>
                </div>

                <!-- Text -->
                <p>
                  Plataforma institucional (Intranet)
                </p>

              </div>

              <div class="d-flex">

                <!-- Badge -->
                <div class="badge badge-rounded-circle badge-success-soft mt-1 mr-4">
                  <i class="fe fe-check"></i>
                </div>

                <!-- Text -->
                <p>
                  Garantizado 100% de tiempo de actividad
                </p>

              </div>
              <div class="d-flex">

                <!-- Badge -->
                <div class="badge badge-rounded-circle badge-success-soft mt-1 mr-4">
                  <i class="fe fe-check"></i>
                </div>

                <!-- Text -->
                <p class="mb-5">
                  Usuarios ilimitados
                </p>

              </div>

              <!-- Button -->
              <button data-toggle="modal" data-target="#modalContactenos" class="btn btn-block btn-primary-soft">
                Comience con Premium <i class="fe fe-arrow-right ml-3"></i>
              </button>

            </div>
          </div>

        </div>
      </div> <!-- / .row -->
    </div> <!-- / .container -->
  </section>

  <!-- ABOUT
  ================================================== -->
  <section class="pt-8 pt-md-10 bg-dark slice" id="about" style="background-image: url(https://developermen.com/assets/img/covers/bg-pattern.png);background-position: left;  background-position: center;background-repeat: repeat;background-size: contain;color:#ffffff;">
    <a href="#about" class="tongue tongue-section-primary scrl-down" data-toggle="smooth-scroll">
      <i class="fas fa-angle-up"></i>
    </a>
    <div class="container">
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
  <!-- SHAPE
  ================================================== -->
  <div class="position-relative">
    <div class="shape shape-bottom shape-fluid-x svg-shim text-white text-light">
      <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"/>
      </svg>
    </div>
  </div>
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


  <!-- SHAPE
  ================================================== -->
  <div class="position-relative">
    <div class="shape shape-bottom shape-fluid-x svg-shim text-white text-dark">
      <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"/>
      </svg>
    </div>
  </div>

  <!-- FAQ
  ================================================== -->
  <section class="bg-dark">
    <div class="container pt-8">
      <div class="col-12 col-md-12">
        <h1 class="text-center text-light">Preguntas frecuentes</h1>
      </div>
      <div class="row">
        <div class="col-12 col-md-6">

          <!-- Item -->
          <div class="d-flex">

            <!-- Badge -->
            <div class="badge badge-lg badge-rounded-circle badge-success">
              <span>?</span>
            </div>

            <div class="ml-5">

              <!-- Heading -->
              <h4 class="text-white">
                Puedo seleccionar el Hosting ?
              </h4>

              <!-- Text -->
              <p class="text-muted mb-6 mb-md-8">
                Absolutamente. Contamos con un listado de empresas que ofrecen servicios de Hosting y que cumplen nuestros requerimientos.
              </p>

            </div>

          </div>

          <!-- Item -->
          <div class="d-flex">

            <!-- Badge -->
            <div class="badge badge-lg badge-rounded-circle badge-success">
              <span>?</span>
            </div>

            <div class="ml-5">

              <!-- Heading -->
              <h4 class="text-white">
                Mi sitio es actualizado?
              </h4>

              <!-- Text -->
              <p class="text-muted mb-6 mb-md-0">
                Sí. Actualizamos todos nuestros temas con cada actualización de Bootstrap, y agregamos constantemente nuevos componentes, páginas y características a nuestros temas (Estas deben ser solicitadas por la página de Soporte y pueden infringir en un costo adicional).
              </p>

            </div>

          </div>

        </div>
        <div class="col-12 col-md-6">

          <!-- Item -->
          <div class="d-flex">

            <!-- Badge -->
            <div class="badge badge-lg badge-rounded-circle badge-success">
              <span>?</span>
            </div>

            <div class="ml-5">

              <!-- Heading -->
              <h4 class="text-white">
                Hay una garantía de devolución de dinero?
              </h4>

              <!-- Text -->
              <p class="text-muted mb-6 mb-md-8">
                ¡Sip! Todos nuestros productos vienen con una garantía de satisfacción. Si no cumplimos con el bosquejo diseñado anteriormente envíe una devolución y recupere su dinero.
              </p>

            </div>

          </div>

          <!-- Item -->
          <div class="d-flex">

            <!-- Badge -->
            <div class="badge badge-lg badge-rounded-circle badge-success">
              <span>?</span>
            </div>

            <div class="ml-5">

              <!-- Heading -->
              <h4 class="text-white">
                Funciona con Rails? React? Laravel?
              </h4>

              <!-- Text -->
              <p class="text-muted mb-6 mb-md-0">
                Si, si eres un usuario desarrollador y solo deseas que nos encarguemos del Front End de tu sitio web contamos con el servicio que necesitas, solo debes comunicarte por los medios de contacto con que disponemos y te daremos la gestión mas acertada.
              </p>

            </div>

          </div>

        </div>
        <br>
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
  <?php
  $bg = "dark";
  include("assets/template/footer.php");
  ?>
  </body>
  </html>
