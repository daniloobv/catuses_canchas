<?php
	include '../00_includes/00_session.php';

	if(isset($_POST['edit'])){
		$empid = $_POST['id']; 		$tabla = $_POST['tabla'];			$modulo = "index.php";

		$nombre = $_POST['nombre'];
		$telefono = $_POST['telefono'];
		$correo = $_POST['correo'];
		$cedula = $_POST['cedula'];
		$cliente_categoria_id = $_POST['cliente_categoria_id'];



		$sql = "UPDATE ".$tabla." SET

		nombre = '$nombre',
		cedula = '$cedula',
        telefono = '$telefono',
        correo = '$correo',
        cliente_categoria_id = '$cliente_categoria_id'

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