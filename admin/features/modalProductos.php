<?php
if ($oid != '' && $accion == 'cambios') {
  cargarInfoCambioModal($oid,$result);
  $disabled = "disabled";
}if ($oid != '' && isset($_GET['accion'])?$_GET['accion']:''=='mejoras') {
  // cargarInfoModalFacturacion($oid,$result2);
}
?>
<!--- Modal donde se diligencia la informacion para un usuario al que se le envia un correo corporativo -->
<div class="modal fade modal-primary" id="modalCambios">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"><strong><?php echo utf8_encode($_SESSION['session']);?></strong>, Envia un nuevo correo de cambios</h4>
      </div>
      <div class="modal-body">
        <!-- Mensajes -->
        <div class="" align="center">
          <div class="alert alert-success" id="exitoCorreo" style="display:none;border-radius:none;">
            <strong><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> Excelente!</strong> Revisa tu correo electronico para conocer más información.
          </div>
          <div class="alert alert-success" id="exito" style="display:none;border-radius:none;">
            <strong><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> Excelente!</strong> Sus datos han sido recibidos con exito.
          </div>
          <div class="alert alert-danger" id="fracaso" style="display:none;border-radius:none;">
            <strong>Error!</strong> Se ha producido un error durante el envío de datos.
          </div>
        </div>
        <div class="alert alert-warning alert-dismissable">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <strong>Todos los campos marcados con <span class="text-danger">*</span> son campos obligatorios</strong>.
        </div>
        <form class="was-validated" method="POST" id="formCambios" onsubmit="return checkSubmit();">
          <div class="form-row">
            <div class="form-group col-md-6">
              <label class="strongFont" for="fullname">Nombre completo destinatario<span class="text-danger">*</span></label>
              <input type="text" name="nombreCambios" class="form-control strongFont" id="nombreCambios" value="" placeholder="Ingresa el nombre completo del destinatario" required maxlength="50">
            </div>
            <div class="form-group col-md-6">
              <label class="strongFont" for="mail">Correo electrónico <span class="text-danger">*</span></label>
              <input type="email" name="mailCambios" class="form-control strongFont" id="mailCambios" value="" placeholder="Ingresa la dirección de E-Mail del destinatario" required>
            </div>
          </div>
        <div class="form-group col-md-12">
          <label class="strongFont" for="mail">Compañia <span class="text-danger">*</span></label>
          <select class="form-control strongFont" name="compania" id="compania" placeholder="Selecciona una compañia" required>
            <option></option>
            <?php
            $oidCompania = isset($_POST['compania'])?$_POST['compania']:'';
            listarCompania($oidCompania);
            ?>
          </select>
        </div>
        <div class="form-group col-md-12">
          <label class="strongFont" for="mail">URL Sitio compañia ó URL del cambio<span class="text-danger">*</span></label>
          <input type="email" name="urlCambio" class="form-control strongFont" id="urlCambio" value="" placeholder="Ingresa la dirección de E-Mail del destinatario" required>
        </div>
          <div class="form-group col-md-12">
            <label class="strongFont" for="mail">Cambio realizado <span class="text-danger">*</span></label>
            <textarea class="form-control" name="cambioRealizado" id="cambioRealizado" rows="3" value=""></textarea>
          </div>
          <div class="form-group col-md-12">
            <label class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
              <input type="radio" class="custom-control-input" name="copia" value="1" id="radioContactanos">
              <span class="custom-control-indicator"></span>
              <span class="custom-control-description">Crear una copia del correo en contactanos@developermen.com</a></span>
            </label>
          </div>
          <input type="hidden" name="usuDiligencia" value="<?php echo utf8_encode($_SESSION['session']);?>">
          <br><br>
          <div class="" align="center">
            <button class="btn btn-outline-primary rounded btn-lg" name="botonEnviarCambios" type="button" id="botonEnviarCambios" value="Enviar" onclick="validaFormCambios()" data-loading-text="Enviando..." autocomplete="off">Enviar</button>
          </div>
          <br>
        </form>
      </div>
    </div>
  </div>
