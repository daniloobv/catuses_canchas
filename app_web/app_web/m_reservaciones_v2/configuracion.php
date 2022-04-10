<?php

  if($user['rol_id'] == 1 || $user['rol_id'] == 2 || $user['rol_id'] == 3){
}
else{
  $_SESSION['error'] = 'Usuarios no cuenta con permisos!';
  header('location:/canchas/acceder.php');
}



$aplicacion_modulo = "RESERVACIONES";
$titulo_modulo = "RESERVACIONES";

$btnRegresarVisible = false;
$btnNuevoVisible = false;
$btnOpcion1Visible = false;
$btnOpcion2Visible = false;

$btnRegresarText = 'REGRESAR';
$btnNuevoText = 'NUEVA RESERVA';
$btnOpcion1Text = 'OPCION1';
$btnOpcion2Text = 'OPCION2';

$urlRegresarText = '../00_m_a_base/index.php';
$urlNuevoText = '#modal-add';
$urlOpcion1Text = '#';
$urlOpcion2Text = '#';



$modo_modulo = 0;//0=modo desarrollo, 1=modo listo para usar

//titulos de la tabla
$tabla = "eventoscalendar";
$campo0 = "Id";
$campo1 = "Evento";
$campo2 = "Cliente";
$campo3 = "Fecha Inicio";
$campo4 = "Fecha Final";


//nombre de campos de la tabla
$dato0 = "idr";
$dato1 = "evento";
$dato2 = "nombre";
$dato3 = "fecha_inicio";
$dato4 = "fecha_fin";




//toda la data a mostrar en la tabla de registros previamente guardados
$sql = "SELECT *, ".$tabla.".id as idr FROM ".$tabla." INNER JOIN client ON client.id = ".$tabla.".cliente_id";
$query = $conn->query($sql);




?>

<?php
include('config.php');

  $SqlEventos   = ("SELECT * FROM eventoscalendar");
  $resulEventos = mysqli_query($conn, $SqlEventos);

?>