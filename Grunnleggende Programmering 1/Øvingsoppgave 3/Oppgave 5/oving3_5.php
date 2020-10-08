<?php

    $sum = 0;

    for($x = 1; $x <= 10; $x++) {

        $sum = $sum + $x;
    }
    $gjennomsnitt = $sum / 10; 

    echo "Summen er $sum<br/>
    Og gjennomsnittet er $gjennomsnitt";

?>