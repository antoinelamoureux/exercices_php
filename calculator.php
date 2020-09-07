<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="POST">
<input type="text">
<?php
$numbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
for ($i = 0; $i < count($numbers); $i++) {
    echo "<input type=\"button\" value =\"$numbers[$i]\">";
}
?>
<input type="submit" value="calculer">
</form>
<?php



function add() {
 
}

?>
    
</body>
</html>