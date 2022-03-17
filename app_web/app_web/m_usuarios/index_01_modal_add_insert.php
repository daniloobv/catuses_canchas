<?php
	//include 'includes/session.php';
	include '../00_includes/00_session.php';
	include 'configuracion.php';
	$modulo = "index.php";

	if(isset($_POST['add'])){
		$tabla = $_POST['tabla'];

		$dato01 = $_POST['nombre'];
		$dato04 = $_POST['telefono'];
		$dato05 = $_POST['direccion'];
		$dato06 = $_POST['correo'];
		$dato07 = $_POST['cedula'];
		$dato08 = $_POST['cliente_categoria_id'];


		$sql = "INSERT INTO ".$tabla."(nombre,telefono,direccion,correo,cedula,cliente_categoria_id)
		VALUES ('$dato01','$dato04','$dato05','$dato06','$dato07','$dato08')";

		if($conn->query($sql)){ $_SESSION['success'] = ' añadido satisfactoriamente';	}
		else{ $_SESSION['error'] = $conn->error.$sql; }
	}
	else{	$_SESSION['error'] = 'Fill up add form first';	}
	header('location: '.$modulo);
?>
