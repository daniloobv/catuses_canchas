<?php
	//include 'includes/session.php';
	include '../00_includes/00_session.php';
	include 'configuracion.php';
	$modulo = "index.php";

	if(isset($_POST['add'])){
		$tabla = $_POST['tabla'];

		$dato01 = $_POST['nombre'];
		$dato02 = $_POST['rtn_dni'];

		$dato04 = $_POST['telefono'];
		$dato05 = $_POST['direccion'];
		$dato06 = $_POST['email'];


		$sql = "INSERT INTO ".$tabla."(nombre,cedula,pais_id,telefono,direccion,correo)
		VALUES ('$dato01','$dato02','0','$dato04','$dato05','$dato06')";

		if($conn->query($sql)){ $_SESSION['success'] = ' añadido satisfactoriamente';	}
		else{ $_SESSION['error'] = $conn->error.$sql; }
	}
	else{	$_SESSION['error'] = 'Fill up add form first';	}
	header('location: '.$modulo);
?>