</div>
<!--- Modal donde se diligencia la informacion para un usuario al que se le envia un correo corporativo -->
<div class="modal fade modal-primary" id="modalCambiosVer">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"><strong><?php echo utf8_encode($_SESSION['session']);?></strong>, Envia un nuevo correo de cambios</h4>
      </div>
      <div class="modal-body">
        <!-- Mensajes -->
        <div class="" align="center">
          <div class="alert alert-success" id="exitoCorreo" style="display:none;border-radius:none;">
            <strong><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> Excelente!</strong> Revisa tu correo electronico para conocer más información.
          </div>
          <div class="alert alert-success" id="exito" style="display:none;border-radius:none;">
            <strong><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> Excelente!</strong> Sus datos han sido recibidos con exito.
          </div>
          <div class="alert alert-danger" id="fracaso" style="display:none;border-radius:none;">
            <strong>Error!</strong> Se ha producido un error durante el envío de datos.
          </div>
        </div>
        <div class="alert alert-warning alert-dismissable">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <strong>Todos los campos marcados con <span class="text-danger">*</span> son campos obligatorios</strong>.
        </div>
        <form class="was-validated" method="POST" id="formCambios" onsubmit="return checkSubmit();">
          <div class="form-row">
            <div class="form-group col-md-6">
              <label class="strongFont" for="fullname">Nombre completo destinatario<span class="text-danger">*</span></label>
              <input type="text" name="nombreCambios" class="form-control strongFont" <?php echo isset($disabled)?$disabled:''; ?> id="nombreCambios" value="<?php echo isset($result['DS_NOMDESTINATARIO'])?$result['DS_NOMDESTINATARIO']:''; ?>" placeholder="Ingresa el nombre completo del destinatario" required maxlength="50">
            </div>
            <div class="form-group col-md-6">
              <label class="strongFont" for="mail">Correo electrónico <span class="text-danger">*</span></label>
              <input type="email" name="mailCambios" class="form-control strongFont" <?php echo isset($disabled)?$disabled:''; ?> id="mailCambios" value="<?php echo isset($result['DS_CORREODESTINATARIO'])?$result['DS_CORREODESTINATARIO']:''; ?>" placeholder="Ingresa la dirección de E-Mail del destinatario" required>
            </div>
          </div>
        <div class="form-group col-md-12">
          <label class="strongFont" for="mail">Compañia <span class="text-danger">*</span></label>
          <select class="form-control strongFont" name="compania" <?php echo isset($disabled)?$disabled:''; ?> id="compania" placeholder="Selecciona una compañia" required>
            <option></option>
            <?php
            $oidCompania = isset($result['FK_OIDCOMPANIA'])?$result['FK_OIDCOMPANIA']:'';
            listarCompania($oidCompania);
            ?>
          </select>
        </div>
        <div class="form-group col-md-12">
          <label class="strongFont" for="mail">URL Sitio compañia ó URL del cambio<span class="text-danger">*</span></label>
          <input type="email" name="urlCambio" class="form-control strongFont" <?php echo isset($disabled)?$disabled:''; ?> id="urlCambio" value="<?php echo isset($result['DS_URL'])?$result['DS_URL']:''; ?>" placeholder="Ingresa la dirección de E-Mail del destinatario" required>
        </div>
          <div class="form-group col-md-12">
            <label class="strongFont" for="mail">Cambio realizado <span class="text-danger">*</span></label>
            <textarea class="form-control" name="cambioRealizado" <?php echo isset($disabled)?$disabled:''; ?> id="cambioRealizado" rows="3" value="<?php echo isset($result['DS_CAMBIO'])?$result['DS_CAMBIO']:''; ?>"><?php echo isset($result['DS_CAMBIO'])?$result['DS_CAMBIO']:''; ?></textarea>
          </div>
          <div class="form-group col-md-12">
            <label class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
              <input type="radio" class="custom-control-input" name="copia" value="1" <?php echo isset($disabled)?$disabled:''; ?>  <?php if (isset($result['SN_COPIA']) && $result['SN_COPIA']=="1") echo "checked";?> id="radioContactanos">
              <span class="custom-control-indicator"></span>
              <span class="custom-control-description">Crear una copia del correo en contactanos@developermen.com</a></span>
            </label>
          </div>
          <input type="hidden" name="usuDiligencia" <?php echo isset($disabled)?$disabled:''; ?> value="<?php echo utf8_encode($_SESSION['session']);?>">
          <br><br>
          <div class="" align="center">
            <button class="btn btn-outline-primary rounded btn-lg" name="botonEnviarCambios" type="button" <?php echo isset($disabled)?$disabled:''; ?> id="botonEnviarCambios" value="Enviar" onclick="validaFormCambios()" data-loading-text="Enviando..." autocomplete="off">Enviar</button>
          </div>
          <br>
        </form>
      </div>
    </div>
  </div>
