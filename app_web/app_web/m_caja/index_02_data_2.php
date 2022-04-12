<?php
	include '../00_includes/00_session.php';

	if(isset($_POST['id'])&&isset($_POST['tabla'])){
		$tabla1= $_POST['tabla'];
		$id = $_POST['id'];

		//$sql = "SELECT *,".$tabla1.".id as empid FROM ".$tabla1."  WHERE ".$tabla1.".id = '$id'";

		$sql = "SELECT
                       cuentas.id as cuenta_idx,
                       IfNull(sum(cuentas_abonos.monto),0) as totalAbonado
                       FROM
                       eventoscalendar
                       INNER JOIN cuentas on cuentas.eventoscalendar_id = eventoscalendar.id
                       INNER JOIN cuentas_abonos on cuentas_abonos.cuenta_id = cuentas.id
                       WHERE eventoscalendar.id = '$id'";

		$query = $conn->query($sql);
		$row = $query->fetch_assoc();
		echo json_encode($row);
	}
?>