<?php

//https://catuses.com/canchas/app_web/00_includes/logout.php

	session_start();
	session_destroy();
	 header('location:../../acceder.php');
?>

