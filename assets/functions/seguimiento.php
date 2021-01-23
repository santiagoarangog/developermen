<?php
/*!
@functionsApp Developer Men - Support
@version 1.0.
@description Funciones que se ejecutan con una función Ajax.
@Autor Santiago Arango Gutierrez - CEO & Development Developer Men.
@Año 2019.
@Modificacion _
@Año modificacion _
*/
require('conexion.php');
require('sendMail.php');
function validarContacto($contacto,&$result){
  conectar($conn);
  $sql = "SELECT OID
  FROM WEB_CONTACTANOS";
  $error = "Error: No fue posible consultar la información de la base de datos de contactos";
  executeQuery($conn,$sql,$error,$stmt);
  while ($row = mysqli_fetch_assoc($stmt)) {
    if (password_verify($row['OID'],$contacto)) {
      $sqlInfo = "SELECT OID,DS_NOMBRE,DS_CORREO,DS_OBSERVACION
      FROM WEB_CONTACTANOS
      WHERE OID = '".$row['OID']."'";
      $errorInfo = "Error: No fue posible consultar la información del contacto";
      executeQuery($conn,$sqlInfo,$errorInfo,$stmt);
      $result = mysqli_fetch_assoc($stmt);
    }
  }
  closeConnection($stmt,$conn);
}

/*Función que lista el contacto realizado por el usuario*/
function listarContacto($oid){
  conectar($conn);
  $sql = "SELECT A.OID,A.DS_NOMBRE AS USUARIO,CD_NUMTELEFONO,B.DS_NOMBRE AS PRODUCTO,C.DS_NOMBRE AS SERVICIO,
  A.DS_OBSERVACION AS GESTION,DATE_FORMAT(DT_FECDILIG,'%d/%m/%y %h:%m:%s') AS DT_FECHADILIG
  FROM WEB_CONTACTANOS A
  INNER JOIN WEB_PRODUCTOS B ON A.CD_OIDPRODUCTO = B.OID
  INNER JOIN WEB_SERVICIOS C ON A.CD_OIDSERVICIO = C.OID
  WHERE A.OID = '$oid'";
  $error = "Error: No fue posible consultar el contacto";
  executeQuery($conn,$sql,$error,$stmt);
  while ($row = mysqli_fetch_assoc($stmt)) {
    echo '
    <div class="timeline-block">
    <span class="timeline-step border-default bg-default"></span>
    <div class="timeline-content">
    <small class="text-muted font-weight-bold">'.$row['USUARIO'].'</small>
    <h6>Envío contacto</h6>
    <small class="d-block text-muted">
    <i class="far fa-clock mr-2"></i>
    '.$row['DT_FECHADILIG'].'
    </small>
    <p class="text-sm lh-160">
    <i class="fas fa-caret-right"></i> <span class="font-weight-bold">Número telefónico:</span> '.$row['CD_NUMTELEFONO'].'
    <br>
    <i class="fas fa-caret-right"></i> <span class="font-weight-bold">Producto seleccionado:</span> '.$row['PRODUCTO'].'
    <br>
    <i class="fas fa-caret-right"></i> <span class="font-weight-bold">Servicio seleccionado:</span> '.$row['SERVICIO'].'
    <br>
    <i class="fas fa-caret-right"></i> <span class="font-weight-bold">Descripción:</span> '.$row['GESTION'].'
    </p>
    </div>
    </div>
    ';
  }
  closeConnection($stmt,$conn);
}

/*Función que lista las gestiones echas por el usuario y por los usuarios de Developer Men*/
function listarGestion($oid){
  conectar($conn);
  $sql = "SELECT A.OID AS OID,C.DS_NOMBRE AS USUARIO,'&bull; Asesor Developer Men' AS TIPUSUARIO,B.DS_NOMBRE AS CATEGORIA,DS_GESTION AS GESTION, '2' AS TIPGESTION,
  DATE_FORMAT(A.DT_FECHAGESTION,'%d/%m/%y %h:%m:%s') AS DT_FECHADILIG
  FROM WEB_GESTIONXCONTACT A
  INNER JOIN WEB_CATEGORIAS B ON A.FK_OIDCATEGORIA = B.OID
  INNER JOIN WEB_ASESORES C ON A.CD_USUGESTION = C.OID
  WHERE A.FK_OIDCONTACT = '$oid'
  ORDER BY DT_FECHADILIG ASC";
  $error = "Error: No fue posible listar las gestiones";
  executeQuery($conn,$sql,$error,$stmt);
  $i = 1;
  while ($row = mysqli_fetch_assoc($stmt)){
    if ($i == '1') {$border = "border-primary timeline-step-sm";}else if($i == '2'){$border = "border-warning timeline-step-sm";}else if($i == '4'){$border = "border-success timeline-step-sm";}else{$border = "border-info timeline-step-sm";}
    echo '
    <div class="timeline-block">
    <span class="timeline-step '.$border.'"></span>
    <div class="timeline-content">
    <small class="text-muted font-weight-bold">'.$row['USUARIO'].'  <i class="fas fa-check text-success"></i></small>
    <h6>'.$row['CATEGORIA'].'</h6>
    <small class="d-block text-muted">
    <i class="far fa-clock mr-2"></i>
    '.$row['DT_FECHADILIG'].'
    </small>
    <p class="text-sm lh-160">
    '.$row['GESTION'].'
    </p>
    </div>
    </div>
    ';
    $i = $i + 1 ;
  }
}

