<?php

$tall = $_POST["tall"];

if ($tall <=0) {
    print "Tallet du har tastet inn er ikke gylidg<br/>";
}

else {

 for ($x = 1; $x <= $tall; $x++) {
     echo "$x&nbsp;";
 }
}

?>
