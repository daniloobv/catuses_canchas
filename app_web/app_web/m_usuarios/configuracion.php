<?php
include '../00_includes/00_session.php';
if($user['rol_id'] == 1 || $user['rol_id'] == 2){
//$_SESSION['success'] = 'Usuarios con permisos!';
}
else{
  $_SESSION['error'] = 'Usuarios no cuenta con permisos!';
  header('location: ../index.php');
}

$modulo="usuarios";
$nombreModulo="Usuarios";
$nombreModulo_Plural="Usuario";
$nombreModulo_Singular="usuarios";
$tabla = "admin";
$genero = "f";

$modulo_add = "index_04_modal_add_f.php";
$modulo_edit = "index_05_modal_edit_f.php";
$modulo_delete = "index_06_modal_delete_f.php";


$btnNuevo_visible = true;
$btnRegresar_visible = false;

$btn_url_personalizado = false;

$url_personalizado_btn = $modulo_add;


$modo_compacto_del_menu_lateral_izquierdo=false;

$fijarSidebar = "";

if ($modo_compacto_del_menu_lateral_izquierdo) {
  $fijarSidebar = "sidebar-collapse";
}


?>

