<?php
	include '../00_includes/00_session.php';

	if(isset($_POST['edit'])){
		$empid = $_POST['id']; 		$tabla = $_POST['tabla'];			$modulo = "index.php";

		$rol_id = $_POST['rol_id'];
		$username = $_POST['username'];
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];

		$sql = "UPDATE ".$tabla." SET
		rol_id = '$rol_id',
		username = '$username',
		lastname = '$lastname',
        firstname = '$firstname'
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