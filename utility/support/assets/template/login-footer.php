<!-- Pie de página del sitio -->
<div class="footer d-none d-lg-block" align="center">
  <div class="position-relative" id="web-personal">
    <div class="shape shape-bottom shape-fluid-x svg-shim text-gray-dark">
      <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"/>
      </svg>
    </div>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6 text-left">
        <div class="copyright">
          <p>© 2014 &bull; <?php echo date('Y'); ?> Developer Men. Todos los derechos reservados. LLanogrande, Rionegro (Ant.) Colombia</p>
        </div>
      </div>
      <div class="col-md-6 text-center" align="center">
        <br><button class="btn btn-secondary-soft btn-sm float-right" type="button" onclick="location.href='<?php echo isset($hrefButton)?$hrefButton:'https://developermen.com#utm_source=supportSite&utm_medium=siteSupport&utm_campaign=support&utm_term=global&utm_content=supportSite' ?>';"><?php echo isset($msgButton)?$msgButton:'Volver al sitio web principal'; ?></button>
      </div>
    </div>
  </div>
</div>
<a href="#" class="back-to-top" data-aos="fade-left" data-aos-delay="150"><i class="fas fa-chevron-up"></i></a>
<!-- JAVASCRIPT
================================================== -->
<!-- Libs JS -->
<script src="https://developermen.com/assets/libs/jquery/dist/jquery.min.js"></script>
<script src="https://developermen.com/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://developermen.com/assets/libs/sweetalert/sweetalert.min.js" charset="UTF-8"></script>
<script src="https://developermen.com/assets/libs/aos/dist/aos.js"></script>
<script src="https://developermen.com/assets/js/theme.min.js"></script>
<script src="assets/js/ajaxFunctions.js?ver=<?php echo filemtime('assets/js/ajaxFunctions.js'); ?>"></script>
<script src="assets/js/login.js?ver=<?php echo filemtime('assets/js/login.js'); ?>"></script>
</body>
</html>
