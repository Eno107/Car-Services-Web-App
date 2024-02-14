<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Car;
use Illuminate\Http\Request;
use App\Http\Resources\CarResource;
use App\Repositories\Contracts\CarRepositoryContract;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class CarsController extends ApiController
{
    /**
     * @var CarRepositoryContract
     */
    private $carRepository;

    /**
     * @param CarRepositoryContract $carRepository
     */
    public function __construct(CarRepositoryContract $carRepository)
    {
        $this->carRepository = $carRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return AnonymousResourceCollection
     */
    public function index()
    {
        $cars = $this->carRepository
            ->with(['user', 'make'])
            ->where([])
            ->get();


        return CarResource::collection($cars);
    }

    /**
     * Display specified problem.
     */
    public function show(Car $car)
    {
        return new CarResource($car);
    }
}
