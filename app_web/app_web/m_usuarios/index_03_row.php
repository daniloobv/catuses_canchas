<?php
include '../00_includes/session.php';

if(isset($_POST['id'])){
	$id = $_POST['id'];

        //$sql = "SELECT * FROM position WHERE id = '$id'";
        //$sql = "SELECT *, admin.id AS userid FROM admin LEFT JOIN roles ON roles.id=admin.rol_id WHERE admin.id = '$id'";
	$sql = "SELECT *,

	admin.id AS userid,
	empresas.id as empresa_id


	FROM admin
	LEFT JOIN roles ON roles.id=admin.rol_id
	LEFT JOIN empresas on empresas.id = admin.empresa_id
	WHERE admin.id = '$id'";

	$query = $conn->query($sql);
	$row = $query->fetch_assoc();

	echo json_encode($row);
}
