<?php
$usuario  = "catuses_canchas";
$password = "rqW,r.UOXvh(";
$servidor = "localhost";
$basededatos = "catuses_canchas";
$con = mysqli_connect($servidor, $usuario, $password) or die("No se ha podido conectar al Servidor 1x");
$db = mysqli_select_db($con, $basededatos) or die("Upps! Error en conectar a la Base de Datos");
?>

