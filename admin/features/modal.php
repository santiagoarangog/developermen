<?php
if ($oid != '') {
  cargarInfoModal($oid,$result);
}
if ($oid != '' && isset($_GET['accion'])?$_GET['accion']:''=='facturacion') {
  cargarInfoModalFacturacion($oid,$result2);
}
?>
<!--- Modal donde se diligencia la informacion para un usuario al que se le envia un correo corporativo -->
<div class="modal fade modal-primary" id="modalFacturacion">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"><strong><?php echo utf8_encode($_SESSION['session']);?></strong>, Envia un nuevo correo de facturación</h4>
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
        <form class="was-validated" method="POST" id="formFacturacion" onsubmit="return checkSubmit();">
          <div class="form-row">
            <div class="form-group col-md-6">
              <label class="strongFont" for="fullname">Nombre completo destinatario<span class="text-danger">*</span></label>
              <input type="text" name="nombreFacturacion" class="form-control strongFont" id="nombreFacturacion" placeholder="Ingresa el nombre completo del destinatario" required maxlength="50">
            </div>
            <div class="form-group col-md-6">
              <label class="strongFont" for="mail">Correo electrónico <span class="text-danger">*</span></label>
              <input type="email" name="mailFacturacion" class="form-control strongFont" id="mailFacturacion" placeholder="Ingresa la dirección de E-Mail del destinatario" required>
            </div>
          </div>
          <div class="form-group col-md-6">
            <label class="strongFont" for="mail">Producto <span class="text-danger">*</span></label>
            <input type="email" name="productoFacturacion" class="form-control strongFont" id="productoFacturacion" placeholder="Ingresa el nombre del producto" required>
          </div>
          <div class="form-group col-md-6">
            <label class="strongFont" for="comentario">Costo producto</label> <span class="text-danger">*</span></label>
            <input type="text" name="costoProducto" class="form-control strongFont" onkeypress="return soloNumerosSinDecimal(event);" maxlength="7" id="costoProducto" placeholder="Ingresa el valor del producto seleccionado" required>
          </div>
          <div class="form-group col-md-7">
            <label class="strongFont" for="asunto">Tipo de dominio </label> <span class="text-danger">*</span></label><br>
            <input class="custom-control-input" type="radio" name="tipDominio" id="tipDominio" value=".xyz"><span class="custom-control-indicator"></span><span class="custom-control-description">.xyz</a></span>
            <input class="custom-control-input" type="radio" name="tipDominio" id="tipDominio" value=".com"><span class="custom-control-indicator"></span><span class="custom-control-description">.com</a></span>
            <input class="custom-control-input" type="radio" name="tipDominio" id="tipDominio" value=".co"><span class="custom-control-indicator"></span><span class="custom-control-description">.co</a></span>
            <input class="custom-control-input" type="radio" name="tipDominio" id="tipDominio" value=".net"><span class="custom-control-indicator"></span><span class="custom-control-description">.net</a></span>
            <input class="custom-control-input" type="radio" name="tipDominio" id="tipDominio" value=".org"><span class="custom-control-indicator"></span><span class="custom-control-description">.org</a></span>
            <input class="custom-control-input" type="radio" name="tipDominio" id="tipDominio" value=".info"><span class="custom-control-indicator"></span><span class="custom-control-description">.info</a></span>
            <input class="custom-control-input" type="radio" name="tipDominio" id="tipDominio" value=".eu"><span class="custom-control-indicator"></span><span class="custom-control-description">.eu</a></span>
          </div>
          <div class="form-group col-md-5">
            <label class="strongFont" for="comentario">Valor dominio</label> <span class="text-danger">*</span></label>
            <input type="text" name="valDominio" class="form-control strongFont" onkeypress="return soloNumerosSinDecimal(event);" maxlength="7" id="valDominio" placeholder="Ingresa el valor del dominio seleccionado" required>
          </div>
          <div class="form-group col-md-6">
            <label class="strongFont" for="comentario">Costo gestión compra del dominio </label> <span class="text-danger">*</span></label>
            <input type="text" name="costoGesComDominio" class="form-control strongFont" onkeypress="return soloNumerosSinDecimal(event);" maxlength="7" id="costoGesComDominio" placeholder="Ingresa el valor del dominio seleccionado" required>
          </div>
          <div class="form-group col-md-6">
            <label class="strongFont" for="comentario">Costo desarrollo</label> <span class="text-danger">*</span></label>
            <input type="text" name="costoDesarrollo" class="form-control strongFont" onkeypress="return soloNumerosSinDecimal(event);" maxlength="7" id="costoDesarrollo" placeholder="Ingresa el valor del dominio seleccionado" required>
          </div>
          <div class="form-group col-md-7">
            <label class="strongFont" for="asunto">Tipo de hosting </label> <span class="text-danger">*</span></label><br>
            <input class="custom-control-input" type="radio" name="tipHosting" id="tipHosting" value="Hosting Básico"><span class="custom-control-indicator"></span><span class="custom-control-description">Básico</a></span>
            <input class="custom-control-input" type="radio" name="tipHosting" id="tipHosting" value="Hosting Mediana Empresa"><span class="custom-control-indicator"></span><span class="custom-control-description">Mediano</a></span>
            <input class="custom-control-input" type="radio" name="tipHosting" id="tipHosting" value="Hosting Empresarial"><span class="custom-control-indicator"></span><span class="custom-control-description">Empresarial</a></span>
          </div>
          <div class="form-group col-md-5">
            <label class="strongFont" for="asunto">Costo Hosting </label> <span class="text-danger">*</span></label><br>
            <input type="text" name="costHosting" class="form-control strongFont" id="costHosting" placeholder="Ingresa el pago realizado a la fecha" required>
          </div>

          <div class="form-group col-md-6">
            <label class="strongFont" for="asunto">Método de pago </label> <span class="text-danger">*</span></label><br>
            <input class="custom-control-input" type="radio" name="metPago" id="metPago" value="con tarjeta de crédito"><span class="custom-control-indicator"></span><span class="custom-control-description">Tarjeta</a></span>
            <input class="custom-control-input" type="radio" name="metPago" id="metPago" value="en efectivo de"><span class="custom-control-indicator"></span><span class="custom-control-description">Efectivo</a></span>
          </div>
          <div class="form-group col-md-6">
            <label class="strongFont" for="asunto">Pago realizado a la fecha </label> <span class="text-danger">*</span></label><br>
            <input type="text" name="pagoRealizado" class="form-control strongFont" id="pagoRealizado" placeholder="Ingresa el pago realizado a la fecha" required>
          </div>
          <div class="form-group col-md-12">
            <label class="strongFont" for="asunto">Nombre usuario o compañia </label> <span class="text-danger">*</span></label><br>
            <input type="text" name="nomUsuCompañia" class="form-control strongFont" id="nomUsuCompañia" placeholder="Ingresa el nombre del usuario o compañia" required>
          </div>
          <div class="form-group col-md-12">
            <label class="strongFont" for="comentario">Productos obsequio</label> <span class="text-danger">*</span></label><br>
            <input type="checkbox" name="obsequio1" value="1"><label for=""> Gestión en Google Maps • Producto Empresarial - $150.000"</label><br>
            <input type="checkbox" name="obsequio2" value="2"><label for=""> Gestión en Google Tag • Producto Empresarial - $150.000"</label>
          </div>
          <div class="form-group col-md-6">
            <label class="strongFont" for="asunto">Áplica ley morosos </label> <span class="text-danger">*</span></label><br>
            <input class="custom-control-input" type="radio" name="morosos" id="morosos" value="1"><span class="custom-control-indicator"></span><span class="custom-control-description">Si</a></span>
            <input class="custom-control-input" type="radio" name="morosos" id="morosos" value="2"><span class="custom-control-indicator"></span><span class="custom-control-description">No</a></span>
          </div>
          <div class="form-group col-md-6">
            <label class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
              <input type="radio" class="custom-control-input" name="copia" value="1" id="radioContactanos">
              <span class="custom-control-indicator"></span>
              <span class="custom-control-description">Crear una copia del correo en contactanos@developermen.com</a></span>
            </label>
          </div>
          <input type="hidden" name="usuDiligencia" value="<?php echo utf8_encode($_SESSION['session']);?>">
          <br><br>
          <div class="" align="center">
            <button class="btn btn-outline-primary rounded btn-lg" name="botonenviarFacturacion" type="button" id="botonenviarFacturacion" value="Enviar" onclick="validaFormFacturacion()" data-loading-text="Enviando..." autocomplete="off">Enviar</button>
          </div>
          <br>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- Modal visualizacion facturacion -->
