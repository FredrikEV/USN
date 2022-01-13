<?php

include("start.php");

?>

<h3>Registrer Klasse </h3>

<form method="post" action="" id="registrerKlasse" name="registrerKlasse">
    Klassekode <br/> <input type="text" id="klassekode" name="klassekode" required /> <br/>
    Klassenavn <br/> <input type="text" id="klassenavn" name="klassenavn" required /> <br/>
    Studiumkode <br/> <input type="text" id="studiumkode" name="studiumkode" required /> <br/>
    <input type="submit" value="Registrer klasse" id="registrerKlasseKnapp" name="registrerKlasseKnapp" /> 
    <input type="reset" value="Nullstill" id="nullstill" name="nullstill" /> <br />
</form>

<?php 

    if (isset($_POST["registrerKlasseKnapp"])) {
        $klassekode=$_POST ["klassekode"];
        $klassenavn=$_POST ["klassenavn"];
        $studiumkode=$_POST ["studiumkode"];  
        
        if (!$klassekode || !$klassenavn || !$studiumkode){
            echo ("Alle felt må fylles ut");
        }
        else{
            include("db-tilkobling.php"); 

            $sqlSetning = "SELECT * FROM klasse WHERE klassekode='$klassekode';";
            $sqlResultat = mysqli_query($db, $sqlSetning) or die ("Kan ikke hente data fra databasen");
            $antallRader = mysqli_num_rows($sqlResultat);

            if ($antallRader != 0) {
                echo("Klassen er registrert fra før");
            }
            else {
                $sqlSetning = "INSERT INTO klasse
                VALUES ('$klassekode', '$klassenavn', '$studiumkode');"; 
                mysqli_query($db, $sqlSetning) or die ("Ikke mulig å registrere i databasen");

                echo("Følgende er nå registrert: $klassekode, $klassenavn, $studiumkode");
            }
        }
      }

      include("slutt.php");

      ?>
    
