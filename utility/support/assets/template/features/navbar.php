<!-- Nav -->
<header class="header fixed-top border-bottom">
  <!-- Nav -->
  <nav id="navbar-main" class="navbar navbar-expand-lg navbar-light bg-white">
    <div class="container-fluid">
      <!-- Brand logo -->
      <a class="navbar-brand title2 font-weight-bold" style="color:var(--developermen);" href="../../docs/index.html">
        Soporte &bull; Developer Men
      </a>
      <!-- Sidenav toggler -->
      <button class="sidenav-toggler ml-auto mr-3" type="button" data-action="sidenav-pin" data-target="#sidenav-main">
        <div class="sidenav-toggler-inner">
          <i class="sidenav-toggler-line"></i>
          <i class="sidenav-toggler-line"></i>
          <i class="sidenav-toggler-line"></i>
        </div>
      </button>
      <!-- Search form -->
      <form class="navbar-search navbar-search-dark form-inline mr-sm-3 d-none" id="navbar-search-main">
        <div class="form-group mb-0">
          <div class="input-group input-group-merge">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-search"></i></span>
            </div>
            <input class="form-control" placeholder="Search" type="text">
          </div>
        </div>
        <button type="button" class="close" data-action="search-close" data-target="#navbar-search-main" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </form>
      <!-- Navbar -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="../../docs/getting-started/installation.html">Notificaciones</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../../docs/components/index.html">Contactanos</a>
          </li>
          <li class="nav-item dropdown">

            <a class="nav-link pr-0" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <!-- <i class="far fa-user-circle"></i> -->
                <img class="rounded-circle" alt="Image placeholder" src="assets/images/icons/facebook.png" width="50" height="50">
            </a>
            <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
              <h6 class="dropdown-header">Menú</h6>
              <a class="dropdown-item" href="#">
                <i class="fas fa-user"></i> Cuenta
              </a>
              <a class="dropdown-item" href="#">
                <i class="fas fa-cog"></i> Incidencias
              </a>
              <div class="dropdown-divider" role="presentation"></div>
              <a class="dropdown-item" href="logout">
                <i class="fas fa-sign-out-alt"></i> Salir
              </a>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>
