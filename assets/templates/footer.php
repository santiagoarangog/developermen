<?php
include('assets/features/modals.php');
// Inicia la declaración de variables para las páginas correspondientes a la barra de navegación
$inicio = "index";
$quieneSomos = 'company';
$servicios = 'servicios';
$contactanos = 'contactanos';
$blog = 'blog';
$soporte = 'support/index';
$legal = 'laws/index';
?>
<!-- Inicia la Barra Social Vertical. -->
<div class="social hidden-xs" id="social">
  <ul>
    <!--<li><a data-toggle="tooltip" data-placement="bottom" title="Sube al Inicio de Todo"href="#header-sa" class="fa fa-angle-double-up fa-fw fa-2x" aria-hidden="true"></a></li>-->
    <li><a data-toggle="tooltip" data-placement="left" title="Síguenos en Facebook" href="https://www.facebook.com/DeveloperMen/" class="fab fa-facebook-f fa-fw fa-2x" target="_blank"></a></li>
    <li><a data-toggle="tooltip" data-placement="left" title="Síguenos en Twitter" href="https://twitter.com/developermen1" class="fab fa-twitter fa-fw fa-2x" target="_blank"></a></li>
    <li><a data-toggle="tooltip" data-placement="left" title="Síguenos en Google Plus" href="https://plus.google.com/112465322804224047765" class="fab fa-google-plus-g fa-fw fa-2x" target="_blank"></a></li>
    <li><a data-toggle="tooltip" data-placement="left" title="Pregúntanos lo que quieras" href="https://join.slack.com/t/developermen/shared_invite/enQtMzA3MDkzMTc4NDUzLTVjZmY1OTk2ODJmYzAzNDE2ODIyZTNhNDAwOTg4Y2ExZGVkZjQ1ZGVhMDczODFlNzBkM2JmNDM0NTA1NDcxNWQ" class="fab fa-slack-hash fa-fw fa-2x" target="_blank"></a></li>
  </ul>
</div>
<!-- Finaliza la Barra Social Vertical. -->

