<?php
   function contadorvisitas()
    {
        $archivo = "contadorvisitas.txt"; //el archivo de texto que contendra las visitas
        $f = fopen($archivo, "r"); //abrimos el fichero en modo de lectura
        if($f)
        {
            $contadorvisitas = fread($f, filesize($archivo)); //vemos el archivo de texto
            $contadorvisitas = $contadorvisitas + 1; //Le sumamos +1 al contador de visitas
            fclose($f);
        }
        $f = fopen($archivo, "w+");
        if($f)
        {
            fwrite($f, $contadorvisitas);
            fclose($f);
        }
        return $contadorvisitas;
    }
?>