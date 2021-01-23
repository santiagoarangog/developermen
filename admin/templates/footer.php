<?php
// Inicia la declaración de variables para las páginas correspondientes a la barra de navegación
$inicio = "https://developermen.com";
$quieneSomos = './company';
$servicios = './servicios';
$blog = './blog';
$soporte = '../support/index';
$legal = '../laws/index';
?>
<footer class="footer">
  <div class="container-fluid">
    <nav class="pull-left">
      <ul>
        <li>
          <a href="<?php echo $inicio;?>" target="_blank">
            Inicio
          </a>
        </li>
        <li>
          <a href="<?php echo $quieneSomos;?>" target="_blank">
            Quiénes Somos
          </a>
        </li>
        <li>
          <a href="<?php echo $servicios;?>" target="_blank">
            Servicios
          </a>
        </li>
        <li>
          <a href="<?php echo $blog;?>" target="_blank">
            Blog
          </a>
        </li>
        <li>
          <a href="<?php echo $legal;?>" target="_blank">
            Legal
          </a>
        </li>
        <li>
          <a href="<?php echo $soporte;?>" target="_blank">
            Soporte
          </a>
        </li>
      </ul>
    </nav>
    <p class="copyright pull-right">
      <?php $año = date('Y'); ?>
      &copy; <?php echo $año; ?> <a href="<?php echo $inicio;?>" target="_blank">Developer Men</a>
    </p>
  </div>
</footer>
