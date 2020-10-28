<?php 

    $minfil = fopen("adresse.txt", "r") or die("Kan ikke åpne fil");
    $sok = $_POST["navn"];
    $sok = trim($sok);

    echo("Følgende personer passer til søket ditt<br><br>");

    while ($linje = fgets($minfil)) {
        if ($linje != "") {

            $del = explode(";", $linje);
            $navn = trim($del[0]);
            $adresse = trim($del[1]);
            $postnr = trim($del[2]);
            $poststed = trim($del[3]);
        }
        
        if ($sok == $navn) {
        echo ("$navn $adresse $postnr $poststed <br> ");
        }
    }

    fclose($minfil);
?> 