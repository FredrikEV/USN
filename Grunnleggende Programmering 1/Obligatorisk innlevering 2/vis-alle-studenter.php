<?php

include("start.php");

   $visstudent = fopen("student.txt", "r") or die("Kan ikke åpne fil"); 

   while (! feof($visstudent))  
   {
       $linje = fgets($visstudent); 

        $del = explode(";", $linje); 
        $brukernavn = ($del[0]); 
        $fornavn =  isset($del[1]) ? $del[1] : null; 
        $etternavn = isset($del[2]) ? $del[2] : null; 
        $klassekode = isset($del[3]) ? $del[3] : null; 
       
       echo "$brukernavn $fornavn $etternavn $klassekode <br/>";  
    }
   
    fclose($visstudent); 

include("slutt.php");

?>

