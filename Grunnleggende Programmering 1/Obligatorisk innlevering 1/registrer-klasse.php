<?php

    $klassekode = $_POST["klassekode"];
    $klassenavn = $_POST["klassenavn"];
    $studiumkode = $_POST["studiumkode"] ;
    $tekstfil = fopen("klasse.txt", "a");

    if(!$klassekode || !$klassenavn || !$studiumkode ) {  // legge inn sjekk på bokstaver med tall istedenfor 
        echo ("Du har ikke fylt ut alle felt");
    }
    else {
    
    fwrite($tekstfil, "$klassekode; $klassenavn; $studiumkode\n");

    fclose($tekstfil); 

    echo ("Registrering er nå fullført");
    }
    echo '<br/><br/><b>Registrer igjen <a href="registrer-klasse.html">her</a></b>';
?> 


    