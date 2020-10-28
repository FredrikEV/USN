
<?php
include ("start.php");
?>


<form method="POST" action="registrer-klasse.php" id="registrer-klasse" name="registrer-klasse" onSubmit="return validerKlasse ()" onReset="return fjernMelding()">
    
    <label for="klassekode">Skriv inn klasssekode</label><br/>
    <input type="text" name="klassekode" id="klassekode" size="40" onFocus="fokus(this)" onBlur="mistetFokus(this)" onMouseOver="musInn(this)" onMouseOut="musUt()" ><br/>

    <label for="klassenavn">Skriv inn klassenavn</label><br/>
    <input type="text" name="klassenavn" id="klassenavn" size="40" onFocus="fokus(this)" onBlur="mistetFokus(this)" onMouseOver="musInn(this)" onMouseOut="musUt()" ><br/>

    <label for="studiumkode">Skriv inn studiumkode</label><br/>
    <input type="text" name="studiumkode" id="studiumkode" size="40" onFocus="fokus(this)" onBlur="mistetFokus(this)" onMouseOver="musInn(this)" onMouseOut="musUt()" ><br/>

    <input type="submit" title="Sender inn skjemaet" value="Fortsett" name="fortsett" id="fortsett">
    <input type="reset" title="Sletter all informasjon" value="Nullstill" name="nullstill" id="nullstill">
</form>

<div id="melding"></div>

<?php

    if (isset($_POST["fortsett"])) {

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
  }
    include("slutt.php")
?> 


    