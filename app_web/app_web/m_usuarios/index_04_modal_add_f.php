<?php
include 'configuracion.php';

if(isset($_POST['add'])){
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$usuario = $_POST['username'];
	$contrasenia = $_POST['clave'];
	$rol_id = $_POST['rol_id'];
	$filename = $_FILES['photo']['name'];

	$pass_cifrado = password_hash($contrasenia, PASSWORD_DEFAULT);

	$empresa_id = $_POST['empresa_id'];
	$sucursal_id = $_POST['sucursal_id'];

	if (!empty($filename)) {
		move_uploaded_file($_FILES['photo']['tmp_name'], '../../images/' . $filename);
	}


	$sql = "INSERT INTO admin (firstname, lastname, username, password, rol_id, photo, empresa_id,sucursal_id)
	VALUES ('$firstname', '$lastname', '$usuario', '$pass_cifrado','$rol_id', '$filename','$empresa_id','$sucursal_id')";
	if($conn->query($sql)){


		$_SESSION['success'] = $sql;
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