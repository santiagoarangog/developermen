<?php include('assets/functions/modals.php'); ?>
<!-- MODALS
================================================== -->
<!-- Contactenos -->
<div class="modal fade fixed-right" id="modalContactenos" tabindex="-1" role="dialog" aria-labelledby="modalContactenosTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-vertical" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div id="body-contact"></div>
        <!-- Close -->
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
        <!-- Image -->
        <div class="text-center mail-box" id="mail-box">

          <!-- <img src="assets/img/illustrations/mail-box.svg d-block d-sm-none" alt="..." class="img-fluid mb-3" style="width: 200px;"> -->
        </div>

        <!-- Heading -->
        <h2 class="font-weight-bold text-center mb-1" id="modalContactenosTitle">
          Contáctanos
        </h2>

        <!-- Text -->
        <p class="font-size-sm text-justify text-muted mb-4 font-size-875">
          Consigue un producto vanguardista y moderno con la ayuda de los mejores.
        </p>

        <!-- Form  class="was-validated"-->
        <form id="contactanos">
          <div class="row">
            <div class="col-12 col-md-12">
              <!-- Name complete -->
              <div class="form-group">
                <label class="font-size-875 font-weight-bold text-gray-600" for="nombre"><i class="fas fa-caret-right"></i> Nombre completo:</label>
                <input type="text" name="nombre" class="form-control form-control-sm" id="nombre" placeholder="Nombre completo" required maxlength="100">
              </div>
            </div>
            <div class="col-12 col-md-12">
              <!-- E-mail -->
              <div class="form-group">
                <label class="font-size-875 font-weight-bold text-gray-600" for="correo"><i class="fas fa-caret-right"></i> Correo electrónico:</label>
                <input type="text" name="correo" class="form-control form-control-sm" id="correo" placeholder="tucorreo@dominio.com" required maxlength="100">
              </div>

            </div>
            <div class="col-12 col-md-12">
              <!-- Celular phone -->
              <div class="form-group">
                <label class="font-size-875 font-weight-bold text-gray-600" for="numCelular"><i class="fas fa-caret-right"></i> # Telefono celular:</label>
                <input name="numCelular" id="numCelular" type="text" class="form-control form-control-sm input-mask" data-mask="(+00) 000 000 0000" placeholder="(+57) 000 000 0000" value="" required>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-12 col-md-12">
              <!-- Email -->
              <div class="form-group">
                <label class="font-size-875 font-weight-bold text-gray-600" for="producto"><i class="fas fa-caret-right"></i> Seleccione un producto de su interés:</label>
                <select class="form-control form-control-sm" data-toggle="select" data-placeholder="Seleccione un elemento" name="producto" id="producto" name="" placeholder="Seleccione un elemento del listado" required>
                  <option> </option>
                  <?php
                  $oidProducto = isset($_POST['producto']) ? $_POST['producto'] : '';
                  listarProductos($oidProducto);
                  ?>
                </select>
              </div>

            </div>
            <div class="col-12 col-md-12">
              <!-- Password -->
              <div class="form-group">
                <label class="font-size-875 font-weight-bold text-gray-600" for="servicio"><i class="fas fa-caret-right"></i> Seleccione un servicio de su interés:</label>
                <select class="form-control form-control-sm" data-toggle="select" data-placeholder="Seleccione un elemento" name="servicio" id="servicio" name="" placeholder="Seleccione un elemento del listado" required>
                  <option> </option>
                  <?php
                  $oidProducto = isset($_POST['servicio']) ? $_POST['servicio'] : '';
                  listarServicios($oidServicio);
                  ?>
                </select>
              </div>

              <div class="form-group">
                <label class="font-size-875 font-weight-bold text-gray-600" for="registrationPasswordModal"><i class="fas fa-caret-right"></i> Cuentanos un poco sobre tu ídea:</label>
                <textarea class="form-control" name="descripcion" id="descripcion" rows="3" cols="40" placeholder="Cuentanos un poco sobre tu ídea" required maxlength="3500"></textarea>
              </div>

            </div>
            <div class="col-12 col-md-12 custom-control custom-checkbox">
              <input class="custom-control-input" type="checkbox" value="1" id="politica" name="politica" required>
              <label class="custom-control-label" for="politica">
                Aceptas la <a href="terms" target="_blank" style="text-decoration: none;"> política de tratamiento de datos personales.</a>
              </label>
            </div>

          </div>
          <div class="row">
            <div class="col-12 col-md-12">

              <!-- Submit -->
              <button type="button" class="btn btn-block mt-3 lift btn-info" id="botonenviar">
                Envíar
              </button>

            </div>
          </div>
          <div class="alert alert-danger font-size-875 mensaje" data-aos="fade-right" data-aos-delay="200" style="display:none;" id="showError">
            <i class="" id="icono"></i>&nbsp;
            <span id="mensaje"></span>
          </div>
          <div class="alert alert-danger font-size-875 mensaje" data-aos="fade-right" data-aos-delay="200" style="display:none;" id="usuarioError">
            <i class="fas fa-user-times"></i>&nbsp;
            Hubo un error, intentalo de nuevo
          </div>

          <div class="alert alert-success font-size-875 mensaje" data-aos="fade-right" data-aos-delay="200" style="display:none;" id="usuarioSuccess">
            <i class="fas fa-user-check"></i>&nbsp;
            Los datos fuerón envíados correctamente
          </div>
        </form>

      </div>
    </div>
  </div>