</div>

<!--- Modal mejora -->
<div class="modal fade modal-primary" id="modalMejora">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"><strong><?php echo utf8_encode($_SESSION['session']);?></strong>, Envia un nuevo correo indicando una mejora realizada</h4>
      </div>
      <div class="modal-body">
        <!-- Mensajes -->
        <div class="" align="center">
          <div class="alert alert-success" id="exitoCorreo" style="display:none;border-radius:none;">
            <strong><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> Excelente!</strong> Revisa tu correo electronico para conocer más información.
          </div>
          <div class="alert alert-success" id="exito" style="display:none;border-radius:none;">
            <strong><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> Excelente!</strong> Sus datos han sido recibidos con exito.
          </div>
          <div class="alert alert-danger" id="fracaso" style="display:none;border-radius:none;">
            <strong>Error!</strong> Se ha producido un error durante el envío de datos.
          </div>
        </div>
        <div class="alert alert-warning alert-dismissable">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <strong>Todos los campos marcados con <span class="text-danger">*</span> son campos obligatorios</strong>.
        </div>
        <form class="was-validated" method="POST" id="formMejora" onsubmit="return checkSubmit();">
          <div class="form-row">
            <div class="form-group col-md-6">
              <label class="strongFont" for="fullname">Nombre completo destinatario<span class="text-danger">*</span></label>
              <input type="text" name="nombreMejoras" class="form-control strongFont" id="nombreMejoras" placeholder="Ingresa el nombre completo del destinatario" required maxlength="50">
            </div>
            <div class="form-group col-md-6">
              <label class="strongFont" for="mail">Correo electrónico <span class="text-danger">*</span></label>
              <input type="email" name="mailMejoras" class="form-control strongFont" id="mailMejoras" placeholder="Ingresa la dirección de E-Mail del destinatario" required>
            </div>
          </div>
        <div class="form-group col-md-12">
          <label class="strongFont" for="mail">Compañia <span class="text-danger">*</span></label>
          <select class="form-control strongFont" name="companiaMejora" id="companiaMejora" placeholder="Selecciona una compañia" required>
            <option></option>
            <?php
            $oidCompania = isset($result['FK_OIDCOMPANIA'])?$result['FK_OIDCOMPANIA']:isset($_POST['compañia'])?$_POST['compañia']:'';
            listarCompania($oidCompania);
            ?>
          </select>
        </div>
        <div class="form-group col-md-12">
          <label class="strongFont" for="mail">URL Sitio compañia ó URL del cambio<span class="text-danger">*</span></label>
          <input type="email" name="urlMejoras" class="form-control strongFont" id="urlMejoras" placeholder="Ingresa la dirección de E-Mail del destinatario" required>
        </div>
          <div class="form-group col-md-12">
            <label class="strongFont" for="mail">Mejora realizada <span class="text-danger">*</span></label>
            <textarea class="form-control" name="mejoraRealizada" id="mejoraRealizada" rows="3"></textarea>
          </div>
          <div class="form-group col-md-12">
            <label class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
              <input type="radio" class="custom-control-input" name="copia" value="1" id="radioContactanos">
              <span class="custom-control-indicator"></span>
              <span class="custom-control-description">Crear una copia del correo en contactanos@developermen.com</a></span>
            </label>
          </div>
          <input type="hidden" name="usuDiligenciaMejora" value="<?php echo utf8_encode($_SESSION['session']);?>">
          <br><br>
          <div class="" align="center">
            <button class="btn btn-outline-primary rounded btn-lg" name="botonEnviarMejoras" type="button" id="botonEnviarMejoras" value="Enviar" onclick="validaFormMejoras()" data-loading-text="Enviando..." autocomplete="off">Enviar</button>
          </div>
          <br>
        </form>
      </div>
    </div>
  </div>
</div>
