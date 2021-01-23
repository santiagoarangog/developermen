<?php
$title = "Panel de Control &bull; Admin Developer Men";
$sidebar = '2';
?>
<!doctype html>
<html lang="es-Es">
<?php
require('templates/header.php');
echo '<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>';
require('functions/functionsUser.php');
require('functions/indexFunctions.php');
$active = 'PanelControl';
?>
<body onload="limpiarGet();">
	<div class="wrapper" >
		<?php include('templates/sidebar.php'); ?>
		<div class="main-panel">
			<?php
			require('templates/navbar.php');
			incidenciasXEstado();
			envioEmail();
			?>
			<div class="content <?php echo $css; ?>" style="background-image: url('<?php echo $imagen; ?>');">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-4">
							<div class="card">
								<div class="header" align="center">
									<h4 class="title"><i class="pe-7s-graph1"></i> Estado incidencias</h4>
									<p class="category" style="text-align:justify;">Aquí se grafican las incidencias según el estado en que se encuentren</p>
								</div>
								<div class="content">
									<div id="pie_chart_incidencias"  class="ct-chart" style="height:282px;"></div>
								</div>
							</div>
						</div>
						<div class="col-md-8">
							<div class="card">
								<div class="header" align="center">
									<h4 class="title"><i class="pe-7s-hammer"></i> Últimas incidencias</h4>
									<p class="category">Aquí se listan las últimas incidencias creadas por los usuarios</p>
								</div>
								<div class="content">
									<div>
										<?php
										listarIncidencias();
										?>
									</div>
									<div class="footer">
										<hr>
										<div class="stats">
                      <div class="legend">
                        <i class="fa fa-circle text-danger"></i> No asignado
                        <i class="fa fa-circle text-info"></i> En progreso
                        <i class="fa fa-circle text-success"></i> Solucionado
                      </div>
                    </div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<div class="card">
								<div class="header" align="center">
									<h4 class="title"><i class="pe-7s-mail"></i> Estadisticas de envio de Email</h4>
									<p class="category">Campañas de envio de correos electronicos &bull; Front End</p>
								</div>
								<div class="content">
									<div id="pie_chart" class="ct-chart ct-perfect-fourth"></div>

									<div class="footer">
										<!-- <div class="legend">
											<i class="fa fa-circle text-primary"></i> LEIDOS
											<i class="fa fa-circle text-danger"></i> NO LEIDOS
										</div> -->
										<br>
										<hr>
										<div class="stats">
											<i class="fa fa-clock-o"></i> Campañas enviadas
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-8">
							<div class="card">
								<div class="header" align="center">
									<h4 class="title"><i class="pe-7s-mail-open-file"></i> Correos enviados</h4>
									<p class="category">Aquí se listan los últimos 2 correos enviados</p>
								</div>
								<div class="content">
									<div id="" class="ct-chart">
										<?php
										listarCorreoFrontEnd($_POST);
										?>
									</div>
									<div class="footer">
										<div class="legend">
											<i class="fa fa-circle text-info"></i> Leido
											<i class="fa fa-circle text-danger"></i> No leido
										</div>
										<hr>
										<div class="stats">
											<i class="fa fa-envelope-o"></i> Correos enviados por el modulo Front End
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="card ">
								<div class="header" align="center">
									<h4 class="title"><i class="pe-7s-ticket"></i> Productos año 2018</h4>
									<p class="category">Todos los productos desarrollados en el 2018</p>
								</div>
								<div class="content">
									<div id="chartActivity" class="ct-chart"></div>

									<div class="footer">
										<div class="legend">
											<i class="fa fa-circle text-info"></i> Productos personales
											<i class="fa fa-circle text-danger"></i> Productos empresariales
										</div>
										<hr>
										<div class="stats">
											<i class="fa fa-check"></i> Consolidado de productos anuales
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="card">
								<div class="header" align="center">
									<h4 class="title"><i class="pe-7s-like2"></i> Me gustas de usuarios</h4>
									<p class="category">Actualizado hace 24 horas</p>
								</div>
								<div class="content">
									<div id="chartHours" class="ct-chart">
									</div>
									<div class="footer">
										<div class="legend">
											<i class="fa fa-circle text-info"></i> Abierto
											<i class="fa fa-circle text-danger"></i> Click
											<i class="fa fa-circle text-warning"></i> Click Segundo despues de tiempo
										</div>
										<hr>
										<div class="stats">
											<i class="fa fa-history"></i> Actualizado hace 24 horas
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php
			include 'templates/footer.php';
			?>
		</div>
	</div>
</body>
<?php
include 'templates/script.php';
if (isset($_GET['notify'])?$_GET['notify']:'' == 'active'){
	echo "<script type=\"text/javascript\">
	$(document).ready(function(){
		demo.initChartist();
		$.notify({
			icon: 'fa fa-user-circle-o',
			message: \"<b>Bienvenid@ </b>".utf8_encode($usu)."<b> al sitio web de administración de</b> Developer Men.\"
		},{
			type: 'info',
		});
		$.notify({
			icon: 'fa fa-commenting-o',
			message: \"Recuerda que este sitio web fue diseñado para hacerte la administración mas fácil\"
		},{
			type: 'success',
			timer: '4000'
		});
		$.notify({
			icon: 'fa fa-pencil-square-o',
			message: \"En la sección <b>Perfil de Usuario</b> podras editar tu perfíl en nuestra plataforma \"
		},{
			type: 'info',
			timer: '7000'
		});
		$.notify({
			icon: 'fa fa-file',
			message: \"En la sección <b>Tabla de contáctanos y usuarios</b> puedes visualizar los mensajes que nos han dejado nuestros usuarios\"
		},{
			type: 'info',
			timer: '8000'
		});
	});
	</script>";
}else {
	echo "<script>
	$(document).ready(function(){
		demo.initChartist();
	});
	</script>";
}
?>
</html>
