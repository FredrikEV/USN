<?php

    $minfil = fopen("adresse.txt", "a") or die("Kan ikke åpne tekstfil");
    $navn = $_POST["navn"];
    $adresse = $_POST["adresse"];
    $postnr = $_POST["postnr"];
    $poststed = $_POST["poststed"]; 

    if(!$navn || !$adresse || !$postnr || !$poststed ) {
        echo ("Du har ikke fylt ut alle felt"); 
    }

    fwrite($minfil, "$navn; $adresse; $postnr; $poststed\n");

    fclose($minfil);

    echo ("Data er registrert"); 

    
?> 