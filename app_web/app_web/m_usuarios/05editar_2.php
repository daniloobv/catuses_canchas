
<?php
	//include 'includes/session.php';
include '../00_includes/00_session.php';
//include '00configuraciones.php';

if (isset($_POST['update2'])) {
	$userid = $_POST['id'];
	$contrasenia = $_POST['clave'];
	$pass_cifrado = password_hash($contrasenia, PASSWORD_DEFAULT);

	$sql = "UPDATE admin SET password = '$pass_cifrado' WHERE id = '$userid'";

	if ($conn->query($sql)) {
		$_SESSION['success'] = 'Nueva Contraseña Guardada con éxito';
	} else {
		$_SESSION['error'] = $conn->error;
	}




} else {
	$_SESSION['error'] = 'Seleccionar usuario para editar primero';
}

header('location: index.php');

?>
