<?php

namespace App\Repositories\Eloquent;

use App\Models\Service;
use App\Repositories\Contracts\ServiceRepositoryContract;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class ServiceRepository extends BaseRepository implements ServiceRepositoryContract
{

    protected function model()
    {
        return Service::class;
    }

    /**
     * Get all makes associated with this service.
     * 
     * @return Collection
     */
    public function makes()
    {
        return $this->model->makes;
    }

    /**
     * Attach a make to this service.
     * 
     * @param int $makeId
     */
    public function attachMake(int $makeId)
    {
        $this->model->makes()->attach($makeId);
    }

    /**
     * Detach a make from this service.
     * 
     * @param int $makeId
     */
    public function detachMake(int $makeId)
    {
        $this->model->makes()->detach($makeId);
    }

    /**
     *  Get all categories associated with this service
     * 
     *  @return Collection
     */
    public function categories()
    {
        return $this->model->categories;
    }

    /**
     * Attach a category to this service.
     *
     * @param int $categoryId
     */
    public function attachCategory(int $categoryId)
    {
        $this->model->categories()->attach($categoryId);
    }

    /**
     * Detach a category from this service.
     *
     * @param int $categoryId
     */
    public function detachCategory(int $categoryId)
    {
        $this->model->categories()->detach($categoryId);
    }
}
