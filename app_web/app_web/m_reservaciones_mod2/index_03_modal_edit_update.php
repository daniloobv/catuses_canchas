<?php
	include '../00_includes/00_session.php';

	if(isset($_POST['edit'])){
		$empid = $_POST['id']; 		$tabla = $_POST['tabla'];			$modulo = "index.php";

		$nombre = $_POST['nombre'];
		$descripcion = $_POST['descripcion'];




		$sql = "UPDATE ".$tabla." SET nombre = '$nombre', descripcion = '$descripcion'
		WHERE id = '$empid'";

		if($conn->query($sql)){
			$_SESSION['success'] = 'actualizado con éxito ';//.$modulo;//.$sql;
		}
		else{
			$_SESSION['error'] = $conn->error;//.$sql;
		}
	}
	else{
		$_SESSION['error'] = 'Seleccionar  para editar primero';
	}
	header('location: '.$modulo);
?>