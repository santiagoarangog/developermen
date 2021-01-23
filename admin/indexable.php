<?php
session_start();
if(!isset($_SESSION["session_username"])) {
	header("location:login.php?msg=nologgeado");
} else {
$time = 200;

// verificamos si existe la sesi�n
// el nombre "session_name" es como ejemplo
if(!isset($_SESSION["session_username"]))
{
      // verificamos si existe la sesi�n que se encarga del tiempo
      // si existe, y el tiempo es mayor que una hora, expiramos la sesi�n
      if(isset($_SESSION["expire"]) && time() > $_SESSION["expire"] + $time)
      {
           unset($_SESSION["expire"]);
           unset($_SESSION["session_username"]);
      }
      // si no existe la creamos
      else
      {
           $_SESSION["expire"] = $time();
       }
}
?>
<?php include("includes/header.php"); ?>
			<header id="header">
				<div class="container">
					<div class="logo"><h4>Bienvenido <strong><?php echo $_SESSION['session_username'];?></strong></h4></div>
					<!-- Inicio de Barra de Navegacion -->
					<nav id="nav">
						<div class="opener-holder">
							<a href="#" class="nav-opener"><span></span></a>
						</div>
						<a href="#" class="btn btn-info rounded"><i class="fa fa-briefcase" aria-hidden="true"></i> Administraci�n</a>
						<div class="nav-drop">
							<ul>
							 <li><a href="http://developermen.webcindario.com/"><i class="fa fa-home" aria-hidden="true"></i> Inicio</a></li>
     							 <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Cerrar Sessi�n</a></li>
							</ul>
						</div>
					</nav>
					<!-- Finalizacion Barra de Navegacion -->
				</div>
			</header>
<!--<div class="alert alert-info" style="position: fixed;
    top:0px;
    left:0px;
    border-radius: 35px;
    transform-style: preserve-3d;
    opacity: 0.7%;
    z-index: 10000;">
    <button type="button" class="btn btn-defaul btn-lg btn-block" disabled="disabled" align="center" id="btn_conoce" style="color:#000;"><h5> Bienvenido </h5><h4><strong><?php echo $_SESSION['session_username'];?>!</strong></h4></button>
  <br/>
  <a class="btn btn-primary rounded" href="logout.php"><strong>Finalice</strong> sesion aqu�</a>
</div>-->
<title><?php echo $_SESSION['session_username'];?> || Developer Men </title>
<body>
  <div class="container" id="container" style="margin-top:80px;">
  <div class="container-transparent" style="color:#000;">
    <div align="center">
    <h2>Usuarios Registrados</h2>
  </div>
  <hr style="background:rgb(51, 153, 255);">
  <div class="table-responsive">
    <table class="table table-striped table-bordered table-hover">
      <thead>
    <tr>
      <th style="text-align:center;">Id</th>
      <th style="text-align:center;">Nombre Completo</th>
      <th style="text-align:center;">Email</th>
      <th style="text-align:center;">Nombre de Usuario</th>
    </tr>
  </thead>
  <tbody>
                <?php $i = 0; ?>
<?php
$conexion=mysqli_connect("mysql.webcindario.com","developermen","96052318863","developermen") or
    die("Problemas con la conexi�n");

$registros=mysqli_query($conexion,"select id,full_name as Nombre,email as Email, username as Usuario from usertbl") or
   die("Problemas en el select:".mysqli_error($conexion));

while ($reg=mysqli_fetch_array($registros))
{
  echo "<tbody>";
  echo "<tr>";
  echo "<td>".$reg['id']."</td>";
  echo "<td>".$reg['Nombre']."</td>";
  echo "<td>".$reg['Email']."</td>";
  echo "<td>".$reg['Usuario']."</td>";
  echo "</tr>";
  $i = $i + 1 ;
}
mysqli_close($conexion);
?>
 <th colspan='4' style='text-align:center;'>Hay un total de <?php echo "$i";?> Registrados</th>
</tbody>
</table>
</div>
</div>
</div>
  <div class="container">
  <div class="container-transparent" style="color:#000;">
    <div align="center">
    <h2>Mensajes de Contactanos</h2>
    <p>Aqui se muestran las personas que nos han contactado</p>
      <hr style="background:rgb(51, 153, 255);">
  </div>
<div class="table-responsive">
    <table class="table table-striped table-bordered table-hover">
      <thead>
    <tr>
      <th style="text-align:center;">Id</th>
      <th style="text-align:center;">Nombre Completo</th>
      <th style="text-align:center;">Email</th>
      <th style="text-align:center;">Fecha</th>
      <th style="text-align:center;">Producto</th>
      <th style="text-align:center;">Comentario</th>
    </tr>
  </thead>
  <tbody>
                  <?php $i = 0; ?>
<?php
$conexion=mysqli_connect("mysql.webcindario.com","developermen","96052318863","developermen") or
    die("Problemas con la conexi�n");

$registros=mysqli_query($conexion,"select id,nombre_completo as Nombre,mail as Email,fecha, producto, comentario as Comentario from contactanos ORDER BY fecha asc") or
   die("Problemas en el select:".mysqli_error($conexion));

while ($reg=mysqli_fetch_array($registros))
{
 if(registros){
  echo "<tbody>";
  echo "<tr>";
  echo "<td>".$reg['id']."</td>";
  echo "<td>".$reg['Nombre']."</td>";
  echo "<td>".$reg['Email']."</td>";
  echo "<td>".$reg['fecha']."</td>";
  echo "<td>".$reg['producto']."</td>";
  echo "<td>".$reg['Comentario']."</td>";
  echo "</tr>";
    $i = $i + 1 ;
  }
  else {
  	echo "No se encontraron registros";
  }
}

mysqli_close($conexion);
?>
 <th colspan='8' style='text-align:center;'>Hay un total de <?php echo "$i";?> mensajes de Contactanos</th>
</tbody>
</table>
</div>
</div>
</div>
<div class="container">
<div class="container-transparent" style="color:#000;">
    <div align="center">
    <h2>Imagenes de Usuarios</h2>
    <p>Aqui se muestran las personas que nos han contactado por medio de imagenes</p>
  </div>
  <hr style="background:rgb(51, 153, 255);">
<?php
    $directory="../uploads";
    $dirint = dir($directory);
    while (($archivo = $dirint->read()) !== false)
    {
        if (eregi("gif", $archivo) || eregi("jpg", $archivo) || eregi("png", $archivo)){
        echo "<div class='' align='center'>".'<img class="img-responsive img-rounded" src="'.$directory."/".$archivo.'">'."</div>";
        }
    }
    $dirint->close();
?>
</div>
</div>
</div>
</body>
</html>

<?php
}
?>
<?php include("includes/footer.php"); ?>
