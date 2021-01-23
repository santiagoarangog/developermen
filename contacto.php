<?php
$title = 'Contactanos &bull; Developer Men';
require_once("assets/template/header.php");
?>
<body>

  <?php
  include("assets/features/modals.php");
  require_once("assets/template/navbar.php");
  ?>

  <!-- CONTENT
  ================================================== -->
  <section class="section-border border-primary">
    <div class="container d-flex flex-column">
      <div class="row align-items-center justify-content-center no-gutters min-vh-100">
        <div class="col-8 col-md-6 col-lg-7 offset-md-1 order-md-2 mt-auto mt-md-0 pt-8 pb-4 py-md-11">

          <!-- Image -->
          <img src="assets/img/illustrations/chat.svg" alt="..." class="img-fluid">

        </div>
        <div class="col-12 col-md-5 col-lg-4 order-md-1 mb-auto mb-md-0 pb-8 py-md-11">

          <!-- Heading -->
          <h1 class="mb-0 font-weight-bold text-center">
            Contáctanos
          </h1>

          <!-- Text -->
          <p class="mb-6 text-center text-muted">
            ¡Siempre queremos saber de ti!<br> Háganos saber cómo podemos ayudarle mejor y haremos nuestro mejor esfuerzo.
          </p>

          <!-- Form -->
          <form class="was-validated mb-6" method="POST" id="formdata" onsubmit="return checkSubmit();" novalidate>
            <div class="form-group">
              <label for="email" class="font-weight-bold">
                Nombre completo
              </label>
              <div class="input-group">
                <!-- <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
                </div> -->
                <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
              </div>
            </div>

            <!-- Email -->
            <div class="form-group">
              <label for="email" class="font-weight-bold">
                Correo electrónico:
              </label>
              <div class="input-group">
                <!-- <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1"><i class="fas fa-at"></i></span>
                </div> -->
                <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
              </div>
            </div>

            <!-- Password -->
            <div class="form-group mb-5">
              <label for="password" class="font-weight-bold">
                Seleccione un producto de su interés:
              </label>
              <select class="form-control" id="registrationPasswordModal" name="" placeholder="Seleccione un elemento del listado">
                <option value="" selected>Seleccione un elemento del listado</option>
                <option value="Página web de básica">Página web de básica</option>
                <option value="Página Web Cortesia">Página web de cortesia</option>
                <option value="Página Personal">Página Personal</option>
                <option value="Página Mediana Empresa">Página Mediana Empresa</option>
                <option value="Página Profesional">Página Profesional</option>
                <option value="Página Empresarial">Página Empresarial</option>
                <option value="Blogs Personales o Empresariales">Blogs Personales o Empresariales</option>
                <option value="Intranet Empresarial">Intranet Empresarial</option>
                <option value="Integración Chat Online">Integración Chat Online</option>
                <option value="Integración Formulario contacto">Integración Formulario de Contactanos en Ajax </option>
              </select>
            </div>

            <div class="form-group mb-5">
              <label for="password" class="font-weight-bold">
                Seleccione un servicio de su interés:
              </label>
              <select class="form-control" id="registrationPasswordModal" name="" placeholder="Seleccione un elemento del listado">
                <option value="" selected>Seleccione un elemento del listado</option>
                <option value="Google Ad Words">Google Ad Words</option>
                <option value="Google Ad Sense">Google Ad Sense</option>
                <option value="Gestión chat en sitio web">Gestión chat en sitio web</option>
                <option value="Search Engine Optimization (SEO)">Search Engine Optimization (SEO)</option>
                <option value="Administración de Páginas Web">Administración de Páginas Web</option>
                <option value="Administración de Redes Sociales">Administración de Redes Sociales</option>
              </select>
            </div>

            <!-- Politica -->
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
              <label class="form-check-label" for="defaultCheck1">
                Debes aceptar la <a href="signup-illustration.html"> política de tratamiento de datos personales.</a>
              </label>
            </div>

            <!-- Submit -->
            <button class="btn btn-block btn-primary" type="submit">
              Envíar
            </button>

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
  <?php
  $bg = 'dark';
  include("assets/template/footer.php");
  ?>
</body>
</html>
