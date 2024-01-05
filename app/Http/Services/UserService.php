<?php

namespace App\Http\Services;

use App\Http\Repository\UserRepository;
use App\Models\Car;
use App\Models\User;

class UserService
{

    public static function showAllUsers(): User
    {
        return UserRepository::all();

    }

    public static function createUser(array $data)
    {
        return UserRepository::create($data);
    }

    public static function showUser(User $user)
    {
        return UserRepository::show($user);
    }

    public static function updateUser(User $user, array $data): User
    {
        return UserRepository::update($user, $data);

    }

    public static function deleteUser(User $user): void
    {
        UserRepository::delete($user);
    }

    public static function associateCar(User $user, Car $car): void
    {
        UserRepository::associateCar($user, $car);
    }

    public static function disassociateCar(User $user, Car $car)
    {
        UserRepository::disassociateCar($user, $car);
    }
}
