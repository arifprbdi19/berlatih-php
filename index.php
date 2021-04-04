<?php
    require('animal.php');
    require('Ape.php');
    require('Frog.php');
   
    $sheep = new Animal ("shaun");
    echo "Name : $sheep->name <br>";
    echo "Legs : $sheep->legs <br>";
    echo "Cold blooded : $sheep->cold_blooded <br>";
    echo "<br>";

    $kodok = new Frog ("buduk");
    echo "Name : $kodok->name <br>";
    echo "Legs : $kodok->legs <br>";
    echo "Cold blooded : $kodok->cold_blooded <br>";
    $kodok->jump();
    echo "<br><br>";


    $sungokong = new Ape ("kera sakti");
    echo "Name : $sungokong->name <br>";
    echo "Legs : $sungokong->legs <br>";
    echo "Cold blooded : $sungokong->cold_blooded <br>";
    $sungokong->yell();





?>