<div class="modal fade modal-primary" id="modalFacturacionVer">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"><strong><?php echo utf8_encode($_SESSION['session']);?></strong>, Estas visualizando un correo de facturación</h4>
      </div>
      <div class="modal-body">
        <form class="was-validated" method="POST" onsubmit="return checkSubmit();">
          <div class="form-row">
            <div class="form-group col-md-6">
              <label class="strongFont" for="fullname">Nombre completo destinatario<span class="text-danger">*</span></label>
              <input type="text"  disabled name="nombreFacturacion" class="form-control strongFont" id="nombreFacturacion" placeholder="Ingresa el nombre completo del destinatario" required maxlength="50" value="<?php echo isset($result2['DS_NOMDESTINATARIO'])?$result2['DS_NOMDESTINATARIO']:''; ?>">
            </div>
            <div class="form-group col-md-6">
              <label class="strongFont" for="mail">Correo electrónico <span class="text-danger">*</span></label>
              <input type="email"  disabled name="mailFacturacion" class="form-control strongFont" id="mailFacturacion" placeholder="Ingresa la dirección de E-Mail del destinatario" required value="<?php echo isset($result2['DS_CORREODESTINATARIO'])?$result2['DS_CORREODESTINATARIO']:''; ?>">
            </div>
          </div>
          <div class="form-group col-md-6">
            <label class="strongFont" for="mail">Producto <span class="text-danger">*</span></label>
            <input type="email"  disabled name="productoFacturacion" class="form-control strongFont" id="productoFacturacion" placeholder="Ingresa el nombre del producto" required value="<?php echo isset($result2['DS_PRODUCTO'])?$result2['DS_PRODUCTO']:''; ?>">
          </div>
          <div class="form-group col-md-6">
            <label class="strongFont" for="comentario">Costo producto</label> <span class="text-danger">*</span></label>
            <input type="text" disabled name="costoProducto" class="form-control strongFont" onkeypress="return soloNumerosSinDecimal(event);" maxlength="7" id="costoProducto" placeholder="Ingresa el valor del producto seleccionado" required value="<?php echo isset($result2['CD_COSTOPRODUCTO'])?$result2['CD_COSTOPRODUCTO']:''; ?>">
          </div>
          <div class="form-group col-md-7">
            <label class="strongFont" for="asunto">Tipo de dominio </label> <span class="text-danger">*</span></label><br>
            <input class="custom-control-input" disabled type="radio" name="tipDominio" id="tipDominio" <?php if (isset($result2['SN_TIPODOMINIO']) && $result2['SN_TIPODOMINIO']==".xyz") echo "checked";?> value=".xyz"><span class="custom-control-indicator"></span><span class="custom-control-description">.xyz</a></span>
            <input class="custom-control-input" disabled type="radio" name="tipDominio" id="tipDominio" <?php if (isset($result2['SN_TIPODOMINIO']) && $result2['SN_TIPODOMINIO']==".com") echo "checked";?> value=".com"><span class="custom-control-indicator"></span><span class="custom-control-description">.com</a></span>
            <input class="custom-control-input" disabled type="radio" name="tipDominio" id="tipDominio" <?php if (isset($result2['SN_TIPODOMINIO']) && $result2['SN_TIPODOMINIO']==".co") echo "checked";?> value=".co"><span class="custom-control-indicator"></span><span class="custom-control-description">.co</a></span>
            <input class="custom-control-input" disabled type="radio" name="tipDominio" id="tipDominio" <?php if (isset($result2['SN_TIPODOMINIO']) && $result2['SN_TIPODOMINIO']==".net") echo "checked";?> value=".net"><span class="custom-control-indicator"></span><span class="custom-control-description">.net</a></span>
            <input class="custom-control-input" disabled type="radio" name="tipDominio" id="tipDominio" <?php if (isset($result2['SN_TIPODOMINIO']) && $result2['SN_TIPODOMINIO']==".org") echo "checked";?> value=".org"><span class="custom-control-indicator"></span><span class="custom-control-description">.org</a></span>
            <input class="custom-control-input" disabled type="radio" name="tipDominio" id="tipDominio" <?php if (isset($result2['SN_TIPODOMINIO']) && $result2['SN_TIPODOMINIO']==".info") echo "checked";?> value=".info"><span class="custom-control-indicator"></span><span class="custom-control-description">.info</a></span>
            <input class="custom-control-input" disabled type="radio" name="tipDominio" id="tipDominio" <?php if (isset($result2['SN_TIPODOMINIO']) && $result2['SN_TIPODOMINIO']==".eu") echo "checked";?> value=".eu"><span class="custom-control-indicator"></span><span class="custom-control-description">.eu</a></span>
          </div>
          <div class="form-group col-md-5">
            <label class="strongFont" for="comentario">Valor dominio</label> <span class="text-danger">*</span></label>
            <input type="text" name="valDominio" disabled class="form-control strongFont" onkeypress="return soloNumerosSinDecimal(event);" maxlength="7" id="valDominio" placeholder="Ingresa el valor del dominio seleccionado" required value="<?php echo isset($result2['CD_VALORDOMINIO'])?$result2['CD_VALORDOMINIO']:''; ?>">
          </div>
          <div class="form-group col-md-6">
            <label class="strongFont" for="comentario">Costo gestión compra del dominio </label> <span class="text-danger">*</span></label>
            <input type="text" disabled name="costoGesComDominio" class="form-control strongFont" onkeypress="return soloNumerosSinDecimal(event);" maxlength="7" id="costoGesComDominio" placeholder="Ingresa el valor del gestion compra dominio" required value="<?php echo isset($result2['CD_GESTCOMDOMINI'])?$result2['CD_GESTCOMDOMINI']:''; ?>">
          </div>
          <div class="form-group col-md-6">
            <label class="strongFont" for="comentario">Costo desarrollo</label> <span class="text-danger">*</span></label>
            <input type="text" disabled name="costoDesarrollo" class="form-control strongFont" onkeypress="return soloNumerosSinDecimal(event);" maxlength="7" id="costoDesarrollo" placeholder="Ingresa el valor del dominio seleccionado" required value="<?php echo isset($result2['CD_COSTODESARRO'])?$result2['CD_COSTODESARRO']:''; ?>">
          </div>
          <div class="form-group col-md-6">
            <label class="strongFont" for="asunto">Método de pago </label> <span class="text-danger">*</span></label><br>
            <input class="custom-control-input" disabled type="radio" name="metPago" id="metPago" <?php if (isset($result2['SN_METPAGO']) && $result2['SN_METPAGO']=="con tarjeta de crédito") echo "checked";?> value="con tarjeta de crédito"><span class="custom-control-indicator"></span><span class="custom-control-description">Tarjeta</a></span>
            <input class="custom-control-input" disabled type="radio" name="metPago" id="metPago" <?php if (isset($result2['SN_METPAGO']) && $result2['SN_METPAGO']=="en efectivo de") echo "checked";?> value="en efectivo de"><span class="custom-control-indicator"></span><span class="custom-control-description">Efectivo</a></span>
          </div>
          <div class="form-group col-md-6">
            <label class="strongFont" for="asunto">Pago realizado a la fecha </label> <span class="text-danger">*</span></label><br>
            <input type="text" name="pagoRealizado" disabled class="form-control strongFont" id="pagoRealizado" placeholder="Ingresa el pago realizado a la fecha" required value="<?php echo isset($result2['CD_PAGOREALIZADO'])?$result2['CD_PAGOREALIZADO']:''; ?>">
          </div>
          <div class="form-group col-md-12">
            <label class="strongFont" for="asunto">Nombre usuario o compañia </label> <span class="text-danger">*</span></label><br>
            <input type="text" name="nomUsuCompañia" disabled class="form-control strongFont" id="nomUsuCompañia" placeholder="Ingresa el nombre del usuario o compañia" required value="<?php echo isset($result2['DS_NOMUSUARIO'])?$result2['DS_NOMUSUARIO']:''; ?>">
          </div>
          <div class="form-group col-md-12">
            <label class="strongFont" for="comentario">Productos obsequio</label> <span class="text-danger">*</span></label><br>
            <input type="checkbox" name="obsequio1" disabled <?php if (isset($result2['SN_OBSEQUIO1']) && $result2['SN_OBSEQUIO1']=="1") echo "checked";?> value="1"><label for=""> Gestión en Google Maps • Producto Empresarial - $150.000"</label><br>
            <input type="checkbox" name="obsequio2" disabled <?php if (isset($result2['SN_OBSEQUIO2']) && $result2['SN_OBSEQUIO2']=="2") echo "checked";?> value="2"><label for=""> Gestión en Google Tag • Producto Empresarial - $150.000"</label>
          </div>
          <div class="form-group col-md-12">
            <label class="strongFont" for="asunto">Áplica ley morosos </label> <span class="text-danger">*</span></label><br>
            <input class="custom-control-input"disabled  type="radio" name="morosos" id="morosos" <?php if (isset($result2['SN_MOROSOS']) && $result2['SN_MOROSOS']=="1") echo "checked";?> value="1"><span class="custom-control-indicator"></span><span class="custom-control-description">Si</a></span>
            <input class="custom-control-input" disabled type="radio" name="morosos" id="morosos" <?php if (isset($result2['SN_MOROSOS']) && $result2['SN_MOROSOS']=="2") echo "checked";?> value="2"><span class="custom-control-indicator"></span><span class="custom-control-description">No</a></span>
          </div>
          <div class="form-group col-md-12">
            <label class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
              <input type="radio" disabled class="custom-control-input" name="copia" <?php if (isset($result2['SN_COPIA']) && $result2['SN_COPIA']=="1") echo "checked";?> value="1" id="radioContactanos">
              <span class="custom-control-indicator"></span>
              <span class="custom-control-description">Crear una copia del correo en contactanos@developermen.com</a></span>
            </label>
          </div>
          <input type="hidden" name="usuDiligencia" value="<?php echo utf8_encode($_SESSION['session']);?>">
          <br><br>
          <div class="" align="center">
            <button class="btn btn-outline-primary rounded btn-lg" disabled name="botonenviarFacturacion" type="button" id="botonenviarFacturacion" value="Enviar" onclick="validaFormFacturacion()" data-loading-text="Enviando..." autocomplete="off">Enviar</button>
          </div>
          <br>
        </form>
      </div>
    </div>
  </div>
