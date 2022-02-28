<?php
	//include 'includes/session.php';
	include '../00_includes/00_session.php';
	include 'configuracion.php';
	$modulo = "index.php";

	if(isset($_POST['add'])){
		$tabla = $_POST['tabla'];
		$dato01 = $_POST['mensaje'];

		$sql = "INSERT INTO ".$tabla."(mensaje,tipo_mensaje_id) VALUES ('$dato01','2')";

		if($conn->query($sql)){ $_SESSION['success'] = ' añadido satisfactoriamente';	}
		else{
			$_SESSION['error'] = $conn->error.' sintaxis sql usada: '.$sql;
		}
	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}
	header('location: '.$modulo);

?>
