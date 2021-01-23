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
      <div class="main-content"><!-- Main Content   -->
        <div class="container-fluid"><!--Container-->
          <div class="row justify-content-between"><!--Row justify-->
            <div class="col-lg-9 col-xl-8 offset-xl-1">
              <div class="docs-content"><!--Doc´s content-->
                <div class="docs-page-title">
                  <h2>Breakpoints</h2>
                </div>
                <p class="text-muted docs-lead">Purpose has a handful of media queries to create sensible breakpoints for our layouts and interfaces.</p>
                <hr class="divider divider-fade" />
                <h2 id="containers">Containers</h2>
                <p>Containers are the most basic layout element in Bootstrap and are <strong>required when using our default grid system</strong>. Choose from a responsive, fixed-width container (meaning its <code class="highlighter-rouge">max-width</code> changes at each breakpoint) or fluid-width (meaning it’s <code class="highlighter-rouge">100%</code> wide all the time).</p>
                <p>While containers <em>can</em> be nested, most layouts do not require a nested container.</p>
                <div class="docs-example">
                  <div class="docs-example-container">
                    <div class="docs-example-container-header"></div>
                    <div class="docs-example-container-sidebar"></div>
                    <div class="docs-example-container-body"></div>
                  </div>
                </div>
                <div class="docs-example">
                  <figure class="highlight"><pre><code class="language-plaintext" data-lang="plaintext">&lt;div class="container"&gt;
      &lt;!-- Content here --&gt;
    &lt;/div&gt;</code></pre>
                  </figure>
                </div>
                <p>Use <code class="highlighter-rouge">.container-fluid</code> for a full width container, spanning the entire width of the viewport.</p>
                <div class="docs-example">
                  <div class="docs-example-container docs-example-container-fluid">
                    <div class="docs-example-container-header"></div>
                    <div class="docs-example-container-sidebar"></div>
                    <div class="docs-example-container-body"></div>
                  </div>
                </div>
                <div class="docs-example">
                  <figure class="highlight"><pre><code class="language-plaintext" data-lang="plaintext">&lt;div class="container-fluid"&gt;
        ...
    &lt;/div&gt;</code></pre>
                  </figure>
                </div>
                <h2 id="z-index">Z-index</h2>
                <p>Several Bootstrap components utilize <code class="highlighter-rouge">z-index</code>, the CSS property that helps control layout by providing a third axis to arrange content. We utilize a default z-index scale in Bootstrap that’s been designed to properly layer navigation, tooltips and popovers, modals, and more.</p>
                <p>These higher values start at an arbitrary number, high and specific enough to ideally avoid conflicts. We need a standard set of these across our layered components—tooltips, popovers, navbars, dropdowns, modals—so we can be reasonably consistent in the behaviors. There’s no reason we couldn’t have used <code class="highlighter-rouge">100</code>+ or <code class="highlighter-rouge">500</code>+.</p>
                <p>We don’t encourage customization of these individual values; should you change one, you likely need to change them all.</p>
                <div class="docs-example">
                  <figure class="highlight"><pre><code class="language-scss" data-lang="scss"><span class="nv">$zindex-dropdown</span><span class="p">:</span>          <span class="m">1000</span> <span class="o">!</span><span class="nb">default</span><span class="p">;</span>
    <span class="nv">$zindex-sticky</span><span class="p">:</span>            <span class="m">1020</span> <span class="o">!</span><span class="nb">default</span><span class="p">;</span>
    <span class="nv">$zindex-fixed</span><span class="p">:</span>             <span class="m">1030</span> <span class="o">!</span><span class="nb">default</span><span class="p">;</span>
    <span class="nv">$zindex-modal-backdrop</span><span class="p">:</span>    <span class="m">1040</span> <span class="o">!</span><span class="nb">default</span><span class="p">;</span>
    <span class="nv">$zindex-modal</span><span class="p">:</span>             <span class="m">1050</span> <span class="o">!</span><span class="nb">default</span><span class="p">;</span>
    <span class="nv">$zindex-popover</span><span class="p">:</span>           <span class="m">1060</span> <span class="o">!</span><span class="nb">default</span><span class="p">;</span>
    <span class="nv">$zindex-tooltip</span><span class="p">:</span>           <span class="m">1070</span> <span class="o">!</span><span class="nb">default</span><span class="p">;</span></code></pre>
                  </figure>
                </div>
                <p>To handle overlapping borders within components (e.g., buttons and inputs in input groups), we use low single digit <code class="highlighter-rouge">z-index</code> values of <code class="highlighter-rouge">1</code>, <code class="highlighter-rouge">2</code>, and <code class="highlighter-rouge">3</code> for default, hover, and active states. On hover/focus/active, we bring a particular element to the forefront with a higher <code class="highlighter-rouge">z-index</code> value to show their border over the sibling elements.</p>
                <h2 id="responsive-breakpoints">Responsive breakpoints</h2>
                <p>Since Bootstrap is developed to be mobile first, we use a handful of <a href="https://developer.mozilla.org/en-US/docs/Web/CSS/Media_Queries/Using_media_queries">media queries</a> to create sensible breakpoints for our layouts and interfaces. These breakpoints are mostly based on minimum viewport widths and allow us to scale up elements as the viewport changes.</p>
                <p>Bootstrap primarily uses the following media query ranges—or breakpoints—in our source Sass files for our layout, grid system, and components.</p>
                <div class="docs-example">
                  <figure class="highlight"><pre><code class="language-scss" data-lang="scss"><span class="c1">// Extra small devices (portrait phones, less than 576px)</span>
    <span class="c1">// No media query for `xs` since this is the default in Bootstrap</span>

    <span class="c1">// Small devices (landscape phones, 576px and up)</span>
    <span class="k">@media</span> <span class="p">(</span><span class="n">min-width</span><span class="o">:</span> <span class="m">576px</span><span class="p">)</span> <span class="p">{</span> <span class="nc">...</span> <span class="p">}</span>

    <span class="c1">// Medium devices (tablets, 768px and up)</span>
    <span class="k">@media</span> <span class="p">(</span><span class="n">min-width</span><span class="o">:</span> <span class="m">768px</span><span class="p">)</span> <span class="p">{</span> <span class="nc">...</span> <span class="p">}</span>

    <span class="c1">// Large devices (desktops, 992px and up)</span>
    <span class="k">@media</span> <span class="p">(</span><span class="n">min-width</span><span class="o">:</span> <span class="m">992px</span><span class="p">)</span> <span class="p">{</span> <span class="nc">...</span> <span class="p">}</span>

    <span class="c1">// Extra large devices (large desktops, 1200px and up)</span>
    <span class="k">@media</span> <span class="p">(</span><span class="n">min-width</span><span class="o">:</span> <span class="m">1200px</span><span class="p">)</span> <span class="p">{</span> <span class="nc">...</span> <span class="p">}</span></code></pre>
                  </figure>
                </div>
                <p>Since we write our source CSS in Sass, all our media queries are available via Sass mixins:</p>
                <div class="docs-example">
                  <figure class="highlight"><pre><code class="language-scss" data-lang="scss"><span class="c1">// No media query necessary for xs breakpoint as it's effectively `@media (min-width: 0) { ... }`</span>
    <span class="k">@include</span> <span class="nd">media-breakpoint-up</span><span class="p">(</span><span class="n">sm</span><span class="p">)</span> <span class="p">{</span> <span class="nc">...</span> <span class="p">}</span>
    <span class="k">@include</span> <span class="nd">media-breakpoint-up</span><span class="p">(</span><span class="n">md</span><span class="p">)</span> <span class="p">{</span> <span class="nc">...</span> <span class="p">}</span>
    <span class="k">@include</span> <span class="nd">media-breakpoint-up</span><span class="p">(</span><span class="n">lg</span><span class="p">)</span> <span class="p">{</span> <span class="nc">...</span> <span class="p">}</span>
    <span class="k">@include</span> <span class="nd">media-breakpoint-up</span><span class="p">(</span><span class="n">xl</span><span class="p">)</span> <span class="p">{</span> <span class="nc">...</span> <span class="p">}</span>

    <span class="c1">// Example: Hide starting at `min-width: 0`, and then show at the `sm` breakpoint</span>
    <span class="nc">.custom-class</span> <span class="p">{</span>
        <span class="nl">display</span><span class="p">:</span> <span class="nb">none</span><span class="p">;</span>
    <span class="p">}</span>
    <span class="k">@include</span> <span class="nd">media-breakpoint-up</span><span class="p">(</span><span class="n">sm</span><span class="p">)</span> <span class="p">{</span>
        <span class="nc">.custom-class</span> <span class="p">{</span>
            <span class="nl">display</span><span class="p">:</span> <span class="nb">block</span><span class="p">;</span>
        <span class="p">}</span>
    <span class="p">}</span></code></pre>
                  </figure>
                </div>
                <p>We occasionally use media queries that go in the other direction (the given screen size <em>or smaller</em>):</p>
                <div class="docs-example">
                  <figure class="highlight"><pre><code class="language-scss" data-lang="scss"><span class="c1">// Extra small devices (portrait phones, less than 576px)</span>
    <span class="k">@media</span> <span class="p">(</span><span class="n">max-width</span><span class="o">:</span> <span class="m">575</span><span class="mi">.98px</span><span class="p">)</span> <span class="p">{</span> <span class="nc">...</span> <span class="p">}</span>

    <span class="c1">// Small devices (landscape phones, less than 768px)</span>
    <span class="k">@media</span> <span class="p">(</span><span class="n">max-width</span><span class="o">:</span> <span class="m">767</span><span class="mi">.98px</span><span class="p">)</span> <span class="p">{</span> <span class="nc">...</span> <span class="p">}</span>

    <span class="c1">// Medium devices (tablets, less than 992px)</span>
    <span class="k">@media</span> <span class="p">(</span><span class="n">max-width</span><span class="o">:</span> <span class="m">991</span><span class="mi">.98px</span><span class="p">)</span> <span class="p">{</span> <span class="nc">...</span> <span class="p">}</span>

    <span class="c1">// Large devices (desktops, less than 1200px)</span>
    <span class="k">@media</span> <span class="p">(</span><span class="n">max-width</span><span class="o">:</span> <span class="m">1199</span><span class="mi">.98px</span><span class="p">)</span> <span class="p">{</span> <span class="nc">...</span> <span class="p">}</span>

    <span class="c1">// Extra large devices (large desktops)</span>
    <span class="c1">// No media query since the extra-large breakpoint has no upper bound on its width</span></code></pre>
                  </figure>
                </div>
                <p>Once again, these media queries are also available via Sass mixins:</p>
                <div class="docs-example">
                  <figure class="highlight"><pre><code class="language-scss" data-lang="scss"><span class="k">@include</span> <span class="nd">media-breakpoint-down</span><span class="p">(</span><span class="n">xs</span><span class="p">)</span> <span class="p">{</span> <span class="nc">...</span> <span class="p">}</span>
    <span class="k">@include</span> <span class="nd">media-breakpoint-down</span><span class="p">(</span><span class="n">sm</span><span class="p">)</span> <span class="p">{</span> <span class="nc">...</span> <span class="p">}</span>
    <span class="k">@include</span> <span class="nd">media-breakpoint-down</span><span class="p">(</span><span class="n">md</span><span class="p">)</span> <span class="p">{</span> <span class="nc">...</span> <span class="p">}</span>
    <span class="k">@include</span> <span class="nd">media-breakpoint-down</span><span class="p">(</span><span class="n">lg</span><span class="p">)</span> <span class="p">{</span> <span class="nc">...</span> <span class="p">}</span>
    <span class="c1">// No media query necessary for xl breakpoint as it has no upper bound on its width</span>

    <span class="c1">// Example: Style from medium breakpoint and down</span>
    <span class="k">@include</span> <span class="nd">media-breakpoint-down</span><span class="p">(</span><span class="n">md</span><span class="p">)</span> <span class="p">{</span>
        <span class="nc">.custom-class</span> <span class="p">{</span>
            <span class="nl">display</span><span class="p">:</span> <span class="nb">block</span><span class="p">;</span>
        <span class="p">}</span>
    <span class="p">}</span></code></pre>
                  </figure>
                </div>
                <p>There are also media queries and mixins for targeting a single segment of screen sizes using the minimum and maximum breakpoint widths.</p>
                <div class="docs-example">
                  <figure class="highlight"><pre><code class="language-scss" data-lang="scss"><span class="c1">// Extra small devices (portrait phones, less than 576px)</span>
    <span class="k">@media</span> <span class="p">(</span><span class="n">max-width</span><span class="o">:</span> <span class="m">575</span><span class="mi">.98px</span><span class="p">)</span> <span class="p">{</span> <span class="nc">...</span> <span class="p">}</span>

    <span class="c1">// Small devices (landscape phones, 576px and up)</span>
    <span class="k">@media</span> <span class="p">(</span><span class="n">min-width</span><span class="o">:</span> <span class="m">576px</span><span class="p">)</span> <span class="nf">and</span> <span class="p">(</span><span class="n">max-width</span><span class="o">:</span> <span class="m">767</span><span class="mi">.98px</span><span class="p">)</span> <span class="p">{</span> <span class="nc">...</span> <span class="p">}</span>

    <span class="c1">// Medium devices (tablets, 768px and up)</span>
    <span class="k">@media</span> <span class="p">(</span><span class="n">min-width</span><span class="o">:</span> <span class="m">768px</span><span class="p">)</span> <span class="nf">and</span> <span class="p">(</span><span class="n">max-width</span><span class="o">:</span> <span class="m">991</span><span class="mi">.98px</span><span class="p">)</span> <span class="p">{</span> <span class="nc">...</span> <span class="p">}</span>

    <span class="c1">// Large devices (desktops, 992px and up)</span>
    <span class="k">@media</span> <span class="p">(</span><span class="n">min-width</span><span class="o">:</span> <span class="m">992px</span><span class="p">)</span> <span class="nf">and</span> <span class="p">(</span><span class="n">max-width</span><span class="o">:</span> <span class="m">1199</span><span class="mi">.98px</span><span class="p">)</span> <span class="p">{</span> <span class="nc">...</span> <span class="p">}</span>

    <span class="c1">// Extra large devices (large desktops, 1200px and up)</span>
    <span class="k">@media</span> <span class="p">(</span><span class="n">min-width</span><span class="o">:</span> <span class="m">1200px</span><span class="p">)</span> <span class="p">{</span> <span class="nc">...</span> <span class="p">}</span></code></pre>
                  </figure>
                </div>
                <p>These media queries are also available via Sass mixins:</p>
                <div class="docs-example">
                  <figure class="highlight"><pre><code class="language-scss" data-lang="scss"><span class="k">@include</span> <span class="nd">media-breakpoint-only</span><span class="p">(</span><span class="n">xs</span><span class="p">)</span> <span class="p">{</span> <span class="nc">...</span> <span class="p">}</span>
    <span class="k">@include</span> <span class="nd">media-breakpoint-only</span><span class="p">(</span><span class="n">sm</span><span class="p">)</span> <span class="p">{</span> <span class="nc">...</span> <span class="p">}</span>
    <span class="k">@include</span> <span class="nd">media-breakpoint-only</span><span class="p">(</span><span class="n">md</span><span class="p">)</span> <span class="p">{</span> <span class="nc">...</span> <span class="p">}</span>
    <span class="k">@include</span> <span class="nd">media-breakpoint-only</span><span class="p">(</span><span class="n">lg</span><span class="p">)</span> <span class="p">{</span> <span class="nc">...</span> <span class="p">}</span>
    <span class="k">@include</span> <span class="nd">media-breakpoint-only</span><span class="p">(</span><span class="n">xl</span><span class="p">)</span> <span class="p">{</span> <span class="nc">...</span> <span class="p">}</span></code></pre>
                  </figure>
                </div>
                <p>Similarly, media queries may span multiple breakpoint widths:</p>
                <div class="docs-example">
                  <figure class="highlight"><pre><code class="language-scss" data-lang="scss"><span class="c1">// Example</span>
    <span class="c1">// Apply styles starting from medium devices and up to extra large devices</span>
    <span class="k">@media</span> <span class="p">(</span><span class="n">min-width</span><span class="o">:</span> <span class="m">768px</span><span class="p">)</span> <span class="nf">and</span> <span class="p">(</span><span class="n">max-width</span><span class="o">:</span> <span class="m">1199</span><span class="mi">.98px</span><span class="p">)</span> <span class="p">{</span> <span class="nc">...</span> <span class="p">}</span></code></pre>
                  </figure>
                </div>
                <p>The Sass mixin for targeting the same screen size range would be:</p>
                <div class="docs-example">
                  <figure class="highlight"><pre><code class="language-scss" data-lang="scss"><span class="k">@include</span> <span class="nd">media-breakpoint-between</span><span class="p">(</span><span class="n">md</span><span class="o">,</span> <span class="n">xl</span><span class="p">)</span> <span class="p">{</span> <span class="nc">...</span> <span class="p">}</span></code></pre>
                  </figure>
                  <div>
                  </div>
                </div>
              </div><!--Doc´s content-->
            </div>
            
            <div class="col-lg-3 col-xl-3 border-left"><!--Sumario-->
              <div class="h-100 p-4">
                <div data-toggle="sticky" data-sticky-offset="120">
                  <h6 class="mb-3">Summary</h6>
                  <ul class="section-nav">
                    <li class="toc-entry toc-h2"><a href="#containers">Containers</a></li>
                    <li class="toc-entry toc-h2"><a href="#z-index">Z-index</a></li>
                    <li class="toc-entry toc-h2"><a href="#responsive-breakpoints">Responsive breakpoints</a></li>
                  </ul>
                </div>
              </div>
            </div><!--Sumario-->

          </div><!--Row justify-->
        </div><!--Container-->
      </div><!-- Main Content   -->


    <!-- Main content -->
    <div class="main-content">

      <!-- Page content -->
      <div class="container-fluid"><!--Container-->
        <div class="row justify-content-between"><!--Row justify-->
          <div class="col-lg-12 col-xl-8 offset-xl-1">
            <div class="docs-content"><!--Doc´s content-->



            </div><!--Doc´s content-->
          </div>
        </div><!--Row justify-->
      </div><!--Container-->
    </div><!-- Main Content   -->
    <script src="https://developermen.com/assets/libs/purpose/js/purpose.core.js"></script>
    <script src="https://developermen.com/assets/libs/highlightjs/highlight.pack.min.js"></script>
    <script src="https://developermen.com/assets/libs/jquery-mask/jquery-mask.min.js"></script>
    <script src="https://developermen.com/assets/js/clipboard.min.js"></script>
    <script src="https://developermen.com/assets/libs/purpose/js/purpose.js"></script>
    <script src="https://developermen.com/assets/libs/purpose/js/demo.js"></script>
  </body>

  </html>
