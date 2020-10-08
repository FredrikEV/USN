<?php
    $tall1 = $_POST["tall1"];
    $tall2 = $_POST["tall2"];

    $sum = $tall1 + $tall2; 
    $differanse = $tall1 - $tall2;
    $produkt = $tall1 * $tall2; 
    $kvotient = $tall1 / $tall2;

    echo "Summen av tallene er $sum, Differansen er $differanse, Produktet er $produkt og Kvotienten er $kvotient";

?>