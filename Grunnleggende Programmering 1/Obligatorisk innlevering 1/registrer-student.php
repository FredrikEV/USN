<?php

    $brukernavn = $_POST["brukernavn"];
    $fornavn = $_POST["fornavn"];
    $etternavn = $_POST["etternavn"];
    $klassekode = $_POST["klassekode"];
    $tekstfil = fopen("student.txt", "a");

    if(!$brukernavn || !$fornavn || !$etternavn || !$klassekode ) {  // legge inn sjekk på bokstaver med tall istedenfor 
        echo ("Du har ikke fylt ut alle felt");
    }
    else {
    
    fwrite($tekstfil, "$brukernavn; $fornavn; $etternavn; $klassekode \n");

    fclose($tekstfil); 

    echo ("Registrering er nå fullført");
    }
    echo '<br/><br/><b>Registrer igjen <a href="registrer-student.html">her</a></b>';
?> 