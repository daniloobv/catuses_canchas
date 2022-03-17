<?php
include '../00_includes/00_session.php';

if(isset($_POST['edit'])){

		$modulo = "index.php";
		$id = $_POST['id'];
		$tabla = $_POST['tabla'];

		$hora_inicio = $_POST['time_ini'];
		$hora_final = $_POST['time_fin'];

		$sql = "UPDATE ".$tabla." SET hora_inicio = '$hora_inicio',hora_final = '$hora_final' WHERE id = '$id'";

		if($conn->query($sql)){
			$_SESSION['success'] = 'actualizado con éxito ';//.$sql;
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