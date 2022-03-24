<?php
	session_start();
	include '00_conn.php';

	if(!isset($_SESSION['admin']) || trim($_SESSION['admin']) == ''){
		header('location: /canchas/acceder.php');
	}

	$sql = "SELECT * FROM admin WHERE id = '".$_SESSION['admin']."'";
	$query = $conn->query($sql);
	$user = $query->fetch_assoc();


	// $sqlr2 = "SELECT bodegas.descripcion as bodega_nombre, bodegas.id as id_bodega FROM admin
	// left join bodegas on bodegas.sucursal_id = admin.sucursal_id
	// WHERE admin.id = '".$_SESSION['admin']."'";

	// $queryr2 = $conn->query($sqlr2);
	// $userr2 = $queryr2->fetch_assoc();
 // 	$bodega_user = $userr2['id_bodega'];
 // 	$bodega_nombre = $userr2['bodega_nombre'];


	$timezone = 'America/Santiago';
     date_default_timezone_set($timezone);
     $fecha_y_hora_actual = date("Y-m-d H:i:s");

//$fecha_y_hora_actual = date("Y-m-d H:i:s");
$fecha_actual = date("Y-m-d");
$hora_actual = date("H:i:s");


	
?>