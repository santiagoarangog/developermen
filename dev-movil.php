
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Libs CSS -->
    <link rel="stylesheet" href="./assets/fonts/Feather/feather.css">
    <link rel="stylesheet" href="./assets/libs/flickity/dist/flickity.min.css">
    <link rel="stylesheet" href="./assets/libs/flickity-fade/flickity-fade.css">
    <link rel="stylesheet" href="./assets/libs/aos/dist/aos.css">
    <link rel="stylesheet" href="./assets/libs/jarallax/dist/jarallax.css">
    <link rel="stylesheet" href="./assets/libs/highlightjs/styles/vs2015.css">
    <link rel="stylesheet" href="./assets/libs/@fancyapps/fancybox/dist/jquery.fancybox.min.css">

    <!-- Map -->
    <link href='https://api.mapbox.com/mapbox-gl-js/v0.53.0/mapbox-gl.css' rel='stylesheet' />

    <!-- Theme CSS -->
    <link rel="stylesheet" href="./assets/css/theme.min.css">

    <title>Landkit</title>
  </head>
  <body>

    <!-- MODALS
    ================================================== -->
    <!-- Example -->
    <div class="modal fade" id="modalExample" tabindex="-1" role="dialog" aria-labelledby="modalExampleTitle" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-body">

            <!-- Close -->
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>

            <!-- Image -->
            <div class="text-center">
              <img src="../assets/img/illustrations/illustration-1.png" alt="..." class="img-fluid mb-3" style="width: 200px;">
            </div>

            <!-- Heading -->
            <h2 class="font-weight-bold text-center mb-1" id="modalExampleTitle">
              Schedule a demo with us
            </h2>

            <!-- Text -->
            <p class="font-size-lg text-center text-muted mb-6 mb-md-8">
              We can help you solve company communication.
            </p>

            <!-- Form -->
            <form>
              <div class="row">
                <div class="col-12 col-md-6">

                  <!-- First name -->
                  <div class="form-label-group">
                    <input type="text" class="form-control form-control-flush" id="registrationFirstNameModal" placeholder="First name">
                    <label for="registrationFirstNameModal">First name</label>
                  </div>

                </div>
                <div class="col-12 col-md-6">

                  <!-- Last name -->
                  <div class="form-label-group">
                    <input type="text" class="form-control form-control-flush" id="registrationLastNameModal" placeholder="Last name">
                    <label for="registrationLastNameModal">Last name</label>
                  </div>

                </div>
              </div>
              <div class="row">
                <div class="col-12 col-md-6">

                  <!-- Email -->
                  <div class="form-label-group">
                    <input type="email" class="form-control form-control-flush" id="registrationEmailModal" placeholder="Email">
                    <label for="registrationEmailModal">Email</label>
                  </div>

                </div>
                <div class="col-12 col-md-6">

                  <!-- Password -->
                  <div class="form-label-group">
                    <input type="password" class="form-control form-control-flush" id="registrationPasswordModal" placeholder="Password">
                    <label for="registrationPasswordModal">Password</label>
                  </div>

                </div>
              </div>
              <div class="row">
                <div class="col-12">

                  <!-- Submit -->
                  <button class="btn btn-block btn-primary mt-3 lift">
                    Request a demo
                  </button>

                </div>
              </div>
            </form>

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
              <div class="col-12 col-md-6 bg-cover card-img-left" style="background-image: url(./assets/img/photos/photo-8.jpg);">

                <!-- Image (placeholder) -->
                <img src="./assets/img/photos/photo-8.jpg" alt="..." class="img-fluid d-md-none invisible">

                <!-- Shape -->
                <div class="shape shape-right shape-fluid-y svg-shim text-white d-none d-md-block">
                  <svg viewBox="0 0 112 690" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M116 0H51V172C76 384 0 517 0 517V690H116V0Z" fill="currentColor"/>
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
            <img src="./assets/img/photos/photo-7.jpg" alt="..." class="card-img-top">

            <!-- Shape -->
            <div class="position-relative">
              <div class="shape shape-bottom shape-fluid-x svg-shim text-white">
                <svg viewBox="0 0 2880 480" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M2160 0C1440 240 720 240 720 240H0V480H2880V0H2160Z" fill="currentColor"/>
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
                    <path d="M116 0H51V172C76 384 0 517 0 517V690H116V0Z" fill="currentColor"/>
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
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M2160 0C1440 240 720 240 720 240H0V480H2880V0H2160Z" fill="currentColor"/>
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

    <!-- NAVBAR
    ================================================== -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom">
      <div class="container">

        <!-- Brand -->
        <a class="navbar-brand" href="./index.html">
          <img src="./assets/img/brand.svg" class="navbar-brand-img" alt="...">
        </a>

        <!-- Toggler -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="navbarCollapse">

          <!-- Toggler -->
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fe fe-x"></i>
          </button>

          <!-- Navigation -->
          <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" id="navbarLandings" data-toggle="dropdown" href="#" aria-haspopup="true" aria-expanded="false">
                Landings
              </a>
              <div class="dropdown-menu dropdown-menu-xl p-0" aria-labelledby="navbarLandings">
                <div class="row no-gutters">
                  <div class="col-12 col-lg-6">
                    <div class="dropdown-img-left" style="background-image: url(./assets/img/photos/photo-3.jpg);">

                      <!-- Heading -->
                      <h4 class="font-weight-bold text-white mb-0">
                        Want to see an overview?
                      </h4>

                      <!-- Text -->
                      <p class="font-size-sm text-white">
                        See all the pages at once.
                      </p>

                      <!-- Button -->
                      <a href="./overview.html" class="btn btn-sm btn-white shadow-dark fonFt-size-sm">
                        View all pages
                      </a>

                    </div>
                  </div>
                  <div class="col-12 col-lg-6">
                    <div class="dropdown-body">
                      <div class="row no-gutters">
                        <div class="col-6">

                          <!-- Heading -->
                          <h6 class="dropdown-header">
                            Services
                          </h6>

                          <!-- List -->
                          <a class="dropdown-item" href="./coworking.html">
                            Coworking
                          </a>
                          <a class="dropdown-item" href="./rental.html">
                            Rental
                          </a>
                          <a class="dropdown-item mb-5" href="./job.html">
                            Job Listing
                          </a>

                          <!-- Heading -->
                          <h6 class="dropdown-header">
                            Apps
                          </h6>

                          <!-- List -->
                          <a class="dropdown-item" href="./desktop-app.html">
                            Desktop
                          </a>
                          <a class="dropdown-item" href="./mobile-app.html">
                            Mobile
                          </a>

                        </div>
                        <div class="col-6">

                          <!-- Heading -->
                          <h6 class="dropdown-header">
                            Web
                          </h6>

                          <!-- List -->
                          <a class="dropdown-item" href="./index.html">
                            Basic
                          </a>
                          <a class="dropdown-item" href="./enterprise.html">
                            Enterprise
                          </a>
                          <a class="dropdown-item" href="./service.html">
                            Service
                          </a>
                          <a class="dropdown-item" href="./cloud.html">
                            Cloud Hosting
                          </a>

                        </div>
                      </div> <!-- / .row -->
                    </div>
                  </div>
                </div> <!-- / .row -->
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" id="navbarPages" data-toggle="dropdown" href="#" aria-haspopup="true" aria-expanded="false">
                Pages
              </a>
              <div class="dropdown-menu dropdown-menu-lg" aria-labelledby="navbarPages">
                <div class="row no-gutters">
                  <div class="col-6 col-lg-4">

                    <!-- Heading -->
                    <h6 class="dropdown-header">
                      Career
                    </h6>

                    <!-- List -->
                    <a class="dropdown-item" href="./careers.html">
                      Listing
                    </a>
                    <a class="dropdown-item mb-5" href="./career-single.html">
                      Opening
                    </a>

                    <!-- Heading -->
                    <h6 class="dropdown-header">
                      Company
                    </h6>

                    <!-- List -->
                    <a class="dropdown-item" href="./about.html">
                      About
                    </a>
                    <a class="dropdown-item" href="./pricing.html">
                      Pricing
                    </a>
                    <a class="dropdown-item mb-5 mb-lg-0" href="./terms-of-service.html">
                      Terms
                    </a>

                  </div>
                  <div class="col-6 col-lg-4">

                    <!-- Heading -->
                    <h6 class="dropdown-header">
                      Help center
                    </h6>

                    <!-- List -->
                    <a class="dropdown-item" href="./help-center.html">
                      Overview
                    </a>
                    <a class="dropdown-item mb-5" href="./help-center-article.html">
                      Article
                    </a>

                    <!-- Heading -->
                    <h6 class="dropdown-header">
                      Contact
                    </h6>

                    <!-- List -->
                    <a class="dropdown-item" href="./contact.html">
                      Basic
                    </a>
                    <a class="dropdown-item" href="./contact-alt.html">
                      Cover
                    </a>

                  </div>
                  <div class="col-6 col-lg-4">

                    <!-- Heading -->
                    <h6 class="dropdown-header">
                      Blog
                    </h6>

                    <!-- List -->
                    <a class="dropdown-item" href="./blog.html">
                      Rich View
                    </a>
                    <a class="dropdown-item" href="./blog-post.html">
                      Article
                    </a>
                    <a class="dropdown-item" href="./blog-showcase.html">
                      Showcase
                    </a>
                    <a class="dropdown-item" href="./blog-search.html">
                      Search
                    </a>

                  </div>
                </div>
              </div> <!-- / .row -->
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" id="navbarAccount" data-toggle="dropdown" href="#" aria-haspopup="true" aria-expanded="false">
                Account
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarAccount">
                <li class="dropdown-item dropright">
                  <a class="dropdown-link dropdown-toggle" data-toggle="dropdown" href="#">
                    Sign In
                  </a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="./signin-cover.html">
                      Side Cover
                    </a>
                    <a class="dropdown-item" href="./signin-illustration.html">
                      Illustration
                    </a>
                    <a class="dropdown-item" href="./signin.html">
                      Basic
                    </a>
                    <a class="dropdown-item" data-toggle="modal" href="#modalSigninHorizontal">
                      Modal Horizontal
                    </a>
                    <a class="dropdown-item" data-toggle="modal" href="#modalSigninVertical">
                      Modal Vertical
                    </a>
                  </div>
                </li>
                <li class="dropdown-item dropright">
                  <a class="dropdown-link dropdown-toggle" data-toggle="dropdown" href="#">
                    Sign Up
                  </a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="./signup-cover.html">
                      Side Cover
                    </a>
                    <a class="dropdown-item" href="./signup-illustration.html">
                      Illustration
                    </a>
                    <a class="dropdown-item" href="./signup.html">
                      Basic
                    </a>
                    <a class="dropdown-item" data-toggle="modal" href="#modalSignupHorizontal">
                      Modal Horizontal
                    </a>
                    <a class="dropdown-item" data-toggle="modal" href="#modalSignupVertical">
                      Modal Vertical
                    </a>
                  </div>
                </li>
                <li class="dropdown-item dropright">
                  <a class="dropdown-link dropdown-toggle" data-toggle="dropdown" href="#">
                    Password Reset
                  </a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="./password-reset-cover.html">
                      Side Cover
                    </a>
                    <a class="dropdown-item" href="./password-reset-illustration.html">
                      Illustration
                    </a>
                    <a class="dropdown-item" href="./password-reset.html">
                      Basic
                    </a>
                  </div>
                </li>
                <li class="dropdown-item dropright">
                  <a class="dropdown-link dropdown-toggle" data-toggle="dropdown" href="#">
                    Error
                  </a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="./error-cover.html">
                      Side Cover
                    </a>
                    <a class="dropdown-item" href="./error-illustration.html">
                      Illustration
                    </a>
                    <a class="dropdown-item" href="./error.html">
                      Basic
                    </a>
                  </div>
                </li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" id="navbarDocumentation" data-toggle="dropdown" href="#" aria-haspopup="true" aria-expanded="false">
                Documentation
              </a>
              <div class="dropdown-menu dropdown-menu-md" aria-labelledby="navbarDocumentation">
                <div class="list-group list-group-flush">
                  <a class="list-group-item" href="./docs/index.html">

                    <!-- Icon -->
                    <div class="icon icon-sm text-primary">
                                           <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                          <!-- Generator: Sketch 52.2 (67145) - http://www.bohemiancoding.com/sketch -->
                          <title>Stockholm-icons / General / Clipboard</title>
                          <desc>Created with Sketch.</desc>
                          <g id="Stockholm-icons-/-General-/-Clipboard" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                              <rect id="bound" x="0" y="0" width="24" height="24"></rect>
                              <path d="M8,3 L8,3.5 C8,4.32842712 8.67157288,5 9.5,5 L14.5,5 C15.3284271,5 16,4.32842712 16,3.5 L16,3 L18,3 C19.1045695,3 20,3.8954305 20,5 L20,21 C20,22.1045695 19.1045695,23 18,23 L6,23 C4.8954305,23 4,22.1045695 4,21 L4,5 C4,3.8954305 4.8954305,3 6,3 L8,3 Z" id="Combined-Shape" fill="#335EEA" opacity="0.3"></path>
                              <path d="M11,2 C11,1.44771525 11.4477153,1 12,1 C12.5522847,1 13,1.44771525 13,2 L14.5,2 C14.7761424,2 15,2.22385763 15,2.5 L15,3.5 C15,3.77614237 14.7761424,4 14.5,4 L9.5,4 C9.22385763,4 9,3.77614237 9,3.5 L9,2.5 C9,2.22385763 9.22385763,2 9.5,2 L11,2 Z" id="Combined-Shape" fill="#335EEA"></path>
                              <rect id="Rectangle-152" fill="#335EEA" opacity="0.3" x="7" y="10" width="5" height="2" rx="1"></rect>
                              <rect id="Rectangle-152-Copy" fill="#335EEA" opacity="0.3" x="7" y="14" width="9" height="2" rx="1"></rect>
                          </g>
                      </svg>
                    </div>

                    <!-- Content -->
                    <div class="ml-4">

                      <!-- Heading -->
                      <h6 class="font-weight-bold text-uppercase text-primary mb-0">
                        Documentation
                      </h6>

                      <!-- Text -->
                      <p class="font-size-sm text-gray-700 mb-0">
                        Customizing and building
                      </p>

                    </div>

                  </a>
                  <a class="list-group-item" href="./docs/alerts.html">

                    <!-- Icon -->
                    <div class="icon icon-sm text-primary">
                                           <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                          <!-- Generator: Sketch 52.2 (67145) - http://www.bohemiancoding.com/sketch -->
                          <title>Stockholm-icons / Layout / Layout-4-blocks</title>
                          <desc>Created with Sketch.</desc>
                          <g id="Stockholm-icons-/-Layout-/-Layout-4-blocks" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                              <rect id="bound" x="0" y="0" width="24" height="24"></rect>
                              <rect id="Rectangle-7" fill="#335EEA" x="4" y="4" width="7" height="7" rx="1.5"></rect>
                              <path d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z" id="Combined-Shape" fill="#335EEA" opacity="0.3"></path>
                          </g>
                      </svg>
                    </div>

                    <!-- Content -->
                    <div class="ml-4">

                      <!-- Heading -->
                      <h6 class="font-weight-bold text-uppercase text-primary mb-0">
                        Components
                      </h6>

                      <!-- Text -->
                      <p class="font-size-sm text-gray-700 mb-0">
                        Full list of components
                      </p>

                    </div>

                  </a>
                  <a class="list-group-item" href="./docs/changelog.html">

                    <!-- Icon -->
                    <div class="icon icon-sm text-primary">
                                           <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                          <!-- Generator: Sketch 52.2 (67145) - http://www.bohemiancoding.com/sketch -->
                          <title>Stockholm-icons / Files / File</title>
                          <desc>Created with Sketch.</desc>
                          <g id="Stockholm-icons-/-Files-/-File" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                              <polygon id="Shape" points="0 0 24 0 24 24 0 24"></polygon>
                              <path d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z" id="Combined-Shape" fill="#335EEA" opacity="0.3"></path>
                              <rect id="Rectangle" fill="#335EEA" x="6" y="11" width="9" height="2" rx="1"></rect>
                              <rect id="Rectangle-Copy" fill="#335EEA" x="6" y="15" width="5" height="2" rx="1"></rect>
                          </g>
                      </svg>
                    </div>

                    <!-- Content -->
                    <div class="ml-4">

                      <!-- Heading -->
                      <h6 class="font-weight-bold text-uppercase text-primary mb-0">
                        Changelog
                      </h6>

                      <!-- Text -->
                      <p class="font-size-sm text-gray-700 mb-0">
                        Keep track of changes
                      </p>

                    </div>

                    <!-- Badge -->
                    <span class="badge badge-pill badge-primary-soft ml-auto">
                      1.1.0
                    </span>

                  </a>
                </div>
              </div>
            </li>
          </ul>

          <!-- Button -->
          <a class="navbar-btn btn btn-sm btn-primary lift ml-auto" href="https://themes.getbootstrap.com/product/landkit/" target="_blank">
            Buy now
          </a>

        </div>

      </div>
    </nav>

    <!-- WELCOME
    ================================================== -->
    <section class="border-bottom">
      <div class="container">
        <div class="row align-items-stretch">
          <div class="col-12 col-md-6 offset-md-1 order-md-2">

            <!-- Slider (mobile) -->
            <div class="d-md-none img-cover" data-flickity='{"imagesLoaded": true, "wrapAround": true, "prevNextButtons": false, "pageDots": false}'>
              <div class="w-100">

                <!-- Image -->
                <img src="assets/img/covers/cover-12.jpg" alt="..." class="img-fluid">

              </div>
              <div class="w-100">

                <!-- Image -->
                <img src="assets/img/covers/cover-2.jpg" alt="..." class="img-fluid">

              </div>
            </div>

            <!-- Slider -->
            <div class="position-relative h-100 vw-50 d-none d-md-block" data-aos="fade-left">

              <!-- Slider -->
              <div class="flickity-button-bottom flickity-button-white h-100 w-100" data-flickity='{"imagesLoaded": true, "setGallerySize": false, "wrapAround": true, "pageDots": false}'>
                <div class="w-100 h-100 bg-cover" style="background-image: url(assets/img/covers/cover-9.jpg);"></div>
                <div class="w-100 h-100 bg-cover" style="background-image: url(assets/img/covers/cover-2.jpg);"></div>
              </div>

              <!-- Shape -->
              <div class="shape shape-left shape-fluid-y svg-shim text-white">
                <svg viewBox="0 0 100 1544" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M0 0H100V386L50 1158V1544H0V0Z" fill="currentColor"/>
                </svg>
              </div>

            </div>

          </div>
          <div class="col-12 col-md-5 py-8 py-md-14 order-md-1" data-aos="fade-right">

            <!-- Heading -->
            <h1 class="display-3">
              Coworking spaces built for <span class="text-success">startups.</span>
            </h1>

            <!-- Text -->
            <p class="lead text-muted mb-6 mb-md-8">
              We design and build coworking spaces tailored to the needs of growing teams.
            </p>

            <!-- Text -->
            <p>
              Where are you located?
            </p>

            <!-- Form -->
            <form>
              <div class="form-row">
                <div class="col-12 col-lg">

                  <!-- Search -->
                  <div class="form-group mb-lg-0">
                    <input type="search" class="form-control" value="Los Angeles">
                  </div>

                </div>
                <div class="col-12 col-lg-auto">

                  <!-- Button -->
                  <button type="submit" class="btn btn-block btn-primary shadow lift">
                    Find space
                  </button>

                </div>
              </div> <!-- / .form-row -->
            </form>

          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->
    </section>

    <!-- FLEXIBILITY
    ================================================== -->
    <section class="pt-8 pt-md-11 bg-gradient-light">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-md-10 col-lg-8 text-center">

            <!-- Badge -->
            <span class="badge badge-pill badge-success-soft mb-3">
              <span class="h6 text-uppercase">Flexibility</span>
            </span>

            <!-- Heading -->
            <h1>
              Spaces for any size of team.
            </h1>

            <!-- Text -->
            <p class="font-size-lg text-gray-700 mb-7 mb-md-9">
              No matter what size your team, we have a solution. From single shared spaces to entire floors, it's available.
            </p>

          </div>
        </div> <!-- / .row -->
        <div class="row">
          <div class="col-12 col-md-4" data-aos="fade-up">

            <!-- Card -->
            <div class="card shadow-light-lg mb-6 mb-md-0 lift lift-lg">

              <!-- Image -->
              <img src="assets/img/photos/photo-4.jpg" alt="..." class="card-img-top">

              <!-- Shape -->
              <div class="position-relative">
                <div class="shape shape-bottom shape-fluid-x svg-shim text-white">
                  <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"/>
                  </svg>
                </div>
              </div>

              <!-- Body -->
              <div class="card-body position-relative">

                <!-- Badge -->
                <div class="position-relative text-right mt-n8 mr-n4 mb-3">
                  <span class="badge badge-pill badge-success">
                    <span class="h6 text-uppercase">$49/mo</span>
                  </span>
                </div>

                <!-- Heading -->
                <h3>
                  Shared Coworking
                </h3>

                <!-- Text -->
                <p class="text-muted">
                  Open seating is available weekdays from 7am - 7pm and weekends from 9am - 5pm.
                </p>

                <!-- Link -->
                <a href="#!" class="font-weight-bold text-decoration-none">
                  Tour the space <i class="fe fe-arrow-right ml-3"></i>
                </a>

              </div>

            </div>

          </div>
          <div class="col-12 col-md-4" data-aos="fade-up" data-aos-delay="100">

            <!-- Card -->
            <div class="card shadow-light-lg mb-6 mb-md-0 lift lift-lg">

              <!-- Image -->
              <img src="assets/img/photos/photo-5.jpg" alt="..." class="card-img-top">

              <!-- Shape -->
              <div class="position-relative">
                <div class="shape shape-bottom shape-fluid-x svg-shim text-white">
                  <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"/>
                  </svg>
                </div>
              </div>

              <!-- Body -->
              <div class="card-body position-relative">

                <!-- Badge -->
                <div class="position-relative text-right mt-n8 mr-n4 mb-3">
                  <span class="badge badge-pill badge-warning">
                    <span class="h6 text-uppercase">$99/mo</span>
                  </span>
                </div>

                <!-- Heading -->
                <h3>
                  Designated Desk
                </h3>

                <!-- Text -->
                <p class="text-muted">
                  A personal space to leave your computer, monitor, and supplies with unlimited access.
                </p>

                <!-- Link -->
                <a href="#!" class="font-weight-bold text-decoration-none">
                  Find a desk <i class="fe fe-arrow-right ml-3"></i>
                </a>

              </div>

            </div>

          </div>
          <div class="col-12 col-md-4" data-aos="fade-up" data-aos-delay="200">

            <!-- Card -->
            <div class="card shadow-light-lg lift lift-lg">

              <!-- Image -->
              <img src="assets/img/photos/photo-6.jpg" alt="..." class="card-img-top">

              <!-- Shape -->
              <div class="position-relative">
                <div class="shape shape-bottom shape-fluid-x svg-shim text-white">
                  <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"/>
                  </svg>
                </div>
              </div>

              <!-- Body -->
              <div class="card-body position-relative">

                <!-- Badge -->
                <div class="position-relative text-right mt-n8 mr-n4 mb-3">
                  <span class="badge badge-pill badge-success">
                    <span class="h6 text-uppercase">$399/mo</span>
                  </span>
                </div>

                <!-- Heading -->
                <h3>
                  Private Offices
                </h3>

                <!-- Text -->
                <p class="text-muted">
                  Need a private space? We have all sizes of offices from 400² ft. available up to 3100² ft.
                </p>

                <!-- Link -->
                <a href="#!" class="font-weight-bold text-decoration-none">
                  Tour the offices <i class="fe fe-arrow-right ml-3"></i>
                </a>

              </div>

            </div>

          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->
    </section>

    <!-- SCALABLE
    ================================================== -->
    <section class="py-8 py-md-11 border-bottom">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-12 col-md-6 order-md-2">

            <!-- Image -->
            <img src="assets/img/illustrations/illustration-1.png" alt="..." class="img-fluid mb-6 mb-md-0">

          </div>
          <div class="col-12 col-md-6 order-md-1">

            <!-- Badge -->
            <span class="badge badge-pill badge-primary-soft mb-3">
              <span class="h6 text-uppercase">Scalable</span>
            </span>

            <!-- Heading -->
            <h2>
              Flexible office space means <br>
              <span class="text-primary">growing your team is easy</span>.
            </h2>

            <!-- Text -->
            <p class="font-size-lg text-gray-700 mb-6 mb-md-6">
              Rather than worrying about switching offices every couple years, you can instead stay in the same location and grow-up from your shared coworking space to an office that takes up an entire floor.
            </p>

            <!-- List -->
            <div class="row">
              <div class="col-12 col-lg-6">

                <!-- Item -->
                <div class="d-flex">

                  <!-- Check -->
                  <div class="badge badge-rounded-circle badge-primary-soft mt-1 mr-4">
                    <i class="fe fe-check"></i>
                  </div>

                  <!-- Text -->
                  <p>
                    Add space anytime
                  </p>

                </div>

                <!-- Item -->
                <div class="d-flex">

                  <!-- Check -->
                  <div class="badge badge-rounded-circle badge-primary-soft mt-1 mr-4">
                    <i class="fe fe-check"></i>
                  </div>

                  <p class="mb-lg-0">
                    Group discounts
                  </p>

                </div>

              </div>
              <div class="col-12 col-lg-6">

                <!-- Item -->
                <div class="d-flex">

                  <!-- Check -->
                  <span class="badge badge-rounded-circle badge-primary-soft mt-1 mr-4">
                    <i class="fe fe-check"></i>
                  </span>

                  <!-- Text -->
                  <p>
                    Infinite flexibility
                  </p>

                </div>

                <!-- Item -->
                <div class="d-flex">

                  <!-- Check -->
                  <div class="badge badge-rounded-circle badge-primary-soft mr-1 mr-4">
                    <i class="fe fe-check"></i>
                  </div>

                  <!-- Text -->
                  <p class="mb-0">
                    Snacks included
                  </p>

                </div>

              </div>
            </div> <!-- / .row -->

          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->
    </section>

    <!-- LOCATION
    ================================================== -->
    <section class="pt-8 pt-md-0 border-bottom">
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-6">

            <!-- Map (mobile) -->
            <div class="embed-responsive embed-responsive-1by1 d-md-none">
              <div class="embed-responsive-item" data-toggle="map" data-options='{"center": [-118.244615, 34.052979], "zoom": 12}'></div>
            </div>

            <!-- Map -->
            <div class="position-relative h-100 vw-50 float-right d-none d-md-block
            ">

              <!-- Map -->
              <div class="w-100 h-100" data-toggle="map" data-options='{"center": [-118.244615, 34.052979], "zoom": 12}'></div>

              <!-- Shape -->
              <div class="shape shape-right shape-fluid-y svg-shim text-white">
                <svg viewBox="0 0 100 1544" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M0 386V0H100V1544H50V1158L0 386Z" fill="currentColor"/>
                </svg>
              </div>

            </div>

          </div>
          <div class="col-12 col-md-6 col-lg-5 offset-lg-1 py-8 py-md-11 py-lg-12">

            <!-- Heading -->
            <h2>
              Over <span data-toggle="countup" data-from="100" data-to="400" data-aos data-aos-id="countup:in">100</span> locations spread <br>
              <span class="text-success">across the entire planet</span>.
            </h2>

            <!-- Text -->
            <p class="font-size-lg text-gray-700 mb-6 mb-md-6">
              We picked our office locations to maximize our availability to you! We try to keep locations in every major city, as well as common vacatino destinations in case you need to sneak work in on the side.
            </p>

            <!-- Stats -->
            <div class="d-flex">
              <div class="pr-5">
                <h3 class="text-success mb-0">
                  125
                </h3>
                <p class="text-gray-700 mb-0">
                  Countries
                </p>
              </div>
              <div class="border-left"></div>
              <div class="px-5">
                <h3 class="text-success mb-0">
                  312
                </h3>
                <p class="text-gray-700 mb-0">
                  Cities
                </p>
              </div>
              <div class="border-left"></div>
              <div class="pl-5">
                <h3 class="text-success mb-0">
                  40,000
                </h3>
                <p class="text-gray-700 mb-0">
                  Desks
                </p>
              </div>
            </div>

          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->
    </section>

    <!-- FEATURES
    ================================================== -->
    <section class="py-8 py-md-11 bg-light">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-md-10 col-lg-8 text-center">

            <!-- Heading -->
            <h2>
              <span class="text-primary">Everything</span> your team could need.
            </h2>

            <!-- Text -->
            <p class="font-size-lg text-muted mb-7 mb-md-9 px-md-9">
              We make sure to include all the amenities and niceties that a growing startup could possibly need.
            </p>

          </div>
        </div> <!-- / .row -->
        <div class="row justify-content-center">
          <div class="col-12 col-md-10 col-lg-8">

            <!-- Card -->
            <div class="card accordion" id="featuresAccordion">
              <div class="card-body">

                <!-- List group -->
                <div class="list-group list-group-flush">
                  <div class="list-group-item">

                    <!-- Toggle -->
                    <a class="d-flex align-items-center text-reset text-decoration-none" data-toggle="collapse" href="#featuresOne" role="button" aria-expanded="true" aria-controls="featuresOne">
                      <div class="mr-auto">

                        <!-- Title -->
                        <p class="font-weight-bold mb-0">
                          Flexible access to facilities.
                        </p>

                        <!-- Text -->
                        <p class="font-size-sm text-muted mb-0">
                          Our new key fobs make it so easy!
                        </p>

                      </div>

                      <!-- Badge -->
                      <span class="badge badge-pill badge-success-soft ml-4">
                        <span class="h6 text-uppercase">New</span>
                      </span>

                      <!-- Chevron -->
                      <span class="collapse-chevron text-muted ml-4">
                        <i class="fe fe-lg fe-chevron-down"></i>
                      </span>

                    </a> <!-- / .row -->

                    <!-- Collapse -->
                    <div class="collapse show" id="featuresOne" data-parent="#featuresAccordion">
                      <div class="py-5 py-mb-6">
                        <p>
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt rerum minima a possimus, amet perferendis, temporibus obcaecati pariatur. Reprehenderit magnam necessitatibus vel culpa provident quas nesciunt sunt aut cupiditate fugiat! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt rerum minima a possimus, amet perferendis, temporibus obcaecati pariatur. Reprehenderit magnam necessitatibus vel culpa provident quas nesciunt sunt aut cupiditate fugiat!
                        </p>
                        <a href="#!" class="font-weight-bold text-decoration-none">
                          Check it out <i class="fe fe-arrow-right ml-3"></i>
                        </a>
                      </div>
                    </div>

                  </div>
                  <div class="list-group-item">

                    <!-- Toggle -->
                    <a class="d-flex align-items-center text-reset text-decoration-none" data-toggle="collapse" href="#featuresTwo" role="button" aria-expanded="false" aria-controls="featuresTwo">
                      <div class="mr-auto">

                        <!-- Title -->
                        <p class="font-weight-bold mb-0">
                          Snacks, drinks, coffee, and more.
                        </p>

                        <!-- Text -->
                        <p class="font-size-sm text-muted mb-0">
                          Keep your engine going with free food and drinks.
                        </p>

                      </div>

                      <!-- Chevron -->
                      <span class="collapse-chevron text-muted ml-4">
                        <i class="fe fe-lg fe-chevron-down"></i>
                      </span>

                    </a> <!-- / .row -->

                    <!-- Collapse -->
                    <div class="collapse" id="featuresTwo" data-parent="#featuresAccordion">
                      <div class="py-5 py-md-6">
                        <p>
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt rerum minima a possimus, amet perferendis, temporibus obcaecati pariatur. Reprehenderit magnam necessitatibus vel culpa provident quas nesciunt sunt aut cupiditate fugiat! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt rerum minima a possimus, amet perferendis, temporibus obcaecati pariatur. Reprehenderit magnam necessitatibus vel culpa provident quas nesciunt sunt aut cupiditate fugiat!
                        </p>
                        <a href="#!" class="font-weight-bold text-decoration-none">
                          Check it out <i class="fe fe-arrow-right ml-3"></i>
                        </a>
                      </div>
                    </div>

                  </div>
                  <div class="list-group-item">

                    <!-- Toggle -->
                    <a class="d-flex align-items-center text-reset text-decoration-none" data-toggle="collapse" href="#featuresThree" role="button" aria-expanded="false" aria-controls="featuresThree">
                      <div class="mr-auto">

                        <!-- Title -->
                        <p class="font-weight-bold mb-0">
                          On site tech support
                        </p>

                        <!-- Text -->
                        <p class="font-size-sm text-muted mb-0">
                          Connectivity, power, and IT issues solved in no time.
                        </p>

                      </div>

                      <!-- Chevron -->
                      <span class="collapse-chevron text-muted ml-4">
                        <i class="fe fe-lg fe-chevron-down"></i>
                      </span>

                    </a> <!-- / .row -->

                    <!-- Collapse -->
                    <div class="collapse" id="featuresThree" data-parent="#featuresAccordion">
                      <div class="py-5 py-md-6">
                        <p>
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt rerum minima a possimus, amet perferendis, temporibus obcaecati pariatur. Reprehenderit magnam necessitatibus vel culpa provident quas nesciunt sunt aut cupiditate fugiat! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt rerum minima a possimus, amet perferendis, temporibus obcaecati pariatur. Reprehenderit magnam necessitatibus vel culpa provident quas nesciunt sunt aut cupiditate fugiat!
                        </p>
                        <a href="#!" class="font-weight-bold text-decoration-none">
                          Check it out <i class="fe fe-arrow-right ml-3"></i>
                        </a>
                      </div>
                    </div>

                  </div>
                </div>

              </div>
            </div>

          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->
    </section>

    <!-- SHAPE
    ================================================== -->
    <div class="position-relative mt-n16">
      <div class="shape shape-bottom shape-fluid-x svg-shim text-dark">
        <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"/>
        </svg>
      </div>
    </div>

    <!-- FOOTER
    ================================================== -->
    <section class="pt-16 bg-dark">
      <footer class="py-8 py-md-11 bg-dark border-top border-gray-800-50">
        <div class="container">
          <div class="row">
            <div class="col-12 col-md-4 col-lg-3">

              <!-- Brand -->
              <img src="./assets/img/brand.svg" alt="..." class="footer-brand img-fluid mb-2">

              <!-- Text -->
              <p class="text-gray-700 mb-2">
                A better way to build.
              </p>

              <!-- Social -->
              <ul class="list-unstyled list-inline list-social mb-6 mb-md-0">
                <li class="list-inline-item list-social-item mr-3">
                  <a href="#!" class="text-decoration-none">
                    <img src="./assets/img/icons/social/instagram.svg" class="list-social-icon" alt="...">
                  </a>
                </li>
                <li class="list-inline-item list-social-item mr-3">
                  <a href="#!" class="text-decoration-none">
                    <img src="./assets/img/icons/social/facebook.svg" class="list-social-icon" alt="...">
                  </a>
                </li>
                <li class="list-inline-item list-social-item mr-3">
                  <a href="#!" class="text-decoration-none">
                    <img src="./assets/img/icons/social/twitter.svg" class="list-social-icon" alt="...">
                  </a>
                </li>
                <li class="list-inline-item list-social-item">
                  <a href="#!" class="text-decoration-none">
                    <img src="./assets/img/icons/social/pinterest.svg" class="list-social-icon" alt="...">
                  </a>
                </li>
              </ul>

            </div>
            <div class="col-6 col-md-4 col-lg-2">

              <!-- Heading -->
              <h6 class="font-weight-bold text-uppercase text-gray-700">
                Products
              </h6>

              <!-- List -->
              <ul class="list-unstyled text-muted mb-6 mb-md-8 mb-lg-0">
                <li class="mb-3">
                  <a href="#!" class="text-reset">
                    Page Builder
                  </a>
                </li>
                <li class="mb-3">
                  <a href="#!" class="text-reset">
                    UI Kit
                  </a>
                </li>
                <li class="mb-3">
                  <a href="#!" class="text-reset">
                    Styleguide
                  </a>
                </li>
                <li class="mb-3">
                  <a href="#!" class="text-reset">
                    Documentation
                  </a>
                </li>
                <li>
                  <a href="#!" class="text-reset">
                    Changelog
                  </a>
                </li>
              </ul>

            </div>
            <div class="col-6 col-md-4 col-lg-2">

              <!-- Heading -->
              <h6 class="font-weight-bold text-uppercase text-gray-700">
                Services
              </h6>

              <!-- List -->
              <ul class="list-unstyled text-muted mb-6 mb-md-8 mb-lg-0">
                <li class="mb-3">
                  <a href="#!" class="text-reset">
                    Documentation
                  </a>
                </li>
                <li class="mb-3">
                  <a href="#!" class="text-reset">
                    Changelog
                  </a>
                </li>
                <li class="mb-3">
                  <a href="#!" class="text-reset">
                    Pagebuilder
                  </a>
                </li>
                <li>
                  <a href="#!" class="text-reset">
                    UI Kit
                  </a>
                </li>
              </ul>

            </div>
            <div class="col-6 col-md-4 offset-md-4 col-lg-2 offset-lg-0">

              <!-- Heading -->
              <h6 class="font-weight-bold text-uppercase text-gray-700">
                Connect
              </h6>

              <!-- List -->
              <ul class="list-unstyled text-muted mb-0">
                <li class="mb-3">
                  <a href="#!" class="text-reset">
                    Page Builder
                  </a>
                </li>
                <li class="mb-3">
                  <a href="#!" class="text-reset">
                    UI Kit
                  </a>
                </li>
                <li class="mb-3">
                  <a href="#!" class="text-reset">
                    Styleguide
                  </a>
                </li>
                <li class="mb-3">
                  <a href="#!" class="text-reset">
                    Documentation
                  </a>
                </li>
                <li class="mb-3">
                  <a href="#!" class="text-reset">
                    Changelog
                  </a>
                </li>
                <li class="mb-3">
                  <a href="#!" class="text-reset">
                    Documentation
                  </a>
                </li>
                <li>
                  <a href="#!" class="text-reset">
                    Changelog
                  </a>
                </li>
              </ul>

            </div>
            <div class="col-6 col-md-4 col-lg-2">

              <!-- Heading -->
              <h6 class="font-weight-bold text-uppercase text-gray-700">
                Legal
              </h6>

              <!-- List -->
              <ul class="list-unstyled text-muted mb-0">
                <li class="mb-3">
                  <a href="#!" class="text-reset">
                    Documentation
                  </a>
                </li>
                <li class="mb-3">
                  <a href="#!" class="text-reset">
                    Changelog
                  </a>
                </li>
                <li>
                  <a href="#!" class="text-reset">
                    Pagebuilder
                  </a>
                </li>
              </ul>

            </div>
          </div> <!-- / .row -->
        </div> <!-- / .container -->
      </footer>
    </section>

    <!-- JAVASCRIPT
    ================================================== -->
    <!-- Libs JS -->
    <script src="./assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="./assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./assets/libs/flickity/dist/flickity.pkgd.min.js"></script>
    <script src="./assets/libs/flickity-fade/flickity-fade.js"></script>
    <script src="./assets/libs/aos/dist/aos.js"></script>
    <script src="./assets/libs/smooth-scroll/dist/smooth-scroll.min.js"></script>
    <script src="./assets/libs/jarallax/dist/jarallax.min.js"></script>
    <script src="./assets/libs/jarallax/dist/jarallax-video.min.js"></script>
    <script src="./assets/libs/jarallax/dist/jarallax-element.min.js"></script>
    <script src="./assets/libs/typed.js/lib/typed.min.js"></script>
    <script src="./assets/libs/countup.js/dist/countUp.min.js"></script>
    <script src="./assets/libs/highlightjs/highlight.pack.min.js"></script>
    <script src="./assets/libs/@fancyapps/fancybox/dist/jquery.fancybox.min.js"></script>

    <!-- Map -->
    <script src='https://api.mapbox.com/mapbox-gl-js/v0.53.0/mapbox-gl.js'></script>

    <!-- Theme JS -->
    <script src="./assets/js/theme.min.js"></script>

  </body>
</html>
