<?php

include("start.php");

?>

<script src="script.js"></script>

<h3>Slett bilde</h3>

<form method="post" action="" id="slettBildeskjema" name="slettBildeskjema" onSubmit="return bekreft()">Bildenr <br/>
        <select name="bildenrfilnavn" id="bildenrfilnavn">
        <?php echo("<option value=''> Velg bildenr </option>");
        include("dynamiskeFunksjoner.php"); listeBoksBildenrFilnavn (); ?>
        </select></br>
<input type="submit" value="Slett bilde" name="slettBildeknapp" id="slettBildeknapp" /> 
</form>


<?php

if (isset($_POST["slettBildeknapp"])) {

    $bildenrfilnavn=$_POST["bildenrfilnavn"]; 

    $del=explode(";",$bildenrfilnavn);
    $bildenr=$del[0];
    $filnavn=$del[1];  

    if (!$bildenr) {
        echo("Bildenummer er ikke valgt");
    }
    else {
    include("db-tilkobling.php");

    $sqlSetning = "DELETE FROM bilde WHERE bildenr = '$bildenr';";
    mysqli_query($db, $sqlSetning) or die ("Kan ikke gjøre sletting i databasen"); 

    $bildefil = "bilder/".$filnavn; 
    unlink($bildefil) or die ("Ikke mulig å slette bilde fra serevren"); 

    echo("Følgende bilde er nå slettet $bildenr $filnavn<br/>");
 }
}


include("slutt.php");

?>