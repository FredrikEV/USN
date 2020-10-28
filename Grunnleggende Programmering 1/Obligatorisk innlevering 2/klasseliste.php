
<?php
include ("start.php");
?>


<form method="POST" action="klasseliste.php" id="klasseliste" name="klasseliste" onSubmit=" return validerSok()">

    <label for="klassekode">Skriv inn klasssekode (IT+tall)</label><br/>
    <input type="text" name="sok" id="sok" size="40" onFocus="fokus(this)" onBlur="mistetFokus(this)" onMouseOver="musInn(this)" onMouseOut="musUt()" ><br/>

    <input type="submit" title="Søker etter klassekode" value="Søk etter klassekode" name="fortsett" id="fortsett">
    <input type="reset" title="Sletter all informasjon" value="Nullstill" name="nullstill" id="nullstill">
</form>

<div id="melding"></div>

<?php

    if (isset($_POST["fortsett"])) {

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
  }

    include("slutt.php")
?>


