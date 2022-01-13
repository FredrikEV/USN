<?php

include("start.php");

?>

<h3>Registrer Bilde </h3>

<form method="post" action="" enctype="multipart/form-data" id="registrerBilde" name="registrerBilde">
Bildenr <br/><input type="number" id="bildenr" name="bildenr" required />  <br/>
Beskrivelse <br/><input type="text" id="beskrivelse" name="beskrivelse" required /> <br/>
Bilde <br/><input type="file" id="fil" name="fil" sieze="60"> <br/>
    <input type="submit" value="Registrer Bilde" id="registrerBildeKnapp" name="registrerBildeKnapp" /> 
    <input type="reset" value="Nullstill" id="nullstill" name="nullstill" /> <br />
</form>

<?php 

    if (isset($_POST["registrerBildeKnapp"])) {
        $bildenr=$_POST ["bildenr"];
        $beskrivelse=$_POST ["beskrivelse"]; 
        $dato=date("Y-m-d"); // Ta vekk? 

        $filnavn=$_FILES["fil"]["name"]; 
        $filtype=$_FILES["fil"]["type"];
        $filstorrelse=$_FILES["fil"]["size"]; 
        $tmpnavn=$_FILES["fil"]["tmp_name"]; 
        $nyttnavn="bilder/".$filnavn; // Sjekk mappestruktur 
 
        
        if (!$bildenr ||  !$filnavn || !$beskrivelse){
            echo ("Alle felt må fylles ut");
        }
        else if ($filtype != "image/gif" && $filtype != "image/jpeg" && $filtype !="image/png") {
            echo ("Filtypen må være enten gif, jpg /jpeg eller png"); 
        }
        else if ($filstorrelse > 5000000) {
            echo ("Maks filstørrelse er 5 MB"); 
        }
        else{
            include("db-tilkobling.php"); 

            $sqlSetning = "SELECT * FROM bilde WHERE bildenr='$bildenr';"; // Problem her siden auto increment? 
            $sqlResultat = mysqli_query($db, $sqlSetning) or die ("Kan ikke hente data fra databasen");
            $antallRader = mysqli_num_rows($sqlResultat);

            if ($antallRader != 0) {
                echo("Bildet er registrert fra før");
            }
            else {

                move_uploaded_file($tmpnavn, $nyttnavn) or die ("Ikke mulig å laste opp fil"); 

                $sqlSetning = "INSERT INTO bilde VALUES('$bildenr', '$dato', '$filnavn', '$beskrivelse');"; 

                if  (mysqli_query($db, $sqlSetning)) {
                    echo ("Følgende er nå registrert: $bildenr, $dato, $filnavn, $beskrivelse"); 
                }
                else {
                    echo ("Ikke mulig å registrere i databasen");
                    unlink($nyttnavn) or die ("Ikke mulig å slette bilde på serveren igjen"); 

                }
           
                
            }
        }
      }


      include("slutt.php");

      ?>

    


