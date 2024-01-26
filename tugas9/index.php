<?php

require("animals.php");
require("frog.php");
require("ape.php");

echo "<h2>Latian OOP</h2>";

$sheep = new Animal("shaun");

echo $sheep->name . "<br>"; 
echo $sheep->legs . "<br>";
echo $sheep->cold_blooded . "<br>"; 

$sungokong = new Ape("kera sakti");
$sungokong->yell(); // "Auooo"

$kodok = new Frog("buduk");
$kodok->jump() ; // "hop hop"