</div>

<!-- Cloud -->
<div class="modal fade" id="modalCloud" tabindex="-1" role="dialog" aria-labelledby="modalCloudTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">

        <!-- Close -->
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>

        <!-- Image -->
        <div class="text-center">
          <img src="assets/img/illustrations/upload.svg" alt="..." class="img-fluid mb-3" style="width: 200px;">
        </div>

        <!-- Heading -->
        <h2 class="font-weight-bold text-center mb-1" id="modalCloudTitle">
          Cloud &bull; Developer Men
        </h2>

        <!-- Text -->
        <p class="font-size-lg text-center text-muted mb-6 mb-md-8">
          Adquiere uno de los mejores servicios de Cloud de la actualidad con el asesoriamiento que solo nosotros podremos brindarte.
        </p>

        <!-- Form -->
        <form class="was-validated" method="POST" id="formdata" onsubmit="return checkSubmit();" novalidate>
          <div class="row">
            <div class="col-12 col-md-12">

              <!-- First name -->
              <div class="form-label-group">
                <input type="text" class="form-control form-control-flush" id="registrationFirstNameModal" placeholder="First name" required>
                <label for="registrationFirstNameModal">Nombre completo:</label>
              </div>

            </div>
            <div class="col-12 col-md-12">

              <!-- Last name -->
              <div class="form-label-group">
                <input type="text" class="form-control form-control-flush" id="registrationLastNameModal" placeholder="Last name" required>
                <label for="registrationLastNameModal">Correo electrónico:</label>
              </div>

            </div>
          </div>
          <div class="row">
            <div class="col-12 col-md-12">
              <div class="form-label-group">
                <textarea class="form-control form-control-flush" name="name" rows="3" cols="80" placeholder="Cuentanos un poco sobre tu ídea" style="resize:none;" required></textarea>
                <label for="registrationPasswordModal">Cuentanos un poco sobre tu ídea:</label>
              </div>
            </div>
            <div class="col-12 col-md-12">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" required>
                <label class="form-check-label" for="defaultCheck1">
                  Debes aceptar la <a href="signup-illustration.html"> política de tratamiento de datos personales.</a>
                </label>
                <div class="valid-feedback">
                  Falta poco para que tu proyecto se cumpla
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12">

              <!-- Submit -->
              <button class="btn btn-block btn-primary mt-3 lift">
                Envíar
              </button>

            </div>
          </div>
        </form>

      </div>
    </div>
  </div>
</div>

