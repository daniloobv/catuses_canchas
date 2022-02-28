<?php
$ModoConexion = 1;
if($ModoConexion == 1 ){
	$host = "localhost";    // sera el valor de nuestra BD
	$basededatos = "appweb_db";    // sera el valor de nuestra BD
	$usuariodb = "app_web_admin";    // sera el valor de nuestra BD
	$clavedb = "&*]!8k03moG+";    // sera el valor de nuestra BD
	error_reporting(1); //No me muestra errores
	$conn = new mysqli($host,$usuariodb,$clavedb,$basededatos);
	mysqli_set_charset($conn, "utf8");
	if ($conn->connect_errno) {
	    echo "Nuestro sitio experimenta fallos....1x";
	    exit();
	}
}

	
?>