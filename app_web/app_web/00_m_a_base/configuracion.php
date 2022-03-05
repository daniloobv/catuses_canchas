<?php

  if($user['rol_id'] == 1 || $user['rol_id'] == 2 || $user['rol_id'] == 3){
}
else{
  $_SESSION['error'] = 'Usuarios no cuenta con permisos!';
  header('location:/canchas/acceder.php');
}

$aplicacion_modulo = "PLANTILLA PRINCIPAL";
$titulo_modulo = "PLANTILLA PRINCIPAL";

$btnRegresarVisible = true;
$btnNuevoVisible = true;
$btnOpcion1Visible = true;
$btnOpcion2Visible = true;

$btnRegresarText = 'REGRESAR';
$btnNuevoText = 'NUEVO';
$btnOpcion1Text = 'OPCION1';
$btnOpcion2Text = 'OPCION2';

$urlRegresarText = '../00_m_a_base/index.php';
$urlNuevoText = '#modal-add';
$urlOpcion1Text = '#';
$urlOpcion2Text = '#';



 ?>