<?php
require('../vendor/autoload.php');

# Essayer d'utiliser votre factory ici

use App\Factory\VehiculeFactory;

$bicycle = VehiculeFactory::create('bicycle', 0.01, 'human');
$car = VehiculeFactory::create('car', 0.1, 'electric');
$truck = VehiculeFactory::create('truck', 0.3, 'diesel');

var_dump($bicycle);
var_dump($car);
var_dump($truck);

$bicycle = VehiculeFactory::createByDistanceAndWeight(10, 10, 0.01, 'human');
$car = VehiculeFactory::createByDistanceAndWeight(10, 199, 0.1, 'electric');
$truck = VehiculeFactory::createByDistanceAndWeight(10, 1000, 0.3, 'diesel');

var_dump($bicycle);
var_dump($car);
var_dump($truck);
