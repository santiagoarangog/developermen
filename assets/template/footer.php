<!-- FOOTER ================================================== -->
<?php
if ((isset($bg) ? $bg : 'gray') == 'gray') {
  $bgFooter = "bg-gray-200";
  $borderBottom = "";
} else if ($bg == 'white') {
  $bgFooter = "bg-white";
  $borderBottom = "border-bottom";
} else {
  $bgFooter = "bg-dark";
  $borderBottom = "";
}
?>
<footer class="py-8 py-md-11 <?php echo $bgFooter; ?> ">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12 col-md-4 col-lg-3">

        <!-- Brand -->
        <img src="./assets/img/logoFooter.png" alt="..." class="footer-brand img-fluid mb-2">
        <!-- <h1 class="title2 text-center">Developer Men</h1> -->

        <!-- Text -->
        <p class="text-gray-700 mb-2 text-center text-bold <?php echo $borderBottom; ?>">
          Diseño y desarrollo web a la médida
          <br>
        </p>

        <!-- Social -->
        <ul class="list-unstyled list-inline list-social mb-6 mb-md-0 text-center">
          <li class="list-inline-item list-social-item mr-3">
            <a href="#!" class="text-decoration-none">
              <i class="social fab fa-instagram" id="instagram"></i>
              <!-- <img src="./assets/img/icons/social/instagram.svg" class="list-social-icon" alt="..."> -->
            </a>
          </li>
          <li class="list-inline-item list-social-item mr-3">
            <a href="#!" class="text-decoration-none">
              <i class="social fab fa-facebook" id="facebook"></i>
              <!-- <img src="./assets/img/icons/social/facebook.svg" class="list-social-icon" alt="..."> -->
            </a>
          </li>
          <li class="list-inline-item list-social-item mr-3">
            <a href="#!" class="text-decoration-none">
              <i class="social fab fa-twitter-square" id="twitter"></i>
              <!-- <img src="./assets/img/icons/social/twitter.svg" class="list-social-icon" alt="..."> -->
            </a>
          </li>
          <li class="list-inline-item list-social-item">
            <a href="#!" class="text-decoration-none">
              <i class="social fab fa-pinterest-square" id="pinterest"></i>
              <!-- <img src="./assets/img/icons/social/pinterest.svg" class="list-social-icon" alt="..."> -->
            </a>
          </li>
          <li class="list-inline-item list-social-item">
            <a href="#!" class="text-decoration-none">
              <i class="social fab fa-github-square" id="gitHub"></i>
              <!-- <img src="./assets/img/icons/social/pinterest.svg" class="list-social-icon" alt="..."> -->
            </a>
          </li>
        </ul>
        <p class="text-gray-500 text-center">
          <i class="fas fa-code-branch"></i> Versión 3.1
        </p>
      </div>
      <div class="col-6 col-md-4 col-lg-2">

        <!-- Heading -->
        <h6 class="font-weight-bold text-uppercase text-gray-700 <?php echo $borderBottom; ?>">
          Productos
        </h6>

        <!-- List -->
        <ul class="list-unstyled text-muted mb-6 mb-md-8 mb-lg-0">
          <li class="mb-3 move-right">
            <a href="<?php echo $cloud; ?>" class="href text-reset">
              <i class="fa fa-chevron-right"></i> Cloud Hosting
            </a>
          </li>
          <li class="mb-3">
            <a href="<?php echo $subdomain; ?>" class="href text-reset">
              <i class="fa fa-chevron-right"></i> Subdominio
            </a>
          </li>
          <li>
            <a href="#!" class="href text-reset">
              <i class="fa fa-chevron-right"></i> SEO
            </a>
          </li>
          <br>
          <!-- Heading -->
          <h6 class="font-weight-bold text-uppercase text-gray-700 <?php echo $borderBottom; ?>">
            FOR DEVELOPERS
          </h6>
          <li class="mb-3">
            <a href="#!" class="href text-reset">
              <i class="fas fa-code-branch" data-toggle="tooltip" data-placement="left" title="Especial para Desarrolladores"></i> UI Kit
            </a>
          </li>
          <li class="mb-3">
            <a href="#!" class="href text-reset">
              <i class="fas fa-code-branch" data-toggle="tooltip" data-placement="left" title="Especial para Desarrolladores"></i> Guía de estilos
            </a>
          </li>
        </ul>

      </div>
      <div class="col-6 col-md-4 col-lg-2">

        <!-- Heading -->
        <h6 class="font-weight-bold text-uppercase text-gray-700 <?php echo $borderBottom; ?>">
          Servicios
        </h6>

        <!-- List -->
        <ul class="list-unstyled text-muted mb-6 mb-md-8 mb-lg-0">
          <li class="mb-3">
            <a href="<?php echo $webBasica; ?>" class="href text-reset">
              <i class="fa fa-chevron-right"></i> Básica
            </a>
          </li>
          <li class="mb-3">
            <a href="<?php echo $webProfesional; ?>" class="href text-reset">
              <i class="fa fa-chevron-right"></i> Profesional
            </a>
          </li>
          <li class="mb-3">
            <a href="<?php echo $webMedida; ?>" class="href text-reset">
              <i class="fa fa-chevron-right"></i> Empresarial
            </a>
          </li>
          <li>
            <a href="<?php echo $webCortesia; ?>" class="href text-reset">
              <i class="fa fa-chevron-right"></i> Cortesía
            </a>
          </li>
        </ul>

      </div>
      <div class="col-6 col-md-6 offset-md-4 col-lg-2 offset-lg-0">

        <!-- Heading -->
        <h6 class="font-weight-bold text-uppercase text-gray-700 <?php echo $borderBottom; ?>">
          Contactenos
        </h6>

        <!-- List -->
        <ul class="list-unstyled text-muted mb-0">
          <li class="mb-3">
            <a class="text-reset text-bold" href="tel:3113111538">
              <i class="fas fa-phone-alt"></i> (+57) 311 311 15 38 </a>
          </li>
          <li class="mb-3">
            <a class="d-none d-lg-block" href="#modal-customizer" style="color:#25d366;text-decoration:none;font-weight:bold;" data-toggle="modal">
              <i class="fab fa-whatsapp" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="Da clic aquí!"></i>
              Hablemos en Whatsapp !
            </a>
            <a class="d-block d-sm-none" style="color:#25d366;text-decoration:none;font-weight:bold;" href="https://api.whatsapp.com/send?phone=573113111538&text=Hola%20Developer%20Men" target="_blank">
              <i class="fab fa-whatsapp" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="Da clic aquí!"></i>
              Hablemos en Whatsapp !
            </a>
          </li>
          <li class="mb-3">
            <a href="#!" class="href text-reset">
              <i class="fa fa-chevron-right"></i> Iniciar chat
            </a>
          </li>
          <br>
          <!-- Heading -->
          <h6 class="font-weight-bold text-uppercase text-gray-700 <?php echo $borderBottom; ?>">
            Encuentranos en
          </h6>
          <li class="mb-3">
            <p href="#!" class="href text-reset">
              <i class="fas fa-map-pin"></i> Llanogrande, Rionegro (Ant.)
            </p>
          </li>
          <li class="mb-3">
            <p href="#!" class="href text-reset">
              <i class="fas fa-map-marker-alt"></i> Km 2 Via Llanogrande Rionegro
            </p>
          </li>
        </ul>

      </div>
      <div class="col-6 col-md-4 col-lg-2">

        <!-- Heading -->
        <h6 class="font-weight-bold text-uppercase text-gray-700 <?php echo $borderBottom; ?>">
          Compañia
        </h6>

        <!-- List -->
        <ul class="list-unstyled text-muted mb-0">
          <li class="mb-3">
            <a href="<?php echo $terms; ?>" class="href text-reset">
              <i class="fa fa-chevron-right"></i> Terminos de servicio
            </a>
          </li>
          <li class="mb-3">
            <a href="#!" class="href text-reset">
              <i class="fa fa-chevron-right"></i> Quiénes somos
            </a>
          </li>
          <li>
            <a href="#!" class="href text-reset">
              <i class="fa fa-chevron-right"></i> Precios
            </a>
          </li>
        </ul>

        <br class="mb-5">

        <!-- Heading -->
        <h6 class="font-weight-bold text-uppercase text-gray-700 <?php echo $borderBottom; ?>">
          Soporte
        </h6>

        <!-- List -->
        <ul class="list-unstyled text-muted mb-0">
          <li class="mb-3">
            <a href="<?php echo $contact; ?>" class="href text-reset">
              <i class="fa fa-chevron-right"></i> Reportar problema
            </a>
          </li>
          <li class="mb-3">
            <a href="#!" data-toggle="modal" data-target="#modalContactenos" class="href text-reset">
              <i class="fa fa-chevron-right"></i> Contáctenos
            </a>
          </li>
          <li class="mb-3">
            <a href="/utility/support/login" target="_blank" class="href text-reset">
              <i class="fa fa-chevron-right"></i> Página Soporte
            </a>
          </li>
        </ul>

      </div>
    </div> <!-- / .row -->
  </div> <!-- / .container -->

