<?php

    $minfil = fopen("adresse.txt", "r") or die ("Kan ikke åpne fil"); 
    $sok = trim($_POST["sok"]);

    echo ("Følgende informasjon passer til søket ditt<br><br>");

    while($linje = fgets($minfil)) {
        if ($linje != "") {

            $del = explode(";", $linje);
            $navn = trim($del[0]);
            $adresse = trim($del[1]);
            $postnr = trim($del[2]);
            $poststed = trim($del[3]);  
        }

        if ($sok == $navn || $sok == $adresse || $sok == $postnr || $sok == $poststed) {
            echo ("$navn $adresse $postnr $poststed <br>");
        }

    }

    fclose($minfil);

?> 