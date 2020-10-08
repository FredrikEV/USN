<?php

    $navn = $_POST["navn"];

    $oppdeltNavn = explode(" ", $navn);
    $fornavn = $oppdeltNavn [0];
    $etternavn = $oppdeltNavn [1];

    echo "Fornavn er $fornavn.<br/>
    Etternavn er $etternavn."

?>

