<?php

namespace App\Repositories\Contracts;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

interface ServiceRepositoryContract extends BaseRepositoryContract
{
    /**
     * Get all makes associated with this service.
     *
     * @return Collection
     */
    public function makes();

    /**
     * Attach a make to this service.
     *
     * @param int $makeId
     */
    public function attachMake(int $makeId);

    /**
     * Detach a make from this service.
     *
     * @param int $makeId
     */
    public function detachMake(int $makeId);

    /**
     * Get all categories associated with this service.
     *
     * @return Collection
     */
    public function categories();

    /**
     * Attach a category to this service.
     *
     * @param int $categoryId
     */
    public function attachCategory(int $categoryId);

    /**
     * Detach a category from this service.
     *
     * @param int $categoryId
     */
    public function detachCategory(int $categoryId);
}
