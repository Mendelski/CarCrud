<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class carController extends Controller
{
    public function index()
    {
        $this->authorize('viewAny', Car::class);
        return Car::all();
    }

    public function store(Request $request): Car
    {
        $this->authorize('create', Car::class);
        $data = $request->validate([
            'model' => ['required'],
            'color' => ['required'],
            'plates' => ['required'],
            'brand' => ['required'],
            'user_id' => ['required', 'integer'],
        ]);

        return Car::create($data);
    }

    public function show(Car $car): Car
    {
        $this->authorize('view', $car);

        return $car;
    }

    public function update(Request $request, Car $car): Car
    {
        $this->authorize('update', $car);

        $data = $request->validate([
            'model' => ['required'],
            'color' => ['required'],
            'plates' => ['required'],
            'brand' => ['required'],
            'user_id' => ['required', 'integer'],
        ]);

        $car->update($data);

        return $car;
    }

    public function destroy(Car $car): JsonResponse
    {
        $this->authorize('delete', $car);

        $car->delete();

        return response()->json();
    }
}
