<?php
$ModoConexion = 1;

$color_systema = 1; //0 = NEGRO  1=BLANCO

if($ModoConexion == 1 ){
	$host = "localhost";    // sera el valor de nuestra BD
	$basededatos = "delivery_cancha";    // sera el valor de nuestra BD
	$usuariodb = "delivery_cancha";    // sera el valor de nuestra BD
	$clavedb = "JEhOdddZXU3I";    // sera el valor de nuestra BD
	error_reporting(1); //No me muestra errores
	$conn = new mysqli($host,$usuariodb,$clavedb,$basededatos);
	mysqli_set_charset($conn, "utf8");
	if ($conn->connect_errno) {
	    echo "Nuestro sitio experimenta fallos...TEST_INICIAL";
	    exit();
	}
	 $aplicacion_nombre = "SISTEMA CANCHAS";
     $aplicacion_modulo = "";
     $aplicacion_usuario_logeado = "USUARIO DEMO";
}
?>


<!-- http://cancha.deliveryya.cl/app_web/00_includes/logout.php -->