<?php


//Php strict mode
declare(static_types=1);

/*
//php built it function
print_r("hello");
var_dump("hello");

$word = "OSTAD Laravel";
$wordLength = strlen($word);
echo $wordLength;

//User Define Function
function sum(){
    $num1 = 10;
    $num2 = 20;
    echo $num1 + $num2;
}
sum();
sum();
sum();



//Function Params
function sum($x,$y){
    $num1 = $x;
    $num2 = $y;
    echo $num1+$num2. "</br>";
}
sum(2,3);
sum(4,5);
sum(100,300);



//Function default or optional Params

function sum($x,$y=5){
    $num1 = $x;
    $num2 = $y;
    echo $num1+$num2. "</br>";
}
sum(2,10);



//Function Params Multiple Type Hinting

function sum(int|float|string $age){
   echo $age;
}
sum("4.5");

//Function Params Null Type Hinting

function sum(?string $age){
    echo $age;
 }
 sum("4.5");
 sum(null);


 //Variadic Function (Spread operator)

 function worldCountryList(...$country){
    print_r($country);
 }

 worldCountryList("Bangladesh","India","Canada");



//Annonymous Function
(function (){
    echo "Hello Annonymous";
}
)();



 //Function return (যা রিটার্ন করে তাহার সমান হয়ে যায় mane abong gune)
 function addTwoNumber (){
    return 40;
 }
 echo addTwoNumber()+50;



 //Function Return Type > int, float, boolean, string, null
function addTwoNumber():string{
    return false;
}

  */

//Function Multiple Return Type | Union Retrun Type
function demo():int|float|bool{
    return 50;
}
