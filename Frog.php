<?php
require_once('animal.php');

class Frog extends animal
{
    public function jump()
    {
         echo "jump : hop hop";
    }
    public $legs =4;
}
?>



