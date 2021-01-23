<?php
//Inician variables que se envian al Header para gestionarlas cuando se comparte la pagina
//Seo de La Pagina
$description = "Conoce y descubre nuestra página de cortesia que ponemos a disposición de todos nuestros usuarios totalmente gratis.";
//Seo para facebook
$ogTitle = "Web cortesia &bull; Developer Men";
$ogDescription="Conoce y descubre nuestra página de cortesia que ponemos a disposición de todos nuestros usuarios totalmente gratis.";
$ogUrl="www.developermen.com/webCortesia";
$ogSiteName="Desarrollo Web a la Medida, Planes de Compra, Diseño Grafico, Plantillas Web, Blog de Desarrollo Web.";
$ogArticleTag="Web cortesia &bull; Developer Men";
$ogArticleSection="Web cortesia";
$ogImage="https://developermen.com/assets/img/published/devMen.jpg";
//Seo para Twitter
$twitterDescription="Conoce y descubre nuestra página de cortesia que ponemos a disposición de todos nuestros usuarios totalmente gratis.";
$twitterTitle="Web cortesia &bull; Developer Men";
$twitterImage="https://developermen.com/assets/img/published/devMen.jpg";
$active = 'Web cortesia';
$title = 'Web Cortesia &bull; Developer Men';
$canonical = 'https://developermen.com/webCortesia';
echo '<!-- Seccion anuncios de google -->
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>(adsbygoogle = window.adsbygoogle || []).push({google_ad_client: "ca-pub-2047221185684064",enable_page_level_ads: true});</script>
<!-- Seccion anuncios de google -->';
require 'assets/templates/header.php';
?>
<link rel="stylesheet" href="./assets/css/webCortesia.css?ver=<?php echo filemtime('./assets/css/webCortesia.css');?>">
</head>
<body>
  <div class="divCortesia imagen-area animated zoomIn">
    <div class="container" align="center">
      <div class="row justify-content-center">
        <div class="col-lg-12">
          <img src="https://developermen.com/assets/img/logoDevMen-header.png" alt="Developer Men" width="750px" heigth="auto">
        </div>
      </div>
    </div>
    <style media="screen">
    .divWarning{
      padding: 10px 15px;
      font-size: 14px;
      background:#ffbc67;
      border-color:#ffbc67;
      color:#ffffff;
      position:fixed;
      top:2%;
      right:2%;
      z-index:100;
      width: 30%;
      padding-top:1%;
      padding-bottom: 1%;
      cursor: pointer;
    }
    @media (max-width: 767px) {
      .divWarning{	padding: 20px 35px;	width: 90%;}
    }
    </style>
    <div onclick='hideDivWarning();' id='divWarning' class='divWarning alert alert-warning' style='top:2%;	position:fixed;right:2%;'>
      <i class='fa fa-info-circle' aria-hidden='true'></i>
      Edita la información que aquí se muestra dando click sobre esta y digitando la información que desees
    </div>
    <script>
    function showDivError(){
      $("#divError").fadeIn(500);
    }
    function hideDivWarning(){
      $("#divWarning").fadeOut(500);
    }
    $( function(){ showDivError(); });
    </script>

    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="single-start-box" style="text-align:left;">
            <div align="center">
              <h3 class="lead" style="font-weight:bold;color:#7362DE;"><i class="fa fa-caret-right"></i><span contenteditable="true"> Developer Men </span></h3>
            </div>
            <p><kbd class="">Dirección:</kbd><span contenteditable="true"> Llanogrande, Rionegro (Antioquia) Colombia</span></p>
            <hr>
            <p><kbd class="">Telefono:</kbd><span contenteditable="true"><a href="tel:3113111538"> (+57) 311 311 15 38</a></span></p>
            <hr>
            <div class="row justify-content-center">
              <div class="col-lg-12 text-center">
                <p class="lead">Síguenos en nuestras redes</p>
                <div class="singleblog-icons">
                  <a href="https://facebook.com/developermen" target="_blank"><i class="fab fa-facebook-f"></i></a>
                  <a href="https://twitter.com/developermen1" target="_blank"><i class="fab fa-twitter"></i></a>
                  <a href="https://plus.google.com/112465322804224047765" target="_blank"><i class="fab fa-google-plus-g"></i></a>
                  <a href="https://developermen.com/blog/" target="_blank"><i class="fab fa-wordpress-simple"></i></a>
                  <a href="https://instagram.com/developermen" target="_blank"><i class="fab fa-instagram"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-8">
          <div class="single-start-box" id="maps">
            <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyD1Xuxw2tQWMQJw8UTbsv5zOXA-mmUZ4CE%20&q=Developer+Men" width="100%" height="345" frameborder="0" style="border:0"></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Mensajes publicitarios -->
  <!-- Mensaje publicidad con imagen -->
  <div class="alert bd-callout bd-callout-info" id="publicidad">
    <div class="row">
      <div class="col-sm-12" align="center" id="img">
        <a href="#" class="close" data-dismiss="alert">&times;</a>
        <div align="center">
          <p>Publicidad</p>
        </div>
        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <ins class="adsbygoogle"
        style="display:block"
        data-ad-format="fluid"
        data-ad-layout-key="-ek+6d-4-br+lo"
        data-ad-client="ca-pub-2047221185684064"
        data-ad-slot="5979139160"></ins>
        <script>
        (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
        <a href="https://developermen.com/servicios" target="_blank"><img src="https://developermen.com/assets/img/media/servicios.png" class="rounded img-fluid" alt="Publicidad Developer Men"><br></a>
        <p class="text-justify">Conoce todos los productos y servicios que pone a tu disposición Developer Men.</p>
      </div>
    </div>
  </div>
  <!-- Pie de página del sitio -->
  <div class="footer" align="center">
    <div class="container-fluid bg-1">
      <div class="row">
        <div class="col-md-6 text-left">
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
            Este es un sitio web de cortesia brindado por Developer Men solicita el tuyo en <a href="https://developermen.com/" target="_blank">www.developermen.com</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Pie de pagina del sitio -->
  <!-- Scripts propios de la página -->
  <script src="./assets/js/popper.min.js"></script>
  <script src="./assets/js/bootstrap.min.js"></script>
  <script src="./assets/js/chat.js"></script>
  <!-- Pie de página -->
</body>
</html>
