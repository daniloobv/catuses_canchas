<?php
	include '../00_includes/00_session.php';

	if(isset($_POST['edit'])){
		$empid = $_POST['id']; 		$tabla = $_POST['tabla'];			$modulo = "index.php";

		$descripcion = $_POST['descripcion'];
$t_descuento = $_POST['t_descuento'];


		$sql = "UPDATE ".$tabla." SET descripcion = '$descripcion', t_descuento = '$t_descuento'
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