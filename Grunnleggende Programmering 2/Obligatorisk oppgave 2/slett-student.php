<?php

include("start.php");

?>

<script src="script.js"></script>

<h3>Slett student</h3>

<form method="post" action="" id="slettStudentSkjema" name="slettStudentSkjema" onSubmit="return bekreft()">Brukernavn <br/>

        <select name="brukernavn" id="brukernavn">
        <?php echo("<option value=''> Velg brukernavn </option>");
        include("dynamiskeFunksjoner.php"); listeboksVelgStudentBrukernavn (); ?>
        </select></br>

<input type="submit" value="Slett student" name="slettStudentKnapp" id="slettStudentKnapp" /> 
</form>


<?php

if (isset($_POST["slettStudentKnapp"])) {

    $brukernavn=$_POST["brukernavn"]; 

    if (!$brukernavn) {
        echo("Brukernavn er ikke valgt");
    }

    else {
    include("db-tilkobling.php");

    $sqlSetning = "DELETE FROM student WHERE brukernavn = '$brukernavn';";
    mysqli_query($db, $sqlSetning) or die ("Kan ikke gjøre sletting i databasen"); 

    echo("Følgende student er nå slettet $brukernavn <br/>");
 }
}


include("slutt.php");

?>