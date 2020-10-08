<?php

    $visstudent = fopen("student.txt", "r") or die("Kan ikke åpne fil");
    $sok = strtoupper($_POST["sok"]); 
    if (!preg_match("/^[IT0-9]{3}$/",$sok)) {
        echo "Søket må kun bestå av bokstavene IT + ett siffer (1-9), for eksempel IT1";
      }


    while (! feof($visstudent))  
    {
        $linje = fgets($visstudent); 

        $del = explode(";", $linje); 
        $brukernavn = (trim($del[0])); 
        $fornavn =  isset($del[1]) ? trim($del[1]) : null; ;
        $etternavn = isset($del[2]) ? trim($del[2]) : null; 
        $klassekode = isset($del[3]) ? trim($del[3]) : null;
        
        if ( $klassekode == $sok) {
            echo "$brukernavn $fornavn $etternavn<br/>";
        } 
        
    }
    
    fclose($visstudent); 
?>


