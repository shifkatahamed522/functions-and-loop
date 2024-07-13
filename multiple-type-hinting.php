<?php
//Function Params Multiple Type Hinting

function sum(int|float|string $age){
    echo $age;
 }
 sum("4.5");