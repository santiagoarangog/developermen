<?php
//Inician variables que se envian al Header para gestionarlas cuando se comparte la pagina
//Seo de La Pagina
$description = "Empresa de Desarrollo Web a la Medida, Ubicada en Llanogrande Rionegro Ant. Colombia. Ofrecemos: Desarrollo web en el oriente antioqueño y oriente cercano, Ayudas a Desarrolladores, Desarrollos web a la medida, Marketing Online, SEO, Monitorizacion de Trafico en Su Pagina, contamos con Planes para la Pagina que usted su Organizacion necesitan.";
//Seo para facebook
$ogTitle = "Developer Men &bull; Desarrollo Web a la medida de lo que usted necesita";
$ogDescription = "Empresa de Desarrollo Web a la Medida, Ubicada en Llanogrande Rionegro Ant. Colombia. Ofrecemos: Desarrollo web en el oriente antioqueño y oriente cercano, Ayudas a Desarrolladores, Desarrollos web a la medida, Marketing Online, SEO, Monitorizacion de Trafico en Su Pagina, contamos con Planes para la Pagina que usted su Organizacion necesitan.";
$ogUrl = "www.developermen.com";
$ogSiteName = "Desarrollo Web a la Medida, Planes de Compra, Diseño Grafico, Plantillas Web, Blog de Desarrollo Web.";
$ogArticleTag = "Developer Men &bull; Desarrollo web a la medida";
$ogArticleSection = "Inicio";
$ogImage = "https://developermen.com/assets/img/media/developerMenInicio.png";
//Seo para Twitter
$twitterDescription = "Empresa de Desarrollo Web a la Medida, Ubicada en Llanogrande Rionegro Ant. Colombia. Ofrecemos: Desarrollo web en el oriente antioqueño y oriente cercano, Ayudas a Desarrolladores, Desarrollos web a la medida, Marketing Online, SEO, Monitorizacion de Trafico en Su Pagina, contamos con Planes para la Pagina que usted su Organizacion necesitan.";
$twitterTitle = "Developer Men &bull; Desarrollo Web a la medida de lo que usted necesita";
$twitterImage = "https://developermen.com/assets/img/media/developerMenInicio.png";
$active = 'Inicio';
$title = 'Developer Men &bull; Diseño y desarrollo web a la medida';
$canonical = "https://developermen.com/index";
require_once("assets/template/header.php");
include("assets/functions/global.php");
aleatorio($img);
?>

<body>
  <?php
  include("assets/features/modals.php");
  $flex = 'flex';
  $fixed = "fixed";
  $navbar = "dark";
  require_once("assets/template/navbar.php");
  ?>
  <!-- CONTENT
  ================================================== -->
  <section style="background-image: url(https://developermen.com/assets/img/covers/bg-pattern.png);background-position: left;  background-position: center;background-repeat: repeat;background-size: contain;">
    <div class="container d-flex flex-column">
      <div class="row align-items-center justify-content-center no-gutters min-vh-100">
        <div class="col-12 col-md-6 col-lg-4 py-8 py-md-11">

          <!-- Heading -->
          <h1 class="display-3 font-weight-bold text-center text-actualizando">
            ¡ Nos estamos actualizando !
          </h1>

          <!-- Text -->
          <div class="mb-5 text-muted">
            <span class="h4 text-info" data-toggle="typed" data-options='{"strings": ["⏳ Esta página esta en proceso de desarrollo","🖌️ Siempre estamos enfocados en brindarte lo mejor", "Estamos creando algo maravilloso","🎁 En este sitio encontrarás pronto algo pensado en tí","🎉 Deja tu correo electrónico y enterate cuando está página este disponible nuevamente"]}'></span>.
            <hr class="hr-0">
            <form class="form-inline text-center" action="" method="POST" name="numDoc">
              <div class="btn-group">
                <label class="">
                  <input style="width:100%;" name="titulo" type="text" class="form-control border-radius-right-none" required value="" placeholder="hello@developermen.com">
                </label>
                <label>
                  <button class="btn btn-secondary-soft border-radius-left-none" type="submit" value="guardar" name="guardar"> Envíar</button>
                </label>
              </div>
            </form>
          </div>

          <!-- Link -->
          <button type="button" class="btn btn-dark btn-sm btn-block" onclick="goBack();">
            Volver
          </button>

        </div>
        <div class="col-lg-7 offset-lg-1 align-self-stretch d-none d-lg-block">

          <!-- Image -->
          <!-- https://media.giphy.com/media/3htQ6tCfZ3qfv4sXk6/giphy.gif -->
          <div class="h-100 w-cover bg-cover" style="background-image: url(https://media.giphy.com/media/OK5LK5zLFfdm/giphy.gif);"></div>

          <!-- Shape -->
          <div class="shape shape-left shape-fluid-y svg-shim text-white">
            <svg viewBox="0 0 100 1544" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M0 0H100V386L50 1158V1544H0V0Z" fill="currentColor" />
            </svg>
          </div>

        </div>
      </div> <!-- / .row -->
    </div> <!-- / .container -->
  </section>
  <!-- SHAPE
  ================================================== -->
  <div class="position-relative">
    <div class="shape shape-bottom shape-fluid-x svg-shim text-dark">
      <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor" />
      </svg>
    </div>
  </div>
  <?php
  $bg = "dark";
  include("assets/template/footer.php");
  ?>
</body>

</html>