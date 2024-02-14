<?php

namespace App\Repositories\Eloquent;

use App\Models\Make;
use App\Repositories\Contracts\MakeRepositoryContract;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class MakeRepository extends BaseRepository implements MakeRepositoryContract
{

    protected function model()
    {
        return Make::class;
    }

    /**
     * Get all services associated with this make.
     *
     * @return Collection
     */
    public function services()
    {
        return $this->model->services;
    }
}
