<?php

namespace App\Http\Services;

use App\Repositories\Contracts\CarRepositoryContract;
use App\Support\Classes\ServiceResponse;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Exception;

class CarService
{
    /**
     * @var CarRepositoryContract
     */
    private static $carRepository;

    /**
     * @param CarRepositoryContract $carRepository
     */
    public function __construct(CarRepositoryContract $carRepository)
    {
        self::$carRepository = $carRepository;
    }

    /**
     * @param array $data
     * @return ServiceResponse
     */
    public static function store(array $data)
    {
        try {
            DB::beginTransaction();

            $data['make_id'] = $data['make'];
            unset($data['make']);
            $data['engine_size'] = $data['size'];
            unset($data['size']);

            $car = self::$carRepository->create(
                Arr::only($data, self::fields())
            );

            DB::commit();

            return new ServiceResponse(true, $car);
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('CarService::store Exception Error: ' . $e->getMessage());
            Log::error($e->getTraceAsString());
            return new ServiceResponse(false);
        }
    }

    /**
     * @param int $id
     * @param array $data
     * @return ServiceResponse
     */
    public static function update(int $id, array $data)
    {
        try {
            DB::beginTransaction();

            $car = self::$carRepository->findOrFail($id);

            $data['make_id'] = $data['make'];
            unset($data['make']);
            $data['engine_size'] = $data['size'];
            unset($data['size']);


            $car->update(
                Arr::only($data, self::fields())
            );

            DB::commit();



            return new ServiceResponse(true, $car);
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('CarService::update Exception Error: ' . $e->getMessage());
            Log::error($e->getTraceAsString());
            return new ServiceResponse(false);
        }
    }


    public static function delete(int $id)
    {
        try {
            DB::beginTransaction();

            $car = self::$carRepository->findOrFail($id);

            $car->delete();

            DB::commit();

            return new ServiceResponse(true, $car);
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('CarService::update Exception Error: ' . $e->getMessage());
            Log::error($e->getTraceAsString());
            return new ServiceResponse(false);
        }
    }

    /**
     * @return array
     */
    public static function fields()
    {
        return [
            'engine_size',
            'make_id',
            'user_id',
            'year',
            'mileage'
        ];
    }
}
