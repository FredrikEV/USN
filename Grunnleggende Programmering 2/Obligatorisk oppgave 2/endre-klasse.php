<?php

include("start.php");

?>

<h3>Endre Klasse</h3>

<form method="post" action="" id="endreKlasse" name="endreKlasse">Klassekode <br/>

        <select name="klassekode" id="klassekode">
        <?php echo("<option value=''> Velg klassekode </option>");
        include("dynamiskeFunksjoner.php"); listeboksVelgKlassekode (); ?>
        </select></br>

        <input type="submit" value="Finn klassekode" name="finnKlasseKnapp" id="finnKlasseKnapp">

</form>

<?php


 if(isset($_POST["finnKlasseKnapp"])) {

    include("db-tilkobling.php"); 
    $klassekode = $_POST["klassekode"]; 

    $sqlSetning = "SELECT * FROM klasse WHERE klassekode='$klassekode';";
    $sqlResultat = mysqli_query($db, $sqlSetning) or die ("Ikke mulig å hente data");

    $rad = mysqli_fetch_array($sqlResultat);
    $klassenavn = $rad["klassenavn"] ?? '';
    $studiumkode = $rad["studiumkode"] ?? '';

    echo("
    <form method='post' action='' id='endreKlasse' name='endreKlasse'>
    Klassekode <br/> <input type='text' id='klassekode' name='klassekode' value='$klassekode' readonly /> <br/>
    Klassenavn <br/> <input type='text' id='klassenavn' name='klassenavn' value='$klassenavn' required /> <br/>
    Studiumkode <br/> <input type='text' id='studiumkode' name='studiumkode' value='$studiumkode' required /> <br/>
    <input type='submit' value='Endre klasse' id='EndreKlasseKnapp' name='EndreKlasseKnapp' /> 
    <input type='reset' value='Nullstill' id='nullstill' name='nullstill' /> <br />
    </form>");
    
  }

    if (isset($_POST["EndreKlasseKnapp"])) {
        $klassekode=$_POST ["klassekode"];
        $klassenavn=$_POST ["klassenavn"];
        $studiumkode=$_POST ["studiumkode"]; 
        
        if (!$klassekode || !$klassenavn || !$studiumkode){
            echo ("Alle felt må fylles ut");
        }
        else{
            include("db-tilkobling.php"); 

            $sqlSetning = "UPDATE klasse SET studiumkode='$studiumkode', klassenavn='$klassenavn' WHERE klassekode='$klassekode';";
            mysqli_query($db, $sqlSetning) or die ("Kan ikke gjøre endring til database");

            echo("Klassen med klassekode $klassekode er nå endret");
        }
    }

    include("slutt.php");

?>