<!-- Footer Area
======================================-->
<div class="footer-menu footer-bg bg-6" style="box-shadow: 0 -5px 5px -5px #333;">
  <div class="footer-bottom">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-4" align="center">
          <a href="" class="logo-footer"><img align="center" src="./assets/img/logoDeveloper.png" alt="" width="400" height="400"></a>
          <hr style="width:70%; background:#7362DE;box-shadow: 0 5px 5px -5px #333;">
          <div class="footer-menu">
            <p style="font-size:13px;text-align:center;">Echo con <i class="fa fa-heart"></i> & <i class="fa fa-code"></i> en Llanogrande, Rionegro, Antioquia , Colombia.</p>
            <p style="font-size:13px;text-align:center;"><i class="fa fa-code-branch"></i> Versión 2.1</p>
            <a href="https://developermen.com/beta/index" class="btn btn-primary outline">Versión Beta</a>
          </div>
        </div>
        <!-- Link's interes Developer Men -->
        <div class="col-md-2" style="color:rgb(255, 255, 255);">
          <h5 style="text-align:center;font-weight:bold;color:#ffffff;"><strong><i class="fa fa-puzzle-piece"></i> Información</strong></h5>
          <hr style="width:70%; background:#7362DE;box-shadow: 0 5px 5px -5px #333;">
          <ul class="ul-footer" id="links-footer">
            <li><a href="blog" target="_blank"><i class="fa fa-chevron-right"></i> Blog</a></li>
            <br>
            <li><a href="support/index" target="_blank"><i class="fa fa-chevron-right"></i> Soporte</a></li>
            <br>
            <li><a href="laws/index" target="_blank"><i class="fa fa-chevron-right"></i> Aviso legal</a></li>
            <br>
            <li><a href="https://tawk.to/chat/5a19a96c198bd56b8c03d513/default/?$_tawk_popout=true" target="_blank"><i class="fa fa-chevron-right"></i> Chatea con nosotros</a></li>
          </ul>
        </div>
        <!-- Ubicacion Developer Men -->
        <div class="col-md-3" style="text-align:center;">
          <h5 style="text-align:center;font-weight:bold;color:#ffffff;"><i class="fa fa-comments"></i> Contáctanos</h5>
          <hr style="width:70%; background:#7362DE;box-shadow: 0 5px 5px -5px #333;">
          <div class="text-holder">
            <h5 style="font-weight:bold;"><a href="tel:3113111538"> (+57) 311 311 15 38 </a></h5>
            <a href="https://api.whatsapp.com/send?phone=573113111538&text=Hola%20Developer%20Men" target="_blank" style="color:#25d366;text-align:right;"><i class="fab fa-whatsapp" style="font-size:20px;" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="Da clic aquí!"></i> Hablemos en Whatsapp !</a>
            <!-- <span class="available">Abrimos from 12PM - 18PM</span> -->
            <br><br>
            <h5 style="text-align:center;font-weight:bold;color:#ffffff;"><i class="fa fa-map-signs"></i> Encuentranos en</h5>
            <hr style="width:70%; background:#7362DE;box-shadow: 0 5px 5px -5px #333;">
            <h6>Llanogrande Rionegro (Ant.)</h6>
            <address style="color:#7362DE;">Km 2 Via Llanogrande Rionegro</address>
            <!-- <a class="btn btn-developer rounded" href="https://www.google.com.co/maps/place/Developer+Men/@6.1374737,-75.4036457,15z/data=!4m5!3m4!1s0x0:0x230ec1a56b5a921f!8m2!3d6.1374737!4d-75.4036457" target="_blank"  data-toggle="tooltip" data-placement="bottom" title="Da clic aquí!">Conoce como llegar <i class="fa fa-map-o" aria-hidden="true"></i></a> -->
          </div>
        </div>
        <!-- Pequeña descripción Developer Men -->
        <div class="col-md-3" style="text-align:center;">
          <div class="text-frame">
            <h5 style="text-align:center;color:#ffffff;font-weight:bold;"><i class="fa fa-info-circle"></i> Quiénes somos</h5>
            <hr style="width:70%; background:#7362DE;box-shadow: 0 5px 5px -5px #333;">
            <p style="text-align:justify;">
              Empresa de Desarrollo y Diseño Web a la médida, ubicada en Llanogrande Rionegro Ant. Colombia.
            </p>
            <p style="text-align:justify;">
              <span style="color:#7362DE;">Ofrecemos:</span> Desarrollo web a la médida, Hosting, Dominios, Subdominios, Logotipos Empresariales, Gestión Redes Sociales, Plantillas Gratis, Marketing Online y SEO.
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row">
        <!-- Link's barra de navegación Developer Men -->
        <div class="col-md-12">
          <div class="footer-menu">
            <ul>
              <!-- <li><p style="font-size:13px;">Echo con <i class="fa fa-heart"></i> & <i class="fa fa-coffee"></i> en Llanogrande, Rionegro, Antioquia , Colombia.</p></li> -->
              <li><a href="https://developermen.com/old/index#utm_source=indexNew&utm_medium=old&utm_campaign=indexOld&utm_term=global&utm_content=redirectIndexNew"><i class="fa fa-retweet"></i> Versión anterior</a></li>
              <li><a href="doc/index" target="_blank"><i class="fas fa-book"></i> Documentación</a></li>
              <li><a href="sitemaps.xml" target="_blank"><i class="fas fa-sitemap"></i> Sistemap</a></li>
              <li><a href="https://github.com/developerMen" target="_blank"><i class="fab fa-github-alt"></i> Git Hub &bull; Developer Men</a></li>
              <li><a href="https://gtmetrix.com/" target="_blank"><i class="fa fa-thermometer-three-quarters"></i> Test</a></li>
              <!-- <li> <img src="assets/img/cdn/colti.png" class="img-fluid" alt="La respuesta es colombia" style="width:30%;height:30%;"> </li> -->
              <!-- <li><p style="font-size:13px;text-align:right;"><i class="fa fa-code-branch"></i> Versión 2.1</p></li> -->
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--End of footer bottom-->
  <div class="container-fluid bg-1 footer-bg2">
    <div class="row">
      <div class="col-md-7 text-left">
        <div class="copyright">
          <p>© 2014 &bull; <?php echo date('Y'); ?> Developer Men. Todos los derechos reservados. LLanogrande, Rionegro (Ant.) Colombia <!--<img src="./assets/img/icons/colombia.png" width="20" height="20">--></p>
        </div>
      </div>
      <div class="col-md-2 text-left">
        <div class="social-icon">
          <a class="facebook-hover" href="https://facebook.com/developermen" target="_blank"><i class="fab fa-facebook-f"></i></a>
          <a class="twitter-hover" href="https://twitter.com/developermen1" target="_blank"><i class="fab fa-twitter"></i></a>
          <a class="google-hover" href="https://plus.google.com/112465322804224047765" target="_blank"><i class="fab fa-google-plus-g"></i></a>
          <a class="instagram-hover" href="https://instagram.com/developermen" target="_blank"><i class="fab fa-instagram"></i></a>
          <a class="slack-hover" href="https://developermen.slack.com/" target="_blank"><i class="fab fa-slack-hash"></i></a>
          <a class="wordpress-hover" href="https://developermen.com/blog/" target="_blank"><i class="fab fa-wordpress-simple"></i></a>
        </div>
      </div>
      <div class="col-md-3 text-center">
        <div class="copyright"><br>
          <a href="#upTop" class="btn btn-outline-dark rounded text-light scrl-down" align="center">Ir Arriba <i class="fa fa-angle-up" aria-hidden="true"></i></a>
        </div>
      </div>
    </div>
  </div>
