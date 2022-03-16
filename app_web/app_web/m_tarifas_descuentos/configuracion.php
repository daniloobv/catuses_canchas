<?php

  if($user['rol_id'] == 1 || $user['rol_id'] == 2 || $user['rol_id'] == 3){
}
else{
  $_SESSION['error'] = 'Usuarios no cuenta con permisos!';
  header('location:/canchas/acceder.php');
}



$aplicacion_modulo = "CLIENTES";
$titulo_modulo = "CLIENTES";

$btnRegresarVisible = false;
$btnNuevoVisible = true;
$btnOpcion1Visible = false;
$btnOpcion2Visible = false;

$btnRegresarText = 'REGRESAR';
$btnNuevoText = 'NUEVO CLIENTE';
$btnOpcion1Text = 'OPCION1';
$btnOpcion2Text = 'OPCION2';

$urlRegresarText = '../00_m_a_base/index.php';
$urlNuevoText = '#modal-add';
$urlOpcion1Text = '#';
$urlOpcion2Text = '#';



$modo_modulo = 0;//0=modo desarrollo, 1=modo listo para usar

//titulos de la tabla
$tabla = "client";
$campo0 = "Id";
$campo1 = "Nombre";
$campo2 = "Correo";
$campo3 = "Telefono";

//nombre de campos de la tabla
$dato0 = "idr";
$dato1 = "nombre";
$dato2 = "correo";
$dato3 = "telefono";



//toda la data a mostrar en la tabla de registros previamente guardados
$sql = "SELECT *, ".$tabla.".id as idr FROM ".$tabla ;
$query = $conn->query($sql);




?>