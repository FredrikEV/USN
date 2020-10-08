<?php

   $visklasse = fopen("klasse.txt", "r") or die("Kan ikke åpne fil"); 

   while (! feof($visklasse))  
   {
       $linje = fgets($visklasse); 

        $del = explode(";", $linje); 
        $klassekode = ($del[0]); 
        $klassenavn =  isset($del[1]) ? $del[1] : null; ;
        $studiumkode = isset($del[2]) ? $del[2] : null; 
       
       echo "$klassekode $klassenavn $studiumkode <br/>";  
    }
   
    fclose($visklasse); 

?>

