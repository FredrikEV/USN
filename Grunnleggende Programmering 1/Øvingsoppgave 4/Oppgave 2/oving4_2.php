<?php

    $minfil = fopen("tekstfil.txt", "r") or die("Kan ikke åpne fil"); // Åpner fil tekstfil.txt med read. Om den ikke kan åpnes feilmelding. 

   while (! feof($minfil))  // while statement helt til "end of file" av $minfil 
   {
       $linje = fgets($minfil); // Fester fgets function til linje variabel

        $del = explode(";", $linje); // Deler opp linje etter ; 
        $fornavn = ($del[0]); 
        $etternavn =  isset($del[1]) ? $del[1] : null; // Sjekker at det er noe i array plass 2 før den prøver å hente den (fikk feilmelding ellers i tillegg til resultatet)
       
       echo "$fornavn $etternavn <br/>";  // Printer fornavn og etternavn
    }
   
    fclose($minfil); // Lukker fil

?>

