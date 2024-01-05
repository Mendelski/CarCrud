<?php

namespace App\Http\Services;

use App\Http\Repository\CrudRepository;
use App\Models\Car;
use App\Models\User;

class UserService
{

    public static function showAllUsers(): User
    {
        return CrudRepository::all();

    }

    public static function createUser(array $data)
    {
        return CrudRepository::create($data);
    }

    public static function showUser(User $user)
    {
        return CrudRepository::show($user);
    }

    public static function updateUser(User $user, array $data): User
    {
        return CrudRepository::update($user, $data);

    }

    public static function deleteUser(User $user): void
    {
        CrudRepository::delete($user);
    }

    public static function associateCar(User $user, Car $car): void
    {
        CrudRepository::associateCar($user, $car);
    }

    public static function disassociateCar(User $user, Car $car)
    {
        CrudRepository::disassociateCar($user, $car);
    }
}
