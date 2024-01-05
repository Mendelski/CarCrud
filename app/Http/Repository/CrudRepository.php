<?php

namespace App\Http\Repository;

use App\Models\Car;
use App\Models\User;

class CrudRepository
{

    public static function all(User|Car $model): array
    {
        return $model->all();
    }

    public static function create(User|Car $model, array $data): User|Car
    {
        $model->create($data);
        return $model->refresh();
    }

    public static function show(User|Car $model): User|Car
    {
        return $model->refresh();
    }

    public static function update(User|Car $model, array $data): User|Car
    {
        $model->update($model->id, $data);
        return $model->refresh();
    }

    public static function delete(User|Car $model): void
    {
        if ($model instanceof User) {
            $model->cars()->detach();
        }
        $model->delete();
    }

    public static function associateCar(User|Car $model, Car $car): void
    {
        $model->cars()->attach($car->id);
    }

    public static function disassociateCar(User|Car $model, Car $car): void
    {
        $model->cars()->detach($car->id);
    }
}
