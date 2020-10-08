<?php
   $tall1 = $_POST["tall1"];
   $tall2 = $_POST["tall2"];

    if ($tall1 < $tall2) {
        echo "Tall 1 er $tall1<br/>
              Tall 2 er $tall2<br/><br/>
              Tall 1 er mindre enn Tall 2";
    }
    elseif ($tall1 > $tall2) {
        echo "Tall 1 er $tall1<br/>
              Tall 2 er $tall2<br/><br/>
              Tall 1 er større enn Tall 2";
    }
    elseif ($tall1 == $tall2) {
        echo "Tall 1 er $tall1<br/>
              Tall 2 er $tall2<br/><br/>
              Tall 1 og Tall 2 er like store";
    }
    else {
        echo "Du har ikke valgt verdier";
    }
?>
