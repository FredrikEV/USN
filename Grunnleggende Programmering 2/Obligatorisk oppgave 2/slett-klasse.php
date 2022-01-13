<?php

include("start.php");

?>

<script src="script.js"></script>

<h3>Slett klasse</h3>

<form method="post" action="" id="slettklasseSkjema" name="slettklasseSkjema" onSubmit="return bekreft()">Klassekode <br/>
        <select name="klassekode" id="klassekode">
        <?php echo("<option value=''> Velg klassekode </option>");
        include("dynamiskeFunksjoner.php"); listeboksVelgKlassekode(); ?>
        </select></br>
<input type="submit" value="Slett klasse" name="slettKlasseKnapp" id="slettKlasseKnapp" /> 
</form>


<?php

if (isset($_POST["slettKlasseKnapp"])) {

    $klassekode=$_POST["klassekode"]; 

    if (!$klassekode) {
        echo ("Klassekode er ikke valgt");
    }
    else {

    include("db-tilkobling.php");
    
    $sqlSetning = "DELETE FROM klasse WHERE klassekode = '$klassekode';";
    mysqli_query($db, $sqlSetning) or die ("Kan ikke slette klasser som inneholder studenter"); 

    echo("Følgende klasse er nå slettet $klassekode <br/>");
 }
}


include("slutt.php");

?>