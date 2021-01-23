<?php
require ('assets/functions/seguridad.php');
session_start();
if(!isset($_SESSION["session_devmen"])) {
	$_SESSION['autentificado'] == "NO";
	header("location:login.php?msg=nologgeado");
} else {
	sessionX();
}
$usu = $_SESSION['session_devmen'];/*Nombre de la sesion*/
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Purpose is a unique and beautiful collection of UI elements that are all flexible and modular. A complete and customizable solution to building the website of your dreams.">
  <meta name="author" content="Webpixels">
  <title><?php echo isset($title)?$title:'Soporte &bull; Developer Men'; ?></title>
  <!-- Favicon -->
  <link rel="icon" href="../../assets/img/brand/favicon.png" type="image/png">
	<link rel="stylesheet" href="../../assets/libs/purpose/css/purpose.css" id="stylesheet">
	<link rel="stylesheet" href="assets/css/support.css">
	<link rel="stylesheet" href="https://developermen.com/assets/css/all.css"><!-- Font awesome-->
	<link rel="stylesheet" href="https://developermen.com/assets/css/pace.min.css">
  <!-- Docs CSS - used only for demo -->
  <link rel="stylesheet" href="../../assets/libs/purpose/css/docs.css">
	<link rel="stylesheet" href="../../assets/libs/quill/css/quill.core.css">
</head>