</div>

<!--- Modal donde se diligencia la informacion para un usuario al que se le envia un correo corporativo -->
<div class="modal fade modal-primary" id="modalCorreoCorpo">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"><strong><?php echo utf8_encode($_SESSION['session']);?></strong>, Envia un nuevo correo</h4>
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
        <form class="was-validated" method="POST" id="correoCorpora" onsubmit="return checkSubmit();">
          <div class="form-row">
            <div class="form-group col-md-12">
              <label class="strongFont" for="fullname">Nombre completo <span class="text-danger">*</span></label>
              <input type="text" name="nombre" class="form-control strongFont" id="nomCorreoCorpora" placeholder="Ingresa el nombre completo del destinatario" required maxlength="50">
            </div>
            <div class="form-group col-md-12">
              <label class="strongFont" for="mail">Correo electrónico <span class="text-danger">*</span></label>
              <input type="email" name="mail" class="form-control strongFont" id="mailCorreoCorpora" placeholder="Ingresa la dirección de E-Mail del destinatario" required>
            </div>
          </div>
          <div class="form-group col-md-12">
            <label class="strongFont" for="asunto">Asunto </label> <span class="text-danger">*</span></label>
            <input type="text" name="asunto" class="form-control strongFont" id="asuntoCorreoCorpora" placeholder="Ingresa el asunto del correo" required>
          </div>
          <div class="form-group col-md-12">
            <label class="strongFont" for="comentario">Mensaje al destinatario</label> <span class="text-danger">*</span></label>
            <textarea class="form-control strongFont" id="comentarioCorreoCorpora" rows="5" maxlength="3000" name="comentario" required placeholder="Escribe tu comentario o sugerencia con máximo 3000 caracteres"></textarea>
          </div>
          <label class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
            <input type="radio" class="custom-control-input" name="copia" value="1" id="radioCorreoCorpora">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-description">Crear una copia del correo en contactanos@developermen.com</a></span>
          </label>
          <input type="hidden" name="usuDiligencia" value="<?php echo utf8_encode($_SESSION['session']);?>">
          <br><br>
          <div class="" align="center">
            <button class="btn btn-outline-primary rounded btn-lg" name="botonenviar" type="button" id="botonenviarCorreoCorpora" value="Enviar" onclick="return validaFormCorreoCorpora()" data-loading-text="Enviando..." autocomplete="off">Enviar</button>
          </div>
          <br>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Modal donde se visualiza la informacion enviada al usuario en el correo corporativo diligenciado -->