<!-- Example -->
<div class="modal fade" id="modalWebProfesional" tabindex="-1" role="dialog" aria-labelledby="modalWebProfesionalTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">

        <!-- Close -->
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>

        <!-- Image -->
        <div class="text-center">
          <img src="assets/img/illustrations/construction.svg" alt="..." class="img-fluid mb-3" style="width: 200px;">
        </div>

        <!-- Heading -->
        <h2 class="font-weight-bold text-center mb-1" id="modalWebProfesionalTitle">
          Página Web Profesional
          <hr class="bg-1">
        </h2>

        <!-- Text -->
        <p class="font-size-sm text-center text-gray-500 mb-6 mb-md-8">
          Una página web perfecta para dar inicio a tu empresa o para posicionar aún mas tu marca
        </p>

        <p class="font-size-md text-left text-muted mb-6 mb-md-8 top-0">
          <i class="fe fe-chevron-right ml-3"></i> Página On-Page o Multi Nivel
          <br><i class="fe fe-chevron-right ml-3"></i> Dominio .com, .net, .org
          <br><i class="fe fe-chevron-right ml-3"></i> Responsive Design
          <br><i class="fe fe-chevron-right ml-3"></i> SEO Profesional
          <br><i class="fe fe-chevron-right ml-3"></i> Hosting Independiente limitado
          <br><i class="fe fe-chevron-right ml-3"></i> Página de administración
          <br><i class="fe fe-chevron-right ml-3"></i> Administrador de contenido
          <br><i class="fe fe-chevron-right ml-3"></i> Formulario de contacto en página o modal (1 página)
          <br><i class="fe fe-chevron-right ml-3"></i> Links a Redes Sociales (Social Media Profesional)
          <br>
          <span class="h6 text-center font-weight-bold"> Gestión Google • Web Profesional </span>
          <br><i class="fe fe-chevron-right ml-3"></i> Gestión Google Analytics
          <br><i class="fe fe-chevron-right ml-3"></i> Gestión Google Maps
          <br>
          <span class="h6 text-center font-weight-bold"> Soporte • Web Profesional </span>
          <br><i class="fe fe-chevron-right ml-3"></i> Soporte conexión remota
        </p>

      </div>
    </div>
  </div>
</div>

<!-- Signup: Horizontal  -->
<div class="modal fade" id="modalSignupHorizontal" tabindex="-1" role="dialog" aria-labelledby="modalSignupHorizontalTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="card card-row">
        <div class="row no-gutters">
          <div class="col-12 col-md-6 bg-cover card-img-left" style="background-image: url(assets/img/photos/photo-8.jpg);">

            <!-- Image (placeholder) -->
            <img src="assets/img/photos/photo-8.jpg" alt="..." class="img-fluid d-md-none invisible">

            <!-- Shape -->
            <div class="shape shape-right shape-fluid-y svg-shim text-white d-none d-md-block">
              <svg viewBox="0 0 112 690" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M116 0H51V172C76 384 0 517 0 517V690H116V0Z" fill="currentColor" />
              </svg>
            </div>

          </div>
          <div class="col-12 col-md-6">
            <div class="card-body">

              <!-- Close -->
              <button type="button" class="modal-close close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>

              <!-- Heading -->
              <h2 class="mb-0 font-weight-bold text-center" id="modalSignupHorizontalTitle">
                Sign Up
              </h2>

              <!-- Text -->
              <p class="mb-6 text-center text-muted">
                Simplify your workflow in minutes.
              </p>

              <!-- Form -->
              <form class="mb-6">

                <!-- Email -->
                <div class="form-group">
                  <label class="sr-only" for="modalSignupHorizontalEmail">
                    Your email
                  </label>
                  <input type="email" class="form-control" id="modalSignupHorizontalEmail" placeholder="Your email">
                </div>

                <!-- Password -->
                <div class="form-group mb-5">
                  <label class="sr-only" for="modalSignupHorizontalPassword">
                    Create a password
                  </label>
                  <input type="password" class="form-control" id="modalSignupHorizontalPassword" placeholder="Create a password">
                </div>

                <!-- Submit -->
                <button class="btn btn-block btn-primary" type="submit">
                  Sign up
                </button>

              </form>

              <!-- Text -->
              <p class="mb-0 font-size-sm text-center text-muted">
                Already have an account? <a href="./signin-illustration.html">Log in</a>.
              </p>

            </div>
          </div>

        </div> <!-- / .row -->
      </div>
    </div>
  </div>
</div>

