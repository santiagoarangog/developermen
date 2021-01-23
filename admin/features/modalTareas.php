<!--- Modal donde se diligencia la informacion para un usuario al que se le envia un correo corporativo -->
<div class="modal fade modal-primary" id="modalTarea">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"><strong><?php echo utf8_encode($_SESSION['session']);?></strong>,<br> Crea una tarea programada</h4>
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
        <form class="was-validated" method="POST" id="formdata" onsubmit="return checkSubmit();">
          <div class="form-row">
            <div class="form-group col-md-12">
              <label class="strongFont" for="fullname">Tarea: <span class="text-danger">*</span></label>
              <input type="email" name="mail" class="form-control strongFont" id="mailContactanos" placeholder="Ingresa la dirección de E-Mail del destinatario" required>
            </div>
            <div class="form-group col-md-6">
              <label class="strongFont" for="mail">Fecha inicia gestión: <span class="text-danger">*</span></label>
              <input type="email" name="mail" class="form-control strongFont" id="mailContactanos" placeholder="Ingresa la dirección de E-Mail del destinatario" required>
            </div>
          </div>
          <div class="form-group col-md-6">
            <label class="strongFont" for="asunto">Fecha </label> <span class="text-danger">*</span></label>
            <input type="text" name="asunto" class="form-control strongFont" id="asunto" placeholder="Ingresa el asunto del correo" required>
          </div>
          <div class="form-group col-md-12">
            <label class="strongFont" for="comentario">Mensaje al destinatario</label> <span class="text-danger">*</span></label>
            <textarea class="form-control strongFont" id="comentarioContactanos" rows="5" maxlength="3000" name="comentario" required placeholder="Escribe tu comentario o sugerencia con máximo 3000 caracteres"></textarea>
          </div>
          <label class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
            <input type="radio" class="custom-control-input" name="copia" value="1" id="radioContactanos">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-description">Crear una copia del correo en contactanos@developermen.com</a></span>
          </label>
          <input type="hidden" name="usuDiligencia" value="<?php echo utf8_encode($_SESSION['session']);?>">
          <br><br>
          <div class="" align="center">
            <button class="btn btn-outline-primary rounded btn-lg" name="botonenviar" type="button" id="botonenviar" value="Enviar" onclick="validaFormContactanos()" data-loading-text="Enviando..." autocomplete="off">Enviar</button>
          </div>
          <br>
        </form>
      </div>
    </div>
  </div>
</div>