<div class="modal fade modal-primary" id="modalMailVisualizar">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"><strong><?php echo utf8_encode($_SESSION['session']);?></strong>, Estas visualizando un correo enviado</h4>
      </div>
      <hr style="margin-bottom:0%;">
      <div class="modal-body">
        <form class="was-validated" method="POST" onsubmit="return checkSubmit();">
          <div class="form-row">
            <div class="form-group col-md-12">
              <label class="strongFont" for="fullname">Nombre completo <span class="text-danger">*</span></label>
              <input type="text" disabled name="nombre" class="form-control strongFont" id="nombreContactanos" placeholder="Ingresa el nombre completo del destinatario" required maxlength="50" value="<?php echo isset($result['DS_NOMDESTINATARIO'])?$result['DS_NOMDESTINATARIO']:''; ?>">
            </div>
            <div class="form-group col-md-12">
              <label class="strongFont" for="mail">Correo electrónico <span class="text-danger">*</span></label>
              <input type="email" disabled name="mail" class="form-control strongFont" id="mailContactanos" placeholder="Ingresa la dirección de E-Mail del destinatario" required value="<?php echo isset($result['DS_CORREODESTINATARIO'])?$result['DS_CORREODESTINATARIO']:''; ?>">
            </div>
          </div>
          <div class="form-group col-md-12">
            <label class="strongFont" for="asunto">Asunto </label> <span class="text-danger">*</span></label>
            <input type="text" disabled name="asunto" class="form-control strongFont" id="asunto" placeholder="Ingresa el asunto del correo" required value="<?php echo isset($result['DS_ASUNTODESTINATARIO'])?$result['DS_ASUNTODESTINATARIO']:''; ?>">
          </div>
          <div class="form-group col-md-12">
            <label class="strongFont" for="comentario">Mensaje al destinatario</label> <span class="text-danger">*</span></label>
            <textarea class="form-control strongFont" id="comentarioContactanos" rows="5" maxlength="3000" disabled name="comentario" required placeholder="Escribe tu comentario o sugerencia con máximo 3000 caracteres" value="<?php echo isset($result['DS_MENSAJEDESTINATARIO'])?$result['DS_MENSAJEDESTINATARIO']:''; ?>"><?php echo isset($result['DS_MENSAJEDESTINATARIO'])?$result['DS_MENSAJEDESTINATARIO']:''; ?></textarea>
          </div>
          <label class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
            <input type="radio" disabled <?php if (isset($result['SN_COPIA']) && $result['SN_COPIA']=="1") echo "checked";?> class="custom-control-input" name="copia" value="1" id="radioContactanos">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-description">Crear una copia del correo en contactanos@developermen.com</a></span>
          </label>
          <input type="hidden" name="usuDiligencia" value="<?php echo utf8_encode($_SESSION['session']);?>">
          <br><br>
          <br>
        </form>
      </div>
    </div>
  </div>
