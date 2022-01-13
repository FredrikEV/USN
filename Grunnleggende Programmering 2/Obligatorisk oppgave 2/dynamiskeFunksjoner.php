<?php

function listeboksVelgKlassekode () {

    include("db-tilkobling.php"); 

    $sqlSetning = "SELECT * FROM klasse ORDER BY klassekode;";
    $sqlResultat = mysqli_query($db, $sqlSetning) or die ("Ikke mulig å hente data"); 

    $antallRader = mysqli_num_rows($sqlResultat); 

    for ($r=1; $r<=$antallRader; $r++) {
        $rad = mysqli_fetch_array($sqlResultat);
        $klassekode = $rad["klassekode"]; 
        $klassenavn = $rad["klassenavn"]; 

        echo("<option value='$klassekode'> $klassekode: $klassenavn </option>");

    }


}
function listeboksKlassekodeMedValgtKode ($valgtKlassekode) {

    include("db-tilkobling.php"); 

    $sqlSetning = "SELECT * FROM klasse ORDER BY klassekode;";
    $sqlResultat = mysqli_query($db, $sqlSetning) or die ("Ikke mulig å hente data"); 

    $antallRader = mysqli_num_rows($sqlResultat); 

    for ($r=1; $r<=$antallRader; $r++) {
        $rad = mysqli_fetch_array($sqlResultat);
        $klassekode = $rad["klassekode"]; 
        $klassenavn = $rad["klassenavn"]; 

        if($klassekode == $valgtKlassekode) {
            echo("<option value='$klassekode' selected>$klassekode</option>");
        }
        else {
        echo("<option value='$klassekode'> $klassekode</option>");
        }
    }

}

function listeboksVelgBildenr () {

    include("db-tilkobling.php"); 

    $sqlSetning = "SELECT * FROM bilde ORDER BY bildenr;";
    $sqlResultat = mysqli_query($db, $sqlSetning) or die ("Ikke mulig å hente data");

    $antallRader = mysqli_num_rows($sqlResultat); 

    for ($r=1; $r<= $antallRader; $r++) {
        $rad = mysqli_fetch_array($sqlResultat);
        $bildenr = $rad["bildenr"];

        echo ("<option value='$bildenr'> $bildenr </option>"); 
    }
}

function listeBoksBildenrFilnavn() {
    include("db-tilkobling.php"); 

    $sqlSetning = "SELECT * FROM bilde ORDER BY bildenr;";
    $sqlResultat = mysqli_query($db, $sqlSetning) or die ("Ikke mulig å hente data");

    $antallRader = mysqli_num_rows($sqlResultat); 

    for ($r=1; $r<=$antallRader; $r++) {
        $rad = mysqli_fetch_array($sqlResultat);
        $bildenr = $rad["bildenr"];
        $filnavn = $rad["filnavn"]; 

        echo ("<option value='$bildenr;$filnavn'>$bildenr $filnavn</option>");
    }
}

function listeboksBildenrMedValgtKode ($valgtBildenr) {

    include("db-tilkobling.php"); 

    $sqlSetning = "SELECT * FROM bilde ORDER BY bildenr;";
    $sqlResultat = mysqli_query($db, $sqlSetning) or die ("Ikke mulig å hente data");

    $antallRader = mysqli_num_rows($sqlResultat); 

    for ($r=1; $r<= $antallRader; $r++) {
        $rad = mysqli_fetch_array($sqlResultat);
        $bildenr = $rad["bildenr"];

        if($bildenr == $valgtBildenr) {
        echo ("<option value='$bildenr' selected> $bildenr </option>"); 
        }
        else {
        echo ("<option value='$bildenr'> $bildenr </option>"); 
      }
    }
}

function listeboksVelgStudentBrukernavn () {

    include("db-tilkobling.php"); 

    $sqlSetning = "SELECT * FROM student ORDER BY brukernavn;";
    $sqlResultat = mysqli_query($db, $sqlSetning) or die ("Ikke mulig å hente data");

    $antallRader = mysqli_num_rows($sqlResultat); 

    for ($r=1; $r<= $antallRader; $r++) {
        $rad = mysqli_fetch_array($sqlResultat);
        $brukernavn = $rad["brukernavn"];

        echo ("<option value='$brukernavn'> $brukernavn </option>"); 
    }

}

function sjekkBrukernavnPassord($brukernavn, $passord) {

    include("db-tilkobling.php"); 

    $lovligBruker = true; 

    $sqlSetning ="SELECT * FROM bruker WHERE brukernavn='$brukernavn' and passord='$passord';";
    $sqlResultat = mysqli_query($db, $sqlSetning);

    if (!$sqlResultat) {
        $lovligBruker = false; 
    }
    else {
        $rad = mysqli_fetch_array($sqlResultat); 
        $lagretPassord = isset($rad["passord"]); 
        $lagretBrukernavn = isset($rad["brukernavn"]); 


        if($brukernavn != $lagretBrukernavn || $passord != $lagretPassord) {
            $lovligBruker = false; 
        }
    }

    return $lovligBruker; 

}


?>