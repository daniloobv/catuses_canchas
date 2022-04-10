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
$btnNuevoText = 'NUEVA RESERVACION';
$btnOpcion1Text = 'OPCION1';
$btnOpcion2Text = 'OPCION2';

$urlRegresarText = '../00_m_a_base/index.php';
$urlNuevoText = '#modal-add';
$urlOpcion1Text = '#';
$urlOpcion2Text = '#';



$modo_modulo = 0;//0=modo desarrollo, 1=modo listo para usar

//titulos de la tabla
$tabla="horarios";

$campo0 = "Id";
$campo1 = "Hora Inicio";
$campo2 = "Hora Final";
//$campo3 = "fecha crea";

//nombre de campos de la tabla
$dato0 = "idr";
$dato1 = "hora_inicio";
$dato2 = "hora_final";
//$dato3 = "fecha_crea";



//toda la data a mostrar en la tabla de registros previamente guardados
$sql = "SELECT *, ".$tabla.".id as idr FROM ".$tabla ;
$query = $conn->query($sql);




?>