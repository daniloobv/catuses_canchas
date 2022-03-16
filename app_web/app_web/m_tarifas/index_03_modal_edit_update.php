<?php
	include '../00_includes/00_session.php';

	if(isset($_POST['edit'])){
		$empid = $_POST['id']; 		$tabla = $_POST['tabla'];			$modulo = "index.php";

		$descripcion = $_POST['descripcion'];
		$detalles = $_POST['detalles'];
        $precio = $_POST['precio'];
		$direccion = $_POST['direccion'];
		$email = $_POST['email'];


		$sql = "UPDATE ".$tabla." SET descripcion = '$descripcion', detalles = '$detalles',
        precio = '$precio'
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