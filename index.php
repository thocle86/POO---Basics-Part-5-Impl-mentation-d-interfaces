<?php

require "Car.php";
require "Bicycle.php";
require "Skateboard.php";

$car = new Car("red", 4, "diesel");
$car->switchOn();
echo $car;
var_dump($car);

$bicycle = new Bicycle("green", 2);
$bicycle->switchOn();
echo $bicycle;

$bicycle->forward();
$bicycle->switchOn();
var_dump($bicycle);