<!-- Signup: Vertical  -->
<div class="modal fade" id="modalSignupVertical" tabindex="-1" role="dialog" aria-labelledby="modalSignupVerticalTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="card">

        <!-- Close -->
        <button type="button" class="modal-close close text-white" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>

        <!-- Image -->
        <img src="assets/img/photos/photo-7.jpg" alt="..." class="card-img-top">

        <!-- Shape -->
        <div class="position-relative">
          <div class="shape shape-bottom shape-fluid-x svg-shim text-white">
            <svg viewBox="0 0 2880 480" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" clip-rule="evenodd" d="M2160 0C1440 240 720 240 720 240H0V480H2880V0H2160Z" fill="currentColor" />
            </svg>
          </div>
        </div>

        <!-- Body -->
        <div class="card-body">

          <!-- Heading -->
          <h2 class="mb-0 font-weight-bold text-center" id="modalSignupVerticalTitle">
            Sign Up
          </h2>

          <!-- Text -->
          <p class="mb-6 text-center text-muted">
            Simplify your workflow in minutes.
          </p>

          <!-- Form -->
          <form class="mb-6">

            <!-- Email -->
            <div class="form-group">
              <label class="sr-only" for="modalSignupVerticalEmail">
                Your email
              </label>
              <input type="email" class="form-control" id="modalSignupVerticalEmail" placeholder="Your email">
            </div>

            <!-- Password -->
            <div class="form-group mb-5">
              <label class="sr-only" for="modalSignupVerticalPassword">
                Create a password
              </label>
              <input type="password" class="form-control" id="modalSignupVerticalPassword" placeholder="Create a password">
            </div>

            <!-- Submit -->
            <button class="btn btn-block btn-primary" type="submit">
              Sign up
            </button>

          </form>

          <!-- Text -->
          <p class="mb-0 font-size-sm text-center text-muted">
            Already have an account? <a href="./signin-illustration.html">Log in</a>.
          </p>

        </div>

      </div>
    </div>
  </div>
</div>

<!-- Signin: Horizontal  -->
<div class="modal fade" id="modalSigninHorizontal" tabindex="-1" role="dialog" aria-labelledby="modalSigninHorizontalTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="card card-row">
        <div class="row no-gutters">
          <div class="col-12 col-md-6 bg-cover card-img-left" style="background-image: url(./assets/img/photos/photo-1.jpg);">

            <!-- Image (placeholder) -->
            <img src="./assets/img/photos/photo-1.jpg" alt="..." class="img-fluid d-md-none invisible">

            <!-- Shape -->
            <div class="shape shape-right shape-fluid-y svg-shim text-white d-none d-md-block">
              <svg viewBox="0 0 112 690" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M116 0H51V172C76 384 0 517 0 517V690H116V0Z" fill="currentColor" />
              </svg>
            </div>

          </div>
          <div class="col-12 col-md-6">
            <div class="card-body">

              <!-- Close -->
              <button type="button" class="modal-close close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>

              <!-- Heading -->
              <h2 class="mb-0 font-weight-bold text-center" id="modalSigninHorizontalTitle">
                Sign In
              </h2>

              <!-- Text -->
              <p class="mb-6 text-center text-muted">
                Simplify your workflow in minutes.
              </p>

              <!-- Form -->
              <form class="mb-6">

                <!-- Email -->
                <div class="form-group">
                  <label class="sr-only" for="modalSigninHorizontalEmail">
                    Your email
                  </label>
                  <input type="email" class="form-control" id="modalSigninHorizontalEmail" placeholder="Your email">
                </div>

                <!-- Password -->
                <div class="form-group mb-5">
                  <label class="sr-only" for="modalSigninHorizontalPassword">
                    Create a password
                  </label>
                  <input type="password" class="form-control" id="modalSigninHorizontalPassword" placeholder="Create a password">
                </div>

                <!-- Submit -->
                <button class="btn btn-block btn-primary" type="submit">
                  Sign in
                </button>

              </form>

              <!-- Text -->
              <p class="mb-0 font-size-sm text-center text-muted">
                Don't have an account yet? <a href="./signin-illustration.html">Sign up</a>.
              </p>

            </div>
          </div>

        </div> <!-- / .row -->
      </div>
    </div>
  </div>
</div>

