<?php
/*Función que valida que imagen mostrar dependiendo la fecha navideña*/
$script = "<script >
$(document).ready(function(){
  mostrarModal();
  countDown();
  setTimeout(ocultarModal,20000);
});
</script>";
$imagenNavidad = "../assets/img/media/felizNavidadDeveloperMen.png";
$imagenAnioNuevo = "../assets/img/media/happyNewYearDeveloperMen.png";
date_default_timezone_set('America/Bogota');
$hoy = date("d/m/Y");
$year = date('Y');
if ($hoy >= '01/12/'.$year) {
  if ($hoy <= '24/12/'.$year) {
    $imagen = $imagenNavidad;
    echo $script;
  }else if ($hoy <= '01/01/'.$year) {
    $imagen = $imagenAnioNuevo;
    echo $script;
  }
}else {
  $imagen = "";
}
?>
<div class="modal" style="overflow-x:hidden;overflow-y:hidden;" align="center" id="mostrarmodal" tabindex="-1" role="dialog">
  <div class="modal-body">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
    <img class="img-fluid rounded mx-auto d-block animated bounceInUp" align="center"src="<?php echo $imagen; ?>" alt="Feliz Navidad te desea Developer Men" width="80%" height="50%"/>
    <br/>
    <button class="btn btn-primary btn-fill rounded" data-dismiss="modal"><i class="fa fa-remove"></i> Cerrar
      <form name="form" style="color:#000;display:inline;">
        <input type="text" size="5" class="form_input" name="hour" disabled style="display:none;">
        <input type="text" size="5" class="form_input" name="minute" disabled style="display:none;">
        <input type="button" size="5" class="" name="second" disabled style="background:transparent;border:none;color:#ffffff;">
      </form>
    </button>
  </div>
</div>
