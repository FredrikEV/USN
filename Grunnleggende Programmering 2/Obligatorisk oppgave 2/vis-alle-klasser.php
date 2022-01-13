<?php


include("start.php");
include("db-tilkobling.php");

$sqlSetning = "SELECT * FROM klasse ORDER BY klassekode;";
$sqlResultat = mysqli_query($db, $sqlSetning) or die ("Ikke mulig å hente fra database");
$antallRader = mysqli_num_rows($sqlResultat);

echo("<h3>Registrerte klasser</h3>"); 
echo("<table border=1");
echo("<tr><th align=left>Klassekode</th> <th align=left>Klassenavn</th> <th align=left>Studiumkode</th> </tr>"); 

for ($r=1; $r<=$antallRader; $r++) {
    $rad = mysqli_fetch_array($sqlResultat);
    $klassekode = $rad["klassekode"];
    $klassenavn = $rad["klassenavn"];
    $studiumkode = $rad["studiumkode"];


    echo("<tr> <td> $klassekode </td> <td> $klassenavn </td> <td> $studiumkode </td> </tr>");


}

echo("</table>");

include("slutt.php");

?>
