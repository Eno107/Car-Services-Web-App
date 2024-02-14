<?php

namespace App\Repositories\Eloquent;

use App\Models\Appointment;
use App\Repositories\Contracts\AppointmentRepositoryContract;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class AppointmentRepository extends BaseRepository implements AppointmentRepositoryContract
{
    protected function model()
    {
        return Appointment::class;
    }

    /**
     * Get the user who owns this appointment.
     *
     * @return UserContract|null
     */
    public function user()
    {
        return $this->model->user;
    }

    /**
     * Get the service who owns this appointment
     * 
     * @return ServiceContract|null
     */
    public function service()
    {
        return $this->model->service;
    }

    /**
     * Get the car who owns this appointment
     * 
     * @return CarContract|null 
     */
    public function car()
    {
        return $this->model->car;
    }

    /**
     * Get the appointments owned by a user.
     * 
     * @param int $user_id
     * @return Builder|Model
     */
    public function ofUser(int $user_id)
    {
        return $this->model->where('user_id', $user_id);
    }

    /**
     * Get the appointments owned by a user, excluding one appointment.
     * 
     * @param int $user_id
     * @param int $id
     * @return Builder|Model
     */
    public function ofUserExcept(int $user_id, int $id)
    {
        return $this->model->where('user_id', $user_id)->where('id', '!=', $id);
    }

    /**
     * Get the appointments owned by a service
     * 
     * @param int $service_id
     * @return Builder|Model
     */
    public function ofService(int $service_id)
    {
        return $this->model->where('service_id', $service_id);
    }

    /**
     * Get the appointments owned by a service, excluding one appointment
     * 
     * @param int $service_id
     * @param int $id
     * @return Builder|Model
     */
    public function ofServiceExcept(int $service_id, int $id)
    {
        return $this->model->where('service_id', $service_id)->where('id', '!=', $id);
    }


    /**
     * Get the appointments owned by a car
     * 
     * @param int $car_id
     * @return Builder|Model
     */
    public function ofCar(int $car_id)
    {
        return $this->model->where('car_id', $car_id);
    }


    /**
     * Get the appointments owned by a car, excluding one appointments
     * 
     * @param int $car_id
     * @param int $id
     * @return Builder|Model
     * 
     */
    public function ofCarExcept(int $car_id, int $id)
    {
        return $this->model->where('car_id', $car_id)->where('id', '!=', $id);
    }
}
