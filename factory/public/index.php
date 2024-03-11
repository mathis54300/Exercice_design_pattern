<?php
require('../vendor/autoload.php');

# Essayer d'utiliser votre factory ici

use App\Factory\VehiculeFactory;

$vehicule = VehiculeFactory::createVehicule('bicycle');

echo $vehicule->getCostPerKm() . PHP_EOL;
echo $vehicule->getFuelType() . PHP_EOL;
echo get_class($vehicule) . PHP_EOL;

echo "-------------------" . PHP_EOL;
$vehicule = (new App\Factory\VehiculeFactory)->createVehiculeForTransport(10, 10);
echo $vehicule->getCostPerKm() . PHP_EOL;
echo $vehicule->getFuelType() . PHP_EOL;
echo get_class($vehicule) . PHP_EOL;

$vehicule = (new App\Factory\VehiculeFactory)->createVehiculeForTransport(10, 100);
echo $vehicule->getCostPerKm() . PHP_EOL;
echo $vehicule->getFuelType() . PHP_EOL;
echo get_class($vehicule) . PHP_EOL;

$vehicule = (new App\Factory\VehiculeFactory)->createVehiculeForTransport(100, 100);
echo $vehicule->getCostPerKm() . PHP_EOL;
echo $vehicule->getFuelType() . PHP_EOL;
echo get_class($vehicule) . PHP_EOL;

$vehicule = (new App\Factory\VehiculeFactory)->createVehiculeForTransport(100, 1000);
echo $vehicule->getCostPerKm() . PHP_EOL;
echo $vehicule->getFuelType() . PHP_EOL;
echo get_class($vehicule) . PHP_EOL;