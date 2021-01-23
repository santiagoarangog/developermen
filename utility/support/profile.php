<?php
//Inician variables que se envian al Header para gestionarlas cuando se comparte la pagina
//Seo de La Pagina
$description = "Nuestro objetivo es cuidar de usted. ¿Necesita ayuda con la instalación, encontrar un error o simplemente necesita una aclaración sobre una plataforma desarrollada por nosotros? Estaremos allí para echar una mano.";
//Seo para facebook
$ogTitle = "Soporte &bull; Developer Men";
$ogDescription="Nuestro objetivo es cuidar de usted. ¿Necesita ayuda con la instalación, encontrar un error o simplemente necesita una aclaración sobre una plataforma desarrollada por nosotros? Estaremos allí para echar una mano.";
$ogUrl="www.developermen.com";
$ogSiteName="Desarrollo Web a la Medida, Planes de Compra, Diseño Grafico, Plantillas Web, Blog de Desarrollo Web.";
$ogArticleTag="Soporte &bull; Developer Men";
$ogArticleSection="Soporte";
$ogImage="https://developermen.com/assets/img/media/developerMenInicio.png";
//Seo para Twitter
$twitterDescription="Nuestro objetivo es cuidar de usted. ¿Necesita ayuda con la instalación, encontrar un error o simplemente necesita una aclaración sobre una plataforma desarrollada por nosotros? Estaremos allí para echar una mano.";
$twitterTitle="Soporte &bull; Developer Men";
$twitterImage="https://developermen.com/assets/img/media/developerMenInicio.png";
$active = 'Soporte';
$title = 'Soporte &bull; Developer Men';
$canonical="https://developermen.com/index";
require_once("assets/template/header.php");
include ('assets/functions/mensajes.php');
?>
<body>
  <header class="header header-transparent" id="header-main">
    <!-- Topbar -->
    <div id="navbar-top-main" class="navbar-top  navbar-dark bg-dark border-bottom">
      <div class="container px-0">
        <div class="navbar-nav align-items-center">
          <div class="d-none d-lg-inline-block">
            <span class="navbar-text mr-3">Purpose - Website UI Kit</span>
          </div>
          <div>
            <ul class="nav">
              <li class="nav-item dropdown ml-lg-2">
                <a class="nav-link px-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-offset="0,10">
                  <img alt="Image placeholder" src="../../assets/img/icons/flags/us.svg">
                  <span class="d-none d-lg-inline-block">United States</span>
                  <span class="d-lg-none">EN</span>
                </a>
                <div class="dropdown-menu dropdown-menu-sm">
                  <a href="#" class="dropdown-item"><img alt="Image placeholder" src="../../assets/img/icons/flags/es.svg">Spanish</a>
                  <a href="#" class="dropdown-item"><img alt="Image placeholder" src="../../assets/img/icons/flags/ro.svg">Romanian</a>
                  <a href="#" class="dropdown-item"><img alt="Image placeholder" src="../../assets/img/icons/flags/gr.svg">Greek</a>
                </div>
              </li>
            </ul>
          </div>
          <div class="ml-auto">
            <ul class="nav">
              <li class="nav-item">
                <a class="nav-link" href="../../pages/utility/support.html">Support</a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link" data-action="omnisearch-open" data-target="#omnisearch"><i class="far fa-search"></i></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../../pages/shop/checkout-cart.html"><i class="far fa-shopping-cart"></i></a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link pr-0" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="far fa-user-circle"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                  <h6 class="dropdown-header">User menu</h6>
                  <a class="dropdown-item" href="#">
                    <i class="far fa-user"></i>Account
                  </a>
                  <a class="dropdown-item" href="#">
                    <span class="float-right badge badge-primary">4</span>
                    <i class="far fa-envelope"></i>Messages
                  </a>
                  <a class="dropdown-item" href="#">
                    <i class="far fa-cog"></i>Settings
                  </a>
                  <div class="dropdown-divider" role="presentation"></div>
                  <a class="dropdown-item" href="#">
                    <i class="far fa-sign-out-alt"></i>Sign out
                  </a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- Main navbar -->
    <nav class="navbar navbar-main navbar-expand-lg navbar-dark bg-dark" id="navbar-main">
      <div class="container px-lg-0">
        <!-- Logo -->
        <a class="navbar-brand mr-lg-5" href="../../index.html">
          <img alt="Image placeholder" src="../../assets/img/brand/white.png" id="navbar-logo" style="height: 50px;">
        </a>
        <!-- Navbar collapse trigger -->
        <button class="navbar-toggler pr-0" type="button" data-toggle="collapse" data-target="#navbar-main-collapse" aria-controls="navbar-main-collapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Navbar nav -->
        <div class="collapse navbar-collapse" id="navbar-main-collapse">
          <ul class="navbar-nav align-items-lg-center">
            <!-- Home - Overview  -->
            <li class="nav-item ">
              <a class="nav-link" href="../../index.html">Overview</a>
            </li>
            <!-- Pages menu -->
            <li class="nav-item dropdown dropdown-animate" data-toggle="hover">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
              <div class="dropdown-menu dropdown-menu-lg dropdown-menu-arrow p-0">
                <ul class="list-group list-group-flush">
                  <li class="dropdown dropdown-animate dropdown-submenu" data-toggle="hover">
                    <a href="#" class="list-group-item list-group-item-action dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <div class="media d-flex align-items-center">
                        <!-- SVG icon -->
                        <figure style="width: 50px;">
                          <img alt="Image placeholder" src="../../assets/img/icons/essential/detailed/Code_2.svg" class="svg-inject img-fluid" style="height: 50px;">
                        </figure>
                        <!-- Media body -->
                        <div class="media-body ml-3">
                          <h6 class="mb-1">Landing</h6>
                          <p class="mb-0">A great point to start from.</p>
                        </div>
                      </div>
                    </a>
                    <ul class="dropdown-menu">
                      <li>
                        <a class="dropdown-item" href="../../pages/landing/agency.html">
                          Agency
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="../../pages/landing/app.html">
                          App
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="../../pages/landing/blog.html">
                          Blog
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="../../pages/landing/classic.html">
                          Classic
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="../../pages/landing/cloud-hosting.html">
                          Cloud hosting
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="../../pages/landing/digital.html">
                          Digital
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="../../pages/landing/event-music.html">
                          Event music
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="../../pages/landing/features.html">
                          Features
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="../../pages/landing/portfolio.html">
                          Portfolio
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="../../pages/landing/presentation.html">
                          Presentation
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="../../pages/landing/saas.html">
                          Saas
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="../../pages/landing/services.html">
                          Services
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="../../pages/landing/software.html">
                          Software
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="dropdown dropdown-animate dropdown-submenu" data-toggle="hover">
                    <a href="#" class="list-group-item list-group-item-action dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <div class="media d-flex align-items-center">
                        <!-- SVG icon -->
                        <figure style="width: 50px;">
                          <img alt="Image placeholder" src="../../assets/img/icons/essential/detailed/Code.svg" class="svg-inject img-fluid" style="height: 50px;">
                        </figure>
                        <!-- Media body -->
                        <div class="media-body ml-3">
                          <h6 class="mb-1">Secondary</h6>
                          <p class="mb-0">Examples for any scenario.</p>
                        </div>
                      </div>
                    </a>
                    <ul class="dropdown-menu">
                      <li>
                        <a class="dropdown-item" href="../../pages/secondary/about-classic.html">
                          About classic
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="../../pages/secondary/about.html">
                          About
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="../../pages/secondary/blog.html">
                          Blog
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="../../pages/secondary/blog-article.html">
                          Blog article
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="../../pages/secondary/blog-masonry.html">
                          Blog masonry
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="../../pages/secondary/careers.html">
                          Careers
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="../../pages/secondary/careers-single.html">
                          Careers single
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="../../pages/secondary/contact.html">
                          Contact
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="../../pages/secondary/contact-simple.html">
                          Contact simple
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="../../pages/secondary/get-started.html">
                          Get started
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="../../pages/secondary/portfolio.html">
                          Portfolio
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="../../pages/secondary/portfolio-fullscreen.html">
                          Portfolio fullscreen
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="../../pages/secondary/pricing-charts.html">
                          Pricing charts
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="../../pages/secondary/pricing-comparison.html">
                          Pricing comparison
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="../../pages/secondary/pricing-simple.html">
                          Pricing simple
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="../../pages/secondary/services.html">
                          Services
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="../../pages/secondary/team.html">
                          Team
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="dropdown dropdown-animate dropdown-submenu" data-toggle="hover">
                    <a href="#" class="list-group-item list-group-item-action dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <div class="media d-flex align-items-center">
                        <!-- SVG icon -->
                        <figure style="width: 50px;">
                          <img alt="Image placeholder" src="../../assets/img/icons/essential/detailed/Secure_Files.svg" class="svg-inject img-fluid" style="height: 50px;">
                        </figure>
                        <!-- Media body -->
                        <div class="media-body ml-3">
                          <h6 class="mb-1">Authentication</h6>
                          <p class="mb-0">Examples for any scenario.</p>
                        </div>
                      </div>
                    </a>
                    <ul class="dropdown-menu">
                      <li class="text-sm text-muted dropdown-header px-0">Basic</li>
                      <li>
                        <a class="dropdown-item" href="../../pages/authentication/basic-login.html">
                          Login
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="../../pages/authentication/basic-register.html">
                          Register
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="../../pages/authentication/basic-recover.html">
                          Recover
                        </a>
                      </li>
                      <li class="dropdown-divider"></li>
                      <li class="text-sm text-muted dropdown-header px-0">Cover</li>
                      <li>
                        <a class="dropdown-item" href="../../pages/authentication/cover-login.html">
                          Login
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="../../pages/authentication/cover-register.html">
                          Register
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="../../pages/authentication/cover-recover.html">
                          Recover
                        </a>
                      </li>
                      <li class="dropdown-divider"></li>
                      <li class="text-sm text-muted dropdown-header px-0">Simple</li>
                      <li>
                        <a class="dropdown-item" href="../../pages/authentication/simple-login.html">
                          Login
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="../../pages/authentication/simple-register.html">
                          Register
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="../../pages/authentication/simple-recover.html">
                          Recover
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="dropdown dropdown-animate dropdown-submenu" data-toggle="hover">
                    <a href="#" class="list-group-item list-group-item-action dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <div class="media d-flex align-items-center">
                        <!-- SVG icon -->
                        <figure style="width: 50px;">
                          <img alt="Image placeholder" src="../../assets/img/icons/essential/detailed/Task.svg" class="svg-inject img-fluid" style="height: 50px;">
                        </figure>
                        <!-- Media body -->
                        <div class="media-body ml-3">
                          <h6 class="mb-1">Account</h6>
                          <p class="mb-0">Account management made cool.</p>
                        </div>
                      </div>
                    </a>
                    <ul class="dropdown-menu">
                      <li class="text-sm text-muted dropdown-header px-0">Account</li>
                      <li>
                        <a class="dropdown-item" href="../../pages/account/account-billing.html">
                          Billing
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="../../pages/account/account-notifications.html">
                          Notifications
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="../../pages/account/account-profile.html">
                          Profile
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="../../pages/account/account-profile-public.html">
                          Profile public
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="../../pages/account/account-settings.html">
                          Settings
                        </a>
                      </li>
                      <li class="dropdown-divider"></li>
                      <li class="text-sm text-muted dropdown-header px-0">Board</li>
                      <li>
                        <a class="dropdown-item" href="../../pages/account/board-connections.html">
                          Connections
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="../../pages/account/board-overview.html">
                          Overview
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="../../pages/account/board-projects.html">
                          Projects
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="../../pages/account/board-tasks.html">
                          Tasks
                        </a>
                      </li>
                      <li class="dropdown-divider"></li>
                      <li class="text-sm text-muted dropdown-header px-0">Listing</li>
                      <li>
                        <a class="dropdown-item" href="../../pages/account/listing-orders.html">
                          Orders
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="../../pages/account/listing-projects.html">
                          Projects
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="../../pages/account/listing-users.html">
                          Users
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="dropdown dropdown-animate dropdown-submenu" data-toggle="hover">
                    <a href="#" class="list-group-item list-group-item-action dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <div class="media d-flex align-items-center">
                        <!-- SVG icon -->
                        <figure style="width: 50px;">
                          <img alt="Image placeholder" src="../../assets/img/icons/essential/detailed/Cart_Add_2.svg" class="svg-inject img-fluid" style="height: 50px;">
                        </figure>
                        <!-- Media body -->
                        <div class="media-body ml-3">
                          <h6 class="mb-1">Shop</h6>
                          <p class="mb-0">Complete flow for online shops.</p>
                        </div>
                      </div>
                    </a>
                    <ul class="dropdown-menu">
                      <li class="text-sm text-muted dropdown-header px-0">Shop</li>
                      <li>
                        <a class="dropdown-item" href="../../pages/shop/shop-landing.html">
                          Landing
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="../../pages/shop/shop-products.html">
                          Products
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="../../pages/shop/shop-product.html">
                          Product
                        </a>
                      </li>
                      <li class="dropdown-divider"></li>
                      <li class="text-sm text-muted dropdown-header px-0">Checkout</li>
                      <li>
                        <a class="dropdown-item" href="../../pages/shop/checkout-cart.html">
                          Cart
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="../../pages/shop/checkout-cart-empty.html">
                          Cart empty
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="../../pages/shop/checkout-customer.html">
                          Customer
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="../../pages/shop/checkout-payment.html">
                          Payment
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="../../pages/shop/checkout-shipping.html">
                          Shipping
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="dropdown dropdown-animate dropdown-submenu" data-toggle="hover">
                    <a href="#" class="list-group-item list-group-item-action dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <div class="media d-flex align-items-center">
                        <!-- SVG icon -->
                        <figure style="width: 50px;">
                          <img alt="Image placeholder" src="../../assets/img/icons/essential/detailed/Cog_Wheels.svg" class="svg-inject img-fluid" style="height: 50px;">
                        </figure>
                        <!-- Media body -->
                        <div class="media-body ml-3">
                          <h6 class="mb-1">Utility</h6>
                          <p class="mb-0">Error pages and everything else.</p>
                        </div>
                      </div>
                    </a>
                    <ul class="dropdown-menu">
                      <li>
                        <a class="dropdown-item" href="../../pages/utility/coming-soon.html">
                          Coming soon
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="../../pages/utility/error-404.html">
                          Error 404
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="../../pages/utility/faq.html">
                          Faq
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="../../pages/utility/support.html">
                          Support
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="../../pages/utility/topic.html">
                          Topic
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="../../pages/utility/topic-simple.html">
                          Topic simple
                        </a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </div>
            </li>
            <!-- Sections menu -->
            <li class="nav-item dropdown dropdown-animate" data-toggle="hover">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sections</a>
              <div class="dropdown-menu dropdown-menu-xl dropdown-menu-arrow p-0">
                <ul class="list-group list-group-flush">
                  <li>
                    <a href="../../sections.html" class="list-group-item list-group-item-action" role="button">
                      <div class="media d-flex align-items-center">
                        <figure style="width: 50px;">
                          <img alt="Image placeholder" src="../../assets/img/icons/essential/detailed/Apps.svg" class="svg-inject img-fluid" style="height: 50px;">
                        </figure>
                        <div class="media-body ml-3">
                          <h6 class="mb-1">Explore all sections</h6>
                          <p class="mb-0">Awesome section examples for any scenario.</p>
                        </div>
                      </div>
                    </a>
                  </li>
                </ul>
                <div class="dropdown-menu-links rounded-bottom delimiter-top p-4">
                  <div class="row">
                    <div class="col-sm-4">
                      <a href="../../sections.html#headers" class="dropdown-item">Headers</a>
                      <a href="../../sections.html#footers" class="dropdown-item">Footers</a>
                      <a href="../../sections.html#blog" class="dropdown-item">Blog</a>
                      <a href="../../sections.html#call-to-action" class="dropdown-item">Call to action</a>
                      <a href="../../sections.html#clients" class="dropdown-item">Clients</a>
                      <a href="../../sections.html#collapse" class="dropdown-item">Collapse</a>
                    </div>
                    <div class="col-sm-4">
                      <a href="../../sections.html#covers" class="dropdown-item">Covers</a>
                      <a href="../../sections.html#features" class="dropdown-item">Features</a>
                      <a href="../../sections.html#milestone" class="dropdown-item">Milestone</a>
                      <a href="../../sections.html#pricing" class="dropdown-item">Pricing</a>
                      <a href="../../sections.html#projects" class="dropdown-item">Projects</a>
                      <a href="../../sections.html#subscribe" class="dropdown-item">Subscribe</a>
                    </div>
                    <div class="col-sm-4">
                      <a href="../../sections.html#swiper" class="dropdown-item">Swiper</a>
                      <a href="../../sections.html#tables" class="dropdown-item">Tables</a>
                      <a href="../../sections.html#team" class="dropdown-item">Team</a>
                      <a href="../../sections.html#testimonials" class="dropdown-item">Testimonials</a>
                      <a href="../../sections.html#video" class="dropdown-item">Video</a>
                    </div>
                  </div>
                </div>
                <div class="delimiter-top py-3 px-4">
                  <span class="badge badge-soft-success">Yaass!</span>
                  <p class="mt-2 mb-0">
                    Explore, switch, customize any component, section or page and make your website rich its full potential.
                  </p>
                </div>
              </div>
            </li>
          </ul>
          <ul class="navbar-nav align-items-lg-center ml-lg-auto">
            <li class="nav-item dropdown dropdown-animate" data-toggle="hover">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Docs</a>
              <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg dropdown-menu-arrow p-0">
                <ul class="list-group list-group-flush">
                  <li>
                    <a href="../../docs/index.html" class="list-group-item list-group-item-action" role="button">
                      <div class="media d-flex align-items-center">
                        <!-- SVG icon -->
                        <figure style="width: 50px;">
                          <img alt="Image placeholder" src="../../assets/img/icons/essential/detailed/DOC_File.svg" class="svg-inject img-fluid" style="height: 50px;">
                        </figure>
                        <!-- Media body -->
                        <div class="media-body ml-3">
                          <h6 class="mb-1">Documentation</h6>
                          <p class="mb-0">Awesome section examples for any scenario.</p>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="../../docs/components/index.html" class="list-group-item list-group-item-action" role="button">
                      <div class="media d-flex align-items-center">
                        <!-- SVG icon -->
                        <figure style="width: 50px;">
                          <img alt="Image placeholder" src="../../assets/img/icons/essential/detailed/Mobile_UI.svg" class="svg-inject img-fluid" style="height: 50px;">
                        </figure>
                        <!-- Media body -->
                        <div class="media-body ml-3">
                          <h6 class="mb-1">Components</h6>
                          <p class="mb-0">Awesome section examples for any scenario.</p>
                        </div>
                      </div>
                    </a>
                  </li>
                </ul>
                <div class="dropdown-menu-links rounded-bottom delimiter-top p-4">
                  <div class="row">
                    <div class="col-sm-6">
                      <a href="../../docs/getting-started/installation.html" class="dropdown-item">Installation</a>
                      <a href="../../docs/getting-started/file-structure.html" class="dropdown-item">File structure</a>
                      <a href="../../docs/getting-started/build-tools.html" class="dropdown-item">Build tools</a>
                      <a href="../../docs/getting-started/customization.html" class="dropdown-item">Customization</a>
                    </div>
                    <div class="col-sm-6">
                      <a href="../../docs/getting-started/plugins.html" class="dropdown-item">Using plugins</a>
                      <a href="../../docs/components/index.html" class="dropdown-item">Components</a>
                      <a href="../../docs/plugins/animate.html" class="dropdown-item">Plugins</a>
                      <a href="../../docs/support.html" class="dropdown-item">Support</a>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li class="nav-item d-lg-none d-xl-block">
              <a class="nav-link" href="../../docs/changelog.html" target="_blank">What's new</a>
            </li>
            <li class="nav-item mr-0">
              <a href="https://themes.getbootstrap.com/product/purpose-website-ui-kit/" target="_blank" class="nav-link d-lg-none">Purchase now</a>
              <a href="https://themes.getbootstrap.com/product/purpose-website-ui-kit/" target="_blank" class="btn btn-sm btn-white btn-icon rounded-pill d-none d-lg-inline-flex" data-toggle="tooltip" data-placement="left" title="Go to Bootstrap Themes">
                <span class="btn-inner--icon"><i class="far fa-shopping-cart"></i></span>
                <span class="btn-inner--text">Purchase now</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <!-- Omnisearch -->
  <div id="omnisearch" class="omnisearch">
    <div class="container">
      <!-- Search form -->
      <form class="omnisearch-form">
        <div class="form-group">
          <div class="input-group input-group-merge input-group-flush">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="far fa-search"></i></span>
            </div>
            <input type="text" class="form-control" placeholder="Type and hit enter ...">
          </div>
        </div>
      </form>
      <div class="omnisearch-suggestions">
        <h6 class="heading">Search Suggestions</h6>
        <div class="row">
          <div class="col-sm-6">
            <ul class="list-unstyled mb-0">
              <li>
                <a class="list-link" href="#">
                  <i class="far fa-search"></i>
                  <span>macbook pro</span> in Laptops
                </a>
              </li>
              <li>
                <a class="list-link" href="#">
                  <i class="far fa-search"></i>
                  <span>iphone 8</span> in Smartphones
                </a>
              </li>
              <li>
                <a class="list-link" href="#">
                  <i class="far fa-search"></i>
                  <span>macbook pro</span> in Laptops
                </a>
              </li>
              <li>
                <a class="list-link" href="#">
                  <i class="far fa-search"></i>
                  <span>beats pro solo 3</span> in Headphones
                </a>
              </li>
              <li>
                <a class="list-link" href="#">
                  <i class="far fa-search"></i>
                  <span>smasung galaxy 10</span> in Phones
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="main-content">
    <!-- Header (account) -->
    <section class="header-account-page bg-primary d-flex align-items-end" data-offset-top="#header-main">
      <!-- Header container -->
      <div class="container pt-4 pt-lg-0">
        <div class="row">
          <div class=" col-lg-12">
            <!-- Salute + Small stats -->
            <div class="row align-items-center mb-4">
              <div class="col-md-5 mb-4 mb-md-0">
                <span class="h2 mb-0 text-white d-block">Morning, Heather</span>
                <span class="text-white">Have a nice day!</span>
              </div>
              <div class="col-auto flex-fill d-none d-xl-block">
                <ul class="list-inline row justify-content-lg-end mb-0">
                  <li class="list-inline-item col-sm-4 col-md-auto px-3 my-2 mx-0">
                    <span class="badge badge-dot text-white">
                      <i class="bg-success"></i>Sales
                    </span>
                    <a class="d-sm-block h5 text-white font-weight-bold pl-2" href="#">
                      20.5%
                      <small class="far fa-angle-up text-success"></small>
                    </a>
                  </li>
                  <li class="list-inline-item col-sm-4 col-md-auto px-3 my-2 mx-0">
                    <span class="badge badge-dot text-white">
                      <i class="bg-warning"></i>Tasks
                    </span>
                    <a class="d-sm-block h5 text-white font-weight-bold pl-2" href="#">
                      5.7%
                      <small class="far fa-angle-up text-warning"></small>
                    </a>
                  </li>
                  <li class="list-inline-item col-sm-4 col-md-auto px-3 my-2 mx-0">
                    <span class="badge badge-dot text-white">
                      <i class="bg-danger"></i>Sales
                    </span>
                    <a class="d-sm-block h5 text-white font-weight-bold pl-2" href="#">
                      -3.24%
                      <small class="far fa-angle-down text-danger"></small>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <!-- Account navigation -->
            <div class="d-flex">
              <a href="account-profile-public.html" class="btn btn-icon btn-group-nav shadow btn-neutral">
                <span class="btn-inner--icon"><i class="far fa-user"></i></span>
                <span class="btn-inner--text d-none d-md-inline-block">My Profile</span>
              </a>
              <div class="btn-group btn-group-nav shadow ml-auto" role="group" aria-label="Basic example">
                <div class="btn-group" role="group">
                  <button id="btn-group-settings" type="button" class="btn btn-neutral btn-icon" data-toggle="dropdown" data-offset="0,8" aria-haspopup="true" aria-expanded="false">
                    <span class="btn-inner--icon"><i class="far fa-sliders-h"></i></span>
                    <span class="btn-inner--text d-none d-sm-inline-block">Account</span>
                  </button>
                  <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow" aria-labelledby="btn-group-settings">
                    <span class="dropdown-header">Profile</span>
                    <a class="dropdown-item" href="account-profile-public.html">Public profile</a>
                    <span class="dropdown-header">Account</span>
                    <a class="dropdown-item" href="account-profile.html">Profile</a>
                    <a class="dropdown-item" href="account-settings.html">Settings</a>
                    <a class="dropdown-item" href="account-billing.html">Billing</a>
                    <a class="dropdown-item" href="account-notifications.html">Notifications</a>
                  </div>
                </div>
                <div class="btn-group" role="group">
                  <button id="btn-group-boards" type="button" class="btn btn-neutral btn-icon" data-toggle="dropdown" data-offset="0,8" aria-haspopup="true" aria-expanded="false">
                    <span class="btn-inner--icon"><i class="far fa-chart-line"></i></span>
                    <span class="btn-inner--text d-none d-sm-inline-block">Board</span>
                  </button>
                  <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow" aria-labelledby="btn-group-boards">
                    <a class="dropdown-item" href="board-overview.html">Overview</a>
                    <a class="dropdown-item" href="board-projects.html">Projects</a>
                    <a class="dropdown-item" href="board-tasks.html">Tasks</a>
                    <a class="dropdown-item" href="board-connections.html">Connections</a>
                  </div>
                </div>
                <div class="btn-group" role="group">
                  <button id="btn-group-listing" type="button" class="btn btn-neutral btn-icon rounded-right" data-toggle="dropdown" data-offset="0,8" aria-haspopup="true" aria-expanded="false">
                    <span class="btn-inner--icon"><i class="far fa-list-ul"></i></span>
                    <span class="btn-inner--text d-none d-sm-inline-block">Listing</span>
                  </button>
                  <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow" aria-labelledby="btn-group-settings">
                    <span class="dropdown-header">Tables</span>
                    <a class="dropdown-item" href="listing-orders.html">Orders</a>
                    <a class="dropdown-item" href="listing-projects.html">Projects</a>
                    <span class="dropdown-header">Flex</span>
                    <a class="dropdown-item" href="listing-users.html">Users</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="slice bg-section-secondary">
      <div class="container">
        <!-- Stats -->
        <div class="row">
          <div class="col-lg-4">
            <div class="card card-stats">
              <div class="card-body">
                <h6 class="card-title text-muted mb-2">Total sales</h6>
                <div class="row align-items-center">
                  <div class="col">
                    <div class="row align-items-center no-gutters">
                      <div class="col-auto">
                        <span class="h5  mr-2">75%</span>
                      </div>
                      <div class="col">
                        <div class="progress progress-xs">
                          <div class="progress-bar bg-info" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-auto">
                    <div class="icon text-dark icon-sm">
                      <i class="far fa-credit-card"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card card-stats">
              <div class="card-body">
                <h6 class="card-title text-muted mb-2">New products</h6>
                <div class="row align-items-center">
                  <div class="col">
                    <div class="row align-items-center no-gutters">
                      <div class="col-auto">
                        <span class="h5  mr-2">40%</span>
                      </div>
                      <div class="col">
                        <div class="progress progress-xs">
                          <div class="progress-bar bg-warning" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-auto">
                    <div class="icon text-dark icon-sm">
                      <i class="far fa-tags"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card card-stats">
              <div class="card-body">
                <h6 class="card-title text-muted mb-2">Total orders</h6>
                <div class="row align-items-center">
                  <div class="col">
                    <div class="row align-items-center no-gutters">
                      <div class="col-auto">
                        <span class="h5  mr-2">90%</span>
                      </div>
                      <div class="col">
                        <div class="progress progress-xs">
                          <div class="progress-bar bg-primary" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-auto">
                    <div class="icon text-dark icon-sm">
                      <i class="far fa-shopping-basket"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Tasks -->
        <div class="row row-grid">
          <div class="col-lg-4">
            <div data-toggle="sticky" data-sticky-offset="30">
              <div class="card">
                <div class="card-header">
                  <div class="d-flex justify-content-between align-items-center">
                    <div>
                      <h6 class="mb-0">Project progress</h6>
                    </div>
                    <div class="text-right">
                      <div class="actions">
                        <a href="#" class="action-item"><i class="far fa-sync"></i></a>
                        <div class="dropdown action-item" data-toggle="dropdown">
                          <a href="#" class="action-item"><i class="far fa-ellipsis-h"></i></a>
                          <div class="dropdown-menu dropdown-menu-right">
                            <a href="#" class="dropdown-item">Refresh</a>
                            <a href="#" class="dropdown-item">Manage Widgets</a>
                            <a href="#" class="dropdown-item">Settings</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="list-group">
                  <a href="#" class="list-group-item list-group-item-action">
                    <div class="d-flex align-items-center justify-content-between">
                      <div>
                        <img alt="Image placeholder" src="../../assets/img/theme/light/brand-avatar-1.png" class="avatar  rounded-circle">
                      </div>
                      <div class="flex-fill pl-3 text-limit">
                        <h6 class="progress-text mb-1 text-sm d-block text-limit">Purpose Design System</h6>
                        <div class="progress progress-xs mb-0">
                          <div class="progress-bar bg-warning" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="d-flex justify-content-between text-xs text-muted text-right mt-1">
                          <div>
                            <span class="font-weight-bold text-warning">Pending</span>
                          </div>
                          <div>
                            20 Aug 2018
                          </div>
                        </div>
                      </div>
                    </div>
                  </a>
                  <a href="#" class="list-group-item list-group-item-action">
                    <div class="d-flex align-items-center justify-content-between">
                      <div>
                        <img alt="Image placeholder" src="../../assets/img/theme/light/brand-avatar-2.png" class="avatar  rounded-circle">
                      </div>
                      <div class="flex-fill pl-3 text-limit">
                        <h6 class="progress-text mb-1 text-sm d-block text-limit">Website redesign</h6>
                        <div class="progress progress-xs mb-0">
                          <div class="progress-bar bg-success" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="d-flex justify-content-between text-xs text-muted text-right mt-1">
                          <div>
                            <span class="font-weight-bold text-success">Completed</span>
                          </div>
                          <div>
                            20 Aug 2018
                          </div>
                        </div>
                      </div>
                    </div>
                  </a>
                  <a href="#" class="list-group-item list-group-item-action">
                    <div class="d-flex align-items-center justify-content-between">
                      <div>
                        <img alt="Image placeholder" src="../../assets/img/theme/light/brand-avatar-3.png" class="avatar  rounded-circle">
                      </div>
                      <div class="flex-fill pl-3 text-limit">
                        <h6 class="progress-text mb-1 text-sm d-block text-limit">Webpixels website launch</h6>
                        <div class="progress progress-xs mb-0">
                          <div class="progress-bar bg-danger" role="progressbar" style="width: 72%;" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="d-flex justify-content-between text-xs text-muted text-right mt-1">
                          <div>
                            <span class="font-weight-bold text-danger">Delayed</span>
                          </div>
                          <div>
                            20 Aug 2018
                          </div>
                        </div>
                      </div>
                    </div>
                  </a>
                  <a href="#" class="list-group-item list-group-item-action">
                    <div class="d-flex align-items-center justify-content-between">
                      <div>
                        <img alt="Image placeholder" src="../../assets/img/theme/light/brand-avatar-4.png" class="avatar  rounded-circle">
                      </div>
                      <div class="flex-fill pl-3 text-limit">
                        <h6 class="progress-text mb-1 text-sm d-block text-limit">Purpose Website UI Kit</h6>
                        <div class="progress progress-xs mb-0">
                          <div class="progress-bar bg-info" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="d-flex justify-content-between text-xs text-muted text-right mt-1">
                          <div>
                            <span class="font-weight-bold text-info">On schedule</span>
                          </div>
                          <div>
                            20 Aug 2018
                          </div>
                        </div>
                      </div>
                    </div>
                  </a>
                  <a href="#" class="list-group-item list-group-item-action">
                    <div class="d-flex align-items-center justify-content-between">
                      <div>
                        <img alt="Image placeholder" src="../../assets/img/theme/light/brand-avatar-5.png" class="avatar  rounded-circle">
                      </div>
                      <div class="flex-fill pl-3 text-limit">
                        <h6 class="progress-text mb-1 text-sm d-block text-limit">Prototype Purpose Dashboard</h6>
                        <div class="progress progress-xs mb-0">
                          <div class="progress-bar bg-success" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="d-flex justify-content-between text-xs text-muted text-right mt-1">
                          <div>
                            <span class="font-weight-bold text-success">Completed</span>
                          </div>
                          <div>
                            20 Aug 2018
                          </div>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-8">
            <!-- Change avatar -->
            <div class="card bg-gradient-warning hover-shadow-lg">
              <div class="card-body py-3">
                <div class="row row-grid align-items-center">
                  <div class="col-lg-8">
                    <div class="media align-items-center">
                      <a href="#" class="avatar avatar-lg rounded-circle mr-3">
                        <img alt="Image placeholder" src="../../assets/img/theme/light/team-1-800x800.jpg">
                      </a>
                      <div class="media-body">
                        <h5 class="text-white mb-0">Heather Wright</h5>
                        <div>
                          <form>
                            <input type="file" name="file-1[]" id="file-1" class="custom-input-file custom-input-file-link" data-multiple-caption="{count} files selected" multiple />
                            <label for="file-1">
                              <span class="text-white">Change avatar</span>
                            </label>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-auto flex-fill mt-4 mt-sm-0 text-sm-right d-none d-lg-block">
                    <a href="#" class="btn btn-sm btn-white rounded-pill btn-icon shadow">
                      <span class="btn-inner--icon"><i class="far fa-fire"></i></span>
                      <span class="btn-inner--text">Upgrade to Pro</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <!-- Section title -->
            <div class="actions-toolbar py-2 mb-4">
              <h5 class="mb-1">Attach a new card</h5>
              <p class="text-sm text-muted mb-0">Add you credit card for faster checkout process.</p>
            </div>
            <!-- Tasks table -->
            <div class="table-responsive">
              <table class="table table-cards align-items-center">
                <thead>
                  <tr>
                    <th scope="col" class="sort" data-sort="name">Task</th>
                    <th scope="col" class="sort" data-sort="budget">Status</th>
                    <th scope="col" class="sort" data-sort="status">Progress</th>
                    <th scope="col">Due date</th>
                    <th scope="col" class="sort" data-sort="completion">Team</th>
                  </tr>
                </thead>
                <tbody class="list">
                  <tr>
                    <th scope="row">
                      <span class="font-weight-bold text-sm">Call with Dave</span>
                    </th>
                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-success"></i> Priority
                      </span>
                    </td>
                    <td>
                      <span class="text-sm">70</span>
                    </td>
                    <td>
                      <span class="text-sm">20-03-2019</span>
                    </td>
                    <td>
                      <div class="avatar-group">
                        <a href="#" class="avatar rounded-circle avatar-sm">
                          <img alt="Image placeholder" src="../../assets/img/theme/light/team-1-800x800.jpg" class="">
                        </a>
                        <a href="#" class="avatar rounded-circle avatar-sm">
                          <img alt="Image placeholder" src="../../assets/img/theme/light/team-2-800x800.jpg" class="">
                        </a>
                        <a href="#" class="avatar rounded-circle avatar-sm">
                          <img alt="Image placeholder" src="../../assets/img/theme/light/team-3-800x800.jpg" class="">
                        </a>
                      </div>
                    </td>
                  </tr>
                  <tr class="table-divider"></tr>
                  <tr>
                    <th scope="row">
                      <span class="font-weight-bold text-sm">Lunch meeting</span>
                    </th>
                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-warning"></i> Priority
                      </span>
                    </td>
                    <td>
                      <span class="text-sm">70</span>
                    </td>
                    <td>
                      <span class="text-sm">20-03-2019</span>
                    </td>
                    <td>
                      <div class="avatar-group">
                        <a href="#" class="avatar rounded-circle avatar-sm">
                          <img alt="Image placeholder" src="../../assets/img/theme/light/team-1-800x800.jpg" class="">
                        </a>
                        <a href="#" class="avatar rounded-circle avatar-sm">
                          <img alt="Image placeholder" src="../../assets/img/theme/light/team-2-800x800.jpg" class="">
                        </a>
                        <a href="#" class="avatar rounded-circle avatar-sm">
                          <img alt="Image placeholder" src="../../assets/img/theme/light/team-3-800x800.jpg" class="">
                        </a>
                      </div>
                    </td>
                  </tr>
                  <tr class="table-divider"></tr>
                  <tr>
                    <th scope="row">
                      <span class="font-weight-bold text-sm">Webpixels website redesign</span>
                    </th>
                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-info"></i> Priority
                      </span>
                    </td>
                    <td>
                      <span class="text-sm">70</span>
                    </td>
                    <td>
                      <span class="text-sm">20-03-2019</span>
                    </td>
                    <td>
                      <div class="avatar-group">
                        <a href="#" class="avatar rounded-circle avatar-sm">
                          <img alt="Image placeholder" src="../../assets/img/theme/light/team-1-800x800.jpg" class="">
                        </a>
                        <a href="#" class="avatar rounded-circle avatar-sm">
                          <img alt="Image placeholder" src="../../assets/img/theme/light/team-2-800x800.jpg" class="">
                        </a>
                        <a href="#" class="avatar rounded-circle avatar-sm">
                          <img alt="Image placeholder" src="../../assets/img/theme/light/team-3-800x800.jpg" class="">
                        </a>
                      </div>
                    </td>
                  </tr>
                  <tr class="table-divider"></tr>
                  <tr>
                    <th scope="row">
                      <span class="font-weight-bold text-sm">Dashboard cards</span>
                    </th>
                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-danger"></i> Priority
                      </span>
                    </td>
                    <td>
                      <span class="text-sm">70</span>
                    </td>
                    <td>
                      <span class="text-sm">20-03-2019</span>
                    </td>
                    <td>
                      <div class="avatar-group">
                        <a href="#" class="avatar rounded-circle avatar-sm">
                          <img alt="Image placeholder" src="../../assets/img/theme/light/team-1-800x800.jpg" class="">
                        </a>
                        <a href="#" class="avatar rounded-circle avatar-sm">
                          <img alt="Image placeholder" src="../../assets/img/theme/light/team-2-800x800.jpg" class="">
                        </a>
                        <a href="#" class="avatar rounded-circle avatar-sm">
                          <img alt="Image placeholder" src="../../assets/img/theme/light/team-3-800x800.jpg" class="">
                        </a>
                      </div>
                    </td>
                  </tr>
                  <tr class="table-divider"></tr>
                  <tr>
                    <th scope="row">
                      <span class="font-weight-bold text-sm">Lunch with Jessica</span>
                    </th>
                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-success"></i> Priority
                      </span>
                    </td>
                    <td>
                      <span class="text-sm">70</span>
                    </td>
                    <td>
                      <span class="text-sm">20-03-2019</span>
                    </td>
                    <td>
                      <div class="avatar-group">
                        <a href="#" class="avatar rounded-circle avatar-sm">
                          <img alt="Image placeholder" src="../../assets/img/theme/light/team-1-800x800.jpg" class="">
                        </a>
                        <a href="#" class="avatar rounded-circle avatar-sm">
                          <img alt="Image placeholder" src="../../assets/img/theme/light/team-2-800x800.jpg" class="">
                        </a>
                        <a href="#" class="avatar rounded-circle avatar-sm">
                          <img alt="Image placeholder" src="../../assets/img/theme/light/team-3-800x800.jpg" class="">
                        </a>
                      </div>
                    </td>
                  </tr>
                  <tr class="table-divider"></tr>
                  <tr>
                    <th scope="row">
                      <span class="font-weight-bold text-sm">Call with Michael</span>
                    </th>
                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-danger"></i> Priority
                      </span>
                    </td>
                    <td>
                      <span class="text-sm">70</span>
                    </td>
                    <td>
                      <span class="text-sm">20-03-2019</span>
                    </td>
                    <td>
                      <div class="avatar-group">
                        <a href="#" class="avatar rounded-circle avatar-sm">
                          <img alt="Image placeholder" src="../../assets/img/theme/light/team-1-800x800.jpg" class="">
                        </a>
                        <a href="#" class="avatar rounded-circle avatar-sm">
                          <img alt="Image placeholder" src="../../assets/img/theme/light/team-2-800x800.jpg" class="">
                        </a>
                        <a href="#" class="avatar rounded-circle avatar-sm">
                          <img alt="Image placeholder" src="../../assets/img/theme/light/team-3-800x800.jpg" class="">
                        </a>
                      </div>
                    </td>
                  </tr>
                  <tr class="table-divider"></tr>
                  <tr>
                    <th scope="row">
                      <span class="font-weight-bold text-sm">Confirm project deadline</span>
                    </th>
                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-warning"></i> Priority
                      </span>
                    </td>
                    <td>
                      <span class="text-sm">70</span>
                    </td>
                    <td>
                      <span class="text-sm">20-03-2019</span>
                    </td>
                    <td>
                      <div class="avatar-group">
                        <a href="#" class="avatar rounded-circle avatar-sm">
                          <img alt="Image placeholder" src="../../assets/img/theme/light/team-1-800x800.jpg" class="">
                        </a>
                        <a href="#" class="avatar rounded-circle avatar-sm">
                          <img alt="Image placeholder" src="../../assets/img/theme/light/team-2-800x800.jpg" class="">
                        </a>
                        <a href="#" class="avatar rounded-circle avatar-sm">
                          <img alt="Image placeholder" src="../../assets/img/theme/light/team-3-800x800.jpg" class="">
                        </a>
                      </div>
                    </td>
                  </tr>
                  <tr class="table-divider"></tr>
                  <tr>
                    <th scope="row">
                      <span class="font-weight-bold text-sm">Meeting with John</span>
                    </th>
                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-info"></i> Priority
                      </span>
                    </td>
                    <td>
                      <span class="text-sm">70</span>
                    </td>
                    <td>
                      <span class="text-sm">20-03-2019</span>
                    </td>
                    <td>
                      <div class="avatar-group">
                        <a href="#" class="avatar rounded-circle avatar-sm">
                          <img alt="Image placeholder" src="../../assets/img/theme/light/team-1-800x800.jpg" class="">
                        </a>
                        <a href="#" class="avatar rounded-circle avatar-sm">
                          <img alt="Image placeholder" src="../../assets/img/theme/light/team-2-800x800.jpg" class="">
                        </a>
                        <a href="#" class="avatar rounded-circle avatar-sm">
                          <img alt="Image placeholder" src="../../assets/img/theme/light/team-3-800x800.jpg" class="">
                        </a>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <footer class="footer p-0 footer-light bg-section-secondary" id="footer-main">
    <div class="container">
      <div class="py-4">
        <div class="row align-items-md-center">
          <div class="col-md-4 mb-4 mb-md-0">
            <div class="d-flex align-items-center">
              <p class="text-sm mb-0">&copy; Purpose. 2019 <a href="https://webpixels.io" target="_blank">Webpixels</a>. All rights reserved.</p>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 mb-4 mb-sm-0">
            <ul class="nav justify-content-center">
              <li class="nav-item">
                <a class="nav-link" href="../../pages/utility/support.html">Support</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../../pages/utility/terms.html">Terms</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../../pages/utility/privacy.html">Privacy</a>
              </li>
            </ul>
          </div>
          <div class="col-sm-6 col-md-4">
            <ul class="nav justify-content-center justify-content-md-end mt-3 mt-md-0">
              <li class="nav-item">
                <a class="nav-link" href="https://dribbble.com/webpixels" target="_blank">
                  <i class="fab fa-dribbble"></i>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://www.instagram.com/webpixelsofficial" target="_blank">
                  <i class="fab fa-instagram"></i>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://github.com/webpixels" target="_blank">
                  <i class="fab fa-github"></i>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://www.facebook.com/webpixels" target="_blank">
                  <i class="fab fa-facebook"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <div class="customizer">
    <a href="#modal-customizer" class="btn btn-warning btn-lg btn-icon-only rounded-circle text-white hover-scale-110 shadow-lg mr-3" data-toggle="modal">
      <span class="btn-inner--icon"><i class="far fa-palette"></i></span>
    </a>
    <a href="../../docs/support.html" class="btn btn-lg btn-white btn-icon-only rounded-circle hover-scale-110 shadow-lg mr-3 d-none d-lg-inline-block">
      <span class="btn-inner--icon"><i class="far fa-question"></i></span>
    </a>
    <a href="https://themes.getbootstrap.com/product/purpose-website-ui-kit/" target="_blank" class="btn btn-lg btn-white btn-icon-only rounded-circle hover-scale-110 shadow-lg d-none d-lg-inline-block">
      <span class="btn-inner--icon"><i class="far fa-shopping-basket"></i></span>
    </a>
  </div>
  <!-- Customizer modal -->
  <div class="modal fade fixed-right" id="modal-customizer" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-vertical" role="document">
      <form class="modal-content" id="form-customizer">
        <div class="modal-body">
          <!-- Close -->
          <button type="button" class="close" data-dismiss="modal" aria-label="Close" data-toggle="tooltip" data-placement="left" title="Close Customizer">
            <span aria-hidden="true">&times;</span>
          </button>
          <div class="text-center mx-auto mt-4 mb-5" style="width: 80px;">
            <img alt="Image placeholder" src="../../assets/img/icons/essential/detailed/Click.svg" class="svg-inject img-fluid">
          </div>
          <h5 class="text-center mb-2">Choose (your) Purpose</h5>
          <p class="text-center mb-4">
            Customize your preview experience by selecting skin colors and modes.
          </p>
          <hr class="mb-4">
          <!-- Skin color -->
          <h6 class="mb-1">Skin color</h6>
          <p class="small text-muted mb-3">
            Set a new theme color palette.
          </p>
          <div class="btn-group-toggle row mx-0 mb-5" data-toggle="buttons">
            <label class="btn btn-sm btn-neutral active col mb-2">
              <input type="radio" name="skin" value="default" checked>
              Default
            </label>
            <label class="btn btn-sm btn-neutral col-6 mb-2 mr-0">
              <input type="radio" name="skin" value="blue">
              Blue
            </label>
            <!-- <label class="btn btn-sm btn-neutral col mb-2">
                        <input type="radio" name="skin" value="blue">
                        Blue
                    </label>
                    <label class="btn btn-sm btn-neutral col-6 mb-2 mr-0">
                        <input type="radio" name="skin" value="red">
                        Red
                    </label> -->
          </div>
          <!-- Skin mode -->
          <h6 class="mb-1">Skin mode</h6>
          <p class="small text-muted mb-3">
            Set the theme's mode: light or dark.
          </p>
          <div class="btn-group-toggle row mx-0 mb-4" data-toggle="buttons">
            <label class="btn btn-sm btn-neutral active flex-fill mb-2 mr-2">
              <input type="radio" name="mode" value="light" checked>
              <i class="far fa-sun mr-2"></i> Light
            </label>
            <label class="btn btn-sm btn-neutral flex-fill mb-2 mr-2">
              <input type="radio" name="mode" value="dark">
              <i class="far fa-moon mr-2"></i> Dark
            </label>
          </div>
        </div>
        <div class="modal-footer border-0">
          <button type="submit" class="btn btn-block btn-primary mt-auto">
            Preview
          </button>
        </div>
      </form>
    </div>
  </div>

  <script src="https://developermen.com/assets/libs/purpose/js/purpose.core.js"></script>
  <script src="https://developermen.com/assets/libs/highlightjs/highlight.pack.min.js"></script>
  <script src="https://developermen.com/assets/libs/jquery-mask/jquery-mask.min.js"></script>
  <script src="https://developermen.com/assets/js/clipboard.min.js"></script>
  <script src="https://developermen.com/assets/libs/purpose/js/purpose.js"></script>
  <script src="https://developermen.com/assets/libs/purpose/js/demo.js"></script>
</body>

</html>
