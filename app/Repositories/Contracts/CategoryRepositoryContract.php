<?php

namespace App\Repositories\Contracts;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

interface CategoryRepositoryContract extends BaseRepositoryContract
{
    /**
     * Get all services associated with this category.
     *
     * @return Collection
     */
    public function services();

    /**
     * Get all problems associated with this category.
     *
     * @return Collection
     */
    public function problems();
}
