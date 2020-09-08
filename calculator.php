<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="POST" action="calculator.php">
<input type="text">
<?php
$numbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
$signs = array('+', '-', '*', '-', '/', '%');
$number1; 
$number2; 

for ($i = 0; $i < count($numbers); $i++) {
    echo "<input name=\"number\" type=\"submit\" value =\"$numbers[$i]\">";
}
for ($i = 0; $i < count($signs); $i++) {
    echo "<input name=\"sign\" type=\"submit\" value =\"$signs[$i]\">";
}

?>
<input type="submit" name="submit" value="=">
</form>
<?php
if (isset($_POST['number'])) {
var_dump($_POST['number']);
$number1 = $_POST['number']
}

if (isset($_POST['sign'])) {
    var_dump($_POST['sign']);
    }

function add($number1, $number2) {
    $resultat = $number1 + $number2; 
    return $resultat;
}

function substact($number1, $number2) {
    $resultat = $number1 - $number2;
    return $resultat;
}

function multiply($number1, $number2) {
    $resultat = $number1 * $number2;
    return $resultat;
}

function divide($number1, $number2) {
    $resultat = $number1 / $number2;
    return $resultat;
}

function modulo($number1, $number2) {
    $resultat = $number1 % $number2;
    return $resultat;
}

$number1 = 5;
$number2 = 2;

?>
    
</body>
</html>