<?php
require_once("animals.php");
class Ape extends animal
{
    public $legs = 4;

    public function jump($jump)
    {
        return "Jump: hop hop";
    }
}
