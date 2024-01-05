<?php

namespace App\Http\Repository;

use App\Models\Car;
use App\Models\User;

class UserRepository
{

    public static function all(): User
    {
        return User::all();
    }

    public static function create(array $data)
    {
        return User::create($data);
    }

    public static function show(User $user): User
    {
        return User::first($user->id);
    }

    public static function update(User $user, array $data): User
    {
        User::update($user->id, $data);
        return User::first($user->id);
    }

    public static function delete(User $user): void
    {
        User::destroy($user->id);
    }

    public static function associateCar(User $user, Car $car): void
    {
        $user->cars()->attach($car->id);
    }

    public static function disassociateCar(User $user, Car $car): void
    {
        $user->cars()->detach($car->id);
    }
}
