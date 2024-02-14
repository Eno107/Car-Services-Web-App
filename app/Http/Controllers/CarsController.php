<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Make;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Services\CarService;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\CarStoreRequest;
use App\Repositories\Contracts\CarRepositoryContract;

class CarsController extends Controller
{
    /**
     * @var CarRepositoryContract
     */
    private $carRepository;

    /**
     * Create a new controller instance.
     *
     * @param CarRepositoryContract $carRepository
     */
    public function __construct(CarRepositoryContract $carRepository)
    {
        $this->carRepository = $carRepository;
    }

    /**
     * Store a new car record.
     *
     * @param CarStoreRequest $request
     * @return RedirectResponse
     */
    public function store(CarStoreRequest $request)
    {
        $data = $request->validated();
        $data['user_id'] = auth()->id();
        $response = CarService::store($data);

        if (!$response->success()) {
            return response()->json(null, 400);
        }

        session()->flash('success', 'Your car has been added');

        return back();
    }

    /**
     * Update an existing car record.
     *
     * @param CarStoreRequest $request
     * @param User $user
     * @param Car $car
     * @return RedirectResponse
     */
    public function update(CarStoreRequest $request, User $user, Car $car)
    {
        $data = $request->validated();
        $response = CarService::update($car->id, $data);

        if (!$response->success()) {
            return response()->json(null, 400);
        }

        session()->flash('success', 'Your car has been updated');

        return back();
    }

    /**
     * Delete a car record.
     *
     * @param User $user
     * @param Car $car
     * @return  RedirectResponse
     */
    public function delete(User $user, Car $car)
    {
        $response = CarService::delete($car->id);

        if (!$response->success()) {
            return response()->json(null, 400);
        }

        session()->flash('success', 'Your car has been deleted');

        return redirect('/' . Auth::user()->name . '/cars');
    }

    /**
     * Display the details of a car.
     *
     * @param User $user
     * @param Car $car
     * @return View
     */
    public function show(User $user, Car $car)
    {
        return view('cars.show', ['makes' => Make::all(), 'car' => $car]);
    }
}
