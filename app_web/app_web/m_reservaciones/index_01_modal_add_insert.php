<?php
	//include 'includes/session.php';
	include '../00_includes/00_session.php';
	include 'configuracion.php';
	$modulo = "index.php";

	if(isset($_POST['add'])){
		$tabla = $_POST['tabla'];

		$dato01 = $_POST['time_ini'];
		$dato02 = $_POST['time_fin'];

		$sql = "INSERT INTO ".$tabla."(hora_inicio,hora_final,estado_registro) VALUES ('$dato01','$dato02','1')";

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
