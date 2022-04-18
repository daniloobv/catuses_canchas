<?php

  if($user['rol_id'] == 1 || $user['rol_id'] == 2 || $user['rol_id'] == 3){
}
else{
  $_SESSION['error'] = 'Usuarios no cuenta con permisos!';
  header('location:/canchas/acceder.php');
}



$aplicacion_modulo = "USUARIOS";
$titulo_modulo = "USUARIOS";

$btnRegresarVisible = false;
$btnNuevoVisible = true;
$btnOpcion1Visible = false;
$btnOpcion2Visible = false;

$btnRegresarText = 'REGRESAR';
$btnNuevoText = 'NUEVO USUARIO_';
$btnOpcion1Text = 'OPCION1';
$btnOpcion2Text = 'OPCION2';

$urlRegresarText = '../00_m_a_base/index.php';
$urlNuevoText = '#modal-add';
$urlOpcion1Text = '#';
$urlOpcion2Text = '#';



$modo_modulo = 0;//0=modo desarrollo, 1=modo listo para usar

//titulos de la tabla
$tabla="admin";

$campo0 = "id";
$campo1 = "Nombre de usuario";
$campo3 = "Rol";
$campo4 = "Nombre";
$campo5 = "Cargo";
$campo6 = "Horario";


$campo8 = "usuario_tipo_id";

//nombre de campos de la tabla
$dato0 = "id";
$dato1 = "id";
$dato2 = "id";
$dato3 = "id";
$dato4 = "id";

$dato6 = "id";



//toda la data a mostrar en la tabla de registros previamente guardados
$sql = "SELECT *, ".$tabla.".id as empid, roles.rol_descrip as rol_descripcion  FROM ".$tabla." INNER JOIN roles on roles.id = ".$tabla.".rol_id ";


$query = $conn->query($sql);




?>