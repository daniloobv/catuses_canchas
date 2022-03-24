<?php
	include '../00_includes/00_session.php';

	if(isset($_POST['delete'])){
		$empid = $_POST['id'];
		$tabla = $_POST['tabla'];
		$modulo = "index.php";

		$sql = "DELETE FROM ".$tabla."  WHERE id = '$empid'";

		if($conn->query($sql)){
			$_SESSION['success'] = 'Eliminado con éxito '.$modulo;//.$sql;
		}
		else{
			$_SESSION['error'] = $conn->error.$sql;
		}
	}
	else{
		$_SESSION['error'] = 'Seleccionar  para editar primero'.$sql;
	}
	header('location: '.$modulo);
?>