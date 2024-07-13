<?php
//Function default or optional Params

function sum($x,$y=5){
    $num1 = $x;
    $num2 = $y;
    echo $num1+$num2. "</br>";
}
sum(2,10);