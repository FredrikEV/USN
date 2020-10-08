<?php
   $tall1 = $_POST["tall1"];
   $tall2 = $_POST["tall2"];
   $tall3 = $_POST["tall3"];
   
   echo ("Tall 1 er $tall1<br/> 
          Tall 2 er $tall2<br/>
          Tall 3 er $tall3<br/><br/>");       // Skrive ut alle 3 tall 

        if ($tall1 < $tall2) {
            echo "Tall 1 er mindre enn Tall 2<br/>";
        }
        elseif ($tall1 > $tall2) {
            echo "Tall 1 er større enn Tall 2<br/>";
        }
        elseif ($tall1 == $tall2) {
            echo "Tall 1 og Tall 2 er like store<br/>";
        } // Sammeligner tall 1 og tall 2 


        if ($tall1 < $tall3) {
            echo "Tall 1 er mindre enn Tall 3<br/>";
        }
        elseif ($tall1 > $tall3) {
            echo "Tall 1 er større enn Tall 3<br/>";
        }
        elseif ($tall1 == $tall3) {
            echo "Tall 1 og Tall 3 er like store<br/>";
        } // Sammenligner tall 1 og tall 3 


        if ($tall2 < $tall3) {
            echo "Tall 2 er mindre enn Tall 3<br/>";
        }
        elseif ($tall2 > $tall3) {
            echo "Tall 2 er større enn Tall 3<br/>";
        }
        elseif ($tall2 == $tall3) {
            echo "Tall 2 og Tall 3 er like store<br/>";
        } // Sammenligner tall 2 og tall 3 


        else {
            echo "Du har ikke valgt verdier<br/>";
        }

 ?>