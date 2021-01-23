<?php
//Inician variables que se envian al Header para gestionarlas cuando se comparte la pagina
//Seo de La Pagina
$description = "Empresa de Desarrollo Web a la Medida, Ubicada en Llanogrande Rionegro Ant. Colombia. Ofrecemos: Desarrollo web en el oriente antioqueño y oriente cercano, Ayudas a Desarrolladores, Desarrollos web a la medida, Marketing Online, SEO, Monitorizacion de Trafico en Su Pagina, contamos con Planes para la Pagina que usted su Organizacion necesitan.";
//Seo para facebook
$ogTitle = "Developer Men &bull; Politicas de usuario";
$ogDescription="Empresa de Desarrollo Web a la Medida, Ubicada en Llanogrande Rionegro Ant. Colombia. Ofrecemos: Desarrollo web en el oriente antioqueño y oriente cercano, Ayudas a Desarrolladores, Desarrollos web a la medida, Marketing Online, SEO, Monitorizacion de Trafico en Su Pagina, contamos con Planes para la Pagina que usted su Organizacion necesitan.";
$ogUrl="www.developermen.com";
$ogSiteName="Desarrollo Web a la Medida, Planes de Compra, Diseño Grafico, Plantillas Web, Blog de Desarrollo Web.";
$ogArticleTag="Developer Men &bull; Politicas de usuario";
$ogArticleSection="Try";
$ogImage="https://developermen.com/assets/img/media/developerMenInicio.png";
//Seo para Twitter
$twitterDescription="Empresa de Desarrollo Web a la Medida, Ubicada en Llanogrande Rionegro Ant. Colombia. Ofrecemos: Desarrollo web en el oriente antioqueño y oriente cercano, Ayudas a Desarrolladores, Desarrollos web a la medida, Marketing Online, SEO, Monitorizacion de Trafico en Su Pagina, contamos con Planes para la Pagina que usted su Organizacion necesitan.";
$twitterTitle="Developer Men &bull; Desarrollo Web a la medida de lo que usted necesita";
$twitterImage="https://developermen.com/assets/img/media/developerMenInicio.png";
$active = 'Politicas';
$title = 'Developer Men &bull; Politicas de usuario';
$canonical="https://developermen.com/index";
require 'assets/templates/header.php';
echo '<link rel="stylesheet" href="./assets/css/laws.css">';
echo "<link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>";
?>
<body id="page-top">
  <!-- Inicia primera sección de la página -->
  <!-- Navigation -->
  <div class="header-top2">
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="https://developermen.com/assets/img/icons/devMen-head.png" alt="Developer Men" class="img-fluid" width="20%" height="20%">Politicas &bull; Developer Men</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger strongFont" href="https://developermen.com"><i class="fas fa-home"></i> Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger strongFont" href="https://developermen.com/servicios"><i class="fas fa-tags"></i> Servicios</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger strongFont" href="https://developermen.com/company"><i class="fas fa-flag"></i> Quiénes somos</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>

  <div class="title">
    <h3>Politicas de usuario</h3>
    <h1>Developer Men</h1><br>
    <h3>Politicas de protección y reglamento del usuario</h3>
    <a href="#politicas" class="button">Ver <i class="fas fa-angle-down"></i></a>
  </div>

  <script >
  var _createClass = function () {function defineProperties(target, props) {for (var i = 0; i < props.length; i++) {var descriptor = props[i];descriptor.enumerable = descriptor.enumerable || false;descriptor.configurable = true;if ("value" in descriptor) descriptor.writable = true;Object.defineProperty(target, descriptor.key, descriptor);}}return function (Constructor, protoProps, staticProps) {if (protoProps) defineProperties(Constructor.prototype, protoProps);if (staticProps) defineProperties(Constructor, staticProps);return Constructor;};}();function _classCallCheck(instance, Constructor) {if (!(instance instanceof Constructor)) {throw new TypeError("Cannot call a class as a function");}}var max_particles = 2500;
  var particles = [];
  var frequency = 10;
  var init_num = max_particles;
  var max_time = frequency * max_particles;
  var time_to_recreate = false;

  // Enable repopolate
  setTimeout(function () {
    time_to_recreate = true;
  }.bind(undefined), max_time);

  // Popolate particles
  popolate(max_particles);

  var tela = document.createElement('canvas');
  tela.width = $(window).width();
  tela.height = $(window).height();
  $("body").append(tela);

  var canvas = tela.getContext('2d');var

  Particle = function () {
    function Particle(canvas) {_classCallCheck(this, Particle);
      var random = Math.random();
      this.progress = 0;
      this.canvas = canvas;
      this.center = {
        x: $(window).width() / 2,
        y: $(window).height() / 2 };

        this.point_of_attraction = {
          x: $(window).width() / 2,
          y: $(window).height() / 2 };




          if (Math.random() > 0.5) {
            this.x = $(window).width() * Math.random();
            this.y = Math.random() > 0.5 ? -Math.random() - 100 : $(window).height() + Math.random() + 100;
          } else {
            this.x = Math.random() > 0.5 ? -Math.random() - 100 : $(window).width() + Math.random() + 100;
            this.y = $(window).height() * Math.random();

          }

          this.s = Math.random() * 2;
          this.a = 0;
          this.w = $(window).width();
          this.h = $(window).height();
          this.radius = random > .2 ? Math.random() * 1 : Math.random() * 3;
          this.color = random > .2 ? "#694FB9" : "#9B0127";
          this.radius = random > .8 ? Math.random() * 2.2 : this.radius;
          this.color = random > .8 ? "#3CFBFF" : this.color;
        }_createClass(Particle, [{ key: 'calculateDistance', value: function calculateDistance(

          v1, v2) {
            var x = Math.abs(v1.x - v2.x);
            var y = Math.abs(v1.y - v2.y);
            return Math.sqrt(x * x + y * y);
          } }, { key: 'render', value: function render()

          {
            this.canvas.beginPath();
            this.canvas.arc(this.x, this.y, this.radius, 0, 2 * Math.PI);
            this.canvas.lineWidth = 2;
            this.canvas.fillStyle = this.color;
            this.canvas.fill();
            this.canvas.closePath();
          } }, { key: 'move', value: function move()

          {

            var p1 = {
              x: this.x,
              y: this.y };


              var distance = this.calculateDistance(p1, this.point_of_attraction);
              var force = Math.max(100, 1 + distance);

              var attr_x = (this.point_of_attraction.x - this.x) / force;
              var attr_y = (this.point_of_attraction.y - this.y) / force;

              this.x += Math.cos(this.a) * this.s + attr_x;
              this.y += Math.sin(this.a) * this.s + attr_y;
              this.a += Math.random() > 0.5 ? Math.random() * 0.9 - 0.45 : Math.random() * 0.4 - 0.2;

              if (distance < 30 + Math.random() * 100) {
                return false;
              }

              this.render();
              this.progress++;
              return true;
            } }]);return Particle;}();


            function popolate(num) {
              for (var i = 0; i < num; i++) {
                setTimeout(
                  function (x) {
                    return function () {
                      // Add particle
                      particles.push(new Particle(canvas));
                    };
                  }(i),
                  frequency * i);
                }
                return particles.length;
              }

              function createSphera() {
                var radius = 180;
                var center = {
                  x: $(window).width() / 2,
                  y: $(window).height() / 2 };

                }

                function clear() {
                  canvas.globalAlpha = 0.08;
                  canvas.fillStyle = '#110031';
                  canvas.fillRect(0, 0, tela.width, tela.height);
                  canvas.globalAlpha = 1;
                }

                /*
                * Function to update particles in canvas
                */
                function update() {
                  particles = particles.filter(function (p) {return p.move();});
                  // Recreate particles
                  if (time_to_recreate) {
                    if (particles.length < init_num) {popolate(1);console.log("Ricreo");}
                  }
                  clear();
                  requestAnimationFrame(update.bind(this));
                }
                update();
                </script>


                <section class="testimonials text-center" id="politicas">
                  <div class="container">
                    <div class="row">
                      <div class="col-lg-4">
                        <div class="single-start-box">
                          <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                            <img class="img-fluid rounded-circle mb-3" src="../assets/img/icons/infoLaws.png" alt="">
                            <h4 class="strongFont text-dark"><i class="fas fa-gavel" style="color:rgb(115, 98, 222);opacity:0.6;"></i>&nbsp;Protección de datos</h4>
                            <ul class="text-dark" style="font-weight:bold;text-align:center;list-style-type: none;">
                              <li><a data-toggle="modal" href="#modalAvisoLegal"><i class="fas fa-external-link-alt"></i> Aviso legal</a></li>
                              <hr id="hr_0">
                              <li><a data-toggle="modal" href="#modalCookies"><i class="fas fa-external-link-alt"></i> Politica de Cookies</a></li>
                              <hr id="hr_0">
                              <li><a href="#"><i class="fas fa-external-link-alt"></i> Datos suministrados en formularios</a></li>
                              <hr id="hr_0">
                              <li><a href="#"><i class="fas fa-external-link-alt"></i> Datos de correo electronico</a></li>
                              <hr id="hr_0">
                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-4">
                        <div class="single-start-box" style="opacity:0.9;">
                          <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                            <img class="img-fluid rounded-circle mb-3" src="../assets/img/icons/partnershipLaws.png" alt="">
                            <h4 class="strongFont text-dark"><i class="fas fa-brain" style="color:rgb(115, 98, 222);opacity:0.6;"></i>&nbsp;Proteccion intelectual</h4>
                            <ul class="text-dark" style="font-weight:bold;text-align:center;list-style-type: none;">
                              <li><a href="#"><i class="fas fa-external-link-alt"></i> Imagenes</a></li>
                              <hr id="hr_0">
                              <li><a href="#"><i class="fas fa-external-link-alt"></i> Iconos y fuentes</a></li>
                              <hr id="hr_0">
                              <li><a href="#"><i class="fas fa-external-link-alt"></i> Plugins</a></li>
                              <hr id="hr_0">
                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-4">
                        <div class="single-start-box">
                          <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                            <img class="img-fluid rounded-circle mb-3" src="../assets/img/icons/chat.png" alt="">
                            <h4 class="strongFont text-dark"><i class="fas fa-question" style="color:rgb(115, 98, 222);opacity:0.6;"></i>&nbsp;Preguntas frecuentes</h4>
                            <ul class="text-dark" style="font-weight:normal;text-align:justify;list-style-type: none;">
                              <li>¿ Quien tiene acceso a la página de Soporte de Developer Men ?</li>
                              <hr id="hr_0">
                              <li>¿ Los productos se pueden comprar por separado ?</li>
                              <hr id="hr_0">
                              <li>¿ Como realizo la compra de sus productos ?</li>
                              <hr id="hr_0">
                              <li>¿ Con que medios de contacto cuentan ?</li>
                              <hr id="hr_0">
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </section>

                <!-- Formulario de contacto-->
                <section class="testimonials bg-light text-center email-bg imagen-area">
                  <div class="container">
                    <div class="row">
                      <div class="col-lg-6">
                        <div class="mb-5">
                          <h2 class=" strongFont">Recibe mas información sobre nosotros en tu correo</h2>
                          <hr style="background:rgb(115, 98, 222);width:30%;margin-top:0%;">
                          <small id="emailHelp" class="form-text text-muted" style="text-align:justify;"><i class="fas fa-bullhorn"></i> Ingresa una dirección de correo electrónico a la cual deseas que te enviemos más información sobre Developer Men <span class="text-danger">*</span> </small>
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="mb-5">
                          <div class="form-group">
                            <!-- <label for="exampleInputEmail1"><i class="far fa-envelope-open"></i> Dirección de correo electrónico</label> -->
                            <input type="email" value="" style="width:100%;" name="email" class="form-control" placeholder="Introduce tu dirección de correo eléctronico" required autocomplete="off">
                            <div style="text-align:left;"><input type="checkbox" name="Acepto" value="1" required><small class="strongFont"> Acepto las <a href="laws/index" target="_blank">Políticas de protección de datos</a></small></div>
                          </div>
                          <button class="btn btn-devMen btn-block strong" name="subscribe" type="submit" value="Enviar">Enviar</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>

              <!-- Área conoce todo sobre Developer Men -->
              <section class="testimonials text-center developerMen-bg imagen-area">
                <div class="container">
                  <div class="mb-3">
                    <h2 class="strongFont">Conoce mas sobre Developer Men</h2>
                    <h3>y todos los productos que pone a tu disposición</h3>
                  </div>
                  <div class="row">
                    <div class="col-lg-12">
                      <a href="https://developermen.com" class="button strongFont">Ir al sitio web</a>
                    </div>
                  </div>
                </div>
              </section>
              <div class="container-fluid bg-6 footer-bg2">
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
                      <a href="#" class="btn btn-outline-dark rounded text-light btn-IrArriba" align="center">Ir Arriba <i class="fa fa-angle-up" aria-hidden="true"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <a href="#" class="back-to-top"><i class="fas fa-chevron-up"></i></a>
            <?php include("./assets/features/modalsLaws.php"); ?>
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
            <script src="./assets/js/laws.js?ver=<?php echo filemtime('./assets/js/laws.js');?>"></script>
            <script src="./assets/js/video.js?ver=<?php echo filemtime('./assets/js/video.js');?>"></script>
            <script src="./assets/js/bootstrap.min.js"></script>
            <script src="./assets/js/owl.carousel.min.js"></script>
            <script src="./assets/js/modal-video.js"></script>
            <script src="./assets/js/main.js?ver=<?php echo filemtime('./assets/js/main.js');?>"></script>
            <script src="./assets/js/chat.js?ver=<?php echo filemtime('./assets/js/chat.js');?>"></script>
          </body>
          </html>
