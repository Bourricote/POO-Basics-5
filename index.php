<?php
require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';
require_once 'Skateboard.php';

require_once 'HighWay.php';
require_once 'MotorWay.php';
require_once 'PedestrianWay.php';
require_once 'ResidentialWay.php';


$car = new Car('green', 4, 'electric');

$car->setParkBrake();

try {
    $car->start();
} catch (Exception $e) {
    echo $e->getMessage();
    $car->setParkBrake();
} finally {
    echo 'Ma voiture roule comme un donut </br>';
}
