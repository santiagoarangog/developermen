<?php
$title = 'Editar Usuario';
$sidebar = '1';
?>
<!Doctype html>
<html lang="en">
<script src="assets/js/tinymce/tinymce.min.js"></script>
<script>
tinymce.init({
	selector: "textarea",  // change this value according to your HTML
	plugins: "emoticons",
	toolbar: "emoticons"
});
</script>
<?php
require('templates/header.php');
require('functions/functionsUser.php');
require('functions/sendMail.php');
if ($usu != '') {
	cargarInfoUsuario($result);
	cargarEmail($email);
}
$active = 'PerfilUsuario';
?>
<body>
	<div class="wrapper">
		<?php include('templates/sidebar.php'); ?>
		<div class="main-panel">
			<?php require('templates/navbar.php');  ?>
			<div class="content <?php echo $css; ?>" style="background-image: url('<?php echo $imagen; ?>');">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-8">
							<div class="card">
								<div class="header">
									<h4 class="title">Editar información personal</h4>
								</div>
								<div class="content">
									<form action="" method="POST">
										<div class="row">
											<div class="col-md-5">
												<input type="hidden" name="oid" class="form-control" readOnly placeholder="Compañia" value="<?php echo isset($result['OID'])?$result['OID']:'';?>">
												<div class="form-group">
													<label>Compañia (Inhabilitado)</label>
													<input type="text" name="compania" class="form-control" readOnly placeholder="Compañia" value="Developer Men Inc.">
												</div>
											</div>
											<div class="col-md-3">
												<div class="form-group">
													<label>Nombre de usuario</label>
													<input type="text" name="nomUsuario" class="form-control" readOnly placeholder="Nombre de usuario" value="<?php echo $usu?>">
												</div>
											</div>
											<div class="col-md-4">
												<div class="form-group">
													<label for="exampleInputEmail1">Correo electronico</label>
													<input type="email" name="email" class="form-control" placeholder="Correo electronico" value="<?php echo isset($email)?$email:'';?>">
												</div>
											</div>
										</div>

										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label>Nombre</label>
													<input type="text" name="nombres" class="form-control" placeholder="Nombre" value="<?php echo isset($result['DS_NOMBRE'])?$result['DS_NOMBRE']:'';?>">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label>Apellidos</label>
													<input type="text" name="apellidos" class="form-control" placeholder="Apellidos" value="<?php echo isset($result['DS_APELLIDO'])?$result['DS_APELLIDO']:'';?>">
												</div>
											</div>
										</div>

										<div class="row">
											<div class="col-md-12">
												<div class="form-group">
													<label>Direccion</label>
													<input type="text" name="direccion" class="form-control" placeholder="Direccion" value="<?php echo utf8_encode(isset($result['DS_DIRECCION']))?utf8_encode($result['DS_DIRECCION']):'';?>">
												</div>
											</div>
										</div>

										<div class="row">
											<div class="col-md-4">
												<div class="form-group">
													<label>Ciudad</label>
													<input type="text" name="ciudad" class="form-control" placeholder="Ciudad" value="<?php echo isset($result['DS_CIUDAD'])?$result['DS_CIUDAD']:'';?>">
												</div>
											</div>
											<div class="col-md-4">
												<div class="form-group">
													<label>Municipio</label>
													<input type="text" name="municipio" class="form-control" placeholder="Municipio" value="<?php echo isset($result['DS_MUNICIPIO'])?$result['DS_MUNICIPIO']:'';?>">
												</div>
											</div>
											<div class="col-md-4">
												<div class="form-group">
													<label>Codigo postal</label>
													<input type="number" name="codePostal" class="form-control" placeholder="Codigo postal" value="<?php echo isset($result['CD_CODIGOPOSTAL'])?$result['CD_CODIGOPOSTAL']:'';?>">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-12">
												<div class="form-group">
													<div class="cc-selector" >
														<div class="header" align="center">
															<h4 class="title">Selecciona una imagen de perfil</h4>
														</div>
														<input id="p1" type="radio" name="imagen" value="assets/img/admin.png" <?php if (isset($result['DS_IMAGEN']) && $result['DS_IMAGEN']=="assets/img/admin.png") echo "checked";?>  required/>
														<label class="calificacion p1" for="p1"></label>
														<input id="p2" type="radio" name="imagen" value="assets/img/boy.png" <?php if (isset($result['DS_IMAGEN']) && $result['DS_IMAGEN']=="assets/img/boy.png") echo "checked";?> required/>
														<label class="calificacion p2" for="p2"></label>
														<input id="p3" type="radio" name="imagen" value="assets/img/programmer.png" <?php if (isset($result['DS_IMAGEN']) && $result['DS_IMAGEN']=="assets/img/programmer.png") echo "checked";?>  required/>
														<label class="calificacion p3" for="p3"></label>
														<input id="p4" type="radio" name="imagen" value="assets/img/gestor.png"  <?php if (isset($result['DS_IMAGEN']) && $result['DS_IMAGEN']=="assets/img/gestor.png") echo "checked";?> required/>
														<label class="calificacion p4" for="p4"></label>
														<input id="p5" type="radio" name="imagen" value="assets/img/navidad.png"  <?php if (isset($result['DS_IMAGEN']) && $result['DS_IMAGEN']=="assets/img/navidad.png") echo "checked";?> required/>
														<label class="calificacion p5" for="p5"></label>
														<input id="p6" type="radio" name="imagen" value="assets/img/astronaut.png"  <?php if (isset($result['DS_IMAGEN']) && $result['DS_IMAGEN']=="assets/img/astronaut.png") echo "checked";?> required/>
														<label class="calificacion p6" for="p6"></label>
														<input id="p7" type="radio" name="imagen" value="assets/img/planet-earth.png"  <?php if (isset($result['DS_IMAGEN']) && $result['DS_IMAGEN']=="assets/img/planet-earth.png") echo "checked";?> required/>
														<label class="calificacion p7" for="p7"></label>
														<input id="p8" type="radio" name="imagen" value="assets/img/thinking.png"  <?php if (isset($result['DS_IMAGEN']) && $result['DS_IMAGEN']=="assets/img/thinking.png") echo "checked";?> required/>
														<label class="calificacion p8" for="p8"></label>
													</div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-12">
												<div class="form-group">
													<div class="cc-selector image" >
														<div class="header" align="center">
															<h4 class="title">Selecciona una imagen de portada</h4>
														</div>
														<input id="pt1" type="radio" name="imagenPort" value="https://images.unsplash.com/photo-1501791330673-603715379ded?auto=format&fit=crop&w=750&q=60&ixid=dW5zcGxhc2guY29tOzs7Ozs%3D" <?php if (isset($result['DS_IMAGENPORTADA']) && $result['DS_IMAGENPORTADA']=="https://images.unsplash.com/photo-1501791330673-603715379ded?auto=format&fit=crop&w=750&q=60&ixid=dW5zcGxhc2guY29tOzs7Ozs%3D") echo "checked";?>  required/>
															<label class="calificacionpt pt1" for="pt1"></label>
															<input id="pt2" type="radio" name="imagenPort" value="https://images.unsplash.com/photo-1428605821565-9ffceeb3dc9a?auto=format&fit=crop&w=750&q=60&ixid=dW5zcGxhc2guY29tOzs7Ozs%3D" <?php if (isset($result['DS_IMAGENPORTADA']) && $result['DS_IMAGENPORTADA']=="https://images.unsplash.com/photo-1428605821565-9ffceeb3dc9a?auto=format&fit=crop&w=750&q=60&ixid=dW5zcGxhc2guY29tOzs7Ozs%3D") echo "checked";?> required/>
																<label class="calificacionpt pt2" for="pt2"></label>
																<input id="pt3" type="radio" name="imagenPort" value="https://images.unsplash.com/photo-1424111113808-b7be56a9f3d6?auto=format&fit=crop&w=750&q=60&ixid=dW5zcGxhc2guY29tOzs7Ozs%3D" <?php if (isset($result['DS_IMAGENPORTADA']) && $result['DS_IMAGENPORTADA']=="https://images.unsplash.com/photo-1424111113808-b7be56a9f3d6?auto=format&fit=crop&w=750&q=60&ixid=dW5zcGxhc2guY29tOzs7Ozs%3D") echo "checked";?>  required/>
																	<label class="calificacionpt pt3" for="pt3"></label>
																	<input id="pt4" type="radio" name="imagenPort" value="https://images.unsplash.com/photo-1429105049372-8d928fd29ba1?auto=format&fit=crop&w=750&q=60&ixid=dW5zcGxhc2guY29tOzs7Ozs%3D"  <?php if (isset($result['DS_IMAGENPORTADA']) && $result['DS_IMAGENPORTADA']=="https://images.unsplash.com/photo-1429105049372-8d928fd29ba1?auto=format&fit=crop&w=750&q=60&ixid=dW5zcGxhc2guY29tOzs7Ozs%3D") echo "checked";?> required/>
																		<label class="calificacion pt4" for="pt4"></label>
																		<input id="pt5" type="radio" name="imagenPort" value="https://images.unsplash.com/photo-1427955569621-3e494de2b1d2?auto=format&fit=crop&w=750&q=60&ixid=dW5zcGxhc2guY29tOzs7Ozs%3D"  <?php if (isset($result['DS_IMAGENPORTADA']) && $result['DS_IMAGENPORTADA']=="https://images.unsplash.com/photo-1427955569621-3e494de2b1d2?auto=format&fit=crop&w=750&q=60&ixid=dW5zcGxhc2guY29tOzs7Ozs%3D") echo "checked";?> required/>
																			<label class="calificacion pt5" for="pt5"></label>
																			<input id="pt6" type="radio" name="imagenPort" value="https://images.unsplash.com/photo-1415862511713-810601557946?auto=format&fit=crop&w=750&q=60&ixid=dW5zcGxhc2guY29tOzs7Ozs%3D"  <?php if (isset($result['DS_IMAGENPORTADA']) && $result['DS_IMAGENPORTADA']=="https://images.unsplash.com/photo-1415862511713-810601557946?auto=format&fit=crop&w=750&q=60&ixid=dW5zcGxhc2guY29tOzs7Ozs%3D") echo "checked";?> required/>
																				<label class="calificacion pt6" for="pt6"></label>
																				<input id="pt7" type="radio" name="imagenPort" value="https://images.unsplash.com/photo-1441582966859-b9509c513d95?auto=format&fit=crop&w=752&q=60&ixid=dW5zcGxhc2guY29tOzs7Ozs%3D"  <?php if (isset($result['DS_IMAGENPORTADA']) && $result['DS_IMAGENPORTADA']=="https://images.unsplash.com/photo-1441582966859-b9509c513d95?auto=format&fit=crop&w=752&q=60&ixid=dW5zcGxhc2guY29tOzs7Ozs%3D") echo "checked";?> required/>
																					<label class="calificacion pt7" for="pt7"></label>
																					<input id="pt8" type="radio" name="imagenPort" value="https://images.unsplash.com/photo-1455648591841-fabe4acb761a?auto=format&fit=crop&w=750&q=60&ixid=dW5zcGxhc2guY29tOzs7Ozs%3D"  <?php if (isset($result['DS_IMAGENPORTADA']) && $result['DS_IMAGENPORTADA']=="https://images.unsplash.com/photo-1455648591841-fabe4acb761a?auto=format&fit=crop&w=750&q=60&ixid=dW5zcGxhc2guY29tOzs7Ozs%3D") echo "checked";?> required/>
																						<label class="calificacion pt8" for="pt8"></label>
																					</div>
																				</div>
																			</div>
																		</div>
																		<div class="row">
																			<div class="col-md-12">
																				<div class="form-group">
																					<label>Sobre Mí</label>
																					<textarea rows="5" name="descripcion"  maxlength="300" class="form-control" placeholder="Ingresa tu descripcion personal" value="<?php echo isset($result['DS_DESCRIPCION'])?$result['DS_DESCRIPCION']:'';?>"><?php echo isset($result['DS_DESCRIPCION'])?$result['DS_DESCRIPCION']:'';?></textarea>
																				</div>
																			</div>
																		</div>
																		<div align="center">
																			<?php
																			$oidUsu = isset($result['OID'])?$result['OID']:'';
																			if ($oidUsu == ''){
																				echo '<button name="btnGuardar" type="submit" class="btn btn-info btn-fill btn-block" value="Guardar">Guardar</button>';
																			}else{
																				echo '<button name="btnGuardar" type="submit" class="btn btn-info btn-fill btn-block" value="Guardar">Actualizar perfil</button>';
																			}
																			?>
																		</div>
																		<div class="clearfix"></div>
																		<?php
																		if(@$_POST['btnGuardar'] == 'Guardar' && @$_POST['oid']!=''){
																			actualizarDatos($_POST);
																		}elseif (@$_POST['btnGuardar'] == 'Guardar' && @$_POST['oid']=='') {
																			insertarInfoUser($_POST);
																		}
																		?>
																	</form>
																</div>
															</div>
														</div>
														<div class="col-md-4">
															<div class="card card-user">
																<div class="image">
																	<!-- <img src="https://ununsplash.imgix.net/photo-1431578500526-4d9613015464?fit=crop&fm=jpg&h=300&q=75&w=400" alt="..."/> -->
																	<img src="<?php echo isset($result['DS_IMAGENPORTADA'])?$result['DS_IMAGENPORTADA']:'https://ununsplash.imgix.net/photo-1431578500526-4d9613015464?fit=crop&fm=jpg&h=300&q=75&w=400';?>" alt="..."/>

																</div>
																<div class="content">
																	<div class="author">
																		<a href="#">
																			<img class="avatar border-gray" src="<?php echo isset($result['DS_IMAGEN'])?$result['DS_IMAGEN']:'assets/img/default-avatar.png';?>" alt="..."/>
																			<h4 class="title"><?php echo isset($result['NOMBRECOMPLETO'])?$result['NOMBRECOMPLETO']:'';?><br />
																				<small><?php echo isset($result['DS_USERNAME'])?$result['DS_USERNAME']:'';?></small>
																			</h4>
																		</a>
																	</div>
																	<div class="" style="text-align:left;">
																		<i class="fa fa-quote-left fa-2x" style="text-align:left;" aria-hidden="true"></i>
																	</div>
																	<p class="description text-center">
																		<?php echo isset($result['DS_DESCRIPCION'])?$result['DS_DESCRIPCION']:'';?>
																	</p>
																	<div class="" style="text-align:right;">
																		<i class="fa fa-quote-right fa-2x" aria-hidden="true"></i>
																	</div>
																</div>
																<hr>
																<div class="text-center">
																	<button href="#" class="btn btn-simple"><i class="fa fa-facebook-square"></i></button>
																	<button href="#" class="btn btn-simple"><i class="fa fa-twitter"></i></button>
																	<button href="#" class="btn btn-simple"><i class="fa fa-google-plus-square"></i></button>
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
								?>
								</html>
