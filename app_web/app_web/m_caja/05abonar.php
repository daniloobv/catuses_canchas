<?php

include '../00_includes/00_session.php';
//include '00configuraciones.php';



if(isset($_POST['abonar'])){

	$tabla1 = 'cuentas_abonos';
	$modulo = $_POST['modulo'];


	$id = $_POST['id'];

$CONSULTA = "SELECT id as cuenta_id FROM cuentas where eventoscalendar_id = ".$id;
$EJECUTAR = $conn->query($CONSULTA);
$RESPUESTA = $EJECUTAR->fetch_assoc();
$cuenta_id =  $RESPUESTA['cuenta_id'];



	//$fecha1 = $_POST['fecha'];
	//$fecha = date("Y-m-d", strtotime($fecha1) );
	$monto_pendiente = str_replace(",", "" , $_POST['monto_pendiente']);
	$abono = str_replace(",", "" , $_POST['monto']);
	$forma_pago = $_POST['forma_pago'];

	$cambio=0;
	if ($abono>$monto_pendiente) {
		$cambio = $abono-$monto_pendiente;
		$abono=$monto_pendiente;
	}

	$usuario_id = $user['id'];


	$sql = "INSERT INTO ".$tabla1."(cuenta_id,monto,user_id,tipo_pago_id)
	VALUES ('$cuenta_id','$abono','$usuario_id','$forma_pago')";

	if($conn->query($sql)){

		if ($cambio>0) {
			$_SESSION['success'] = ' Abono realizado exitosamente - SU CAMBIO ES DE...'.$cambio;
		}else{
			$_SESSION['success'] = ' Abono realizado exitosamente';
		}

	}
	else{ $_SESSION['error'] = $conn->error.$sql ; }
}
else{	$_SESSION['error'] = 'Fill up add form first';	}


echo $sql;

header('location: '.$modulo);

?>


