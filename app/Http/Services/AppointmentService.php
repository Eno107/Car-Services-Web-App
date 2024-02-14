<?php

namespace App\Http\Services;

use App\Repositories\Contracts\AppointmentRepositoryContract;
use App\Support\Classes\ServiceResponse;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Exception;

class AppointmentService
{
    /**
     * @var AppointmentRepositoryContract
     */
    private static $appointmentRepository;

    /**
     * @param AppointmentRepositoryContract $appointmentRepository
     */
    public function __construct(AppointmentRepositoryContract $appointmentRepository)
    {
        self::$appointmentRepository = $appointmentRepository;
    }

    /**
     * @param array $data
     * @return ServiceResponse
     */
    public static function store(array $data)
    {
        try {
            DB::beginTransaction();

            if ($data["car_id"] === "no_car")
                $data["car_id"] = null;


            $formattedDate = \Carbon\Carbon::createFromFormat('m/d/Y', $data['date'])->format('Y-m-d');
            $data['date'] = $formattedDate;

            $appointment = self::$appointmentRepository->create(
                Arr::only($data, self::fields())
            );

            DB::commit();

            return new ServiceResponse(true, $appointment);
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('AppointmentService::store Exception Error: ' . $e->getMessage());
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

            $appointment = self::$appointmentRepository->findOrFail($id);

            $appointment->update(
                Arr::only($data, self::fields())
            );

            DB::commit();

            return new ServiceResponse(true, $appointment);
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('AppointmentService::update Exception Error: ' . $e->getMessage());
            Log::error($e->getTraceAsString());
            return new ServiceResponse(false);
        }
    }


    public static function delete(int $id)
    {
        try {
            DB::beginTransaction();


            $appointment = self::$appointmentRepository->findOrFail($id);

            $appointment->delete();

            DB::commit();

            return new ServiceResponse(true, $appointment);
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('AppointmentService::update Exception Error: ' . $e->getMessage());
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
            'service_id',
            'car_id',
            'date',
            'user_id',
        ];
    }
}
