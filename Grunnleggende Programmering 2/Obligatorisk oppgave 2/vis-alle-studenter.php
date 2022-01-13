<?php


include("start.php");
include("db-tilkobling.php");

$sqlSetning = "SELECT * FROM student ORDER BY brukernavn;";
$sqlResultat = mysqli_query($db, $sqlSetning) or die ("Ikke mulig å hente fra database");
$antallRader = mysqli_num_rows($sqlResultat);

echo("<h3>Registrerte studenter</h3>"); 
echo("<table border=1");
echo("<tr><th align=left>Brukernavn</th> <th align=left>Fornavn</th> <th align=left>Etternavn</th> <th align=left>Klassekode</th> <th align=left>Bildenr</th></tr>"); 

for ($r=1; $r<=$antallRader; $r++) {
    $rad = mysqli_fetch_array($sqlResultat);
    $brukernavn = $rad["brukernavn"];
    $fornavn = $rad["fornavn"];
    $etternavn = $rad["etternavn"];
    $klassekode = $rad["klassekode"];
    $bildenr = $rad["bildenr"];

    echo("<tr> <td> $brukernavn </td> <td> $fornavn </td> <td> $etternavn </td> <td> $klassekode </td>  <td> $bildenr </td></tr>");

}

echo("</table>");

include("slutt.php");

?>

