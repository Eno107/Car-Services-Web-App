<?php

namespace App\Repositories\Eloquent;

use App\Models\Car;
use App\Repositories\Contracts\CarRepositoryContract;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class CarRepository extends BaseRepository implements CarRepositoryContract
{
    protected function model()
    {
        return Car::class;
    }

    /**
     * Get the make who owns this car.
     *
     * @return MakeContract|null
     */
    public function make()
    {
        return $this->model->make;
    }

    /**
     * Get the user who owns this car.
     *
     * @return UserContract|null
     */
    public function user()
    {
        return $this->model->user;
    }

    /**
     * Get all appointments owned by this car
     * 
     * @return AppointmentContract|null 
     */
    public function appointments()
    {
        return $this->model->appointments;
    }

    /**
     * Get the cars owned by a user.
     * 
     * @param int $user_id
     * @return Builder|Model
     */
    public function ofUser(int $user_id)
    {
        return $this->model->where('user_id', $user_id);
    }

    /**
     * Get the cars owned by a user, excluding one car.
     * 
     * @param int $user_id
     * @param int $id
     * @return Builder|Model
     */
    public function ofUserExcept(int $user_id, int $id)
    {
        return $this->model->where('user_id', $user_id)->where('id', '!=', $id);
    }
}
