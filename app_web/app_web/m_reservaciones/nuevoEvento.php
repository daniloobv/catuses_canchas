<?php
date_default_timezone_set("America/Santiago");
setlocale(LC_ALL,"es_ES");
//$hora = date("g:i:A");

require("config.php");
$evento            = ucwords($_REQUEST['evento']);
$f_inicio          = $_REQUEST['fecha_inicio'];
$fecha_inicio      = date('Y-m-d', strtotime($f_inicio)); 

$f_fin             = $_REQUEST['fecha_fin']; 
$seteando_f_final  = date('Y-m-d', strtotime($f_fin));  
$fecha_fin1        = strtotime($seteando_f_final."+ 1 days");
$fecha_fin         = date('Y-m-d', ($fecha_fin1));  
$color_evento      = $_REQUEST['color_evento'];

$cliente_id      = $_REQUEST['cliente_id'];
$user_id      = $_REQUEST['user_id'];
$cancha_id      = $_REQUEST['cancha_id'];


$InsertNuevoEvento = "INSERT INTO eventoscalendar(
      evento,
      fecha_inicio,
      fecha_fin,
      color_evento,
      cliente_id,
      user_id,
      cancha_id
      )
    VALUES (
      '" .$evento. "',
      '". $fecha_inicio."',
      '" .$fecha_fin. "',
      '" .$color_evento. "',

      '" .$cliente_id. "',
      '" .$user_id. "',
      '" .$cancha_id. "'
  )";
$resultadoNuevoEvento = mysqli_query($con, $InsertNuevoEvento);
echo $InsertNuevoEvento;
header("Location:index.php?e=1");
//header("Location:index.php?e=1&consulta=".$InsertNuevoEvento);

?>