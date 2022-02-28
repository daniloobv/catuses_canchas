<?php
include 'configuracion.php';
if(isset($_POST['delete'])){
	$id = $_POST['id'];
	$sql = "DELETE FROM admin WHERE id = '$id'";
	if($conn->query($sql)){
		$_SESSION['success'] = 'Usuario eliminado con éxito';
	}
	else{
		$_SESSION['error'] = $conn->error;
	}
}
else{
	$_SESSION['error'] = 'Seleccione el elemento para eliminar primero';
}
header('location: index.php');

?>