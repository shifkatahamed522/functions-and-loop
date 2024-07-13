<?php
//Function Params Null Type Hinting

function sum(?string $age){
    echo $age;
 }
 sum("4.5");
 sum(null);