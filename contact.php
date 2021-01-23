<?php $title = 'Contactenos &bull; Developer Men';
require_once("assets/template/header.php");
?>
<body>

  <?php
  include("assets/features/modals.php");
  $flex = 'container';
  $fixed = "sticky";
  $navbar = "dark";
  require_once("assets/template/navbar.php");
  ?>

  <!-- WELCOME
  ================================================== -->
  <section class="py-10 py-md-14 overlay overlay-black overlay-60 bg-cover" style="background-image: url(https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80);">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12 col-md-10 col-lg-8 text-center">

          <!-- Heading -->
          <h1 class="display-3 font-weight-bold text-white">
            Estamos aquí para ayudar.
          </h1>

          <!-- Text -->
          <p class="lead text-white-75 mb-0">
            ¡Siempre queremos saber de ti! <br>Háganos saber cómo podemos ayudarle mejor y haremos nuestro mejor esfuerzo.
          </p>

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

  <!-- INFO
  ================================================== -->
  <section class="overlay overlay-white overlay-80 py-7 py-md-9 border-bottom border-gray-300" id="info">
    <div class="container">
      <div class="row">
        <div class="col-12 text-center">

          <!-- Button -->
          <a href="#info" class="btn btn-white btn-rounded-circle shadow mt-n11 mt-md-n13 scrl-down" data-toggle="smooth-scroll">
            <i class="fe fe-arrow-down"></i>
          </a>

        </div>
      </div> <!-- / .row -->
      <div class="row">
        <div class="col-12 col-md-4 text-center border-right border-gray-300">

          <!-- Heading -->
          <h6 class="text-uppercase text-gray-700 mb-1 font-weight-bold">
            Envíenos un mensaje
          </h6>

          <!-- Link -->
          <div class="mb-5 mb-md-0">
            <a class="h4" style="color:#25d366;text-decoration:none;font-weight:bold;text-decoration:none;" href="https://api.whatsapp.com/send?phone=573113111538&text=Hola%20Developer%20Men" target="_blank"><i class="fab fa-whatsapp" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="Da clic aquí!"></i> Hablemos en Whatsapp !</a>
          </div>

        </div>
        <div class="col-12 col-md-4 text-center border-right border-gray-300">

          <!-- Heading -->
          <h6 class="text-uppercase text-gray-700 mb-1 font-weight-bold">
            Llamanos en cualquier momento
          </h6>

          <!-- Link -->
          <div class="mb-5 mb-md-0">
            <a href="tel:3113111538" class="h4 text-info" style="text-decoration: none;">
              (+57) 311-311-1538
            </a>
          </div>

        </div>
        <div class="col-12 col-md-4 text-center">

          <!-- Heading -->
          <h6 class="text-uppercase text-gray-700 mb-1 font-weight-bold">
            Envíenos un correo electrónico
          </h6>

          <!-- Link -->
          <p href="#!" class="h4 text-info" style="text-decoration: none;" id="p1">
            support@developermen.com
            <button class="btn btn-info-soft btn-rounded-circle btn-sm" id="button" onclick="copyToClipboard('#p1')" data-toggle="tooltip" data-placement="top" title="Copiar al portapapeles">
              <span id="content"><i class="fas fa-link"></i></span>
            </button>
          </p>

        </div>
      </div> <!-- / .row -->
    </div>
  </section>

  <!-- FORM
  ================================================== -->
  <section class="pt-8 pt-md-11 pb-8 pb-md-14 ">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12 col-md-10 col-lg-8 text-center">

          <!-- Heading -->
          <h2 class="font-weight-bold">
            Déjanos saber de ti directamente!
          </h2>

          <!-- Text -->
          <p class="font-size-lg text-muted mb-7 mb-md-9">
            ¡Siempre queremos saber de ti! Háganos saber cómo podemos ayudarle mejor y haremos nuestro mejor esfuerzo.
          </p>

        </div>
      </div> <!-- / .row -->
      <div class="row justify-content-center" >
        <div class="col-12 col-md-12 col-lg-10">

          <!-- Form -->
          <form class="was-validated" id="pageContactanos" onsubmit="return checkSubmit();" novalidate>
            <div class="row">
              <div class="col-12 col-md-12">
                <div class="form-group mb-5">

                  <!-- Label -->
                  <label class="font-weight-bold" for="contactName">
                    <i class="fas fa-caret-right"></i> Nombre completo:
                  </label>

                  <div class="input-group">
                    <!-- <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
                  </div> -->
                  <input type="text" class="form-control" id="nombrePage" name="nombre" placeholder="Nombre completo" autocomplete="off" required>
                </div>
                <!-- Input -->

              </div>
            </div>
            <div class="col-12 col-md-6">
              <div class="form-group mb-5">

                <!-- Label -->
                <label class="font-weight-bold" for="contactEmail">
                  <i class="fas fa-caret-right"></i> Correo electrónico:
                </label>

                <div class="input-group">
                  <input type="email" class="form-control" id="correoPage" name="correo" placeholder="tucorreo@dominio.com" autocomplete="off" required>
                </div>

              </div>
            </div>
            <div class="col-12 col-md-6">
              <div class="form-group mb-5">

                <!-- Label -->
                <label class="font-weight-bold" for="contactEmail">
                  <i class="fas fa-caret-right"></i> Número telefónico de contacto:
                </label>

                <div class="input-group">
                  <input type="email" class="form-control" id="correoPage" name="correo" placeholder="tucorreo@dominio.com" autocomplete="off" required>
                </div>

              </div>
            </div>
          </div> <!-- / .row -->

          <div class="row">
            <div class="col-12">
              <div class="form-group mb-5">
                <!-- Label -->
                <label class="font-weight-bold" for="contactMessage">
                  <i class="fas fa-caret-right"></i> Cuentanos que te paso en nuestra web:
                </label>
                <!-- Input -->
                <textarea class="form-control" name="descripcion" id="descripcionPage" maxlength="400" data-toggle="autosize" rows="2" placeholder="Brindanos una pequeña descripción de tu proyecto o dejadnos saber que inconveniente has tenido en nuestra plataforma &bull; En máximo 400 caracteres" required></textarea>
              </div>
            </div>
          </div> <!-- / .row -->
          <hr>
          <div class="row">
            <div class="col-12">
              <div style="text-align:center;">
                <h5 class="font-weight-bold">Como calificas tu experiencia en nuestro sitio web?</h5>
                <input class="experiencia" type="radio" name="experiencia" value="5" id="superBien"><label for="superBien"><i class="fas fa-smile-beam fa-2x text-success" data-toggle="tooltip" data-placement="top" title="Demasiado bien"></i></label></input>
                <input class="experiencia" type="radio" name="experiencia" value="4" id="bien"><label for="bien"><i class="fas fa-smile fa-2x text-warning" data-toggle="tooltip" data-placement="top" title="Bien"></i></label></input>
                <input class="experiencia" type="radio" name="experiencia" value="3" id="regular"><label for="regular"><i class="fab fa-angellist fa-2x" data-toggle="tooltip" data-placement="top" title="Ni bien, ni mal"></i></label></input>
                <input class="experiencia" type="radio" name="experiencia" value="2" id="mal"><label for="mal"><i class="fas fa-angry fa-2x text-danger" data-toggle="tooltip" data-placement="top" title="Mal"></i></label></input>
                <input class="experiencia" type="radio" name="experiencia" value="1" id="superMal"><label for="superMal"><i class="fas fa-tired fa-2x text-info" data-toggle="tooltip" data-placement="top" title="Demasiado mal"></i></label></input>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="1" name="politica" id="politicaPage" required>
                <label class="form-check-label" for="defaultCheck1">
                  Debes aceptar la <a href="signup-illustration.html"> política de tratamiento de datos personales.</a>
                </label>
              </div>
            </div>
          </div> <!-- / .row -->

          <div class="row justify-content-center">
            <div class="col-12 col-md-12">
              <div class="alert alert-danger font-size-875" data-aos="fade-right" data-aos-delay="200" style="display:none;" id="showErrorPage">
                <i class="" id="iconoPage"></i>&nbsp;
                <span id="mensajePage"></span>
              </div>

              <div class="alert alert-danger font-size-875" data-aos="fade-right" data-aos-delay="200" style="display:none;" id="usuarioErrorPage">
                <i class="fas fa-user-times"></i>&nbsp;
                Hubo un error, intentalo de nuevo
              </div>

              <div class="alert alert-success font-size-875" data-aos="fade-right" data-aos-delay="200" style="display:none;" id="usuarioSuccessPage">
                <i class="fas fa-user-check"></i>&nbsp;
                Los datos fuerón envíados correctamente
              </div>
            </div>
            <div class="col-auto">

              <!-- Submit -->
              <button type="button" class="btn btn-info lift" id="botonEnviarPage">
                Envíar
              </button>

            </div>

          </div> <!-- / .row -->
        </form>

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
<script src="./assets/js/clipboard.min.js" charset="UTF-8"></script>
<script src="./assets/libs/autosize/js/autosize.min.js" charset="UTF-8"></script>
<?php
$bg = "dark";
include("assets/template/footer.php");
?>
<script src="assets/js/contactanos.js?scripts=<?php echo filemtime('./assets/js/contactanos.js');?>" charset="utf-8"></script>
</body>
</html>
