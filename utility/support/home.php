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
<body class="docs">

  <body class="docs">
    <?php
    include("assets/template/features/navbar.php");
    include("assets/template/features/sidebar.php");
    ?>
    <!-- Main content -->
    <div class="main-content">
      <!-- Page content -->
      <div class="container-fluid">
        <div class="row justify-content-between">
          <div class="col-lg-9 col-xl-8 offset-xl-1">
            <div class="docs-content">
              <div class="docs-page-title">
                <h2>Alerts</h2>
              </div>
              <p class="text-muted docs-lead">Provide contextual feedback messages for typical user actions with the handful of available and flexible alert messages. This is probably the most amazing set of alerts available in a UI.</p>
              <a href="http://getbootstrap.com/docs/4.3/components/alerts" target="_blank">
                <i class="far fa-book mr-2"></i> Bootstrap Documentation</a>
                <hr class="divider divider-fade" />
                <h2 id="examples">Examples</h2>
                <h3 id="default">Default</h3>
                <div class="docs-example">
                  <ul class="nav nav-pills nav-example" id="tab-example" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active" id="alert-default-result-tab" data-toggle="tab" href="#alert-default-result" role="tab" aria-controls="alert-default-result" aria-selected="true">
                        <i class="far fa-eye mr-2"></i>Result
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="alert-default-html-tab" data-toggle="tab" href="#alert-default-html" role="tab" aria-controls="alert-default-html" aria-selected="false">
                        <i class="far fa-code mr-2"></i>HTML
                      </a>
                    </li>
                  </ul>
                  <div class="tab-content">
                    <!-- Result -->
                    <div id="alert-default-result" class="tab-pane tab-example-result fade show active" role="tabpanel" aria-labelledby="alert-default-result-tab">
                      <div class="alert alert-warning" role="alert">
                        <strong>Heads up!</strong> This is a info alert with <a href="#" class="alert-link">an example link</a> — check it out!
                      </div>
                    </div><!-- Code -->
                    <div id="alert-default-html" class="tab-pane tab-example-html fade" role="tabpanel" aria-labelledby="alert-default-html-tab">
                      <figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-warning"</span> <span class="na">role=</span><span class="s">"alert"</span><span class="nt">&gt;</span>
                        <span class="nt">&lt;strong&gt;</span>Heads up!<span class="nt">&lt;/strong&gt;</span> This is a info alert with <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"alert-link"</span><span class="nt">&gt;</span>an example link<span class="nt">&lt;/a&gt;</span> — check it out!
                        <span class="nt">&lt;/div&gt;</span></code></pre>
                      </figure>
                    </div>
                  </div>
                </div>
                <h3 id="flushed-alert">Flushed alert</h3>
                <p>Get a flash message that is full width and removes border and radius by adding the <code class="highlighter-rouge">.alert-flush</code> modifier class:</p>
                <div class="docs-example">
                  <ul class="nav nav-pills nav-example" id="tab-example" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active" id="alert-flush-result-tab" data-toggle="tab" href="#alert-flush-result" role="tab" aria-controls="alert-flush-result" aria-selected="true">
                        <i class="far fa-eye mr-2"></i>Result
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="alert-flush-html-tab" data-toggle="tab" href="#alert-flush-html" role="tab" aria-controls="alert-flush-html" aria-selected="false">
                        <i class="far fa-code mr-2"></i>HTML
                      </a>
                    </li>
                  </ul>
                  <div class="tab-content">
                    <!-- Result -->
                    <div id="alert-flush-result" class="tab-pane tab-example-result fade show active" role="tabpanel" aria-labelledby="alert-flush-result-tab">
                      <div class="alert alert-warning alert-flush" role="alert">
                        <strong>Heads up!</strong> This is a info alert with <a href="#" class="alert-link">an example link</a> — check it out!
                      </div>
                    </div><!-- Code -->
                    <div id="alert-flush-html" class="tab-pane tab-example-html fade" role="tabpanel" aria-labelledby="alert-flush-html-tab">
                      <figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-warning alert-flush"</span> <span class="na">role=</span><span class="s">"alert"</span><span class="nt">&gt;</span>
                        <span class="nt">&lt;strong&gt;</span>Heads up!<span class="nt">&lt;/strong&gt;</span> This is a info alert with <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"alert-link"</span><span class="nt">&gt;</span>an example link<span class="nt">&lt;/a&gt;</span> — check it out!
                        <span class="nt">&lt;/div&gt;</span></code></pre>
                      </figure>
                    </div>
                  </div>
                </div>
                <h3 id="outline">Outline</h3>
                <p>Create an outlined alert by using the same color options. All you have to do is to add the <code class="highlighter-rouge">.alert-outline-COLOR_NAME</code>, where color name is any of the theme’s colors (e.g: warning, success, danger, dark):</p>
                <div class="docs-example">
                  <ul class="nav nav-pills nav-example" id="tab-example" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active" id="alert-outline-result-tab" data-toggle="tab" href="#alert-outline-result" role="tab" aria-controls="alert-outline-result" aria-selected="true">
                        <i class="far fa-eye mr-2"></i>Result
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="alert-outline-html-tab" data-toggle="tab" href="#alert-outline-html" role="tab" aria-controls="alert-outline-html" aria-selected="false">
                        <i class="far fa-code mr-2"></i>HTML
                      </a>
                    </li>
                  </ul>
                  <div class="tab-content">
                    <!-- Result -->
                    <div id="alert-outline-result" class="tab-pane tab-example-result fade show active" role="tabpanel" aria-labelledby="alert-outline-result-tab">
                      <div class="alert alert-outline-warning" role="alert">
                        <strong>Heads up!</strong> This is a info alert with <a href="#" class="alert-link">an example link</a> — check it out!
                      </div>
                    </div><!-- Code -->
                    <div id="alert-outline-html" class="tab-pane tab-example-html fade" role="tabpanel" aria-labelledby="alert-outline-html-tab">
                      <figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-outline-warning"</span> <span class="na">role=</span><span class="s">"alert"</span><span class="nt">&gt;</span>
                        <span class="nt">&lt;strong&gt;</span>Heads up!<span class="nt">&lt;/strong&gt;</span> This is a info alert with <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"alert-link"</span><span class="nt">&gt;</span>an example link<span class="nt">&lt;/a&gt;</span> — check it out!
                        <span class="nt">&lt;/div&gt;</span></code></pre>
                      </figure>
                    </div>
                  </div>
                </div>
                <h3 id="multiple-alerts">Multiple alerts</h3>
                <p>Should the need arise, you can quickly space out your flash message from surrounding content with a <code class="highlighter-rouge">.alert-messages</code> wrapper. Note the extra top and bottom margin in the example below.</p>
                <div class="docs-example">
                  <ul class="nav nav-pills nav-example" id="tab-example" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active" id="alert-multiple-result-tab" data-toggle="tab" href="#alert-multiple-result" role="tab" aria-controls="alert-multiple-result" aria-selected="true">
                        <i class="far fa-eye mr-2"></i>Result
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="alert-multiple-html-tab" data-toggle="tab" href="#alert-multiple-html" role="tab" aria-controls="alert-multiple-html" aria-selected="false">
                        <i class="far fa-code mr-2"></i>HTML
                      </a>
                    </li>
                  </ul>
                  <div class="tab-content">
                    <!-- Result -->
                    <div id="alert-multiple-result" class="tab-pane tab-example-result fade show active" role="tabpanel" aria-labelledby="alert-multiple-result-tab">
                      <div class="alert-messages">
                        <div class="alert alert-warning" role="alert">
                          <strong>Heads up!</strong> This is a info alert with <a href="#" class="alert-link">an example link</a> — check it out!
                        </div>
                        <div class="alert alert-warning" role="alert">
                          <strong>Heads up!</strong> This is a info alert with <a href="#" class="alert-link">an example link</a> — check it out!
                        </div>
                      </div>
                    </div><!-- Code -->
                    <div id="alert-multiple-html" class="tab-pane tab-example-html fade" role="tabpanel" aria-labelledby="alert-multiple-html-tab">
                      <figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert-messages"</span><span class="nt">&gt;</span>
                        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-warning"</span> <span class="na">role=</span><span class="s">"alert"</span><span class="nt">&gt;</span>
                        <span class="nt">&lt;strong&gt;</span>Heads up!<span class="nt">&lt;/strong&gt;</span> This is a info alert with <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"alert-link"</span><span class="nt">&gt;</span>an example link<span class="nt">&lt;/a&gt;</span> — check it out!
                        <span class="nt">&lt;/div&gt;</span>
                        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-warning"</span> <span class="na">role=</span><span class="s">"alert"</span><span class="nt">&gt;</span>
                        <span class="nt">&lt;strong&gt;</span>Heads up!<span class="nt">&lt;/strong&gt;</span> This is a info alert with <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"alert-link"</span><span class="nt">&gt;</span>an example link<span class="nt">&lt;/a&gt;</span> — check it out!
                        <span class="nt">&lt;/div&gt;</span>
                        <span class="nt">&lt;/div&gt;</span></code></pre>
                      </figure>
                    </div>
                  </div>
                </div>
                <h3 id="shadow">Shadow</h3>
                <p>Add depth to any alert using the <code class="highlighter-rouge">.shadow</code>, <code class="highlighter-rouge">.shadow-*</code> utilities:</p>
                <div class="docs-example">
                  <ul class="nav nav-pills nav-example" id="tab-example" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active" id="alerts-shadow-result-tab" data-toggle="tab" href="#alerts-shadow-result" role="tab" aria-controls="alerts-shadow-result" aria-selected="true">
                        <i class="far fa-eye mr-2"></i>Result
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="alerts-shadow-html-tab" data-toggle="tab" href="#alerts-shadow-html" role="tab" aria-controls="alerts-shadow-html" aria-selected="false">
                        <i class="far fa-code mr-2"></i>HTML
                      </a>
                    </li>
                  </ul>
                  <div class="tab-content">
                    <!-- Result -->
                    <div id="alerts-shadow-result" class="tab-pane tab-example-result fade show active" role="tabpanel" aria-labelledby="alerts-shadow-result-tab">
                      <div class="alert alert-warning shadow-lg" role="alert">
                        <strong>Heads up!</strong> This is a info alert with <a href="#" class="alert-link">an example link</a> — check it out!
                      </div>
                    </div><!-- Code -->
                    <div id="alerts-shadow-html" class="tab-pane tab-example-html fade" role="tabpanel" aria-labelledby="alerts-shadow-html-tab">
                      <figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-warning shadow-lg"</span> <span class="na">role=</span><span class="s">"alert"</span><span class="nt">&gt;</span>
                        <span class="nt">&lt;strong&gt;</span>Heads up!<span class="nt">&lt;/strong&gt;</span> This is a info alert with <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"alert-link"</span><span class="nt">&gt;</span>an example link<span class="nt">&lt;/a&gt;</span> — check it out!
                        <span class="nt">&lt;/div&gt;</span></code></pre>
                      </figure>
                    </div>
                  </div>
                </div>
                <h3 id="dismissible">Dismissible</h3>
                <div class="docs-example">
                  <ul class="nav nav-pills nav-example" id="tab-example" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active" id="alerts-dismissible-result-tab" data-toggle="tab" href="#alerts-dismissible-result" role="tab" aria-controls="alerts-dismissible-result" aria-selected="true">
                        <i class="far fa-eye mr-2"></i>Result
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="alerts-dismissible-html-tab" data-toggle="tab" href="#alerts-dismissible-html" role="tab" aria-controls="alerts-dismissible-html" aria-selected="false">
                        <i class="far fa-code mr-2"></i>HTML
                      </a>
                    </li>
                  </ul>
                  <div class="tab-content">
                    <!-- Result -->
                    <div id="alerts-dismissible-result" class="tab-pane tab-example-result fade show active" role="tabpanel" aria-labelledby="alerts-dismissible-result-tab">
                      <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>Heads up!</strong> This is a info alert with <a href="#" class="alert-link">an example link</a> — check it out!<button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Heads up!</strong> This is a info alert with <a href="#" class="alert-link">an example link</a> — check it out!<button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                    </div><!-- Code -->
                    <div id="alerts-dismissible-html" class="tab-pane tab-example-html fade" role="tabpanel" aria-labelledby="alerts-dismissible-html-tab">
                      <figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-warning alert-dismissible fade show"</span> <span class="na">role=</span><span class="s">"alert"</span><span class="nt">&gt;</span>
                        <span class="nt">&lt;strong&gt;</span>Heads up!<span class="nt">&lt;/strong&gt;</span> This is a info alert with <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"alert-link"</span><span class="nt">&gt;</span>an example link<span class="nt">&lt;/a&gt;</span> — check it out!<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"close"</span> <span class="na">data-dismiss=</span><span class="s">"alert"</span> <span class="na">aria-label=</span><span class="s">"Close"</span><span class="nt">&gt;</span>
                        <span class="nt">&lt;span</span> <span class="na">aria-hidden=</span><span class="s">"true"</span><span class="nt">&gt;</span><span class="ni">&amp;times;</span><span class="nt">&lt;/span&gt;</span>
                        <span class="nt">&lt;/button&gt;</span>
                        <span class="nt">&lt;/div&gt;</span>
                        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-success alert-dismissible fade show"</span> <span class="na">role=</span><span class="s">"alert"</span><span class="nt">&gt;</span>
                        <span class="nt">&lt;strong&gt;</span>Heads up!<span class="nt">&lt;/strong&gt;</span> This is a info alert with <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"alert-link"</span><span class="nt">&gt;</span>an example link<span class="nt">&lt;/a&gt;</span> — check it out!<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"close"</span> <span class="na">data-dismiss=</span><span class="s">"alert"</span> <span class="na">aria-label=</span><span class="s">"Close"</span><span class="nt">&gt;</span>
                        <span class="nt">&lt;span</span> <span class="na">aria-hidden=</span><span class="s">"true"</span><span class="nt">&gt;</span><span class="ni">&amp;times;</span><span class="nt">&lt;/span&gt;</span>
                        <span class="nt">&lt;/button&gt;</span>
                        <span class="nt">&lt;/div&gt;</span></code></pre>
                      </figure>
                    </div>
                  </div>
                </div>
                <h2 id="modern">Modern</h2>
                <p>We love this modern type of alerts. Easy to get the attention without making it look too bad. Use the <code class="highlighter-rouge">.alert-modern</code> modifier class on any <code class="highlighter-rouge">.alert</code> element:</p>
                <h3 id="default-1">Default</h3>
                <div class="docs-example">
                  <ul class="nav nav-pills nav-example" id="tab-example" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active" id="alert-modern-result-tab" data-toggle="tab" href="#alert-modern-result" role="tab" aria-controls="alert-modern-result" aria-selected="true">
                        <i class="far fa-eye mr-2"></i>Result
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="alert-modern-html-tab" data-toggle="tab" href="#alert-modern-html" role="tab" aria-controls="alert-modern-html" aria-selected="false">
                        <i class="far fa-code mr-2"></i>HTML
                      </a>
                    </li>
                  </ul>
                  <div class="tab-content">
                    <!-- Result -->
                    <div id="alert-modern-result" class="tab-pane tab-example-result fade show active" role="tabpanel" aria-labelledby="alert-modern-result-tab">
                      <div class="alert alert-modern alert-warning">
                        <span class="badge badge-warning badge-pill">
                          Hot
                        </span>
                        <span class="alert-content">E-commerce module, new app pages and features</span>
                      </div>
                    </div><!-- Code -->
                    <div id="alert-modern-html" class="tab-pane tab-example-html fade" role="tabpanel" aria-labelledby="alert-modern-html-tab">
                      <figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-modern alert-warning"</span><span class="nt">&gt;</span>

                        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"badge badge-warning badge-pill"</span><span class="nt">&gt;</span>
                        Hot
                        <span class="nt">&lt;/span&gt;</span>
                        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"alert-content"</span><span class="nt">&gt;</span>E-commerce module, new app pages and features<span class="nt">&lt;/span&gt;</span>
                        <span class="nt">&lt;/div&gt;</span></code></pre>
                      </figure>
                    </div>
                  </div>
                </div>
                <h3 id="colors">Colors</h3>
                <p>Same rules as for any alert. Use it in combination with any of the theme’s colors:</p>
                <div class="docs-example">
                  <ul class="nav nav-pills nav-example" id="tab-example" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active" id="alert-modern-success-result-tab" data-toggle="tab" href="#alert-modern-success-result" role="tab" aria-controls="alert-modern-success-result" aria-selected="true">
                        <i class="far fa-eye mr-2"></i>Result
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="alert-modern-success-html-tab" data-toggle="tab" href="#alert-modern-success-html" role="tab" aria-controls="alert-modern-success-html" aria-selected="false">
                        <i class="far fa-code mr-2"></i>HTML
                      </a>
                    </li>
                  </ul>
                  <div class="tab-content">
                    <!-- Result -->
                    <div id="alert-modern-success-result" class="tab-pane tab-example-result fade show active" role="tabpanel" aria-labelledby="alert-modern-success-result-tab">
                      <div class="alert alert-modern alert-success">
                        <span class="badge badge-success badge-pill">
                          New
                        </span>
                        <span class="alert-content">E-commerce module, new app pages and features</span>
                      </div>
                    </div><!-- Code -->
                    <div id="alert-modern-success-html" class="tab-pane tab-example-html fade" role="tabpanel" aria-labelledby="alert-modern-success-html-tab">
                      <figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-modern alert-success"</span><span class="nt">&gt;</span>

                        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"badge badge-success badge-pill"</span><span class="nt">&gt;</span>
                        New
                        <span class="nt">&lt;/span&gt;</span>
                        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"alert-content"</span><span class="nt">&gt;</span>E-commerce module, new app pages and features<span class="nt">&lt;/span&gt;</span>
                        <span class="nt">&lt;/div&gt;</span></code></pre>
                      </figure>
                    </div>
                  </div>
                </div>
                <div class="docs-example">
                  <ul class="nav nav-pills nav-example" id="tab-example" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active" id="alert-modern-colors-result-tab" data-toggle="tab" href="#alert-modern-colors-result" role="tab" aria-controls="alert-modern-colors-result" aria-selected="true">
                        <i class="far fa-eye mr-2"></i>Result
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="alert-modern-colors-html-tab" data-toggle="tab" href="#alert-modern-colors-html" role="tab" aria-controls="alert-modern-colors-html" aria-selected="false">
                        <i class="far fa-code mr-2"></i>HTML
                      </a>
                    </li>
                  </ul>
                  <div class="tab-content">
                    <!-- Result -->
                    <div id="alert-modern-colors-result" class="tab-pane tab-example-result fade show active" role="tabpanel" aria-labelledby="alert-modern-colors-result-tab">
                      <div class="alert alert-modern alert-dark">
                        <span class="badge badge-danger badge-pill">
                          New
                        </span>
                        <span class="alert-content">E-commerce module, new app pages and features</span>
                      </div>
                    </div><!-- Code -->
                    <div id="alert-modern-colors-html" class="tab-pane tab-example-html fade" role="tabpanel" aria-labelledby="alert-modern-colors-html-tab">
                      <figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-modern alert-dark"</span><span class="nt">&gt;</span>

                        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"badge badge-danger badge-pill"</span><span class="nt">&gt;</span>
                        New
                        <span class="nt">&lt;/span&gt;</span>
                        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"alert-content"</span><span class="nt">&gt;</span>E-commerce module, new app pages and features<span class="nt">&lt;/span&gt;</span>
                        <span class="nt">&lt;/div&gt;</span></code></pre>
                      </figure>
                    </div>
                  </div>
                </div>
                <h3 id="outline-1">Outline</h3>
                <div class="docs-example">
                  <ul class="nav nav-pills nav-example" id="tab-example" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active" id="alert-modern-outline-color-result-tab" data-toggle="tab" href="#alert-modern-outline-color-result" role="tab" aria-controls="alert-modern-outline-color-result" aria-selected="true">
                        <i class="far fa-eye mr-2"></i>Result
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="alert-modern-outline-color-html-tab" data-toggle="tab" href="#alert-modern-outline-color-html" role="tab" aria-controls="alert-modern-outline-color-html" aria-selected="false">
                        <i class="far fa-code mr-2"></i>HTML
                      </a>
                    </li>
                  </ul>
                  <div class="tab-content">
                    <!-- Result -->
                    <div id="alert-modern-outline-color-result" class="tab-pane tab-example-result fade show active" role="tabpanel" aria-labelledby="alert-modern-outline-color-result-tab">
                      <div class="alert alert-modern alert-outline-success">
                        <span class="badge badge-success badge-pill">
                          New
                        </span>
                        <span class="alert-content">E-commerce module, new app pages and features</span>
                      </div>
                    </div><!-- Code -->
                    <div id="alert-modern-outline-color-html" class="tab-pane tab-example-html fade" role="tabpanel" aria-labelledby="alert-modern-outline-color-html-tab">
                      <figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-modern alert-outline-success"</span><span class="nt">&gt;</span>

                        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"badge badge-success badge-pill"</span><span class="nt">&gt;</span>
                        New
                        <span class="nt">&lt;/span&gt;</span>
                        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"alert-content"</span><span class="nt">&gt;</span>E-commerce module, new app pages and features<span class="nt">&lt;/span&gt;</span>
                        <span class="nt">&lt;/div&gt;</span></code></pre>
                      </figure>
                    </div>
                  </div>
                </div>
                <div class="docs-example">
                  <ul class="nav nav-pills nav-example" id="tab-example" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active" id="alert-modern-outline-dark-result-tab" data-toggle="tab" href="#alert-modern-outline-dark-result" role="tab" aria-controls="alert-modern-outline-dark-result" aria-selected="true">
                        <i class="far fa-eye mr-2"></i>Result
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="alert-modern-outline-dark-html-tab" data-toggle="tab" href="#alert-modern-outline-dark-html" role="tab" aria-controls="alert-modern-outline-dark-html" aria-selected="false">
                        <i class="far fa-code mr-2"></i>HTML
                      </a>
                    </li>
                  </ul>
                  <div class="tab-content">
                    <!-- Result -->
                    <div id="alert-modern-outline-dark-result" class="tab-pane tab-example-result fade show active" role="tabpanel" aria-labelledby="alert-modern-outline-dark-result-tab">
                      <div class="alert alert-modern alert-outline-dark">
                        <span class="badge badge-danger badge-pill">
                          New
                        </span>
                        <span class="alert-content">E-commerce module, new app pages and features</span>
                      </div>
                    </div><!-- Code -->
                    <div id="alert-modern-outline-dark-html" class="tab-pane tab-example-html fade" role="tabpanel" aria-labelledby="alert-modern-outline-dark-html-tab">
                      <figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-modern alert-outline-dark"</span><span class="nt">&gt;</span>

                        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"badge badge-danger badge-pill"</span><span class="nt">&gt;</span>
                        New
                        <span class="nt">&lt;/span&gt;</span>
                        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"alert-content"</span><span class="nt">&gt;</span>E-commerce module, new app pages and features<span class="nt">&lt;/span&gt;</span>
                        <span class="nt">&lt;/div&gt;</span></code></pre>
                      </figure>
                    </div>
                  </div>
                </div>
                <h2 id="alert-group">Alert group</h2>
                <h3 id="icon">Icon</h3>
                <div class="docs-example">
                  <ul class="nav nav-pills nav-example" id="tab-example" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active" id="alerts-icon-result-tab" data-toggle="tab" href="#alerts-icon-result" role="tab" aria-controls="alerts-icon-result" aria-selected="true">
                        <i class="far fa-eye mr-2"></i>Result
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="alerts-icon-html-tab" data-toggle="tab" href="#alerts-icon-html" role="tab" aria-controls="alerts-icon-html" aria-selected="false">
                        <i class="far fa-code mr-2"></i>HTML
                      </a>
                    </li>
                  </ul>
                  <div class="tab-content">
                    <!-- Result -->
                    <div id="alerts-icon-result" class="tab-pane tab-example-result fade show active" role="tabpanel" aria-labelledby="alerts-icon-result-tab">
                      <div class="alert alert-group alert-warning alert-icon" role="alert">
                        <div class="alert-group-prepend">
                          <span class="alert-group-icon text-">
                            <i class="far fa-thumbs-up"></i>
                          </span>
                        </div>
                        <div class="alert-content">
                          <strong>Heads up!</strong> This is a info alert with <a href="#" class="alert-link">an example link</a> — check it out!
                        </div>
                      </div>
                      <div class="alert alert-group alert-info alert-dismissible fade show alert-icon" role="alert">
                        <div class="alert-group-prepend">
                          <span class="alert-group-icon text-">
                            <i class="far fa-thumbs-up"></i>
                          </span>
                        </div>
                        <div class="alert-content">
                          <strong>Heads up!</strong> This is a info alert with <a href="#" class="alert-link">an example link</a> — check it out!
                        </div>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="alert alert-group alert-outline-danger alert-dismissible fade show alert-icon" role="alert">
                        <div class="alert-group-prepend">
                          <span class="alert-group-icon text-">
                            <i class="far fa-thumbs-up"></i>
                          </span>
                        </div>
                        <div class="alert-content">
                          <strong>Heads up!</strong> This is a info alert with <a href="#" class="alert-link">an example link</a> — check it out!
                        </div>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                    </div><!-- Code -->
                    <div id="alerts-icon-html" class="tab-pane tab-example-html fade" role="tabpanel" aria-labelledby="alerts-icon-html-tab">
                      <figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-group alert-warning alert-icon"</span> <span class="na">role=</span><span class="s">"alert"</span><span class="nt">&gt;</span>
                        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert-group-prepend"</span><span class="nt">&gt;</span>
                        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"alert-group-icon text-"</span><span class="nt">&gt;</span>
                        <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"far fa-thumbs-up"</span><span class="nt">&gt;&lt;/i&gt;</span>
                        <span class="nt">&lt;/span&gt;</span>
                        <span class="nt">&lt;/div&gt;</span>
                        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert-content"</span><span class="nt">&gt;</span>
                        <span class="nt">&lt;strong&gt;</span>Heads up!<span class="nt">&lt;/strong&gt;</span> This is a info alert with <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"alert-link"</span><span class="nt">&gt;</span>an example link<span class="nt">&lt;/a&gt;</span> — check it out!
                        <span class="nt">&lt;/div&gt;</span>

                        <span class="nt">&lt;/div&gt;</span>
                        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-group alert-info alert-dismissible fade show alert-icon"</span> <span class="na">role=</span><span class="s">"alert"</span><span class="nt">&gt;</span>
                        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert-group-prepend"</span><span class="nt">&gt;</span>
                        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"alert-group-icon text-"</span><span class="nt">&gt;</span>
                        <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"far fa-thumbs-up"</span><span class="nt">&gt;&lt;/i&gt;</span>
                        <span class="nt">&lt;/span&gt;</span>
                        <span class="nt">&lt;/div&gt;</span>
                        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert-content"</span><span class="nt">&gt;</span>
                        <span class="nt">&lt;strong&gt;</span>Heads up!<span class="nt">&lt;/strong&gt;</span> This is a info alert with <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"alert-link"</span><span class="nt">&gt;</span>an example link<span class="nt">&lt;/a&gt;</span> — check it out!
                        <span class="nt">&lt;/div&gt;</span>
                        <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"close"</span> <span class="na">data-dismiss=</span><span class="s">"alert"</span> <span class="na">aria-label=</span><span class="s">"Close"</span><span class="nt">&gt;</span>
                        <span class="nt">&lt;span</span> <span class="na">aria-hidden=</span><span class="s">"true"</span><span class="nt">&gt;</span><span class="ni">&amp;times;</span><span class="nt">&lt;/span&gt;</span>
                        <span class="nt">&lt;/button&gt;</span>
                        <span class="nt">&lt;/div&gt;</span>
                        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-group alert-outline-danger alert-dismissible fade show alert-icon"</span> <span class="na">role=</span><span class="s">"alert"</span><span class="nt">&gt;</span>
                        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert-group-prepend"</span><span class="nt">&gt;</span>
                        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"alert-group-icon text-"</span><span class="nt">&gt;</span>
                        <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"far fa-thumbs-up"</span><span class="nt">&gt;&lt;/i&gt;</span>
                        <span class="nt">&lt;/span&gt;</span>
                        <span class="nt">&lt;/div&gt;</span>
                        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert-content"</span><span class="nt">&gt;</span>
                        <span class="nt">&lt;strong&gt;</span>Heads up!<span class="nt">&lt;/strong&gt;</span> This is a info alert with <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"alert-link"</span><span class="nt">&gt;</span>an example link<span class="nt">&lt;/a&gt;</span> — check it out!
                        <span class="nt">&lt;/div&gt;</span>
                        <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"close"</span> <span class="na">data-dismiss=</span><span class="s">"alert"</span> <span class="na">aria-label=</span><span class="s">"Close"</span><span class="nt">&gt;</span>
                        <span class="nt">&lt;span</span> <span class="na">aria-hidden=</span><span class="s">"true"</span><span class="nt">&gt;</span><span class="ni">&amp;times;</span><span class="nt">&lt;/span&gt;</span>
                        <span class="nt">&lt;/button&gt;</span>
                        <span class="nt">&lt;/div&gt;</span></code></pre>
                      </figure>
                    </div>
                  </div>
                </div>
                <h3 id="action">Action</h3>
                <div class="docs-example">
                  <ul class="nav nav-pills nav-example" id="tab-example" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active" id="alerts-action-result-tab" data-toggle="tab" href="#alerts-action-result" role="tab" aria-controls="alerts-action-result" aria-selected="true">
                        <i class="far fa-eye mr-2"></i>Result
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="alerts-action-html-tab" data-toggle="tab" href="#alerts-action-html" role="tab" aria-controls="alerts-action-html" aria-selected="false">
                        <i class="far fa-code mr-2"></i>HTML
                      </a>
                    </li>
                  </ul>
                  <div class="tab-content">
                    <!-- Result -->
                    <div id="alerts-action-result" class="tab-pane tab-example-result fade show active" role="tabpanel" aria-labelledby="alerts-action-result-tab">
                      <div class="alert alert-group alert-warning alert-icon" role="alert">
                        <div class="alert-group-prepend">
                          <span class="alert-group-icon text-">
                            <i class="far fa-thumbs-up"></i>
                          </span>
                        </div>
                        <div class="alert-content">
                          <strong>Heads up!</strong> This is a info alert with <a href="#" class="alert-link">an example link</a> — check it out!
                        </div>
                        <div class="alert-action">
                          <button type="button" class="btn btn-warning" aria-label="Action Label">Action</button>
                        </div>
                      </div>
                      <div class="alert alert-group alert-info alert-dismissible fade show alert-icon" role="alert">
                        <div class="alert-group-prepend">
                          <span class="alert-group-icon text-">
                            <i class="far fa-thumbs-up"></i>
                          </span>
                        </div>
                        <div class="alert-content">
                          <strong>Heads up!</strong> This is a info alert with <a href="#" class="alert-link">an example link</a> — check it out!
                        </div>
                        <div class="alert-action">
                          <button type="button" class="btn btn-info" aria-label="Action Label">Action</button>
                        </div><button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                    </div><!-- Code -->
                    <div id="alerts-action-html" class="tab-pane tab-example-html fade" role="tabpanel" aria-labelledby="alerts-action-html-tab">
                      <figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-group alert-warning alert-icon"</span> <span class="na">role=</span><span class="s">"alert"</span><span class="nt">&gt;</span>
                        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert-group-prepend"</span><span class="nt">&gt;</span>
                        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"alert-group-icon text-"</span><span class="nt">&gt;</span>
                        <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"far fa-thumbs-up"</span><span class="nt">&gt;&lt;/i&gt;</span>
                        <span class="nt">&lt;/span&gt;</span>
                        <span class="nt">&lt;/div&gt;</span>
                        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert-content"</span><span class="nt">&gt;</span>
                        <span class="nt">&lt;strong&gt;</span>Heads up!<span class="nt">&lt;/strong&gt;</span> This is a info alert with <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"alert-link"</span><span class="nt">&gt;</span>an example link<span class="nt">&lt;/a&gt;</span> — check it out!
                        <span class="nt">&lt;/div&gt;</span>
                        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert-action"</span><span class="nt">&gt;</span>
                        <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-warning"</span> <span class="na">aria-label=</span><span class="s">"Action Label"</span><span class="nt">&gt;</span>Action<span class="nt">&lt;/button&gt;</span>
                        <span class="nt">&lt;/div&gt;</span>
                        <span class="nt">&lt;/div&gt;</span>
                        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-group alert-info alert-dismissible fade show alert-icon"</span> <span class="na">role=</span><span class="s">"alert"</span><span class="nt">&gt;</span>
                        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert-group-prepend"</span><span class="nt">&gt;</span>
                        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"alert-group-icon text-"</span><span class="nt">&gt;</span>
                        <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"far fa-thumbs-up"</span><span class="nt">&gt;&lt;/i&gt;</span>
                        <span class="nt">&lt;/span&gt;</span>
                        <span class="nt">&lt;/div&gt;</span>
                        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert-content"</span><span class="nt">&gt;</span>
                        <span class="nt">&lt;strong&gt;</span>Heads up!<span class="nt">&lt;/strong&gt;</span> This is a info alert with <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"alert-link"</span><span class="nt">&gt;</span>an example link<span class="nt">&lt;/a&gt;</span> — check it out!
                        <span class="nt">&lt;/div&gt;</span>
                        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert-action"</span><span class="nt">&gt;</span>
                        <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-info"</span> <span class="na">aria-label=</span><span class="s">"Action Label"</span><span class="nt">&gt;</span>Action<span class="nt">&lt;/button&gt;</span>
                        <span class="nt">&lt;/div&gt;&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"close"</span> <span class="na">data-dismiss=</span><span class="s">"alert"</span> <span class="na">aria-label=</span><span class="s">"Close"</span><span class="nt">&gt;</span>
                        <span class="nt">&lt;span</span> <span class="na">aria-hidden=</span><span class="s">"true"</span><span class="nt">&gt;</span><span class="ni">&amp;times;</span><span class="nt">&lt;/span&gt;</span>
                        <span class="nt">&lt;/button&gt;</span>
                        <span class="nt">&lt;/div&gt;</span></code></pre>
                      </figure>
                    </div>
                  </div>
                </div>
                <h2 id="content">Content</h2>
                <p>Alerts are very flexible and allow you to use different types of contents:</p>
                <h3 id="multiple-paragraphs">Multiple paragraphs</h3>
                <p>You can put multiple paragraphs of text in a flash message—the last paragraph’s bottom margin will be automatically override.</p>
                <div class="docs-example">
                  <ul class="nav nav-pills nav-example" id="tab-example" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active" id="alert-paragraphs-result-tab" data-toggle="tab" href="#alert-paragraphs-result" role="tab" aria-controls="alert-paragraphs-result" aria-selected="true">
                        <i class="far fa-eye mr-2"></i>Result
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="alert-paragraphs-html-tab" data-toggle="tab" href="#alert-paragraphs-html" role="tab" aria-controls="alert-paragraphs-html" aria-selected="false">
                        <i class="far fa-code mr-2"></i>HTML
                      </a>
                    </li>
                  </ul>
                  <div class="tab-content">
                    <!-- Result -->
                    <div id="alert-paragraphs-result" class="tab-pane tab-example-result fade show active" role="tabpanel" aria-labelledby="alert-paragraphs-result-tab">
                      <div class="alert alert-warning" role="alert">
                        <p>
                          <strong>Heads up!</strong> This is a info alert with <a href="#" class="alert-link">an example link</a> — check it out!
                        </p>
                        <p>Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
                      </div>
                    </div><!-- Code -->
                    <div id="alert-paragraphs-html" class="tab-pane tab-example-html fade" role="tabpanel" aria-labelledby="alert-paragraphs-html-tab">
                      <figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-warning"</span> <span class="na">role=</span><span class="s">"alert"</span><span class="nt">&gt;</span>
                        <span class="nt">&lt;p&gt;</span>
                        <span class="nt">&lt;strong&gt;</span>Heads up!<span class="nt">&lt;/strong&gt;</span> This is a info alert with <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"alert-link"</span><span class="nt">&gt;</span>an example link<span class="nt">&lt;/a&gt;</span> — check it out!
                        <span class="nt">&lt;/p&gt;</span>
                        <span class="nt">&lt;p&gt;</span>Whenever you need to, be sure to use margin utilities to keep things nice and tidy.<span class="nt">&lt;/p&gt;</span>
                        <span class="nt">&lt;/div&gt;</span></code></pre>
                      </figure>
                    </div>
                  </div>
                </div>
                <h3 id="large-content">Large content</h3>
                <p>Alerts can also contain additional HTML elements like headings, paragraphs and dividers.</p>
                <div class="docs-example">
                  <ul class="nav nav-pills nav-example" id="tab-example" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active" id="alert-large-content-result-tab" data-toggle="tab" href="#alert-large-content-result" role="tab" aria-controls="alert-large-content-result" aria-selected="true">
                        <i class="far fa-eye mr-2"></i>Result
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="alert-large-content-html-tab" data-toggle="tab" href="#alert-large-content-html" role="tab" aria-controls="alert-large-content-html" aria-selected="false">
                        <i class="far fa-code mr-2"></i>HTML
                      </a>
                    </li>
                  </ul>
                  <div class="tab-content">
                    <!-- Result -->
                    <div id="alert-large-content-result" class="tab-pane tab-example-result fade show active" role="tabpanel" aria-labelledby="alert-large-content-result-tab">
                      <div class="alert alert-warning" role="alert">
                        <h5 class="alert-heading">Well done!</h5>
                        <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
                        <hr />
                        <p>Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
                        <a href="#" class="btn btn-sm btn-warning">Ok, Got it!</a>
                      </div>
                    </div><!-- Code -->
                    <div id="alert-large-content-html" class="tab-pane tab-example-html fade" role="tabpanel" aria-labelledby="alert-large-content-html-tab">
                      <figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-warning"</span> <span class="na">role=</span><span class="s">"alert"</span><span class="nt">&gt;</span>
                        <span class="nt">&lt;h5</span> <span class="na">class=</span><span class="s">"alert-heading"</span><span class="nt">&gt;</span>Well done!<span class="nt">&lt;/h5&gt;</span>
                        <span class="nt">&lt;p&gt;</span>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.<span class="nt">&lt;/p&gt;</span>
                        <span class="nt">&lt;hr&gt;</span>
                        <span class="nt">&lt;p&gt;</span>Whenever you need to, be sure to use margin utilities to keep things nice and tidy.<span class="nt">&lt;/p&gt;</span>
                        <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"btn btn-sm btn-warning"</span><span class="nt">&gt;</span>Ok, Got it!<span class="nt">&lt;/a&gt;</span>
                        <span class="nt">&lt;/div&gt;</span></code></pre>
                      </figure>
                    </div>
                  </div>
                </div>
                <h2 id="colors-1">Colors</h2>
                <h3 id="variations">Variations</h3>
                <p>Alerts are available for any length of text, as well as an optional dismiss button. For proper styling, use one of the eight required contextual classes (e.g: <code class="highlighter-rouge">.alert-success</code>).</p>
                <div class="docs-example">
                  <ul class="nav nav-pills nav-example" id="tab-example" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active" id="alert-colors-result-tab" data-toggle="tab" href="#alert-colors-result" role="tab" aria-controls="alert-colors-result" aria-selected="true">
                        <i class="far fa-eye mr-2"></i>Result
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="alert-colors-html-tab" data-toggle="tab" href="#alert-colors-html" role="tab" aria-controls="alert-colors-html" aria-selected="false">
                        <i class="far fa-code mr-2"></i>HTML
                      </a>
                    </li>
                  </ul>
                  <div class="tab-content">
                    <!-- Result -->
                    <div id="alert-colors-result" class="tab-pane tab-example-result fade show active" role="tabpanel" aria-labelledby="alert-colors-result-tab">
                      <div class="alert alert-primary" role="alert">
                        <strong>Heads up!</strong> This is a info alert with <a href="#" class="alert-link">an example link</a> — check it out!
                      </div>
                      <div class="alert alert-secondary" role="alert">
                        <strong>Heads up!</strong> This is a info alert with <a href="#" class="alert-link">an example link</a> — check it out!
                      </div>
                      <div class="alert alert-success" role="alert">
                        <strong>Heads up!</strong> This is a info alert with <a href="#" class="alert-link">an example link</a> — check it out!
                      </div>
                      <div class="alert alert-danger" role="alert">
                        <strong>Heads up!</strong> This is a info alert with <a href="#" class="alert-link">an example link</a> — check it out!
                      </div>
                      <div class="alert alert-warning" role="alert">
                        <strong>Heads up!</strong> This is a info alert with <a href="#" class="alert-link">an example link</a> — check it out!
                      </div>
                      <div class="alert alert-info" role="alert">
                        <strong>Heads up!</strong> This is a info alert with <a href="#" class="alert-link">an example link</a> — check it out!
                      </div>
                      <div class="alert alert-dark" role="alert">
                        <strong>Heads up!</strong> This is a info alert with <a href="#" class="alert-link">an example link</a> — check it out!
                      </div>
                    </div><!-- Code -->
                    <div id="alert-colors-html" class="tab-pane tab-example-html fade" role="tabpanel" aria-labelledby="alert-colors-html-tab">
                      <figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-primary"</span> <span class="na">role=</span><span class="s">"alert"</span><span class="nt">&gt;</span>
                        <span class="nt">&lt;strong&gt;</span>Heads up!<span class="nt">&lt;/strong&gt;</span> This is a info alert with <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"alert-link"</span><span class="nt">&gt;</span>an example link<span class="nt">&lt;/a&gt;</span> — check it out!
                        <span class="nt">&lt;/div&gt;</span>

                        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-secondary"</span> <span class="na">role=</span><span class="s">"alert"</span><span class="nt">&gt;</span>
                        <span class="nt">&lt;strong&gt;</span>Heads up!<span class="nt">&lt;/strong&gt;</span> This is a info alert with <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"alert-link"</span><span class="nt">&gt;</span>an example link<span class="nt">&lt;/a&gt;</span> — check it out!
                        <span class="nt">&lt;/div&gt;</span>

                        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-success"</span> <span class="na">role=</span><span class="s">"alert"</span><span class="nt">&gt;</span>
                        <span class="nt">&lt;strong&gt;</span>Heads up!<span class="nt">&lt;/strong&gt;</span> This is a info alert with <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"alert-link"</span><span class="nt">&gt;</span>an example link<span class="nt">&lt;/a&gt;</span> — check it out!
                        <span class="nt">&lt;/div&gt;</span>

                        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-danger"</span> <span class="na">role=</span><span class="s">"alert"</span><span class="nt">&gt;</span>
                        <span class="nt">&lt;strong&gt;</span>Heads up!<span class="nt">&lt;/strong&gt;</span> This is a info alert with <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"alert-link"</span><span class="nt">&gt;</span>an example link<span class="nt">&lt;/a&gt;</span> — check it out!
                        <span class="nt">&lt;/div&gt;</span>

                        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-warning"</span> <span class="na">role=</span><span class="s">"alert"</span><span class="nt">&gt;</span>
                        <span class="nt">&lt;strong&gt;</span>Heads up!<span class="nt">&lt;/strong&gt;</span> This is a info alert with <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"alert-link"</span><span class="nt">&gt;</span>an example link<span class="nt">&lt;/a&gt;</span> — check it out!
                        <span class="nt">&lt;/div&gt;</span>

                        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-info"</span> <span class="na">role=</span><span class="s">"alert"</span><span class="nt">&gt;</span>
                        <span class="nt">&lt;strong&gt;</span>Heads up!<span class="nt">&lt;/strong&gt;</span> This is a info alert with <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"alert-link"</span><span class="nt">&gt;</span>an example link<span class="nt">&lt;/a&gt;</span> — check it out!
                        <span class="nt">&lt;/div&gt;</span>

                        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-dark"</span> <span class="na">role=</span><span class="s">"alert"</span><span class="nt">&gt;</span>
                        <span class="nt">&lt;strong&gt;</span>Heads up!<span class="nt">&lt;/strong&gt;</span> This is a info alert with <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"alert-link"</span><span class="nt">&gt;</span>an example link<span class="nt">&lt;/a&gt;</span> — check it out!
                        <span class="nt">&lt;/div&gt;</span></code></pre>
                      </figure>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-xl-3 border-left">
              <div class="h-100 p-4">
                <div data-toggle="sticky" data-sticky-offset="120">
                  <h6 class="mb-3">Summary</h6>
                  <ul class="section-nav">
                    <li class="toc-entry toc-h2"><a href="#examples">Examples</a>
                      <ul>
                        <li class="toc-entry toc-h3"><a href="#default">Default</a></li>
                        <li class="toc-entry toc-h3"><a href="#flushed-alert">Flushed alert</a></li>
                        <li class="toc-entry toc-h3"><a href="#outline">Outline</a></li>
                        <li class="toc-entry toc-h3"><a href="#multiple-alerts">Multiple alerts</a></li>
                        <li class="toc-entry toc-h3"><a href="#shadow">Shadow</a></li>
                        <li class="toc-entry toc-h3"><a href="#dismissible">Dismissible</a></li>
                      </ul>
                    </li>
                    <li class="toc-entry toc-h2"><a href="#modern">Modern</a>
                      <ul>
                        <li class="toc-entry toc-h3"><a href="#default-1">Default</a></li>
                        <li class="toc-entry toc-h3"><a href="#colors">Colors</a></li>
                        <li class="toc-entry toc-h3"><a href="#outline-1">Outline</a></li>
                      </ul>
                    </li>
                    <li class="toc-entry toc-h2"><a href="#alert-group">Alert group</a>
                      <ul>
                        <li class="toc-entry toc-h3"><a href="#icon">Icon</a></li>
                        <li class="toc-entry toc-h3"><a href="#action">Action</a></li>
                      </ul>
                    </li>
                    <li class="toc-entry toc-h2"><a href="#content">Content</a>
                      <ul>
                        <li class="toc-entry toc-h3"><a href="#multiple-paragraphs">Multiple paragraphs</a></li>
                        <li class="toc-entry toc-h3"><a href="#large-content">Large content</a></li>
                      </ul>
                    </li>
                    <li class="toc-entry toc-h2"><a href="#colors-1">Colors</a>
                      <ul>
                        <li class="toc-entry toc-h3"><a href="#variations">Variations</a></li>
                      </ul>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <script src="https://developermen.com/assets/libs/purpose/js/purpose.core.js"></script>
      <script src="https://developermen.com/assets/libs/highlightjs/highlight.pack.min.js"></script>
      <script src="https://developermen.com/assets/js/clipboard.min.js"></script>
      <script src="https://developermen.com/assets/libs/purpose/js/purpose.js"></script>
      <script src="https://developermen.com/assets/libs/purpose/js/demo.js"></script>
    </body>
    </html>
