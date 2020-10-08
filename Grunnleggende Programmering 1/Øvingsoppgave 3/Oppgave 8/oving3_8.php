<?php

    $tall1 = $_POST["tall1"];
    $tall2 = $_POST["tall2"];
    $tall3 = $_POST["tall3"];
    $tall4 = $_POST["tall4"];
    $tall5 = $_POST["tall5"];

    $tall = array($tall1, $tall2, $tall3, $tall4, $tall5); // Lagrer alle verdier i en array
    $reversert = array_reverse($tall); // Reverserer array over

    foreach ($tall as $verdi) { // Printer ut en av hver del av array som $verdi 
        echo "$verdi &nbsp;";
    }
    
    echo ("<br/>");

    foreach ($reversert as $verdi2) { // Printer ut en av hver i reversert array som $verdi2
        echo "$verdi2 &nbsp;";
    }

?>