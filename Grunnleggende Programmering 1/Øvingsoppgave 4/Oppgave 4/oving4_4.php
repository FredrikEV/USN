<?php 

    $minfil = fopen("tekstfil.txt", "r") or die("Kan ikke åpne fil");
    $navn = $_POST["navn"];
    
    echo ("Følgende personer passer til søket ditt: <br> <br>");

    while ($linje = fgets ($minfil)) {
    if ($linje != "") {
        $del = explode(";", $linje);
        $fornavn = trim($del[0]);
        $etternavn = trim($del[1]);

        if (strtoupper($navn) == strtoupper($fornavn) || strtoupper($navn) == strtoupper($etternavn)) {
            echo ("$fornavn $etternavn");
        }
    }
    }
    
    fclose($minfil);

?>