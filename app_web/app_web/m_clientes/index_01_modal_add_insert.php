<?php
	//include 'includes/session.php';
	include '../00_includes/00_session.php';
	include 'configuracion.php';
	$modulo = "index.php";

if(isset($_POST['add'])){
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$username = $_POST['username'];
	$contrasenia = $_POST['password'];
	$rol_id = $_POST['rol_id'];
	$filename = $_FILES['photo']['name'];

	$pass_cifrado = password_hash($contrasenia, PASSWORD_DEFAULT);


	if (!empty($filename)) {
		move_uploaded_file($_FILES['photo']['tmp_name'], '../../images/' . $filename);
	}


	$sql = "INSERT INTO admin (firstname, lastname, username, password, rol_id, photo)
	VALUES ('$firstname', '$lastname', '$username', '$pass_cifrado','$rol_id', '$filename')";
	if($conn->query($sql)){


		//$_SESSION['success'] = $sql;
		$_SESSION['success'] = 'Añadido satisfactoriamente';
	}
	else{
		$_SESSION['error'] = $conn->error;
	}







}
else{
	$_SESSION['error'] = 'Fill up add form first';
}



header('location: index.php');
?>