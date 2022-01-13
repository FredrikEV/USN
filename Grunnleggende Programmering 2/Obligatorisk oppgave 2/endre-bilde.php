<?php

include("start.php");

?>



<h3>Endre Bilde</h3>

<form method="post" action="" id="endreBilde" name="endreBilde">Bildenr <br/>

        <select name="bildenr" id="bildenr">
        <?php echo("<option value=''> Velg bildenr </option>");
        include("dynamiskeFunksjoner.php"); listeboksVelgBildenr (); ?>
        </select></br>

        <input type="submit" value="Finn bilde" name="finnBildeKnapp" id="finnBildeKnapp">

</form>

<?php


 if(isset($_POST["finnBildeKnapp"])) {

    include("db-tilkobling.php"); 
    $bildenr = $_POST["bildenr"]; 

    $sqlSetning = "SELECT * FROM bilde WHERE bildenr='$bildenr';";
    $sqlResultat = mysqli_query($db, $sqlSetning) or die ("Ikke mulig å hente data");

    $rad = mysqli_fetch_array($sqlResultat);
    $dato= $rad ["dato"] ?? '';
    $filnavn=$rad ["filnavn"] ?? '';
    $beskrivelse=$rad["beskrivelse"] ?? '';



echo("
<form method='post' action='' id='endreBilde' name='endreBilde'>
Bildenr<br/>
<input type='number' id='bildenr' name='bildenr' value='$bildenr' readonly />   
<br/>Opplastingsdato <br/> <input type='date' id='dato' name='dato' value='$dato' required /> 
<br/>Filnavn <br/> <input type='text' id='filnavn' name='filnavn' value='$filnavn' required /> 
<br/>Beskrivelse <br/> <input type='text' id='beskrivelse' name='beskrivelse' value='$beskrivelse' required /> <br/>
<input type='submit' value='Endre Bilde' id='endreBildeKnapp' name='endreBildeKnapp' /> 
<input type='reset' value='Nullstill' id='nullstill' name='nullstill' /> <br />
</form> ");

}


if (isset($_POST["endreBildeKnapp"])) {
    
    $bildenr= $_POST ["bildenr"];
    $dato= $_POST ["dato"];
    $filnavn=$_POST ["filnavn"];
    $beskrivelse=$_POST ["beskrivelse"];  
    
    if (!$bildenr || !$dato ||  !$filnavn || !$beskrivelse){
        echo ("Alle felt må fylles ut");
    }
    else{
        include("db-tilkobling.php"); 

        
        $sqlSetning="UPDATE bilde SET dato='$dato', filnavn='$filnavn', beskrivelse='$beskrivelse' WHERE bildenr='$bildenr';"; 
        mysqli_query($db, $sqlSetning) or die ("Kan ikke gjøre endring til database");

        echo("Bildet med bildenr $bildenr er nå endret");

    }
}

include("slutt.php");

?>

