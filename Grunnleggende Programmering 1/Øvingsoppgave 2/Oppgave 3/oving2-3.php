<?php
    $svar = $_POST["svar"];

        if (in_array($svar, array("j", "J", "ja", "JA", "Ja"))) {
            echo "Du er student"; // Svart ja på spørsmål
        }
        elseif (in_array($svar, array("n", "N", "nei", "NEI", "Nei"))) { 
            echo "Du er ikke student"; // Svart nei på spm 
        }
        elseif (!$svar) {
            echo "Du har ikke svart på spørsmålet"; // Ikke skrevet noe i feltet 
        }
        else {
            echo "Du har ikke tastet inn et gyldig svar"; // Ikke gyldig verdier
        }
    ?>
    