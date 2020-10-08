<?php
    $gift = $_POST["gift"];
    $barn = $_POST["barn"];

       if (!$gift || !$barn) {
           echo "Du har ikke svart på spørsmålene";
       }
       elseif ($gift == "j" && $barn == "j") {
           echo "Du er gift og har barn";
       }
       elseif ($gift == "j" && $barn == "n") {
           echo "Du er gift men har ikke barn";
       }
       elseif ($gift == "n" && $barn == "j") {
           echo "Du er ikke gift men har barn";
       }
       elseif ($gift == "n" && $barn == "n") {
           echo "Du er ikke gift og har ikke barn";
       }
       else {
           echo "Du har ikke tastet inn et gyldig svar";
       }
    ?>
    