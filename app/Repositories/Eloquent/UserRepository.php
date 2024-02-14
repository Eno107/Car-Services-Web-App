<?php

namespace App\Repositories\Eloquent;

use App\Models\User;
use App\Repositories\Contracts\UserRepositoryContract;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class UserRepository extends BaseRepository implements UserRepositoryContract
{

    protected function model()
    {
        return User::class;
    }

    /**
     * Get all problems owned by this user.
     *
     * @return Collection
     */
    public function problems()
    {
        return $this->model->problems;
    }

    /**
     * Get all cars owned by this user.
     * 
     * @return Collection
     */
    public function cars()
    {
        return $this->model->cars;
    }

    /**
     * Get all comments owned by this user
     * 
     * @return Collection 
     */
    public function comments()
    {
        return $this->model->comments;
    }

    /**
     * Get all appointments owned by this user
     * 
     * @return Collection
     */
    public function appointments()
    {
        return $this->model->appointments;
    }
}
