<?php
require_once('animal.php');

class Ape extends animal
{
    public function yell()
    {
        echo "yel : Auooo";
    }
    public $legs =2;
}
?>

