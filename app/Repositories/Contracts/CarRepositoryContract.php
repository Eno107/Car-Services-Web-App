<?php

namespace App\Repositories\Contracts;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

interface CarRepositoryContract extends BaseRepositoryContract
{

    /**
     * Get the user who owns this car.
     *
     * @return UserContract|null
     */
    public function user();


    /**
     * Get the make who owns this problem.
     *
     * @return MakeContract|null
     */
    public function make();

    /**
     * Get all appointments onwed by this car.
     * 
     * @return AppointmentConctract|null
     */
    public function appointments();


    /**
     * @param int $user_id
     * @return Builder|Model
     */
    public function ofUser(int $user_id);

    /**
     * @param int $user_id
     * @param int $id
     * @return Builder|Model
     */
    public function ofUserExcept(int $user_id, int $id);
}
