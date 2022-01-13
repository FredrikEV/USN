<?php

include("start.php");

?>

<h3>Registrer student </h3>

<form method="post" action="" id="registrerFagSkjema" name="registrerFagSkjema">
    Brukernavn <br/> <input type="text" id="brukernavn" name="brukernavn" required /> <br/>
    Fornavn <br/> <input type="text" id="fornavn" name="fornavn" required /> <br/>
    Etternavn <br/> <input type="text" id="etternavn" name="etternavn" required /> <br/>
    Klassekode <br/> <select name="klassekode" id="klassekode">
        <?php echo("<option value=''> Velg klassekode </option>");
        include("dynamiskeFunksjoner.php"); listeboksVelgKlassekode(); ?>
        </select></br>
    Bilde <br/>
        <select name="bildenr" id="bildenr">
        <?php echo("<option value=''> Velg bildenr </option>");
        include("dynamiskeFunksjoner"); listeboksVelgBildenr (); ?>  <!-- Hvorfor var det feil med include .php her?? -->
        </select></br>

    <input type="submit" value="Registrer student" id="registrerStudentKnapp" name="registrerStudentKnapp" /> 
    <input type="reset" value="Nullstill" id="nullstill" name="nullstill" /> <br />
</form>

<?php 

    if (isset($_POST["registrerStudentKnapp"])) {
        $brukernavn=$_POST ["brukernavn"];
        $fornavn=$_POST ["fornavn"];
        $etternavn=$_POST ["etternavn"];  
        $klassekode=$_POST ["klassekode"];
        $bildenr=$_POST ["bildenr"];  
        
        if (!$brukernavn || !$fornavn || !$etternavn || !$klassekode || !$bildenr){
            echo ("Alle felt må fylles ut");
        }
        else{
            include("db-tilkobling.php"); 

            $sqlSetning = "SELECT * FROM student WHERE brukernavn='$brukernavn';"; // Få sjekket at bildenr her også er unikt?? 
            $sqlResultat = mysqli_query($db, $sqlSetning) or die ("Kan ikke hente data fra databasen");
            $antallRader = mysqli_num_rows($sqlResultat);

            if ($antallRader != 0) {
                echo("Studenten er registrert fra før");
            }
            else {
                $sqlSetning = "INSERT INTO student VALUES('$brukernavn', '$fornavn', '$etternavn', '$klassekode', '$bildenr');"; 

                mysqli_query($db, $sqlSetning) or die ("Ikke mulig å registrere i databasen");

                echo("Følgende er nå registrert: $brukernavn, $fornavn, $etternavn, $klassekode, $bildenr");
            }
        }
      }

      include("slutt.php");

      ?>
    
