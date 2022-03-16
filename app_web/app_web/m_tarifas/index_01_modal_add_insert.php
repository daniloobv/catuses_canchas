<?php
	//include 'includes/session.php';
	include '../00_includes/00_session.php';
	include 'configuracion.php';
	$modulo = "index.php";

	if(isset($_POST['add'])){
		$tabla = $_POST['tabla'];

		$dato01 = $_POST['descripcion'];
		$dato02 = $_POST['detalles'];
		$dato03 = $_POST['precio'];



		$sql = "INSERT INTO ".$tabla."(descripcion,detalles,precio)
		VALUES ('$dato01','$dato02','$dato03')";

		if($conn->query($sql)){ $_SESSION['success'] = ' añadido satisfactoriamente';	}
		else{ $_SESSION['error'] = $conn->error.$sql; }
	}
	else{	$_SESSION['error'] = 'Fill up add form first';	}
	header('location: '.$modulo);
?>
