<?php

include("start.php");

?>



<h3>Endre Student</h3>

<form method="post" action="" id="endreStudent" name="endreStudent">Brukernavn <br/>

        <select name="brukernavn" id="brukernavn">
        <?php echo("<option value=''> Velg brukernavn </option>");
        include("dynamiskeFunksjoner.php"); listeboksVelgStudentBrukernavn (); ?>
        </select></br>

        <input type="submit" value="Finn brukernavn" name="finnBrukernavnKnapp" id="finnBrukernavnKnapp">

</form>

<?php


 if(isset($_POST["finnBrukernavnKnapp"])) {

    include("db-tilkobling.php"); 
    $brukernavn = $_POST["brukernavn"]; 

    $sqlSetning = "SELECT * FROM student WHERE brukernavn='$brukernavn';";
    $sqlResultat = mysqli_query($db, $sqlSetning) or die ("Ikke mulig å hente data");

    $rad = mysqli_fetch_array($sqlResultat);
    $fornavn= $rad ["fornavn"] ?? '';
    $etternavn= $rad ["etternavn"] ?? '';
    $klassekode= $rad["klassekode"] ?? '';
    $bildenr = $rad["bildenr"] ?? '';



echo("
<form method='post' action='' id='endreStudent' name='endreStudent'>
Brukernavn<br/>
<input type='text' id='brukernavn' name='brukernavn' value='$brukernavn' readonly />   
<br/>Fornavn <br/> <input type='text' id='fornavn' name='fornavn' value='$fornavn' required /> 
<br/>Etternavn <br/> <!-- Legge inn regex på filnavn --><input type='text' id='etternavn' name='etternavn' value='$etternavn' required /> 
<br/>Klassekode <br/> <select name='klassekode' id='klassekode'>"); 
listeboksKlassekodeMedValgtKode($klassekode); 
echo ("</select> 
<br/>Bildenr <br/> <select name='bildenr' id='bildenr'>");
listeboksBildenrMedValgtKode($bildenr);
echo ("</select> <br/>
<input type='submit' value='Endre Student' id='endreStudentKnapp' name='endreStudentKnapp' /> 
<input type='reset' value='Nullstill' id='nullstill' name='nullstill' /> <br />
</form> ");

}


if (isset($_POST["endreStudentKnapp"])) {
    
    $brukernavn= $_POST ["brukernavn"];
    $fornavn= $_POST ["fornavn"];
    $etternavn=$_POST ["etternavn"];
    $klassekode=$_POST ["klassekode"];  
    $bildenr=$_POST ["bildenr"];  
    
    if (!$brukernavn || !$fornavn ||  !$etternavn || !$klassekode || !$bildenr){
        echo ("Alle felt må fylles ut");
    }
    else{
        include("db-tilkobling.php"); 

        
        $sqlSetning="UPDATE student SET fornavn='$fornavn', etternavn='$etternavn', klassekode='$klassekode', bildenr='$bildenr' WHERE brukernavn='$brukernavn';"; 
        mysqli_query($db, $sqlSetning) or die ("Kan ikke gjøre endring til database");

        echo("Studenten med brukernavn $brukernavn er nå endret");

    }
}

include("slutt.php");

?>

