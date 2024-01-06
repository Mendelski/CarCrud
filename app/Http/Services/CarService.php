<?php

namespace App\Http\Services;

use App\Http\Repository\CrudRepository;
use App\Models\Car;

class CarService
{

    public static function showAllCars(): array
    {
        dump('d2');
        $model = Car::all();
        dd($model);
//        return CrudRepository::all($model);
    }

    public static function createCar(array $data): Car
    {
        $model = new Car();
        return CrudRepository::create($model, $data);
    }

    public static function showCar(Car $car): Car
    {
        return CrudRepository::show($car);
    }

    public static function updateCar(Car $car, array $data): Car
    {
        return CrudRepository::update($car, $data);
    }

    public static function deleteCar(Car $car): void
    {
        CrudRepository::delete($car);
    }

}
