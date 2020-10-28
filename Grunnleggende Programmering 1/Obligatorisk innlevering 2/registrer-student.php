 
<?php
include ("start.php");
?>  

<script src="validering.js" type="application/javascript"></script>

<form method="POST" action="registrer-student.php" id="registrer-student" name="registrer-student" onSubmit="return validerStudent ()" onReset="return fjernMelding ()">
    
    <label for="brukernavn">Skriv inn brukernavn</label><br/>
    <input type="text" name="brukernavn" id="brukernavn" size="40" onFocus="fokus(this)" onBlur="mistetFokus(this)" onMouseOver="musInn(this)" onMouseOut="musUt()"><br/>

    <label for="fornavn">Skriv inn ditt fornavn</label><br/>
    <input type="text" name="fornavn" id="fornavn" size="40" onFocus="fokus(this)" onBlur="mistetFokus(this)" onMouseOver="musInn(this)" onMouseOut="musUt()"><br/>

    <label for="etternavn">Skriv inn ditt etternavn</label><br/>
    <input type="text" name="etternavn" id="etternavn" size="40" onFocus="fokus(this)" onBlur="mistetFokus(this)" onMouseOver="musInn(this)" onMouseOut="musUt()"><br/>

    <label for="klassekode">Skriv inn klasssekode</label><br/>
    <input type="text" name="klassekode" id="klassekode" size="40" onFocus="fokus(this)" onBlur="mistetFokus(this)" onMouseOver="musInn(this)" onMouseOut="musUt()"><br/>

    <input type="submit" title="Sender inn skjemaet" value="Fortsett" name="fortsett" id="fortsett">
    <input type="reset" title="Sletter all informasjon" value="Nullstill" name="nullstill" id="nullstill">
</form>

<div id="melding"></div>

<?php

if (isset($_POST["fortsett"])) {

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
  }
    include("slutt.php")
?> 