<?php
include 'comunicacion.php';
$sql = "SELECT COUNT(*) total FROM visitas";
$result = $conn->query($sql);
$fila = $result->fetch_assoc();
$total=$fila['total'];
//$conn->close();
echo $total;
?>