<?php

include 'configuracion.php';
if(isset($_POST['edit'])){
	$userid = $_POST['id'];
	$accion = 'Edito';
	$table_afectada = 'admin';
	$tabla_afectada = 'Usuarios';
	include 'includes/aviso_notificar.php';
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$usuario = $_POST["username"];
    // $contrasenia = $_POST["clave"];
	$rol_id = $_POST["rol_id"];
	$empresa_id = $_POST['empresa_id'];
	$sucursal_id = $_POST['sucursal_id'];
    // $pass_cifrado = password_hash($contrasenia, PASSWORD_DEFAULT);
    //$sql = "UPDATE admin SET firstname = '$firstname', lastname = '$lastname', username = '$usuario', password = '$pass_cifrado', rol_id = '$rol_id' WHERE id = '$id'";
	$sql = "UPDATE admin SET firstname = '$firstname', lastname = '$lastname', username = '$usuario', rol_id = '$rol_id', empresa_id = '$empresa_id', sucursal_id = '$sucursal_id' WHERE id = '$userid'";
	if($conn->query($sql)){
		$_SESSION['success'] = 'Usuario actualizado con éxito';
	}
	else{
		$_SESSION['error'] = $conn->error;
	}
}
else{
	$_SESSION['error'] = 'Seleccionar usuario para editar primero';
}
header('location: index.php');
?>