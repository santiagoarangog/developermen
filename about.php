<?php
//Inician variables que se envian al Header para gestionarlas cuando se comparte la pagina
//Seo de La Pagina
$description = "Empresa de Desarrollo Web a la Medida, Ubicada en Llanogrande Rionegro Ant. Colombia. Ofrecemos: Desarrollo web en el oriente antioqueño y oriente cercano, Ayudas a Desarrolladores, Desarrollos web a la medida, Marketing Online, SEO, Monitorizacion de Trafico en Su Pagina, contamos con Planes para la Pagina que usted su Organizacion necesitan.";
//Seo para facebook
$ogTitle = "Developer Men &bull; Desarrollo Web a la medida de lo que usted necesita";
$ogDescription="Empresa de Desarrollo Web a la Medida, Ubicada en Llanogrande Rionegro Ant. Colombia. Ofrecemos: Desarrollo web en el oriente antioqueño y oriente cercano, Ayudas a Desarrolladores, Desarrollos web a la medida, Marketing Online, SEO, Monitorizacion de Trafico en Su Pagina, contamos con Planes para la Pagina que usted su Organizacion necesitan.";
$ogUrl="www.developermen.com";
$ogSiteName="Desarrollo Web a la Medida, Planes de Compra, Diseño Grafico, Plantillas Web, Blog de Desarrollo Web.";
$ogArticleTag="Developer Men &bull; Desarrollo web a la medida";
$ogArticleSection="Inicio";
$ogImage="https://developermen.com/assets/img/media/developerMenInicio.png";
//Seo para Twitter
$twitterDescription="Empresa de Desarrollo Web a la Medida, Ubicada en Llanogrande Rionegro Ant. Colombia. Ofrecemos: Desarrollo web en el oriente antioqueño y oriente cercano, Ayudas a Desarrolladores, Desarrollos web a la medida, Marketing Online, SEO, Monitorizacion de Trafico en Su Pagina, contamos con Planes para la Pagina que usted su Organizacion necesitan.";
$twitterTitle="Developer Men &bull; Desarrollo Web a la medida de lo que usted necesita";
$twitterImage="https://developermen.com/assets/img/media/developerMenInicio.png";
$active = 'Inicio';
$title = 'Developer Men &bull; Diseño y desarrollo web a la medida';
$canonical="https://developermen.com/index";
require_once("assets/template/header.php");
include("assets/functions/global.php");
aleatorio($img);
?>
<body>
  <?php
  include("assets/features/modals.php");
  $flex = 'flex';
  $fixed = "sticky";
  $navbar = "light";
  require_once("assets/template/navbar.php");
  ?>
  <!-- WELCOME
  ================================================== -->
  <section class="py-8 py-md-11 border-bottom">
    <div class="shape shape-fluid-x shape-blur-2 svg-shim text-gray-100 d-none d-lg-block">
      <svg viewBox="0 0 1313 768" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M442.794 768C605.882 768 748.362 679.773 825.111 548.444L825.294 549C825.294 549 825.543 548.251 826.056 546.819C839.139 524.212 850.279 500.339 859.248 475.43C901.996 397.81 989.306 277.09 1144.29 206L1143.37 205.307C1230.34 171.296 1295.63 94.049 1312.83 0H1.29419V295.514C0.631105 305.423 0.294189 315.422 0.294189 325.5C0.294189 569.886 198.408 768 442.794 768Z" fill="currentColor"/>
      </svg>
    </div>
    <div class="container">
      <div class="row justify-content-center">
        <!-- Shape -->

        <div class="col-12 col-md-10 col-lg-8 text-center">

          <!-- Headin -->
          <h1 class="display-2 text-gray-700">
            Un pequeño equipo.
          </h1>
          <h2 class="font-weight-bold text-gray-600">
            Con un corazón muy grande
          </h2>

          <!-- Text -->
          <p class="lead text-muted mb-7 mb-md-9">
            Nuestro enfoque siempre está en encontrar las mejores personas para trabajar. Nuestro nivel es alto, pero pareces listo para asumir el desafío.
          </p>

        </div>
      </div> <!-- / .row -->
      <div class="row">
        <div class="col-12">

          <!-- Image -->
          <div class="form-row">
            <div class="col-4">

              <img src="assets/img/team/IMG_4262.jpeg" class="img-fluid rounded shadow-lg" alt="...">

            </div>
            <div class="col-3">

              <img src="https://images.unsplash.com/photo-1519389950473-47ba0277781c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80" class="img-fluid rounded shadow-lg mb-4" alt="...">

              <img src="https://images.unsplash.com/photo-1527525443983-6e60c75fff46?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=632&q=80" class="img-fluid rounded shadow-lg mt-1" alt="...">

            </div>
            <div class="col-5">

              <div class="form-row mb-4">
                <div class="col-5">

                  <img src="https://images.unsplash.com/photo-1531206715517-5c0ba140b2b8?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80" class="img-fluid rounded shadow-lg" alt="...">

                </div>
                <div class="col-7">

                  <img src="https://images.unsplash.com/photo-1562185000-12e4f02e2020?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80" class="img-fluid rounded shadow-lg" alt="...">

                </div>
              </div> <!-- / .row -->

              <img src="assets/img/team/david.jpg" class="img-fluid rounded shadow-lg" alt="...">

            </div>
          </div>

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
  <!-- LOCATION
  ================================================== -->
  <section class="pt-8 pt-md-0 border-bottom bg-light">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-6">

          <!-- Map (mobile) -->
          <div class="embed-responsive embed-responsive-1by1 d-md-none">
            <div class="embed-responsive-item" data-toggle="map" data-options='{"center": [-75.4015223, 6.1322997], "zoom": 13}'></div>
          </div>

          <!-- Map -->
          <div class="position-relative h-100 vw-50 float-right d-none d-md-block">

            <!-- Map -->
            <div class="h-100 w-100" data-toggle="map" data-options='{"center": [-75.4015223, 6.1322997], "zoom": 13}'></div>

            <!-- Shape -->
            <div class="shape shape-right shape-fluid-y svg-shim text-light">
              <svg viewBox="0 0 100 1544" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 386V0H100V1544H50V1158L0 386Z" fill="currentColor"/>
              </svg>
            </div>

          </div>

        </div>

        <div class="col-12 col-md-6 col-lg-5 offset-lg-1 py-8 py-md-11 py-lg-12">

          <!-- Heading -->
          <h2>
            Estamos ubicados en:
          </h2>
          <h3>
            Llanogrande, Rionegro (Ant.) Colombia
            <br>
          </h3>
          <h3>
            <span class="text-info">Disfrutamos <span data-toggle="typed" data-options='{"strings": ["la diversidad cultural", "las playas de arena blanca", "los fines de semana soleados"]}'></span>.</span>
          </h3>

          <!-- Text -->
          <p class="font-size-lg text-gray-700 mb-6">
            Estamos ubicados en una de las mejores zonas de Rionegro para brindarte el mejor acceso.
          </p>

          <!-- Stats -->
          <div class="d-flex">
            <div class="pr-5">
              <h3 class="text-success mb-0">
                <span data-toggle="countup" data-from="0" data-to="100" data-aos data-aos-id="countup:in">0</span>%
              </h3>
              <p class="text-gray-700 mb-0">
                Aprobación
              </p>
            </div>
            <div class="border-left border-gray-300"></div>
            <div class="px-5">
              <h3 class="text-success mb-0">
                <span data-toggle="countup" data-from="0" data-to="85" data-aos data-aos-id="countup:in">0</span>%
              </h3>
              <p class="text-gray-700 mb-0">
                Días soleados
              </p>
            </div>
            <div class="border-left border-gray-300"></div>
            <div class="pl-5">
              <h3 class="text-success mb-0">
                <span data-toggle="countup" data-from="0" data-to="52" data-aos data-aos-id="countup:in">0</span>/<span data-toggle="countup" data-from="0" data-to="48" data-aos data-aos-id="countup:in">0</span>
              </h3>
              <p class="text-gray-700 mb-0">
                Relación de género
              </p>
            </div>
          </div>

        </div>
      </div> <!-- / .row -->
    </div> <!-- / .container -->
  </section>

  <!-- ABOUT
  ================================================== -->
  <section class="py-8 py-md-11 divShadow" style="background-image:url(https://images.unsplash.com/photo-1451187580459-43490279c0fa?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1352&q=80);">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12 col-md-10 col-lg-7 text-center">

          <!-- Heading -->
          <h2 class="font-weight-bold text-light">
            Nos mueve algo y es siempre ofrecer lo mejor de nosotros
          </h2>

          <!-- Text -->
          <p class="font-size-lg text-light mb-7 mb-md-9">
            No importa en qué esté trabajando, con quién esté o cuántos de ustedes hay, estamos echos para siempre poder ayudarlo y ser de gran ayuda para usted.
          </p>

        </div>
      </div> <!-- / .row -->
      <div class="row">
        <div class="col-12">
          <!-- Card -->
          <div class="card shadow-light-lg overflow-hidden text-center text-lg-left" data-aos="fade-up">
            <div class="row">
              <div class="col-md-8 position-relative">
                <!-- Body -->
                <div class="card-body py-7 py-md-9 text-justify">

                  <!-- Heading -->
                  <h4 class="font-weight-bold text-info">
                    Nuestra misión
                    <hr class="border-gray-300">
                  </h4>

                  <!-- Text -->
                  <p class="text-muted mb-0">
                    Con estándares de calidad y vanguardia en el diseño web (FrontEnd y BackEnd), ofrecer siempre a nuestros usuarios un producto que se adapte a las necesidades de su compañía o su persona.
                    En el sentido de nuestros servicios ofrecidos además del desarrollo y diseño web brindar servicios que además de atraer una audiencia genere sentido social generando campañas de social media y publicitarias con un sentido social claro.
                    Ofrecer servicios con calidad y calidez en nuestra organización es el eje central de nuestra ideología de negocio.
                  </p>

                </div>

              </div>
              <div class="col-md-4">
                <!-- Image -->
                <img src="assets/img/illustrations/To_the_stars.svg" class="h-75 position-absolute left-0 mt-6" alt="...">

              </div>

            </div> <!-- / .row -->
          </div>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-12">

          <!-- Card -->
          <div class="card shadow-light-lg overflow-hidden text-center text-lg-left" data-aos="fade-up">
            <div class="row">
              <div class="col-md-4 position-relative">

                <!-- Image -->
                <img src="assets/img/illustrations/Outer_space.svg" class="h-75 position-absolute right-0 mt-6" alt="...">

              </div>
              <div class="col-md-8">

                <!-- Body -->
                <div class="card-body py-7 py-md-9 text-justify">

                  <!-- Heading -->
                  <h4 class="font-weight-bold text-info">
                    Nuestra VISIÓN
                    <hr class="border-gray-300">
                  </h4>

                  <!-- Text -->
                  <p class="text-muted mb-0">
                    Para el año 2020 seremos la empresa de Desarrollo y Diseño Web catalogada en Colombia como la mejor compañía en buenas prácticas y en productos de vanguardia por la trayectoria y trabajos entregados en nuestra labor, además de tener un sentido social como ninguna empresa de nuestro medio ofreciendo enseñanzas y capacitación a personas de bajos extractos en el mundo digital.
                  </p>

                </div>

              </div>

            </div> <!-- / .row -->


          </div>

        </div>
      </div> <!-- / .row -->
    </div>
  </section>
  <!-- SHAPE
  ================================================== -->
  <div class="position-relative">
    <div class="shape shape-bottom shape-fluid-x svg-shim text-white" style="z-index:100;">
      <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"/>
      </svg>
    </div>
  </div>
  <?php
  include("assets/features/integrations.php");
  ?>

  <!-- SLIDER
  ================================================== -->
  <section>
    <div class="flickity-button-white flickity-button-inset" data-flickity='{"imagesLoaded": true, "wrapAround": true, "pageDots": false}'>
      <div class="w-100">

        <!-- Image -->
        <img src="https://images.unsplash.com/photo-1517134191118-9d595e4c8c2b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80" class="img-fluid w-100" alt="...">

        <!-- Shape -->
        <div class="shape shape-top shape-fluid-x svg-shim text-white">
          <svg viewBox="0 0 2880 72" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M2880 0H0V54.1118H720C720 54.1118 1009.42 94.3602 1425 54.1118C1841.5 16.3789 2160 54.1118 2160 54.1118H2880V0Z" fill="currentColor"/>
          </svg>
        </div>

      </div>

      <div class="w-100">

        <!-- Image -->
        <img src="https://images.unsplash.com/photo-1454165205744-3b78555e5572?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80" class="img-fluid w-100" alt="...">

        <!-- Shape -->
        <div class="shape shape-top shape-fluid-x svg-shim text-white">
          <svg viewBox="0 0 2880 72" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M2880 0H0V54.1118H720C720 54.1118 1009.42 94.3602 1425 54.1118C1841.5 16.3789 2160 54.1118 2160 54.1118H2880V0Z" fill="currentColor"/>
          </svg>
        </div>

      </div>

      <div class="w-100">

        <!-- Image -->
        <img src="https://images.unsplash.com/photo-1518773553398-650c184e0bb3?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80" class="img-fluid w-100" alt="...">

        <!-- Shape -->
        <div class="shape shape-top shape-fluid-x svg-shim text-white">
          <svg viewBox="0 0 2880 72" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M2880 0H0V54.1118H720C720 54.1118 1009.42 94.3602 1425 54.1118C1841.5 16.3789 2160 54.1118 2160 54.1118H2880V0Z" fill="currentColor"/>
          </svg>
        </div>

      </div>

      <div class="w-100">

        <!-- Image -->
        <img src="https://images.unsplash.com/photo-1515879218367-8466d910aaa4?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1950&q=80" class="img-fluid w-100" alt="...">

        <!-- Shape -->
        <div class="shape shape-top shape-fluid-x svg-shim text-white">
          <svg viewBox="0 0 2880 72" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M2880 0H0V54.1118H720C720 54.1118 1009.42 94.3602 1425 54.1118C1841.5 16.3789 2160 54.1118 2160 54.1118H2880V0Z" fill="currentColor"/>
          </svg>
        </div>

      </div>
      <div class="w-100">

        <!-- Image -->
        <img src="https://images.unsplash.com/photo-1517694712202-14dd9538aa97?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80" class="img-fluid w-100" alt="...">

        <!-- Shape -->
        <div class="shape shape-top shape-fluid-x svg-shim text-white">
          <svg viewBox="0 0 2880 72" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M2880 0H0V54.1118H720C720 54.1118 1009.42 94.3602 1425 54.1118C1841.5 16.3789 2160 54.1118 2160 54.1118H2880V0Z" fill="currentColor"/>
          </svg>
        </div>

      </div>

      <div class="w-100">

        <!-- Image -->
        <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1352&q=80" class="img-fluid w-100" alt="...">

        <!-- Shape -->
        <div class="shape shape-top shape-fluid-x svg-shim text-white">
          <svg viewBox="0 0 2880 72" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M2880 0H0V54.1118H720C720 54.1118 1009.42 94.3602 1425 54.1118C1841.5 16.3789 2160 54.1118 2160 54.1118H2880V0Z" fill="currentColor"/>
          </svg>
        </div>

      </div>
      <div class="w-100">

        <!-- Image -->
        <img src="https://images.unsplash.com/photo-1550645612-83f5d594b671?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" class="img-fluid w-100" alt="...">

        <!-- Shape -->
        <div class="shape shape-top shape-fluid-x svg-shim text-white">
          <svg viewBox="0 0 2880 72" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M2880 0H0V54.1118H720C720 54.1118 1009.42 94.3602 1425 54.1118C1841.5 16.3789 2160 54.1118 2160 54.1118H2880V0Z" fill="currentColor"/>
          </svg>
        </div>

      </div>



    </div>
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

  <!-- CTA
  ================================================== -->
  <section class="pt-6 pt-md-8 bg-dark text-light">
    <div class="container pb-6 pb-md-8 border-bottom">
      <div class="row align-items-center">
        <div class="col-12 col-md">

          <!-- Heading -->
          <h3 class="font-weight-bold mb-1">
            Interesado en ser parte de este equipo?
          </h3>

          <!-- Text -->
          <p class="font-size-lg text-muted mb-5 mb-md-0">
            Contáctanos y nos pondremos en contacto contigo.
          </p>

        </div>
        <div class="col-12 col-md-auto">

          <!-- Button -->
          <button data-toggle="modal" data-target="#modalContactenos" class="btn btn-primary lift">
            Contactar
          </button>

        </div>
      </div> <!-- / .row -->
    </div> <!-- / .container -->
  </section>
  <?php
  $bg = "dark";
  include("assets/template/footer.php");
  ?>
  <!-- Map -->
  <script src='https://api.mapbox.com/mapbox-gl-js/v0.53.0/mapbox-gl.js'></script>
</body>
</html>
