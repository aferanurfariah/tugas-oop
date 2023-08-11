<?php
    require_once 'animal.php';
    require_once 'frog.php';
    require_once 'ape.php';

    $sheep = new Animal("shaun");
    echo "Name : " . $sheep->getname() . "<br>";
    echo "legs : " . $sheep->getlegs() . "<br>";
    echo "cold blooded : " . $sheep->getcold_blooded() . "<br>";
    echo "<br>";

    $kodok = new Frog("buduk");
    echo "Name : " . $kodok->getname() . "<br>";
    echo "legs : " . $kodok->getlegs() . "<br>";
    echo "cold blooded : " . $kodok->getcold_blooded() . "<br>";
    echo "Jump : " . $kodok->jump() . "<br>";
    echo "<br>";

    $sungokong = new Ape("kera sakti");
    echo "Name : " . $sungokong->getname() . "<br>";
    echo "legs : " . $sungokong->getlegs() . "<br>";
    echo "cold blooded : " . $sungokong->getcold_blooded() . "<br>";
    echo "Yell : " . $sungokong->yell() . "<br>";
    echo "<br>";
?>