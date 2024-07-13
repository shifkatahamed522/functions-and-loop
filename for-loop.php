<?php

//For Loop (Entry controll Loop)

// for($i=0;$i<=10;$i=$i+1){
//     echo $i;
//     echo PHP_EOL;
// }

for($i=1; $i<10; $i=$i+1){
    // echo $i;
    echo PHP_EOL;
    for($j=0; $j<$i; $j=$j+1){
        echo "*";
    }
}