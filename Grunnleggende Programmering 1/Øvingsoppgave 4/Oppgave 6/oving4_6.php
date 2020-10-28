<?php

    $minfil = fopen("adresse.txt", "r") or die("Kan ikke åpne fil");
    
    echo ("Alle registrerte person er: <br><br>");

    while ($linje = fgets($minfil)) {
        if ($linje != ""); {

            $del = explode(";", $linje);
            $navn = trim($del[0]);
            $adresse = trim($del[1]);
            $postnr = trim($del[2]);
            $poststed = trim($del[3]);

            echo ("$navn $adresse $postnr $poststed <br> ");
        }
    }

    fclose($minfil);

?>