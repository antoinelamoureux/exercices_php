<?php

function addition($number1, $number2) {
    $resultat = $number1 + $number2; 
    return $resultat;
}

function soustraction($number1, $number2) {
    $resultat = $number1 - $number2;
    return $resultat;
}

function multiplication($number1, $number2) {
    $resultat = $number1 * $number2;
    return $resultat;
}

function division($number1, $number2) {
    $resultat = $number1 / $number2;
    return $resultat;
}

function modulo($number1, $number2) {
    $resultat = $number1 % $number2;
    return $resultat;
}

$number1 = 5;
$number2 = 2;

echo addition($number1, $number2); 
echo soustraction($number1, $number2); 
echo multiplication($number1, $number2); 
echo division($number1, $number2); 
echo modulo($number1, $number2); 

?>
