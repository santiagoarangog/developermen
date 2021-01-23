<?php $title = 'Servicios Web &bull; Developer Men';
require_once("assets/template/header.php");
?>
<body>

  <?php
  include("assets/features/modals.php");
  $flex = 'container';//Si no es flex puede aplicar la variable $collapsable de resto evitela usar
  $togglable = "true";
  $fixed = "fixed";
  $navbar = "dark";
  $dark = "none";
  require_once("assets/template/navbar.php");
  ?>
  <link rel="stylesheet" href="https://developermen.com/assets/css/separatoers.css">
  <header>
    <div class="overlay shape shape-bottom shape-fluid-x svg-shim text-white"></div>
    <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
      <source src="https://storage.googleapis.com/coverr-main/mp4/Travaho.mp4" type="video/mp4">
      </video>
      <div class="container h-100">
        <div class="d-flex h-100 text-center align-items-center">
          <div class="w-100 text-white">
            <h1 class="display-3 font-weight-bold">Productos de calidad a tu alcance</h1>
            <p class="lead mb-0">Hacemos productos de calidad para cumplir tus espectativas en todos los aspectos</p>
          </div>
        </div>
      </div>
    </header>
    <!-- Down -->
    <section class="mt-n6" align="center">
      <div class="container">
        <div class="row">
          <div class="col-12">

            <a href="#productos" class="btn btn-primary btn-rounded-circle btn-lg scrl-down" data-toggle="smooth-scroll">
              <i class="fe fe-arrow-down" style="font-size:25px;"></i>
            </a>

          </div>
        </div>
      </div>
    </section>


    <!-- WELCOME
    ================================================== -->
    <section class="position-relative pt-12 pt-md-14 mt-n11"  id="productos">
      <!-- Content -->
      <div class="container">
        <div class="row align-items-center text-center text-md-left">
          <div class="col-12 col-md-6">

            <!-- Image -->
            <img src="assets/img/illustrations/responsive.svg" alt="..." class="img-fluid mw-130 float-right mb-6 mb-md-0" data-aos="fade-right">

          </div>
          <div class="col-12 col-md-6">

            <!-- Heading -->
            <h1 class="display-1 font-weight-bold">
              <div data-aos="fade-left">Productos a tu médida</div>
            </h1>

            <!-- Text -->
            <p class="font-size-lg text-muted mb-0" data-aos="fade-left" data-aos-delay="200">
              Las herramientas de productividad pueden ayudarlo o interponerse.
              <span class="title">Developer Men</span> tiene como objetivo eliminar todas las barreras entre usted y simplemente hacer las cosas. Contáctenos y te prometemos que no te arrepentirás.
            </p>

          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->

    </section>


    <div class="col-12 col-lg-6 col-xl-8 offset-lg-3 offset-xl-2 py-7 py-lg-9 px-lg-7">
      <!-- Shape -->
      <div class="shape shape-fluid-x shape-blur-2 svg-shim text-light" style="z-index:-100;">
        <svg viewBox="0 0 1313 768" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M442.794 768C605.882 768 748.362 679.773 825.111 548.444L825.294 549C825.294 549 825.543 548.251 826.056 546.819C839.139 524.212 850.279 500.339 859.248 475.43C901.996 397.81 989.306 277.09 1144.29 206L1143.37 205.307C1230.34 171.296 1295.63 94.049 1312.83 0H1.29419V295.514C0.631105 305.423 0.294189 315.422 0.294189 325.5C0.294189 569.886 198.408 768 442.794 768Z" fill="currentColor"/>
        </svg>

      </div>
      <!-- Heading -->
      <div class="d-flex align-items-center">
        <h1 class="mb-1 mr-3 font-weight-bold">Nuestros productos</h1>
        <span class="badge badge-pill badge-primary-soft mt-1">
          <span class="h6 text-uppercase font-weight-bold">Best Seller</span>
        </span>
      </div>

      <!-- Text -->
      <p class="font-size-lg text-gray-700">
        Estos son los mejores productos a tu disposición
      </p>

      <!-- Divider -->
      <hr class="border-gray-300 my-6">

      <div class="row mb-5">
        <div class="col-12 col-xl-4 d-flex">

          <!-- Card -->
          <div class="card lift lift-lg mb-6 mb-xl-0 pt-14 overlay overlay-black overlay-30 bg-cover shadow-light-lg" style="background-image: url(assets/img/photos/photo-8.jpg);">
            <!-- Badge -->
            <span class="badge badge-primary badge-pill badge-float badge-float-inside">
              Free!
            </span>
            <!-- Body -->
            <a class="card-body mt-auto scrl-down" href="#web-cortesia" data-toggle="smooth-scroll">

              <!-- Heading -->
              <h3 class="text-white font-weight-bold text-center">
                Página Web de Cortesia
              </h3>
              <hr class="card-meta-divider border-white-20">
              <!-- Text -->
              <p class="mb-0 text-white">
                Nuestra filosofía de negocio es siempre brindar lo mejor a nuestros usuarios por eso colocamos a tu disposición una página web donde puedes mostrar tus redes sociales, tu dirección y tus medios de contacto
              </p>

            </a>

          </div>
        </div>
        <div class="col-12 col-xl-4 d-flex">

          <!-- Card -->
          <div class="card lift lift-lg mb-6 mb-xl-0 shadow-light-lg">

            <!-- Image -->
            <a class="card-img-top" href="#!">
              <img src="https://images.unsplash.com/photo-1530789253388-582c481c54b0?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80" alt="..." class="card-img-top">
            </a>

            <div class="position-relative">
              <div class="shape shape-bottom shape-fluid-x svg-shim text-white">
                <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"/>
                </svg>
              </div>
            </div>

            <!-- Body -->
            <a class="card-body" href="#!">

              <!-- Heading -->
              <h3 class="font-weight-bold text-center">
                Página web Personal
              </h3>

              <!-- Text -->
              <p class="mb-0 text-muted">
                Muestra tus logros, azañas y más con un producto echo para ti y por ti.
              </p>

            </a>
          </div>

        </div>
        <div class="col-12 col-xl-4 d-flex">

          <!-- Card -->
          <div class="card lift lift-lg mb-6 mb-xl-0 shadow-light-lg">

            <!-- Image -->
            <a class="card-img-top" href="#!">
              <img src="https://images.unsplash.com/photo-1526948531399-320e7e40f0ca?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80" alt="..." class="card-img-top">
            </a>

            <div class="position-relative">
              <div class="shape shape-bottom shape-fluid-x svg-shim text-white">
                <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"/>
                </svg>
              </div>
            </div>

            <!-- Body -->
            <a class="card-body" href="#!">

              <!-- Heading -->
              <h3 class="font-weight-bold text-center">
                Página web Empresarial
              </h3>

              <!-- Text -->
              <p class="mb-0 text-muted">
                Centraliza toda tu información y manten al tanto a tus empleados, clientes y proveedores en tiempo real.
              </p>

            </a>

          </div>

        </div>
      </div> <!-- / .row -->

    </div>

    <!-- SHAPE
    ================================================== -->
    <div class="position-relative">
      <div class="shape shape-bottom shape-fluid-x svg-shim text-gray-200">
        <svg viewBox="0 0 2880 56" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M720 28H0V56H995.5H1639.5H2880V28H2160C2160 28 1874 -9.82909e-10 1440 0C1006 9.829e-10 720 28 720 28Z" fill="currentColor"/>
        </svg>
      </div>
    </div>
    <!-- ABOUT
    ================================================== -->
    <section class="py-8 py-md-11 bg-gray-200">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-md-10 col-lg-7 text-center">

            <!-- Heading -->
            <h2 class="font-weight-bold">
              Echos para todo tipo de empresa
            </h2>

            <!-- Text -->
            <p class="font-size-lg text-muted mb-7 mb-md-9">
              No importa en qué esté trabajando, con quién esté o cuántos de ustedes hay, estamos echos para siempre poder ayudarlo y ser de gran ayuda para usted.
            </p>

          </div>
        </div> <!-- / .row -->
        <div class="form-row">
          <div class="col-12 col-lg-6 d-lg-flex pb-1 mb-4">

            <!-- Card -->
            <div class="card shadow-light-lg overflow-hidden" data-aos="fade-up">
              <div class="row">
                <div class="col-md-4 position-relative">

                  <!-- Image -->
                  <img src="assets/img/illustrations/undraw_team_ih79.svg" class="h-75 position-absolute right-0 mt-7 mr-n4" alt="...">

                </div>
                <div class="col-md-8">

                  <!-- Body -->
                  <div class="card-body py-7 py-md-9 text-center">

                    <!-- Heading -->
                    <h4 class="font-weight-bold">
                      Equipos chicos o grandes
                    </h4>

                    <!-- Text -->
                    <p class="text-muted mb-0">
                      Estamos prestos a siempre brindar la mejor escabalidad en nuestros productos, por eso en nuestros productos pueden interactuar grandes o pequeños volumenes de información y/o peticiones.
                    </p>

                  </div>

                </div>
              </div> <!-- / .row -->
            </div>

          </div>
          <div class="col-12 col-lg-6 d-lg-flex pb-1 mb-4">

            <!-- Card -->
            <div class="card shadow-light-lg overflow-hidden text-center" data-aos="fade-up">
              <div class="row">
                <div class="col-md-8">

                  <!-- Body -->
                  <div class="card-body py-7 py-md-9">

                    <!-- Heading -->
                    <h4 class="font-weight-bold">
                      Soporte las 24/7
                    </h4>

                    <!-- Text -->
                    <p class="text-muted mb-0">
                      Tenemos un equipo presto a brindarle el acompañamiento idóneo en todas las fases de su producto desde la puesta en marcha hasta los errores presentados en medio del funcionamiento de su producto.
                    </p>

                  </div>

                </div>
                <div class="col-md-4">

                  <!-- Image -->
                  <img src="assets/img/illustrations/onboarding.svg" class="h-75 position-absolute left-0 mt-7" alt="...">

                </div>
              </div> <!-- / .row -->
            </div>

          </div>
        </div> <!-- / .row -->
        <div class="row">
          <div class="col-12">

            <!-- Card -->
            <div class="card shadow-light-lg overflow-hidden text-center text-lg-left" data-aos="fade-up">
              <div class="row">
                <div class="col-md-4 position-relative">

                  <!-- Image -->
                  <img src="assets/img/illustrations/tabs.svg" class="h-75 position-absolute right-0 mt-6" alt="...">

                </div>
                <div class="col-md-8">

                  <!-- Body -->
                  <div class="card-body py-7 py-md-9">

                    <!-- Heading -->
                    <h4 class="font-weight-bold">
                      Productos 100% adaptables
                    </h4>

                    <!-- Text -->
                    <p class="text-muted mb-0">
                      <span class="title">Developer Men</span> crea productos modernos y vanguardistas por eso te damos la seguridad de que todos nuestros productos se adaptaran a todas las pantallas actuales brindando siempre la mejor experiencia de usuario.|
                    </p>

                  </div>

                </div>
              </div> <!-- / .row -->
            </div>

          </div>
        </div> <!-- / .row -->
        <!-- Shape -->
        <div class="shape shape-blur-1 svg-shim text-gray-200">
        </div>
      </div> <!-- / .container -->
    </section>

    <!-- SHAPE
    ================================================== -->
    <div class="position-relative" id="web-cortesia">
      <div class="shape shape-bottom shape-fluid-x svg-shim text-white">
        <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"/>
        </svg>
      </div>
    </div>
    <!--- Web de Cortesia ---------------->
    <section class="pt-6 pt-md-8 pb-8 mb-md-8">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-12">

            <div class="row">
              <div class="col-12" data-aos="fade-left">

                <div class="row mb-6 mb-md-8">
                  <div class="col-auto">
                    <!-- Icon -->
                    <div class="icon-circle bg-info text-white ">
                      <i class="fe fe-layers"></i>
                    </div>

                  </div>
                  <div class="col ml-n4">

                    <!-- Heading -->
                    <h2 class="font-weight-bold mr-2">
                      Web de Cortesia
                      <span class="badge badge-pill badge-danger-soft mw-130 float-right mb-6 mb-md-0 d-none d-lg-block">
                        <span class="h5 font-weight-bold">No incluye dominio ni hosting</span>
                      </span>
                    </h2>

                    <!-- Text -->
                    <p class="font-size-lg text-gray-700 mb-0">
                      ¿ No tienes recursos para invertir pero quieres tener presencia en internet ?
                    </p>

                  </div>
                </div> <!-- / .row -->

                <!-- Card -->
                <div class="card shadow-light-lg accordion mb-5 mb-md-6" id="helpAccordionOne">
                  <div class="list-group">
                    <div class="list-group-item">

                      <!-- Toggle -->
                      <a class="d-flex align-items-center text-reset text-decoration-none" data-toggle="collapse" href="#helpOne" role="button" aria-expanded="true" data-target="#helpOne" aria-controls="helpOne">

                        <!-- Title -->
                        <span class="mr-4 font-weight-bold">
                          Un producto especialmente echo para tí
                        </span>

                        <!-- Metadata -->
                        <div class="text-muted ml-auto">

                          <!-- Text -->
                          <span class="font-size-sm mr-4 d-none d-md-inline">

                          </span>

                          <!-- Chevron -->
                          <span class="collapse-chevron text-muted">
                            <i class="fe fe-lg fe-chevron-down"></i>
                          </span>

                        </div>

                      </a>

                      <!-- Collapse -->
                      <div class="collapse show" id="helpOne" data-parent="#helpAccordionOne">
                        <div class="py-5">

                          <!-- Text -->
                          <p class="text-gray-700">
                            Sabes que es esencial tener una web pero aún no puedes dedicar recursos a ella, no te preocupes, te proponemos una web de cortesía con una sola página por un precio mínimo.
                            <br>
                            <i class="fe fe-chevron-right ml-3"></i> Con una web de cortesía tendrás presencia en Internet con tu logotipo, diseño con tus colores corporativos, datos de localización, horarios, y enlaces a redes sociales.
                            <br>
                            <i class="fe fe-chevron-right ml-3"></i> Ya no hay excusas para no tener una web, consúltanos y quedarás convencido.
                          </p>

                        </div>
                      </div>

                    </div>
                    <div class="list-group-item">

                      <!-- Toggle -->
                      <a class="d-flex align-items-center text-reset text-decoration-none" data-toggle="collapse" href="#helpTwo" role="button" aria-expanded="false" aria-controls="helpTwo">

                        <!-- Title -->
                        <span class="mr-4">
                          Especificaciones web de cortesía
                        </span>

                        <!-- Metadata -->
                        <div class="text-muted ml-auto">

                          <!-- Text -->
                          <span class="font-size-sm mr-4 d-none d-md-inline">

                          </span>

                          <!-- Chevron -->
                          <span class="collapse-chevron text-muted">
                            <i class="fe fe-lg fe-chevron-down"></i>
                          </span>

                        </div>

                      </a> <!-- / .row -->

                      <!-- Collapse -->
                      <div class="collapse" id="helpTwo" data-parent="#helpAccordionOne">
                        <div class="py-5">

                          <!-- Text -->
                          <ol>
                            <li>Diseño estandarizado con colores y logotipo corporativo</li>
                            <li>Enlaces a redes sociales</li>
                            <li>Integramos tus redes sociales y ademas gestionamos la página para que la puedas compartir en redes sociales.</li>
                            <li>Integración de tu dirección con Google Maps.</li>
                            <li>Puedes combinarlo con otros productos de Developer Men por un costo irrisorio. (Como por ejemplo Chat Integrado,Formulario de contacto On Page con Ajax).</li>
                            <li>Te asesoramos en la compra (Según tus necesidades de un Hosting y Dominio).</li>
                          </ol>

                        </div>
                      </div>

                    </div>
                    <div class="list-group-item">

                      <!-- Toggle -->
                      <a class="d-flex align-items-center text-reset text-decoration-none" data-toggle="collapse" href="#helpThree" role="button" aria-expanded="false" aria-controls="helpThree">

                        <!-- Title -->
                        <span class="mr-4">
                          Condiciones y restricciones
                        </span>

                        <!-- Metadata -->
                        <div class="text-muted ml-auto">

                          <!-- Text -->
                          <span class="font-size-sm mr-4 d-none d-md-inline">

                          </span>

                          <!-- Chevron -->
                          <span class="collapse-chevron text-muted">
                            <i class="fe fe-lg fe-chevron-down"></i>
                          </span>

                        </div>

                      </a> <!-- / .row -->

                      <!-- Collapse -->
                      <div class="collapse" id="helpThree" data-parent="#helpAccordionOne">
                        <div class="py-5">

                          <!-- Text -->
                          <ol>
                            <li class="font-weight-bold text-danger">El servicio de Web de cortesia no integra el dominio y hosting.</li>
                            <li>Puedes seleccionar nuestro servicio de Subdominio .developermen.com con el cual tus usuario pueden ingresar de la siguiente manera www.mipagina.developermen.com por un costo mensual de $10 mil pesos Colombianos</li>
                            <li>Puedes seleccionar entre nuestro listado de empresas de Hosting y Dominio baratos.</li>
                            <li>Debes contar con tu logotipo (Developer Men cuenta con el servicio de Diseño de Logotipos y colores corporativos)</li>
                            <li>Debes contar con una dirección de domicilio correcta (Developer Men cuenta con el servicio de gestión de apariencia en buscador con Google Maps o Google My Maps).</li>
                            <li>Developer Men brinda los servicios de Chat Online y Formulario de contactanos <strong>como un producto independiente al Servicio de Web de cortesia</strong> el tomar estos servicios incurrira en un costo adicional</li>
                          </ol>

                        </div>
                      </div>

                    </div>
                  </div>
                </div>


                <!-- Divider -->
                <hr class="border-gray-300 my-6 my-md-8">



                <!-- Button -->
                <a href="./demos/webCortesia" target="_blank" class="btn btn-primary-soft mb-6 mb-md-0 lift float-left">
                  Visitar demo <i class="fe fe-arrow-up-right ml-3"></i>
                </a>
                <button class="btn btn-primary-desat mb-6 mb-md-0 lift float-right" data-toggle="modal" data-target="#modalContactenos">
                  Solicitarlo gratis<i class="fe fe-arrow-right ml-3"></i>
                </a>

              </div>
            </div> <!-- / .row -->
          </div> <!-- / .container -->
        </section>
        <div class="position-relative">
          <div class="shape shape-bottom shape-fluid-x svg-shim text-white">
            <svg viewBox="0 0 2880 56" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M720 28H0V56H995.5H1639.5H2880V28H2160C2160 28 1874 -9.82909e-10 1440 0C1006 9.829e-10 720 28 720 28Z" fill="currentColor"/>
            </svg>
          </div>
        </div>

        <!-- SHAPE
        ================================================== -->
        <section class="mt-n6 top-0" align="center" id="web-basica">
          <div class="container">
            <div class="row">
              <div class="col-12">

                <a href="#web-basica" class="btn btn-info btn-rounded-circle btn-lg scrl-down" data-toggle="smooth-scroll">
                  <i class="fe fe-arrow-down" style="font-size:25px;"></i>
                </a>

              </div>
            </div>
          </div>
        </section>


        <!-- Web Personal -->
        <section class="productos productosDiv pt-8 pb-11 pt-md-9 pb-md-12 py-lg-14 bg-white bg-between" style="background-image: url(assets/img/illustrations/), url(assets/img/illustrations/undraw_features_overview_jg7a.svg);background-attachment: fixed;background-size:auto;">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-12">
                <div class="row">
                  <div class="col-12" data-aos="fade-down">

                    <div class="row mb-6 mb-md-8">
                      <div class="col-auto">
                        <!-- Icon -->
                        <div class="icon-circle bg-primary text-white ">
                          <i class="fe fe-users"></i>
                        </div>

                      </div>
                      <div class="col ml-n4">

                        <!-- Heading -->
                        <h2 class="font-weight-bold mr-2">
                          Web Básica
                        </h2>

                        <!-- Text -->
                        <p class="font-size-lg text-gray-700 mb-0">
                          Date a conocer al mundo!
                        </p>

                      </div>
                    </div> <!-- / .row -->

                    <!-- Card -->
                    <div class="card shadow-light-lg accordion mb-5 mb-md-6" id="webPersonal">
                      <div class="list-group">
                        <div class="list-group-item">

                          <!-- Toggle -->
                          <a class="d-flex align-items-center text-reset text-decoration-none" data-toggle="collapse" href="#personalOne" role="button" aria-expanded="true" data-target="#personalOne" aria-controls="personalOne">

                            <!-- Title -->
                            <span class="mr-4 font-weight-bold">
                              Un producto especialmente echo para tí
                            </span>

                            <!-- Metadata -->
                            <div class="text-muted ml-auto">

                              <!-- Text -->
                              <span class="font-size-sm mr-4 d-none d-md-inline">

                              </span>

                              <!-- Chevron -->
                              <span class="collapse-chevron text-muted">
                                <i class="fe fe-lg fe-chevron-down"></i>
                              </span>

                            </div>

                          </a>

                          <!-- Collapse -->
                          <div class="collapse show" id="personalOne" data-parent="#webPersonal">
                            <div class="py-5">

                              <!-- Text -->
                              <p class="text-gray-700">
                                Sabes que es esencial tener una web pero aún no puedes dedicar recursos a ella, no te preocupes, te proponemos una web - Básica para dar los primeros pasos en la Web, con una sola página por un precio mínimo de $ 495.0000" por paquete (Pesos Colombianos).
                                <br>
                                <i class="fe fe-chevron-right ml-3"></i> Con una web - básica tendrás presencia en Internet con tu logotipo, diseño con tus colores corporativos, opción de slider inicial con un máximo de integración de (4) imagenes, sección Quiénes Somos, datos de localización, horarios, y enlaces a redes sociales.
                                <br>
                                <i class="fe fe-chevron-right ml-3"></i> Ya no hay excusas para no tener una web, consúltanos y quedarás convencido.
                              </p>

                            </div>
                          </div>

                        </div>
                        <div class="list-group-item">

                          <!-- Toggle -->
                          <a class="d-flex align-items-center text-reset text-decoration-none" data-toggle="collapse" href="#personalTwo" role="button" aria-expanded="false" aria-controls="personalTwo">

                            <!-- Title -->
                            <span class="mr-4">
                              Especificaciones web personal
                            </span>

                            <!-- Metadata -->
                            <div class="text-muted ml-auto">

                              <!-- Text -->
                              <span class="font-size-sm mr-4 d-none d-md-inline">

                              </span>

                              <!-- Chevron -->
                              <span class="collapse-chevron text-muted">
                                <i class="fe fe-lg fe-chevron-down"></i>
                              </span>

                            </div>

                          </a> <!-- / .row -->

                          <!-- Collapse -->
                          <div class="collapse" id="personalTwo" data-parent="#webPersonal">
                            <div class="py-5">

                              <!-- Text -->
                              <ol>
                                <li>Diseño página On-Page (Todo en una)</li>
                                <li>Diseño estandarizado con colores y logotipo corporativo. (Logotipo no incluido)</li>
                                <li>Enlaces a redes sociales</li>
                                <li>Integramos tus redes sociales y ademas gestionamos la página para que la puedas compartir en redes sociales.</li>
                                <li>Puedes combinarlo con otros productos de Developer Men por un costo irrisorio. (Como por ejemplo Chat Integrado,Formulario de contacto On Page con Ajax).</li>
                                <li class="font-weight-bold text-danger">* No es un sitio administrable * Si deseas un sitio administrable se genera un cobro adicional por este servicio</li>
                              </ol>
                            </div>
                          </div>

                        </div>
                        <div class="list-group-item">

                          <!-- Toggle -->
                          <a class="d-flex align-items-center text-reset text-decoration-none" data-toggle="collapse" href="#personalThree" role="button" aria-expanded="false" aria-controls="personalThree">

                            <!-- Title -->
                            <span class="mr-4">
                              Condiciones y restricciones
                            </span>

                            <!-- Metadata -->
                            <div class="text-muted ml-auto">

                              <!-- Text -->
                              <span class="font-size-sm mr-4 d-none d-md-inline">

                              </span>

                              <!-- Chevron -->
                              <span class="collapse-chevron text-muted">
                                <i class="fe fe-lg fe-chevron-down"></i>
                              </span>

                            </div>

                          </a> <!-- / .row -->

                          <!-- Collapse -->
                          <div class="collapse" id="personalThree" data-parent="#webPersonal">
                            <div class="py-5">

                              <!-- Text -->
                              <ol>
                                <li>Página On-Page o Multi Nivel</li>
                                <li>Responsive Design / Diseño responsivo</li>
                                <li>SEO Básico</li>
                                <li>Debes contar con tu logotipo (Developer Men cuenta con el servicio de Diseño de Logotipos y colores corporativos)</li>
                              </ol>

                            </div>
                          </div>

                        </div>
                      </div>
                    </div>


                    <!-- Divider -->
                    <hr class="border-gray-300 my-6 my-md-8">



                    <!-- Button -->
                    <a href="http://santiagoarangog.developermen.com" target="_blank" class="btn btn-primary-soft mb-6 mb-md-0 lift float-left">
                      Visitar demo <i class="fe fe-arrow-up-right ml-3"></i>
                    </a>
                    <button class="btn btn-primary-desat mb-6 mb-md-0 lift float-right" data-toggle="modal" data-target="#modalContactenos">
                      Solicitarlo gratis<i class="fe fe-arrow-right ml-3"></i>
                    </a>

                  </div>
                </div> <!-- / .row -->
              </div> <!-- / .container -->
            </section>


            <!-- SHAPE
            ================================================== -->
            <section class="mt-n6 top-0" align="center" id="web-profesional">
              <div class="container">
                <div class="row">
                  <div class="col-12">

                    <a href="#web-profesional" class="btn btn-info btn-rounded-circle btn-lg scrl-down" data-toggle="smooth-scroll">
                      <i class="fe fe-arrow-down" style="font-size:25px;"></i>
                    </a>

                  </div>
                </div>
              </div>
            </section>


            <!-- Web Profesional -->
            <section class="pt-5 pt-md-7">
              <div class="container">
                <div class="row mb-6 mb-md-8" data-aos="fade-right">
                  <div class="col-auto">
                    <!-- Icon -->
                    <div class="icon-circle bg-info text-white ">
                      <i class="fe fe-box"></i>
                    </div>

                  </div>
                  <div class="col ml-n4">

                    <!-- Heading -->
                    <h2 class="font-weight-bold mr-2">
                      Web Profesional
                    </h2>

                    <!-- Text -->
                    <p class="font-size-lg text-gray-700 mb-0">
                      Un producto perfecto para pequeñas y medianas empresas
                    </p>

                  </div>
                </div> <!-- / .row -->

                <div class="row align-items-center">
                  <div class="col-12 col-md-6"  data-aos="fade-right">

                    <!-- Text -->
                    <p class="font-size-lg text-muted mb-5">
                      Una herramienta online puede permitirle centralizar información, almacenar datos y tener una red de comunicación mas asertiva en su compañia.
                      <br>
                      <i class="fe fe-chevron-right ml-3"></i> Una web profesional permite mostrar los servicios, dar a conocer quienes son y que labor realizan, adicional a esto pueden mostrar su ubicación y tener un medio de contacto centralizado con sus usuarios y empleados.
                    </p>

                    <!-- Button -->
                    <a href="#!" class="btn btn-primary-desat mb-6 mb-md-0 lift" data-toggle="modal" data-target="#modalWebProfesional">
                      Saber más <i class="fe fe-plus ml-3"></i>
                    </a>

                  </div>
                  <div class="col-12 col-md-6" data-aos="fade-left">
                    <img src="assets/img/illustrations/profesional.svg" alt="Web Profesional" class="img-fluid mw-130 float-left mb-6 mb-md-0">
                  </div>
                </div> <!-- / .row -->
                <div class="row">
                  <div class="col-12 mb-5 mb-md-6" data-aos="fade-up">
                    <!-- Divider -->
                    <hr class="border-gray-300 my-6 my-md-8">

                    <!-- Button -->
                    <a href="#!" class="btn btn-primary-soft mb-6 mb-md-0 lift float-left" data-toggle="modal" data-target="#modalWebProfesional">
                      Saber más <i class="fe fe-arrow-up-right ml-3"></i>
                    </a>
                    <button class="btn btn-primary-desat mb-6 mb-md-0 lift float-right" data-toggle="modal" data-target="#modalContactenos">
                      Solicitarlo gratis<i class="fe fe-arrow-right ml-3"></i>
                    </a>
                  </div>
                </div>
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
