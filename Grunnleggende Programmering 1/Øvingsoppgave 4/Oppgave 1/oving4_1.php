<?php

    $fnavn = $_POST["fnavn"];
    $enavn = $_POST["enavn"];
    $tekstfil = fopen("tekstfil.txt", "a");

    if(!$fnavn || !$enavn) {
        echo ("Du har ikke fylt ut begge felt");
    }
    else {
    
    fwrite($tekstfil, "$fnavn; $enavn\n");

    fclose($tekstfil); 

    echo ("Registrering er nå fullført");
    }

?>