<?php include "oving2_1.html";

     $svar = $_POST["spm1"];

      if ($svar == 9) {
        echo "<br/>Helt riktig! 3 x 3 = 9!"; /*Avgitt svar er korrekt*/
    } else {
        echo "<br/>Feil! 3 x 3 er ikke $svar"; /*Avgitt svar ikke korrekt*/
    }
?>