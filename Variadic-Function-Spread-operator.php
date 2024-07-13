<?php
 //Variadic Function (Spread operator)

 function worldCountryList(...$country){
    print_r($country);
 }

 worldCountryList("Bangladesh","India","Canada");