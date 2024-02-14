<?php

namespace App\Repositories\Contracts;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

interface MakeRepositoryContract extends BaseRepositoryContract
{
    /**
     * Get all services associated with this make.
     *
     * @return Collection
     */
    public function services();
}
