<?php

namespace App\Repositories\Contracts;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

interface UserRepositoryContract extends BaseRepositoryContract
{
    /**
     * Get all problems owned by this user.
     *
     * @return Collection
     */
    public function problems();

    /**
     * Get all cars owned by this user
     * 
     * @return Collection
     */
    public function cars();

    /**
     * Get all comments owned by this user
     * 
     * @return Colleciton
     */
    public function comments();

    /**
     * Get all appointments owned by this user
     * 
     * @return Collection
     */
    public function appointments();
}
