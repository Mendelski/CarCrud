<?php

namespace App\Http\Controllers;

use App\Http\Services\GeneralService;
use App\Http\Services\UserService;
use App\Models\Car;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(): JsonResponse
    {
        return response()->json(UserService::showAllUsers());
    }

    public function store(Request $request): JsonResponse
    {
        $data = $request->validate([
            'name' => ['required'],
            'email' => ['required', 'email', 'max:254'],
            'password' => ['required'],
        ]);

        return response()->json(UserService::createUser($data));
    }

    public function show(User $user): JsonResponse
    {
        return response()->json(UserService::showUser($user));
    }

    public function update(Request $request, User $user): JsonResponse
    {
        $data = $request->validate([
            'name' => ['required'],
            'email' => ['required', 'email', 'max:254'],
            'password' => ['required'],
        ]);
        $user = UserService::updateUser($user, $data);
        return response()->json(['user' => $user]);
    }

    public function destroy(User $user): JsonResponse
    {
        UserService::deleteUser($user);
        return GeneralService::returnOkJson();
    }

    public function associateCar(User $user, Car $car): JsonResponse
    {
        UserService::associateCar($user, $car);
        return GeneralService::returnOkJson();
    }

    public function disassociateCar(User $user, Car $car): JsonResponse
    {
        UserService::disassociateCar($user, $car);
        return GeneralService::returnOkJson();
    }

}
