<?php
//Inician variables que se envian al Header para gestionarlas cuando se comparte la pagina
//Seo de La Pagina
$description = "Empresa de Desarrollo Web a la Medida, Ubicada en Llanogrande Rionegro Ant. Colombia. Ofrecemos: Ayudas a Desarrolladores, Blog de Diseño y Desarrollo Web, Marketing Online, SEO, Monitorizacion de Trafico en Su Pagina, contamos con Planes para la Pagina que usted su Organizacion necesitan.";
//Seo para facebook
$ogTitle = "Contactanos &bull; Developer Men";
$ogDescription="Empresa de Desarrollo de paginas Web a la Medida, Ubicada en Llanogrande Rionegro Ant. Colombia. Ofrecemos: Ayudas a Desarrolladores, Plantillas Gratis, Blog de Diseño y Desarrollo Web, Marketing Online, SEO, Monitorizacion de Trafico en Su Pagina y creación de páginas web educativas, contamos con los Planes para la Pagina que usted o su Organizacion necesitan.";
$ogUrl="www.developermen.com";
$ogSiteName="Desarrollo Web a la Medida, Planes de Compra, Diseño Grafico, Plantillas Web, Blog de Desarrollo Web.";
$ogArticleTag="Developer Men &middot; Desarrollo web a la medida";
$ogArticleSection="Contáctanos";
$ogImage="https://developermen.com/assets/img/media/developerMenInicio.png";
//Seo para Twitter
$twitterDescription="Empresa de Desarrollo de paginas Web a la Medida, Ubicada en Llanogrande Rionegro Ant. Colombia. Ofrecemos: Ayudas a Desarrolladores, Plantillas Gratis, Blog de Diseño y Desarrollo Web, Marketing Online, SEO, Monitorizacion de Trafico en Su Pagina y creación de páginas web educativas, contamos con los Planes para la Pagina que usted o su Organizacion necesitan.";
$twitterTitle="Contáctanos &bull; Developer Men";
$twitterImage="https://developermen.com/assets/img/media/developerMenInicio.png";
$active = 'Contáctanos';
$title = 'Contáctanos &bull; Developer Men';
require 'assets/templates/header.php';
?>
</head>
<body>
  <!-- Start Header area
  ======================================-->
  <div class="feature-page get-start header-area">
    <div class="container">
      <?php include('assets/templates/navbar.php'); ?>
      <!--End of header top-->
      <div class="row justify-content-center">
        <div class="col-lg-6 text-center">
          <div class="hero-text-wrapper">
            <div class="hero-text-inner">
              <div class="hero-text">
                <h6>DISEÑO &amp; DESARROLLO WEB</h6>
                <h1>Contáctanos</h1>
                <p>Queremos conocer tus dudas e inquietudes, dejanoslas saber.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--End of row-->
    </div>
    <!--End of Container-->
    <a href="#section1" class="scrl-down scroll-down"><i class="fas fa-chevron-down"></i></a>
  </div>
  <!--End of header area-->

  <!-- Start keep in touch
  ======================================-->
  <div id="section1" class="contact-area">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="start-title">
            <h6>Contáctanos</h6>
            <h1 style="text-shadow: -1px -1px 0px #CCC;">Contacta con nosotros</h1>
            <p>Rellena el siguiente formulario para hacernos saber tus dudas o sugerencías sobre uno de nuestros servicios o productos.</p>
          </div>
          <div class="bd-callout bd-callout-info">
            <p class="lead text-justify">
              Támbien puedes utilizar nuestro chat Online para hacernos saber tus dudas o sugerencias.
            </p>
          </div>
          <div class="bd-callout bd-callout-danger">
            <p class="text-justify">
              Ten presente que debes utilizar un correo electrónico al que puedas acceder por que luego de rellenado el formulario de contáctanos nuestro medio de contacto contigo será por el correo electrónico proporcionado.
            </p>
          </div>
        </div>
        <div class="col-lg-8" style="box-shadow: -10px 1px 10px -10px #333;"><br>
          <div class="card-body">
            <div class="contact-form">
              <!-- Mensajes -->
              <div class="" align="center">
                <div class="alert alert-success" id="exitoCorreo" style="display:none;border-radius:none;">
                  <strong><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> Excelente!</strong> Revisa tu correo electrónico para conocer más información.
                </div>
                <div class="alert alert-success" id="exito" style="display:none;border-radius:none;">
                  <strong><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> Excelente!</strong> Sus datos han sido recibidos con exito.
                </div>
                <div class="alert alert-danger" id="fracaso" style="display:none;border-radius:none;">
                  <strong>Error!</strong> Se ha producido un error durante el envío de datos.
                </div>
              </div>
              <div class="alert alert-warning alert-dismissable">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Todos los campos marcados con <span class="text-danger">*</span> son campos obligatorios</strong>.
              </div>
              <form class="was-validated" method="POST" id="formdata" onsubmit="return checkSubmit();">
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label class="strongFont" for="fullname">Nombre completo <span class="text-danger">*</span></label>
                    <input type="text" name="nombre" class="form-control strongFont" id="nombre" placeholder="Ingresa tu nombre completo" required maxlength="50">
                  </div>
                  <div class="form-group col-md-6">
                    <label class="strongFont" for="mail">Correo electrónico <span class="text-danger">*</span></label>
                    <input type="email" name="mail" class="form-control strongFont" id="mail" placeholder="Ingresa tu dirección de E-Mail" required>
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label class="strongFont" for="producto">Seleccione el producto de su interés <span class="text-danger">*</span></label>
                    <select id="producto" class="form-control custom-select strongFont" name="producto" placeholder="Selecciona un dato" required>
                      <option value="" selected>Seleccione un producto</option>
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
                    <div class="invalid-feedback">Seleccione un producto de su interés</div>
                  </div>
                  <div class="form-group col-md-6">
                    <label class="strongFont" for="servicio">Seleccione un servicio de su interés <span class="text-danger">*</span></label>
                    <select id="servicio" class="form-control custom-select strongFont" name="servicio" style="font-family:'Raleway', Calibri, Arial, sans-serif;font-weight:bold;" required>
                      <option value="" selected>Seleccione un servicio</option>
                      <option value="Google Ad Words">Google Ad Words</option>
                      <option value="Google Ad Sense">Google Ad Sense</option>
                      <option value="Gestión chat en sitio web">Gestión chat en sitio web</option>
                      <option value="Search Engine Optimization (SEO)">Search Engine Optimization (SEO)</option>
                      <option value="Administración de Páginas Web">Administración de Páginas Web</option>
                      <option value="Administración de Redes Sociales">Administración de Redes Sociales</option>
                    </select>
                    <div class="invalid-feedback">Seleccione un servicio de su interés</div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="strongFont" for="comentario">Comentario</label> <span class="text-danger">*</span></label>
                  <textarea class="form-control strongFont" id="comentario" rows="5" MAXLENGTH="220" name="comentario" required placeholder="Escribe tu comentario o sugerencia con máximo 220 caracteres"></textarea>
                </div>
                <label class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
                  <input type="radio" class="custom-control-input" name="politica" value="1" id="radio" required>
                  <span class="custom-control-indicator"></span>
                  <span class="custom-control-description">Acepto las <a href="https://developermen.com/laws/avisoLegal" target="_blank" id="hip_0">Politicas de Proteccion de Datos de Developer Men</a></span>
                </label>
                <br><br>
                <div class="" align="center">
                  <button class="btn btn-outline-primary rounded btn-lg" name="botonenviar" type="button" id="botonenviar" value="Enviar" onclick="validaForm()" data-loading-text="Enviando..." autocomplete="off">Enviar</button>
                </div>
                <br>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--End of keep in touch-->

  <!--End of artiles area-->
  <?php include('assets/features/share.php'); ?>
  <?php include('assets/features/suscribirse.php'); ?>
  <!-- Pie de página -->
  <?php include('assets/templates/footer.php'); ?>
  <!-- Pie de página -->
</body>
</html>
