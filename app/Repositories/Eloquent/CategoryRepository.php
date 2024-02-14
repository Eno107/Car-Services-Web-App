<?php

namespace App\Repositories\Eloquent;

use App\Models\Category;
use App\Repositories\Contracts\CategoryRepositoryContract;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class CategoryRepository extends BaseRepository implements CategoryRepositoryContract
{

    protected function model()
    {
        return Category::class;
    }

    /**
     * Get all services associated with this category.
     *
     * @return Collection
     */
    public function services()
    {
        return $this->model->services;
    }

    /**
     * Get all problems associated with this category.
     *
     * @return Collection
     */
    public function problems()
    {
        return $this->model->problems;
    }
}
