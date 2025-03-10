<?php

namespace App\Factory;

use App\Entity\Bicycle;
use App\Entity\Car;
use App\Entity\Truck;

class VehiculeFactory
{
    public static function create($type, $costPerKm, $fuelType)
    {
        switch ($type) {
            case 'bicycle':
                return new Bicycle($costPerKm, $fuelType);
            case 'car':
                return new Car($costPerKm, $fuelType);
            case 'truck':
                return new Truck($costPerKm, $fuelType);
            default:
                throw new \Exception('Unknown vehicle type');
        }
    }

    public static function createByDistanceAndWeight($distance, $weight, $costPerKm, $fuelType)
    {
        if ($distance < 20 && $weight < 20) {
            return new Bicycle($costPerKm, $fuelType);
        } elseif ($weight < 200) {
            return new Car($costPerKm, $fuelType);
        } else {
            return new Truck($costPerKm, $fuelType);
        }
    }
}