<!-- Signup: Vertical  -->
<div class="modal fade" id="modalSigninVertical" tabindex="-1" role="dialog" aria-labelledby="modalSigninVerticalTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="card">

        <!-- Close -->
        <button type="button" class="modal-close close text-white" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>

        <!-- Image -->
        <img src="./assets/img/photos/photo-21.jpg" alt="..." class="card-img-top">

        <!-- Shape -->
        <div class="position-relative">
          <div class="shape shape-bottom shape-fluid-x svg-shim text-white">
            <svg viewBox="0 0 2880 480" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" clip-rule="evenodd" d="M2160 0C1440 240 720 240 720 240H0V480H2880V0H2160Z" fill="currentColor" />
            </svg>
          </div>
        </div>

        <!-- Body -->
        <div class="card-body">

          <!-- Heading -->
          <h2 class="mb-0 font-weight-bold text-center" id="modalSigninVerticalTitle">
            Sign In
          </h2>

          <!-- Text -->
          <p class="mb-6 text-center text-muted">
            Simplify your workflow in minutes.
          </p>

          <!-- Form -->
          <form class="mb-6">

            <!-- Email -->
            <div class="form-group">
              <label class="sr-only" for="modalSigninVerticalEmail">
                Your email
              </label>
              <input type="email" class="form-control" id="modalSigninVerticalEmail" placeholder="Your email">
            </div>

            <!-- Password -->
            <div class="form-group mb-5">
              <label class="sr-only" for="modalSigninVerticalPassword">
                Create a password
              </label>
              <input type="password" class="form-control" id="modalSigninVerticalPassword" placeholder="Create a password">
            </div>

            <!-- Submit -->
            <button class="btn btn-block btn-primary" type="submit">
              Sign in
            </button>

          </form>

          <!-- Text -->
          <p class="mb-0 font-size-sm text-center text-muted">
            Don't have an account yet? <a href="./signin-illustration.html">Sign up</a>.
          </p>

        </div>

      </div>
    </div>
  </div>
</div>


<!-- Wpp modal -->
<div class="modal fade fixed-right" id="modal-customizer" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-vertical" role="document">
    <form class="modal-content" id="form-wpp-site">
      <div class="modal-body">
        <!-- Close -->
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" data-toggle="tooltip" data-placement="left" title="Cerrar Chat whatsapp">
          <span aria-hidden="true">&times;</span>
        </button>
        <div class="text-center mx-auto mt-4 mb-5 " style="width: 80px;">
          <img alt="Image placeholder" src="assets/img/devMen-head.png" class="svg-inject img-fluid">
          <span class="avatar-child avatar-badge bg-success"></span>
        </div>
        <h5 class="text-center mb-2 font-weight-bold">
          Comunicate con Developer Men por whatsapp
        </h5>
        <p class="text-center mb-0 font-size-sm text-muted text-justify">
          Colocamos a tu disposición un canal de Wpp facilitando de esta manera la comunicación con nosotros
        </p>
        <hr class="mb-4">
        <p class="mb-1 h3 font-size-875 font-weight-bold text-gray-600" for="nombre"><i class="fas fa-caret-right"></i> Número de contacto Developer Men:</p>
        <p class="small text-muted mb-3">
          <input class="form-control" name="" type="text" class="form-control input-mask" data-mask="(+00) 000 000 0000" placeholder="(+57) 000 000 0000" value="+573113111538" disabled>
          <input class="form-control" name="phone" type="hidden" class="form-control input-mask" data-mask="(00) 000 000 0000" value="573113111538">
          <input class="form-control" name="oidContacto" type="hidden" class="form-control input-mask" value="<?php echo isset($result['OID']) ? $result['OID'] : ''; ?>">
        </p>

        <p class="mb-1 h3 font-size-875 font-weight-bold text-gray-600" for="nombre"><i class="fas fa-caret-right"></i> Asunto:</p>
        <p class="small text-muted mb-3">
          <textarea class="form-control" name="asuntoWpp" rows="5" cols="80" id="asuntoWpp"></textarea>
        </p>
      </div>
      <div class="modal-footer border-0">
        <button type="button" class="btn btn-block btn-success mt-auto" id="enviar-wpp-site">
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