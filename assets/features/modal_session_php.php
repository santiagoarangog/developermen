<!-- Funcion en PHP para mostrar el Modal en cada Sesion --><?php
  # Iniciando la variable de control que permitir� mostrar o no el modal
  $exibirModal = false;
  # Verificando si existe o no la cookie
  if(!isset($_COOKIE["mostrarModal"]))
  {
    # Caso no exista la cookie entra aqu�
    # Creamos la cookie con la duraci�n que queramos
     
    $expirar = 3600; // muestra cada 1 hora
    //$expirar = 10800; // muestra cada 3 horas
    //$expirar = 21600; //muestra cada 6 horas
    $expirar = 43200; //muestra cada 12 horas
    //$expirar = 86400;  // muestra cada 24 horas
    setcookie('mostrarModal', 'SI', (time() + $expirar)); // mostrar� cada 12 horas.
    # Ahora nuestra variable de control pasar� a tener el valor TRUE (Verdadero)
    $exibirModal = true;
  }
?> <!-- Funcion en PHP para mostrar el Modal en cada Sesion -->
<?php if($exibirModal === true) : // Si nuestra variable de control "$exibirModal" es igual a TRUE activa nuestro modal y ser� visible a nuestro usuario. ?>
   <script>
     		 $(document).ready(function()
      		{
         	$("#mostrarmodal").modal("show");
         	/*Efecto de Desaparecer a un tiempo determinado*/
         	setTimeout(function() {
        		$("#mostrarmodal").fadeOut(1500);
    		},3000);
      		});
    	   </script>
  <?php endif; ?>