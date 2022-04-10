<?php
include '../00_includes/00_session.php';

if(isset($_POST['id'])&&isset($_POST['tabla'])){
	$tabla1= $_POST['tabla'];
	$tabla1= "client";
	$id = $_POST['id'];

	$sql = "SELECT *  FROM client inner join cliente_tipo on cliente_tipo.id = ".$tabla1.".cliente_categoria_id  WHERE ".$tabla1.".id = '$id'";
	$query = $conn->query($sql);
	$row = $query->fetch_assoc();
	echo json_encode($row);
}

if(isset($_POST['tablax'])){
	$tabla1= $_POST['tablax'];
	$sql = "SELECT *  FROM ".$tabla1;
	$query = $conn->query($sql);
	$row = $query->fetch_assoc();
	echo json_encode($row);
}
?>