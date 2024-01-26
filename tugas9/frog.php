<?php
require_once("animals.php");
class Frog extends animal
{
    public $legs = 4;

    public function yell($yell)
    {
        return "Yell: auooo";
    }
}
