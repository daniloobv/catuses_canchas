<?php

  if($user['rol_id'] == 1 || $user['rol_id'] == 2 || $user['rol_id'] == 3){
}
else{
  $_SESSION['error'] = 'Usuarios no cuenta con permisos!';
  header('location:/canchas/acceder.php');
}



$aplicacion_modulo = "TIPOS DE CLIENTES";
$titulo_modulo = "TIPOS DE CLIENTES";

$btnRegresarVisible = false;
$btnNuevoVisible = true;
$btnOpcion1Visible = false;
$btnOpcion2Visible = false;

$btnRegresarText = 'REGRESAR';
$btnNuevoText = 'NUEVO TIPO DE CLIENTE';
$btnOpcion1Text = 'OPCION1';
$btnOpcion2Text = 'OPCION2';

$urlRegresarText = '../00_m_a_base/index.php';
$urlNuevoText = '#modal-add';
$urlOpcion1Text = '#';
$urlOpcion2Text = '#';



$modo_modulo = 0;//0=modo desarrollo, 1=modo listo para usar

//titulos de la tabla
$tabla = "cliente_tipo";
$campo0 = "Id";
$campo1 = "Descripcion";
$campo2 = "Descuento";



//nombre de campos de la tabla
$dato0 = "idr";
$dato1 = "descripcion";
$dato2 = "t_descuento";




//toda la data a mostrar en la tabla de registros previamente guardados
$sql = "SELECT *, ".$tabla.".id as idr FROM ".$tabla ;
$query = $conn->query($sql);




?>