</div>
<a href="#" class="back-to-top"><i class="fas fa-chevron-up"></i></a>
<!--End of Footer Menu-->
<script async type="text/javascript">$(document).ready(function(){$('.ir-arriba').click(function(){$('body, html').animate({scrollTop:'0px'},300);});$(window).scroll(function(){if($(this).scrollTop()>100){$('.ir-arriba').slideDown(300);}else{$('.ir-arriba').slideUp(300);};});});$(document).ready(function(){$('.social').ready(function(){$('body,html').animate({scrollTop:'0px'},300);});$(window).scroll(function(){if($(this).scrollTop()>500){$('.social').slideDown(300);}else{$('.social').slideUp(300);};});});$(document).ready(function(){$('.arbol').click(function(){$('body,html').animate({scrollTop:'0px'},300);});$(window).scroll(function(){if($(this).scrollTop()>500){$('.arbol').slideDown(300);}else{$('.arbol').slideUp(300);};});});</script>
<script src="./assets/js/popper.min.js"></script>
<!--<script src="assets/js/jquery.snow.js?ver=<?php echo filemtime('assets/js/jquery.snow.js');?>" charset="utf-8"></script>-->
<script type="text/javascript">
//$(document).ready( function(){
  //$.fn.snow({flakeColor: '#80c2ff'});
//});
</script>
<script src="./assets/js/bideo.js"></script>
<script src="./assets/js/video.js?ver=<?php echo filemtime('./assets/js/video.js');?>"></script>
<script src="./assets/js/bootstrap.min.js"></script>
<script src="./assets/js/owl.carousel.min.js"></script>
<script src="./assets/js/modal-video.js"></script>
<script src="./assets/js/main.js?ver=<?php echo filemtime('./assets/js/main.js');?>"></script>
<script src="./assets/js/chat.js?ver=<?php echo filemtime('./assets/js/chat.js');?>"></script>
