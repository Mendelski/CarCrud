<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return User::all();
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => ['required'],
            'email' => ['required', 'email', 'max:254'],
            'password' => ['required'],
        ]);

        return User::create($data);
    }

    public function show(User $users): User
    {
        return $users;
    }

    public function update(Request $request, User $users): User
    {
        $data = $request->validate([
            'name' => ['required'],
            'email' => ['required', 'email', 'max:254'],
            'password' => ['required'],
        ]);

        $users->update($data);

        return $users;
    }

    public function destroy(User $users): JsonResponse
    {
        $users->delete();

        return response()->json();
    }
}
