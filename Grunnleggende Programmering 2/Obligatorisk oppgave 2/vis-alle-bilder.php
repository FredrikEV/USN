<?php


include("start.php");
include("db-tilkobling.php");

$sqlSetning = "SELECT * FROM bilde ORDER BY dato;";
$sqlResultat = mysqli_query($db, $sqlSetning) or die ("Ikke mulig å hente fra database");
$antallRader = mysqli_num_rows($sqlResultat);

echo("<h3>Registrerte bilder</h3>"); 
echo("<table border=1");
echo("<tr><th align=left>Bildenr</th> <th align=left>Dato</th> <th align=left>Filnavn</th> <th align=left>Beskrivelse</th></tr>"); 

for ($r=1; $r<=$antallRader; $r++) {
    $rad = mysqli_fetch_array($sqlResultat);
    $bildenr = $rad["bildenr"];
    $dato = $rad["dato"];
    $filnavn = $rad["filnavn"];
    $beskrivelse = $rad["beskrivelse"];

    echo("<tr> <td> $bildenr </td> <td> $dato </td> <td> <a href='bilder/$filnavn' target='_blank'>$filnavn </a> </td> <td> $beskrivelse </td> </tr>");


}

echo("</table>");

include("slutt.php");

?>