<?php $title = 'Developer Men &bull; Políticas de Usuario & Sitio';
require_once("assets/template/header.php");
?>
<body>

  <?php
  include("assets/features/modals.php");
  $flex = 'wrap';
  $fixed = "sticky";
  $navbar = "dark";
  require_once("assets/template/navbar.php");
  ?>
  <!-- BREADCRUMB
  ================================================== -->
  <nav class="bg-gray-200">
    <div class="container">
      <div class="row">
        <div class="col-12">

          <!-- Breadcrumb -->
          <ol class="breadcrumb breadcrumb-scroll">
            <li class="breadcrumb-item">
              <a href="index" class="href text-gray-700">
                Inicio
              </a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
              Politicas
            </li>
          </ol>

        </div>
      </div> <!-- / .row -->
    </div> <!-- / .container -->
  </nav>

  <!-- CONTENT
  ================================================== -->
  <section class="pt-6 pt-md-8 pb-8 mb-md-8">
    <div class="container">
      <div class="row">
        <div class="col-12">

          <div class="row mb-6 mb-md-8">
            <div class="col-auto">

              <!-- Icon -->
              <div class="icon-circle bg-info text-white ">
                <i class="fe fe-users"></i>
              </div>

            </div>
            <div class="col ml-n4">

              <!-- Heading -->
              <h2 class="font-weight-bold mb-0">
                Tratamiento de datos
              </h2>

              <!-- Text -->
              <p class="font-size-lg text-gray-700 mb-0">
                Conoce todas las politicas con que contamos para salvaguardar tu información personal
              </p>

            </div>
          </div> <!-- / .row -->

          <!-- Card -->
          <div class="card shadow-light-lg accordion mb-5 mb-md-6" id="helpAccordionOne">
            <div class="list-group">
              <div class="list-group-item">

                <!-- Header -->
                <div class="d-flex align-items-center">
                  <div class="mr-auto">

                    <!-- Heading -->
                    <h4 class="font-weight-bold mb-0">
                      Politicas tratamiento de datos personales
                    </h4>

                    <!-- Text -->
                    <p class="font-size-sm text-muted mb-0">
                      Estas son las políticas para salvaguardar tu información personal proporcionada en nuestras plataformas
                    </p>

                  </div>

                  <!-- Badge -->
                  <span class="badge badge-pill badge-success-soft ml-4">
                    <span class="h6 text-uppercase">
                      4 politicas
                    </span>
                  </span>

                </div>

              </div>
              <div class="list-group-item">

                <!-- Toggle -->
                <a class="d-flex align-items-center text-reset text-decoration-none" data-toggle="collapse" href="#helpOne" role="button" aria-expanded="false" aria-controls="helpOne">

                  <!-- Title -->
                  <span class="mr-4">
                    Datos proporcionados por medio de formularios en nuestro sitio web
                  </span>

                  <!-- Metadata -->
                  <div class="text-muted ml-auto">

                    <!-- Text -->
                    <span class="font-size-sm mr-4 d-none d-md-inline">
                      Actualizado hace 1 semana(s)
                    </span>

                    <!-- Chevron -->
                    <span class="collapse-chevron text-muted">
                      <i class="fe fe-lg fe-chevron-down"></i>
                    </span>

                  </div>

                </a>

                <!-- Collapse -->
                <div class="collapse" id="helpOne" data-parent="#helpAccordionOne">
                  <div class="py-5">

                    <!-- Text -->
                    <p class="text-gray-700">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt rerum minima a possimus, amet perferendis, temporibus obcaecati pariatur. Reprehenderit magnam necessitatibus vel culpa provident quas nesciunt sunt aut cupiditate fugiat! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt rerum minima a possimus, amet perferendis, temporibus obcaecati pariatur. Reprehenderit magnam necessitatibus vel culpa provident quas nesciunt sunt aut cupiditate fugiat!
                    </p>

                    <div class="d-flex align-items-center">

                      <!-- Vote -->
                      <div class="btn-group btn-group-toggle mr-4" data-toggle="buttons">
                        <label class="btn btn-sm btn-white">
                          <input type="radio" name="helpOneVote" id="helpOneDown" checked> <i class="fe fe-thumbs-down"></i>
                        </label>
                        <label class="btn btn-sm btn-white">
                          <input type="radio" name="helpOneVote" id="helpOneUp"> <i class="fe fe-thumbs-up"></i>
                        </label>
                      </div>

                      <!-- Text -->
                      <span class="font-size-sm text-muted">
                        Did this help solve your issue?
                      </span>

                    </div>

                  </div>
                </div>

              </div>
              <div class="list-group-item">

                <!-- Toggle -->
                <a class="d-flex align-items-center text-reset text-decoration-none" data-toggle="collapse" href="#helpTwo" role="button" aria-expanded="false" aria-controls="helpTwo">

                  <!-- Title -->
                  <span class="mr-4">
                    Datos proporcionados por medio de mensajes de texto
                  </span>

                  <!-- Metadata -->
                  <div class="text-muted ml-auto">

                    <!-- Text -->
                    <span class="font-size-sm mr-4 d-none d-md-inline">
                      Actualizado hace 2 semana(s)
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
                    <p class="text-gray-700">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt rerum minima a possimus, amet perferendis, temporibus obcaecati pariatur. Reprehenderit magnam necessitatibus vel culpa provident quas nesciunt sunt aut cupiditate fugiat! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt rerum minima a possimus, amet perferendis, temporibus obcaecati pariatur. Reprehenderit magnam necessitatibus vel culpa provident quas nesciunt sunt aut cupiditate fugiat!
                    </p>

                    <div class="d-flex align-items-center">

                      <!-- Vote -->
                      <div class="btn-group btn-group-toggle mr-4" data-toggle="buttons">
                        <label class="btn btn-sm btn-white">
                          <input type="radio" name="helpTwoVote" id="helpTwoDown" checked> <i class="fe fe-thumbs-down"></i>
                        </label>
                        <label class="btn btn-sm btn-white">
                          <input type="radio" name="helpTwoVote" id="helpTwoUp"> <i class="fe fe-thumbs-up"></i>
                        </label>
                      </div>

                      <!-- Text -->
                      <span class="font-size-sm text-muted">
                        Did this help solve your issue?
                      </span>

                    </div>

                  </div>
                </div>

              </div>
              <div class="list-group-item">

                <!-- Toggle -->
                <a class="d-flex align-items-center text-reset text-decoration-none" data-toggle="collapse" href="#helpThree" role="button" aria-expanded="false" aria-controls="helpThree">

                  <!-- Title -->
                  <span class="mr-4">
                    Datos proporcionados por correo electrónico
                  </span>

                  <!-- Metadata -->
                  <div class="text-muted ml-auto">

                    <!-- Text -->
                    <span class="font-size-sm mr-4 d-none d-md-inline">
                      Updated yesterday
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
                    <p class="text-gray-700">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt rerum minima a possimus, amet perferendis, temporibus obcaecati pariatur. Reprehenderit magnam necessitatibus vel culpa provident quas nesciunt sunt aut cupiditate fugiat! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt rerum minima a possimus, amet perferendis, temporibus obcaecati pariatur. Reprehenderit magnam necessitatibus vel culpa provident quas nesciunt sunt aut cupiditate fugiat!
                    </p>

                    <div class="d-flex align-items-center">

                      <!-- Vote -->
                      <div class="btn-group btn-group-toggle mr-4" data-toggle="buttons">
                        <label class="btn btn-sm btn-white">
                          <input type="radio" name="helpThreeVote" id="helpThreeDown" checked> <i class="fe fe-thumbs-down"></i>
                        </label>
                        <label class="btn btn-sm btn-white">
                          <input type="radio" name="helpThreeVote" id="helpThreeUp"> <i class="fe fe-thumbs-up"></i>
                        </label>
                      </div>

                      <!-- Text -->
                      <span class="font-size-sm text-muted">
                        Did this help solve your issue?
                      </span>

                    </div>

                  </div>
                </div>

              </div>
              <div class="list-group-item">

                <!-- Toggle -->
                <a class="d-flex align-items-center text-reset text-decoration-none" data-toggle="collapse" href="#helpFour" role="button" aria-expanded="false" aria-controls="helpFour">

                  <!-- Title -->
                  <span class="mr-4">
                    Datos proporcionados por medio de llamada telefónica
                  </span>

                  <!-- Metadata -->
                  <div class="text-muted ml-auto">

                    <!-- Text -->
                    <span class="font-size-sm mr-4 d-none d-md-inline">
                      Updated last month
                    </span>

                    <!-- Chevron -->
                    <span class="collapse-chevron text-muted">
                      <i class="fe fe-lg fe-chevron-down"></i>
                    </span>

                  </div>

                </a> <!-- / .row -->

                <!-- Collapse -->
                <div class="collapse" id="helpFour" data-parent="#helpAccordionOne">
                  <div class="py-5">

                    <!-- Text -->
                    <p class="text-gray-700">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt rerum minima a possimus, amet perferendis, temporibus obcaecati pariatur. Reprehenderit magnam necessitatibus vel culpa provident quas nesciunt sunt aut cupiditate fugiat! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt rerum minima a possimus, amet perferendis, temporibus obcaecati pariatur. Reprehenderit magnam necessitatibus vel culpa provident quas nesciunt sunt aut cupiditate fugiat!
                    </p>

                    <div class="d-flex align-items-center">

                      <!-- Vote -->
                      <div class="btn-group btn-group-toggle mr-4" data-toggle="buttons">
                        <label class="btn btn-sm btn-white">
                          <input type="radio" name="helpFourVote" id="helpFourDown" checked> <i class="fe fe-thumbs-down"></i>
                        </label>
                        <label class="btn btn-sm btn-white">
                          <input type="radio" name="helpFourVote" id="helpFourUp"> <i class="fe fe-thumbs-up"></i>
                        </label>
                      </div>

                      <!-- Text -->
                      <span class="font-size-sm text-muted">
                        Did this help solve your issue?
                      </span>

                    </div>

                  </div>
                </div>

              </div>
            </div>
          </div>


          <!-- Divider -->
          <hr class="border-gray-300 my-6 my-md-8">

          <!-- Header -->
          <h3 class="font-weight-bold">
            <i class="fa fa-caret-right"></i> Categorías relacionadas
          </h3>

          <!-- Text -->
          <p class="text-muted mb-6 mb-md-8">
            Si no encontraste lo que necesitabas, ¡esto podría ayudarte!
          </p>

          <!-- Categories -->
          <div class="row">
            <div class="col-12 col-md-6 col-lg-4">

              <!-- Card -->
              <div class="card card-border border-info shadow-lg mb-6 mb-md-8 mb-lg-0 lift lift-lg">
                <div class="card-body text-center">

                  <!-- Icon -->
                  <div class="icon-circle bg-7 text-white mb-5">
                    <i class="fas fa-store-alt fa-2x"></i>
                  </div>

                  <!-- Heading -->
                  <h4 class="font-weight-bold">
                    Terminos de servicio
                  </h4>

                  <!-- Text -->
                  <p class="text-gray-700 mb-5">
                    Aquí describimos muchos de los beneficios legales, pero el objetivo final es nuestro objetivo de cuidar siempre de usted y de como resguardamos tu información.
                  </p>

                  <a href="terms-of-service" class="btn btn-info btn-sm btn-block" data-dismiss="cookies" name="button" style="align:center;">Saber más</a>

                </div>
              </div>

            </div>

            <div class="col-12 col-md-6 col-lg-4">

              <!-- Card -->
              <div class="card card-border border-info shadow-lg mb-6 mb-md-8 mb-lg-0 lift lift-lg">
                <div class="card-body text-center">

                  <!-- Icon -->
                  <div class="icon-circle bg-14 text-white mb-5">
                    <i class="fas fa-cookie-bite fa-3x"></i>
                  </div>

                  <!-- Heading -->
                  <h4 class="font-weight-bold">
                    Cookies
                  </h4>

                  <!-- Text -->
                  <p class="text-gray-700 mb-5">
                    Conoce como resguardamos la información capturada por nuestras Cookies y conoce para que las útilizamos, tambien podrás conocer administrar estas Cookies
                  </p>

                  <a href="cookies" class="btn btn-info btn-sm btn-block" data-dismiss="cookies" name="button" style="align:center;">Saber más</a>

                </div>
              </div>

            </div>
            <div class="col-12 col-md-6 col-lg-4">

              <!-- Card -->
              <div class="card card-border border-primary-desat shadow-lg mb-6 mb-md-8 mb-lg-0 lift lift-lg">
                <div class="card-body text-center">

                  <!-- Icon -->
                  <div class="icon-circle bg-7 text-white mb-5">
                    <i class="fas fa-book-open fa-2x"></i>
                  </div>

                  <!-- Heading -->
                  <h4 class="font-weight-bold">
                    Propiedad intelectual
                  </h4>

                  <!-- Text -->
                  <p class="text-gray-700 mb-5">
                    Comunicado oficial de Developer Men donde se discriminan las fuentes, imagenes, iconos, plugins y librerias utilizados en este sitio web
                  </p>

                  <a href="cookies" class="btn btn-info btn-sm btn-block" data-dismiss="cookies" name="button" style="align:center;">Saber más</a>

                </div>
              </div>

            </div>
          </div>
          <br>
          <div class="row">
            <div class="col-12 col-md-6 col-lg-4">

              <!-- Card -->
              <div class="card card-border border-info shadow-lg lift lift-lg">
                <div class="card-body text-center">

                  <!-- Icon -->
                  <div class="icon-circle bg-14 text-white mb-5">
                    <i class="fas fa-question-circle fa-3x"></i>
                  </div>

                  <!-- Heading -->
                  <h4 class="font-weight-bold">
                    Preguntas frecuentes
                  </h4>

                  <!-- Text -->
                  <p class="text-gray-700 mb-5">
                    Conoce las preguntas más frecuentes de nuestro sitio web, si no encuentras tu pregunta aquí puedes útilizar los médidos de contacto con que disponemos
                  </p>

                  <a href="cookies" class="btn btn-info btn-sm btn-block" data-dismiss="cookies" name="button" style="align:center;">Saber más</a>

                </div>
              </div>

            </div>

            <div class="col-12 col-md-6 col-lg-4">

              <!-- Card -->
              <div class="card card-border border-info shadow-lg lift lift-lg">
                <div class="card-body text-center">

                  <!-- Icon -->
                  <div class="icon-circle bg-14 text-white mb-5">
                    <i class="fas fa-life-ring fa-3x"></i>
                  </div>

                  <!-- Heading -->
                  <h4 class="font-weight-bold">
                    Soporte
                  </h4>

                  <!-- Text -->
                  <p class="text-gray-700 mb-5">
                    Conoce como puedes acceder y como obtienes el soporte en nuestro sitio web y el soporte al producto adquirido con nuestra compañia.
                  </p>

                  <a href="cookies" class="btn btn-info btn-sm btn-block" data-dismiss="cookies" name="button" style="align:center;">Saber más</a>

                </div>
              </div>

            </div>
          </div> <!-- / .row -->

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

  <?php
  $bg = "dark";
  include("assets/template/footer.php");
  ?>
</body>
</html>
