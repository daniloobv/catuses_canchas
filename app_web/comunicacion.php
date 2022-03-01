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
	    echo "Nuestro sitio experimenta fallos....1123";
	    exit();
	}
}


function OpenConnection()
{
   $serverName = "DESKTOP-FJ7CUSG\SQLEXPRESS";
   $connectionOptions = array( "Database"=>"crese_app_web_pruebas", "CharacterSet" => "UTF-8", "UID"=>"sa", "PWD"=>"Hitman-47g");
   //$connectionOptions = array( "Database"=>"crese_app_web_pruebas",  "UID"=>"sa", "PWD"=>"Hitman-47g");
   $conn = sqlsrv_connect($serverName, $connectionOptions);
   if($conn == false)
       die(FormatErrors(sqlsrv_errors()));
  return $conn;
}