</footer>
<div class="<?php echo $bgFooter; ?> container-fluid footer-bg2 footer-bottom">
  <div class="row">
    <div class="col-md-7 text-left">
      <div class="copyright">
        <p class="font-weight-bold">© 2014 &bull; <?php echo date('Y'); ?> Developer Men. Todos los derechos reservados. LLanogrande, Rionegro (Ant.) Colombia
          <!--<img src="./assets/img/icons/colombia.png" width="20" height="20">-->
        </p>
      </div>
    </div>
    <div class="col-md-4 text-center">
      <div class="social-icon">
        <a class="facebook-hover" href="https://facebook.com/developermen" target="_blank"><i class="fab fa-facebook-f"></i></a>
        <a class="twitter-hover" href="https://twitter.com/developermen1" target="_blank"><i class="fab fa-twitter"></i></a>
        <a class="google-hover" href="https://plus.google.com/112465322804224047765" target="_blank"><i class="fab fa-google-plus-g"></i></a>
        <a class="instagram-hover" href="https://instagram.com/developermen" target="_blank"><i class="fab fa-instagram"></i></a>
        <a class="slack-hover" href="https://developermen.slack.com/" target="_blank"><i class="fab fa-slack-hash"></i></a>
        <a class="wordpress-hover" href="https://developermen.com/demos/wordpress/wordpress/" target="_blank"><i class="fab fa-wordpress-simple"></i></a>
      </div>
    </div>
  </div>
</div>
<a href="#" class="back-to-top" data-aos="fade-left" data-aos-delay="150"><i class="fas fa-chevron-up floating"></i></a>
<?php include('assets/template/scripts.php'); ?>