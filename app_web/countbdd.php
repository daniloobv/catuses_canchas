<?php
function visitante($record) {
  $db_host = "localhost";
  $db_username = "id15085833_gians"; 
  $db_password = "Hitman-47-15g";
  $db_name = "id15085833_gian_datos";
  $db_table = "visitas";
  $counter_page = "access_page";
  $counter_field = "access_counter";


 //  $host = "localhost";    // sera el valor de nuestra BD
	// $basededatos = "id15085833_gian_datos";    // sera el valor de nuestra BD
	// $usuariodb = "id15085833_gians";    // sera el valor de nuestra BD
	// $clavedb = "Hitman-47-15g";     // sera el valor de nuestra BD
	// 

  $db = mysqli_connect($db_host, $db_username, $db_password, $db_name) or die("Host no disponible");
  $db = mysql_select_db ($db_name, $link) or die("Base de datos no disponible");

  $sql_call = "INSERT INTO ".$db_table." (".$counter_page.", ".$counter_field.") VALUES ('".$record."', 1) ON DUPLICATE KEY UPDATE ".$counter_field." = ".$counter_field." + 1";
mysqli_query($db, $sql_call) or die("Error al introducir los datos");


$sql_call = "SELECT ".$counter_field. " FROM ".$db_table." WHERE ".$counter_page. " = '".$record. "'";
$sql_result = mysqli_query($db, $sql_call) or die("Error en la petición SQL");
$row = mysqli_fetch_assoc($sql_result);
$x = $row[$counter_field];

mysqli_close($db);
return $x;
  }
?>