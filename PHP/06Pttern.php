<?php


for ($i=0; $i < 10 ; $i++) { 
    // echo "i variable data".$i;
    for ($j=0; $j <= $i ; $j++) { 
        // echo "J variable data".$j;
        // echo " * ";
        if ($j>3) {
            echo " A ";
        }else{
            echo " B ";
        }
    }
    echo "<br>";
}


?>