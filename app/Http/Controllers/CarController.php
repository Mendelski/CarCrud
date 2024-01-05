<?php

namespace App\Http\Controllers;

use App\Http\Services\CarService;
use App\Http\Services\GeneralService;
use App\Models\Car;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index(): JsonResponse
    {
        $this->authorize('viewAny', Car::class);
        $cars = CarService::showAllCars();

        return response()->json(['cars' => $cars]);
    }

    public function store(Request $request): JsonResponse
    {
        $this->authorize('create', Car::class);
        $data = $request->validate([
            'model' => ['required'],
            'color' => ['required'],
            'plates' => ['required'],
            'brand' => ['required'],
            'user_id' => ['required', 'integer'],
        ]);

        return response()->json(['car' => CarService::createCar($data)]);
    }

    public function show(Car $car): JsonResponse
    {
        $this->authorize('view', $car);

        return response()->json(['car' => $car]);
    }

    public function update(Request $request, Car $car): JsonResponse
    {
        $this->authorize('update', $car);

        $data = $request->validate([
            'model' => ['required'],
            'color' => ['required'],
            'plates' => ['required'],
            'brand' => ['required'],
            'user_id' => ['required', 'integer'],
        ]);

        return response()->json(['car' => CarService::updateCar($car, $data)]);

    }

    public function destroy(Car $car): JsonResponse
    {
        $this->authorize('delete', $car);
        CarService::deleteCar($car);
        return GeneralService::returnOkJson();
    }
}
