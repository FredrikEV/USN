<?php
   $tall1 = $_POST["tall1"];
   $tall2 = $_POST["tall2"];
   $tall3 = $_POST["tall3"];

    if ($tall3 == 1) {

        $resultat = $tall1 + $tall2;

        echo ("Tall 1 er $tall1<br/>
               Tall 2 er $tall2 <br/><br/>
               Regneoperasjonen er Addisjon<br/>
               Resultatet er $resultat ");
    }
    
    elseif ($tall3 == 2) {

        $resultat = $tall1 - $tall2;

        echo ("Tall 1 er $tall1<br/>
               Tall 2 er $tall2 <br/><br/>
               Regneoperasjonen er Subtraksjon<br/>
               Resultatet er $resultat ");
    }
    
    elseif ($tall3 == 3) {

        $resultat = $tall1 * $tall2;

        echo ("Tall 1 er $tall1<br/>
               Tall 2 er $tall2 <br/><br/>
               Regneoperasjonen er Multiplikasjon<br/>
               Resultatet er $resultat ");
    }
    
    elseif ($tall3 == 4) {

        $resultat = $tall1 / $tall2;

        echo ("Tall 1 er $tall1<br/>
               Tall 2 er $tall2 <br/><br/>
               Regneoperasjonen er Divisjon<br/>
               Resultatet er $resultat ");
    }
    else {
        echo "Du har ikke valgt verdier";
    }

?>

