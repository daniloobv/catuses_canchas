<?php
$ModoConexion = 1;
if($ModoConexion == 1 ){
	$host = "localhost";    // sera el valor de nuestra BD
	$basededatos = "catuses_canchas";    // sera el valor de nuestra BD
	$usuariodb = "catuses_canchas";    // sera el valor de nuestra BD
	$clavedb = "rqW,r.UOXvh(";    // sera el valor de nuestra BD
	error_reporting(1); //No me muestra errores
	$conn = new mysqli($host,$usuariodb,$clavedb,$basededatos);
	mysqli_set_charset($conn, "utf8");
	if ($conn->connect_errno) {
	    echo "Nuestro sitio experimenta fallos....1";
	    exit();
	}
}