/*Función que lista los asesores a cargo del proceso*/
function listarAsesores($oid){
  conectar($conn);
  $sql = "SELECT A.DS_NOMBRE,A.DS_CARGO,A.DS_IMAGEN,A.SN_ESTADO
  FROM WEB_ASESORES A
  INNER JOIN WEB_GESTIONXCONTACT B ON B.CD_USUGESTION = A.OID
  INNER JOIN WEB_CONTACTANOS C ON C.OID = B.FK_OIDCONTACT
  WHERE C.OID = '$oid'
  GROUP BY A.DS_NOMBRE";
  $error = "Error: No fue posible listar los asesores a cargo";
  executeQuery($conn,$sql,$error,$stmt);
  if (mysqli_num_rows($stmt) > 0) {
    echo '<div class="pt-5 delimiter-top">';
    echo '<!-- Title -->
    <h6 class="mb-4 text-muted">
    <i class="fas fa-user-friends mr-2"></i> Asesores a cargo
    </h6>
    <!-- Rating cards -->
    <div class="row">';
    while ($row = mysqli_fetch_assoc($stmt)) {
      echo '<div class="col-lg-6">
      <div class="card bg-secondary">
      <div class="p-3">
      <div class="d-flex align-items-center">
      <div>
      <a href="#" class="avatar rounded-circle d-inline-block">
      <img alt="Image placeholder" src="'.$row['DS_IMAGEN'].'" class="">
      </a>
      </div>
      <div class="pl-3">
      <a class="h6 text-sm">'.$row['DS_NOMBRE'].'</a><br>
      <a class="h6 text-sm">'.$row['DS_CARGO'].'</a>
      <span class="static-rating static-rating-sm d-block">
      <i class="star far fa-star voted"></i>
      <i class="star far fa-star voted"></i>
      <i class="star far fa-star voted"></i>
      <i class="star far fa-star voted"></i>
      <i class="star far fa-star voted"></i>
      </span>
      </div>
      </div>
      </div>
      </div>
      </div>';
    }
    echo '</div>
    </div>';
  }
}

/*Función que lista las categorias del proceso*/
function listarCategorias(){
  conectar($conn);
  $sql = "";
  $error = "";
  executeQuery($conn,$sql,$error,$stmt);
  if (mysqli_num_rows($stmt) <= 1) {
    echo '<div class="pt-5 mt-5 delimiter-top">';
    echo '<!-- Title -->
    <h6 class="text-muted">
    <i class="fas fa-tags mr-2 mb-4"></i> Categorias de tu contacto
    </h6>';
    echo '
    <!-- Skil badges -->
    <div>
    <a href="#" class="badge badge-lg badge-soft-primary d-inline-block mr-2 mb-2">Web Design</a>
    <a href="#" class="badge badge-lg badge-soft-primary d-inline-block mr-2 mb-2">Development</a>
    <a href="#" class="badge badge-lg badge-soft-primary d-inline-block mr-2 mb-2">UI/UX</a>
    <a href="#" class="badge badge-lg badge-soft-primary d-inline-block mr-2 mb-2">Bootstrap 4</a>
    <a href="#" class="badge badge-lg badge-soft-primary d-inline-block mr-2 mb-2">User Experience</a>
    <a href="#" class="badge badge-lg badge-soft-primary d-inline-block mr-2 mb-2">Psychology</a>
    <a href="#" class="badge badge-lg badge-soft-primary d-inline-block mr-2 mb-2">Photoshop</a>
    </div>';
    echo "</div>";
  }
}

// Validacion que se realiza para validar que se reciba un dato por $_POST o $_GET segun el metodo utilizado - Ajax
if(isset($_POST['phone'])){
  $phone = $_POST['phone'];
  enviarInfoWpp($phone);
}
/*Funcion para actualizar la contraseña generada al usuario seleccionado*/
function enviarInfoWpp($phone){
  $text = "*DEVMENCONTA".$_POST['oidContacto'].'* ';
  $text.= $_POST['asuntoWpp'];
  echo $text;
}
?>
