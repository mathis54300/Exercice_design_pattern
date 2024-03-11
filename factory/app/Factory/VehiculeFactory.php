<?php

namespace App\Factory;

use App\Entity\Bicycle;
use App\Entity\Car;
use App\Entity\Truck;
class VehiculeFactory
{

    public static function createVehicule($type): Bicycle|Truck|Car
    {
        switch ($type) {
            case 'bicycle':
                return new Bicycle(0.1, 'human');
            case 'car':
                return new Car(0.5, 'gasoline');
            case 'truck':
                return new Truck(1, 'diesel');
            default:
                throw new \InvalidArgumentException('Vehicule type not found');
        }
    }

    public function createVehiculeForTransport($distance, $weight): Bicycle|Truck|Car
    {
        if ($distance < 20 && $weight < 20) {
            return new Bicycle(0.1, 'human');
        } elseif ($weight > 200) {
            return new Truck(1, 'diesel');
        }
        return new Car(0.5, 'gasoline');

    }

}