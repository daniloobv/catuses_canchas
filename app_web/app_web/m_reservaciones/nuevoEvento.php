<?php
date_default_timezone_set("America/Santiago");
setlocale(LC_ALL,"es_ES");
//$hora = date("g:i:A");

require("../00_includes/00_session.php");
//$evento            = ucwords($_REQUEST['evento']);
$evento            = "ALQUILER ";
$f_inicio          = $_REQUEST['fecha_inicio'];
$fecha_inicio      = date('Y-m-d', strtotime($f_inicio)); 

$f_fin             = $_REQUEST['fecha_fin']; 
$seteando_f_final  = date('Y-m-d', strtotime($f_fin));  
$fecha_fin1        = strtotime($seteando_f_final."+ 1 days");
$fecha_fin         = date('Y-m-d', ($fecha_fin1));  
$color_evento      = $_REQUEST['color_evento'];

$cliente_id   = $_REQUEST['cliente_id'];
$cancha_id   = $_REQUEST['cancha_id'];
$horario_id  = $_REQUEST['horario_id'];
$precio      = $_REQUEST['precio'];
$descuento   = $_REQUEST['descuento'];

$InsertNuevoEvento = "INSERT INTO eventoscalendar(
  evento,
  fecha_inicio,
  fecha_fin,
  color_evento,
  cliente_id,
  cancha_id,
  horario_id,
  precio,
  descuento
  )
VALUES (
  '" .$evento. "',
  '". $fecha_inicio."',
  '" .$fecha_fin. "',
  '" .$color_evento. "',
  '" .$cliente_id. "',
  '" .$cancha_id. "',
  '" .$horario_id. "',
  '" .$precio. "',
  '" .$descuento. "'
)";
$resultadoNuevoEvento = mysqli_query($conn, $InsertNuevoEvento);

$CONSULTA = "SELECT MAX(id) as maximo FROM eventoscalendar LIMIT 1";
$EJECUTAR = $conn->query($CONSULTA);
$RESPUESTA = $EJECUTAR->fetch_assoc();
$eventoscalendar_id =  $RESPUESTA['maximo'];


$user_id = $user['id'];
$sub_total = $precio-$descuento;

$InsertNuevaCuenta = "INSERT INTO cuentas(
  cliente_id,
  user_id,
  precio,
  descuento,
  sub_total,
  eventoscalendar_id)
VALUES (
  '" .$cliente_id. "',
  '". $user_id."',
  '" .$precio. "',
  '" .$descuento. "',
  '" .$sub_total. "',
  '" .$eventoscalendar_id. "'
)";
$resultadoNuevaCuenta = mysqli_query($conn, $InsertNuevaCuenta);



header("Location:index.php?e=1");


// echo $InsertNuevoEvento;
// header("Location:index.php?e=1".$InsertNuevoEvento);

?>