</div>

<!--- Modal donde se diligencia la informacion para un usuario que diligencio un formulario de contactanos y al cual le daremos gestion -->
<div class="modal fade modal-primary" id="modalMailContactanos">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"><strong><?php echo utf8_encode($_SESSION['session']);?></strong>,<br> Envia un nuevo correo de respuesta al contacto</h4>
      </div>
      <hr style="margin-bottom:0%;">
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
        <form class="was-validated" method="POST" id="formRespuestaContacto" onsubmit="return checkSubmit();">
          <div class="form-row">
            <div class="form-group col-md-12">
              <label class="strongFont" for="fullname">Nombre completo <span class="text-danger">*</span></label>
              <input type="text" name="nombre" class="form-control strongFont" id="nombreRespContactanos" placeholder="Ingresa el nombre completo del destinatario" required maxlength="50">
            </div>
            <div class="form-group col-md-12">
              <label class="strongFont" for="mail">Correo electrónico <span class="text-danger">*</span></label>
              <input type="email" name="mail" class="form-control strongFont" id="mailRespContactanos" placeholder="Ingresa la dirección de E-Mail del destinatario" required>
            </div>
          </div>
          <div class="form-group col-md-12">
            <label class="strongFont" for="asunto">Asunto </label> <span class="text-danger">*</span></label>
            <input type="text" name="asunto" class="form-control strongFont" id="asuntoRespContactanos" placeholder="Ingresa el asunto del correo" required>
          </div>
          <div class="form-group col-md-12">
            <label class="strongFont" for="comentario">Mensaje al destinatario</label> <span class="text-danger">*</span></label>
            <textarea class="form-control strongFont" id="comentarioRespContactanos" rows="5" maxlength="3000" name="comentario" required placeholder="Escribe tu comentario o sugerencia con máximo 3000 caracteres"></textarea>
          </div>
          <label class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
            <input type="radio" class="custom-control-input" name="copia" value="1" id="radioRespContactanos">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-description">Crear una copia del correo en contactanos@developermen.com</a></span>
          </label>
          <input type="hidden" name="usuDiligencia" value="<?php echo utf8_encode($_SESSION['session']);?>">
          <br><br>
          <div class="" align="center">
            <button class="btn btn-outline-primary rounded btn-lg" name="botonenviar" type="button" id="botonenviar" value="Enviar" onclick="return validaFormRespContactanos()" data-loading-text="Enviando..." autocomplete="off">Enviar</button>
          </div>
          <br>
        </form>
      </div>
    </div>
  </div>
</div>
