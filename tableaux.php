<?php

echo "<br>";
$infos = array("prenom" => "Moussa", "nom" => "Cammara", "age" => 20, "Adresse" => "Paris");

foreach ($infos as $key => $value) {
    echo $key ."========>";
    echo $value ."</br>";
}
?>