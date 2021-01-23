<?php
$title = "Tipos de mapas &bull; Admin Developer Men";
$sidebar = '3';
?>
<!doctype html>
<html lang="es-Es">
<?php
require('templates/header.php');
$active = 'TiposMapas';
?>
<body>
	<div class="wrapper">
		<?php include('templates/sidebar.php'); ?>
	<div class="main-panel">
		<?php require('templates/navbar.php');  ?>
		<div id="map"></div>
	</div>
</div>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAQuMeqp1TgOSA5osk_XU8TH_jaEhrcnqM&callback=initMap"></script>
<script>
$().ready(function(){
	demo.initGoogleMaps();
});
</script>
</body>
<?php
include 'templates/script.php';
?>
</html>
