<?php
    $svar = $_POST["svar"];

        if ($svar == "j") {  
            echo "Du er student"; /* Svart ja på spørsmålet*/
        }
        elseif ($svar == "n") {
            echo "Du er ikke student"; /* Svart nei på spørsmålet */
        }
        elseif (!$svar) {
            echo "Du har ikke svart på spørsmålet"; /* Ikke skrevet noe i svarfeltet*/ 
        }
        else {
            echo "Du har ikke tastet inn et gyldig svar"; /* Ikke tastet gyldige verdier i svarfeltet*/
        }
?>


/*Til oppgave 3: https://stackoverflow.com/questions/5593512/php-if-statement-with-multiple-conditions/5593568 */