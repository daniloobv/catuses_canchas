<?php

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



function ReadData()
{
   try
   {
       $conn = OpenConnection();
       $tsql = "SELECT  [Cod_Emp]   ,[COD_SUC]   ,[COD_ID]   ,[NOMBRE]   ,[CUENTA]   ,[DIRECCION]   ,[CIUDAD]   ,[COD_ZON]   ,[COD_SUBZON]
       ,[TELEFONO_1]   ,[TELEFONO_2]   ,[TELEFONO_3]   ,[FAX]   ,[NUM_RUC]   ,[PLAZO]   ,[FEC_ING]   ,[COD_VEND]   ,[LIMITE]   ,[LIMITE_D]
       ,[LIMITE_ANT]   ,[ACT_LIMITE]   ,[DESCUENTO]   ,[INTERES]   ,[EMAIL]   ,[OBSERVACIONES]   ,[ACTIVO]   ,[CATEGORIA]   ,[GERENCIA_1]
       ,[GERENCIA_2]   ,[CONTACTO_1]   ,[CONTACTO_2]   ,[ING_CAMP_1]   ,[ING_CAMP_2]   ,[FIRMA_A_1]   ,[FIRMA_A_2]   ,[RESP_PAG_1]
       ,[RESP_PAG_2]   ,[AutVtaMor]   ,[COD_RUT]   ,[IGV]   ,[AutCred]   ,[CEDULA]   FROM [crese_app_web_pruebas].[dbo].[Facturacion Clientes]";

       $getProducts = sqlsrv_query($conn, $tsql);
       if ($getProducts == FALSE)
           die(FormatErrors(sqlsrv_errors()));
      $productCount = 0;
      while($row = sqlsrv_fetch_array($getProducts, SQLSRV_FETCH_ASSOC))
      {
          echo($row['NOMBRE']);
          echo("<br/>");
          $productCount++;
     }
     sqlsrv_free_stmt($getProducts);
     sqlsrv_close($conn);
     }
     catch(Exception $e)
     {
       echo("Error!");
     }
}
//ReadData();
	
?>